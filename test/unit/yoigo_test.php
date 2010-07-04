<?php

/*
 * Recognising Yoigo devices from their user agents
 *
 */

require_once 'test_helper.php';

class YoigoTest extends UnitTestCase {

  var $wurfl;


  function test_yoigo_f188_ver1() {
    foreach(array(
'Yoigo F188/1.0 ACS-NF/3.3 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'yoigo_f188_ver1');
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

  function yoigoTest() {
    $this->UnitTestCase('yoigo Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new YoigoTest();
$test->run(new TextReporter());

?>
