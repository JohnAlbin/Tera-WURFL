<?php

/*
 * Recognising Voxtel devices from their user agents
 *
 */

require_once 'test_helper.php';

class VoxtelTest extends UnitTestCase {

  var $wurfl;


  function test_voxtel_bd40_ver1() {
    foreach(array(
'http://Anonymouse.org/ (Unix)',
'http://mms.ntwls.net/uaprofs/r350_generic.xml UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'http://mms.revol.us/uaprofs/E1000-JV/1.0.09 UP.Browser/7.2.6.1.475 (GUI) MMP/2.0',
'http://mms.revol.us/uaprofs/kyo-e2000/1012 UP.Browser/7.2.6.1.567 (GUI) MMP/2.0',
'http://mms.revol.us/uaprofs/kyo-e2000/1013 UP.Browser/7.2.6.1.567 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'voxtel_bd40_ver1');
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

  function voxtelTest() {
    $this->UnitTestCase('voxtel Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new VoxtelTest();
$test->run(new TextReporter());

?>
