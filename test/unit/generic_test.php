<?php

/*
 * Recognising Generic devices from their user agents
 *
 */

require_once 'test_helper.php';

class GenericTest extends TeraWurflTestCase {

  var $wurfl;


  function test_generic_maui_wap_browser_ver1() {
    foreach(array(
'MAUI',
'MAUI WAP Browser',
'MAUI WAP Browser MAUI WAP Browser',
'MAUI WAP Browser UP.Link/1.1',
'MAUI WAP Browser UP.Link/6.3.0.0.0',
'MAUI WAP Browser UP.Link/6.3.1.13.0',
'MAUI WAP Browser UP.Link/6.5.1.3.0',
'MAUI WAP Browser, MAUI WAP Browser',
'MAUI WAP Browser/',
'MAUI_WAP_Browser',
'MAUI_WAP_Browser UP.Link/1.1',
'MAUI_WAP_Browser UP.Link/6.3.0.0.0',
'MAUI_WAP_Browser UP.Link/6.3.1.16.0',
'MAUI_WAP_Browser UP.Link/6.5.0.0.0',
'MAUI_WAP_Browser, MAUI_WAP_Browser',
'MAUI_WAP_Browser/'
    ) as $ua) {
        $this->checkUA($ua, 'generic_maui_wap_browser_ver1');
      }
  }



  ############################################################


  function genericTest() {
    $this->UnitTestCase('generic Test');
  }


}

$test = new GenericTest();
$test->run(new TextReporter());

?>
