<?php

/*
 * Recognising Daxian devices from their user agents
 *
 */

require_once 'test_helper.php';

class DaxianTest extends TeraWurflTestCase {

  var $wurfl;


  function test_daxian_d758_ver1() {
    foreach(array(
'D758/1.00 Nucleus RTOS/V1.11.19 MTK6225/07B Release/04.25.2008 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'daxian_d758_ver1');
      }
  }



  ############################################################


  function daxianTest() {
    $this->UnitTestCase('daxian Test');
  }


}

$test = new DaxianTest();
$test->run(new TextReporter());

?>
