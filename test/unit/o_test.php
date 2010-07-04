<?php

/*
 * Recognising O devices from their user agents
 *
 */

require_once 'test_helper.php';

class OTest extends UnitTestCase {

  var $wurfl;


  function test_o2_cocoon_ver1() {
    foreach(array(
'COCOON/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'o2_cocoon_ver1');
      }
  }



  function test_o2_xda_atom_exec_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; O2 Xda Atom Exec; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_atom_exec_ver1');
      }
  }



  function test_o2_xda_atom_life_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) O2 Xda Atom Life',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) O2 Xda Atom Life',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) O2 Xda Atom Life',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) O2 Xda Atom Life'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_atom_life_ver1');
      }
  }



  function test_o2_xda_atom_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; O2 Xda Atom; PPC; 240x320)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) O2 Xda Atom'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_atom_ver1');
      }
  }



  function test_o2_xda_diamond_pro_ver1() {
    foreach(array(
'Xda_diamond/480x640 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_diamond_pro_ver1');
      }
  }



  function test_o2_xda_diamond_ver1() {
    foreach(array(
'Xda_diamond Opera/9.50 (Windows NT 5.1; U; de)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_diamond_ver1');
      }
  }



  function test_o2_xda_exec_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC;JASJAR;640x480; PPC; Xda Exec; 640x480)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_exec_ver1');
      }
  }



  function test_o2_xda_ignito_ver1() {
    foreach(array(
'Xda_Ignito/480x640 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_ignito_ver1');
      }
  }



  function test_o2_xda_iq_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Xda IQ; 240x320))'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_iq_ver1');
      }
  }



  function test_o2_xda_minis_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Xda Mini S; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_minis_ver1');
      }
  }



  function test_o2_xda_orbit_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Xda Orbit; 240x320)',
'Xda Orbit; 240x320 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_orbit_ver1');
      }
  }



  function test_o2_xda_orbitii_ver1() {
    foreach(array(
'Xda_orbit_2/240x320 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'Xda_orbit_2; 240x320 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_orbitii_ver1');
      }
  }



  function test_o2_xda_stealth_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; O2 Xda Stealth; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_stealth_ver1');
      }
  }



  function test_o2_xda_stellar_ver1() {
    foreach(array(
'Xda_Stellar; 240x320 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_stellar_ver1');
      }
  }



  function test_o2_xda_trion_ver1() {
    foreach(array(
'Xda_trion; 240x320 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_trion_ver1');
      }
  }



  function test_o2_xda_zinc_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; O2 Xda Zinc; PPC; 240x320)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) O2 Xda Zinc'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xda_zinc_ver1');
      }
  }



  function test_o2_xdaii_mini_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; O2 Xda 2mini; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xdaii_mini_ver1');
      }
  }



  function test_o2_xdaii_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; O2 Xda 2i; PPC; 240x320)',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; O2 Xda II;PPC;240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xdaii_ver1');
      }
  }



  function test_o2_xdaiis_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; O2 Xda 2s;PPC;240x320; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'o2_xdaiis_ver1');
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

  function oTest() {
    $this->UnitTestCase('o Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new OTest();
$test->run(new TextReporter());

?>
