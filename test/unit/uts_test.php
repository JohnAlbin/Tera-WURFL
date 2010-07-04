<?php

/*
 * Recognising Uts devices from their user agents
 *
 */

require_once 'test_helper.php';

class UtsTest extends UnitTestCase {

  var $wurfl;


  function test_uts_1450m_ver1() {
    foreach(array(
'UTS-1450M/1.0 UP.Browser/6.3.0.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'uts_1450m_ver1');
      }
  }



  function test_uts_7126m_ver1() {
    foreach(array(
'UTS-7126M/1.0 UP.Browser/6.3.0.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'uts_7126m_ver1');
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

  function utsTest() {
    $this->UnitTestCase('uts Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new UtsTest();
$test->run(new TextReporter());

?>
