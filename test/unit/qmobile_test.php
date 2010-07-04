<?php

/*
 * Recognising Qmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class QmobileTest extends UnitTestCase {

  var $wurfl;


  function test_qmobile_f220_ver1() {
    foreach(array(
'Q-Mobile-F220/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'qmobile_f220_ver1');
      }
  }



  function test_qmobile_q61_ver1() {
    foreach(array(
'Q-MOBILE-Q61/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'qmobile_q61_ver1');
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

  function qmobileTest() {
    $this->UnitTestCase('qmobile Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new QmobileTest();
$test->run(new TextReporter());

?>
