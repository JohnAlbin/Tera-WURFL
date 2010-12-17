<?php

/*
 * Recognising Lge devices from their user agents
 *
 */

require_once 'test_helper.php';

class LgeTest extends TeraWurflTestCase {

  var $wurfl;


  function test_lge_ax260_ver1() {
    foreach(array(
'LGE-AX260/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_ax260_ver1');
      }
  }



  function test_lge_ax310_ver1() {
    foreach(array(
'LGE-AX310/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_ax310_ver1');
      }
  }



  function test_lge_ax5000_ver1() {
    foreach(array(
'LGE-AX500/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_ax5000_ver1');
      }
  }



  function test_lge_ax830_ver1() {
    foreach(array(
'LGE-AX830/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_ax830_ver1');
      }
  }



  function test_lge_ax8575_ver1() {
    foreach(array(
'Mozilla/4.0(compatible; Polaris 6.2; Brew 3.1.5; U; en) 240X400 LGE LG-AX8575'
    ) as $ua) {
        $this->checkUA($ua, 'lge_ax8575_ver1');
      }
  }



  function test_lge_mx7000_ver1() {
    foreach(array(
'LGE-MX7000/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_mx7000_ver1');
      }
  }



  function test_lge_pm225_ver1() {
    foreach(array(
'LGE-PM225/1.0 UP.Browser/6.2.3.7.e.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_pm225_ver1');
      }
  }



  function test_lge_u8150_ver1() {
    foreach(array(
'LGE/U8150/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_u8150_ver1');
      }
  }



  function test_lge_vx8100_ver1() {
    foreach(array(
'LGE-VX8100/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_vx8100_ver1');
      }
  }



  function test_lge_vx8550_ver1() {
    foreach(array(
'LGE-VX8550/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_vx8550_ver1');
      }
  }



  function test_lge_vx8575_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; Polaris 6.2; BREW 3.1.5; U; en)/240X400 LGE VX8575'
    ) as $ua) {
        $this->checkUA($ua, 'lge_vx8575_ver1');
      }
  }



  function test_lge_vx8610_ver1() {
    foreach(array(
'LGE-VX8610/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_vx8610_ver1');
      }
  }



  function test_lge_vx8800_ver1() {
    foreach(array(
'LGE-VX8800/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_vx8800_ver1');
      }
  }



  function test_lge_vx9900_ver1() {
    foreach(array(
'LGE-VX9900/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lge_vx9900_ver1');
      }
  }



  ############################################################


  function lgeTest() {
    $this->UnitTestCase('lge Test');
  }


}

$test = new LgeTest();
$test->run(new TextReporter());

?>
