<?php

/*
 * Recognising Philips devices from their user agents
 *
 */

require_once 'test_helper.php';

class PhilipsTest extends TeraWurflTestCase {

  var $wurfl;


  function test_philips655_ver1() {
    foreach(array(
'PHILIPS655 ObigoInternetBrowser/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips655_ver1');
      }
  }



  function test_philips_199_ver1() {
    foreach(array(
'Philips 199 / Obigo Browser 2.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips_199_ver1');
      }
  }



  function test_philips_292_ver1() {
    foreach(array(
'Philips292 / Obigo Browser 2.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips_292_ver1');
      }
  }



  function test_philips_535_ver1() {
    foreach(array(
'PHILIPS 535 / Obigo Internet Browser 2.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips_535_ver1');
      }
  }



  function test_philips_568_ver1() {
    foreach(array(
'PHILIPS568/1.0 UP.Browser/6.1.0.7.8 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips_568_ver1');
      }
  }



  function test_philips_598_ver1() {
    foreach(array(
'MTK',
'MTK 6225 LCT',
'MTK/6235;WellcoM W9119;Profile/MIDP-2.0;Configuration/CLDC-1.1;Screen/240x400'
    ) as $ua) {
        $this->checkUA($ua, 'philips_598_ver1');
      }
  }



  function test_philips_766_ver1() {
    foreach(array(
'PHILIPS766 IACWAPBrowser1.2'
    ) as $ua) {
        $this->checkUA($ua, 'philips_766_ver1');
      }
  }



  function test_philips_768_ver1() {
    foreach(array(
'PHILIPS 768 UP.Browser/6.2.3.9.d.1 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips_768_ver1');
      }
  }



  function test_philips_9a9k_ver1() {
    foreach(array(
'Philips9@9k/R08 NXP5210/DV7 Release/9.12.2007 Mozilla/Obigo/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips_9a9k_ver1');
      }
  }



  function test_philips_9a9w_ver1() {
    foreach(array(
'PHILIPS9A9W ObigoInternetBrowser/QO3C Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'philips_9a9w_ver1');
      }
  }



  function test_philips_p390_ver1() {
    foreach(array(
'Philips P390 / Obigo Browser 2.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips_p390_ver1');
      }
  }



  function test_philips_w186_ver1() {
    foreach(array(
'W186/Qualcom6246/090301/NetFront/3.3Profile/MIDP-2.0Configuration/CLDC1.1Profile/MIDP-2.0Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'philips_w186_ver1');
      }
  }



  function test_philips_x800_ver1() {
    foreach(array(
'PhilipsX800/1.0 MTK6229/07A Release/10.06.2008 Browser/Obigo2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'philips_x800_ver1');
      }
  }



  ############################################################


  function philipsTest() {
    $this->UnitTestCase('philips Test');
  }


}

$test = new PhilipsTest();
$test->run(new TextReporter());

?>
