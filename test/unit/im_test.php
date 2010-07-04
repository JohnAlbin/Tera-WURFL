<?php

/*
 * Recognising Im devices from their user agents
 *
 */

require_once 'test_helper.php';

class ImTest extends UnitTestCase {

  var $wurfl;


  function test_im_t880_ver1() {
    foreach(array(
'IM-T880'
    ) as $ua) {
        $this->checkUA($ua, 'im_t880_ver1');
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

  function imTest() {
    $this->UnitTestCase('im Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new ImTest();
$test->run(new TextReporter());

?>
