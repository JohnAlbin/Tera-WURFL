<?php

/*
 * Recognising Hedy devices from their user agents
 *
 */

require_once 'test_helper.php';

class HedyTest extends UnitTestCase {

  var $wurfl;


  function test_hedy_h797_ver1() {
    foreach(array(
'HEDY_H797_PLXBROW'
    ) as $ua) {
        $this->checkUA($ua, 'hedy_h797_ver1');
      }
  }



  function test_hedy_m881_ver1() {
    foreach(array(
'HEDY_M881_PLXBROW'
    ) as $ua) {
        $this->checkUA($ua, 'hedy_m881_ver1');
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

  function hedyTest() {
    $this->UnitTestCase('hedy Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new HedyTest();
$test->run(new TextReporter());

?>
