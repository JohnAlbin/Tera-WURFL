<?php

/*
 * Recognising Videocon devices from their user agents
 *
 */

require_once 'test_helper.php';

class VideoconTest extends UnitTestCase {

  var $wurfl;


  function test_videocon_v1301_ver1() {
    foreach(array(
'V1301'
    ) as $ua) {
        $this->checkUA($ua, 'videocon_v1301_ver1');
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

  function videoconTest() {
    $this->UnitTestCase('videocon Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new VideoconTest();
$test->run(new TextReporter());

?>
