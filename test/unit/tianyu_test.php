<?php

/*
 * Recognising Tianyu devices from their user agents
 *
 */

require_once 'test_helper.php';

class TianyuTest extends UnitTestCase {

  var $wurfl;


  function test_tianyu_a615_ver1() {
    foreach(array(
'TIANYU A615'
    ) as $ua) {
        $this->checkUA($ua, 'tianyu_a615_ver1');
      }
  }



  function test_tianyu_b830_ver1() {
    foreach(array(
'TIANYU B830 wap browser'
    ) as $ua) {
        $this->checkUA($ua, 'tianyu_b830_ver1');
      }
  }



  function test_tianyu_b832_ver1() {
    foreach(array(
'TIANYU B832'
    ) as $ua) {
        $this->checkUA($ua, 'tianyu_b832_ver1');
      }
  }



  function test_tianyu_ktouchv908_ver1() {
    foreach(array(
'TIANYU-KTOUCH/A168/MIDP2.0/CLDC1.1/Screen-320X430',
'TIANYU-KTOUCH/A610/Screen-176X220',
'TIANYU-KTOUCH/A630/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/A660/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/A662/MIDP2.0/CLDC1.1/Screen-240X320',
'TIANYU-KTOUCH/A665/MIDP2.0/CLDC1.1/Screen-240X320',
'TIANYU-KTOUCH/A691/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/A7726/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/A907/Screen-240X320',
'TIANYU-KTOUCH/A927/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/B2010/Screen-128X128',
'TIANYU-KTOUCH/B2012/Screen-128X128',
'TIANYU-KTOUCH/B2015/Screen-128X128',
'TIANYU-KTOUCH/B2016/Screen-128X128',
'TIANYU-KTOUCH/B832/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/B832/MIDP2.0/CLDC1.1/Screen-240x320, TIANYU-KTOUCH/B832/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/B858/Screen-240X320',
'TIANYU-KTOUCH/B922/MIDP2.0/CLDC1.1/Screen-240X320',
'TIANYU-KTOUCH/C350/MIDP2.0/CLDC1.1/Screen-240X320',
'TIANYU-KTOUCH/C500/MIDP2.0/CLDC1.1/Screen-240X320',
'TIANYU-KTOUCH/C800/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/D159/Screen-128X128',
'TIANYU-KTOUCH/D172/Screen-128X160',
'TIANYU-KTOUCH/D172/Screen-128x160',
'TIANYU-KTOUCH/D173/Screen-128x160',
'TIANYU-KTOUCH/D175/Screen-128X160',
'TIANYU-KTOUCH/D210/MIDP2.0/CLDC1.1/Screen-240X320',
'TIANYU-KTOUCH/D702/Screen-240x320',
'TIANYU-KTOUCH/D770/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/D772/Screen-176X220',
'TIANYU-KTOUCH/D780/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/D788/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/DT200/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/DT28/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/E62/MIDP2.0/CLDC1.1/Screen-240X400',
'TIANYU-KTOUCH/H677/Screen-176X220',
'TIANYU-KTOUCH/H688/Screen-176X220',
'TIANYU-KTOUCH/H699/Screen-176X220',
'TIANYU-KTOUCH/H877/MIDP2.0/CLDC1.1/Screen-320X240',
'TIANYU-KTOUCH/H999/MIDP2.0/CLDC1.1/Screen-320X240',
'TIANYU-KTOUCH/S968/Screen-240x320',
'TIANYU-KTOUCH/T60i/MIDP2.0/CLDC1.1/Screen-240X320',
'TIANYU-KTOUCH/V320/MIDP2.0/CLDC1.1/Screen-240X320',
'TIANYU-KTOUCH/V760/MIDP2.0/CLDC1.1/Screen-240X400',
'TIANYU-KTOUCH/V908/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/V908/Screen-240x320',
'TIANYU-KTOUCH/V918/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/W990/MIDP2.0/CLDC1.1/Screen-240x320',
'TIANYU-KTOUCH/X260/Screen-176X220',
'V908/MIDP2.0/CLDC1.1/Screen-240x320'
    ) as $ua) {
        $this->checkUA($ua, 'tianyu_ktouchv908_ver1');
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

  function tianyuTest() {
    $this->UnitTestCase('tianyu Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new TianyuTest();
$test->run(new TextReporter());

?>
