<?php

/*
 * Recognising Mitsu devices from their user agents
 *
 */

require_once 'test_helper.php';

class MitsuTest extends TeraWurflTestCase {

  var $wurfl;


  function test_mitsu_mt330_ver1() {
    foreach(array(
'Mitsu/1.2.C (MT330) MMP/1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mitsu_mt330_ver1');
      }
  }



  ############################################################


  function mitsuTest() {
    $this->UnitTestCase('mitsu Test');
  }


}

$test = new MitsuTest();
$test->run(new TextReporter());

?>
