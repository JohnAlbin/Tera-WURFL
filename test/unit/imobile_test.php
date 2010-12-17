<?php

/*
 * Recognising Imobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class ImobileTest extends TeraWurflTestCase {

  var $wurfl;


  function test_imobile_308_ver1() {
    foreach(array(
'i-mobile308'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_308_ver1');
      }
  }



  function test_imobile_315_ver1() {
    foreach(array(
'i-mobile315'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_315_ver1');
      }
  }



  function test_imobile_318_ver1() {
    foreach(array(
'i-mobile318'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_318_ver1');
      }
  }



  function test_imobile_510_ver1() {
    foreach(array(
'i-mobile510',
'i-mobile510 WAP Browser'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_510_ver1');
      }
  }



  function test_imobile_516_ver1() {
    foreach(array(
'i-mobile516'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_516_ver1');
      }
  }



  function test_imobile_518_ver1() {
    foreach(array(
'i-mobile518'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_518_ver1');
      }
  }



  function test_imobile_520_ver1() {
    foreach(array(
'i-mobile520'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_520_ver1');
      }
  }



  function test_imobile_5210_ver1() {
    foreach(array(
'i-mobile 5210'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_5210_ver1');
      }
  }



  function test_imobile_611_ver1() {
    foreach(array(
'i-mobile611',
'i-mobile611 i-mobile611'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_611_ver1');
      }
  }



  function test_imobile_613_ver1() {
    foreach(array(
'i-mobile613'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_613_ver1');
      }
  }



  function test_imobile_625_ver1() {
    foreach(array(
'i-mobile625'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_625_ver1');
      }
  }



  function test_imobile_626_ver1() {
    foreach(array(
'i-mobile626'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_626_ver1');
      }
  }



  function test_imobile_902_ver1() {
    foreach(array(
'i-mobile902'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_902_ver1');
      }
  }



  function test_imobile_ie3250_ver1() {
    foreach(array(
'i-mobileIE3250'
    ) as $ua) {
        $this->checkUA($ua, 'imobile_ie3250_ver1');
      }
  }



  ############################################################


  function imobileTest() {
    $this->UnitTestCase('imobile Test');
  }


}

$test = new ImobileTest();
$test->run(new TextReporter());

?>
