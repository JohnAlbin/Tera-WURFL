<?php

/*
 * Recognising Era devices from their user agents
 *
 */

require_once 'test_helper.php';

class EraTest extends TeraWurflTestCase {

  var $wurfl;


  function test_era_g1_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; Era G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; pl-PL; Era G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; pl-pl; Era G1 Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'era_g1_ver1');
      }
  }



  function test_era_g2_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; pl-PL; ERA G2 Touch)'
    ) as $ua) {
        $this->checkUA($ua, 'era_g2_ver1');
      }
  }



  ############################################################


  function eraTest() {
    $this->UnitTestCase('era Test');
  }


}

$test = new EraTest();
$test->run(new TextReporter());

?>
