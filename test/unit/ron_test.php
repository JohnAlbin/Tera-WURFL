<?php

/*
 * Recognising Ron devices from their user agents
 *
 */

require_once 'test_helper.php';

class RonTest extends UnitTestCase {

  var $wurfl;


  function test_ron_d09_ver1() {
    foreach(array(
'RON_D09_01/DG_D09/WAP2.0 Profile RON_D09_01/DG_D09/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'ron_d09_ver1');
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

  function ronTest() {
    $this->UnitTestCase('ron Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new RonTest();
$test->run(new TextReporter());

?>
