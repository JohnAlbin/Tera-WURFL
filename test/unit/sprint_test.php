<?php

/*
 * Recognising Sprint devices from their user agents
 *
 */

require_once 'test_helper.php';

class SprintTest extends UnitTestCase {

  var $wurfl;


  function test_sprint_apa9292_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Sprint APA9292KT Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; Sprint APA9292KT Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
    ) as $ua) {
        $this->checkUA($ua, 'sprint_apa9292_ver1');
      }
  }


  function test_sprint_ppc6700_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint:PPC-6700; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'sprint_ppc6700_ver1');
      }
  }



  function test_sprint_ppc6800_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Sprint:PPC6800',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Sprint:PPC6800',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Sprint:PPC6800'
    ) as $ua) {
        $this->checkUA($ua, 'sprint_ppc6800_ver1');
      }
  }



  function test_sprint_scp_2700_ver1() {
    foreach(array(
'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; Polaris/6.0/AMB) Boost SCP-2700',
'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; Polaris/6.0/AMB) PL2700',
'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; Polaris/6.0/AMB) Sprint SCP-2700'
    ) as $ua) {
        $this->checkUA($ua, 'sprint_scp_2700_ver1');
      }
  }



  function test_sprint_sph_i350_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Sprint-SPH-i350'
    ) as $ua) {
        $this->checkUA($ua, 'sprint_sph_i350_ver1');
      }
  }



  function test_sprint_t7380_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Sprint T7380',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile6.0) Sprint T7380'
    ) as $ua) {
        $this->checkUA($ua, 'sprint_t7380_ver1');
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

  function sprintTest() {
    $this->UnitTestCase('sprint Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SprintTest();
$test->run(new TextReporter());

?>
