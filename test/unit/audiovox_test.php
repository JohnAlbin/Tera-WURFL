<?php

/*
 * Recognising Audiovox devices from their user agents
 *
 */

require_once 'test_helper.php';

class AudiovoxTest extends UnitTestCase {

  var $wurfl;


  function test_audiovox_cdm8940_ver1() {
    foreach(array(
'AUDIOVOX-CDM8940 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'audiovox_cdm8940_ver1');
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

  function audiovoxTest() {
    $this->UnitTestCase('audiovox Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AudiovoxTest();
$test->run(new TextReporter());

?>
