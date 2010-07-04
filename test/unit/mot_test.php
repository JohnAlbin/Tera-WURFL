<?php

/*
 * Recognising Mot devices from their user agents
 *
 */

require_once 'test_helper.php';

class MotTest extends UnitTestCase {

  var $wurfl;


  function test_mot_a1000_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Motorola A1000;708) Opera 7.50 [en]./A1000./1.0',
'Mozilla/4.1 (compatible; MSIE 5.0; Symbian OS) Opera 6.0  [en]./MOT-A925./P243'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a1000_ver1');
      }
  }



  function test_mot_a1200_ver1() {
    foreach(array(
'MOT-A1200/1.0 LinuxOS/2.4.20 Release/6.20.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R532_G_11.00.59P',
'MOT-A1200/1.0 R532_G_11.00.40P/12.28.2005 Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200; 1555) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200/1.0 R532_G_11.00.44P/12.28.2005 Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200; 1555) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200/1.0 R532_G_11.00.48P/12.28.2005 Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200; 1555) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200/R532H2_G_11.20.08P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200/R532H2_G_11.20.12P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200/R532H2_G_11.20.13P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200/R532_G_11.00.48P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200; 1555) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200/R532_G_11.00.53P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200; 1862) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/AP: ezx_reload-v3',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R532C2_24XPS_1.2P',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R532C2_G_11.30.30P',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R532C2_G_11.31.25P',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R532C2_G_11.31.77P',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R532_G_11.00.59P',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R532_G_11.00.59P UP.Link/6.3.0.0.0',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R541_G_11.50.29P',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R541_G_11.50.34P',
'MOT-A1200r/1.0 LinuxOS/2.4.20 Release/8.22.2006 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R541_G_11.56.11R',
'MOT-A1200r/1.0/Novins-R541L7_G_11.10.11R Mozilla/4.0 (compatible; MSIE 6.0; Linux; A1200r; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a1200_ver1');
      }
  }



  function test_mot_a1200eam_ver1() {
    foreach(array(
'MOT-A1200eam/1.0/R541L7_G_11.00.13R Mozilla/4.0 (compatible; MSIE 6.0; Linux; A1200eam; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00',
'MOT-A1200eam/1.0/R541L7_G_11.00.16R Mozilla/4.0 (compatible; MSIE 6.0; Linux; A1200eam; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00',
'MOT-A1200eam/1.0/R541L7_G_11.00.1AR Mozilla/4.0 (compatible; MSIE 6.0; Linux; A1200eam; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a1200eam_ver1');
      }
  }



  function test_mot_a1200i_ver1() {
    foreach(array(
'MOT-A1200i/R532L4_G_11.40.0FR Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200i;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-A1200i/R532L4_G_11.40.0FR Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200i;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [es-la]',
'MOT-A1200i/R532L4_G_11.40.1AR Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200i;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [es-la]',
'MOT-A1200i/R532L4_G_11.40.1ER Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A1200i;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [es-la]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a1200i_ver1');
      }
  }



  function test_mot_a1200w_ver1_subopera800() {
    foreach(array(
'MOT-A1200w/1.0/R541L7_G_11.10.11R_EXTREME_SE_WAGNER Mozilla/4.0 (compatible; MSIE 6.0; Linux; A1200w; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a1200w_ver1_subopera800');
      }
  }



  function test_mot_a1600_ver1() {
    foreach(array(
'MOT-A1600/1.0 LinuxOS/2.4.20 Release/1.28.2008 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R542_G_11.62.01R'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a1600_ver1');
      }
  }



  function test_mot_a3100_ver1() {
    foreach(array(
'MOT-A3100 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'MOT-A3100 Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/16263; U; es-ES)',
'MOT-A3100 Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/16465; U; es-ES)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a3100_ver1');
      }
  }



  function test_mot_a455_ver1() {
    foreach(array(
'MOT-A455/00.72 UP.Browser/7.2.7.5.606 (GUI) MMP/2.0',
'MOT-A455/1.0 UP.Browser/7.2.7.5.646 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a455_ver1');
      }
  }



  function test_mot_a45_eco_ver1() {
    foreach(array(
'MOT-A45 ECO/13.10.09R_C Release/09.24.2008 OPERA/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-A45 ECO/13.10.0CR Release/09.24.2008 OPERA/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-A45 ECO/13.10.0CR_A Release/09.24.2008 OPERA/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-A45ECO/13.10.0DR Release/09.24.2008 OPERA/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-A45ECO/13.10.0DR Release/09.24.2008 OPERA/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a45_eco_ver1');
      }
  }



  function test_mot_a668_ver1() {
    foreach(array(
'MOT-A668/ WAP.Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a668_ver1');
      }
  }



  function test_mot_a780_ver1() {
    foreach(array(
'MOT-A780/R52_G_0D.74.A2R Mozilla/4.0 (compatible; MSIE 6.0; Motorola; 1229) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 7.50 [zh-tw]',
'MOT-A780/R52_G_0D.74.A2R Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 7.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola A780; 781) MOT-A780/R532_G_11.00.46P Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a780_ver1');
      }
  }



  function test_mot_a810_ver1() {
    foreach(array(
'MOT-A810/1.0 LinuxOS/2.4.20 Release/6.10.2008 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/GSM_E28.24.1_G_11.02.18R',
'MOT-A810/1.0 LinuxOS/2.4.20 Release/6.10.2008 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/GSM_E28.24.1_G_11.02.31R',
'MOT-A810/1.0 LinuxOS/2.4.20 Release/6.10.2008 Browser/Opera8.00 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/GSM_E28.24.1_G_11.02.32R'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a810_ver1');
      }
  }



  function test_mot_a_8d_ver1() {
    foreach(array(
'MOT-A-8D/00.00 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-8D/00.01 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'mot_a_8d_ver1');
      }
  }



  function test_mot_blackmonster_ver1() {
    foreach(array(
'MOT-Black Monster/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_blackmonster_ver1');
      }
  }



  function test_mot_c115_ver1() {
    foreach(array(
'MOT-CfoneMART L7/08.B7.DCR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c115_ver1');
      }
  }



  function test_mot_c168_ver1() {
    foreach(array(
'MOT-C168/ WAP.Browser/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c168_ver1');
      }
  }



  function test_mot_c168i_ver1() {
    foreach(array(
'MOT-C168i/1.0 Release/13.07.2007 Browser/CMCS1.0 Software/2.350',
'MOT-C168i/1.0 Release/20.04.2007 Browser/CMCS1.0 Software/1.230',
'MOT-C168i/1.0 Release/31.12.2007 Browser/CMCS1.0 Software/2.35D',
'MOT-C168i/1.0 Release/7.24.2006 Browser/CMCS1.0 Software/0.080'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c168i_ver1');
      }
  }



  function test_mot_c257_ver1() {
    foreach(array(
'MOT-C257/0.1.32 UP.Browser/6.2.3.9.c.6 (GUI) MMP/2.0',
'MOT-C257/0.1.66 UP.Browser/6.2.3.9.c.9 (GUI) MMP/2.0',
'MOT-C257/0.1.76 UP.Browser/6.2.3.9.c.12 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c257_ver1');
      }
  }



  function test_mot_c261_ver1() {
    foreach(array(
'MOT-C261 UP.Browser/6.2.3.9.c.6 (GUI) MMP/2.0',
'MOT-C261/0.1.31 UP.Browser/6.2.3.9.c.6 (GUI) MMP/2.0',
'MOT-C261/0.1.32 UP.Browser/6.2.3.9.c.6 (GUI) MMP/2.0',
'MOT-C261/0.1.32 UP.Browser/6.2.3.9.c.6 (GUI) MMP/2.0 UP.Link/6.3.1.12.0',
'MOT-C261/0.1.32 UP.Browser/6.2.3.9.c.6 (GUI) MMP/2.0 UP.Link/6.3.1.13.0',
'MOT-C261/0.1.44 UP.Browser/6.2.3.9.c.6 (GUI) MMP/2.0',
'MOT-C261/0.1.54 UP.Browser/6.2.3.9.c.9 (GUI) MMP/2.0',
'MOT-C261/0.1.66 UP.Browser/6.2.3.9.c.9 (GUI) MMP/2.0',
'MOT-C261/0.1.67 UP.Browser/6.2.3.9.c.9 (GUI) MMP/2.0',
'MOT-C261/0.1.75 UP.Browser/6.2.3.9.c.12 (GUI) MMP/2.0',
'MOT-C261/0.1.76 UP.Browser/6.2.3.9.c.12 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c261_ver1');
      }
  }



  function test_mot_c350m_ver1() {
    foreach(array(
'MOT-c350M/G_09.04.37R MIB/2.0',
'MOT-c350M/G_09.04.74R MIB/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c350m_ver1');
      }
  }



  function test_mot_c380_ver1() {
    foreach(array(
'MOT-C380/0B.D1.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C380/0B.D1.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C380/0B.D2.23R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C380/0B.D2.2FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c380_ver1');
      }
  }



  function test_mot_c381p_ver1() {
    foreach(array(
'MOT-C381p/0B.E4.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c381p_ver1');
      }
  }



  function test_mot_c385_ver1() {
    foreach(array(
'MOT-C385/0B.D1.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C385/0B.D2.23R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c385_ver1');
      }
  }



  function test_mot_c390_ver1() {
    foreach(array(
'MOT-C390/0B.A0.0FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c390_ver1');
      }
  }



  function test_mot_c450_ver1() {
    foreach(array(
'MOT-C450/0A.03.40R MIB/2.2 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c450_ver1');
      }
  }



  function test_mot_c650_ver1() {
    foreach(array(
'MOT-C650/0B.D0.27R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C650/0B.D1.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C650/0B.D1.0BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C650/0B.D1.18R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C650/0B.D1.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C650/0B.D2.23R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C650/0B.D2.2FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C650/0B.D3.06R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-C650/0B.D3.08R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-MotoWare_Stradlin/0E.30.46R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-Motorola ROKR E1/0E.30.45R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c650_ver1');
      }
  }



  function test_mot_c975_ver1() {
    foreach(array(
'MOT-C975/80.2F.36. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-C975/80.2F.68I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-C975/82.21.80I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-C975/82.21.91I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_c975_ver1');
      }
  }



  function test_mot_calgary_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; calgary)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; calgary Build/DRC92) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; calgary Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_calgary_ver1');
      }
  }



  function test_mot_devour_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Devour)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; Dell Streak Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Devour Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-US; Devour)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_devour_ver1');
      }
  }



  function test_mot_e1000_ver1() {
    foreach(array(
'MOT-E1000/80.3F.36. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1000/80.3F.37. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1000/80.3F.64I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1000/80.3F.95I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1000/83.39.26I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1000M/80.3F.63. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e1000_ver1');
      }
  }



  function test_mot_e1070_ver1() {
    foreach(array(
'MOT-E1070/85.83.50R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1070/85.83.E2P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1070/85.97.F11 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1070/85.99.50R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e1070_ver1');
      }
  }



  function test_mot_e1_ver1() {
    foreach(array(
'MOT-E1 ROKR iTunes/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 Walkman Phone/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/00.00.00 MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/0E.30.42R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/0E.30.44R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/0E.30.45R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/0E.30.46R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/0E.30.49R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/0E.30.79R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E1 iTunes/NO.49Rmod MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-ROKR kOrAss/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-ROKR_E1/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-babyVIPER E1/0E.30.6FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-babyVIPER-E1/0E.30.6FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e1_ver1');
      }
  }



  function test_mot_e380_ver1() {
    foreach(array(
'MOT-E380/0A.03.35R MIB/2.2 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'MOT-E380/0A.03.5AR MIB/2.2 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e380_ver1');
      }
  }



  function test_mot_e398_ver1() {
    foreach(array(
'MOT-E398 ROKR/0E.30.45R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398/00.00.00 MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398/0E.20.59R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-E398/0E.20.95R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-E398/0E.20.96R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-E398/0E.20.97R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-E398/0E.20.99R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-E398/0E.30.42R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398/0E.30.46R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398/0E.30.49R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398/0E.30.6FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398/ck.46R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398@Mfun/0E.30.49R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398@ROKR/0E.30.46R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398@iPOD/0E.30.49R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E398B/0E.20.8BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-E398B/0E.20.95R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-E398B/0E.20.9CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e398_ver1');
      }
  }



  function test_mot_e550_ver1() {
    foreach(array(
'MOT-E550/0E.65.14R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-E550/0E.66.0BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e550_ver1');
      }
  }



  function test_mot_e680_ver1() {
    foreach(array(
'MOT-E680/R51_G_0F.38.A4R MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E680/R51_G_0F.43.A2P MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E680/R51_G_0F.48.A2P MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E680G/1.0 E680G_G_0D.C5.AEP/04.09.2006 Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola E680G; 2186) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [zh-cn]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e680_ver1');
      }
  }



  function test_mot_e680i_ver1() {
    foreach(array(
'MOT-E680i/E680I_G_0D.C3.A8P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola E680i; 1030) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 7.50 [zh-cn]',
'MOT-E680i/E680I_G_0D.C5.A3P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola E680i; 1030) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 7.50 [en]',
'MOT-E680i/E680I_G_0D.C5.A6P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola E680i; 1115) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 7.50 [en]',
'MOT-E680i/E680I_G_0D.C5.AAP Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola E680i; 1229) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 7.50 [zh-cn]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e680i_ver1');
      }
  }



  function test_mot_e6_ver1() {
    foreach(array(
'MOT-MOTOROKR E6/1.0/R533_G_11.12.02P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKR E6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [',
'MOT-MOTOROKR E6/1.0/R533_G_11.12.06P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKR E6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [',
'MOT-MOTOROKR-Z6W/Mozilla/5.0 (compatible;MSIE 6.0;Linux MOTOROKR Z6W)/R6635_G_81.xx.yyI Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0',
'MOT-MOTOROKR-Z6W/Mozilla/5.0 (compatible;MSIE 6.0;Linux MOTOROKR Z6W)/R6635_G_81.xx.yyI Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0 UP.Link/6.5.1.0.0',
'MOT-MOTOROKRE6/1.0 LinuxOS/2.4.20 Release/31.3.2007 Browser/Opera8.00 Profile/MIDP2.0 Configuration/CLDC1.1 Software/R533_G_11.12.10P',
'MOT-MOTOROKRE6/NIK\'S_CYCLONE_v2.0 Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R533_11.81.09P_WM98XS_EC Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R533_G_11.12.02P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R533_G_11.12.08P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R533_G_11.12.08P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en], MOT-MOTOROKRE6/R533_G_11.12.08P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en], MOT-MOTOROKRE6/R533_G_11.12.08P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en], MOT-MOTOROKRE6/R533_G_11.12.08P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en], MOT-MOTOROKRE6/R533_G_11.12.08P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R533_G_11.12.08P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [zh-cn]',
'MOT-MOTOROKRE6/R533_G_11.12.09P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R533_G_11.12.09P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [th]',
'MOT-MOTOROKRE6/R533_G_11.12.09Pi_NTA Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R533_G_11.12.10P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R533_R535_E6e_Mfuns Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R535H10_G_11.87.22P Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6/R535H10_G_11.87.22P_NiKs_Black_Diamond_ Mozilla/4.0 (compatible; MSIE 6.0; Linux; MOTOROKRE6; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTOROKRE6e/1.0 LinuxOS/2.4.20 Release/31.3.2007 Browser/Opera8.00 Profile/MIDP2.0 Configuration/CLDC1.1 Software/R535_G_11.81.07P'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e6_ver1');
      }
  }



  function test_mot_e770_ver1() {
    foreach(array(
'MOT-E770/85.84.70R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E770/85.97.F1P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E770/85.98.E0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E770/85.98.F1P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E770v/85.83.E1P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E770v/85.92.701 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E770v/85.97.C3P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-E770v/85.97.CDP MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e770_ver1');
      }
  }



  function test_mot_e815_ver1() {
    foreach(array(
'MOT-E815_/00.62 UP.Browser/6.2.3.4.c.1.106 (GUI) MMP/2.0',
'MOT-E815_/00.62 UP.Browser/6.2.3.4.c.1.107 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e815_ver1');
      }
  }



  function test_mot_e8_linux_ver1() {
    foreach(array(
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-E8/R6713_G_71.01.2FR BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-E8/R6713_G_71.01.8BR BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-E8/R6713_G_71.02.07R BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-E8/R6713_G_71.02.07R BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-E8/R6713_G_71.14.1CR BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e8_linux_ver1');
      }
  }



  function test_mot_e8_ver1() {
    foreach(array(
'MOT-E8/R6713_G_71.01.2DR Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es] UP.Link/6.3.0.0.0',
'MOT-E8/R6713_G_71.03.01R_B MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-E8/R6713_G_71.03.03R Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es-co]',
'MOT-E8/R6713_G_71.03.04R Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es-co]',
'MOT-E8/R6713_G_71.03.05R Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es-co]',
'MOT-E8/R6713_G_71.03.05R Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es-co] UP.Link/6.3.0.0.0',
'MOT-E8/R6713_G_71.03.0AR MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-E8/R6713_G_71.14.1ER_B MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-E8/R6718_G_71.10.18R Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es-co]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_e8_ver1');
      }
  }



  function test_mot_em25_ver1() {
    foreach(array(
'MOT-EM25/1.0 Release/12.30.2008 Browser/CMCS1.0 Software/1.400 Profile/MIDP-2.0 Configuretion/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_em25_ver1');
      }
  }



  function test_mot_em28_ver1() {
    foreach(array(
'MOT-EM28/0.0.62 UP.Browser/6.3.0.6.c.28 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_em28_ver1');
      }
  }



  function test_mot_em30_ver1() {
    foreach(array(
'MOT-MOTOROKREM30/1.0 LinuxOS/2.6.10 Release/07.18.2008 Browser/OSS1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R6716_G_71.01.23R_A',
'MOT-MOTOROKREM30/1.0 LinuxOS/2.6.10 Release/07.18.2008 Browser/OSS1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R6716_G_71.01.23R_A UP.Link/6.3.0.0.0',
'MOT-MOTOROKREM30/1.0 LinuxOS/2.6.10 Release/07.18.2008 Browser/OSS1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R6716_G_71.01.24R',
'MOT-MOTOROKREM30/1.0 LinuxOS/2.6.10 Release/07.18.2008 Browser/OSS1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R6716_G_71.04.06R_B',
'MOT-MOTOROKREM30/1.0 LinuxOS/2.6.10 Release/11.16.2007 Browser/OSS1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/R6716_G_71.01.23R_A',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-EM30/R6716_G_71.01.02R_A BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-EM30/R6716_G_71.01.02R_B BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-EM30/R6716_G_71.03.02R BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-EM30/R6716_G_71.03.04R BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-EM30/R6716_G_71.04.06R_C BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_em30_ver1');
      }
  }



  function test_mot_em325_ver1() {
    foreach(array(
'MOT-EM325/1.0 Release/11.03.2008 Browser/CMCS1.0 Software/1.35D Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-EM325/1.0 Release/11.03.2008 Browser/CMCS1.0 Software/1.35D Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'MOT-EM325/1.0 Release/11.07.2008 Browser/CMCS1.0 Software/0.34N Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-EM325/1.0 Release/11.07.2008 Browser/CMCS1.0 Software/0.35N Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-EM325/1.0 Release/12.20.2008 Browser/CMCS1.0 Software/1.300 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_em325_ver1');
      }
  }



  function test_mot_em330_ver1() {
    foreach(array(
'MOT-EM330/0.0.62 UP.Browser/6.3.0.6.c.28 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-EM330/0.0.79 UP.Browser/6.3.0.6.c.31 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-EM330/1.0.87 UP.Browser/6.3.0.6.c.35 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_em330_ver1');
      }
  }



  function test_mot_em35_ver1() {
    foreach(array(
'MOT-EM35/R6743_G_74.12.01ROX Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-EM35/R6743_G_74.12.03ROX Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-EM35/R6743_G_74.23.03ROX Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-EM35/R6743_G_74.23.04ROX Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-EM35/R6743_G_74.23.06ROX Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_em35_ver1');
      }
  }



  function test_mot_evoke_ver1() {
    foreach(array(
'Mozilla/5.0 (X11; U; Linux ARM; en-us) AppleWebKit/525.1  (KHTML, like Gecko) Safari/525 Mobile/MotorolaEvoke',
'Mozilla/5.0 (X11; U; Linux ARM; en-us) AppleWebKit/525.1+ (KHTML, like Gecko) Safari/525 Mobile/MotorolaEvoke'
    ) as $ua) {
        $this->checkUA($ua, 'mot_evoke_ver1');
      }
  }



  function test_mot_f0_ver1() {
    foreach(array(
'MOT-FreedomNS/0E.30.46R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_f0_ver1');
      }
  }



  function test_mot_f5_ver1() {
    foreach(array(
'MOT-F5/4.1.9 UP.Browser/4.1.23c UP.Link/5.1.2.5'
    ) as $ua) {
        $this->checkUA($ua, 'mot_f5_ver1');
      }
  }



  function test_mot_f6_ver1() {
    foreach(array(
'MOT-F6/00.28.26 UP.Browser/4.1.23b'
    ) as $ua) {
        $this->checkUA($ua, 'mot_f6_ver1');
      }
  }



  function test_mot_i1_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; Motorola_i1 Build/CUPCAKE) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i1_ver1');
      }
  }



  function test_mot_i205_ver1() {
    foreach(array(
'MOT-A-8C/00.02 UP.Browser/7.0.2.2.c.1.110 (GUI) MMP/2.0 UP.Link/6.5.1.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i205_ver1');
      }
  }



  function test_mot_i215_ver1() {
    foreach(array(
'MOT-iTune phone/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i215_ver1');
      }
  }



  function test_mot_i265_ver1() {
    foreach(array(
'MOT-A-3B/01.02 UP.Browser/4.1.27a1 UP.Link/6.6.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i265_ver1');
      }
  }



  function test_mot_i290_ver1() {
    foreach(array(
'MOT-A-7F/00.03 UP.Browser/7.0.2.2.c.1.109 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-7F/00.03 UP.Browser/7.0.2.2.c.1.109 (GUI) MMP/2.0 UP.Link/5.1.2.18',
'MOT-A-7F/00.04 UP.Browser/7.0.2.2.c.1.109 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-7F/00.04 UP.Browser/7.0.2.2.c.1.109 (GUI) MMP/2.0 UP.Link/5.1.2.18',
'MOT-A-7F/00.05 UP.Browser/7.0.2.2.c.1.109 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-7F/00.05 UP.Browser/7.0.2.2.c.1.109 (GUI) MMP/2.0 UP.Link/6.6.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i290_ver1');
      }
  }



  function test_mot_i305_ver1() {
    foreach(array(
'MOT-A-1F/00.04 UP.Browser/4.1.27a1 UP.Link/5.1.2.16'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i305_ver1');
      }
  }



  function test_mot_i355_ver1() {
    foreach(array(
'MOT-A-3F/00.01 UP.Browser/4.1.27a1 UP.Link/5.1.2.17',
'MOT-A-4A/01.01 UP.Browser/4.1.27a1 UP.Link/5.1.2.17',
'MOT-A-4A/01.01 UP.Browser/4.1.27a1 UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i355_ver1');
      }
  }



  function test_mot_i425_ver1() {
    foreach(array(
'MOT-A-8B/00.00 UP.Browser/7.0.2.2.c.1.109 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-8B/00.02 UP.Browser/7.0.2.2.c.1.109 (GUI) MMP/2.0 UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i425_ver1');
      }
  }



  function test_mot_i570_ver1() {
    foreach(array(
'MOT-A-8A/01.00 UP.Browser/4.1.27a1 UP.Link/5.1.2.17',
'MOT-A-8A/01.00 UP.Browser/4.1.27a1 UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i570_ver1');
      }
  }



  function test_mot_i576_ver1() {
    foreach(array(
'MOT-A-8E/00.02 UP.Browser/7.0.2.2.c.1.110 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-8E/00.02 UP.Browser/7.0.2.2.c.1.110 (GUI) MMP/2.0 UP.Link/5.1.2.18',
'MOT-A-8E/00.02 UP.Browser/7.0.2.2.c.1.110 (GUI) MMP/2.0 UP.Link/6.6.0.0.0',
'MOT-A-8E/00.03 UP.Browser/7.0.2.2.c.1.110 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-8E/00.03 UP.Browser/7.0.2.2.c.1.110 (GUI) MMP/2.0 UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i576_ver1');
      }
  }



  function test_mot_i580_ver1() {
    foreach(array(
'MOT-A-5C/00.02 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-5C/00.03 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-5C/00.05 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-5C/00.05 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.18',
'MOT-A-5C/00.06 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-5C/00.06 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i580_ver1');
      }
  }



  function test_mot_i670_ver1() {
    foreach(array(
'MOT-A-7A/00.00 UP.Browser/4.1.27a1 UP.Link/5.1.2.17',
'MOT-A-7A/00.01 UP.Browser/4.1.27a1 UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i670_ver1');
      }
  }



  function test_mot_i690_ver1() {
    foreach(array(
'MOT-A-4C/01.01 UP.Browser/4.1.27a1 UP.Link/5.1.2.17',
'MOT-A-4C/01.02 UP.Browser/4.1.27a1 UP.Link/5.1.2.17',
'MOT-A-4C/01.02 UP.Browser/4.1.27a1 UP.Link/5.1.2.18',
'MOT-A-4C/02.00 UP.Browser/4.1.27a1 UP.Link/5.1.2.17'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i690_ver1');
      }
  }



  function test_mot_i830_ver1() {
    foreach(array(
'MOT-A-2B/01.02 UP.Browser/4.1.27a1 UP.Link/5.1.2.17',
'MOT-A-2B/03.02 UP.Browser/4.1.27a1 UP.Link/5.1.2.17',
'MOT-A-2B/03.04 UP.Browser/4.1.27a1 UP.Link/5.1.2.17'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i830_ver1');
      }
  }



  function test_mot_i850_ver1() {
    foreach(array(
'MOT-A-3D/01.00 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.16',
'MOT-A-3D/01.02 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-3D/01.04 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i850_ver1');
      }
  }



  function test_mot_i860_ver1() {
    foreach(array(
'MOT-A-1C/01.01 UP.Browser/7.0.0.2.c.1.104 (GUI) MMP/2.0 UP.Link/5.1.2.18'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i860_ver1');
      }
  }



  function test_mot_i870_ver1() {
    foreach(array(
'MOT-A-5B/00.01 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.16',
'MOT-A-5B/00.04 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.18',
'MOT-A-5B/00.23 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-5B/02.00 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i870_ver1');
      }
  }



  function test_mot_i876_ver1() {
    foreach(array(
'MOT-A-B2/02.01 UP.Browser/7.2.7.1.c.1.102 (GUI) MMP/2.0 Push/PO UP.Link/6.6.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i876_ver1');
      }
  }



  function test_mot_i880_ver1() {
    foreach(array(
'MOT-A-6E/00.04 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/5.1.2.17',
'MOT-A-6E/00.04 UP.Browser/7.0.2.2.c.1.108 (GUI) MMP/2.0 UP.Link/6.6.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_i880_ver1');
      }
  }



  function test_mot_ic502_ver1() {
    foreach(array(
'Motorola-ic502 Obigo/Q04C1-1.9 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ic502_ver1');
      }
  }



  function test_mot_ic902_ver1() {
    foreach(array(
'Motorola-ic902 Obigo/Q04C1 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ic902_ver1');
      }
  }



  function test_mot_k1_ver1() {
    foreach(array(
'MOT-K1/08.00.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.02.81R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.02.82R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.03.08R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.05.07R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.05.0BR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.12.10R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.12.13R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.12.14R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.12.17R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.22.07R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.22.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.22.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 UP.Link/6.3.0.0.0',
'MOT-K1/08.22.11R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.42.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.42.0BR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1/08.42.0ER MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 UP.Link/6.5.1.0.0',
'MOT-K1/s/08.01.11R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1t/08.22.07R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-K1v/08.22.07R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_k1_ver1');
      }
  }



  function test_mot_k1m_ver1_boost() {
    foreach(array(
'Motorola-K1m-boost Obigo/Q04C1 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_k1m_ver1_boost');
      }
  }



  function test_mot_k1m_ver1_opwv6234() {
    foreach(array(
'MOT-K1m/1.1 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'Motorola-K1m UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_k1m_ver1_opwv6234');
      }
  }



  function test_mot_k1v_ver1() {
    foreach(array(
'MOT-K1v/08.03.08R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_k1v_ver1');
      }
  }



  function test_mot_k3_ver1() {
    foreach(array(
'MOT-K3/99.13.11R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12133142) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [cs]',
'MOT-K3/99.13.11R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12133142) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-K3/99.21.07R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12143162) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_k3_ver1');
      }
  }



  function test_mot_krzr_k1c_ver1() {
    foreach(array(
'MOT-24.0_/00.62 UP.Browser/6.2.3.4.c.1.115 (GUI) MMP/2.0',
'MOT-24.0_/00.62 UP.Browser/6.2.3.4.c.1.116 (GUI) MMP/2.0',
'MOT-24.0_/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_krzr_k1c_ver1');
      }
  }



  function test_mot_krzr_k1c_ver1_sub2() {
    foreach(array(
'MOT-24.1_/00.62 UP.Browser/6.2.3.4.c.1.117 (GUI) MMP/2.0',
'MOT-24.1_/00.62 UP.Browser/6.2.3.4.c.1.120 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_krzr_k1c_ver1_sub2');
      }
  }



  function test_mot_l2_ver1() {
    foreach(array(
'MOT-L2/0A.53.10R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L2/0A.53.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L2/0A.53.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'MOT-L2/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L2/0A.63.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L2/0A.63.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l2_ver1');
      }
  }



  function test_mot_l6_ver1() {
    foreach(array(
'MOT-L6/0A.52.06R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.52.10R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.52.26R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.52.2AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.52.2BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.52.2BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.1.0.e.24 (GUI) MMP/2.0',
'MOT-L6/0A.52.31R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.52.45R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.52.45R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'MOT-L6/0A.53.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1, MOT-L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.53.1CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.60.1BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.60.5AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.61.0CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.63.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.63.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6/0A.63.18R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l6_ver1');
      }
  }



  function test_mot_l6i_ver1() {
    foreach(array(
'MOT-L6g/0A.67.04R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.64.19R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.64.26P MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.65.07R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.65.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.65.0BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.65.0DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.66.07R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.67.02R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.67.05R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/0A.67.06R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L6i/65.0BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l6i_ver1');
      }
  }



  function test_mot_l71_ver1() {
    foreach(array(
'MOT-L71/AAUG2128AA 08.02.06R/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l71_ver1');
      }
  }



  function test_mot_l72_ver1() {
    foreach(array(
'MOT-L72/08.21.07R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L72/08.21.08R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L72/08.21.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l72_ver1');
      }
  }



  function test_mot_l7_ver1() {
    foreach(array(
'MOT-L7 .T.H/08.B7.DCR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/00.00.00 MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.ACR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.AER MIB/2.2.1 Pro',
'MOT-L7/08.B7.AER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.DAR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.DBR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.DCR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.DCR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'MOT-L7/08.B7.DDR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.DER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.E0R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.B7.E1R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.C4.1ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.C4.25R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.D4.0FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.D5.08R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7/08.D5.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7_Itunes/00.00.00 MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7_MinhThuc/00.00.00 MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7_MyLove/08.B7.ACR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7_V2.1/08.B7.ACR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7i/08.03.0DR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7i/AAUG2103AA 08.02.06R/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7i/AAUG2103AA 08.02.08R/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7i/AAUG2103AA 08.03.0DR/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7i/AAUG2128AA 08.03.0DR/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7i/AAUG2130AA 08.02.06R/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7i/AAUG2132AA 08.02.06R/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7i/AAUG2136AA Release/07.18.2006 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 Software/08.03.04R',
'MOT-L7i/AAUG2244AA 08.02.06R/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7i/AAUG2244AA Release/07.18.2006 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 Software/08.03.04R',
'MOT-L7v/08.B7.5DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7v/08.B7.ABR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7v/08.B7.AER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-L7v/08.B7.AER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'MOT-L7v/08.B7.E0R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l7_ver1');
      }
  }



  function test_mot_l7_ver1_red() {
    foreach(array(
'MOT-SLVR(RED)/08.C4.35R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l7_ver1_red');
      }
  }



  function test_mot_l7e_ver1() {
    foreach(array(
'MOT-L7e/08.01.0AR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7e/08.04.04R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7e/08.04.05R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7e/AAUG2103AA 08.01.0AR/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7e/AAUG2128AA 08.02.06R/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7e/AAUG2136AA 08.01.0AR/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L7e/CFWG2103AD 08.01.0AR/10.21.2005 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l7e_ver1');
      }
  }



  function test_mot_l9_ver1() {
    foreach(array(
'MOT-L9/08.21.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L9/08.21.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 UP.Link/6.3.0.0.0',
'MOT-L9/08.22.04R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-L9QuickSLVR/08.21.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_l9_ver1');
      }
  }



  function test_mot_mb200_ver1() {
    foreach(array(
'MOT-MB200/Blur_Version.0.14.401.MB200.AmericaMovil.en.01 Mozilla/5.0 (Linux; U; Android 1.5; es-us; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'MOT-MB200/Blur_Version.1.1.14.MB200.Orange.en.GB Mozilla/5.0 (Linux; U; Android 1.5; en-gb; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'MOT-MB200/Blur_Version.1.3.19.MB200.Orange.en.FR Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-AU; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-CA; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-SG; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; MB200-demo)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ZA; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-au; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ca; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-sg; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB200 Build/CUPCAKE) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-US; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (Linux; U; Android 1.5; es-us; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-CA; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-FR; MB200)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-it; MB200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-BR; MB200)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_mb200_ver1');
      }
  }



  function test_mot_mb300_ver1() {
    foreach(array(
'MOT-MB300/Blur_Version.0.12.712.MB300.Personal.en.AR Mozilla/5.0 (Linux; U; Android 1.5; es-us; MB300 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-DE; MB300)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-AU; MB300)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-CA; MB300)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; MB300)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-SG; MB300)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; MB300)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-au; MB300 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ca; MB300 Build/Blur_Version.0.12.1199.MB300.ATT.en.US Flex/P014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ca; MB300 Build/Blur_Version.0.13.1129.MB300.TELUS.en.CA Flex/P008) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB300 Build/Blur_Version.0.12.1199.MB300.ATT.en.US Flex/P014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB300 Build/Blur_Version.0.13.35.MB300.ATT.en.US Flex/P014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB300 Build/Blur_Version.0.13.37.MB300.ATT.en.US Flex/P014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB300 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; MB300)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-US; MB300)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; MB300 Build/Blur_Version.0.12.1199.MB300.ATT.en.US Flex/P014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-us; MB300 Build/Blur_Version.0.12.1199.MB300.ATT.en.US Flex/P014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-us; MB300 Build/Blur_Version.0.13.37.MB300.ATT.en.US Flex/P014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-it; MB300 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-BR; MB300)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_mb300_ver1');
      }
  }



  function test_mot_mb501_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-CA; MB501)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; MB501)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-IE; MB501)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-SG; MB501)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; MB501)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-au; MB501 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ca; MB501 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB501 Build/CUPCAKE) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; MB501 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; MB501)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-US; MB501)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; MB501 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-us; MB501 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-BR; MB501)',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-br; MB501 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_mb501_ver1');
      }
  }



  function test_mot_mb502_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; MB810)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; MatrixROM)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_mb502_ver1');
      }
  }



  function test_mot_me600_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; zh-cn; ME600 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_me600_ver1');
      }
  }



  function test_mot_milestone_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.0.1; de-DE; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; de-de; Milestone Build/SHOLS_U2_01.14.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0.1; en-CA; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; en-US; Droid (AdamZ Enhanced))',
'Mozilla/5.0 (Linux; U; Android 2.0.1; en-US; Droid)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; en-ca; Milestone Build/SHOLS_U2_03.06.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0.1; en-us; Droid (AdamZ Enhanced) Build/ESD56) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0.1; en-us; Droid Build/ESD56) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0.1; es-US; A853)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; es-us; A853 Build/SHLA_U2_02.02.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0.1; es-us; Droid Build/ESD56) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0.1; fr-CA; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; pt-BR; A853)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; zh-CN; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; zh-TW; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; zh-cn; Milestone Build/SHOLS_U2_01.14.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0; de-DE; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.0; de-de; Milestone Build/SHOLS_U2_01.03.1) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0; en-GB; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.0; en-HK; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.0; en-us; Milestone Build/SHOLS_U2_01.03.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0; es-US; A853)',
'Mozilla/5.0 (Linux; U; Android 2.0; es-us; A853 Build/SHLA_U2_01.03.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0; it-it; Milestone Build/SHOLS_U2_01.03.1) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.0; pt-BR; A853)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-DE; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; Milestone Build/SHOLS_U2_02.28.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; Milestone Build/SHOLS_U2_02.34.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; el-gr; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-CA; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ES; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; Milestone XT720)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-SG; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; Milestone XT720)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ca; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ca; Milestone Build/SHOLS_U2_02.34.3) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ca; Milestone Build/SHOLS_U2_02.36.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ca; Milestone Build/SHOLS_U2_03.10.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; Milestone Build/SHOLS_U2_02.27.6) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; Milestone Build/SHOLS_U2_02.34.3) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; Milestone XT720 Build/STR_U2_01.18.2) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Milestone Build/SHOLS_U2_03.10.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-ES; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; Milestone Build/SHOLS_U2_02.31.1) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-CA; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-FR; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; he-IL; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; he-il; Milestone Build/SHOLS_U2_02.27.6) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-IT; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; Milestone Build/SHOLS_U2_02.34.3) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-NL; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pl-PL; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pl-pl; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-ru; Milestone Build/SHOLS_U2_02.27.6) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-ru; Milestone Build/SHOLS_U2_02.27.7) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; Milestone Build/SHOLS_U2_02.31.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; Milestone Build/SHOLS_U2_02.34.3) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-tw; Milestone Build/SHOLS_U2_02.34.3) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'mot_milestone_ver1');
      }
  }



  function test_mot_motorazr_v8_ver1() {
    foreach(array(
'MOT-MOTORAZRV3re_CMCC/CHWF1551AA Release/04.27.2007 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 Software/0E.41.01R',
'MOT-MOTORAZRV3re_CMCC/SJUG3627AB Release/04.27.2007 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 Software/0E.43.08R'
    ) as $ua) {
        $this->checkUA($ua, 'mot_motorazr_v8_ver1');
      }
  }



  function test_mot_mpx220_ver1() {
    foreach(array(
'MOT-MPx220/1.150 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_mpx220_ver1');
      }
  }



  function test_mot_p2k_ver1() {
    foreach(array(
'MOT-PoerE1@iTUNES/0E.30.46R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_p2k_ver1');
      }
  }



  function test_mot_pebl_ver1() {
    foreach(array(
'MOT-PEBL U6/08.83.76R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-PEBL U6/08.83.78R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-PEBL U6/08.84.08R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-PEBL U6/08.84.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-PEBL U6/08.84.27R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-PEBL U6/08.84.2AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-PEBL U6/08.84.2DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-U6c/1.0 UP.Browser/6.2.2.6(GUI) MMP/2.0 M4-MMS/3.01'
    ) as $ua) {
        $this->checkUA($ua, 'mot_pebl_ver1');
      }
  }



  function test_mot_q11_ver1() {
    foreach(array(
'MOT-Q11/01.00.49R-01 Software/WM6.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'MOT-Q11/01.00.56R Software/WM6.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'MOT-Q11/01.00.57R Software/WM6.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'MOT-Q11/01.00.58R Software/WM6.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'MOT-Q11/01.00.62R Software/WM6.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_q11_ver1');
      }
  }



  function test_mot_q8_ver1() {
    foreach(array(
'MOT-Q8_CMCC/1.0 Release/01.10.2007 Profile/MIDP-2.0 Configuration/CLDC-1.1 Software/WM6.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_q8_ver1');
      }
  }



  function test_mot_q9c_ver1_alltel_subua() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Alltel:MotoQ9c'
    ) as $ua) {
        $this->checkUA($ua, 'mot_q9c_ver1_alltel_subua');
      }
  }



  function test_mot_q9c_ver1_sprint() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PLS:MotoQ9c',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Sprint:MotoQ9c',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) Sprint:MotoQ9c'
    ) as $ua) {
        $this->checkUA($ua, 'mot_q9c_ver1_sprint');
      }
  }



  function test_mot_q9c_ver1_vzw() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 320x240; VZW; Motorola-Q9c; Windows Mobile 6.1 Standard',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) 320x240; VZW; Motorola-Q9c; Windows Mobile 6.0 Standard'
    ) as $ua) {
        $this->checkUA($ua, 'mot_q9c_ver1_vzw');
      }
  }



  function test_mot_q9h_ver1() {
    foreach(array(
'MOT-Q9/01.07.05R Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Smartphone; 240x320) Opera 8.65',
'MOT-Q9/01.07.09R Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Smartphone; 240x320) Opera 8.65',
'MOT-Q9/01.07.37R Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Smartphone; 240x320) Opera 8.65',
'MOT-Q9/01.09.28DR Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Smartphone; 320x240) Opera 8.65',
'MOT-Q9/01.09.28R Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Smartphone; 320x240) Opera 8.65',
'MOT-Q9/APVER  Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Smartphone; 240x320) Opera 8.65',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) Alltel:MotoQ9c',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) MOT-Q9/01.07.05R',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) MOT-Q9/01.07.37R'
    ) as $ua) {
        $this->checkUA($ua, 'mot_q9h_ver1');
      }
  }



  function test_mot_q9m_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) 320x240; VZW; Motorola-Q9m; Windows Mobile 6.0 Standard'
    ) as $ua) {
        $this->checkUA($ua, 'mot_q9m_ver1');
      }
  }



  function test_mot_q_ver1() {
    foreach(array(
'Mozilla/4.0 Sprint:MotoQ (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)'
    ) as $ua) {
        $this->checkUA($ua, 'mot_q_ver1');
      }
  }



  function test_mot_qa1_ver1() {
    foreach(array(
'MOT-MOTOQA1/A2.00.52R1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003388) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [es]',
'MOT-MOTOQA1/A2.01.11R Release/09.24.2008 OPERA/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-MOTOQA1/A2.01.11R Release/09.24.2008 OPERA/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_qa1_ver1');
      }
  }



  function test_mot_qa30_ver1() {
    foreach(array(
'MOT-QA30/00.72 UP.Browser/7.2.7.5.546 (GUI) MMP/2.0',
'MOT-QA30/00.72 UP.Browser/7.2.7.5.565 (GUI) MMP/2.0',
'MOT-QA30/00.72 UP.Browser/7.2.7.5.598 (GUI) MMP/2.0',
'MOT-QA30/00.72 UP.Browser/7.2.7.5.610 (GUI) MMP/2.0',
'MOT-QA30/00.72 UP.Browser/7.2.7.5.619 (GUI) MMP/2.0',
'MOT-QA30/00.72 UP.Browser/7.2.7.5.622 (GUI) MMP/2.0',
'MOT-RASPB/00.72 UP.Browser/7.2.7.5.598 (GUI) MMP/2.0',
'MOT-RASPB/00.72 UP.Browser/7.2.7.5.619 (GUI) MMP/2.0',
'MOT-RASPB/00.72 UP.Browser/7.2.7.5.622 (GUI) MMP/2.0',
'Motorola-QA30 UP.Browser/7.2.7.5.605 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_qa30_ver1');
      }
  }



  function test_mot_r38_ver1() {
    foreach(array(
'MOT-R38.0/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_r38_ver1');
      }
  }



  function test_mot_r4541_ver1() {
    foreach(array(
'MOT-R4541/00.72 UP.Browser/7.2.6.1.835 (GUI) MMP/2.0',
'MOT-R4541/00.72 UP.Browser/7.2.6.1.841 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_r4541_ver1');
      }
  }



  function test_mot_razr_v6_ver1() {
    foreach(array(
'MOT-RAZRV6/96.66.73AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11033063) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/96.66.73BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11033063) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/96.66.74R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11033063) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/96.66.76AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11033063) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/96.66.76R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11033063) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/96.80.51R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073071) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/96.80.55AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073083) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/96.80.56R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073083) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [pt]',
'MOT-RAZRV6/96.80.56R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073083) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [tr]',
'MOT-RAZRV6/96.A0.0ER BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073121) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/98.30.80R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12093102) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6/99.41.08R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163225) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6vc/98.20.33BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12043064) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [it]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_razr_v6_ver1');
      }
  }



  function test_mot_razr_v6vb_ver1() {
    foreach(array(
'MOT-RAZRV6v/98.20.33BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12043064) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6v/99.41.04ER BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163189) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [de]',
'MOT-RAZRV6v/99.41.04R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163189) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV6vb/98.20.33BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12043064) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_razr_v6vb_ver1');
      }
  }



  function test_mot_rokr_e2_ver1() {
    foreach(array(
'MOT-ROKR E2/R564_G_12.00.40P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola ROKR E2; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50 [en]',
'MOT-ROKR E2/R564_G_12.00.40P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola ROKR E2; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50 [es-ES] UP.Link/6.3.0.0.0',
'MOT-ROKR E2/R564_G_12.00.47P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola ROKR E2; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50 [es-LA]',
'MOT-ROKR E2/R564_G_12.00.48P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola ROKR E2; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50 [es-LA]',
'MOT-ROKR E2/R564_G_12.00.49P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola ROKR E2; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50 [es-LA]',
'MOT-ROKR E2/R564_G_12.03.33P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola ROKR E2; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50 [en-GB]',
'MOT-ROKR E2/R564_G_12.03.33P Mozilla/4.0 (compatible; MSIE 6.0; Linux; Motorola ROKR E2; 781) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_rokr_e2_ver1');
      }
  }



  function test_mot_sap4_ver1() {
    foreach(array(
'MOT-SAP4_/11.03 UP.Browser/4.1.23c'
    ) as $ua) {
        $this->checkUA($ua, 'mot_sap4_ver1');
      }
  }



  function test_mot_spark_verizon_ver1() {
    foreach(array(
'MOT-SPARK/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_spark_verizon_ver1');
      }
  }



  function test_mot_t720_ver1() {
    foreach(array(
'MOT-T720/05.08.40R MIB/2.0 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_t720_ver1');
      }
  }



  function test_mot_t720m_ver1() {
    foreach(array(
'MOT-T720M/AS_G_05.06.20R MIB/2.0 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_t720m_ver1');
      }
  }



  function test_mot_ta02_ver1() {
    foreach(array(
'MOT-TA02/06.04.1CR MIB/1.2.1',
'MOT-TA02/06.04.34R MIB/1.2.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ta02_ver1');
      }
  }



  function test_mot_ti260_ver1() {
    foreach(array(
'MOT-AF/4.1.9 UP/4.1.19i',
'MOT-AF/4.1.9 UP/4.1.19i UP.Browser/4.1.19i-XXXX UP.Link/5.1.2.5'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ti260_ver1');
      }
  }



  function test_mot_u9_ver1() {
    foreach(array(
'MOT-U9/R6632_G_81.11.29R Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es-co]',
'MOT-U9/R6632_G_81.11.46R Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es-co] UP.Link/6.3.0.0.0',
'MOT-U9/R6632_G_81.17.04R Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 [es-co] UP.Link/6.3.0.0.0',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-U9/R6632_G_81.11.29R_A BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-U9/R6632_G_81.12.15R BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-U9/R6632_G_81.12.15R_B BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-U9/R6632_G_81.12.18R BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-U9/R6632_G_81.17.04R BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-U9/R6632_G_81.27.05R BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-U9/R6632_G_81.27.0CR BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MOT-U9/R6632_G_81.27.0ER BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_u9_ver1');
      }
  }



  function test_mot_v1050_ver1() {
    foreach(array(
'MOT-V1050/83.38.49I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v1050_ver1');
      }
  }



  function test_mot_v1075_ver1() {
    foreach(array(
'MOT-V1075/85.97.C6P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V1075/85.97.CDP MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v1075_ver1');
      }
  }



  function test_mot_v1100_ver1() {
    foreach(array(
'MOT-V1100/98.20.33BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12043064) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-V1100/98.20.33BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12043064) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [es]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v1100_ver1');
      }
  }



  function test_mot_v171_ver1() {
    foreach(array(
'MOT-V171 UP.Browser/6.2.2.7 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v171_ver1');
      }
  }



  function test_mot_v175_ver1() {
    foreach(array(
'MOT-V175/0.1.66 UP.Browser/6.2.3.9.c.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v175_ver1');
      }
  }



  function test_mot_v177_ver1() {
    foreach(array(
'MOT-V177 UP.Browser/6.2.3.9.c.6 (GUI) MMP/2.0',
'MOT-V177/0.1.66 UP.Browser/6.2.3.9.c.9 (GUI) MMP/2.0',
'MOT-V177/0.1.67 UP.Browser/6.2.3.9.c.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v177_ver1');
      }
  }



  function test_mot_v180_ver1() {
    foreach(array(
'MOT-V180/0B.D1.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V180/0B.D1.1FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V180/0B.D2.23R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V180/0B.D2.2ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V180/0B.D2.2FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V180/0B.D2.30R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V180/0B.D2.31R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V180ENS/0B.D1.32R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V180ENS/0B.D3.06R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v180_ver1');
      }
  }



  function test_mot_v186_ver1() {
    foreach(array(
'MOT-V186/08.30.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v186_ver1');
      }
  }



  function test_mot_v190_ver1() {
    foreach(array(
'MOT-V190/0A.50.2DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V190/0A.52.31R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V190/0A.63.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v190_ver1');
      }
  }



  function test_mot_v191_ver1() {
    foreach(array(
'MOT-V191/0A.52.47R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V191/0A.53.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V191/0A.60.1BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v191_ver1');
      }
  }



  function test_mot_v220_ver1() {
    foreach(array(
'MOT-V220/0B.D1.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D1.1BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D1.32R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D2.23R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D2.28R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D2.2BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D2.2CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D2.2ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D2.2FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220/0B.D2.34R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220ENS/0B.D1.32R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V220ENS/0B.D3.06R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v220_ver1');
      }
  }



  function test_mot_v235_ver1() {
    foreach(array(
'MOT-V235/08.D0.18R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V235/0A.30.3FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V235/0A.30.6CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V235/0A.30.6CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v235_ver1');
      }
  }



  function test_mot_v300_ver1() {
    foreach(array(
'MOT-V300/0B.09.1CR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V300/0B.09.1DR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V300/0B.09.2ER MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V300/0B.09.37R MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V300/0B.09.38R MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V300/0B.09.4ER MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v300_ver1');
      }
  }



  function test_mot_v303_ver1() {
    foreach(array(
'MOT-V303/0B.09.1CR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v303_ver1');
      }
  }



  function test_mot_v323i_ver1() {
    foreach(array(
'MOT-R901_/00.62 UP.Browser/6.2.3.4.c.1.112 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v323i_ver1');
      }
  }



  function test_mot_v325_ver1() {
    foreach(array(
'MOT-R9-1_/00.62 UP.Browser/6.2.3.4.e.1.100 (GUI) MMP/2.0',
'MOT-R974_/00.72 UP.Browser/7.2.7.5.656 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v325_ver1');
      }
  }



  function test_mot_v325_verizon_ver1() {
    foreach(array(
'MOT-MLNBT/00.62 UP.Browser/6.2.3.4.e.1.100 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v325_verizon_ver1');
      }
  }



  function test_mot_v330_ver1() {
    foreach(array(
'MOT-V330/08.18.1DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v330_ver1');
      }
  }



  function test_mot_v360_ver1() {
    foreach(array(
'MOT-V360/08.B7.2ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.2ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'MOT-V360/08.B7.2ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'MOT-V360/08.B7.30R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.56R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.58R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.5AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.5CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.86R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.ABR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.AER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.AER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'MOT-V360/08.B7.B7R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.E0R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.B7.E0R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'MOT-V360/08.D6.19R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360/08.D6.19R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'MOT-V360/08.D6.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360v/08.B7.52R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360v/08.B7.56R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360v/08.B7.58R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360v/08.B7.58R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'MOT-V360v/08.B7.58R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'MOT-V360v/08.B7.ABR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360v/08.B7.AER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360v/08.B7.AFR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360v/08.B7.AFR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'MOT-V360v/08.B7.AFR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v360_ver1');
      }
  }



  function test_mot_v360i_ver1() {
    foreach(array(
'MOT-V360i/08.D4.0FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V360i/08.D5.07R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v360i_ver1');
      }
  }



  function test_mot_v361_ver1() {
    foreach(array(
'MOT-V361/08.B7.AER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v361_ver1');
      }
  }



  function test_mot_v365_ver1() {
    foreach(array(
'MOT-V365/08.C8.37R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V365/08.CC.13R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v365_ver1');
      }
  }



  function test_mot_v3_ver1() {
    foreach(array(
'MOT-V3 D&G/0E.42.08R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3 D&G/0E.42.08R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'MOT-V3/08.BD.43R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3/0E.40.3CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.40.3ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.40.3ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'MOT-V3/0E.40.3ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.5.0.0.0',
'MOT-V3/0E.40.57R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.40.64R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'MOT-V3/0E.40.79R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.40.9CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.40.9CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'MOT-V3/0E.41.C3R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.41.C3R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.1.20.0',
'MOT-V3/0E.42.04R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3/0E.42.07R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.08R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.09R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.0AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.0BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.0CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.0DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.0ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.0ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'MOT-V3/0E.42.10R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.10R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'MOT-V3/0E.42.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.17R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3/0E.42.20R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V3am/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'MOT-V3s/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'MOT-V3v/08.BD.62R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3v/08.BD.B3R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3v/0E.42.08R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3_ver1');
      }
  }



  function test_mot_v3_ver1_metropcs() {
    foreach(array(
'MOT-NCR_0/00.62 UP.Browser/6.2.3.4.c.1.115 (GUI) MMP/2.0',
'MOT-NCR_0/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'MOT-Naruto_v1.2 by zL/0E.30.49R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3_ver1_metropcs');
      }
  }



  function test_mot_v3b_ver1() {
    foreach(array(
'MOT-V3b/0E.A4.29R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3b_ver1');
      }
  }



  function test_mot_v3c_ver1() {
    foreach(array(
'MOT-V3c/1.2 UP.Browser/6.2.3.4.c.1.109 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3c_ver1');
      }
  }



  function test_mot_v3i_ver1() {
    foreach(array(
'MOT-V3i/08.00.20R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.00.33R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.01.03R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.02.03R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.02.05R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.03.03R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B4.34R MIB/2.1 Profile/MIDP-2.0',
'MOT-V3i/08.B4.34R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B4.37R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B4.38R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B4.67R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B4.85R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B4.87R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B4.89R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B4.8DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B5.0FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B5.10R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B5.3DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B5.76R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.B5.86R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.35R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.67R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.85R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.86R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.88R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.89R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.8BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.8DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D8.A1R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D9.3DR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D9.75R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D9.76R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/08.D9.86R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/0E.C4.10R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3i/0E.C4.21R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3ire/08.00.33R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3i_ver1');
      }
  }



  function test_mot_v3ie_ver1() {
    foreach(array(
'MOT-V3ie/08.02.05R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3ie_ver1');
      }
  }



  function test_mot_v3iv_ver1() {
    foreach(array(
'MOT-V3iv/08.B5.10R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3iv_ver1');
      }
  }



  function test_mot_v3m_ver1() {
    foreach(array(
'MOT-GATW2/00.62 UP.Browser/6.2.3.4.c.1.114 (GUI) MMP/2.0',
'MOT-GATW_/00.62 UP.Browser/6.2.3.4.c.1.109 (GUI) MMP/2.0',
'MOT-GATW_/00.62 UP.Browser/6.2.3.4.c.1.112 (GUI) MMP/2.0',
'MOT-GATW_/00.62 UP.Browser/6.2.3.4.c.1.112 (GUI) MMP/2.0 Novarra-Vision/8.0',
'MOT-GATW_/00.62 UP.Browser/6.2.3.4.c.1.113 (GUI) MMP/2.0',
'MOT-GATW_/00.62 UP.Browser/6.2.3.4.c.1.114 (GUI) MMP/2.0',
'MOT-GATW_/00.62 UP.Browser/6.2.3.4.c.1.115 (GUI) MMP/2.0',
'MOT-GATW_/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3m_ver1');
      }
  }



  function test_mot_v3mobigo_ver1() {
    foreach(array(
'Motorola-V3m Obigo/Q04C1 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3mobigo_ver1');
      }
  }



  function test_mot_v3mobigo_ver1_red() {
    foreach(array(
'Motorola-V3m-Red Obigo/Q04C1 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3mobigo_ver1_red');
      }
  }



  function test_mot_v3r_ver1() {
    foreach(array(
'MOT-V3r CORlet NeRoNe/08.BD.B3R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.29R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.2AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.43R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.44R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.62R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.74R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.85R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.92R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.93R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.B3R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.E1R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.F0I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/0E.C0.13R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/0E.C0.17R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3re/0E.41.22R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3re/0E.42.03R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3re/0E.42.04R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3re/0E.42.06R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3r_ver1');
      }
  }



  function test_mot_v3re_ver1() {
    foreach(array(
'MOT-V3r/08.BD.D3R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3r/08.BD.D3R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'MOT-V3re/0E.43.04R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3re/0E.43.04R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'MOT-V3re/0E.43.04R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'MOT-V3re/0E.43.08R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3re/0E.43.0AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3re/0E.43.25R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V3re/0E.43.25R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3re_ver1');
      }
  }



  function test_mot_v3x_ver1() {
    foreach(array(
'MOT-RAZRV3x/85.83.84P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.83.E7P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.83.E9P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.92.B0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.92.E3P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.97.40R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.97.70R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.97.71P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.97.F1P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.97.F63 MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.98.70R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.98.90R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.98.A0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.98.D0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.98.D2P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.98.E0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.99.51P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.99.82P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.99.A1P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.9A.70R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.9A.E0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.9B.C0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.9B.D0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.9B.D2P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.9B.E0R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.9B.E5P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/85.9B.E6P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3x/v1.2_9B.E MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3x_ver1');
      }
  }



  function test_mot_v3xv_ver1() {
    foreach(array(
'MOT-RAZRV3xv/85.83.E1P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3xv/85.83.E1P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'MOT-RAZRV3xv/85.92.70R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3xv/85.92.70R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'MOT-RAZRV3xv/85.92.71P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3xv/85.97.C3P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3xv/85.97.C3P MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'MOT-RAZRV3xv/85.97.CDP MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-RAZRV3xvM/85.97.CDP MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3xv_ver1');
      }
  }



  function test_mot_v3xx_ver1() {
    foreach(array(
'MOT-RAZRV3xx/96.66.72AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11033063) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [it]',
'MOT-RAZRV3xx/96.66.72CR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11033063) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-RAZRV3xx/96.66.73BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11033063) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [hu]',
'MOT-RAZRV3xx/96.71.95R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11063081) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV3xx/96.71.95R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11063081) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [es]',
'MOT-RAZRV3xx/96.71.95R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11063081) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-RAZRV3xx/96.80.55AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073083) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [vi]',
'MOT-RAZRV3xx/96.A0.0ER BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073121) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [de]',
'MOT-RAZRV3xx/96.B0.0AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073156) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV3xx/96.B0.0AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073156) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [es]',
'MOT-RAZRV3xx/96.B0.0AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073156) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [vi]',
'MOT-RAZRV3xx/96.B0.0AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073156) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-RAZRV3xx/96.B0.0AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073156) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [es]',
'MOT-RAZRV3xx/96.B0.0FR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073256) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV3xx/96.B0.0FR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073256) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [es]',
'MOT-RAZRV3xx/96.B0.0FR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073256) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-RAZRV3xx/96.B0.0FR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 11073256) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [es]',
'MOT-RAZRV3xx/99.31.08R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12153195) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV3xx/99.31.08R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12153195) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-RAZRV3xx/99.41.04ER BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163189) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [it]',
'MOT-RAZRV3xx/99.41.04ER BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163189) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [it] UP.Link/6.3.0.0.0',
'MOT-RAZRV3xx/99.41.04ER2 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163189) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV3xx/99.41.04ER2 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163189) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [it]',
'MOT-RAZRV3xx/99.41.07R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163225) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-RAZRV3xx/99.41.08R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163225) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [es]',
'MOT-RAZRV3xx/99.41.0ER BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163234) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV3xx/99.41.0ER BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163234) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3xx_ver1');
      }
  }



  function test_mot_v3xxr_ver1() {
    foreach(array(
'MOT-RAZRV3XXR_J/97.04.30R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003290) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-RAZRV3XXR_J/97.04.30R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003290) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [en]',
'MOT-RAZRV3XXR_J/97.04.30R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003290) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [es]',
'MOT-RAZRV3XXR_J/97.04.30R1_F BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003290) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [en]',
'MOT-RAZRV3xxR/97.04.2BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003290) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-RAZRV3xxR/97.04.2BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003290) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [en]',
'MOT-RAZRV3xxR/97.04.2BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003290) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [es]',
'MOT-RAZRV3xxR/97.04.2BR1_F BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003290) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3xxr_ver1');
      }
  }



  function test_mot_v3xxv_ver1() {
    foreach(array(
'MOT-RAZRV3xxv/98.50.11R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12093118) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-RAZRV3xxv/98.50.11R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12093118) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en] UP.Link/6.5.1.3.0',
'MOT-RAZRV3xxv/98.50.14R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12093118) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v3xxv_ver1');
      }
  }



  function test_mot_v400_ver1() {
    foreach(array(
'MOT-V400/0B.09.2FR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v400_ver1');
      }
  }



  function test_mot_v500_ver1() {
    foreach(array(
'MOT-V500/0B.09.1FR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V500/0B.09.38R MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v500_ver1');
      }
  }



  function test_mot_v505_ver1() {
    foreach(array(
'MOT-V505/0B.09.4AR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v505_ver1');
      }
  }



  function test_mot_v525m_ver1() {
    foreach(array(
'MOT-V525M/0B.09.1DR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V525M/0B.09.1DR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/5.1.1',
'MOT-V525M/0B.09.38R MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v525m_ver1');
      }
  }



  function test_mot_v535_ver1() {
    foreach(array(
'MOT-V535/0E.65.25R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V535/0E.66.04R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V535/0E.66.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v535_ver1');
      }
  }



  function test_mot_v540_ver1() {
    foreach(array(
'MOT-V540/08.18.40R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v540_ver1');
      }
  }



  function test_mot_v545_ver1() {
    foreach(array(
'MOT-V545/0E.66.04R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v545_ver1');
      }
  }



  function test_mot_v547_ver1() {
    foreach(array(
'MOT-V547/08.17.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V547/08.17.15R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.1.13.0',
'MOT-V547/08.18.34R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V547/08.18.40R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v547_ver1');
      }
  }



  function test_mot_v550_ver1() {
    foreach(array(
'MOT-V550/0E.65.25R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V550/0E.65.26R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V550/0E.66.0ER MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V550/0E.66.12R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v550_ver1');
      }
  }



  function test_mot_v551_ver1() {
    foreach(array(
'MOT-V551/08.17.0FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V551/08.17.27R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V551/08.18.16R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V551/08.18.40R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V551J/08.18.16R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V551J/08.18.40R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v551_ver1');
      }
  }



  function test_mot_v555_ver1() {
    foreach(array(
'MOT-V555/08.18.40R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v555_ver1');
      }
  }



  function test_mot_v557_ver1() {
    foreach(array(
'MOT-V557/08.28.40R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v557_ver1');
      }
  }



  function test_mot_v560_ver1() {
    foreach(array(
'MOT-V560/0E.A4.0CR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V560/0E.A4.29R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v560_ver1');
      }
  }



  function test_mot_v600_ver1() {
    foreach(array(
'MOT-V600/0B.09.1CR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V600/0B.09.1DR MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V600/0B.09.38R MIB/2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V600/0B.09.58R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V600i/0E.65.23R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v600_ver1');
      }
  }



  function test_mot_v620_ver1() {
    foreach(array(
'MOT-V620/0E.65.25R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V620/0E.66.0BR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v620_ver1');
      }
  }



  function test_mot_v635_ver1() {
    foreach(array(
'MOT-V635/08.48.24R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V635/08.48.25R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'MOT-V635/08.48.6FR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v635_ver1');
      }
  }



  function test_mot_v860_ver1() {
    foreach(array(
'MOT-V860/00.72 UP.Browser/7.2.7.5.665 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v860_ver1');
      }
  }



  function test_mot_v878_ver1() {
    foreach(array(
'MOT-V878/ WAP.Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v878_ver1');
      }
  }



  function test_mot_v8xx_ver1() {
    foreach(array(
'MOT-MOTORAZRmaxxV3/99.41.0BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 12163234) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [zh]',
'MOTORAZR V8/R601_G_80.44.2CR Mozilla/4.0 (compatible; MSIE 6.0 Linux; MOTORAZR V88.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[zh]',
'motorazrV8/R601_G_80.41.1BRP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.42.0FRP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.42.36RP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.42.36R_TP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.42.39RP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.44.0CRP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.44.2BRP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.44.2CRP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.54.0CRP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.54.5DR_AP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.54.60RP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.56.13R_AP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.56.15RP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R601_G_80.xx.yyP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'motorazrV8/R60_G_80.33.44RP Mozilla/4.0 (compatible; MSIE 6.0 Linux; Motorola V8;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v8xx_ver1');
      }
  }



  function test_mot_v975_ver1() {
    foreach(array(
'MOT-V975/80.3F.A2I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V975/80.3F.A5I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V975/82.31.56I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V975/83.38.49. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V975/83.39.23I MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v975_ver1');
      }
  }



  function test_mot_v980_ver1() {
    foreach(array(
'MOT-V980M/80.2F.63. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V980M/83.28.38. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-V980M/83.38.38. MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v980_ver1');
      }
  }



  function test_mot_v9_ver1() {
    foreach(array(
'MOT-MOTORAZRV9/1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 14183237) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.00 [en]',
'MOT-MOTORAZRV9/9C.13.37R3 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 14183237) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [es]',
'MOT-MOTORAZRV9/9C.13.43R2 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 14183245) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [es]',
'MOT-MOTORAZRV9/9C.14.36R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 14003276) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.00 [en]',
'MOT-MOTORAZRV9/A0.01.10R10 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003266) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9/A0.01.10R33 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003266) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [it]',
'MOT-MOTORAZRV9/A0.01.10R43 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003266) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [it]',
'MOT-MOTORAZRV9/A0.02.07R2 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003275) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9/A0.03.07R1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003291) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [vi]',
'MOT-MOTORAZRV9/A0.03.1DR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003291) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [fr]',
'MOT-MOTORAZRV9/A0.03.24R1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003321) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [it]',
'MOT-MOTORAZRV9/A0.03.24R1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003321) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [ru]',
'MOT-MOTORAZRV9/A0.03.28R11 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003321) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9/A0.03.2BR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003321) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9/A0.03.2ER BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003321) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9/A0.03.43R_O BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003321) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [fr]',
'MOT-MOTORAZRV9/A0.05.1FR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9/A0.05.1FR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [fr]',
'MOT-MOTORAZRV9/A0.05.20R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9/A0.05.20R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [vi]',
'MOT-MOTORAZRV9/A0.05.20R1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [de]',
'MOT-MOTORAZRV9/A0.05.20R1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9/A0.05.20R1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [es]',
'MOT-MOTORAZRV9/A0.05.20R1 BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [it]',
'MOT-MOTORAZRV9x/9E.03.28R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003348) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [en]',
'MOT-MOTORAZRV9x/9E.03.28R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.0 UNTRUSTED/1.0',
'MOT-MOTORAZRV9x/9E.03.39R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003352) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [en]',
'MOT-MOTORAZRV9x/9E.03.3AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003352) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [es]',
'MOT-MOTORAZRV9x/9E.03.3AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003352) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [en]',
'MOT-MOTORAZRV9x/9E.03.3AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003352) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [es]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v9_ver1');
      }
  }



  function test_mot_v9m_ver1() {
    foreach(array(
'MOT-PARS_/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'MOT-V9m/1.0 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'MOT-V9mm/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'Motorola-V9m Obigo/Q04C1 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_v9m_ver1');
      }
  }



  function test_mot_va76r_ver1() {
    foreach(array(
'MOT-VA76r/R63715_U_71.01.7AR_C BER/2.0 Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-VA76r/R63715_U_71.01.7CR BER/2.0 Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-VA76r/R63715_U_71.01.7ER BER/2.0 Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_va76r_ver1');
      }
  }



  function test_mot_ve20_ver1() {
    foreach(array(
'MOT-VEGAS/00.72 UP.Browser/7.2.6.1.797 (GUI) MMP/2.0',
'MOT-VEGAS/00.72 UP.Browser/7.2.6.1.835 (GUI) MMP/2.0',
'MOT-VEGAS/00.72 UP.Browser/7.2.6.1.841 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ve20_ver1');
      }
  }



  function test_mot_ve20_ver1_telusmobility() {
    foreach(array(
'MOT-VE20/1.0 UP.Browser/7.2.6.1.731 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ve20_ver1_telusmobility');
      }
  }



  function test_mot_ve240_ver1() {
    foreach(array(
'MOT-VE240/00.72 UP.Browser/7.2.7.5.541 (GUI) MMP/2.0',
'MOT-VE240/00.72 UP.Browser/7.2.7.5.548 (GUI) MMP/2.0',
'MOT-VE240/00.72 UP.Browser/7.2.7.5.599 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ve240_ver1');
      }
  }



  function test_mot_ve440_ver1() {
    foreach(array(
'MOT-VE440/00.72 UP.Browser/7.2.7.5.634 (GUI) MMP/2.0',
'MOT-VE440/00.72 UP.Browser/7.2.7.5.656 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ve440_ver1');
      }
  }



  function test_mot_ve465_ver1() {
    foreach(array(
'MOT-VE465-parrot/1.0 UP.Browser/7.2.7.5.593 (GUI) MMP/2.0',
'MOT-VE465/00.72 UP.Browser/7.2.7.5.541 (GUI) MMP/2.0',
'MOT-VE465/00.72 UP.Browser/7.2.7.5.616 (GUI) MMP/2.0',
'MOT-VE465/00.72 UP.Browser/7.2.7.5.643 (GUI) MMP/2.0',
'MOT-VE465/00.72 UP.Browser/7.2.7.5.659 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ve465_ver1');
      }
  }



  function test_mot_ve538_ver1() {
    foreach(array(
'MOT-VE538/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.2 (GUI) MMP/2.0 Push/PO'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ve538_ver1');
      }
  }



  function test_mot_ve66_ver1() {
    foreach(array(
'MOT-VE66/R6743_G_74.23.04RPL Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-VE66/R6743_G_74.31.02RPL Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0',
'MOT-VE66/R6743_G_74.31.03RPL Mozilla/5.0 (compatible; OSS/1.0; Chameleon; Linux) MotoWebKit/417.19 (KHTML, like Gecko) BER/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/9.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ve66_ver1');
      }
  }



  function test_mot_ve_ver1() {
    foreach(array(
'MOT-20.1_/00.62 UP.Browser/6.2.3.4.c.1.120 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_ve_ver1');
      }
  }



  function test_mot_vu30_ver1() {
    foreach(array(
'MOT-VU30/00.62 UP.Browser/6.2.3.4.c.1.124 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_vu30_ver1');
      }
  }



  function test_mot_vx395_ver1() {
    foreach(array(
'Mot-WX395/1.0 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'mot_vx395_ver1');
      }
  }



  function test_mot_w213_ver1() {
    foreach(array(
'MOT-W213/0.0.44 UP.Browser/6.3.0.6.c.17 (GUI) MMP/2.0',
'MOT-W213/0.0.45 UP.Browser/6.3.0.6.c.17 (GUI) MMP/2.0',
'MOT-W213/0.0.46 UP.Browser/6.3.0.6.c.18 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w213_ver1');
      }
  }



  function test_mot_w220_ver1() {
    foreach(array(
'MOT-W220/1.0 Release/11.22.2006 Browser/CMCS1.0 Software/1.220',
'MOT-W220/1.0 Release/20.08.2007 Browser/CMCS1.0 Software/1.360',
'MOT-W220/1.0 Release/21.03.2007 Browser/CMCS1.0 Software/1.300',
'MOT-W220/1.0 Release/23.07.2007 Browser/CMCS1.0 Software/1.340',
'MOT-W220/1.0 Release/26.10.2007 Browser/CMCS1.0 Software/1.370',
'MOT-W220/1.0 Release/31.01.2007 Browser/CMCS1.0 Software/1.270',
'MOT-W220/1.0 Release/6.30.2006 Browser/CMCS1.0 Software/0.280'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w220_ver1');
      }
  }



  function test_mot_w230_ver1() {
    foreach(array(
'MOT-W230/0.0.31 UP.Browser/6.3.0.6.c.19 (GUI) MMP/2.0',
'MOT-W230/0.0.33 UP.Browser/6.3.0.6.c.19 (GUI) MMP/2.0',
'MOT-W230/0.0.41 UP.Browser/6.3.0.6.c.22 (GUI) MMP/2.0',
'MOT-W230/0.0.44 UP.Browser/6.3.0.6.c.23 (GUI) MMP/2.0',
'MOT-W230/0.0.45 UP.Browser/6.3.0.6.c.23 (GUI) MMP/2.0',
'MOT-W230/0.0.52 UP.Browser/6.3.0.6.c.30 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w230_ver1');
      }
  }



  function test_mot_w231_ver1() {
    foreach(array(
'MOT-W231/0.0.41 UP.Browser/6.3.0.6.c.22 (GUI) MMP/2.0',
'MOT-W231/0.0.45 UP.Browser/6.3.0.6.c.23 (GUI) MMP/2.0',
'MOT-W231/0.0.52 UP.Browser/6.3.0.6.c.30 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w231_ver1');
      }
  }



  function test_mot_w233_ver1() {
    foreach(array(
'MOT-W233/0.0.45 UP.Browser/6.3.0.6.c.23 (GUI) MMP/2.0',
'MOT-W233/0.0.64 UP.Browser/6.3.0.6.c.37 (GUI) MMP/2.0 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w233_ver1');
      }
  }



  function test_mot_w270_ver1() {
    foreach(array(
'MOT-W270/0.0.35 UP.Browser/6.3.0.6.c.20 (GUI) MMP/2.0',
'MOT-W270/0.0.36 UP.Browser/6.3.0.6.c.21 (GUI) MMP/2.0',
'MOT-W270/0.0.42 UP.Browser/6.3.0.6.c.23 (GUI) MMP/2.0',
'MOT-W270/0.0.44 UP.Browser/6.3.0.6.c.23 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w270_ver1');
      }
  }



  function test_mot_w315_ver1() {
    foreach(array(
'MOT-W315/1.0 UP.Browser/6.2.2.6.n.1.101 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w315_ver1');
      }
  }



  function test_mot_w360_ver1() {
    foreach(array(
'MOT-W360/1.0 Release/03.06.2008 Browser/CMCS1.0 Software/1.180 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W360/1.0 Release/12.06.2007 Browser/CMCS1.0 Software/1.06A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w360_ver1');
      }
  }



  function test_mot_w375_ver1() {
    foreach(array(
'MOT-JFJK0/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'MOT-JFJKN/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'MOT-W375/0.0.62 UP.Browser/6.3.0.6.c.8 (GUI) MMP/2.0',
'MOT-W375/0.0.64 UP.Browser/6.3.0.6.c.9 (GUI) MMP/2.0',
'MOT-W375/0.0.71 UP.Browser/6.3.0.6.c.11 (GUI) MMP/2.0',
'MOT-W375/0.0.72 UP.Browser/6.3.0.6.c.11 (GUI) MMP/2.0',
'MOT-W375/0.0.73 UP.Browser/6.3.0.6.c.10 (GUI) MMP/2.0',
'MOT-W375/0.0.79 UP.Browser/6.3.0.6.c.10 (GUI) MMP/2.0',
'MOT-W375/0.0.80 UP.Browser/6.3.0.6.c.10 (GUI) MMP/2.0',
'MOT-W375/0.0.84 UP.Browser/6.3.0.6.c.17 (GUI) MMP/2.0',
'MOT-W385/1.0 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'MOT-W385m/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'Motorola-w385 Obigo/Q04C1 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w375_ver1');
      }
  }



  function test_mot_w376g_ver1() {
    foreach(array(
'MOT-W376g/6.1.31[TF012111004803129001954004803169670] UP.Browser/6.3.0.6.c.19 (GUI) MMP/2.0 UP.Link/6.3.1.20.0',
'MOT-W376g/6.1.31[TF356893018960532001237202197760726] UP.Browser/6.3.0.6.c.19 (GUI) MMP/2.0 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w376g_ver1');
      }
  }



  function test_mot_w377_ver1() {
    foreach(array(
'MOT-W377/0.0.21 UP.Browser/6.3.0.6.c.18 (GUI) MMP/2.0',
'MOT-W377/0.0.23 UP.Browser/6.3.0.6.c.19 (GUI) MMP/2.0',
'MOT-W377/0.0.32 UP.Browser/6.3.0.6.c.19 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w377_ver1');
      }
  }



  function test_mot_w388_ver1() {
    foreach(array(
'MOT-W388/0.0.41 UP.Browser/6.3.0.6.c.24 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W388/0.0.46 UP.Browser/6.3.0.6.c.28 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W388/0.0.49 UP.Browser/6.3.0.6.c.28 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W388/0.1.41 UP.Browser/6.3.0.6.c.24 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W388/0.1.42 UP.Browser/6.3.0.6.c.24 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W388/0.1.43 UP.Browser/6.3.0.6.c.27 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w388_ver1');
      }
  }



  function test_mot_w396_ver1() {
    foreach(array(
'MOT-W396/0.0.47 UP.Browser/6.3.0.6.c.28 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W396/0.0.49 UP.Browser/6.3.0.6.c.28 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W396/0.1.42 UP.Browser/6.3.0.6.c.24 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W396/0.1.43 UP.Browser/6.3.0.6.c.27 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W398/0E.30.48R MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w396_ver1');
      }
  }



  function test_mot_w397_ver1() {
    foreach(array(
'MOT-W397v/0.1.44 UP.Browser/6.3.0.6.c.27 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w397_ver1');
      }
  }



  function test_mot_w450_ver1() {
    foreach(array(
'MOT-W403/0.0.27 UP.Browser/6.3.0.6.c.43 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W403/0.0.27 UP.Browser/6.3.0.6.c.43 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'MOT-W403/0.1.27 UP.Browser/6.3.0.6.c.43 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-W450/0.1.58.K1/08.18.2008 Browser/UPB6.3 Software/13.105I',
'MOT-W450/0.1.72.K1/12.24.2008 Browser/UPB6.3 Software/13.119I'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w450_ver1');
      }
  }



  function test_mot_w490_ver1() {
    foreach(array(
'MOT-W490/08.13.04R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-W490/08.24.02R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w490_ver1');
      }
  }



  function test_mot_w510_ver1() {
    foreach(array(
'MOT-W510/08.11.04R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-W510/08.11.05R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-W510/08.13.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-W510/08.13.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 UP.Link/6.3.1.16.0',
'MOT-W510/08.13.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w510_ver1');
      }
  }



  function test_mot_w5_0800() {
    foreach(array(
'MOT-W5/08.00.05R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w5_0800');
      }
  }



  function test_mot_w6_ver1() {
    foreach(array(
'MOT-W6/08.00.0CR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w6_ver1');
      }
  }



  function test_mot_w755_ver1() {
    foreach(array(
'MOT-COOL0/00.62 UP.Browser/6.2.3.4.c.1.128 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w755_ver1');
      }
  }



  function test_mot_w760r_ver1() {
    foreach(array(
'MOTO-W760r/Mozilla/4.0 (compatible;MSIE 6.0;Linux W760r)/R63712_U_71.xx.yyI Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0 UP.Link/6.5.1.0.0',
'MOTO-W760r/Mozilla/4.0 (compatible;MSIE 6.0;Linux W760r)/R63712_U_71.xx.yyI Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0 UP.Link/6.5.1.0.06.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w760r_ver1');
      }
  }



  function test_mot_w766_ver1() {
    foreach(array(
'MOT-W766/00.72 UP.Browser/7.2.7.5.606 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w766_ver1');
      }
  }



  function test_mot_w7_ver1() {
    foreach(array(
'MOT-W7/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.2 (GUI) MMP/2.0 Push/PO',
'MOT-W7/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.2, Browser/UP.Browser/7.2.7.2 (GUI) MMP/2.0 Push/PO'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w7_ver1');
      }
  }



  function test_mot_w840_ver1() {
    foreach(array(
'MOT-W840/00.72 UP.Browser/7.2.7.5.663 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w840_ver1');
      }
  }



  function test_mot_w845_ver1() {
    foreach(array(
'MOT-W845/00.72 UP.Browser/7.2.7.5.663 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_w845_ver1');
      }
  }



  function test_mot_wx390_ver1() {
    foreach(array(
'Mot-WX280/1.0 ObigoInternetBrowser/Q03C',
'Mot-WX288/1.0 ObigoInternetBrowser/Q03C',
'Mot-WX390/1.0 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'mot_wx390_ver1');
      }
  }



  function test_mot_xt701_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.0.1; zh-cn; XT701 Build/STCU_11.04.1) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'mot_xt701_ver1');
      }
  }



  function test_mot_xt702_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; XT720)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; X10 Build/EDREAM1.0-INT-100629-0723) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; XT720 Build/STSKT_N_79.11.36R) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; XT720 Build/STSKT_N_79.11.39R) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; XT720)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-kr; XT720 Build/STSKT_N_79.11.36R1) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-kr; XT720 Build/STSKT_N_79.11.39R) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-kr; XT720 Build/STSKT_N_79.22.39R) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; XT701)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; XT702)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; XT800)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; XT701)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; XT701 Build/STCU_31.05.4) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; XT800 Build/TITA_M2_16.09.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; XT800 Build/TITA_M2_16.12.4) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-tw; XT701 Build/STCU_31.05.4) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'mot_xt702_ver1');
      }
  }



  function test_mot_xt720_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.0.1; ko-KR; XT720)',
'Mozilla/5.0 (Linux; U; Android 2.0.1; ko-kr; XT720 Build/STSKT_N_79.11.31R) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'mot_xt720_ver1');
      }
  }



  function test_mot_z3_ver1() {
    foreach(array(
'MOT-Z3/08.01.02R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.01.05R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.02.08R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.02.08R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 UP.Link/6.3.1.13.0',
'MOT-Z3/08.02.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.02.0BR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.02.0CR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.02.0CR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0 UP.Link/6.3.0.0.0',
'MOT-Z3/08.02.0DR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.04.09R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.04.0BR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.05.02R MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Z3/08.05.0BR MIB/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0',
'MOT-Zacubi iTunes/v3.0 MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-Zacubi iTunes/v3.1 MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_z3_ver1');
      }
  }



  function test_mot_z6_ver1() {
    foreach(array(
'MOTOROKR Z6/R60_G_80.33.03R Mozilla/4.0 (compatible; MSIE 6.0 Linux; MOTOROKR Z6;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'MOTOROKR Z6/R60_G_80.33.4ER Mozilla/4.0 (compatible; MSIE 6.0 Linux; MOTOROKR Z6;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'MOTOROKR Z6/R60_G_80.xx.yyI Mozilla/4.0 (compatible; MSIE 6.0 Linux; MOTOROKR Z6;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy]',
'MOTOROKR Z6/R60_G_80.xx.yyI Mozilla/4.0 (compatible; MSIE 6.0 Linux; MOTOROKR Z6;nnn) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.50[yy] UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_z6_ver1');
      }
  }



  function test_mot_z6c_ver1() {
    foreach(array(
'MOT-JACQU/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_z6c_ver1');
      }
  }



  function test_mot_z6m_ver1() {
    foreach(array(
'MOT-Z6m/00.62 UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0',
'Motorola-Z6m UP.Browser/6.2.3.4.c.1.123 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_z6m_ver1');
      }
  }



  function test_mot_z9_ver1() {
    foreach(array(
'MOT-MOTOZ9/9E.01.16R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003306) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [en]',
'MOT-MOTOZ9/9E.02.0FR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003306) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [es]',
'MOT-MOTOZ9/9E.03.3AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003352) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.60 [es] UP.Link/6.3.0.0.0',
'MOT-MOTOZ9/9E.03.3AR BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 13003352) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera 8.60 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'mot_z9_ver1');
      }
  }



  function test_mot_zn200_ver1() {
    foreach(array(
'MOT-ZN200/1.0 Release/03.26.2009 Browser/CMCS1.0 Software/1.620 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-ZN200/1.0 Release/09.01.2008 Browser/CMCS1.0 Software/0.34D Profile/MIDP-2.0 Configuration/CLDC-1.1',
'MOT-ZN200/1.0 Release/10.26.2008 Browser/CMCS1.0 Software/1.03C Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'mot_zn200_ver1');
      }
  }



  function test_mot_zn300_ver1() {
    foreach(array(
'MOT-ZN300/13.02.0BR_B BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 17243441) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.65 [pt]',
'MOT-ZN300/13.02.14R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 17243462) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.65 [en]',
'MOT-ZN300/13.02.14R BER2.2 Mozilla/4.0 (compatible; MSIE 6.0; 17243462) Profile/MIDP-2.0 Configuration/CLDC-1.1  Opera 8.65 [ro]',
'MOT-ZN300/13.02.14R Release/09.24.2008 OPERA/BER2.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 EGE/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_zn300_ver1');
      }
  }



  function test_mot_zn4_ver1() {
    foreach(array(
'MOT-ZN4/00.72 UP.Browser/7.2.7.5.597 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_zn4_ver1');
      }
  }



  function test_mot_zn5_ver1() {
    foreach(array(
'MOT-ZN5/R6637_G_81.03.05R Mozilla/4.0 (compatible; OSS/1.0; Linux MOTOZINE ZN5) Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0',
'MOT-ZN5/R6637_G_81.03.07R Mozilla/4.0 (compatible; OSS/1.0; Linux MOTOZINE ZN5) Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0',
'MOT-ZN5/R6637_G_81.03.0DR Mozilla/4.0 (compatible; OSS/1.0; Linux MOTOZINE ZN5) Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0',
'MOT-ZN5/R6637_G_81.11.17R_128 Mozilla/5.0 (compatible; MSIE 6.0; Linux; MOTOZINE ZN5) Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony/1.0',
'MOT-ZN5/R6637_G_81.11.2CR_128 Mozilla/5.0 (compatible; MSIE 6.0; Linux; MOTOZINE ZN5) Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony/1.0',
'MOT-ZN5/aiyin_singlspark_first_81.03.05R Mozilla/4.0 (compatible; OSS/1.0; Linux MOTOZINE ZN5) Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0',
'Mozilla/4.0 (compatible;MSIE 6.0;Linux MOTOZINE ZN5)MOTOZINE ZN5/R6637_G_81.03.05R Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0',
'Mozilla/4.0 (compatible;MSIE 6.0;Linux MOTOZINE ZN5)MOTOZINE ZN5/R6637_G_81.03.0ER Profile/MIDP-2.0 Configuration/CLDC-1.1 Symphony 1.0'
    ) as $ua) {
        $this->checkUA($ua, 'mot_zn5_ver1');
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

  function motTest() {
    $this->UnitTestCase('mot Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new MotTest();
$test->run(new TextReporter());

?>
