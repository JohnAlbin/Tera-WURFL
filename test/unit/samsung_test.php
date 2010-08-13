<?php

/*
 * Recognising Samsung devices from their user agents
 *
 */

require_once 'test_helper.php';

class SamsungTest extends UnitTestCase {

  var $wurfl;


  function test_samsung_a117_ver1() {
    foreach(array(
'SAMSUNG-SGH-A117/A117UCGE1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.16.0',
'SAMSUNG-SGH-A117/A117UCGH2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a117_ver1');
      }
  }



  function test_samsung_a237_ver1() {
    foreach(array(
'SAMSUNG-SGH-A237/A237UCHG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a237_ver1');
      }
  }



  function test_samsung_a411_ver1() {
    foreach(array(
'SAMSUNG-SGH-A411/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a411_ver1');
      }
  }



  function test_samsung_a412_ver1() {
    foreach(array(
'SAMSUNG-SGH-A412/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a412_ver1');
      }
  }



  function test_samsung_a701_ver1() {
    foreach(array(
'SAMSUNG-SGH-A701/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a701_ver1');
      }
  }



  function test_samsung_a707_ver1() {
    foreach(array(
'SAMSUNG-SGH-A707/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A707/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-A707/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SAMSUNG-SGH-A707/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-A707/A707UCGL1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a707_ver1');
      }
  }



  function test_samsung_a711_ver1() {
    foreach(array(
'SAMSUNG-SGH-A711/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a711_ver1');
      }
  }



  function test_samsung_a797_ver1() {
    foreach(array(
'SAMSUNG-SGH-A797/A797UCIIB SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A797/A797UCIIB SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-A797/A797UCIIB; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15354; U; en-US) Opera 9.50',
'SAMSUNG-SGH-A797/A797UCIIB; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15354; U; es-US) Opera 9.50',
'SAMSUNG-SGH-A797/A797UCJC1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A797/A797UCJC1; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.17793; U; en-US) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a797_ver1');
      }
  }



  function test_samsung_a821_ver1() {
    foreach(array(
'SAMSUNG-SGH-A821/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a821_ver1');
      }
  }



  function test_samsung_a920_ver1() {
    foreach(array(
'Samsung-SPHA920 AU-MIC-A920/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_a920_ver1');
      }
  }



  function test_samsung_b100_ver1() {
    foreach(array(
'SEC-SGHB100/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SEC-SGHB100/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SEC-SGHB100/BOHA3 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_b100_ver1');
      }
  }



  function test_samsung_b2100_ver1() {
    foreach(array(
'SAMSUNG-B2100-ORANGE/B2100BVIC3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_b2100_ver1');
      }
  }



  function test_samsung_b2100v_ver1() {
    foreach(array(
'SAMSUNG-B2100/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Novarra-Vision/8.0',
'SAMSUNG-B2100/B2100BOIJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100DDIE6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100DDIF4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100DDII2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100DDIL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100JAID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100JBID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100JBID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-B2100/B2100JCIE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100JCIE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100JCIE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-B2100/B2100JDID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-B2100/B2100JVIF4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100JVIG2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100XXID2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100XXID3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-B2100/B2100XXID4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-B2100/BUIC6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-S5200/AEID4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SonyEricssonX1i/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) R1AA UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SonyEricssonX1i/Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15431; U; AT) R3AA UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_b2100v_ver1');
      }
  }



  function test_samsung_b5702_ver1() {
    foreach(array(
'SAMSUNG-B5702/B5702JPIE2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702JPIG1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702JPII1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702JPIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702JPJC1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702JVIF1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702JVII2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702JVIK1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702XAIG1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702XCID2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-B5702/B5702XFIE1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_b5702_ver1');
      }
  }



  function test_samsung_behold_ii_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-AU; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-IE; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-NZ; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ZA; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-au; Behold2 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ie; Behold2 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; Behold2 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; Behold2 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_behold_ii_ver1');
      }
  }



  function test_samsung_c3050_ver1() {
    foreach(array(
'SAMSUNG-C3050',
'SAMSUNG-C3050-ORANGE/C3050BVIC7 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3050-ORANGE/C3050BVIC8 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3050-ORANGE/C3050BVIE1 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3050-ORANGE/C3050BVIH2 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3050/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-C3050/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3050/C3050BTJD2 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3050/C3050RFIE1 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3050/C3050RFIE2 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3050/C3050RFII1 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungC3050/C3050BUIC5 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungC3050/C3050BUIC6 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungC3050/C3050BUID2 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungC3050/C3050BUIF3 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungC3050/C3050BUII1 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungC3050/C3050BUIJ1 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_c3050_ver1');
      }
  }



  function test_samsung_c3053_ver1() {
    foreach(array(
'SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0 Novarra-Vision/8.0',
'SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0, SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0, SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0, SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0, SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0, SAMSUNG-C3053/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_c3053_ver1');
      }
  }



  function test_samsung_c3110_ver1() {
    foreach(array(
'SAMSUNG-C3110/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_c3110_ver1');
      }
  }



  function test_samsung_c5220_ver1() {
    foreach(array(
'SAMSUNG-C5220/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-C5220/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 Novarra-Vision/8.0',
'SAMSUNG-C5220/C5220DOID3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-S7350i/1.0 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_c5220_ver1');
      }
  }



  function test_samsung_c5510_ver1() {
    foreach(array(
'SAMSUNG-GT-C5510/1.0 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510DFII1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510JBIG1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510JVIG2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510JVIH1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510SRIH3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510XFIG4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510XFII1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510XXIG1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5510/C5510XXIG4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S5510/S5510JVII3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5510/S5510XEIJ1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_c5510_ver1');
      }
  }



  function test_samsung_c6620_ver1() {
    foreach(array(
'SAMSUNG-GT-C6620/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_c6620_ver1');
      }
  }



  function test_samsung_c6625_ver1() {
    foreach(array(
'SAMSUNG-C6625',
'SAMSUNG-C6625/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C6625/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone)',
'SAMSUNG-C6625/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Vodafone/1.0/SamsungC6625/BUID1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SamsungC6625/BUIH4 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_c6625_ver1');
      }
  }



  function test_samsung_d500_ver1() {
    foreach(array(
'SAMSUNG-SGH-D500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-D500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-D500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_d500_ver1');
      }
  }



  function test_samsung_d500e_ver1() {
    foreach(array(
'SAMSUNG-SGH-D500E/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_d500e_ver1');
      }
  }



  function test_samsung_d520_ver1() {
    foreach(array(
'SEC-SGHD520/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_d520_ver1');
      }
  }



  function test_samsung_d600_ver1() {
    foreach(array(
'SAMSUNG-SGH-D600/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D600/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-D600/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_d600_ver1');
      }
  }



  function test_samsung_d600e_ver1() {
    foreach(array(
'SAMSUNG-SGH-D600E/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D600E/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-D600E/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_d600e_ver1');
      }
  }



  function test_samsung_d900orange_ver1() {
    foreach(array(
'SAMSUNG-SGH-D900-ORANGE/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_d900orange_ver1');
      }
  }



  function test_samsung_d908_ver1() {
    foreach(array(
'SAMSUNG-SGH-D908/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzUxODEyMDExOTQ5ODgz UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_d908_ver1');
      }
  }



  function test_samsung_e116_ver1() {
    foreach(array(
'SEC-SGHE116/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e116_ver1');
      }
  }



  function test_samsung_e1310_ver1() {
    foreach(array(
'SAMSUNG-E1310B/E1310BBOID3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E1310M/E1310MBAID6 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-E1310B/AMID1/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-E1310B/AMIE1/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-E1310B/BUIE1/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-E1360B/ARID1/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e1310_ver1');
      }
  }



  function test_samsung_e1410_ver1() {
    foreach(array(
'SAMSUNG-E1410/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-E1410/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e1410_ver1');
      }
  }



  function test_samsung_e2100_ver1() {
    foreach(array(
'SAMSUNG-E2100/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100/E2100DDID2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100/E2100JBIC1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100/E2100JCID4 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100/E2100JCIF1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100/E2100JDIC1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-E2100/E2100XEIE1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100B/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100B/E2100BXAID3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100B/E2100BXDIF2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2100L/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e2100_ver1');
      }
  }



  function test_samsung_e2210_ver1() {
    foreach(array(
'SAMSUNG-E2210/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e2210_ver1');
      }
  }



  function test_samsung_e2210b_ver1() {
    foreach(array(
'SAMSUNG-E2210B/E2210BAHIC3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2210B/E2210BXAID4 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2210B/E2210BXAIJ1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2210B/E2210BXBID3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2210B/E2210BXFIE1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2210BT/E2210BZDIG1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2210BT/E2210BZDIG1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e2210b_ver1');
      }
  }



  function test_samsung_e2210l_ver1() {
    foreach(array(
'SAMSUNG-E2210L/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e2210l_ver1');
      }
  }



  function test_samsung_e2510_ver1() {
    foreach(array(
'SAMSUNG-E2510-ORANGE/E2510CHHJ2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2510-ORANGE/E2510CHHK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2510-ORANGE/E2510CHIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2510/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2510/E2510BDHK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E2510/E2510XEHK3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e2510_ver1');
      }
  }



  function test_samsung_e251_ver1() {
    foreach(array(
'SAMSUNG-SGH-E251/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E251/E251AHHI1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E251/E251AHHI1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-E251/E251BDHE3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E251/E251XAHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E251/E251XAHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-E251/E251XCHE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E251/E251XFHE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E251/E251XIHI2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E251/E251XIIA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E251/E251XIIA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-E251L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e251_ver1');
      }
  }



  function test_samsung_e258_ver1() {
    foreach(array(
'SAMSUNG-SGH-E258/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MDAwMDAwMDAwMDAwMDAw UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E258/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU1MzY1MDE2MzAxNzIx UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E258/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU3NDUyMDEwOTc1ODU0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E258/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU3NzE4MDIwNTc0NjQy UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E258/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzUzNDQwMDI2NDQzNjMx UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E258/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzUzNDUyMDE2NTk3NjIz UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E258/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzUzNDY0MDE3MDMzMjQz UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e258_ver1');
      }
  }



  function test_samsung_e310_ver1() {
    foreach(array(
'SEC-SGHE310',
'SEC-SGHE310/1.0',
'SEC-SGHE310C/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e310_ver1');
      }
  }



  function test_samsung_e330_ver1() {
    foreach(array(
'SAMSUNG-SGH-E330/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0',
'SAMSUNG-SGH-E330/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e330_ver1');
      }
  }



  function test_samsung_e330n_ver1() {
    foreach(array(
'SAMSUNG-SGH-E330N/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e330n_ver1');
      }
  }



  function test_samsung_e350_ver1() {
    foreach(array(
'SAMSUNG-SGH-E350/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e350_ver1');
      }
  }



  function test_samsung_e360_ver1() {
    foreach(array(
'SAMSUNG-SGH-E360/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E360/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e360_ver1');
      }
  }



  function test_samsung_e370_ver1() {
    foreach(array(
'SAMSUNG-SGH-E370-VODA/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E370/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E370/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-E370/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-E370/E370BOFC5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E370/E370BOFD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e370_ver1');
      }
  }



  function test_samsung_e376_ver1() {
    foreach(array(
'SAMSUNG-SGH-E376/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e376_ver1');
      }
  }



  function test_samsung_e390_ver1() {
    foreach(array(
'SAMSUNG-SGH-E390/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e390_ver1');
      }
  }



  function test_samsung_e570_ver1() {
    foreach(array(
'SEC-SGHE570/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHE570/BOFL2 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SamsungSGHE570V/E570BUGA3 Browser/NF/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e570_ver1');
      }
  }



  function test_samsung_e590_ver1() {
    foreach(array(
'SAMSUNG-SGH-E590',
'SAMSUNG-SGH-E590/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E590/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-SGH-E590/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e590_ver1');
      }
  }



  function test_samsung_e630_ver1() {
    foreach(array(
'SAMSUNG-SGH-E630/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e630_ver1');
      }
  }



  function test_samsung_e635_ver1() {
    foreach(array(
'SAMSUNG-SGH-E635/E635UVEF3 UP.Browser/6.2.2.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e635_ver1');
      }
  }



  function test_samsung_e640_ver1() {
    foreach(array(
'SAMSUNG-SGH-E640/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e640_ver1');
      }
  }



  function test_samsung_e700_ver1() {
    foreach(array(
'SAMSUNG-SGH-E700/BSI UP.Browser/6.1.0.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e700_ver1');
      }
  }



  function test_samsung_e740_ver1() {
    foreach(array(
'SAMSUNG-SGH-E740/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E740/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-SGH-E740/E740BOGF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e740_ver1');
      }
  }



  function test_samsung_e746_ver1() {
    foreach(array(
'SAMSUNG-SGH-E746/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e746_ver1');
      }
  }



  function test_samsung_e760_ver1() {
    foreach(array(
'SAMSUNG-SGH-E760/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e760_ver1');
      }
  }



  function test_samsung_e770_ver1() {
    foreach(array(
'SEC-SGHE770/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHE770/EL2 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e770_ver1');
      }
  }



  function test_samsung_e780_ver1() {
    foreach(array(
'SAMSUNG-SGH-E780/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e780_ver1');
      }
  }



  function test_samsung_e800_ver1() {
    foreach(array(
'SAMSUNG-SGH-E800/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e800_ver1');
      }
  }



  function test_samsung_e808_ver1() {
    foreach(array(
'SAMSUNG-SGH-E808/1.0*MzU0MTkzMDAzNTMyNzIz UP.Browser/6.2.2.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e808_ver1');
      }
  }



  function test_samsung_e820_ver1() {
    foreach(array(
'SAMSUNG-SGH-E820/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e820_ver1');
      }
  }



  function test_samsung_e870_ver1() {
    foreach(array(
'SEC-SGHE870/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e870_ver1');
      }
  }



  function test_samsung_e908_ver1() {
    foreach(array(
'SAMSUNG-SGH-E908/NetFront 3.2/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU4MDEzMDE4MTMzMzgw',
'SAMSUNG-SGH-E908/NetFront 3.2/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU5ODgyMDA5MDA1MTE1',
'SAMSUNG-SGH-E908/NetFront 3.2/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzUyMDAzMDEwMjAwMTc2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_e908_ver1');
      }
  }



  function test_samsung_f200_ver1() {
    foreach(array(
'SEC-SGHF200/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_f200_ver1');
      }
  }



  function test_samsung_f300_ver1() {
    foreach(array(
'SEC-SGHF300/1.0 NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_f300_ver1');
      }
  }



  function test_samsung_f330_ver1() {
    foreach(array(
'SAMSUNG-SGH-F330/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F330/F330AIGI2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F330/F330AIGI2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-F330/F330CEHA2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F330/F330NBGJ3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F330/F330XEGK1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F330/F330XXGJ2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F330/F330XXHA3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_f330_ver1');
      }
  }



  function test_samsung_f500_ver1() {
    foreach(array(
'SGH-F500/1.0 NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_f500_ver1');
      }
  }



  function test_samsung_f700_ver1() {
    foreach(array(
'Mozilla/5.0 440x240 Samsung SCH-U940 NetFront/3.4',
'SAMSUNG-SGH-F700-Vodafone/F700ACGK2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700AEGJ5 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700AEGK3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700AMGJ8 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700AMGJ8 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.6.4.0.0',
'SAMSUNG-SGH-F700-Vodafone/F700AUGK1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700BUGJ5 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700BUGJ8 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700BUGK1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700BUGK3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700-Vodafone/F700JBGK3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-F700-Vodafone/F700JBGK3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-F700/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700/F700JCHC1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F700/F700XXHA3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_f700_ver1');
      }
  }



  function test_samsung_g810_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; Series60/3.1 Samsung/SGH-G810/DUHF2 Profile/MIDP-2.0 Configuration/CLDC-1.1 U; ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; Series60/3.1 Samsung/SGH-G810/DZHD4 Profile/MIDP-2.0 Configuration/CLDC-1.1 U; ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; Series60/3.1 Samsung/SGH-G810/JCHE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 U; ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; Series60/3.1 Samsung/SGH-G810/JPHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 U; ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-G810/XEHA3 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_g810_ver1');
      }
  }



  function test_samsung_galaxy_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; de-AT; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-CH; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-DE; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-ch; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-de; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-AU; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; Galaxy with MCR 1.2)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-au; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; Galaxy Build/CUPCAKE) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-CA; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-FR; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-ca; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; he-IL; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; it-IT; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; it-it; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-NL; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-PL; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-BR; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-PT; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-br; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-RU; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; tr-tr; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-CN; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-TW; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; SCH-I500)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; SHW-M100S)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; SPH-M900)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; SHW-M100S Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; SPH-M900 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Sprint APA9292KT Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; SPH-M900)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; SPH-M900 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; Sprint APA9292KT Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; SHW-M100S)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; SHW-M110S)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; SU950)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-kr; SHW-M100S Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-kr; SHW-M110S Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_galaxy_ver1');
      }
  }



  function test_samsung_gt_3313_ver1() {
    foreach(array(
'SAMSUNG-GT-B3313/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3313/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'SAMSUNG-GT-B3313/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1, SAMSUNG-GT-B3313/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3313/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1, SAMSUNG-GT-B3313/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1, SAMSUNG-GT-B3313/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1, SAMSUNG-GT-B3313/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_3313_ver1');
      }
  }



  function test_samsung_gt_b3210_ver1() {
    foreach(array(
'SAMSUNG-GT-B3210/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3210/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'SAMSUNG-GT-B3210/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-B3210/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-B3210/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-M3310/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b3210_ver1');
      }
  }



  function test_samsung_gt_b3310_ver1() {
    foreach(array(
'SAMSUNG-GT-B3210-ORANGE/B3210BVII5 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3210-ORANGE/B3210BVIJ1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3310-ORANGE/B3310BVIH1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3310/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3310/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'SAMSUNG-GT-B3310/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-B3310/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-B3310/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-B3310/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SAMSUNG-GT-B3310/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-B3310/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-GT-S3100-ORANGE/S3100BVIH2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b3310_ver1');
      }
  }



  function test_samsung_gt_b3410_ver1() {
    foreach(array(
'SAMSUNG-GT-B3410/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410ASIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410DDIJ5 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410DDIJ5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-GT-B3410/B3410DDIK1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410DDIK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-GT-B3410/B3410DDJC3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410DDJC3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-GT-B3410/B3410JBIK2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410JCIJ1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410JCIK2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-B3410/B3410JCJD1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410JPIL2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410JPJD1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410JVIK1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410JVIK2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410JVJC2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410MJIJ3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410MJIK1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXIJC NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXIJC NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-B3410/B3410XXIK4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXIK7 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXIL2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXIL3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXJA2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXJC3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B3410/B3410XXJC3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-B3410R/B3410UXJC4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SAMSUNG-GT-B3410R/B3410UXJC4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b3410_ver1');
      }
  }



  function test_samsung_gt_b5310_ver1() {
    foreach(array(
'SAMSUNG-GT-B5310/1.0 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/1.0 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-B5310/1.0 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-B5310/B5310ACIL4 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310ACJE1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310AEJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310BGIL3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310BGIL3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-B5310/B5310DDIK5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310DDIK5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-B5310/B5310DDJD2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310MMJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310MMJD2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310NPIK4 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310NPIL3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310PMJA3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310XCIL2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310XCJA1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310XFIK5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310XFJA1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310XXIK5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310XXJC4 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310XXJD1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310/B5310XXJF1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-B5310R/B5310UXJB5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b5310_ver1');
      }
  }



  function test_samsung_gt_b5722_ver1() {
    foreach(array(
'SAMSUNG-GT-B5722/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B5722/B5722DDJA1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B5722/B5722JPIL4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B5722/B5722JPJC2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B5722/B5722JVJA1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-B5722/B5722XXIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b5722_ver1');
      }
  }



  function test_samsung_gt_b7300_ver1() {
    foreach(array(
'SAMSUNG-GT-B7300/1.0 (Windows CE; Opera Mobi; U; en) Opera 9.5',
'SAMSUNG-GT-B7300/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'SAMSUNG-GT-B7620/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b7300_ver1');
      }
  }



  function test_samsung_gt_b7320_ver1() {
    foreach(array(
'SAMSUNG-GT-B7320/1.0 MIDP/2.1 CLDC/1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-GT-B7320/1.0 MIDP/2.1 CLDC/1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'SAMSUNG-GT-B7320/1.0 MIDP/2.1 CLDC/1.1 Mozilla/4.0 UNTRUSTED/1.0',
'SAMSUNG-GT-B7320/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-GT-B7320/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b7320_ver1');
      }
  }



  function test_samsung_gt_b7330_ver1() {
    foreach(array(
'SAMSUNG-GT-B7330/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'SAMSUNG-GT-B7330/BOIL1 profile/MIDP-2.0 configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b7330_ver1');
      }
  }



  function test_samsung_gt_b7610_ver1() {
    foreach(array(
'SAMSUNG-GT-B7610/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'SAMSUNG-GT-B7610/1.0 Opera 9.5',
'Vodafone/1.0/SAMSUNG-GT-B7610/BUIG5 Browser/Opera/9.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SAMSUNG-GT-B7610/BUIH3 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_b7610_ver1');
      }
  }



  function test_samsung_gt_c3010_ver1() {
    foreach(array(
'SAMSUNG-GT-C3010/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-C3010/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-C3010/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-C3010/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-C3060/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_c3010_ver1');
      }
  }



  function test_samsung_gt_c3212_ver1() {
    foreach(array(
'SAMSUNG-GT-C3212/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-GT-C3212/C3212DDIH5 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212DDIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212JPII2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212JPIJ2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212JPJB1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212JPJB2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212JVIH3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212JVIJ1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212JVIK1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212XXIG7 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212XXIH2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212XXIH4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212XXII1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212/C3212XXIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3212i/C3212IDDJE3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_c3212_ver1');
      }
  }



  function test_samsung_gt_c3510_ver1() {
    foreach(array(
'SAMSUNG-GT-C3510/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510AEJA1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510BGJB2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510BGJB2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-C3510/C3510DDIL2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510DDJD2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510JAIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510JBIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510JBIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-C3510/C3510JCIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510JDJA1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-C3510/C3510JPIL7 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510JPJC1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510JVIL2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510JVJD1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510POIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510XXIL3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510XXJA2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C3510/C3510XXJA2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SAMSUNG-GT-C3510/C3510XXJC1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_c3510_ver1');
      }
  }



  function test_samsung_gt_c5130_ver1() {
    foreach(array(
'SAMSUNG-GT-C5130/1.0 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-C5130/1.0 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-C5130/1.0 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-C5130/AIIJ2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-C5130/C5130SAIIK2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-C5130S/1.0 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_c5130_ver1');
      }
  }



  function test_samsung_gt_c5212_ver1() {
    foreach(array(
'SAMSUNG-C5212/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212DDIB4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212DDIC2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212DDIC2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-C5212/C5212DDID1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212DDIF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212DDIK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212DDIK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-C5212/C5212JCIB1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JCIF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JPIC4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JPIF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JPIJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JPJB1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JVIC1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JVIG2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JVIJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212JVIK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212XAIC5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212XCIC2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212XEIA7 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212XEIC3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212XEIG1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212XEIK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212XEIK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-C5212/C5212XFIC3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-C5212/C5212XFIK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_c5212_ver1');
      }
  }



  function test_samsung_gt_c6112_ver1() {
    foreach(array(
'SAMSUNG-GT-C6112/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112DDIL3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112DDJA1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112DDJA2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112DDJB1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112DDJB2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112JPIL5 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112JPJB2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112JPJC1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112JVIL4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112JVJB1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-C6112/C6112XXIL5 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_c6112_ver1');
      }
  }



  function test_samsung_gt_e1360b_ver1() {
    foreach(array(
'SAMSUNG-E1360/E1360JAIC1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E1360/E1360JCIC3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E1360/E1360JVIC3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E1360/E1360JVIG1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E1360/E1360JVII1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E1360B-ORANGE/E1360BBVID1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E1360B/E1360BAOID3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-E1360B/E1360BXAID3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_e1360b_ver1');
      }
  }



  function test_samsung_gt_e1390_ver1() {
    foreach(array(
'SAMSUNG-GT-E1390/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E1390/E1390DDIG3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_e1390_ver1');
      }
  }



  function test_samsung_gt_e2120_ver1() {
    foreach(array(
'SAMSUNG-GT-E2120-ORANGE/E2120BVII2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120-ORANGE/E2120BVII2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-GT-E2120/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-GT-E2120/E2120CFJA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120JBIH1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120JBIH1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-E2120/E2120JCII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120JFIK3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120JFIL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120JNJD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120JPII3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120JVIH3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120JVII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120XAIH1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120XAII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120XBII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120XEII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120XEIL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120XFIG5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120XFII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120/E2120XFIK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120B/E2120BBOIK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120B/E2120BDDIH2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120B/E2120BDDIJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120B/E2120BDDIK2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120B/E2120BDDIL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-E2120i/E2120iDDJD6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2120i/E2120iDDJE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2121B/E2121BXXJD7 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_e2120_ver1');
      }
  }



  function test_samsung_gt_e2130_ver1() {
    foreach(array(
'SAMSUNG-GT-E2130/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2130/E2130DDII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2130/E2130DDIK2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2130/E2130DDIL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2130/E2130DDIL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-GT-E2130/E2130JPIJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-E2130/E2130JPIJ2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_e2130_ver1');
      }
  }



  function test_samsung_gt_i5700_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; cs-cz; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-CH; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-DE; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-at; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-ch; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-CA; GT-I5700R)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-IE; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; GT-I5700L)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ZA; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ca; GT-I5700R Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ie; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; GT-I5700L Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; sdkDemo Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-za; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-US; GT-I5700L)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-us; GT-I5700L Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fi-fi; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-CA; GT-I5700R)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-FR; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; GT-I5700-ORANGE/I5700OFRIK1 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; hu-HU; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; hu-hu; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-it; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; iw-il; GT-I5700L Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-NL; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-nl; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; no-no; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-PL; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-pl; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-BR; GT-I5700L)',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-PT; sdkDemo)',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-br; GT-I5700L Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; ro-RO; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; ro-ro; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; ro-ro; GT-I5700-ORANGE/I5700OROIK1 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-RU; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-ru; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; sv-SE; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 1.5; sv-se; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; tr-tr; GT-I5700 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-cn; sdkDemo Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_i5700_ver1');
      }
  }



  function test_samsung_gt_i6220_ver1() {
    foreach(array(
'SAMSUNG-GT-I6220/1.0 SHP/VPP/R5 Jasmine/0.8 NexPlayer/2.12 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_i6220_ver1');
      }
  }



  function test_samsung_gt_i6410_ver1() {
    foreach(array(
'SAMSUNG-GT-I6410-Vodafone/I6410BUIJD Linux/X2/R1 Opera/9.6 SMS-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-I6410-Vodafone/I6410BUIK5 Linux/X2/R1 Opera/9.6 SMS-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-I6410-Vodafone/I6410BUJC1 Linux/X2/R1 Opera/9.6 SMS-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_i6410_ver1');
      }
  }



  function test_samsung_gt_i7110_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I7110/XXHI3 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_i7110_ver1');
      }
  }



  function test_samsung_gt_i7500_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; ru-RU; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; Galaxy Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-; LG GW620 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-; LG GW620R)',
'Mozilla/5.0 (Linux; U; Android 1.5; he-; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.5; iw-; GT-I5700L)',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; sv-; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; tr-; Galaxy Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_i7500_ver1');
      }
  }



  function test_samsung_gt_i8000_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) SAMSUNG-GT-i8000V/BUIJ1',
'SAMSUNG-GT-i8000/1.0 (Windows CE; Opera Mobi; U; en) Opera 9.5',
'SAMSUNG-GT-i8000/1.0 (Windows CE; Opera Mobi; U; en) Opera 9.5 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-i8000/1.0 (Windows CE; Opera Mobi; U; en) Opera 9.5 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-i8000/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'SAMSUNG-GT-i8000/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) UP.Link/6.3.0.0.0',
'SAMSUNG-GT-i8000/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) UP.Link/6.3.1.15.0',
'SAMSUNG-GT-i8000/1.0 Opera 9.5',
'SAMSUNG-GT-i8000/BOIL4 profile/MIDP-2.0 configuration/CLDC-1.1 (Windows CE; Opera Mobi; U; en) Opera 9.5',
'SAMSUNG-GT-i8000T/1.0 (Windows CE; Opera Mobi; U; en) Opera 9.5',
'SAMSUNG-GT-i8000V/BUIJ1 (Windows CE; Opera Mobi; U; en) Opera 9.5',
'SAMSUNG-GT-i8000V/BUJA3 (Windows CE; Opera Mobi; U; en) Opera 9.5',
'SAMSUNG-GT-i8000V/NXXJD6 (Windows CE; Opera Mobi; U; en) Opera 9.5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_i8000_ver1');
      }
  }



  function test_samsung_gt_i8320_ver1() {
    foreach(array(
'SAMSUNG-GT-I8320-Vodafone/I8320BUIJ4 Linux/X2/R1 Opera/9.6 SMS-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-I8320-Vodafone/I8320BUIJ6 Linux/X2/R1 Opera/9.6 SMS-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-I8320-Vodafone/I8320BUIJ8 Linux/X2/R1 Opera/9.6 SMS-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-I8320-Vodafone/I8320BUIK5 Linux/X2/R1 Opera/9.6 SMS-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-I8320-Vodafone/I8320BUJC1 Linux/X2/R1 Opera/9.6 SMS-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_i8320_ver1');
      }
  }



  function test_samsung_gt_i900_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-AT; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-DE; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-DE; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-at; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-ch; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; GT-I5700 Build/ECLAIR) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-AU; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-IE; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-NZ; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-au; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-au; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; GT-I9000B)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fi-FI; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fi-fi; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-FR; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-be; GT-I5700 Build/ECLAIR) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-ch; GT-I5700 Build/ECLAIR) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; GT-I5700 Build/ECLAIR) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; GT-I5700 Build/ECLAIR; Bouygues_Telecom) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; GT-I5801 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; hu-HU; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; hu-hu; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-NL; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-NL; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-nl; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; no-no; GT-I9000 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pl-PL; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pl-pl; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ro-RO; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; Geeksphone ONE)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-ru; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sk-sk; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sl-SI; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sr-RS; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sv-SE; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sv-SE; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; vi-VN; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-HK; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; GT-I9000)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; GT-I5700 Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_i900_ver1');
      }
  }



  function test_samsung_gt_m2310_ver1() {
    foreach(array(
'SAMSUNG-GT-E2550/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-M2310/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-GT-M2310/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-M2310/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_m2310_ver1');
      }
  }



  function test_samsung_gt_m2510_ver1() {
    foreach(array(
'SAMSUNG-GT-M2510/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_m2510_ver1');
      }
  }



  function test_samsung_gt_m2513_ver1() {
    foreach(array(
'SAMSUNG-GT-M2513/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_m2513_ver1');
      }
  }



  function test_samsung_gt_m2520_ver1() {
    foreach(array(
'SAMSUNG-GT-M2520/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_m2520_ver1');
      }
  }



  function test_samsung_gt_m2710_ver1() {
    foreach(array(
'SAMSUNG-M2710/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M2710/M2710DDIF3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M2710/M2710DDIF3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-M2710/M2710DDIF4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M2710/M2710DDIF4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-M2710/M2710DDIF4 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-M2710/M2710DDIK1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_m2710_ver1');
      }
  }



  function test_samsung_gt_m5650_ver1() {
    foreach(array(
'SAMSUNG-GT-M5650/1.0 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M5650/M5650BBIK8 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M5650/M5650DDIJ1 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M5650/M5650DDIL1 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M5650/M5650DDIL1 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-M5650/M5650JPIL2 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M5650/M5650JVIL1 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M5650/M5650XIJA1 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M5650/M5650XIJA1 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-M5650/M5650XXIKB SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M5650/M5650XXIKB SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-M5650/M5650XXIL3 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_m5650_ver1');
      }
  }



  function test_samsung_gt_m8910_ver1() {
    foreach(array(
'SAMSUNG-GT-M8910/M8910DDIG5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8910/M8910XBIH2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8910/M8910XXIG9 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8910/M8910XXIH2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_m8910_ver1');
      }
  }



  function test_samsung_gt_s3030_ver1() {
    foreach(array(
'SAMSUNG-S3030/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s3030_ver1');
      }
  }



  function test_samsung_gt_s3100_ver1() {
    foreach(array(
'SAMSUNG-GT-S3100/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100BOIH1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100BOIJ1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100CFIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100JBIH1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100JCII1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100JPII5 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100JVII1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100XXIF1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100XXIH4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100XXIH4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3100/S3100XXII1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100XXII3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100XXIK1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3100/S3100XXJB1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s3100_ver1');
      }
  }



  function test_samsung_gt_s3310_ver1() {
    foreach(array(
'SAMSUNG-GT-S3310/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S3310/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3310/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3310/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1, SAMSUNG-GT-S3310/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1, SAMSUNG-GT-S3310/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1, SAMSUNG-GT-S3310/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S3310/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-13',
'SAMSUNG-GT-S3310/S3310XXIA5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s3310_ver1');
      }
  }



  function test_samsung_gt_s3550_ver1() {
    foreach(array(
'SAMSUNG-GT-S3550/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s3550_ver1');
      }
  }



  function test_samsung_gt_s3600_ver1() {
    foreach(array(
'SAMSUNG-GT-S3600i/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3600i/S3600iDDIK2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3600i/S3600iDDIL2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3600i/S3600iJPIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3600i/S3600iJVIK3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3600i/S3600iJVIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3600i/S3600iXXIL1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-GT-S3600i/S3600iXXIL2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600AIHI3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600AIHI3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-S3600/S3600BDHJ5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600DDIG3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600JPIC1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600JPIE1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600JVHJ6 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600JVIE1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600PMIG3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XAHJ3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XAIE1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XEHJ3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XEIC1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XEIC2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XEIE2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XFHJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XIIB3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600/S3600XIIE1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3600H/1.0 RTK-E/1.0 DF/1.0 Release/07.01.2008 Browser/NetFront3.4  Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s3600_ver1');
      }
  }



  function test_samsung_gt_s3650_ver1() {
    foreach(array(
'SAMSUNG-GT-I6230/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M3710/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650-ORANGE/S3650BVII5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650-ORANGE/S3650BVII6 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650-ORANGE/S3650BVIK2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650-ORANGE/S3650BVIK2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3650/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650AAII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650ACII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650ACII4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650ACIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650ADII4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650ADII5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650ADIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650AEII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650AHIH2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650AIIH2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650AIIH2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3650/S3650AMIJ4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650ANII7 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650AOII8 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650APII6 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650AUII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650AUII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650BAII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650BDII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650BDIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650BFII1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650BGIJ2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650BGIJ2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-S3650/S3650BIIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650BOIJ3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650BXII4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650CUII1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650MIII5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650MJII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650MMII4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650MUIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650PIIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XEII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XEIJ2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XFII9 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XFIIA SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XFIJ4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XFJB2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XIII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XIII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3650/S3650XXIH9 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XXIH9 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3650/S3650XXII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XXII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3650/S3650XXII4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XXII5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3650/S3650XXIJ2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XXIJ3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S3650XXIJ4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MAHIK4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MAIIK4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MAIIK4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3650/S365MBGJA1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-S3650/S365MCVIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MMJIK2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MMJIK2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3650/S365MXBIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MXIIK3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MXIIK3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3650/S365MXIIL1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MXIIL1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3650/S365MXXIK4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MXXJB1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MXXJC1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3650/S365MXXJC1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S3653W/S3653WJPJB3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s3650_ver1');
      }
  }



  function test_samsung_gt_s5230_ver1() {
    foreach(array(
'SAMSUNG-GT-S5230-Bouygues/S5230AGID4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230-Bouygues/S5230AGIF2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230-Bouygues/S5230AGIH1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230-ORANGE/S5230BVIE3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230-ORANGE/S5230BVIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230-ORANGE/S5230BVIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230-ORANGE/S5230BVIJ1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/1.0 SHP/VPP/R5 Jasmine/0.8 NexPlayer/2.12 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/1.0 SHP/VPP/R5 Jasmine/0.8 NexPlayer/2.12 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230AAIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ACIF2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ACIF3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ACIJ2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ADID3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ADIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ADIF2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ADJB1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230AHID2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230AHID2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230AHIE1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230AHIE1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5230/S5230ARIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ARJB2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ASID2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230ASIF4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230AUIJ2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BAII3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BBIG1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BDIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BIIF3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BIII1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BRIG4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BRIG4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230BSIF4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BSIJ1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BSJB2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BXIE1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BXIF3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BXIH3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BXIJ1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BXIK1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230BXJC1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CEIE3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CEIF3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CEIF5 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CEIG1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CEIG3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CFIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CFIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5230/S5230CFIL1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CJIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CUIF3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CUIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CXID5 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CXIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CXIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CXIH1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CXIH1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5230/S5230CZIH3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230CZIJ3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230DYIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230MAIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230MAIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230MAIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230MMIE1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230MMIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230MMIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230MUIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230MUIJ2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230PEID3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230PEIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230PIIF2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230PIIF4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230PMID8 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230PMIK2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230RFIG4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230RFII1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230RFJA1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XBIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XBIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEID2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEID7 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEIF4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEIG3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEIG5 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEIG5 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230XEIG6 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEIG6 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5230/S5230XEII1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEII2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XEII4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFIE8 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFIF2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFIG3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFIG3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SAMSUNG-GT-S5230/S5230XFIH1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFIH2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFIH3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFII3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFII3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5230/S5230XFIJ2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFIJ2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230XFIJ4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XFJA3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XIIE4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XIIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XIIF1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230XIIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XIIG3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XIIG3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230XPIJ2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XPIK2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XPIK5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XPIK5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-S5230/S5230XPIL4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XPJA1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XPJB1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XPJB1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5230/S5230XPJB1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230XPJE4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIDB SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIDB SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.21.0',
'SAMSUNG-GT-S5230/S5230XXIDD SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIDE SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIDE SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230XXIDF SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIE1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIE7 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIF3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIF4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIF4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230XXIF5 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIG1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIG2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIG3 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIG4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIG4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5230/S5230XXIG4 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S5230XXIH1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230XXIJ1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S5230YAIE2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523HBHIK1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523HBHIK1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S523HBHJA1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523HMUJA1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523HPOIH2 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523HPOII1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MANJA1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MBBJC2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MCEIL2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MCEJB4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MCXJA2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MMMIL3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MREIL2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MREIL2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5230/S523MXEIL2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MXEIL2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5230/S523MXEIL2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S523MXIIL4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MXIIL4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S523MXIJB2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MXIJB3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MXIJB3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S523MXIJC1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523MXIJC1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5230/S523MXIJF1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523RAUII1 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230/S523RCEIH5 SHP/VPP/R5 Jasmine/0.8 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230C/1.0 SHP/R5 Release/02.01.2009 Browser/NetFront3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5230_ver1');
      }
  }



  function test_samsung_gt_s5230w_ver1() {
    foreach(array(
'SAMSUNG-GT-S5230G/S523GBRJA2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230G/S523GCXJA3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230G/S523GPMJB1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230W/S523WXEIL1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230W/S523WXFJE1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230W/S523WXXIL1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230W/S523WXXJB2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5230W/S523WXXJC1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5230w_ver1');
      }
  }



  function test_samsung_gt_s5233_ver1() {
    foreach(array(
'SAMSUNG-GT-S5233A/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/S5233ADDID5 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S5233ADDID5 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/S5233ADDIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S5233ADDIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/S5233ADDIF2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S5233ADDIF2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/S5233ADDIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S5233ADDIG2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S5233ADDIG2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/S5233ADDIG3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S5233ADDIG3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/S5233ADDIG3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/S523AJAIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJAIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S5233A/S523AJAIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJAIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJAIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S5233A/S523AJAIK2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJBIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJBIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S5233A/S523AJBIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJBIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJBIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJBIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJBIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJBIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'SAMSUNG-GT-S5233A/S523AJBIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S5233A/S523AJBIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJBIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJBIK2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJBIK2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S5233A/S523AJBIK2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJCIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJCIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJCIH1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJCIH1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233A/S523AJCIH1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJCIL1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJCIL1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S5233A/S523AJCJC1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJDIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233A/S523AJDIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-S5233A/S523AJVID8 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDDIG5 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDDIG5 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233S/S5233SDDIH3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDDIH3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233S/S5233SDDIHT SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDDII2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDDJE2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDDJE2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1, SAMSUNG-GT-S5233S/S5233SDRIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233S/S5233SDXIE5 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S5233S/S5233SDXIE5 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S5233S/S5233SDXIG6 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233S/S5233SDXIJ1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233T/1.0 SHP/VPP/R5 Jasmine/0.8 NexPlayer/2.12 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233T/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233T/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233W/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233W/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233W/S5233WDDIH1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233W/S5233WDDIH2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233W/S5233WDDII2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5233W/S5233WDXIH2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5233W/S5233WDXII1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5233_ver1');
      }
  }



  function test_samsung_gt_s5350_ver1() {
    foreach(array(
'SAMSUNG-GT-S5350/1.0 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-N',
'SAMSUNG-GT-S5350/S5350DDJA3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-N',
'SAMSUNG-GT-S5350/S5350DDJA3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-N UNTRUSTED/1.0',
'SAMSUNG-GT-S5350/S5350DDJA3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-N, SAMSUNG-GT-S5350/S5350DDJA3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-N, SAMSUNG-GT-S5350/S5350DDJA3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-N',
'SAMSUNG-GT-S5350/S5350XFJA3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-N'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5350_ver1');
      }
  }



  function test_samsung_gt_s5503_ver1() {
    foreach(array(
'SAMSUNG-GT-S5503/ SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5550/JDJB1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S5550/JVJA5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5503_ver1');
      }
  }



  function test_samsung_gt_s5560_ver1() {
    foreach(array(
'SAMSUNG-GT-S5560/1.0 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560BFIK2 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560DDIL3 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560DDIL3 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5560/S5560DDJD1 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560JPJB2 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560JPJC2 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XEIJ3 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XFIK3 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XFJB1 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XIJD1 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XXIK3 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XXIL1 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XXIL2 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XXIL4 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XXJB2 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XXJD1 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5560/S5560XXJD2 SHP/VPP/R5 Dolfin/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5560_ver1');
      }
  }



  function test_samsung_gt_s5600_ver1() {
    foreach(array(
'SAMSUNG-GT-S5600-Bouygues/S5600AGID3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-Bouygues/S5600AGIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-ORANGE/S5600BVIDA SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-ORANGE/S5600BVIF3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-ORANGE/S5600BVIF4 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-ORANGE/S5600BVIH3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-Vodafone/S5600BUIE2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-Vodafone/S5600BUIF2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-Vodafone/S5600BUIF3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600-Vodafone/S5600BUIG2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/1.0 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600AEID3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600AEIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600AEIG3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600AIIE2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600AIIE2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5600/S5600AIIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600AIIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5600/S5600BDIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600BGIF3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-S5600/S5600BGIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-S5600/S5600BGIK1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-S5600/S5600BXIF2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600CUID1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600CUIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600MNII2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600MNII3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600MUIH1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600PEIF2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600PEIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600REIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600RFIG4 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600SXIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XBIF3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XBJD1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XEIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XEIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XEIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XFIE3 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XXID9 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XXIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XXIE4 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S5600XXIF5 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600/S560RXFIH1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5600L/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5600_ver1');
      }
  }



  function test_samsung_gt_s5603_ver1() {
    foreach(array(
'SAMSUNG-GT-S5603/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5603/S5603DDIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5603/S5603DDIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5603/S5603DDIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5603/S5603DDIF1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5603/S5603DDIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5603/S5603DDIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5603/S5603DDJA1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5603/S5603DDJA1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5603T/1.0 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5603_ver1');
      }
  }



  function test_samsung_gt_s5620_ver1() {
    foreach(array(
'SAMSUNG-GT-S5620-Vodafone/S5620AEJD2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620-Vodafone/S5620BUJC5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620-Vodafone/S5620BUJD2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620-Vodafone/S5620BUJD3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/1.0 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/1.0 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5620/S5620ADJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620ADJD2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620AHJC3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620AIJC3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620AIJC3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-GT-S5620/S5620ANJD2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620BGJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620BGJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-GT-S5620/S5620BOJD4 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620BRJC4 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620BSJB1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620CEJB4 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620CEJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620CUJD2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620CXJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620DDJB5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620DDJB5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5620/S5620DDJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620DDJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5620/S5620DDJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620DDJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S5620/S5620DDJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0',
'SAMSUNG-GT-S5620/S5620DDJE1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620JBJB1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620JCJB2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620MAJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620MSJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620NSJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620PMJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620PMJC5 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620POJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XBJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XEJB3 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XEJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XFJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XWJB8 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XWJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XWJC4 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XWJE2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XXJB7 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XXJC1 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S5620/S5620XXJC2 SHP/VPP/R5 Dolfin/1.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s5620_ver1');
      }
  }



  function test_samsung_gt_s6353_ver1() {
    foreach(array(
'SAMSUNG-GT-S3653/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653BJII6 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653DDII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653DDII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653/S3653DDII4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653DDII4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653/S3653DXII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653/S3653DXII6 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653/S3653JAII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JBII1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JBII1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-S3653/S3653JBII1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-S3653/S3653JCII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JCIJ2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JDII1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JPII5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JPIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JPIJ2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JPIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JPJA1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JPJD1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JVII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JVIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653JVIL1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S3653SRII3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S365MDDIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S365MDDIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653/S365MDDIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653/S365MDDJC1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S365MDDJC1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653/S365MDDJD1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S365MDDJD1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653/S365MDDJD2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S3653/S365MDXJD1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-GT-S3653W/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s6353_ver1');
      }
  }



  function test_samsung_gt_s6700_ver1() {
    foreach(array(
'SAMSUNG-GT-M8800H/1.0 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S6700/1.0 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S6700/S6700DOIH4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S6700T/1.0 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s6700_ver1');
      }
  }



  function test_samsung_gt_s7550_ver1() {
    foreach(array(
'SAMSUNG-GT-S7550/S7550AEIL2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S7550/S7550XXIK1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S7550/S7550XXIK5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s7550_ver1');
      }
  }



  function test_samsung_gt_s8003_ver1() {
    foreach(array(
'SAMSUNG-GT-S8003/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S8003/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-S8003/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8003/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-S8003/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-S8003/S8003DDIF3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8003/S8003DDIF4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8003/S8003DDIG1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8003/S8003DDIL2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8003-FM',
'SAMSUNG-S8003/S8003DDJB1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8003-FM',
'SAMSUNG-S8003/S8003JAIF2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8003/S8003JBIF2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8003/S8003JBIF2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-S8003/S8003JBIF2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-S8003/S8003JCIH2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s8003_ver1');
      }
  }



  function test_samsung_gt_s8500_ver1() {
    foreach(array(
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500DDJE7; U; Bada/1.0; en-us) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500JPJE5; U; Bada/1.0; en-us) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500JVJE6; U; Bada/1.0; en-us) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500JVJE6; U; Bada/1.0; tr-tr) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJEB; U; Bada/1.0; de-de) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJEE; U; Bada/1.0; de-de) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJEE; U; Bada/1.0; en-us) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJEE; U; Bada/1.0; fr-fr) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJEE; U; Bada/1.0; it-it) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJEE; U; Bada/1.0; nl-nl) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJEE; U; Bada/1.0; no-no) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJEF; U; Bada/1.0; de-de) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJF1; U; Bada/1.0; de-de) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJF1; U; Bada/1.0; nl-nl) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'Mozilla/5.0 (SAMSUNG; SAMSUNG-GT-S8500/S8500XXJF4; U; Bada/1.0; de-de) AppleWebKit/533.1 (KHTML, like Gecko) Dolfin/2.0 Mobile WVGA SMM-MMS/1.2.0 OPN-B',
'SAMSUNG-GT-S8500/S8500BWJE8 Bada/1.0 Dolfin/2.0 NexPlayer/3.0 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-B',
'SAMSUNG-GT-S8500/S8500NEJE6 Bada/1.0 Dolfin/2.0 NexPlayer/3.0 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 OPN-B'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gt_s8500_ver1');
      }
  }



  function test_samsung_gtm8800_ver1() {
    foreach(array(
'SAMSUNG-GT-M8800-ORANGE/M8800BVHK2 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800-ORANGE/M8800BVIB1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/1.0 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800ADHJ4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800ADHK2 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800ADHL2 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800ADIF2 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800AEIA2 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800AGHK3 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800ANHL3 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800AOHK1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800BMHJ4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800BOHJ5 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800BOHK3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800BOIB1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800BOIH1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800BXIA2 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800CEHL1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800CEIB1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800DDIA3 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800DDIB1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800DDIG1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800NPHJ5 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800XEHJ4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800XEHL2 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800XFHK2 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800XXHJE SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800XXHK4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M8800XXHK5 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880BXXIC1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880BXXIE1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880BXXIG1 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880BXXJA2 SHP/VPP/R5 Jasmine/0.8 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880JJAIA3 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880JJBIA4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880JJBIA4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-GT-M8800/M880JJBIA4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-GT-M8800/M880JJCIA4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880JJCIF4 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880JJDIA3 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M8800/M880JJDIA3 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-M8800L/1.0 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.9 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gtm8800_ver1');
      }
  }



  function test_samsung_gts7330_ver1() {
    foreach(array(
'SAMSUNG-GT-S7330-ORANGE/BVHH4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S7330/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-GT-S7330/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_gts7330_ver1');
      }
  }



  function test_samsung_i450v_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450V/BUHC2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450V/BUHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450V/JBJG5 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_i450v_ver1');
      }
  }



  function test_samsung_i520v_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i520V/BUGH1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_i520v_ver1');
      }
  }



  function test_samsung_i550v_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/XXGL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550V/BUGL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_i550v_ver1');
      }
  }



  function test_samsung_i8510_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/DJHI1; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/DJHI4; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/DJHJ4; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/DJHJ6; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/DJHK4; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/DJHL1; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/XXHG5; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/XXHH6 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/XXHH7; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/XXHH9; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/XXHHa; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/XXHJ3; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/XXHL2; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510/XXHL2; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/I8510M/UBHL2 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_i8510_ver1');
      }
  }



  function test_samsung_i8910_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Samsung/I8910-ORANGE/BVAMNIF1; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Samsung/I8910-ORANGE/BVORAIE4; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Samsung/I8910-ORANGE/BVORAIF3; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Samsung/I8910-ORANGE/BVORAII1; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Samsung/I8910; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Samsung/I8910; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Samsung/I8910; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_i8910_ver1');
      }
  }



  function test_samsung_i900v_ver1() {
    foreach(array(
'SAMSUNG-SGH-i900V/ACHG6 Opera 9.5',
'SAMSUNG-SGH-i900V/ACHH1 Opera 9.5',
'SAMSUNG-SGH-i900V/AEHG4 Opera 9.5',
'SAMSUNG-SGH-i900V/AEHH2 Opera 9.5',
'SAMSUNG-SGH-i900V/AEHJ2 Opera 9.5',
'SAMSUNG-SGH-i900V/AEIB2 Opera 9.5',
'SAMSUNG-SGH-i900V/AUHJ2 Opera 9.5',
'SAMSUNG-SGH-i900V/BAHK2 Opera 9.5',
'SAMSUNG-SGH-i900V/BUHJ2 Opera 9.5',
'SAMSUNG-SGH-i900V/JBHG5 Opera 9.5',
'SAMSUNG-SGH-i900V/JBHH1 Opera 9.5',
'SAMSUNG-SGH-i900V/JBHH1 Opera 9.5 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-i900V/MJHJ2 Opera 9.5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_i900v_ver1');
      }
  }



  function test_samsung_j200_ver1() {
    foreach(array(
'SAMSUNG-SGH-J200/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J200/J200JPGK4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J200/J200MKGK1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J200/J200XEGJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J200/J200XEGK1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J200/J200XFGK3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_j200_ver1');
      }
  }



  function test_samsung_j400_ver1() {
    foreach(array(
'SAMSUNG-SGH-J400/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J400/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-J400/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_j400_ver1');
      }
  }



  function test_samsung_j700_ver1() {
    foreach(array(
'SAMSUNG-SGH-J700/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-J700/J700AGHB3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700BDHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700BDHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700BIHA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700BOHA4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700BOHB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700BXHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700CWHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700JAHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700JAHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-J700/J700JCHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700JDHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700JPHB4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700JPHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700JVHA6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700JVHC5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700JVHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/BUHB1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/BUHB2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/JBHC1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/JBHC1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/JBHC1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_j700_ver1');
      }
  }



  function test_samsung_j700i_ver1() {
    foreach(array(
'SAMSUNG-SGH-J700i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Novarra-Vision/8.0',
'SAMSUNG-SGH-J700i/J700IAGIB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IBOID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IBXIE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700ICFIE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IDDIB4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IDDIC2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IDDIC2 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-J700i/J700IDDIE4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IDDIF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IJCIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IJCIE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IJPIB5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IJPIE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IJPIE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IJVIB3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IJVIE3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXAIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXAIC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXAIE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXEIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXEIE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXEIE3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXFIC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXFID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700IXFIE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700iBIIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700i/J700iXEIA4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_j700i_ver1');
      }
  }



  function test_samsung_m310() {
    foreach(array(
'SPH-M310 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_m310');
      }
  }



  function test_samsung_m3200_ver1() {
    foreach(array(
'SAMSUNG-M3200/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3200/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-M3200/M3200BXHK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3200/M3200JCHJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3200/M3200JCHJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-M3200/M3200JCHJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-M3200/M3200XCHJ4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3200/M3200XFHK4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_m3200_ver1');
      }
  }



  function test_samsung_m3510_ver1() {
    foreach(array(
'SAMSUNG-M3510/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3510/M3510BXIF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3510/M3510JPHJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3510/M3510JVHJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3510/M3510XAHI4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3510/M3510XEHI7 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3510/M3510XFHJ5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3510/M3510XFHK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-M3510L/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_m3510_ver1');
      }
  }



  function test_samsung_m7500_ver1() {
    foreach(array(
'SAMSUNG-M7500/M7500ACHL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_m7500_ver1');
      }
  }



  function test_samsung_m7600_ver1() {
    foreach(array(
'SAMSUNG-GT-M7600B/1.0 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-M7600L/1.0 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600-ORANGE/M7600BVIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600/M7600ADID4 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600/M7600AEID6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600/M7600AUID5 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600/M7600CEID3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600/M7600CUID4 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600/M7600MGIG4 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1/MTS_RUSSIA',
'SAMSUNG-M7600/M7600RFID2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600/M7600XXID6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7600/M7600XXIDA SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_m7600_ver1');
      }
  }



  function test_samsung_m7603_ver1() {
    foreach(array(
'SAMSUNG-M7603/1.0 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7603/M7603DDID5 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7603/M7603DDIF1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-M7603/M7603JCIF3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_m7603_ver1');
      }
  }



  function test_samsung_p260_ver1() {
    foreach(array(
'SAMSUNG-SGH-P260/P260PKGK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_p260_ver1');
      }
  }



  function test_samsung_p310_ver1() {
    foreach(array(
'SEC-SGHP310/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_p310_ver1');
      }
  }



  function test_samsung_p510_ver1() {
    foreach(array(
'SEC-SGHP510 UP.Browser/6.2.2.6 (GUI) MMP/1.0',
'SEC-SGHP510/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0',
'SEC-SGHP510/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_p510_ver1');
      }
  }



  function test_samsung_p520_ver1() {
    foreach(array(
'SEC-SGHP520/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHP520/BOHA1 NetFront/3.4 NexPlayer/2.5 ("NexPlayer_Agere")'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_p520_ver1');
      }
  }



  function test_samsung_p850_ver1() {
    foreach(array(
'SAMSUNG-SGH-P850/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_p850_ver1');
      }
  }



  function test_samsung_r430_ver1() {
    foreach(array(
'SCH-R430 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_r430_ver1');
      }
  }



  function test_samsung_r460_ver1() {
    foreach(array(
'sam-r460 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_r460_ver1');
      }
  }



  function test_samsung_r800_ver1() {
    foreach(array(
'Mozilla/5.0 R800 like Gecko/20060426 Netfront/3.4'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_r800_ver1');
      }
  }



  function test_samsung_r810_ver1() {
    foreach(array(
'sam-r810 NetFront/3.4 Mozilla/5.0 like Gecko/20060426',
'sam-r810 NetFront/3.5 Mozilla/5.0 like Gecko/20060426',
'sam-r810 Netfront/3.4 Mozilla/5.0 like Gecko/2006042',
'sam-r810 Netfront/3.4 Mozilla/5.0 like Gecko/20060426',
'samr810 Netfront/3.4 Mozilla/5.0 like Gecko/20060426'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_r810_ver1');
      }
  }



  function test_samsung_r850_ver1() {
    foreach(array(
'sam-r850 NetFront/3.5 Mozilla/5.0 like Gecko/20060531'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_r850_ver1');
      }
  }



  function test_samsung_r860_ver1() {
    foreach(array(
'Mozilla/5.0 (rv:1.3; BREW 3.1.5; en)/400x240 sam-r860 like Gecko/20080531 NetFront/3.5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_r860_ver1');
      }
  }



  function test_samsung_s3110_ver1() {
    foreach(array(
'SAMSUNG-S3110/S3110XFIC4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s3110_ver1');
      }
  }



  function test_samsung_s3500_ver1() {
    foreach(array(
'SAMSUNG-S3500/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S3500/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-S3500/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s3500_ver1');
      }
  }



  function test_samsung_s500_ver1() {
    foreach(array(
'SAMSUNG-SGH-S500/SHARK UP.Browser/5.0.5.1 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s500_ver1');
      }
  }



  function test_samsung_s5200_ver1() {
    foreach(array(
'SAMSUNG-S5200/1.0 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200DDIK3 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200DDIK3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-S5200/S5200DDIK3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-S5200/S5200JVIG2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200XAIF2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200XAIK2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200XEIF4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200XEIH1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200XFIF4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200XIID5 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200XIIF2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-S5200/S5200XIIK2 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s5200_ver1');
      }
  }



  function test_samsung_s720i_ver1() {
    foreach(array(
'portalmmm/2.0 S710i(c10;TB)',
'portalmmm/2.0 S720i(c10;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s720i_ver1');
      }
  }



  function test_samsung_s7220_ver1() {
    foreach(array(
'SAMSUNG-S7220/1.0 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7220/S7220ACIB1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7220/S7220ADIC1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7220/S7220ANIC1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7220/S7220CXIF1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-S7220/S7220PMIH1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7220/S7220XXIB7 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7220/S7220XXIB8 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7350i/S735IAHIH1 SHP/VPP/R5 NetFront/3.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s7220_ver1');
      }
  }



  function test_samsung_s7350_ver1() {
    foreach(array(
'SAMSUNG-S7350/1.0 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7350/S7350BIIC3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7350/S7350JAIB1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7350/S7350JAIB1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'SAMSUNG-S7350/S7350JAIB1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-S7350/S7350JBIB1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7350/S7350JBIB1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UP.Link/6.3.1.13.0',
'SAMSUNG-S7350/S7350JBIB1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-S7350/S7350JCIC2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7350/S7350XBIF1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7350/S7350XFIC6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S7350/S7350XXIC4 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s7350_ver1');
      }
  }



  function test_samsung_s8000_ver1() {
    foreach(array(
'SAMSUNG-S8000-ORANGE/S8000BVIF5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000-ORANGE/S8000BVIG4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000-ORANGE/S8000BVJB1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000ACIF4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000ACIF6 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000ACIF7 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000ANIG2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000AOIF6 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000AOIG2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000BBIG3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000BGIF7 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000BGIF7 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-S8000/S8000BGIG2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-S8000/S8000BGIG3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000BGIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000BGIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-S8000/S8000BOIK3 SHP/VPP/R5 Opera/9.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000BOIK6 SHP/VPP/R5 Opera/9.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000BOJA4 SHP/VPP/R5 Opera/9.5 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000BXIH2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000CEIF2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000CEIG1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000CVIH1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000MNIG1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000MNIG5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000MUIG2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000NAIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000POIF3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000POIG1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000RFIF4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000RFIF6 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000RFIG2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000RFII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XBIF1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XBIG1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XEIE3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XEIF4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XEIG2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XEII2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S8000XFIH1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XPIH1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S8000XPII1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S8000XPIJ7 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S8000XPIK3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S8000XPIK4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S8000XPJA1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S8000XWIF6 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXIC6 SHP/VPP/R5 Jasmine/1.0 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXIEA SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXIEF SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXIF3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXIF4 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXIF5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXIF5 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S8000XXIG3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXII1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S8000XXIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8000/S800MADJB3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MAMIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MAOIJ3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MCEIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MCEJA1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MCEJC1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MPOIK1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MPOJB2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MPOJB2 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM UP.Link/6.3.0.0.0',
'SAMSUNG-S8000/S800MREIL1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MREJC3 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MXEJA1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800MXFIJ1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 SS-Widget/S8000-FM',
'SAMSUNG-S8000/S800RASIH1 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s8000_ver1');
      }
  }



  function test_samsung_s8000l_ver1() {
    foreach(array(
'SAMSUNG-GT-M8910B/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S8000B/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-GT-S8000L/1.0 SHP/VPP/R5 Jasmine/1.0 Nextreaming SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s8000l_ver1');
      }
  }



  function test_samsung_s8300_ver1() {
    foreach(array(
'SAMSUNG-S8300-ORANGE/S8300BVIC1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-ORANGE/S8300BVIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300AEIC6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300AUIC6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300BUIC6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300BUID1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300BUID2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300BUID3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300BUIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300BUIF2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300-Vodafone/S8300BUIH1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/1.0 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300ADIC1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300ADIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300ADII1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300AIIC2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300AOIC1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300ASID1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300BOID3 SHP/VPP/R5 Opera/9.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300BOIF3 SHP/VPP/R5 Opera/9.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300CWIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300DDIC2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300DDID1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300DDIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300DFID1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300DTID3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300JAIC3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300JAIC3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-S8300/S8300JCIC3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300JCIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300JCIH1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-S8300/S8300MNIC5 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300MNID1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300NSIC3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300NSID1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300RFIC3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300RFIC6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300RFIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300XBIG1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300XFIC4 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300XFIC6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300XFIG1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300XIIC2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300XXIC2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300XXID6 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S8300XXIJ2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S830NBGIC7 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-S8300/S830NBGIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-S8300/S830NXXIC3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300/S830NXXIE1 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s8300_ver1');
      }
  }



  function test_samsung_s8300t_ver1_subt() {
    foreach(array(
'SAMSUNG-S8300H/1.0 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-S8300T/1.0 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_s8300t_ver1_subt');
      }
  }



  function test_samsung_sch_a815_ver1() {
    foreach(array(
'SCH-A815 UP.Browser/6.2.2.5 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_a815_ver1');
      }
  }



  function test_samsung_sch_a850_ver1() {
    foreach(array(
'SCH-A850 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_a850_ver1');
      }
  }



  function test_samsung_sch_a870_ver1() {
    foreach(array(
'SCH-A870 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_a870_ver1');
      }
  }



  function test_samsung_sch_a915_ver1() {
    foreach(array(
'SCH-A915 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_a915_ver1');
      }
  }



  function test_samsung_sch_e159_ver1() {
    foreach(array(
'SCH-E159/ UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_e159_ver1');
      }
  }



  function test_samsung_sch_f309_ver1() {
    foreach(array(
'SCH-F309/ UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_f309_ver1');
      }
  }



  function test_samsung_sch_f339_ver1() {
    foreach(array(
'SCH-F339/ POLARIS/6.15 (GUI; compatible; UP.Browser)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_f339_ver1');
      }
  }



  function test_samsung_sch_f679_ver1() {
    foreach(array(
'SCH-F679/ UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_f679_ver1');
      }
  }



  function test_samsung_sch_i220_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) SAMSUNG-SCH-i220',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) SAMSUNG-SCH-i220a'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_i220_ver1');
      }
  }



  function test_samsung_sch_i760_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.9) VZW:SCH-i760 PPC 240x320',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) VZW:SCH-i760 PPC 240x320'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_i760_ver1');
      }
  }



  function test_samsung_sch_i770_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) VZW:SCH-i770 PPC 320x320'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_i770_ver1');
      }
  }



  function test_samsung_sch_i910_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Samsung-SCHI910 BMC PPC 240x400',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) VZW:SCH-i910 PPC 240x400',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240x400) Opera VZW:SCH-i910'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_i910_ver1');
      }
  }



  function test_samsung_sch_m568_ver1() {
    foreach(array(
'SAM-M569/ UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_m568_ver1');
      }
  }



  function test_samsung_sch_r100_ver1() {
    foreach(array(
'sam-r100 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r100_ver1');
      }
  }



  function test_samsung_sch_r211_ver1() {
    foreach(array(
'SCH-R211 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r211_ver1');
      }
  }



  function test_samsung_sch_r300_ver1() {
    foreach(array(
'SCH-R300 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r300_ver1');
      }
  }



  function test_samsung_sch_r310_ver1() {
    foreach(array(
'sam-r310 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r310_ver1');
      }
  }



  function test_samsung_sch_r350_ver1() {
    foreach(array(
'sam-r350 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r350_ver1');
      }
  }



  function test_samsung_sch_r351_ver1() {
    foreach(array(
'Samsung-SCHR351 Infraware-Polaris/6.0 MMP/2.0',
'sam-r351 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r351_ver1');
      }
  }



  function test_samsung_sch_r420_ver1() {
    foreach(array(
'sam-r420 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r420_ver1');
      }
  }



  function test_samsung_sch_r450_ver1() {
    foreach(array(
'sam-r450 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r450_ver1');
      }
  }



  function test_samsung_sch_r500_ver1() {
    foreach(array(
'SCH-R500 UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'SCH-R500/1.0 AU-MIC/2.0 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r500_ver1');
      }
  }



  function test_samsung_sch_r520_ver1() {
    foreach(array(
'sam-r520 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r520_ver1');
      }
  }



  function test_samsung_sch_r550_ver1() {
    foreach(array(
'sam-r550 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r550_ver1');
      }
  }



  function test_samsung_sch_r560_ver1() {
    foreach(array(
'sam-r560 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r560_ver1');
      }
  }



  function test_samsung_sch_r561_ver1() {
    foreach(array(
'Samsung-SCHR561 Infraware-Polaris/6.0 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r561_ver1');
      }
  }



  function test_samsung_sch_r600_ver1() {
    foreach(array(
'SCH-R600 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_r600_ver1');
      }
  }



  function test_samsung_sch_s179_ver1() {
    foreach(array(
'SCH-S179 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_s179_ver1');
      }
  }



  function test_samsung_sch_s259_ver1() {
    foreach(array(
'SCH-S259/ UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_s259_ver1');
      }
  }



  function test_samsung_sch_s379_ver1() {
    foreach(array(
'SAM-S379/ Embider/5.30 (GUI; compatible)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_s379_ver1');
      }
  }



  function test_samsung_sch_u350_ver1() {
    foreach(array(
'SCH-U350 UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'SCH-U350/1.0 NetFront/3.0.22.2.18 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u350_ver1');
      }
  }



  function test_samsung_sch_u450_ver1() {
    foreach(array(
'SCH-U450/1.0 AU-MIC/2.0 (GUI) MMP/2.0',
'SCH-U450/1.0 NetFront/3.0.22.2.20 (GUI) MMP/2.0',
'sam-u450 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u450_ver1');
      }
  }



  function test_samsung_sch_u490_ver1() {
    foreach(array(
'SCH-U490/1.0 NetFront/3.0.22.2.16 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u490_ver1');
      }
  }



  function test_samsung_sch_u510_ver1() {
    foreach(array(
'SCH-U510 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u510_ver1');
      }
  }



  function test_samsung_sch_u640_ver1() {
    foreach(array(
'SCH-U640/1.0 NetFront/3.0.22.1.19 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u640_ver1');
      }
  }



  function test_samsung_sch_u650_ver1() {
    foreach(array(
'SCH-U650/1.0 NetFront/3.0.22.2.15 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u650_ver1');
      }
  }



  function test_samsung_sch_u740_ver1() {
    foreach(array(
'SCH-u740 UP.Browser/6.2.3.2 (GUI) MMP/2.0',
'Samsung-SCHU740 AU-OBIGO/Q04C1-1.22 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u740_ver1');
      }
  }



  function test_samsung_sch_u750_ver1() {
    foreach(array(
'SCH-U750L/1.0 NetFront/3.0.22.2.17 (GUI) MMP/2.0',
'SCH-U750P/1.0 NetFront/3.0.22.2.17 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u750_ver1');
      }
  }



  function test_samsung_sch_u810_ver1() {
    foreach(array(
'SCH-U810/1.0 NetFront/3.0.22.1.14 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u810_ver1');
      }
  }



  function test_samsung_sch_u820_ver1() {
    foreach(array(
'Mozilla/4.0(compatible;Polaris 6.2;Brew 3.1.5;U;en)/400x240 Samsung SCH-U820'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u820_ver1');
      }
  }



  function test_samsung_sch_u960_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; BREW 3.1.5; en )/800x480 Samsung SCH-U960'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_u960_ver1');
      }
  }



  function test_samsung_sch_w259_ver1() {
    foreach(array(
'SAMSUNG-SCH-W259/W259DDDA2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SCH-W259/W259IMSDB1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_w259_ver1');
      }
  }



  function test_samsung_sch_w399_ver1() {
    foreach(array(
'SCH-W339/ Embider/5.10.TI (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_w399_ver1');
      }
  }



  function test_samsung_sch_w619_ver1() {
    foreach(array(
'SCH-W619/ UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sch_w619_ver1');
      }
  }



  function test_samsung_scha900_ver1() {
    foreach(array(
'Samsung-SCHA900 AU-MIC-A900/2.0 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_scha900_ver1');
      }
  }



  function test_samsung_schr610_ver1() {
    foreach(array(
'Samsung-SCHR610 AU-OBIGO/Q04C1-1.22 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_schr610_ver1');
      }
  }



  function test_samsung_sgh_a167_ver1() {
    foreach(array(
'SAMSUNG-SGH-A167/A167UCIB3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a167_ver1');
      }
  }



  function test_samsung_sgh_a256_ver1() {
    foreach(array(
'SAMSUNG-SGH-A256/A256UXIF8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-A256/A256UXIF8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.1.0.0',
'SAMSUNG-SGH-A256/A256UXIF8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.1.0.06.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a256_ver1');
      }
  }



  function test_samsung_sgh_a257_ver1() {
    foreach(array(
'SAMSUNG-SGH-A257/A257UCIC6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-A257/A257UCIC6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Untrusted/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a257_ver1');
      }
  }



  function test_samsung_sgh_a501_ver1() {
    foreach(array(
'SEC-SGHA501 SHP/CDR-2.2 NetFront/3.2 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SEC-SGHA501 SHP/CDR-2.2 NetFront/3.2 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1UP.Link/6.3.1.14.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a501_ver1');
      }
  }



  function test_samsung_sgh_a517_ver1() {
    foreach(array(
'SAMSUNG-SGH-A517/A517UCGG5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a517_ver1');
      }
  }



  function test_samsung_sgh_a561_ver1() {
    foreach(array(
'SAMSUNG-SGH-A561/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A561/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 Novarra-Vision/8.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a561_ver1');
      }
  }



  function test_samsung_sgh_a637_ver1() {
    foreach(array(
'SAMSUNG-SGH-A637/A637UCHH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a637_ver1');
      }
  }



  function test_samsung_sgh_a687_ver1() {
    foreach(array(
'SAMSUNG-SGH-A687/A687UCJB4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A687/A687UCJB4; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; en-US) Opera 9.50',
'SAMSUNG-SGH-A687/A687UCJB4; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; es-US) Opera 9.50',
'SAMSUNG-SGH-A687/A687UCJB5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A687/A687UCJB5; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; en-US) Opera 9.50',
'SAMSUNG-SGH-A687/A687UCJB5; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; es-US) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a687_ver1');
      }
  }



  function test_samsung_sgh_a697_ver1() {
    foreach(array(
'SAMSUNG-SGH-A697/A697UCJB2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a697_ver1');
      }
  }



  function test_samsung_sgh_a706_ver1() {
    foreach(array(
'SAMSUNG-SGH-A706/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a706_ver1');
      }
  }



  function test_samsung_sgh_a736_ver1() {
    foreach(array(
'SAMSUNG-SGH-A736/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A736/UXHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A736/UXHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SAMSUNG-SGH-A736/UXHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0',
'SAMSUNG-SGH-A736/UZGJ3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a736_ver1');
      }
  }



  function test_samsung_sgh_a737_ver1() {
    foreach(array(
'SAMSUNG-SGH-A737/UCGI2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A737/UCGI3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A737/UCHD2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A737/UCHD2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SAMSUNG-SGH-A737/UCHH1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A737/UCIAA SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a737_ver1');
      }
  }



  function test_samsung_sgh_a766_ver1() {
    foreach(array(
'SAMSUNG-SGH-A766/A766UXIA4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SAMSUNG-SGH-A766/A766UXIA4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0',
'SAMSUNG-SGH-A796/A796UXJA7 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SAMSUNG-SGH-A796/A796UXJA7 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a766_ver1');
      }
  }



  function test_samsung_sgh_a767_ver1() {
    foreach(array(
'SAMSUNG-SGH-A767/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A767/A767UCHI4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A767/A767UCHI4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 Novarra-Vision/8.0',
'SAMSUNG-SGH-A767/A767UCIF2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A767/A767UCIF2; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14315; U; en-US) Opera 9.50',
'SAMSUNG-SGH-A767/A767UCIF2; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14315; U; en-US) Opera 9.50 UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-A767/A767UCIF2; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14315; U; es-US) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a767_ver1');
      }
  }



  function test_samsung_sgh_a777_ver1() {
    foreach(array(
'SAMSUNG-SGH-A777/A777UCHI5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A777/A777UCIF2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A777/A777UCIF2; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14315; U; en-US) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a777_ver1');
      }
  }



  function test_samsung_sgh_a827_ver1() {
    foreach(array(
'SAMSUNG-SGH-A827/A827UCHC1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A827/A827UCHC1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a827_ver1');
      }
  }



  function test_samsung_sgh_a837_ver1() {
    foreach(array(
'SAMSUNG-SGH-A836/A836UXHK5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0',
'SAMSUNG-SGH-A837/A837UCHH1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A837/A837UCHJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A837/A837UCID4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a837_ver1');
      }
  }



  function test_samsung_sgh_a867_ver1() {
    foreach(array(
'SAMSUNG-SGH-A867/A867UCHJ3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-A867/A867UCHJ3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-A867/A867UCHJ3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a867_ver1');
      }
  }



  function test_samsung_sgh_a877_ver1() {
    foreach(array(
'SAMSUNG-SGH-A877/A877UCIB7 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A877/A877UCIB7 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SAMSUNG-SGH-A877/A877UCID3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A877/A877UCID3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a877_ver1');
      }
  }



  function test_samsung_sgh_a885_ver1() {
    foreach(array(
'SAMSUNG-SGH-A885/A885TLIK1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a885_ver1');
      }
  }



  function test_samsung_sgh_a886_ver1() {
    foreach(array(
'SAMSUNG-SGH-A886/A886UXIJ9 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a886_ver1');
      }
  }



  function test_samsung_sgh_a887_ver1() {
    foreach(array(
'SAMSUNG-SGH-A887/A887UCIFA SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A887/A887UCIFA SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0',
'SAMSUNG-SGH-A887/A887UCIJ1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A887/A887UCIJ1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0',
'SAMSUNG-SGH-A887/A887UCIJ1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a887_ver1');
      }
  }



  function test_samsung_sgh_a897_ver1() {
    foreach(array(
'SAMSUNG-SGH-A897/A897UCIIA SHP/VPP/R5 Jasmine/1.0 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A897/A897UCIIA SHP/VPP/R5 Jasmine/1.0 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-A897/A897UCIIA; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15304; U; en-US) Opera 9.50',
'SAMSUNG-SGH-A897/A897UCIIA; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15304; U; en-US) Opera 9.50 UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-A897/A897UCIIA; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15304; U; es-US) Opera 9.50',
'SAMSUNG-SGH-A897/A897UCJC1 SHP/VPP/R5 Jasmine/1.0 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-A897/A897UCJC1; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15304; U; en-US) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_a897_ver1');
      }
  }



  function test_samsung_sgh_b110_ver1() {
    foreach(array(
'SAMSUNG-SGH-B110L/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B110L/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_b110_ver1');
      }
  }



  function test_samsung_sgh_b130l_ver1() {
    foreach(array(
'SAMSUNG-SGH-B130-ORANGE/B130ABHK1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130AKHG1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130BFHF1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130BOHF2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130CUHK1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130CWHI1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130MAHH2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130PEHI1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130XAHF2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130XAHF4 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130XAHJ2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130XCHF1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130XFHF2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130/B130XFHJ1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-B130L/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_b130l_ver1');
      }
  }



  function test_samsung_sgh_b220_ver1() {
    foreach(array(
'SEC-SGHB220/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SEC-SGHB220B/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_b220_ver1');
      }
  }



  function test_samsung_sgh_b270_ver1() {
    foreach(array(
'SEC-SGHB270/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_b270_ver1');
      }
  }



  function test_samsung_sgh_b270i_ver1() {
    foreach(array(
'SAMSUNG-SGH-B270i/B270iBGID1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_b270i_ver1');
      }
  }



  function test_samsung_sgh_b310_ver1() {
    foreach(array(
'SEC-SGHB310/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_b310_ver1');
      }
  }



  function test_samsung_sgh_b320_ver1() {
    foreach(array(
'SEC-SGHB320/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Samsung-SGH-B320/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_b320_ver1');
      }
  }



  function test_samsung_sgh_b520_ver1() {
    foreach(array(
'SEC-SGHB520/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SEC-SGHB520/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungSGHB520V/B520BUHI1 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungSGHB520V/B520BUIA1 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungSGHB520V/B520CDHI1 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_b520_ver1');
      }
  }



  function test_samsung_sgh_c160_ver1() {
    foreach(array(
'SAMSUNG-SGH-C160/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c160_ver1');
      }
  }



  function test_samsung_sgh_c160l_ver1() {
    foreach(array(
'SAMSUNG-SGH-C160L/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c160l_ver1');
      }
  }



  function test_samsung_sgh_c165_ver1() {
    foreach(array(
'SAMSUNG-SGH-C165/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c165_ver1');
      }
  }



  function test_samsung_sgh_c180_ver1() {
    foreach(array(
'SAMSUNG-SGH-C180/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C180/BOHA2_HA4 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c180_ver1');
      }
  }



  function test_samsung_sgh_c260_ver1() {
    foreach(array(
'SAMSUNG-SGHC260/C260BAGC4 Browser/Rainbow/3.0',
'SAMSUNG-SGHC260/C260MBAGE6 Browser/Rainbow/3.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c260_ver1');
      }
  }



  function test_samsung_sgh_c270_ver1() {
    foreach(array(
'SAMSUNG-SGH-C270/C270AEIC1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270BAID4 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270BBIA1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270BFIC1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270BVID3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270CEIC2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270CWID1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270JPIE1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270JPIH1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270JPIL1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270JVIA5 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270JVIG1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270JVII1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270JVIL1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270XAIA2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270XAIK1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C270/C270YAIH1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c270_ver1');
      }
  }



  function test_samsung_sgh_c276_ver1() {
    foreach(array(
'SAMSUNG-SGH-C276/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C276L/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C276L/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c276_ver1');
      }
  }



  function test_samsung_sgh_c400_ver1() {
    foreach(array(
'SAMSUNG-SGH-C400/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c400_ver1');
      }
  }



  function test_samsung_sgh_c406_ver1() {
    foreach(array(
'SAMSUNG-SGH-C406/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c406_ver1');
      }
  }



  function test_samsung_sgh_c417_ver1() {
    foreach(array(
'SAMSUNG-SGH-C417 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C417/C417UCFG6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-C417/C417UCFK3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c417_ver1');
      }
  }



  function test_samsung_sgh_c425_ver1() {
    foreach(array(
'SAMSUNG-SGH-C425/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c425_ver1');
      }
  }



  function test_samsung_sgh_c450_ver1() {
    foreach(array(
'SAMSUNG-SGH-C450/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c450_ver1');
      }
  }



  function test_samsung_sgh_c516_ver1() {
    foreach(array(
'SEC-SGHC516/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_c516_ver1');
      }
  }



  function test_samsung_sgh_cc03_ver1() {
    foreach(array(
'SAMSUNG-SGH-CC03/1.0 RTK-E/1.0 SYSOL/1.0 Release/09.01.2007 Browser/OpenWave6.2.3.3.c.1.101/*MzU5MDk5MDEwNjgwODU3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-CC03_CMCC/1.0 RTK-E/1.0 SYSOL/1.0 Release/09.01.2007 Browser/OpenWave6.2.3.3.c.1.101/*MzU0NzMzMDI1OTUwOTcx UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_cc03_ver1');
      }
  }



  function test_samsung_sgh_d500c_ver1() {
    foreach(array(
'SAMSUNG-SGH-D500C/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d500c_ver1');
      }
  }



  function test_samsung_sgh_d508_ver1() {
    foreach(array(
'SAMSUNG-SGH-D508/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU1NDQ4MDAxMDk3Mjg4 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D508/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU1NTgwMDAxNDE2MzA2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D508/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU1NTgwMDAyMDQxMjEw UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D508/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU1NTgwMDAyMjExNDQx UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D508/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU1NTgxMDAzMzkxNTU0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D508/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU2MDk3MDA2NjExMDk1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D508/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU2MDk4MDA5MjU5Mzc5 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d508_ver1');
      }
  }



  function test_samsung_sgh_d510_ver1() {
    foreach(array(
'SAMSUNG-SGH-D510/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d510_ver1');
      }
  }



  function test_samsung_sgh_d528_ver1() {
    foreach(array(
'SAMSUNG-SGH-D528/NetFront 3.2/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-D528/NetFront 3.2/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU5MTQxMDAwNjM3MDk5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d528_ver1');
      }
  }



  function test_samsung_sgh_d608_ver1() {
    foreach(array(
'SAMSUNG-SGH-D608/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CL',
'SAMSUNG-SGH-D608/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU3MTEzMDAwOTUyOTEx UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d608_ver1');
      }
  }



  function test_samsung_sgh_d728_ver1() {
    foreach(array(
'SAMSUNG-SGH-D728/Series60 2.1/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d728_ver1');
      }
  }



  function test_samsung_sgh_d780_ver1() {
    foreach(array(
'SAMSUNG-SGH-D780/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-SGH-D780/D780CBHJ2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XAHE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XCHG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XEHD3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XEHD8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XEHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XEHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XEHG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XFHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D780/D780XFHG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d780_ver1');
      }
  }



  function test_samsung_sgh_d820_ver1() {
    foreach(array(
'SAMSUNG-SGH-D820/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D820/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-D820/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Untrusted/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d820_ver1');
      }
  }



  function test_samsung_sgh_d830_ver1() {
    foreach(array(
'SEC-SGHD830/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHD830/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d830_ver1');
      }
  }



  function test_samsung_sgh_d840_ver1() {
    foreach(array(
'SEC-SGHD840/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHD840/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d840_ver1');
      }
  }



  function test_samsung_sgh_d880_ver1() {
    foreach(array(
'SAMSUNG-SGH-D880',
'SAMSUNG-SGH-D880/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880BPHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880CXHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880CXHG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JPGL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JPHA4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JPHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JPHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JPHC2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JPHH1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JVGK6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JVHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JVHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JVHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880JVIG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XAGK3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XAGL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XAHB4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-D880/D880XAHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XCGL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XCGL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0Accept-Charset: utf-8',
'SAMSUNG-SGH-D880/D880XCHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XCHG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XCHI1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XDHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XDHI1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XEGJ9 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XEGK4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XEGK5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XEHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XEHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XEHG2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XEHJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D880/D880XFHD2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d880_ver1');
      }
  }



  function test_samsung_sgh_d900_ver1() {
    foreach(array(
'SAMSUNG-D900E-Bouygues/D900EAGII1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-D900E/D900EJCIE1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-D900E/D900EXAID4 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-D900E/D900EXAIK1 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-D900E/D900EXIIC8 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-D900-VODA/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900-VODA/D900AMFG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-D900/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-D900/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.06.5.0.0.0',
'SAMSUNG-SGH-D900/D900BOFH3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900/D900BOFI2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900/D900BOFJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d900_ver1');
      }
  }



  function test_samsung_sgh_d900i_ver1() {
    foreach(array(
'SAMSUNG-SGH-D900i-ORANGE/D900iABGF2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-D900i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.12.0',
'SAMSUNG-SGH-D900i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-D900i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-D900i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.06.5.0.0.0',
'SAMSUNG-SGH-D900i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-SGH-D900i/D900iACGE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900i/D900iAMGC2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900i/D900iAMGF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-D900i/D900iBTGE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d900i_ver1');
      }
  }



  function test_samsung_sgh_d980_ver1() {
    foreach(array(
'SAMSUNG-SGH-D980/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-D980/D980BDHK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-D980/D980JVIB2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-D980/D980XAHJ7 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-D980/D980XAIB1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-D980/D980XCHJ3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-D980/D980XFHK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_d980_ver1');
      }
  }



  function test_samsung_sgh_e200_ver1() {
    foreach(array(
'SAMSUNG-SGH-E200/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E200/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Untrusted/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e200_ver1');
      }
  }



  function test_samsung_sgh_e210_ver1() {
    foreach(array(
'SEC-SGHE210/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e210_ver1');
      }
  }



  function test_samsung_sgh_e215l_ver1() {
    foreach(array(
'SEC-SGHE215L/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SEC-SGHE215L/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e215l_ver1');
      }
  }



  function test_samsung_sgh_e236_ver1() {
    foreach(array(
'SAMSUNG-SGH-E236/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e236_ver1');
      }
  }



  function test_samsung_sgh_e250_ver1() {
    foreach(array(
'SAMSUNG-SGH-E250-ORANGE/E250BVGA7 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250-ORANGE/E250BVGC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250-ORANGE/E250DBVGG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250-ORANGE/E250DBVHE2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250-ORANGE/E250DCIGJ3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250-ORANGE/E250DCIGK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250-VODA/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.12.0',
'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-E250/E250BOGA3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250/E250DAAHH2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250/E250DBFGI3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250/E250DBOGH4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250/E250DBOIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250/E250DXEGG2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250/E250MMGC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/AMGC1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/AMGK2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/BUGB2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/BUGC2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/BUGD1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/DAMGK1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/DBUGK1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/DBUHC1/1.0 Java/VF-Java/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'Vodafone/1.0/SAMSUNG-SGH-E250V/DBUHC1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-M200/AMHI4/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e250_ver1');
      }
  }



  function test_samsung_sgh_e250i_ver1() {
    foreach(array(
'SAMSUNG-SGH-E250i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250IDDIB3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250IDDIB3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-SGH-E250i/E250IDDIF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250IDDIG3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iBOID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iCWIH1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJAIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJAIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-E250i/E250iJAIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-E250i/E250iJBIB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJBIB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-E250i/E250iJBIB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-E250i/E250iJCIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJDIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJNIF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJPIB4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJPIB4 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-E250i/E250iJPIC2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJPIG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJPIH2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJPIH3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJPIK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJVIB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJVIG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJVIH2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iJVII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iNAID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iPJIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iSVIG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXAIA5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXAIB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXAIB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-E250i/E250iXAIG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXDIA6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXEIA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXEIA5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXEIG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXFIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXIIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXIID1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXIIG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E250i/E250iXIIG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-E250i/E250iYAII1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-E250i/BAIC2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e250i_ver1');
      }
  }



  function test_samsung_sgh_e256_ver1() {
    foreach(array(
'SAMSUNG-SGH-E256/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E256/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e256_ver1');
      }
  }



  function test_samsung_sgh_e335_ver1() {
    foreach(array(
'SAMSUNG-SGH-E335/E335UVEE1 UP.Browser/6.2.2.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e335_ver1');
      }
  }



  function test_samsung_sgh_e340_ver1() {
    foreach(array(
'SAMSUNG-SGH-E340/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E340/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e340_ver1');
      }
  }



  function test_samsung_sgh_e350e_ver1() {
    foreach(array(
'SAMSUNG-SGH-E350E/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e350e_ver1');
      }
  }



  function test_samsung_sgh_e380_ver1() {
    foreach(array(
'SAMSUNG-SGH-E380/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E380/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e380_ver1');
      }
  }



  function test_samsung_sgh_e490_ver1() {
    foreach(array(
'SEC-SGHE490/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e490_ver1');
      }
  }



  function test_samsung_sgh_e496_ver1() {
    foreach(array(
'SEC-SGHE496/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHE496/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e496_ver1');
      }
  }



  function test_samsung_sgh_e690_ver1() {
    foreach(array(
'SAMSUNG-SGH-E690/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e690_ver1');
      }
  }



  function test_samsung_sgh_e730_ver1() {
    foreach(array(
'SAMSUNG-SGH-E730/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E730/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-E730/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e730_ver1');
      }
  }



  function test_samsung_sgh_e736_ver1() {
    foreach(array(
'SAMSUNG-SGH-E736/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e736_ver1');
      }
  }



  function test_samsung_sgh_e738_ver1() {
    foreach(array(
'SAMSUNG-SGH-E738/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU2OTAxMDAwNzExOTQ0 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e738_ver1');
      }
  }



  function test_samsung_sgh_e848_ver1() {
    foreach(array(
'SAMSUNG-SGH-E848/1.0 Release/2.21.2007 Browser/NetFront3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU2NTQzMDEyNDI5ODE2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e848_ver1');
      }
  }



  function test_samsung_sgh_e906_ver1() {
    foreach(array(
'SEC-SGHE906/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e906_ver1');
      }
  }



  function test_samsung_sgh_e950_ver1() {
    foreach(array(
'SEC-SGHE950/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_e950_ver1');
      }
  }



  function test_samsung_sgh_f110_ver1() {
    foreach(array(
'SAMSUNG-SGH-F110/F110AYHF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-F110/F110BXHJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-F110/F110XAHD2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f110_ver1');
      }
  }



  function test_samsung_sgh_f210_ver1() {
    foreach(array(
'SEC-SGHF210/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHF210/BOGH3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f210_ver1');
      }
  }



  function test_samsung_sgh_f210l_ver1() {
    foreach(array(
'SEC-SGHF210L/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHF210L/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f210l_ver1');
      }
  }



  function test_samsung_sgh_f250_ver1() {
    foreach(array(
'SAMSUNG-SGH-F250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-F250/F250BDHA3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250JAHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250JAHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-F250/F250JBHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250JBHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-F250/F250JBHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-F250/F250JCHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250JDHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250POHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250XAGL4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250XAHA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250XCGL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250XEGL6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250/F250XEHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f250_ver1');
      }
  }



  function test_samsung_sgh_f250l_ver1() {
    foreach(array(
'SAMSUNG-SGH-E250L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F250L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f250l_ver1');
      }
  }



  function test_samsung_sgh_f270_ver1() {
    foreach(array(
'SAMSUNG-SGH-F270/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-F270/F270DDHG6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F270/F270DDIF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f270_ver1');
      }
  }



  function test_samsung_sgh_f275l_ver1() {
    foreach(array(
'SAMSUNG-SGH-F265L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-F275L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f275l_ver1');
      }
  }



  function test_samsung_sgh_f400_ver1() {
    foreach(array(
'SAMSUNG-SGH-F400',
'SAMSUNG-SGH-F400/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F400/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-F400/BVHE3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F400/BVHG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F400/BVHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F408/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f400_ver1');
      }
  }



  function test_samsung_sgh_f480_ver1() {
    foreach(array(
'SAMSUNG-SGH-F480-ORANGE/F480ABHI1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480ABIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480AFHI1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480AFHJ1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480AFIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480BKIA2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480BNHI1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480BNIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480BVHE2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-ORANGE/F480BVHF2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480AEHE2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480AEHE2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/1.1',
'SAMSUNG-SGH-F480-Vodafone/F480AEHH2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480AEHJ1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480AMIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480AUHG2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480AUHK1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480AUIA2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480BAIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480BMHH2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480BUHE2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480BUHG2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480BUHG3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480BUHK1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480JBHG2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480-Vodafone/F480NDHE2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-F480/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-F480/F480ADHD3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480ADHG1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480ADHI1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480ADIA1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AGHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AGHH5 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AGIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AGIC1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AIHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AIHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-F480/F480AIHF2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AIHF2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-F480/F480AIHJ1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AIHJ1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-F480/F480AKIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AOHE4 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480AOIC1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480BGHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480BGHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-F480/F480BOHE3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480BOHH3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480BOHL1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480BXHJ2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480COIA1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480CWHH2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480CXHG1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDHF1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDHF2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDHF3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDHH1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDHI1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDHK1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDHK3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDHL1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DDIB2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DFIA1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DFID1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DTHL3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DTIA1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480DTID1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480JCIC1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480JCIC1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-F480/F480JHHG4 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480JHHH2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480JHHK3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480JIHH2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480JIHK3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480JJIB2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480MBHL3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480MBIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480MNHI1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480MNID1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480NAIA3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480NSHH3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480NSIA1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480PEIC1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480PIHJ2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480PIIC1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480PMHJ2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480PMIA2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480POHF1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480POHF1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-F480/F480POIA2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480POIA2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-F480/F480REHH2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480SXHJ1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XBHH5 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XBIA1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XEHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XEHF3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XEHJ1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XEIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHD9 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHDA SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHE7 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHE7 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1(REAL IP: 212.183.140.100)',
'SAMSUNG-SGH-F480/F480XXHE7 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1(REAL IP: 212.183.140.33)',
'SAMSUNG-SGH-F480/F480XXHF5 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHF7 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHH3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHI1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHJ4 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXHL3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-F480/F480XXIC3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F480XXII1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F48HBHHK2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F48HPOHK1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F48HPOIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480/F48RXXHI1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f480_ver1');
      }
  }



  function test_samsung_sgh_f480i_ver1() {
    foreach(array(
'SAMSUNG-SGH-F480I-Vodafone/AEIJ2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480I-Vodafone/BUII2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480I-Vodafone/BUIJ2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480I-Vodafone/BUIL3 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480I/1.0 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480I/BOIG2 SHP/VPP/R5 NetFront/3.5 NexPlayer/2.9.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/1.0 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/ADIH3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/AOII2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/CEIH2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/DDIF5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/DDIG1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/DDIG1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-F480i/DDII4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/JBIG1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/JBIG1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'SAMSUNG-SGH-F480i/JBIG1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-F480i/JCIG1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/JPIG4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/JPIH1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/JPIK1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/JPJB1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/JVIG5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/JVIH1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/MBIG3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/MMIL2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/NSIH2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/PEIG5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/POIG5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/POIH4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/POII1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/REJB1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XEIH4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XEIK1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXIG6 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXIH5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXIH9 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXII2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXII2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-F480i/XXII4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXIK2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXIL2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXJA1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F480i/XXJA2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f480i_ver1');
      }
  }



  function test_samsung_sgh_f480l_ver1() {
    foreach(array(
'SAMSUNG-SGH-F480L/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f480l_ver1');
      }
  }



  function test_samsung_sgh_f480t_ver1() {
    foreach(array(
'SAMSUNG-SGH-F480T/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f480t_ver1');
      }
  }



  function test_samsung_sgh_f490_ver1() {
    foreach(array(
'SAMSUNG-SGH-F490-ORANGE/F490AFHB3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490-ORANGE/F490AFHD1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490-Vodafone/F490AEHB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490-Vodafone/F490AEHD1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490-Vodafone/F490BUHB2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490/F490AGHB2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490/F490XEHB2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490/F490XXHB5 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490/F490XXHC2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490/F490XXHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F490/F490XXHF1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_f490_ver1');
      }
  }



  function test_samsung_sgh_g400_ver1() {
    foreach(array(
'SAMSUNG-SGH-G400/G400AIHG2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G400/G400AIHJ2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G400/G400XXHG2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G400L/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G808/1.0 SHP/VPP/R5 NetFront/3.4 Qtv/5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_g400_ver1');
      }
  }



  function test_samsung_sgh_g600_ver1() {
    foreach(array(
'SAMSUNG-SGH-G600-VODA/G600ACGH1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600-VODA/G600ACGJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600-VODA/G600ACGL1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600-VODA/G600ACHF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-G600/G600AAGH1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600ABGI1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600ABGL1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600ABGL1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'SAMSUNG-SGH-G600/G600ABHF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600ADGG2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600ADGL1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600ADHD1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600ASGL1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600AYGI1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600AYHD1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600BIGH1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600BIHF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600BOGK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600BOHG2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600CBGK2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600DDGJ4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600GADHE4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600GAYHE2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600JAGL2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600JBGL2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600JBGL2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-G600/G600JCGL2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600JCGL2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-G600/G600JCGL2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-G600/G600JDGL2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600JVGJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600MSGH2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600MSHF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XAGH2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XAGJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XAGL1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XAHE1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XAHJ1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XBGH5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XCHE1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-G600/G600XEGH3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XEGJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XEHE1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XFGJ3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-G600/G600XFHF1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_g600_ver1');
      }
  }



  function test_samsung_sgh_g800_ver1() {
    foreach(array(
'SAMSUNG-SGH-G800/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/ACGJ2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/ACHB2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/ADGL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/ADHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/AOHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/BHGK1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/BOGK1 SHP/VPP/R5 NetFront/3.4 Qtv/5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/BOHB3 SHP/VPP/R5 NetFront/3.4 Qtv/5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/CEGK1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/DDHA1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/DDHH1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/JAGL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/JBGL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/JBGL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-G800/JCGL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/JDGL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/JDGL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-G800/JVGL2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/MSGK2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/XEHA1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/XXGK3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/XXHA3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/XXHA6 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-G800/XXHA6 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-G800/XXHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_g800_ver1');
      }
  }



  function test_samsung_sgh_i200_ver1() {
    foreach(array(
'SAMSUNG-SGH-i200-ORANGE/BVHI1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-i200/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-i200/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone)',
'SAMSUNG-SGH-i200/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i200_ver1');
      }
  }



  function test_samsung_sgh_i450_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/AIGI4 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/AIHD3 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/DBGL3 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/DDHB4 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/DDHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/DDHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/DZHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/JAGL4 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/JAGL4 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/JCGL4 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/JPGL3 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/JVGL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/XEGL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/XXHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i450/XXHC2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'SAMSUNGSGH-i450',
'Vodafone/1.0/SamsungS3500/S3500BUIB3 Browser/NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SamsungS3500/S3500BUIC1 Browser/NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SamsungSGH-i450/i450BUHD1 Java/VF-Java/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Vodafone/1.0/SamsungSGHI620V/I620BUGG3 Browser/Opera/8.65 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i450_ver1');
      }
  }



  function test_samsung_sgh_i455_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i455/UMHA3 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i455_ver1');
      }
  }



  function test_samsung_sgh_i520_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i520V/BUGD9 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i520_ver1');
      }
  }



  function test_samsung_sgh_i550_ver1_subua413() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung-SGH-i550/AOGL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/AIGI4 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/AKHA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/DBGL3 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/DBHD2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/DDHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/DZHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/JPGL3 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/JPHH2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/JTHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/JVHB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/XEGK3 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Samsung/SGH-i550/XXHA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i550_ver1_subua413');
      }
  }



  function test_samsung_sgh_i560_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 1.0/SamsungSGHi560/I560JAHD2 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 1.0/SamsungSGHi560/I560JCHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 1.0/SamsungSGHi560/I560JDHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Vodafone/1.0/SamsungSGHi560/I560AEHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Vodafone/1.0/SamsungSGHi560/I560BUGJ5 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Vodafone/1.0/SamsungSGHi560/I560BUGK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Vodafone/1.0/SamsungSGHi560/I560JBHB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i560_ver1');
      }
  }



  function test_samsung_sgh_i600_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) SAMSUNG-SGH-i600/WM534',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) SAMSUNG-SGH-i600/WM534',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) SAMSUNG-SGH-i600V/1.0',
'SAMSUNG-SGH-i600/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'SAMSUNG-SGH-i600/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8)',
'SAMSUNG-SGH-i600/WM534 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8)',
'SAMSUNG-SGH-i600TIM/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i600_ver1');
      }
  }



  function test_samsung_sgh_i601_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) SAMSUNG-SGH-i601/WM534'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i601_ver1');
      }
  }



  function test_samsung_sgh_i607_ver1() {
    foreach(array(
'SAMSUNG-SGH-I607/I607FG1 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 320x240)',
'SAMSUNG-SGH-I607/UCHA1 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'SAMSUNG-SGH-I607/UCHA1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i607_ver1');
      }
  }



  function test_samsung_sgh_i616_ver1() {
    foreach(array(
'SAMSUNG-SGH-I616/1.0 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-I616/1.0 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i616_ver1');
      }
  }



  function test_samsung_sgh_i617_ver1() {
    foreach(array(
'SAMSUNG-SGH-I617/1.0 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-I617/1.0 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'SAMSUNG-SGH-I617/UCHH2 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-I617/UCHJ1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-I617/UCHJ1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-I617/UCIB1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i617_ver1');
      }
  }



  function test_samsung_sgh_i620_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) SEC-SGHI620/1.0',
'SEC-SGHI620/1.0 Browser/Opera/8.65 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i620_ver1');
      }
  }



  function test_samsung_sgh_i620v_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Vodafone/1.0/SamsungSGHI620V/I620BUGFA'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i620v_ver1');
      }
  }



  function test_samsung_sgh_i627_ver1() {
    foreach(array(
'SAMSUNG-SGH-I627/UCIC2 Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i627_ver1');
      }
  }



  function test_samsung_sgh_i637_ver1() {
    foreach(array(
'SAMSUNG-SGH-I637/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-I637/UCID4 Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-I637/UCIJ2 Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'SAMSUNG-SGH-I637/UCIJ2; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14812; U; en-US) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i637_ver1');
      }
  }



  function test_samsung_sgh_i640v_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) SAMSUNG-SGH-i640V/BUGI4',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) SAMSUNG-SGH-i640V/BUGJ2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i640v_ver1');
      }
  }



  function test_samsung_sgh_i710_ver1() {
    foreach(array(
'SAMSUNG-SGH-i710/MSIE4.01/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i710_ver1');
      }
  }



  function test_samsung_sgh_i718_ver1() {
    foreach(array(
'SAMSUNG-SGH-i718/MSIE4.01/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8)',
'SAMSUNG-SGH-i908E_CMCC/1.0 Release/03.07 Browser/IE6 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i718_ver1');
      }
  }



  function test_samsung_sgh_i780_ver1() {
    foreach(array(
'SAMSUNG-SGH-i780/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-i780/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)',
'SAMSUNG-SGH-i780/1.0 (compatible; MSIE 6.0; Windows CE; PPC) Opera 8.65',
'SAMSUNG-SGH-i780/1.0 (compatible; MSIE 6.0; Windows CE; PPC) Opera 8.65 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-i780ORANGE/AFGK3 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)',
'SAMSUNG-SGH-i780ORANGE/BVGK3 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)',
'SAMSUNG-SGH-i780TIM/AIHA3 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)',
'SAMSUNG-SGH-i780TIM/PAIHI4 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i780_ver1');
      }
  }



  function test_samsung_sgh_i900_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/ACHH3',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/ACHJ2',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/AEHG4',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/AEHH2',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/AMHJ1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/BAHK2',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/JBHG5',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/JBHH1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/JBHH1 UP.Link/6.3.1.13.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/MJHJ2',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SAMSUNG-SGH-i900V/SPHH1',
'SAMSUNG-SGH-i900/1.0 (Windows NT 5.1; U; en) Opera 9.5',
'SAMSUNG-SGH-i900/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-i900/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-i900/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-i900/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-i900/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'SAMSUNG-SGH-i900/1.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5)',
'SAMSUNG-SGH-i900/1.0 (compatible; MSIE 6.0; Windows CE; PPC) Opera 9.5',
'SAMSUNG-SGH-i900/1.0 Opera 9.5',
'SAMSUNG-SGH-i900/1.0 Opera 9.5 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-i900/1.0 Opera 9.5 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-i900/1.0 Opera 9.5 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-i900/AKHH5 profile/MIDP-2.0 configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-i900/AKHJ1 profile/MIDP-2.0 configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-i900/AKIC1profile/MIDP-2.0 configuration/CLDC-1.1 Opera 9.5',
'SAMSUNG-SGH-i900/BOHH5 profile/MIDP-2.0 configuration/CLDC-1.1 Opera 9.5',
'SAMSUNG-SGH-i900/BSHI1 profile/MIDP-2.0 configuration/CLDC-1.1 Opera 9.5',
'SAMSUNG-SGH-i900/JHID1',
'SAMSUNG-SGH-i900Orange/AFHH1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-i900Orange/AFHH1 Opera 9.5',
'SAMSUNG-SGH-i900Orange/BVHH1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i900_ver1');
      }
  }



  function test_samsung_sgh_i907_ver1() {
    foreach(array(
'SAMSUNG-SGH-I907/UCHI5 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'SAMSUNG-SGH-I907/UCID1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_i907_ver1');
      }
  }



  function test_samsung_sgh_j150_ver1() {
    foreach(array(
'SAMSUNG-SGH-J150',
'SAMSUNG-SGH-J150/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-SGH-J150/J150JPHD4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150JPIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150JVHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150JVIB1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150MAHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150PJHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150XAHI1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150XEHD3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150XFHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150/J150XFHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150B/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J150B/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_j150_ver1');
      }
  }



  function test_samsung_sgh_j210_ver1() {
    foreach(array(
'SAMSUNG-SGH-J210/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J210/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Untrusted/1.0',
'SAMSUNG-SGH-J210/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-J210/J210XEHG2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_j210_ver1');
      }
  }



  function test_samsung_sgh_j700_ver1() {
    foreach(array(
'SAMSUNG-SGH-J700-ORANGE/J700ABHA2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700-ORANGE/J700ABHB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700-ORANGE/J700BKHB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700-ORANGE/J700BNHF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700-ORANGE/J700BVHB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XAHA6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XAHD1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XDHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XEHA3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XEHB3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XEHK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XFHA3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XFHE1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700/J700XIHG1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J700L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_j700_ver1');
      }
  }



  function test_samsung_sgh_j700v_ver1() {
    foreach(array(
'Vodafone/1.0/SAMSUNG-SGH-J700V/AEHE1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/AMHA3/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/AMHB2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/BUHA3/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/BUHG1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700V/CDHB1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700i/BUIC2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700i/BUIE2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SAMSUNG-SGH-J700i/JBID1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_j700v_ver1');
      }
  }



  function test_samsung_sgh_j706_ver1() {
    foreach(array(
'SAMSUNG-SGH-J706/ Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-J706/ Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_j706_ver1');
      }
  }



  function test_samsung_sgh_j750_ver1() {
    foreach(array(
'SAMSUNG-SGH-J165L/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J750/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J750/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'SAMSUNG-SGH-J750/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-J750/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-J750/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'SAMSUNG-SGH-J750BVGG1/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J750MJGJ4/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J750MJGK4/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J750MJHL1/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_j750_ver1');
      }
  }



  function test_samsung_sgh_j800_ver1() {
    foreach(array(
'SAMSUNG-SGH-J800/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/BGHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/BGHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-J800/DDHH6 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/DDHI2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/DDHI2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-J800/DDIB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/DDIC2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/DDID4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/DDIJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/DWID1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/H1_T1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/JVHG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/REIG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J800/XXIA1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-J808/ZHHH1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_j800_ver1');
      }
  }



  function test_samsung_sgh_l170_ver1() {
    foreach(array(
'SAMSUNG-SGH-L170/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L170/L170XBHB3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L170/L170XXHC2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L170/L170XXHD1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L170/L170XXHD1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_l170_ver1');
      }
  }



  function test_samsung_sgh_l700_ver1() {
    foreach(array(
'SAMSUNG-B2700/BDHJ2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/BDIB2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/DTIB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/DTIG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/DTIK1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/MBIE5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/MNIA2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/NEIB2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/NSIB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/SXIB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/XBHJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/XBIB2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/XHIB3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-B2700/XXIB2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-L700/AKHI2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/AVHI4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/BGHK2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/BGHK2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-L700/BOHH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/CDHH5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/CGIC1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/CJHH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/CSHI3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/CXHG4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/CXHL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDHJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDHJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-L700/DDIA2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDIA3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDIC2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDIC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDIC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-L700/DDIC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0, SAMSUNG-SGH-L700/DDIC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0, SAMSUNG-SGH-L700/DDIC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0, SAMSUNG-SGH-L700/DDIC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0, SAMSUNG-SGH-L700/DDIC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0, SAMSUNG-SGH-L700/DDIC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-L700/DDID4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDID4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-L700/DDII1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDIJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDJA1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/DDJE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JAHH1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JBHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JBHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-L700/JCHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JPHI3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JPIA1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JPIC1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JPIC2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JTIB3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JTIC1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JVHH4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JVHI2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JVHI4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JVHL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JVIE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/JVII1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/MAHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/MAIA1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/MIHH3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XEHG3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XEHG3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-L700/XFHG2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XFHH3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XXHE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XXHF5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XXHH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XXHH4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XXHH6 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L700/XXIB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_l700_ver1');
      }
  }



  function test_samsung_sgh_l708_ver1() {
    foreach(array(
'SAMSUNG-SGH-J808/ZTHH1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_l708_ver1');
      }
  }



  function test_samsung_sgh_l760_ver1() {
    foreach(array(
'SAMSUNG-SGH-L760-Vodafone/AEGG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760-Vodafone/AEHC2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760-Vodafone/BUGH1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760-Vodafone/BUHC1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/AIGH3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/AIGH3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-L760/AIHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/AIHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-L760/AOGG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/BBGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/BBHC2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/BGGG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/BGGG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SAMSUNG-SGH-L760/BNHA2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/CEGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/DFHB2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/DTGI2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JAGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JAGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-L760/JAGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-L760/JAHE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JAHE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-L760/JBGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JBGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-L760/JBGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-L760/JBHE2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JBHE2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-L760/JBHE2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'SAMSUNG-SGH-L760/JCGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JCHE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JPGL1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JPGL3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JPHC2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JVGI6 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JVHE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/JVII1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/MKGK1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/MSGJ4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/REHD1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/XXGH2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/XXGJ4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/XXGK1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/XXHA5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L760/XXHC3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_l760_ver1');
      }
  }



  function test_samsung_sgh_l768_ver1() {
    foreach(array(
'SAMSUNG-SGH-L768/ZUHE3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_l768_ver1');
      }
  }



  function test_samsung_sgh_l770_ver1() {
    foreach(array(
'SAMSUNG-SGH-F480I-ORANGE/BVIJ1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L770-ORANGE/BVHD6 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L770-ORANGE/BVHJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L770-Vodafone/L770BUHE1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L770-Vodafone/L770BUIB1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L770/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_l770_ver1');
      }
  }



  function test_samsung_sgh_l810v_ver1() {
    foreach(array(
'SAMSUNG-SGH-L810-Vodafone/L810ACIB1 SHP/VPP/R5 Opera/9.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L810-Vodafone/L810BUHEC SHP/VPP/R5 Opera/9.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L810-Vodafone/L810BUHF2 SHP/VPP/R5 Opera/9.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L810-Vodafone/L810BUHG3 SHP/VPP/R5 Opera/9.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L810-Vodafone/L810BUHG6 SHP/VPP/R5 Opera/9.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L810-Vodafone/L810BUHI1 SHP/VPP/R5 Opera/9.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-L810-Vodafone/L810RNHH3 SHP/VPP/R5 Opera/9.5 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_l810v_ver1');
      }
  }



  function test_samsung_sgh_l870_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Samsung/SGH-L870/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_l870_ver1');
      }
  }



  function test_samsung_sgh_m110_ver1() {
    foreach(array(
'SAMSUNG-SGH-M110/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_m110_ver1');
      }
  }



  function test_samsung_sgh_m120_ver1() {
    foreach(array(
'SEC-SGHM120/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_m120_ver1');
      }
  }



  function test_samsung_sgh_m140l_ver1() {
    foreach(array(
'SAMSUNG-SGH-M140/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M140/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-M140L/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_m140l_ver1');
      }
  }



  function test_samsung_sgh_m150_ver1() {
    foreach(array(
'SAMSUNG-SGH-M150/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M150/M150XAHH4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M150/M150XAHH7 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M150/M150XAHJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M150/M150XEHH6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M150/M150XFHH7 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M150/M150XFHJ2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M150/M150XFHJ2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0 Untrusted/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_m150_ver1');
      }
  }



  function test_samsung_sgh_m200_ver1() {
    foreach(array(
'SAMSUNG-SGH-M200/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200ANIA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200DDHK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200DDHL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200DDID2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200DDIF1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200DDIF2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200DDIF3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200DDIF3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Untrusted/1.0',
'SAMSUNG-SGH-M200/M200XAHJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200XAIA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200XCHJ1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200XEHJ2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M200/M200XFHK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_m200_ver1');
      }
  }



  function test_samsung_sgh_m610_ver1() {
    foreach(array(
'SAMSUNG-SGH-M610/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M610/M610CWHH1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M610/M610CWHI2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M610/M610XDGJ2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M610/M610XEGI4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M610/M610XFGI3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-M610/M610XFGK1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_m610_ver1');
      }
  }



  function test_samsung_sgh_m628_ver1() {
    foreach(array(
'SAMSUNG-SGH-M628/1.0 Release/2.28.2008 Browser/Openwave6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_m628_ver1');
      }
  }



  function test_samsung_sgh_p200_ver1() {
    foreach(array(
'SAMSUNG-SGH-E250i-ORANGE/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-P200-ORANGE/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-P200/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_p200_ver1');
      }
  }



  function test_samsung_sgh_p250_ver1() {
    foreach(array(
'SAMSUNG-SGH-P250-ORANGE/P250BVHI2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_p250_ver1');
      }
  }



  function test_samsung_sgh_p960_ver1() {
    foreach(array(
'SAMSUNG-SGH-P960/P960ASHE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_p960_ver1');
      }
  }



  function test_samsung_sgh_s366_ver1() {
    foreach(array(
'SAMSUNG-SGH-S366/ Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_s366_ver1');
      }
  }



  function test_samsung_sgh_t109_ver1() {
    foreach(array(
'SAMSUNG-SGH-T109/T109UVHG7 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t109_ver1');
      }
  }



  function test_samsung_sgh_t139_ver1() {
    foreach(array(
'SAMSUNG-SGH-T139/T139UVIL3 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-T139/T139UVJC1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t139_ver1');
      }
  }



  function test_samsung_sgh_t201g_ver1() {
    foreach(array(
'SAMSUNG-SGH-T201G/T201UDIB2[TF011849007942649002000019077238793] UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t201g_ver1');
      }
  }



  function test_samsung_sgh_t229_ver1() {
    foreach(array(
'SAMSUNG-SGH-T229/T229UVHC4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-T229/T229UVHC4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t229_ver1');
      }
  }



  function test_samsung_sgh_t239_ver1() {
    foreach(array(
'SAMSUNG-SGH-T239/T239UVIC6 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t239_ver1');
      }
  }



  function test_samsung_sgh_t301g_ver1() {
    foreach(array(
'SAMSUNG-SGH-T301G/T301UDIL1 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF011844004587844001715816189465472] UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t301g_ver1');
      }
  }



  function test_samsung_sgh_t349_ver1() {
    foreach(array(
'SAMSUNG-SGH-T349/T349UVIC7 NetFront/3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t349_ver1');
      }
  }



  function test_samsung_sgh_t401g_ver1() {
    foreach(array(
'SAMSUNG-SGH-T401G/T401UDIH5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987030362741011465017063426362] UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDIH5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987030646846001732319165055372] UP.Link/6.3.1.20.06.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDIH5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987031304320000005012173581469]',
'SAMSUNG-SGH-T401G/T401UDIH5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987031448325003000018324037375]',
'SAMSUNG-SGH-T401G/T401UDIH5 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987031708165003000012055678327]',
'SAMSUNG-SGH-T401G/T401UDIJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987032449678000720014173790499] UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDIJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987032507145000372018034685972] UP.Link/6.3.1.20.06.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDIJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987032507145000982018034685972] UP.Link/6.3.1.20.06.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDIJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987032507145001797018034685972] UP.Link/6.3.1.20.06.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDIJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987032621631002390014145348198] UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDIJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987032791525001445019185718591] UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDIJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356987033066109002365017069575445] UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDJD2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356986030286728000000014783614914] UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDJD2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356986030420285000000015714380714] UP.Link/6.3.1.20.0',
'SAMSUNG-SGH-T401G/T401UDJD2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356986030652572000000018484691793]',
'SAMSUNG-SGH-T401G/T401UDJD2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1[TF356986030973903000000014177706987] UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t401g_ver1');
      }
  }



  function test_samsung_sgh_t429_ver1() {
    foreach(array(
'SAMSUNG-SGH-T429/T429UVGG2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-T429/T429UVHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t429_ver1');
      }
  }



  function test_samsung_sgh_t509_ver1() {
    foreach(array(
'SAMSUNG-SGH-T509/T509UVFC4 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t509_ver1');
      }
  }



  function test_samsung_sgh_t509s_ver1() {
    foreach(array(
'SAMSUNG-SGH-T509S/T509UVFG2 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-T509S/T509UVGJ1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-T509S/T509UVGJ1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.16.0',
'SAMSUNG-SGH-T509S/T509UVID1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t509s_ver1');
      }
  }



  function test_samsung_sgh_t519_ver1() {
    foreach(array(
'SAMSUNG-SGH-T519/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 NetFront/3.2',
'SAMSUNG-SGH-T519/T519UVFG8 Profile/MIDP-2.0 Configuration/CLDC-1.1 NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t519_ver1');
      }
  }



  function test_samsung_sgh_t559_ver1() {
    foreach(array(
'SAMSUNG-SGH-T559/T559UVIFA SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-T559/T559UVIFA SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t559_ver1');
      }
  }



  function test_samsung_sgh_t619_ver1() {
    foreach(array(
'SAMSUNG-SGH-T619/T619UVFG8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t619_ver1');
      }
  }



  function test_samsung_sgh_t629_ver1() {
    foreach(array(
'SAMSUNG-SGH-T629/T629UVFG8 Profile/MIDP-2.0 Configuration/CLDC-1.1 NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t629_ver1');
      }
  }



  function test_samsung_sgh_t629_ver1_subr() {
    foreach(array(
'SAMSUNG-SGH-T629R/T629UVFL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t629_ver1_subr');
      }
  }



  function test_samsung_sgh_t636_ver1() {
    foreach(array(
'SAMSUNG-SGH-T636/UEHI1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t636_ver1');
      }
  }



  function test_samsung_sgh_t659_ver1() {
    foreach(array(
'SAMSUNG-SGH-T359/T359UVJE1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-T659/T659UVIG9 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t659_ver1');
      }
  }



  function test_samsung_sgh_t746_ver1() {
    foreach(array(
'SAMSUNG-SGH-T746/T746BMIH6 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-T746/T746UGJB5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t746_ver1');
      }
  }



  function test_samsung_sgh_t749_ver1() {
    foreach(array(
'SAMSUNG-SGH-T749/T749UVIF3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-T749/T749UVIK1 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t749_ver1');
      }
  }



  function test_samsung_sgh_t819_ver1() {
    foreach(array(
'SAMSUNG-SGH-T819/T819UVGK4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-T819/T819UVHB2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-T819/T819_SPT8 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t819_ver1');
      }
  }



  function test_samsung_sgh_t929_ver1() {
    foreach(array(
'SAMSUNG-SGH-T929/T929UVIA2 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_t929_ver1');
      }
  }



  function test_samsung_sgh_u430_ver1() {
    foreach(array(
'SCH-U430/1.0 NetFront/3.0.22.2.12 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u430_ver1');
      }
  }



  function test_samsung_sgh_u440_ver1() {
    foreach(array(
'Samsung-SCHU440 Infraware-Polaris/6.0 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u440_ver1');
      }
  }



  function test_samsung_sgh_u600_ver1() {
    foreach(array(
'SEC-SGHU600',
'SEC-SGHU600-ORANGE/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHU600/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHU600/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SEC-SGHU600/BBOGL NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHU600/BOGC9 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHU600/BOGI1 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHU600/GBOHH NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u600_ver1');
      }
  }



  function test_samsung_sgh_u600b_ver1() {
    foreach(array(
'SEC-SGHU600B-ORANGE/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u600b_ver1');
      }
  }



  function test_samsung_sgh_u608_ver1() {
    foreach(array(
'SAMSUNG-SGH-U608/1.0 Release/1.24.2007 Browser/NetFront3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU1MzgzMDEwMzY5MTA3'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u608_ver1');
      }
  }



  function test_samsung_sgh_u700_vodafone_ver1() {
    foreach(array(
'SAMSUNG-SGH-U700-Vodafone/BUGE7 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U700-Vodafone/BUGK1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U700-Vodafone/BUGK2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U700-Vodafone/BUGL2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U700-Vodafone/BUHI2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u700_vodafone_ver1');
      }
  }



  function test_samsung_sgh_u708_ver1() {
    foreach(array(
'SAMSUNG-SGH-U708/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1/*MzU2OTE2MDEyMTA3OTMx',
'SAMSUNG-SGH-U708/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1/*MzUzODgzMDIyMzkyODkw'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u708_ver1');
      }
  }



  function test_samsung_sgh_u800_ver1() {
    foreach(array(
'SAMSUNG-SGH-U800',
'SAMSUNG-SGH-U800/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U800/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-U800/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-U800/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-U800/BOHH5 SHP/VPP/R5 NetFront/3.4 QTV5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U800/RFHH2 SHP/VPP/R5 NetFront/3.4 QTV5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u800_ver1');
      }
  }



  function test_samsung_sgh_u800e_ver1() {
    foreach(array(
'SAMSUNG-SGH-U800E/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_u800e_ver1');
      }
  }



  function test_samsung_sgh_x300_ver1() {
    foreach(array(
'SAMSUNG-SGH-X300/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x300_ver1');
      }
  }



  function test_samsung_sgh_x480_ver1() {
    foreach(array(
'SAMSUNG-SGH-X480/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x480_ver1');
      }
  }



  function test_samsung_sgh_x480c_ver1() {
    foreach(array(
'SAMSUNG-SGH-X480C/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x480c_ver1');
      }
  }



  function test_samsung_sgh_x550_ver1() {
    foreach(array(
'SAMSUNG-SGH-X550/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x550_ver1');
      }
  }



  function test_samsung_sgh_x576_ver1() {
    foreach(array(
'SAMSUNG-SGH-X576/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x576_ver1');
      }
  }



  function test_samsung_sgh_x620_ver1() {
    foreach(array(
'SAMSUNG-SAMSUNG SGH-X620/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-X620/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-X620C/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x620_ver1');
      }
  }



  function test_samsung_sgh_x640_ver1() {
    foreach(array(
'SAMSUNG-SGH-X640/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0',
'SAMSUNG-SGH-X640C/1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x640_ver1');
      }
  }



  function test_samsung_sgh_x650_ver1() {
    foreach(array(
'SAMSUNG-SGH-X650/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x650_ver1');
      }
  }



  function test_samsung_sgh_x656_ver1() {
    foreach(array(
'SAMSUNG-SGH-X656/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x656_ver1');
      }
  }



  function test_samsung_sgh_x670_ver1() {
    foreach(array(
'SAMSUNG-SGH-X670/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x670_ver1');
      }
  }



  function test_samsung_sgh_x700_ver1() {
    foreach(array(
'SAMSUNG-SGH-X700/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_x700_ver1');
      }
  }



  function test_samsung_sgh_z230_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z230/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z230/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_z230_ver1');
      }
  }



  function test_samsung_sgh_z510_ver1() {
    foreach(array(
'SGH-Z510/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgh_z510_ver1');
      }
  }



  function test_samsung_sgha137_ver1() {
    foreach(array(
'SAMSUNG-SGH-A137/A137UCHG1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-A137/A137UCHG3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgha137_ver1');
      }
  }



  function test_samsung_sgha177_ver1() {
    foreach(array(
'SAMSUNG-SGH-A107/A107UCJC4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-A177/A177UCIC3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-A177/A177UCIC3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgha177_ver1');
      }
  }



  function test_samsung_sgha437_ver1() {
    foreach(array(
'SAMSUNG-SGH-A437/A437UCHB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgha437_ver1');
      }
  }



  function test_samsung_sgha551_ver1() {
    foreach(array(
'SAMSUNG-SGH-A551/1.0 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgha551_ver1');
      }
  }



  function test_samsung_sgha657_ver1() {
    foreach(array(
'SAMSUNG-SGH-A657/A657UCIB5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sgha657_ver1');
      }
  }



  function test_samsung_sghc416_ver1() {
    foreach(array(
'SAMSUNG-SGH-C416 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghc416_ver1');
      }
  }



  function test_samsung_sghe358_ver1() {
    foreach(array(
'SAMSUNG-SGH-E358/1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1/*MzU4MTY1MDAwMDg2NzAx UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghe358_ver1');
      }
  }



  function test_samsung_sghe830_ver1() {
    foreach(array(
'SAMSUNG-SGH-E830/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E830/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.12.0',
'SAMSUNG-SGH-E830/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-E830/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 Untrusted/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghe830_ver1');
      }
  }



  function test_samsung_sghf488_ver1() {
    foreach(array(
'SAMSUNG-SGH-F488/1.0 SHP/VPP/R5 NetFront/3.4 Qtv/5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-F488/1.0 SHP/VPP/R5 NetFront/3.4 Qtv/5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1/*MzU0MDkzMDIwMTE4MDUy',
'SAMSUNG-SGH-F488/1.0 SHP/VPP/R5 NetFront/3.4 Qtv/5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1/*MzU0MDkzMDIwNzEwNTI4'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghf488_ver1');
      }
  }



  function test_samsung_sghj208_ver1() {
    foreach(array(
'SAMSUNG-SGH-J208/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z248/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghj208_ver1');
      }
  }



  function test_samsung_sghj770_ver1() {
    foreach(array(
'SAMSUNG-SGH-J770/J770AHHI2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-J770/J770AHIB1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-J770/J770XAHI2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-J770/J770XFHJ2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghj770_ver1');
      }
  }



  function test_samsung_sghm310_ver1() {
    foreach(array(
'SEC-SGHM310/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SEC-SGHM310L/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghm310_ver1');
      }
  }



  function test_samsung_sghm310v_ver1() {
    foreach(array(
'Vodafone/1.0/SamsungSGHM310V/M310BMHG1 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungSGHM310V/M310BUHE4 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungSGHM310V/M310BUHF2 Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghm310v_ver1');
      }
  }



  function test_samsung_sght329_ver1() {
    foreach(array(
'SAMSUNG-SGH-T329/T329UVFL8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght329_ver1');
      }
  }



  function test_samsung_sght456_ver1() {
    foreach(array(
'SAMSUNG-SGH-T456/ NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-T456/ NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SAMSUNG-SGH-T456/ NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0',
'SAMSUNG-SGH-T456/T456UZJB4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght456_ver1');
      }
  }



  function test_samsung_sght459_ver1() {
    foreach(array(
'SAMSUNG-SGH-T459/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-T459/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-T459/T459UVHI4 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-T459/T459UVIA1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SAMSUNG-SGH-T459/T459UVIA1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'SAMSUNG-SGH-T459/T459UVIA1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SAMSUNG-SGH-T459A/T459UEIK2 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght459_ver1');
      }
  }



  function test_samsung_sght469_ver1() {
    foreach(array(
'SAMSUNG-SGH-T469/T469UVIG4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-T469/T469UVIG4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1(REAL IP: 208.54.86.56)',
'SAMSUNG-SGH-T469W/T469UQIK5 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-T479/T479UVJE4 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght469_ver1');
      }
  }



  function test_samsung_sght539_ver1() {
    foreach(array(
'SAMSUNG-SGH-T539/T539UVGH5 Profile/MIDP-2.0 Configuration/CLDC-1.1 NetFront/3.2',
'SAMSUNG-SGH-T539/T539UVHA1 Profile/MIDP-2.0 Configuration/CLDC-1.1 NetFront/3.2',
'SAMSUNG-SGH-T539/T539UZHL2 Profile/MIDP-2.0 Configuration/CLDC-1.1 NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght539_ver1');
      }
  }



  function test_samsung_sght639_ver1() {
    foreach(array(
'SAMSUNG-SGH-T639/UVGG1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght639_ver1');
      }
  }



  function test_samsung_sght729_ver1() {
    foreach(array(
'SAMSUNG-SGH-T729/T729UVGF9 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght729_ver1');
      }
  }



  function test_samsung_sght739_ver1() {
    foreach(array(
'SAMSUNG-SGH-T739/T739UVGJ2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-T739/T739UVHB2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght739_ver1');
      }
  }



  function test_samsung_sght919_ver1() {
    foreach(array(
'SAMSUNG-SGH-T919/T919UVHI5 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sght919_ver1');
      }
  }



  function test_samsung_sghx530_ver1() {
    foreach(array(
'SEC-SGHX530/1.0',
'SEC-SGHX530/1.0 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghx530_ver1');
      }
  }



  function test_samsung_sghx566_ver1() {
    foreach(array(
'SAMSUNG-SGH-X566/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sghx566_ver1');
      }
  }



  function test_samsung_sph_i325_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Sprint:SPH-i325 320x240',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Sprint:SPH-i325 320x240'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_i325_ver1');
      }
  }



  function test_samsung_sph_ip830w_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint:SPH-ip830w; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_ip830w_ver1');
      }
  }



  function test_samsung_sph_m240_ver1() {
    foreach(array(
'Mozilla/4.0 (BREW 3.1.5; U; en-us; Samsung; SPH_M240; POLARIS/6.1/WAP) MMP/2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m240_ver1');
      }
  }



  function test_samsung_sph_m320_ver1() {
    foreach(array(
'Samsung-SPHM320 Polaris/5.0 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m320_ver1');
      }
  }



  function test_samsung_sph_m320_ver1_subua() {
    foreach(array(
'Samsung-SPHM320 Infraware-Polaris/5.01 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m320_ver1_subua');
      }
  }



  function test_samsung_sph_m330_ver1() {
    foreach(array(
'Mozilla/4.0 (BREW 3.1.5; U; en-us; Samsung; PLS_M330; POLARIS/6.1/WAP) MMP/2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (BREW 3.1.5; U; en-us; Samsung; SPH_M330; POLARIS/6.1/WAP) MMP/2.0 Configuration/CLDC-1.1',
'Samsung-SPHM330 Infraware-Polaris/6.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m330_ver1');
      }
  }



  function test_samsung_sph_m340_ver1() {
    foreach(array(
'SPH-M340/1.0 UP.Browser/7.2.7.2.510 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m340_ver1');
      }
  }



  function test_samsung_sph_m510_ver1() {
    foreach(array(
'Samsung-SPHM510 AU-MIC-M510/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m510_ver1');
      }
  }



  function test_samsung_sph_m510_ver1_subua() {
    foreach(array(
'Samsung-SPHM510 AU-OBIGO/Q04C1-1.22 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m510_ver1_subua');
      }
  }



  function test_samsung_sph_m540_ver1() {
    foreach(array(
'SPH-M540-parrot/1.0 AU-MIC/2.0 (GUI) MMP/2.0',
'SPH-M540/1.0 AU-MIC/2.0 (GUI) MMP/2.0',
'Samsung-SPHM540 Polaris/6.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Samsung-SPHM540 Polaris/6.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Samsung-SPHM540 Polaris/6.0 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m540_ver1');
      }
  }



  function test_samsung_sph_m550_ver1() {
    foreach(array(
'NetFront/3.5.1 (BREW 3.1.5; U; en-us; LG; NetFront/3.5.1/AMB) Sprint LX610 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NetFront/3.5.1 (BREW 3.1.5; U; en-us; LG; NetFront/3.5.1/WAP) Sprint LN240 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NetFront/3.5.1 (BREW 5.0.1.2; U; en-us; LG; NetFront/3.5.1/AMB) Sprint LN510 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NetFront/3.5.1 (BREW 5.0.1.2; U; en-us; LG; NetFront/3.5.1/AMB) Sprint LN510 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'NetFront/3.5.1 (BREW 5.0.2.1; U; en-us; Samsung ; NetFront/3.5.1/AMB) Sprint SPH-M570 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NetFront/3.5.1(BREW 3.1.5; U; en-us; SAMSUNG; NetFront/3.1.5/AMB) Sprint M550 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NetFront/3.5.1(BREW 3.1.5; U; en-us; SAMSUNG; NetFront/3.1.5/WAP) Sprint M350 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m550_ver1');
      }
  }



  function test_samsung_sph_m560_ver1() {
    foreach(array(
'NetFront/3.5.1(BREW 3.1.5; U; en-us; SAMSUNG; NetFront/3.1.5/AMB) Sprint M560 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m560_ver1');
      }
  }



  function test_samsung_sph_m630_ver1() {
    foreach(array(
'Samsung-SPHM630 Polaris/6.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m630_ver1');
      }
  }



  function test_samsung_sph_m800_ver1() {
    foreach(array(
'Mozilla/4.1 (U; BREW 3.1.5; en-US; Teleca/Q05A/INT)',
'Mozilla/4.1 (U; BREW 3.1.5; en-US; Teleca/Q05A/INT/SAM-M800)',
'SPH-M800/1.0 AU-MIC/2.0 (GUI) MMP/2.0',
'Samsung-SPHM800 AU-OBIGO/Q05A-3.13 MMP/2.0',
'TELECA-/2.0 (BREW 3.1.5; U; EN-US; SAMSUNG; SPH-M800; Teleca/Q05A/INT) MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m800_ver1');
      }
  }



  function test_samsung_sph_m810_ver1() {
    foreach(array(
'Samsung-SPHM810 AU-MIC-M810/2.0 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'TELECA-/2.0 (BREW 3.1.5; U; EN-US; SAMSUNG; SPH-M810; Teleca/Q05A/INT) MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m810_ver1');
      }
  }



  function test_samsung_sph_m850_ver1() {
    foreach(array(
'Opera/9.70 (BREW 4.0.3; U; en; Samsung; Opera Mobi; Presto/2.2.1/INT) Sprint M850 SprintTitan/OSGi-4.1 Profile/MIDP-2.1 Configuration/CDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m850_ver1');
      }
  }



  function test_samsung_sph_m900_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; SPH-M900)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; SPH-M900 Build/CUPCAKE) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; SPH-M900 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_m900_ver1');
      }
  }



  function test_samsung_sph_z400_ver1() {
    foreach(array(
'Samsung-SPHZ400 AU-MIC-Z400/2.0 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sph_z400_ver1');
      }
  }



  function test_samsung_spha523_ver1() {
    foreach(array(
'SPH-A523/1.0 AU-MIC/2.0 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_spha523_ver1');
      }
  }



  function test_samsung_spha640_ver1() {
    foreach(array(
'Samsung-SPHA640 AU-MIC-A640/2.0 MMP/2.0',
'Samsung-SPHA640 AU-MIC/1.1.12.0 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_spha640_ver1');
      }
  }



  function test_samsung_spha900_ver1() {
    foreach(array(
'Samsung-SPHA900 AU-MIC-A900/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Samsung-SPHA900 AU-MIC/2.0 MMP/2.0',
'Samsung-SPHA900P AU-MIC-A900P/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_spha900_ver1');
      }
  }



  function test_samsung_spha950_ver1() {
    foreach(array(
'SCH-A950 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_spha950_ver1');
      }
  }



  function test_samsung_sphm500_ver1() {
    foreach(array(
'Samsung-SPHM500 AU-MIC-M500/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Samsung-SPHM500 AU-OBIGO/Q04C1-1.17_PRE_1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sphm500_ver1');
      }
  }



  function test_samsung_sphm520_ver1() {
    foreach(array(
'Samsung-SPHM520 AU-MIC-M520/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sphm520_ver1');
      }
  }



  function test_samsung_sphm530_ver1() {
    foreach(array(
'Samsung-SPHM530 AU-OBIGO/Q04C1-1.22 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sphm530_ver1');
      }
  }



  function test_samsung_sphm610_ver1() {
    foreach(array(
'Samsung-SPHM610 AU-MIC-M610/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Samsung-SPHM610 AU-OBIGO/Q04C1-1.17 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sphm610_ver1');
      }
  }



  function test_samsung_sphm620_ver1() {
    foreach(array(
'Samsung-SPHM620 AU-MIC-M620/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_sphm620_ver1');
      }
  }



  function test_samsung_t108_ver1() {
    foreach(array(
'SAMSUNG-SGHT108/1.0 UP/4.1.19k'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_t108_ver1');
      }
  }



  function test_samsung_t309_ver1() {
    foreach(array(
'SAMSUNG-SGH-T309/T309UVEI1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_t309_ver1');
      }
  }



  function test_samsung_t419_ver1() {
    foreach(array(
'SAMSUNG-SGH-T419/T419UVHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_t419_ver1');
      }
  }



  function test_samsung_t439_ver1() {
    foreach(array(
'SAMSUNG-SGH-T439/ Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-T439/ Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.16.0',
'SAMSUNG-SGH-T439/T439UVGI7 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-T439/T439UVHC1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_t439_ver1');
      }
  }



  function test_samsung_t719_ver1() {
    foreach(array(
'SAMSUNG-SGH-T719/T719UVFF6 Profile/MIDP-2.0 Configuration/CLDC-1.1 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_t719_ver1');
      }
  }



  function test_samsung_t919_ver1() {
    foreach(array(
'SAMSUNG-SGH-T919/T919UVHL3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1',
'SAMSUNG-SGH-T919/T919UVHL3 SHP/VPP/R5 NetFront/3.5 SMM-MMS/1.2.0 profile/MIDP-2.1 configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_t919_ver1');
      }
  }



  function test_samsung_u100_ver1() {
    foreach(array(
'SEC-SGHU100/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_u100_ver1');
      }
  }



  function test_samsung_u700_ver1() {
    foreach(array(
'SAMSUNG-SGH-U700-Vodafone/AEGF1 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U700-Vodafone/AEGK2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U700/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U700/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-U700/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-U700/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-U700/AKHA2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U700/XXXXX SHP/VPP/R5 Netfront/3.4 Qtv5.3 SMS-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_u700_ver1');
      }
  }



  function test_samsung_u900_ver1() {
    foreach(array(
'SAMSUNG-SGH-U900',
'SAMSUNG-SGH-U900-Vodafone/U900AEHD6 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900BMHD7 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900BMHG3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900BUHD6 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900BUHD7 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900BUHE2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900BUHF4 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900BUHG3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900JBHE3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900JBHE3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SAMSUNG-SGH-U900-Vodafone/U900JBHE3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-U900-Vodafone/U900JBHG3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U900NDHE2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U90WBUHK3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900-Vodafone/U90WJBHK2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-U900/BOHC5 SHP/VPP/R5 NetFront/3.4 QTV5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900/BOHD2 SHP/VPP/R5 NetFront/3.4 QTV5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900/BOHL1 SHP/VPP/R5 NetFront/3.4 QTV5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900/BVHD1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900/BVHD3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900/BVHF2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900/BVHJ1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-U900T/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_u900_ver1');
      }
  }



  function test_samsung_u900l_ver1() {
    foreach(array(
'SAMSUNG-SGH-U900L/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_u900l_ver1');
      }
  }



  function test_samsung_x100_ver1() {
    foreach(array(
'SAMSUNG',
'SAMSUNG SGH-X100 UP.Browser/6.1.0.6 (GUI) MMP/1.0',
'SAMSUNG-SGH-X100/PEARL UP.Browser/6.1.0.6 (GUI) MMP/1.0',
'SAMSUNG-SGH-X100A/Pearl UP.Browser/6.1.0.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x100_ver1');
      }
  }



  function test_samsung_x460_ver1() {
    foreach(array(
'SAMSUNG-SGH-X460/1.0 UP.Browser/6.1.0.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x460_ver1');
      }
  }



  function test_samsung_x495_ver1() {
    foreach(array(
'SAMSUNG-SGH-X495/X495UVEF2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.102 (GUI) MMP/2.0',
'SAMSUNG-SGH-X495/X495UVEL1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x495_ver1');
      }
  }



  function test_samsung_x497_ver1() {
    foreach(array(
'SAMSUNG-SGH-X497/X497UCEG3 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x497_ver1');
      }
  }



  function test_samsung_x500_ver1() {
    foreach(array(
'SEC-SGHX500/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x500_ver1');
      }
  }



  function test_samsung_x510_ver1() {
    foreach(array(
'SEC-SGHX510/1.0',
'SEC-SGHX510/1.0 RAINBOW/3.01'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x510_ver1');
      }
  }



  function test_samsung_x520x_ver1() {
    foreach(array(
'SEC-SGHX520/1.0',
'SEC-SGHX520X/1.0',
'Vodafone/1.0/SamsungSGHX510V/X510BUFK3 Browser/Nokia/3.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x520x_ver1');
      }
  }



  function test_samsung_x540_ver1() {
    foreach(array(
'SAMSUNG-SGH-X540/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x540_ver1');
      }
  }



  function test_samsung_x600_ver1() {
    foreach(array(
'SAMSUNG-SGH-X600/K3 UP.Browser/6.1.0.6 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x600_ver1');
      }
  }



  function test_samsung_x630_ver1() {
    foreach(array(
'SEC-SGHX630/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x630_ver1');
      }
  }



  function test_samsung_x636_ver1() {
    foreach(array(
'SAMSUNG-SGH-X636/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x636_ver1');
      }
  }



  function test_samsung_x660_ver1() {
    foreach(array(
'SEC-SGHX660/1.0 TSS/2.5',
'SEC-SGHX660/1.0 TSS/2.5 UP.Link/6.5.0.0.0',
'SEC-SGHX660/EJ3 TSS/2.5',
'Vodafone/1.0/SamsungSGHX510V/X510BUFJ8 Browser/Nokia/3.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Vodafone/1.0/SamsungSGHX510V/X510JBFK2 Browser/Nokia/3.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Vodafone/1.0/SamsungSGHX660V/X660BUFA2/Browser/TSS/2.5 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Vodafone/1.0/SamsungSGHX660V/X660BUFD1/Browser/TSS/2.5 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Vodafone/1.0/SamsungSGHX660V/X660JBEK2/Browser/TSS/2.5 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Vodafone/SamsungSGHX660V/X660AEEK4/Browser/TSS/2.5 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x660_ver1');
      }
  }



  function test_samsung_x680v_ver1() {
    foreach(array(
'SEC-SGHX680/1.0 TSS/2.5',
'Vodafone/1.0/SamsungSGHX680V/X680BUFG4 Browser/NF/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SamsungSGHX680V/X680NBUGD2 Browser/NF/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x680v_ver1');
      }
  }



  function test_samsung_x686_ver1() {
    foreach(array(
'SEC-SGHX686/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x686_ver1');
      }
  }



  function test_samsung_x830_ver1() {
    foreach(array(
'SEC-SGHX830/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_x830_ver1');
      }
  }



  function test_samsung_z105_ver1() {
    foreach(array(
'Mozilla/SMB3(Z105)/Samsung'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z105_ver1');
      }
  }



  function test_samsung_z107_ver1() {
    foreach(array(
'SGH-Z107 SHP/VPP/R5 SMB3.1 SMM-MMS/1.1.0 profile/MIDP-2.0 configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z107_ver1');
      }
  }



  function test_samsung_z140_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z140/1.0 SHP/VPP/R5 SMB3.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z140/2.0 SHP/VPP/R5 SMB3.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z140_ver1');
      }
  }



  function test_samsung_z150_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z150/1.0 SHP/VPP/R5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z150/2.0 SHP/VPP/R5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z150_ver1');
      }
  }



  function test_samsung_z170_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z170/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z170/1.0 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-Z170/BGGE4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z170/BVGF1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z170/MJHE1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z170/NPGF2 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z170/PMGE4 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z170/RCGE3 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z170/REHB1 SHP/VPP/R5 NetFront/3.4 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z170_ver1');
      }
  }



  function test_samsung_z240_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z240/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z240/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UNTRUSTED/1.0',
'SAMSUNG-SGH-Z240/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-Z240/BVGE5 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z240/BVGG2 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z240/REHE1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z240_ver1');
      }
  }



  function test_samsung_z300_ver1() {
    foreach(array(
'SGH-Z300 SHP/VPP/R5 SMB3.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SGH-Z300 SHP/VPP/R5 SMB3.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SGH-Z300/1.0 SHP/VPP/R5 SMB3.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z300_ver1');
      }
  }



  function test_samsung_z370_ver1() {
    foreach(array(
'SGH-Z370/1.0 NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z370_ver1');
      }
  }



  function test_samsung_z400_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z400-Vodafone/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z400-Vodafone/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-Z400-Vodafone/BUFK1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z400-Vodafone/JBFK1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z400-Vodafone/JBFK1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-Z400-Vodafone/NDFK1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z400/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z400/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SAMSUNG-SGH-Z400/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'SAMSUNG-SGH-Z400/BOFG2 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z400/BOFH2 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z400_ver1');
      }
  }



  function test_samsung_z500_ver1() {
    foreach(array(
'SGH-Z500 SHP/VPP/R5 SMB3.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SGH-Z500/1.0 SHP/VPP/R5 SMB3.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z500_ver1');
      }
  }



  function test_samsung_z540_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z540/1.0 SHP/VPP/R5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z540/1.0 SHP/VPP/R5 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z540_ver1');
      }
  }



  function test_samsung_z560_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z560/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z560/BOFH1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z560_ver1');
      }
  }



  function test_samsung_z630_ver1() {
    foreach(array(
'SGH-Z630/1.0 NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z630_ver1');
      }
  }



  function test_samsung_z720_ver1() {
    foreach(array(
'SAMSUNG-SGH-Z720-Vodafone/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-Z720/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_z720_ver1');
      }
  }



  function test_samsung_zm60_ver1() {
    foreach(array(
'SGH-ZM60 SHP/VPP/R5 SMB3.1 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_zm60_ver1');
      }
  }



  function test_samsung_zv10_ver1() {
    foreach(array(
'SAMSUNG-SGH-ZV10/1.0 SHP/VPP/R5  NetFront/3.2 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-ZV10/1.0 SHP/VPP/R5  NetFront/3.2 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SAMSUNG-SGH-ZV10/1.0 SHP/VPP/R5 NetFront/3.2 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_zv10_ver1');
      }
  }



  function test_samsung_zv40_ver1() {
    foreach(array(
'SAMSUNG-SGH-ZV40-Vodafone/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-ZV40-Vodafone/BUFK1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-ZV40-Vodafone/BUFK1 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_zv40_ver1');
      }
  }



  function test_samsung_zv50_ver1() {
    foreach(array(
'SAMSUNG-SGH-ZV50-Vodafone/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_zv50_ver1');
      }
  }



  function test_samsung_zv60_ver1() {
    foreach(array(
'SAMSUNG-SGH-ZV60-Vodafone/AEGF2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-ZV60-Vodafone/BUGE3 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-ZV60-Vodafone/BUGE4 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-ZV60-Vodafone/BUGJ2 SHP/VPP/R5 NetFront/3.4 Qtv5.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'samsung_zv60_ver1');
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

  function samsungTest() {
    $this->UnitTestCase('samsung Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SamsungTest();
$test->run(new TextReporter());

?>
