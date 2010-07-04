<?php

/*
 * Recognising Mitsu devices from their user agents
 *
 */

require_once 'test_helper.php';

class MitsuTest extends UnitTestCase {

  var $wurfl;


  function test_mitsu_mt330_ver1() {
    foreach(array(
'Mitsu/1.2.C (MT330) MMP/1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mitsu_mt330_ver1');
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

  function mitsuTest() {
    $this->UnitTestCase('mitsu Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MitsuTest();
$test->run(new TextReporter());

?>
