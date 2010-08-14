<?php

/*
 * Recognising Verizon devices from their user agents
 *
 */

require_once 'test_helper.php';

class VerizonTest extends TeraWurflTestCase {

  var $wurfl;


  function test_verizon_droid_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Droid Build/FRFxx) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Droid Build/FRF84B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Droid Build/FRF83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Droid Build/FRF57) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-US; Droid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; Droid Build/ESE81) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; Droid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Droid Build/ESE81) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Droid Build/ERE25) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; Droid)',
    ) as $ua) {
        $this->checkUA($ua, 'verizon_droid_ver1');
      }
  }

  function test_verizon_touch_pro2_xv6875_ver1() {
    foreach(array(
'XV6875 Opera/9.50 (Windows NT  5.1; U; en)'
    ) as $ua) {
        $this->checkUA($ua, 'verizon_touch_pro2_xv6875_ver1');
      }
  }



  function test_verizon_xv6850_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 480x640; XV6850.1; Window Mobile 6.1 Professional;',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 480x640; XV6850; Window Mobile 6.1 Professional;',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 480x640; XV6950; Window Mobile 6.1 Professional;'
    ) as $ua) {
        $this->checkUA($ua, 'verizon_xv6850_ver1');
      }
  }



  function test_verizon_xv6900_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 320x320; XV6900; Window Mobile 6.1 Professional;',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) 320x320; XV6900; Window Mobile 6.0 Professional;'
    ) as $ua) {
        $this->checkUA($ua, 'verizon_xv6900_ver1');
      }
  }



  ############################################################


  function verizonTest() {
    $this->UnitTestCase('verizon Test');
  }


}

$test = new VerizonTest();
$test->run(new TextReporter());

?>
