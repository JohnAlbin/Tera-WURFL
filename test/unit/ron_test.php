<?php

/*
 * Recognising Ron devices from their user agents
 *
 */

require_once 'test_helper.php';

class RonTest extends TeraWurflTestCase {

  var $wurfl;


  function test_ron_d09_ver1() {
    foreach(array(
'RON_D09_01/DG_D09/WAP2.0 Profile RON_D09_01/DG_D09/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'ron_d09_ver1');
      }
  }



  ############################################################


  function ronTest() {
    $this->UnitTestCase('ron Test');
  }


}

$test = new RonTest();
$test->run(new TextReporter());

?>
