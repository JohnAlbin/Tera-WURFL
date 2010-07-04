<?php

/*
 * Recognising Wellcom devices from their user agents
 *
 */

require_once 'test_helper.php';

class WellcomTest extends UnitTestCase {

  var $wurfl;


  function test_wellcom_a88_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; WOWMobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; WellcoM-A88)',
'Mozilla/5.0 (Linux; U; Android 1.6; th-TH; WellcoM-A88)'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_a88_ver1');
      }
  }



  function test_wellcom_w189_ver1() {
    foreach(array(
'WELLCOM-W189_WAP_Browser'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w189_ver1');
      }
  }



  function test_wellcom_w3350_ver1() {
    foreach(array(
'W3350 WAP Browser'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w3350_ver1');
      }
  }



  function test_wellcom_w398_ver1() {
    foreach(array(
'WELLCOM_W398'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w398_ver1');
      }
  }



  function test_wellcom_w920_ver1() {
    foreach(array(
'WELLCOM/W3313/Screen-176*220',
'WELLCOM/W3313/Screen-176*220,',
'WELLCOM/W389/Screen-176*220',
'WELLCOM/W920/MIDP2.0/CLDC1.1/Screen-240x320'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w920_ver1');
      }
  }



  function test_wellcom_w929_ver1() {
    foreach(array(
'WellcoM W929 WAP Browser',
'WellcoM/W920+/Screen-240X320'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w929_ver1');
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

  function wellcomTest() {
    $this->UnitTestCase('wellcom Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new WellcomTest();
$test->run(new TextReporter());

?>
