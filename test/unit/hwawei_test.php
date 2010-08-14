<?php

/*
 * Recognising Hwawei devices from their user agents
 *
 */

require_once 'test_helper.php';

class HwaweiTest extends TeraWurflTestCase {

  var $wurfl;


  function test_hwawei_u8220_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; U8220 Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-tw; U8220 Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'hwawei_u8220_ver1');
      }
  }



  ############################################################


  function hwaweiTest() {
    $this->UnitTestCase('hwawei Test');
  }


}

$test = new HwaweiTest();
$test->run(new TextReporter());

?>
