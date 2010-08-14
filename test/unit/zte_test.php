<?php

/*
 * Recognising Zte devices from their user agents
 *
 */

require_once 'test_helper.php';

class ZteTest extends TeraWurflTestCase {

  var $wurfl;


  function test_zte_a261_ver1() {
    foreach(array(
'ZTE-A261/P103B9V1.0.0/WAP2.0 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'zte_a261_ver1');
      }
  }



  function test_zte_c362_ver1() {
    foreach(array(
'ZTE-C362/1.0 SMIT-Browser/2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_c362_ver1');
      }
  }



  function test_zte_c70_ver1() {
    foreach(array(
'ZTE-C70/1.0 SMIT-Browser/2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_c70_ver1');
      }
  }



  function test_zte_c78_ver1() {
    foreach(array(
'ZTE-C78/1.0 SMIT-Browser/2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_c78_ver1');
      }
  }



  function test_zte_c79_ver1() {
    foreach(array(
'ZTE-C79/1.0 SMIT-Browser/2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_c79_ver1');
      }
  }



  function test_zte_c88_ver1() {
    foreach(array(
'ZTE-C88/1.0 SMIT-Browser/2.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_c88_ver1');
      }
  }



  function test_zte_cg990_ver1() {
    foreach(array(
'ZTE-CG990/CG990_Z0_ID_BFFC102 Profile/MIDP-2.0 Configuration/CLDC-1.1 Obigo/Q03C',
'ZTE-CG990/CG990_Z1_ID_BFFC101 Profile/MIDP-2.0 Configuration/CLDC-1.1 Obigo/Q03C',
'ZTE-CG990/CG990_Z1_ID_BFFC102 Profile/MIDP-2.0 Configuration/CLDC-1.1 Obigo/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'zte_cg990_ver1');
      }
  }



  function test_zte_coral_400_ver1() {
    foreach(array(
'CORAL 400/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_coral_400_ver1');
      }
  }



  function test_zte_e810_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) MOVISTAR/1.0/e810/VEN_TM_SE_P180A2V1.0.1 IE Mobile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_e810_ver1');
      }
  }



  function test_zte_f102_ver1() {
    foreach(array(
'ZTE-F102 H3G/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'ZTE-F102 H3G/2.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'ZTE-F102/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f102_ver1');
      }
  }



  function test_zte_f105_ver1() {
    foreach(array(
'ZTE-F105/1.0 ACS-NF/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f105_ver1');
      }
  }



  function test_zte_f107_ver1() {
    foreach(array(
'ZTE-F107(3UK)/1.0 NetFront/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f107_ver1');
      }
  }



  function test_zte_f153_ver1() {
    foreach(array(
'ZTE-F153/1.0 ACS-NF/3.2 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f153_ver1');
      }
  }



  function test_zte_f156_ver1() {
    foreach(array(
'ZTE-F156/1.0 ACS-NF/3.2 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f156_ver1');
      }
  }



  function test_zte_f188_ver1() {
    foreach(array(
'ZTE-F188/1.0 ACS-NF/3.4 QTV2.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f188_ver1');
      }
  }



  function test_zte_f260_ver1() {
    foreach(array(
'ZTE-F260/1.0 ACS-NF/3.2 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f260_ver1');
      }
  }



  function test_zte_f852_ver1() {
    foreach(array(
'ZTE-F852/1.0 ACS-NF/3.2 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f852_ver1');
      }
  }



  function test_zte_f866_ver1() {
    foreach(array(
'ZTE-F866/1.0 ACS-NF/3.2 Qtv/4.3'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f866_ver1');
      }
  }



  function test_zte_f870e_ver1() {
    foreach(array(
'ZTE-F870E CINN BELL/1.0 ACS-NF/3.5 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f870e_ver1');
      }
  }



  function test_zte_f912_ver1() {
    foreach(array(
'ZTE-F912/1.0 ACS-NF/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f912_ver1');
      }
  }



  function test_zte_f950_ver1() {
    foreach(array(
'ZTE-F950/1.0 ACS-NF/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_f950_ver1');
      }
  }



  function test_zte_g_n281_ver1() {
    foreach(array(
'ZTE-G-N281-Miami-Orange/ORANGE_ENG_EN_P107A3V1.0.4 Obigo/Q03C',
'ZTE-G-N281-Miami-Orange/ORANGE_ENG_EN_P107A3V1.0.7 Obigo/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'zte_g_n281_ver1');
      }
  }



  function test_zte_g_x760_ver1() {
    foreach(array(
'ZTE-G X760',
'ZTE-G-X760-vegas-orange/X760_Z15ES_FS_B07A104_ORANGE Obigo/Q03C',
'ZTE-G-X760-vegas-orange/X760_Z15UK_FS_B07A105_ORANGE Obigo/Q03C',
'ZTE-G-X760-vegas-orange/X760_Z15UK_FS_B07A106_ORANGE Obigo/Q03C',
'ZTE-G-X760/X760_Z10MK_MK_B07A201 Obigo/Q03C',
'ZTE-G-X760/X760_Z10NL_GD_B07A201 Obigo/Q03C',
'ZTE-G-X760/X760_Z10RO_RO_BFFA101 Obigo/Q03C',
'ZTE-G-X760/X760_Z10UK_GD_B07A201 Obigo/Q03C',
'ZTE-G-X760/X760_Z10UK_GD_B07A202 Obigo/Q03C',
'ZTE-X760-Optimus/X760_Z15PT_Pt_BFFA102_OPTIMUS Obigo/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'zte_g_x760_ver1');
      }
  }



  function test_zte_gd180_ver1() {
    foreach(array(
'ZTE-GD180'
    ) as $ua) {
        $this->checkUA($ua, 'zte_gd180_ver1');
      }
  }



  function test_zte_gx960_ver1() {
    foreach(array(
'SFR342/X960_V2_Z0_C1_BFFA100 Obigo/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'zte_gx960_ver1');
      }
  }



  function test_zte_i766_ver1() {
    foreach(array(
'ZTE-G i766'
    ) as $ua) {
        $this->checkUA($ua, 'zte_i766_ver1');
      }
  }



  function test_zte_mtv40_ver1() {
    foreach(array(
'MTV 4.0/1.0 ACS-NF/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_mtv40_ver1');
      }
  }



  function test_zte_r100_ver1() {
    foreach(array(
'ZTE-R100/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_r100_ver1');
      }
  }



  function test_zte_r220_ver1() {
    foreach(array(
'ZTE-R220/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_r220_ver1');
      }
  }



  function test_zte_r230_ver1() {
    foreach(array(
'ZTE-R230/2.0 Profile/MIDP-2.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_r230_ver1');
      }
  }



  function test_zte_r6_ver1() {
    foreach(array(
'ZTE-R6/1.0 ACS-NF/3.4 QTV2.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_r6_ver1');
      }
  }



  function test_zte_r830_ver1() {
    foreach(array(
'R830/2.0 Profile/MIDP-2.0'
    ) as $ua) {
        $this->checkUA($ua, 'zte_r830_ver1');
      }
  }



  function test_zte_t100_ver1() {
    foreach(array(
'ZTE-T100/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'ZTE-T100Life/1.0 NetFront/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_t100_ver1');
      }
  }



  function test_zte_t106_ver1() {
    foreach(array(
'ZTE-T106/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_t106_ver1');
      }
  }



  function test_zte_t165i_ver1() {
    foreach(array(
'ZTE-T165i/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_t165i_ver1');
      }
  }



  function test_zte_t6_ver1() {
    foreach(array(
'ZTE-T6/1.0 ACS-NF/3.4 QTV2.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_t6_ver1');
      }
  }



  function test_zte_t7_ver1() {
    foreach(array(
'ZTE-T7/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_t7_ver1');
      }
  }



  function test_zte_t90_ver1() {
    foreach(array(
'ZTE-T90/1.0 ACS-NF/3.4 QTV2.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_t90_ver1');
      }
  }



  function test_zte_vodafone547_ver1() {
    foreach(array(
'Mozilla/4.0(Vodafone/1.0/Vodafone547/VF_UK_EN_P107A4V1.2.0/Obigo Q03C/MIDP-2.0 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'zte_vodafone547_ver1');
      }
  }



  function test_zte_x990_ver1() {
    foreach(array(
'ZTE-X990/X990_V1_Z2_ID_BFFC101  Profile/MIDP-1.0 Configuration/CLDC-1.0 Obigo/Q03C',
'ZTE-X990/X990_V1_Z2_ID_BFFC101 Profile/MIDP-1.0 Configuration/CLDC-1.0 Obigo/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'zte_x990_ver1');
      }
  }



  function test_zte_yoigo_f233_ver1() {
    foreach(array(
'Yoigo F233/1.0 ACS-NF/3.4 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'zte_yoigo_f233_ver1');
      }
  }



  ############################################################


  function zteTest() {
    $this->UnitTestCase('zte Test');
  }


}

$test = new ZteTest();
$test->run(new TextReporter());

?>
