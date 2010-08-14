<?php

/*
 * Recognising Softbank devices from their user agents
 *
 */

require_once 'test_helper.php';

class SoftbankTest extends TeraWurflTestCase {

  var $wurfl;


  function test_softbank_709sc_ver1() {
    foreach(array(
'SoftBank/1.0/709SC/SCJ001/SN354163011748371 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_709sc_ver1');
      }
  }



  function test_softbank_815t_ver1() {
    foreach(array(
'SoftBank/1.0/815T/TJ001/SN356359011227550 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_815t_ver1');
      }
  }



  function test_softbank_821sc_ver1() {
    foreach(array(
'SoftBank/1.0/821SC/SCJ001 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_821sc_ver1');
      }
  }



  function test_softbank_930sh_ver1() {
    foreach(array(
'SoftBank/1.0/930SH/SHJ001 Browser/NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SoftBank/1.0/930SH/SHJ001/SN353689020745926 Browser/NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SoftBank/1.0/930SH/SHJ001/SN353689021556256 Browser/NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_930sh_ver1');
      }
  }



  function test_softbank_936sh_ver1() {
    foreach(array(
'SoftBank/1.0/936SH/SHJ001/SN359418020707833 Browser/NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_936sh_ver1');
      }
  }



  function test_softbank_dm001sh_ver1() {
    foreach(array(
'SoftBank/1.0/DM001SH/SHJ001/SN358031010176157 Browser/NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_dm001sh_ver1');
      }
  }



  function test_softbank_v702mo_ver1() {
    foreach(array(
'MOT-V980/80.2E.27I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V980/80.2E.29. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V980/80.2E.29I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_v702mo_ver1');
      }
  }



  function test_softbank_v702nk2_ver1() {
    foreach(array(
'Vodafone/1.0/V702NK2/NKJ001 Series60/2.6 Nokia6680/4.04.28 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_v702nk2_ver1');
      }
  }



  function test_softbank_v703n_ver1() {
    foreach(array(
'Vodafone/1.0/V702NK2/NKJ001/SN355664005653625 Series60/2.6 Nokia6680/4.04.28 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_v703n_ver1');
      }
  }



  function test_softbank_v802se_ver1() {
    foreach(array(
'Vodafone/1.0/V802SE/SEJ001/SN354885003205586 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/V802SE/SEJ002/SN354885005964487 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_v802se_ver1');
      }
  }



  function test_softbank_v803t_ver1() {
    foreach(array(
'Vodafone/1.0/V803T/TJ001 Browser/VF-Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_v803t_ver1');
      }
  }



  function test_softbank_v804ss_ver1() {
    foreach(array(
'Vodafone/1.0/V804SS/SSJ001/SN358321001121753 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_v804ss_ver1');
      }
  }



  function test_softbank_x03ht_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) SP; 240x320; HTC_S710/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'softbank_x03ht_ver1');
      }
  }



  ############################################################


  function softbankTest() {
    $this->UnitTestCase('softbank Test');
  }


}

$test = new SoftbankTest();
$test->run(new TextReporter());

?>
