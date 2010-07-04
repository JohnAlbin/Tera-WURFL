<?php

/*
 * Recognising Lxe devices from their user agents
 *
 */

require_once 'test_helper.php';

class LxeTest extends UnitTestCase {

  var $wurfl;


  function test_lxe_mx8_ver1() {
    foreach(array(
'MX8/1.00 Nucleus RTOS/V1.11.19 MTK6225/07B Release/04.25.2008 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lxe_mx8_ver1');
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

  function lxeTest() {
    $this->UnitTestCase('lxe Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new LxeTest();
$test->run(new TextReporter());

?>
