<?php

/*
 * Recognising Htc devices from their user agents
 *
 */

require_once 'test_helper.php';

class HtcTest extends UnitTestCase {

  var $wurfl;


  function test_htc_spark_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 7.0; Opera/9.5) HTC Victor',
    ) as $ua) {
        $this->checkUA($ua, 'htc_spark_ver1');
      }
  }


  function test_htc_6175_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) USCCHTC6175',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) USCCHTC6875'
    ) as $ua) {
        $this->checkUA($ua, 'htc_6175_ver1');
      }
  }



  function test_htc_6850_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) USCCHTC6850'
    ) as $ua) {
        $this->checkUA($ua, 'htc_6850_ver1');
      }
  }



  function test_htc_6850sp_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Sprint PPC6850SP'
    ) as $ua) {
        $this->checkUA($ua, 'htc_6850sp_ver1');
      }
  }



  function test_htc_8900_pilgrim_ver1() {
    foreach(array(
'8900a/1.2 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'8900b/MR2 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC-8900/1.2 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_8900_pilgrim_ver1');
      }
  }



  function test_htc_a6277_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; A6277 Build/CUPCAKE) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; A6277 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; p1_opusone Build/CUPCAKE) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2 (AdMob-ANDROID-20090728)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; A6277 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-it; freerunner Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-cn; infomax_iM9815 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_a6277_ver1');
      }
  }



  function test_htc_artemis_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC) Opera 8.65 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'htc_artemis_ver1');
      }
  }



  function test_htc_bravo_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1; de-de; HTC Tattoo Build/ERD35B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; HTC Tattoo Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; it-it; HTC Tattoo Build/ERD72) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; zh-CN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1; zh-CN; HTC Magic)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_bravo_ver1');
      }
  }



  function test_htc_buzz_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1  (7hero-astar9.2); ru-RU; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1 (7hero-astar9.1.1); ru-RU; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1 (7hero-astar9.1.2); ru-ru; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; cs-SK; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; da-DK; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; da-dk; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-CH; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-DE; HTC G1)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-DE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-DE; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-at; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-at; HTC Magic Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-DE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-HK; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-IE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-IN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-MY; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-PL; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-RO; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-SE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-SG; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-SK; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-TW; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-VN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; HTC Magic Build/Super E) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ie; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-in; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-it; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-sg; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-tw; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HTC Bravo Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17 CSOUTH-6200',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HTC Magic Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HTC Magic Build/SpeedTeam v2.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; HTC Magic Build/EPE54C) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-FR; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-FR; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-be; HTC Magic Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-IT; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-ch; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; HTC Magic Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; HTC Magic Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ja-jp; HTCX06HT Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nb-no; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-NL; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-nl; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pl-PL; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pl-PL; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pt-pt; HTC Bravo Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-EE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-ru; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-ua; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sv-SE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sv-se; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-tw; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.2; en-US; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.2; en-gb; HTC Desire Build/FRF83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; HTC Desire Build/FRF83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; fr-FR; HTC & Lfd)',
'Mozilla/5.0 (Linux; U; Android 2.2; it-it; HTC Desire Build/FRF85B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; ja-JP; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.2; ja-JP; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 2.2; nl-NL; HTC Desire)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_buzz_ver1');
      }
  }



  function test_htc_desire_a8181_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; cs-CZ; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; cs-cz; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; da-DK; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; da-dk; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; da-dk; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-AT; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-CH; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-DE; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-LU; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-at; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-at; HTC Desire 1.21.163.2 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-ch; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-ch; HTC Desire 1.19.161.5 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; HTC Desire 1.15.161.4 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; HTC Desire 1.19.161.5 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; HTC_Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-it; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-lu; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; el-GR; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; el-gr; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-AU; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-CZ; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-DE; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-EE; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-FR; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GR; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-HK; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-HU; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-IE; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-JP; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-KR; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-LT; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-LV; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-MY; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-NL; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-PK; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-PL; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-PT; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-RO; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-SE; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-SG; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-SK; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-TH; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-VN; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ZA; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-at; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-au; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ch; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-cz; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-de; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-de; HTC Desire 1.19.161.5 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-de; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-dk; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-fr; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; HTC Desire 1.15.161.4 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; HTC Desire 1.19.161.5 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; HTC_Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; HTC_Desire-orange-LS Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-id; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ie; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-lu; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-nl; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-no; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ro; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-sg; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-sk; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-tw; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-za; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-za; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-za; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; HTC Desire 1.15.161.4 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; HTC_Desire-orange-LS Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-FR; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-IT; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-ch; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-ch; HTC Desire 1.15.161.4 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; HTC_Desire-orange-LS Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-IT; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-ch; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; HTC_Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ja-JP; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ja-jp; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-kr; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nb-NO; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nb-no; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-NL; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-nl; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-nl; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pl-PL; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pl-pl; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pt-PT; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-LT; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-UA; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-ru; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sr-rs; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sv-SE; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sv-se; Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; sv-se; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; HTC Desire)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; HTC Desire Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
    ) as $ua) {
        $this->checkUA($ua, 'htc_desire_a8181_ver1');
      }
  }



  function test_htc_desire_a8183_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-au; HTC_Desire_A8183 V1.16.841.1 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-tw; HTC_Desire_A8181 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'htc_desire_a8183_ver1');
      }
  }



  function test_htc_diamond_ver1() {
    foreach(array(
'HTC_Diamond Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/HTC_Diamond/1.93.164.2',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/HTC_Diamond/1.97.162.4',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/HTC_Diamond/1.97.164.3',
'Vodafone/1.0/HTC_Diamond Opera/9.50 (Windows NT 5.1; U; de)',
'Vodafone/1.0/HTC_Diamond Opera/9.50 (Windows NT 5.1; U; fr)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_diamond_ver1');
      }
  }


  function test_htc_wildfire_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-nl; HTC_Wildfire_A3333 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; HTC_Wildfire_A3333 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
    ) as $ua) {
        $this->checkUA($ua, 'htc_wildfire_ver1');
      }
  }

  function test_htc_a6366_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HTC-A6366/1.0 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
    ) as $ua) {
        $this->checkUA($ua, 'htc_a6366_ver1');
      }
  }

  function test_htc_liberty_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; da-DK; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-CA; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-EE; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; HTC Liberty)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-au; HTC Legend Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-ca; HTC Legend Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-NL; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; HTC Legend)',
    ) as $ua) {
        $this->checkUA($ua, 'htc_liberty_ver1');
      }
  }

  function test_htc_dream_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; HTC Dream Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; HTC Dream Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ro-ro; HTC Dream Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; pt-br; HTC Dream Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HTC Dream Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; HTC Dream)',
'HTC_Dream Mozilla/5.0 (Linux; U; Android 1.5; en-ca; Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'HTC_Dream Mozilla/5.0 (Linux; U; Android 1.5; fr-ca; Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-IT; htc_dream)',
'Mozilla/5.0 (Linux; U; Android Hero_2.16_Hiapk; zh-CN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android Hero_2.171_Hiapk; en-us; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android Hero_2.18_Hiapk; zh-CN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android Hero_2.19_Hiapk; zh-CN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android Hero_2.19_Hiapk; zh-cn; HTC Hero Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android Hero_EXv1.3; zh-CN; HTC Hero)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_dream_ver1');
      }
  }



  function test_htc_dream_ver1_subenca_submoz() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-CA; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ZA; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; HTC Sapphire Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-za; HTC_Dream Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-FR; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; HTC_Dream Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-RU; HTC G1 Dream)',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-CN; HTC Dream)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_dream_ver1_subenca_submoz');
      }
  }

  function test_htc_passion_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Nexus One Build/ERD62) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; zh-CN; Nexus One)',
    ) as $ua) {
        $this->checkUA($ua, 'htc_passion_ver1');
      }
  }


  function test_htc_eris_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1; de-DE; Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-FI; Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-GB; Milestone)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; DAMAGEDHERO200)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; Droid)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; Eris)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; GT-I5700)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; Htcclay\'s SuperBad 3G)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; MB200)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; XPEROID)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-gb; Cronos Hero Build/ERD72) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; ADR6200 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Droid Build/ESE53) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Droid Build/ESE81) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Eris Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Htcclay\'s SuperBad G1 Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Htcclay\'s SuperBad 3G Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; MB200 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; es-US; DAMAGEDHERO200)',
'Mozilla/5.0 (Linux; U; Android 2.1; es-US; Eris)',
'Mozilla/5.0 (Linux; U; Android 2.1; es-us; ADR6200 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; it-it; ADR6200 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; nl-NL; Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1; ru-RU; Hero)',
'Mozilla/5.0 (Linux; U; Android 2.1; zh-CN; HERO200)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; Eris)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; ADR6200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; Eris Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-US; Eris)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-us; ADR6200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_eris_ver1');
      }
  }



  function test_htc_hd2_ver1() {
    foreach(array(
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; da)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; de)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; el)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; en)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; it)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; nb)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; nl)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; ru)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; zh-tw)',
'HTC_HD2_T8585 Opera/9.70 (Windows NT 5.1; U; de)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Vodafone/1.0/HTC_HD2/1.44.162.6 (70494)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Vodafone/1.0/HTC_HD2/1.44.172.7 (70494)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Vodafone/1.0/HTC_HD2/1.72.162.0 (82124)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; HTC_HD2_T8585; Windows Phone 6.5)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; HTC_HD2_T8585; Windows Phone 6.5) UP.Link/6.3.1.15.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; HTC_Touch2/1.0; Windows Phone 6.5)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; HTC_Touch2_T3320; Windows Phone 6.5)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; HTC_Touch2_T3333; Windows Phone 6.5)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; HTC_Touch_Diamond2_T5353; Windows Phone 6.5)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; HTC_Touch_HD_T8282; Windows Phone 6.5)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; HTC_Touch_Pro2_T7373; Windows Phone 6.5)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Vodafone/1.0/HTC_HD2/1.72.162.0 (82124); Windows Phone 6.5)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Windows Phone 6.5 HTC_HD2/1.0)',
'Vodafone/1.0/HTC_HD2/1.44.162.6 (70494) Opera/9.7 (Windows NT 5.1; U; de)',
'Vodafone/1.0/HTC_HD2/1.44.163.3 (70494) Opera/9.7 (Windows NT 5.1; U; fr)',
'Vodafone/1.0/HTC_HD2/1.49.164.2 (71528) Opera/9.7 (Windows NT 5.1; U; es-ES)',
'Vodafone/1.0/HTC_HD2/1.72.161.3 (82124) Opera/9.7 (Windows NT 5.1; U; en)',
'Vodafone/1.0/HTC_HD2/1.72.162.0 (82124) Opera/9.7 (Windows NT 5.1; U; de)',
'Vodafone/1.0/HTC_HD2/1.72.172.0 (82124) Opera/9.7 (Windows NT 5.1; U; nl)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_hd2_ver1');
      }
  }



  function test_htc_hd_mini_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5) Vodafone/1.0/HTC_HD_mini/1.10.161.1 (86611)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5) Vodafone/1.0/HTC_HD_mini/1.11.162.1 (87652)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_hd_mini_ver1');
      }
  }



  function test_htc_hero_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; da-DK; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-DE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-LU; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-ch; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-de; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; el-gr; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-AU; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-CA; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ES; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-HK; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-IE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-IN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-IT; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-NO; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-PL; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-RO; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-SE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-SG; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-TH; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; HERO200)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ZA; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-au; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ca; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-de; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ie; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-in; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-my; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-no; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-pl; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-se; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-sg; HTC Hero Build/CUPCAKE) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2 (AdMob-ANDROID-20090728)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-sg; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-sk; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-tw; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; HERO200 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 CSOUTH-6200',
'Mozilla/5.0 (Linux; U; Android 1.5; en-za; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; HERO200)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-US; HERO200)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-pt; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-CA; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-FR; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-be; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-ca; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-es; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; HTC Hero-Orange Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-nl; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-IT; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; it-it; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; nb-NO; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; nb-no; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-BE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-NL; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-nl; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-CZ; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-PL; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-PT; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-RU; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-UA; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; ru-ru; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; sv-NO; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; sv-SE; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; sv-se; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; tr-tr; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-CN; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-TW; HTC Hero)',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-cn; HTC Hero Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; HERO200)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; Hero CDMA)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HERO200 Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; HERO200 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Hero CDMA Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'htc_hero_ver1');
      }
  }

  function test_htc_incredible_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; ADR6300 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; ADR6300 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; ADR6300 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
    ) as $ua) {
        $this->checkUA($ua, 'htc_incredible_ver1');
      }
  }


  function test_htc_incredible_adr6300_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; ADR6300)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; ADR6300)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; ADR6300)',
    ) as $ua) {
        $this->checkUA($ua, 'htc_incredible_adr6300_ver1');
      }
  }



  function test_htc_jade_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/HTC_Jade/1.40.164.2 (21259)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_jade_ver1');
      }
  }



  function test_htc_kaiser_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Vodafone/1.0/HTC_Kaiser/1.56.161.4',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Vodafone/1.0/HTC_Kaiser/1.56.162.5',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Vodafone/1.0/HTC_Kaiser/1.56.165.5'
    ) as $ua) {
        $this->checkUA($ua, 'htc_kaiser_ver1');
      }
  }



  function test_htc_legend_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1; da-DK; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; da-dk; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; de-AT; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; de-DE; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; de-at; HTC Legend 1.31.177.2 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; de-at; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; de-de; HTC Legend 1.23.161.1 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; de-de; HTC Legend 1.32.161.4 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; de-de; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; de-nl; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-DE; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-FR; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-GB; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-HK; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-IN; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-MY; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-NL; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-PL; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-RO; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-SE; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-SG; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-SK; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-TH; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-TW; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-US; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; en-cz; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-gb; HTC Legend 1.23.161.1 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-gb; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-in; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-sg; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; es-ES; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; es-es; HTC Legend 1.23.161.1 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; fr-FR; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; fr-NL; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; fr-ch; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; fr-fr; HTC Legend 1.32.163.1 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; fr-fr; HTC Legend 1.32.163.2 Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; fr-fr; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; fr-nl; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; it-it; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; nb-no; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; nl-NL; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; nl-nl; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; pl-PL; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; ru-RU; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; sv-SE; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; sv-se; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; th-TH; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; zh-CN; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; zh-TW; HTC Legend)',
'Mozilla/5.0 (Linux; U; Android 2.1; zh-cn; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; zh-tw; HTC Legend Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'htc_legend_ver1');
      }
  }



  function test_htc_magic_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; cs-CZ; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; da-DK; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; da-dk; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-AT; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-CH; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; de-at; HTC Magic Build/CRB43) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-de; HTC Magic Build/CRC1) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-de; HTC Magic Build/CRC24) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; el-GR; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-AU; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-CA; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-DK; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-IE; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-IN; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-PH; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-RO; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-SG; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-TW; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-VN; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ZA; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ae; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-au; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ca; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-gb; HTC Magic Build/CRB43) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ie; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-qa; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ro; HTC Magic Build/2.17.401.2) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-ro; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-sa; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-sg; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; es-es; HTC Magic Build/CRB43) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-AT; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-FR; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-fr; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-it; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; nb-NO; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; nb-no; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-PL; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-pl; HTC Magic Build/2.17.401.2) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pl-pl; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-PT; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; pt-pt; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; sv-se; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-CN; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-TW; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.5; zh-tw; HTC Magic Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-AT; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-CH; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-DE; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-at; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-ch; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-AU; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-AU; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-NZ; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-SG; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; HTC Dream G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-au; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; HTC Click-Orange Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; HTC Magic Build/DRC92) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-nz; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-sg; HTC Dream Build/DRD20) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; HTC Dream Build/DRC83) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; HTC Dream G1 Build/DRD35) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-ES; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; HTC Click-Orange Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-FR; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; HTC Click-Orange Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-IT; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-NL; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-nl; HTC Magic Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-CN; HTC Dream)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-CN; HTC Magic)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-cn; HTC Dream Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-cn; HTC Magic Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_magic_ver1');
      }
  }



  function test_htc_mdavario5_ver1() {
    foreach(array(
'Opera/9.50 (Windows NT 5.1; MDA_Vario_V/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1; U; pl)',
'Opera/9.50 (Windows NT 5.1; MDA_Vario_V/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1; U; de)',
'Opera/9.50 (Windows NT 5.1; MDA_Vario_V/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1; U; nl)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_mdavario5_ver1');
      }
  }



  function test_htc_mta_mail_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) Smartphone; 320x240; Mail/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_mta_mail_ver1');
      }
  }



  function test_htc_p3300_ver1() {
    foreach(array(
'HTCP3300-Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)',
'HTC_P3300 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'HTC_P3300 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) PPC; 240x320; HTC_P3300/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) PPC; 240x320; HTC_P3300/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) PPC; 240x320; HTC_P3300/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; 240x320; HTC_P3300/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3300_ver1');
      }
  }



  function test_htc_p3350_ver1() {
    foreach(array(
'PPC; 240x320; HTC_P3350/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3350_ver1');
      }
  }



  function test_htc_p3400_ver1() {
    foreach(array(
'HTC_P3400-Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC)',
'HTC_P3400-Mozilla/4.0 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3400_ver1');
      }
  }



  function test_htc_p3400i_ver1() {
    foreach(array(
'HTC_P3400i-Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_P3400i-Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'HTC_P3400i-Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3400i_ver1');
      }
  }



  function test_htc_p3470_ver1() {
    foreach(array(
'HTC_P3470 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_P3470 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3470_ver1');
      }
  }



  function test_htc_p3490_ver1() {
    foreach(array(
'HTC_P3490 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_P3490 Opera/9.50 (Windows NT 5.1; U; en)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3490_ver1');
      }
  }



  function test_htc_p3600_ver1() {
    foreach(array(
'HTCP3600-Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) PPC; 240x320; HTC_P3600i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) PPC; 240x320; HTC_P3600/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; 240x320; HTC_P3600i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7) PPC; 240x320; HTC_P3600i/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3600_ver1');
      }
  }



  function test_htc_p3700_ver1() {
    foreach(array(
'HTC-P3700-orange/PPC; 480x640; OpVer 30.193.2.734 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC-P3700-orange/PPC; 480x640; OpVer 30.204.2.731 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_Diamond Opera/9.50 (Windows NT 5.1; U; en) P3720',
'HTC_P3700 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_P3700 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.0.0.0',
'HTC_P3700 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) UP.Link/6.3.1.15.0',
'HTC_P3700 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; de)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; en-GB)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; es-ES)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; fr)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; it)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; nb)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; nl)',
'HTC_P3700 Opera/9.50 (Windows NT 5.1; U; ru)',
'PPC; 480x640; HTC P3700; OpVer 30.193.15.752 Opera/9.50 (Microsoft Windows 5.1; U; es)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3700_ver1');
      }
  }



  function test_htc_p3702_victor_ver1() {
    foreach(array(
'Opera/9.0 (Microsoft Windows; PPC; Opera Mobile/331; U; en)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/1522; U; es-ES)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15954; U; en)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15954; U; es-ES)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15991; U; en)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/16292; U; en)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/16453; U; en)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/17351; U; en)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/17658; U; en)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/17879; U; en)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/17963; U; es-ES)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/17992; U; it)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/17992; U; nl)',
'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/1907; U; en)',
'Opera/9.5 (Microsoft Windows; Windows CE; Opera Mobi/9.5; U; en) 480x800 SAMSUNG SCH-i920 PPC',
'Opera/9.5 (Microsoft Windows; Windows CE; Opera Mobi/9.5; U; en) Samsung-SCHI910 PPC 240x400',
'Opera/9.5 (Microsoft Windows; Windows CE; Opera Mobi/9.5; U; en) VZW:SCH-i770 PPC 320x320',
'Opera/9.5 (Microsoft Windows; Windows CE; Opera Mobi/9.5; U; en) VZW:SCH-i910 PPC 240x400'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p3702_victor_ver1');
      }
  }



  function test_htc_p4350_ver1() {
    foreach(array(
'HTC_P4350 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'HTC_P4350 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p4350_ver1');
      }
  }



  function test_htc_p4351_ver1() {
    foreach(array(
'PPC; 240x320; HTC_P4351/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p4351_ver1');
      }
  }



  function test_htc_p4550_ver1() {
    foreach(array(
'HTC_P4550 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_P4550 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'HTC_P4550 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; 240x320; HTC P4550; OpVer 24.328.1.610',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; 240x320; HTC P4550; OpVer 24.331.9.690',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) PPC; 240x320; HTC P4550; OpVer 24.181.1.612'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p4550_ver1');
      }
  }



  function test_htc_p4600_ver1() {
    foreach(array(
'HTC-P4600/%ROM_VERSION% Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC-P4600/1.2 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC-P4600/1.2 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC-P4600/5.11.502.2 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC-P4600/5.11.502.2 Opera/9.50 (Windows NT 5.1; U; en)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p4600_ver1');
      }
  }



  function test_htc_p5500_ver1() {
    foreach(array(
'HTC_P5500 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p5500_ver1');
      }
  }



  function test_htc_p6500_sedna_ver1() {
    foreach(array(
'HTC_P6500 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p6500_sedna_ver1');
      }
  }



  function test_htc_p6500_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; 240x320; HTC P6500; OpVer 27.157.1.614'
    ) as $ua) {
        $this->checkUA($ua, 'htc_p6500_ver1');
      }
  }



  function test_htc_pc36100_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; PC36100)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; PC36100 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; PC36100)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; PC36100 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; PC36100)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; PC36100)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_pc36100_ver1');
      }
  }



  function test_htc_prophet_ver1() {
    foreach(array(
'Dopod818Pro/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320; Dopod818 Pro)',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Xda neo; 240x320)',
'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; i-mate JAMin PPC; 240x320; PPC; 240x320)',
'Vodafone/1.0/HTC_prophet/2.15.3.113/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_prophet_ver1');
      }
  }



  function test_htc_s620_ver1() {
    foreach(array(
'HTCS620-Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 320x240)',
'HTC_S620',
'HTC_S620 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'HTC_S620 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_S620 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) HTC_S620 Mozilla/4.0',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) HTCS620;Smartphone;320x240'
    ) as $ua) {
        $this->checkUA($ua, 'htc_s620_ver1');
      }
  }



  function test_htc_s621_ver1() {
    foreach(array(
'HTCS621-Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 320x240)',
'HTCS621-Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'HTC_S621 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_s621_ver1');
      }
  }



  function test_htc_s630_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) SP; 320x240; HTC_S630/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_s630_ver1');
      }
  }



  function test_htc_s710_ver1() {
    foreach(array(
'HTC_S710-Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Smartphone; 240x320; Smartphone)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) SP; 240x320; HTC_S710/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) SP; 240x320; HTC_S710/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_s710_ver1');
      }
  }



  function test_htc_s730_ver1() {
    foreach(array(
'HTC_S730 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_S730 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_s730_ver1');
      }
  }



  function test_htc_s740_ver1() {
    foreach(array(
'HTC_S740 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_S743 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_s740_ver1');
      }
  }



  function test_htc_snap_s511_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Sprint S511'
    ) as $ua) {
        $this->checkUA($ua, 'htc_snap_s511_ver1');
      }
  }



  function test_htc_snap_s521_ver1() {
    foreach(array(
'HTC_Snap Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_Snap_S521 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_Snap_S526 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_snap_s521_ver1');
      }
  }



  function test_htc_snap_s523_ver1() {
    foreach(array(
'HTC_Snap_S523/V2.03.841.1 (65854) Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_snap_s523_ver1');
      }
  }



  function test_htc_st6356_ver1() {
    foreach(array(
'HTC-ST6356/2.31.502.4 (66023) Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC-ST6356/2.31.502.4 (66023) Opera/9.50 (Windows NT 5.1; U; en)',
'HTC-ST6356/2.31.502.4 (66023) Opera/9.50 (Windows NT 5.1; U; en) UP.Link/6.3.1.20.0',
    ) as $ua) {
        $this->checkUA($ua, 'htc_st6356_ver1');
      }
  }



  function test_htc_st7377_ver1() {
    foreach(array(
'HTC-ST7377/1.59.502.3 (67150) Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC-ST7377/1.59.502.3 (67150) Opera/9.50 (Windows NT 5.1; U; en)',
'HTC-ST7377/1.59.502.3 (67150) Opera/9.50 (Windows NT 5.1; U; en) UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'htc_st7377_ver1');
      }
  }



  function test_htc_t8282_ver1() {
    foreach(array(
'HTC_Touch_HD_T8282 Opera/9.50 (Windows NT 5.1; U; de)',
'HTC_Touch_HD_T8282 Opera/9.50 (Windows NT 5.1; U; es-ES)',
'HTC_Touch_HD_T8282 Opera/9.50 (Windows NT 5.1; U; fr)',
'HTC_Touch_HD_T8282 Opera/9.50 (Windows NT 5.1; U; it)',
'HTC_Touch_HD_T8282 Opera/9.50 (Windows NT 5.1; U; nl)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_t8282_ver1');
      }
  }



  function test_htc_t8585_ver1() {
    foreach(array(
'HTC_HD2_Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_HD2_Opera/9.7 (Windows NT 5.1; U;it) UP.Link/6.3.0.0.0',
'HTC_HD2_T8585 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; fr)',
'HTC_HD2_T8585 Opera/9.7 (Windows NT 5.1; U; sv)',
'HTC_HD2_T8585/480x800 4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_HD2_T9193 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) V1.49.841.1 (71528)',
'HTC_HD2_T9193 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) V1.72.841.0 (82124)',
'HTC_HD2_T9193 Opera/9.7 (Windows NT 5.1; U; en) V1.49.841.1 (71528)',
'HTC_HD2_T9193 Opera/9.7 (Windows NT 5.1; U; en) V1.72.841.0 (82124)',
'HTC_HD_mini_T5555 Opera/9.7 (Windows NT 5.1; U; zh-tw)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_t8585_ver1');
      }
  }



  function test_htc_tattoo_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; da-dk; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; da-dk; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; HTC Tattoo 1.67.161.18 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 UP.Link/6.3.1.13.0',
'Mozilla/5.0 (Linux; U; Android 1.6; de-nl; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-CZ; HTC Tattoo)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; HTC Tattoo)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-TH; HTC Tattoo)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; HTC Tattoo)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-au; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-cz; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-de; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-fi; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-fr; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; HTC Tattoo 1.67.161.18 Build/DRC79) AppleWebKit/528.5  (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-hu; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-in; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-it; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-sk; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-za; HTC Tattoo 1.67.161.5 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-za; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; HTC Tattoo 1.67.164.18 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-be; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-ch; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-lu; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-ch; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nb-no; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; nl-NL; HTC Tattoo)',
'Mozilla/5.0 (Linux; U; Android 1.6; ru-RU; HTC Tattoo)',
'Mozilla/5.0 (Linux; U; Android 1.6; sr-rs; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-se; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sv-se; HTC_TATTOO_A3288 Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-CN; HTC Tattoo)',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-cn; HTC Tattoo Build/DRC79) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'htc_tattoo_ver1');
      }
  }



  function test_htc_touch2_t3320_ver1() {
    foreach(array(
'HTC_Touch2_T3320 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_Touch2_T3320 Opera/9.50 (Windows NT 5.1; U; en)',
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch2_t3320_ver1');
      }
  }

  function test_htc_touch2_ver1() {
    foreach(array(
'HTC_Touch2_T3333 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_Touch2_T3333 Opera/9.50 (Windows NT 5.1; U; de)',
'HTC_Touch2_T3333 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC_Touch2_T3333 Opera/9.50 (Windows NT 5.1; U; it)',
'HTC_Touch2_T3333 Opera/9.50 (Windows NT 5.1; U; nl)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch2_ver1');
      }
  }



  function test_htc_touch_3g_t3232_ver1() {
    foreach(array(
'HTC_Touch_3G_T3232 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_Touch_3G_T3232 Opera/9.50 (Windows NT 5.1; U; de)',
'HTC_Touch_3G_T3232 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC_Touch_3G_T3232 Opera/9.50 (Windows NT 5.1; U; it)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_3g_t3232_ver1');
      }
  }



  function test_htc_touch_6900_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) HTC-6900-MR2 BM',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Alltel HTC Touch',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) HTC-6900'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_6900_ver1');
      }
  }



  function test_htc_touch_cruise_p3650_ver1() {
    foreach(array(
'HTC_P3650 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_P3650 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'Opera/9.5(Microsoft Windows; PPC; Opera Mobi/16643; U; en) HTC_Touch_Pro2',
'Opera/9.50 (Windows NT 5.1; HTC_Touch2/1.0; U; de)',
'Opera/9.7 (Windows NT 5.1; HTC_HD2/1.0; U; de)',
'Opera/9.7 (Windows NT 5.1; HTC_HD2/1.0; U; en)',
'Opera/9.7 (Windows NT 5.1; HTC_HD2/1.0; U; pl)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_cruise_p3650_ver1');
      }
  }



  function test_htc_touch_diamond_ver1_alltel() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Opera/9.5) Alltel HTC Touch Diamond',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Opera/9.5) HTC-MP6950 BM'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_diamond_ver1_alltel');
      }
  }



  function test_htc_touch_diamondii_ver1() {
    foreach(array(
'HTC_Touch_Diamond2_T5353 Opera/9.50 (Windows NT 5.1; U; da)',
'HTC_Touch_Diamond2_T5353 Opera/9.50 (Windows NT 5.1; U; de)',
'HTC_Touch_Diamond2_T5353 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC_Touch_Diamond2_T5353 Opera/9.50 (Windows NT 5.1; U; es-ES)',
'HTC_Touch_Diamond2_T5353 Opera/9.50 (Windows NT 5.1; U; nb)',
'HTC_Touch_Diamond2_T5353 Opera/9.50 (Windows NT 5.1; U; nl)',
'HTC_Touch_Diamond2_T5353 Opera/9.50 (Windows NT 5.1; U; ru)',
'HTC_Touch_Diamond2_T5353 Opera/9.7 (Windows NT 5.1; U; nl)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/HTC_TouchDual/2.12.163.3',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Vodafone/1.0/HTC_Touch_Diamond2/2.16.162.1 (67041)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Vodafone/1.0/HTC_Touch_Diamond2/2.16.164.1 (67041)',
'Vodafone/1.0/HTC_Touch_Diamond2 Opera/9.50 (Windows NT 5.1; U; de)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_diamondii_ver1');
      }
  }



  function test_htc_touch_dual_ver1() {
    foreach(array(
'HTC-Touch/Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_TouchDual Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_TouchDual Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_dual_ver1');
      }
  }



  function test_htc_touch_hd_t8282ver1() {
    foreach(array(
'HTC_Touch_HD2_T8585 Opera/9.70 (Windows NT 5.1; U; en)',
'HTC_Touch_HD_T8282 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_Touch_HD_T8282 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_Touch_HD_T8282 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC_Touch_HD_T8282-orange/PPC; 480x800; OpVer 34.119.2.731 Opera/9.50(Microsoft Windows 5.1; U;fr)',
'HTC_Touch_HD_T8282/480x800 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; 480x800; HTC_Touch_HD_T8282; OpVer 34.119.1.611',
'PPC; 480x800; HTC_Touch_HD_T8282; OpVer 34.119.1.611 Opera/9.50(Microsoft Windows 5.1; U;en)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_hd_t8282ver1');
      }
  }



  function test_htc_touch_p3450_ver1() {
    foreach(array(
'HTC-P3450-orange/PPC; 240x320; OpVer 23.114.2.741 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'HTC-P3450-orange/PPC; 240x320; OpVer 23.221.2.741 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'HTC_P3450 Opera/9.50 (Windows NT 5.1; U; en)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Vodafone/1.0/HTC_Elf/1.11.164.2',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Vodafone/1.0/HTC_Mercury/3.54.162.4',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) PPC; 240x320; HTC P3450; OpVer 23.221.15.751',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Vodafone/1.0/HTC_Elf/2.20.164.2',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Vodafone/1.0/HTC_Elf/2.27.164.2',
'PPC; 240x320; HTC_P3450/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'PPC; 240x320; HTC_P3450/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'PPC; 240x320; HTC_P3450/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_p3450_ver1');
      }
  }



  function test_htc_touch_p3451_ver1() {
    foreach(array(
'PPC; 240x320; HTC_P3451/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_p3451_ver1');
      }
  }

  function test_htc_touch_pro2_ver1() {
    foreach(array(
'HTC_Touch_Pro2_T7373 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_Touch_Pro2_T7373 Opera/9.50 (Windows NT 5.1; U; de)',
'HTC_Touch_Pro2_T7373 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC_Touch_Pro2_T7373 Opera/9.50 (Windows NT 5.1; U; it)',
'HTC_Touch_Pro2_T7373 Opera/9.50 (Windows NT 5.1; U; nl)',
'HTC_Touch_Pro2_T7373 Opera/9.7 (Windows NT 5.1; U; de)',
'HTC_Touch_Pro2_T7373 Opera/9.7 (Windows NT 5.1; U; it)',
'HTC_Touch_Pro2_T7373 Opera/9.7 (Windows NT 5.1; U; nl)',
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_pro2_ver1');
      }
  }


  function test_htc_touch_pro_ver1() {
    foreach(array(
'HTC_Touch_Pro_T7272 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_Touch_Pro_T7272 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_Touch_Pro_T7272 Opera/9.50 (Windows NT 5.1; U; de)',
'HTC_Touch_Pro_T7272 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC_Touch_Pro_T7272 Opera/9.50 (Windows NT 5.1; U; it)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) Vodafone/1.0/HTC_Touch_Pro/5.11.165.2'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_pro_ver1');
      }
  }



  function test_htc_touch_pro_ver1_alltel() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Opera/9.5) Alltel HTC Touch Pro'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_pro_ver1_alltel');
      }
  }



  function test_htc_touch_viva_t2223_ver1() {
    foreach(array(
'HTC_Touch_Viva_T2223 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_Touch_Viva_T2223 Opera/9.50 (Windows NT 5.1; U; en)',
'HTC_Touch_Viva_T2223 Opera/9.50 (Windows NT 5.1; U; es-ES)',
'HTC_Touch_Viva_T2223 Opera/9.50 (Windows NT 5.1; U; it)',
'HTC_Touch_Viva_T2223 Opera/9.50 (Windows NT 5.1; U; it) UP.Link/6.3.0.0.0',
'HTC_Touch_Viva_T2223 Opera/9.50 (Windows NT 5.1; U; ru)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touch_viva_t2223_ver1');
      }
  }



  function test_htc_touchcruise_ver1() {
    foreach(array(
'HTC_Touch_Cruise_T4242 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_Touch_Cruise_T4242 Opera/9.50 (Windows NT 5.1; U; it)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touchcruise_ver1');
      }
  }



  function test_htc_touchdiamond2_ver1() {
    foreach(array(
'HTC_Touch_Diamond2_T5353 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'HTC_Touch_Diamond2_T5353 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5)',
'HTC_Touch_Diamond2_T5360 Opera/9.7 (Windows NT 5.1; U; en)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) Alltel HTC Snap',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) HTC_HD2_T8585/480x800',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) PPC; 480x800; HTC_HD2_T8585-Orange; OpVer 114.143.2.731',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) PPC; HTC_HD2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) PPC; HTC_Touch2/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'PPC; 480x800; HTC_HD2_T8585-Orange; OpVer 114.143.2.731 Opera/9.7 (Microsoft Windows 6.5; U;fr)',
'PPC; 480x800; HTC_Touch_Diamond2_T5353-Orange; OpVer 93.172.15.752 Opera/9.50 (Microsoft Windows 6.1; U;es)',
'PPC; 480x800; HTC_Touch_Pro2_T7385-Orange; OpVer 122.190.1.610 Opera/9.50 (Microsoft Windows 6.5; U;en)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_touchdiamond2_ver1');
      }
  }



  function test_htc_tytn_ver1() {
    foreach(array(
'HTC_TyTN Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) Qwest:Titan6800',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11) PPC; 240x320; HTC_Touch_3G_T3232-Orange; OpVer 33.171.1.6112',
'PPC; 240x320; HTC_Touch_3G_T3232-Orange; OpVer 33.171.1.6112 Opera/9.50 (Microsoft Windows 6.1; U;en)',
'PPC; 240x320; HTC_TyTN/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_tytn_ver1');
      }
  }



  function test_htc_tytnii_ver1() {
    foreach(array(
'HTC_TyTN_II Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'HTC_TyTN_II Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)',
'HTC_TyTN_II Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_tytnii_ver1');
      }
  }



  function test_htc_wizard_prodigy_ver1() {
    foreach(array(
'PPC; 240x320; HTC_WIZARD/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_wizard_prodigy_ver1');
      }
  }



  function test_htc_x02ht_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) HTC/X02HT'
    ) as $ua) {
        $this->checkUA($ua, 'htc_x02ht_ver1');
      }
  }



  function test_htc_x7500_ver1() {
    foreach(array(
'HTC_X7500 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12) PPC; 640x480; HTC_X7500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) PPC; 640x480; HTC_X7500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 640x480; HTC_X7500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1) Opera 8.65 [en]'
    ) as $ua) {
        $this->checkUA($ua, 'htc_x7500_ver1');
      }
  }



  function test_htc_x7510_ver1() {
    foreach(array(
'HTC-X7510/1.0 Opera 9.5'
    ) as $ua) {
        $this->checkUA($ua, 'htc_x7510_ver1');
      }
  }



  function test_htc_xv6875_ver1() {
    foreach(array(
'XV6975 Opera/9.50 (Windows NT  5.1; U; en)'
    ) as $ua) {
        $this->checkUA($ua, 'htc_xv6875_ver1');
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

  function htcTest() {
    $this->UnitTestCase('htc Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new HtcTest();
$test->run(new TextReporter());

?>
