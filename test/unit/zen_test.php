<?php

/*
 * Recognising Zen devices from their user agents
 *
 */

require_once 'test_helper.php';

class ZenTest extends TeraWurflTestCase {

  var $wurfl;


  function test_zen_z77_ver1() {
    foreach(array(
'Z77/MIDP2.0/CLDC1.1/Screen-176X220'
    ) as $ua) {
        $this->checkUA($ua, 'zen_z77_ver1');
      }
  }



  ############################################################


  function zenTest() {
    $this->UnitTestCase('zen Test');
  }


}

$test = new ZenTest();
$test->run(new TextReporter());

?>
