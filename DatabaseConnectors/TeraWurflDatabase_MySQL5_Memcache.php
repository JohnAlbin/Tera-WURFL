<?php
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
class TeraWurflDatabase_MySQL5_Memcache extends TeraWurflDatabase{

	// Properties
	public $errors;
	public $db_implements_ris = true;
	public $db_implements_ld = false;
	public $db_implements_fallback = true;
	public $use_nested_set = false;
	public $numQueries = 0;
	public $connected = false;

	protected $dbcon;
    protected $cacheCon;
	protected $hostPrefix = '';

	public $maxquerysize = 0;
	/**
	 * The maximum number of new rows that the database can handle in one INSERT statement
	 * @var int
	 */
	protected static $DB_MAX_INSERTS = 500;
	protected static $WURFL_ID_COLUMN_TYPE = "VARCHAR";
	protected static $WURFL_ID_MAX_LENGTH = 64;
	protected static $STORAGE_ENGINE = "MyISAM";
	// To use InnoDB for this setting, you need to remove DELAYED from the cache query
	protected static $CACHE_STORAGE_ENGINE = "MyISAM";
	protected static $PERSISTENT_CONNECTION = true;
    // Cache Keys and Prefixes. If this needs to be configurable we can change them here
    protected static $CACHE_KEY_AGENT_CACHE_PREFIX;
    protected static $CACHE_KEY_AGENT_KEY_LIST;
    protected static $CACHE_KEY_TEMP_AGENT_KEY_LIST;

	public function __construct(){
		if(version_compare(PHP_VERSION,'5.3.0','>=') && self::$PERSISTENT_CONNECTION){
			$this->hostPrefix = 'p:';
		}
        $this->defineCacheKeys();
		parent::__construct();
	}

	/**
	 * Destructor, disconnect from database
	 */
	public function __destruct(){
		@$this->dbcon->close();
	}

    //set up the cache keys
    protected function defineCacheKeys()
    {
        self::$CACHE_KEY_AGENT_CACHE_PREFIX = TeraWurflConfig::$TABLE_PREFIX.'Cache_';
        self::$CACHE_KEY_AGENT_KEY_LIST = TeraWurflConfig::$TABLE_PREFIX.'CacheKeyList';
        self::$CACHE_KEY_TEMP_AGENT_KEY_LIST = TeraWurflConfig::$TABLE_PREFIX.'TempCacheKeyList';
    }

	// Device Table Functions (device,hybrid,patch)
	public function getDeviceFromID($wurflID){
		$this->numQueries++;
		$res = $this->dbcon->query("SELECT * FROM `".TeraWurflConfig::$TABLE_PREFIX.'Merge'."` WHERE `deviceID`=".$this->SQLPrep($wurflID));
		if(!$res) throw new Exception("Error: ".$this->dbcon->error);
		if($res->num_rows == 0){
			$res->close();
			throw new Exception("Tried to lookup an invalid WURFL Device ID: $wurflID");
		}
		$data = $res->fetch_assoc();
		$res->close();
		return unserialize($data['capabilities']);
	}
	public function getActualDeviceAncestor($wurflID){
		if($wurflID == "" || $wurflID == WurflConstants::$GENERIC)
		return WurflConstants::$GENERIC;
		$device = $this->getDeviceFromID($wurflID);
		if($device['actual_device_root']){
			return $device['id'];
		}else{
			return $this->getActualDeviceAncestor($device['fall_back']);
		}
	}
	public function getFullDeviceList($tablename){
		$this->numQueries++;
		$res = $this->dbcon->query("SELECT `deviceID`, `user_agent` FROM `$tablename` WHERE `match`=1");
		if($res->num_rows == 0){
			$res->close();
			return array();
		}
		$data = array();
		while($row = $res->fetch_assoc()){
			$data[$row['deviceID']]=$row['user_agent'];
		}
		return $data;
	}
	// Exact Match
	public function getDeviceFromUA($userAgent){
		$this->numQueries++;
		$query = "SELECT `deviceID` FROM `".TeraWurflConfig::$TABLE_PREFIX.'Merge'."` WHERE `user_agent`=".$this->SQLPrep($userAgent);
		$res = $this->dbcon->query($query);
		if($res->num_rows == 0){
			$res->close();
			return false;
		}
		$data = $res->fetch_assoc();
		$res->close();
		return $data['deviceID'];
	}
	// RIS == Reduction in String (reduce string one char at a time)
	public function getDeviceFromUA_RIS($userAgent,$tolerance,UserAgentMatcher &$matcher){
		$this->numQueries++;
		$query = sprintf("CALL ".TeraWurflConfig::$TABLE_PREFIX."_RIS(%s,%s,%s)",$this->SQLPrep($userAgent),$tolerance,$this->SQLPrep($matcher->tableSuffix()));
		$res = $this->dbcon->query($query);
		if(!$res){
			throw new Exception(sprintf("Error in DB RIS Query: %s. \nQuery: %s\n",$this->dbcon->error,$query));
			exit();
		}
		$data = $res->fetch_assoc();
		$this->cleanConnection();
		$wurflid = $data['DeviceID'];
		return ($wurflid == 'NULL' || is_null($wurflid))? WurflConstants::$GENERIC: $wurflid;
	}
	// LD == Levesthein Distance
	public function getDeviceFromUA_LD($userAgent,$tolerance,UserAgentMatcher &$matcher){
		throw new Exception("Error: this function (LD) is not yet implemented in MySQL");
	}
	public function getDeviceFallBackTree($wurflID){
		if($this->use_nested_set){
			return $this->getDeviceFallBackTree_NS($wurflID);
		}
		$data = array();
		$this->numQueries++;
		$query = sprintf("CALL ".TeraWurflConfig::$TABLE_PREFIX."_FallBackDevices(%s)",$this->SQLPrep($wurflID));
		$this->dbcon->multi_query($query);
		$i = 0;
		do{
			if($res = $this->dbcon->store_result()){
				$row = $res->fetch_row();
				$data[$i++]=unserialize($row[0]);
				$res->free();
			}
		}while($this->dbcon->more_results() && $this->dbcon->next_result());
		if($i == 0){
			$tw = new TeraWurfl();
			$tw->toLog("Tera-WURFL Error: database fallback procedure returned no records, verify that ".TeraWurflConfig::$TABLE_PREFIX."_FallBackDevices exists.",LOG_ERR,__CLASS__.'::'.__FUNCTION__);
		}else if($data[$i-1]['id'] != WurflConstants::$GENERIC){
			$tw = new TeraWurfl();
			$tw->toLog("WURFL Error: device {$data[$i-1]['id']} falls back on an inexistent device: {$data[$i-1]['fall_back']}",LOG_ERR,__CLASS__.'::'.__FUNCTION__);
		}
		return $data;
	}
	/**
	 * Returns an Array containing the complete capabilities array for each
	 * device in the fallback tree.  These arrays would need to be flattened
	 * in order to be used for any real puropse
	 * @param $wurflID
	 * @return array array of the capabilities arrays for all the devices in the fallback tree 
	 */
	public function getDeviceFallBackTree_NS($wurflID){
		$data = array();
		$this->numQueries++;
		$query = sprintf("SELECT `data`.capabilities FROM %s AS node, %s AS parent
INNER JOIN %s `data` ON parent.deviceID = `data`.deviceID
WHERE node.`lt` BETWEEN parent.`lt` AND parent.`rt`
AND node.deviceID = %s
ORDER BY parent.`rt`",
		TeraWurflConfig::$TABLE_PREFIX.'Index',
		TeraWurflConfig::$TABLE_PREFIX.'Index',
		TeraWurflConfig::$TABLE_PREFIX.'Merge',
		$this->SQLPrep($wurflID)
		);
		$res = $this->dbcon->query($query);
		while($row = $res->fetch_assoc()){
			$data[]=unserialize($row['capabilities']);
		}
		return $data;
	}
	protected function cleanConnection(){
		while($this->dbcon->more_results()){
			$this->dbcon->next_result();
			$res = $this->dbcon->use_result();
			if ($res instanceof mysqli_result){$res->free();}
		}
	}
	public function loadDevices(&$tables){
		$insert_errors = array();
		$insertcache = array();
		$insertedrows = 0;
		$this->createIndexTable();
		$this->createSettingsTable();
		$this->clearMatcherTables();
		$this->createProcedures();
		foreach($tables as $table => $devices){
			// insert records into a new temp table until we know everything is OK
			$temptable = $table . (self::$DB_TEMP_EXT);
			$parts = explode('_',$table);
			$matcher = array_pop($parts);
			$this->createGenericDeviceTable($temptable);
			foreach($devices as $device){
				$this->dbcon->query("INSERT INTO `".TeraWurflConfig::$TABLE_PREFIX.'Index'."` (`deviceID`,`matcher`) VALUE (".$this->SQLPrep($device['id']).",".$this->SQLPrep($matcher).")");
				// convert device root to tinyint format (0|1) for db
				if(strlen($device['user_agent']) > 255){
					$insert_errors[] = "Warning: user agent too long: \"".($device['id']).'"';
				}
				$insertcache[] = sprintf("(%s,%s,%s,%s,%s,%s)",
					$this->SQLPrep($device['id']),
					$this->SQLPrep($device['user_agent']),
					$this->SQLPrep($device['fall_back']),
					$this->SQLPrep((isset($device['actual_device_root']))?$device['actual_device_root']:''),
					preg_match('/^DO_NOT_MATCH/',$device['user_agent'])? 0: 1,
					$this->SQLPrep(serialize($device))
				);
				// This batch of records is ready to be inserted
				if(count($insertcache) >= self::$DB_MAX_INSERTS){
					$query = "INSERT INTO `$temptable` (`deviceID`, `user_agent`, `fall_back`, `actual_device_root`, `match`, `capabilities`) VALUES ".implode(",",$insertcache);
					$this->dbcon->query($query) or $insert_errors[] = "DB server reported error on id \"".$device['id']."\": ".$this->dbcon->error;
					$insertedrows += $this->dbcon->affected_rows;
					$insertcache = array();
					$this->numQueries++;
					$this->maxquerysize = (strlen($query)>$this->maxquerysize)? strlen($query): $this->maxquerysize;
				}
			}
			// some records are probably left in the insertcache
			if(count($insertcache) > 0){
				$query = "INSERT INTO `$temptable` (`deviceID`, `user_agent`, `fall_back`, `actual_device_root`, `match`, `capabilities`) VALUES ".implode(",",$insertcache);
				$this->dbcon->query($query) or $insert_errors[] = "DB server reported error on id \"".$device['id']."\": ".$this->dbcon->error;
				$insertedrows += $this->dbcon->affected_rows;
				$insertcache = array();
				$this->numQueries++;
				$this->maxquerysize = (strlen($query)>$this->maxquerysize)? strlen($query): $this->maxquerysize;
			}
			if(count($insert_errors) > 0){
				// Roll back changes
				// leave the temp table in the DB for manual inspection
				$this->errors = array_merge($this->errors,$insert_errors);
				return false;
			}
			$this->numQueries++;
			$this->dbcon->query("DROP TABLE IF EXISTS `$table`");
			$this->numQueries++;
			$this->dbcon->query("RENAME TABLE `$temptable` TO `$table`");
		}
		// Create Merge Table
		$this->createMergeTable(array_keys($tables));
		if($this->use_nested_set){
			require_once realpath(dirname(__FILE__).'/TeraWurflMySQLNestedSet.php');
			$nest = new TeraWurflMySQLNestedSet($this->dbcon,'TeraWurflMerge','TeraWurflIndex','deviceID','fall_back','lt','rt');
			$nest->generateNestedSet('generic');
			$this->numQueries += $nest->numQueries;
			unset($nest);
		}
		return true;
	}
	/**
	 * Drops and creates the given device table
	 *
	 * @param string Table name (ex: TeraWurflConfig::$HYBRID)
	 * @return boolean success
	 */
	public function createGenericDeviceTable($tablename){
		$droptable = "DROP TABLE IF EXISTS ".$tablename;
		$createtable = "CREATE TABLE `".$tablename."` (
			`deviceID` ".self::$WURFL_ID_COLUMN_TYPE."(".self::$WURFL_ID_MAX_LENGTH.") binary NOT NULL default '',
			`user_agent` varchar(255) binary default NULL,
			`fall_back` ".self::$WURFL_ID_COLUMN_TYPE."(".self::$WURFL_ID_MAX_LENGTH.") default NULL,
			`actual_device_root` tinyint(1) default '0',
			`match` tinyint(1) default '1',
			`capabilities` mediumtext,
			PRIMARY KEY  (`deviceID`),
			KEY `fallback` (`fall_back`),
			KEY `useragent` (`user_agent`),
			KEY `dev_root` (`actual_device_root`),
			KEY `idxmatch` (`match`)
			) ENGINE=".self::$STORAGE_ENGINE;
		$this->numQueries++;
		$this->dbcon->query($droptable);
		$this->numQueries++;
		$this->dbcon->query($createtable);
		return true;
	}
	/**
	 * Drops then creates all the UserAgentMatcher device tables
	 * @return boolean success
	 */
	protected function clearMatcherTables(){
		foreach(UserAgentFactory::$matchers as $matcher){
			$table = TeraWurflConfig::$TABLE_PREFIX."_".$matcher;
			$this->createGenericDeviceTable($table);
		}
		return true;
	}
	/**
	 * Drops and creates the MERGE table
	 *
	 * @param array Table names
	 * @return boolean success
	 */
	public function createMergeTable($tables){
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Merge';
		foreach($tables as &$table){$table="SELECT * FROM `$table`";}
		$droptable = "DROP TABLE IF EXISTS ".$tablename;
		$this->createGenericDeviceTable($tablename);
		$createtable = "INSERT INTO `$tablename` ".implode(" UNION ALL ",$tables);
		$this->numQueries++;
		if(!$this->dbcon->query($createtable)) throw new Exception("Error: ".$this->dbcon->error);
		return true;
	}
	/**
	 * Drops and creates the index table
	 *
	 * @return boolean success
	 */
	public function createIndexTable(){
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Index';
		$droptable = "DROP TABLE IF EXISTS ".$tablename;
		$createtable = "CREATE TABLE `".$tablename."` (
  `deviceID` ".self::$WURFL_ID_COLUMN_TYPE."(".self::$WURFL_ID_MAX_LENGTH.") binary NOT NULL default '',
  `matcher` varchar(64) NOT NULL,
  PRIMARY KEY  (`deviceID`)
) ENGINE=".self::$STORAGE_ENGINE;
		$this->numQueries++;
		$this->dbcon->query($droptable);
		$this->numQueries++;
		$this->dbcon->query($createtable);
		return true;
	}
	/**
	 * Creates the settings table if it does not already exist
	 * @return boolean success
	 */
	public function createSettingsTable(){
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Settings';
		$checktable = "SHOW TABLES LIKE '$tablename'";
		$this->numQueries++;
		$res = $this->dbcon->query($checktable);
		if($res->num_rows > 0) return true;
		$createtable = "CREATE TABLE `".$tablename."` (
  `id` varchar(64) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=".self::$STORAGE_ENGINE;
		$this->numQueries++;
		$this->dbcon->query($createtable);
		return true;
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
            $cacheList = array();
            $cacheList = $this->cacheCon->get(self::$CACHE_KEY_AGENT_KEY_LIST);
            $cacheList[] = $userAgent;
            //Verify we only have one entry in that list.
            //Array Unique is faster then checking for it then adding it.
            $cacheList = array_unique($cacheList);
            $this->numQueries++;
            $this->cacheCon->set(self::$CACHE_KEY_AGENT_KEY_LIST, $cacheList, TeraWurflConfig::$CACHE_EXPIRE);
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
        $heldKeys = $this->cacheCon->get(self::$CACHE_KEY_AGENT_KEY_LIST);

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
        $this->cacheCon->set(self::$CACHE_KEY_AGENT_KEY_LIST, array(), TeraWurflConfig::$CACHE_EXPIRE); 
		return true;
	}
	public function rebuildCacheTable(){
		// We'll use this instance to rebuild the cache and to facilitate logging
		$rebuilder = new TeraWurfl();

        $list = $this->cacheCon->get(self::$CACHE_KEY_AGENT_KEY_LIST);
        if ($list === false){
			$this->createCacheTable();
			$rebuilder->toLog("Created empty cache table",LOG_NOTICE,"rebuildCacheTable");
			return true;
        }
		$this->numQueries++;
        $this->cacheCon->set(self::$CACHE_KEY_TEMP_AGENT_KEY_LIST, $list, TeraWurflConfig::$CACHE_EXPIRE);
		$this->createCacheTable();

        $list = $this->parseCacheKeyList($list);

        if (count($list) == 0){
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
	public function createProcedures(){
		$TeraWurfl_RIS = "CREATE PROCEDURE `".TeraWurflConfig::$TABLE_PREFIX."_RIS`(IN ua VARCHAR(255), IN tolerance INT, IN matcher VARCHAR(64))
BEGIN
DECLARE curlen INT;
DECLARE wurflid ".self::$WURFL_ID_COLUMN_TYPE."(".self::$WURFL_ID_MAX_LENGTH.") DEFAULT NULL;
DECLARE curua VARCHAR(255);

SELECT CHAR_LENGTH(ua)  INTO curlen;
findua: WHILE ( curlen >= tolerance ) DO
	SELECT CONCAT(LEFT(ua, curlen ),'%') INTO curua;
	SELECT idx.DeviceID INTO wurflid
		FROM ".TeraWurflConfig::$TABLE_PREFIX.'Index'." idx INNER JOIN ".TeraWurflConfig::$TABLE_PREFIX.'Merge'." mrg ON idx.DeviceID = mrg.DeviceID
		WHERE mrg.match = 1 AND idx.matcher = matcher
		AND mrg.user_agent LIKE curua
		LIMIT 1;
	IF wurflid IS NOT NULL THEN
		LEAVE findua;
	END IF;
	SELECT curlen - 1 INTO curlen;
END WHILE;

SELECT wurflid as DeviceID;
END";
		$this->dbcon->query("DROP PROCEDURE IF EXISTS `".TeraWurflConfig::$TABLE_PREFIX."_RIS`");
		$this->dbcon->query($TeraWurfl_RIS);
		$TeraWurfl_FallBackDevices = "CREATE PROCEDURE `".TeraWurflConfig::$TABLE_PREFIX."_FallBackDevices`(current_fall_back ".self::$WURFL_ID_COLUMN_TYPE."(".self::$WURFL_ID_MAX_LENGTH."))
BEGIN
WHILE current_fall_back != 'root' DO
	SELECT capabilities FROM ".TeraWurflConfig::$TABLE_PREFIX.'Merge'." WHERE deviceID = current_fall_back;
	SELECT fall_back FROM ".TeraWurflConfig::$TABLE_PREFIX.'Merge'." WHERE deviceID = current_fall_back INTO current_fall_back;
END WHILE;
END";
		$this->dbcon->query("DROP PROCEDURE IF EXISTS `".TeraWurflConfig::$TABLE_PREFIX."_FallBackDevices`");
		$this->dbcon->query($TeraWurfl_FallBackDevices);
		return true;
	}
	/**
	 * Establishes connection to database (does not check for DB sanity)
	 */
	public function connect(){
		$this->numQueries++;
		if(strpos(TeraWurflConfig::$DB_HOST,':')){
			list($host,$port) = explode(':',TeraWurflConfig::$DB_HOST,2);
			if(is_numeric($port)){
				$this->dbcon = @new mysqli($this->hostPrefix.$host,TeraWurflConfig::$DB_USER,TeraWurflConfig::$DB_PASS,TeraWurflConfig::$DB_SCHEMA,$port);
			}else{
				// $port contains the socket / named pipe
				$this->dbcon = @new mysqli($this->hostPrefix.$host,TeraWurflConfig::$DB_USER,TeraWurflConfig::$DB_PASS,TeraWurflConfig::$DB_SCHEMA,null,$port);
			}
		}else{
			$this->dbcon = @new mysqli($this->hostPrefix.TeraWurflConfig::$DB_HOST,TeraWurflConfig::$DB_USER,TeraWurflConfig::$DB_PASS,TeraWurflConfig::$DB_SCHEMA);
		}
		if(mysqli_connect_errno()){
			$this->errors[]=mysqli_connect_error();
			$this->connected = mysqli_connect_errno();
			return false;
		}
		$this->connected = true;
        $this->connectToCache();
		return true;
	}
    public function connectToCache(){
        list($host,$port) = explode(':',TeraWurflConfig::$CACHE_HOST,2);
        try {
            if (empty($this->cacheCon)){
                $this->cacheCon = new Memcached();
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
	public function updateSetting($key,$value){
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Settings';
		$query = sprintf("REPLACE INTO `%s` (`%s`, `%s`) VALUES (%s, %s)", $tablename, 'id', 'value', $this->SQLPrep($key), $this->SQLPrep($value));
		$this->numQueries++;
		$this->dbcon->query($query);
	}
	public function getSetting($key){
		$query = "SELECT `value` FROM `".TeraWurflConfig::$TABLE_PREFIX.'Settings'."` WHERE `id` = ".$this->SQLPrep($key);
		$this->numQueries++;
		$res = $this->dbcon->query($query);
		if($res->num_rows == 0) return null;
		$row = $res->fetch_assoc();
		return $row['value'];
	}
	// prep raw text for use in queries (adding quotes if necessary)
	public function SQLPrep($value){
		if($value == '') $value = 'NULL';
		else if (!is_numeric($value) || $value[0] == '0') $value = "'" . $this->dbcon->real_escape_string($value) . "'"; //Quote if not integer
		return $value;
	}
    public function cachePrep($value){
		if($value == '') $value = 'NULL';
		else if (!is_numeric($value) || $value[0] == '0') $value = $value;
		return $value;
    }
	public function getTableList(){
		$tablesres = $this->dbcon->query("SHOW TABLES");
		$tables = array();
		while($table = $tablesres->fetch_row())$tables[]=$table[0];
		$tablesres->close();
		return $tables;
	}
	public function getMatcherTableList(){
		$tablesres = $this->dbcon->query("SHOW TABLES LIKE '".TeraWurflConfig::$TABLE_PREFIX."\\_%'");
		$tables = array();
		while($table = $tablesres->fetch_row())$tables[]=$table[0];
		$tablesres->close();
		return $tables;
	}
	public function getTableStats($table){
		$stats = array();
		$fields = array();
		$fieldnames = array();
        if ($table == TeraWurflConfig::$TABLE_PREFIX.'Cache'){
            $cacheTable = $this->cacheCon->get(self::$CACHE_KEY_TEMP_AGENT_KEY_LIST);
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
        $settingKey = TeraWurflConfig::$TABLE_PREFIX.'CacheKeyList';
        $userAgentList = $this->cacheCon->get($settingKey);
        return $this->parseCacheKeyList($userAgentList);
	}
	public function verifyConfig(){
		$errors = array();
		$createProc = "CREATE PROCEDURE `".TeraWurflConfig::$TABLE_PREFIX."_TestProc`()
BEGIN
	SELECT 1;
END";
		$testProc = "CALL ".TeraWurflConfig::$TABLE_PREFIX."_TestProc";
		$this->dbcon->query($createProc);
		$res = $this->dbcon->query($testProc);
		if(!$res || $res->num_rows < 1){
			$errors[] = "Could not create MySQL Procedure. Please make sure you have these privileges: CREATE_ROUTINE, DROP, EXECUTE";
		}
		$this->cleanConnection();
		$this->dbcon->query("DROP PROCEDURE IF EXISTS `".TeraWurflConfig::$TABLE_PREFIX."_TestProc`");
		return $errors;
	}
	public function getServerVersion(){
		$res = $this->dbcon->query("SELECT version() AS `version`");
		if(!$res || $res->num_rows == 0) return false;
		$row = $res->fetch_assoc();
		return($row['version']);
	}
}
