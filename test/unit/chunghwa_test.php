<?php

/*
 * Recognising Chunghwa devices from their user agents
 *
 */

require_once 'test_helper.php';

class ChunghwaTest extends UnitTestCase {

  var $wurfl;


  function test_chunghwa_cht8000_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; zh-TW; CHT8000)'
    ) as $ua) {
        $this->checkUA($ua, 'chunghwa_cht8000_ver1');
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

  function chunghwaTest() {
    $this->UnitTestCase('chunghwa Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new ChunghwaTest();
$test->run(new TextReporter());

?>
