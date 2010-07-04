<?php

/*
 * Recognising Hp devices from their user agents
 *
 */

require_once 'test_helper.php';

class HpTest extends UnitTestCase {

  var $wurfl;


  function test_hp_ipaq_510_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Smartphone; 176x220; HPiPAQ510/1.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Smartphone; 176x220; HPiPAQ510/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_510_ver1');
      }
  }



  function test_hp_ipaq_610_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) HPiPAQ610/1.0 (PPC; 240x320)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) HPiPAQ610/1.0 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_610_ver1');
      }
  }



  function test_hp_ipaq_910_ver1() {
    foreach(array(
'HPiPAQ910/1.0/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) (PPC; 320x240)'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_910_ver1');
      }
  }



  function test_hp_ipaq_datamessenger_ver1() {
    foreach(array(
'HPiPAQDataMessenger/1.0/Mozilla/4.0  (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC;320x240 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_datamessenger_ver1');
      }
  }



  function test_hp_ipaq_h6300series_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; HP iPAQ h6300)'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_h6300series_ver1');
      }
  }



  function test_hp_ipaq_hw6500_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x240; HP iPAQ hw6500)'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_hw6500_ver1');
      }
  }



  function test_hp_ipaq_hw6900_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x240; HP iPAQ hw6500/1.0)'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_hw6900_ver1');
      }
  }



  function test_hp_ipaq_hw692x_ver1() {
    foreach(array(
'HPiPAQhw6900/1.0/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x240)'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_hw692x_ver1');
      }
  }



  function test_hp_ipaq_voicemessenger_ver1() {
    foreach(array(
'HPiPAQVoiceMessenger/1.0/Mozilla/4.0  (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Smartphone;240x320'
    ) as $ua) {
        $this->checkUA($ua, 'hp_ipaq_voicemessenger_ver1');
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

  function hpTest() {
    $this->UnitTestCase('hp Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new HpTest();
$test->run(new TextReporter());

?>
