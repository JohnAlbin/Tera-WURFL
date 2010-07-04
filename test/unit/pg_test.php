<?php

/*
 * Recognising Pg devices from their user agents
 *
 */

require_once 'test_helper.php';

class PgTest extends UnitTestCase {

  var $wurfl;


  function test_pg_1400_ver1() {
    foreach(array(
'PG-1400/R01 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pg_1400_ver1');
      }
  }



  function test_pg_3200_ver1() {
    foreach(array(
'PG-3200/R01 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pg_3200_ver1');
      }
  }



  function test_pg_c150_ver1() {
    foreach(array(
'PG-C150/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'pg_c150_ver1');
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

  function pgTest() {
    $this->UnitTestCase('pg Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new PgTest();
$test->run(new TextReporter());

?>
