<?php

/*
 * Recognising Dell devices from their user agents
 *
 */

require_once 'test_helper.php';

class DellTest extends TeraWurflTestCase {

  var $wurfl;

  function test_dell_streak_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; Dell Streak Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
    ) as $ua) {
        $this->checkUA($ua, 'dell_streak_ver1');
      }
  }


  ############################################################


  function dellTest() {
    $this->UnitTestCase('dell Test');
  }


}

$test = new DellTest();
$test->run(new TextReporter());

?>
