<?php

/*
 * Recognising Konka devices from their user agents
 *
 */

require_once 'test_helper.php';

class KonkaTest extends TeraWurflTestCase {

  var $wurfl;


  function test_konka_d161_ver1() {
    foreach(array(
'KONKA_D161/KAA161_0.93.C01 Nucleus/1.0 MTK/6219 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0',
'KONKA_D161/KAA161_0.93.C01 Nucleus/1.0 MTK/6219 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0 KONKA_D161/KAA161_0.93.C01 Nucleus/1.0 MTK/6219 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'konka_d161_ver1');
      }
  }



  function test_konka_d263_ver1() {
    foreach(array(
'KONKA_D263/KAA263_0.93.C01 Nucleus/1.0 MTK/6226 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0 KONKA_D263/KAA263_0.93.C01 Nucleus/1.0 MTK/6226 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'konka_d263_ver1');
      }
  }



  function test_konka_d363_ver1() {
    foreach(array(
'KONKA_D363/KAA363_0.93.822 Nucleus/1.0 MTK/6228 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0 KONKA_D363/KAA363_0.93.822 Nucleus/1.0 MTK/6228 Release/0C.01.2005 Browser/Teleca_obigo Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'konka_d363_ver1');
      }
  }



  function test_konka_m526_ver1() {
    foreach(array(
'KONKA_M526_CMCC/KCEM526.CMCC.2.01.704 MTK/6225 Release/7.4.2007 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'konka_m526_ver1');
      }
  }



  ############################################################


  function konkaTest() {
    $this->UnitTestCase('konka Test');
  }


}

$test = new KonkaTest();
$test->run(new TextReporter());

?>
