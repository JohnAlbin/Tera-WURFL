<?php

/*
 * Recognising Rt devices from their user agents
 *
 */

require_once 'test_helper.php';

class RtTest extends UnitTestCase {

  var $wurfl;


  function test_rt_176x220_ver1() {
    foreach(array(
'RT176X220/M.RR4020001.M01001.V1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'RT176X220/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'rt_176x220_ver1');
      }
  }



  function test_rt_240x320_ver1() {
    foreach(array(
'RT240X320/M.RF2201501.M01002.V1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'RT240X320/M.RF2210201.M01002.V1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'RT240X320/M.RR4281001.M09002.V1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'RT240X320/M.RR4960001.M01002.V1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'RT240X320/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'rt_240x320_ver1');
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

  function rtTest() {
    $this->UnitTestCase('rt Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new RtTest();
$test->run(new TextReporter());

?>
