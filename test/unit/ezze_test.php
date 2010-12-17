<?php

/*
 * Recognising Ezze devices from their user agents
 *
 */

require_once 'test_helper.php';

class EzzeTest extends TeraWurflTestCase {

  var $wurfl;


  function test_ezze_zmem1075_ver1() {
    foreach(array(
'ZMEM1075/BSI AU.Browser/2.0 QO3C1 MMP/1.0 ZMEM1075/BSI AU.Browser/2.0 QO3C1 MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'ezze_zmem1075_ver1');
      }
  }



  ############################################################


  function ezzeTest() {
    $this->UnitTestCase('ezze Test');
  }


}

$test = new EzzeTest();
$test->run(new TextReporter());

?>
