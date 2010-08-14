<?php

/*
 * Recognising Imate devices from their user agents
 *
 */

require_once 'test_helper.php';

class ImateTest extends TeraWurflTestCase {

  var $wurfl;


  function test_imate_8150_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) i-mate 6150/ 480x640',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) i-mate 8150/ 480x640'
    ) as $ua) {
        $this->checkUA($ua, 'imate_8150_ver1');
      }
  }



  function test_imate_9502_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) i-mate 9502; 480x640'
    ) as $ua) {
        $this->checkUA($ua, 'imate_9502_ver1');
      }
  }



  function test_imate_jama_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC i-mate JAMA; 240x320; PPC)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC i-mate JAMA; 240x320; PPC)'
    ) as $ua) {
        $this->checkUA($ua, 'imate_jama_ver1');
      }
  }



  function test_imate_jaq3_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC i-mate JAQ3; 240x320; PPC)'
    ) as $ua) {
        $this->checkUA($ua, 'imate_jaq3_ver1');
      }
  }



  function test_imate_jaq_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC i-mate JAQ; 240x320; PPC)',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; i-mate JAQ PPC; 240x320; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'imate_jaq_ver1');
      }
  }



  function test_imate_jasjam_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; i-mate JASJAM PPC; 240x320; PPC; 240x320)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) i-mate JASJAM'
    ) as $ua) {
        $this->checkUA($ua, 'imate_jasjam_ver1');
      }
  }



  function test_imate_kjam_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; HTC_P3650)/UCWEB7.0.0.41/31/351',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; i-mate K-JAM PPC; 240x320; PPC; 240x320)',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; i-mate K-JAM PPC; 240x320; PPC; 240x320) UP.Link/6.3.1.12.0',
    ) as $ua) {
        $this->checkUA($ua, 'imate_kjam_ver1');
      }
  }



  function test_imate_pdal_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC i-mate PDAL; 240x320; PPC)'
    ) as $ua) {
        $this->checkUA($ua, 'imate_pdal_ver1');
      }
  }



  ############################################################


  function imateTest() {
    $this->UnitTestCase('imate Test');
  }


}

$test = new ImateTest();
$test->run(new TextReporter());

?>
