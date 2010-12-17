<?php

/*
 * Recognising Venera devices from their user agents
 *
 */

require_once 'test_helper.php';

class VeneraTest extends TeraWurflTestCase {

  var $wurfl;


  function test_venera_v1_ver1() {
    foreach(array(
'Venera-V1/1.0',
'Venera-V1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/QO5A'
    ) as $ua) {
        $this->checkUA($ua, 'venera_v1_ver1');
      }
  }



  ############################################################


  function veneraTest() {
    $this->UnitTestCase('venera Test');
  }


}

$test = new VeneraTest();
$test->run(new TextReporter());

?>
