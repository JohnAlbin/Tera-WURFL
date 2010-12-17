<?php

/*
 * Recognising Hedy devices from their user agents
 *
 */

require_once 'test_helper.php';

class HedyTest extends TeraWurflTestCase {

  var $wurfl;


  function test_hedy_h797_ver1() {
    foreach(array(
'HEDY_H797_PLXBROW'
    ) as $ua) {
        $this->checkUA($ua, 'hedy_h797_ver1');
      }
  }



  function test_hedy_m881_ver1() {
    foreach(array(
'HEDY_M881_PLXBROW'
    ) as $ua) {
        $this->checkUA($ua, 'hedy_m881_ver1');
      }
  }



  ############################################################


  function hedyTest() {
    $this->UnitTestCase('hedy Test');
  }


}

$test = new HedyTest();
$test->run(new TextReporter());

?>
