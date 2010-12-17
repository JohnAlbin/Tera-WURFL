<?php

/*
 * Recognising Benqsie devices from their user agents
 *
 */

require_once 'test_helper.php';

class BenqsieTest extends TeraWurflTestCase {

  var $wurfl;


  function test_benqsie_ef61_ver1() {
    foreach(array(
'BenQ-EF61/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'benqsie_ef61_ver1');
      }
  }



  ############################################################


  function benqsieTest() {
    $this->UnitTestCase('benqsie Test');
  }


}

$test = new BenqsieTest();
$test->run(new TextReporter());

?>
