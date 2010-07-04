<?php

/*
 * Recognising Vkmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class VkmobileTest extends UnitTestCase {

  var $wurfl;


  function test_vkmobile_vk200_ver1() {
    foreach(array(
'VK-VK200/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'vkmobile_vk200_ver1');
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

  function vkmobileTest() {
    $this->UnitTestCase('vkmobile Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new VkmobileTest();
$test->run(new TextReporter());

?>
