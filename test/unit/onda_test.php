<?php

/*
 * Recognising Onda devices from their user agents
 *
 */

require_once 'test_helper.php';

class OndaTest extends UnitTestCase {

  var $wurfl;


  function test_onda_n7010_ver1() {
    foreach(array(
'N7010 Onda WAP2.0/MIDP2.0/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'onda_n7010_ver1');
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

  function ondaTest() {
    $this->UnitTestCase('onda Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new OndaTest();
$test->run(new TextReporter());

?>
