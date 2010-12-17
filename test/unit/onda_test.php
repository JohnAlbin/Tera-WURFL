<?php

/*
 * Recognising Onda devices from their user agents
 *
 */

require_once 'test_helper.php';

class OndaTest extends TeraWurflTestCase {

  var $wurfl;


  function test_onda_n7010_ver1() {
    foreach(array(
'N7010 Onda WAP2.0/MIDP2.0/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'onda_n7010_ver1');
      }
  }



  ############################################################


  function ondaTest() {
    $this->UnitTestCase('onda Test');
  }


}

$test = new OndaTest();
$test->run(new TextReporter());

?>
