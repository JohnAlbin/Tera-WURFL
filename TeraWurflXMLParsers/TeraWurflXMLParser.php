<?php
abstract class TeraWurflXMLParser {

	public static $TYPE_WURFL = 'wurfl';
	public static $TYPE_PATCH = 'patch';
	
	public $wurflVersion;
	public $wurflLastUpdated;
	public $devices = array();
	public $errors = array();
	
	protected static $PARSER_SIMPLEXML = 'simplexml';
	protected static $PARSER_XMLREADER = 'xmlreader';
	
	protected $parser_type;
	protected $file_type;
	protected $xml;
		
	abstract public function open($filename,$file_type);
	abstract public function process(Array &$destination);
	protected function cleanValue($value){
		if($value === 'true') return true;
		if($value === 'false')return false;
		// Clean Numeric values by loosely comparing the (float) to the (string)
		$numval = (float)$value;
		if(strcmp($value,$numval)==0)$value=$numval;
		return $value;
	}
	protected function enabled($cap_or_group){
		return in_array($cap_or_group,TeraWurflConfig::$CAPABILITY_FILTER);
	}
	
	final public static function getInstance(){
		if(function_exists('simplexml_load_file')){
			require_once realpath(dirname(__FILE__).'/TeraWurflXMLParser_SimpleXML.php');
			return new TeraWurflXMLParser_SimpleXML();
		}elseif(class_exists('XMLReader')){
			require_once realpath(dirname(__FILE__).'/TeraWurflXMLParser_XMLReader.php');
			return new TeraWurflXMLParser_XMLReader();
		}else{
			throw new Exception("No suitable XML Parser was found.  Please enable XMLReader or SimpleXML");
		}
	}
}








