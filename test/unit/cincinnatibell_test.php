<?php

/*
 * Recognising CincinnatiBell devices from their user agents
 *
 */

require_once 'test_helper.php';

class CincinnatiBellTest extends UnitTestCase {

  var $wurfl;


  function test_cincinnatibell_blaze_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; CSL_Spice_MI300)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; CBW Blaze Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; CBW Blaze)',
    ) as $ua) {
        $this->checkUA($ua, 'cincinnatibell_blaze_ver1');
      }
  }



  ############################################################

  function checkUA($agent, $expected) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $actual =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($expected != $actual)
      echo "Expected: $expected, got: $actual\nUA: $agent\n";
    $this->assertEqual($expected, $actual);
  }

  function cincinnatibellTest() {
    $this->UnitTestCase('cincinnatibell Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new CincinnatiBellTest();
$test->run(new TextReporter());

?>
