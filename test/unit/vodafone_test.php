<?php

/*
 * Recognising Vodafone devices from their user agents
 *
 */

require_once 'test_helper.php';

class VodafoneTest extends TeraWurflTestCase {

  var $wurfl;


  function test_vodafone_332_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone332/B132 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/4.1 Profile',
'Vodafone/1.0/0Vodafone332/B136 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/4.1 Profile',
'Vodafone/1.0/0Vodafone332/B137 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/4.1 Profile',
'Vodafone/1.0/0Vodafone332/B139 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/4.1 Profile',
'Vodafone/1.0/0Vodafone340/V2.15.M00.02.38 Browser/OperaMini/v4.2.0087-2009-09-30(0)',
'Vodafone/1.0/0Vodafone340/V2.22.M00.02.40 Browser/OperaMini/v4.2.0087-2009-09-30(0)',
'Vodafone/1.0/0Vodafone540/1.0 Browser/OperaMini/4.2.14962',
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_332_ver1');
      }
  }



  function test_vodafone_736_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone735/B712 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone736/B712SP01 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone736/B715 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone736/B716SP01 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone736/B717 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_736_ver1');
      }
  }



  function test_vodafone_830i_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone830i/B115SP04 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone830i/B115SP10 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_830i_ver1');
      }
  }



  function test_vodafone_htc_touch_jade_ver1() {
    foreach(array(
'Vodafone/1.0/HTC_Jade/1.40.164.2 Opera/9.50 (Windows NT 5.1; U; es-ES)'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_htc_touch_jade_ver1');
      }
  }



  function test_vodafone_indie_ver1() {
    foreach(array(
'Indie/Indie_SF_B07A101 Obigo/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_indie_ver1');
      }
  }



  function test_vodafone_toshiba_803_ver1() {
    foreach(array(
'Vodafone/Toshiba803/1.0/EU001 Browser/VF-Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_toshiba_803_ver1');
      }
  }



  function test_vodafone_v1510_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) Vodafone/1.0/HTC_v1510/1.23.162.2',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) Vodafone/1.0/HTC_v1510/1.23.162.4',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) Vodafone/1.0/HTC_v1510/1.23.164.7'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_v1510_ver1');
      }
  }



  function test_vodafone_v1605_ver1() {
    foreach(array(
'Vodafone/1.0/HTC_Mercury/1.20.161.6/Mozilla/4.0 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; MIDP-2.0 Configuration/CLDC-1.1; PPC; 240x320)/UCWEB7.0.0.41/31/352'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_v1605_ver1');
      }
  }



  function test_vodafone_v1640_ver1() {
    foreach(array(
'Vodafone/1.0/v1640/1.30.260 ITA/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE)'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_v1640_ver1');
      }
  }



  function test_vodafone_v7505_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Vodafone/1.0/HTC_V7505/1.23.164.1'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_v7505_ver1');
      }
  }



  function test_vodafone_vda_gps_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) VDA-GPS/R1 Mozilla/4.0/WAP2.0 Profile/MIDP2.0 Configuration/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_vda_gps_ver1');
      }
  }



  function test_vodafone_vpa_compactiv_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Vodafone/1.0/HTC_VPACompactIV/4.14.162.2',
'Mozilla/5.0 (PDA; NF35WMPRO/1.0; like Gecko) NetFront/3.5'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_vpa_compactiv_ver1');
      }
  }



  function test_vodafone_vpa_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Vodafone/1.0/VPA_Touch/2.24.162.52'
    ) as $ua) {
        $this->checkUA($ua, 'vodafone_vpa_ver1');
      }
  }



  ############################################################


  function vodafoneTest() {
    $this->UnitTestCase('vodafone Test');
  }


}

$test = new VodafoneTest();
$test->run(new TextReporter());

?>
