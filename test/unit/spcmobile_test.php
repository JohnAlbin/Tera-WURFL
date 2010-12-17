<?php

/*
 * Recognising Spcmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class SpcmobileTest extends TeraWurflTestCase {

  var $wurfl;


  function test_spcmobile_boss_1000_ver1() {
    foreach(array(
'SPC MOBILE BOSS 1000'
    ) as $ua) {
        $this->checkUA($ua, 'spcmobile_boss_1000_ver1');
      }
  }



  ############################################################


  function spcmobileTest() {
    $this->UnitTestCase('spcmobile Test');
  }


}

$test = new SpcmobileTest();
$test->run(new TextReporter());

?>
