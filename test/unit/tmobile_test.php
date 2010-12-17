<?php

/*
 * Recognising Tmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class TmobileTest extends TeraWurflTestCase {

  var $wurfl;

  function test_tmobile_garminfone_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Garminfone)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Garminfone Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1; A50-V4.0.12-user-20100414',
'Mozilla/5.0 (Linux; U; Android 1.6; es-US; Garminfone)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-us; Garminfone Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1; A50-V4.0.12-user-20100414',
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_garminfone_ver1');
      }
  }


  function test_tmobile_espresso_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; T-Mobile_Espresso Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; T-Mobile_Espresso Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_espresso_ver1');
      }
  }

  function test_tmobile_atlas_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) T-Mobile_Atlas',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) T-Mobile_Atlas'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_atlas_ver1');
      }
  }



  function test_tmobile_dash_3g_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) T-Mobile_Maple'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_dash_3g_ver1');
      }
  }



  function test_tmobile_dash_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) T-Mobile Dash',
'T-Mobile Dash Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 320x240)'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_dash_ver1');
      }
  }



  function test_tmobile_g1_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.0; en-us; HTC_Dream) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2',
'Mozilla/5.0 (Linux; U; Android 1.0; en-us; dream) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2',
'Mozilla/5.0 (Linux; U; Android 1.1; de-; dream) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2',
'Mozilla/5.0 (Linux; U; Android 1.5; de-; T-Mobile G1 Build/CRC37) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; T-Mobile G1 Build/CRB43) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; Android Dev Phone 1 Build/CRB43) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; T-Mobile G1 Build/CRB43) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; T-Mobile G1 Build/CRC1) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-CN; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; cs-CZ; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; cs-cz; T-Mobile G1 Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-AT; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-DE; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-at; T-Mobile G1 Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; T-Mobile G1 Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; T-Mobile G1 Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; T-Mobile G1 Build/DRC92) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; T-Mobile G1 Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-in; T-Mobile G1 Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile G1 Build/DMD64) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile G1 Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile G1 Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-US; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; T-Mobile G1 Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-us; T-Mobile G1 Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-NL; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-nl; T-Mobile G1 Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; pl-PL; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-CN; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android SenseHERO 2.1; en-gb; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android SlideVillain1.1.0; en-GB; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android SuperHero2.0.1; fr-FR; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM5.5.0; it-it; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android VillainROM7.0.0; it-it; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android VillainROM7.1.0; en-US; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM7.3.0; en-GB; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM7.3.0; en-us; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android VillainROM7.3.2; de-DE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM7.3.2; en-za; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android VillainROM9.0.0; cs-CZ; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM9.0.0; de-DE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM9.0.0; en-GB; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM9.0.0; en-IL; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM9.0.0; en-ZA; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android VillainROM9.0.0; en-gb; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android c-VillainROM10.2.1; en-GB; HTC Hero)'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_g1_ver1');
      }
  }



  function test_tmobile_g2_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; de-DE; T-Mobile G2 Touch)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-DE; T-Mobile_G2_Touch)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-de; T-Mobile_G2_Touch Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; T-Mobile G2 Touch)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; T-Mobile_G2_Touch)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-MK; T-Mobile G2 Touch)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-de; T-Mobile G2 Touch Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; T-Mobile_G2_Touch Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-nl; T-Mobile_G2_Touch Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-NL; T-Mobile_G2_Touch)',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-nl; T-Mobile_G2_Touch Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-pl; T-Mobile_G2_Touch Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_g2_ver1');
      }
  }



  function test_tmobile_leo_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) T-Mobile_LEO'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_leo_ver1');
      }
  }



  function test_tmobile_mda_compact_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; MDA Compact/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_compact_ver1');
      }
  }



  function test_tmobile_mda_compactii_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; MDA compact II/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_compactii_ver1');
      }
  }



  function test_tmobile_mda_compactiii_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) PPC; MDA compact/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_compactiii_ver1');
      }
  }



  function test_tmobile_mda_compactiv_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; MDA_compact_IV/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_compactiv_ver1');
      }
  }



  function test_tmobile_mda_pro_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; MDA Pro/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_pro_ver1');
      }
  }



  function test_tmobile_mda_touch_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) PPC; MDA Touch/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_touch_ver1');
      }
  }



  function test_tmobile_mda_vario_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; MDA Vario/1.2 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) PPC; 240x320; MDA Vario/1.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_vario_ver1');
      }
  }



  function test_tmobile_mda_varioii_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; MDA Vario/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_varioii_ver1');
      }
  }



  function test_tmobile_mda_varioiii_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) PPC; MDA Vario/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_varioiii_ver1');
      }
  }



  function test_tmobile_mda_varioiv_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; MDA_Vario_IV/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mda_varioiv_ver1');
      }
  }



  function test_tmobile_mytouch_3g_slide_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; T-Mobile myTouch 3G Slide)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; T-Mobile myTouch 3G Slide)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; T-Mobile myTouch 3G)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; T-Mobile myTouch 3G Slide Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; T-Mobile myTouch 3G Slide)',
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mytouch_3g_slide_ver1');
      }
  }



  function test_tmobile_mytouch_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; T-Mobile myTouch 3G)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-CH; T-Mobile myTouch 3G)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-DE; T-Mobile myTouch 3G)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; T-Mobile myTouch 3G)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile myTouch 3G Build/DMD64) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile myTouch 3G Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile myTouch 3G Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile myTouch 3G Build/DRC83) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile myTouch 3G Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile myTouch 3G Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; T-Mobile myTouch 3G Build/DRD35) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-US; T-Mobile myTouch 3G)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-us; T-Mobile myTouch 3G Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-us; T-Mobile myTouch 3G Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-us; T-Mobile myTouch 3G Build/DRD35) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; T-Mobile myTouch 3G Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_mytouch_ver1');
      }
  }



  function test_tmobile_pulse_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; de-DE; Pulse)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-de; Pulse Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; Pulse)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-HU; Pulse)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ME; Pulse)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-MK; Pulse)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; Pulse Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-hr; Pulse Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-hu; Pulse Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_pulse_ver1');
      }
  }



  function test_tmobile_rhodium_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) T-Mobile_Rhodium',
'Opera/9.32 (Pocket PC; Browser Window XP [EN] Opera V9.00)',
'Opera/9.50 (Windows NT 5.1; MDA_Compact_V/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1; U; de)',
'Opera/9.50 (Windows NT 5.1; U; en) T-Mobile_Rhodium',
'Opera/9.60(J2ME/MIDP;OperaMini/4.2.Mod.by.Handler/503; U;en)Presto/2.2.0',
'Opera/9.70 (Linux armv6l ; U; HomeManager/HSV4.0/1.08K2; en) Presto/2.2.1'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_rhodium_ver1');
      }
  }



  function test_tmobile_sda_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; SDA/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_sda_ver1');
      }
  }



  function test_tmobile_shadow_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) T-Mobile_Juno'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_shadow_ver1');
      }
  }



  function test_tmobile_shadowii_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) T-Mobile_Cleopatra'
    ) as $ua) {
        $this->checkUA($ua, 'tmobile_shadowii_ver1');
      }
  }



  ############################################################


  function tmobileTest() {
    $this->UnitTestCase('tmobile Test');
  }


}

$test = new TmobileTest();
$test->run(new TextReporter());

?>
