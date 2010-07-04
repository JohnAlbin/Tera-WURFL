<?php

/*
 * Recognising Sagem devices from their user agents
 *
 */

require_once 'test_helper.php';

class SagemTest extends UnitTestCase {

  var $wurfl;


  function test_sagem_bleu_453x_ver1() {
    foreach(array(
'Bleu 453x'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_bleu_453x_ver1');
      }
  }



  function test_sagem_my212x_ver1() {
    foreach(array(
'Sagem-my212X/Orange1.0 UP.Browser/5.0.5.6 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my212x_ver1');
      }
  }



  function test_sagem_my213x_ver1() {
    foreach(array(
'SAGEM-my213/1.0 UP.Browser/6.2.2.5.d.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my213x_ver1');
      }
  }



  function test_sagem_my214x_ver1() {
    foreach(array(
'SAGEM-my214X/1.0 UP.Browser/5.0.5.6 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my214x_ver1');
      }
  }



  function test_sagem_my300c_ver1() {
    foreach(array(
'Sagem-my300C/1.0 UP.Browser/6.2.3.3.g.2.108 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my300c_ver1');
      }
  }



  function test_sagem_my300x_ver1() {
    foreach(array(
'SAGEM-my300X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.g.2.106 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my300x_ver1');
      }
  }



  function test_sagem_my302x_ver1() {
    foreach(array(
'SAGEM-my302X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.g.2.106 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my302x_ver1');
      }
  }



  function test_sagem_my400x_ver1() {
    foreach(array(
'SAGEM-my400X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.g.2.107 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my400x_ver1');
      }
  }



  function test_sagem_my401c_ver1() {
    foreach(array(
'SAGEM-my401C/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.258 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my401c_ver1');
      }
  }



  function test_sagem_my401v_ver1() {
    foreach(array(
'SAGEM-my400V/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.150 (GUI)',
'SAGEM-my400V/2.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.159 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my401v_ver1');
      }
  }



  function test_sagem_my401x_ver1() {
    foreach(array(
'SAGEM-my401X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.g.2.107 (GUI) MMP/2.0',
'SAGEM-my401X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.g.2.108 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my401x_ver1');
      }
  }



  function test_sagem_my411c_ver1() {
    foreach(array(
'SAGEM-my411C/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.386 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my411c_ver1');
      }
  }



  function test_sagem_my411cv_ver1() {
    foreach(array(
'SAGEM-my411Cv/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.363 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my411cv_ver1');
      }
  }



  function test_sagem_my411v_ver1() {
    foreach(array(
'SAGEM-my411V/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.317 (GUI)',
'SAGEM-my411V/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.326 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my411v_ver1');
      }
  }



  function test_sagem_my411x_ver1() {
    foreach(array(
'Sagem-my411X/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.326 (GUI)',
'Sagem-my411X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.379 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my411x_ver1');
      }
  }



  function test_sagem_my419x_orange_ver1() {
    foreach(array(
'SAGEM-my419x-orange/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.165 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my419x_orange_ver1');
      }
  }



  function test_sagem_my501c_ver1() {
    foreach(array(
'SAGEM-my501C/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.160 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my501c_ver1');
      }
  }



  function test_sagem_my501x_ver1() {
    foreach(array(
'SAGEM-my501X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.160 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my501x_ver1');
      }
  }



  function test_sagem_my511x_ver1() {
    foreach(array(
'SAGEM-my511X-orange/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.393 (GUI)',
'Sagem-my511X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.363 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my511x_ver1');
      }
  }



  function test_sagem_my521x_ver1() {
    foreach(array(
'Sagem-my521X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.393 (GUI)',
'Sagem-my521X/1.0/ MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.414 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my521x_ver1');
      }
  }



  function test_sagem_my600v_ver1() {
    foreach(array(
'SAGEM-my600v/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my600v_ver1');
      }
  }



  function test_sagem_my600x_ver1() {
    foreach(array(
'SAGEM-my600x/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my600x_ver1');
      }
  }



  function test_sagem_my700x_ver1() {
    foreach(array(
'SAGEM-my700x/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.161 (GUI)',
'SAGEM-my700x/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.162 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my700x_ver1');
      }
  }



  function test_sagem_my721x_ver1() {
    foreach(array(
'Sagem-my721X/1.0/ETN_EF MIDP-2.0 Configuration/CLDC-1.L Browser/UP.Browser/7.2.7.1.352 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my721x_ver1');
      }
  }



  function test_sagem_my750_ver1() {
    foreach(array(
'SAGEM-my750X/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my750_ver1');
      }
  }



  function test_sagem_my810xorange_ver1() {
    foreach(array(
'SAGEM-my810x-orange/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAGEM-my810x/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my810xorange_ver1');
      }
  }



  function test_sagem_my850c_ver1() {
    foreach(array(
'SAGEM-my850C-Orange/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_my850c_ver1');
      }
  }



  function test_sagem_myc4_2_ver1() {
    foreach(array(
'SAGEM-myC4-2/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.5.100 (GUI) MMP/1.0 UP.Link/6.5.1.3.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myc4_2_ver1');
      }
  }



  function test_sagem_myc5_2_ver1() {
    foreach(array(
'SAGEM-myC5-2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.5 (GUI) MMP/1.0',
'SAGEM-myC5-2v/1.0 UP.Browser/6.2.3.3.g.2.106 (GUI) MMP/2.0',
'SAGEM-myC5-2v/1.0 UP.Browser/6.2.3.3.g.2.107 (GUI) MMP/2.0',
'SAGEM-myC5-2v/1.0 UP.Browser/6.2.3.3.g.2.107 (GUI) MMP/2.0 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myc5_2_ver1');
      }
  }



  function test_sagem_myc5_3_ver1() {
    foreach(array(
'SAGEM-myC5-3/1.0 UP.Browser/6.2.3.3.g.2.107 (GUI) MMP/2.0',
'SAGEM-myC5-3/1.0 UP.Browser/6.2.3.3.g.2.108 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myc5_3_ver1');
      }
  }



  function test_sagem_myc_3b_ver1() {
    foreach(array(
'SAGEM-myC-3b/1.0 UP.Browser/6.1.0.6.1.c.4 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myc_3b_ver1');
      }
  }



  function test_sagem_mymobiletv_ver1() {
    foreach(array(
'SAGEM-MyMobileTV/2.0 Browser/UP.Browser/7.1.0.f.1.160 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_mymobiletv_ver1');
      }
  }



  function test_sagem_myv_55_ver1() {
    foreach(array(
'SAGEM-myV-55/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.3 (GUI) MMP/1.0',
'SAGEM-myV-55/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.3.100 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myv_55_ver1');
      }
  }



  function test_sagem_myv_56_ver1() {
    foreach(array(
'SAGEM-myV-56/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.g.2.102 (GUI) MMP/2.0',
'SAGEM-myV-56/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.g.2.106 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myv_56_ver1');
      }
  }



  function test_sagem_myw7_ver1() {
    foreach(array(
'SAGEM-myW-7/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myw7_ver1');
      }
  }



  function test_sagem_myx2_2_ver1() {
    foreach(array(
'SAGEM-myX2-2m/1.0 UP.Browser/6.1.0.6.1.c.5 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx2_2_ver1');
      }
  }



  function test_sagem_myx5_2v_ver1() {
    foreach(array(
'SAGEM-myX5-2v/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.g.2.101 (GUI) MMP/2.0',
'SAGEM-myX5-2v/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.g.2.103 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx5_2v_ver1');
      }
  }



  function test_sagem_myx6_2_ver1() {
    foreach(array(
'SAGEM-myX6-2/LA5,1G Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAGEM-myX6-2/LE5,1C Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAGEM-myX6-2/LE5,1C Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.115 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx6_2_ver1');
      }
  }



  function test_sagem_myx_3_2_ver1() {
    foreach(array(
'SAGEM-myX3-2/1.0 UP.Browser/6.1.0.6.1.c.4 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx_3_2_ver1');
      }
  }



  function test_sagem_myx_4_ver1() {
    foreach(array(
'SAGEM-myX-4/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.4.102 (GUI) MMP/1.0',
'SAGEM-myX-4/1.2 UP.Browser/6.2.2.6.d.5.100 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx_4_ver1');
      }
  }



  function test_sagem_myx_52t_ver1() {
    foreach(array(
'SAGEM-myX-5-2T/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.4.102 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx_52t_ver1');
      }
  }



  function test_sagem_myx_5_ver1() {
    foreach(array(
'SAGEM-myX-5/2.0 UP.Browser/5.0.3.3.1.c.1 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx_5_ver1');
      }
  }



  function test_sagem_myx_5_ver2() {
    foreach(array(
'SAGEM-myX5-2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.3 (GUI) MMP/1.0',
'SAGEM-myX5-2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.d.3.100 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx_5_ver2');
      }
  }



  function test_sagem_myx_5m_ver1() {
    foreach(array(
'SAGEM-myX-5m/1.1 UP.Browser/6.1.0.6.1.c.4 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx_5m_ver1');
      }
  }



  function test_sagem_myx_6_ver1() {
    foreach(array(
'SAGEM-myX-6/1.0 UP.Browser/6.1.0.6.1.c.3 (GUI) MMP/1.0',
'SAGEM-myX-6/1.0 UP.Browser/6.1.0.6.1.c.4 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx_6_ver1');
      }
  }



  function test_sagem_myx_7_ver1() {
    foreach(array(
'SAGEM-myX-7/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.5.d.3 (GUI) MMP/1.0',
'SAGEM-myX-7/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.5.d.3 (GUI) MMP/1.0 UP.Link/6.3.0.0.0',
'SAGEM-myX-7/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.5.d.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myx_7_ver1');
      }
  }



  function test_sagem_myz5_ver1() {
    foreach(array(
'SAGEM-myZ-5/1.0 UP.Browser/6.2.3.3.g.2.103 (GUI) MMP/2.0',
'SAGEM-myZ-5/1.0 UP.Browser/6.2.3.3.g.2.106 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myz5_ver1');
      }
  }



  function test_sagem_myz_55_ver1() {
    foreach(array(
'SAGEM-myZ-55/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.g.2.103 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_myz_55_ver1');
      }
  }



  function test_sagem_vf526_ver1() {
    foreach(array(
'SAGEM-VF526/1.0/EVN_HN MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.412 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_vf526_ver1');
      }
  }



  function test_sagem_vf527_ver1() {
    foreach(array(
'SAGEM-VF527/1.0/E5N_PN MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.413 (GUI)',
'SAGEM-VF527/1.0/EVN_PH MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.410 (GUI)',
'SAGEM-VF527/1.0/EVN_PH MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.416 (GUI)',
'SAGEM-VF527/1.0/EVN_PI MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.410 (GUI)',
'SAGEM-VF527/1.0/EVN_PJ MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.410 (GUI)',
'SAGEM-VF527/1.0/EVN_PJ MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.416 (GUI)',
'SAGEM-VF527/1.0/EVN_PL MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.413 (GUI)',
'SAGEM-VF527/1.0/EVN_PX MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.c.1.416 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_vf527_ver1');
      }
  }



  function test_sagem_vf533_ver1() {
    foreach(array(
'SAGEM-VF533/1.0/EVN_ZI MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.1.423 (GUI)',
'SAGEM-VF533/1.0/EVN_ZJ MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.1.423 (GUI)',
'SAGEM-VF533/1.0/EVN_ZN MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.1.423 (GUI)',
'SAGEM-VF533/1.0/EVN_ZP MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.1.423 (GUI)',
'SAGEM-VF533/1.0/EVN_ZQ MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.1.423 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_vf533_ver1');
      }
  }



  function test_sagem_vf540_ver1() {
    foreach(array(
'SAGEM-VF540/1.0/EVN_MK MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.1.576 (GUI)',
'SAGEM-VF540/1.0/EVN_MN MIDP/2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.PHILPROD.578 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sagem_vf540_ver1');
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

  function sagemTest() {
    $this->UnitTestCase('sagem Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SagemTest();
$test->run(new TextReporter());

?>
