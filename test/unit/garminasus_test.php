<?php

/*
 * Recognising Garminasus devices from their user agents
 *
 */

require_once 'test_helper.php';

class GarminasusTest extends UnitTestCase {

  var $wurfl;


  function test_garminasus_a50_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Garminfone)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Garminfone Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1; A50-V4.0.12-user-20100414',
'Mozilla/5.0 (Linux; U; Android 1.6; es-US; Garminfone)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-us; Garminfone Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1; A50-V4.0.12-user-20100414',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; Galaxy Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; ru-RU; Galaxy)'
    ) as $ua) {
        $this->checkUA($ua, 'garminasus_a50_ver1');
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

  function garminasusTest() {
    $this->UnitTestCase('garminasus Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new GarminasusTest();
$test->run(new TextReporter());

?>
