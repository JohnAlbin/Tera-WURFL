<?php

/*
 * Recognising Pcd devices from their user agents
 *
 */

require_once 'test_helper.php';

class PcdTest extends UnitTestCase {

  var $wurfl;


  function test_pcd_txt8026_ver1() {
    foreach(array(
'TXT8026/T05_0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'pcd_txt8026_ver1');
      }
  }



  function test_pcd_txt8030_ver1() {
    foreach(array(
'TXT8030/T05_0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'pcd_txt8030_ver1');
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

  function pcdTest() {
    $this->UnitTestCase('pcd Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new PcdTest();
$test->run(new TextReporter());

?>
