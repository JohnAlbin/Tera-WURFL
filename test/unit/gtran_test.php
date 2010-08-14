<?php

/*
 * Recognising Gtran devices from their user agents
 *
 */

require_once 'test_helper.php';

class GtranTest extends TeraWurflTestCase {

  var $wurfl;


  function test_gtran_n120_ver1() {
    foreach(array(
'Gtran_N120'
    ) as $ua) {
        $this->checkUA($ua, 'gtran_n120_ver1');
      }
  }



  ############################################################


  function gtranTest() {
    $this->UnitTestCase('gtran Test');
  }


}

$test = new GtranTest();
$test->run(new TextReporter());

?>
