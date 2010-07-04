<?php

/*
 * Recognising Sharp devices from their user agents
 *
 */

require_once 'test_helper.php';

class SharpTest extends UnitTestCase {

  var $wurfl;


  function test_sharp_550sh_ver1() {
    foreach(array(
'Vodafone/1.0/550SH/SHG001 Browser/UP.Browser/7.0.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-V-Profile/VSCL-2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_550sh_ver1');
      }
  }



  function test_sharp_770sh_ver1() {
    foreach(array(
'Vodafone/1.0/770SH/SHG001 Browser/UP.Browser/7.0.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-V-Profile/VSCL-2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_770sh_ver1');
      }
  }



  function test_sharp_802sh_ver1() {
    foreach(array(
'Vodafone/Sharp802SH/SHG001/1.0/SN350263004279428 Browser/UP.Browser/7.0.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0',
'Vodafone/Sharp802SH/SHG002/1.0 Browser/UP.Browser/7.0.2.1'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_802sh_ver1');
      }
  }



  function test_sharp_sx833_ver1() {
    foreach(array(
'SmarTone-Vodafone/1.0/SharpSX663/1.006 Browser/VF-NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SmarTone-Vodafone/SharpSX833/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.474 (GUI) Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_sx833_ver1');
      }
  }



  function test_sharp_tm100_ver1() {
    foreach(array(
'SHARP-TM-100/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.2.101 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_tm100_ver1');
      }
  }



  function test_sharp_tq_gx15_ver1() {
    foreach(array(
'SHARP-TQ-GX15/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_tq_gx15_ver1');
      }
  }



  function test_sharp_tq_gx17_ver1() {
    foreach(array(
'SHARP-TQ-GX17/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0',
'SHARP-TQ-GX17/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_tq_gx17_ver1');
      }
  }



  function test_sharp_tq_gx29_ver1() {
    foreach(array(
'SHARP-TQ-GX29/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.h.1.100 (GUI) MMP/2.0 UP.Link/1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_tq_gx29_ver1');
      }
  }



  function test_sharp_tq_gx30i_ver1() {
    foreach(array(
'SHARP-TQ-GX30i/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.104 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_tq_gx30i_ver1');
      }
  }



  function test_sharp_tqgx10i_ver1() {
    foreach(array(
'SHARP-TQ-GX10i/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.6.1.d.1 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_tqgx10i_ver1');
      }
  }



  function test_sharp_tqgx20_ver1() {
    foreach(array(
'SHARP-TQ-GX20/1.1 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.c.1.100 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_tqgx20_ver1');
      }
  }



  function test_sharp_tqgx_25_ver1() {
    foreach(array(
'SHARP-TQ-GX25/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.d.1.109 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_tqgx_25_ver1');
      }
  }



  function test_sharp_wxt71_ver1() {
    foreach(array(
'SHARP/1.0/SharpWXA92/SHS001 Mozilla/4.08 (compatible) Browser/NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_wxt71_ver1');
      }
  }



  function test_sharp_wxt91_ver1() {
    foreach(array(
'SharpWXT91/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.f.1.104 (GUI) Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sharp_wxt91_ver1');
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

  function sharpTest() {
    $this->UnitTestCase('sharp Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SharpTest();
$test->run(new TextReporter());

?>
