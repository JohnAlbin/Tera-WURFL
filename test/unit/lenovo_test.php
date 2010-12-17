<?php

/*
 * Recognising Lenovo devices from their user agents
 *
 */

require_once 'test_helper.php';

class LenovoTest extends TeraWurflTestCase {

  var $wurfl;


  function test_lenovo_et860_ver1() {
    foreach(array(
'Lenovo_ET860/Lenovo WindowsMobile/6 Release/4.22.2007 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)'
    ) as $ua) {
        $this->checkUA($ua, 'lenovo_et860_ver1');
      }
  }



  function test_lenovo_i909_ver1() {
    foreach(array(
'Lenovo-i909/S141 Release/2007.11.28 Profile/MIDP2.0 Configuration/CLDC1.1',
'Lenovo-i909/S155 Release/2008.08.20 Profile/MIDP2.0 Configuration/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lenovo_i909_ver1');
      }
  }



  function test_lenovo_i919_ver1() {
    foreach(array(
'LENOVO-i919/66R'
    ) as $ua) {
        $this->checkUA($ua, 'lenovo_i919_ver1');
      }
  }



  function test_lenovo_i921_ver1() {
    foreach(array(
'LENOVO-i921/240A'
    ) as $ua) {
        $this->checkUA($ua, 'lenovo_i921_ver1');
      }
  }



  function test_lenovo_p50_ver1() {
    foreach(array(
'Lenovo-P50/S041 LMP/LML Release/2009.12.10 Profile/MIDP2.0 Configuration/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lenovo_p50_ver1');
      }
  }



  function test_lenovo_p709_ver1() {
    foreach(array(
'LENOVO-P709/S100 NXP5210/DV7 Release/4.25.2007 Obigo/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lenovo_p709_ver1');
      }
  }



  function test_lenovo_p780_ver1() {
    foreach(array(
'LENOVO-P780/176A'
    ) as $ua) {
        $this->checkUA($ua, 'lenovo_p780_ver1');
      }
  }



  function test_lenovo_v800_ver1() {
    foreach(array(
'LENOVO-V800',
'LENOVO-V800 LENOVO-V800'
    ) as $ua) {
        $this->checkUA($ua, 'lenovo_v800_ver1');
      }
  }



  ############################################################


  function lenovoTest() {
    $this->UnitTestCase('lenovo Test');
  }


}

$test = new LenovoTest();
$test->run(new TextReporter());

?>
