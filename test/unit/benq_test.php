<?php

/*
 * Recognising Benq devices from their user agents
 *
 */

require_once 'test_helper.php';

class BenqTest extends TeraWurflTestCase {

  var $wurfl;


  function test_benq_c30_ver1() {
    foreach(array(
'BenQ-C30',
'BenQ-C30/1.0/WAP2.0/MIDP2.0/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'benq_c30_ver1');
      }
  }



  function test_benq_c36_ver1() {
    foreach(array(
'BenQ-C36/1.0/WAP2.0/MIDP2.0/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'benq_c36_ver1');
      }
  }



  function test_benq_e61_ver1() {
    foreach(array(
'BenQ-E61/1.00/WAP2.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'benq_e61_ver1');
      }
  }



  function test_benq_ef71_ver1() {
    foreach(array(
'BenQ-EF71/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.7.c.1.100 (GUI) MMP/2.0',
'BenQ-EF71/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.7.c.1.103 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'benq_ef71_ver1');
      }
  }



  function test_benq_m300_ver1() {
    foreach(array(
'BenQ-M300/6.1.0.7 UP.Browser/6.1.0.7.8.c.1.100 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'benq_m300_ver1');
      }
  }



  function test_benq_p50_ver1() {
    foreach(array(
'BenQ P50 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'benq_p50_ver1');
      }
  }



  function test_benq_s700_ver1() {
    foreach(array(
'S700'
    ) as $ua) {
        $this->checkUA($ua, 'benq_s700_ver1');
      }
  }



  function test_benq_s80_ver1() {
    foreach(array(
'BenQ-S80/1.00/WAP2.0/MIDP2.0/CLDC1.1 UP.Browser/6.3.0.3.c.3 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'benq_s80_ver1');
      }
  }



  function test_benq_s81_ver1() {
    foreach(array(
'BenQ-S81/1.00/WAP2.0/MIDP2.0/CLDC1.1 UP.Browser/6.3.0.3.c.4 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'benq_s81_ver1');
      }
  }



  function test_benq_siemens_c31_ver1() {
    foreach(array(
'BenQ-SIEMENS - C31/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'benq_siemens_c31_ver1');
      }
  }



  function test_benq_siemens_c81_ver1() {
    foreach(array(
'SIE-C81/51 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C81/51 UP.Browser/7.1.0.e.25(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SIE-C81/51 UP.Browser/7.1.0.e.25(GUI) MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.e.25 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'benq_siemens_c81_ver1');
      }
  }



  function test_benq_siemens_e52_ver1() {
    foreach(array(
'BenQ-SIEMENS - E52/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'benq_siemens_e52_ver1');
      }
  }



  function test_benq_t60_ver1() {
    foreach(array(
'BenQ-T60/1.0/WAP2.0/MIDP2.0/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'benq_t60_ver1');
      }
  }



  ############################################################


  function benqTest() {
    $this->UnitTestCase('benq Test');
  }


}

$test = new BenqTest();
$test->run(new TextReporter());

?>
