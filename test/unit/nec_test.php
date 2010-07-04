<?php

/*
 * Recognising Nec devices from their user agents
 *
 */

require_once 'test_helper.php';

class NecTest extends UnitTestCase {

  var $wurfl;


  function test_nec_c616_ver1() {
    foreach(array(
'ACS-NF/3.0 NEC-c616/001.01'
    ) as $ua) {
        $this->checkUA($ua, 'nec_c616_ver1');
      }
  }



  function test_nec_e121_ver1() {
    foreach(array(
'NEC-e121/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.9.d.1 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nec_e121_ver1');
      }
  }



  function test_nec_e232_ver1() {
    foreach(array(
'NEC-E232/1.0 UP.Browser/6.2.2.6.e.1.101 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nec_e232_ver1');
      }
  }



  function test_nec_e313_ver1() {
    foreach(array(
'ACS-NF/3.0 NEC-e313/001.00',
'ACS-NF/3.0 NEC-e313/001.01'
    ) as $ua) {
        $this->checkUA($ua, 'nec_e313_ver1');
      }
  }



  function test_nec_e353_ver1() {
    foreach(array(
'NEC-e353/001.00 ACS-NF/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 Qtv/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nec_e353_ver1');
      }
  }



  function test_nec_e616_ver1() {
    foreach(array(
'ACS-NF/3.0 NEC-e616/001.01'
    ) as $ua) {
        $this->checkUA($ua, 'nec_e616_ver1');
      }
  }



  function test_nec_n600_ver1() {
    foreach(array(
'NEC-N600/1.0 HopenOS/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nec_n600_ver1');
      }
  }



  function test_nec_n6206_ver1() {
    foreach(array(
'NEC-N6206/1.0 Release/06.15.2006 Browser/CMS2.0.0 Profile/MIDP-2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nec_n6206_ver1');
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

  function necTest() {
    $this->UnitTestCase('nec Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new NecTest();
$test->run(new TextReporter());

?>
