<?php

/*
 * Recognising Longcos devices from their user agents
 *
 */

require_once 'test_helper.php';

class LongcosTest extends UnitTestCase {

  var $wurfl;


  function test_longcos_sk16d_ver1() {
    foreach(array(
'LONGCOS_SK16'
    ) as $ua) {
        $this->checkUA($ua, 'longcos_sk16d_ver1');
      }
  }



  function test_longcos_sk18_ver1() {
    foreach(array(
'LONGCOS_SK18_2SIM'
    ) as $ua) {
        $this->checkUA($ua, 'longcos_sk18_ver1');
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

  function longcosTest() {
    $this->UnitTestCase('longcos Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new LongcosTest();
$test->run(new TextReporter());

?>
