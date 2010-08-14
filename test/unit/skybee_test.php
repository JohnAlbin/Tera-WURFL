<?php

/*
 * Recognising Skybee devices from their user agents
 *
 */

require_once 'test_helper.php';

class SkybeeTest extends TeraWurflTestCase {

  var $wurfl;


  function test_skybee_83at_ver1() {
    foreach(array(
'SKYBEE-83AT'
    ) as $ua) {
        $this->checkUA($ua, 'skybee_83at_ver1');
      }
  }



  ############################################################


  function skybeeTest() {
    $this->UnitTestCase('skybee Test');
  }


}

$test = new SkybeeTest();
$test->run(new TextReporter());

?>
