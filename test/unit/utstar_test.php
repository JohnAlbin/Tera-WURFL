<?php

/*
 * Recognising Utstar devices from their user agents
 *
 */

require_once 'test_helper.php';

class UtstarTest extends UnitTestCase {

  var $wurfl;


  function test_utstar_xv6175_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) 320x240; VZW; UTStar-XV6175; Window Mobile 6.1 Standard;'
    ) as $ua) {
        $this->checkUA($ua, 'utstar_xv6175_ver1');
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

  function utstarTest() {
    $this->UnitTestCase('utstar Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new UtstarTest();
$test->run(new TextReporter());

?>
