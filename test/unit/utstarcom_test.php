<?php

/*
 * Recognising Utstarcom devices from their user agents
 *
 */

require_once 'test_helper.php';

class UtstarcomTest extends TeraWurflTestCase {

  var $wurfl;


  function test_utstarcom_8964vm_ver1() {
    foreach(array(
'UTSTARCOM-CDM-8964VM UP.Browser/7.2.7.2.398 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_8964vm_ver1');
      }
  }



  function test_utstarcom_c731_ver1() {
    foreach(array(
'pcdc731/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0',
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_c731_ver1');
      }
  }


  function test_utstarcom_c711_ver1() {
    foreach(array(
'utstarc711/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_c711_ver1');
      }
  }



  function test_utstarcom_cdm_7126_ver1() {
    foreach(array(
'UTSTARCOM-CDM7126/1.0 UP.Browser/6.3.0.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_cdm_7126_ver1');
      }
  }



  function test_utstarcom_cdm_8935_ver1() {
    foreach(array(
'CDM8935 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_cdm_8935_ver1');
      }
  }



  function test_utstarcom_cdm_8964_ver1() {
    foreach(array(
'CDM-8964 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_cdm_8964_ver1');
      }
  }



  function test_utstarcom_gpfm1238_ver1() {
    foreach(array(
'GPF168L',
'GPFM1238/1.0 MTK6223C/07B Release/03.16.2009 Browser/Obigo2.0',
'GPFM1238/1.0 MTK6223C/07B Release/03.16.2009 Browser/Obigo2.0, GPFM1238/1.0 MTK6223C/07B Release/03.16.2009 Browser/Obigo2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_gpfm1238_ver1');
      }
  }



  function test_utstarcom_gtx75_ver1() {
    foreach(array(
'UTSTARCOM-GTX75/UC1.88 POLARIS/6.00 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'UTSTARCOM-GTX75/UC1.88 POLARIS/6.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_gtx75_ver1');
      }
  }



  function test_utstarcom_smt5800_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) 320x320; VZW; UTStar-SMT5800; Window Mobile 6.0 Standard;',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 320x320; VZW; UTStar-SMT5800; Window Mobile 6.1 Standard;'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_smt5800_ver1');
      }
  }



  function test_utstarcom_sprint_mp6900sp_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Sprint MP6900SP',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Sprint MP6900SP'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_sprint_mp6900sp_ver1');
      }
  }



  function test_utstarcom_sprint_mp6950sp_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Sprint MP6950SP'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_sprint_mp6950sp_ver1');
      }
  }



  function test_utstarcom_txt_8010_ver1() {
    foreach(array(
'TXT8010/T05_0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_txt_8010_ver1');
      }
  }



  function test_utstarcom_xv6800_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) 320x320; VZW; UTStar-XV6800; Window Mobile 6.0 Professional;',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 320x320; VZW; UTStar-XV6800; Window Mobile 6.1 Professional;'
    ) as $ua) {
        $this->checkUA($ua, 'utstarcom_xv6800_ver1');
      }
  }



  ############################################################


  function utstarcomTest() {
    $this->UnitTestCase('utstarcom Test');
  }


}

$test = new UtstarcomTest();
$test->run(new TextReporter());

?>
