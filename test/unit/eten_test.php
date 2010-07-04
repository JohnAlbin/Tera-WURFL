<?php

/*
 * Recognising Eten devices from their user agents
 *
 */

require_once 'test_helper.php';

class EtenTest extends UnitTestCase {

  var $wurfl;


  function test_eten_x500_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC)',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC) UP.Link/6.5.0.0.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC)'
    ) as $ua) {
        $this->checkUA($ua, 'eten_x500_ver1');
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

  function etenTest() {
    $this->UnitTestCase('eten Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new EtenTest();
$test->run(new TextReporter());

?>
