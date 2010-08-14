<?php

/*
 * Recognising Gigabyte devices from their user agents
 *
 */

require_once 'test_helper.php';

class GigabyteTest extends TeraWurflTestCase {

  var $wurfl;


  function test_gigabyte_gsmart_ver1() {
    foreach(array(
'GIGABYTE-g-Smart Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; GIGABYTE-g-Smart)'
    ) as $ua) {
        $this->checkUA($ua, 'gigabyte_gsmart_ver1');
      }
  }



  ############################################################


  function gigabyteTest() {
    $this->UnitTestCase('gigabyte Test');
  }


}

$test = new GigabyteTest();
$test->run(new TextReporter());

?>
