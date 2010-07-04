<?php

/*
 * Recognising Gigabyte devices from their user agents
 *
 */

require_once 'test_helper.php';

class GigabyteTest extends UnitTestCase {

  var $wurfl;


  function test_gigabyte_gsmart_ver1() {
    foreach(array(
'GIGABYTE-g-Smart Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; GIGABYTE-g-Smart)'
    ) as $ua) {
        $this->checkUA($ua, 'gigabyte_gsmart_ver1');
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

  function gigabyteTest() {
    $this->UnitTestCase('gigabyte Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new GigabyteTest();
$test->run(new TextReporter());

?>
