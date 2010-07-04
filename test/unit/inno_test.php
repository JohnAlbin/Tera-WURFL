<?php

/*
 * Recognising Inno devices from their user agents
 *
 */

require_once 'test_helper.php';

class InnoTest extends UnitTestCase {

  var $wurfl;


  function test_inno55_ver1() {
    foreach(array(
'INNO55'
    ) as $ua) {
        $this->checkUA($ua, 'inno55_ver1');
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

  function innoTest() {
    $this->UnitTestCase('inno Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new InnoTest();
$test->run(new TextReporter());

?>
