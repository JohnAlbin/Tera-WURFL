<?php

/*
 * Recognising Myphone devices from their user agents
 *
 */

require_once 'test_helper.php';

class MyphoneTest extends TeraWurflTestCase {

  var $wurfl;


  function test_myphone_b23_ver1() {
    foreach(array(
'MyPhoneB23DuoAM/MTK Release/V17 May-07-2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'myphone_b23_ver1');
      }
  }



  function test_myphone_q21_ver1() {
    foreach(array(
'MyPhoneQ21Duo/MTK Release/V17 NOV-4-2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MyPhoneQ21Duo/MTK Release/V7 Apl-01-2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'myphone_q21_ver1');
      }
  }



  function test_myphone_q22_duo_ver1() {
    foreach(array(
'MyPhoneQ22DUO/MTK Release/V4BSP18 NOV-9-2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'myphone_q22_duo_ver1');
      }
  }



  function test_myphone_q22_ver1() {
    foreach(array(
'MyPhoneQ22Duo/MTK Release/V1 Nov-20-2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'myphone_q22_ver1');
      }
  }



  ############################################################


  function myphoneTest() {
    $this->UnitTestCase('myphone Test');
  }


}

$test = new MyphoneTest();
$test->run(new TextReporter());

?>
