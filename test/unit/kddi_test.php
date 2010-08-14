<?php

/*
 * Recognising Kddi devices from their user agents
 *
 */

require_once 'test_helper.php';

class KddiTest extends TeraWurflTestCase {

  var $wurfl;


  function test_kddi_ca3a_ver1() {
    foreach(array(
'KDDI-CA3A UP.Browser/6.2.0.13.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ca3a_ver1');
      }
  }



  function test_kddi_ca3c_ver1() {
    foreach(array(
'KDDI-CA3C UP.Browser/6.2_7.2.7.1.K.2.232 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ca3c_ver1');
      }
  }



  function test_kddi_ca3f_ver1() {
    foreach(array(
'KDDI-CA3F UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ca3f_ver1');
      }
  }



  function test_kddi_ca3g_ver1() {
    foreach(array(
'KDDI-CA3G UP.Browser/6.2_7.2.7.1.K.2.232 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ca3g_ver1');
      }
  }



  function test_kddi_hi3d_ver1() {
    foreach(array(
'KDDI-HI3D UP.Browser/6.2_7.2.7.1.K.2.232 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_hi3d_ver1');
      }
  }



  function test_kddi_kc3b_ver1() {
    foreach(array(
'KDDI-KC3B UP.Browser/6.2.0.13.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_kc3b_ver1');
      }
  }



  function test_kddi_kc3g_ver1() {
    foreach(array(
'KDDI-KC3G UP.Browser/6.2.0.14.1 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_kc3g_ver1');
      }
  }



  function test_kddi_ma32_ver1() {
    foreach(array(
'KDDI-MA32 UP.Browser/6.2.0.12.1.4 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ma32_ver1');
      }
  }



  function test_kddi_ma33_ver1() {
    foreach(array(
'KDDI-MA33 UP.Browser/6.2.0.13.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ma33_ver1');
      }
  }



  function test_kddi_sh38_ver1() {
    foreach(array(
'KDDI-SH38 UP.Browser/6.2_7.2.7.1.K.3.330 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_sh38_ver1');
      }
  }



  function test_kddi_sh3d_ver1() {
    foreach(array(
'KDDI-SH3D UP.Browser/6.2_7.2.7.1.K.4.304 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_sh3d_ver1');
      }
  }



  function test_kddi_sh3g_ver1() {
    foreach(array(
'KDDI-SH3G UP.Browser/6.2_7.2.7.1.K.5.176 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_sh3g_ver1');
      }
  }



  function test_kddi_sn34_ver1() {
    foreach(array(
'KDDI-SN34 UP.Browser/6.2.0.10.4 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_sn34_ver1');
      }
  }



  function test_kddi_sn3e_ver1() {
    foreach(array(
'KDDI-SN3E UP.Browser/6.2.0.13.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_sn3e_ver1');
      }
  }



  function test_kddi_sn3j_ver1() {
    foreach(array(
'KDDI-SN3J UP.Browser/6.2_7.2.7.1.K.3.350 (GUI) MMP/2.0',
'KDDI-SN3J UP.Browser/6.2_7.2.7.1.K.3.351 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_sn3j_ver1');
      }
  }



  function test_kddi_ts39_ver1() {
    foreach(array(
'KDDI-TS39 UP.Browser/6.2.0.11.2.1e (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ts39_ver1');
      }
  }



  function test_kddi_ts3d_ver1() {
    foreach(array(
'KDDI-TS3D UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ts3d_ver1');
      }
  }



  function test_kddi_ts3h_ver1() {
    foreach(array(
'KDDI-TS3H UP.Browser/6.2_7.2.7.1.K.1.5.1.116 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ts3h_ver1');
      }
  }



  function test_kddi_ts3m_ver1() {
    foreach(array(
'KDDI-TS3M UP.Browser/6.2_7.2.7.1.K.2.232 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kddi_ts3m_ver1');
      }
  }



  ############################################################


  function kddiTest() {
    $this->UnitTestCase('kddi Test');
  }


}

$test = new KddiTest();
$test->run(new TextReporter());

?>
