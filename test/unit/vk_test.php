<?php

/*
 * Recognising Vk devices from their user agents
 *
 */

require_once 'test_helper.php';

class VkTest extends UnitTestCase {

  var $wurfl;


  function test_vk530_ver1() {
    foreach(array(
'WAPPER'
    ) as $ua) {
        $this->checkUA($ua, 'vk530_ver1');
      }
  }



  function test_vk_vk2030_ver1() {
    foreach(array(
'VK-VK2030/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'vk_vk2030_ver1');
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

  function vkTest() {
    $this->UnitTestCase('vk Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new VkTest();
$test->run(new TextReporter());

?>
