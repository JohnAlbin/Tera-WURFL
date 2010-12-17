<?php

/*
 * Recognising Taiwanmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class TaiwanmobileTest extends TeraWurflTestCase {

  var $wurfl;


  function test_taiwanmobile_t1_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; zh-TW; TaiwanMobileT1)'
    ) as $ua) {
        $this->checkUA($ua, 'taiwanmobile_t1_ver1');
      }
  }



  ############################################################


  function taiwanmobileTest() {
    $this->UnitTestCase('taiwanmobile Test');
  }


}

$test = new TaiwanmobileTest();
$test->run(new TextReporter());

?>
