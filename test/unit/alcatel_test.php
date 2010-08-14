<?php

/*
 * Recognising Alcatel devices from their user agents
 *
 */

require_once 'test_helper.php';

class AlcatelTest extends TeraWurflTestCase {

  var $wurfl;


  function test_alcatel_mtc_540_ver1() {
    foreach(array(
'Vodafone/1.0/X1i Opera/9.50 (Windows NT 5.1; U; en)'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_mtc_540_ver1');
      }
  }


  function test_alcatel_bh4_ver1() {
    foreach(array(
'Alcatel-BH4/1.0 UP.Browser/6.2.ALCATEL MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_bh4_ver1');
      }
  }



  function test_alcatel_mandarina_duck_ver1() {
    foreach(array(
'Alcatel-Mandarina-Duck/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_mandarina_duck_ver1');
      }
  }



  function test_alcatel_ot708_ver1() {
    foreach(array(
'Alcatel-OT-708/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Alcatel-OT-708/1.0 model-orange Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Alcatel-OT-708A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Alcatel-OT-708A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C UP.Link/6.3.0.0.0',
'Alcatel-OT-708A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C UP.Link/6.3.1.16.0',
'Alcatel-OT-708A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C, Alcatel-OT-708A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Vodafone541/2.0 Profile V010 03/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Vodafone541/2.0 Profile V010 04/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Vodafone541/2.0 Profile V010 06/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Vodafone541/2.0 Profile V010 08/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Vodafone541/2.0 Profile V010 09/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Vodafone541/2.0 Profile V010 09a/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C,Vodafone541/2.0 Profile V010 09a/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Vodafone541/2.0 Profile V010 11/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Vodafone541/2.0 Profile V010 12/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot708_ver1');
      }
  }



  function test_alcatel_ot717_ver1() {
    foreach(array(
'Alcatel-OT-C717/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot717_ver1');
      }
  }



  function test_alcatel_ot_303_ver1() {
    foreach(array(
'Alcatel-OT-303/1.0 ObigoInternetBrowser/Q03C',
'Alcatel-OT-303A/1.0 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_303_ver1');
      }
  }



  function test_alcatel_ot_305_ver1() {
    foreach(array(
'Alcatel-OT-305/1.0 ObigoInternetBrowser/Q03C',
'Alcatel-OT-305A/1.0 ObigoInternetBrowser/Q03C',
'Alcatel-OT-305A/1.0 ObigoInternetBrowser/Q03C UP.Link/6.3.0.0.0',
'Alcatel-OT-305A/1.0 ObigoInternetBrowser/Q03C, Alcatel-OT-305A/1.0 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_305_ver1');
      }
  }



  function test_alcatel_ot_363_ver1() {
    foreach(array(
'Alcatel-OT-363/1.0 ObigoInternetBrowser/Q03C',
'Alcatel-OT-363/1.0 model-orange ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_363_ver1');
      }
  }



  function test_alcatel_ot_600_ver1() {
    foreach(array(
'Alcatel-OT-600/1.0 ObigoInternetBrowser/Q03C',
'Alcatel-OT-600/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_600_ver1');
      }
  }



  function test_alcatel_ot_600a_ver1() {
    foreach(array(
'Alcatel-OT-600A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_600a_ver1');
      }
  }



  function test_alcatel_ot_660_ver1() {
    foreach(array(
'Alcatel-OT-660/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Alcatel-OT-660A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_660_ver1');
      }
  }


  function test_alcatel_ot_505_ver1() {
    foreach(array(
'Alcatel-OT-505/1.0 ObigoInternetBrowser/Q03C',
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_505_ver1');
      }
  }


  function test_alcatel_ot_800_ver1() {
    foreach(array(
'Alcatel-OT-800',
'Alcatel-OT-800/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A',
'Alcatel-OT-800/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A UP.Link/6.3.0.0.0',
'Alcatel-OT-800/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A, Alcatel-OT-800/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A',
'Alcatel-OT-800/1.0 model-orange Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A',
'Alcatel-OT-800A',
'Alcatel-OT-800A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A',
'Alcatel-OT-800A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A UP.Link/6.3.0.0.0',
'Alcatel-OT-800A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A UP.Link/6.3.1.16.0',
'Alcatel-OT-800A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A, Alcatel-OT-800A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_800_ver1');
      }
  }


  function test_alcatel_ot_880a_ver1() {
    foreach(array(
'Alcatel-OT-880A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A',
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_880a_ver1');
      }
  }



  function test_alcatel_ot_808a_ver1() {
    foreach(array(
'Alcatel-OT-808A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A UP.Link/6.3.1.16.0',
'Alcatel-OT-808A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A',
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_808a_ver1');
      }
  }


  function test_alcatel_ot_808_ver1() {
    foreach(array(
'Alcatel-OT-808/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q05A',
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_808_ver1');
      }
  }



  function test_alcatel_ot_c630_ver1() {
    foreach(array(
'Alcatel-OT-C630/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_c630_ver1');
      }
  }



  function test_alcatel_ot_c701_ver1() {
    foreach(array(
'Alcatel-OT-C701/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C',
'Alcatel-OT-C701/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C UP.Link/6.3.0.0.0',
'Alcatel-OT-C701/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C UP.Link/6.3.1.16.0',
'Alcatel-OT-C701/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C,Alcatel-OT-C701/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_c701_ver1');
      }
  }



  function test_alcatel_ot_s218_ver1() {
    foreach(array(
'Alcatel-OT-S218/1.0 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_s218_ver1');
      }
  }



  function test_alcatel_ot_s321a_ver1() {
    foreach(array(
'Alcatel-OT-S321A/1.0 ObigoInternetBrowser/Q03C',
'Alcatel-OT-S321A/1.0 ObigoInternetBrowser/Q03C, Alcatel-OT-S321A/1.0 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_s321a_ver1');
      }
  }



  function test_alcatel_ot_s621_ver1() {
    foreach(array(
'Alcatel-OT-S621/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_s621_ver1');
      }
  }



  function test_alcatel_ot_s626_ver1() {
    foreach(array(
'Alcatel-OT-S626A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_s626_ver1');
      }
  }



  function test_alcatel_ot_s692_ver1() {
    foreach(array(
'OT-S692/1.0 MTK/W07.12 Release/06.01.2008 Browser/Teleca-1.2'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_s692_ver1');
      }
  }



  function test_alcatel_ot_v670_ver1() {
    foreach(array(
'Alcatel-OT-V670/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_v670_ver1');
      }
  }



  function test_alcatel_ot_v670a_ver1() {
    foreach(array(
'Alcatel-OT-V670A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_v670a_ver1');
      }
  }



  function test_alcatel_ot_v770_ver1() {
    foreach(array(
'Alcatel-OT-v770/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ot_v770_ver1');
      }
  }



  function test_alcatel_ots319a_ver1() {
    foreach(array(
'Alcatel-OT-S319/1.0 ObigoInternetBrowser/Q03C',
'Alcatel-OT-S319A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C, Alcatel-OT-S319A/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_ots319a_ver1');
      }
  }



  function test_alcatel_s520_ver1() {
    foreach(array(
'Alcatel-OT-S520/1.0 ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_s520_ver1');
      }
  }



  function test_alcatel_th3_ver1() {
    foreach(array(
'Alcatel-TH3/1.0 UP.Browser/6.2.ALCATEL MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_th3_ver1');
      }
  }



  function test_alcatel_vodafone331_ver1() {
    foreach(array(
'Vodafone/1.0/Vodafone-330-FM/1.0 Browser/ObigoInternetBrowser/Q03C',
'Vodafone/1.0/Vodafone-331-FM/1.0 Browser/ObigoInternetBrowser/Q03C',
'Vodafone/1.0/Vodafone-331/1.0 Browser/ObigoInternetBrowser/Q03C'
    ) as $ua) {
        $this->checkUA($ua, 'alcatel_vodafone331_ver1');
      }
  }



  ############################################################


  function alcatelTest() {
    $this->UnitTestCase('alcatel Test');
  }


}

$test = new AlcatelTest();
$test->run(new TextReporter());

?>
