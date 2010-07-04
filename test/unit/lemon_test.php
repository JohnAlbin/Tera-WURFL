<?php

/*
 * Recognising Lemon devices from their user agents
 *
 */

require_once 'test_helper.php';

class LemonTest extends UnitTestCase {

  var $wurfl;


  function test_lemon_iq_707_ver1() {
    foreach(array(
'LEMON IQ707'
    ) as $ua) {
        $this->checkUA($ua, 'lemon_iq_707_ver1');
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

  function lemonTest() {
    $this->UnitTestCase('lemon Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new LemonTest();
$test->run(new TextReporter());

?>
