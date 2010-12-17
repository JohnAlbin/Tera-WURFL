<?php

/*
 * Recognising Etouch devices from their user agents
 *
 */

require_once 'test_helper.php';

class EtouchTest extends TeraWurflTestCase {

  var $wurfl;


  function test_etouch_d11_ver1() {
    foreach(array(
'eTouch D11'
    ) as $ua) {
        $this->checkUA($ua, 'etouch_d11_ver1');
      }
  }



  function test_etouch_d33_ver1() {
    foreach(array(
'eTouchD33'
    ) as $ua) {
        $this->checkUA($ua, 'etouch_d33_ver1');
      }
  }



  function test_etouch_d35_ver1() {
    foreach(array(
'eTouchD35'
    ) as $ua) {
        $this->checkUA($ua, 'etouch_d35_ver1');
      }
  }



  ############################################################


  function etouchTest() {
    $this->UnitTestCase('etouch Test');
  }


}

$test = new EtouchTest();
$test->run(new TextReporter());

?>
