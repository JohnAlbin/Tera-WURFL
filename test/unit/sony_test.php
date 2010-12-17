<?php

/*
 * Recognising Sony devices from their user agents
 *
 */

require_once 'test_helper.php';

class SonyTest extends TeraWurflTestCase {

  var $wurfl;


  function test_sony_playstation3_ver1() {
    foreach(array(
'Mozilla/5.0 (PLAYSTATION 3; 1.00)'
    ) as $ua) {
        $this->checkUA($ua, 'sony_playstation3_ver1');
      }
  }



  function test_sony_psp_ver1() {
    foreach(array(
'Mozilla/4.0 (PSP (PlayStation Portable); 2.00)'
    ) as $ua) {
        $this->checkUA($ua, 'sony_psp_ver1');
      }
  }



  ############################################################


  function sonyTest() {
    $this->UnitTestCase('sony Test');
  }


}

$test = new SonyTest();
$test->run(new TextReporter());

?>
