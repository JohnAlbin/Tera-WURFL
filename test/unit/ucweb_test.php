<?php

/*
 * Recognising Ucweb devices from their user agents
 *
 */

require_once 'test_helper.php';

class UcwebTest extends TeraWurflTestCase {

  var $wurfl;


  function test_ucweb_51_ver1() {
    foreach(array(
'UCWEB5.1'
    ) as $ua) {
        $this->checkUA($ua, 'ucweb_51_ver1');
      }
  }



  ############################################################


  function ucwebTest() {
    $this->UnitTestCase('ucweb Test');
  }


}

$test = new UcwebTest();
$test->run(new TextReporter());

?>
