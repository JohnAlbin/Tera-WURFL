<?php

/*
 * Recognising Inno devices from their user agents
 *
 */

require_once 'test_helper.php';

class InnoTest extends TeraWurflTestCase {

  var $wurfl;


  function test_inno55_ver1() {
    foreach(array(
'INNO55'
    ) as $ua) {
        $this->checkUA($ua, 'inno55_ver1');
      }
  }



  ############################################################


  function innoTest() {
    $this->UnitTestCase('inno Test');
  }


}

$test = new InnoTest();
$test->run(new TextReporter());

?>
