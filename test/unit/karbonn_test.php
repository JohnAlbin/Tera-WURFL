<?php

/*
 * Recognising Karbonn devices from their user agents
 *
 */

require_once 'test_helper.php';

class KarbonnTest extends TeraWurflTestCase {

  var $wurfl;


  function test_karbonn_k444_ver1() {
    foreach(array(
'K444/1.0 MTK/MAUI.08A.W08.28.MP.V2 Release/7.30.2009 Browser/OBIGO-Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'karbonn_k444_ver1');
      }
  }



  function test_karbonn_k451_ver1() {
    foreach(array(
'K451/1.0 MTK/MAUI.08A.W08.28.MP.V2 Release/7.30.2009 Browser/OBIGO-Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'karbonn_k451_ver1');
      }
  }



  ############################################################


  function karbonnTest() {
    $this->UnitTestCase('karbonn Test');
  }


}

$test = new KarbonnTest();
$test->run(new TextReporter());

?>
