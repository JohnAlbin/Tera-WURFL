<?php

/*
 * Recognising Qtek devices from their user agents
 *
 */

require_once 'test_helper.php';

class QtekTest extends TeraWurflTestCase {

  var $wurfl;


  function test_qtek_9100_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; QtekA9100; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'qtek_9100_ver1');
      }
  }



  ############################################################


  function qtekTest() {
    $this->UnitTestCase('qtek Test');
  }


}

$test = new QtekTest();
$test->run(new TextReporter());

?>
