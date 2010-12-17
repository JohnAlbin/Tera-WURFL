<?php

/*
 * Recognising Alltel devices from their user agents
 *
 */

require_once 'test_helper.php';

class AlltelTest extends TeraWurflTestCase {

  var $wurfl;


  function test_alltel_ppc6800_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Alltel HTC PPC6800'
    ) as $ua) {
        $this->checkUA($ua, 'alltel_ppc6800_ver1');
      }
  }



  ############################################################


  function alltelTest() {
    $this->UnitTestCase('alltel Test');
  }


}

$test = new AlltelTest();
$test->run(new TextReporter());

?>
