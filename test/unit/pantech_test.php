<?php

/*
 * Recognising Pantech devices from their user agents
 *
 */

require_once 'test_helper.php';

class PantechTest extends UnitTestCase {

  var $wurfl;


  function test_pantech_p7040_ver1() {
    foreach(array(
'PantechP7040/JFUS03152010F Browser/Obigo/Q05A OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1',
    ) as $ua) {
        $this->checkUA($ua, 'pantech_p7040_ver1');
      }
  }

  function test_pantech_3900_ver1() {
    foreach(array(
'PG-3900/R01 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_3900_ver1');
      }
  }



  function test_pantech_c510_ver1() {
    foreach(array(
'PANTECH-C510/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c510_ver1');
      }
  }



  function test_pantech_c520_ver1() {
    foreach(array(
'PANTECH-C520/IQUS04132009 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c520_ver1');
      }
  }



  function test_pantech_c530_ver1() {
    foreach(array(
'PANTECH-C530/ITUS10062008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'PANTECH-C530/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'PANTECH-C530/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c530_ver1');
      }
  }



  function test_pantech_c610_ver1() {
    foreach(array(
'PANTECH-C610/IRUS08252008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c610_ver1');
      }
  }



  function test_pantech_c630_ver1() {
    foreach(array(
'PANTECH-C630/IUUS10272008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c630_ver1');
      }
  }



  function test_pantech_c740_ver1() {
    foreach(array(
'PANTECH-C740/ISUS09012008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'PANTECH-C740/ISUS09012008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'PANTECH-C740/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'PANTECH-C740/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c740_ver1');
      }
  }



  function test_pantech_c790_ver1() {
    foreach(array(
'PANTECH-C790/JAUS08312009 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'PANTECH-C790/JAUS08312009; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14866; U; en-US) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c790_ver1');
      }
  }



  function test_pantech_c810_ver1() {
    foreach(array(
'PANTECH-C810/CB.WM01 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'PANTECH-C810/CT.WM02 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'PANTECH-C810/M044.33 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'PANTECH-C810/R01 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c810_ver1');
      }
  }



  function test_pantech_c820_ver1() {
    foreach(array(
'PANTECH-C820/WM28.31 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_c820_ver1');
      }
  }



  function test_pantech_cdm_8960_ver1() {
    foreach(array(
'CDM-8960 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_cdm_8960_ver1');
      }
  }



  function test_pantech_pgc300_ver1() {
    foreach(array(
'PG-C300/R01 MIC/1.1.14 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_pgc300_ver1');
      }
  }



  function test_pantech_pu_p7000_ver1() {
    foreach(array(
'PANTECH-P7000/JDUS10052009 Browser/Obigo/Q05A Profile/MIDP-2.1 Configuration/CLDC-1.1',
'PANTECH-P7000/JDUS10052009; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15645; U; en-US) Opera 9.50',
'PANTECH-P7000/JDUS10052009; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15645; U; es) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_pu_p7000_ver1');
      }
  }



  function test_pantech_sky_a600s_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; SKY IM-A600S)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-kr; SKY IM-A600S Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'pantech_sky_a600s_ver1');
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

  function pantechTest() {
    $this->UnitTestCase('pantech Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new PantechTest();
$test->run(new TextReporter());

?>
