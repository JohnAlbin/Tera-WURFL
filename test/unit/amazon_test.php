<?php

/*
 * Recognising Amazon devices from their user agents
 *
 */

require_once 'test_helper.php';

class AmazonTest extends UnitTestCase {

  var $wurfl;


  function test_amazon_kindle2_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; Linux 2.6.22) NetFront/3.4 Kindle/2.5 (screen 600x800; rotate)'
    ) as $ua) {
        $this->checkUA($ua, 'amazon_kindle2_ver1');
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

  function amazonTest() {
    $this->UnitTestCase('amazon Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AmazonTest();
$test->run(new TextReporter());

?>
