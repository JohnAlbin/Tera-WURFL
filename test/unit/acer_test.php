<?php

/*
 * Recognising Acer devices from their user agents
 *
 */

require_once 'test_helper.php';

class AcerTest extends UnitTestCase {

  var $wurfl;


  function test_acer_f900_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) acer_E101',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) acer_F900',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) acer_S200',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5) acer_P300'
    ) as $ua) {
        $this->checkUA($ua, 'acer_f900_ver1');
      }
  }



  function test_acer_liquid_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; de-DE; Liquid)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Liquid)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; Liquid Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-FR; Liquid)',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; Liquid Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-IT; Liquid)',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; Liquid Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-NL; Liquid)',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-PT; Liquid)',
'Mozilla/5.0 (Linux; U; Android 1.6; ru-RU; Liquid)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-TW; Liquid)'
    ) as $ua) {
        $this->checkUA($ua, 'acer_liquid_ver1');
      }
  }



  function test_acer_s200_ver1() {
    foreach(array(
'acer_S200 Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Windows Phone 6.5)'
    ) as $ua) {
        $this->checkUA($ua, 'acer_s200_ver1');
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

  function acerTest() {
    $this->UnitTestCase('acer Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AcerTest();
$test->run(new TextReporter());

?>
