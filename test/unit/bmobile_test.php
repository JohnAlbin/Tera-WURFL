<?php

/*
 * Recognising Bmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class BmobileTest extends UnitTestCase {

  var $wurfl;


  function test_bmobile_eve_ver1() {
    foreach(array(
'EVE/1.0 TMSS-Browser/1.0.0 Profile/MIDP/2.0-compatible Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'bmobile_eve_ver1');
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

  function bmobileTest() {
    $this->UnitTestCase('bmobile Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new BmobileTest();
$test->run(new TextReporter());

?>
