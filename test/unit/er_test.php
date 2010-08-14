<?php

/*
 * Recognising Er devices from their user agents
 *
 */

require_once 'test_helper.php';

class ErTest extends TeraWurflTestCase {

  var $wurfl;


  function test_er_x960_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) acer_X960'
    ) as $ua) {
        $this->checkUA($ua, 'er_x960_ver1');
      }
  }



  ############################################################


  function erTest() {
    $this->UnitTestCase('er Test');
  }


}

$test = new ErTest();
$test->run(new TextReporter());

?>
