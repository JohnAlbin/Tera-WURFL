<?php

/*
 * Recognising Ktouch devices from their user agents
 *
 */

require_once 'test_helper.php';

class KtouchTest extends TeraWurflTestCase {

  var $wurfl;


  function test_ktouch_a7722_ver1() {
    foreach(array(
'A7722/MIDP2.0/CLDC1.1/Screen-128X160'
    ) as $ua) {
        $this->checkUA($ua, 'ktouch_a7722_ver1');
      }
  }



  function test_ktouch_h888_ver1() {
    foreach(array(
'H888/MIDP2.0/CLDC1.1/Screen-176X220'
    ) as $ua) {
        $this->checkUA($ua, 'ktouch_h888_ver1');
      }
  }



  function test_ktouch_h899_ver1() {
    foreach(array(
'H899/MIDP2.0/CLDC1.1/Screen-176X220'
    ) as $ua) {
        $this->checkUA($ua, 'ktouch_h899_ver1');
      }
  }



  function test_ktouch_n77_ver1() {
    foreach(array(
'K-Touch_N77_CMCC/TYM885517_1048_V0801 MTK/6225 Release/30.04.2008 Browser/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'ktouch_n77_ver1');
      }
  }



  ############################################################


  function ktouchTest() {
    $this->UnitTestCase('ktouch Test');
  }


}

$test = new KtouchTest();
$test->run(new TextReporter());

?>
