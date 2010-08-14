<?php

/*
 * Recognising Audiovox devices from their user agents
 *
 */

require_once 'test_helper.php';

class AudiovoxTest extends TeraWurflTestCase {

  var $wurfl;


  function test_audiovox_cdm8940_ver1() {
    foreach(array(
'AUDIOVOX-CDM8940 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'audiovox_cdm8940_ver1');
      }
  }



  ############################################################


  function audiovoxTest() {
    $this->UnitTestCase('audiovox Test');
  }


}

$test = new AudiovoxTest();
$test->run(new TextReporter());

?>
