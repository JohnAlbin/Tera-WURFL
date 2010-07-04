<?php

/*
 * Recognising Qtek devices from their user agents
 *
 */

require_once 'test_helper.php';

class QtekTest extends UnitTestCase {

  var $wurfl;


  function test_qtek_9100_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; QtekA9100; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'qtek_9100_ver1');
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

  function qtekTest() {
    $this->UnitTestCase('qtek Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new QtekTest();
$test->run(new TextReporter());

?>
