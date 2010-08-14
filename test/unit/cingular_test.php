<?php

/*
 * Recognising Cingular devices from their user agents
 *
 */

require_once 'test_helper.php';

class CingularTest extends TeraWurflTestCase {

  var $wurfl;


  function test_cingular_8100_ver1() {
    foreach(array(
'HTC-8100/1.2 Mozilla/4.0 (compatible; MSIE 5.5; Windows CE; PPC; 240x320)',
'HTC-8100/1.2 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240x320)'
    ) as $ua) {
        $this->checkUA($ua, 'cingular_8100_ver1');
      }
  }



  ############################################################


  function cingularTest() {
    $this->UnitTestCase('cingular Test');
  }


}

$test = new CingularTest();
$test->run(new TextReporter());

?>
