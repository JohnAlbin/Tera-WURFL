<?php

/*
 * Recognising Pcd devices from their user agents
 *
 */

require_once 'test_helper.php';

class PcdTest extends TeraWurflTestCase {

  var $wurfl;


  function test_pcd_txt8026_ver1() {
    foreach(array(
'TXT8026/T05_0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'pcd_txt8026_ver1');
      }
  }



  function test_pcd_txt8030_ver1() {
    foreach(array(
'TXT8030/T05_0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'pcd_txt8030_ver1');
      }
  }



  ############################################################


  function pcdTest() {
    $this->UnitTestCase('pcd Test');
  }


}

$test = new PcdTest();
$test->run(new TextReporter());

?>
