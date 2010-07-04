<?php

/*
 * Recognising Micromax devices from their user agents
 *
 */

require_once 'test_helper.php';

class MicromaxTest extends UnitTestCase {

  var $wurfl;


  function test_micromax_q1_ver1() {
    foreach(array(
'Micromax Q1'
    ) as $ua) {
        $this->checkUA($ua, 'micromax_q1_ver1');
      }
  }



  function test_micromax_q5_ver1() {
    foreach(array(
'MICROMAX Q5'
    ) as $ua) {
        $this->checkUA($ua, 'micromax_q5_ver1');
      }
  }



  function test_micromax_x113_ver1() {
    foreach(array(
'MicroMax-X113'
    ) as $ua) {
        $this->checkUA($ua, 'micromax_x113_ver1');
      }
  }



  function test_micromax_x225_ver1() {
    foreach(array(
'Micromax-X225'
    ) as $ua) {
        $this->checkUA($ua, 'micromax_x225_ver1');
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

  function micromaxTest() {
    $this->UnitTestCase('micromax Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MicromaxTest();
$test->run(new TextReporter());

?>
