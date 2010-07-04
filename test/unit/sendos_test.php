<?php

/*
 * Recognising Sendos devices from their user agents
 *
 */

require_once 'test_helper.php';

class SendosTest extends UnitTestCase {

  var $wurfl;


  function test_sendos330_ver1() {
    foreach(array(
'SendoS330/14a-g-03'
    ) as $ua) {
        $this->checkUA($ua, 'sendos330_ver1');
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

  function sendosTest() {
    $this->UnitTestCase('sendos Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SendosTest();
$test->run(new TextReporter());

?>
