<?php

/*
 * Recognising Kyocera devices from their user agents
 *
 */

require_once 'test_helper.php';

class KyoceraTest extends UnitTestCase {

  var $wurfl;


  function test_kyocera_e4000_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) /Kyocera-E4000'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_e4000_ver1');
      }
  }



  function test_kyocera_glide_ver1() {
    foreach(array(
'KWC-Glide/ UP.Browser/7.2.7.2.541 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_glide_ver1');
      }
  }



  function test_kyocera_k323_ver1() {
    foreach(array(
'KWC-K323/1.0.10 UP.Browser/6.2.3.9.g.1.100 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_k323_ver1');
      }
  }



  function test_kyocera_m1000_2xo_ver1() {
    foreach(array(
'M1000-2X0/1.0.11 UP.Browser/6.2.3.9.g.1.111 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_m1000_2xo_ver1');
      }
  }



  function test_kyocera_m1400_ver1() {
    foreach(array(
'KWC-M1400/AAZ10043 UP.Browser/7.2.7.2.536 (GUI) MMP/2.0',
'M1400/AAR1004 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_m1400_ver1');
      }
  }



  function test_kyocera_m2000_subaan0314_ver1() {
    foreach(array(
'KWC-M2000/ZQ1000 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_m2000_subaan0314_ver1');
      }
  }



  function test_kyocera_m2000_ver1() {
    foreach(array(
'KWC-M2000/AAN1002 UP.Browser/7.2.7.2.530 (GUI) MMP/2.0',
'KWC-M2000/AAN1004 UP.Browser/7.2.7.2.530 (GUI) MMP/2.0',
'M2000-ZQ/ZQ1000 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0',
'M2000-ZQ/ZQ1003 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_m2000_ver1');
      }
  }



  function test_kyocera_m6000_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Milestone)'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_m6000_ver1');
      }
  }



  function test_kyocera_neo_e1100_ver1() {
    foreach(array(
'KWC-Lightpipe/ UP.Browser/7.2.7.2.531 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_neo_e1100_ver1');
      }
  }



  function test_kyocera_s1300_ver1() {
    foreach(array(
'KWC-S1300/ UP.Browser/7.2.6.1.838 (GUI) MMP/2.0',
'KWC-S1300/ UP.Browser/7.2.6.1.839 (GUI) MMP/2.0',
'KWC-S1300/1001 UP.Browser/7.2.6.1.841 (GUI) MMP/2.0',
'KWC-S1300/1002 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0',
'KWC-S1300/1002 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0 Novarra-Vision/8.0',
'KWC-S1300/1007 UP.Browser/7.2.6.1.839 (GUI) MMP/2.0',
'KWC-S1300/10081 UP.Browser/7.2.6.1.839 (GUI) MMP/2.0',
'KWC-S1300/1009 UP.Browser/7.2.6.1.839 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_s1300_ver1');
      }
  }



  function test_kyocera_s2300_ver1() {
    foreach(array(
'KWC-S2300/ABQ1000 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0',
'KWC-S2300/ABR1001 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_s2300_ver1');
      }
  }



  function test_kyocera_zio_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Zio)'
    ) as $ua) {
        $this->checkUA($ua, 'kyocera_zio_ver1');
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

  function kyoceraTest() {
    $this->UnitTestCase('kyocera Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new KyoceraTest();
$test->run(new TextReporter());

?>
