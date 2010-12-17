<?php

/*
 * Test all matched useragents from the file devices_and_useragents.txt
 * Test all unmatched useragents from the file unrecognised_useragents.txt
 *
 */

require_once 'test_helper.php';

class AllUseragentsTest extends TeraWurflTestCase {

  function test_unmatched_useragents() {
    $line_number = 0;
    foreach(file('unrecognised_useragents.txt') as $line) {
      $line_number++;
      $this->checkUnmatchedUA(chop($line), $line_number);
    }
  }

  function test_matched_useragents() {
    $line_number = 0;
    foreach(file('devices_and_useragents.txt') as $line) {
      $line_number++;
      list($device_id, $useragent) = split(', ', chop($line));
      $this->checkUA($useragent, $device_id, $line_number);
    }
  }

  ############################################################

  function AllUseragentsTest() {
    $this->UnitTestCase('All Useragents Test');
  }

}

$test = new AllUseragentsTest();
$test->run(new TextReporter());

?>
