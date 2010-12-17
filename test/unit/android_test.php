<?php

/*
 * Recognising Android devices from their user agents
 *
 */

require_once 'test_helper.php';

class AndroidTest extends TeraWurflTestCase {

  var $wurfl;


  function test_android_dev_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; Android Dev Phone 1)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; Android Dev Phone 1 Build/PLAT-RC33) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; it-it; Android Dev Phone 1 Build/CRC1) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6 - Galaxo V1.6.3.2; de-de; Galaxy Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6 - Galaxo V1.6.3.3; de-DE; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.6 - Galaxo V1.6.3.3; en-gb; Galaxy Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6 - Galaxo V1.6.3.3; tr-TR; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.6 - Galaxo V1.6.3.3zh; zh-CN; Galaxy)',
'Mozilla/5.0 (Linux; U; Android 1.6; de-; T-Mobile G1 Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; de-de; Archos5 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-; GT540)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Archos5)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Android Dev Phone 1 Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Archos5 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Htcclay\'s FastTest G1 Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Htcclay\'s SuperFast 3G Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; generic Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-; T-Mobile G1 Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-; T-Mobile myTouch 3G Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-; T-Mobile myTouch 3G)',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; Archos5 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; Archos5 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; generic Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
    ) as $ua) {
        $this->checkUA($ua, 'android_dev_ver1');
      }
  }



  function test_android_qsd8250_surf_chinese_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; zh-CN; qsd8250_surf)'
    ) as $ua) {
        $this->checkUA($ua, 'android_qsd8250_surf_chinese_ver1');
      }
  }



  ############################################################


  function androidTest() {
    $this->UnitTestCase('android Test');
  }


}

$test = new AndroidTest();
$test->run(new TextReporter());

?>
