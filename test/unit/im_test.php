<?php

/*
 * Recognising Im devices from their user agents
 *
 */

require_once 'test_helper.php';

class ImTest extends TeraWurflTestCase {

  var $wurfl;


  function test_im_t880_ver1() {
    foreach(array(
'IM-T880'
    ) as $ua) {
        $this->checkUA($ua, 'im_t880_ver1');
      }
  }



  ############################################################


  function imTest() {
    $this->UnitTestCase('im Test');
  }


}

$test = new ImTest();
$test->run(new TextReporter());

?>
