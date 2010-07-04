<?php

/*
 * Recognising Edl devices from their user agents
 *
 */

require_once 'test_helper.php';

class EdlTest extends UnitTestCase {

  var $wurfl;


  function test_edl_c888_ver1() {
    foreach(array(
'EDL C888  Nucleus RTOS/V1.11.19 MTK6225/06B Release/06.20.2007 Browser/Teleca Profile/CLDC-1.0',
'EDL C888 Nucleus RTOS/V1.11.19 MTK6225/06B Release/06.20.2007 Browser/Teleca Profile/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'edl_c888_ver1');
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

  function edlTest() {
    $this->UnitTestCase('edl Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new EdlTest();
$test->run(new TextReporter());

?>
