<?php

/*
 * Recognising Tsm devices from their user agents
 *
 */

require_once 'test_helper.php';

class TsmTest extends TeraWurflTestCase {

  var $wurfl;


  function test_tsm_100_ver1() {
    foreach(array(
'TSM-100/161654C0 Browser/1.2.1 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'tsm_100_ver1');
      }
  }



  ############################################################


  function tsmTest() {
    $this->UnitTestCase('tsm Test');
  }


}

$test = new TsmTest();
$test->run(new TextReporter());

?>
