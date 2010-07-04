<?php

/*
 * Recognising Nexian devices from their user agents
 *
 */

require_once 'test_helper.php';

class NexianTest extends UnitTestCase {

  var $wurfl;


  function test_nexian_nx250d_ver1() {
    foreach(array(
'Nexian-NX250 D/1.0 RTKE_OS/01.00 Dragonfly6120/1.0 TMSS-Browser/1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx250d_ver1');
      }
  }



  function test_nexian_nx_d980_ver1() {
    foreach(array(
'NexianNX-D980/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_d980_ver1');
      }
  }



  function test_nexian_nx_g801_ver1() {
    foreach(array(
'NexianNX-G801/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_g801_ver1');
      }
  }



  function test_nexian_nx_g821_ver1() {
    foreach(array(
'Nexian-NXG821/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_g821_ver1');
      }
  }



  function test_nexian_nx_g901_ver1() {
    foreach(array(
'NexianNX-G901/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_g901_ver1');
      }
  }



  function test_nexian_nx_g911_ver1() {
    foreach(array(
'NEXIAN NX-G911'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_g911_ver1');
      }
  }



  function test_nexian_nx_g912_ver1() {
    foreach(array(
'NexianNX-G912/MTK Release/27.11.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_g912_ver1');
      }
  }



  function test_nexian_nx_g922_ver1() {
    foreach(array(
'NexianNX-G922/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_g922_ver1');
      }
  }



  function test_nexian_nx_t780_ver1() {
    foreach(array(
'NexianNX-T780/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_t780_ver1');
      }
  }



  function test_nexian_nx_t911_ver1() {
    foreach(array(
'NexianNX-T911/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_t911_ver1');
      }
  }



  function test_nexian_nx_t922_ver1() {
    foreach(array(
'NexianNX-T922/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nexian_nx_t922_ver1');
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

  function nexianTest() {
    $this->UnitTestCase('nexian Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new NexianTest();
$test->run(new TextReporter());

?>
