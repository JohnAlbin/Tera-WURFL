<?php

/*
 * This is a template for new test files.
 *
 */

require_once 'test_helper.php';

class dummyTest extends UnitTestCase {

  function test_truth() {
    $this->assertEqual(1, 1);
  }

  ############################################################

  function dummyTest() {
    $this->UnitTestCase('Dummy Test');
  }

  function setUp() {
  }

  function tearDown() {
  }
}

$test = new dummyTest();
$test->run(new TextReporter());

?>
