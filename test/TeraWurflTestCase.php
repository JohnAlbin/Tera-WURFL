<?php

class TeraWurflTestCase extends UnitTestCase {

  function outputMatchResult($agent) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $device_id =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($device_id) {
      // Use ' ::: ' as the separator, because I've not seen that in any
      // real useragent strings.
      echo "MATCHED: $device_id ::: $agent\n";
    } else {
      echo "UNRECOGNISED: $agent\n";
    }
  }

  function checkUnmatchedUA($agent, $line_number) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $device_id =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($device_id) {
      echo "Line: $line_number UA: $agent\nRecognised as: $device_id\n";
    }

    $this->assertFalse($device_id);
  }

  function checkUA($agent, $expected, $line_number) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $actual =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($expected != $actual) {
      echo "Line: $line_number Expected: $expected, got: $actual\nUA: $agent\n";
    }
    $this->assertEqual($actual, $expected);
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

