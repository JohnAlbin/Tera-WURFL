<?php

/*
 * Recognising Android devices from their user agents
 *
 */

require_once 'test_helper.php';

class AndroidTest extends UnitTestCase {

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
'Mozilla/5.0 (Linux; U; Android 1.6; en-AU; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-IE; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Archos5)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; CBW Blaze)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; CSL_Spice_MI300)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-ZA; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-ie; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-nz; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Android Dev Phone 1 Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Archos5 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Behold II Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; CBW Blaze Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 UP.Link/6.3.1.16.0',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Htcclay\'s FastTest G1 Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Htcclay\'s SuperFast 3G Build/DRC92) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; generic Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-za; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-; T-Mobile G1 Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-; T-Mobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-; T-Mobile myTouch 3G Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-; T-Mobile myTouch 3G)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-ES; Behold II)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-ES; Orange_Boston)',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; Behold2 Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; es-es; Orange_Boston Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; Archos5 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; BYT-P726G; Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1, gzip',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; Archos5 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; it-it; generic Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-JP; IS01)',
'Mozilla/5.0 (Linux; U; Android 1.6; ja-jp; IS01 Build/S6191) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-PT; Boston)',
'Mozilla/5.0 (Linux; U; Android 1.6; pt-pt; Boston Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; sk-sk; Orange_Boston Build/DONUT) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
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

  function checkUA($agent, $expected) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $actual =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($expected != $actual)
      echo "Expected: $expected, got: $actual\nUA: $agent\n";
    $this->assertEqual($expected, $actual);
  }

  function androidTest() {
    $this->UnitTestCase('android Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new AndroidTest();
$test->run(new TextReporter());

?>
