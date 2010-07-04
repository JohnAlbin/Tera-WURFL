<?php

/*
 * Recognising Mov devices from their user agents
 *
 */

require_once 'test_helper.php';

class MovTest extends UnitTestCase {

  var $wurfl;


  function test_mov_v195_ver1() {
    foreach(array(
'MOT-V195/0A.63.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V195/0A.63.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V195/0A.64.0DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mov_v195_ver1');
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

  function movTest() {
    $this->UnitTestCase('mov Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MovTest();
$test->run(new TextReporter());

?>
