<?php

/*
 * Recognising Amoi devices from their user agents
 *
 */

require_once 'test_helper.php';

class AmoiTest extends UnitTestCase {

  var $wurfl;


  function test_amoi_8512_ver1() {
    foreach(array(
'Amoi 8512/R18.0 NF-Browser/3.3',
'Amoi 8512/R18.5 NF-Browser/3.3',
'Amoi 8512/R18.7 NF-Browser/3.3',
'Amoi 8512/R21.0 NF-Browser/3.3'
    ) as $ua) {
        $this->checkUA($ua, 'amoi_8512_ver1');
      }
  }



  function test_amoi_8709_ver1() {
    foreach(array(
'Amoi 8709/R14.4 NF-Browser/3.4',
'Amoi 8709/R14.9 NF-Browser/3.4'
    ) as $ua) {
        $this->checkUA($ua, 'amoi_8709_ver1');
      }
  }



  function test_amoi_a9109_ver1() {
    foreach(array(
'Amoi 9109/R20.0 NF-Browser/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'amoi_a9109_ver1');
      }
  }



  function test_amoi_berlin_ver1() {
    foreach(array(
'Berlin/R12 NF-Browser/3.3'
    ) as $ua) {
        $this->checkUA($ua, 'amoi_berlin_ver1');
      }
  }



  function test_amoi_newyork_ver1() {
    foreach(array(
'New York/R3.0 NF-Browser/3.3 Openwave-MMS/4.5 IA-Java/1.0 Profile/MIDP2.0/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'amoi_newyork_ver1');
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

  function amoiTest() {
    $this->UnitTestCase('amoi Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AmoiTest();
$test->run(new TextReporter());

?>
