<?php
/**
 * Tera_WURFL - PHP MySQL driven WURFL
 *
 * Tera-WURFL was written by Steve Kamerman, and is based on the
 * Java WURFL Evolution package by Luca Passani and WURFL PHP Tools by Andrea Trassati.
 * This version uses a MySQL database to store the entire WURFL file, multiple patch
 * files, and a persistent caching mechanism to provide extreme performance increases.
 *
 * @package TeraWurflDatabase
 * @author Steve Kamerman <stevekamerman AT gmail.com>
 * @version Stable 2.1.3 $Date: 2010/09/18 15:43:21
 * @license http://www.mozilla.org/MPL/ MPL Vesion 1.1
 */
/**
 * Provides connectivity from Tera-WURFL to MySQL 5
 * @package TeraWurflDatabase
 * @see TeraWurflDatabase
 */
class TeraWurflDatabase_MySQL5_HipHop extends TeraWurflDatabase{

	// Properties
	public $errors;
	public $db_implements_ris = false;
	public $db_implements_ld = false;
	public $db_implements_fallback = false;
	public $use_nested_set = false;
	public $numQueries = 0;
	public $connected = false;

	protected $dbcon;
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
	protected static $PERSISTENT_CONNECTION = false;

	/**
	 * Destructor, disconnect from database
	 */
	public function __destruct(){
		@mysql_close($this->dbcon);
	}

	// Device Table Functions (device,hybrid,patch)
	public function getDeviceFromID($wurflID){
		$this->numQueries++;
		$res = mysql_query("SELECT * FROM `".TeraWurflConfig::$TABLE_PREFIX.'Merge'."` WHERE `deviceID`=".$this->SQLPrep($wurflID),$this->dbcon) or die(mysql_error($this->dbcon));
		if(mysql_num_rows($res) == 0){
			mysql_free_result($res);
			throw new Exception("Tried to lookup an invalid WURFL Device ID: $wurflID");
		}
		$data = mysql_fetch_assoc($res);
		mysql_free_result($res);
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
		$res = mysql_query("SELECT `deviceID`, `user_agent` FROM `$tablename` WHERE `match`=1",$this->dbcon);
		if(mysql_num_rows($res) == 0){
			mysql_free_result($res);
			return array();
		}
		$data = array();
		while($row = mysql_fetch_assoc($res)){
			$data[$row['deviceID']]=$row['user_agent'];
		}
		mysql_free_result($res);
		return $data;
	}
	// Exact Match
	public function getDeviceFromUA($userAgent){
		$this->numQueries++;
		$query = "SELECT `deviceID` FROM `".TeraWurflConfig::$TABLE_PREFIX.'Merge'."` WHERE `user_agent`=".$this->SQLPrep($userAgent);
		$res = mysql_query($query);
		if(mysql_num_rows($res) == 0){
			mysql_free_result($res);
			return false;
		}
		$data = mysql_fetch_assoc($res);
		mysql_free_result($res);
		return $data['deviceID'];
	}
	// RIS == Reduction in String (reduce string one char at a time)
	public function getDeviceFromUA_RIS($userAgent,$tolerance,UserAgentMatcher &$matcher){
		$this->numQueries++;
		$query = sprintf("CALL ".TeraWurflConfig::$TABLE_PREFIX."_RIS(%s,%s,%s)",$this->SQLPrep($userAgent),$tolerance,$this->SQLPrep($matcher->tableSuffix()));
		$res = mysql_query($query,$this->dbcon);
		if(!$res){
			throw new Exception(sprintf("Error in DB RIS Query: %s. \nQuery: %s\n",mysql_error($this->dbcon),$query));
			exit();
		}
		$data = mysql_fetch_assoc($res);
		$wurflid = $data['DeviceID'];
		return ($wurflid == 'NULL' || is_null($wurflid))? WurflConstants::$GENERIC: $wurflid;
	}
	// TODO: Implement with Stored Proc
	// LD == Levesthein Distance
	public function getDeviceFromUA_LD($userAgent,$tolerance,UserAgentMatcher &$matcher){
		throw new Exception("Error: this function (LD) is not yet implemented in MySQL");
		$safe_ua = $this->SQLPrep($userAgent);
		$this->numQueries++;
		//$res = mysql_query("call ".TeraWurflConfig::$TABLE_PREFIX."_LD($safe_ua,$tolerance)");
		// TODO: check for false
		$data = array();
		while($row = mysql_fetch_assoc($res)){
			$data[]=$row;
		}
		return $data;
	}
	// FIXME: Implement
	/*
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
		if($data[$i-1]['id'] != WurflConstants::$GENERIC){
			$tw = new TeraWurfl();
			$tw->toLog("WURFL Error: device {$data[$i-1]['id']} falls back on an inexistent device: {$data[$i-1]['fall_back']}",LOG_ERR,__CLASS__.'::'.__FUNCTION__);
		}
		return $data;
	}
	*/
	/**
	 * Returns an Array containing the complete capabilities array for each
	 * device in the fallback tree.  These arrays would need to be flattened
	 * in order to be used for any real puropse
	 * @param $wurflID
	 * @return array array of the capabilities arrays for all the devices in the fallback tree 
	 */
	/*
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
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$data[]=unserialize($row['capabilities']);
		}
		return $data;
	}
	*/
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
				mysql_query("INSERT INTO `".TeraWurflConfig::$TABLE_PREFIX.'Index'."` (`deviceID`,`matcher`) VALUE (".$this->SQLPrep($device['id']).",".$this->SQLPrep($matcher).")",$this->dbcon);
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
					mysql_query($query,$this->dbcon) or $insert_errors[] = "DB server reported error on id \"".$device['id']."\": ".mysql_error($this->dbcon);
					$insertedrows += mysql_affected_rows($this->dbcon);
					$insertcache = array();
					$this->numQueries++;
					$this->maxquerysize = (strlen($query)>$this->maxquerysize)? strlen($query): $this->maxquerysize;
				}
			}
			// some records are probably left in the insertcache
			if(count($insertcache) > 0){
				$query = "INSERT INTO `$temptable` (`deviceID`, `user_agent`, `fall_back`, `actual_device_root`, `match`, `capabilities`) VALUES ".implode(",",$insertcache);
				mysql_query($query,$this->dbcon) or $insert_errors[] = "DB server reported error on id \"".$device['id']."\": ".mysql_error($this->dbcon);
				$insertedrows += mysql_affected_rows($this->dbcon);
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
			mysql_query("DROP TABLE IF EXISTS `$table`",$this->dbcon);
			$this->numQueries++;
			mysql_query("RENAME TABLE `$temptable` TO `$table`",$this->dbcon);
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
		mysql_query($droptable,$this->dbcon);
		$this->numQueries++;
		mysql_query($createtable,$this->dbcon);
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
		mysql_query($createtable,$this->dbcon) or die("ERROR: ".mysql_error($this->dbcon));
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
		mysql_query($droptable,$this->dbcon);
		$this->numQueries++;
		mysql_query($createtable,$this->dbcon);
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
		$res = mysql_query($checktable,$this->dbcon);
		if(mysql_num_rows($res) > 0) return true;
		$createtable = "CREATE TABLE `".$tablename."` (
  `id` varchar(64) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=".self::$STORAGE_ENGINE;
		$this->numQueries++;
		mysql_query($createtable,$this->dbcon);
		return true;
	}
	// Cache Table Functions

	// should return (bool)false or the device array
	public function getDeviceFromCache($userAgent){
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Cache';
		$this->numQueries++;
		$res = mysql_query("SELECT * FROM `$tablename` WHERE `user_agent`=".$this->SQLPrep($userAgent),$this->dbcon) or die("Error: ".mysql_error($this->dbcon));
		if(mysql_num_rows($res) == 0){
			mysql_free_result($res);
			//echo "[[UA NOT FOUND IN CACHE: $userAgent]]";
			return false;
		}
		$data = mysql_fetch_assoc($res);
		mysql_free_result($res);
		return unserialize($data['cache_data']);

	}
	public function saveDeviceInCache($userAgent,$device){
		if(strlen($userAgent)==0) return true;
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Cache';
		$ua = $this->SQLPrep($userAgent);
		$packed_device = $this->SQLPrep(serialize($device));
		$this->numQueries++;
		mysql_query("INSERT DELAYED INTO `$tablename` (`user_agent`,`cache_data`) VALUES ($ua,$packed_device)",$this->dbcon)or die("Error: ".mysql_error($this->dbcon));
		if(mysql_affected_rows($this->dbcon) > 0){
			return true;
		}
		return false;
	}
	public function createCacheTable(){
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Cache';
		$droptable = "DROP TABLE IF EXISTS `$tablename`";
		$createtable = "CREATE TABLE `$tablename` (
			`user_agent` varchar(255) binary NOT NULL default '',
			`cache_data` mediumtext NOT NULL,
			PRIMARY KEY  (`user_agent`)
		) ENGINE=".self::$CACHE_STORAGE_ENGINE;
		$this->numQueries++;
		mysql_query($droptable,$this->dbcon);
		$this->numQueries++;
		mysql_query($createtable,$this->dbcon);
		return true;
	}
	public function createTempCacheTable(){
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Cache'.self::$DB_TEMP_EXT;
		$droptable = "DROP TABLE IF EXISTS `$tablename`";
		$createtable = "CREATE TABLE `$tablename` (
			`user_agent` varchar(255) binary NOT NULL default '',
			`cache_data` mediumtext NOT NULL,
			PRIMARY KEY  (`user_agent`)
		) ENGINE=".self::$CACHE_STORAGE_ENGINE;
		$this->numQueries++;
		mysql_query($droptable,$this->dbcon);
		$this->numQueries++;
		mysql_query($createtable,$this->dbcon);
		return true;
	}
	public function rebuildCacheTable(){
		// We'll use this instance to rebuild the cache and to facilitate logging
		$rebuilder = new TeraWurfl();
		$cachetable = TeraWurflConfig::$TABLE_PREFIX.'Cache';
		$temptable = TeraWurflConfig::$TABLE_PREFIX.'Cache'.self::$DB_TEMP_EXT;
		$checkcachequery = "SHOW TABLES LIKE '$cachetable'";
		$checkres = mysql_query($checkcachequery,$this->dbcon);
		$this->numQueries++;
		if(mysql_num_rows($checkres) === 0){
			// This can only happen if the table doesn't exist
			$this->createCacheTable();
			$this->numQueries++;
			// This table must be empty, so we're finished
			//			$rebuilder->toLog($query,LOG_ERR,"rebuildCacheTable");
			$rebuilder->toLog("Created empty cache table",LOG_NOTICE,"rebuildCacheTable");
			return true;
		}
		$droptemptable = "DROP TABLE IF EXISTS `$temptable`";
		$this->numQueries++;
		mysql_query($droptemptable,$this->dbcon);
		$query = "RENAME TABLE `$cachetable` TO `$temptable`";
		$this->numQueries++;
		mysql_query($query,$this->dbcon);
		$this->createCacheTable();
		$query = "SELECT `user_agent` FROM `$temptable`";
		$this->numQueries++;
		$res = mysql_query($query,$this->dbcon);
		if(mysql_num_rows($res) == 0){
			// No records in cache table == nothing to rebuild
			$rebuilder->toLog("Rebuilt cache table, existing table was empty - this is very unusual.",LOG_WARNING,"rebuildCacheTable");
			return true;
		}
		while($dev = mysql_fetch_assoc($res)){
			// Just looking the device up will force it to be cached
			$rebuilder->GetDeviceCapabilitiesFromAgent($dev['user_agent']);
			// Reset the number of queries since we're not going to re-instantiate the object
			$this->numQueries += $rebuilder->db->numQueries;
			$rebuilder->db->numQueries = 0;
		}
		$droptable = "DROP TABLE IF EXISTS `$temptable`";
		$this->numQueries++;
		mysql_query($droptable,$this->dbcon);
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
		mysql_query("DROP PROCEDURE IF EXISTS `".TeraWurflConfig::$TABLE_PREFIX."_RIS`",$this->dbcon);
		mysql_query($TeraWurfl_RIS,$this->dbcon);
		$TeraWurfl_FallBackDevices = "CREATE PROCEDURE `".TeraWurflConfig::$TABLE_PREFIX."_FallBackDevices`(current_fall_back ".self::$WURFL_ID_COLUMN_TYPE."(".self::$WURFL_ID_MAX_LENGTH."))
BEGIN
WHILE current_fall_back != 'root' DO
	SELECT capabilities FROM ".TeraWurflConfig::$TABLE_PREFIX.'Merge'." WHERE deviceID = current_fall_back;
	SELECT fall_back FROM ".TeraWurflConfig::$TABLE_PREFIX.'Merge'." WHERE deviceID = current_fall_back INTO current_fall_back;
END WHILE;
END";
		mysql_query("DROP PROCEDURE IF EXISTS `".TeraWurflConfig::$TABLE_PREFIX."_FallBackDevices`",$this->dbcon);
		mysql_query($TeraWurfl_FallBackDevices,$this->dbcon);
		return true;
	}
	/**
	 * Establishes connection to database (does not check for DB sanity)
	 */
	public function connect(){
		$this->numQueries++;
		if(self::$PERSISTENT_CONNECTION){
			$this->dbcon = @mysql_pconnect(TeraWurflConfig::$DB_HOST,TeraWurflConfig::$DB_USER,TeraWurflConfig::$DB_PASS);
		}else{
			$this->dbcon = @mysql_connect(TeraWurflConfig::$DB_HOST,TeraWurflConfig::$DB_USER,TeraWurflConfig::$DB_PASS);
		}
		if(!$this->dbcon){
			$this->errors[]=mysql_error();
			$this->connected = false;
			return false;
		}
		mysql_select_db(TeraWurflConfig::$DB_SCHEMA,$this->dbcon);
		$this->connected = true;
		return true;
	}
	public function updateSetting($key,$value){
		$tablename = TeraWurflConfig::$TABLE_PREFIX.'Settings';
		$query = sprintf("REPLACE INTO `%s` (`%s`, `%s`) VALUES (%s, %s)", $tablename, 'id', 'value', $this->SQLPrep($key), $this->SQLPrep($value));
		$this->numQueries++;
		mysql_query($query,$this->dbcon);
	}
	public function getSetting($key){
		$query = "SELECT `value` FROM `".TeraWurflConfig::$TABLE_PREFIX.'Settings'."` WHERE `id` = ".$this->SQLPrep($key);
		$this->numQueries++;
		$res = mysql_query($query,$this->dbcon);
		if(mysql_num_rows($res) == 0) return null;
		$row = mysql_fetch_assoc($res);
		return $row['value'];
	}
	// prep raw text for use in queries (adding quotes if necessary)
	public function SQLPrep($value){
		if($value == '') $value = 'NULL';
		else if (!is_numeric($value) || $value[0] == '0') $value = "'" . mysql_real_escape_string($value,$this->dbcon) . "'"; //Quote if not integer
		return $value;
	}
	public function getTableList(){
		$tablesres = mysql_query("SHOW TABLES",$this->dbcon) or die(mysql_error($this->dbcon));
		$tables = array();
		while($table = mysql_fetch_row($tablesres))$tables[]=$table[0];
		mysql_free_result($tablesres);
		return $tables;
	}
	public function getMatcherTableList(){
		$tablesres = mysql_query("SHOW TABLES LIKE '".TeraWurflConfig::$TABLE_PREFIX."\\_%'",$this->dbcon);
		$tables = array();
		while($table = mysql_fetch_row($tablesres))$tables[]=$table[0];
		mysql_free_result($tablesres);
		return $tables;
	}
	public function getTableStats($table){
		$stats = array();
		$fields = array();
		$fieldnames = array();
		$fieldsres = mysql_query("SHOW COLUMNS FROM ".$table,$this->dbcon);
		while($row = mysql_fetch_assoc($fieldsres)){
			$fields[] = 'CHAR_LENGTH(`'.$row['Field'].'`)';
			$fieldnames[]=$row['Field'];
		}
		mysql_free_result($fieldsres);
		$bytesizequery = "SUM(".implode('+',$fields).") AS `bytesize`";
		$query = "SELECT COUNT(*) AS `rowcount`, $bytesizequery FROM `$table`";
		$res = mysql_query($query,$this->dbcon);
		$rows = mysql_fetch_assoc($res);
		$stats['rows'] = $rows['rowcount'];
		$stats['bytesize'] = $rows['bytesize'];
		mysql_free_result($res);
		if(in_array("actual_device_root",$fieldnames)){
			$res = mysql_query("SELECT COUNT(*) AS `devcount` FROM `$table` WHERE actual_device_root=1",$this->dbcon);
			$row = mysql_fetch_assoc($res);
			$stats['actual_devices'] = $row['devcount'];
			mysql_free_result($res);
		}
		return $stats;
	}
	public function getCachedUserAgents(){
		$uas = array();
		$cacheres = mysql_query("SELECT user_agent FROM ".TeraWurflConfig::$TABLE_PREFIX.'Cache'." ORDER BY user_agent",$this->dbcon);
		while($ua = mysql_fetch_row($cacheres))$uas[]=$ua[0];
		mysql_free_result($cacheres);
		return $uas;
	}
	public function verifyConfig(){
		$errors = array();
		$createProc = "CREATE PROCEDURE `".TeraWurflConfig::$TABLE_PREFIX."_TestProc`()
BEGIN
	SELECT 1;
END";
		$testProc = "CALL ".TeraWurflConfig::$TABLE_PREFIX."_TestProc";
		mysql_query($createProc,$this->dbcon);
		$res = mysql_query($testProc);
		if(!$res || mysql_num_rows($res) < 1){
			$errors[] = "Could not create MySQL Procedure. Please make sure you have these privileges: CREATE_ROUTINE, DROP, EXECUTE";
		}
		mysql_query("DROP PROCEDURE IF EXISTS `".TeraWurflConfig::$TABLE_PREFIX."_TestProc`",$this->dbcon);
		return $errors;
	}
	public function getServerVersion(){
		$res = mysql_query("SELECT version() AS `version`",$this->dbcon);
		if(!$res || mysql_num_rows($res) == 0) return false;
		$row = mysql_fetch_assoc($res);
		return($row['version']);
	}
}
