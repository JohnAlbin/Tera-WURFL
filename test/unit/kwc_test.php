<?php

/*
 * Recognising Kwc devices from their user agents
 *
 */

require_once 'test_helper.php';

class KwcTest extends UnitTestCase {

  var $wurfl;


  function test_kwc_1004_ver1() {
    foreach(array(
'KWC/10011 UP.Browser/7.2.6.1.838 (GUI) MMP/2.0',
'KWC/1004 UP.Browser/7.2.6.1.714 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_1004_ver1');
      }
  }



  function test_kwc_buckle_ver1() {
    foreach(array(
'KWC-Buckle/ UP.Browser/7.2.7.2.541 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_buckle_ver1');
      }
  }



  function test_kwc_e1000_ver1() {
    foreach(array(
'KWC-E1000/1.0.12 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_e1000_ver1');
      }
  }



  function test_kwc_e2000_ver1() {
    foreach(array(
'E2000-WF/1011 UP.Browser/7.2.6.1.567 (GUI) MMP/2.0',
'KWC-E2000/10086 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0',
'KWC-E2000/1012 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0',
'KWC-E2000/1016 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0',
'KWC-E2000/1017 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0',
'KWC-E2000/1022 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_e2000_ver1');
      }
  }



  function test_kwc_k132_ver1() {
    foreach(array(
'KWC-K132/10201 UP.Browser/6.2.3.9.g.1.106 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_k132_ver1');
      }
  }



  function test_kwc_k24_ver1() {
    foreach(array(
'KWC-K24/1.0.04 UP.Browser/6.2.3.9.g.1.109 (GUI) MMP/2.0',
'KWC-K24/1.0.06 UP.Browser/6.2.3.9.g.1.109 (GUI) MMP/2.0',
'KWC-K24/1.0.14 UP.Browser/6.2.3.9.g.1.100 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_k24_ver1');
      }
  }



  function test_kwc_k312_ver1() {
    foreach(array(
'KWC-K312/1.0.02 UP.Browser/6.2.3.9.g.1.108 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_k312_ver1');
      }
  }



  function test_kwc_kx18_ver1() {
    foreach(array(
'KWC-KX18/10064 UP.Browser/6.2.3.9 (GUI) MMP/2.0',
'KWC-KX18/10073 UP.Browser/6.2.3.9 (GUI) MMP/2.0',
'KWC-KX18/10076 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_kx18_ver1');
      }
  }



  function test_kwc_kx414c_ver1() {
    foreach(array(
'KWC-KX414c/1.0.46 UP.Browser/4.1.26l4'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_kx414c_ver1');
      }
  }



  function test_kwc_kx444c_ver1() {
    foreach(array(
'KWC-KX444c-BC/1.0.10 UP.Browser/4.1.26l4'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_kx444c_ver1');
      }
  }



  function test_kwc_kx9_ver1() {
    foreach(array(
'KWC-KX9/1110 UP.Browser/6.2.3.9.g.1.107 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_kx9_ver1');
      }
  }



  function test_kwc_s400_ver1() {
    foreach(array(
'KWC-S4000/ UP.Browser/7.2.6.1.794 (GUI) MMP/2.0',
'KWC-S4000/10014 UP.Browser/7.2.6.1.791 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'kwc_s400_ver1');
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

  function kwcTest() {
    $this->UnitTestCase('kwc Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new KwcTest();
$test->run(new TextReporter());

?>
