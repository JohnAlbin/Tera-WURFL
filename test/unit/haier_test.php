<?php

/*
 * Recognising Haier devices from their user agents
 *
 */

require_once 'test_helper.php';

class HaierTest extends UnitTestCase {

  var $wurfl;


  function test_haier_d1200p_ver1() {
    foreach(array(
'Haier-1200P/1.0 iPanel/2.0 WAP2.0 (compatible; UP.Browser/6.2.2.4; UPG1; UP/4.0; Embedded)'
    ) as $ua) {
        $this->checkUA($ua, 'haier_d1200p_ver1');
      }
  }



  function test_haier_htil_s210_ver1() {
    foreach(array(
'HTIL-S210'
    ) as $ua) {
        $this->checkUA($ua, 'haier_htil_s210_ver1');
      }
  }



  function test_haier_t10c_ver1() {
    foreach(array(
'Haier-T10C/1.0 iPanel/2.0 WAP2.0 (compatible; UP.Browser/6.2.2.4; UPG1; UP/4.0; Embedded)'
    ) as $ua) {
        $this->checkUA($ua, 'haier_t10c_ver1');
      }
  }



  function test_haier_td7210e_ver1() {
    foreach(array(
'G3/1.0 RTKE_OS/01.00 TD7210E/11.0 Release/10.23.2008 Browser/Techsoft-01.00.00 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'haier_td7210e_ver1');
      }
  }



  function test_haier_z702_ver1() {
    foreach(array(
'HTIL-Z702 WAP Browser'
    ) as $ua) {
        $this->checkUA($ua, 'haier_z702_ver1');
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

  function haierTest() {
    $this->UnitTestCase('haier Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new HaierTest();
$test->run(new TextReporter());

?>
