<?php

/*
 * Recognising Telit devices from their user agents
 *
 */

require_once 'test_helper.php';

class TelitTest extends TeraWurflTestCase {

  var $wurfl;


  function test_telit_gu1100_ver1() {
    foreach(array(
'GU1100'
    ) as $ua) {
        $this->checkUA($ua, 'telit_gu1100_ver1');
      }
  }



  ############################################################


  function telitTest() {
    $this->UnitTestCase('telit Test');
  }


}

$test = new TelitTest();
$test->run(new TextReporter());

?>
