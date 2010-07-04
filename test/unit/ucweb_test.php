<?php

/*
 * Recognising Ucweb devices from their user agents
 *
 */

require_once 'test_helper.php';

class UcwebTest extends UnitTestCase {

  var $wurfl;


  function test_ucweb_51_ver1() {
    foreach(array(
'UCWEB5.1'
    ) as $ua) {
        $this->checkUA($ua, 'ucweb_51_ver1');
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

  function ucwebTest() {
    $this->UnitTestCase('ucweb Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new UcwebTest();
$test->run(new TextReporter());

?>
