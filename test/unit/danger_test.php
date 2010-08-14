<?php

/*
 * Recognising Danger devices from their user agents
 *
 */

require_once 'test_helper.php';

class DangerTest extends TeraWurflTestCase {

  var $wurfl;


  function test_danger_hiptop_ver4() {
    foreach(array(
'Mozilla/5.0 (Danger hiptop 4.0; U; rv:1.7.12) Gecko/20050920',
'Mozilla/5.0 (Danger hiptop 4.6; U; rv:1.7.12) Gecko/20050920',
'Mozilla/5.0 (Danger hiptop 4.7; U; rv:1.7.12) Gecko/20050920',
'Mozilla/5.0 (Danger hiptop 5.0; U; rv:1.7.12) Gecko/20050920'
    ) as $ua) {
        $this->checkUA($ua, 'danger_hiptop_ver4');
      }
  }



  ############################################################


  function dangerTest() {
    $this->UnitTestCase('danger Test');
  }


}

$test = new DangerTest();
$test->run(new TextReporter());

?>
