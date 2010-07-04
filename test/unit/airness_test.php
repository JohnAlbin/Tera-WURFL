<?php

/*
 * Recognising Airness devices from their user agents
 *
 */

require_once 'test_helper.php';

class AirnessTest extends UnitTestCase {

  var $wurfl;


  function test_airness_mk99_ver1() {
    foreach(array(
'MK99'
    ) as $ua) {
        $this->checkUA($ua, 'airness_mk99_ver1');
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

  function airnessTest() {
    $this->UnitTestCase('airness Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AirnessTest();
$test->run(new TextReporter());

?>
