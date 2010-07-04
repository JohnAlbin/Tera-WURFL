<?php

/*
 * Recognising Utstargz devices from their user agents
 *
 */

require_once 'test_helper.php';

class UtstargzTest extends UnitTestCase {

  var $wurfl;


  function test_utstargz1z_ver1() {
    foreach(array(
'utstargz1/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstargz1z_ver1');
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

  function utstargzTest() {
    $this->UnitTestCase('utstargz Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new UtstargzTest();
$test->run(new TextReporter());

?>
