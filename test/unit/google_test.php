<?php

/*
 * Recognising Google devices from their user agents
 *
 */

require_once 'test_helper.php';

class GoogleTest extends TeraWurflTestCase {

  var $wurfl;


  function test_google_ion_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; Google Ion)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; Google Ion Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; zh-cn; Google Ion Build/DRC83) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'google_ion_ver1');
      }
  }



  function test_google_nexusone_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-DE; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; de-de; Nexus One Build/EPF30) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-AU; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-NZ; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; Nexus One Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-gb; Nexus One Build/EPF21B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Nexus One Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Nexus One Build/EPF30) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Nexus One Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-ES; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; Nexus One Build/EPF21B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; Nexus One Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-FR; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-fr; Nexus One Build/EPF30) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; Nexus One Build/EPE54B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; Nexus One Build/EPF30) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; Nexus One Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; iw-IL; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ja-JP; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-NL; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-nl; Nexus One Build/EPF21B) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; tr-TR; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-CN; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-TW; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; zh-cn; Nexus One Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Nexus One Build/ERD79) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.2; de-DE; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; de-de; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-GB; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; en-US; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; en-gb; Nexus One Build/FRF83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-gb; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Nexus One Build/FRF50) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Nexus One Build/FRF72) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Nexus One Build/FRF83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Nexus One Build/FRF85B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; en-us; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; es-ES; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; es-US; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; es-us; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; fr-FR; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; it-IT; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; it-it; Nexus One Build/FRF83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; it-it; Nexus One Build/FRF85B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; it-it; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; iw-IL; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; ja-JP; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; ja-jp; Nexus One Build/FRF50) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; ko-KR; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; nl-NL; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; pt-BR; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; pt-br; Nexus One Build/FRF83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; pt-br; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; ru-RU; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; zh-CN; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; zh-TW; Nexus One)',
'Mozilla/5.0 (Linux; U; Android 2.2; zh-cn; Nexus One Build/FRF50) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; zh-cn; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; zh-tw; Nexus One Build/FRF85B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (Linux; U; Android 2.2; zh-tw; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1'
    ) as $ua) {
        $this->checkUA($ua, 'google_nexusone_ver1');
      }
  }



  ############################################################


  function googleTest() {
    $this->UnitTestCase('google Test');
  }


}

$test = new GoogleTest();
$test->run(new TextReporter());

?>
