<?php

/*
 * Recognising Tiphone devices from their user agents
 *
 */

require_once 'test_helper.php';

class TiphoneTest extends TeraWurflTestCase {

  var $wurfl;


  function test_tiphone_e88_ver1() {
    foreach(array(
'tiphoneE88/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tiphone_e88_ver1');
      }
  }



  function test_tiphone_t30_ver1() {
    foreach(array(
'TiPhone T30'
    ) as $ua) {
        $this->checkUA($ua, 'tiphone_t30_ver1');
      }
  }



  function test_tiphone_t67_ver1() {
    foreach(array(
'Tiphone T67/1.0 Browser/wap2.0 Sync/SyncClient1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tiphone_t67_ver1');
      }
  }



  function test_tiphone_t78_ver1() {
    foreach(array(
'Tiphone T78/1.0 Browser/wap2.0 Sync/SyncClient1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tiphone_t78_ver1');
      }
  }



  ############################################################


  function tiphoneTest() {
    $this->UnitTestCase('tiphone Test');
  }


}

$test = new TiphoneTest();
$test->run(new TextReporter());

?>
