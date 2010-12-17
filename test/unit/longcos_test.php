<?php

/*
 * Recognising Longcos devices from their user agents
 *
 */

require_once 'test_helper.php';

class LongcosTest extends TeraWurflTestCase {

  var $wurfl;


  function test_longcos_sk16d_ver1() {
    foreach(array(
'LONGCOS_SK16'
    ) as $ua) {
        $this->checkUA($ua, 'longcos_sk16d_ver1');
      }
  }



  function test_longcos_sk18_ver1() {
    foreach(array(
'LONGCOS_SK18_2SIM'
    ) as $ua) {
        $this->checkUA($ua, 'longcos_sk18_ver1');
      }
  }



  ############################################################


  function longcosTest() {
    $this->UnitTestCase('longcos Test');
  }


}

$test = new LongcosTest();
$test->run(new TextReporter());

?>
