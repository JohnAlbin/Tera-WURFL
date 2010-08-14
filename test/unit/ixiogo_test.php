<?php

/*
 * Recognising Ixiogo devices from their user agents
 *
 */

require_once 'test_helper.php';

class IxiogoTest extends TeraWurflTestCase {

  var $wurfl;


  function test_ixiogo_ct25_ver1() {
    foreach(array(
'IXI-CT-25/v2.0/Mozilla/4.0 (compatible; 240x320) IXI/Q05A2.4'
    ) as $ua) {
        $this->checkUA($ua, 'ixiogo_ct25_ver1');
      }
  }



  ############################################################


  function ixiogoTest() {
    $this->UnitTestCase('ixiogo Test');
  }


}

$test = new IxiogoTest();
$test->run(new TextReporter());

?>
