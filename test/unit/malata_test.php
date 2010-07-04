<?php

/*
 * Recognising Malata devices from their user agents
 *
 */

require_once 'test_helper.php';

class MalataTest extends UnitTestCase {

  var $wurfl;


  function test_malata_mt126_ver1() {
    foreach(array(
'malata_MT126'
    ) as $ua) {
        $this->checkUA($ua, 'malata_mt126_ver1');
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

  function malataTest() {
    $this->UnitTestCase('malata Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MalataTest();
$test->run(new TextReporter());

?>
