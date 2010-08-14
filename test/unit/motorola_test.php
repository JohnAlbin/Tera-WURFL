<?php

/*
 * Recognising Motorola devices from their user agents
 *
 */

require_once 'test_helper.php';

class MotorolaTest extends TeraWurflTestCase {

  var $wurfl;


  function test_motorola_a300_ver1() {
    foreach(array(
'Cricket-A300/1.0 UP.Browser/6.3.0.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_a300_ver1');
      }
  }



  function test_motorola_c155_ver1() {
    foreach(array(
'MOT-C155 UP.Browser/6.2.2.7 (GUI) MMP/1.0',
'MOT-C155 UP.Browser/6.2.2.7 (GUI) MMP/1.0 UP.Link/1.1'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_c155_ver1');
      }
  }



  function test_motorola_c290_ver1() {
    foreach(array(
'Motorola-C290-boost Obigo/Q04C1-1.9 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_c290_ver1');
      }
  }



  function test_motorola_debut_i856_ver1() {
    foreach(array(
'MOT-A-A6/00.02 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.17',
'MOT-A-A6/00.02 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.18',
'MOT-A-A6/00.04 UP.Browser/7.2.7.2.532d (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.17',
'MOT-A-A6/00.04 UP.Browser/7.2.7.2.532d (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.18',
'MOT-A-A6/00.04 UP.Browser/7.2.7.2.532d (GUI) MMP/2.0 Push/PO UP.Link/6.6.0.0.0',
'MOT-A-A6/00.05 UP.Browser/7.2.7.2.532d (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.17',
'MOT-A-A6/00.05 UP.Browser/7.2.7.2.532d (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_debut_i856_ver1');
      }
  }



  function test_motorola_e365_ver1() {
    foreach(array(
'Motorola-E365 UP.Browser/6.1.0.7.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_e365_ver1');
      }
  }


  function test_motorola_a854_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1 (ESE 53); en-US; Droid)',
'Mozilla/5.0 (Linux; U; Android 2.1 (ESE 53); en-us; Droid Build/ESE53) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1 (ESE 53); en-us; Droid Build/ESE53) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17; androidAppWebView',
'Mozilla/5.0 (Linux; U; Android 2.1 (ESE 53); es-us; Droid Build/ESE53) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-Blue Echo; en-US; HERO200)',
'Mozilla/5.0 (Linux; U; Android 2.1-fresh-toast; en-US; HERO200)',
'Mozilla/5.0 (Linux; U; Android 2.1-fresh; en-US; HERO200)',
'Mozilla/5.0 (Linux; U; Android 2.1-fresh; en-us; A6277 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17 Sprint APA6277KT',
'Mozilla/5.0 (Linux; U; Android 2.1-update1 (Buufed); en-US; HERO200)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1 (ESE 81); en-US; Droid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-; SPH-M900)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; AOSP on XDANDROID MSM)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; Chromatic Magic)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; desire200)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; A6277 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17 Sprint APA6277KT',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-ES; A854)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; A853)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; A6277 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17 Sprint APA6277KT',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; A853 Build/SHLA_U2_03.05.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; A854 Build/MILER_X1_37.10.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; A853 Build/SHLA_U2_03.05.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es_us-; A6277 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17 Sprint APA6277KT',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; E400 Build/ECLAIR)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; AOSP on XDANDROID MSM Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; E400 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-; Droid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pt-BR; A853)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pt-pt; RBM2 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-BY; RBM2)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; Orange San Francisco)',
'Mozilla/5.0 (Linux; U; Android 2.1-update2 (freshhh); en-US; HERO200)',
'Mozilla/5.0 (Linux; U; Android 2.1-update2 (freshhh); en-us; HERO200 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
    ) as $ua) {
        $this->checkUA($ua, 'motorola_a854_ver1');
      }
  }

  function test_motorola_i465_ver1() {
    foreach(array(
'MOT-A-A4/00.00 UP.Browser/7.0.2.2.c.1.120 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-A4/00.00 UP.Browser/7.0.2.2.c.1.120 (GUI) MMP/2.0 UP.Link/5.1.2.18',
'MOT-A-A4/00.00 UP.Browser/7.0.2.2.c.1.120 (GUI) MMP/2.0 UP.Link/6.6.0.0.0',
'MOT-A-A4/00.01 UP.Browser/7.0.2.2.c.1.120 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-A4/00.01 UP.Browser/7.0.2.2.c.1.120 (GUI) MMP/2.0 UP.Link/5.1.2.18',
'MOT-A-A4/00.02 UP.Browser/7.0.2.2.c.1.120 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-A4/00.02 UP.Browser/7.0.2.2.c.1.120 (GUI) MMP/2.0 UP.Link/5.1.2.18',
'MOT-A-A7/00.01 UP.Browser/7.2.7.2.542 (GUI) MMP/2.0 Push/PO UP.Link/6.6.0.0.0',
'MOT-A-A7/00.02 UP.Browser/7.2.7.2.542e (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.17',
'MOT-A-A9/00.00 UP.Browser/7.0.2.2.c.1.110 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-A9/00.01 UP.Browser/7.0.2.2.c.1.110 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-AA/00.00 UP.Browser/7.2.7.2.542 (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.17',
'MOT-A-AA/00.01 UP.Browser/7.2.7.2.542e (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.17'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_i465_ver1');
      }
  }



  function test_motorola_i9_ver1() {
    foreach(array(
'MOT-A-B7/01.00 UP.Browser/7.2.7.2.520 (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.17',
'MOT-A-B7/01.00 UP.Browser/7.2.7.2.520 (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.18',
'MOT-A-B7/01.00 UP.Browser/7.2.7.2.520 (GUI) MMP/2.0 Push/PO UP.Link/6.6.0.0.0',
'MOT-A-B7/01.01 UP.Browser/7.2.7.2.520 (GUI) MMP/2.0 Push/PO UP.Link/5.1.2.17'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_i9_ver1');
      }
  }



  function test_motorola_v950_ver1() {
    foreach(array(
'Motorola-V950 Obigo/Q05A1 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_v950_ver1');
      }
  }



  function test_motorola_ve20_ver1() {
    foreach(array(
'Motorola-VE20 Obigo/Q05A1 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_ve20_ver1');
      }
  }



  ############################################################


  function motorolaTest() {
    $this->UnitTestCase('motorola Test');
  }


}

$test = new MotorolaTest();
$test->run(new TextReporter());

?>
