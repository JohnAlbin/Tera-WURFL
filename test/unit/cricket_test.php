<?php

/*
 * Recognising Cricket devices from their user agents
 *
 */

require_once 'test_helper.php';

class CricketTest extends UnitTestCase {

  var $wurfl;


  function test_cricket_a100_ver1() {
    foreach(array(
'Cricket-A100/1.0 UP.Browser/6.3.0.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'cricket_a100_ver1');
      }
  }



  function test_cricket_a200_ver1() {
    foreach(array(
'Cricket-A200/1.0 UP.Browser/6.3.0.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'cricket_a200_ver1');
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

  function cricketTest() {
    $this->UnitTestCase('cricket Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new CricketTest();
$test->run(new TextReporter());

?>
