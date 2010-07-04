<?php

/*
 * Recognising Cdm devices from their user agents
 *
 */

require_once 'test_helper.php';

class CdmTest extends UnitTestCase {

  var $wurfl;


  function test_cdm_8074_ver1() {
    foreach(array(
'CDM-8074VM UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'cdm_8074_ver1');
      }
  }



  function test_cdm_8955_ver1() {
    foreach(array(
'CDM-8955 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'cdm_8955_ver1');
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

  function cdmTest() {
    $this->UnitTestCase('cdm Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new CdmTest();
$test->run(new TextReporter());

?>
