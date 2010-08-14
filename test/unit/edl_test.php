<?php

/*
 * Recognising Edl devices from their user agents
 *
 */

require_once 'test_helper.php';

class EdlTest extends TeraWurflTestCase {

  var $wurfl;


  function test_edl_c888_ver1() {
    foreach(array(
'EDL C888  Nucleus RTOS/V1.11.19 MTK6225/06B Release/06.20.2007 Browser/Teleca Profile/CLDC-1.0',
'EDL C888 Nucleus RTOS/V1.11.19 MTK6225/06B Release/06.20.2007 Browser/Teleca Profile/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'edl_c888_ver1');
      }
  }



  ############################################################


  function edlTest() {
    $this->UnitTestCase('edl Test');
  }


}

$test = new EdlTest();
$test->run(new TextReporter());

?>
