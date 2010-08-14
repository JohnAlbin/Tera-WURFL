<?php

/*
 * Recognising Bleu devices from their user agents
 *
 */

require_once 'test_helper.php';

class BleuTest extends TeraWurflTestCase {

  var $wurfl;

  function test_bleu_355x_ver1() {
    foreach(array(
'Bleu 355x'
    ) as $ua) {
        $this->checkUA($ua, 'bleu_355x_ver1');
      }
  }



  function test_bleu_458x_ver1() {
    foreach(array(
'Bleu 458x'
    ) as $ua) {
        $this->checkUA($ua, 'bleu_458x_ver1');
      }
  }



  function test_bleu_471x_ver1() {
    foreach(array(
'Bleu 471x'
    ) as $ua) {
        $this->checkUA($ua, 'bleu_471x_ver1');
      }
  }



  function test_bleu_651z_ver1() {
    foreach(array(
'BLEU_651z/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 BLEU_651z/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'bleu_651z_ver1');
      }
  }

  ############################################################

  function bleuTest() {
    $this->UnitTestCase('bleu Test');
  }

}

$test = new BleuTest();
$test->run(new TextReporter());

