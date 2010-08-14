<?php

/*
 * Recognising Amoisonic devices from their user agents
 *
 */

require_once 'test_helper.php';

class AmoisonicTest extends TeraWurflTestCase {

  var $wurfl;


  function test_amoisonic_9201_ver1() {
    foreach(array(
'Amoi/9201/Plat-EMP/WAP2.0/MIDP2.0/CLDC1.0-V12.0'
    ) as $ua) {
        $this->checkUA($ua, 'amoisonic_9201_ver1');
      }
  }



  ############################################################


  function amoisonicTest() {
    $this->UnitTestCase('amoisonic Test');
  }


}

$test = new AmoisonicTest();
$test->run(new TextReporter());

?>
