<?php

/*
 * Recognising Orange devices from their user agents
 *
 */

require_once 'test_helper.php';

class OrangeTest extends UnitTestCase {

  var $wurfl;


  function test_orange_boston_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; BYT-P726G; Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1, gzip',
'Mozilla/5.0 (Linux; U; Android 1.6; sk-sk; Orange_Boston Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-pt; Boston Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-PT; Boston)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; Orange_Boston Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-ES; Orange_Boston)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-ES; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-za; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Behold II Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-nz; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-ie; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-ZA; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-IE; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-AU; Behold II)',
    ) as $ua) {
        $this->checkUA($ua, 'orange_boston_ver1');
      }
  }


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
