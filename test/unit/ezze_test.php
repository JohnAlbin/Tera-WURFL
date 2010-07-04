<?php

/*
 * Recognising Ezze devices from their user agents
 *
 */

require_once 'test_helper.php';

class EzzeTest extends UnitTestCase {

  var $wurfl;


  function test_ezze_zmem1075_ver1() {
    foreach(array(
'ZMEM1075/BSI AU.Browser/2.0 QO3C1 MMP/1.0 ZMEM1075/BSI AU.Browser/2.0 QO3C1 MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'ezze_zmem1075_ver1');
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

  function ezzeTest() {
    $this->UnitTestCase('ezze Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new EzzeTest();
$test->run(new TextReporter());

?>
