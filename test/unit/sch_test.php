<?php

/*
 * Recognising Sch devices from their user agents
 *
 */

require_once 'test_helper.php';

class SchTest extends UnitTestCase {

  var $wurfl;


  function test_sch_3410_ver1() {
    foreach(array(
'SCH-R410 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sch_3410_ver1');
      }
  }



  function test_sch_f519_ver1() {
    foreach(array(
'SCH-F519/ UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sch_f519_ver1');
      }
  }



  function test_sch_r210_ver1() {
    foreach(array(
'SCH-R210 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sch_r210_ver1');
      }
  }



  function test_sch_r400_ver1() {
    foreach(array(
'SCH-R400 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sch_r400_ver1');
      }
  }



  function test_sch_r610_ver1() {
    foreach(array(
'SCH-R610 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sch_r610_ver1');
      }
  }



  function test_sch_u340_ver1() {
    foreach(array(
'SCH-U340C UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sch_u340_ver1');
      }
  }



  function test_sch_u410_ver1() {
    foreach(array(
'SCH-U410/1.0 NetFront/3.0.22.2.6 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sch_u410_ver1');
      }
  }



  function test_sch_u520_ver1() {
    foreach(array(
'SCH-U520 UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'SCH-U520 UP.Browser/6.2.3.8.f.1.100 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sch_u520_ver1');
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

  function schTest() {
    $this->UnitTestCase('sch Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SchTest();
$test->run(new TextReporter());

?>
