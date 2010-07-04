<?php

/*
 * Recognising Bleu devices from their user agents
 *
 */

require_once 'test_helper.php';

class BleuTest extends UnitTestCase {

  var $wurfl;


  function test_bleu_355x_ver1() {
    foreach(array(
'Bleu 355x'
    ) as $ua) {
        $this->checkUA($ua, 'bleu_355x_ver1');
      }
  }



  function test_bleu_458x_ver1() {
    foreach(array(
'Bleu 458x'
    ) as $ua) {
        $this->checkUA($ua, 'bleu_458x_ver1');
      }
  }



  function test_bleu_471x_ver1() {
    foreach(array(
'Bleu 471x'
    ) as $ua) {
        $this->checkUA($ua, 'bleu_471x_ver1');
      }
  }



  function test_bleu_651z_ver1() {
    foreach(array(
'BLEU_651z/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 BLEU_651z/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bleu_651z_ver1');
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

  function bleuTest() {
    $this->UnitTestCase('bleu Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new BleuTest();
$test->run(new TextReporter());

?>
