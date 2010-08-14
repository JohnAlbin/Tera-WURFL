<?php

/*
 * Recognising Nintendo devices from their user agents
 *
 */

require_once 'test_helper.php';

class NintendoTest extends TeraWurflTestCase {

  var $wurfl;


  function test_nintendo_dsi_ver1() {
    foreach(array(
'Opera/9.50 (Nintendo DSi; Opera/483; U; en-US)',
'Opera/9.50 (Nintendo DSi; Opera/507; U; de)',
'Opera/9.50 (Nintendo DSi; Opera/507; U; en-GB)',
'Opera/9.50 (Nintendo DSi; Opera/507; U; en-US)',
'Opera/9.50 (Nintendo DSi; Opera/507; U; es-LA)',
'Opera/9.50 (Nintendo DSi; Opera/507; U; fr)',
'Opera/9.50 (Nintendo DSi; Opera/507; U; it)'
    ) as $ua) {
        $this->checkUA($ua, 'nintendo_dsi_ver1');
      }
  }



  function test_nintendo_wii_browser() {
    foreach(array(
'Opera/9.30 (Nintendo Wii; U; ; 2047-7; en)',
'Opera/9.30 (Nintendo Wii; U; ; 3642; en)'
    ) as $ua) {
        $this->checkUA($ua, 'nintendo_wii_browser');
      }
  }



  ############################################################


  function nintendoTest() {
    $this->UnitTestCase('nintendo Test');
  }


}

$test = new NintendoTest();
$test->run(new TextReporter());

?>
