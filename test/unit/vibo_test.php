<?php

/*
 * Recognising Vibo devices from their user agents
 *
 */

require_once 'test_helper.php';

class ViboTest extends UnitTestCase {

  var $wurfl;


  function test_vibo_a688_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; zh-TW; Vibo-A688)'
    ) as $ua) {
        $this->checkUA($ua, 'vibo_a688_ver1');
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

  function viboTest() {
    $this->UnitTestCase('vibo Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new ViboTest();
$test->run(new TextReporter());

?>
