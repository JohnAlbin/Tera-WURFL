<?php
require_once('TeraWurflDatabase_MySQL5.php');
/**
 * Tera_WURFL - PHP MySQL driven WURFL
 *
 * Tera-WURFL was written by Steve Kamerman, and is based on the
 * Java WURFL Evolution package by Luca Passani and WURFL PHP Tools by Andrea Trassati.
 * This version uses a database to store the entire WURFL file, multiple patch
 * files, and a persistent caching mechanism to provide extreme performance increases.
 *
 * @package TeraWurflDatabase
 * @author Steve Kamerman <stevekamerman AT gmail.com>
 * @license http://www.mozilla.org/MPL/ MPL Vesion 1.1
 */
/**
 * Provides connectivity from Tera-WURFL to MySQL 5 
 * Utilizing a Memcache caching layer instead of the database.
 * Allows for reads from a read-only database and not needing access
 * to a write database in a production environment.
 *
 * @package TeraWurflDatabase
 * @see TeraWurflDatabase
 * @see TeraWurflDatabase_MySQL5_NestedSet
 * @see TeraWurflDatabase_MySQL5_Profiling
 */
class TeraWurflDatabase_MySQL5_Memcache extends TeraWurflDatabase_MySQL5{

    protected $cacheCon;

    // Cache Keys and Prefixes. If this needs to be configurable we can change them here
    protected static $CACHE_KEY_AGENT_CACHE_PREFIX;
    protected static $CACHE_KEY_AGENT_KEY_LIST;
    protected static $CACHE_KEY_TEMP_AGENT_KEY_LIST;

    public function __construct(){
        $this->defineCacheKeys();
        parent::__construct();
    }

    //set up the cache keys
    protected function defineCacheKeys()
    {
        self::$CACHE_KEY_AGENT_CACHE_PREFIX = TeraWurflConfig::$TABLE_PREFIX.'Cache_';
        self::$CACHE_KEY_AGENT_KEY_LIST = TeraWurflConfig::$TABLE_PREFIX.'CacheKeyList';
        self::$CACHE_KEY_TEMP_AGENT_KEY_LIST = TeraWurflConfig::$TABLE_PREFIX.'TempCacheKeyList';
    }

    // Cache Table Functions

    // should return (bool)false or the device array
    // Retrieves the key from the cache, on failure 
    // fails back to the DB which then recreates the cache entry. 
    // md5'd keys might make this a different hash later
    public function getDeviceFromCache($userAgent){
        $key = TeraWurflConfig::$TABLE_PREFIX.'Cache_'.md5($userAgent);
        $res = $this->cacheCon->get($key);
        if ($res === false){
            return false;
        }
        return unserialize($res);
    }
    public function saveDeviceInCache($userAgent,&$device){
        if (strlen($userAgent) == 0){
            return true;
        }
        $ua = $this->cachePrep($userAgent);
        $packed_device = $this->cachePrep(serialize($device));
        $key = self::$CACHE_KEY_AGENT_CACHE_PREFIX.md5($ua);

        //Add the key to the list so we know that we've cache it.
        //Due to append not working properly we have to pull the list and add to it.
        try {
            $this->numQueries++;
            $cacheList = unserialize($this->cacheCon->get(self::$CACHE_KEY_AGENT_KEY_LIST));
            if (!is_array($cacheList)){
                $cacheList = array();
            }
            $cacheList[] = $userAgent;
            //Verify we only have one entry in that list.
            //Array Unique is faster then checking for it then adding it.
            $cacheList = array_unique($cacheList);
            $this->numQueries++;
            $this->cacheCon->set(self::$CACHE_KEY_AGENT_KEY_LIST, serialize($cacheList), TeraWurflConfig::$CACHE_EXPIRE);
            $this->numQueries++;
            $this->cacheCon->set($key, $packed_device, TeraWurflConfig::$CACHE_EXPIRE);
        } catch (Exception $e){
            $e = null;
            return false;
        }
        return true;
    }
    public function createCacheTable(){
        $this->numQueries++;
        $heldKeys = unserialize($this->cacheCon->get(self::$CACHE_KEY_AGENT_KEY_LIST));

        $keys = array();
        if (is_array($heldKeys)){
            foreach ($heldKeys as $heldKey){
                $key = self::$CACHE_KEY_AGENT_CACHE_PREFIX.md5($heldKey);
                $this->cacheCon->delete($key);
            }
            $this->cacheCon->delete(self::$CACHE_KEY_AGENT_KEY_LIST); 
        }

        return true;
    }
    public function createTempCacheTable(){
        //Lets clear this key to empty in case we had it before
        $this->numQueries++;
        $this->cacheCon->set(self::$CACHE_KEY_TEMP_AGENT_KEY_LIST, serialize(array()), TeraWurflConfig::$CACHE_EXPIRE); 
        return true;
    }
    public function rebuildCacheTable(){
        // We'll use this instance to rebuild the cache and to facilitate logging
        $rebuilder = new TeraWurfl();

        $list = unserialize($this->cacheCon->get(self::$CACHE_KEY_AGENT_KEY_LIST));
        if ($list === false){
            $this->createCacheTable();
            $rebuilder->toLog("Created empty cache table",LOG_NOTICE,"rebuildCacheTable");
            return true;
        }
        $this->numQueries++;
        $this->cacheCon->set(self::$CACHE_KEY_TEMP_AGENT_KEY_LIST, serialize($list), TeraWurflConfig::$CACHE_EXPIRE);
        $this->createCacheTable();

        if (count($list) == 0 || !is_array($list)){
            $rebuilder->toLog("Rebuilt cache table, existing table was empty - this is very unusual.",LOG_WARNING,"rebuildCacheTable");
            return true;
        }

        foreach ($list as $item){
            $rebuilder->GetDeviceCapabilitiesFromAgent($item);
            $this->numQueries += $rebuilder->db->numQueries;
            $rebuilder->db->numQueries = 0;
        }

        $this->numQueries++;
        $this->cacheCon->delete(self::$CACHE_KEY_TEMP_AGENT_KEY_LIST);
        $rebuilder->toLog("Rebuilt cache table.",LOG_NOTICE,"rebuildCacheTable");
        return true;
    }
    // Supporting DB Functions

    // truncate or drop+create given table
    public function clearTable($tablename){
        if($tablename == TeraWurflConfig::$TABLE_PREFIX.'Cache'){
            $this->createCacheTable();
        }else{
            $this->createGenericDeviceTable($tablename);
        }
    }
    /**
     * Establishes connection to database (does not check for DB sanity)
     */
    public function connect(){
        $this->connectToCache();
        parent::connect();
        return true;
    }
    public function connectToCache(){
        list($host,$port) = explode(':',TeraWurflConfig::$CACHE_HOST,2);
        try {
            if (empty($this->cacheCon)){
                $this->cacheCon = new Memcache();
            }
            $this->cacheCon->addServer($host, $port);
        } catch (Exception $e){
            $this->errors[] = $e->getMessage();
            $this->connected = false;
            return false;
        }
        $this->connected = true;
        return true;
    }
    public function cachePrep($value){
        if($value == '') $value = 'NULL';
        else if (!is_numeric($value) || $value[0] == '0') $value = $value;
        return $value;
    }
    public function getTableStats($table){
        $stats = array();
        $fields = array();
        $fieldnames = array();
        if ($table == TeraWurflConfig::$TABLE_PREFIX.'Cache'){
            $cacheTable = unserialize($this->cacheCon->get(self::$CACHE_KEY_AGENT_KEY_LIST));
            $stats['rows'] = count($cacheTable);
            $stats['bytesize'] = 0;
        } else {
            $fieldsres = $this->dbcon->query("SHOW COLUMNS FROM ".$table);
            while($row = $fieldsres->fetch_assoc()){
                $fields[] = 'CHAR_LENGTH(`'.$row['Field'].'`)';
                $fieldnames[]=$row['Field'];
            }
            $fieldsres->close();
            $bytesizequery = "SUM(".implode('+',$fields).") AS `bytesize`";
            $query = "SELECT COUNT(*) AS `rowcount`, $bytesizequery FROM `$table`";
            $res = $this->dbcon->query($query);
            $rows = $res->fetch_assoc();
            $stats['rows'] = $rows['rowcount'];
            $stats['bytesize'] = $rows['bytesize'];
            $res->close();
            if(in_array("actual_device_root",$fieldnames)){
                $res = $this->dbcon->query("SELECT COUNT(*) AS `devcount` FROM `$table` WHERE actual_device_root=1");
                $row = $res->fetch_assoc();
                $stats['actual_devices'] = $row['devcount'];
                $res->close();
            }

        }
        return $stats;
    }
	public function getCachedUserAgents(){
        $cacheList = unserialize($this->cacheCon->get(self::$CACHE_KEY_AGENT_KEY_LIST));
        if (!is_array($cacheList)){
            $cacheList = array();
        }
        return $cacheList;
	}
}
