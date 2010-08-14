<?php

/*
 * Recognising Momodesign devices from their user agents
 *
 */

require_once 'test_helper.php';

class MomodesignTest extends TeraWurflTestCase {

  var $wurfl;


  function test_momodesign_md2_ver1() {
    foreach(array(
'MD-MD2/1.0 ACS-NF/3.2 Qtv/4.3'
    ) as $ua) {
        $this->checkUA($ua, 'momodesign_md2_ver1');
      }
  }



  ############################################################


  function momodesignTest() {
    $this->UnitTestCase('momodesign Test');
  }


}

$test = new MomodesignTest();
$test->run(new TextReporter());

?>
