<?php

/*
 * Recognising Karbonn devices from their user agents
 *
 */

require_once 'test_helper.php';

class KarbonnTest extends UnitTestCase {

  var $wurfl;


  function test_karbonn_k444_ver1() {
    foreach(array(
'K444/1.0 MTK/MAUI.08A.W08.28.MP.V2 Release/7.30.2009 Browser/OBIGO-Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'karbonn_k444_ver1');
      }
  }



  function test_karbonn_k451_ver1() {
    foreach(array(
'K451/1.0 MTK/MAUI.08A.W08.28.MP.V2 Release/7.30.2009 Browser/OBIGO-Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'karbonn_k451_ver1');
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

  function karbonnTest() {
    $this->UnitTestCase('karbonn Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new KarbonnTest();
$test->run(new TextReporter());

?>
