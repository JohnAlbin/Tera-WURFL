<?php

/*
 * Recognising Lct devices from their user agents
 *
 */

require_once 'test_helper.php';

class LctTest extends TeraWurflTestCase {

  var $wurfl;


  function test_lct_x845b_01_ver1() {
    foreach(array(
'LCT_X845B_01/LKBM501A/WAP2.0 Profile',
    ) as $ua) {
        $this->checkUA($ua, 'lct_x845b_01_ver1');
      }
  }

  function test_lct_x880b_01_ver1() {
    foreach(array(
'LCT_X880B_01/1.0 Nucleus/1.13.21 MTK6225/07A Release/5.1.2008 Browser/TelecaQ03C1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LCT_X880B_01/1.0 Nucleus/1.13.21 MTK6225/07A Release/5.1.2008 Browser/TelecaQ03C1 Profile/MIDP-2.0 Configuration/CLDC-1.1, LCT_X880B_01/1.0 Nucleus/1.13.21 MTK6225/07A Release/5.1.2008 Browser/TelecaQ03C1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
    ) as $ua) {
        $this->checkUA($ua, 'lct_x880b_01_ver1');
      }
  }

  function test_lct_l300b_ver1() {
    foreach(array(
'LCT_L300B_01/L3PM510/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'lct_l300b_ver1');
      }
  }



  function test_lct_l310b_ver1() {
    foreach(array(
'LCT_L310B_01/LBP0001/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'lct_l310b_ver1');
      }
  }



  function test_lct_n500b_ver1() {
    foreach(array(
'LCT_N500B_01/LBWM501/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'lct_n500b_ver1');
      }
  }



  function test_lct_tv320b_ver1() {
    foreach(array(
'LCT_TV320B_01/LBNM401A/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'lct_tv320b_ver1');
      }
  }



  function test_lct_x700b_01_ver1() {
    foreach(array(
'LCT_X700B_01/LBFM401A/WAP2.0Profile'
    ) as $ua) {
        $this->checkUA($ua, 'lct_x700b_01_ver1');
      }
  }



  function test_lct_x901a_ver1() {
    foreach(array(
'MQS_X901A_07/LK5M511B/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'lct_x901a_ver1');
      }
  }



  ############################################################


  function lctTest() {
    $this->UnitTestCase('lct Test');
  }


}

$test = new LctTest();
$test->run(new TextReporter());

?>
