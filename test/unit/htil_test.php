<?php

/*
 * Recognising Htil devices from their user agents
 *
 */

require_once 'test_helper.php';

class HtilTest extends UnitTestCase {

  var $wurfl;


  function test_htil_g111_ver1() {
    foreach(array(
'HTIL-G111'
    ) as $ua) {
        $this->checkUA($ua, 'htil_g111_ver1');
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

  function htilTest() {
    $this->UnitTestCase('htil Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new HtilTest();
$test->run(new TextReporter());

?>
