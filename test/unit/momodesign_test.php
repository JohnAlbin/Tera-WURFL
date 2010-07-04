<?php

/*
 * Recognising Momodesign devices from their user agents
 *
 */

require_once 'test_helper.php';

class MomodesignTest extends UnitTestCase {

  var $wurfl;


  function test_momodesign_md2_ver1() {
    foreach(array(
'MD-MD2/1.0 ACS-NF/3.2 Qtv/4.3'
    ) as $ua) {
        $this->checkUA($ua, 'momodesign_md2_ver1');
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

  function momodesignTest() {
    $this->UnitTestCase('momodesign Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MomodesignTest();
$test->run(new TextReporter());

?>
