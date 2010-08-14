<?php

/*
 * Recognising Videocon devices from their user agents
 *
 */

require_once 'test_helper.php';

class VideoconTest extends TeraWurflTestCase {

  var $wurfl;


  function test_videocon_v1301_ver1() {
    foreach(array(
'V1301'
    ) as $ua) {
        $this->checkUA($ua, 'videocon_v1301_ver1');
      }
  }



  ############################################################


  function videoconTest() {
    $this->UnitTestCase('videocon Test');
  }


}

$test = new VideoconTest();
$test->run(new TextReporter());

?>
