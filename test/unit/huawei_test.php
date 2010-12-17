<?php

/*
 * Recognising Huawei devices from their user agents
 *
 */

require_once 'test_helper.php';

class HuaweiTest extends TeraWurflTestCase {

  var $wurfl;


  function test_huawei_c5005_ver1() {
    foreach(array(
'C5005/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c5005_ver1');
      }
  }



  function test_huawei_c5100_ver1() {
    foreach(array(
'C5100/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c5100_ver1');
      }
  }



  function test_huawei_c5110_ver1() {
    foreach(array(
'C5110/001.00 ACS-Netfront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c5110_ver1');
      }
  }



  function test_huawei_c5320_ver1() {
    foreach(array(
'C5320/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c5320_ver1');
      }
  }



  function test_huawei_c5330_ver1() {
    foreach(array(
'C5330/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c5330_ver1');
      }
  }



  function test_huawei_c5588_ver1() {
    foreach(array(
'C5588/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c5588_ver1');
      }
  }



  function test_huawei_c5589_ver1() {
    foreach(array(
'C5589/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c5589_ver1');
      }
  }



  function test_huawei_c5600_ver1() {
    foreach(array(
'C5600/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c5600_ver1');
      }
  }



  function test_huawei_c6100_ver1() {
    foreach(array(
'C6100/001.00 ACS-Netfront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c6100_ver1');
      }
  }



  function test_huawei_c7100_ver1() {
    foreach(array(
'C7100/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c7100_ver1');
      }
  }



  function test_huawei_c7500_ver1() {
    foreach(array(
'C7500/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_c7500_ver1');
      }
  }



  function test_huawei_g5730_ver1() {
    foreach(array(
'Huawei/1.0/G5730/Browser/obigo-browser/q03c'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_g5730_ver1');
      }
  }



  function test_huawei_g6600_ver1() {
    foreach(array(
'Huawei/1.0/G6600/Browser/obigo-browser/q03c',
    ) as $ua) {
        $this->checkUA($ua, 'huawei_g6600_ver1');
      }
  }


  function test_huawei_u8110_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; I7500 Build/PUBLIC_BETA2) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; Pulse Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; Pulse)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-FR; Pulse)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; Pulse Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u8110_ver1');
      }
  }


  function test_huawei_gr3500_ver1() {
    foreach(array(
'Huawei/1.0/G7007/Browser/obigo-browser/q03c'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_gr3500_ver1');
      }
  }



  function test_huawei_jatulc2_ver1() {
    foreach(array(
'JAT-WAP ULC2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_jatulc2_ver1');
      }
  }



  function test_huawei_m228_ver1() {
    foreach(array(
'HUAWEI-M228/001.00 ACCESS-NetFront/3.2(Mobile) Mozilla/5.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_m228_ver1');
      }
  }



  function test_huawei_m318_ver1() {
    foreach(array(
'HUAWEI-M318/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_m318_ver1');
      }
  }



  function test_huawei_m328_ver1() {
    foreach(array(
'HUAWEI-M328/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_m328_ver1');
      }
  }



  function test_huawei_m750_ver1() {
    foreach(array(
'HUAWEI-M750/001.00 ACS-NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_m750_ver1');
      }
  }



  function test_huawei_t209_ver1() {
    foreach(array(
'Huawei-T209_CMCC/0.1 NXP/1.0 Release/01.04.2009 Browser/mBrowser4.0 Profile/MIDP-1.0 Configration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_t209_ver1');
      }
  }



  function test_huawei_t7200_ver1() {
    foreach(array(
'Huawei/1.0/HuaweiT7200/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_t7200_ver1');
      }
  }



  function test_huawei_u1205_ver1() {
    foreach(array(
'Huawei/1.0/U1205/B000 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u1205_ver1');
      }
  }



  function test_huawei_u120_ver1() {
    foreach(array(
'HUAWEI/1.0/G7002/SW1.0.0/WAP2.0/MIDP-2.0 Configuration/CLDC-1.1',
'HUAWEI/1.0/HUAWEI U1205/B000 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'HUAWEI/G7002/SW1.0.0/WAP2.0/MIDP-2.0 Configuration/CLDC-1.1',
'Huawei/1.0/U120/B000 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Huawei/1.0/U120/B130 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Huawei/1.0/U120e/B000 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u120_ver1');
      }
  }



  function test_huawei_u1211_ver1() {
    foreach(array(
'Huawei/1.0/U1211/B000 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u1211_ver1');
      }
  }



  function test_huawei_u1215_ver1() {
    foreach(array(
'Huawei/1.0/U1215/B000 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u1215_ver1');
      }
  }



  function test_huawei_u121_ver1() {
    foreach(array(
'Huawei/1.0/U121/B000 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u121_ver1');
      }
  }



  function test_huawei_u1250_ver1() {
    foreach(array(
'Huawei/1.0/Huawei U1250/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u1250_ver1');
      }
  }

  function test_huawei_g6610_ver1() {
    foreach(array(
'Huawei/1.0/0HuaweiG6610/SW03 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2',
'Huawei/1.0/0HuaweiG6610V/SW03 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2',
'Huawei/1.0/0HuaweiG5010/SP04 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2',
'Huawei/1.0/0HuaweiG5010/SP06 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2',
    ) as $ua) {
        $this->checkUA($ua, 'huawei_g6610_ver1');
      }
  }



  function test_huawei_u1280_ver1() {
    foreach(array(
'Huawei/1.0/0Huawei U1250/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0Huawei U1251/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0Huawei U1251/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3 UNTRUSTED/1.0',
'Huawei/1.0/0Huawei U1280/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0Huawei U1285/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0Huawei U3205/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0Huawei U3205/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3 UNTRUSTED/1.0',
'Huawei/1.0/0HuaweiT565/B130 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/4.1 Profile'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u1280_ver1');
      }
  }



  function test_huawei_u1300_ver1() {
    foreach(array(
'Huawei/1.0/T520/B000 Browser/obigo-browser/q04a',
'Huawei/1.0/T521/B000 Browser/obigo-browser/q04a',
'Huawei/1.0/T566/B000 Browser/obigo-browser/q04a',
'Huawei/1.0/VF332/B000 Browser/obigo-browser/q04a'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u1300_ver1');
      }
  }



  function test_huawei_u1305_ver1() {
    foreach(array(
'Huawei/1.0/0HuaweiU1300/B123 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0HuaweiU1305/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u1305_ver1');
      }
  }



  function test_huawei_u1310_ver1() {
    foreach(array(
'Huawei/1.0/0HuaweiU1315/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u1310_ver1');
      }
  }



  function test_huawei_u3307_ver1() {
    foreach(array(
'Huawei/1.0/0HuaweiU3300/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0HuaweiU3305/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u3307_ver1');
      }
  }



  function test_huawei_u3315_ver1() {
    foreach(array(
'Huawei/1.0/0HuaweiU3311/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0HuaweiU3315/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0HuaweiU3315h/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u3315_ver1');
      }
  }



  function test_huawei_u526_ver1() {
    foreach(array(
'Huawei-U526/1.0 BREW/3.1 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u526_ver1');
      }
  }



  function test_huawei_u528_ver1() {
    foreach(array(
'Huawei-U528/1.0 BREW/3.1 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u528_ver1');
      }
  }



  function test_huawei_u535_ver1() {
    foreach(array(
'Huawei/1.0/U535/B000 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone710/B726 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone710/B732 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u535_ver1');
      }
  }



  function test_huawei_u5700_ver1() {
    foreach(array(
'Huawei/1.0/0HuaweiU5700/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0HuaweiU5700/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u5700_ver1');
      }
  }



  function test_huawei_u5705_ver1() {
    foreach(array(
'Huawei/1.0/0HuaweiU5705/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u5705_ver1');
      }
  }



  function test_huawei_u7315_ver1() {
    foreach(array(
'Huawei/1.0/0HUAWEI U7315/B100 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u7315_ver1');
      }
  }



  function test_huawei_u7510_ver1() {
    foreach(array(
'HuaweiU7510/B000 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'HuaweiU7510/B000 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'HuaweiU7510/B553 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u7510_ver1');
      }
  }



  function test_huawei_u7515_ver1() {
    foreach(array(
'HuaweiU7515/B000 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u7515_ver1');
      }
  }



  function test_huawei_u7517_ver1() {
    foreach(array(
'HuaweiU7517/B000 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'HuaweiU7517/B000 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u7517_ver1');
      }
  }



  function test_huawei_u7519_ver1() {
    foreach(array(
'HuaweiU7519/B001 Browser/ACCESS NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1/QTV-Player/5.3',
'HuaweiU7519/B001 Browser/ACCESS NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1/QTV-Player/5.3 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u7519_ver1');
      }
  }



  function test_huawei_u8220_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; es-CL; U8220)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-EC; U8220)',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-TW; U8220)'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u8220_ver1');
      }
  }



  function test_huawei_u8230_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-BY; U8230)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-by; U8230 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 1.5; de-AT; RBM2)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-at; RBM2 Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-CH; RBM2)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-FR; U8230)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; U8230 Build/CRB17) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-PT; U8230)'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u8230_ver1');
      }
  }



  function test_huawei_u9100b_ver1() {
    foreach(array(
'Huawei/1.0/0HUAWEI U9100/B113 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Huawei/1.0/0HUAWEI U9100/B113 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u9100b_ver1');
      }
  }



  function test_huawei_u9130_ver1() {
    foreach(array(
'HuaweiU9130/B047 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_u9130_ver1');
      }
  }



  function test_huawei_v720_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone720/B212 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone720/B217 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_v720_ver1');
      }
  }



  function test_huawei_v840_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone840/B536SP01 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone840/B543 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone840/B543 Browser/NetFront/3.5 MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_v840_ver1');
      }
  }



  function test_huawei_vf710_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone710/B618 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone725/B110 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone725/B112 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone725/B113 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone725/B114 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone725/B115 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone725/B121 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone725/B121 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_vf710_ver1');
      }
  }



  function test_huawei_vf715_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone715/B112 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone715/B116 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone715/B119 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone715/B125 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_vf715_ver1');
      }
  }



  function test_huawei_vf716_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone716/B123 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone716/B125SP02 Browser/Obigo-Browser/Q04A MMS/Obigo-MMS/Q04A SyncML/HW-SyncML/1.0 Java/QVM/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_vf716_ver1');
      }
  }



  function test_huawei_vf720_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone720/B208 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone720Nokia/B212 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_vf720_ver1');
      }
  }



  function test_huawei_vf810_ver1_subvodafone10() {
    foreach(array(
'Vodafone/1.0/0Vodafone810/B626 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone810/B630 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/0Vodafone810/B630 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_vf810_ver1_subvodafone10');
      }
  }



  function test_huawei_vodafone830_ver1() {
    foreach(array(
'Vodafone/1.0/0Vodafone830/B115SP01 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone830/B115SP02 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3',
'Vodafone/1.0/0Vodafone830/B116SP04 Browser/Obigo-Browser/Q05A MMS/Obigo-MMS/Q05A SyncML/HW-SyncML/1.0 Java/HWJa/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Player/QTV-Player/5.3'
    ) as $ua) {
        $this->checkUA($ua, 'huawei_vodafone830_ver1');
      }
  }



  ############################################################


  function huaweiTest() {
    $this->UnitTestCase('huawei Test');
  }


}

$test = new HuaweiTest();
$test->run(new TextReporter());

?>
