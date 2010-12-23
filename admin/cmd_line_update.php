<?php
/**
 * Tera_WURFL - PHP MySQL driven WURFL
 * 
 * Tera-WURFL was written by Steve Kamerman, and is based on the
 * Java WURFL Evolution package by Luca Passani and WURFL PHP Tools by Andrea Trassati.
 * This version uses a MySQL database to store the entire WURFL file, multiple patch
 * files, and a persistent caching mechanism to provide extreme performance increases.
 * 
 * @package TeraWurflAdmin
 * @author Steve Kamerman <stevekamerman AT gmail.com>
 * @version Stable 2.1.2 $Date: 2010/05/14 15:53:02
 * @license http://www.mozilla.org/MPL/ MPL Vesion 1.1
 */
/**
 * Include required files
 */
require_once realpath(dirname(__FILE__).'/../TeraWurfl.php');
require_once realpath(dirname(__FILE__).'/../TeraWurflLoader.php');
require_once realpath(dirname(__FILE__).'/../TeraWurflXMLParsers/TeraWurflXMLParser.php');
require_once realpath(dirname(__FILE__).'/../TeraWurflXMLParsers/TeraWurflXMLParser_XMLReader.php');
require_once realpath(dirname(__FILE__).'/../TeraWurflXMLParsers/TeraWurflXMLParser_SimpleXML.php');

error_reporting(E_ALL);
if(TeraWurflConfig::$OVERRIDE_MEMORY_LIMIT){
	ini_set("memory_limit",TeraWurflConfig::$MEMORY_LIMIT);
}
/**
 * Set the script time limit (default: 20 minutes)
 */
set_time_limit(60*20);

$source = (isset($_GET['source']))? $_GET['source']: "local";

$base = new TeraWurfl();
if($base->db->connected !== true){
	throw new Exception("Cannot connect to database: ".$base->db->errors[0]);
}

// Clear the cache
$base->db->createCacheTable();

$newfile = TeraWurfl::absoluteDataDir().TeraWurflConfig::$WURFL_FILE.".zip";
$wurflfile = TeraWurfl::absoluteDataDir().TeraWurflConfig::$WURFL_FILE;

if($source == "remote" || $source == "remote_cvs"){
	if($source == "remote"){
		$dl_url = TeraWurflConfig::$WURFL_DL_URL; 
	}elseif($source == "remote_cvs"){
		$dl_url = TeraWurflConfig::$WURFL_CVS_URL;
	}
	echo "Downloading WURFL from $dl_url ...\n\n";
	flush();
	if(!file_exists($newfile) && !is_writable($base->rootdir.TeraWurflConfig::$DATADIR)){
		$base->toLog("Cannot write to data directory (permission denied)",LOG_ERR);
		Throw New Exception("Fatal Error: Cannot write to data directory (permission denied). (".$base->rootdir.TeraWurflConfig::$DATADIR.")\n\nPlease make the data directory writable by the user or group that runs the webserver process, in Linux this command would do the trick if you're not too concerned about security: chmod -R 777 ".$base->rootdir.TeraWurflConfig::$DATADIR);
		exit(1);
	}
	if(file_exists($newfile) && !is_writable($newfile)){
		$base->toLog("Cannot overwrite WURFL file (permission denied)",LOG_ERR);
		Throw New Exception("Fatal Error: Cannot overwrite WURFL file (permission denied). (".$base->rootdir.TeraWurflConfig::$DATADIR.")\n\nPlease make the data directory writable by the user or group that runs the webserver process, in Linux this command would do the trick if you're not too concerned about security: chmod -R 777 ".$base->rootdir.TeraWurflConfig::$DATADIR);
		exit(1);
	}
	// Download the new WURFL file and save it in the DATADIR as wurfl.zip
	@ini_set('user_agent', "PHP/Tera-WURFL_$version");
	$download_start = microtime(true);
	if(!$gzdata = file_get_contents($dl_url)){
		Throw New Exception("Error: Unable to download WURFL file from ".TeraWurflConfig::$WURFL_DL_URL);
		exit(1);
	}
/*	$destination=fopen($newfile,"w"); 
	$source=fopen($dl_url,"r"); 
	while ($block=fread($source,256*1024)) fwrite($destination,$block);
	fclose($source);
	fclose($destination);
*/
	$download_time = microtime(true) - $download_start;
	file_put_contents($newfile,$gzdata);
	$gzsize = WurflSupport::formatBytes(filesize($newfile));
	// Try to use ZipArchive, included from 5.2.0
	if(class_exists("ZipArchive")){
		$zip = new ZipArchive();
		if ($zip->open(str_replace('\\','/',$newfile)) === TRUE) {
		    $zip->extractTo(str_replace('\\','/',dirname($wurflfile)),array('wurfl.xml'));
		    $zip->close();
		} else {
		    Throw New Exception("Error: Unable to extract wurfl.xml from downloaded archive: $newfile");
			exit(1);
		}
	}else{
		system("gunzip $newfile");
	}
	$size = WurflSupport::formatBytes(filesize($wurflfile))." [$gzsize compressed]";
	$download_rate = WurflSupport::formatBitrate(filesize($newfile), $download_time);
	$ok = true;
	echo "done ($wurflfile: $size)\nDownloaded in $download_time sec @ $download_rate \n\n";
	usleep(50000);
	flush();
}

$loader = new TeraWurflLoader($base);
//$ok = $base->db->initializeDB();
$ok = $loader->load();
if($ok){
	echo "Database Update OK\n";
	echo "Total Time: ".$loader->totalLoadTime()."\n";
	echo "Parse Time: ".$loader->parseTime()." (".$loader->getParserName().")\n";
	echo "Validate Time: ".$loader->validateTime()."\n";
	echo "Sort Time: ".$loader->sortTime()."\n";
	echo "Patch Time: ".$loader->patchTime()."\n";
	echo "Database Time: ".$loader->databaseTime()."\n";
	echo "Cache Rebuild Time: ".$loader->cacheRebuildTime()."\n";
	echo "Number of Queries: ".$base->db->numQueries."\n";
	if(version_compare(PHP_VERSION,'5.2.0') === 1){
		echo "PHP Memory Usage: ".WurflSupport::formatBytes(memory_get_usage())."\n";
	}
	echo "--------------------------------\n";
	echo "WURFL Version: ".$loader->version." (".$loader->last_updated.")\n";
	echo "WURFL Devices: ".$loader->mainDevices."\n";
	echo "PATCH New Devices: ".$loader->patchAddedDevices."\n";
	echo "PATCH Merged Devices: ".$loader->patchMergedDevices."\n";
}else{
	echo "ERROR LOADING DATA!\n";
	echo "Errors: \n\n";
	echo htmlspecialchars(var_export($loader->errors,true));
}

