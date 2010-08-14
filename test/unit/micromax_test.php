<?php

/*
 * Recognising Micromax devices from their user agents
 *
 */

require_once 'test_helper.php';

class MicromaxTest extends TeraWurflTestCase {

  var $wurfl;


  function test_micromax_q7_ver1() {
    foreach(array(
'MicromaxQ7/MIDP2.0/CLDC1.1/Screen-320X240',
'MicromaxQ7/MIDP2.0/CLDC1.1/Screen-320X240, MicromaxQ7/MIDP2.0/CLDC1.1/Screen-320X240',
    ) as $ua) {
        $this->checkUA($ua, 'micromax_q7_ver1');
      }
  }


  function test_micromax_q1_ver1() {
    foreach(array(
'Micromax Q1'
    ) as $ua) {
        $this->checkUA($ua, 'micromax_q1_ver1');
      }
  }



  function test_micromax_q5_ver1() {
    foreach(array(
'MICROMAXQ5',
'MICROMAX Q5'
    ) as $ua) {
        $this->checkUA($ua, 'micromax_q5_ver1');
      }
  }



  function test_micromax_x113_ver1() {
    foreach(array(
'MicroMax-X113'
    ) as $ua) {
        $this->checkUA($ua, 'micromax_x113_ver1');
      }
  }



  function test_micromax_x225_ver1() {
    foreach(array(
'Micromax-X225'
    ) as $ua) {
        $this->checkUA($ua, 'micromax_x225_ver1');
      }
  }



  ############################################################


  function micromaxTest() {
    $this->UnitTestCase('micromax Test');
  }


}

$test = new MicromaxTest();
$test->run(new TextReporter());

?>
