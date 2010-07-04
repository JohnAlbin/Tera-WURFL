<?php

/*
 * Recognising Danger devices from their user agents
 *
 */

require_once 'test_helper.php';

class DangerTest extends UnitTestCase {

  var $wurfl;


  function test_danger_hiptop_ver4() {
    foreach(array(
'Mozilla/5.0 (Danger hiptop 4.0; U; rv:1.7.12) Gecko/20050920',
'Mozilla/5.0 (Danger hiptop 4.6; U; rv:1.7.12) Gecko/20050920',
'Mozilla/5.0 (Danger hiptop 4.7; U; rv:1.7.12) Gecko/20050920',
'Mozilla/5.0 (Danger hiptop 5.0; U; rv:1.7.12) Gecko/20050920'
    ) as $ua) {
        $this->checkUA($ua, 'danger_hiptop_ver4');
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

  function dangerTest() {
    $this->UnitTestCase('danger Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new DangerTest();
$test->run(new TextReporter());

?>
