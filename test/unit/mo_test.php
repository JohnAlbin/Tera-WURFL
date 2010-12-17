<?php

/*
 * Recognising Mo devices from their user agents
 *
 */

require_once 'test_helper.php';

class MoTest extends TeraWurflTestCase {

  var $wurfl;


  function test_mo_milla_ver1() {
    foreach(array(
'MOT-MILLA/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mo_milla_ver1');
      }
  }



  ############################################################


  function moTest() {
    $this->UnitTestCase('mo Test');
  }


}

$test = new MoTest();
$test->run(new TextReporter());

?>
