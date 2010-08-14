<?php

/*
 * Recognising Fly devices from their user agents
 *
 */

require_once 'test_helper.php';

class FlyTest extends TeraWurflTestCase {

  var $wurfl;


  function test_fly_mc170ds_ver1() {
    foreach(array(
'Fly_MC170DS/MIDP2.0/ConfigurationWap2.0',
    ) as $ua) {
        $this->checkUA($ua, 'fly_mc170ds_ver1');
      }
  }

  function test_fly_2040_ver1() {
    foreach(array(
'FLY-2040/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1, FLY-2040/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'fly_2040_ver1');
      }
  }



  function test_fly_2080_ver1() {
    foreach(array(
'Fly 2080',
'Fly 2080 Fly 2080'
    ) as $ua) {
        $this->checkUA($ua, 'fly_2080_ver1');
      }
  }



  function test_fly_b400_ver1() {
    foreach(array(
'Fly-B400/Profile/MIDP.2.0Configuration/CLDC.1.0',
'Fly-B400/Profile/MIDP.2.0Configuration/CLDC.1.0, Fly-B400/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_b400_ver1');
      }
  }



  function test_fly_b600_ver1() {
    foreach(array(
'B600/SW1.1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/Handset WAP B600/SW1.1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/Handset WAP'
    ) as $ua) {
        $this->checkUA($ua, 'fly_b600_ver1');
      }
  }



  function test_fly_ds150_ver1() {
    foreach(array(
'Fly_DS150/MAUIBrowser/Configuration/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_ds150_ver1');
      }
  }



  function test_fly_ds170_ver1() {
    foreach(array(
'Fly_DS170 Configuration/WAP2.0/Browser'
    ) as $ua) {
        $this->checkUA($ua, 'fly_ds170_ver1');
      }
  }



  function test_fly_ds400_ver1() {
    foreach(array(
'FLY-DS400/WAP1.2'
    ) as $ua) {
        $this->checkUA($ua, 'fly_ds400_ver1');
      }
  }



  function test_fly_ds500_ver1() {
    foreach(array(
'Fly-DS500/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_ds500_ver1');
      }
  }



  function test_fly_e105_ver1() {
    foreach(array(
'Fly-E105/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_e105_ver1');
      }
  }



  function test_fly_e300_ver1() {
    foreach(array(
'Fly-E300/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_e300_ver1');
      }
  }



  function test_fly_lx500_ver1() {
    foreach(array(
'Fly-LX500/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_lx500_ver1');
      }
  }



  function test_fly_lx610_ver1() {
    foreach(array(
'Fly-LX610/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_lx610_ver1');
      }
  }



  function test_fly_mp600_ver1() {
    foreach(array(
'FLY MP600 WAP Browser FLY MP600 WAP Browser'
    ) as $ua) {
        $this->checkUA($ua, 'fly_mp600_ver1');
      }
  }



  function test_fly_sl500i_ver1() {
    foreach(array(
'FLY-SL500i/BSI AU.Browser/2.0 QO3C1 MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_sl500i_ver1');
      }
  }



  function test_fly_sx200_ver1() {
    foreach(array(
'Fly-SX200/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_sx200_ver1');
      }
  }



  function test_fly_sx210_ver1() {
    foreach(array(
'FLY-SX210/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_sx210_ver1');
      }
  }



  function test_fly_sx230_ver1() {
    foreach(array(
'Fly-SX230/Profile/MIDP.2.0Configuration/CLDC.1.0',
'Fly-SX230/Profile/MIDP.2.0Configuration/CLDC.1.0, Fly-SX230/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_sx230_ver1');
      }
  }



  function test_fly_sx315_ver1() {
    foreach(array(
'Fly-SX315/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'fly_sx315_ver1');
      }
  }



  function test_fly_sx390_ver1() {
    foreach(array(
'FLY-SX390/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'fly_sx390_ver1');
      }
  }



  function test_fly_v120_ver1() {
    foreach(array(
'Fly V120'
    ) as $ua) {
        $this->checkUA($ua, 'fly_v120_ver1');
      }
  }



  function test_fly_v71_ver1() {
    foreach(array(
'Fly V71'
    ) as $ua) {
        $this->checkUA($ua, 'fly_v71_ver1');
      }
  }



  ############################################################


  function flyTest() {
    $this->UnitTestCase('fly Test');
  }


}

$test = new FlyTest();
$test->run(new TextReporter());

?>
