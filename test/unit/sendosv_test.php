<?php

/*
 * Recognising Sendosv devices from their user agents
 *
 */

require_once 'test_helper.php';

class SendosvTest extends TeraWurflTestCase {

  var $wurfl;


  function test_sendosv663_ver1() {
    foreach(array(
'SendoSV663/10'
    ) as $ua) {
        $this->checkUA($ua, 'sendosv663_ver1');
      }
  }



  ############################################################


  function sendosvTest() {
    $this->UnitTestCase('sendosv Test');
  }


}

$test = new SendosvTest();
$test->run(new TextReporter());

?>
