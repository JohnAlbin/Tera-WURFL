<?php

/*
 * Recognising Airness devices from their user agents
 *
 */

require_once 'test_helper.php';

class AirnessTest extends TeraWurflTestCase {

  var $wurfl;


  function test_airness_mk99_ver1() {
    foreach(array(
'MK99'
    ) as $ua) {
        $this->checkUA($ua, 'airness_mk99_ver1');
      }
  }



  ############################################################


  function airnessTest() {
    $this->UnitTestCase('airness Test');
  }


}

$test = new AirnessTest();
$test->run(new TextReporter());

?>
