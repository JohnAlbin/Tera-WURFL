<?php

/*
 * Recognising Mo devices from their user agents
 *
 */

require_once 'test_helper.php';

class MoTest extends UnitTestCase {

  var $wurfl;


  function test_mo_milla_ver1() {
    foreach(array(
'MOT-MILLA/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mo_milla_ver1');
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

  function moTest() {
    $this->UnitTestCase('mo Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MoTest();
$test->run(new TextReporter());

?>
