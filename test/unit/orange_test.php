<?php

/*
 * Recognising Orange devices from their user agents
 *
 */

require_once 'test_helper.php';

class OrangeTest extends UnitTestCase {

  var $wurfl;


  function test_orange_spv_c100_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220; SPV C100; OpVer 18.105.10.703)'
    ) as $ua) {
        $this->checkUA($ua, 'orange_spv_c100_ver1');
      }
  }



  function test_orange_spv_c500_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220; SPV C500; OpVer 4.2.1.4)'
    ) as $ua) {
        $this->checkUA($ua, 'orange_spv_c500_ver1');
      }
  }



  function test_orange_spv_m1500_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; SPV M1500; OpVer 3.11.1.167)'
    ) as $ua) {
        $this->checkUA($ua, 'orange_spv_m1500_ver1');
      }
  }



  function test_orange_spv_m2000_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; SPV M2000; OpVer 5.31.1.124)',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; SPV M2000; OpVer 5.40.1.179)'
    ) as $ua) {
        $this->checkUA($ua, 'orange_spv_m2000_ver1');
      }
  }



  function test_orange_spv_m3100_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; SPV M3100; OpVer 14.123.1.614)'
    ) as $ua) {
        $this->checkUA($ua, 'orange_spv_m3100_ver1');
      }
  }



  function test_orange_spv_m5000_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 480x640; SPV M5000; OpVer 7.130.1.145)'
    ) as $ua) {
        $this->checkUA($ua, 'orange_spv_m5000_ver1');
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

  function orangeTest() {
    $this->UnitTestCase('orange Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new OrangeTest();
$test->run(new TextReporter());

?>
