<?php

/*
 * Recognising Docomo devices from their user agents
 *
 */

require_once 'test_helper.php';

class DocomoTest extends UnitTestCase {

  var $wurfl;


  function test_docomo_f06b_ver1() {
    foreach(array(
'DoCoMo/2.0 F06B(c500;TB;W24H16)',
    ) as $ua) {
        $this->checkUA($ua, 'docomo_f06b_ver1');
      }
  }


  function test_docomo_p04b_ver1() {
    foreach(array(
'DoCoMo/2.0 P04B(c500;TB;W24H16)',
    ) as $ua) {
        $this->checkUA($ua, 'docomo_p04b_ver1');
      }
  }


  function test_docomo_d705i_ver1() {
    foreach(array(
'DoCoMo/2.0 D705i(c100;TB;W30H20)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_d705i_ver1');
      }
  }



  function test_docomo_d904i_ver1() {
    foreach(array(
'DoCoMo/2.0 D904i(c100;TB;W24H12)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_d904i_ver1');
      }
  }



  function test_docomo_f902is_ver1() {
    foreach(array(
'DoCoMo/2.0 F902iS(c100;TB;W23H12)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_f902is_ver1');
      }
  }



  function test_docomo_f904i_ver1() {
    foreach(array(
'DoCoMo/2.0 F904i(c100;TB;W24H17)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_f904i_ver1');
      }
  }



  function test_docomo_f_01a_ver1() {
    foreach(array(
'DoCoMo/2.0 F01A(c100;TB;W24H17)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_f_01a_ver1');
      }
  }



  function test_docomo_f_01b_ver1() {
    foreach(array(
'DoCoMo/2.0 F01B(c500;TB;W24H16)',
'DoCoMo/2.0 F01B(c500;TB;W24H20)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_f_01b_ver1');
      }
  }



  function test_docomo_f_02b_ver1() {
    foreach(array(
'DoCoMo/2.0 F02B(c500;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_f_02b_ver1');
      }
  }



  function test_docomo_f_04a_ver1() {
    foreach(array(
'DoCoMo/2.0 F04A(c100;TB;W24H17)',
'DoCoMo/2.0 F04A(c100;TB;W30H22)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_f_04a_ver1');
      }
  }



  function test_docomo_f_09a_ver1() {
    foreach(array(
'DoCoMo/2.0 F09A3(c500;TB;W20H13)',
'DoCoMo/2.0 F09A3(c500;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_f_09a_ver1');
      }
  }



  function test_docomo_ht03a_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Docomo HT-03A)',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-JP; Docomo HT-03A)',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-jp; Docomo HT-03A Build/DRD08) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_ht03a_ver1');
      }
  }



  function test_docomo_n703id_ver1() {
    foreach(array(
'DoCoMo/2.0 N703iD(c100;TB;W24H12)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n703id_ver1');
      }
  }



  function test_docomo_n705i_ver1() {
    foreach(array(
'DoCoMo/2.0 N705imyu(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n705i_ver1');
      }
  }



  function test_docomo_n901ic_ver1() {
    foreach(array(
'DoCoMo/2.0 N901iC(c100;TB;W24H12)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n901ic_ver1');
      }
  }



  function test_docomo_n905i_ver1() {
    foreach(array(
'DoCoMo/2.0 N905i(c100;TB;W24H16)',
'DoCoMo/2.0 N905i(c100;TB;W30H20)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n905i_ver1');
      }
  }



  function test_docomo_n_02a_ver1() {
    foreach(array(
'DoCoMo/2.0 N02A(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n_02a_ver1');
      }
  }



  function test_docomo_n_03a_ver1() {
    foreach(array(
'DoCoMo/2.0 N03A(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n_03a_ver1');
      }
  }



  function test_docomo_n_03b_ver1() {
    foreach(array(
'DoCoMo/2.0 N03B(c500;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n_03b_ver1');
      }
  }



  function test_docomo_n_04a_ver1() {
    foreach(array(
'DoCoMo/2.0 N04A(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n_04a_ver1');
      }
  }



  function test_docomo_n_06a_ver1() {
    foreach(array(
'DoCoMo/2.0 N06A3(c500;TB;W24H16)',
'DoCoMo/2.0 N06A3(c500;TB;W30H15)',
'DoCoMo/2.0 N06A3(c500;TB;W30H20)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n_06a_ver1');
      }
  }



  function test_docomo_n_09a_ver1() {
    foreach(array(
'DoCoMo/2.0 N09A3(c500;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_n_09a_ver1');
      }
  }



  function test_docomo_p903i_ver1() {
    foreach(array(
'DoCoMo/2.0 P903i(c100;TB;W24H12)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_p903i_ver1');
      }
  }



  function test_docomo_p905i_ver1() {
    foreach(array(
'DoCoMo/2.0 P905i(c100;TB;W20H13)',
'DoCoMo/2.0 P905i(c100;TB;W24H15)',
'DoCoMo/2.0 P905i(c100;TB;W30H19)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_p905i_ver1');
      }
  }



  function test_docomo_p906i_ver1() {
    foreach(array(
'DoCoMo/2.0 P906i(c100;TB;W30H19)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_p906i_ver1');
      }
  }



  function test_docomo_p_01a_ver1() {
    foreach(array(
'DoCoMo/2.0 P01A(c100;TB;W24H15)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_p_01a_ver1');
      }
  }



  function test_docomo_p_01b_ver1() {
    foreach(array(
'DoCoMo/2.0 P01B(c500;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_p_01b_ver1');
      }
  }



  function test_docomo_p_02a_ver1() {
    foreach(array(
'DoCoMo/2.0 P02A(c100;TB;W30H19)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_p_02a_ver1');
      }
  }



  function test_docomo_p_08a_ver1() {
    foreach(array(
'DoCoMo/2.0 P08A3(c500;TB;W24H15)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_p_08a_ver1');
      }
  }



  function test_docomo_sh903i_ver1() {
    foreach(array(
'DoCoMo/2.0 SH903i(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh903i_ver1');
      }
  }



  function test_docomo_sh905i_ver1() {
    foreach(array(
'DoCoMo/2.0 SH905i(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh905i_ver1');
      }
  }



  function test_docomo_sh905itv_ver1() {
    foreach(array(
'DoCoMo/2.0 SH905iTV(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh905itv_ver1');
      }
  }



  function test_docomo_sh906i_ver1() {
    foreach(array(
'DoCoMo/2.0 SH906i(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh906i_ver1');
      }
  }



  function test_docomo_sh_01a_ver1() {
    foreach(array(
'DoCoMo/2.0 SH01A(c100;TB;W24H16)',
'DoCoMo/2.0 SH01A(c100;TB;W30H20)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_01a_ver1');
      }
  }



  function test_docomo_sh_01b_ver1() {
    foreach(array(
'DoCoMo/2.0 SH01B(c500;TB;W24H16)',
'DoCoMo/2.0 SH01B(c500;TB;W30H20)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_01b_ver1');
      }
  }



  function test_docomo_sh_02a_ver1() {
    foreach(array(
'DoCoMo/2.0 SH02A(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_02a_ver1');
      }
  }



  function test_docomo_sh_03a_ver1() {
    foreach(array(
'DoCoMo/2.0 SH03A(c100;TB;W24H16)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_03a_ver1');
      }
  }



  function test_docomo_sh_04a_ver1() {
    foreach(array(
'DoCoMo/2.0 SH04A(c100;TB;W24H12)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_04a_ver1');
      }
  }



  function test_docomo_sh_05a_ver1() {
    foreach(array(
'DoCoMo/2.0 SH05A3(c500;TB;W24H14)',
'DoCoMo/2.0 SH05A3(c500;TB;W30H18)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_05a_ver1');
      }
  }



  function test_docomo_sh_06a_ver1() {
    foreach(array(
'DoCoMo/2.0 SH06A3(c500;TB;W24H14)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_06a_ver1');
      }
  }



  function test_docomo_sh_07a_ver1() {
    foreach(array(
'DoCoMo/2.0 SH07A3(c500;TB;W24H14)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_07a_ver1');
      }
  }



  function test_docomo_sh_08a_ver1() {
    foreach(array(
'DoCoMo/2.0 SH08A(c500;TB;W24H14)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_sh_08a_ver1');
      }
  }



  function test_docomo_so905ics_ver1() {
    foreach(array(
'DoCoMo/2.0 SO905iCS(c100;TB;W24H18)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_so905ics_ver1');
      }
  }



  function test_docomo_so906i_ver1() {
    foreach(array(
'DoCoMo/2.0 SO906i(c100;TB;W24H18)'
    ) as $ua) {
        $this->checkUA($ua, 'docomo_so906i_ver1');
      }
  }



  ############################################################

  function checkUA($agent, $expected) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $actual =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($expected != $actual)
      echo "Expected: $expected, got: $actual\nUA: $agent\n";
    $this->assertEqual($expected, $actual);
  }

  function docomoTest() {
    $this->UnitTestCase('docomo Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new DocomoTest();
$test->run(new TextReporter());

?>
