<?php

/*
 * Recognising Chunghwa devices from their user agents
 *
 */

require_once 'test_helper.php';

class ChunghwaTest extends TeraWurflTestCase {

  var $wurfl;


  function test_chunghwa_cht8000_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; zh-TW; CHT8000)'
    ) as $ua) {
        $this->checkUA($ua, 'chunghwa_cht8000_ver1');
      }
  }



  ############################################################


  function chunghwaTest() {
    $this->UnitTestCase('chunghwa Test');
  }


}

$test = new ChunghwaTest();
$test->run(new TextReporter());

?>
