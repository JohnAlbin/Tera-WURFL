<?php

/*
 * Recognising Ms devices from their user agents
 *
 */

require_once 'test_helper.php';

class MsTest extends UnitTestCase {

  var $wurfl;


  function test_ms_mobile_browser_ver1_submsie401240320() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'ms_mobile_browser_ver1_submsie401240320');
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

  function msTest() {
    $this->UnitTestCase('ms Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MsTest();
$test->run(new TextReporter());

?>
