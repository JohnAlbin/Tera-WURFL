<?php

/*
 * Recognising Sec devices from their user agents
 *
 */

require_once 'test_helper.php';

class SecTest extends UnitTestCase {

  var $wurfl;


  function test_sec_c100g_ver1() {
    foreach(array(
'SEC-SGHC100G/1.0 UP.Browser/5.0.5.1 (GUI)'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c100g_ver1');
      }
  }



  function test_sec_c110_ver1() {
    foreach(array(
'SEC-SGHC110/1.0 UP.Browser/6.2.0.1.155 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c110_ver1');
      }
  }



  function test_sec_c130_ver1() {
    foreach(array(
'SEC-SGHC130/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c130_ver1');
      }
  }



  function test_sec_c140_ver1() {
    foreach(array(
'SEC-SGHC140/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c140_ver1');
      }
  }



  function test_sec_c166_ver1() {
    foreach(array(
'SAMSUNG-SGH-C166/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c166_ver1');
      }
  }



  function test_sec_c170_ver1() {
    foreach(array(
'SEC-SGHC170/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c170_ver1');
      }
  }



  function test_sec_c200_ver1() {
    foreach(array(
'SEC-SGHC200'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c200_ver1');
      }
  }



  function test_sec_c210_ver1() {
    foreach(array(
'SEC-SGHC210/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c210_ver1');
      }
  }



  function test_sec_c230_ver1() {
    foreach(array(
'SEC-SGHC230/1.0',
'SEC-SGHC230/10.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c230_ver1');
      }
  }



  function test_sec_c260l_ver1() {
    foreach(array(
'SEC-SGHC260/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c260l_ver1');
      }
  }



  function test_sec_c300_ver1() {
    foreach(array(
'SEC-SGHC300/1.0',
'SEC-SGHC300/1.0 RAINBOW/3.01'
    ) as $ua) {
        $this->checkUA($ua, 'sec_c300_ver1');
      }
  }



  function test_sec_d357_ver1() {
    foreach(array(
'SEC-SGHD357, TSS/2.5, Rev 1.4'
    ) as $ua) {
        $this->checkUA($ua, 'sec_d357_ver1');
      }
  }



  function test_sec_d410_ver1() {
    foreach(array(
'SEC-SGHD410'
    ) as $ua) {
        $this->checkUA($ua, 'sec_d410_ver1');
      }
  }



  function test_sec_d720_ver1() {
    foreach(array(
'SEC-SGHD720/1.0 SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'SEC-SGHD720/1.0 SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352,gzip(gfe) (via translate.google.com)'
    ) as $ua) {
        $this->checkUA($ua, 'sec_d720_ver1');
      }
  }



  function test_sec_d730_ver1() {
    foreach(array(
'SEC-SGHD730 SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_d730_ver1');
      }
  }



  function test_sec_d800_ver1() {
    foreach(array(
'SEC-SGHD800/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_d800_ver1');
      }
  }



  function test_sec_e315_ver1() {
    foreach(array(
'SEC-SGHE315-E315UVDH1-TSS1.01',
'SEC-SGHE315-E315UVEC3-TSS1.01'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e315_ver1');
      }
  }



  function test_sec_e316_ver1() {
    foreach(array(
'SEC-SGHE316'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e316_ver1');
      }
  }



  function test_sec_e500_ver1() {
    foreach(array(
'SAMSUNG-SGH-E500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SAMSUNG-SGH-E500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e500_ver1');
      }
  }



  function test_sec_e530_ver1() {
    foreach(array(
'SEC-SGHE530/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e530_ver1');
      }
  }



  function test_sec_e600_ver1() {
    foreach(array(
'SEC-SGHE600'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e600_ver1');
      }
  }



  function test_sec_e600c_ver1() {
    foreach(array(
'SEC-SGHE600C'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e600c_ver1');
      }
  }



  function test_sec_e710_ver1() {
    foreach(array(
'SEC-SGHE710/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e710_ver1');
      }
  }



  function test_sec_e720_ver1() {
    foreach(array(
'SEC-SGHE720/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e720_ver1');
      }
  }



  function test_sec_e810_ver1() {
    foreach(array(
'SEC-SGHE810'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e810_ver1');
      }
  }



  function test_sec_e840_ver1() {
    foreach(array(
'SEC-SGHE840',
'SEC-SGHE840-ORANGE/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHE840/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHE840/1.0 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e840_ver1');
      }
  }



  function test_sec_e880_ver1() {
    foreach(array(
'SEC-SGHE880/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e880_ver1');
      }
  }



  function test_sec_e890_ver1() {
    foreach(array(
'SAMSUNG-SGH-E890/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e890_ver1');
      }
  }



  function test_sec_e900_ver1() {
    foreach(array(
'SEC-SGHE900/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHE900/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SEC-SGHE900/BOFJ1 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHE900/BOGF1 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_e900_ver1');
      }
  }



  function test_sec_j600_ver1() {
    foreach(array(
'SEC-SGHJ600',
'SEC-SGHJ600/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHJ600/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Vodafone/1.0/SamsungSGHJ600V/J600BUGG1 Browser/NF/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SamsungSGHJ600V/J600DUHC1 Browser/NF/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_j600_ver1');
      }
  }



  function test_sec_j600e_ver1() {
    foreach(array(
'SEC-SGHJ600E-ORANGE/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHJ600E/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_j600e_ver1');
      }
  }



  function test_sec_p735_ver1() {
    foreach(array(
'SEC-SGHP735-P735UVDJ2-TSS1.01'
    ) as $ua) {
        $this->checkUA($ua, 'sec_p735_ver1');
      }
  }



  function test_sec_p910_ver1() {
    foreach(array(
'SAMSUNG-SGH-P910/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1',
'SAMSUNG-SGH-P910/1.0 SHP/VPP/R5 NetFront/3.3 SMM-MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_p910_ver1');
      }
  }



  function test_sec_sgh_c161_ver1() {
    foreach(array(
'SAMSUNG-SGH-C161/1.0 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sgh_c161_ver1');
      }
  }



  function test_sec_sgh_c250_ver1() {
    foreach(array(
'SEC-SGHC250/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sgh_c250_ver1');
      }
  }



  function test_sec_sgh_c266_ver1() {
    foreach(array(
'SEC-SGHC266/1.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sgh_c266_ver1');
      }
  }



  function test_sec_sgh_e576_ver1() {
    foreach(array(
'SEC-SGHE576/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sgh_e576_ver1');
      }
  }



  function test_sec_sgh_j610_ver1() {
    foreach(array(
'SEC-SGHJ610/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sgh_j610_ver1');
      }
  }



  function test_sec_sgh_x800_ver1() {
    foreach(array(
'SEC-SGHX800/1.0 NetFront/3.2'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sgh_x800_ver1');
      }
  }



  function test_sec_sgha127_ver1() {
    foreach(array(
'SEC-SGHA127/A127UCGG5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sgha127_ver1');
      }
  }



  function test_sec_sghb200_ver1() {
    foreach(array(
'SEC-SGHB200/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghb200_ver1');
      }
  }



  function test_sec_sghb300_ver1() {
    foreach(array(
'SEC-SGHB300/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SEC-SGHB300/BOHD3 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghb300_ver1');
      }
  }



  function test_sec_sghb500_ver1() {
    foreach(array(
'SEC-SGHB500/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghb500_ver1');
      }
  }



  function test_sec_sghc520_ver1() {
    foreach(array(
'SEC-SGHC520/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghc520_ver1');
      }
  }



  function test_sec_sghd807_ver1() {
    foreach(array(
'SEC-SGHD807/1.0 TSS/2.5'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghd807_ver1');
      }
  }



  function test_sec_sghe790_ver1() {
    foreach(array(
'SEC-SGHE790/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghe790_ver1');
      }
  }



  function test_sec_sghm300_ver1() {
    foreach(array(
'SEC-SGHM300/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SEC-SGHM300/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.0.0.0',
'SEC-SGHM300/BOGD4 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungSGHM300V/M300AUGG2/Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'Vodafone/1.0/SamsungSGHM300V/M300BUGF3/Browser/Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghm300_ver1');
      }
  }



  function test_sec_sghm600_ver1() {
    foreach(array(
'SEC-SGHM600/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SEC-SGHM600/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghm600_ver1');
      }
  }



  function test_sec_sghm620_ver1() {
    foreach(array(
'SEC-SGHM620/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SEC-SGHM620/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0',
'SEC-SGHM620/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.12.0',
'SEC-SGHM620/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'SEC-SGHM620/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.0',
'SEC-SGHM620/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.06.5.0.0.0',
'SEC-SGHM620/1.0 Openwave/6.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghm620_ver1');
      }
  }



  function test_sec_sghu300_ver1() {
    foreach(array(
'SEC-SGHU300/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghu300_ver1');
      }
  }



  function test_sec_sghx507_ver1() {
    foreach(array(
'SEC-SGHX507, TSS/2.5, Rev 1.4'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghx507_ver1');
      }
  }



  function test_sec_sghx836_ver1() {
    foreach(array(
'SEC-SGHX836/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_sghx836_ver1');
      }
  }



  function test_sec_x120_ver1() {
    foreach(array(
'SEC-SGHX120'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x120_ver1');
      }
  }



  function test_sec_x140_ver1() {
    foreach(array(
'SEC-SGHX140'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x140_ver1');
      }
  }



  function test_sec_x160_ver1() {
    foreach(array(
'SEC-SGHX160/1.0',
'X160B'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x160_ver1');
      }
  }



  function test_sec_x200_ver1() {
    foreach(array(
'SEC-SGHX200/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x200_ver1');
      }
  }



  function test_sec_x210_ver1() {
    foreach(array(
'SEC-SGHX210/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x210_ver1');
      }
  }



  function test_sec_x430_ver1() {
    foreach(array(
'SEC-SGHX430'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x430_ver1');
      }
  }



  function test_sec_x450_ver1() {
    foreach(array(
'SEC-SGHX450',
'SEC-SGHX450 UP.Link/X450JIEF1'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x450_ver1');
      }
  }



  function test_sec_x475_ver1() {
    foreach(array(
'SEC-SGHX475-X475UVEB2-NW.Browser3.01'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x475_ver1');
      }
  }



  function test_sec_x490_ver1() {
    foreach(array(
'SAMSUNG-SGH-X490/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x490_ver1');
      }
  }



  function test_sec_x610_ver1() {
    foreach(array(
'SEC-SGHX610/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x610_ver1');
      }
  }



  function test_sec_x820_ver1() {
    foreach(array(
'SEC-SGHX820/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEC-SGHX820/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SEC-SGHX820/1.0 NetFront/3.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sec_x820_ver1');
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

  function secTest() {
    $this->UnitTestCase('sec Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SecTest();
$test->run(new TextReporter());

?>
