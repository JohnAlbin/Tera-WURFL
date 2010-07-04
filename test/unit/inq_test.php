<?php

/*
 * Recognising Inq devices from their user agents
 *
 */

require_once 'test_helper.php';

class InqTest extends UnitTestCase {

  var $wurfl;


  function test_inq_b1_ver1() {
    foreach(array(
'INQ/B1-200H/1.0.38 Browser/NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'INQ/B1-200H/1.0.56 Browser/NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'inq_b1_ver1');
      }
  }



  function test_inq_inq1_ver1() {
    foreach(array(
'INQ1/R3.9.1 NF-Browser/3.5',
'INQ1/R3.9.12 NF-Browser/3.5',
'INQ1/R4.0.4 NF-Browser/3.5'
    ) as $ua) {
        $this->checkUA($ua, 'inq_inq1_ver1');
      }
  }



  function test_inq_q1_200h_ver1() {
    foreach(array(
'INQ/Q1-200H/1.0.45 Browser/NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'INQ/Q1-200H/1.0.56 Browser/NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'inq_q1_200h_ver1');
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

  function inqTest() {
    $this->UnitTestCase('inq Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new InqTest();
$test->run(new TextReporter());

?>
