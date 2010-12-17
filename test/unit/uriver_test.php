<?php

/*
 * Recognising Uriver devices from their user agents
 *
 */

require_once 'test_helper.php';

class UriverTest extends TeraWurflTestCase {

  var $wurfl;


  function test_uriver_sp500_ver1() {
    foreach(array(
'Uriver SP500/Teleca/Q03C1.22 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'uriver_sp500_ver1');
      }
  }



  ############################################################


  function uriverTest() {
    $this->UnitTestCase('uriver Test');
  }


}

$test = new UriverTest();
$test->run(new TextReporter());

?>
