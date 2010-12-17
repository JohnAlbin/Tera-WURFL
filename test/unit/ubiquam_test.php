<?php

/*
 * Recognising Ubiquam devices from their user agents
 *
 */

require_once 'test_helper.php';

class UbiquamTest extends TeraWurflTestCase {

  var $wurfl;


  function test_ubiquam_u800_ver1() {
    foreach(array(
'Ubiquam U-800 (BREW/3.1) UP.Browser/CLDC-1.0 MMP/2.0 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'ubiquam_u800_ver1');
      }
  }



  ############################################################


  function ubiquamTest() {
    $this->UnitTestCase('ubiquam Test');
  }


}

$test = new UbiquamTest();
$test->run(new TextReporter());

?>
