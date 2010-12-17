<?php

/*
 * Recognising Sendo devices from their user agents
 *
 */

require_once 'test_helper.php';

class SendoTest extends TeraWurflTestCase {

  var $wurfl;


  function test_sendo_s360_ver1() {
    foreach(array(
'SendoS360/01'
    ) as $ua) {
        $this->checkUA($ua, 'sendo_s360_ver1');
      }
  }



  ############################################################


  function sendoTest() {
    $this->UnitTestCase('sendo Test');
  }


}

$test = new SendoTest();
$test->run(new TextReporter());

?>
