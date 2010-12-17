<?php

/*
 * Recognising Infosonics devices from their user agents
 *
 */

require_once 'test_helper.php';

class InfosonicsTest extends TeraWurflTestCase {

  var $wurfl;


  function test_infosonics_verykool_i250_ver1() {
    foreach(array(
'VeryKool-i250',
'VeryKool-i250 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'infosonics_verykool_i250_ver1');
      }
  }



  ############################################################


  function infosonicsTest() {
    $this->UnitTestCase('infosonics Test');
  }


}

$test = new InfosonicsTest();
$test->run(new TextReporter());

?>
