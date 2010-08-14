<?php

/*
 * Recognising Techfaith devices from their user agents
 *
 */

require_once 'test_helper.php';

class TechfaithTest extends TeraWurflTestCase {

  var $wurfl;


  function test_techfaith_moffett_ver1() {
    foreach(array(
'Techfaith Moffett/2.0 WAP2.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)'
    ) as $ua) {
        $this->checkUA($ua, 'techfaith_moffett_ver1');
      }
  }



  ############################################################


  function techfaithTest() {
    $this->UnitTestCase('techfaith Test');
  }


}

$test = new TechfaithTest();
$test->run(new TextReporter());

?>
