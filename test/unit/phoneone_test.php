<?php

/*
 * Recognising Phoneone devices from their user agents
 *
 */

require_once 'test_helper.php';

class PhoneoneTest extends TeraWurflTestCase {

  var $wurfl;


  function test_phoneone_m403_ver1() {
    foreach(array(
'phoneOne M403'
    ) as $ua) {
        $this->checkUA($ua, 'phoneone_m403_ver1');
      }
  }



  function test_phoneone_m901_ver1() {
    foreach(array(
'M901/Teleca/Q03C1.22 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'phoneone_m901_ver1');
      }
  }



  ############################################################


  function phoneoneTest() {
    $this->UnitTestCase('phoneone Test');
  }


}

$test = new PhoneoneTest();
$test->run(new TextReporter());

?>
