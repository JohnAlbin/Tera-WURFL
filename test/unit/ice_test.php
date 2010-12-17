<?php

/*
 * Recognising Ice devices from their user agents
 *
 */

require_once 'test_helper.php';

class IceTest extends TeraWurflTestCase {

  var $wurfl;


  function test_ice_ver1() {
    foreach(array(
'Ice'
    ) as $ua) {
        $this->checkUA($ua, 'ice_ver1');
      }
  }



  ############################################################


  function iceTest() {
    $this->UnitTestCase('ice Test');
  }


}

$test = new IceTest();
$test->run(new TextReporter());

?>
