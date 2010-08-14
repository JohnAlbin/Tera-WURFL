<?php

/*
 * Recognising Utstargz devices from their user agents
 *
 */

require_once 'test_helper.php';

class UtstargzTest extends TeraWurflTestCase {

  var $wurfl;


  function test_utstargz1z_ver1() {
    foreach(array(
'utstargz1/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'utstargz1z_ver1');
      }
  }



  ############################################################


  function utstargzTest() {
    $this->UnitTestCase('utstargz Test');
  }


}

$test = new UtstargzTest();
$test->run(new TextReporter());

?>
