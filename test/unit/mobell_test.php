<?php

/*
 * Recognising Mobell devices from their user agents
 *
 */

require_once 'test_helper.php';

class MobellTest extends TeraWurflTestCase {

  var $wurfl;


  function test_mobell_m200i_ver1() {
    foreach(array(
'M200i'
    ) as $ua) {
        $this->checkUA($ua, 'mobell_m200i_ver1');
      }
  }



  function test_mobell_m590_ver1() {
    foreach(array(
'M590'
    ) as $ua) {
        $this->checkUA($ua, 'mobell_m590_ver1');
      }
  }



  ############################################################


  function mobellTest() {
    $this->UnitTestCase('mobell Test');
  }


}

$test = new MobellTest();
$test->run(new TextReporter());

?>
