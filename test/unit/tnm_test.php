<?php

/*
 * Recognising Tnm devices from their user agents
 *
 */

require_once 'test_helper.php';

class TnmTest extends TeraWurflTestCase {

  var $wurfl;


  function test_tnm_v70_ver1() {
    foreach(array(
'TNM-V70/1.0 Release/11.22.2008 Browser/Obigo2.0'
    ) as $ua) {
        $this->checkUA($ua, 'tnm_v70_ver1');
      }
  }



  ############################################################


  function tnmTest() {
    $this->UnitTestCase('tnm Test');
  }


}

$test = new TnmTest();
$test->run(new TextReporter());

?>
