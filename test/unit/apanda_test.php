<?php

/*
 * Recognising Apanda devices from their user agents
 *
 */

require_once 'test_helper.php';

class ApandaTest extends TeraWurflTestCase {

  var $wurfl;


  function test_apanda_a60_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; zh-cn; apanda-A60 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'apanda_a60_ver1');
      }
  }



  ############################################################


  function apandaTest() {
    $this->UnitTestCase('apanda Test');
  }


}

$test = new ApandaTest();
$test->run(new TextReporter());

?>
