<?php

/*
 * Recognising Sendo devices from their user agents
 *
 */

require_once 'test_helper.php';

class SendoTest extends UnitTestCase {

  var $wurfl;


  function test_sendo_s360_ver1() {
    foreach(array(
'SendoS360/01'
    ) as $ua) {
        $this->checkUA($ua, 'sendo_s360_ver1');
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

  function sendoTest() {
    $this->UnitTestCase('sendo Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SendoTest();
$test->run(new TextReporter());

?>
