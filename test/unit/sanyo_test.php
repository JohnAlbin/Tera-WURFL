<?php

/*
 * Recognising Sanyo devices from their user agents
 *
 */

require_once 'test_helper.php';

class SanyoTest extends UnitTestCase {

  var $wurfl;


  function test_sanyo_m1_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-M1/NZ/1.0) NetFront/3.3 MMP/2.0',
'Mozilla/4.0 (MobilePhone SCP-M1/US/1.0) NetFront/3.3 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_m1_ver1');
      }
  }



  function test_sanyo_mm7500_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone MM-7500/US/1.0) NetFront/3.1 MMP/2.0',
'Mozilla/4.0 (MobilePhone SCP-7500/NZ/1.0) NetFront/3.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_mm7500_ver1');
      }
  }



  function test_sanyo_pls6600_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone PLS6600/US/1.0) NetFront/3.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_pls6600_ver1');
      }
  }



  function test_sanyo_pm8200_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone PM-8200/US/1.0) NetFront/3.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_pm8200_ver1');
      }
  }



  function test_sanyo_rl4920_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone RL-4920/US/1.0) NetFront/3.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_rl4920_ver1');
      }
  }



  function test_sanyo_scp2500_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-2500/US/1.0) NetFront/3.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp2500_ver1');
      }
  }



  function test_sanyo_scp3200_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-3200/US/1.0) NetFront/3.3L MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp3200_ver1');
      }
  }



  function test_sanyo_scp3800_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-3800/NZ/1.0) NetFront/3.4 MMP/2.0',
'Mozilla/4.0 (MobilePhone SCP-3800/US/1.0) NetFront/3.4 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp3800_ver1');
      }
  }



  function test_sanyo_scp3810_ver1() {
    foreach(array(
'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sprint SCP-3810',
'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sprint SCP-6760'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp3810_ver1');
      }
  }



  function test_sanyo_scp5300_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-5300/1.0) NetFront/3.0 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp5300_ver1');
      }
  }



  function test_sanyo_scp6600_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-6600/NZ/1.0) NetFront/3.1 MMP/2.0',
'Mozilla/4.0 (MobilePhone SCP-6600/US/1.0) NetFront/3.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp6600_ver1');
      }
  }



  function test_sanyo_scp6650_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-6650/US/1.0) NetFront/3.3L MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp6650_ver1');
      }
  }



  function test_sanyo_scp8100_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-8100/US/1.0) NetFront/3.0 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp8100_ver1');
      }
  }



  function test_sanyo_scp8500_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-8500/US/1.0) NetFront/3.4 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp8500_ver1');
      }
  }



  function test_sanyo_scp9000_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-9000/NZ/1.0) NetFront/3.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp9000_ver1');
      }
  }



  function test_sanyo_scp_6750_ver1() {
    foreach(array(
'Mozilla/4.0 (REX; U; en-us; Sanyo; SCP-6750/US; NetFront/3.4/AMB)',
'Sanyo_SCP-6750CA Access-NetFront/3.4 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp_6750_ver1');
      }
  }



  function test_sanyo_scp_8400_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-8400/US/1.0) NetFront/3.3 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp_8400_ver1');
      }
  }



  function test_sanyo_scp_pro200_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-PRO200/US/1.0) NetFront/3.4 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp_pro200_ver1');
      }
  }



  function test_sanyo_scp_pro700_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone SCP-PRO700/US/1.0) NetFront/3.4 MMP/2.0',
'Sanyo_SCP-PRO700CA Access-NetFront/3.4 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_scp_pro700_ver1');
      }
  }



  function test_sanyo_vi2300_ver1() {
    foreach(array(
'Mozilla/4.0 (MobilePhone VI-2300/US/1.0) NetFront/3.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sanyo_vi2300_ver1');
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

  function sanyoTest() {
    $this->UnitTestCase('sanyo Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SanyoTest();
$test->run(new TextReporter());

?>
