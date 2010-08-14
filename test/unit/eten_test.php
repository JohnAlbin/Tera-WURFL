<?php

/*
 * Recognising Eten devices from their user agents
 *
 */

require_once 'test_helper.php';

class EtenTest extends TeraWurflTestCase {

  var $wurfl;


  function test_eten_x500_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC)',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC) UP.Link/6.5.0.0.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC)'
    ) as $ua) {
        $this->checkUA($ua, 'eten_x500_ver1');
      }
  }



  ############################################################


  function etenTest() {
    $this->UnitTestCase('eten Test');
  }


}

$test = new EtenTest();
$test->run(new TextReporter());

?>
