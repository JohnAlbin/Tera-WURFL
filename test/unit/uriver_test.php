<?php

/*
 * Recognising Uriver devices from their user agents
 *
 */

require_once 'test_helper.php';

class UriverTest extends UnitTestCase {

  var $wurfl;


  function test_uriver_sp500_ver1() {
    foreach(array(
'Uriver SP500/Teleca/Q03C1.22 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'uriver_sp500_ver1');
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

  function uriverTest() {
    $this->UnitTestCase('uriver Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new UriverTest();
$test->run(new TextReporter());

?>
