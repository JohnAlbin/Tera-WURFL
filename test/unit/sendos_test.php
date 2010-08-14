<?php

/*
 * Recognising Sendos devices from their user agents
 *
 */

require_once 'test_helper.php';

class SendosTest extends TeraWurflTestCase {

  var $wurfl;


  function test_sendos330_ver1() {
    foreach(array(
'SendoS330/14a-g-03'
    ) as $ua) {
        $this->checkUA($ua, 'sendos330_ver1');
      }
  }



  ############################################################


  function sendosTest() {
    $this->UnitTestCase('sendos Test');
  }


}

$test = new SendosTest();
$test->run(new TextReporter());

?>
