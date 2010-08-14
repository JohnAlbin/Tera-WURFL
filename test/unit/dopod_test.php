<?php

/*
 * Recognising Dopod devices from their user agents
 *
 */

require_once 'test_helper.php';

class DopodTest extends TeraWurflTestCase {

  var $wurfl;


  function test_dopod_838pro_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Dopod838Pro'
    ) as $ua) {
        $this->checkUA($ua, 'dopod_838pro_ver1');
      }
  }



  function test_dopod_a3288_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; zh-cn; dopod A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'dopod_a3288_ver1');
      }
  }



  function test_dopod_c720w_ver1() {
    foreach(array(
'DopodC720W/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 320x240)'
    ) as $ua) {
        $this->checkUA($ua, 'dopod_c720w_ver1');
      }
  }



  function test_dopod_d600_ver1() {
    foreach(array(
'DopodD600/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC)'
    ) as $ua) {
        $this->checkUA($ua, 'dopod_d600_ver1');
      }
  }



  function test_dopod_d818c_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) DopodD818c'
    ) as $ua) {
        $this->checkUA($ua, 'dopod_d818c_ver1');
      }
  }



  ############################################################


  function dopodTest() {
    $this->UnitTestCase('dopod Test');
  }


}

$test = new DopodTest();
$test->run(new TextReporter());

?>
