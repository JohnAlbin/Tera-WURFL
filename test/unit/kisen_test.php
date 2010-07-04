<?php

/*
 * Recognising Kisen devices from their user agents
 *
 */

require_once 'test_helper.php';

class KisenTest extends UnitTestCase {

  var $wurfl;


  function test_kisen_k3000_ver1() {
    foreach(array(
'K3000_WAP2_0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'kisen_k3000_ver1');
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

  function kisenTest() {
    $this->UnitTestCase('kisen Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new KisenTest();
$test->run(new TextReporter());

?>
