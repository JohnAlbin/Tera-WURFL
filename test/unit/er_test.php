<?php

/*
 * Recognising Er devices from their user agents
 *
 */

require_once 'test_helper.php';

class ErTest extends UnitTestCase {

  var $wurfl;


  function test_er_x960_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) acer_X960'
    ) as $ua) {
        $this->checkUA($ua, 'er_x960_ver1');
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

  function erTest() {
    $this->UnitTestCase('er Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new ErTest();
$test->run(new TextReporter());

?>
