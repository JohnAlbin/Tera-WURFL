<?php

/*
 * Verify that all constant WURFL IDs in use are present in the loaded WURFL
 *
 */

require_once 'test_helper.php';

class FallbackTest extends UnitTestCase {

	var $wurfl;
	var $tables = array();

	function test_fallbacks_exist(){
		foreach($this->tables as $table){
			echo "--> Processing $table ";
			$devices = $this->wurfl->db->getFullDeviceList(TeraWurflConfig::$TABLE_PREFIX . '_' . $table);
			echo "(".count($devices)." devices)\n";
			if($this->wurfl->db->db_implements_fallback){
				foreach($devices as $id => $ua){
					$result = null;
					try{
						$result = $this->wurfl->db->getDeviceFallBackTree($id);
					}catch(Exception $e){
						$result = false;
						echo "Error with $id: ". $e->getMessage() . "\n";
					}
					if($result === false){
						$this->assertTrue($result,"Threw exception during detection of $id");
					}elseif(!is_array($result) || !is_array($result[count($result)-1]) || !array_key_exists("id",$result[count($result)-1])){
						echo var_export($result,true)."\n";
						$this->assertTrue(false,"Result did not contain device data while detecting $id");
					}else{
						$this->assertEqual($result[count($result)-1]['id'],"generic","Device [$id] did not fall back to root device [generic], instead it fell back to [{$result[count($result)-1]['id']}]. Device [{$result[count($result)-1]['fall_back']}] doesn't exist or there is bug in the fallback processor.");
					}
				}
			}else{
				foreach($devices as $device){
					
				}
			}
		}
	}

	############################################################
	
	function FallbackTest() {
		$this->UnitTestCase('Fallback Sanity Test');
	}

	function setUp() {
		$this->wurfl = new TeraWurfl();
		foreach(UserAgentFactory::$matchers as $matcher){
			$this->tables[] = $matcher;
		}
	}

	function tearDown() {
	}
}

$test = new FallbackTest();
$test->run(new TextReporter());

?>
