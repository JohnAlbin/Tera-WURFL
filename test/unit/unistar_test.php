<?php

/*
 * Recognising Unistar devices from their user agents
 *
 */

require_once 'test_helper.php';

class UnistarTest extends TeraWurflTestCase {

  var $wurfl;


  function test_unistar_l100_ver1() {
    foreach(array(
'UNISTARL100'
    ) as $ua) {
        $this->checkUA($ua, 'unistar_l100_ver1');
      }
  }



  function test_unistar_m320_ver1() {
    foreach(array(
'UNISTARM320'
    ) as $ua) {
        $this->checkUA($ua, 'unistar_m320_ver1');
      }
  }



  ############################################################


  function unistarTest() {
    $this->UnitTestCase('unistar Test');
  }


}

$test = new UnistarTest();
$test->run(new TextReporter());

?>
