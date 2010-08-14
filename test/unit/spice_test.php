<?php

/*
 * Recognising Spice devices from their user agents
 *
 */

require_once 'test_helper.php';

class SpiceTest extends TeraWurflTestCase {

  var $wurfl;


  function test_spice_d88_ver1() {
    foreach(array(
'Spice D88/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'spice_d88_ver1');
      }
  }



  function test_spice_d90_ver1() {
    foreach(array(
'Spice D-90/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'spice_d90_ver1');
      }
  }



  function test_spice_m5252_ver1() {
    foreach(array(
'Spice M5252'
    ) as $ua) {
        $this->checkUA($ua, 'spice_m5252_ver1');
      }
  }



  function test_spice_m6464_ver1() {
    foreach(array(
'SPICE-M6464/1.0 IAC/M6235 IAC/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'spice_m6464_ver1');
      }
  }



  function test_spice_m940_ver1() {
    foreach(array(
'SPICE M-940'
    ) as $ua) {
        $this->checkUA($ua, 'spice_m940_ver1');
      }
  }



  function test_spice_s5330_ver1() {
    foreach(array(
'Spice S5330'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s5330_ver1');
      }
  }



  function test_spice_s5420_ver1() {
    foreach(array(
'Spice S5420'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s5420_ver1');
      }
  }



  function test_spice_s570_ver1() {
    foreach(array(
'SPICE S570/KAA623FM_1.00.A26 Nucleus/1.0 MTK/6223 Release/06.26.2007 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s570_ver1');
      }
  }



  function test_spice_s580_ver1() {
    foreach(array(
'Spice S580'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s580_ver1');
      }
  }



  function test_spice_s590_ver1() {
    foreach(array(
'Spice S590'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s590_ver1');
      }
  }



  function test_spice_s600_ver1() {
    foreach(array(
'SPICE-S600/WAP Browser'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s600_ver1');
      }
  }



  function test_spice_s650_ver1() {
    foreach(array(
'Spice S650/KAA736_0.90.626 Nucleus/1.0 MTK/6223 Release/06.26.2007 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s650_ver1');
      }
  }



  function test_spice_s707_ver1() {
    foreach(array(
'Spice S707/2008.05.29 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2008.07.09 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2008.08.20 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2008.09.02 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2008.09.26 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2008.09.27 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2008.12.03 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2009.03.03 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2009.03.25 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2009.04.10 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2009.04.28 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2009.05.31 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2009.06.29 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2009.07.08 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Spice S707/2009.07.15 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s707_ver1');
      }
  }



  function test_spice_s710_ver1() {
    foreach(array(
'Spice S710'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s710_ver1');
      }
  }



  function test_spice_s7_ver1() {
    foreach(array(
'Spice-S7/KAA263_0.93.C01 Nucleus/1.0 MTK/6226 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s7_ver1');
      }
  }



  function test_spice_s820_ver1() {
    foreach(array(
'Spice S820'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s820_ver1');
      }
  }



  function test_spice_s920_ver1() {
    foreach(array(
'SPICE S920',
'SPICE-S920/KAA363_0.93.822 Nucleus/1.0 MTK/6228 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0 SPICE-S920/KAA363_0.93.822 Nucleus/1.0 MTK/6228 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s920_ver1');
      }
  }



  function test_spice_s940_ver1() {
    foreach(array(
'SPICE S940'
    ) as $ua) {
        $this->checkUA($ua, 'spice_s940_ver1');
      }
  }



  function test_spice_x1_ver1() {
    foreach(array(
'SPICE-X1',
'SPICE-X1/S114 Release/2008.06.26 Profile/MIDP2.0 Configuration/CLDC1.1',
'SPICE-X1/S119 Release/2008.09.05 Profile/MIDP2.0 Configuration/CLDC1.1'
    ) as $ua) {
        $this->checkUA($ua, 'spice_x1_ver1');
      }
  }



  ############################################################


  function spiceTest() {
    $this->UnitTestCase('spice Test');
  }


}

$test = new SpiceTest();
$test->run(new TextReporter());

?>
