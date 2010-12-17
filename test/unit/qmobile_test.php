<?php

/*
 * Recognising Qmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class QmobileTest extends TeraWurflTestCase {

  var $wurfl;


  function test_qmobile_f220_ver1() {
    foreach(array(
'Q-Mobile-F220/Profile/MIDP.2.0Configuration/CLDC.1.0'
    ) as $ua) {
        $this->checkUA($ua, 'qmobile_f220_ver1');
      }
  }



  function test_qmobile_q61_ver1() {
    foreach(array(
'Q-MOBILE-Q61/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'qmobile_q61_ver1');
      }
  }



  ############################################################


  function qmobileTest() {
    $this->UnitTestCase('qmobile Test');
  }


}

$test = new QmobileTest();
$test->run(new TextReporter());

?>
