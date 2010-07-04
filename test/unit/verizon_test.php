<?php

/*
 * Recognising Verizon devices from their user agents
 *
 */

require_once 'test_helper.php';

class VerizonTest extends UnitTestCase {

  var $wurfl;


  function test_verizon_touch_pro2_xv6875_ver1() {
    foreach(array(
'XV6875 Opera/9.50 (Windows NT  5.1; U; en)'
    ) as $ua) {
        $this->checkUA($ua, 'verizon_touch_pro2_xv6875_ver1');
      }
  }



  function test_verizon_xv6850_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 480x640; XV6850.1; Window Mobile 6.1 Professional;',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 480x640; XV6850; Window Mobile 6.1 Professional;',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 480x640; XV6950; Window Mobile 6.1 Professional;'
    ) as $ua) {
        $this->checkUA($ua, 'verizon_xv6850_ver1');
      }
  }



  function test_verizon_xv6900_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 320x320; XV6900; Window Mobile 6.1 Professional;',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) 320x320; XV6900; Window Mobile 6.0 Professional;'
    ) as $ua) {
        $this->checkUA($ua, 'verizon_xv6900_ver1');
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

  function verizonTest() {
    $this->UnitTestCase('verizon Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new VerizonTest();
$test->run(new TextReporter());

?>
