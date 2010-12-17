<?php

/*
 * Verify that all constant WURFL IDs in use are present in the loaded WURFL
 *
 */

require_once 'test_helper.php';

class UserAgentMatcherTest extends UnitTestCase {

  var $wurfl;
  var $matchers = array();


  function test_matchers_exist(){
    foreach($this->matchers as $matcher){
      $matcherClass = $matcher."UserAgentMatcher";
      $file = "../UserAgentMatchers/{$matcherClass}.php";
      @include_once($file);
      $this->assertTrue(class_exists($matcherClass),"Class $matcherClass could not be loaded ($file)");
    }
  }
  function test_constantIDs_exist(){
    foreach($this->matchers as $matcher){
      $matcherClass = $matcher."UserAgentMatcher";
      $ids = $matcherClass::$constantIDs;
      foreach($ids as $id){
	$result = false;
        try{
          $result = $this->wurfl->db->getDeviceFromID($id);
        }catch(Exception $e){}
        $this->assertTrue($result,"WURFL Device ID does not exist: $id ($matcherClass)\n");
      }
    }
  }

  ############################################################


  function UserAgentMatcherTest() {
    $this->UnitTestCase('UserAgentMatcher Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
    $this->matchers = UserAgentFactory::$matchers;
  }

  function tearDown() {
  }
}

$test = new UserAgentMatcherTest();
$test->run(new TextReporter());

?>
