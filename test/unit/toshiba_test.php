<?php

/*
 * Recognising Toshiba devices from their user agents
 *
 */

require_once 'test_helper.php';

class ToshibaTest extends TeraWurflTestCase {

  var $wurfl;


  function test_toshiba_g810_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)  PPC; 240x320; Toshiba  G810',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)  PPC; 240x320; Toshiba G810'
    ) as $ua) {
        $this->checkUA($ua, 'toshiba_g810_ver1');
      }
  }



  function test_toshiba_g910_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) Toshiba G910_G920'
    ) as $ua) {
        $this->checkUA($ua, 'toshiba_g910_ver1');
      }
  }



  function test_toshiba_ts608_ver1() {
    foreach(array(
'Toshiba TS608_TS30/v1.0 UP.Browser/6.2.3.9.d.1 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'toshiba_ts608_ver1');
      }
  }



  function test_toshiba_ts705_ver1() {
    foreach(array(
'TS705/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'toshiba_ts705_ver1');
      }
  }



  ############################################################


  function toshibaTest() {
    $this->UnitTestCase('toshiba Test');
  }


}

$test = new ToshibaTest();
$test->run(new TextReporter());

?>
