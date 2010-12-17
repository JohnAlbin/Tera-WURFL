<?php

/*
 * Recognising Htil devices from their user agents
 *
 */

require_once 'test_helper.php';

class HtilTest extends TeraWurflTestCase {

  var $wurfl;


  function test_htil_g111_ver1() {
    foreach(array(
'HTIL-G111'
    ) as $ua) {
        $this->checkUA($ua, 'htil_g111_ver1');
      }
  }



  ############################################################


  function htilTest() {
    $this->UnitTestCase('htil Test');
  }


}

$test = new HtilTest();
$test->run(new TextReporter());

?>
