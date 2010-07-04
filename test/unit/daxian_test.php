<?php

/*
 * Recognising Daxian devices from their user agents
 *
 */

require_once 'test_helper.php';

class DaxianTest extends UnitTestCase {

  var $wurfl;


  function test_daxian_d758_ver1() {
    foreach(array(
'D758/1.00 Nucleus RTOS/V1.11.19 MTK6225/07B Release/04.25.2008 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'daxian_d758_ver1');
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

  function daxianTest() {
    $this->UnitTestCase('daxian Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new DaxianTest();
$test->run(new TextReporter());

?>
