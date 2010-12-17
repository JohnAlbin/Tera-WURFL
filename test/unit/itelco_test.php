<?php

/*
 * Recognising Itelco devices from their user agents
 *
 */

require_once 'test_helper.php';

class ItelcoTest extends TeraWurflTestCase {

  var $wurfl;


  function test_itelco_it2500_ver1() {
    foreach(array(
'ITELCO-IT2500/R0.1 NF-Browser/3.3'
    ) as $ua) {
        $this->checkUA($ua, 'itelco_it2500_ver1');
      }
  }



  ############################################################


  function itelcoTest() {
    $this->UnitTestCase('itelco Test');
  }


}

$test = new ItelcoTest();
$test->run(new TextReporter());

?>
