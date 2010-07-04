<?php

/*
 * Recognising Panasonic devices from their user agents
 *
 */

require_once 'test_helper.php';

class PanasonicTest extends UnitTestCase {

  var $wurfl;


  function test_panasonic_g50_ver1() {
    foreach(array(
'Panasonic-G50/1.0 UP.Browser/6.1.0.6.d.2.100 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_g50_ver1');
      }
  }



  function test_panasonic_g60_ver1() {
    foreach(array(
'Panasonic-G60/1.0 UP.Browser/6.1.0.7 MMP/1.0 UP.Browser/6.1.0.7 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_g60_ver1');
      }
  }



  function test_panasonic_gad87_ver1() {
    foreach(array(
'Panasonic-GAD87/A38',
'Panasonic-GAD87/A57'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_gad87_ver1');
      }
  }



  function test_panasonic_gad96_ver1() {
    foreach(array(
'Panasonic-GAD96'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_gad96_ver1');
      }
  }



  function test_panasonic_gd95_ver1() {
    foreach(array(
'Panasonic-GAD95'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_gd95_ver1');
      }
  }



  function test_panasonic_mx6_ver1() {
    foreach(array(
'MX6/1.00 Nucleus RTOS/V1.11.19 MTK6225/07B Release/04.25.2008 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_mx6_ver1');
      }
  }



  function test_panasonic_sc3_ver1() {
    foreach(array(
'Panasonic-SC3/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.8 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_sc3_ver1');
      }
  }



  function test_panasonic_vs6_ver1() {
    foreach(array(
'Panasonic-VS6/1.0/RP1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_vs6_ver1');
      }
  }



  function test_panasonic_x200p_ver1() {
    foreach(array(
'Panasonic-X200P/RP1 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_x200p_ver1');
      }
  }



  function test_panasonic_x400p_ver1() {
    foreach(array(
'Panasonic-X400P/RP1 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_x400p_ver1');
      }
  }



  function test_panasonic_x701_ver1() {
    foreach(array(
'Panasonic-X701/1.0 SymbianOS/7.0 Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_x701_ver1');
      }
  }



  function test_panasonic_x70_ver1() {
    foreach(array(
'Panasonic-X70/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'panasonic_x70_ver1');
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

  function panasonicTest() {
    $this->UnitTestCase('panasonic Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new PanasonicTest();
$test->run(new TextReporter());

?>
