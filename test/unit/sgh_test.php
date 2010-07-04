<?php

/*
 * Recognising Sgh devices from their user agents
 *
 */

require_once 'test_helper.php';

class SghTest extends UnitTestCase {

  var $wurfl;


  function test_sgh_a401_ver1() {
    foreach(array(
'SGH-A401 SHP/VPP/R5 OPENWAVE/7.0.2 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_a401_ver1');
      }
  }



  function test_sgh_a436_ver1() {
    foreach(array(
'SAMSUNG-SGH-A436/ Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_a436_ver1');
      }
  }



  function test_sgh_a717_ver1() {
    foreach(array(
'SAMSUNG-SGH-A717/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_a717_ver1');
      }
  }



  function test_sgh_a727_ver1() {
    foreach(array(
'SAMSUNG-SGH-A727/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A727/A727UCGL1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_a727_ver1');
      }
  }



  function test_sgh_a747_ver1() {
    foreach(array(
'SAMSUNG-SGH-A747/A747UCHB3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A747/UCGJ6 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_a747_ver1');
      }
  }



  function test_sgh_a801_ver1() {
    foreach(array(
'SAMSUNG-SGH-A801/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_a801_ver1');
      }
  }



  function test_sgh_m300v_vodafone_ver1() {
    foreach(array(
'Vodafone/1.0/SamsungSGHM300V/M300BUGG2/Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_m300v_vodafone_ver1');
      }
  }



  function test_sgh_p300() {
    foreach(array(
'SEC-SGHP300/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_p300');
      }
  }



  function test_sgh_t209_ver1() {
    foreach(array(
'SAMSUNG-SGH-T209/T209UVFD3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-T209R/T209UVFG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_t209_ver1');
      }
  }



  function test_sgh_t219_ver1() {
    foreach(array(
'SAMSUNG-SGH-T219/T219UVFL7 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_t219_ver1');
      }
  }



  function test_sgh_t219s_ver1() {
    foreach(array(
'SAMSUNG-SGH-T219S/T219UVGJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_t219s_ver1');
      }
  }



  function test_sgh_t339_ver1() {
    foreach(array(
'SAMSUNG-SGH-T339/T339UVHD8 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_t339_ver1');
      }
  }



  function test_sgh_z130_ver1() {
    foreach(array(
'SGH-Z130/1.0 NF3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sgh_z130_ver1');
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

  function sghTest() {
    $this->UnitTestCase('sgh Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SghTest();
$test->run(new TextReporter());

?>
