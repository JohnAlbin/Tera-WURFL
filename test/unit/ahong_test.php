<?php

/*
 * Recognising Ahong devices from their user agents
 *
 */

require_once 'test_helper.php';

class AhongTest extends TeraWurflTestCase {

  var $wurfl;


  function test_ahong_d23_ver1() {
    foreach(array(
'AHONG_D23'
    ) as $ua) {
        $this->checkUA($ua, 'ahong_d23_ver1');
      }
  }



  ############################################################


  function ahongTest() {
    $this->UnitTestCase('ahong Test');
  }


}

$test = new AhongTest();
$test->run(new TextReporter());

?>
