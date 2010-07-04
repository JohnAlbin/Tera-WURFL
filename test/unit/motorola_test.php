<?php

/*
 * Recognising Motorola devices from their user agents
 *
 */

require_once 'test_helper.php';

class MotorolaTest extends UnitTestCase {

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



  function test_motorola_i1_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; Motorola_i1 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-us; Motorola_i1 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'motorola_i1_ver1');
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

  function checkUA($agent, $expected) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $actual =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($expected != $actual)
      echo "Expected: $expected, got: $actual\nUA: $agent\n";
    $this->assertEqual($expected, $actual);
  }

  function motorolaTest() {
    $this->UnitTestCase('motorola Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MotorolaTest();
$test->run(new TextReporter());

?>
