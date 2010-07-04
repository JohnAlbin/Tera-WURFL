<?php

/*
 * Recognising Gionee devices from their user agents
 *
 */

require_once 'test_helper.php';

class GioneeTest extends UnitTestCase {

  var $wurfl;


  function test_gionee_i9_ver1() {
    foreach(array(
'GIONEE-I9/SW1.0.0/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'gionee_i9_ver1');
      }
  }



  function test_gionee_l10_ver1() {
    foreach(array(
'GIONEE-L10/SW1.0.0/WAP2.0',
'GIONEE-L10/SW1.0.0/WAP2.0, 19'
    ) as $ua) {
        $this->checkUA($ua, 'gionee_l10_ver1');
      }
  }



  function test_gionee_v500_ver1() {
    foreach(array(
'GIONEE-V500/SW1.0.0/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'gionee_v500_ver1');
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

  function gioneeTest() {
    $this->UnitTestCase('gionee Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new GioneeTest();
$test->run(new TextReporter());

?>
