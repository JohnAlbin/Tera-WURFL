<?php

/*
 * Recognising Nokia devices from their user agents
 *
 */

require_once 'test_helper.php';

class NokiaTest extends TeraWurflTestCase {

  var $wurfl;


  function test_nokia_6120ci_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120ci/7.02; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120ci/7.10; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6120ci_ver1');
      }
  }


  function test_nokia_e73_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE73/041.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.5 3gpp-gba',
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e73_ver1');
      }
  }


  function test_nokia_2710c_ver1() {
    foreach(array(
'Nokia2710c-2/2.0 (06.13) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2710c-2/2.0 (06.13) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2710c-2/2.0 (06.13) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2710c_ver1');
      }
  }



  function test_nokia_c3_ver1() {
    foreach(array(
'NokiaC3-00/5.0 (03.35) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NokiaC3-00/5.0 (03.35) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'NokiaC3-00/5.0 (03.35) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
    ) as $ua) {
        $this->checkUA($ua, 'nokia_c3_ver1');
      }
  }



  function test_nokia2700c_ver1() {
    foreach(array(
'Nokia2700c-2',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Nokia2700c-2 UCWEB/6.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/70/351',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2 Firebreed Protectv1/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/351',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Babadinho/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/351',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UCWEB7.2.2.51/69/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (07.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (07.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mobile Downloader UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/351',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Chijibaba (chiji14.muf.mobi)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Iyke-MEGA/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Samoskie 4.2 Handler UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/351',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/352',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2700c-2/UCWEB7.2.2.51/69/352 UNTRUSTED/1.0',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia2700c_ver1');
      }
  }



  function test_nokia6700c_ver1() {
    foreach(array(
'Nokia6700c-1',
'Nokia6700c-1/2.0 (06.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6700c-1/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6700c-1/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6700c-1/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6700c-1/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6700c-1/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.3.1.15.0',
'Nokia6700c-1/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6700c-1 UNTRUSTED/1.0',
'Nokia6700c-1/2.0 (07.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6700c-1/2.0 (07.90) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6700c-1/2.0 (07.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6700c-1/2.0 (07.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6700c-1/2.0 (07.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6700c-1/2.0 (07.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6700c-1/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia6700c-1/2.0 (10.50) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6700c-1/2.0 (10.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6700c-1/2.0 (10.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6700c-1/2.0 (10.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.3.1.15.0',
'Nokia6700c-1/2.0 (10.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia6700c-1/2.0 (10.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6700c-1/2.0 (10.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6700c-1/2.0 (10.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+'
    ) as $ua) {
        $this->checkUA($ua, 'nokia6700c_ver1');
      }
  }



  function test_nokia_1006_ver1() {
    foreach(array(
'Nokia-1006 UP.Browser/6.3.0.8.c.1.104 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_1006_ver1');
      }
  }



  function test_nokia_1606_ver1() {
    foreach(array(
'Nokia-1606 UP.Browser/6.3.0.8.c.1.101 (GUI) MMP/2.0',
'Nokia-1606 UP.Browser/6.3.0.8.c.1.102 (GUI) MMP/2.0',
'Nokia-1606 UP.Browser/6.3.0.8.c.1.104 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_1606_ver1');
      }
  }



  function test_nokia_1680c_ver1() {
    foreach(array(
'Nokia1680c-2',
'Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia1680c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2/2.0 (05.63) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2/2.0 (05.63) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia1680c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia1680c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia1680c-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia1680c-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia1680c-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia1680c-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia1680c-2/2.0 (07.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2b/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2b/2.0 (05.63) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2b/2.0 (06.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2b/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c-2b/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia1680c-2b/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia1680c-2b/2.0 (06.83) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c_CMCC/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1680c_CMCC/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_1680c_ver1');
      }
  }



  function test_nokia_1681c_ver1() {
    foreach(array(
'Nokia1681c/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia1681c_CMCC/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_1681c_ver1');
      }
  }



  function test_nokia_220s_ver1() {
    foreach(array(
'Nokia2220s',
'Nokia2220s/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2220s/2.0 (09.75) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_220s_ver1');
      }
  }



  function test_nokia_2228_ver1() {
    foreach(array(
'Nokia-2228 UP.Browser/6.3.0.8.c.1.104 (GUI) MMP/2.0',
'Nokia-2228 UP.Browser/6.3.0.8.c.1.1041 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2228_ver1');
      }
  }



  function test_nokia_2320c_ver1() {
    foreach(array(
'Nokia2320c-2b/2.0 (06.88) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2320c-2b/2.0(ATT.06.88) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2320c-2b/2.0(ATT.06.88) Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia2320c-2b/2.0(ATT.06.88) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2320c_ver1');
      }
  }



  function test_nokia_2323classic_ver1() {
    foreach(array(
'Nokia2323c-2',
'Nokia2323c-2/2.0 (06.46) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2323c-2/2.0 (06.75) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2323c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2323c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2323c-2/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2323c-2/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia2323c-2/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2323c-2/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2323c-2/UC Browser7.0.0.41/70/352',
'Nokia2323c-2/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2323c-2/2.0 (09.85) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2323classic_ver1');
      }
  }



  function test_nokia_2330c_ver1() {
    foreach(array(
'Nokia2330c-2',
'Nokia2330c-2/1.0 (p) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2/2.0 (06.46) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2/2.0 (06.46) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2330c-2/2.0 (06.46) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2330c-2/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (06.75) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2/2.0 (06.75) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (06.75) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2330c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2330c-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2330c-2/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2330c-2 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;MOZILLA FIREFOX/4.2.13337Mod.by.Temmy4you (9jacheat.onmbl.com)/503; U; en)9jacheats/2.2.0 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (09.85) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2/2.0 (09.85) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2330c-2/2.0 (09.85) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2330c-2/2.0 (09.85) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2330c-2/UC Browser7.0.0.41/70/351',
'Nokia2330c-2b/2.0 (06.46) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2b/2.0 (06.46) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2330c-2b/2.0 (08.13) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2b/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2b/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2330c-2b/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2330c-2b/2.0(ATT.06.89) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2330c_ver1');
      }
  }



  function test_nokia_2600c_ver1() {
    foreach(array(
'Nokia2600c',
'Nokia2600c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2600c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia2600c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2600c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2600c-2/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2600c-2 UNTRUSTED/1.0',
'Nokia2600c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2600c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2600c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0',
'Nokia2600c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2600c-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2600c-2 UNTRUSTED/1.0',
'Nokia2600c-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2600c-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2600c-2b/2.0 (06.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c-2b/2.0 (06.45) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2600c/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Naija Baze/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2600c/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2600c/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2600c/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2600c/2.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c/2.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2600c/2.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1 0.407365292675703',
'Nokia2600c/2.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.5) Gecko/20060719 UNTRUSTED/1.0',
'Nokia2600c/2.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Babadinho/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2600c/2.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2600c/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2600c/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2600c/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2600c_ver1');
      }
  }



  function test_nokia_2605_ver1() {
    foreach(array(
'Nokia',
'Nokia 2605 UP.Browser/6.2.3.9.j.1.107-20081119 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2605_ver1');
      }
  }



  function test_nokia_2610_ver1() {
    foreach(array(
'Nokia2610',
'Nokia2610/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (03.53) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (03.71) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (03.75) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (03.75) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2610/2.0 (03.75) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'Nokia2610/2.0 (03.77) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (04.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (04.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (04.52) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2610/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2610/2.0 (05.65) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (05.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (06.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (06.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2610/2.0 (06.73) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (06.80) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (07.04a) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2610/2.0 (07.11) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2610_ver1');
      }
  }



  function test_nokia_2626_ver1() {
    foreach(array(
'Nokia2626',
'Nokia2626/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2626/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia2626/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2626/2.0 (04.61) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2626/2.0 (04.61) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2626/2.0 (06.80) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2626/2.0 (06.80) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2626/2.0 (06.80) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2626/2.0 (06.81) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia2626/2.0 (06.81) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2626_ver1');
      }
  }



  function test_nokia_2630_ver1() {
    foreach(array(
'Nokia2630',
'Nokia2630/2.0 (03.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (03.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2630/2.0 (04.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (04.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2630/2.0 (04.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2630/2.0 (04.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (04.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (04.90) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2630/2.0 (04.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2630/2.0 (04.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia2630/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2630/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Naijabaze/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2630/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2630/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2630/2.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2630/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2630/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2630/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia2630/2.0 (05.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (05.62) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2630/2.0 (05.62) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2630/2.0 (06.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2630/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2630/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2630/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2630/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2630/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2630/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2630/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2630/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2630/2.0 (07.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (57.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2630/2.0 (57.20) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2630_ver1');
      }
  }



  function test_nokia_2650_ver1() {
    foreach(array(
'Nokia2650/1.0 (5.19) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia2650/1.0 (5.48) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia2650/1.0 (6.06) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia2650/1.0 (6.18) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia2650/1.0 (6.19) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2650_ver1');
      }
  }



  function test_nokia_2660_ver1() {
    foreach(array(
'Nokia2660/2.0 (03.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2660/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2660/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2660/2.0 (05.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2660/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2660_ver1');
      }
  }



  function test_nokia_2680s_ver1() {
    foreach(array(
'Nokia2680s-2',
'Nokia2680s-2/1.0 (04.56) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia2680s-2/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2680s-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/ i.N.S.i.D.e.T.i.C.i. /503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'Nokia2680s-2/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2680s-2/UC Browser7.0.0.41/70/352',
'Nokia2680s-2/1.0 (06.17) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2/1.0 (06.17) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (06.17) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2680s-2/1.0 (06.17) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2680s-2/1.0 (56.17) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2b/1.0 (04.56) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2b/1.0 (04.56) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2680s-2b/1.0 (04.56) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'Nokia2680s-2b/1.0 (04.56) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0',
'Nokia2680s-2b/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2b/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2b/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2680s-2b/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2680s-2b/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'Nokia2680s-2b/1.0 (06.17) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s-2b/1.0(ATT.05.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s/1.0 (04.56) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s/1.0 (04.91) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s/1.0 (05.28) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2680s/1.0 (06.17) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2680s_ver1');
      }
  }



  function test_nokia_2690_ver1() {
    foreach(array(
'Nokia2690/2.0 (09.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (09.65) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2690/2.0 (09.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia2690/2.0 (09.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 Nokia2690 UCWEB/6.0 UNTRUSTED/1.0',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Chijibaba (chiji14.muf.mobi)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2690/UC Browser7.0.0.41/70/352',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (09.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (09.90) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (09.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2690/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2690/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia2690/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2690/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia2690/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2690/UC Browser7.0.0.41/70/351',
'Nokia2690/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2690/UC Browser7.0.0.41/70/352',
'Nokia2690/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2690/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2690_ver1');
      }
  }



  function test_nokia_2705_ver1() {
    foreach(array(
'Nokia-2705/1.0 UP.Browser/6.2.3.9.j.1.107-20090216 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2705_ver1');
      }
  }



  function test_nokia_2720fold_ver1() {
    foreach(array(
'Nokia2720a-2',
'Nokia2720a-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a-2/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2720a-2/2.0 (08.42) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a-2/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a-2b/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a-2b/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2720a-2b/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'Nokia2720a-2b/2.0 (08.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a-2b/2.0 (08.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2720a-2b/2.0 (08.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a-2b/2.0 (08.64) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a-2b/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a-2b/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2720a-2b/2.0(ATT.08.71) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2720a/2.0 (09.55) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2720fold_ver1');
      }
  }



  function test_nokia_2730c_ver1() {
    foreach(array(
'Nokia2730c-1/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/351',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1/UC Browser7.0.0.41/70/352',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1/UCWEB7.1.0.42/69/351 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2730c-1/UC Browser7.0.0.41/70/352',
'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (tmy7.37) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 (tmy7.37) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (tmy7.37) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (tmy7.37) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (tmy7.37) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (tmy7.37) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia2730c-1/2.0 (tmy7.37) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1b/2.0 (07.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2730c-1b/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2730c_ver1');
      }
  }



  function test_nokia_2760_ver1() {
    foreach(array(
'Nokia2760',
'Nokia2760/2.0 (03.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (03.62) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia2760/2.0 (03.62) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia2760/2.0 (04.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (04.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (04.22) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2760/2.0 (04.22) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2760/2.0 (04.22) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia2760 UNTRUSTED/1.0',
'Nokia2760/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2760/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2760/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2760/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia2760/2.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (05.45) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (05.45) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia2760/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2760/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia2760/2.0 (05.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (05.62) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia2760/2.0 (06.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia2760/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'Nokia2760/2.0 (06.83) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia2760/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2760_ver1');
      }
  }



  function test_nokia_2865_ver1() {
    foreach(array(
'Nokia2865',
'Nokia2865/2.0 (FL100V1100.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia2865/2.0 (FL190V0200.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia2865/2.0 (FL190V0300.nep) UP.Browser/6.2.3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2865_ver1');
      }
  }



  function test_nokia_2865i_ver1() {
    foreach(array(
'Nokia2865i/2.0 (FL100V1000.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia2865i/2.0 (FL190V0200.nep) UP.Browser/6.2.3.8 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_2865i_ver1');
      }
  }



  function test_nokia_3100_ver1() {
    foreach(array(
'Nokia3100/1.0 (03.10) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (03.12) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (04.01) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (05.02) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (05.03) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (05.30) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (05.54) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (05.91) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (06.01) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (06.11) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3100/1.0 (06.11) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/1.1',
'Nokia3100/1.0 (06.31) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3100_ver1');
      }
  }



  function test_nokia_3100b_ver1() {
    foreach(array(
'Nokia3100b/1.0 (04.03) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3100b_ver1');
      }
  }



  function test_nokia_3108_ver1() {
    foreach(array(
'Nokia3108/1.0 (04.00) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3108_ver1');
      }
  }



  function test_nokia_3109c_ver1() {
    foreach(array(
'Nokia3109c/2.0 (05.30) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3109c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3109c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3109c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia3109c/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3109c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3109c_ver1');
      }
  }



  function test_nokia_3110c_ver1() {
    foreach(array(
'Nokia3110c',
'Nokia3110c/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3110c/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Naija Baze/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0',
'Nokia3110c/2.0 (05.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (05.01) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Naijabaze/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (J2ME/MIDP; Opera Mini/DOWNLOADING opera by GABBITTO/856; U; en) Presto/2.4.15 UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c UNTRUSTED/1.0',
'Nokia3110c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/352',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.ASHIKH /503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (Windows NT 5.1; U; en) Presto/2.2.15 Version/10.10/UCWEB7.1.0.42/69/351 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/351',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/352',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 9jafbtMINI/9.80 (J2ME/MIDP; Opmin/4.2labsHandler MOD.BY.MAYOr2/870; U; en) 9jafbt.muf.mobi/2.4.15 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;/Chyme Mini/T-Swift TURBO UA/hifi /503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Samoskie 4.2 Handler UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/351',
'Nokia3110c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/352',
'Nokia3110c/2.0 (07.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (07.01) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/5.0 (Configuration/CLDC-1.1 Profile/MIDP-2.0) Minuet/3.1.3 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;/Chyme Mini/T-Swift TURBO UA/hifi /503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;9jascapeMINI/4.2.14432Mod.by.Mayor2/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;ChEATmAsTER MiNI/4.2.13337Mod.by.ChEAT_mAsTER a.k.a LoRD_InFiNiTY/503; U; en)NeWLY ZAIN TwEAK HaS bEEn CrAcKED/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;FIREFOX/4.6.13337Mod.by.GURUSWAP/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Babadinho/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Naijabaze/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by thunder/503; U; en)tundex/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Chijibaba (chiji14.muf.mobi)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.VMAN/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.ni.Bangos./503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Iyke-MEGA/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Skenpo1/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/350 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/351',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/352',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3110c/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3110c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3110c/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Naira Land/4.2.13337Mod.by.kenshin/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Pidgin Eng/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 Samoskie 4.2 Handler UNTRUSTED/1.0',
'Nokia3110c/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3110c_ver1');
      }
  }



  function test_nokia_3120_ver1() {
    foreach(array(
'Nokia3120/1.0 (05.30) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3120/1.0 (05.54) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3120/1.0 (05.91) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3120/1.0 (06.01) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3120/1.0 (06.11) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3120/1.0 (06.31) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3120b/1.0 (05.01) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3120_ver1');
      }
  }



  function test_nokia_3120c_ver1() {
    foreach(array(
'Nokia3120classic',
'Nokia3120classic/2.0 (06.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (06.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (06.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia3120classic/2.0 (06.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/70/352',
'Nokia3120classic/2.0 (07.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.80 (Windows NT 5.1; U; en) Presto/2.2.15 Version/10.10/UCWEB7.1.0.42/69/351 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (07.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/70/352',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/351',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/70/352',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Naijabaze/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.14881.Mod.by.Handler/18.684; U; en) Presto/2.4.15 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.6.4.0.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/69/350 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/70/351',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/70/352',
'Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia3120classic/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (09.46) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (09.46) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia3120classic/2.0 (09.49) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3120classic/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/70/351',
'Nokia3120classic/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3120classic/UC Browser7.0.0.41/70/352',
'Nokia3120classic/2.0 (10.30) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3120classic/2.0 (10.30) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3120classic/2.0 (10.30) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3120c_ver1');
      }
  }



  function test_nokia_3155_ver1() {
    foreach(array(
'Nokia3155',
'Nokia3155/2.0 (Q190V0500.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia3155/2.0 (Q190V0600.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia3155/2.0 (Q190V0700.nep) UP.Browser/6.2.3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3155_ver1');
      }
  }



  function test_nokia_3155i_ver1() {
    foreach(array(
'Nokia3155i/2.0 (Q190V0500.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia3155i/2.0 (Q190V0700.nep) UP.Browser/6.2.3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3155i_ver1');
      }
  }



  function test_nokia_3200_ver1() {
    foreach(array(
'Nokia3200/1.0 () Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3200/1.0 (4.16) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3200/1.0 (4.17) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3200/1.0 (4.18) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3200/1.0 (5.29) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3200/1.0 (5.31) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3200/1.0 (5.34) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3200/1.0 (5.34) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3200_ver1');
      }
  }



  function test_nokia_3220_ver1() {
    foreach(array(
'Nokia3220',
'Nokia3220/2.0 (03.30) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (03.35) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (03.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (04.30) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (04.54) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (04.58) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (04.80) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (04.88) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (04.94) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia3220/2.0 (05.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3220/2.0 (06.22) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3220_ver1');
      }
  }



  function test_nokia_3230_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/3.0505.2; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/3.0505.2; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/3.0505.2; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/3.0515.0ch; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/4.0526.2; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/4.0526.2; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/4.0537.0; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/4.0537.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0604.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0604.0ch; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0614.0; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0614.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0614.0; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0625.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0717.0; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0717.0; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0717.0; 6936) Opera 8.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0717.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3230/5.0717.0ch; 6329) Opera 8.00 [en]',
'Nokia3230',
'Nokia3230/2.0 (3.0505.2) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (3.0505.2) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (3.0505.2) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (3.0505.2) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.0.46/27/350',
'Nokia3230/2.0 (3.0510.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (3.0512.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (3.0515.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (3.0515.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (3.0515.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (3.0517.1) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (3.0517.1) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (4.0526.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (4.0526.2) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (4.0526.2) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (4.0526.2ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (4.0526.2ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (4.0537.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (4.0537.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (4.0537.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (4.0537.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.0.46/27/351',
'Nokia3230/2.0 (4.0537.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0604.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0604.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (5.0604.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (5.0604.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.2.51/27/999',
'Nokia3230/2.0 (5.0604.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0604.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (5.0614.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0614.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (5.0614.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (5.0614.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0614.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0625.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0625.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (5.0625.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (5.0625.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/YAKI 7.2.2.51/27/350',
'Nokia3230/2.0 (5.0625.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0717.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0717.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 0.3919207998020684',
'Nokia3230/2.0 (5.0717.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (5.0717.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia3230/2.0 (5.0717.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.2.2.51/27/352',
'Nokia3230/2.0 (5.0717.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia3230/2.0 (5.0717.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia3230/2.0 (5.0717.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.0.1.34/27/300',
'Nokia3230/SymbianOS/8.0 Series60/2.6'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3230_ver1');
      }
  }



  function test_nokia_3250_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3250/04.14; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 3250/04.60; 9730) Opera 8.65 [en]',
'NOKIA3250',
'NOKIA3250/UC Browser7.0.0.41/28/350',
'NOKIA3250/UC Browser7.0.0.41/28/351',
'NOKIA3250/UC Browser7.0.0.41/28/352',
'Nokia3250',
'Nokia3250/2.0 (03.24) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3250/2.0 (04.14) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3250/2.0 (04.21) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3250/2.0 (04.40) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3250/2.0 (04.60) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3250/2.0 (3.18) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3250/2.0 (3.21) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3250/2.0 (3.23) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3250_ver1');
      }
  }



  function test_nokia_3300_ver1() {
    foreach(array(
'Nokia3300/1.0 (4.05) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3300/1.0 (4.07) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3300/1.0 (4.25) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3300/1.0 (5.20) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3300_ver1');
      }
  }



  function test_nokia_3500_ver1() {
    foreach(array(
'Nokia3500c',
'Nokia3500c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 Nokia3500c UCWEB/6.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'Nokia3500c/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3500c/UC Browser7.0.0.41/70/352',
'Nokia3500c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia3500c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.6.4.0.0',
'Nokia3500c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3500c/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3500c/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3500c/UC Browser7.0.0.41/70/352',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0, Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/350 UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia3500c/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3500c UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3500c/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3500c UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia3500c/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia3500c/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia3500c/2.0 (NTM) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3500_ver1');
      }
  }



  function test_nokia_3510i_ver1() {
    foreach(array(
'Nokia3510i/1.0 (03.40) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3510i/1.0 (03.54) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3510i/1.0 (04.01) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3510i/1.0 (04.42) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3510i/1.0 (04.44) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3510i/1.0 (04.44) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/6.3.1.13.0',
'Nokia3510i/1.0 (05.00) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3510i/1.0 (05.25) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3510i/1.0 (05.30) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3510i/1.0 (05.35) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3510i_ver1');
      }
  }



  function test_nokia_3555_ver1() {
    foreach(array(
'Nokia3555/2.0 (03.38) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3555_ver1');
      }
  }



  function test_nokia_3555b_ver1() {
    foreach(array(
'Nokia3555b/2.0 (05.07) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3555b/2.0 (05.08) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia3555b/2.0 (05.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3555b_ver1');
      }
  }



  function test_nokia_3555c_ver1() {
    foreach(array(
'Nokia3555c/2.0 (03.38) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3555c/2.0 (03.41) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3555c_ver1');
      }
  }



  function test_nokia_3600slide_ver1() {
    foreach(array(
'Nokia3600s/2.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600s/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600s/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600s/2.0 (05.64) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600s/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600slide',
'Nokia3600slide/2.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600slide/2.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3600slide/2.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3600slide/UC Browser7.0.0.41/70/352',
'Nokia3600slide/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600slide/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3600slide/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia3600slide/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia3600slide/UC Browser7.0.0.41/70/352',
'Nokia3600slide/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600slide/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3600slide/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3600slide/2.0 (05.64) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600slide/2.0 (05.64) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3600slide/2.0 (05.64) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3600slide/2.0 (06.26) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600slide/2.0 (06.26) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia3600slide/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3600slide/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia3600slide/2.0 (56.26) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3600slide_ver1');
      }
  }



  function test_nokia_3606_ver1() {
    foreach(array(
'Nokia-3606 UP.Browser/6.3.0.8.c.1.104 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3606_ver1');
      }
  }



  function test_nokia_3610a_ver1() {
    foreach(array(
'Nokia3610a/2.0 (03.53) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3610a/2.0 (03.53) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia3610a/2.0 (03.56) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3610a_ver1');
      }
  }



  function test_nokia_3650_ver1() {
    foreach(array(
'Mozilla/4.1 (compatible; MSIE 5.0; Symbian OS; Nokia 3650;452) Opera 6.20  [en]',
'Nokia3650',
'Nokia3650/1.0 (4.13) SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3650/1.0 (4.17) SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3650/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3650_ver1');
      }
  }



  function test_nokia_3660_ver1() {
    foreach(array(
'Nokia3660',
'Nokia3660/1.0 (4.57) SymbianOS/6.1 Series60/0.9 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia3660/1.0 (5.08) SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3660_ver1');
      }
  }



  function test_nokia_3710fold_ver1() {
    foreach(array(
'Nokia3710fold',
'Nokia3710fold/5.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420  UP.Link/6.3.0.0.0',
'Nokia3710fold/5.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia3710fold/5.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.3.1.16.0',
'Nokia3710fold/5.0 (04.35) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3710fold_ver1');
      }
  }



  function test_nokia_3711_fold_ver1() {
    foreach(array(
'Nokia3711fold/5.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia3711fold/5.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3711_fold_ver1');
      }
  }



  function test_nokia_3720c_ver1() {
    foreach(array(
'Nokia3720c/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia3720c/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia3720c/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia3720c/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia3720c/2.0 (10.16) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia3720c/2.0 (10.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia3720c/2.0 (10.16) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_3720c_ver1');
      }
  }



  function test_nokia_5000_ver1() {
    foreach(array(
'Nokia5000',
'Nokia5000/1.0 (03.50) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000/1.0 (04.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000/1.0 (04.88) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5000_ver1');
      }
  }



  function test_nokia_5000d_ver1() {
    foreach(array(
'Nokia5000d-2',
'Nokia5000d-2/1.0 (03.50) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2/1.0 (03.50) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5000d-2/1.0 (03.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5000d-2/1.0 (03.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5000d-2/1.0 (03.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia5000d-2/1.0 (03.54) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2/1.0 (04.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2/1.0 (04.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5000d-2/1.0 (04.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia5000d-2/1.0 (04.89) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2/1.0 (04.89) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5000d-2/1.0 (04.89) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia5000d-2/1.0 (05.27) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2/1.0 (05.45) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2/1.0 (06.31) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2/1.0 (06.31) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5000d-2/1.0 (06.31) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5000d-2/1.0 (06.32) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2/1.0 (06.33) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2b/1.0 (03.54) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2b/1.0 (04.89) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2b/1.0 (05.27) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5000d-2b/1.0 (05.27) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5000d-2b/1.0 (06.31) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5000d_ver1');
      }
  }



  function test_nokia_5070_ver1() {
    foreach(array(
'Nokia5070',
'Nokia5070/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5070/2.0 (04.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5070/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5070/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5070/2.0 (04.23) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5070/2.0 (04.23) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5070_ver1');
      }
  }



  function test_nokia_5070b_ver1() {
    foreach(array(
'Nokia5070b/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5070b/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5070b/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5070b_ver1');
      }
  }



  function test_nokia_5100_ver1() {
    foreach(array(
'Nokia5100/1.0 (3.02) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia5100/1.0 (3.05) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia5100/1.0 (4.05) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia5100/1.0 (5.20) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5100_ver1');
      }
  }



  function test_nokia_5130_xpressmusic_ver1() {
    foreach(array(
'Nokia5130/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6/UCWEB7.2.2.51/69/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (05.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 9jascape/9.60 (J2ME/MIDP;9jascapeMINI/4.2.14432 MOD BY MAyor2/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.68) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/351',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/400',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.93) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.1333Mod.by.IykeMEGA/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Remod.by.(A)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (06.94) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.90) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725/UCWEB7.0.0.33/69/300 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Cheat_Master Mini/4.2.13337Mod.by.Cheat_Master (proudlylord.muf.mobi)/503; U; en)For Any Help Call 08133080753/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Cheat_Master(Dedicated to Ifebabe) (naijacheatmaster.muf.mobi)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Chijibaba (chiji14.muf.mobi)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2windowMod.ni.Bangoss/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UCWEB7.2.2.51/69/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/351',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Remod.by.(A)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5130c-2/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5130c-2/2.0 (07.95) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (07.96) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5130c-2/2.0 (ab7.94) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5130_xpressmusic_ver1');
      }
  }



  function test_nokia_5140_ver1() {
    foreach(array(
'Nokia5140/2.0 (3.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5140/2.0 (3.13) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5140/2.0 (3.15) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5140/2.0 (3.17) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5140i/2.0 (03.75) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5140_ver1');
      }
  }



  function test_nokia_5140i_ver1() {
    foreach(array(
'Nokia5140i/2.0 (03.34) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5140i/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5140i/2.0 (03.80) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5140i/2.0 (03.85) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5140i/2.0 (03.91) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5140i_ver1');
      }
  }



  function test_nokia_5200_ver1() {
    foreach(array(
'Nokia5200',
'Nokia5200/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5200/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'Nokia5200/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5200/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia5200/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia5200/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5200/UC Browser7.0.0.41/69/352',
'Nokia5200/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia5200/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Nokia5200/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5200/2.0 (04.72) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (04.72) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5200/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5200/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.6.4.0.0',
'Nokia5200/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5200/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5200/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia5200/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia5200/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5200/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5200 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5200/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia5200/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5200/UC Browser7.0.0.41/70/351',
'Nokia5200/2.0 (06.03) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (06.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (06.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5200/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5200/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5200/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5200/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia5200/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5200/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5200/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5200_ver1');
      }
  }



  function test_nokia_5220_ver1() {
    foreach(array(
'Nokia5220/2.0 (04.00) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic',
'Nokia5220XpressMusic/2.0 (04.00) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic/2.0 (04.00) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (04.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5220xpressmusic/UC Browser7.0.0.41/70/352',
'Nokia5220XpressMusic/2.0 (04.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic/2.0 (04.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5220XpressMusic/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (04.92) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5220XpressMusic/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5220XpressMusic/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5220xpressmusic/UC Browser7.0.0.41/70/351',
'Nokia5220XpressMusic/2.0 (05.63) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic/2.0 (05.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (05.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5220XpressMusic/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5220XpressMusic/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5220xpressmusic/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5220XpressMusic/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5220xpressmusic/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5220XpressMusic/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5220xpressmusic/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5220_ver1');
      }
  }



  function test_nokia_5230_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5230/20.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5230/20.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5230/20.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5230/20.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5230/20.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230-c/10.2.078; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230-c/11.2.080; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230-c/12.2.082; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.0.067; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.0.067; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.0.067; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.0.067; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.20.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.0.071; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.0.071; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.0.071; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.0.071; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/10.4.071; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/11.0.079; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/11.0.079; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/12.0.089; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/12.0.089; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/12.0.089; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5230/12.0.089; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5230_ver1');
      }
  }



  function test_nokia_5233_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5233/21.1.004; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.5.2 3gpp-gba',
'Nokia5233',
'Nokia5233/12.1.089 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia5233/12.1.089 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413',
'Nokia5233/12.1.089 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413, Nokia5233/12.1.089 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413',
'Nokia5233/12.1.089 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413, Nokia5233/12.1.089 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413, Nokia5233/12.1.089 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413, Nokia5233/12.1.089 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413',
'Nokia5233/12.1.092 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia5233/12.1.092 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413',
'Nokia5233/12.1.092 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413, Nokia5233/12.1.092 (SymbianOS/9.4; U; Series60/5.0; Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML,like Gecko) Safari/413',
'Nokia5233/UC Browser7.0.0.41/50/351',
'Nokia5233/UC Browser7.0.0.41/50/352',
'Nokia5233/UC Browser7.0.0.41/50/401',
'Nokia5233/UCWEB7.2.2.51/50/999'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5233_ver1');
      }
  }



  function test_nokia_5235_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5235/12.6.092; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5235_ver1');
      }
  }



  function test_nokia_5300_ver1() {
    foreach(array(
'Nokia5300',
'Nokia5300/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Nokia5300/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia5300/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5300/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Nokia5300/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Nokia5300/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5300/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (04.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Nokia5300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (04.72) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5300/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5300/UC Browser7.0.0.41/70/352',
'Nokia5300/2.0 (05.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (05.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5300/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5300/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia5300/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5300/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5300/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (05.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5300/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera UNTRUSTED/1.0',
'Nokia5300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5300/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5300/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Naijabaze/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5300/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5300/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5300/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.6.4.0.0',
'Nokia5300/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5300/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5300/2.0 (07.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia5300/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5300_ver1');
      }
  }



  function test_nokia_5310_xpressmusic_ver1() {
    foreach(array(
'Nokia5310/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic',
'Nokia5310XpressMusic/2.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5310XpressMusic/2.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/352',
'Nokia5310XpressMusic/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5310XpressMusic/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia5310XpressMusic/2.0 (03.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/352',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/351',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/352',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UCWEB7.0.0.33/70/800',
'Nokia5310XpressMusic/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1,gzip(gfe) (via translate.google.com)',
'Nokia5310XpressMusic/2.0 (05.91) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (05.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/351',
'Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (08.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (08.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/351',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/352',
'Nokia5310XpressMusic/2.0 (08.32) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0, Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (09.42) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/352',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 OPENWAVE/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/351',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5310xpressmusic/UC Browser7.0.0.41/70/352',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia5310XpressMusic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (58.58) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310XpressMusic/2.0 (59.42) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5310_CMCC/2.0 (07.01) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5310_xpressmusic_ver1');
      }
  }



  function test_nokia_5320_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/03.08; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/03.08; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/03.26; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/03.26; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/03.26; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/04.12; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.6.4.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/05.16; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5320d-1/06.103; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIA5320',
'NOKIA5320/UC Browser7.0.0.41/28/350',
'NOKIA5320/UC Browser7.0.0.41/28/351',
'NOKIA5320/UC Browser7.0.0.41/28/352',
'NOKIA5320/UCWEB7.2.2.51/28/351',
'NOKIA5320/UCWEB7.2.2.51/28/999',
'Nokia5320/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5320_ver1');
      }
  }



  function test_nokia_5330_ver1() {
    foreach(array(
'Nokia5330-1d/5.0 (06.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia5330-1d/5.0 (06.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia5330-1d/5.0 (06.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5330-1d/5.0 (06.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5330-1d/5.0 (06.85) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5330_ver1');
      }
  }



  function test_nokia_5500_ver1() {
    foreach(array(
'NOKIA5500',
'NOKIA5500/UC Browser7.0.0.41/28/351',
'NOKIA5500/UC Browser7.0.0.41/28/352',
'Nokia5500d',
'Nokia5500d/2.0 (03.14) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5500d/2.0 (03.18) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5500d/2.0 (03.55) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5500d/2.0 (04.03) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5500d/2.0 (04.40) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia5500d/2.0 (04.60) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5500_ver1');
      }
  }



  function test_nokia_5530_xpressmusic_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5530c-2/30.0.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5530c-2/30.0.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3,gzip(gfe) (via translate.google.com)',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/10.0.049; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/10.0.049; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/10.0.050; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/10.0.050; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/11.0.053; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/11.0.054; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/11.0.054; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/11.0.054; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/11.0.054; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/20.0.080; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/20.0.080; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5530c-2/20.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5530_xpressmusic_ver1');
      }
  }



  function test_nokia_5610d_ver1() {
    foreach(array(
'Nokia5610 XpressMusic/2.0 (04.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5610 XpressMusic/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610 XpressMusic/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia5610 XpressMusic/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia5610 XpressMusic/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia5610 XpressMusic/2.0 (04.88) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610 XpressMusic/2.0 (04.88) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5610 XpressMusic/2.0 (05.92) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610 XpressMusic/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610 XpressMusic/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia5610 XpressMusic/2.0 (07.12) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610 XpressMusic/2.0 (08.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610 XpressMusic/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610 XpressMusic/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610 XpressMusic/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5610d-1',
'Nokia5610d-1/2.0 (04.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610d-1/2.0 (04.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (04.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610d-1/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610d-1/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5610d-1/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610d-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (07.12) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610d-1/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610d-1/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5610d-1/UC Browser7.0.0.41/70/352',
'Nokia5610d-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610d-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5610d-1 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia5610d-1/UC Browser7.0.0.41/70/352',
'Nokia5610d-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5610d-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia5610d-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia5610d-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5610d_ver1');
      }
  }



  function test_nokia_5630expressmusic_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/011.018; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/011.020; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/011.020; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/011.020; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/011.020; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.43.246)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/012.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/012.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/012.020; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5630d-1/013.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5630expressmusic_ver1');
      }
  }



  function test_nokia_5700_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia5700/3.27; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia5700/3.29; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia5700/3.83.1; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia5700/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia5700/5.11.1; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia5700/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia5700/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIA5700',
'NOKIA5700/UC Browser7.0.0.41/28/350',
'NOKIA5700/UC Browser7.0.0.41/28/351',
'NOKIA5700/UC Browser7.0.0.41/28/352',
'NOKIA5700/UCWEB7.2.0.46/28/800',
'NOKIA5700/UCWEB7.2.1.50/28/999',
'NOKIA5700/UCWEB7.2.2.51/28/999',
'Nokia5700',
'Nokia5700/3.83.1 (SymbianOS/9.2; U; Series60/3.1 ; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) Mozilla/5.0 AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5700_ver1');
      }
  }



  function test_nokia_5730expressmusic_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia5730s-1/200.12.87; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia5730s-1/200.12.87; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia5730s-1/200.12.87; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1(REAL IP: 84.235.73.18)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia5730s-1/200.12.87; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1(REAL IP: 84.235.73.19)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia5730s-1/200.12.87; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1(REAL IP: 84.235.73.20)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia5730s-1/200.12.87; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1(REAL IP: 84.235.73.21)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5730s-1/100.48.122; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5730s-1/100.48.122; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia5730s-1/101.48.128; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5730expressmusic_ver1');
      }
  }



  function test_nokia_5800d_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5800d-1/50.0.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5800d-1/50.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5800d-1/50.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5800d-1/50.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 Nokia5800d-1/50.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/10.0.010; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/10.0.010; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/10.4.016; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/10.4.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/11.0.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/11.0.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/11.0.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.51.81.206)',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/11.0.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/11.0.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/20.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/20.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/20.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/20.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/20.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/30.0.011; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/30.0.011; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/30.0.011; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/30.0.011; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/31.0.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/31.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/31.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/31.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/31.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/31.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/31.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/31.0.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.06.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/40.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/40.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/40.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/40.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/40.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/40.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.6.4.0.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/52.50.2008.24; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1b/20.2.014; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1b/21.2.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1b/21.2.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1b/30.2.011; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1b/31.2.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1b/31.2.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1b/31.2.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1b/40.2.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia5800d-1b/21.2.025 Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'Nokia5800d-1b/31.2.101 Series60/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_5800d_ver1');
      }
  }



  function test_nokia_6010_ver1() {
    foreach(array(
'Nokia6010/1.0 (8.18) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6010_ver1');
      }
  }



  function test_nokia_6020_ver1() {
    foreach(array(
'Nokia6020',
'Nokia6020/2.0 (03.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6020/2.0 (03.53) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6020/2.0 (03.92) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6020/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6020/2.0 (04.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6020/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6020/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia6020/2.0 (05.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6020/2.0 (05.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6020/2.0 (o05w07_06w) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6020_ver1');
      }
  }



  function test_nokia_6021_ver1() {
    foreach(array(
'Nokia6021/2.0 (03.83) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6021/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6021/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6021/2.0 (04.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6021/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6021/2.0 (05.22) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6021_ver1');
      }
  }



  function test_nokia_6030_ver1() {
    foreach(array(
'Nokia6030',
'Nokia6030/2.0 (5.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (5.11) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6030/2.0 (5.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (5.30) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (5.40) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (5.40) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6030/2.0 (y3.31) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (y3.32) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (y3.41) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (y3.43) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (y3.44) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030/2.0 (y4.10) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6030_ver1');
      }
  }



  function test_nokia_6030b_ver1() {
    foreach(array(
'Nokia6030b/2.0 (5.24) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030b/2.0 (5.25) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030b/2.0 (5.25) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia6030b/2.0 (5.27) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030b/2.0 (m3.31) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6030b/2.0 (m3.35) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6030b_ver1');
      }
  }



  function test_nokia_6060_ver1() {
    foreach(array(
'Nokia6060/2.0 (3.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6060/2.0 (3.03) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6060/2.0 (4.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6060/2.0 (4.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6060/2.0 (5.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6060/2.0 (k3.62) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6060v/2.0 (3.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6060v/2.0 (3.03) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6060_ver1');
      }
  }



  function test_nokia_6061_ver1() {
    foreach(array(
'Nokia6061/2.0 (3.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia6061/2.0 (4.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6061/2.0 (4.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6061/2.0 (5.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6061/2.0 (k3.71) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6061/2.0 (k3.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6061_ver1');
      }
  }



  function test_nokia_6070_ver1() {
    foreach(array(
'Nokia6070',
'Nokia6070/2.0 (03.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6070/2.0 (03.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6070/2.0 (03.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6070/2.0 (03.40) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6070/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6070/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6070/2.0 (04.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6070/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6070/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6070/2.0 (04.23) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6070/2.0 (04.23_PRE) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6070_ver1');
      }
  }



  function test_nokia_6080_ver1() {
    foreach(array(
'Nokia6080',
'Nokia6080/2.0 (03.40) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6080/2.0 (03.40) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6080/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6080/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6080/2.0 (04.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6080/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6080/2.0 (04.23) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6080/2.0 (04.23_PRE) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6080b/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6080_ver1');
      }
  }



  function test_nokia_6085_ver1() {
    foreach(array(
'Nokia6085',
'Nokia6085/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6085/2.0 (03.71) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (03.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6085/2.0 (03.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6085/2.0 (04.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (04.11) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia6085/2.0 (04.11) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'Nokia6085/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6085/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Nokia6085/2.0 (04.22) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6085/2.0 (04.26) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (04.26) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6085/2.0 (04.26) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Nokia6085/2.0 (04.26) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6085/2.0 (04.29) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (04.30) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (04.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6085/2.0 (04.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'Nokia6085/2.0 (05.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (05.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Chyme Mini/Mozilla 5.20_Windows NT/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.9jaguy (mercyland.muf.mobi)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6085/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6085/UC Browser7.0.0.41/70/352',
'Nokia6085/2.0 (06.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6085/2.0 (06.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6085/2.0 (06.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6085/2.0 (06.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6085/2.0 (06.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6085/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6085_ver1');
      }
  }



  function test_nokia_6086_ver1() {
    foreach(array(
'Nokia6086',
'Nokia6086/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6086/2.0 (03.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6086/2.0 (05.02) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia6086/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6086/2.0 (05.03) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia6086/2.0 (06.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6086/2.0 (13.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6086/2.0 (15.04) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6086/2.0 (16.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6086/2.0 (26.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6086/2.0 (26.01) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6086_ver1');
      }
  }



  function test_nokia_6088_ver1() {
    foreach(array(
'Nokia6088/2.0 ACS.Browser/3.2(GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6088_ver1');
      }
  }



  function test_nokia_6100_ver1() {
    foreach(array(
'Nokia6100/1.0 (03.22) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (04.01) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (04.03) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (04.70) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (05.16) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (05.51) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (05.80) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (06.01) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (06.20) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6100/1.0 (06.31) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6100_ver1');
      }
  }



  function test_nokia_6101_ver1() {
    foreach(array(
'Nokia6101/2.0 (03.34) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (03.35) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (03.35) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6101/2.0 (03.38) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (03.38) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6101/2.0 (03.39) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6101/2.0 (04.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (04.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (04.62) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6101/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6101/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6101/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6101/2.0 (05.22) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6101_ver1');
      }
  }



  function test_nokia_6102_ver1() {
    foreach(array(
'Nokia6102/2.0 (03.38) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6102/2.0 (04.50) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6102_ver1');
      }
  }



  function test_nokia_6102i_ver1() {
    foreach(array(
'Nokia6102i/2.0 (04.63) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6102i/2.0 (04.68) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6102i/2.0 (04.69) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6102i_ver1');
      }
  }



  function test_nokia_6103_ver1() {
    foreach(array(
'Nokia6103/2.0 (04.61) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6103/2.0 (04.62) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6103/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6103/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6103/2.0 (04.92) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6103/2.0 (04.93) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6103/2.0 (05.22) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6103_ver1');
      }
  }



  function test_nokia_6108_ver1() {
    foreach(array(
'Nokia6108/1.0 (03.20) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6108/1.0 (04.02) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6108/1.0 (05.30) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6108_ver1');
      }
  }



  function test_nokia_6110_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/3.51; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/3.58; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/3.58; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/3.58; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/4.22; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/4.22; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/4.22; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/4.22; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/4.22; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/4.22; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/4.22; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6110Navigator/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'NOKIA6110',
'NOKIA6110/UC Browser7.0.0.41/28/351',
'NOKIA6110/UC Browser7.0.0.41/28/352',
'Nokia6110Navigator'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6110_ver1');
      }
  }



  function test_nokia_6111_ver1() {
    foreach(array(
'Nokia6111',
'Nokia6111/2.0 (03.41) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6111/2.0 (03.45) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6111/2.0 (03.58) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6111/2.0 (03.58) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6111/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6111/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6111/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6111/2.0 (03.77) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6111/2.0 (03.82) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6111/2.0 (03.85) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6111_ver1');
      }
  }



  function test_nokia_6120_ver1() {
    foreach(array(
'Nokia6120'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6120_ver1');
      }
  }



  function test_nokia_6120c_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/.047; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/0.34.37; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/03.27; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/03.83; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/03.83; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/03.83; 9730) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/04.21; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/04.21; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/04.21; 9730) Opera 8.65 [ru]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/04.22; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/05.11; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/06.01; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/06.01; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/06.51; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/07.10; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/07.10; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/07.36.0.0; 9730) Opera 8.65 [en]',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.70; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.70; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.146)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.147)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.148)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.149)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.150)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/3.83; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML; like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.146)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.147)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.148)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.149)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.150)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.154.35)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.154.38)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.146)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.148)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 84.235.75.19)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 84.235.75.20)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.146)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.147)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.148)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.149)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.150)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.51; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.51; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.51; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.147)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.51; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.149)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.51; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.150)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/7.10; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/7.10; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/7.10; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 80.76.164.131)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/7.20; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIA6120c',
'NOKIA6120c/UC Browser7.0.0.41/28/350',
'NOKIA6120c/UC Browser7.0.0.41/28/351',
'NOKIA6120c/UC Browser7.0.0.41/28/352',
'NOKIA6120c/UC Browser7.2.2.51/28/352',
'Nokia6120c',
'Nokia6120c/4.21 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) Mozilla/5.0 AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia6120c/6.01 (SymbianOS/9.2; U; Series60/3.1 Nokia6120c/6.01; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) Mozilla/5.0 AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6120c_ver1');
      }
  }



  function test_nokia_6121_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6121c/4.09; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6121c/5.11; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6121_ver1');
      }
  }



  function test_nokia_6124c_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6124c/4.34; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6124c/4.34; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6124c/4.34; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6124c/4.40; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6124c/4.61; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6124c/5.22; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6124c_ver1');
      }
  }



  function test_nokia_6125_ver1() {
    foreach(array(
'Nokia6125/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6125/2.0 (03.71) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6125/2.0 (03.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6125/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6125/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6125/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6125/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6125_ver1');
      }
  }



  function test_nokia_6126_ver1() {
    foreach(array(
'Nokia6126/2.0 (04.24) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6126/2.0 (04.28) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6126/2.0 (05.61) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6126/2.0 (05.61) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6126_ver1');
      }
  }



  function test_nokia_6131_ver1() {
    foreach(array(
'Nokia6131',
'Nokia6131/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6131/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia6131/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6131/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6131/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6131/2.0 (03.72) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6131/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6131/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6131/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6131/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6131/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6131/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6131/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6131/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6131/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6131_ver1');
      }
  }



  function test_nokia_6131nfc_ver1() {
    foreach(array(
'Nokia6131NFC/2.0 (05.12) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6131nfc_ver1');
      }
  }



  function test_nokia_6133_ver1() {
    foreach(array(
'Nokia6133/2.0 (05.23) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6133/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6133/2.0 (05.61) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6133/2.0 (05.61) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6133/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6133/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6133_ver1');
      }
  }



  function test_nokia_6136_ver1() {
    foreach(array(
'Nokia6136/2.0 (03.71.2) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6136/2.0 (03.85) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6136/2.0 (04.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6136/2.0 (04.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6136/2.0 (14.01) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6136_ver1');
      }
  }



  function test_nokia_6151_ver1() {
    foreach(array(
'Nokia6151',
'Nokia6151/2.0 (03.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6151/2.0 (03.56) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6151/2.0 (03.56) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0,Nokia6151/2.0 (03.56) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6151/2.0 (03.56) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6151/2.0 (03.91) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6151/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6151/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6151/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Nokia6151/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Pidgin Eng/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0',
'Nokia6151/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6151/2.0 (04.11) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6151/2.0 (04.11) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6151_ver1');
      }
  }



  function test_nokia_6165i_ver1() {
    foreach(array(
'Nokia6165i/2.0 (AZ190V0200.nep) UP.Browser/6.2.3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6165i_ver1');
      }
  }



  function test_nokia_6170_ver1() {
    foreach(array(
'Nokia6170/2.0 (03.211) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6170/2.0 (03.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6170/2.0 (03.24) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6170/2.0 (03.25) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6170_ver1');
      }
  }



  function test_nokia_6200_ver1() {
    foreach(array(
'Nokia6200/1.0 (4.22) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6200_ver1');
      }
  }



  function test_nokia_6208c_ver1() {
    foreach(array(
'Nokia6208c',
'Nokia6208c/2.0 (04.50) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6208c/2.0 (04.51) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6208c/2.0 (04.52) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6208c/2.0 (04.52) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6208c_ver1');
      }
  }



  function test_nokia_6210_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.08; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.08; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.08; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.09; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.09; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.25; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.25; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.25; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.41; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/03.41; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 84.235.75.19)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 84.235.75.20)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/05.16; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/05.16; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/05.304; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/05.401; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6210Navigator/05.501; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia6210'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6210_ver1');
      }
  }



  function test_nokia_6212_classic_ver1() {
    foreach(array(
'Nokia6212 classic/2.0 (05.16) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6212_classic_ver1');
      }
  }



  function test_nokia_6220_ver1() {
    foreach(array(
'Nokia6220/2.0 (5.15) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6220/2.0 (6.29) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6220/2.0 (6.34) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6220/2.0 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6220_ver1');
      }
  }



  function test_nokia_6220c_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6220c-1/03.06; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6220c-1/03.23; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6220c-1/03.46; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6220c-1/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6220c-1/04.13; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6220c-1/05.15; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6220c-1/05.15; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6220c-1/06.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6220c_ver1');
      }
  }



  function test_nokia_6230_ver1() {
    foreach(array(
'Nokia6230',
'Nokia6230/2.0 (03.14) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (03.14) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6230/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1 Nokia6230/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6230/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (03.17) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (04.28) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (04.43) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (04.44) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (05.24) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (05.24) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0, Nokia6230/2.0 (05.24) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6230/2.0 (05.24) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6230/2.0 (05.24) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6230/2.0 (05.26) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (05.35) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (05.35) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6230/2.0 (05.35) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6230/2.0 (05.40) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (05.40) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Rap Nation/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0, Nokia6230/2.0 (05.40) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6230/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6230/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6230/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6230_ver1');
      }
  }



  function test_nokia_6230i_ver1() {
    foreach(array(
'Nokia6230i',
'Nokia6230i/2.0 (03.23) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.25) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.30) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.40) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.46) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.62) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6230i/2.0 (03.72) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.80) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.88) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.89) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6230i/2.0 (03.89) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6230i_ver1');
      }
  }



  function test_nokia_6233_ver1() {
    foreach(array(
'Nokia6233',
'Nokia6233/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6233/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6233/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6233/2.0 (04.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6233/2.0 (04.52) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6233/2.0 (04.52) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6233/2.0 (04.54) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6233/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6233/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6233/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6233/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6233/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6233/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6233/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6233/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6233/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6233/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, nokia6233/UC Browser7.0.0.41/69/352',
'Nokia6233/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Ghnet/               ;Ghnet3rs mini/ . .     Mod.by.Ghnethood/   ; U;            . .',
'Nokia6233/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6233/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, nokia6233/UC Browser7.0.0.41/70/350',
'Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337ModByCHRONICLE/503; U; en)Presto/2.2.0',
'Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6233/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6233_ver1');
      }
  }



  function test_nokia_6234_ver1() {
    foreach(array(
'Nokia6234/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6234/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6234/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6234/2.0 (04.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6234/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6234/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6234/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6234/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6234/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0, nokia6234/UC Browser7.0.0.41/69/352',
'Nokia6234/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6234/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6234/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6234/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6234/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6234/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6234/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6234/2.0 (05.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6234/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6234/2.0 (05.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6234_ver1');
      }
  }



  function test_nokia_6235_ver1() {
    foreach(array(
'Nokia6235',
'Nokia6235/1.0 (S100V0200.nep) UP.Browser/6.2.3.2.h.1.107 (GUI) MMP/2.0',
'Nokia6235/1.0 (S100V0800.nep) UP.Browser/6.2.3.2 MMP/2.0',
'Nokia6235/1.0 (S190V0200.nep) UP.Browser/6.2.3.2 MMP/2.0',
'Nokia6235/1.0 (S190V0300.nep) UP.Browser/6.2.3.2 MMP/2.0',
'Nokia6235/1.0 (S190V0500.nep) UP.Browser/6.2.3.2 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6235_ver1');
      }
  }



  function test_nokia_6235i_ver1() {
    foreach(array(
'Nokia6235i/1.0 (S100V1800.nep) UP.Browser/6.2.3.2 MMP/2.0',
'Nokia6235i/1.0 (S190V0200.nep) UP.Browser/6.2.3.2 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6235i_ver1');
      }
  }



  function test_nokia_6236i_ver1() {
    foreach(array(
'NOKIA/(2006.04.17)SW1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 176x220 64MIDI NOKIA/(2006.04.17)SW1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 176x220 64MIDI'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6236i_ver1');
      }
  }



  function test_nokia_6255_ver1() {
    foreach(array(
'Nokia6255/1.0 (N190V0700.nep) UP.Browser/6.2.3.2.h.1.104 (GUI) MMP/2.0',
'Nokia6255/1.0 (N190V0800.nep) UP.Browser/6.2.3.2.h.1.104 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6255_ver1');
      }
  }



  function test_nokia_6255i_ver1() {
    foreach(array(
'Nokia6255i/1.0 (N100V2300.nep) UP.Browser/6.2.3.2.s.1.100 (GUI) MMP/2.0',
'Nokia6255i/1.0 (N190V0700.nep) UP.Browser/6.2.3.2.h.1.104 (GUI) MMP/2.0',
'Nokia6255i/1.0 (N190V0800.nep) UP.Browser/6.2.3.2.h.1.104 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6255i_ver1');
      }
  }



  function test_nokia_6260_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6260/5.0536.0; 9399) Opera 8.65 [en]',
'Nokia6260',
'Nokia6260/2.0 (3.0436.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6260/2.0 (3.0436.5ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6260/2.0 (3.0448.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6260/2.0 (3.0448.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.1.13.0',
'Nokia6260/2.0 (3.0452.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6260/2.0 (3.0452.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia6260/2.0 (3.0508.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6260/2.0 (3.0515.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6260/2.0 (5.0536.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6260/2.0 (5.0536.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.2.51/27/352',
'Nokia6260/2.0 (5.0536.1ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6260_ver1');
      }
  }



  function test_nokia_6263_ver1() {
    foreach(array(
'Nokia6263/2.0 (04.44) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6263/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6263/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6263/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6263_ver1');
      }
  }



  function test_nokia_6265_ver1() {
    foreach(array(
'Nokia6265/2.0 (HL100V0400.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6265/2.0 (HL100V0401.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6265/2.0 (HL100V1200.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6265/2.0 (HL190V0600.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6265/2.0 (HL190V0700.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6265/2.0 (HL190V0800.nep) UP.Browser/6.2.3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6265_ver1');
      }
  }



  function test_nokia_6265i_ver1() {
    foreach(array(
'Nokia6265i/2.0 (HL100V1000.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6265i/2.0 (HL100V1200.nep) UP.Browser/6.2.3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6265i_ver1');
      }
  }



  function test_nokia_6267_ver1() {
    foreach(array(
'Nokia6267/2.0 (03.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6267/2.0 (03.25) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6267/2.0 (03.25) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6267/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6267_ver1');
      }
  }



  function test_nokia_6270_ver1() {
    foreach(array(
'Nokia6270',
'Nokia6270/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6270/2.0 (03.53) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6270/2.0 (03.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0, Nokia6270/2.0 (03.53) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6270/2.0 (03.65) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6270/2.0 (03.66) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6270/2.0 (03.69) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6270/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6270/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6270/2.0 (03.85) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6270/2.0 (03.85) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0, Nokia6270/2.0 (03.85) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6270/2.0 (03.85) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6270/2.0 (03.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6270/2.0 (03.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0, Nokia6270/2.0 (03.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6270/2.0 (03.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6270/2.0 (03.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6270/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6270_ver1');
      }
  }



  function test_nokia_6275_ver1() {
    foreach(array(
'Nokia6275',
'Nokia6275/2.0 (BL100V0400.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6275/2.0 (BL100V0800.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6275/2.0 (BL190V0400.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6275/2.0 (BL290V0100.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6275/2.0 (BL290V0100.nep) UP.Browser/6.2.3.8 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6275_ver1');
      }
  }



  function test_nokia_6275i_ver1() {
    foreach(array(
'Nokia6275i',
'Nokia6275i/2.0 (BL190V0200.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6275i/2.0 (BL190V0200.nep) UP.Browser/6.2.3.8 UNTRUSTED/1.0',
'Nokia6275i/2.0 (BL200V0200.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6275i/2.0 (BL290V0100.nep) UP.Browser/6.2.3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6275i_ver1');
      }
  }



  function test_nokia_6276_ver1() {
    foreach(array(
'Nokia6276/2.0 (BL200V0300.nep) UP.Browser/6.2.3.8 MMP/2.0',
'Nokia6276/2.0 (BL200V0400.nep) UP.Browser/6.2.3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6276_ver1');
      }
  }



  function test_nokia_6280_ver1() {
    foreach(array(
'Nokia6280',
'Nokia6280/2.0 (03.36) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (03.40) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (03.40) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (03.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0, Nokia6280/2.0 (03.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.65) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (03.65) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0, Nokia6280/2.0 (03.65) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.65) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0, Nokia6280/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6280/UC Browser7.0.0.41/70/352',
'Nokia6280/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0, Nokia6280/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.15992Mod.by.Mayor-2/503; U; en)Presto/2.2.0, Nokia6280/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (03.81) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6280/2.0 (03.82) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (03.82) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (05.53) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (05.92) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (05.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0;Nokia6280/2.0 (05.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (05.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (06.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.1333Mod.by.IykeMEGA/503; U; en)Presto/2.2.0',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Rap Nation/4.2.13337Mod.by.9jabaze/503; U; en)Presto/2.2.0',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,nokia6280',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'Nokia6280/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6280_ver1');
      }
  }



  function test_nokia_6288_ver1() {
    foreach(array(
'Nokia6288',
'Nokia6288/2.0 (03.61) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6288/2.0 (03.61) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0,Nokia6288/2.0 (03.61) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6288/2.0 (04.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6288/2.0 (05.92) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6288/2.0 (05.92) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6288/2.0 (05.94) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6288/2.0 (05.96) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6288/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6288/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6288/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6288/2.0 (06.10) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6288/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6288/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6288/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6288/2.0 (06.43) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0;Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6288_ver1');
      }
  }



  function test_nokia_6290_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6290/3.03; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6290/3.04; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 Nokia6290/4.21; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia6290'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6290_ver1');
      }
  }



  function test_nokia_6300_ver1() {
    foreach(array(
'Nokia6300',
'Nokia6300/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6300/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352',
'Nokia6300/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'Nokia6300/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6300/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia6300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'Nokia6300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.14.0',
'Nokia6300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia6300/2.0 (04.71) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.06.3.1.16.0',
'Nokia6300/2.0 (04.72) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Nokia6300 UCWEB/6.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352',
'Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia6300/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352',
'Nokia6300/2.0 (05.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;FIREFOX/4.6.13337Mod.by.GURUSWAP/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352',
'Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.01) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300 UNTRUSTED/1.0',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/351',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (06.60) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0 Novarra-Vision/8.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/351',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (07.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UC Browser7.0.0.41/70/352 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1 nokia6300/UCWEB7.2.0.46/69/351 UNTRUSTED/1.0',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (07.21) Profile/MIDP-2.0 Configuration/CLDC-1.1,gzip(gfe) (via translate.google.com)',
'Nokia6300/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6300/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6300/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia6300/2.0 (07.30) Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6300/2.0 (57.20) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6300_ver1');
      }
  }



  function test_nokia_6300i_ver1() {
    foreach(array(
'Nokia6300i',
'Nokia6300i/2.0 (03.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6300i/2.0 (04.93) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6300i/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6300i_ver1');
      }
  }



  function test_nokia_6301_ver1() {
    foreach(array(
'Nokia6301/2.0 (04.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6301/2.0 (04.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6301/2.0 (04.62) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6301/2.0 (05.93) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6301/2.0 (08.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6301/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6301_ver1');
      }
  }



  function test_nokia_6303c_ver1() {
    foreach(array(
'Nokia6303classic',
'Nokia6303classic/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6303classic/2.0 (08.55) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303classic/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6303classic/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6303classic/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6303classic/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303classic/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic',
'Nokia6303classic/2.0 (08.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420  UP.Link/6.3.0.0.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+, Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+, Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+, Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+, Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+, Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+, Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+, Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+, Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Netscape mini/4.2.13337Mod.by.Babadinho/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Chijibaba (chiji14.muf.mobi)/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.15992Mod.by.Mayor-2/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/70/351',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (09.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/70/352',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420  UP.Link/6.3.0.0.0',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/70/351',
'Nokia6303classic/2.0 (10.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/70/352',
'Nokia6303classic/2.0 (10.12) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6303classic/2.0 (10.12) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6303classic/2.0 (10.12) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303classic/2.0 (10.12) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (10.12) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/70/351'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6303c_ver1');
      }
  }



  function test_nokia_6303classic_ver1() {
    foreach(array(
'Nokia6303classic/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6303classic/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6303classic/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420  UP.Link/6.5.0.0.0',
'Nokia6303classic/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303classic/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.3.1.13.0',
'Nokia6303classic/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6303classic/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303classic/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6303classic_ver1');
      }
  }



  function test_nokia_6303iclassic_ver1() {
    foreach(array(
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.5.0.0.0',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303iclassic UNTRUSTED/1.0',
'Nokia6303iclassic/5.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6303iclassic/UC Browser7.0.0.41/70/352',
'Nokia6303iclassic/5.0 (07.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6303iclassic/5.0 (07.10) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6303iclassic/5.0 (07.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6303iclassic/5.0 (07.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6303iclassic/5.0 (07.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;/Chyme Mini/T-Swift TURBO UA/hifi /503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303iclassic/5.0 (07.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6303iclassic/5.0 (07.10) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6303iclassic_ver1');
      }
  }



  function test_nokia_6310_ver1() {
    foreach(array(
'Nokia6310/1.0 (05.01)'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6310_ver1');
      }
  }



  function test_nokia_6310i_ver1() {
    foreach(array(
'Nokia6310i/1.0 (4.80) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6310i/1.0 (5.10) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6310i/1.0 (5.22) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6310i/1.0 (5.50) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6310i/1.0 (5.51) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6310i/1.0 (5.52) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6310i_ver1');
      }
  }



  function test_nokia_6350_ver1() {
    foreach(array(
'Nokia6350/2.0(ATT.12.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6350/2.0(ATT.12.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Nokia6350/12.40; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16803; U; en-US) Opera 9.50',
'Nokia6350/2.0(ATT.4.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6350/2.0(ATT.4.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6350/2.0(ATT.4.96) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6350/2.0(ATT.4.96) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia6350/2.0(ATT.4.96) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.3.1.20.0',
'Nokia6350/2.0(ATT.4.96) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6350_ver1');
      }
  }



  function test_nokia_6500_ver1() {
    foreach(array(
'Nokia6500c',
'Nokia6500c/2.0 (03.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500c/2.0 (03.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6500c/2.0 (03.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6500c/2.0 (03.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6500c/2.0 (04.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500c/2.0 (04.84) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500c/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500c/2.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500c/2.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500c/2.0 (06.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6500c/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia6500c/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500c/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6500c/2.0 (09.45) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500c/2.0 (09.45) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6500c/2.0 (09.48) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500c/2.0 (10.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6500_ver1');
      }
  }



  function test_nokia_6500s_ver1() {
    foreach(array(
'Nokia6500s-1/2.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia6500s-1/2.0 (04.84) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (04.84) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (04.84) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6500s-1/2.0 (05.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6500s-1/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (06.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6500s-1/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (07.12) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (07.12) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (08.30) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia6500s-1/UC Browser7.0.0.41/70/352',
'Nokia6500s-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6500s-1/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1(REAL IP: 84.235.75.19)',
'Nokia6500s-1/2.0 (09.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (09.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (09.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6500s-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6500s-1/2.0 (10.30) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s-1/2.0 (59.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s/2.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s/2.0 (05.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6500s/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6500s_ver1');
      }
  }



  function test_nokia_6510_ver1() {
    foreach(array(
'Nokia6510/1.0 (04.06)',
'Nokia6510/1.0 (04.12)'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6510_ver1');
      }
  }



  function test_nokia_6555_ver1() {
    foreach(array(
'Nokia6555/2.0 (03.31) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6555/2.0 (03.31) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia6555/2.0 (03.31) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6555/2.0 (03.43) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6555/2.0 (03.43) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia6555/2.0 (03.43) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6555/2.0 (03.45) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6555/2.0 (03.45) Profile/MIDP-2.1 Configuration/CLDC-1.1 Nokia6555 UCWEB/6.0 UNTRUSTED/1.0',
'Nokia6555/2.0 (03.45) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6555/2.0 (03.46) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6555/2.0 (03.46) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6555_ver1');
      }
  }



  function test_nokia_6555b_ver1() {
    foreach(array(
'Nokia6555b/2.0 (03.31) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6555b/2.0 (03.43) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6555b/2.0 (03.44) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6555b/2.0 (03.46) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6555b_ver1');
      }
  }



  function test_nokia_6555c_ver1() {
    foreach(array(
'Nokia6555c/2.0 (03.38) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6555c/2.0 (03.41) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6555c_ver1');
      }
  }



  function test_nokia_6600_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/4.09.1; 6329) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/4.09.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/4.17.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.27.0; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.27.0; 6329) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.27.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.27.0; 9399) Opera 8.65 [tr]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.53.0; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.53.0; 6329) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.53.0; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.53.0; 6936) Opera 8.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.53.0; 7032) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.53.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.53.0; 9399) Opera 8.65 [tr]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6600/5.53.0; 9424) Opera 8.65 [en]',
'Nokia 6600/R100 Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; 513) Opera 8.65 [en]',
'Nokia6600',
'Nokia6600/1.0 (3.38.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6600/1.0 (3.42.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6600/1.0 (3.42.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.0.2.37/27/600',
'Nokia6600/1.0 (3.49.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6600/1.0 (3.49.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.0.46/27/999',
'Nokia6600/1.0 (4.09.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6600/1.0 (4.09.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'Nokia6600/1.0 (4.09.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia6600/1.0 (4.09.1) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia6600/1.0 (4.17.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6600/1.0 (5.27.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6600/1.0 (5.27.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.1.13.0',
'Nokia6600/1.0 (5.27.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Link/6.3.1.15.0',
'Nokia6600/1.0 (5.27.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia6600/1.0 (5.27.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia6600/1.0 (5.27.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/401',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/350',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/400',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/401',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.0.1.34/27/300',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.1.0.42/27/352',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.0.46/27/999',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.2.51/27/999',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0/YAKI 7.2.2.51/27/352',
'Nokia6600/1.0 (5.53.0) SymbianOS/7.0s Series60/2.0 Profile/MIDP-2.0Configuration/CLDC-1.0',
'Nokia6600/SymbianOS/8.0 Series60/2.6',
'Opera/1657 (Symbian OS; U) [Nokia 6600/5.53.0]',
'Opera/9399 (Symbian OS; U) [Nokia 6600/5.27.0]',
'Opera/9399 (Symbian OS; U) [Nokia 6600/5.53.0]'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6600_ver1');
      }
  }



  function test_nokia_6600f_ver1() {
    foreach(array(
'Nokia6600f',
'Nokia6600f/2.0 (04.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600f/2.0 (04.80) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600f/2.0 (05.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600f/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600f/2.0 (06.18) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600f/2.0 (06.20) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6600f_ver1');
      }
  }



  function test_nokia_6600i_ver1() {
    foreach(array(
'Nokia6600i-1c/2.0 (36.14) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600i-1c/2.0 (36.15) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600i-1c/2.0 (36.16) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600i-1c/2.0 (36.60) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6600i_ver1');
      }
  }



  function test_nokia_6600s_ver1() {
    foreach(array(
'Nokia6600s',
'Nokia6600s/2.0 (04.81) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600s/2.0 (04.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600s/2.0 (05.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600s/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600s/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia6600s/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6600s/2.0 (06.14) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600s/2.0 (06.55) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia6600s/2.0 (06.55) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6600s_ver1');
      }
  }



  function test_nokia_6610_ver1() {
    foreach(array(
'Nokia6610/1.0 (3.09) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610/1.0 (4.18) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610/1.0 (4.28) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610/1.0 (4.74) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610/1.0 (5.52) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610/1.0 (5.63) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610/1.0 (5.65) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6610_ver1');
      }
  }



  function test_nokia_6610i_ver1() {
    foreach(array(
'Nokia6610I/1.0 (3.10) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610I/1.0 (4.10) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610I/1.0 (4.20) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6610I/1.0 (4.40) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6610i_ver1');
      }
  }



  function test_nokia_6620_ver1() {
    foreach(array(
'Nokia6620/2.0 (2.14.1) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6620/2.0 (4.22.1) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6620_ver1');
      }
  }



  function test_nokia_6630_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 5.0; Series60/2.6 Nokia6630/3.45.111 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series60/2.6 Nokia6630/3.45.113 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series60/2.6 Nokia6630/5.03.21 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/2.39.129; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/2.39.15; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/3.45.110; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/3.45.113; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/3.45.113; 6329) Opera 8.00 [ru]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/3.45.113; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/3.45.113; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/4.03.18; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/4.03.38; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/4.03.38; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/5.03.08; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/5.03.08; 7032) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/5.03.08; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/5.03.08; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.08; 6936) Opera 8.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.08; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.08; 9399) Opera 8.65 [tr]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.08; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.40; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.40; 6329) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.40; 6936) Opera 8.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.40; 7032) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.40; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.40; 9399) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6630/6.03.40; 9424) Opera 8.65 [en]',
'Nokia6630',
'Nokia6630/1.0 (2.39.129) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (2.39.15) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (2.39.15) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6630/1.0 (2.39.15) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.2.2.51/27/352',
'Nokia6630/1.0 (2.39.151) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (3.45.110) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1, Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6630/1.0 (3.45.113) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6630/1.0 (4.03.18) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (4.03.18) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6630/1.0 (4.03.18) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6630/1.0 (4.03.38) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (4.03.38) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6630/1.0 (4.03.38) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6630/1.0 (4.03.38) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/351',
'Nokia6630/1.0 (4.03.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (5.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (5.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6630/1.0 (5.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'Nokia6630/1.0 (5.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6630/1.0 (5.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6630/1.0 (5.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.1.0.42/27/352',
'Nokia6630/1.0 (5.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/999',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.146)',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.147)',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.148)',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.149)',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.150)',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6630/1.0 (6.03.08) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6630/1.0 (6.03.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6630/1.0 (6.03.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6630/1.0 (6.03.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'Nokia6630/1.0 (6.03.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6630/1.0 (6.03.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6630/1.0 (6.03.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/400',
'Nokia6630/1.0 (6.03.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.0.2.37/27/999',
'Nokia6630/3.0545.5.1 Series40/3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/V702NK/NKJ001 Series60/2.6 Nokia6630/2.39.148 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6630_ver1');
      }
  }



  function test_nokia_6650_ver1() {
    foreach(array(
'Nokia6650/2.0 (05.40) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6650_ver1');
      }
  }



  function test_nokia_6650d_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6650d-1c/03.09; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6650d-1c/03.31; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia6650d-1bh/ATT.3.25 Mozilla/5.0 SymbianOS/9.3; U; [en]; Series60/3.2; Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia6650d-1bh/ATT.3.26 Mozilla/5.0 SymbianOS/9.3; U; [en]; Series60/3.2; Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6650d_ver1');
      }
  }



  function test_nokia_6670_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/4.0419.3; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/4.0421.4; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/4.0421.4ch; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/4.0427.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/4.0437.4; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/4.0437.4; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/4.0437.4; 9399) Opera 8.65 [hu]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/4.0441.0; 9399) Opera 8.65 [ru]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/5.0509.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/5.0509.0; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/6.0522.0; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/6.0522.0; 1665) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/6.0522.0; 6360) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/6.0522.0; 6936) Opera 8.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/6.0522.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/6.0522.0; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/6.0525.0ch; 6329) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/6.0525.0ch; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/7.0642.0; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/7.0642.0; 6329) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/7.0642.0; 6936) Opera 8.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/7.0642.0; 9399) Opera 8.65 [en-US]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/7.0642.0; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/7.0642.0; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6670/7.0642.0ch; 9399) Opera 8.65 [en]',
'Nokia6670',
'Nokia6670/2.0 (4.0437.4) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (4.0437.4) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia6670/2.0 (4.0437.4ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (4.0441.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (4.0441.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/401',
'Nokia6670/2.0 (4.0441.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (5.0509.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (5.0509.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia6670/2.0 (5.0509.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (5.0509.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia6670/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia6670/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia6670/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.1.0.42/27/352',
'Nokia6670/2.0 (6.0525.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia6670/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6670_ver1');
      }
  }



  function test_nokia_6680_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/2.04.15; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/2.04.15; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/3.04.11; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/3.04.12; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/3.04.37; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/3.04.37; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/4.04.07; 6329) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/4.04.07; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/4.04.07; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/5.04.07; 1665) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/5.04.07; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/5.04.07; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/5.04.40; 6936) Opera 8.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/5.04.40; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6680/5.04.40; 9399) Opera 8.65 [fr]',
'Nokia6680',
'Nokia6680/1.0 (2.04.14) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (2.04.14) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6680/1.0 (2.04.14) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6680/1.0 (2.04.15) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (2.04.15) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6680/1.0 (2.23.05) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (3.04.11) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (3.04.12) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (3.04.12) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6680/1.0 (3.04.35) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (3.04.35) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia6680/1.0 (3.04.37) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (3.04.37) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6680/1.0 (3.04.37) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6680/1.0 (3.04.37) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/401',
'Nokia6680/1.0 (3.04.38) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0Configuration/CLDC-1.1',
'Nokia6680/1.0 (4.04.34) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (5.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (5.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6680/1.0 (5.04.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6680/1.0 (5.04.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6680/1.0 (5.04.40) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6680_ver1');
      }
  }



  function test_nokia_6681_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/4.00.15; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/4.00.15; 9399) Opera 8.65 [ru]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/5.37.01; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/5.37.01; 6329) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/5.37.01; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/5.37.01; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/5.37.01; 9424) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/6.09.00; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/6.09.00; 6936) Opera 8.50 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/6.09.00; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/6.09.00; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia 6681/7.11.00; 9424) Opera 8.65 [en]',
'Nokia6681',
'Nokia6681/2.0 (3.10.6) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6681/2.0 (3.10.6) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6681/2.0 (4.00.15) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6681/2.0 (4.00.15) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6681/2.0 (4.00.15) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6681/2.0 (5.37.01) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6681/2.0 (5.37.01) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6681/2.0 (5.37.01) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6681/2.0 (5.37.01) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/401',
'Nokia6681/2.0 (6.09.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6681/2.0 (6.09.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'Nokia6681/2.0 (6.09.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6681/2.0 (6.09.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6681/2.0 (6.09.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.0.1.34/27/300',
'Nokia6681/2.0 (6.32.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6681/2.0 (7.11.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6681/2.0 (7.11.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'Nokia6681/2.0 (7.11.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6681/2.0 (7.11.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/401',
'Nokia6681/2.0 (7.11.00) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/350'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6681_ver1');
      }
  }



  function test_nokia_6682_ver1() {
    foreach(array(
'Nokia6682',
'Nokia6682/2.0 (3.01.1) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6682/2.0 (3.01.1) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 configuration/CLDC-1.1',
'Nokia6682/2.0 (4.41.0) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6682/2.0 (4.41.0) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'Nokia6682/2.0 (4.65.0) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6682_ver1');
      }
  }



  function test_nokia_6700s_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6700s/032.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.6',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6700s/032.106; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.6',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6700s/032.208; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.6'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6700s_ver1');
      }
  }



  function test_nokia_6708_ver1() {
    foreach(array(
'Nokia6708/2.0 (V1.0.0) SymbianOS/7.0 UIQ/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6708_ver1');
      }
  }



  function test_nokia_6710navigator_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6710s/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6710s/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6710s/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6710s/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6710s/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6710s/022.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6710s/031.022; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3.1',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6710s/031.022; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3.1 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6710navigator_ver1');
      }
  }



  function test_nokia_6720_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6720c/012.008 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6720c/013.009 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6720c/013.009 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6720_ver1');
      }
  }



  function test_nokia_6730c_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c-1/021.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13126',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c-1/021.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13126 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c-1/021.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13126 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c-1/021.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13126',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c-1/023.010; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c-1/023.010; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424 UP.Link/6.3.1.20.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c/021.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13126',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c/022.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13126',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c/023.010; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 Nokia6730c/031.022; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3.1',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6730c-1/1.00.000; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413(KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6730c_ver1');
      }
  }



  function test_nokia_6750_ver1() {
    foreach(array(
'Nokia6750-1b/2.0(ATT.4.89) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6750-1b/2.0(ATT.4.96) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia6750-1b/2.0(ATT.4.96) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6750_ver1');
      }
  }



  function test_nokia_6760s_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6760s-1/03.25; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6760s-1/03.38; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6760s-1/03.38; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6760s-1/03.38; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6760s-1/03.45; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6760s-1/03.46; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6760s-1/20.007; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6760s-1/21.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6760s_ver1');
      }
  }



  function test_nokia_6790s_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6790s-1c/03.38; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6790s-1c/03.38; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 Nokia6790s-1c/20.007; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia6790s-1b/ATT.03.22 Mozilla/5.0 SymbianOS/9.3; U; [en]; Series60/3.2; Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Nokia6790s-1c/03.29 Mozilla/5.0 SymbianOS/9.3; U; [en]; Series60/3.2; Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0 UP.Link/6.5.1.0.0',
'Nokia6790s-1c/03.29 Mozilla/5.0 SymbianOS/9.3; U; [en]; Series60/3.2; Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0 UP.Link/6.5.1.0.0 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6790s_ver1');
      }
  }



  function test_nokia_6800_ver1() {
    foreach(array(
'Nokia6800/1.0 (3.14) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6800/1.0 (5.46) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6800/2.0 (4.17) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/5.1.2.9'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6800_ver1');
      }
  }



  function test_nokia_6810_ver1() {
    foreach(array(
'Nokia6810/2.0 (3.30) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6810_ver1');
      }
  }



  function test_nokia_6820_ver1() {
    foreach(array(
'Nokia6820/2.0 (3.21) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6820/2.0 (3.70) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6820/2.0 (4.22) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6820/2.0 (4.25) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6820/2.0 (4.25) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/6.3.1.13.0',
'Nokia6820/2.0 (4.83) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6820/2.0 (5.28) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6820/2.0 (5.30) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia6820/2.0 (5.88) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6820_ver1');
      }
  }



  function test_nokia_6822_ver1() {
    foreach(array(
'Nokia6822/2.0 (4.46) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6822/2.0 (4.48) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6822/2.0 (4.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia6822/2.0 (5.21) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_6822_ver1');
      }
  }



  function test_nokia_7020_ver1() {
    foreach(array(
'Nokia7020/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7020/2.0 (05.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7020/2.0 (08.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7020/2.0 (08.11) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7020/2.0 (p) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7020_ver1');
      }
  }



  function test_nokia_7070_ver1() {
    foreach(array(
'Nokia7070d-2',
'Nokia7070d-2/2.0 (06.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7070d-2/2.0 (06.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7070d-2/2.0 (07.60) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7070_ver1');
      }
  }



  function test_nokia_7100_ver1() {
    foreach(array(
'Nokia7100s',
'Nokia7100s-2/1.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7100s-2/1.0 (05.22) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia7100s-2/1.0 (05.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7100s-2/1.0 (05.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7100s-2/1.0 (05.41) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia7100s-2/1.0 (06.31) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7100s-2/1.0 (06.31) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7100s-2/1.0 (06.32) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7100s/1.0 (06.32) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7100_ver1');
      }
  }



  function test_nokia_7200_ver1() {
    foreach(array(
'Nokia7200/2.0 (3.100) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7200/2.0 (3.110) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7200/2.0 (4.24) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7200/2.0 (4.26) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7200/2.0 (4.30) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7200_ver1');
      }
  }



  function test_nokia_7210_supernova_ver1() {
    foreach(array(
'Nokia7210Supernova',
'Nokia7210Supernova/2.0 (04.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (04.62) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (04.63) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/351',
'Nokia7210Supernova/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/352',
'Nokia7210Supernova/2.0 (04.87) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (04.87) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (04.87) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia7210Supernova/2.0 (04.87) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'Nokia7210Supernova/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Azhure/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/352',
'Nokia7210Supernova/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'Nokia7210Supernova/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Nokia7210Supernova/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'Nokia7210Supernova/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/69/401 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (05.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/352',
'Nokia7210Supernova/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (05.61) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/352',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/351',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/351 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/352',
'Nokia7210Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UCWEB7.0.0.33/70/300 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/351',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera/UC Browser7.0.0.41/70/352',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/351',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UC Browser7.0.0.41/70/352',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7210supernova/UCWEB7.2.2.51/69/351 UNTRUSTED/1.0',
'Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1, Nokia7210Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7210_supernova_ver1');
      }
  }



  function test_nokia_7210_ver1() {
    foreach(array(
'Nokia7210/1.0 (3.08) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7210/1.0 (3.09) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7210/1.0 (4.18) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7210/1.0 (4.74) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7210/1.0 (4.74) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/6.3.1.13.0',
'Nokia7210/1.0 (5.52) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7210/1.0 (5.62) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7210/1.0 (5.62) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/6.3.0.0.0',
'Nokia7210/1.0 (5.63) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7210/1.0 (5.65) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7210c/2.0 (04.86) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210c/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7210c/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7210c/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7210_ver1');
      }
  }



  function test_nokia_7230_ver1() {
    foreach(array(
'Nokia7230/5.0 (05.71) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7230/5.0 (05.71) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia7230/5.0 (05.71) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia7230/5.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7230/5.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7230/5.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia7230/5.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Nokia7230/5.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7230/5.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7230 UNTRUSTED/1.0',
'Nokia7230/5.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7230/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia7230/5.0 (06.90) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7230/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7230_ver1');
      }
  }



  function test_nokia_7250_ver1() {
    foreach(array(
'Nokia7250/1.0 (3.12) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7250/1.0 (3.14) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7250/1.0 (3.62) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7250_ver1');
      }
  }



  function test_nokia_7250i_ver1() {
    foreach(array(
'Nokia7250I/1.0 (3.22) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7250I/1.0 (4.22) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7250I/1.0 (4.22) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/1.1',
'Nokia7250I/1.0 (4.63) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7250I/1.0 (5.30) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7250I/1.0 (5.41) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7250i_ver1');
      }
  }



  function test_nokia_7260_ver1() {
    foreach(array(
'Nokia7260',
'Nokia7260/2.0 (03.31) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7260/2.0 (03.36) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7260/2.0 (04.31) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7260/2.0 (04.81) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7260/2.0 (04.91) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7260/2.0 (05.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7260/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7260/2.0 (05.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7260/2.0 (t6.22_PRE) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7260_ver1');
      }
  }



  function test_nokia_7270_ver1() {
    foreach(array(
'Nokia7270/2.0 (03.22) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7270/2.0 (03.22) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia7270/2.0 (03.24) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7270/2.0 (03.25) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7270_ver1');
      }
  }



  function test_nokia_7280_ver1() {
    foreach(array(
'Nokia7280/2.0 (03.27)'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7280_ver1');
      }
  }



  function test_nokia_7310_ver1() {
    foreach(array(
'Nokia7310',
'Nokia7310/2.0 (07.00) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7310/2.0 (07.51) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7310/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7310/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7310/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia7310/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7310/UC Browser7.0.0.41/69/352 UNTRUSTED/1.0',
'Nokia7310/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7310/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7310/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.13337Mod.by.Handler/503; U; en)Presto/2.2.0 UNTRUSTED/1.0',
'Nokia7310/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia7310/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7310/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia7310/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7310/UC Browser7.0.0.41/70/351',
'Nokia7310/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7310/UC Browser7.0.0.41/70/352',
'Nokia7310c/2.0 (07.00) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7310c/2.0 (08.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7310c/2.0 (09.40) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7310_ver1');
      }
  }



  function test_nokia_7360_ver1() {
    foreach(array(
'Nokia7360/2.0 (03.21) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7360/2.0 (04.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7360/2.0 (05.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7360/2.0 (05.22) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7360_ver1');
      }
  }



  function test_nokia_7370_ver1() {
    foreach(array(
'Nokia7370/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7370/2.0 (03.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7370/2.0 (03.56) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7370/2.0 (04.05) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7370/2.0 (04.13) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7370/2.0 (04.13) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7370_ver1');
      }
  }



  function test_nokia_7373_ver1() {
    foreach(array(
'Nokia7373',
'Nokia7373/2.0 (03.90) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7373/2.0 (03.90) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7373/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7373/2.0 (04.70) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7373/2.0 (05.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7373/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7373/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7373/2.0 (05.50) Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7373_ver1');
      }
  }



  function test_nokia_7390_ver1() {
    foreach(array(
'Nokia7390/2.0 (03.84) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7390/2.0 (04.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7390/2.0 (04.51) Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0,Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7390_ver1');
      }
  }



  function test_nokia_7500_ver1() {
    foreach(array(
'Nokia7500',
'Nokia7500/2.0 (03.42) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7500/2.0 (03.50) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7500/2.0 (03.50) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia7500/2.0 (04.62) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7500/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7500/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7500/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7500/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7500/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7500/UC Browser7.0.0.41/70/351'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7500_ver1');
      }
  }



  function test_nokia_7510_supernova_ver1() {
    foreach(array(
'Mozilla/5.0 ( Nokia7510Supernova/2.0 (03.80) Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Mozilla/5.0 ( Nokia7510a-b/2.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Mozilla/5.0 ( Nokia7510a-b/2.0 (03.90) Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'Mozilla/5.0 ( Nokia7510a-b/2.0 (03.90) Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.3.1.16.0',
'Nokia7510Supernova',
'Nokia7510Supernova/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7510Supernova/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'Nokia7510Supernova/2.0 (06.65) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7510_supernova_ver1');
      }
  }



  function test_nokia_7600_ver1() {
    foreach(array(
'Nokia7600/2.0 (03.05) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7600/2.0 (04.03) Profile/MIDP-1.0 Configuration/CLDC-1.0',
'Nokia7600/2.0 (04.05) Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7600_ver1');
      }
  }



  function test_nokia_7610_supernova_ver1() {
    foreach(array(
'Nokia7610Supernova',
'Nokia7610Supernova/2.0 (04.70) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7610Supernova/2.0 (04.82) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7610Supernova/2.0 (04.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia7610Supernova/2.0 (04.82) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia7610Supernova/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7610Supernova/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7610Supernova/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'Nokia7610Supernova/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Nokia7610Supernova/2.0 (05.20) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Nokia7610Supernova/2.0 (05.72) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7610Supernova/2.0 (05.72) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7610supernova',
'Nokia7610Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7610Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'Nokia7610Supernova/2.0 (06.51) Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Nokia7610Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7610Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7610supernova/UC Browser7.0.0.41/69/351 UNTRUSTED/1.0',
'Nokia7610Supernova/2.0 (07.23) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokia7610supernova/UC Browser7.0.0.41/70/352'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7610_supernova_ver1');
      }
  }



  function test_nokia_7610_ver1() {
    foreach(array(
'Nokia7610',
'Nokia7610/(2009.07.09) S004/WAP2.0',
'Nokia7610/(2009.08.26) S011/WAP2.0',
'Nokia7610/080630 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7610/081030 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7610/2.0 (4.0421.4) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0421.4ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0424.4) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0424.4ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0427.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0437.4) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0437.4) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia7610/2.0 (4.0437.4) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia7610/2.0 (4.0437.4ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0440.2) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0441.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0441.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia7610/2.0 (4.0441.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (4.0445.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (5.0509.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (5.0509.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia7610/2.0 (5.0509.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia7610/2.0 (5.0509.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/401',
'Nokia7610/2.0 (5.0509.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0 Novarra-Vision/8.0',
'Nokia7610/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/350',
'Nokia7610/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia7610/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia7610/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.0.46/27/999',
'Nokia7610/2.0 (6.0522.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/YAKI 7.2.2.51/27/350',
'Nokia7610/2.0 (6.0525.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (6.0525.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia7610/2.0 (6.0525.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia7610/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/350',
'Nokia7610/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/351',
'Nokia7610/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/352',
'Nokia7610/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/27/401',
'Nokia7610/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.0.0.41/27/352',
'Nokia7610/2.0 (7.0642.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0/UCWEB7.2.0.46/27/351',
'Nokia7610/2.0 (7.0642.0ch) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
'Nokia7610/2008.05.06 LMP/SH Release Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia7610/SymbianOS/8.0 Series60/2.6'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7610_ver1');
      }
  }



  function test_nokia_7650_ver1() {
    foreach(array(
'Nokia7650/1.0 SymbianOS/6.1 Series60/0.9 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7650_ver1');
      }
  }



  function test_nokia_7705_ver1() {
    foreach(array(
'Mozilla/4.1 (compatible; MSIE 6.0; Brew 3.1.5; U; en)/320x240 NOKIA 7705'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7705_ver1');
      }
  }



  function test_nokia_7710_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/2.08.0 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/3.04.2 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/3.26.0 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/4.01.0 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/4.10.0 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/c4.50.0 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/c4.58.0 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/n4.58.0 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series90/1.1 Nokia7710/t4.58.0 Profile/MIDP-2.0 Configuration/CLDC-1.0)',
'Nokia7710'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7710_ver1');
      }
  }



  function test_nokia_7900_ver1() {
    foreach(array(
'Nokia7900/2.0 (03.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia7900/2.0 (04.84) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_7900_ver1');
      }
  }



  function test_nokia_8310_ver1() {
    foreach(array(
'Nokia8310/1.0 (05.06)',
'Nokia8310/1.0 (05.11)',
'Nokia8310/1.0 (05.11) UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Nokia8310/1.0 (05.57)',
'Nokia8310/1.0 (05.80)',
'Nokia8310/1.0 (06.04)',
'Nokia8310/1.0 (06.20)'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_8310_ver1');
      }
  }



  function test_nokia_8600_ver1() {
    foreach(array(
'Nokia8600',
'Nokia8600 Luna/2.0 (03.52) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8600 Luna/2.0 (04.00) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8600 Luna/2.0 (04.02) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8600 Luna/2.0 (04.04) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_8600_ver1');
      }
  }



  function test_nokia_8800_ver1() {
    foreach(array(
'Nokia8800/2.0 (03.28) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800/2.0 (03.51) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800/2.0 (03.78) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800/2.0 (03.94) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800/2.0 (04.16) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800/2.0 (04.17) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800SI/2.0 (03.93) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800SI/2.0 (04.10) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800SI/2.0 (04.20) Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Nokia8800e-1/2.0 (05.21) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia8800e-1/2.0 (06.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia8800e-1/2.0 (07.10) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia8800e-1/2.0 (09.41) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Nokia8800e-1/2.0 (10.00) Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_8800_ver1');
      }
  }



  function test_nokia_8801_ver1() {
    foreach(array(
'Nokia8801/2.0 (03.78) Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_8801_ver1');
      }
  }



  function test_nokia_8910_ver1() {
    foreach(array(
'Nokia8910/1.0 (03.06)',
'Nokia8910/1.0 (03.57)'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_8910_ver1');
      }
  }



  function test_nokia_9300_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9300/05.22 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9300/4.53 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9300/5.22 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9300/6.27 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Nokia9300'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_9300_ver1');
      }
  }



  function test_nokia_9300i_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9300i/5.47 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9300i/5.50 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9300i/6.27 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Nokia9300i'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_9300i_ver1');
      }
  }



  function test_nokia_9500_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9500/05.22 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9500/06.27 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9500/4.34.0 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9500/4.51 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Nokia9500'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_9500_ver1');
      }
  }



  function test_nokia_c5_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaC5-00/031.017; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaC5-00/031.022; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3.1',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaC5-00/031.022; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3.1 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_c5_ver1');
      }
  }



  function test_nokia_e50_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.1; U; [de]; NokiaE50-2/06.27.1.0 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es50',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es50 UP.Link/6.5.0.0.0',
'NOKIAE50',
'NOKIAE50/UC Browser7.0.0.41/28/350',
'NOKIAE50/UC Browser7.0.0.41/28/351',
'NOKIAE50/UC Browser7.0.0.41/28/352',
'NOKIAE50/UCWEB7.2.2.51/28/800',
'NOKIAE50/UCWEB7.3.0.55/28/350',
'NokiaE50',
'NokiaE50-1',
'NokiaE50-1/3.0 (06.27.1.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-1/3.0 (06.41.3.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-1/3.0 (06.41.3.20) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-1/3.0 (07.05.0.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-1/3.0 (07.05.0.20) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-1/3.0 (07.13.0.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-1/3.0 (07.13.0.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaE50-1/3.0 (07.13.0.20) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-1/3.0 (07.36.0.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-2/3.0 (06.27.1.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-2/3.0 (06.41.3.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE50-2/3.0 (07.36.0.0) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e50_ver1');
      }
  }



  function test_nokia_e51_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/100.34.20; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/100.34.20; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/100.34.20; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/100.34.20; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.06.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/100.34.20; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413.',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/150.34.15; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/200.34.36; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/200.34.36; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/210.34.36; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/210.34.36; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/220.34.37; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/220.34.37; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/220.34.37; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/220.34.37; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/300.34.56; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/300.34.56; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/300.34.56; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/400.34.0111; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/400.34.011; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-1/410.34.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-2/151.34.20; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-2/201.34.38; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-2/301.34.56; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-2/401.34.011; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE51-2/411.34.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0(SymbianOS/9.2; U; Series60/3.1 NokiaE51/1.00.000; Profile/MIDP-2.0 Configuration/CLDC-1.1;)AppleWebKit/413(KHTML,like Gecko)Safari/413',
'NokiaE51',
'NokiaE51/UC Browser7.0.0.41/28/351',
'NokiaE51/UC Browser7.0.0.41/28/352',
'NokiaE51/UC Browser7.0.0.41/28/400',
'NokiaE51/UCWEB7.2.0.46/28/800',
'NokiaE51/UCWEB7.2.1.50/28/352',
'NokiaE51/UCWEB7.3.0.55/28/6500'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e51_ver1');
      }
  }



  function test_nokia_e52_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/022.008; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.18430',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/022.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/022.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/022.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/022.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/031.012; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/032.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/033.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/033.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/033.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5(REAL IP: 62.231.248.130)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/033.003; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-1/034.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE52-2/031.012; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE52-1/1.00.000; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413(KHTML, like Gecko)Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e52_ver1');
      }
  }



  function test_nokia_e55_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE55-1/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE55-1/021.013; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13841 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE55-1/022.009; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE55-1/031.012; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE55-1/033.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE55-1/034.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.5',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE55-2/1.00.000; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413(KHTML, like Gecko)Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e55_ver1');
      }
  }



  function test_nokia_e60_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es60',
'NokiaE60-1',
'NokiaE60-1/3.0 (1.0610.02.15) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE60-1/3.0 (3.0633.09.04) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e60_ver1');
      }
  }



  function test_nokia_e61_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es61',
'NokiaE61-1',
'NokiaE61-1/3.0 (1.0610.04.04) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE61-1/3.0 (2.0618.06.05) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE61-1/3.0 (2.0618.06.10) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE61-1/3.0 (3.0633.09.04) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e61_ver1');
      }
  }



  function test_nokia_e61i_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es61i',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es61i UP.Link/6.3.0.0.0',
'NOKIAE61',
'NOKIAE61/UC Browser7.0.0.41/28/352',
'NOKIAE61/UCWEB7.2.2.51/28/800',
'NOKIAE61i/UC Browser7.0.0.41/28/350',
'NOKIAE61i/UC Browser7.0.0.41/28/351',
'NOKIAE61i/UC Browser7.0.0.41/28/352',
'NokiaE61i-1',
'NokiaE61i-1/3.0 (1.0633.22.05) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE61i-1/3.0 (1.0633.22.09) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE61i-1/3.0 (2.0633.65.01) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE61i-1/3.0 (3.0633.69.00) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e61i_ver1');
      }
  }



  function test_nokia_e62_ver1() {
    foreach(array(
'NOKIAE62',
'NOKIAE62/UC Browser7.0.0.41/28/351',
'NOKIAE62/UC Browser7.0.0.41/28/352',
'NokiaE62-1',
'NokiaE62-1/3.0 (2.0618.06.17); SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'NokiaE62-1/3.0 (3.0633.09.13); SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE62-1/3.0 (3.0633.31.19); SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e62_ver1');
      }
  }



  function test_nokia_e63_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/100.21.110; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/100.21.60; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/110.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/110.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/110.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/110.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/200.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/200.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/200.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/200.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/400.21.007; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/401.21.002; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-1/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-2/100.21.110; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-2/110.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-2/110.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-2/200.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-2/200.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-2/400.21.004; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-2/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-2/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-3/100.21.110; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-3/110.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-3/200.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-3/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE63-3/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NokiaE63',
'NokiaE63/UC Browser7.0.0.41/28/350',
'NokiaE63/UC Browser7.0.0.41/28/351',
'NokiaE63/UC Browser7.0.0.41/28/352',
'NokiaE63/UC Browser7.0.0.41/28/401',
'NokiaE63/UCWEB7.2.2.51/28/800',
'NokiaE63/UCWEB7.2.2.51/28/999'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e63_ver1');
      }
  }



  function test_nokia_e65_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es65',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es65 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es65 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es65 UP.Link/6.5.0.0.0',
'NOKIAE65',
'NOKIAE65/UC Browser7.0.0.41/28/351',
'NOKIAE65/UC Browser7.0.0.41/28/352',
'NOKIAE65/UC Browser7.0.0.41/28/401',
'NOKIAE65/UCWEB7.2.2.51/28/999',
'NokiaE65-1',
'NokiaE65-1 Orange/1.0 (1.0633.18.02) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE65-1/0633.69.00 Configuration/CLDC-1.1 Profiles/MIDP-2.0 Encoding/ISO-8859-1 Locale/ar Lang/ar Morange/5.2.1',
'NokiaE65-1/3.0 (1.0633.18.01) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE65-1/3.0 (1.0633.18.01) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaE65-1/3.0 (1.0633.18.01) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaE65-1/3.0 (1.0633.18.02) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE65-1/3.0 (1.0633.18.03) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE65-1/3.0 (1.0633.58.02) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE65-1/3.0 (2.0633.65.01) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE65-1/3.0 (2.0633.65.02) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE65-1/3.0 (3.0633.69.00) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE65-1/3.0 (4.0633.74.00) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e65_ver1');
      }
  }



  function test_nokia_e66_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/100.07.78; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/101.07.79; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/102.07.81; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/102.07.81; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/102.07.81; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/102.07.81; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.148)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/102.07.81; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.150)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/110.07.126; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/110.07.126; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 85.154.2.179)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/200.21.108; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/200.21.118; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/200.21.118; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/210.21.007; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/210.21.007; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.135.2.159)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/210.21.007; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.135.2.199)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/210.21.007; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.54.97.87)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/300.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/401.21.002; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-1/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-2/102.07.81; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-2/110.07.126; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-2/200.21.118; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE66-2/300.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0(SymbianOS/9.2;U;Series60/3.1NokiaE66-1',
'NokiaE66',
'NokiaE66/1.0 (200.21.012) SymbianOS/9.2 Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE66/1.0 (400.21.011) SymbianOS/9.2 Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE66/UC Browser7.0.0.41/28/351',
'NokiaE66/UC Browser7.0.0.41/28/352',
'NokiaE66/UCWEB7.2.2.51/28/352',
'NokiaE66/UCWEB7.2.2.51/28/999'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e66_ver1');
      }
  }



  function test_nokia_e70_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 es70',
'NokiaE70-1',
'NokiaE70-1/3.0 (1.0610.05.06) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE70-1/3.0 (1.0610.05.06); SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE70-1/3.0 (2.0618.07.10) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e70_ver1');
      }
  }



  function test_nokia_e71_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/100.07.57; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/100.07.76; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/100.07.76; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/100.07.76; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/101.07.79; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/102.07.81; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/110.07.127; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/200.21.118; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/200.21.118; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/200.21.118; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/210.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/210.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/210.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/210.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/210.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/300.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/300.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/300.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.43.246)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.69.206)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.69.230)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.69.34)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.69.91)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/401.21.002; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.69.61)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-1/500.21.009; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/100.07.76; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/100.07.76; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/100.07.76; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/110.07.127; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/200.21.118; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/200.21.98; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/300.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/301.21.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/400.21.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-2/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-3/100.07.76; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-3/200.21.118; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-3/210.21.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-3/300.21.012; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE71-3/410.21.010; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NokiaE71',
'NokiaE71/1.0 (110.21.006) SymbianOS/9.2 Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE71/1.0 (400.21.011) SymbianOS/9.2 Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaE71/UC Browser7.0.0.41/28/350',
'NokiaE71/UC Browser7.0.0.41/28/351',
'NokiaE71/UC Browser7.0.0.41/28/352',
'NokiaE71/UC Browser7.0.0.41/28/401',
'NokiaE71/UCWEB7.1.0.42/28/800',
'NokiaE71/UCWEB7.2.1.50/28/351',
'NokiaE71/UCWEB7.2.1.50/28/352',
'NokiaE71/UCWEB7.2.2.51/28/351',
'NokiaE71/UCWEB7.2.2.51/28/999'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e71_ver1');
      }
  }



  function test_nokia_e71x_ver1() {
    foreach(array(
'NokiaE71x/ATT.03.27 Mozilla/5.0 SymbianOS/9.3; U; [en]; Series60/3.2; Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NokiaE71x/ATT.03.28 Mozilla/5.0 SymbianOS/9.3; U; [en]; Series60/3.2; Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NokiaE71x/ATT.03.28 Mozilla/5.0 SymbianOS/9.3; U; [en]; Series60/3.2; Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e71x_ver1');
      }
  }



  function test_nokia_e72_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/021.024; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/021.024; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/021.024; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424(REAL IP: 84.235.75.18)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/021.024; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424(REAL IP: 84.235.75.19)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/021.024; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424(REAL IP: 84.235.75.20)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/021.024; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424(REAL IP: 87.109.39.224)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/021.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/021.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424(REAL IP: 202.93.37.70)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/022.007; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19974',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/023.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19974',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/023.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19974(REAL IP: 212.118.143.149)',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/031.023; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3.1',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE72-1/100.000; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13126'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e72_ver1');
      }
  }



  function test_nokia_e75_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE75-1/200.12.51; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE75-1/201.12.01; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE75-1/202.12.01; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE75-1/202.12.01; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE75-1/210.12.15; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE75-1/210.12.15; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaE75-1/210.12.15; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.1 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE75-1/008.38.0; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE75-1/100.48.78 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE75-1/100.48.78 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE75-1/100.48.78 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.43.246)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE75-1/110.48.125 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE75-1/110.48.125 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.135.2.135)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE75-1/110.48.125 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.135.2.216)'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e75_ver1');
      }
  }



  function test_nokia_e90_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE-90-1/07.24.0.3; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/07.22.4.0; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/07.24.0.3; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/07.24.0.3; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/07.24.1.3; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/07.38.0.2; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/07.40.1.2; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/200.34.73 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/210.34.75 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/210.34.75 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/210.34.75 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/210.34.75 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.69.14)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/210.34.75 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.69.207)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/300.34.84 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/300.34.84 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaE90-1/400.34.93 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIAE90',
'NOKIAE90/UC Browser7.0.0.41/28/351',
'NOKIAE90/UC Browser7.0.0.41/28/352',
'NokiaE90'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_e90_ver1');
      }
  }



  function test_nokia_n70_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0536.0.2; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0536.0.2; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0537.1.7; 6169) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0537.1.7; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0537.1.7; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0539.1.2; 7185) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0617.1.0.3; 7185) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0617.1.0.3; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0617.1.0.3; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0635.3.0.2; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/2.0635.3.0.2; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/3.0546.2.3; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/3.0546.2.3; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/3.0546.2.3; 9399) Opera 8.65 [tr]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0609.2.0.1; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0609.2.0.1; 6171) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0609.2.0.1; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0609.2.0.1; 7185) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0609.2.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0609.2.0.1; 9399) Opera 8.65 [fr]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0616.2.0.3; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0616.2.0.3; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0616.2.0.3; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0616.2.0.3; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0635.2.5.3; 9404) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 6171) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 6360) Opera 8.00 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 7185) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 9399) Opera 8.65 [fr]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 9399) Opera 8.65 [ro]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 9414) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 9414) Opera 8.65 [es]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0638.3.0.1; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 7185) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 9399) Opera 8.65 [ru]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 9404) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 9414) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 9424) Opera 8.65 [pl]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0705.3.0.1; 9424) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0706.4.0.1; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0706.4.0.1; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0706.4.0.1; 7032) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0706.4.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0706.4.0.1; 9414) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0706.4.0.1; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0706.4.0.1; 9424) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0717.3.0.1; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0717.3.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0717.3.0.1; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0717.3.0.1; 9424) Opera 8.65 [es]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0734.4.0.1; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0734.4.0.1; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0734.4.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0734.4.0.1; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 1657) Opera 8.60 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 1665) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 7032) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9399) Opera 8.65 [fr]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9399) Opera 8.65 [ro]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9399) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9399) Opera 8.65 [tr]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9404) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9414) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0737.3.0.1; 9424) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 1665) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 6366) Opera 8.01 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 7032) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 9399) Opera 8.65 [ru]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 9399) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 9404) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0741.4.0.1; 9424) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0819.4.0.1; 1657) Opera 8.60 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0819.4.0.1; 7032) Opera 8.51 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0819.4.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0819.4.0.1; 9399) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0819.4.0.1; 9424) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.0819.4.0.1; 9424) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N70/5.1003.3.0.1; 9399) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Opera 8.65; Nokia N70/5.0638.3.0.1; 9414) Opera 8.65 [en] UP.Link/6.3.1.13.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Opera 8.65; Nokia N70/5.0717.3.0.1; 9424) Opera 8.65 [es]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Opera 8.65; Nokia N70/5.0737.3.0.1; 9399) Opera 8.65 [it]',
'NokiaN70',
'NokiaN70-1',
'NokiaN70-1/ 2.0 LiMiTeD By ^RedKingMaSTer^™',
'NokiaN70-1/2.0536.0.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN70-1/2.0536.0.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/2.0536.0.2/SN357093000937460 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357093001600315 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357093002477440 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357093002996225 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357093003693904 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357093004799031 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357093009955539 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357927000026859 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357927000808918 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357927001710337 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0536.0.2/SN357968000064078 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0537.1.7 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0537.1.7 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN70-1/2.0537.1.7 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70-1/2.0537.1.7 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/2.0537.1.7/SN357093000709547 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0537.1.7/SN357968008453307 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0537.1.7/SN359367003295888 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0537.1.7/SN359367006037949 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0539.1.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0539.1.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/2.0539.1.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/999',
'NokiaN70-1/2.0539.1.2/SN357093003216706 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0539.1.2/SN357093008506630 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0539.1.2/SN357968005683161 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0539.1.2/SN357968009741940 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0539.1.2/SN359367009153586 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0539.1.2/SN359380000062003 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/2.0539.1.2/SN359380005473676 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN70-1/3.0546.2.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70-1/3.0546.2.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/3.0546.2.3/SN351862012727598 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357093000347017 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357093000612998 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357093004782318 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357093007466109 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357927000643711 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357927003592063 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357927004190503 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357927004853365 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357927005671147 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357927005741387 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357927006035466 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357927006589827 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968003143457 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968003741193 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968003962005 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968004361264 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968005508558 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968008071208 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968008137264 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968008941632 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN357968009468056 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359367003418308 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359367004653226 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359367004798575 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359367005389093 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359367005844733 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN70-1/3.0546.2.3/SN359380000157647 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359380000545205 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359380000931306 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359380001195448 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359380003115840 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359380005342673 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/3.0546.2.3/SN359380006954302 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.146)',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.148)',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.150)',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.1.0.42/27/351',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.1.0.42/27/352',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.2.51/27/999',
'NokiaN70-1/5.0609.2.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/350',
'NokiaN70-1/5.0609.2.0.1/SN351862010115325 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862010608691 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862011220850 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862011468897 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862013002025 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862013170384 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862014486151 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862014919284 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862015589318 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862015722943 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN351862017251248 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN353269011524430 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN353269012433433 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN353269012489542 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN353269012516799 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN353269012526236 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN353269012531186 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN353269012577734 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN354551010543274 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357093003020025 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357093008558607 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357927000186935 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357927006833126 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357927007173720 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357927008366398 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357927009071195 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357927009549976 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357927009623912 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN357968006196239 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359367001658335 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359367002948073 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359367005942867 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359380005108231 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359380006447620 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359380006882552 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359380007041786 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359380008046883 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359380009113211 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359380009362966 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359380009976377 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359381000287533 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359381000692468 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0609.2.0.1/SN359381004615010 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/999',
'NokiaN70-1/5.0616.2.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/350',
'NokiaN70-1/5.0616.2.0.3/SN351862016297481 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN351862018918373 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN351862019666260 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN70-1/5.0616.2.0.3/SN353269010391666 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269010605370 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269010609489 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269010712036 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269011387036 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269012008599 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269012675629 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269012699967 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269013445675 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269015199072 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269015202884 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269017711999 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN353269017739032 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN357093000133813 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN357927001284325 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN357927007638698 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN357927009075733 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN357968009322980 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359367001312750 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359367006141022 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359367008540155 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359380006268125 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359380007977005 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381000207093 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381002263896 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381002379312 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381002867571 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381003076073 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381003775328 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381003850212 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381004000858 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381004079654 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381004082856 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381004397288 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381005011573 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381005076832 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381005451886 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381005565263 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381005667168 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381005770004 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381006240643 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381006249503 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381006488655 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381007019533 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381007112346 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381007536205 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381008158017 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381008161789 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381008182785 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009010399 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009015596 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009260754 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009314221 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009323990 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009365736 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009382210 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009429706 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009457145 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009469868 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009707309 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009876393 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009877128 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0616.2.0.3/SN359381009878753 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0624.2.1.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/350',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.2.51/27/999',
'NokiaN70-1/5.0638.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/350',
'NokiaN70-1/5.0638.3.0.1/SN351862013500606 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351862017418581 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863010153480 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863010212120 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863010344923 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863010349427 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863010507107 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863010614069 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863010730733 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863010862262 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863011225840 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863011463797 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863011495229 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863011610611 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863011843592 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863012136376 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863012171118 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863012419889 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863012461709 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863012730020 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863012736266 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863012800625 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863012822033 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863013127218 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863013484882 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863013623679 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863013735317 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863013917170 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863013970781 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863014207811 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863014353656 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863014385492 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863014632778 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863014679134 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015312552 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015495472 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015504398 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015633296 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015739432 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015840958 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015846872 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015848993 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015852557 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015863364 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015898279 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015917145 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863015918358 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863016413052 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863016530749 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863016564649 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863016716363 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863016841468 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863016894152 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863017005378 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863017223146 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863017236460 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863017281086 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863017372547 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863017459112 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN351863017982998 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753010312690 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753010856324 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753011571054 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753012326391 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753013239007 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753014439523 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753014739898 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753015281775 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN70-1/5.0638.3.0.1/SN352753016528885 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753017275155 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753017549617 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753017964220 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753018729341 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753018744779 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753019225406 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352753019245362 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN352913029512637 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353125023015280 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN70-1/5.0638.3.0.1/SN353269017383179 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353269017595335 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353269017671623 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353269018246987 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353269018357768 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353269019648553 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946010090600 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946010645247 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946010651518 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946010748405 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946010749213 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946011406052 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946011683999 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946011695142 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946011798128 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946011852362 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946011984553 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946012097009 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946012351919 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946012451933 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946014257486 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946014675570 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946014790494 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946015289801 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946015607176 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946015928101 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946016266311 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946016634922 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946016765890 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946017076883 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946017707560 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946017868503 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946018001500 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN353946018359924 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551010465346 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551011156894 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551011162058 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551012705061 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551012865923 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551012873828 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN70-1/5.0638.3.0.1/SN354551012898031 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551013178045 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551013504356 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551014062958 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551014244713 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551014740140 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551015116761 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551015214558 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551016574315 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551016690954 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551016823191 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551017164033 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551017183082 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551017373733 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551018200323 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551018343057 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551018487102 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551018702476 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551018864268 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551018932313 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551019054034 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551019497720 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551019512825 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN354551019882509 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN355521010358980 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN355521011922164 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN355521013532094 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN355521014000984 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN355521014001487 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN355521017882669 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN355521017994019 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270010103652 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270010884046 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270011157673 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270011188041 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270011534012 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270011548434 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270011842761 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270012265137 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270012567920 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270012720693 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270013302095 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270013374722 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270013904148 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270014116841 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270014118060 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270014170079 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270014240278 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270015419079 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270016113325 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270016363797 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270016549130 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270017757294 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270017763862 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270018110030 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356270018372556 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'NokiaN70-1/5.0638.3.0.1/SN356270019475846 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294011284121 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294011803516 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294012398300 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294012409347 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294014882665 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294016252172 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294018004910 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294019388445 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356294019878718 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356963013396584 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356963014173099 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356963014872195 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356963015850356 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356963016232521 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356992013796261 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356992015725615 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356992015855735 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356992017607431 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356992017618917 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN356992019362894 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357093001876626 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357093002932725 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357093009940689 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357927003159392 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357927005989796 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357927007610457 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357927008336466 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357968003794143 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357968008529254 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN357968009166163 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358080013379359 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358080013520168 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358080014732176 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358080015333123 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358637011436489 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358637015273169 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358637017114460 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358637017925295 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358637019085015 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN358637019380960 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359367005657507 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359367008025132 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359367009604976 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359380001636524 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359380005050599 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359381000150061 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359381004761954 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359381007494264 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359381008061476 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359381009246605 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359381009249005 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566010939616 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566012783236 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566012992241 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566013034043 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566013213860 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566014171521 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566017067783 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566018091048 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566018894953 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566019399531 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566019728705 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359566019945952 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359567011068710 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359567012294398 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0638.3.0.1/SN359567013757476 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0647.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0647.3.0.1/SN353946018507738 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0647.3.0.1/SN356270010159878 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0647.3.0.1/SN356270013684963 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.118.143.150)',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352(REAL IP: 212.118.143.148)',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352(REAL IP: 212.118.143.150)',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/400',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/401',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.0.1.34/27/300',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.2.51/27/999',
'NokiaN70-1/5.0705.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/351',
'NokiaN70-1/5.0705.3.0.1/SN351862013790496 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351862015065574 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351862019393253 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863010172902 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863010236632 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863010837975 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863015542679 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863017500121 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863017899572 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018159802 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018181012 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018214359 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018331930 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018392932 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018461570 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018469847 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018574372 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018576591 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018702973 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018716585 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018720736 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863018750550 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863019131925 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863019598446 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863019664917 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863019954953 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN351863019984372 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN352753010539474 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN352753011421763 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN352753019132792 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN353269012246306 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN353269014769768 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN353269015445962 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN353269016653572 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN353269017654546 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN353269018072409 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN353946015954834 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN354551014814366 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN354551015918711 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN354551016365037 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN354551019289945 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521014592493 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521014885129 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521014885335 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521014887810 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521014922732 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521015081439 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521015082007 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521015402452 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521015559319 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521015597657 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521015915545 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521016142925 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521016361244 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521016950806 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521017179660 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521017420288 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521018226114 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521019933114 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355521019999743 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN355720028353229 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356270012783121 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356270015600603 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356270018066646 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356270018098581 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356270018410463 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356270019161057 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356270019194066 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356270019581304 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010144870 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010183324 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010300829 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010499852 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010502747 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010582681 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010625126 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010699006 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010715323 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294010987153 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294011101838 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294011130597 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294011237392 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294011549705 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294011594834 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294011641155 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294011718607 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294012120159 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294012281472 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294012691282 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294012840459 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294012925003 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294012955588 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294013195291 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294013664999 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294013668974 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294013740351 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294013849657 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294013853360 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294014043425 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294014097686 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294014301476 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294014431018 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294014842222 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015135329 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015190704 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015240327 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015489924 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015549339 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015664781 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015738858 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015824278 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294015841553 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294016156902 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294016160516 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294016599010 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294016638990 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294016846676 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294016921206 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294017039495 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294017153866 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294018160480 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294018266154 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294018521160 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294018559178 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294018626738 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294018943554 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294019096907 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294019491330 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294019529162 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294019560134 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294019615201 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294019849511 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356294019941490 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963010801420 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963011364261 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963012260393 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963012327366 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963012561295 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963013711741 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963016158122 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963016542150 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963017003178 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963017354431 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963018270537 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963018375559 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963018776053 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963018823442 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963018924992 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963018959097 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963019569622 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356963019932952 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992010318325 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992010349262 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992010640033 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992011640131 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992012167829 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992012901672 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992013573611 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992013659402 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992013719172 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992014209496 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN356992015625351 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357093002835035 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357927000172208 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357927000544430 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357927001267593 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357927006478096 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357968000877859 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357968006960030 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357968007649053 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN357968009626737 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080010333466 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080010604163 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080010611267 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080010637114 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080010776128 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080011069713 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080011074796 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080011444387 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080011754363 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080011946449 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012047270 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012211082 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012211868 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012291514 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012296570 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012514030 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012618518 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012690285 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012880456 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012900437 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080012998324 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080013015110 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080013051503 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080013487749 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080013716055 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080013893821 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080014141139 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080014329106 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080014782833 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080014883755 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080014907976 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080015067283 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080015289309 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080015491103 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080015510019 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080015543721 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080015642564 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080015942220 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080015945173 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080016524605 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080016546475 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358080018137711 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637011728406 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637011842306 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637012276538 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637012981715 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637013437378 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637013507824 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637014831520 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637015429563 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637016809854 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637016822618 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637016887488 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637016898568 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637017096634 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637017540607 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637018381225 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN358637018908928 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359367002610087 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359367007922461 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359380000288889 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359380002192790 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359380003120766 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359380004271923 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359380008123518 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359380009779409 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381001148957 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381001823583 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381002359819 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381002666098 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381002810365 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381006465356 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381007921142 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381008506579 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359381008507742 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566010652847 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566011126205 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566011219000 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566011301832 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566012512940 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566013331423 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566014099342 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566014229709 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566015242412 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566015715516 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566015771907 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566015806729 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566016680479 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359566018878626 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567010528623 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567010652084 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567011651002 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567011712945 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567012360629 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567013039354 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567013045468 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567013092155 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567013105726 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567013297879 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567013332783 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567013366724 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567014770643 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0705.3.0.1/SN359567015145472 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN70-1/5.0717.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/5.0717.3.0.1/SN353125020032643 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125020041826 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125021396385 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125022213092 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125022373755 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125022827297 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125023227919 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125023793696 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125024112409 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN353125024443853 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN356992012312904 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN356992013271224 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN356992014442097 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN356992016531988 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN356992016548669 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN356992016651182 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN358637014764689 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN358637017265437 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN359381007251680 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0717.3.0.1/SN359566016416700 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.21.0',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 84.235.75.18)',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 84.235.75.19)',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 84.235.75.20)',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 84.235.75.21)',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352(REAL IP: 67.228.166.110)',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/400',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/401',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.0.0.41/27/352',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.0.1.34/27/300',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.1.0.42/27/352',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/350',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/999',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.2.51/27/999',
'NokiaN70-1/5.0737.3.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/350',
'NokiaN70-1/5.0737.3.0.1/SN351862014901431 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351862015168717 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863010182695 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863010258362 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863011096407 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863011221740 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863011817703 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863011870793 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863012042319 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863012580581 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863013274879 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863013295122 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863013491127 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863015621416 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863015829993 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863016219624 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863016445781 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863016446771 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863017205267 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863018776399 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN351863019414594 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352753014127508 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352753014447849 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352753015118639 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352753015344953 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352753019530037 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020070882 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020145619 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020324701 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020533996 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020542559 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020700603 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020887194 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020896849 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913020950885 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021040074 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021131113 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021170970 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021182140 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021201767 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021243132 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021412018 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021450844 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021451073 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021457682 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021499759 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021549678 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021776792 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021802762 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913021989460 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022078537 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022170284 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022218240 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022283988 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022372146 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022446239 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022621104 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022628760 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022704660 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022735920 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022756546 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022859456 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913022877938 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913023103003 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913023232877 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913023501610 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913023538406 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913023586041 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913023589748 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913023624164 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913023959578 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913024222505 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913024238428 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913024346601 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913024619734 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913025070598 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913025090117 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913025354588 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913025368752 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913025684497 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913025711860 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913025746833 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913025941467 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026008803 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026011005 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026050813 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026082873 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026097962 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026119741 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026147858 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026151611 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026192169 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026194157 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026322857 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026536852 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026582559 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026625937 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026698520 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026817989 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913026832475 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027014719 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027065026 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027220407 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027225521 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027356466 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027443330 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027689593 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027704780 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027780160 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027808086 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913027958212 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028076493 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028080545 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028219457 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028284758 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028418521 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028420808 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028522884 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028579835 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028671343 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028678470 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028730149 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028769097 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028898813 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028916748 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913028932919 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029053160 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029184007 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029257621 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029274097 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029310735 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029447321 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029776513 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029790993 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029912134 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029928197 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029937800 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN352913029981212 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353125021392343 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353125022621443 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353125023029430 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353125023311093 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353125023630906 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353125024212407 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353125024392985 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353125024725044 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353269010076663 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353269011650680 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353269011861188 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353269012943019 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353269014730711 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353269014784346 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010047547 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010240845 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010334390 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010352301 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010605971 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010609262 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010725019 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010744085 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010763721 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010766476 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010856905 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666010929132 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666011419976 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666011452555 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666011565158 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666011805588 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012007432 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012038049 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012072998 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012292042 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012538725 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012639465 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012713393 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012728086 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012751872 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012908639 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666012950573 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666013035531 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666013040580 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353666013062337 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353946010257407 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353946016122472 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353946018755667 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN353946019241758 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN354551016750857 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355521010235006 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355521011180052 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355521012435943 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355521013646886 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355521014853622 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355521015442672 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355521015602549 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355529012451091 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020051722 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020074807 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020176362 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020214304 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020225136 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020270215 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020286641 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020306654 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020384784 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020410555 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020505867 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020706911 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020821165 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020892836 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020913889 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020954651 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020955641 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020968347 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720020989061 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021177708 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021253723 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021312784 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021324763 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021334671 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021430982 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021471234 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021497064 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021590223 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720021998442 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022028462 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022228088 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022291896 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022440634 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022441152 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022517100 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022540052 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022690246 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022820413 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022959609 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720022966059 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023002045 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023116464 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023146776 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023218633 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023249232 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023353158 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023443314 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023450434 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023485315 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023515996 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023728821 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023869799 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720023993581 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024205043 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024209607 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN70-1/5.0737.3.0.1/SN355720024216461 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024417085 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024519971 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024630331 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024631131 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024643854 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024733598 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024966198 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720024967113 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025076260 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025079447 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025178314 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025360862 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025487590 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025651831 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025845334 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025852272 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720025898903 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720026063028 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720026131361 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720026191076 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720026403299 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720026568505 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720026597710 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720026867006 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027081896 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027102908 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027144991 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027166499 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027340383 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027403777 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027507502 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027582265 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027635949 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027671928 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027716764 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027781339 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720027857568 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028087231 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028305518 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028352270 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028531543 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028554701 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028592602 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028628885 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028639072 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028706103 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN355720028757072 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356270011080693 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356270013384085 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356270014239437 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356270019912491 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294010668340 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294010717097 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294011246971 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294012245667 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294012297494 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294013466262 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294014559073 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294014965080 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294015054256 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294015151466 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294015252603 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294015271116 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294015312431 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294015484545 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294015961518 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294016083965 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294016938770 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294017149245 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294017379438 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294017388801 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294017797993 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294017845453 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294018285550 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294018642404 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294018933720 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294018939131 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294019059772 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294019247765 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294019959617 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356294019984656 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356963012783238 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356963016333139 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356963016423872 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356963018772490 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356963019707529 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356966011144203 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992010362075 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992010959862 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992011961081 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992013521081 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992014093452 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992014154437 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992014199762 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992016237883 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992016375550 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992016461707 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992016692996 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992016997288 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992017286467 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992017371368 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992018280071 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN356992019615176 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357093000006720 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357093003556200 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357093004098723 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357093007691227 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927001388282 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927002628074 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927003234690 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927003746750 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927003918508 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927006049541 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927006557154 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927006566650 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927009220636 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357927009368807 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968000347010 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968000396835 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968000859196 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968001122339 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968004200744 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968004522261 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968005363012 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968007865410 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN357968007899831 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080010343523 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080010783207 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080010900520 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080011082567 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080011566486 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080011612256 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080012297362 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080012954004 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080013631387 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080013780531 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080014435259 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080014442537 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080014767651 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080014870026 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080015268089 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080015612682 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080015854532 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080016056657 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080016154718 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080016389207 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080016651978 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080016668899 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080016841215 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080016984742 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017008863 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017010059 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017054818 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017230368 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017250424 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017251349 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017686353 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017695826 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017703588 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080017993874 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018274589 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018430348 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018483818 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018527952 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018683136 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018733436 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018887711 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018888388 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080018927194 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019079383 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019214279 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019335397 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019467869 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019474873 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019526243 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019644731 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019814714 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019818061 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358080019824408 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358246030265968 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358246030491739 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637010636980 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637011580658 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637011713739 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637012159452 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637013401580 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637017946333 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637018169927 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637018307022 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN358637018538261 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359367001845296 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359367003946290 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359367004461653 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359367004912176 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359367005926910 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359380001221541 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359380003069211 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359380005042810 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359380006285772 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359380009997795 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381000638198 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381000674052 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381002088996 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381002659408 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381003553873 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381004765195 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381005366464 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381006692785 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381007515928 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381009033706 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381009242760 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359381009428302 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359566010345038 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359566011514061 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359566013441313 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359567010327604 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359567012027301 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/5.0737.3.0.1/SN359726006433038 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70-1/SymbianOS/8.0 Series60/2.6',
'NokiaN70/ 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/ 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70/ 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70/ 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/401',
'NokiaN70/ 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.0.1.34/27/300',
'NokiaN70/ 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.1.0.42/27/352',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.2.51/27/999',
'NokiaN70/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/350',
'NokiaN70//SN353089020012429 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089020074452 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089020164139 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089020165870 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089020173718 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089020203044 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089021014135 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089021078197 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089021137035 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089021722810 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089021768847 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089021958745 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022164020 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022179432 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022207605 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022357939 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022363408 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022424994 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022760256 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022773259 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089022814657 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089023289206 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089023562420 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089023758093 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089023760081 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089023784990 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089023803881 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089023883784 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089023922673 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089024585925 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089024839587 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089024958221 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089025079290 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089025191764 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089025398047 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089025637675 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089025687506 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089025846656 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089025855624 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089025947967 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089026730990 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089026823571 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089027035142 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089027207881 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089027222856 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089027901871 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089027914825 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089028132484 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089028927164 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089029161896 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089029220379 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089029229297 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089029367089 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353089029922081 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667010020385 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667010031291 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667010222940 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667010919214 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667010923091 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667011101903 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667011201067 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667011416947 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667011627220 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667011636288 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN353667011659876 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN354533012735819 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN354533015467253 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN354533017329485 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN354568011469473 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN354568018214781 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN354841020064423 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN355721023678263 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356295019071014 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966010559161 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966011598853 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966011956853 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966011974427 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966012079937 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966012081495 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966012095586 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966012122430 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966012123305 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966012344745 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966013143088 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966013170842 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966013181351 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966013257557 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966013262334 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966013824646 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966013949484 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966014107066 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966014108080 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966014266177 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966014272712 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966014302949 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966015186481 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966015484092 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966015775507 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966015865316 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966015888938 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966015961354 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966016000384 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966016113104 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966016431225 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966016980890 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966017148778 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966017152259 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966017761877 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966017779119 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966018001539 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966018406290 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966018587420 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966018823270 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966018836215 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966018938078 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966018966905 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966019774357 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN356966019816216 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359400004880372 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359400008003708 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570010137502 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570010364692 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570010399516 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570010475159 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570010583002 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570011192514 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570011336061 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570011350484 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570011370748 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570011408159 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570011952321 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570012257696 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570012670153 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570012815360 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570013905889 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570015283566 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570015296154 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570016529348 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570016532052 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570016585480 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570016763483 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570016965708 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570016975855 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018054261 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018167121 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018180223 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018249705 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018495878 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018528207 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018570555 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018637917 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018653450 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018669241 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570018998681 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019004422 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019026318 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019030393 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019050698 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019323947 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019697886 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019706679 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019713733 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359570019848489 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70//SN359726001865762 5.0734.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/5.0625.2.6.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/5.0625.2.6.1/SN352947020701161 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/5.0625.2.6.1/SN357949006604521 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/5.0717.2.5.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN70/5.0717.2.5.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.2.51/27/800'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n70_ver1');
      }
  }



  function test_nokia_n71_ver1() {
    foreach(array(
'NokiaN71-1',
'NokiaN71-1/2.0613 Series60/3.0  Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN71-1/2.0613 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN71-1/3.0620 Series60/3.0  Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN71-1/4.0626 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n71_ver1');
      }
  }



  function test_nokia_n72_ver1() {
    foreach(array(
'NokiaN72',
'NokiaN72/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN72/ 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN72//SN353089020841488 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089021951385 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089023588193 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089028398101 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089028581490 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089028656771 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089029397193 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089029542707 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089029716491 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353089029731615 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353667010039716 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353667011132759 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353667011948626 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN353667012050372 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN354841020008198 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN354841020336631 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN354841020825310 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN356295014591099 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72//SN356966015838958 5.0741.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN72/2.0617.1.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'NokiaN72/2.0617.1.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN72/2.0617.1.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN72/2.0617.1.0.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.2.51/27/999',
'NokiaN72/2.0617.1.0.3/SN359400000113166 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400000406651 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400000623453 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400000723162 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400000746346 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400000768803 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400001171403 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400001189249 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400001301935 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400001906550 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400003455002 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400004012158 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400004198486 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400005318752 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400005753891 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400006053721 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400006372311 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400006386972 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400006429236 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400008235987 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400008360199 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400008837774 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359400009467993 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726000406063 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726000972452 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726001485389 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726001847406 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726002299037 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726002304795 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726002431051 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726002514302 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726004240658 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726004567183 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726004592439 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726004826050 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726005395675 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0617.1.0.3/SN359726005510661 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0625.2.0.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN72/2.0635.2.0.2 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN72/2.0635.2.0.2/SN354533010364588 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533010546101 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533011143627 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533011958651 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533012045003 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533012045334 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533012574655 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533013185337 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533014349668 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533014418224 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533014433553 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533014462883 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533015454111 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533015735337 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533015840822 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354533015990981 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354568010743027 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN354568011666292 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726000300472 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726000419835 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726005921660 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726006102815 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726006780669 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726007535294 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726008081389 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726008566660 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726008863711 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/2.0635.2.0.2/SN359726009387983 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/400',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/401',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.2.2.51/27/352',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.0.1.34/27/300',
'NokiaN72/5.0706.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/351',
'NokiaN72/5.0706.4.0.1/SN354533014370342 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533014394805 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533014406294 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533016012140 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533016487573 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533016497168 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533016979264 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533016995336 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533017012974 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533017043557 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533018830135 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354533018834012 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568012542237 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568012594253 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568013107527 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568013557879 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568013721962 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568014785982 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568016438184 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568016778258 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568016988253 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568017168129 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568017614171 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568017699222 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568018082899 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568018154441 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568018245645 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568018262954 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568018420164 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568018471688 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568019016672 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568019212313 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568019292331 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568019378247 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568019507803 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568019521408 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354568019711736 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841020143946 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841020305545 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841021124267 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841021535892 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841021997621 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841022111776 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841022159239 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841022963929 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841024059940 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841024119785 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841024149642 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841024184599 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841024238932 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841024735317 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN354841024838962 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295010422828 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295011188683 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295011196140 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295011364045 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295011433337 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295011508526 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295012931198 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013106055 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013159591 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013259201 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013339292 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013370222 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013487091 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013855180 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013889098 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295013945379 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295014186056 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295014297747 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295014408120 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295014411777 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295014414409 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295014622563 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295014697946 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295014780593 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295015295419 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295015306299 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295015331065 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295015422443 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295016024966 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295016141471 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295016149664 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295016484376 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295016900108 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295016948669 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295017647831 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295017764271 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018002028 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018085577 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018185146 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018286829 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018309407 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018423414 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018429056 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018629150 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018636171 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295018909990 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295019027313 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295019897202 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356295019968300 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966010377283 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966010380394 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966010382671 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966010858043 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966010986349 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966011121920 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966011236835 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966011247709 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966011339852 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966011357730 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966011593375 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN356966011632173 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN357949008232073 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359336020100348 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359336020219353 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359400001880912 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359400003128336 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359400004463310 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359400005803118 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359726000509924 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359726003626030 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359726007878173 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359824010155059 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359824010374494 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359824010706323 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359824010783942 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359824010830024 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0706.4.0.1/SN359824012136172 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'NokiaN72/5.0819.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/350',
'NokiaN72/5.0819.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/351',
'NokiaN72/5.0819.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN72/5.0819.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.2.2.51/27/352',
'NokiaN72/5.0819.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/999',
'NokiaN72/5.0819.4.0.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/YAKI 7.2.2.51/27/350',
'NokiaN72/5.0819.4.0.1/SN353089021038332 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089021811795 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089022445221 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089022782508 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089024170538 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089024340479 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089024814648 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089025842812 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089026710026 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089026806642 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089026959508 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089027305115 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089027930565 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089027991708 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089028324289 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089029145725 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353089029356801 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353667011638268 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353667016630443 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353667017303511 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN353667017622761 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533011523265 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533012311090 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533013298338 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533013485455 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533013576691 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533013768066 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533014409876 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533015536172 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533016064380 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354533019459678 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354568015220534 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354841020353156 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354841021579494 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354841021989842 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN354841023451619 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020059483 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020140218 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020155356 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020210730 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020237121 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020274603 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020498111 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020525889 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020571313 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020701183 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020707651 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020812766 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721020822864 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021201399 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021299963 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021376852 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021484029 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021492964 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021610854 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021720109 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021790821 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021792215 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021801321 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021816998 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721021877867 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721022061362 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721022430302 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721022436689 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023202999 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023373790 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023405360 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023411541 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023412002 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023440623 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023468335 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023530746 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023549100 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023583000 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023671177 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023683024 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023690987 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023705728 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023767199 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023848494 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023872411 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023888516 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721023951447 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721024019889 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721024046569 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721024146310 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721024187561 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721024267793 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721024398937 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721024431258 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721024615330 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721025246804 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721025542871 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721025557713 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721025641905 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721025716855 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721025855257 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721026724759 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721026858334 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721028106146 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721028731133 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721029571363 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN355721029573997 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295012353229 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295012439515 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295013499948 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295014594713 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295015830769 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295017806635 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295019379888 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295019680905 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356295019735790 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966010861435 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966011557164 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966011639129 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966012039543 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966014815734 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966015200696 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966015884093 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966016056667 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966017700453 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966017707953 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966017724115 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966017733215 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN356966018442816 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359400000933373 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359400000983378 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359400001004422 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359400004500137 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359400004908207 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359400007395857 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570010369972 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570011942710 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570012239348 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570015323248 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570016558297 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570016745670 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570017210450 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570018113869 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN72/5.0819.4.0.1/SN359570018307503 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n72_ver1');
      }
  }



  function test_nokia_n73_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.1; U; [cs]; NokiaN73-1/4.0747.31.0.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; [en]; NokiaN73-1/3.0638.0.0.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; [en]; NokiaN73-1/3.0704.1.0.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; [en]; NokiaN73-1/4.0743.2.8.2 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; [it]; NokiaN73-1/3.0638.0.0.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; [ro]; NokiaN73-1/3.0638.0.0.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIAN73',
'NOKIAN73/UC Browser7.0.0.41/28/350',
'NOKIAN73/UC Browser7.0.0.41/28/351',
'NOKIAN73/UC Browser7.0.0.41/28/352',
'NokiaN73',
'NokiaN73-1',
'NokiaN73-1/2.0 (05.51) (SymbianOS/9.2; U; Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'NokiaN73-1/2.0628.0.0.1 S60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/2.0628.0.0.3 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/2.0628.0.0.8 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0637.0.0.14 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0638.0.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0638.0.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.12.0',
'NokiaN73-1/3.0638.0.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN73-1/3.0638.0.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN73-1/3.0638.0.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 82.178.69.251)',
'NokiaN73-1/3.0638.0.0.2 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0638.0.0.2 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN73-1/3.0638.0.0.30 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0638.0.0.30 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'NokiaN73-1/3.0638.0.0.30 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN73-1/3.0638.0.0.43 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0649.0.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0649.0.0.31 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0704.1.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0705.1.0.31 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/3.0705.1.0.31 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'NokiaN73-1/3.0705.1.0.31 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.3.0',
'NokiaN73-1/3.0713.1.0.2 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0723.2.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0726.2.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0726.2.1.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0727.2.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0727.2.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN73-1/4.0727.2.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN73-1/4.0727.2.3.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0734.2.0.2 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0734.2.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0735.3.0.2 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0735.3.0.2 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'NokiaN73-1/4.0735.3.0.2 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'NokiaN73-1/4.0736.2.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0736.3.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0736.3.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN73-1/4.0736.3.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0736.3.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN73-1/4.0736.3.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN73-1/4.0736.3.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN73-1/4.0736.3.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0738.3.1.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0747.31.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0750.31.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0808.4.2.2 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0812.4.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0812.4.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN73-1/4.0812.4.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0812.4.3.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0814.4.1.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0839.42.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0839.42.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'NokiaN73-1/4.0839.42.1.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0839.42.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0839.42.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 # nontouch',
'NokiaN73-1/4.0839.42.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN73-1/4.0839.42.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN73-1/4.0839.42.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN73-1/4.0839.42.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN73-1/4.0839.42.2.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0839.42.3.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0847.43.3.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-1/4.0850.43.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-2',
'NokiaN73-2/2.0626 S60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-2/2.0628.0.0.5 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-2/3.0638.0.0.1_rm132 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-2/4.0839.42.1.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73-5/3.0628.0.0.6 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN73/UC Browser6.3.3.28/28/400',
'NokiaN73/UC Browser7.0.0.41/28/350',
'NokiaN73/UC Browser7.0.0.41/28/351',
'NokiaN73/UC Browser7.0.0.41/28/352',
'NokiaN73/UC Browser7.0.0.41/28/400',
'NokiaN73/UC Browser7.0.0.41/28/401',
'NokiaN73/UCWEB6.3.3.28/28/400',
'NokiaN73/UCWEB7.0.0.33/28/300',
'NokiaN73/UCWEB7.0.2.37/28/999',
'NokiaN73/UCWEB7.1.0.42/28/351',
'NokiaN73/UCWEB7.2.0.46/28/999',
'NokiaN73/UCWEB7.2.1.50/28/351',
'NokiaN73/UCWEB7.2.1.50/28/352',
'NokiaN73/UCWEB7.2.1.50/28/999',
'NokiaN73/UCWEB7.2.2.51/28/351',
'NokiaN73/UCWEB7.2.2.51/28/401',
'NokiaN73/UCWEB7.2.2.51/28/999',
'NokiaN73/UCWEB7.3.0.55/28/350',
'NokiaN73/UCWEB7.3.0.55/28/6500'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n73_ver1');
      }
  }



  function test_nokia_n73_ver1_softbank() {
    foreach(array(
'SoftBank/1.0/705NK/NKJ001 Series60/3.0 NokiaN73/3.0650 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n73_ver1_softbank');
      }
  }



  function test_nokia_n75_ver1() {
    foreach(array(
'NokiaN75',
'NokiaN75-3/3.0 (10.1.282); SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'NokiaN75-3/3.0 (10.2.055); SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN75-3/3.0(20.1.172) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n75_ver1');
      }
  }



  function test_nokia_n76_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN76',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN76-1/10.0.032 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN76-1/10.0.035 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN76-1/12.0.006 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN76-1/30.0.015 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN76-1/31.0.014 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIAN76/UC Browser7.0.0.41/28/352',
'NOKIAN76/UC Browser7.0.0.41/28/401'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n76_ver1');
      }
  }



  function test_nokia_n76_ver1_sub200041() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN76-1/20.0.041 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n76_ver1_sub200041');
      }
  }



  function test_nokia_n77_ver1() {
    foreach(array(
'NokiaN77-1',
'NokiaN77-1/2.0720.1.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN77-1/3.0747.2.0.3 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN77-1/3.0838.22.0.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN77/UC Browser7.0.0.41/28/401'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n77_ver1');
      }
  }



  function test_nokia_n78_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/10.136; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/10.136; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/10.136; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/11.043; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/11.043; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/11.043; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/12.046; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/12.046; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/12.046; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/13.052; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/20.149; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/21.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/21.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/21.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.114.169.10)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/30.011; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/30.014; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-1/30.014; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 87.109.255.203)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-5/10.136; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-5/11.043; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-5/12.046; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-5/20.149; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-5/21.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN78-5/30.011; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIAN78',
'NOKIAN78/UC Browser7.0.0.41/28/351',
'NOKIAN78/UC Browser7.0.0.41/28/352',
'NOKIAN78/UCWEB7.2.1.50/28/352'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n78_ver1');
      }
  }



  function test_nokia_n79_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/10.045; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/10.046; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/11.049; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/11.049; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/20.174; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/30.019; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/31.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/31.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-1/32.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-3/10.018; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-3/11.049; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN79-3/20.174; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIAN79',
'NOKIAN79/UC Browser7.0.0.41/28/351',
'NOKIAN79/UC Browser7.0.0.41/28/352',
'NOKIAN79/UC Browser7.2.2.51/28/352',
'NOKIAN79/UCWEB7.2.0.46/28/6500'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n79_ver1');
      }
  }



  function test_nokia_n80_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N80/; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N80/; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/.001; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/.049; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/10.0.018; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/10.0.021; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/10.0.032; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/11.0.045; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/12.0.013; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/12.0.013; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/12.0.013; 9730) Opera 8.65 [no]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/15.0.015; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/20.0.016; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/20.0.056; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/20.0.062; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/20.0.062; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/20.0.062; 9730) Opera 8.65 [it]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/21.0.010; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/21.0.016; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/21.0.016; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/3.009; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/30.0.015; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/30.0.018; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/30.0.019; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/30.0.019; 9730) Opera 8.65 [it]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/30.0.019; 9730) Opera 8.65 [ru]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/31.0.015; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0726.2.0.1; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0726.2.1.1; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0727.2.2.1; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0736.3.2.1; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0738.3.1.1; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0750.31.2.1; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0812.4.0.1; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0812.4.2.1; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0812.4.2.1; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0812.4.2.1; 9730) Opera 8.65 [th]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0839.42.2.1; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Series 60/4.0850.43.0.1; 9730) Opera 8.65 [en]',
'Mozilla/5.0 (SymbianOS/9.1; U; [ar]; SymbianOS/9.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; [fr]; SymbianOS/9.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; [id]; SymbianOS/9.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; [it]; SymbianOS/9.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; ar) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; de) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; el) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; en) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.1; U; en-us) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.1; U; fi) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; fr) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.1; U; id) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (compatible; Jataayu/jB5/5.0; Symbian Series 60; Generic; en;)',
'NOKIAN80',
'NOKIAN80/UC Browser7.0.0.41/28/351',
'NOKIAN80/UC Browser7.0.0.41/28/352',
'NokiaN80-1',
'NokiaN80-1/3.0 (3.0611.0.8) Series60/3.0  Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN80-1/3.0 (3.0611.0.8) Series60/3.0  Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 217.171.129.74)',
'NokiaN80-1/3.0 (3.0617.0.5) Series60/3.0  Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN80-1/3.0 (3.0617.0.5) Series60/3.0  Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'NokiaN80-1/3.0 (3.0617.0.5) Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN80-1/3.0 (4.0623.0.22) Series60/3.0  Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN80-1/3.0 (4.0623.0.22) Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN80-1/3.0 (4.0632.0.10) Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n80_ver1');
      }
  }



  function test_nokia_n810_ver1() {
    foreach(array(
'Mozilla/5.0 (X11; U; Linux armv6l; de-DE; rv:1.9a6pre) Gecko/20071128 Firefox/3.0a1 Tablet browser 0.2.2 RX-34+RX-44_2008SE_2.2007.51-3',
'Mozilla/5.0 (X11; U; Linux armv6l; de-DE; rv:1.9a6pre) Gecko/20080828 Firefox/3.0a1 Tablet browser 0.3.7 RX-34+RX-44+RX-48_DIABLO_5.2008.43-7',
'Mozilla/5.0 (X11; U; Linux armv6l; en-GB; rv:1.9a6pre) Gecko/20080828 Firefox/3.0a1 Tablet browser 0.3.7 RX-34+RX-44+RX-48_DIABLO_5.2008.43-7',
'Mozilla/5.0 (X11; U; Linux armv6l; en-US; rv:1.9a6pre) Gecko/20080828 Firefox/3.0a1 Tablet browser 0.3.7 RX-34+RX-44+RX-48_DIABLO_5.2008.43-7',
'Mozilla/5.0 (X11; U; Linux armv6l; it-IT; rv:1.9a6pre) Gecko/20080828 Firefox/3.0a1 Tablet browser 0.3.7 RX-34+RX-44+RX-48_DIABLO_5.2008.43-7'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n810_ver1');
      }
  }



  function test_nokia_n81_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/1.00 Profile/MIDP-2.0 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/10.0.026 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/10.0.032 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/10.0.053 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/10.0.058 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/11.0.045 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/11.0.045 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/11.0.045 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/20.0.056 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/21.0.010 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-1/21.0.010 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/10.0.032 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/10.0.032 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/10.0.035 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/11.0.023 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/11.0.045 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/11.0.045 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/11.0.045 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/20.0.056 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/20.0.056 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/20.0.057 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/21.0.002 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/21.0.008 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/21.0.010 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/21.0.010 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 94.97.243.171)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN81-3/24.0.002 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; [en]; Series60/3.2 NokiaN81-1/1.00 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIANokia N81',
'NOKIANokia N81/UC Browser7.0.0.41/28/351',
'NOKIANokia N81/UC Browser7.0.0.41/28/352',
'NOKIANokia N81/UC Browser7.0.0.41/28/401',
'NOKIANokia N81/UCWEB7.2.0.46/28/999',
'NOKIANokia N81/UCWEB7.2.2.51/28/352',
'NOKIANokia N81/UCWEB7.2.2.51/28/800',
'NokiaN81-3/20.0.056'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n81_ver1');
      }
  }



  function test_nokia_n82_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/10.0.046; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/10.0.046; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/10.0.046; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.12.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/11.0.117; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/20.0.062; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/20.0.062; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/20.0.062; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/20.0.062; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 94.96.100.243)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/20.0.062; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 94.99.87.41)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/20.0.221 Profile/MIDP-2.0 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413 Nokia/N82JP',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/30.0.019; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/30.0.019; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/31.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN82/35.0.002; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIAN82',
'NOKIAN82/UC Browser7.0.0.41/28/350',
'NOKIAN82/UC Browser7.0.0.41/28/351',
'NOKIAN82/UC Browser7.0.0.41/28/352',
'NOKIAN82/UC Browser7.0.0.41/28/400',
'NOKIAN82/UC Browser7.0.0.41/28/401',
'NOKIAN82/UCWEB7.2.1.50/28/352',
'NOKIAN82/UCWEB7.2.2.51/28/350',
'NOKIAN82/UCWEB7.2.2.51/28/999',
'NokiaN82',
'NokiaN82/1.0 (10.1.046) SymbianOS/9.2 Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN82/1.0 (20.1.062) SymbianOS/9.2 Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n82_ver1');
      }
  }



  function test_nokia_n85_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/10.045; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/10.045; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/10.045; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/11.047; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/11.047; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/20.174; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/20.175 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/30.019; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/30.101; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/31.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-1/31.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'NOKIAN85/UC Browser7.0.0.41/28/351',
'NOKIAN85/UC Browser7.0.0.41/28/352',
'NOKIAN85/UC Browser7.0.0.41/28/401',
'NOKIAN85/UCWEB7.2.2.51/28/999',
'NOKIAN85/UCWEB7.3.0.55/28/6500',
'NokiaN85/2.0 (05.51) (SymbianOS/9.2; U; Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'NokiaN85/SymbianOS/9.3 Series60/3.2 Release/10.045; Mozilla/5.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 AppleWebKit/413 (KHTML,like Gecko) Safari/413',
'NokiaN85/UCWEB7.2.0.46/28/999'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n85_ver1');
      }
  }



  function test_nokia_n85_ver3() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-3/11.047; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-3/20.174; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-3/30.019; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN85-3/31.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n85_ver3');
      }
  }



  function test_nokia_n86_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaN86-1/10.016_tmo; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaN86-1/10.086;; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13380',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaN86-1/10.086;; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13380 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaN86-1/11.043;; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13380',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaN86-1/11.043;; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13380 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaN86-1/20.115;; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.13380',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaN86-1/21.006;; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424',
'Mozilla/5.0 (SymbianOS/9.3; Series60/3.2 NokiaN86-1/30.009;; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.1.19424'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n86_ver1');
      }
  }



  function test_nokia_n900_ver1() {
    foreach(array(
'Mozilla/5.0 (X11; U; Linux armv7l; de-DE; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; en-GB; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; en-US; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; fi-FI; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; fr-FR; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; it-IT; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; it-IT; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (X11; U; Linux armv7l; nl-NL; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; pl-PL; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; pt-PT; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; ru-RU; rv:1.9.2b6pre) Gecko/20100318 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; ar-SY; rv:1.9.2a1pre) Gecko/20091127 Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; de-DE; rv:1.9.2a1pre) Gecko/20090928 Firefox/3.5 Maemo Browser 1.4.1.22 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; de-DE; rv:1.9.2a1pre) Gecko/20091127 Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; en-GB; rv:1.9.2a1pre) Gecko/20090928 Firefox/3.5 Maemo Browser 1.4.1.21 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; en-GB; rv:1.9.2a1pre) Gecko/20091127 Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; en-US; rv:1.9.2a1pre) Gecko/20090928 Firefox/3.5 Maemo Browser 1.4.1.21 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; en-US; rv:1.9.2a1pre) Gecko/20090928 Firefox/3.5 Maemo Browser 1.4.1.22 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; en-US; rv:1.9.2a1pre) Gecko/20091127 Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; fi-FI; rv:1.9.2a1pre) Gecko/20090928 Firefox/3.5 Maemo Browser 1.4.1.22 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; fr-FR; rv:1.9.2a1pre) Gecko/20090928 Firefox/3.5 Maemo Browser 1.4.1.21 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; fr-FR; rv:1.9.2a1pre) Gecko/20090928 Firefox/3.5 Maemo Browser 1.4.1.22 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; fr-FR; rv:1.9.2a1pre) Gecko/20091127 Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; it-IT; rv:1.9.2a1pre) Gecko/20090928 Firefox/3.5 Maemo Browser 1.4.1.21 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; it-IT; rv:1.9.2a1pre) Gecko/20091127 Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; nl-NL; rv:1.9.2a1pre) Gecko/20091127 Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900',
'Mozilla/5.0 (X11; U; Linux armv7l; pl-PL; rv:1.9.2a1pre) Gecko/20091127 Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n900_ver1');
      }
  }



  function test_nokia_n90_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N90/5.0607.7.3; 6936) Opera 8.50 [tr]',
'NokiaN90-1',
'NokiaN90-1/2.0527.2.3 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/2.0527.2.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/2.0530.3.5 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/2.0530.3.5/SN356633000054450 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/2.0530.3.5/SN356634000248316 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/3.0 (545.5.1) SymbianOS/9.2; U; Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/3.0535.4.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/3.0535.4.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UCWEB7.2.0.46/27/999',
'NokiaN90-1/3.0545.5.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/3.0545.5.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1/UC Browser7.0.0.41/27/352',
'NokiaN90-1/3.0545.5.1/SN356634000056289 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/5.0607.7.3 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/5.0607.7.3/SN356633001093374 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/5.0607.7.3/SN356634002547160 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN90-1/5.0607.7.3/SN356634004438665 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n90_ver1');
      }
  }



  function test_nokia_n91_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N91/2.10.013; 9712) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N91/2.10.013; 9730) Opera 8.65 [en]',
'Mozilla/4.0 (compatible; MSIE 6.0; Symbian OS; Nokia N91/2.20.008; 9730) Opera 8.65 [ru]',
'Mozilla/5.0 (SymbianOS/9.1; U; [en]; SymbianOS/9.1 Series60/3.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NOKIAN91',
'NOKIAN91/UC Browser7.0.0.41/28/351',
'NOKIAN91/UC Browser7.0.0.41/28/352',
'NokiaN91',
'NokiaN91-1',
'NokiaN91-1/3.0 (1.00.001.15) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91-1/3.0 (1.10.030) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91-1/3.0 (2.00.052) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91-1/3.0 (2.10.013) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91-1/3.0 (2.10.013) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'NokiaN91-1/3.0 (2.20.008) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91-1/3.0 (545.5.1) SymbianOS/9.2; U; Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91-2',
'NokiaN91-2/3.0 (3.00.060) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91-2/3.0 (3.10.023) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91/3.0 (1.10.030) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91/3.0 (2.00.052) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91/3.0 (2.20.008) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91/3.0 (3.00.060) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN91/3.0 (3.10.023) SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n91_ver1');
      }
  }



  function test_nokia_n92_ver1() {
    foreach(array(
'NokiaN92-1',
'NokiaN92-1/2.0 (2.0646.0.0.2) S60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN92-1/2.0 (2.0708.1.0.16) S60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN92-1/2.0 (5.0748.2.0.4) S60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n92_ver1');
      }
  }



  function test_nokia_n93_ver1() {
    foreach(array(
'NokiaN93-1',
'NokiaN93-1/10.0.025 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93-1/11.0.034 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93-1/20.0.041',
'NokiaN93-1/20.0.041 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93-1/20.0.041 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1, NokiaN93-1/20.0.041 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93-1/20.0.058 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n93_ver1');
      }
  }



  function test_nokia_n93i_ver1() {
    foreach(array(
'NokiaN93i-1',
'NokiaN93i-1/10.0.025 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93i-1/11.0.009 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93i-1/20.0.084 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93i-1/30.0.013 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93i/10.0.025 SymbianOS/9.1 Series60/3.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'NokiaN93i/2.0 (05.51) (SymbianOS/9.2; U; Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1)  UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n93i_ver1');
      }
  }



  function test_nokia_n95_8gb_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/20.2.011; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB-3/1.2.011 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB-3/1.2.011; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB-3/20.2.005 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB-3/20.2.005; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB-3/31.2.008 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB-3/32.2.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB-3/35.0.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB-3/35.2.002; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/10.0.021; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/10.0.021; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/10.0.021; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/10.0.021; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/11.0.026; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/11.0.026; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/11.0.026; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/15.0.015 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/15.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/15.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/15.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.48.103.171)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/15.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.48.124.211)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/15.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.49.46.225)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/20.0.016 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/20.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/20.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/20.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/20.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/30.0.018 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/30.0.018; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/30.0.018; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/30.0.018; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.21.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/30.0.018; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 84.235.75.20)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.51.111.245)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.146)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.147)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.148)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.149)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.150)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/31.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 62.231.248.130)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/35.0.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95_8GB/35.0.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n95_8gb_ver1');
      }
  }



  function test_nokia_n95_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/10.2.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/10.2.006; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/11.2.009; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/20.2.011 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/30.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/35.0.002; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/35.2.001 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95-3/35.2.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/10.0.018; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/10.0.018; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413,gzip(gfe) (via translate.google.com)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/11.0.026; Profile MIDP-2.0 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/11.0.026; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/11.0.026; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/12.0.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/12.0.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/12.0.013; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 94.96.238.119)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/12.0.014; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/13.0.003 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/13.0.003; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/14.0.001; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/20.0.015 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/20.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/20.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/20.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/21.0.016 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/21.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/21.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/21.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.51.139.79)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/21.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.146)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/21.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.147)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/21.0.016; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.148)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/30.0.015 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/30.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/30.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/30.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/30.0.015; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.014; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017 Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.249.144.99)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.249.30.155)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.50.88.192)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.149)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 212.118.143.150)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 84.235.75.18)',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/35.0.002; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/35.0.002; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'NOKIAN95',
'NOKIAN95/GoBrowser/160',
'NOKIAN95/UC Browser7.0.0.41/28/351',
'NOKIAN95/UC Browser7.0.0.41/28/352',
'NokiaN95',
'NokiaN95/1.0 (11.1.010) SymbianOS/9.2 Series60/3.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n95_ver1');
      }
  }



  function test_nokia_n96_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413, Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.10; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.10; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.10; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 82.178.69.74)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.11; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.11; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.20; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.20; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.20; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/1.20; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/2.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/2.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/2.10; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/3.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/3.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/3.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.51.110.227)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/3.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 188.52.75.118)',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/3.01; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-1/3.01; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-3/1.10; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-3/1.11; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-3/1.20; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-3/2.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaN96-3/3.00; Profile/MIDP-2.1 Configuration/CLDC-1.1;) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NokiaNokia N96'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n96_ver1');
      }
  }



  function test_nokia_n97_mini_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/10.0.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.17125',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/10.0.020; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/10.0.020; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124 UNTRUSTED/1.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/10.0.020; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.045; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.045; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UNTRUSTED/1.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.045; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.045; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.102; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.102; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UNTRUSTED/1.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.102; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.102; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.104; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.105; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/11.0.105; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/12.0.110; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-4/12.0.110; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n97_mini_ver1');
      }
  }



  function test_nokia_n97_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/10.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) WicKed/7.1.12344',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/10.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) WicKed/7.1.12344 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/10.0.012; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) WicKed/7.1.12344 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/11.0.021; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.12344',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/11.0.021; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.12344 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/11.0.021; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.12344 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/11.0.021; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.12344 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/12.0.024; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.12344',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/12.0.026; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.13841',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/12.0.026; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.13841 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/12.0.026; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.13841 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/12.0.026; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.13841 UP.Link/6.5.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.019; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.019; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.024; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.027; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.027; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/21.0.045; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/21.0.045; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/21.0.102; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/21.0.102; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4(REAL IP: 82.178.73.134)',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/21.0.104; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/21.0.105; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/21.0.105; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4 UP.Link/6.3.0.0.0',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/22.0.110; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/22.0.110; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4(REAL IP: 84.235.75.18)',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-3/10.2.012; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) WicKed/7.1.12344',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-3/11.2.021; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.12344',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-3/12.2.024; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG7.1.12344',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-3/12.2.026; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG7.1.13841',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-3/20.2.019; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-3/21.2.045; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-3/21.2.102; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-3/22.2.110; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.4',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 NokiaN97-1/10.0.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 NokiaN97/10.0.001; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Safari/525'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_n97_ver1');
      }
  }



  function test_nokia_ngage_ver1() {
    foreach(array(
'Mozilla/4.1 (compatible; MSIE 5.0; Symbian OS; N-Gage;452) Opera 6.20  [en]',
'NokiaN-Gage/1.0 (4.03) SymbianOS/6.1 Series60/0.9 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'NokiaN-Gage/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_ngage_ver1');
      }
  }



  function test_nokia_ngageqd_ver1() {
    foreach(array(
'NokiaN-GageQD',
'NokiaN-GageQD/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'NokiaN-GageQD/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/26/350',
'NokiaN-GageQD/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/26/351',
'NokiaN-GageQD/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/26/352',
'NokiaN-GageQD/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0/UC Browser7.0.0.41/26/401',
'NokiaN-GageQD/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0/UCWEB7.2.2.51/26/999'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_ngageqd_ver1');
      }
  }



  function test_nokia_rh27_ver1() {
    foreach(array(
'NOKIA-RH-27/V H190V0400.nep.0 UP.Browser/6.2.2.1.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_rh27_ver1');
      }
  }



  function test_nokia_rh48_ver1() {
    foreach(array(
'NOKIA-RH-48/V J100V1500.nep.0 UP.Browser/6.2.2.1.c.1.102 (GUI) MMP/2.0',
'NOKIA-RH-48/V J190V0600.nep.0 UP.Browser/6.2.2.1.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_rh48_ver1');
      }
  }



  function test_nokia_rh_34_ver1() {
    foreach(array(
'NOKIA-RH-34/V H190V0800.nep.0 UP.Browser/6.2.2.1.c.1.102 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_rh_34_ver1');
      }
  }



  function test_nokia_x3_ver1() {
    foreach(array(
'NokiaX3-00/5.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NokiaX3-00/5.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'NokiaX3-00/5.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420  UP.Link/6.3.0.0.0',
'NokiaX3-00/5.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'NokiaX3-00/5.0 (03.60) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.3.1.13.0',
'NokiaX3-00/5.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NokiaX3-00/5.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1  UNTRUSTED/1.0',
'NokiaX3-00/5.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'NokiaX3-00/5.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'NokiaX3-00/5.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.3.0.0.0',
'NokiaX3-00/5.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.5.0.0.0',
'NokiaX3-00/5.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'NokiaX3-00/5.0 (04.11) Profile/MIDP-2.1 Configuration/CLDC-1.1 nokiax3-00/UC Browser7.0.0.41/70/352',
'NokiaX3-00/5.0 (08.40) Profile/MIDP-2.1 Configuration/CLDC-1.1',
'NokiaX3-00/5.0 (08.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+',
'NokiaX3-00/5.0 (08.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+ UP.Link/6.5.0.0.0',
'NokiaX3-00/5.0 (p) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420  (KHTML, like Gecko) Safari/420 ',
'NokiaX3-00/5.0 (p) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/420+'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_x3_ver1');
      }
  }



  function test_nokia_x6_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaX6-00.1/20.2.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaX6-00/10.5.089; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.2.3.1',
'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaX6-00/20.0.005; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.3',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 NokiaX6-00/11.0.077; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 NokiaX6-00/12.0.091; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 NokiaX6-00/12.0.091; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 NokiaX6-00/12.0.091; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.1.15.0',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 NokiaX6-00/12.0.091; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413(REAL IP: 84.235.75.19)',
'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 NokiaX6-00/12.0.091; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
'NokiaX6-00/UC Browser7.0.0.41/50/350',
'NokiaX6-00/UC Browser7.0.0.41/50/352',
'NokiaX6-00/UCWEB7.2.2.51/50/800'
    ) as $ua) {
        $this->checkUA($ua, 'nokia_x6_ver1');
      }
  }



  ############################################################


  function nokiaTest() {
    $this->UnitTestCase('nokia Test');
  }


}

$test = new NokiaTest();
$test->run(new TextReporter());

?>
