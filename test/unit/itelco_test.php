<?php

/*
 * Recognising Itelco devices from their user agents
 *
 */

require_once 'test_helper.php';

class ItelcoTest extends UnitTestCase {

  var $wurfl;


  function test_itelco_it2500_ver1() {
    foreach(array(
'ITELCO-IT2500/R0.1 NF-Browser/3.3'
    ) as $ua) {
        $this->checkUA($ua, 'itelco_it2500_ver1');
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

  function itelcoTest() {
    $this->UnitTestCase('itelco Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new ItelcoTest();
$test->run(new TextReporter());

?>
