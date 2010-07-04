<?php

/*
 * Recognising Skyworth devices from their user agents
 *
 */

require_once 'test_helper.php';

class SkyworthTest extends UnitTestCase {

  var $wurfl;


  function test_skyworth_t650_ver1() {
    foreach(array(
'SKYWORTH-T650/S100/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'skyworth_t650_ver1');
      }
  }



  function test_skyworth_t700_ver1() {
    foreach(array(
'SKYWORTH-T700/S200/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'skyworth_t700_ver1');
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

  function skyworthTest() {
    $this->UnitTestCase('skyworth Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SkyworthTest();
$test->run(new TextReporter());

?>
