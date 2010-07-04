<?php

/*
 * Recognising Skybee devices from their user agents
 *
 */

require_once 'test_helper.php';

class SkybeeTest extends UnitTestCase {

  var $wurfl;


  function test_skybee_83at_ver1() {
    foreach(array(
'SKYBEE-83AT'
    ) as $ua) {
        $this->checkUA($ua, 'skybee_83at_ver1');
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

  function skybeeTest() {
    $this->UnitTestCase('skybee Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SkybeeTest();
$test->run(new TextReporter());

?>
