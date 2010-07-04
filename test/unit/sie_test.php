<?php

/*
 * Recognising Sie devices from their user agents
 *
 */

require_once 'test_helper.php';

class SieTest extends UnitTestCase {

  var $wurfl;


  function test_sie_a31_ver1() {
    foreach(array(
'SIE-A31/07 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0',
'SIE-A31/08 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0',
'SIE-A31/09 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_a31_ver1');
      }
  }



  function test_sie_a60_ver1() {
    foreach(array(
'SIE-A60/16 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_a60_ver1');
      }
  }



  function test_sie_a62_ver1() {
    foreach(array(
'SIE-A62/06 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0',
'SIE-A62/07 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_a62_ver1');
      }
  }



  function test_sie_a65_ver1() {
    foreach(array(
'SIE-A65/06 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0',
'SIE-A65/10 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0',
'SIE-A65/15 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_a65_ver1');
      }
  }



  function test_sie_a75_ver1() {
    foreach(array(
'SIE-A75/20 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0',
'SIE-A75/34 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0',
'SIE-A75/35 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_a75_ver1');
      }
  }



  function test_sie_af51_ver1() {
    foreach(array(
'SIE-AF51/07 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_af51_ver1');
      }
  }



  function test_sie_al21_ver1() {
    foreach(array(
'SIE-AL21/11 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0',
'SIE-AL21/20 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_al21_ver1');
      }
  }



  function test_sie_ax72_ver1() {
    foreach(array(
'SIE-AX72/01 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0',
'SIE-AX72/02 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_ax72_ver1');
      }
  }



  function test_sie_ax75_ver1() {
    foreach(array(
'SIE-AX75/12 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0',
'SIE-AX75/14 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_ax75_ver1');
      }
  }



  function test_sie_c60_ver1() {
    foreach(array(
'SIE-C60/12 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0',
'SIE-C60/20 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_c60_ver1');
      }
  }



  function test_sie_c65_ver1() {
    foreach(array(
'SIE-C65',
'SIE-C65/12 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C65/16 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C65/25 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C65/33 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C65/41 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C65/43 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C65/50 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C65/54 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C65/56 UP.Browser/7.0.2.2.d.4(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C6V/15 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C6V/41 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_c65_ver1');
      }
  }



  function test_sie_c66_ver1() {
    foreach(array(
'SIE-C66/56 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_c66_ver1');
      }
  }



  function test_sie_c72_ver1() {
    foreach(array(
'SIE-C72/20 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C72/22 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C72/22 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_c72_ver1');
      }
  }



  function test_sie_c75_ver1() {
    foreach(array(
'SIE-C75',
'SIE-C75/11 UP.Browser/7.0.2.2.d.5(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C75/13 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C75/22 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C75/24 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_c75_ver1');
      }
  }



  function test_sie_c81_ver1() {
    foreach(array(
'SIE-C81'
    ) as $ua) {
        $this->checkUA($ua, 'sie_c81_ver1');
      }
  }



  function test_sie_cf61_ver1() {
    foreach(array(
'BenQ-CF61/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_cf61_ver1');
      }
  }



  function test_sie_cf62_ver1() {
    foreach(array(
'SIE-CF62/12 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0',
'SIE-CF62/21 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0',
'SIE-CF62/24 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0',
'SIE-CF62/95 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_cf62_ver1');
      }
  }



  function test_sie_cl75_ver1() {
    foreach(array(
'SIE-CL75/01 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.9.d.1 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_cl75_ver1');
      }
  }



  function test_sie_cx65_ver1() {
    foreach(array(
'SIE-CX65',
'SIE-CX65/08 UP.Browser/7.0.0.1.181 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX65/14 UP.Browser/7.0.0.1.c.2 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX65/16 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX65/25 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX65/41 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX65/43 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX65/50 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX6C/25 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_cx65_ver1');
      }
  }



  function test_sie_cx70_ver1() {
    foreach(array(
'SIE-CX70/43 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX70/50 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX70/54 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX70/56 UP.Browser/7.0.2.2.d.4(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX7V/25 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_cx70_ver1');
      }
  }



  function test_sie_cx75_ver1() {
    foreach(array(
'SIE-CX75',
'SIE-CX75/05 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX75/10 UP.Browser/7.0.2.2.d.5(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX75/12 UP.Browser/7.0.2.2.d.5(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX75/13 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX75/16 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX75/23 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-CX75/25 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_cx75_ver1');
      }
  }



  function test_sie_e71_ver1() {
    foreach(array(
'SIE-E71/37 UP.Browser/7.1.0.k.4(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.k.4 (GUI) MMP/2.0',
'SIE-E71/39 UP.Browser/7.1.0.k.5(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.k.5 (GUI) MMP/2.0',
'SIE-E71/45 UP.Browser/7.1.0.k.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.k.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_e71_ver1');
      }
  }



  function test_sie_ef51_ver1() {
    foreach(array(
'BenQ-EF51/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_ef51_ver1');
      }
  }



  function test_sie_ef81_ver1() {
    foreach(array(
'SIE-EF81/48 UP.Browser/7.0.0.1.181 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.1.3.h (GUI) MMP/2.0',
'SIE-EF81/58 UP.Browser/7.0.0.1.181 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.1.k.10 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_ef81_ver1');
      }
  }



  function test_sie_el71_ver2() {
    foreach(array(
'SIE-EL71/22 UP.Browser/7.1.0.e.23(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.e.23 (GUI) MMP/2.0',
'SIE-EL71/31 UP.Browser/7.1.0.e.24(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.e.24 (GUI) MMP/2.0',
'SIE-EL71/41 UP.Browser/7.1.0.k.6(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.k.6 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_el71_ver2');
      }
  }



  function test_sie_m55_ver1() {
    foreach(array(
'SIE-M55/10 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0',
'SIE-M55/11 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_m55_ver1');
      }
  }



  function test_sie_m65_ver1() {
    foreach(array(
'SIE-M65/04 UP.Browser/7.0.0.1.181 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-M65/12 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-M65/14 UP.Browser/7.0.0.1.c.2 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-M65/25 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-M65/43 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-M65/50 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-M65/58 UP.Browser/7.0.2.2.d.4(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_m65_ver1');
      }
  }



  function test_sie_m75_ver1() {
    foreach(array(
'SIE-M75/05 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-M75/12 UP.Browser/7.0.2.2.d.5(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-M75/25 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_m75_ver1');
      }
  }



  function test_sie_mc60_ver1() {
    foreach(array(
'SIE-MC60/04 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0',
'SIE-MC60/05 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0',
'SIE-MC60/07 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0',
'SIE-MC60/10 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_mc60_ver1');
      }
  }



  function test_sie_me45_ver1() {
    foreach(array(
'SIE-ME45/28 UP.Browser/5.0.2.3.100 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sie_me45_ver1');
      }
  }



  function test_sie_me75_ver1() {
    foreach(array(
'SIE-ME75',
'SIE-ME75/22 Configuration/CLDC-1.1 UP.Browser/7.0.2.2.d.7 (GUI) MMP/2.0 Profile/MIDP-2.0',
'SIE-ME75/22 UP.Browser/7.0.2.2.d.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_me75_ver1');
      }
  }



  function test_sie_qcist60_ver1() {
    foreach(array(
'SIE-ST60/1.0 UP.Browser/6.1.0.7.4 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_qcist60_ver1');
      }
  }



  function test_sie_s55_ver1() {
    foreach(array(
'SIE-S55/16 UP.Browser/6.1.0.5.c.4 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_s55_ver1');
      }
  }



  function test_sie_s57_ver1() {
    foreach(array(
'SIE-S57/17 UP.Browser/6.1.0.5.c.4 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_s57_ver1');
      }
  }



  function test_sie_s65_ver1() {
    foreach(array(
'SIE-S65/16 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-S65/25 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-S65/43 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-S65/50 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_s65_ver1');
      }
  }



  function test_sie_s66_ver1() {
    foreach(array(
'SIE-S66/34 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_s66_ver1');
      }
  }



  function test_sie_s68_ver1() {
    foreach(array(
'SIE-S68/34 UP.Browser/7.1.0.e.15(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.e.15 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_s68_ver1');
      }
  }



  function test_sie_s6c_ver1() {
    foreach(array(
'SIE-S6C/25 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_s6c_ver1');
      }
  }



  function test_sie_s75_ver1() {
    foreach(array(
'SIE-S75/10 UP.Browser/7.1.0.e.7(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_s75_ver1');
      }
  }



  function test_sie_s88_ver1() {
    foreach(array(
'BenQ-S88/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_s88_ver1');
      }
  }



  function test_sie_sk6r_ver1() {
    foreach(array(
'SIE-SK6R',
'SIE-SK6R/42 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-SK6R/46 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sk6r_ver1');
      }
  }



  function test_sie_sl45_ver1() {
    foreach(array(
'SIE-SL45/3.1 UP/4.1.19i'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sl45_ver1');
      }
  }



  function test_sie_sl45i_ver1() {
    foreach(array(
'SIE-SLIK/3.1 UP/4.1.19i'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sl45i_ver1');
      }
  }



  function test_sie_sl55_ver1() {
    foreach(array(
'SIE-SL55/07 UP.Browser/6.1.0.5.c.2 (GUI) MMP/1.0',
'SIE-SL55/09 UP.Browser/6.1.0.5.c.4 (GUI) MMP/1.0',
'SIE-SL55/14 UP.Browser/6.1.0.5.c.5 (GUI) MMP/1.0',
'SIE-SL55/16 UP.Browser/6.1.0.5.c.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sl55_ver1');
      }
  }



  function test_sie_sl5c_ver1() {
    foreach(array(
'SIE-SL5C/17 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sl5c_ver1');
      }
  }



  function test_sie_sl65_ver1() {
    foreach(array(
'SIE-SL65/16 UP.Browser/7.0.0.1.c.3 (GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-SL65/41 UP.Browser/7.0.2.2.d.1.100(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-SL65/50 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sl65_ver1');
      }
  }



  function test_sie_sl75_ver1() {
    foreach(array(
'SIE-SL75/13 UP.Browser/7.1.0.e.8(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.e.8 (GUI) MMP/2.0',
'SIE-SL75/22 UP.Browser/7.1.0.e.12(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.e.12 (GUI) MMP/2.0',
'SIE-SL75/35 UP.Browser/7.1.0.e.16(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.e.16 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sl75_ver1');
      }
  }



  function test_sie_sp65_ver1() {
    foreach(array(
'SIE-SP65/47 UP.Browser/7.0.2.2.d.1(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-SP65/49 UP.Browser/7.0.2.2.d.3(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sp65_ver1');
      }
  }



  function test_sie_st55_ver1() {
    foreach(array(
'SIE-ST55/1.0 UP.Browser/6.1.0.6.d.2.100 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_st55_ver1');
      }
  }



  function test_sie_sx1_ver1() {
    foreach(array(
'SIE-SX1/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sie_sx1_ver1');
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

  function sieTest() {
    $this->UnitTestCase('sie Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SieTest();
$test->run(new TextReporter());

?>
