<?php

/*
 * Recognising Tsm devices from their user agents
 *
 */

require_once 'test_helper.php';

class TsmTest extends UnitTestCase {

  var $wurfl;


  function test_tsm_100_ver1() {
    foreach(array(
'TSM-100/161654C0 Browser/1.2.1 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'tsm_100_ver1');
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

  function tsmTest() {
    $this->UnitTestCase('tsm Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new TsmTest();
$test->run(new TextReporter());

?>
