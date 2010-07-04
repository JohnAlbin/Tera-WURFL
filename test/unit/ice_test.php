<?php

/*
 * Recognising Ice devices from their user agents
 *
 */

require_once 'test_helper.php';

class IceTest extends UnitTestCase {

  var $wurfl;


  function test_ice_ver1() {
    foreach(array(
'Ice'
    ) as $ua) {
        $this->checkUA($ua, 'ice_ver1');
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

  function iceTest() {
    $this->UnitTestCase('ice Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new IceTest();
$test->run(new TextReporter());

?>
