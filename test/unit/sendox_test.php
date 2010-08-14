<?php

/*
 * Recognising Sendox devices from their user agents
 *
 */

require_once 'test_helper.php';

class SendoxTest extends TeraWurflTestCase {

  var $wurfl;


  function test_sendox_ver1() {
    foreach(array(
'SendoX/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sendox_ver1');
      }
  }



  ############################################################


  function sendoxTest() {
    $this->UnitTestCase('sendox Test');
  }


}

$test = new SendoxTest();
$test->run(new TextReporter());

?>
