<?php

/*
 * Recognising Mov devices from their user agents
 *
 */

require_once 'test_helper.php';

class MovTest extends TeraWurflTestCase {

  var $wurfl;


  function test_mov_v195_ver1() {
    foreach(array(
'MOT-V195/0A.63.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V195/0A.63.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V195/0A.64.0DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mov_v195_ver1');
      }
  }



  ############################################################


  function movTest() {
    $this->UnitTestCase('mov Test');
  }


}

$test = new MovTest();
$test->run(new TextReporter());

?>
