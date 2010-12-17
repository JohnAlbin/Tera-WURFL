<?php

/*
 * Recognising Usha devices from their user agents
 *
 */

require_once 'test_helper.php';

class UshaTest extends TeraWurflTestCase {

  var $wurfl;


  function test_usha_lexus_848b_ver1() {
    foreach(array(
'USHA 848B'
    ) as $ua) {
        $this->checkUA($ua, 'usha_lexus_848b_ver1');
      }
  }



  function test_usha_lexus_888b_ver1() {
    foreach(array(
'USHA-LEXUS 888B/KAA363_0.93.822 Nucleus/1.0 MTK/6228 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0',
'USHA-LEXUS 888B/KAA363_0.93.822 Nucleus/1.0 MTK/6228 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0 USHA-LEXUS 888B/KAA363_0.93.822 Nucleus/1.0 MTK/6228 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'usha_lexus_888b_ver1');
      }
  }



  ############################################################


  function ushaTest() {
    $this->UnitTestCase('usha Test');
  }


}

$test = new UshaTest();
$test->run(new TextReporter());

?>
