<?php

/*
 * Recognising Bmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class BmobileTest extends TeraWurflTestCase {

  var $wurfl;


  function test_bmobile_eve_ver1() {
    foreach(array(
'EVE/1.0 TMSS-Browser/1.0.0 Profile/MIDP/2.0-compatible Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'bmobile_eve_ver1');
      }
  }



  ############################################################


  function bmobileTest() {
    $this->UnitTestCase('bmobile Test');
  }


}

$test = new BmobileTest();
$test->run(new TextReporter());

?>
