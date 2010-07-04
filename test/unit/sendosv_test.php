<?php

/*
 * Recognising Sendosv devices from their user agents
 *
 */

require_once 'test_helper.php';

class SendosvTest extends UnitTestCase {

  var $wurfl;


  function test_sendosv663_ver1() {
    foreach(array(
'SendoSV663/10'
    ) as $ua) {
        $this->checkUA($ua, 'sendosv663_ver1');
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

  function sendosvTest() {
    $this->UnitTestCase('sendosv Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SendosvTest();
$test->run(new TextReporter());

?>
