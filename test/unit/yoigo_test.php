<?php

/*
 * Recognising Yoigo devices from their user agents
 *
 */

require_once 'test_helper.php';

class YoigoTest extends TeraWurflTestCase {

  var $wurfl;


  function test_yoigo_f188_ver1() {
    foreach(array(
'Yoigo F188/1.0 ACS-NF/3.3 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'yoigo_f188_ver1');
      }
  }



  ############################################################


  function yoigoTest() {
    $this->UnitTestCase('yoigo Test');
  }


}

$test = new YoigoTest();
$test->run(new TextReporter());

?>
