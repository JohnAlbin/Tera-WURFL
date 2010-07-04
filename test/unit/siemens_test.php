<?php

/*
 * Recognising Siemens devices from their user agents
 *
 */

require_once 'test_helper.php';

class SiemensTest extends UnitTestCase {

  var $wurfl;


  function test_siemens_cf110_ver1() {
    foreach(array(
'SIE-C110/06 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0',
'SIE-C110/14 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.3.102 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'siemens_cf110_ver1');
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

  function siemensTest() {
    $this->UnitTestCase('siemens Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SiemensTest();
$test->run(new TextReporter());

?>
