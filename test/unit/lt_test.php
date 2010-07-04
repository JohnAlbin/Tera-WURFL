<?php

/*
 * Recognising Lt devices from their user agents
 *
 */

require_once 'test_helper.php';

class LtTest extends UnitTestCase {

  var $wurfl;


  function test_lt_x1_ver1() {
    foreach(array(
'LT/1.00(Tx:13;Ty:13;Font:13;Gx:176;Gy:220;C:CF;G:J2;GI:2;Screen:176*220;Group_ID:T808)/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lt_x1_ver1');
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

  function ltTest() {
    $this->UnitTestCase('lt Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new LtTest();
$test->run(new TextReporter());

?>
