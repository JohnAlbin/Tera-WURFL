<?php

/*
 * Recognising Sonyericsson devices from their user agents
 *
 */

require_once 'test_helper.php';

class SonyericssonTest extends UnitTestCase {

  var $wurfl;


  function test_sonyericsson_c510_ver1() {
    foreach(array(
'SonyEricssonC510',
'SonyEricssonC510/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonC510/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.1',
'SonyEricssonC510/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC510/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonC510/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonC510/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonC510/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonc510',
'SonyEricssonC510/R1DE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonC510/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonC510/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 UCWEB5.1',
'SonyEricssonC510/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonC510/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 Novarra-Vision/8.0',
'SonyEricssonC510/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.3',
'SonyEricssonC510/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC510/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/10.00 (Windows NT 5.1; U; en ) Presto/2.2.0',
'SonyEricssonC510/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonC510/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonC510/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonC510/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonc510',
'SonyEricssonC510/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonc510/UC Browser7.0.0.41/70/351',
'SonyEricssonC510/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonc510/UC Browser7.0.0.41/70/352',
'SonyEricssonC510/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonC510/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5',
'SonyEricssonC510/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC510/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonC510/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonc510',
'SonyEricssonC510/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonc510/UC Browser7.0.0.41/70/352',
'SonyEricssonC510/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonc510'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_c510_ver1');
      }
  }



  function test_sonyericsson_c510a_ver1() {
    foreach(array(
'SonyEricssonC510a',
'SonyEricssonC510a/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonC510a/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1 UP.Link/6.3.0.0.0',
'SonyEricssonC510a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonC510a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2 UP.Link/6.3.0.0.0',
'SonyEricssonC510a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2 UP.Link/6.5.1.0.0',
'SonyEricssonC510a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonC510a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 UP.Link/6.5.1.0.0',
'SonyEricssonC510a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 UP.Link/6.5.1.0.06.5.1.0.0',
'SonyEricssonC510a/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC510a/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5',
'SonyEricssonC510a/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_c510a_ver1');
      }
  }



  function test_sonyericsson_c510v_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonC510av/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'Mozilla/4.0 SonyEricssonC510v/R1DE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'Mozilla/4.0 SonyEricssonC510v/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'Mozilla/4.0 SonyEricssonC510v/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'Mozilla/4.0 SonyEricssonC510v/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonc510/UC Browser7.0.0.41/70/352',
'Mozilla/4.0 SonyEricssonC510v/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_c510v_ver1');
      }
  }



  function test_sonyericsson_c702_ver1() {
    foreach(array(
'SonyEricssonC702',
'SonyEricssonC702/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0',
'SonyEricssonC702/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0 UP.Link/6.3.0.0.0',
'SonyEricssonC702/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0 UP.Link/6.5.0.0.0',
'SonyEricssonC702/R3BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonC702/R3BH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0',
'SonyEricssonC702/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'SonyEricssonC702/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.1',
'SonyEricssonC702/R3CA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC702/R3CA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonC702/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonC702/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2 UP.Link/6.3.0.0.0',
'SonyEricssonC702/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonC702/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonC702/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3',
'SonyEricssonC702/R3EE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonC702/R3EF Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonC702/R3EK Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonC702/R3EK Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC702/R3EK Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonC702/R3EK Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonc702',
'SonyEricssonC702a/R3EK Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_c702_ver1');
      }
  }



  function test_sonyericsson_c901_ver1() {
    foreach(array(
'SonyEricssonC901',
'SonyEricssonC901/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonC901/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonC901/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonC901/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_c901_ver1');
      }
  }



  function test_sonyericsson_c902_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonC902v/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0',
'Mozilla/4.0 SonyEricssonC902v/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonC902v/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'Mozilla/4.0 SonyEricssonC902v/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonC902v/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'Mozilla/4.0 SonyEricssonC902v/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Mozilla/4.0 SonyEricssonC902v/R3EE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'Mozilla/4.0 SonyEricssonC902v/R3EE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.5.0.0.0',
'Mozilla/4.0 SonyEricssonC902v/R3EE Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Mozilla/4.0 SonyEricssonC902v/R3EH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonC902',
'SonyEricssonC902/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0',
'SonyEricssonC902/R3BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC902/R3BH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0',
'SonyEricssonC902/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'SonyEricssonC902/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1 UP.Link/6.5.0.0.06.5.0.0.0',
'SonyEricssonC902/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.1',
'SonyEricssonC902/R3CA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonC902/R3CA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC902/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonC902/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2 UP.Link/6.5.0.0.0',
'SonyEricssonC902/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonC902/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC902/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonc902/UC Browser7.0.0.41/69/352',
'SonyEricssonC902/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonC902/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.5.0.0.0',
'SonyEricssonC902/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3(REAL IP: 217.171.129.71)',
'SonyEricssonC902/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3(REAL IP: 217.171.129.72)',
'SonyEricssonC902/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3',
'SonyEricssonC902/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC902/R3EF Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonC902/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonC902/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.5.0.0.0',
'SonyEricssonC902/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3',
'SonyEricssonC902/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonC902/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC902/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonc902',
'SonyEricssonC902/R3EJ Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_c902_ver1');
      }
  }



  function test_sonyericsson_c903_ver1() {
    foreach(array(
'SonyEricssonC903',
'SonyEricssonC903, SonyEricssonC903',
'SonyEricssonC903, SonyEricssonC903, SonyEricssonC903',
'SonyEricssonC903, SonyEricssonC903, SonyEricssonC903, SonyEricssonC903',
'SonyEricssonC903, SonyEricssonC903, SonyEricssonC903, SonyEricssonC903, SonyEricssonC903',
'SonyEricssonC903, SonyEricssonC903, SonyEricssonC903, SonyEricssonC903, SonyEricssonC903, SonyEricssonC903, SonyEricssonC903, SonyEricssonC903',
'SonyEricssonC903/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonC903/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2 UP.Link/6.5.0.0.0',
'SonyEricssonC903/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonC903/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC903/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonC903/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonC903/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4 UP.Link/6.3.1.13.0',
'SonyEricssonC903/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.4',
'SonyEricssonC903/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC903/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonc903/UC Browser7.0.0.41/69/351',
'SonyEricssonC903a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonC903a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonC903a/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC903a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_c903_ver1');
      }
  }



  function test_sonyericsson_c905_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonC905v/R1BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.0',
'Mozilla/4.0 SonyEricssonC905v/R1BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Mozilla/4.0 SonyEricssonC905v/R1DE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'Mozilla/4.0 SonyEricssonC905v/R1DE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonC905v/R1DE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1 UP.Link/6.5.0.0.0',
'Mozilla/4.0 SonyEricssonC905v/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'Mozilla/4.0 SonyEricssonC905v/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'Mozilla/4.0 SonyEricssonC905v/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonC905v/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 UP.Link/6.5.0.0.0',
'SonyEricssonC905',
'SonyEricssonC905/R1AA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.0',
'SonyEricssonC905/R1BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.0',
'SonyEricssonC905/R1BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.0',
'SonyEricssonC905/R1BA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonC905/R1BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC905/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonC905/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1 UP.Link/6.3.1.13.0',
'SonyEricssonC905/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.1',
'SonyEricssonC905/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonC905/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonC905/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.2',
'SonyEricssonC905/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonC905/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3(REAL IP: 91.121.87.202)',
'SonyEricssonC905/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.3',
'SonyEricssonC905/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonC905/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonC905/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonC905/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonc905/UC Browser7.0.0.41/70/352',
'SonyEricssonC905a/R1BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.0',
'SonyEricssonC905a/R1BB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.0',
'SonyEricssonC905a/R1BB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.0 UP.Link/6.3.1.20.0',
'SonyEricssonC905a/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonC905a/R1DF Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonC905a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonC905a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonC905c/R1BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_c905_ver1');
      }
  }



  function test_sonyericsson_d750i_ver1() {
    foreach(array(
'SonyEricssonD750i/R1AA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonD750i/R1AA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonD750i/R1AA/SN356576006720469 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonD750i/R1J Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonD750i/R1J/SN356576002663176 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonD750i/R1N Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonD750i/R1N/SN356576004046065 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_d750i_ver1');
      }
  }



  function test_sonyericsson_e10i_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; da-dk; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; da-dk; SonyEricssonE10i Build/1.0.A.1.38) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; el-gr; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; E10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonE10i Build/1.0.A.1.38) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonE10i-o Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-in; E10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-in; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonE10i Build/1.0.A.1.38) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; SonyEricssonE10iv Build/1.0.A.1.37) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; SonyEricssonE10i Build/1.0.A.1.38) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; SonyEricssonE10i Build/1.0.A.1.38) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; SonyEricssonE10iv Build/1.0.A.1.37) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nb-no; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nb-no; SonyEricssonE10i Build/1.0.A.1.38) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-nl; SonyEricssonE10i Build/1.0.A.1.38) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sk-sk; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-SE; E10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-se; SonyEricssonE10i Build/1.0.A.1.36) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_e10i_ver1');
      }
  }



  function test_sonyericsson_f100i_ver1() {
    foreach(array(
'SonyEricssonF100i/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonF100i/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5',
'SonyEricssonF100i/R1HA SEMC/NewsReader/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_f100i_ver1');
      }
  }



  function test_sonyericsson_f305_ver1() {
    foreach(array(
'SonyEricssonF305',
'SonyEricssonF305 UCWEB/6.0 UNTRUSTED/1.0',
'SonyEricssonF305/R1AA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI)',
'SonyEricssonF305/R1AA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI)',
'SonyEricssonF305/R1AA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI)',
'SonyEricssonF305/R1BA010 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.3.0',
'SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.3.0',
'SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonF305/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonF305/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonF305/R1FB Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_f305_ver1');
      }
  }



  function test_sonyericsson_f500i_ver1() {
    foreach(array(
'SonyEricssonF500i/R2AA SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonF500i/R2AE SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonF500i/R2E SEMC-Browser/4.0 Profile/MIDP-1.0 MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_f500i_ver1');
      }
  }



  function test_sonyericsson_g502_ver1() {
    foreach(array(
'SonyEricssonG502',
'SonyEricssonG502/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonG502/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 OPENWAVE',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssong502',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssong502/UC Browser7.0.0.41/69/351',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssong502/UCWEB7.1.0.42/69/351',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssong502/UC Browser7.0.0.41/70/351',
'SonyEricssonG502/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssong502/UC Browser7.0.0.41/70/352',
'SonyEricssonG502/R1FB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonG502/R1FB Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonG502c/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_g502_ver1');
      }
  }



  function test_sonyericsson_g700_ver1() {
    foreach(array(
'SonyEricssonG700',
'SonyEricssonG700/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 878) Opera 8.65 [en]',
'SonyEricssonG700/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 878) Opera 8.65 [id]',
'SonyEricssonG700/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [en]',
'SonyEricssonG700/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [es-LA]',
'SonyEricssonG700/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [id]',
'SonyEricssonG700/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [en]',
'SonyEricssonG700/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [id]'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_g700_ver1');
      }
  }



  function test_sonyericsson_g705_ver1() {
    foreach(array(
'SonyEricssonG705',
'SonyEricssonG705/R1BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.0',
'SonyEricssonG705/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonG705/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonG705/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonG705/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_g705_ver1');
      }
  }



  function test_sonyericsson_g900_ver1() {
    foreach(array(
'SonyEricssonG900',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 878) Opera 8.65 [de]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 878) Opera 8.65 [en-US]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 878) Opera 8.65 [en]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 878) Opera 8.65 [ms]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 878) Opera 8.65 [nl]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 878) Opera 8.65 [no]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [ar]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [cs]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [en-US]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [en]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [fr]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [hu]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 941) Opera 8.65 [id]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [ar]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [en-US]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [en]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [es-LA]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [es]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [fa]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [id]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [nl]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [ru]',
'SonyEricssonG900/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 958) Opera 8.65 [sv]'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_g900_ver1');
      }
  }



  function test_sonyericsson_j105_ver1() {
    foreach(array(
'SonyEricssonJ105a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonJ105a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4 UP.Link/6.5.1.0.0',
'SonyEricssonJ105a/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j105_ver1');
      }
  }



  function test_sonyericsson_j105j_ver1() {
    foreach(array(
'SonyEricssonJ105i/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonJ105i/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonJ105i/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonJ105i/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonJ105i/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonJ105i/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonj105i',
'SonyEricssonJ105i/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonj105i/UC Browser7.0.0.41/69/352',
'SonyEricssonJ105i/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonj105i',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonj105i/UC Browser7.0.0.41/69/351',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonj105i/UC Browser7.0.0.41/69/352',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonj105i/UCWEB7.2.2.51/69/351',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonj105i',
'SonyEricssonJ105i/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonj105i/UC Browser7.0.0.41/70/351'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j105j_ver1');
      }
  }



  function test_sonyericsson_j10i2_ver1() {
    foreach(array(
'SonyEricssonJ10i/R7BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.2',
'SonyEricssonJ10i2/R7BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.2'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j10i2_ver1');
      }
  }



  function test_sonyericsson_j200c_ver1() {
    foreach(array(
'SonyEricssonJ200c/R101'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j200c_ver1');
      }
  }



  function test_sonyericsson_j200i_ver1() {
    foreach(array(
'SonyEricssonJ200i/R101'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j200i_ver1');
      }
  }



  function test_sonyericsson_j20i_ver1() {
    foreach(array(
'SonyEricssonJ20i/R7BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.2'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j20i_ver1');
      }
  }



  function test_sonyericsson_j210c_ver1() {
    foreach(array(
'SonyEricssonJ210c/R2H/TelecaBrowser/4.08'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j210c_ver1');
      }
  }



  function test_sonyericsson_j210i_ver1() {
    foreach(array(
'SonyEricssonJ210i/R101',
'SonyEricssonJ210i/R2H/TelecaBrowser/4.08',
'SonyEricssonJ210i/R2L/TelecaBrowser/4.08'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j210i_ver1');
      }
  }



  function test_sonyericsson_j220i_ver1() {
    foreach(array(
'SonyEricssonJ220i/R5C TelecaBrowser/4.08',
'SonyEricssonJ220i/R5F TelecaBrowser/4.08',
'SonyEricssonJ220i/R5H TelecaBrowser/4.08',
'SonyEricssonJ220i/R5K TelecaBrowser/4.08',
'SonyEricssonJ220i/R5N TelecaBrowser/4.08'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j220i_ver1');
      }
  }



  function test_sonyericsson_j230c_ver1() {
    foreach(array(
'SonyEricssonJ230c/R5J TelecaBrowser/4.08',
'SonyEricssonJ230c/R5K TelecaBrowser/4.08'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j230c_ver1');
      }
  }



  function test_sonyericsson_j230i_ver1() {
    foreach(array(
'SonyEricssonJ230i/R5D TelecaBrowser/4.08',
'SonyEricssonJ230i/R5F TelecaBrowser/4.08',
'SonyEricssonJ230i/R5H TelecaBrowser/4.08',
'SonyEricssonJ230i/R5J TelecaBrowser/4.08',
'SonyEricssonJ230i/R5K TelecaBrowser/4.08',
'SonyEricssonJ230i/R5N TelecaBrowser/4.08'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j230i_ver1');
      }
  }



  function test_sonyericsson_j300a_ver1() {
    foreach(array(
'SonyEricssonJ300a/R2BA SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j300a_ver1');
      }
  }



  function test_sonyericsson_j300i_ver1() {
    foreach(array(
'SonyEricssonJ300i',
'SonyEricssonJ300i/R2AT SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonJ300i/R2BA SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonJ300i/R2BD SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_j300i_ver1');
      }
  }



  function test_sonyericsson_k200i_ver1() {
    foreach(array(
'SonyEricssonK200i/R1AA003 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0',
'SonyEricssonK200i/R1AA008 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0',
'SonyEricssonK200i/R1AB003 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0',
'SonyEricssonK200i/R1AD001 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k200i_ver1');
      }
  }



  function test_sonyericsson_k205i_ver1() {
    foreach(array(
'SonyEricssonK205i/R1AD001 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k205i_ver1');
      }
  }



  function test_sonyericsson_k220i_ver1() {
    foreach(array(
'SonyEricssonK220i/R1AA008 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0',
'SonyEricssonK220i/R1AB003 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0',
'SonyEricssonK220i/R1AC002 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0',
'SonyEricssonK220i/R1AD001 TelecaBrowser/1.1.14.20 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k220i_ver1');
      }
  }



  function test_sonyericsson_k300_ver1() {
    foreach(array(
'SonyEricssonK300/R2AJ SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k300_ver1');
      }
  }



  function test_sonyericsson_k300a_ver1() {
    foreach(array(
'SonyEricssonK300a/R2AT SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK300a/R2AT SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k300a_ver1');
      }
  }



  function test_sonyericsson_k300c_ver1() {
    foreach(array(
'SonyEricssonK300c/R2AJ SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK300c/R2BA SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k300c_ver1');
      }
  }



  function test_sonyericsson_k300i_ver1() {
    foreach(array(
'SonyEricssonK300i',
'SonyEricssonK300i/R2AJ SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK300i/R2AL SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK300i/R2AT SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK300i/R2BA SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK300i/R2BA SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k300i_ver1');
      }
  }



  function test_sonyericsson_k310_ver1() {
    foreach(array(
'SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK310i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK310i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk310i/UC Browser7.0.0.41/70/352',
'SonyEricssonK310i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK310i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK310i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK310i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk310i',
'SonyEricssonK310i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk310i/UC Browser7.0.0.41/70/352',
'SonyEricssonK310i/R4EC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310iv/R4DA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310iv/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k310_ver1');
      }
  }



  function test_sonyericsson_k310a_ver1() {
    foreach(array(
'SonyEricssonK310a/R4DA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310a/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k310a_ver1');
      }
  }



  function test_sonyericsson_k310c_ver1() {
    foreach(array(
'SonyEricssonK310c/R4DA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310c/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310c/R4EA Release/Aug-17-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k310c_ver1');
      }
  }



  function test_sonyericsson_k310i_ver1() {
    foreach(array(
'SonyEricssonK310i',
'SonyEricssonK310i/R4DA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310i/R4DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK310i/R4DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK310i/R4DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk310i',
'SonyEricssonK310i/R4DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK310i/R4DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK310i/R4DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK310i/R4DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK310i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK310i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK310i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk310i',
'sonyericssonk310i',
'sonyericssonk310i/UC Browser7.0.0.41/69/352',
'sonyericssonk310i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k310i_ver1');
      }
  }



  function test_sonyericsson_k320i_ver1() {
    foreach(array(
'SonyEricssonK320i',
'SonyEricssonK320i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK320i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK320i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk320i/UC Browser7.0.0.41/69/351',
'SonyEricssonK320i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK320i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK320i/R4EC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK320i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK320i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK320i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonk320i/UC Browser7.0.0.41/70/350'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k320i_ver1');
      }
  }



  function test_sonyericsson_k330_ver1() {
    foreach(array(
'SonyEricssonK330/R1CC001 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK330/R1CD001 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK330/R1CE002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK330/R1DA002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK330a/R1CC001 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK330a/R1CD001 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK330a/R1CE002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK330a/R1CE002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonK330a/R1DA002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k330_ver1');
      }
  }



  function test_sonyericsson_k500c_ver1() {
    foreach(array(
'SonyEricssonK500c'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k500c_ver1');
      }
  }



  function test_sonyericsson_k500i_ver1() {
    foreach(array(
'SonyEricssonK500i',
'SonyEricssonK500i/R2AA SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK500i/R2AE SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK500i/R2AE SEMC-Browser/4.0.3Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK500i/R2AT SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK500i/R2L SEMC-Browser/4.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK500i/R2N SEMC-Browser/4.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK500i/R2Y SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k500i_ver1');
      }
  }



  function test_sonyericsson_k506c_ver1() {
    foreach(array(
'SonyEricssonK506c/R2AA SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k506c_ver1');
      }
  }



  function test_sonyericsson_k508i_ver1() {
    foreach(array(
'SonyEricssonK508i',
'SonyEricssonK508i/R2AA SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK508i/R2AE SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK508i/R2AT SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k508i_ver1');
      }
  }



  function test_sonyericsson_k510_ver1() {
    foreach(array(
'SonyEricssonK510i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk510i',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk510i/UC Browser7.0.0.41/69/352',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Profile/MIDP-1.0 MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/nOsZz_mygenkz/503; U; en)Presto/2.2.0',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk510i',
'SonyEricssonK510i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk510i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k510_ver1');
      }
  }



  function test_sonyericsson_k510a_ver1() {
    foreach(array(
'SonyEricssonK510a',
'SonyEricssonK510a/R4CH Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK510a/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK510a/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k510a_ver1');
      }
  }



  function test_sonyericsson_k510c_ver1() {
    foreach(array(
'SonyEricssonK510c/R4CH Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k510c_ver1');
      }
  }



  function test_sonyericsson_k510i_ver1() {
    foreach(array(
'SonyEricssonK510i',
'SonyEricssonK510i/R4CH Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK510i/R4CH Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK510i/R4CH Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera Ndeso/9.60 (J2ME/MIDP;Opera Mini/4.2.14912reMod.by.aGuzz/503; U; en)Presto/2.2.0',
'SonyEricssonK510i/R4CJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK510i/R4CJ Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK510i/R4CJ Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK510i/R4DE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK510i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k510i_ver1');
      }
  }



  function test_sonyericsson_k530i_ver1() {
    foreach(array(
'SonyEricssonK530i',
'SonyEricssonK530i, SonyEricssonK530i',
'SonyEricssonK530i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK530i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK530i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK530i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK530i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,SonyEricssonK530i UCWEB/6.0',
'SonyEricssonK530i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK530i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK530i/R6BD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK530i/R6BD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK530i/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK530i/R7AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK530i/R8AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK530i/R8AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonK530i/R8BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk530i',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk530i/UC Browser7.0.0.41/69/351',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk530i/UC Browser7.0.0.41/70/352',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.SAIVV COLLECTION/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk530i',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk530i/UC Browser7.0.0.41/69/351',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;FIREFOX/4.6.13337Mod.by.GURUSWAP/503; U; en)Presto/2.2.0',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/nOsZz_mygenkz/503; U; en)Presto/2.2.0',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk530i',
'SonyEricssonK530i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk530i/UC Browser7.0.0.41/70/351',
'SonyEricssonK530i/R8BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK530i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK530i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1, OPENWAVE/UC Browser7.0.0.41/70/352',
'SonyEricssonK530i/R8BF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k530i_ver1');
      }
  }



  function test_sonyericsson_k550c_ver1() {
    foreach(array(
'SonyEricssonK550c//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550c//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK550c/R1JD Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550c/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k550c_ver1');
      }
  }



  function test_sonyericsson_k550i_ver1() {
    foreach(array(
'SonyEricssonK550i',
'SonyEricssonK550i//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550i//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonK550i//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SonyEricssonK550i//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 124.195.65.19)',
'SonyEricssonK550i//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 202.93.37.71)',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk550i',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk550i/UC Browser7.0.0.41/69/351',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk550i',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk550i/UC Browser7.0.0.41/69/350',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk550i/UC Browser7.0.0.41/70/352',
'SonyEricssonK550i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonk550i/UC Browser7.0.0.41/70/352',
'SonyEricssonK550i//R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550i/R1JD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550i/R1JD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonK550i/R1JD Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550i/R1JD Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK550i/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK550i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK550i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK550i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK550i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk550i',
'SonyEricssonK550i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk550i/UCWEB7.1.0.42/69/351',
'SonyEricssonK550i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk550i/UC Browser7.0.0.41/70/352',
'SonyEricssonK550i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonk550i',
'SonyEricssonK550i/R8BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'sonyericssonk550i',
'sonyericssonk550i/UC Browser7.0.0.41/69/351',
'sonyericssonk550i/UC Browser7.0.0.41/70/352',
'sonyericssonk550i/UCWEB7.0.0.33/69/300'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k550i_ver1');
      }
  }



  function test_sonyericsson_k550im_ver1() {
    foreach(array(
'portalmmm/2.0 K550im(c100;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k550im_ver1');
      }
  }



  function test_sonyericsson_k600i_ver1() {
    foreach(array(
'SonyEricssonK600i',
'SonyEricssonK600i/R1K Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R1K/SN356572002286456 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R1K/SN356572003786108 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R1K/SN356572006690083 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R1K/SN356841003490544 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AD/SN356831000618494 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AD/SN356841004175425 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE/SN356572007314949 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE/SN356830003048261 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE/SN356841004036205 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE/SN356841006222472 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE/SN356842000676879 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE/SN356842002356934 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE/SN356842004332685 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AE/SN356842005084244 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2AG Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK600i/R2BA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Mozilla/5.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonK600i/R2BA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk600i',
'SonyEricssonK600i/R2BA/SN356572001144789 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356572001882396 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356572001937596 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356572005263734 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356572007749680 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356572007791757 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356573000062618 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356573000735403 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356573001247440 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356573001452149 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830000031930 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830000037762 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830000155705 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830000439513 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830001423110 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830002222115 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830002232288 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK600i/R2BA/SN356830003072527 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830004043279 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830004087433 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830005172549 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830005491485 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK600i/R2BA/SN356830006372122 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830006631949 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830006712103 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830007636426 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830007795834 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356830008043796 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356831000511947 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356831000778405 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356831000928612 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356831002461042 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841000513280 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841000591690 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841000900669 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841000999539 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841001555900 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841002043724 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK600i/R2BA/SN356841002075304 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841002652698 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841002711148 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841002829171 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841002860374 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841004641269 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841004706419 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841004909708 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841005209678 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841005670572 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841005855363 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841006320631 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841006906157 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841006928433 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841006929191 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841006978727 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356841007019315 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842000125752 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842000651377 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842000925243 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842001429443 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842001826689 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842001964514 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842001971816 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842001972822 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842001985238 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842002114085 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842002114382 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842002183080 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842002183569 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842002314032 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842002340102 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842002346794 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842002407364 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842003232837 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842004196106 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842004688250 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842004832551 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842004838525 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842004921156 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842004928607 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842004941980 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842005008995 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842005009183 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842005070284 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842005098160 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842005117903 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2BA/SN356842005134015 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2G Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2H/SN356830000687053 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2J Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2J/SN356830002744704 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2J/SN356841003398168 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2J/SN356842002345572 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2J/SN356842004777590 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2K Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2K/SN356573000803151 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2L Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2L/SN356842001091136 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2M Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK600i/R2T/SN356572001819216 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356572005277361 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356572005475122 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356572005714249 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356572006736399 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK600i/R2T/SN356572007484767 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356572007796632 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356572007802620 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356573000300976 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356573000422671 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356573001097993 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356573001294111 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356573001333992 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356573001444724 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356573001449087 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356830001784040 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356830002169803 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356830004502159 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356830005100953 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356830008566465 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356831000115277 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356831000595494 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356841005570970 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356841005883605 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356841006897356 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356841006928029 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356842001972608 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356842001991517 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356842002110232 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356842004312562 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2T/SN356842005167155 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK600i/R2U/SN356572003732151 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k600i_ver1');
      }
  }



  function test_sonyericsson_k608i_ver1() {
    foreach(array(
'SonyEricssonK608i',
'SonyEricssonK608i/R1K Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2AE Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2AG/SN356842002048143 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2AG/SN356842002048143 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK608i/R2AG/SN356842002048143 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2AG/SN356842002048143 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK608i/R2AG/SN356842002048143 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK608i/R2AG/SN356842002048143 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK608i/R2BA/SN356572001256674 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356572001986387 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356572002463733 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356572004525877 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356572005054901 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356572005367428 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356572006664989 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356573001287818 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356830007773880 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356830008563785 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356830008748576 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356830008996621 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356830009626367 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356831001875010 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356831002796934 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356841000748308 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356841000914157 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356841001171070 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356841001516126 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356841002756242 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356841004240047 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356841005525958 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356841006804535 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842001985857 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842002327042 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842002481914 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842002536006 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842003017246 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842003020216 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842003036535 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842003360224 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842003397705 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842003677130 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004052267 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004140336 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004147083 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004177262 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004184870 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004192592 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004323379 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004745357 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004787177 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004806563 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004811621 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842004881764 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842005013359 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842005085274 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842005164715 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842005194183 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842005196295 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842005198267 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842005209486 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2BA/SN356842005215954 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2J/SN356841004293251 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2K Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2L Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2L Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK608i/R2L/SN356841001240883 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2L/SN356841002157235 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2L/SN356841004141179 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2L/SN356841004215965 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2L/SN356842001001705 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2L/SN356888000298495 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2M Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2M/SN356841003131460 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2M/SN356842000540661 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356830005210521 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356841002723978 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356841006894650 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356842001368476 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK608i/R2T/SN356842001956395 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356842001988737 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356842001992333 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356842004227778 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356842005012708 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356842005068890 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK608i/R2T/SN356842005128298 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k608i_ver1');
      }
  }



  function test_sonyericsson_k610c_ver1() {
    foreach(array(
'SonyEricssonK610c'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k610c_ver1');
      }
  }



  function test_sonyericsson_k610i_ver1() {
    foreach(array(
'/2.0 K550c(c100;TB)',
'/2.0 K550im(c100;TB)',
'SonyEricssonK610i',
'SonyEricssonK610i/R1CB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1CB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK610i/R1CB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK610i/R1CD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1CF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1ED Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK610i/R1ED Release/Sep-01-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1EF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1EF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonK610i/R1EJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1EJ Release/Sep-24-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1EJ Release/Sep-24-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK610i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK610i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK610i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK610i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk610i',
'SonyEricssonK610i/R1GD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK610i/R1HA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1JC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK610i/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1JE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1JE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK610i/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1JG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK610i/R1JG Release/Feb-14-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1JG Release/Feb-14-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK610i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK610i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK610i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK610i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k610i_ver1');
      }
  }



  function test_sonyericsson_k610im_ver1() {
    foreach(array(
'SonyEricssonK610im/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610im/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610im/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'portalmmm/2.0 K610im(c100;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k610im_ver1');
      }
  }



  function test_sonyericsson_k610iv_ver1() {
    foreach(array(
'SonyEricssonK610iv/R1CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610iv/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610iv/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610iv/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610iv/R1KJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK610iv/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k610iv_ver1');
      }
  }



  function test_sonyericsson_k618i_ver1() {
    foreach(array(
'SonyEricssonK618i',
'SonyEricssonK618i/R1CF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK618i/R1ED Release/Sep-01-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK618i/R1ED Release/Sep-01-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK618i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK618i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK618i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK618i/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK618i/R1JG Release/Feb-14-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK618i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK618i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK618i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk618i',
'SonyEricssonK618i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK618i/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK618i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK618i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k618i_ver1');
      }
  }



  function test_sonyericsson_k630i_ver1() {
    foreach(array(
'SonyEricssonK630i',
'SonyEricssonK630i/R1CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK630i/R1CA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK630i/R1CA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonk630i',
'SonyEricssonK630i/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK630i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK630i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK630i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k630i_ver1');
      }
  }



  function test_sonyericsson_k660i_ver1() {
    foreach(array(
'SonyEricssonK660i',
'SonyEricssonK660i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK660i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK660i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK660i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonk660i',
'SonyEricssonK660i/R1EB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK660i/R1ED Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK660i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK660i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK660i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK660i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonk660i/UC Browser7.0.0.41/69/351'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k660i_ver1');
      }
  }



  function test_sonyericsson_k700_ver1() {
    foreach(array(
'SonyEricssonK700/R10AB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k700_ver1');
      }
  }



  function test_sonyericsson_k700c_ver1() {
    foreach(array(
'LENOVO-i966/66Mt',
'SonyEricssonK700c',
'SonyEricssonK700c/R2AE SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700c/R2AY SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700c/R2CA SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k700c_ver1');
      }
  }



  function test_sonyericsson_k700i_ver1() {
    foreach(array(
'SonyEricssonK700i',
'SonyEricssonK700i/R2A SEMC-Browser/4.0 Profile/MIDP-1.0 MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2AA SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2AE SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2AG SEMC-Browser/4.0.3 Profile/MIDP-1.0 MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2AL SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2AN SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2AT SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2AY SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2C SEMC-Browser/4.0 Profile/MIDP-1.0 MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2CA SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2L SEMC-Browser/4.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK700i/R2Y SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k700i_ver1');
      }
  }



  function test_sonyericsson_k750c_ver1() {
    foreach(array(
'SonyEricssonK750c/R1AA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1AA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750c/R1AA/SN356018014593687 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1AA/SN356552001950922 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1BC Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1BC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1CA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1CA/SN353406010245738 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1CA/SN353785010965035 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1CA/SN354377017651435 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1DB Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750c/R1DB/SN352557015778932 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1DB/SN352557017035828 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1DB/SN355706017581748 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1DB/SN356552004528279 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1DB/SN359672004898741 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750c/R1J Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750c/R1N Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/jEtH brOwsER Opera Mini/4.2 Mod by kiRkjEth/503; U; en)Presto/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k750c_ver1');
      }
  }



  function test_sonyericsson_k750i_ver1() {
    foreach(array(
'SonyEricssonK750i',
'SonyEricssonK750i, SonyEricssonK750i',
'SonyEricssonK750i, SonyEricssonK750i, SonyEricssonK750i, SonyEricssonK750i',
'SonyEricssonK750i, SonyEricssonK750i, SonyEricssonK750i, SonyEricssonK750i, SonyEricssonK750i',
'SonyEricssonK750i/R1A Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1A/SN356552000267997 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1A/SN356552000369124 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonK750i/R1AA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1AA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk750i/UC Browser7.0.0.41/70/350',
'SonyEricssonK750i/R1AA/SN352557011262998 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN352558017720435 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Naijabaze/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1AA/SN353406017118904 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN353406017682875 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN353785017050294 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN353785019793123 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN354376015373745 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN354377012824276 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN354377013250000 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN354377015977329 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1AA/SN354377016559704 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN354377017558846 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN354377019922701 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN355706014913373 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356018010102848 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356018012057768 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356018012164341 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356552000236349 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356552003041738 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356552003963881 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356552004357166 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356552004825394 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356552004932182 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356553004868061 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356553005974272 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356553008286021 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356554001012737 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356554002779615 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1AA/SN356554009946795 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356576002626256 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356576003841235 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356576003944864 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356576004291414 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356576004513460 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN356828003356833 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357849005003198 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357849007875908 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000755865 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000756525 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000763398 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000786720 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000846482 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000859105 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000881851 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000948056 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000948247 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850000971538 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850001017364 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850001130035 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850001182564 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850001221891 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850001347795 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850001563896 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850001575643 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850002006531 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850005764011 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1AA/SN357850005934499 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850007645747 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850008184365 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN357850009757797 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN359302000038023 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN359302000435963 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN359302000459393 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1AA/SN359672009616122 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1BA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BA/SN354377010594996 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BA/SN356551002306431 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BB/SN357850000821360 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1BC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1BC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1BC/SN352557018382781 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN353406011195163 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN353406015218201 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN353785013961700 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN353785017061408 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1BC/SN354376011066053 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN354376011553522 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN354376017929908 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN354377010832610 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN354377012112359 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN354377014064236 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN354377016784955 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN355271015102179 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN355705012220419 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN355705012752478 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN355705015802429 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN355705016383569 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN355706011190306 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN355706014784360 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356552000311217 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356552000532085 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356552002367357 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356552004179537 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356552004222782 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356552004303640 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356552004491460 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356552004545299 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356553003066147 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356554008103612 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN356839006259387 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850001566881 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850001677522 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850001752010 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850001766705 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850001839643 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850001844353 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850001855094 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850002462817 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850002553094 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850002620307 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850002653332 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850002678081 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850002821590 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850002857586 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850003137582 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850003229413 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850003373930 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850003382980 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850003402739 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850003411813 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850003468292 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850007451641 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN357850008535996 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359302003390199 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359302003644330 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359302003658355 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359302007860353 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1BC/SN359302008337724 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359302009913838 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359672006708971 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359673000674987 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359673000778465 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BC/SN359986007008854 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BD Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BD/SN356018011876028 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1BD/SN357849000618578 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk750i',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk750i',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK750i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk750i/UC Browser7.0.0.41/70/352',
'SonyEricssonK750i/R1CA/SN350115106091137 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN350604401236547 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN350721892326429 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN351673019936862 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN351897002958134 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557011450031 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557011574541 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN352557012403955 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557015972642 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557016141809 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557016231279 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557017037600 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557017144950 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557017721617 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557017732739 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557017897359 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557018085905 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557018629454 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1CA/SN352557018701063 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557018785488 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557018917628 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019051203 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019054058 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019064800 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019140683 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019241440 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019272254 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019291627 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019736688 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019819799 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352557019961237 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN352558013155941 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558013419859 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558013425179 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558013646360 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558013971842 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558014422753 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558015713150 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558015862163 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK750i/R1CA/SN352558016224959 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558016908288 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558017226490 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558017297582 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558017335119 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558017709701 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558019253575 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558019272963 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk750i/UC Browser7.0.0.41/70/352',
'SonyEricssonK750i/R1CA/SN352558019418392 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352558019588038 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN352636005458521 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010026096 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010244368 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010387191 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010461061 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010464677 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN353406010488957 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010515627 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010528000 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010551796 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010657890 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406010722280 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406011646041 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406012272573 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406013670957 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406014107421 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406015167077 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406015195144 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406015255112 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406015380761 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406015429816 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406015443213 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406015661954 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406015833587 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406016325799 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406016915672 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017069040 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017082811 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017107675 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017114655 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017145014 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017155229 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017178049 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017179146 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406017220007 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406018079618 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406018112054 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406018114514 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406018160103 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406018244915 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406019600438 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406019608753 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406019694662 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406019718164 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406019748641 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353406019771346 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785010173838 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785011174520 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785011218855 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1CA/SN353785015005621 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785015018566 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785015175457 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785015197949 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785015464679 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785015620684 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785015683963 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785015805681 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785016131160 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785016219643 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785016951229 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017015263 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017552596 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017599357 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017621094 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017702829 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017711234 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017732867 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017738732 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017819912 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785017902577 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018043710 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018049311 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018063494 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018103423 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018141290 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018142835 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018154194 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018264043 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018684430 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785018787324 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785019154623 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN353785019671618 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN354008008067659 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376010145122 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN354376010194500 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376010328181 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376010367320 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376010695126 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376010814941 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376010830863 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011153372 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011191349 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011220247 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011265853 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011305261 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011400468 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011410525 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011455116 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011464670 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011795909 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376011945587 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376012048522 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376012325078 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376012560013 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376012883332 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376013979899 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376014226209 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376014839902 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376014857557 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376015629021 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376015703040 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376016079846 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376016111698 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376016976942 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376017013505 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376017240686 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376017862372 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019031174 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019032248 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019032248 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonK750i/R1CA/SN354376019084827 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019090956 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019221577 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019360987 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019369848 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019797386 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354376019967856 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377010214868 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377010321408 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377010450298 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377010509937 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377010568495 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN354377011098138 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011152232 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011155680 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011157595 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011173949 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011271909 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011298381 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011378183 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011409103 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1CA/SN354377011480674 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011631565 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011643404 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011729880 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011755117 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377011791690 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN354377011878083 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377012272013 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377012307082 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN354377012337402 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377012353300 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377012802058 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377012835454 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013160563 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013459114 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013526458 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013561810 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013588680 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013709583 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013774991 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013836204 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013847839 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013964303 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377013980275 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014153328 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014416212 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014479939 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014578680 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014588457 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014589513 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014717213 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014739308 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014764413 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014845626 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014847960 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014897239 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377014897833 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377015006053 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377015054236 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377015058401 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377015350287 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377015530508 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN354377015591393 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377015690567 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN354377016543229 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377016602116 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377016632600 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377016673380 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377016686085 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377016747911 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN354377016752895 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377016825477 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377017156401 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377017345822 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377017463971 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377017518592 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377017527031 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377017637020 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377017649538 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377017744032 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018130504 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018180152 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018316962 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018384416 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018609069 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018768493 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018878102 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018878284 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018883557 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377018980254 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377019429582 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN354377019437528 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705010538309 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705010558059 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705011903577 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012057779 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012268236 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012276569 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012294265 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012362369 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012500323 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012501560 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012586835 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012594391 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012622051 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk750i',
'SonyEricssonK750i/R1CA/SN355705012629759 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012705260 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012760935 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012771247 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012779273 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012813148 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705012832767 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705014043496 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705014069186 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705014558519 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705015104644 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705015616878 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705015802940 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/1.1',
'SonyEricssonK750i/R1CA/SN355705016699055 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN355705016742772 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017128898 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017241329 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017513974 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk750i',
'SonyEricssonK750i/R1CA/SN355705017583399 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017668182 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017705067 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017711727 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017714101 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017715900 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017753323 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705017835443 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018051586 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN355705018052402 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018071626 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018088323 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018118138 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018131925 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018312145 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018400122 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018471727 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018472196 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018854047 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705018985940 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705019084446 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705019084735 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705019098925 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705019429435 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705019446215 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705019522007 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705019742027 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355705019801625 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706010070467 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706010448564 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706010485681 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706010630534 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706010834342 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706010964057 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706010985128 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706011113654 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN355706012348903 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706012349810 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706012679570 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706012704501 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706012716240 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706012721372 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013128270 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013161578 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013193290 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013206050 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013227478 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013292209 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013293835 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013293835 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN355706013323335 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013348506 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013394492 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013440519 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013443166 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013457125 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013471761 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013489797 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013519874 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013585446 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN355706013687275 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706013791267 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014016037 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014377520 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014378106 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014378106 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN355706014436326 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014507175 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014564556 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014582004 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014626140 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014646718 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706014777299 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706015087037 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706015217717 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706015339073 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706015432613 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706015614194 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706015625414 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN355706015666996 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706015680112 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706016449848 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706017547426 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706017604268 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706017646731 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706017819536 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706017852313 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN355706017886410 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706017932610 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706017966428 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706017998645 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018092240 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018107386 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018130529 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018164718 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018198138 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018238181 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018268709 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018406259 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018549769 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018567340 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018597339 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018598204 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018600109 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonk750i',
'SonyEricssonK750i/R1CA/SN355706018612575 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018689490 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018720279 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018797830 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018847387 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018854292 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018881477 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706018901960 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706019237612 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706019241101 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706019469546 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706019922221 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706019939845 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706019947038 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN355706019994667 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356017812018764 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010000109 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010033589 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010124800 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN356018010224055 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010526871 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010529362 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010529990 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010573535 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010611285 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010972232 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018010996561 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011018266 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011275338 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011280965 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011333095 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN356018011338672 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011370543 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011462639 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011462639 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN356018011490796 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN356018011568088 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011599869 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011666841 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011693183 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011755255 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011858778 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011898287 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018011913011 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012025989 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012049609 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012057487 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012150449 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012157816 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012162816 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012164267 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012201093 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012650273 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012760569 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012849495 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012865806 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018012948545 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013100419 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013106119 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013113255 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013128196 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013129491 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013152022 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN356018013339793 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013345691 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013434594 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013436086 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013538600 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013610573 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018013671195 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014256293 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014335337 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014502191 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014531216 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014535332 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014538393 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014619326 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014851242 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014868212 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014872602 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018014901195 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018015049358 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018015074562 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018015094206 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018015200795 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018015291034 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018015360979 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018015373295 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonK750i/R1CA/SN356018015377429 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356018015379862 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356551000942989 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356551001213885 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356551001680299 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356551003861368 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356552000124230 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356552003996436 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356552004221909 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356552006149090 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356552006149090 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk750i/UC Browser7.0.0.41/70/351',
'SonyEricssonK750i/R1CA/SN356552009212796 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356553002046710 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356553003499579 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356553003545272 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356553003896410 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356553004589188 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356553005153596 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356553006183378 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356554001112297 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356554006275586 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356554007438159 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356576006295090 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN356829007077961 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN357607008663834 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN357621002731711 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN357849000796168 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN357849008717786 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN358802008913441 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359302003020960 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359302003954515 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359302005522104 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359302008981760 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672000676018 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672001635351 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672002686809 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672003686113 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672004526730 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672004863612 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005427268 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005477511 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005510345 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005544948 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005549350 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005603140 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005603140 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN359672005631794 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005654796 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005664472 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1CA/SN359672005669398 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005679363 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005685709 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672005779270 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1CA/SN359672006019817 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672006124997 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672006131448 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672006140399 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672006326543 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672006444759 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1CA/SN359672006716255 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672006721206 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672006732765 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672006741592 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672007123113 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672007301347 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672007306221 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672007436986 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672007611596 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672008035704 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672008450960 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672008557319 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672008603899 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672008731476 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672009350367 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672009467591 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672009477152 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359672009810568 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1CA/SN359986005004145 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk750i',
'SonyEricssonK750i/R1DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk750i/UC Browser7.0.0.41/70/352',
'SonyEricssonK750i/R1DB/SN352557011237370 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN352557012402361 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN352557013175230 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN352557014038627 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN352558013073334 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN352558014697172 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk750i',
'SonyEricssonK750i/R1DB/SN352558015444319 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN352558017902819 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353406010526277 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353406010882332 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353406015647847 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353406015713367 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1DB/SN353406018239535 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353406019270208 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353406019302464 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353406019455205 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353406019779638 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785010174844 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785015117145 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785015214934 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785015538605 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785015541468 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785015705006 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785016095852 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785016873118 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785016906553 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785016906553 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK750i/R1DB/SN353785016906553 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonK750i/R1DB/SN353785016906553 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785017176503 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785017224444 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1DB/SN353785017369744 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785017431221 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN353785017559195 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354376011241441 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354376013774902 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354376014015511 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354376014062398 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354376014344796 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354376015185206 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354376018072674 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377010766800 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377010833790 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377011510645 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377012015495 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377012441147 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377014895092 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377015136462 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377015339975 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377018107841 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN354377018757702 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705012611252 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705012639907 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705012639907 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1DB/SN355705012800533 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705014161991 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705015076248 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705016753811 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705016923794 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705017265401 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705017414751 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355705017841904 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355706010792375 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355706012624238 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355706012729144 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355706012943448 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355706013648855 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355706013728798 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk750i/UC Browser7.0.0.41/70/352',
'SonyEricssonK750i/R1DB/SN355706017476709 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355706017884837 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN355706018701451 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356018010651257 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356018013273026 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356018013822475 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356018013823606 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356018013889888 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356018015357306 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356551003355171 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1DB/SN356552000568170 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356552000635326 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356552000740902 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356552001807247 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356552001901495 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356552002616936 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356552003034626 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356552004551032 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356552009828377 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356553003200464 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356553009804384 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356554007006691 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356554009228160 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356576000598051 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1DB/SN356576001647758 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356576006598469 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356828009848718 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN356829004520765 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN357849002898871 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN357849009106468 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN357850000007994 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN357850000295912 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN357850000310745 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN357850002669890 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN357850002853874 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359302008413418 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359672005150860 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359672005264190 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359672005627537 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359672005648970 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359672006148004 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359672007530945 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359672007828950 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1DB/SN359672009180863 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1J Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1J/SN356551005950516 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1J/SN356551006126264 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1J/SN356552002084549 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1J/SN357850000350667 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK750i/R1L/SN356552000152181 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356552000274696 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356552002630333 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356552003245370 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356552003660065 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356552003830452 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356552009474867 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1L/SN356553001991221 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356553002377677 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356553002867032 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1L/SN356553009187053 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK750i/R1L/SN356553009610617 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN356551004298198 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN356552001474576 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN356552004406997 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN356552004459574 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN356552004760195 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN356554006372698 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN357850000042033 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN357850000425097 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1N/SN357850000429230 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK750i/R1NA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'sonyericssonk750i',
'sonyericssonk750i/UC Browser7.0.0.41/70/351',
'sonyericssonk750i/UC Browser7.0.0.41/70/352',
'sonyericssonk750i/UCWEB7.2.0.46/69/351'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k750i_ver1');
      }
  }



  function test_sonyericsson_k770i_ver1() {
    foreach(array(
'SonyEricssonK770i',
'SonyEricssonK770i/R8AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK770i/R8AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK770i/R8AB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK770i/R8AB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK770i/R8AE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK770i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK770i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK770i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK770i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK770i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk770i/UC Browser7.0.0.41/70/352',
'SonyEricssonK770i/R8BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk770i',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk770i/UCWEB7.1.0.42/69/351',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK770i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK770i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK770i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k770i_ver1');
      }
  }



  function test_sonyericsson_k770iv_ver1() {
    foreach(array(
'SonyEricssonK770iv/R8AC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK770iv/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK770iv/R8BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k770iv_ver1');
      }
  }



  function test_sonyericsson_k790_ver1() {
    foreach(array(
'SonyEricssonK790/R2B Release/Feb-07-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R1EG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R1EG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k790_ver1');
      }
  }



  function test_sonyericsson_k790a_ver1() {
    foreach(array(
'SonyEricssonK790a/R1CC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonK790a/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R2B Release/Feb-07-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790a/R8BF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k790a_ver1');
      }
  }



  function test_sonyericsson_k790c_ver1() {
    foreach(array(
'SonyEricssonK790c/R1CC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790c/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k790c_ver1');
      }
  }



  function test_sonyericsson_k790i_ver1() {
    foreach(array(
'SonyEricssonK790i',
'SonyEricssonK790i/R1CB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1CC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1CG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1ED Release/Sep-01-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1EG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1EG Release/Sep-16-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1JC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK790i/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK790i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK790i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R8BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R8BF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK790i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK790i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk790i/UC Browser7.0.0.41/69/351',
'SonyEricssonK790i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk790i/UC Browser7.0.0.41/69/352',
'SonyEricssonK790i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonk790i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k790i_ver1');
      }
  }



  function test_sonyericsson_k800_ver1() {
    foreach(array(
'SonyEricssonK800',
'SonyEricssonK800i/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'SonyEricssonK800i/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonK800i/R1JG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1JG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk800i',
'SonyEricssonK800i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k800_ver1');
      }
  }



  function test_sonyericsson_k800a_ver1() {
    foreach(array(
'SonyEricssonK800a',
'SonyEricssonK800a/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800a/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800a/R8BF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k800a_ver1');
      }
  }



  function test_sonyericsson_k800c_ver1() {
    foreach(array(
'SonyEricssonK800c/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800c/R8BF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800c/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k800c_ver1');
      }
  }



  function test_sonyericsson_k800i_ver1() {
    foreach(array(
'SonyEricssonK800i',
'SonyEricssonK800i/R1B Release/Mar-13-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1CB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1CB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonK800i/R1CB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1CB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R1CD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1CF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1CF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1ED Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1ED Release/Sep-01-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1ED Release/Sep-01-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R1EG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1EJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1EJ Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R1EJ Release/Sep-25-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1EL Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonK800i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,OPENWAVE/UC Browser7.0.0.41/70/350',
'SonyEricssonK800i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk800i/UC Browser7.0.0.41/70/352',
'SonyEricssonK800i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R1GD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1JC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R1JE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1KC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonK800i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonK800i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonK800i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonk800i/UC Browser7.0.0.41/70/352',
'SonyEricssonK800i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk800i/UC Browser7.0.0.41/70/352',
'SonyEricssonK800i/R2B Release/Mar-13-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R8BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R8BD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R8BF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,9jascape/9.60 (J2ME/MIDP;9jascapeMINI/4.2.14432 MOD BY MAyor2/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonk800i',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk800i/UC Browser7.0.0.41/70/351',
'SonyEricssonK800i/R8BF Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk800i/UC Browser7.0.0.41/70/352',
'SonyEricssonK800i/R8BF SEMC/NewsReader/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k800i_ver1');
      }
  }



  function test_sonyericsson_k800iv_ver1() {
    foreach(array(
'SonyEricssonK800iv/R1CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800iv/R1CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonK800iv/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800iv/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonK800iv/R1ED Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK800iv/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800iv/R1JE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800iv/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK800iv/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonK800iv/R8BF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k800iv_ver1');
      }
  }



  function test_sonyericsson_k810_ver1() {
    foreach(array(
'SonyEricssonK810a/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810a/R1KC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k810_ver1');
      }
  }



  function test_sonyericsson_k810i_ver1() {
    foreach(array(
'SonyEricssonK810i',
'SonyEricssonK810i/R1GD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK810i/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810i/R1KC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK810i/R1KC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK810i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonK810i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonK810i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'SonyEricssonK810i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK810i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK810i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonk810i',
'SonyEricssonK810i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.3.0',
'SonyEricssonK810i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK810i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK810i/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810i/R6CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK810i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonK810i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK810i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, OPENWAVE/UC Browser7.0.0.41/70/352',
'SonyEricssonK810i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK810i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK810i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonK810i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK810i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonk810i',
'SonyEricssonK810i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonK810i/R8BF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k810i_ver1');
      }
  }



  function test_sonyericsson_k850i_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonK850iv/R1CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonK850iv/R1CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Mozilla/4.0 SonyEricssonK850iv/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonK850iv/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonK850iv/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonK850iv/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonK850iv/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonK850i',
'SonyEricssonK850i/R1CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK850i/R1CA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK850i/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK850i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK850i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonK850i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonK850i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK850i/R1EC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange',
'SonyEricssonK850i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK850i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange',
'SonyEricssonK850i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonK850i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonK850i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonK850i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonk850i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_k850i_ver1');
      }
  }



  function test_sonyericsson_m600i_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 246) Opera 8.60 [en]SonyEricssonM600i/R100',
'Opera 7.0 SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [en]',
'SonyEricssonM600i',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 276) Opera 8.60 [en]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 276) Opera 8.60 [en] UP.Link/6.3.1.13.0',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 276) Opera 8.60 [ru]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 306) Opera 8.60 [en]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 405) Opera 8.65 [en]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 405) Opera 8.65 [fr]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [en]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [en] UP.Link/6.3.1.13.0',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [es-LA]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [fr]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [id]',
'SonyEricssonM600i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [it]',
'SonyEricssonM600i/R100 Mozilla/4.78 (Symbian OS; U) Opera 513 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_m600i_ver1');
      }
  }



  function test_sonyericsson_p1i_ver1() {
    foreach(array(
'SonyEricssonP1i',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [cs]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [de]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [en]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [en] UP.Link/6.3.1.13.0',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [es]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [fr]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [ro]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 636) Opera 8.65 [en-US]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 636) Opera 8.65 [en]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 636) Opera 8.65 [it]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 636) Opera 8.65 [ru]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 636) Opera 8.65 [sv]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 661) Opera 8.65 [en]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 661) Opera 8.65 [zh-CN]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [en]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [es-LA]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [es]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [fr]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [it]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [de]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [el]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [en-US]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [en]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [en] UP.Link/6.3.1.13.0',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [es-LA]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [es]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [fr]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [hr]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [hu]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [id]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [it]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [pl]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [sv]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [tr]',
'SonyEricssonP1i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 846) Opera 8.65 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_p1i_ver1');
      }
  }



  function test_sonyericsson_p800_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 5.0; Symbian OS; SonyEricsson P800; 316) Opera 6.31  [en]',
'SonyEricssonP800/R101 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonP800/R102 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_p800_ver1');
      }
  }



  function test_sonyericsson_p900_ver1() {
    foreach(array(
'SonyEricssonP900/R101 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'SonyEricssonP900/R102 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'SonyEricssonP900/R102 Profile/MIDP-2.0 Configuration/CLDC-1.0 Rev/MR4'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_p900_ver1');
      }
  }



  function test_sonyericsson_p908_ver1() {
    foreach(array(
'SonyEricssonP908/R101 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_p908_ver1');
      }
  }



  function test_sonyericsson_p910i_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 5.0; Symbian OS; SonyEricsson P910; 323) Opera 6.32  [en]',
'SonyEricssonP910i',
'SonyEricssonP910i/R1A SEMC-Browser/Symbian/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'SonyEricssonP910i/R2A SEMC-Browser/Symbian/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'SonyEricssonP910i/R3A SEMC-Browser/Symbian/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'SonyEricssonP910i/R4A SEMC-Browser/Symbian/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'SonyEricssonP910i/R5B SEMC-Browser/Symbian/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_p910i_ver1');
      }
  }



  function test_sonyericsson_p990_ver1() {
    foreach(array(
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 283) Opera 8.60 [en]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 283) Opera 8.60 [ru]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 306) Opera 8.60 [en-US]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 306) Opera 8.60 [en]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 306) Opera 8.60 [en] UP.Link/6.3.1.13.0',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 306) Opera 8.60 [fr]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 306) Opera 8.60 [tr]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [en]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [en-US]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [en]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [en] UP.Link/6.5.0.0.0',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [es]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [fr]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [hu]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [id]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [pl]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [pt]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [ro]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [tr]'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_p990_ver1');
      }
  }



  function test_sonyericsson_p990i_ver1() {
    foreach(array(
'SonyEricssonP990i',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 405) Opera 8.65 [cs]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 405) Opera 8.65 [en]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 405) Opera 8.65 [fr]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 405) Opera 8.65 [it]',
'SonyEricssonP990i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 405) Opera 8.65 [tr]'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_p990i_ver1');
      }
  }



  function test_sonyericsson_r300_ver1() {
    foreach(array(
'SonyEricssonR300/R2BA005 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonR300/R2BB012 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonR300/R2CC001 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonR300/R2DA004 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonR300/R2DB004 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_r300_ver1');
      }
  }



  function test_sonyericsson_r300a_ver1() {
    foreach(array(
'SonyEricssonR300a/R2CA005 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_r300a_ver1');
      }
  }



  function test_sonyericsson_r306_ver1() {
    foreach(array(
'SonyEricssonR306/R1AB002 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonR306/R1BA008 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonR306/R1CA007 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonR306a/R1BA010 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_r306_ver1');
      }
  }



  function test_sonyericsson_s302_ver1() {
    foreach(array(
'S3/BSI AU.Browser/2.0 QO3C1 MMP/1.0',
'S302/EH.A84.290409.1604 UNTRUSTED/1.0',
'S302/EI.A14.091008.1957 UNTRUSTED/1.0',
'S302/EJ.A07.201108.1616 UNTRUSTED/1.0',
'SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.3.0',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonS302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonS302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_s302_ver1');
      }
  }



  function test_sonyericsson_s312_ver1() {
    foreach(array(
'SonyEricssonS312',
'SonyEricssonS312/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonS312/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonS312/R1FB Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_s312_ver1');
      }
  }



  function test_sonyericsson_s500i_ver1() {
    foreach(array(
'SonyEricssonS500c/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS500i',
'SonyEricssonS500i/R6AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS500i/R6AC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS500i/R6AC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonS500i/R6BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS500i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS500i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonS500i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssons500i/UC Browser7.0.0.41/69/351',
'SonyEricssonS500i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS500i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SonyEricssonS500i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonS500i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS500i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonS500i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonS500i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonS500i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonS500i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssons500i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_s500i_ver1');
      }
  }



  function test_sonyericsson_s700i_ver1() {
    foreach(array(
'SonyEricssonS700i',
'SonyEricssonS700i/R3B SEMC-Browser/4.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS700i/R3C SEMC-Browser/4.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS700i/R3F SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS700i/R3G SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS700i/R3K SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS700i/R3M SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_s700i_ver1');
      }
  }



  function test_sonyericsson_s710a_ver1() {
    foreach(array(
'SonyEricssonS710a',
'SonyEricssonS710a/R1A SEMC-Browser/4.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS710a/R1A SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonS710a/R1A SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_s710a_ver1');
      }
  }



  function test_sonyericsson_so_01b_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; SO-01B)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; SO-01B)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonSO-01B Build/R1EA025) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; in-ID; SO-01B)',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-JP; SO-01B)',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-jp; SlateDroid 1.3 Build/SlateDroid 1.3) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-jp; SonyEricssonSO-01B Build/R1EA018) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-jp; SonyEricssonSO-01B Build/R1EA025) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-BR; SO-01B)',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-br; SonyEricssonSO-01B Build/R1EA025) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_so_01b_ver1');
      }
  }



  function test_sonyericsson_t200_ver1() {
    foreach(array(
'SonyEricssonT200/R101'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t200_ver1');
      }
  }



  function test_sonyericsson_t230_ver1() {
    foreach(array(
'SonyEricssonT230/R101'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t230_ver1');
      }
  }



  function test_sonyericsson_t250a_ver1() {
    foreach(array(
'SonyEricssonT250a/R5CA005 TelecaBrowser/1.1.14.20'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t250a_ver1');
      }
  }



  function test_sonyericsson_t250i_ver1() {
    foreach(array(
'SonyEricssonT250i/R5CA005 TelecaBrowser/1.1.14.20',
'SonyEricssonT250i/R5DB002 TelecaBrowser/1.1.14.20',
'SonyEricssonT250i/R5DC003 TelecaBrowser/1.1.14.20'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t250i_ver1');
      }
  }



  function test_sonyericsson_t280a_ver1() {
    foreach(array(
'SonyEricssonT280a/R1DA002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t280a_ver1');
      }
  }



  function test_sonyericsson_t280i_ver1() {
    foreach(array(
'SonyEricssonT280i',
'SonyEricssonT280i/R1BA003 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT280i/R1BC002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT280i/R1CB002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT280i/R1DA002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t280i_ver1');
      }
  }



  function test_sonyericsson_t290_ver1() {
    foreach(array(
'SonyEricssonT290/R101'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t290_ver1');
      }
  }



  function test_sonyericsson_t290a_ver1() {
    foreach(array(
'SonyEricssonT290a/R101 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t290a_ver1');
      }
  }



  function test_sonyericsson_t290i_ver1() {
    foreach(array(
'SonyEricssonT290i/R101'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t290i_ver1');
      }
  }



  function test_sonyericsson_t300_ver1() {
    foreach(array(
'SonyEricssonT300/R201'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t300_ver1');
      }
  }



  function test_sonyericsson_t303_ver1() {
    foreach(array(
'SonyEricssonT303/R2BB012 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT303/R2BB012 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonT303/R2BC003 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT303/R2BD002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT303/R2CA005 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT303/R2CB002 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT303/R2CC001 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT303/R2DA004 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT303/R2DB004 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT303a/R2CC001 TelecaBrowser/Q04C1-1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t303_ver1');
      }
  }



  function test_sonyericsson_t310_ver1() {
    foreach(array(
'SonyEricssonT310/R201'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t310_ver1');
      }
  }



  function test_sonyericsson_t610_ver1() {
    foreach(array(
'SonyEricssonT610/R101 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonT610/R201 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonT610/R301 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonT610/R401 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonT610/R601 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t610_ver1');
      }
  }



  function test_sonyericsson_t618_ver1() {
    foreach(array(
'SonyEricssonT618/R401 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonT618/R601 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t618_ver1');
      }
  }



  function test_sonyericsson_t628_ver1() {
    foreach(array(
'SonyEricssonT628/R601 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t628_ver1');
      }
  }



  function test_sonyericsson_t630_ver1() {
    foreach(array(
'SonyEricssonT630/R201 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonT630/R401 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonT630/R401 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'SonyEricssonT630/R601 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t630_ver1');
      }
  }



  function test_sonyericsson_t650i_ver1() {
    foreach(array(
'SonyEricssonT650i',
'SonyEricssonT650i/R6AC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT650i/R7AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT650i/R7AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonT650i/R8AB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT650i/R8BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT650i/R8BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT650i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonT650i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonT650i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonT700',
'SonyEricssonT700/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonT700/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssont700',
'SonyEricssonT700/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonT700/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonT700/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssont700/UC Browser7.0.0.41/69/351',
'SonyEricssonT700/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonT700/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonT700/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssont700',
'SonyEricssonT700/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssont700/UC Browser7.0.0.41/69/351',
'SonyEricssonT700/R3EH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonT700/R3EJ Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t650i_ver1');
      }
  }



  function test_sonyericsson_t68_ver2() {
    foreach(array(
'SonyEricssonT68/R201A',
'SonyEricssonT68/R301A',
'SonyEricssonT68/R502'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t68_ver2');
      }
  }



  function test_sonyericsson_t707_ver1() {
    foreach(array(
'SonyEricssonT707',
'SonyEricssonT707/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonT707/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonT707/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonT707/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 UP.Link/6.3.1.15.0',
'SonyEricssonT707/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t707_ver1');
      }
  }



  function test_sonyericsson_t707a_ver1() {
    foreach(array(
'SonyEricssonT707a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonT707a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonT707a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t707a_ver1');
      }
  }



  function test_sonyericsson_t715_ver1() {
    foreach(array(
'SonyEricssonT715/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonT715/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonT715/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssont715/UC Browser7.0.0.41/69/350',
'SonyEricssonT715/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssont715',
'SonyEricssonT715/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5',
'SonyEricssonT715/R1HA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssont715/UC Browser7.0.0.41/69/351'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t715_ver1');
      }
  }



  function test_sonyericsson_t715a_ver1() {
    foreach(array(
'SonyEricssonT715a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonT715a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4 UP.Link/6.3.0.0.0',
'SonyEricssonT715a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4 UP.Link/6.5.1.0.0',
'SonyEricssonT715a/R1GB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonT715a/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_t715a_ver1');
      }
  }



  function test_sonyericsson_tm506_ver1() {
    foreach(array(
'SonyEricssonTM506',
'SonyEricssonTM506/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'SonyEricssonTM506/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonTM506/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_tm506_ver1');
      }
  }



  function test_sonyericsson_tm717_ver1() {
    foreach(array(
'SonyEricssonTM717/R1FC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_tm717_ver1');
      }
  }



  function test_sonyericsson_u100i_ver1() {
    foreach(array(
'SonyEricssonU1/UC Browser7.0.0.41/50/351',
'SonyEricssonU100a/R1BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0',
'SonyEricssonU100i/R1BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0',
'SonyEricssonU100i/R1BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0 UP.Link/6.5.0.0.0',
'SonyEricssonU100i/R1BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.5.0',
'SonyEricssonU100i/R1BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonU100i/R1DA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0',
'SonyEricssonU100i/R7AA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.1',
'SonyEricssonU100i/R7BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.2',
'SonyEricssonU100i/R7BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.5.2',
'SonyEricssonU100i/R7BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonU100i/R7BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonu100i'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_u100i_ver1');
      }
  }



  function test_sonyericsson_u10i_ver1() {
    foreach(array(
'SonyEricssonU10a/R1BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0',
'SonyEricssonU10a/R7AA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.1',
'SonyEricssonU10a/R7BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.2',
'SonyEricssonU10i',
'SonyEricssonU10i/R1AA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0',
'SonyEricssonU10i/R1BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0 UP.Link/6.3.1.13.0',
'SonyEricssonU10i/R1BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0',
'SonyEricssonU10i/R1BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0 UP.Link/6.3.1.13.0',
'SonyEricssonU10i/R1BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0 UP.Link/6.3.1.15.0',
'SonyEricssonU10i/R1BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonU10i/R1DA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.0',
'SonyEricssonU10i/R7AA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.1',
'SonyEricssonU10i/R7AA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.1 UP.Link/6.3.1.12.0',
'SonyEricssonU10i/R7AA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.1 UP.Link/6.3.1.13.0',
'SonyEricssonU10i/R7AA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.1 UP.Link/6.3.1.15.0',
'SonyEricssonU10i/R7AA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.1 UP.Link/6.5.0.0.0',
'SonyEricssonU10i/R7AA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonU10i/R7BA Browser/NetFront/3.5 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.5.2'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_u10i_ver1');
      }
  }



  function test_sonyericsson_u1i_ver1() {
    foreach(array(
'SonyEricssonU1a/R1CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1a/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1i',
'SonyEricssonU1i/R1BB; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1i/R1BB; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1i/R1CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1i/R1CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1i/R1CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525 UP.Link/6.3.1.15.0',
'SonyEricssonU1i/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1i/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1iv/R1BB; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1iv/R1CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1iv/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU1iv/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_u1i_ver1');
      }
  }



  function test_sonyericsson_u20iv_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; da-dk; SonyEricssonU20i Build/1.1.A.0.8) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; SonyEricssonU20i Build/1.1.A.0.8) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nb-no; SonyEricssonU20i Build/1.1.A.0.8) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-se; SonyEricssonU20i Build/1.1.A.0.8) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-se; SonyEricssonU20i Build/1.2.A.1.60) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_u20iv_ver1');
      }
  }



  function test_sonyericsson_u5a_ver1() {
    foreach(array(
'SonyEricssonU5a/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU5a/R2CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_u5a_ver1');
      }
  }

  function test_sonyericsson_u5i_ver1() {
    foreach(array(
'SonyEricssonU5i/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU5i/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU5i/R2CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU5i/R2CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_u5i_ver1');
      }
  }



  function test_sonyericsson_u5iv_ver1() {
    foreach(array(
'SonyEricssonU5iv/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525',
'SonyEricssonU5iv/R2AA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525 UP.Link/6.5.0.0.06.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_u5iv_ver1');
      }
  }



  function test_sonyericsson_u8i_ver1() {
    foreach(array(
'SonyEricssonU8i/R2CA; Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_u8i_ver1');
      }
  }



  function test_sonyericsson_v600i_ver1() {
    foreach(array(
'SonyEricssonV600i/R2AB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonV600i/R2BA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2H Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2H/SN356830000330621 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2J Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2K Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2K Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonV600i/R2K/SN356830006852156 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2K/SN356830006912380 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2T Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2T/SN356830001565159 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV600i/R2T/SN356831000612513 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_v600i_ver1');
      }
  }



  function test_sonyericsson_v630i_ver1() {
    foreach(array(
'SonyEricssonV630i',
'SonyEricssonV630i/R1CF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630iv/R1CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630iv/R1CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonV630iv/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630iv/R1EJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630iv/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630iv/R1JE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630iv/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630iv/R1KJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonV630iv/R1KJ Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonv630i'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_v630i_ver1');
      }
  }



  function test_sonyericsson_v640i_ver1() {
    foreach(array(
'SonyEricssonV640i'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_v640i_ver1');
      }
  }



  function test_sonyericsson_v640iv_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonV640iv/R1CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonV640iv/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonV640iv/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonV640iv/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_v640iv_ver1');
      }
  }



  function test_sonyericsson_v800_ver1() {
    foreach(array(
'Vodafone/SonyEricssonV800/R1AF005 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/SonyEricssonV800/R1AF005/SN354885007574896 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/1.1',
'Vodafone/SonyEricssonV800/R1AF005/SN354886001863202 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/SonyEricssonV800/R1D003 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/SonyEricssonV800/R1J002 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/SonyEricssonV800/R1S025 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/SonyEricssonV800/R1S025 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Vodafone/SonyEricssonV800/R1S025/SN354885009080512 Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_v800_ver1');
      }
  }



  function test_sonyericsson_w100i_ver1() {
    foreach(array(
'SonyEricssonW111i/EdiTeD By ^RedKingMaSTer^™'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w100i_ver1');
      }
  }



  function test_sonyericsson_w200a_ver1() {
    foreach(array(
'SonyEricssonW200a',
'SonyEricssonW200a ..::WwW.Miw200.Tk::../R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW200a/R4GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200a/R4GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW200a/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW200a/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200a/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200a/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW200a/R4GH Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200a/R4GH Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW200a/R4HA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200a/R4HA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW200a/R4HA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonW200a/R4HA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0',
'SonyEricssonW200a/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200a/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW200a/R4JA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200a/R4JA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW200a/R4JB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW201i/R4JA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w200a_ver1');
      }
  }



  function test_sonyericsson_w200c_ver1() {
    foreach(array(
'SonyEricssonW200c',
'SonyEricssonW200c/R4GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200c/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200c/R4JA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w200c_ver1');
      }
  }



  function test_sonyericsson_w200i_ver1() {
    foreach(array(
'SonyEricssonW200i',
'SonyEricssonW200i UCWEB/6.0',
'SonyEricssonW200i/R4GA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200i/R4GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw200i',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw200i/UC Browser7.0.0.41/70/351',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonw200i',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw200i',
'SonyEricssonW200i/R4GB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw200i/UC Browser7.0.0.41/70/352',
'SonyEricssonW200i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW200i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4GH Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200i/R4HA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200i/R4HA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW200i/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200i/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW200i/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw200i',
'SonyEricssonW200i/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonw200i/UC Browser7.0.0.41/70/350',
'SonyEricssonW200i/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera Ndeso/9.60 (J2ME/MIDP;Opera Mini/4.2.14912reMod.by.aGuzz/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4HA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4JA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, OPENWAVE',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw200i',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw200i/UC Browser7.0.0.41/69/352',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.BangosMod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonw200i/UC Browser7.0.0.41/69/352',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw200i/UC Browser7.0.0.41/70/351',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw200i/UC Browser7.0.0.41/70/352',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonw200i',
'SonyEricssonW200i/R4JA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonw200i/UC Browser7.0.0.41/70/352',
'SonyEricssonW200i/R4JB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'sonyericssonw200i',
'sonyericssonw200i/UC Browser7.0.0.41/69/351',
'sonyericssonw200i/UC Browser7.0.0.41/69/352',
'sonyericssonw200i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w200i_ver1');
      }
  }



  function test_sonyericsson_w200iv_ver1() {
    foreach(array(
'SonyEricssonW200iv/R4GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200iv/R4GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW200iv/R4HA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW200iv/R4JA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w200iv_ver1');
      }
  }



  function test_sonyericsson_w205_ver1() {
    foreach(array(
'SonyEricssonW205',
'SonyEricssonW205/R1BA004 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW205/R1BA004 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 model-orange',
'SonyEricssonW205/R1CA001 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW205/R1CA001 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 model-orange',
'SonyEricssonW205/R1CD001 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW205/R1CD001 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 model-orange'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w205_ver1');
      }
  }



  function test_sonyericsson_w205a_ver1() {
    foreach(array(
'SonyEricssonW205a/R1BA004 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW205a/R1BA004 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW205a/R1CA001 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW205a/R1CD001 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w205a_ver1');
      }
  }



  function test_sonyericsson_w300c_ver1() {
    foreach(array(
'SonyEricssonW300c/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW300c/R4EA Release/Aug-17-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW300c/R9A Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW300c/R9A Release/May-24-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w300c_ver1');
      }
  }



  function test_sonyericsson_w300i_ver1() {
    foreach(array(
'SonyEricssonW300i',
'SonyEricssonW300i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW300i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW300i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonW300i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW300i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW300i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW300i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw300i',
'SonyEricssonW300i/R4GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW300i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW300i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW300i/R4GG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW300i/R4GG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW300i/R9A Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW300i/R9A Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW300i/R9A Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW300i/R9A Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW300i/R9A Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw300i'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w300i_ver1');
      }
  }



  function test_sonyericsson_w302_ver1() {
    foreach(array(
'SonyEricssonW302/R1AB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI)',
'SonyEricssonW302/R1AB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI)',
'SonyEricssonW302/R1AB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104',
'SonyEricssonW302/R1AB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI), Browser/UP.Browser/7.2.7.FENGPROD.104 (GUI)',
'SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1AC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.3.0',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1BC Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Son',
'SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW302/R1DB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW302c/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w302_ver1');
      }
  }



  function test_sonyericsson_w350a_ver1() {
    foreach(array(
'SonyEricssonW350a/R10AB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350a/R10BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350a/R11AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350a/R11AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW350a/R11BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350a/R11BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'SonyEricssonW350a/R11BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonW350a/R11BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW350a/R11CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350a/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw350a/UC Browser7.0.0.41/69/352',
'SonyEricssonW350c/R10BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w350a_ver1');
      }
  }



  function test_sonyericsson_w350i_ver1() {
    foreach(array(
'SonyEricssonW350i',
'SonyEricssonW350i/R10AB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350i/R10AB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW350i/R10BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350i/R10BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.3.0',
'SonyEricssonW350i/R10BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW350i/R10BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW350i/R11AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350i/R11AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW350i/R11AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW350i/R11AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw350i',
'SonyEricssonW350i/R11AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Uchimadara/503; U; en)Presto/2.2.0',
'SonyEricssonW350i/R11AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW350i/R11AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonw350i',
'SonyEricssonW350i/R11AA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW350i/R11CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350i/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350i/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW350i/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw350i/UC Browser7.0.0.41/70/351',
'SonyEricssonW350i/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW350i/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW350i/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw350i',
'SonyEricssonW350i/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw350i/UC Browser7.0.0.41/70/352',
'SonyEricssonW350iv/R10BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW350iv/R10BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW350iv/R10BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW350iv/R11CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w350i_ver1');
      }
  }



  function test_sonyericsson_w380_ver1() {
    foreach(array(
'SonyEricssonW380a/R9BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW380a/R9BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW380a/R9BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w380_ver1');
      }
  }



  function test_sonyericsson_w380a_ver1() {
    foreach(array(
'SonyEricssonW380a',
'SonyEricssonW380a/R10CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW380a/R10CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW380a/R10CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 201.144.221.245)',
'SonyEricssonW380a/R10CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW380a/R10CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonW380a/R10CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, OPENWAVE',
'SonyEricssonW380a/R11CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW380a/R11CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w380a_ver1');
      }
  }



  function test_sonyericsson_w380i_ver1() {
    foreach(array(
'SonyEricssonW380i',
'SonyEricssonW380i/R10BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW380i/R10CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW380i/R10CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW380i/R10CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW380i/R11CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW380i/R11CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW380i/R11CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW380i/R9BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW380i/R9BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW380i/R9BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w380i_ver1');
      }
  }



  function test_sonyericsson_w395_ver1() {
    foreach(array(
'SonyEricssonW395',
'SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1CB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1DA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1EA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FA Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, Son',
'SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, SonyEricssonW395/R1FB Browser/OpenWave/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW395/R1FB Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w395_ver1');
      }
  }



  function test_sonyericsson_w508_ver1() {
    foreach(array(
'SonyEricssonW508',
'SonyEricssonW508/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonW508/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonW508/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW508/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW508/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w508_ver1');
      }
  }



  function test_sonyericsson_w508a_ver1() {
    foreach(array(
'SonyEricssonW508a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonW508a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonW508a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonW508a/R1GC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w508a_ver1');
      }
  }



  function test_sonyericsson_w518a_ver1() {
    foreach(array(
'SonyEricssonW518a/R1EB009 Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w518a_ver1');
      }
  }



  function test_sonyericsson_w550_ver1() {
    foreach(array(
'SonyEricssonW550c/R4CB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW550c/R4CB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w550_ver1');
      }
  }



  function test_sonyericsson_w550i_ver1() {
    foreach(array(
'SonyEricssonW550i',
'SonyEricssonW550i/R4AB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW550i/R4BA  Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW550i/R4BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW550i/R4CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW550i/R4CB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW550i/R4CB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW550i/R4CB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW550i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW550i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW550i/R7BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w550i_ver1');
      }
  }



  function test_sonyericsson_w580c_ver1() {
    foreach(array(
'SonyEricssonW580c/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580c/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580c/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580c/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w580c_ver1');
      }
  }



  function test_sonyericsson_w580i_ver1() {
    foreach(array(
'SonyEricssonW580i',
'SonyEricssonW580i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW580i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW580i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw580i',
'SonyEricssonW580i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw580i/UC Browser7.0.0.41/69/351',
'SonyEricssonW580i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW580i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw580i',
'SonyEricssonW580i/R6BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580i/R6BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonW580i/R7AC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580i/R7AC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW580i/R7AC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW580i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW580i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW580i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw580i',
'SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.17.06.3.1.17.0',
'SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW580i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, DMMobile022HandlerUI 0.2.2 (Profile/MIDP-1.0 MIDP-2.0 Configuration/CLDC-1.1Locale: es)',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725/UCWEB7.1.0.42/69/351',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw580i',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw580i/UC Browser7.0.0.41/69/401',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.naija_cheatmaster/503; U; en)Presto/2.2.0',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonw580i',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw580i',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw580i/UC Browser7.0.0.41/70/352',
'SonyEricssonW580i/R8BE Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonw580i'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w580i_ver1');
      }
  }



  function test_sonyericsson_w595_ver1() {
    foreach(array(
'SonyEricssonW595',
'SonyEricssonW595/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'SonyEricssonW595/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonW595/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2 Novarra-Vision/8.0',
'SonyEricssonW595/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.2',
'SonyEricssonW595/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW595/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonw595',
'SonyEricssonW595/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.3.1.15.0',
'SonyEricssonW595/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3',
'SonyEricssonW595/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW595/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw595',
'SonyEricssonW595/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonw595',
'SonyEricssonW595/R3EF Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.3.1.13.0',
'SonyEricssonW595/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3(REAL IP: 203.142.100.17)',
'SonyEricssonW595/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3(REAL IP: 62.40.38.158)',
'SonyEricssonW595/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3',
'SonyEricssonW595/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW595/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW595/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw595',
'SonyEricssonW595/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw595/UC Browser7.0.0.41/69/351',
'SonyEricssonW595/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw595/UC Browser7.0.0.41/70/351',
'SonyEricssonW595/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw595/UC Browser7.0.0.41/70/352',
'SonyEricssonW595/R3EG Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonw595/UC Browser7.0.0.41/70/352',
'SonyEricssonW595/R3EH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595/R3EJ Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595a/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonW595a/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW595a/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW595a/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw595a',
'SonyEricssonW595a/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595a/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.3.0.0.0',
'SonyEricssonW595a/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595c/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w595_ver1');
      }
  }



  function test_sonyericsson_w595s_ver1() {
    foreach(array(
'SonyEricssonW595s/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.2',
'SonyEricssonW595s/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595s/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3',
'SonyEricssonW595s/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW595s/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w595s_ver1');
      }
  }



  function test_sonyericsson_w595v_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonW595v/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'Mozilla/4.0 SonyEricssonW595v/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2 UP.Link/6.5.0.0.0',
'Mozilla/4.0 SonyEricssonW595v/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'Mozilla/4.0 SonyEricssonW595v/R3EE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'Mozilla/4.0 SonyEricssonW595v/R3EE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonW595v/R3EE Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Mozilla/4.0 SonyEricssonW595v/R3EH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'Mozilla/4.0 SonyEricssonW595v/R3EH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonW595v/R3EH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.5.0.0.0',
'Mozilla/4.0 SonyEricssonW595v/R3EH Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w595v_ver1');
      }
  }



  function test_sonyericsson_w600i_ver1() {
    foreach(array(
'SonyEricssonW600i/R7B  Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW600i/R7B Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW600i/R7CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW600i/R7CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w600i_ver1');
      }
  }



  function test_sonyericsson_w610i_ver1() {
    foreach(array(
'SonyEricssonW610i',
'SonyEricssonW610i//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW610i//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW610i//R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW610i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW610i//R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW610i//R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW610i/R1JD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW610i/R1JD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW610i/R1JD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW610i/R1JD Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW610i/R1JD Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW610i/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW610i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW610i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW610i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW610i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW610i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w610i_ver1');
      }
  }



  function test_sonyericsson_w660i_ver1() {
    foreach(array(
'SonyEricssonW660i',
'SonyEricssonW660i/R6AD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW660i/R6AD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.3.0',
'SonyEricssonW660i/R6AD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW660i/R6AD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw660i/UC Browser7.0.0.41/70/350',
'SonyEricssonW660i/R6AD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw660i/UC Browser7.0.0.41/70/352',
'SonyEricssonW660i/R6AD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW660i/R6AD Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW660i/R6AD Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonw660i/UC Browser7.0.0.41/70/352',
'SonyEricssonW660i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW660i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW660i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw660i/UC Browser7.0.0.41/70/351',
'SonyEricssonW660i/R6BD Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW660i/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW660i/R8BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW660i/R8BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW660i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW660i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW660i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW660i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw660i/UC Browser7.0.0.41/70/351',
'SonyEricssonW660i/R8BB Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonw660i/UC Browser7.0.0.41/70/352',
'SonyEricssonW660i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w660i_ver1');
      }
  }



  function test_sonyericsson_w660iv_ver1() {
    foreach(array(
'SonyEricssonW660iv/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w660iv_ver1');
      }
  }



  function test_sonyericsson_w700c() {
    foreach(array(
'SonyEricssonW700c/R1CA/SN351673019381960 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700c/R1DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW700c/R1DB/SN351674018941390 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW700c/R1DB/SN355271012195929 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w700c');
      }
  }



  function test_sonyericsson_w700i_ver1() {
    foreach(array(
'SonyEricssonW700i',
'SonyEricssonW700i/R1CA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW700i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw700i',
'SonyEricssonW700i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw700i/UC Browser7.0.0.41/69/352',
'SonyEricssonW700i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonw700i',
'SonyEricssonW700i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Naira Land/4.2.13337Mod.by.kenshin/503; U; en)Presto/2.2.0',
'SonyEricssonW700i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw700i',
'SonyEricssonW700i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw700i/UC Browser7.0.0.41/70/351',
'SonyEricssonW700i/R1CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonw700i',
'SonyEricssonW700i/R1CA/SN351341809208195 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673010330370 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673010526571 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673010633740 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673010666740 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351673010780889 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351673010819836 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011291860 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011300620 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011327524 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011328787 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351673011465720 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011526885 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011642328 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011657870 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011763264 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011833778 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011837860 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011843397 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011855177 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673011859153 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012045919 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012196712 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012224191 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012292693 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012380571 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012382387 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012402060 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012420864 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012431234 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012501606 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012686324 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012689773 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012693411 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012696539 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012709464 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673012814488 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673013656540 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673013736383 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673013744064 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351673014004369 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673014067382 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673014088123 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673014093479 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673014096035 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673014191174 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673015179418 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673015180218 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673015185662 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351673015502379 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673015556367 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673016031816 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673016063959 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673016307232 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673016363961 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673016369067 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673016372517 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351673016775867 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673017311183 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351673018090430 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673018278605 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673018289123 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673018357367 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673018365865 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673018767755 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673018777382 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673018977180 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673019015501 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673019030757 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673019399020 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351673019545895 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010142591 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010176813 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010179361 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010179643 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010184676 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010190392 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010217344 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010241468 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010249123 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010281761 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010304852 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010325048 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351674010743711 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010898184 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674010953732 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351674011269492 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674011860258 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674011883508 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351674012220890 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674012222557 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674012692866 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674012710916 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674012948359 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674013034241 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674013119455 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674013879520 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674013977738 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674014028093 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674014366196 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674014396763 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674014402454 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674014449802 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674014823162 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674014852997 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674014900929 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674015089565 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351674015703348 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674015911081 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674015969709 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674015998039 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016035807 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016041458 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016111160 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016146752 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016163609 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016169077 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016367978 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN351674016382662 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016384049 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016403138 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016417732 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674016595180 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674017505436 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674017507994 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674017519445 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674017522159 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674017522399 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674017529063 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674017532638 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674018053113 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw700i/UC Browser7.0.0.41/70/352',
'SonyEricssonW700i/R1CA/SN351674018053428 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674018081296 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674018331188 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674018598471 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674018601580 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674018673118 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674018842044 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674018994738 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019078572 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019136214 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019174991 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019190377 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019671285 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019705174 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019768701 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019868709 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN351674019871646 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271010049441 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271010853339 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011146154 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011169958 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011192190 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011432653 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011479530 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011480223 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011537493 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011567284 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw700i/UC Browser7.0.0.41/69/352',
'SonyEricssonW700i/R1CA/SN355271011593520 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011830716 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011866397 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011966981 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011967815 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011970314 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011973581 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011977699 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011981147 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271011998216 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271012040992 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271012043665 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271012599088 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271012637508 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271012668438 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271012670400 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271012881494 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013191687 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013204159 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013289606 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013360704 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013423494 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013441785 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013498918 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013649874 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271013881329 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014120925 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014123408 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014138539 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014244832 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014268252 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014516304 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN355271014577348 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014591042 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014660391 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014728594 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014788218 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014794216 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014803090 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014806820 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014844268 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014851644 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271014852030 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271015323569 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN355271015375668 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271015389404 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271015438722 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271015445560 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271015512435 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271015617960 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271015627431 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN355271015740176 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271015934563 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016041228 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016050633 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'SonyEricssonW700i/R1CA/SN355271016111336 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016178962 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016185868 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016209064 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016253997 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016396507 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016413559 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016507434 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016581264 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016602631 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016648014 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016908897 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016941427 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271016990325 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017006121 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017128966 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017133164 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017214030 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017313394 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017627488 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017627751 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017805506 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017862432 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017892249 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271017907427 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN355271017979046 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018011807 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018103562 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018218477 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018367720 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018548402 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018553147 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018582674 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018591055 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018600625 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN355271018899789 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018917631 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1CA/SN355271018918423 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271018988624 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271019255486 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271019328374 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271019354388 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271019354859 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271019528684 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN355271019567898 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN356551005071255 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1CA/SN356819006546488 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW700i/R1CA/SN357444000255181 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw700i/UCWEB7.1.0.42/69/351',
'SonyEricssonW700i/R1DB/SN351673011729695 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1DB/SN351673012795414 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351673013943526 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351673015566150 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351673016003732 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351673018289883 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351673019039600 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351673019048270 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351674011901474 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351674012239197 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1DB/SN351674012843717 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351674013034936 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351674013050874 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw700i/UC Browser7.0.0.41/69/352',
'SonyEricssonW700i/R1DB/SN351674014568429 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN351674016026061 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271012644652 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271012865471 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271013153059 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271014516767 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271014769655 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271015300880 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271016254086 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW700i/R1DB/SN355271016277418 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271017545763 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271017571629 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271018172419 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw700i/UC Browser7.0.0.41/70/351',
'SonyEricssonW700i/R1DB/SN355271018754307 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN355271019308400 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN356553004604821 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN356828065659850 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW700i/R1DB/SN356829009588692 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'sonyericssonw700i',
'sonyericssonw700i/UC Browser7.0.0.41/70/351',
'sonyericssonw700i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w700i_ver1');
      }
  }



  function test_sonyericsson_w705_ver1() {
    foreach(array(
'SonyEricssonW705',
'SonyEricssonW705/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonW705/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1 UP.Link/6.3.1.13.0',
'SonyEricssonW705/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1 UP.Link/6.3.1.15.0',
'SonyEricssonW705/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1(REAL IP: 82.132.138.251)',
'SonyEricssonW705/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.1',
'SonyEricssonW705/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonW705/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.2',
'SonyEricssonW705/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW705/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonW705/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 UP.Link/6.3.0.0.0',
'SonyEricssonW705/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 UP.Link/6.3.1.15.0',
'SonyEricssonW705/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3 UP.Link/6.5.1.3.0',
'SonyEricssonW705/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.3',
'SonyEricssonW705/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW705/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW705/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonw705',
'SonyEricssonW705/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonW705/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4 UP.Link/6.3.1.13.0',
'SonyEricssonW705/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW705/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw705',
'SonyEricssonW705/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonw705/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w705_ver1');
      }
  }



  function test_sonyericsson_w705a_ver1() {
    foreach(array(
'SonyEricssonW705a',
'SonyEricssonW705a/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonW705a/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1 UP.Link/6.3.0.0.0',
'SonyEricssonW705a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonW705a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonW705a/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW705a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonW705a/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW705a/R1GC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w705a_ver1');
      }
  }



  function test_sonyericsson_w705u_ver1() {
    foreach(array(
'SonyEricssonW705u/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.1',
'SonyEricssonW705u/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.2'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w705u_ver1');
      }
  }



  function test_sonyericsson_w710i_ver1() {
    foreach(array(
'SonyEricssonW710i',
'SonyEricssonW710i/R1EE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW710i/R1EE Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW710i/R1EE Release/Sep-03-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW710i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW710i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW710i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW710i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW710i/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w710i_ver1');
      }
  }



  function test_sonyericsson_w715_ver1() {
    foreach(array(
'SonyEricssonW715',
'SonyEricssonW715/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonW715/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonW715/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonW715/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w715_ver1');
      }
  }



  function test_sonyericsson_w715v_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonW715v/R1DE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'Mozilla/4.0 SonyEricssonW715v/R1DE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonW715v/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'Mozilla/4.0 SonyEricssonW715v/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Mozilla/4.0 SonyEricssonW715v/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'Mozilla/4.0 SonyEricssonW715v/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'Mozilla/4.0 SonyEricssonW715v/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w715v_ver1');
      }
  }



  function test_sonyericsson_w760a_ver1() {
    foreach(array(
'SonyEricssonW760a/R3CC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'SonyEricssonW760a/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2 UP.Link/6.5.1.0.0',
'SonyEricssonW760a/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2 UP.Link/6.5.1.0.06.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w760a_ver1');
      }
  }



  function test_sonyericsson_w760i_ver1() {
    foreach(array(
'SonyEricssonW760i',
'SonyEricssonW760i/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0',
'SonyEricssonW760i/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0 UP.Link/6.3.0.0.0',
'SonyEricssonW760i/R3BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW760i/R3BA Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW760i/R3BA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonw760i/UC Browser7.0.0.41/70/352',
'SonyEricssonW760i/R3BH Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0',
'SonyEricssonW760i/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'SonyEricssonW760i/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonW760i/R3DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW760i/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW760i/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3 UP.Link/6.3.0.0.0',
'SonyEricssonW760i/R3EC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW760i/R3EE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW760i/R3EF Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW760i/R3EF Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW760i/R3EK Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW760i/R3EK Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW760i/R3EK Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW760i/R3EK Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW760i/R3EM Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w760i_ver1');
      }
  }



  function test_sonyericsson_w800c() {
    foreach(array(
'SonyEricssonW800c/L33m411/WAP2.0 profile',
'SonyEricssonW800c/R1AA/SN357851002532120 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800c/R1AA/SN357851009165221 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800c/R1BC Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800c/R1BC/SN356551002028829 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800c/R1BC/SN356551002734129 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800c/R1BC/SN356553002255311 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w800c');
      }
  }



  function test_sonyericsson_w800i() {
    foreach(array(
'SonyEricssonW800i',
'SonyEricssonW800i/R1AA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW800i/R1AA/SN352452009658987 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356554009210895 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356828002189383 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356828004383547 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356828008079984 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356828008740676 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356828009030572 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356828009129705 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356828009254099 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356828009857669 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829002372193 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829003148063 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829004567881 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829005837176 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829005959004 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829006005609 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829006402194 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW800i/R1AA/SN356829006402194 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW800i/R1AA/SN356829006402194 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829006493029 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829006831343 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829006964151 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829007768411 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829007852926 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829007881206 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829007894001 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829008224364 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829008264550 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829008351241 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1AA/SN356829008782874 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829008807689 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829008850945 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1AA/SN356829009185333 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829009219629 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829009308737 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829009454176 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829009585961 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN356829009886120 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851000152574 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851001022628 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851003207540 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851004900820 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1AA/SN357851004914078 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1AA/SN357851005504696 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851005896118 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851006415090 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851007073617 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851007593432 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN357851009974432 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1AA/SN357851009974432 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;FIREFOX/4.6.13337Mod.by.GURUSWAP/503; U; en)Presto/2.2.0',
'SonyEricssonW800i/R1AA/SN358830008310334 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN359207000032050 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN359207000052256 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1AA/SN359207001019791 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'SonyEricssonW800i/R1AA/SN359207005160997 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BA/SN355705012508441 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BA/SN356829003055599 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'SonyEricssonW800i/R1BC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1BC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0',
'SonyEricssonW800i/R1BC/SN353406012416212 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN353785015490419 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW800i/R1BC/SN353785017541029 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN353785018109735 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN354376013581265 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN354376016460327 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN355706016793054 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN355706019920332 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356552002479087 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356553008059899 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356828003709684 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356828005162817 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829000009045 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829000406381 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829001017633 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829001160425 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829002579979 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829002735969 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829003147180 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829003879220 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829004211498 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829004325843 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829005964301 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829006002523 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829006313763 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829006986568 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829007767959 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829007812029 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829008224026 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829008655393 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN356829668142997 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN357849006155476 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN357850001437950 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN357851005896233 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN357851007666691 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1BC/SN357851007892941 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN357851007903193 Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1BC/SN357851008264272 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN359302005487126 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BC/SN359302008028091 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BD Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1BD/SN356829004252740 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1K Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1K Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW800i/R1K/SN356554008751824 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1K/SN356828003077165 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1K/SN356829000153751 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1K/SN356829007713235 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1K/SN356829009292782 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1K/SN357851006364827 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1, SonyEricssonW800i/R1L Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356821003479531 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356828000381859 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356828000794119 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356828001930696 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356828005269414 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356828006600880 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356829000125981 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356829000192775 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356829000482952 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1L/SN356829000984445 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1N Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1N/SN356828009182340 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1N/SN356829002831776 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW800i/R1N/SN356829004313641 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1N/SN356829004486694 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1N/SN356829005252293 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1N/SN356829007809967 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1NA Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW800i/R1NA/SN356828009118252 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w800i');
      }
  }



  function test_sonyericsson_w810c_ver1() {
    foreach(array(
'SonyEricssonW810c',
'SonyEricssonW810c, SonyEricssonW810c, SonyEricssonW810c',
'SonyEricssonW810c, SonyEricssonW810c, SonyEricssonW810c, SonyEricssonW810c',
'SonyEricssonW810c/R4CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810c/R4CE Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810c/R4CK Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810c/R4DB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810c/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w810c_ver1');
      }
  }



  function test_sonyericsson_w810i_ver1() {
    foreach(array(
'SonyEricssonW810i',
'SonyEricssonW810i/R1BC Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4CE Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4CE Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810i/R4CF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4CF Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810i/R4CK Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4CK Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810i/R4CK Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW810i/R4DB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4DB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW810i/R4DB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW810i/R4DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810i/R4DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw810i',
'SonyEricssonW810i/R4DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw810i/UC Browser7.0.0.41/69/352',
'SonyEricssonW810i/R4DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonw810i',
'SonyEricssonW810i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW810i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonW810i/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 166.216.162.23)',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, SonyEricssonW810i UCWEB/6.0',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw810i',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;FIREFOX/4.6.13337Mod.by.GURUSWAP/503; U; en)Presto/2.2.0',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW810i/R4EA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonw810i/UC Browser7.0.0.41/70/352',
'SonyEricssonW810i/R4EK Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4EK Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW810iv/R4CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810iv/R4CE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW810iv/R4CE Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810iv/R4CM Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810iv/R4DB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810iv/R4DB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW810iv/R4DB Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW810iv/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW810iv/R4EA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'sonyericssonw810i',
'sonyericssonw810i/UC Browser7.0.0.41/69/351',
'sonyericssonw810i/UC Browser7.0.0.41/69/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w810i_ver1');
      }
  }



  function test_sonyericsson_w830c_ver1() {
    foreach(array(
'SonyEricssonW830a/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW830c',
'SonyEricssonW830c/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW830c/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w830c_ver1');
      }
  }



  function test_sonyericsson_w830i_ver1() {
    foreach(array(
'SonyEricssonW830i',
'SonyEricssonW830i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW830i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW830i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW830i/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW830i/R1JG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW830i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW830i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW830i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW830i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW830i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14881/503; U; en)Presto/2.2.0',
'SonyEricssonW830i_CMCC/R1KG SEMC-SW/R1KG Release/04.18.2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w830i_ver1');
      }
  }



  function test_sonyericsson_w850i_ver1() {
    foreach(array(
'SonyEricssonW850i',
'SonyEricssonW850i/R100 Mozilla/4.0 (Compatible;MSIE 6.0;SymbianOS;30',
'SonyEricssonW850i/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1ED Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW850i/R1ED Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW850i/R1ED Release/Sep-01-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1ED Release/Sep-01-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW850i/R1EG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1EJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1EJ Release/Sep-24-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1GA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW850i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW850i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1JC SEMC/NewsReader/1.0',
'SonyEricssonW850i/R1JE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW850i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW850i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW850i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w850i_ver1');
      }
  }



  function test_sonyericsson_w850iv_ver1() {
    foreach(array(
'SonyEricssonW850iv/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850iv/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW850iv/R1EJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850iv/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850iv/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW850iv/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w850iv_ver1');
      }
  }



  function test_sonyericsson_w880i_ver1() {
    foreach(array(
'SonyEricssonW880i',
'SonyEricssonW880i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R1JC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW880i/R1JC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonw880i',
'SonyEricssonW880i/R1JC Release/Jan-22-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R1JC Release/Jan-22-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW880i/R1JE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R1KC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW880i/R1KG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW880i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW880i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW880i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW880i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW880i/R6BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW880i/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R8AE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW880i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.6.4.0.0',
'SonyEricssonW880i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW880i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonw880i/UC Browser7.0.0.41/70/352',
'SonyEricssonW880i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW880i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonw880i/UCWEB7.2.0.46/69/352',
'SonyEricssonW880i/R8BA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW880i/R8BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880i/R8BC Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW880i/R8BE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w880i_ver1');
      }
  }



  function test_sonyericsson_w880iv_ver1() {
    foreach(array(
'SonyEricssonW880iv/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880iv/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW880iv/R1KG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880iv/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW880iv/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w880iv_ver1');
      }
  }



  function test_sonyericsson_w890i_ver1() {
    foreach(array(
'SonyEricssonW890i',
'SonyEricssonW890i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW890i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW890i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW890i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW890i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw890i/UC Browser7.0.0.41/69/351',
'SonyEricssonW890i/R1EB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW890i/R1EB Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW890i/R1EB Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw890i',
'SonyEricssonW890i/R1EC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange',
'SonyEricssonW890i/R1ED Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW890i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW890i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonW890i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonW890i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW890i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange',
'SonyEricssonW890i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW890i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w890i_ver1');
      }
  }



  function test_sonyericsson_w890iv_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonW890iv/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonW890iv/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Mozilla/4.0 SonyEricssonW890iv/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonW890iv/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonW890iv/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w890iv_ver1');
      }
  }



  function test_sonyericsson_w900i_ver1() {
    foreach(array(
'SonyEricssonW900i',
'SonyEricssonW900i/R1L Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW900i/R5AF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW900i/R5AG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW900i/R5BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW900i/R5BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonW900i/R5BC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w900i_ver1');
      }
  }



  function test_sonyericsson_w902_ver1() {
    foreach(array(
'SonyEricssonW902',
'SonyEricssonW902/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonW902/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW902/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE',
'SonyEricssonW902/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW902/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w902_ver1');
      }
  }



  function test_sonyericsson_w910i_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonW910iv/R1CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonW910iv/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonW910iv/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Mozilla/4.0 SonyEricssonW910iv/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonW910i',
'SonyEricssonW910i/R1CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW910i/R1CA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.Mod.by.Sabada/503; U; en)Presto/2.2.0',
'SonyEricssonW910i/R1CA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW910i/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW910i/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonW910i/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW910i/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW910i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW910i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW910i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW910i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW910i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw910i/UC Browser7.0.0.41/69/351',
'SonyEricssonW910i/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonw910i/UC Browser7.0.0.41/70/351',
'SonyEricssonW910i/R1EB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW910i/R1EB Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW910i/R1EC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange',
'SonyEricssonW910i/R1ED Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW910i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW910i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonW910i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange',
'SonyEricssonW910i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW910i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonW910i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonW910i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonW910i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw910i',
'SonyEricssonW910i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw910i/UC Browser7.0.0.41/69/351',
'SonyEricssonW910i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 sonyericssonw910i/UC Browser7.0.0.41/70/351',
'SonyEricssonW910i/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 sonyericssonw910i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w910i_ver1');
      }
  }



  function test_sonyericsson_w910iv_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonW910iv/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 SonyEricssonW910iv/R1DA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Mozilla/4.0 SonyEricssonW910iv/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w910iv_ver1');
      }
  }



  function test_sonyericsson_w950i_ver1() {
    foreach(array(
'SonyEricssonW950i',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 323) Opera 8.60 [en]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 323) Opera 8.60 [ru]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 405) Opera 8.65 [en]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [de]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [en]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [id]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [en]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [es]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [fr]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [id]',
'SonyEricssonW950i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 598) Opera 8.65 [tr]'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w950i_ver1');
      }
  }



  function test_sonyericsson_w960i_ver1() {
    foreach(array(
'SonyEricssonW960i',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 636) Opera 8.65 [ar]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [en]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [id]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [it]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 701) Opera 8.65 [zh-HK]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [ar]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [de]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [en-US]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [en]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [en] UP.Link/6.3.1.13.0',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [es]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [fa]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [fr]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [id]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [ms]',
'SonyEricssonW960i/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 768) Opera 8.65 [nl]'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w960i_ver1');
      }
  }



  function test_sonyericsson_w980_ver1() {
    foreach(array(
'SonyEricssonW980',
'SonyEricssonW980/R3BF Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0',
'SonyEricssonW980/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'SonyEricssonW980/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w980_ver1');
      }
  }



  function test_sonyericsson_w980i_ver1() {
    foreach(array(
'SonyEricssonW980/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'SonyEricssonW980/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.2',
'SonyEricssonW980/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW980/R3EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3',
'SonyEricssonW980/R3EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW980/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3',
'SonyEricssonW980/R3EG Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.3.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w980i_ver1');
      }
  }



  function test_sonyericsson_w980v_ver1() {
    foreach(array(
'Mozilla/4.0 SonyEricssonW980v/R3CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.1',
'Mozilla/4.0 SonyEricssonW980v/R3DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.2',
'Mozilla/4.0 SonyEricssonW980v/R3EE Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.3'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w980v_ver1');
      }
  }



  function test_sonyericsson_w995_ver1() {
    foreach(array(
'SonyEricssonW995',
'SonyEricssonW995/R1DB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.1',
'SonyEricssonW995/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonW995/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2 UP.Link/6.3.1.13.0',
'SonyEricssonW995/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2 UP.Link/6.5.0.0.0',
'SonyEricssonW995/R1EA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW995/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonW995/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.3',
'SonyEricssonW995/R1FA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW995/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonW995/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4 UP.Link/6.3.1.13.0',
'SonyEricssonW995/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4 UP.Link/6.5.0.0.0',
'SonyEricssonW995/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.4',
'SonyEricssonW995/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonW995/R1GA Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonW995/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5',
'SonyEricssonW995/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 model-orange JavaPlatform/JP-8.4.5',
'SonyEricssonW995a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.2',
'SonyEricssonW995a/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.3',
'SonyEricssonW995a/R1GA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonW995a/R1GB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonW995a/R1GC Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.4',
'SonyEricssonW995a/R1HA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.4.5'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_w995_ver1');
      }
  }



  function test_sonyericsson_x10a_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; X10a)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; X10a)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonX10a Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonX10a Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-AR; X10a)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-MX; X10a)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-mx; SonyEricssonX10a Build/R1FB001) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-CA; X10a)',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-BR; X10a)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-CN; X10a)'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_x10a_ver1');
      }
  }



  function test_sonyericsson_x10i_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; bg-BG; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; cs-CZ; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; da-DK; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; da-dk; SonyEricssonX10i Build/R1FB001) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-DE; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; SonyEricssonX10i Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; SonyEricssonX10i Build/R2BA020) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; SonyEricssonX10iv Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; el-GR; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; el-gr; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; el-gr; SonyEricssonX10i Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonX10i Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonX10i Build/R2BA020) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonX10i Build/R2BA023) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonX10iv Build/R1FA014) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; SonyEricssonX10iv Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonX10i Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonX10i Build/R2BA020) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonX10iv Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; SonyEricssonX10iv Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (Linux; U; Android 1.6; es-ES; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-MX; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; SonyEricssonX10i Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; SonyEricssonX10iv Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-FR; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; SonyEricssonX10iv Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; hr-HR; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; hr-hr; SonyEricssonX10iv Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; hu-HU; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; in-ID; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; in-id; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-IT; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; SonyEricssonX10i Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-JP; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; nb-NO; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; nb-no; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nb-no; SonyEricssonX10i Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-NL; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-nl; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-nl; SonyEricssonX10i Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-nl; SonyEricssonX10iv Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; pl-PL; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; pl-pl; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-pt; SonyEricssonX10iv Build/R1FA016) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; ru-RU; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; sk-SK; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-SE; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-se; SonyEricssonX10i Build/R1FA014) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-se; SonyEricssonX10i Build/R1FB001) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-se; SonyEricssonX10i Build/R2BA020) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; tr-TR; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-CN; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-HK; X10i)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-TW; X10i)'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_x10i_ver1');
      }
  }



  function test_sonyericsson_x1a_ver1() {
    foreach(array(
'SonyEricssonX1a/R1AA Mozilla/4.0  (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonX1a/R3AA Rogers/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) 1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_x1a_ver1');
      }
  }



  function test_sonyericsson_x1i_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; Sony)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SonyEricssonX1a/R3AA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SonyEricssonX1i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SonyEricssonX1i/R2AA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) SonyEricssonX1i/R3AA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/X1i/1.02.175.3',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/X1i/1.05.175.13',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/X1i/1.05.175.13 UP.Link/6.5.0.0.0',
'O2/1.0/SonyEricssonX1i/R1AA Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi; U) SonyEricssonX1a/R3AA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi; U) SonyEricssonX1i/R2AA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi; U) SonyEricssonX1i/R2AA Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows NT 5.1; Windows Phone 6.5)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi; U) SonyEricssonX1i/R3AA Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SEMC-VENUS Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'Sony Ericsson K750i SE-221 88 Lund, EN/SVV 104 363 R1A',
'SonyEricssonX1i/R1AA Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'Vodafone/1.0/SEX1i/R1AA Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SEX1i/R1AA Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/2141; U; ES) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SEX1i/R1AA Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/2141; U; UK) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SEX1i/R2AA Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SEX1i/R2AA Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/2532; U; UK) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SEX1i/R3AA Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SEX1i/R3AA Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15431; U; DE) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/SEX1i/R3AA Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15431; U; UK) UP.Link/6.3.1.20.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_x1i_ver1');
      }
  }



  function test_sonyericsson_x1i_ver1_subua2() {
    foreach(array(
'X1i Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_x1i_ver1_subua2');
      }
  }



  function test_sonyericsson_x2_ver1() {
    foreach(array(
'SonyEricssonX2/R1AA Browser/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonX2/R1AA Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonX2/R2AA Browser/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonX2/R3AA Browser/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonX2/R3AA Vodafone/1.0 Browser/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_x2_ver1');
      }
  }



  function test_sonyericsson_z1010_ver1() {
    foreach(array(
'SonyEricssonZ1010/R1C SEMC-Browser/4.0 Profile/MIDP-1.0 MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ1010/R1G SEMC-Browser/4.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ1010/R1J SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ1010/R1J SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonZ1010/R1K SEMC-Browser/4.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z1010_ver1');
      }
  }



  function test_sonyericsson_z200_ver1() {
    foreach(array(
'SonyEricssonZ200/R101'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z200_ver1');
      }
  }



  function test_sonyericsson_z208_ver1() {
    foreach(array(
'SonyEricssonZ208/R101'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z208_ver1');
      }
  }



  function test_sonyericsson_z250i_ver1() {
    foreach(array(
'SonyEricssonZ250a/R1B017 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ250i/R1B017 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ250i/R1C003 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z250i_ver1');
      }
  }



  function test_sonyericsson_z300a_ver1() {
    foreach(array(
'SonyEricssonZ300a/R4H TelecaBrowser/4.08'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z300a_ver1');
      }
  }



  function test_sonyericsson_z300i_ver1() {
    foreach(array(
'SonyEricssonZ300i/R3F/TelecaBrowser/4.08',
'SonyEricssonZ300i/R3G/TelecaBrowser/4.08',
'SonyEricssonZ300i/R3M/TelecaBrowser/4.08',
'SonyEricssonZ300i/R3S/TelecaBrowser/4.08',
'SonyEricssonZ300i/R3Y/TelecaBrowser/4.08'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z300i_ver1');
      }
  }



  function test_sonyericsson_z310a_ver1() {
    foreach(array(
'SonyEricssonZ310a/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonZ310a/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310a/R7AB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310a/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310a/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z310a_ver1');
      }
  }



  function test_sonyericsson_z310i_ver1() {
    foreach(array(
'SonyEricssonZ310i',
'SonyEricssonZ310i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310i/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310i/R1KF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310i/R1KF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ310i/R1KF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonz310i/UC Browser7.0.0.41/69/352',
'SonyEricssonZ310i/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310i/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z310i_ver1');
      }
  }



  function test_sonyericsson_z310iv_ver1() {
    foreach(array(
'SonyEricssonZ310iv/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310iv/R6BC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ310iv/R8BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z310iv_ver1');
      }
  }



  function test_sonyericsson_z500a_ver1() {
    foreach(array(
'SonyEricssonZ500a',
'SonyEricssonZ500a/R1A SEMC-Browser/4.0.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ500a/R4A SEMC-Browser/4.0.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z500a_ver1');
      }
  }



  function test_sonyericsson_z500i_ver1() {
    foreach(array(
'SonyEricssonZ500i/R3A SEMC-Browser/4.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z500i_ver1');
      }
  }



  function test_sonyericsson_z520a_ver1() {
    foreach(array(
'SonyEricssonZ520a/R3C Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520a/R3F Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520a/R3F/SN357198009098378 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520a/R3J Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520a/R3K Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520a/R3K/SN351841014564688 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520a/R3M/SN357197004774884 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520c/R3F Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonZ520c/R3J/SN358339000181131 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z520a_ver1');
      }
  }



  function test_sonyericsson_z520i_ver1() {
    foreach(array(
'SonyEricssonZ520i',
'SonyEricssonZ520i/R1DB/SN355271018988079 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN351298844565742 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN351609010272345 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357197000536154 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357197000559560 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357197007518932 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357197008230842 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357197009754501 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357206004590529 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357206004715993 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357206006001962 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN357654659874567 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN358339004537296 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3C/SN358339006352173 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'SonyEricssonZ520i/R3C/SN358339009807595 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN358339002653392 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN358339002671816 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN358339002751469 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN358339003604147 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN358339005161450 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN358339005918966 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN358339006958706 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN359671000135488 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN359671000438130 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3F/SN359671001850234 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ520i/R3J Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonZ520i/R3J/SN351609011553008 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J/SN351841010306332 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J/SN357197003688812 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J/SN357197005804094 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J/SN357197005994168 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J/SN357197009599195 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J/SN357198000628884 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ520i/R3J/SN357198002481563 Browser/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z520i_ver1');
      }
  }



  function test_sonyericsson_z530c_ver1() {
    foreach(array(
'SonyEricssonZ530c/R6AC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z530c_ver1');
      }
  }



  function test_sonyericsson_z530i_ver1() {
    foreach(array(
'SonyEricssonZ530i',
'SonyEricssonZ530i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ530i/R4GC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ530i/R6AC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ530i/R6AC Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ530i/R6BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ530i/R6BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonZ530i/R6DA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ530i/R6DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ530i/R6DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonz530i/UC Browser7.0.0.41/69/351',
'SonyEricssonZ530i/R6DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,OPENWAVE',
'SonyEricssonZ530i/R6DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonZ530i/R6DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'SonyEricssonZ530i/R6DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, OPENWAVE/UC Browser7.0.0.41/70/352',
'SonyEricssonZ530i/R6DA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonz530i/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z530i_ver1');
      }
  }



  function test_sonyericsson_z550a() {
    foreach(array(
'SonyEricssonZ550a',
'SonyEricssonZ550a/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ550a/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonZ550a/R6GA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z550a');
      }
  }



  function test_sonyericsson_z550c() {
    foreach(array(
'SonyEricssonZ550c/R6BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z550c');
      }
  }



  function test_sonyericsson_z550i() {
    foreach(array(
'SonyEricssonZ550i',
'SonyEricssonZ550i, SonyEricssonZ550i, SonyEricssonZ550i',
'SonyEricssonZ550i, SonyEricssonZ550i, SonyEricssonZ550i, SonyEricssonZ550i, SonyEricssonZ550i, SonyEricssonZ550i, SonyEricssonZ550i',
'SonyEricssonZ550i/R4GC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ550i/R6BA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ550i/R6BA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ550i/R6BA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonz550i',
'SonyEricssonZ550i/R6BA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonz550i/UC Browser7.0.0.41/69/351',
'SonyEricssonZ550i/R6BA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonz550i',
'SonyEricssonZ550i/R6BA Release/Jun-16-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ550i/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ550i/R6CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, OPENWAVE',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonz550i',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonz550i/UC Browser7.0.0.41/69/351',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, sonyericssonz550i/UC Browser7.0.0.41/70/352',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,sonyericssonz550i',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, OPENWAVE',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonz550i',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, sonyericssonz550i/UC Browser7.0.0.41/70/351',
'SonyEricssonZ550i/R6CA Java/SEMC-Java/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1,sonyericssonz550i',
'SonyEricssonZ550i/R6GA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z550i');
      }
  }



  function test_sonyericsson_z555_ver1() {
    foreach(array(
'SonyEricssonZ555a/R10CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ555a/R9BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z555_ver1');
      }
  }



  function test_sonyericsson_z555i_ver1() {
    foreach(array(
'SonyEricssonZ555i',
'SonyEricssonZ555i/R10CA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ555i/R10CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ555i/R10CA Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonZ555i/R9AA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ555i/R9BB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z555i_ver1');
      }
  }



  function test_sonyericsson_z558i_ver1() {
    foreach(array(
'SonyEricssonZ558i',
'SonyEricssonZ558i/R4FA Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z558i_ver1');
      }
  }



  function test_sonyericsson_z600_ver1() {
    foreach(array(
'SonyEricssonZ600/R301 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonZ600/R401 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'SonyEricssonZ600/R601 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z600_ver1');
      }
  }



  function test_sonyericsson_z610i_ver1() {
    foreach(array(
'SonyEricssonZ610i',
'SonyEricssonZ610i/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1ED Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonZ610i/R1ED Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ610i/R1ED Release/Aug-31-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1EJ Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1EJ Release/Sep-24-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1EL Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ610i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1GB Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'SonyEricssonZ610i/R1GB Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ610i/R1GB Release/Nov-30-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonZ610i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonZ610i/R1JE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1JG Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1JG Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'SonyEricssonZ610i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ610i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'SonyEricssonZ610i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonZ610i/R1JG Release/Feb-15-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'SonyEricssonZ610i/R1KH Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z610i_ver1');
      }
  }



  function test_sonyericsson_z710c_ver1() {
    foreach(array(
'SonyEricssonZ710c/R1EF Release/Sep-08-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z710c_ver1');
      }
  }



  function test_sonyericsson_z710i_ver1() {
    foreach(array(
'SonyEricssonZ710i',
'SonyEricssonZ710i/R1EE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ710i/R1EE Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonZ710i/R1EF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ710i/R1EF Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonZ710i/R1EF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0 UP.Link/6.3.0.0.0',
'SonyEricssonZ710i/R1EF Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'SonyEricssonZ710i/R1EF Release/Sep-08-2006 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ710i/R1JC Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ710i/R1JC Release/Jan-23-2007 Browser/NetFront/3.3 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z710i_ver1');
      }
  }



  function test_sonyericsson_z750a_ver1() {
    foreach(array(
'SonyEricssonZ750a/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ750a/R1DB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ750a/R1DB Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'SonyEricssonZ750a/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z750a_ver1');
      }
  }



  function test_sonyericsson_z750i_ver1() {
    foreach(array(
'SonyEricssonZ750i/R1CA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ750i/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ750i/R1DA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'SonyEricssonZ750i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ750i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'SonyEricssonZ750i/R1ED Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ750i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ750i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z750i_ver1');
      }
  }



  function test_sonyericsson_z770i_ver1() {
    foreach(array(
'SonyEricssonZ770i/R1EA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ770i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'SonyEricssonZ770i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'SonyEricssonZ770i/R1FA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.6.4.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z770i_ver1');
      }
  }



  function test_sonyericsson_z780_ver1() {
    foreach(array(
'SonyEricssonZ780i/R3BA Browser/NetFront/3.4 Profile/MIDP-2.1 Configuration/CLDC-1.1 JavaPlatform/JP-8.3.0'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z780_ver1');
      }
  }



  function test_sonyericsson_z800_ver1() {
    foreach(array(
'SonyEricssonZ800',
'SonyEricssonZ800/R1A Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ800/R1AB Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ800/R1X Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ800/R1Y Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ800/R1Z Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z800_ver1');
      }
  }



  function test_sonyericsson_z800c_ver1() {
    foreach(array(
'SonyEricssonZ800i/R1AB Browser/SEMC-Browser/4.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'sonyericsson_z800c_ver1');
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

  function sonyericssonTest() {
    $this->UnitTestCase('sonyericsson Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new SonyericssonTest();
$test->run(new TextReporter());

?>
