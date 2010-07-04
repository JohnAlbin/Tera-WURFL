<?php

/*
 * Recognising Tnm devices from their user agents
 *
 */

require_once 'test_helper.php';

class TnmTest extends UnitTestCase {

  var $wurfl;


  function test_tnm_v70_ver1() {
    foreach(array(
'TNM-V70/1.0 Release/11.22.2008 Browser/Obigo2.0'
    ) as $ua) {
        $this->checkUA($ua, 'tnm_v70_ver1');
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

  function tnmTest() {
    $this->UnitTestCase('tnm Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new TnmTest();
$test->run(new TextReporter());

?>
