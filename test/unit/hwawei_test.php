<?php

/*
 * Recognising Hwawei devices from their user agents
 *
 */

require_once 'test_helper.php';

class HwaweiTest extends UnitTestCase {

  var $wurfl;


  function test_hwawei_u8220_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; U8220 Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-tw; U8220 Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'hwawei_u8220_ver1');
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

  function hwaweiTest() {
    $this->UnitTestCase('hwawei Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new HwaweiTest();
$test->run(new TextReporter());

?>
