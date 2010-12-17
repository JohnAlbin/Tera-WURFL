<?php

/*
 * Recognising Skyworth devices from their user agents
 *
 */

require_once 'test_helper.php';

class SkyworthTest extends TeraWurflTestCase {

  var $wurfl;


  function test_skyworth_t650_ver1() {
    foreach(array(
'SKYWORTH-T650/S100/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'skyworth_t650_ver1');
      }
  }



  function test_skyworth_t700_ver1() {
    foreach(array(
'SKYWORTH-T700/S200/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'skyworth_t700_ver1');
      }
  }



  ############################################################


  function skyworthTest() {
    $this->UnitTestCase('skyworth Test');
  }


}

$test = new SkyworthTest();
$test->run(new TextReporter());

?>
