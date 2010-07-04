<?php

/*
 * Recognising Asus devices from their user agents
 *
 */

require_once 'test_helper.php';

class AsusTest extends UnitTestCase {

  var $wurfl;


  function test_asus_galaxyii_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) ASUS-GalaxyII/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'asus_galaxyii_ver1');
      }
  }



  function test_asus_galaxymini_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) ASUS-GalaxyMini/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'asus_galaxymini_ver1');
      }
  }



  function test_asus_p320_ver1() {
    foreach(array(
'ASUS-P552w/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'asus_p320_ver1');
      }
  }



  function test_asus_p526_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) ASUS-P526/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'asus_p526_ver1');
      }
  }



  function test_asus_p527_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) ASUS-P527/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) ASUS-P565/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) ASUS-P527/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'asus_p527_ver1');
      }
  }



  function test_asus_p552_ver1_orange() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) ASUS-P552w/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'asus_p552_ver1_orange');
      }
  }



  function test_asus_p750_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) ASUSP750/1.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) ASUSP750/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'asus_p750_ver1');
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

  function asusTest() {
    $this->UnitTestCase('asus Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AsusTest();
$test->run(new TextReporter());

?>
