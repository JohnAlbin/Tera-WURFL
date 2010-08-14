<?php

/*
 * Recognising Archos devices from their user agents
 *
 */

require_once 'test_helper.php';

class ArchosTest extends TeraWurflTestCase {

  var $wurfl;

  function test_archos_a70hb_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.0.15; en-US; A70HB)',
'Mozilla/5.0 (Linux; U; Android 1.0.15; fr-fr; A70HB Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
    ) as $ua) {
        $this->checkUA($ua, 'archos_a70hb_ver1');
      }
  }


  ############################################################


  function archosTest() {
    $this->UnitTestCase('archos Test');
  }


}

$test = new ArchosTest();
$test->run(new TextReporter());

?>
