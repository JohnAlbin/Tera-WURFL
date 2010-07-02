<?php

/*
 * Recognising Apple devices from their user agents
 *
 */

require_once 'test_helper.php';

class appleTest extends UnitTestCase {

  var $wurfl;

  

  function test_apple_ipod_touch_ver1() {
    foreach(array(
'Mozilla/5.0 (iPod; U; CPU like Mac OS X; en) AppleWebKit/420.1 (KHTML, like Gecko) Version/3.0 Mobile/4B1 Safari/419.3',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 2_2_1 like Mac OS X; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5H11a Safari/525.20'
    ) as $ua) {
        $this->checkUA($ua, 'apple_ipod_touch_ver1');
      }
  }



  function test_apple_iphone_ver2_1() {
    foreach(array(
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Mobile/7E18',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; de-de) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; pt-br) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; fr-fr) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; it-it) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; en-us) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7C144 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 2_1 like Mac OS X; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5F136 Safari/525.20',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Mobile/7A341',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; da-dk) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; de-de) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; pt-pt) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; tr-tr) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; it-it) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 2_1 like Mac OS X; es-es) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5F136 Safari/525.20',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; ja-jp) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; en-us) AppleWebKit/532.9 (KHTML, like Gecko) Mobile/8A293',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; es-es) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; it-it) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 2_2 like Mac OS X; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5G77 Safari/525.20',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; es-es) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0_1 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A400 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; da-dk) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; es-es) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; pl-pl) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; de-de) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_2 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Mobile/7D11',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; ja-jp) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; de-de) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; ko-kr) AppleWebKit/532.9 (KHTML, like Gecko) Mobile/8A293',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_1_3 like Mac OS X; de-de) AppleWebKit/528.18 (KHTML, like Gecko) Mobile/7E18',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_0 like Mac OS X; it-it) AppleWebKit/532.9 (KHTML, like Gecko) Mobile/8A293'
    ) as $ua) {
        $this->checkUA($ua, 'apple_iphone_ver2_1');
      }
  }



  function test_apple_ipod_touch_ver3() {
    foreach(array(
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_3 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Mobile/7E18',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_2 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 4_0 like Mac OS X; en-us) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_3 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_2 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Mobile/7D11',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_3 like Mac OS X; ja-jp) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_3 like Mac OS X; de-de) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_3 like Mac OS X; sv-se) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_3 like Mac OS X; fr-fr) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_2 like Mac OS X; es-es) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7D11 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 4_0 like Mac OS X; el-gr) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_1 like Mac OS X; es-es) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7C145 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 4_0 like Mac OS X; de-de) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 3_1_3 like Mac OS X; es-es) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7E18 Safari/528.16',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 4_0 like Mac OS X; ja-jp) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8A293 Safari/6531.22.7'
    ) as $ua) {
        $this->checkUA($ua, 'apple_ipod_touch_ver3');
      }
  }



  function test_apple_ipod_touch_ver2_2() {
    foreach(array(
'Mozilla/5.0 (iPod; U; CPU iPhone OS 2_2_1 like Mac OS X; pt-br) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5H11 Safari/525.20',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 2_2_1 like Mac OS X; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5H11 Safari/525.20',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 2_2_1 like Mac OS X; de-de) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5H11 Safari/525.20',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 2_2 like Mac OS X; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5G77a Safari/525.20',
'Mozilla/5.0 (iPod; U; CPU iPhone OS 2_2 like Mac OS X; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5G77 Safari/525.20'
    ) as $ua) {
        $this->checkUA($ua, 'apple_ipod_touch_ver2_2');
      }
  }



  function test_apple_iphone_ver2() {
    foreach(array(
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 2_0_1 like Mac OS X; de-de) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5B108 Safari/525.20',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 2_0_1 like Mac OS X; es-es) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5B108 Safari/525.20'
    ) as $ua) {
        $this->checkUA($ua, 'apple_iphone_ver2');
      }
  }



  function test_apple_ipad_ver1() {
    foreach(array(
'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B367 Safari/531.21.10'
    ) as $ua) {
        $this->checkUA($ua, 'apple_ipad_ver1');
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

  function appleTest() {
    $this->UnitTestCase('Apple Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new appleTest();
$test->run(new TextReporter());

?>
