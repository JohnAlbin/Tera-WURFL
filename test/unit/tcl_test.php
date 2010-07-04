<?php

/*
 * Recognising Tcl devices from their user agents
 *
 */

require_once 'test_helper.php';

class TclTest extends UnitTestCase {

  var $wurfl;


  function test_tcl_a288_ver1() {
    foreach(array(
'TCL_A288_01/L3M0501.1.0_M411A/WAP2.0 Profile',
'TCL_A288_01/L3M0501.1.0_M411A/WAP2.0 Profile TCL_A288_01/L3M0501.1.0_M411A/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'tcl_a288_ver1');
      }
  }



  function test_tcl_e300_ver1() {
    foreach(array(
'TCL-e300/w05.44.08/WAP-2.0/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'tcl_e300_ver1');
      }
  }



  function test_tcl_e787_ver1() {
    foreach(array(
'TCL-E787/L3G0001.1.0_M451B/MAUI WAP Browser TCL-E787/L3G0001.1.0_M451B/MAUI WAP Browser',
'TCL-E787/T3K0001.1.0_M451B/MAUI WAP Browser TCL-E787/T3K0001.1.0_M451B/MAUI WAP Browser'
    ) as $ua) {
        $this->checkUA($ua, 'tcl_e787_ver1');
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

  function tclTest() {
    $this->UnitTestCase('tcl Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new TclTest();
$test->run(new TextReporter());

?>
