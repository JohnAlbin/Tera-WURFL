<?php

/*
 * Recognising Infosonics devices from their user agents
 *
 */

require_once 'test_helper.php';

class InfosonicsTest extends UnitTestCase {

  var $wurfl;


  function test_infosonics_verykool_i250_ver1() {
    foreach(array(
'VeryKool-i250',
'VeryKool-i250 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'infosonics_verykool_i250_ver1');
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

  function infosonicsTest() {
    $this->UnitTestCase('infosonics Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new InfosonicsTest();
$test->run(new TextReporter());

?>
