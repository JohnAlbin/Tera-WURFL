<?php

/*
 * Recognising Cking devices from their user agents
 *
 */

require_once 'test_helper.php';

class CkingTest extends TeraWurflTestCase {

  var $wurfl;


  function test_cking_k1000_ver1() {
    foreach(array(
'K1000_WAP2_0'
    ) as $ua) {
        $this->checkUA($ua, 'cking_k1000_ver1');
      }
  }



  ############################################################


  function ckingTest() {
    $this->UnitTestCase('cking Test');
  }


}

$test = new CkingTest();
$test->run(new TextReporter());

?>
