<?php

/*
 * Recognising Cect devices from their user agents
 *
 */

require_once 'test_helper.php';

class CectTest extends TeraWurflTestCase {

  var $wurfl;


  function test_cect_a1000_ver1() {
    foreach(array(
'CECT A1000',
'CECT A1000 CECT A1000'
    ) as $ua) {
        $this->checkUA($ua, 'cect_a1000_ver1');
      }
  }



  function test_cect_u600_ver1() {
    foreach(array(
'CECT U600/1.0 TELECA/W07.12 Release/03.26.2007 Browser/Teleca-1.2'
    ) as $ua) {
        $this->checkUA($ua, 'cect_u600_ver1');
      }
  }



  ############################################################


  function cectTest() {
    $this->UnitTestCase('cect Test');
  }


}

$test = new CectTest();
$test->run(new TextReporter());

?>
