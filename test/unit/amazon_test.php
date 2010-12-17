<?php

/*
 * Recognising Amazon devices from their user agents
 *
 */

require_once 'test_helper.php';

class AmazonTest extends TeraWurflTestCase {

  var $wurfl;


  function test_amazon_kindle2_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; Linux 2.6.22) NetFront/3.4 Kindle/2.5 (screen 600x800; rotate)'
    ) as $ua) {
        $this->checkUA($ua, 'amazon_kindle2_ver1');
      }
  }



  ############################################################


  function amazonTest() {
    $this->UnitTestCase('amazon Test');
  }


}

$test = new AmazonTest();
$test->run(new TextReporter());

?>
