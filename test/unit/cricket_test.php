<?php

/*
 * Recognising Cricket devices from their user agents
 *
 */

require_once 'test_helper.php';

class CricketTest extends TeraWurflTestCase {

  var $wurfl;


  function test_cricket_a100_ver1() {
    foreach(array(
'Cricket-A100/1.0 UP.Browser/6.3.0.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'cricket_a100_ver1');
      }
  }



  function test_cricket_a200_ver1() {
    foreach(array(
'Cricket-A200/1.0 UP.Browser/6.3.0.7 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'cricket_a200_ver1');
      }
  }



  ############################################################


  function cricketTest() {
    $this->UnitTestCase('cricket Test');
  }


}

$test = new CricketTest();
$test->run(new TextReporter());

?>
