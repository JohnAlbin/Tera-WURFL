<?php

/*
 * Recognising Bird devices from their user agents
 *
 */

require_once 'test_helper.php';

class BirdTest extends UnitTestCase {

  var $wurfl;


  function test_bird_d615_ver1() {
    foreach(array(
'BIRD_D615/1.00 Nucleus RTOS/V1.11.19 MTK6227/05C_V21 Release/5.25.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_d615_ver1');
      }
  }



  function test_bird_d660_ver1() {
    foreach(array(
'BIRD_D660/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 BIRD_D660/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_d660_ver1');
      }
  }



  function test_bird_d718_ver1() {
    foreach(array(
'BIRD D718/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_d718_ver1');
      }
  }



  function test_bird_k298_ver1() {
    foreach(array(
'BIRD K298/1.00 Nucleus RTOS/V1.11.19 MTK6223/08A Release/07.01.2008 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_k298_ver1');
      }
  }



  function test_bird_k505_ver1() {
    foreach(array(
'K505/1.00 Nucleus RTOS/V1.11.19 MTK6225/07B Release/04.25.2008 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_k505_ver1');
      }
  }



  function test_bird_s689_ver1() {
    foreach(array(
'Bird.S689/K03,MK/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.3.100 (GUI) MMP/1.0',
'Bird.S689/K03,MN/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.3.100 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_s689_ver1');
      }
  }



  function test_bird_s701_ver1() {
    foreach(array(
'BIRD S701_GPRS/1.0 OSE/V1.6.0 ULC/2.0 Release/04.21.2008 Browser/JB4.3'
    ) as $ua) {
        $this->checkUA($ua, 'bird_s701_ver1');
      }
  }



  function test_bird_s918_ver1() {
    foreach(array(
'BIRD S918/1.00 Nucleus RTOS/V1.11.19 MTK6225/06B Release/06.20.2007 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_s918_ver1');
      }
  }



  function test_bird_v750_ver1() {
    foreach(array(
'BIRD V750/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_v750_ver1');
      }
  }



  function test_bird_v788_ver1() {
    foreach(array(
'BIRD V788/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bird_v788_ver1');
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

  function birdTest() {
    $this->UnitTestCase('bird Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new BirdTest();
$test->run(new TextReporter());

?>
