<?php

/*
 * Recognising CincinnatiBell devices from their user agents
 *
 */

require_once 'test_helper.php';

class CincinnatiBellTest extends TeraWurflTestCase {

  var $wurfl;


  function test_cincinnatibell_blaze_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; CSL_Spice_MI300)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; CBW Blaze Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; CBW Blaze)',
    ) as $ua) {
        $this->checkUA($ua, 'cincinnatibell_blaze_ver1');
      }
  }



  ############################################################


  function cincinnatibellTest() {
    $this->UnitTestCase('cincinnatibell Test');
  }


}

$test = new CincinnatiBellTest();
$test->run(new TextReporter());

?>
