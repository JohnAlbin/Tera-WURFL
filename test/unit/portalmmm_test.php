<?php

/*
 * Recognising Portalmmm devices from their user agents
 *
 */

require_once 'test_helper.php';

class PortalmmmTest extends TeraWurflTestCase {

  var $wurfl;


  function test_portalmmm_ver2_subl6imode() {
    foreach(array(
'portalmmm/2.0 L6imode(c10;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subl6imode');
      }
  }



  function test_portalmmm_ver2_subl7imode() {
    foreach(array(
'portalmmm/2.0 L7imode(c20;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subl7imode');
      }
  }



  function test_portalmmm_ver2_subm430i() {
    foreach(array(
'portalmmm/2.0 M430i(c20;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subm430i');
      }
  }



  function test_portalmmm_ver2_submy501ci() {
    foreach(array(
'portalmmm/2.0 my501Ci(c10;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_submy501ci');
      }
  }



  function test_portalmmm_ver2_subn411i() {
    foreach(array(
'portalmmm/2.0 N411i(c20;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subn411i');
      }
  }



  function test_portalmmm_ver2_subn412i() {
    foreach(array(
'portalmmm/2.0 N412i-t(c20;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subn412i');
      }
  }



  function test_portalmmm_ver2_subs400i() {
    foreach(array(
'portalmmm/2.0 S400i(c10;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subs400i');
      }
  }



  function test_portalmmm_ver2_subs401i() {
    foreach(array(
'portalmmm/2.0 S401i(c10;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subs401i');
      }
  }



  function test_portalmmm_ver2_subs501i() {
    foreach(array(
'portalmmm/2.0 S501i(c20;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subs501i');
      }
  }



  function test_portalmmm_ver2_subz320i() {
    foreach(array(
'SonyEricssonZ320i',
'SonyEricssonZ320i/R1A029 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ320i/R1B017 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ320i/R1C003 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'SonyEricssonZ320i/R1F003 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'portalmmm/2.0 Z320i(c100;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subz320i');
      }
  }



  function test_portalmmm_ver2_subz650i() {
    foreach(array(
'portalmmm/2.0 Z650i(c100;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'portalmmm_ver2_subz650i');
      }
  }



  ############################################################


  function portalmmmTest() {
    $this->UnitTestCase('portalmmm Test');
  }


}

$test = new PortalmmmTest();
$test->run(new TextReporter());

?>
