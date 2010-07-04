<?php

/*
 * Recognising Ahong devices from their user agents
 *
 */

require_once 'test_helper.php';

class AhongTest extends UnitTestCase {

  var $wurfl;


  function test_ahong_d23_ver1() {
    foreach(array(
'AHONG_D23'
    ) as $ua) {
        $this->checkUA($ua, 'ahong_d23_ver1');
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

  function ahongTest() {
    $this->UnitTestCase('ahong Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AhongTest();
$test->run(new TextReporter());

?>
