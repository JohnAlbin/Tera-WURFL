<?php

/*
 * Recognising Amoisonic devices from their user agents
 *
 */

require_once 'test_helper.php';

class AmoisonicTest extends UnitTestCase {

  var $wurfl;


  function test_amoisonic_9201_ver1() {
    foreach(array(
'Amoi/9201/Plat-EMP/WAP2.0/MIDP2.0/CLDC1.0-V12.0'
    ) as $ua) {
        $this->checkUA($ua, 'amoisonic_9201_ver1');
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

  function amoisonicTest() {
    $this->UnitTestCase('amoisonic Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AmoisonicTest();
$test->run(new TextReporter());

?>
