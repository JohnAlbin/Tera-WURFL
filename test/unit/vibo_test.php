<?php

/*
 * Recognising Vibo devices from their user agents
 *
 */

require_once 'test_helper.php';

class ViboTest extends TeraWurflTestCase {

  var $wurfl;


  function test_vibo_a688_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; zh-TW; Vibo-A688)'
    ) as $ua) {
        $this->checkUA($ua, 'vibo_a688_ver1');
      }
  }



  ############################################################


  function viboTest() {
    $this->UnitTestCase('vibo Test');
  }


}

$test = new ViboTest();
$test->run(new TextReporter());

?>
