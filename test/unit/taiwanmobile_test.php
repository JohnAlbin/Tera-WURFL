<?php

/*
 * Recognising Taiwanmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class TaiwanmobileTest extends UnitTestCase {

  var $wurfl;


  function test_taiwanmobile_t1_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; zh-TW; TaiwanMobileT1)'
    ) as $ua) {
        $this->checkUA($ua, 'taiwanmobile_t1_ver1');
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

  function taiwanmobileTest() {
    $this->UnitTestCase('taiwanmobile Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new TaiwanmobileTest();
$test->run(new TextReporter());

?>
