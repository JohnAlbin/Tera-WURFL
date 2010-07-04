<?php

/*
 * Recognising Cect devices from their user agents
 *
 */

require_once 'test_helper.php';

class CectTest extends UnitTestCase {

  var $wurfl;


  function test_cect_a1000_ver1() {
    foreach(array(
'CECT A1000',
'CECT A1000 CECT A1000'
    ) as $ua) {
        $this->checkUA($ua, 'cect_a1000_ver1');
      }
  }



  function test_cect_u600_ver1() {
    foreach(array(
'CECT U600/1.0 TELECA/W07.12 Release/03.26.2007 Browser/Teleca-1.2'
    ) as $ua) {
        $this->checkUA($ua, 'cect_u600_ver1');
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

  function cectTest() {
    $this->UnitTestCase('cect Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new CectTest();
$test->run(new TextReporter());

?>
