<?php

/*
 * Recognising Malata devices from their user agents
 *
 */

require_once 'test_helper.php';

class MalataTest extends TeraWurflTestCase {

  var $wurfl;


  function test_malata_mt126_ver1() {
    foreach(array(
'malata_MT126'
    ) as $ua) {
        $this->checkUA($ua, 'malata_mt126_ver1');
      }
  }



  ############################################################


  function malataTest() {
    $this->UnitTestCase('malata Test');
  }


}

$test = new MalataTest();
$test->run(new TextReporter());

?>
