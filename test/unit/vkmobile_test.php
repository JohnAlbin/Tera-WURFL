<?php

/*
 * Recognising Vkmobile devices from their user agents
 *
 */

require_once 'test_helper.php';

class VkmobileTest extends TeraWurflTestCase {

  var $wurfl;


  function test_vkmobile_vk200_ver1() {
    foreach(array(
'VK-VK200/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'vkmobile_vk200_ver1');
      }
  }



  ############################################################


  function vkmobileTest() {
    $this->UnitTestCase('vkmobile Test');
  }


}

$test = new VkmobileTest();
$test->run(new TextReporter());

?>
