<?php

/*
 * Recognising Palm devices from their user agents
 *
 */

require_once 'test_helper.php';

class PalmTest extends UnitTestCase {

  var $wurfl;


  function test_palm_centro_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-D062; Blazer/4.5) 16;320x320',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-D062; Blazer/4.5) Palm 690p 16;320x320',
'PalmCentro/v0001 Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-D061; Blazer/4.5) 16;320x320'
    ) as $ua) {
        $this->checkUA($ua, 'palm_centro_ver1');
      }
  }



  function test_palm_pixi_plus_ver1() {
    foreach(array(
'Mozilla/5.0 (webOS/1.3.5.2; U; de-DE) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pre/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'palm_pixi_plus_ver1');
      }
  }



  function test_palm_pixi_ver1() {
    foreach(array(
'Mozilla/5.0 (webOS/1.3.1; U; en-US) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pixi/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'palm_pixi_ver1');
      }
  }



  function test_palm_pre_plus_ver1() {
    foreach(array(
'Mozilla/5.0 (webOS/1.3.5.1; U; en-US) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pre/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'palm_pre_plus_ver1');
      }
  }



  function test_palm_pre_ver1() {
    foreach(array(
'Mozilla/5.0 (webOS/1.1; U; de-DE) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pre/1.0',
'Mozilla/5.0 (webOS/1.1; U; en-CA) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pre/1.0',
'Mozilla/5.0 (webOS/1.1; U; en-IE) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pre/1.0',
'Mozilla/5.0 (webOS/1.1; U; es-ES) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pre/1.0',
'Mozilla/5.0 (webOS/1.2.9.1; U; en-US) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pixi/1.0',
'Mozilla/5.0 (webOS/1.3.1; U; de-DE) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/1.0 Safari/525.27.1 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.0; U; de-DE) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.0; U; en-CA) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.0; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pixi/1.0',
'Mozilla/5.0 (webOS/1.4.0; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pixi/1.1',
'Mozilla/5.0 (webOS/1.4.0; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.0; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.1',
'Mozilla/5.0 (webOS/1.4.0; U; es-MX) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.1.1; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pixi/1.0',
'Mozilla/5.0 (webOS/1.4.1.1; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pixi/1.1',
'Mozilla/5.0 (webOS/1.4.1.1; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.1.1; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.1',
'Mozilla/5.0 (webOS/1.4.1.1; U; es-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pixi/1.0',
'Mozilla/5.0 (webOS/1.4.1.1; U; es-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.1.1; U; es-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.1',
'Mozilla/5.0 (webOS/1.4.1; U; de-DE) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pixi/1.1',
'Mozilla/5.0 (webOS/1.4.1; U; de-DE) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.1; U; en-CA) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.1; U; en-GB) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.1; U; es-ES) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.1; U; fr-CA) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.2; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.1',
'Mozilla/5.0 (webOS/1.4.3; U; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pixi/1.1',
'Mozilla/5.0 (webOS/1.4.5; U; de-DE) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0',
'Mozilla/5.0 (webOS/1.4.5; U; de-DE) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.1',
'Mozilla/5.0 (webOS/1.4.5; U; en-GB) AppleWebKit/532.2 (KHTML, like Gecko) Version/1.0 Safari/532.2 Pre/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'palm_pre_ver1');
      }
  }



  function test_palm_treo500v_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) /Palm 500v/v0100',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) /Palm500/v0100'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo500v_ver1');
      }
  }



  function test_palm_treo680_ver1_subblazer45() {
    foreach(array(
'Palm680/RC1 Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-D053; Blazer/4.5) 16;320x320',
'Palm680/RC2 Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-D053; Blazer/4.5) 16;320x320'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo680_ver1_subblazer45');
      }
  }



  function test_palm_treo700p_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-D052; Blazer/4.5) 16;320x320',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/hspr-D053; Blazer/4.5)16;320x320'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo700p_ver1');
      }
  }



  function test_palm_treo750v_ver1() {
    foreach(array(
'Palm750/v0003 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)',
'Palm750/v0004 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'Palm750/v0005 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'Palm750/v0100 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)',
'Palm750/v0101 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo750v_ver1');
      }
  }



  function test_palm_treo750w_ver1() {
    foreach(array(
'Palm750/v0000 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo750w_ver1');
      }
  }



  function test_palm_treo755p_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-D060; Blazer/4.5) 16;320x320'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo755p_ver1');
      }
  }



  function test_palm_treo800w_ver1() {
    foreach(array(
'Treo800w/v0100 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE, PPC; 320x320) (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo800w_ver1');
      }
  }



  function test_palm_treo_700vx_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Treo700wx'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo_700vx_ver1');
      }
  }



  function test_palm_treo_850_ver1() {
    foreach(array(
'Palm850/V0100 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'Palm850/v0100 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo_850_ver1');
      }
  }



  function test_palm_treo_850e_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Alltel_Treo850e',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Sprint Treo850e'
    ) as $ua) {
        $this->checkUA($ua, 'palm_treo_850e_ver1');
      }
  }



  function test_palm_tunx_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-TunX; Blazer/4.3) 16;320x320',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; PalmSource/Palm-TunX; Blazer/4.3) 16;320x448'
    ) as $ua) {
        $this->checkUA($ua, 'palm_tunx_ver1');
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

  function palmTest() {
    $this->UnitTestCase('palm Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new PalmTest();
$test->run(new TextReporter());

?>
