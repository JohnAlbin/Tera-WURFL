<?php

/*
 * Recognising Lemon devices from their user agents
 *
 */

require_once 'test_helper.php';

class LemonTest extends TeraWurflTestCase {

  var $wurfl;


  function test_lemon_iq_707_ver1() {
    foreach(array(
'LEMON IQ707'
    ) as $ua) {
        $this->checkUA($ua, 'lemon_iq_707_ver1');
      }
  }



  ############################################################


  function lemonTest() {
    $this->UnitTestCase('lemon Test');
  }


}

$test = new LemonTest();
$test->run(new TextReporter());

?>
