<?php

/*
 * Recognising Kisen devices from their user agents
 *
 */

require_once 'test_helper.php';

class KisenTest extends TeraWurflTestCase {

  var $wurfl;


  function test_kisen_k3000_ver1() {
    foreach(array(
'K3000_WAP2_0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'kisen_k3000_ver1');
      }
  }



  ############################################################


  function kisenTest() {
    $this->UnitTestCase('kisen Test');
  }


}

$test = new KisenTest();
$test->run(new TextReporter());

?>
