<?php

/*
 * Recognising Uniscope devices from their user agents
 *
 */

require_once 'test_helper.php';

class UniscopeTest extends TeraWurflTestCase {

  var $wurfl;


  function test_uniscope_u2ver1() {
    foreach(array(
'UNISCOPE-U2/(2006.01.01)Ver1.0.1/WAP1.2'
    ) as $ua) {
        $this->checkUA($ua, 'uniscope_u2ver1');
      }
  }



  ############################################################


  function uniscopeTest() {
    $this->UnitTestCase('uniscope Test');
  }


}

$test = new UniscopeTest();
$test->run(new TextReporter());

?>
