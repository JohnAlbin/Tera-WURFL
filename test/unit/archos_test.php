<?php

/*
 * Recognising Archos devices from their user agents
 *
 */

require_once 'test_helper.php';

class ArchosTest extends UnitTestCase {

  var $wurfl;

  function test_archos_a70hb_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.0.15; en-US; A70HB)',
'Mozilla/5.0 (Linux; U; Android 1.0.15; fr-fr; A70HB Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
    ) as $ua) {
        $this->checkUA($ua, 'archos_a70hb_ver1');
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

  function archosTest() {
    $this->UnitTestCase('archos Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new ArchosTest();
$test->run(new TextReporter());

?>
