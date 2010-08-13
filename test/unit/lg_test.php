<?php

/*
 * Recognising Lg devices from their user agents
 *
 */

require_once 'test_helper.php';

class LgTest extends UnitTestCase {

  var $wurfl;


  function test_lg_10000_ver1() {
    foreach(array(
'LG10000/1.0 TELECA/Q05A1-3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_10000_ver1');
      }
  }



  function test_lg_220c_ver1() {
    foreach(array(
'LG-LG220C[TF268435458412854242000000019105818083] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458412864866000000012564976058] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416238920000000019282431898] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416477195000000018504209510] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416544148000000012077680902] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416549933000000016068721874] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416561740000000014027056032] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416595606000000013174024110] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416633133000000014237422392] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416654195000000014172088083] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416690614000000017795372612] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458416698380000000017857721983] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458503259411000000019013048368] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458503261253000000012543175232] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458503281132000000019514152497] UP.Browser/6.2.3.8 (GUI) MMP/2.0(REAL IP: 209.59.13.56)',
'LG-LG220C[TF268435458503296384000000018706358717] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458503302996000000012512221686] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458503304287000000015739349082] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458503320693000000012562639120] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458503641140001118018282926774] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458507563459000000018632267924] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458507572328000000019369336492] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458507607976000000012764515869] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458507647663000000016206404756] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458507657158000000012077132176] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458507689514000000014066966531] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458509935657000000019199390735] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458509937234000000013372442010] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458512407379000000018013001360] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458512415014000000019137026232] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458512425558000000013173831852] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458512427143000000018703310165] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458512443229000000018653044933] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458512446496000000018643450962] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458513968076000000018287138370] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435458513981434000000019104091161] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300662518000000018502748696] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300671942000000015416134901] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300674532000000014802842314] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300684867000000017065624154] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300689867000000015595938483] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300700299000000019107505586] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300708514000000012087397260] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300722130000000018706434572] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300726856000000019312091188] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300739710000000015074916506] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300742920000000017605679701] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300758877000000017755135011] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300762959000000016202159743] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300770083000000014849413160] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300776560000000014172624525] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300776756000000014792166111] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300780236000000012525586074] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300806265000000014796700255] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300834462000000017159020381] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300861601000000015072162079] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300868356000000017069839849] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300868357000000014043093603] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459300871137000000019038026389] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303666112000000014046174671] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303667655000000014049872320] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303680228000000012144704987] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303680695000000012146054583] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303702817000000019108800953] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303717347000000017573540516] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303722446000000012522043058] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303731040000000014234371781] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303757354000000012813894332] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303758232000000014064904158] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303760635000000014252318192] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303764449000000012094178160] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303772240000000013153608799] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303772313000000013044103591] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303772842000000015806991630] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303781101000000015402717988] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303784112000000012392407792] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303784468000000012293266944] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303785675000000013256276045] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303786071000000019182537625] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303818976000000019103863011] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303837795000000014172299655] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303849189000000013372443516] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303872153000000015187426972] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303878520000000014439454255] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303878521000000014324483263] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303880787000000019376842122] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303892114000000017163922396] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303900208000000018592429263] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303909639000000017852015666] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303928887000000019792531794] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303929433000000017853383441] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303933645000000019162068818] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459303989207000000014066726912] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459304005091000000015133120183] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459304011458000000017152149917] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459304027983000000015734530582] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459304030785000000018653143243] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459304098915000000019107235581] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459304110527000000019034404860] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG220C[TF268435459304126346000000019033735084] UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_220c_ver1');
      }
  }


  function test_lg_c710_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; Liquid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-GB; Liquid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-PT; Liquid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; fr-FR; Liquid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; Liquid Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; it-it; Liquid Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17 Acer_S100/Acer_LiquidE_1.100.06_EMEA_VFIT',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; LS670)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ko-KR; LU2300)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; nl-NL; Liquid)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; ru-RU; Liquid)',
    ) as $ua) {
        $this->checkUA($ua, 'lg_c710_ver1');
      }
  }


  function test_lg_260_ver1() {
    foreach(array(
'LGE-LG260 POLARIS-LG260/2.0(GUI) MMP/2.0',
'LGE-LG260/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_260_ver1');
      }
  }



  function test_lg_265_ver1() {
    foreach(array(
'LG265/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0',
'LGE-LG265 POLARIS/6.01 MMP/2.0',
'LGE-LG265/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_265_ver1');
      }
  }



  function test_lg_280_ver1() {
    foreach(array(
'LGE-LG280 AU-OBIGO/Q05A1-3.12 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_280_ver1');
      }
  }



  function test_lg_290c_ver1() {
    foreach(array(
'LGE-LG290C/1.0[TF268435458412749292000000014782837888] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458412750680000000013154666355] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458412751585000000014792958561] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458412751969000000014195085860] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458412758698000000019418942059] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458412760319000000015123650972] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458412761421000000014175431445] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458412765720000000018142333981] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458415843039000000013345317548] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458415850394000000013182824767] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458415858879000000018503845250] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458415875613000000017405261037] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458415882343000000018433596241] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458415887281000000019312601677] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458503180687000000015417018275] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458503181282000000014066975310] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458506680793000000013162490217] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458506698562000000018504470037] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458506704451000000019854152896] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458506706431000000018123414691] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458506713709000000012526390464] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458509868669000000019183852202] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458509882250000000012077132796] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458512392569000000015415199019] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458513117496000000014785086519] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458513120377000000017318453679] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458513126325000000016202538501] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458513133178000000016198160718] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458513875308000000015127185657] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458513896712000000014235394772] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458513918607000000015758259554] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458513923608000000015052745342] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516619416000000014045761766] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516623425000000014792872570] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516628380000000019183157717] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516628744000000018163416300] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516631378000000014693830474] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516636310000000019033318877] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516646184000000015416134900] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516654359000000018155356599] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516657699000000012012840189] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516666453000000015047840146] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516668934000000018508906880] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516669317000000016204539261] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516677732000000019047384260] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516682108000000016053211320] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516682806000000014322491890] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516700042000000012522698661] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516706843000000017022819782] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516707530000000015415929274] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516714896000000015755176666] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516715578000000018704506193] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516717287000000015755176980] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516718314000000012348557186] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516728263000000012564438685] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516733135000000019208574835] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516738270000000015059199648] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516739763000000014793014207] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516755573000000013862495192] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516760148000000016606313831] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516762043000000014093658737] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516764216000000012057184870] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435458516767055000000018705984202] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301005076000000012083512638] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301019556000000018508673718] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301021949000000012299475908] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301024798000000015053822453] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301028723000000012512953535] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301028728000000015016175237] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301038484000000019122787935] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301040768000000019104160301] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301045154000000013047305710] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301048997000000019033733368] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301049882000000012072675578] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301053071000000015096304359] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301069821000000012567944772] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301074137000000018645617360] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301081659000000013862922769] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301094872000000015712088237] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301122258000000014092894588] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301123450000000019285756755] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301125704000000013189570903] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301125975000000015712084524] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459301134142000000017757371236] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459303598922000000013364794327] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459303604693000000016157884926] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459303609453000000019123466073] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459303613712000000018159923400] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459303631642000000014175597774] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459307018625000000015123649014] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459307023547000000013095737235] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459307028519000000014176699719] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459307074046000000012254367268] UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LGE-LG290C/1.0[TF268435459307079719000000018323184040] UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_290c_ver1');
      }
  }



  function test_lg_3300_ver1() {
    foreach(array(
'LGE-LG3300/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_3300_ver1');
      }
  }



  function test_lg_370_ver1() {
    foreach(array(
'LGE-LG370/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_370_ver1');
      }
  }



  function test_lg_5500_ver1() {
    foreach(array(
'LG5500/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_5500_ver1');
      }
  }



  function test_lg_600_ver1() {
    foreach(array(
'LGE-LG600 POLARIS/6.01 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_600_ver1');
      }
  }



  function test_lg_8100_ver1() {
    foreach(array(
'LG/U8100'
    ) as $ua) {
        $this->checkUA($ua, 'lg_8100_ver1');
      }
  }



  function test_lg_8180_ver1() {
    foreach(array(
'LG/U8180/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_8180_ver1');
      }
  }



  function test_lg_840_ver1() {
    foreach(array(
'Mozilla/5.0 (compatible; Teleca Q7; Brew 4.0.3; U; en) 240X400 LGE LG840'
    ) as $ua) {
        $this->checkUA($ua, 'lg_840_ver1');
      }
  }



  function test_lg_8550_ver1_telusmobility() {
    foreach(array(
'LG8550/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_8550_ver1_telusmobility');
      }
  }



  function test_lg_8600_ver1() {
    foreach(array(
'LG8600/1.1 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_8600_ver1');
      }
  }



  function test_lg_8700_ver1() {
    foreach(array(
'LGE-LG8700 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_8700_ver1');
      }
  }



  function test_lg_8700_ver1_telusmobility() {
    foreach(array(
'LG8700/1.1 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_8700_ver1_telusmobility');
      }
  }



  function test_lg_9100_ver1() {
    foreach(array(
'LG9100-parrot/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0',
'LG9100/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_9100_ver1');
      }
  }



  function test_lg_9600_ver1() {
    foreach(array(
'LG9600/1.0 TELECA/Q7.0-1.6 MMP/2.0',
'Mozilla/5.0(compatible; Teleca Q7; 4.0.3; U; en) 240X480 LGE LG-LG9600'
    ) as $ua) {
        $this->checkUA($ua, 'lg_9600_ver1');
      }
  }



  function test_lg_9700_ver1() {
    foreach(array(
'LG9700/1.0 TELECA/Q7.0-1.3 MMP/2.0',
'LG9700/1.1 TELECA/Q7.0-1.3 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_9700_ver1');
      }
  }



  function test_lg_ad6335_ver1() {
    foreach(array(
'LGE-AD6335/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ad6335_ver1');
      }
  }



  function test_lg_ally_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-US; Ally)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; en-us; Ally Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-US; Ally)',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-es; Alcatel OT-980 Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (Linux; U; Android 2.1-update1; es-us; Ally Build/ERE27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ally_ver1');
      }
  }



  function test_lg_ax265_ver1() {
    foreach(array(
'LGE-AX265/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ax265_ver1');
      }
  }



  function test_lg_ax275_ver1() {
    foreach(array(
'LGE-AX300/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ax275_ver1');
      }
  }



  function test_lg_ax565_ver1() {
    foreach(array(
'LGE-AX565/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ax565_ver1');
      }
  }



  function test_lg_ax585_ver1() {
    foreach(array(
'LGE-AX585/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ax585_ver1');
      }
  }



  function test_lg_ax840_ver1() {
    foreach(array(
'Mozilla/5.0 (compatible; Teleca Q7; Brew 3.1.5; U; en) 240X400 LGE AX840'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ax840_ver1');
      }
  }



  function test_lg_b2000_ver1() {
    foreach(array(
'LG-B2000 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_b2000_ver1');
      }
  }



  function test_lg_b2050_ver1() {
    foreach(array(
'LG-B2050 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_b2050_ver1');
      }
  }



  function test_lg_b2060_ver1() {
    foreach(array(
'LG-B2060 V100 AU/4.10 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_b2060_ver1');
      }
  }



  function test_lg_b2100_ver1() {
    foreach(array(
'LG-B2100 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_b2100_ver1');
      }
  }



  function test_lg_b2150_ver1() {
    foreach(array(
'LG-B2150 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_b2150_ver1');
      }
  }



  function test_lg_bl20_ver1() {
    foreach(array(
'LG-BL20/v1.0 Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'LG-BL20/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-BL20/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-BL20/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-BL20/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-BL20/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-BL20/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-BL20/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/BL20/R1 Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/BL20/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/BL20/v10b Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/5.0 (Vodafone/1.0/LG-BL20/V10b Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-BL20/V10d Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-BL20/V10e Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-GS290/V10b Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-GS290/V10c Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_bl20_ver1');
      }
  }



  function test_lg_bl40_ver1() {
    foreach(array(
'LG-BL40-Orange/V10b Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-BL40-Orange/V10c Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-BL40-V10b Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-BL40/V10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/BL40/V10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/BL40g/V10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/5.0 (Vodafone/1.0/LG-BL40/V10b Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-BL40/V10c Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_bl40_ver1');
      }
  }



  function test_lg_c1100_ver1() {
    foreach(array(
'LG-C1100 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c1100_ver1');
      }
  }



  function test_lg_c1150_ver1() {
    foreach(array(
'LG-C1150 MIC/WAP2.0 MIDP-2.0/CLDC-1.0',
'LG-C1150 MIC/WAP2.0 MIDP-2.0/CLDC-1.0 UP.Link/1.1',
'LG-C1150/MIC/WAP2.0/MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c1150_ver1');
      }
  }



  function test_lg_c1300i_ver1() {
    foreach(array(
'LG-C1300i UP.Browser/6.2.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c1300i_ver1');
      }
  }



  function test_lg_c2200_ver1() {
    foreach(array(
'LG-C2200 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c2200_ver1');
      }
  }



  function test_lg_c2500_ver1_submic() {
    foreach(array(
'LG-C2500 MIC/WAP2.0 MIDP-2.0/CLDC-1.0',
'LG-C2500 MIC/WAP2.0 MIDP-2.0/CLDC-1.0 LG-C2500 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c2500_ver1_submic');
      }
  }



  function test_lg_c2600_ver1() {
    foreach(array(
'LG-C2600 MIC/WAP2.0 MIDP-2.0/CLDC-1.0',
'LG-C2600 MIC/WAP2.0 MIDP-2.0/CLDC-1.0 LG-C2600 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c2600_ver1');
      }
  }



  function test_lg_c3100_ver1() {
    foreach(array(
'LG-C3100 AU/4.10 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c3100_ver1');
      }
  }



  function test_lg_c3300_ver1() {
    foreach(array(
'LG-C3300 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c3300_ver1');
      }
  }



  function test_lg_c3380_ver1() {
    foreach(array(
'LG-C3380 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_c3380_ver1');
      }
  }



  function test_lg_cb630_ver1() {
    foreach(array(
'LG-CB630/V10d Obigo/Q05A Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-CB630/V10d Obigo/Q05A Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.06.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cb630_ver1');
      }
  }



  function test_lg_ce110_ver1() {
    foreach(array(
'LG-CE110/V1.0g Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CE110/V1.0i Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ce110_ver1');
      }
  }



  function test_lg_cf360_ver1() {
    foreach(array(
'LG-CF360/V10d Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-CF360/V10h Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-CF360/V10h Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG-CF360/V10h Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'LG-CF360/V10h Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.06.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cf360_ver1');
      }
  }



  function test_lg_cg180_ver1() {
    foreach(array(
'LG-CG180/V1.1a UP.Browser/6.2.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cg180_ver1');
      }
  }



  function test_lg_cg225_ver1() {
    foreach(array(
'LG-CG225 UP.Browser/6.2.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cg225_ver1');
      }
  }



  function test_lg_ct810_ver1() {
    foreach(array(
'LG-CT810/V10h IEMobile/7.11 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'LG-CT810/V10h NetFront/v3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CT810/V10i IEMobile/7.11 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'LG-CT810/V10i NetFront/v3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CT810/V10i NetFront/v3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'LG-CT810/V10x IEMobile/7.11 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'LG-CT810/V10x NetFront/v3.5 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ct810_ver1');
      }
  }



  function test_lg_cu400_ver1() {
    foreach(array(
'LG-CU400/V1.0 Obigo/Q04C Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cu400_ver1');
      }
  }



  function test_lg_cu500_ver1() {
    foreach(array(
'LG-CU500 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cu500_ver1');
      }
  }



  function test_lg_cu515_ver1() {
    foreach(array(
'LG-CU515/V1.0c Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU515/V1.0e Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU515/V1.0g Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cu515_ver1');
      }
  }



  function test_lg_cu575_ver1() {
    foreach(array(
'LG-CU575/V10d Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU575/V10h Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU575/V10h Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cu575_ver1');
      }
  }



  function test_lg_cu720_ver1() {
    foreach(array(
'LG-CU720/V1.0g Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU720/V1.0k Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU720/V1.0l Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU720/V1.0l Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'LG-CU720/V1.0l Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cu720_ver1');
      }
  }



  function test_lg_cu915_ver1() {
    foreach(array(
'LG-CU915/V1.0h Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cu915_ver1');
      }
  }



  function test_lg_cu920_ver1() {
    foreach(array(
'LG-CU920/V1.0h Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU920/V1.0h Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'LG-CU920/V1.0o Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU920/V1.0p Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU920/V1.0p Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'LG-CU920/V1.0s Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-CU920/V1.0s Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'LG-CU920/V1.0s Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG-CU920/V1.0s Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'LG-CU920/V1.0s Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cu920_ver1');
      }
  }



  function test_lg_cx10000_ver1() {
    foreach(array(
'Mozilla/4.1 (compatible; Teleca/Q05A/GS-CX10000)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_cx10000_ver1');
      }
  }



  function test_lg_f2100_ver1() {
    foreach(array(
'LG-F2100 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_f2100_ver1');
      }
  }



  function test_lg_f2200_ver1() {
    foreach(array(
'LG-F2200'
    ) as $ua) {
        $this->checkUA($ua, 'lg_f2200_ver1');
      }
  }



  function test_lg_f2300_ver1_subua() {
    foreach(array(
'LG-F2300 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_f2300_ver1_subua');
      }
  }



  function test_lg_f2400_ver1() {
    foreach(array(
'LG-F2400 MIC/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-F2400 MIC/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_f2400_ver1');
      }
  }



  function test_lg_f9200_ver1() {
    foreach(array(
'LG9200/1.0 TELECA/Q7.2-1.1 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_f9200_ver1');
      }
  }



  function test_lg_g1600_ver1() {
    foreach(array(
'LG-G1600 AU/4.10 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_g1600_ver1');
      }
  }



  function test_lg_g262_ver1() {
    foreach(array(
'LG-G262 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_g262_ver1');
      }
  }



  function test_lg_g510_ver1() {
    foreach(array(
'LG-G510 AU/4.2'
    ) as $ua) {
        $this->checkUA($ua, 'lg_g510_ver1');
      }
  }



  function test_lg_g5300_ver1() {
    foreach(array(
'LG-G5300 AU/4.10'
    ) as $ua) {
        $this->checkUA($ua, 'lg_g5300_ver1');
      }
  }



  function test_lg_g5600_ver1() {
    foreach(array(
'LG-G5600 MIC/WAP2.0 MIDP-2.0/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_g5600_ver1');
      }
  }



  function test_lg_g7100_ver1() {
    foreach(array(
'LG-G7100 AU/4.10 Profile/MIDP-1.0 Configuration/CLDC-1.0',
'LG-G7100 AU/4.10 Profile/MIDP-2.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_g7100_ver1');
      }
  }



  function test_lg_g8000_ver1() {
    foreach(array(
'LG G8000/2.0 PDK/2.5 JAVA'
    ) as $ua) {
        $this->checkUA($ua, 'lg_g8000_ver1');
      }
  }



  function test_lg_gb170_ver1() {
    foreach(array(
'LG-GB170/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb170_ver1');
      }
  }



  function test_lg_gb175_ver1() {
    foreach(array(
'LG-GB175/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb175_ver1');
      }
  }



  function test_lg_gb190_ver1() {
    foreach(array(
'LG-GB190 Obigo/WAP2.0',
'LG-GB190 Obigo/WAP2.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb190_ver1');
      }
  }



  function test_lg_gb210_ver1() {
    foreach(array(
'LG-GB210 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb210_ver1');
      }
  }



  function test_lg_gb220_ver1() {
    foreach(array(
'LG-GB220/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb220_ver1');
      }
  }



  function test_lg_gb230_ver1() {
    foreach(array(
'LG-GB230/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb230_ver1');
      }
  }



  function test_lg_gb250_ver1() {
    foreach(array(
'LG-GB250/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb250_ver1');
      }
  }



  function test_lg_gb255_ver1() {
    foreach(array(
'LG-GB255/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb255_ver1');
      }
  }



  function test_lg_gb270_ver1() {
    foreach(array(
'LG-GB270 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-GB270 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1, LG-GB270 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb270_ver1');
      }
  }



  function test_lg_gb280_ver1() {
    foreach(array(
'LG-GB280/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gb280_ver1');
      }
  }



  function test_lg_gc900_ver1() {
    foreach(array(
'LG-GC900-orange/V10g Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GC900-orange/V10n Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GC900/V10a Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GC900F/V10b Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GC900F/V10g Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gc900_ver1');
      }
  }



  function test_lg_gd330_ver1() {
    foreach(array(
'LG-GD330/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-GD330/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG-GD330/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gd330_ver1');
      }
  }



  function test_lg_gd510_ver1() {
    foreach(array(
'LG-GD510-Bouygues/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GD510-Orange/V10d Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 lg-gd510',
'LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1, LG-GD510/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GD510/V10c Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gd510_ver1');
      }
  }



  function test_lg_gd580_ver1() {
    foreach(array(
'LG-GD580/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gd580_ver1');
      }
  }



  function test_lg_gd710_ver1() {
    foreach(array(
'LG-GD710/V10f; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14812; U; en) Opera 9.50',
'LG-GD710/V10f; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14812; U; es) Opera 9.50'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gd710_ver1');
      }
  }



  function test_lg_gd880_ver1() {
    foreach(array(
'Mozilla/5.0 (LG/GD880 Browser/AppleWebKit/531 Widget/LGMW/3.0 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (LG/GD880/V10a Browser/AppleWebKit/531 Widget/LGMW/3.0 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gd880_ver1');
      }
  }



  function test_lg_gd900_ver1() {
    foreach(array(
'LG-GD900 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GD900/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GD900/V10a Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gd900_ver1');
      }
  }



  function test_lg_gm200_ver1() {
    foreach(array(
'LG-GM200 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-GM200 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gm200_ver1');
      }
  }



  function test_lg_gm205_ver1() {
    foreach(array(
'LG-GM205 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gm205_ver1');
      }
  }



  function test_lg_gm370_ver1() {
    foreach(array(
'LG-GM730F/IEMobile/v6.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gm370_ver1');
      }
  }



  function test_lg_gm730_ver1() {
    foreach(array(
'LG-GM730/v10a WM/6.1 IEMobile/6.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'LG-GM730f/IEMobile/v6.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gm730_ver1');
      }
  }



  function test_lg_gm750_ver1() {
    foreach(array(
'Mozilla/5.0 Vodafone/1.0/LG-GM750/V10b Browser/IE8.12 MMS/LGMMSv1.0/1.2 Java/LGVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'Mozilla/5.0 Vodafone/1.0/LG-GM750/V10d Browser/IE8.12 MMS/LGMMSv1.0/1.2 Java/LGVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)',
'Mozilla/5.0 Vodafone/1.0/LG-GM750/V10f Browser/IE8.12 MMS/LGMMSv1.0/1.2 Java/LGVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gm750_ver1');
      }
  }



  function test_lg_gm_210_ver1() {
    foreach(array(
'LG-GM210/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gm_210_ver1');
      }
  }



  function test_lg_gm_310_ver1() {
    foreach(array(
'LG-GM310/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gm_310_ver1');
      }
  }



  function test_lg_gr500_ver1() {
    foreach(array(
'LG-GR500/V10f Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GR500/V10f Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0',
'LG-GR500/V10f Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'LG-GR500/V10j Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GR500/V10j Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'LG-GR500/V10j Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'LG-GR500F/V10a Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GR500FD/V10a Teleca/Q7.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'LG-GR500R/V10a Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'LG-GR500R/V10a Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gr500_ver1');
      }
  }



  function test_lg_gr501_ver1() {
    foreach(array(
'LG-GR501/V10c Obigo/Q7.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GR501/V10d Obigo/Q7.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gr501_ver1');
      }
  }



  function test_lg_gs505_ver1() {
    foreach(array(
'LG-GS505 Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
    ) as $ua) {
        $this->checkUA($ua, 'lg_gs505_ver1');
      }
  }

  function test_lg_gs500_ver1() {
    foreach(array(
'LG-GS500/V08c Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GS500/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
    ) as $ua) {
        $this->checkUA($ua, 'lg_gs500_ver1');
      }
  }



  function test_lg_gs_cx700_ver1() {
    foreach(array(
'Mozilla/4.1 (compatible; Teleca/Q07/GS-CX700)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gs_cx700_ver1');
      }
  }



  function test_lg_gt360_ver1() {
    foreach(array(
'LG-GT360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-GT360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0',
'LG-GT360/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GT360/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gt360_ver1');
      }
  }



  function test_lg_gt365_ver1() {
    foreach(array(
'LG-GT365/V10g Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-GT365/V10h Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-GT365/V10h Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'LG-GT365/V11c Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-GT365/V11c Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG-GT365/V11c Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.17.0',
'LG-GT365/V11c Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 166.216.194.65)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gt365_ver1');
      }
  }



  function test_lg_gt405_ver1() {
    foreach(array(
'LG-GT405-Orange/V10d Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gt405_ver1');
      }
  }



  function test_lg_gt500_ver1() {
    foreach(array(
'LG-GT500-v10b Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GT500-v10c Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GT500-v10e Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GT500-v10i Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GT500/v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/GT405/v1.0',
'LG/GT500-Bouygues/v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/GT500/v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gt500_ver1');
      }
  }

  function test_lg_gt400_ver1() {
    foreach(array(
'LG-GT400/v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/5.0 (Vodafone/1.0/LG-GT400/V10c Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-GT400/V10d Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
    ) as $ua) {
        $this->checkUA($ua, 'lg_gt400_ver1');
      }
  }


  function test_lg_gt505_ver1() {
    foreach(array(
'LG-GT505-Orange/V10c Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GT505-Orange/V10f Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GT505/v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GT505/v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG/GT505/v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/5.0 (Vodafone/1.0/LG-GT505/V10b Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-GT505/V10d Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gt505_ver1');
      }
  }



  function test_lg_gt810h_ver1() {
    foreach(array(
'LG-GT810H Netfront/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-GT810H Netfront/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
'LG-GT810H Netfront/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gt810h_ver1');
      }
  }



  function test_lg_gt950_ver1() {
    foreach(array(
'LG-GT950/V10g Obigo/Q7.3 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gt950_ver1');
      }
  }



  function test_lg_gu220_ver1() {
    foreach(array(
'LG-GU220/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GU220/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gu220_ver1');
      }
  }



  function test_lg_gu230_ver1() {
    foreach(array(
'LG-GU230/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gu230_ver1');
      }
  }



  function test_lg_gu280_ver1() {
    foreach(array(
'LG-GU280-Orange/v10b Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GU280-Orange/v10e Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GU280/Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GU280/v09a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gu280_ver1');
      }
  }



  function test_lg_gu285_ver1() {
    foreach(array(
'LG-GU285/v10a Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GU285g Browser/Obigo-Q7.3 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gu285_ver1');
      }
  }



  function test_lg_gw300_ver1() {
    foreach(array(
'LG-GW300 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-GW300 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 Novarra-Vision/8.0',
'LG-GW300-Bouygues Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-GW300-Orange/V10c Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GW300-Orange/V10f Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GW300/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-GW300/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG-GW300/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UNTRUSTED/1.0 lg-gw300',
'LG-GW300/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'LG-GW300/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.0',
'LG-GW300/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GW300/V100 Teleca/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GW300FD/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gw300_ver1');
      }
  }



  function test_lg_gw520_ver1() {
    foreach(array(
'LG-GW520',
'LG-GW520 Teleca/WAP2.0 MIDP-2.1/CLDC-1.1',
'LG-GW520 Teleca/WAP2.0 MIDP-2.1/CLDC-1.1 UNTRUSTED/1.0',
'LG-GW520 Teleca/WAP2.0 MIDP-2.1/CLDC-1.1 UP.Link/6.3.1.16.0',
'LG-GW520-Bouygues Teleca/WAP2.0 MIDP-2.1/CLDC-1.1',
'LG-GW520-H3G/V10f Teleca/WAP2.0 MIDP-2.1/CLDC-1.1',
'LG-GW520-H3G/V10g Teleca/WAP2.0 MIDP-2.1/CLDC-1.1',
'LG-GW520-orange/V10c Teleca/WAP2.0 MIDP-2.1/CLDC-1.1',
'LG-GW520-orange/V10d Teleca/WAP2.0 MIDP-2.1/CLDC-1.1',
'LG-GW520-orange/V10h Teleca/WAP2.0 MIDP-2.1/CLDC-1.1',
'LG-GW520/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GW520/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'LG-GW520/V10a Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'LG-GW520/V10a Teleca/WAP2.0 MIDP-2.1/CLDC-1.1',
'Mozilla/5.0 (Vodafone/1.0/LG-GW520/V10c Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-GW520/V10e Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gw520_ver1');
      }
  }



  function test_lg_gw525_ver1() {
    foreach(array(
'LG-GW525 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-GW525 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0 Mozilla/4.0 (compatible; MSIE 4.0; ) Opera',
'LG-GW525 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.13.0',
'LG-GW525/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-GW525/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0',
'LG-GW525g/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gw525_ver1');
      }
  }



  function test_lg_gw550_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0) LG-GW550 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gw550_ver1');
      }
  }



  function test_lg_gw620_ver1() {
    foreach(array(
'LG-GW620 Mozilla/5.0 (Linux; U; Android 1.5) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 Java/Jbed/7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 MMS/LG-Android-MMS-V1.0/1.2',
'Mozilla/5.0 (Linux; U; Android 1.5; LG Eve) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; LG Eve) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 Java/Jbed/7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/5.0 (Linux; U; Android 1.5; LG Eve) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 MMS/LG-Android-MMS-V1.0/1.2',
'Mozilla/5.0 (Linux; U; Android 1.5; LG-GW620-Bouygues) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; de-DE; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-; LG GW620R Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; en-; LG GW620R)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-CA; LG GW620R)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-GB; LG GW620R)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-NZ; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; en-us; LG Eve-Orange) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 Java/Jbed/7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 MMS/LG-Android-MMS-V1.0/1.2',
'Mozilla/5.0 (Linux; U; Android 1.5; es-; SPH-M900)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; es-ES; LG GW620g)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-CA; LG GW620R)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-FR; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; fr-ch; LG GW620 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.5; nl-NL; LG GW620)',
'Mozilla/5.0 (Linux; U; Android 1.5; vi-VN; LG GW620)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gw620_ver1');
      }
  }



  function test_lg_gw620f_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; pt-BR; LG GW620F)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gw620f_ver1');
      }
  }



  function test_lg_gw825_ver1() {
    foreach(array(
'LG-GW825/V10c IEMobile/8.12 Profile/MIDP-2.0 Configuration/CLDC-1.1 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_gw825_ver1');
      }
  }



  function test_lg_hb620_ver1() {
    foreach(array(
'LG/HB620/v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_hb620_ver1');
      }
  }



  function test_lg_hb620t_ver1() {
    foreach(array(
'LG-HB620T/v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/HB620T/v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/HB620T/v10b Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-HB620T/V10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_hb620t_ver1');
      }
  }



  function test_lg_kb620_ver1() {
    foreach(array(
'LG/KB620/v1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kb620_ver1');
      }
  }



  function test_lg_kb770_ver1() {
    foreach(array(
'LG/KB770/v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KB770/v10b Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kb770_ver1');
      }
  }



  function test_lg_kb775f_ver1() {
    foreach(array(
'LG-KB770-Orange/v10c Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KB775F Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kb775f_ver1');
      }
  }



  function test_lg_kc550_ver1() {
    foreach(array(
'LG-KC550 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KC550/V10c Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KC550/V10f Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kc550_ver1');
      }
  }



  function test_lg_kc910_ver1() {
    foreach(array(
'LG-KC910-Orange/V10c Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910-Orange/V10e Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910-Orange/V10g Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910-Orange/V10i Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910/V10a Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910Q Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910Qa Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KC910/V10a Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KC910/V10b Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KC910/v1.0',
'Mozilla/5.0 (Vodafone/1.0/LG-KC910/V10c Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-KC910/V10g Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-KC910/V10h Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kc910_ver1');
      }
  }



  function test_lg_kc910_ver1_subv10b() {
    foreach(array(
'LG-KC910-v10a Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910-v10b Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910-v10e Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KC910-v10h Browser/Teleca-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kc910_ver1_subv10b');
      }
  }



  function test_lg_kc910i_ver1() {
    foreach(array(
'LG/KC910i-Bouygues/V10a Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KC910i/V10a Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kc910i_ver1');
      }
  }



  function test_lg_ke500_ver1() {
    foreach(array(
'LG-KE500 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke500_ver1');
      }
  }



  function test_lg_ke590i_ver1() {
    foreach(array(
'LG-KE590 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KE590 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke590i_ver1');
      }
  }



  function test_lg_ke600_ver1() {
    foreach(array(
'LG-KE600 MIC/1.1.14 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke600_ver1');
      }
  }



  function test_lg_ke770_ver1() {
    foreach(array(
'LG-KE770 MIC/1.1.14 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke770_ver1');
      }
  }



  function test_lg_ke800_ver1() {
    foreach(array(
'LG-KE800 MIC/1.1.14 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke800_ver1');
      }
  }



  function test_lg_ke850_ver1() {
    foreach(array(
'LG-KE850 MIC/1.1.14 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke850_ver1');
      }
  }



  function test_lg_ke970_ver1() {
    foreach(array(
'LG-KE970 MIC/1.1.14 MIDP-2.0/CLDC-1.1',
'LG-KE970 MIC/1.1.14 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0',
'LG-KE970 MIC/1.1.14 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0',
'LG-KE970/V10c Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KE970/V10d Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KE970/V10e Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KE970s MIC/1.1.14 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke970_ver1');
      }
  }



  function test_lg_ke990_ver1() {
    foreach(array(
'LG-KE990/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke990_ver1');
      }
  }



  function test_lg_ke990_ver1_subd() {
    foreach(array(
'LG/KE990d/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke990_ver1_subd');
      }
  }



  function test_lg_ke990c_ver1() {
    foreach(array(
'LG/KE990c/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ke990c_ver1');
      }
  }



  function test_lg_kf240_ver1() {
    foreach(array(
'LG-KF240 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KF240 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf240_ver1');
      }
  }



  function test_lg_kf300_ver1() {
    foreach(array(
'LG-KF300 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KF300 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf300_ver1');
      }
  }



  function test_lg_kf310_ver1() {
    foreach(array(
'LG-KF310 Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-KF310-Orange/V10b Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-KF310/V10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KF310/v1.0',
'LG/KF310/v2.0',
'Mozilla/4.0 (Vodafone/1.0/LG-KF310/V10b Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1)',
'Mozilla/4.0 (Vodafone/1.0/LG-KF310/V10c Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf310_ver1');
      }
  }



  function test_lg_kf311_ver1() {
    foreach(array(
'LG-KF311/V10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf311_ver1');
      }
  }



  function test_lg_kf350_ver1() {
    foreach(array(
'LG-KF350 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf350_ver1');
      }
  }



  function test_lg_kf390_ver1() {
    foreach(array(
'LG-KF390 Teleca/Q05A-3.12 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf390_ver1');
      }
  }



  function test_lg_kf510_ver1() {
    foreach(array(
'LG-KF510 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KF510 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf510_ver1');
      }
  }



  function test_lg_kf600_ver1() {
    foreach(array(
'LG-KF600 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KF600 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0',
'LG-KF600/V10b Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf600_ver1');
      }
  }



  function test_lg_kf600d_ver1() {
    foreach(array(
'LG-KF600d Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf600d_ver1');
      }
  }



  function test_lg_kf700_ver1() {
    foreach(array(
'LG-KF700 Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'LG-KF700-Orange/v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KF700/v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-KF700/v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KF701/v10b Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KF700-O2/v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KF700/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf700_ver1');
      }
  }



  function test_lg_kf700c_ver1() {
    foreach(array(
'LG-KF700C Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf700c_ver1');
      }
  }



  function test_lg_kf750_ver1_v10b() {
    foreach(array(
'LG-KF750-v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KF750-v10b Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf750_ver1_v10b');
      }
  }



  function test_lg_kf750v_ver1() {
    foreach(array(
'LG-KF750-Orange/v10c Browser/Obigo-Q05A/3.12MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KF750-Orange/v10i Browser/Obigo-Q05A/3.12MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KF750/v10a Browser/Obigo-Q05A/3.11 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KF755/v10a Browser/Obigo-Q05A/3.11 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KF750/v1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KF750/v10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KF750/v10b Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/4.0 (Vodafone/1.0/LG-KF750/V10a Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf750v_ver1');
      }
  }



  function test_lg_kf755_ver1() {
    foreach(array(
'LG/KF755/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf755_ver1');
      }
  }



  function test_lg_kf900_ver1() {
    foreach(array(
'LG-KF900 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kf900_ver1');
      }
  }



  function test_lg_kg110_ver1() {
    foreach(array(
'LG-KG110 V100 AU/4.10 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg110_ver1');
      }
  }



  function test_lg_kg120_ver1() {
    foreach(array(
'LG-KG120 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg120_ver1');
      }
  }



  function test_lg_kg130_ver1() {
    foreach(array(
'LG-KG130 Obigo/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg130_ver1');
      }
  }



  function test_lg_kg195_ver1() {
    foreach(array(
'LG-KG195/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KG195/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 LG-KG195/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KG195/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1, LG-KG195/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg195_ver1');
      }
  }



  function test_lg_kg200_ver1() {
    foreach(array(
'LG-KG200/V01 Obigo/WAP2.0',
'LG-KG200/V01 Obigo/WAP2.0 LG-KG200/V01 Obigo/WAP2.0',
'LG-KG200/V01 Obigo/WAP2.0, LG-KG200/V01 Obigo/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg200_ver1');
      }
  }



  function test_lg_kg200j_ver1() {
    foreach(array(
'LG-KG200j/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KG200j/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 LG-KG200j/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg200j_ver1');
      }
  }



  function test_lg_kg208_ver1() {
    foreach(array(
'LG-KG208 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg208_ver1');
      }
  }



  function test_lg_kg220_ver1() {
    foreach(array(
'LG-KG220 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg220_ver1');
      }
  }



  function test_lg_kg225_ver1() {
    foreach(array(
'LG-KG225 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg225_ver1');
      }
  }



  function test_lg_kg245_ver1() {
    foreach(array(
'LG-KG245/MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg245_ver1');
      }
  }



  function test_lg_kg280_ver1() {
    foreach(array(
'LG-KG280 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg280_ver1');
      }
  }



  function test_lg_kg290_ver1() {
    foreach(array(
'LG-KG290 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KG290 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.12.0',
'LG-KG290 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.13.0',
'LG-KG290 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.0',
'LG-KG290/V10b Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KG290/V10c Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KG290/V10c Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.13.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg290_ver1');
      }
  }



  function test_lg_kg290uae_ver1() {
    foreach(array(
'LG-KG290UAE Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg290uae_ver1');
      }
  }



  function test_lg_kg300_ver1() {
    foreach(array(
'LG-KG300/V01 Obigo/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg300_ver1');
      }
  }



  function test_lg_kg300j_ver1() {
    foreach(array(
'LG-KG300j/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KG300j/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 LG-KG300j/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg300j_ver1');
      }
  }



  function test_lg_kg320_ver1() {
    foreach(array(
'LG-KG320 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg320_ver1');
      }
  }



  function test_lg_kg800_ver1() {
    foreach(array(
'LG-KG800 MIC/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KG800/V10c Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-TG800 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kg800_ver1');
      }
  }



  function test_lg_kh5200_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.5; en-US; LG KH5200)',
'Mozilla/5.0 (Linux; U; Android 1.5; ko-KR; LG KH5200)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kh5200_ver1');
      }
  }



  function test_lg_km330_ver1() {
    foreach(array(
'LG-KM330 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km330_ver1');
      }
  }



  function test_lg_km335_ver1() {
    foreach(array(
'LG-KM335 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km335_ver1');
      }
  }



  function test_lg_km380_ver1() {
    foreach(array(
'LG-KM380 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km380_ver1');
      }
  }



  function test_lg_km385_ver1() {
    foreach(array(
'LG-KM385 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km385_ver1');
      }
  }



  function test_lg_km500_ver1() {
    foreach(array(
'LG-KM500 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km500_ver1');
      }
  }



  function test_lg_km501_ver1() {
    foreach(array(
'LG-KM501 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km501_ver1');
      }
  }



  function test_lg_km555_ver1() {
    foreach(array(
'LG-KM555/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM555/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/5.0.15650Mod.by.Handler/960; U;en-US)flameblur/2.2.0',
'LG-KM555/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km555_ver1');
      }
  }



  function test_lg_km570_ver1() {
    foreach(array(
'LG-KM570-Bouygues/V10c Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM570/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM570/V10b Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km570_ver1');
      }
  }



  function test_lg_km900_ver1() {
    foreach(array(
'LG-KM900-Bouygues/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900-orange/V10j Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900-orange/V10k Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900-orange/V10t Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900-orange/V10v Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900/V100 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-KM900/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG-KM900/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'LG-KM900/V100 Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.6.4.0.0',
'LG-KM900/V10b Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900/V10c Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900/V10e Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900/V10g Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900/V10h Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900/V10t Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900/V10x Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KM900F/V10a Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'Mozilla/5.0 (Vodafone/1.0/LG-KM900/V10l Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-KM900/V10m Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-KM900/V10o Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-KM900/V10s Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-KM900/V10t Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-KM900/V10v Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)',
'Mozilla/5.0 (Vodafone/1.0/LG-KM900/V10w Browser/Obigo-Q7.1 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_km900_ver1');
      }
  }



  function test_lg_kp110_ver1() {
    foreach(array(
'LG-KP110 Obigo/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp110_ver1');
      }
  }



  function test_lg_kp115_ver1() {
    foreach(array(
'LG-KP115 Obigo/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp115_ver1');
      }
  }



  function test_lg_kp130_ver1() {
    foreach(array(
'LG-KP130 Obigo/WAP2.0',
'LG-KP130-V10a Obigo/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp130_ver1');
      }
  }



  function test_lg_kp135_ver1() {
    foreach(array(
'LG-KP135 Obigo/WAP2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp135_ver1');
      }
  }



  function test_lg_kp170_ver1() {
    foreach(array(
'LG-KP170 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP170-orange/V10a Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP170-orange/V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp170_ver1');
      }
  }



  function test_lg_kp175_ver1() {
    foreach(array(
'LG-KP175 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp175_ver1');
      }
  }



  function test_lg_kp199_ver1() {
    foreach(array(
'LG-KP199 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp199_ver1');
      }
  }



  function test_lg_kp202_ver1() {
    foreach(array(
'LG-KP202-V10b Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp202_ver1');
      }
  }



  function test_lg_kp202i_ver1() {
    foreach(array(
'portalmmm/2.0 KP202i(c10;TB)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp202i_ver1');
      }
  }



  function test_lg_kp210_ver1() {
    foreach(array(
'LG-KP210 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP210 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp210_ver1');
      }
  }



  function test_lg_kp215_ver1() {
    foreach(array(
'LG-KP215 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp215_ver1');
      }
  }



  function test_lg_kp220_ver1() {
    foreach(array(
'LG-KP220/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP220/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 LG-KP220/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP220/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1, LG-KP220/V01 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp220_ver1');
      }
  }



  function test_lg_kp230_ver1() {
    foreach(array(
'LG-KP230-V10a Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp230_ver1');
      }
  }



  function test_lg_kp233_ver1() {
    foreach(array(
'LG-KP233/V10a Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp233_ver1');
      }
  }



  function test_lg_kp260_ver1() {
    foreach(array(
'LG-KP260 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP260-orange/V10c Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp260_ver1');
      }
  }



  function test_lg_kp265_ver1() {
    foreach(array(
'LG-KP265 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP265 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP265 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0',
'LG-KP265 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.12.0',
'LG-KP265 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.13.0',
'LG-KP265 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.0',
'LG-KP265 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp265_ver1');
      }
  }



  function test_lg_kp270_ver1() {
    foreach(array(
'LG-KP270 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP270/V10d Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP270/V10f Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP270V/V10g Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp270_ver1');
      }
  }



  function test_lg_kp275_ver1() {
    foreach(array(
'LG-KP275 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp275_ver1');
      }
  }



  function test_lg_kp320_ver1() {
    foreach(array(
'LG-KP320 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp320_ver1');
      }
  }



  function test_lg_kp330_ver1() {
    foreach(array(
'LG/KP330/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp330_ver1');
      }
  }



  function test_lg_kp500_ver1() {
    foreach(array(
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0',
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0 lg-kp500 teleca',
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0',
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.12.0',
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.13.0',
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.15.0',
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.16.0',
'LG-KP500 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.0',
'LG-KP500-CH Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP500-Orange',
'LG-KP500-Orange/V10g Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP500-Orange/V10g Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0 Opera/9.60 (J2ME/MIDP;Opera Mini/4.2.14912Mod.by.Handler/503; U; en)Presto/2.2.0',
'LG-KP500-Orange/V10i Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP500-Orange/V10i Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0',
'LG-KP500-Orange/V10j Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP500-Orange/V10k Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP500-Orange/V10l Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'Vodafone/1.0/LG-KP500/V10b/Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'Vodafone/1.0/LG-KP500/V10b/Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp500_ver1');
      }
  }



  function test_lg_kp501_ver1() {
    foreach(array(
'LG-KP501 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LGKP501/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LGKP501/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp501_ver1');
      }
  }



  function test_lg_kp502_ver1() {
    foreach(array(
'LG-KP502 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP502-V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP502/V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP502/V10c Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp502_ver1');
      }
  }



  function test_lg_kp505_ver1() {
    foreach(array(
'LG-KP505 Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-KP505 Teleca/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp505_ver1');
      }
  }



  function test_lg_kp570_ver1() {
    foreach(array(
'LG-KP570 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KP570 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kp570_ver1');
      }
  }



  function test_lg_ks10_symbian_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 LG KS10/v10A; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ks10_symbian_ver1');
      }
  }



  function test_lg_ks20_ver1() {
    foreach(array(
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) LG-KS20/TIM/V10b Browser/IEMobile/7.6 MMS/LG-MMS-WINCE-V1.0/1.2 Java/LGVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) LG-KS20/V10a Browser/IEMobile/7.6 MMS/LG-MMS-WINCE-V1.0/1.2 Java/LGVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6) Vodafone/1.0/LG-KS20/V10b Browser/IEMobile/7.6 MMS/LG-MMS-WINCE-V1.0/1.2 Java/LGVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ks20_ver1');
      }
  }



  function test_lg_ks360_ver1() {
    foreach(array(
'LG-KS360',
'LG-KS360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KS360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0',
'LG-KS360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.12.0',
'LG-KS360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.13.0',
'LG-KS360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.16.0',
'LG-KS360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.0',
'LG-KS360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'LG-KS360 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'LG-KS360-Orange/V10d Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KS360-Orange/V10g Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KS360-Orange/V10h Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KS360-Orange/V10i Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KS360/V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KS360/V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.12.0',
'LG-KS360/V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.1.13.0',
'LG-KS360/V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.0',
'LG-KS360/V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'LG-KS360/V10b Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.0',
'LG-KS360/V10h Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KS360/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KS360/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0',
'LG-KS365/V100 Obigo/WAP2.0 Profile/MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ks360_ver1');
      }
  }



  function test_lg_ks500_ver1() {
    foreach(array(
'Mozilla/4.0 (Vodafone/1.0/LG-KS500/V10b Browser/Teleca-Q7.1/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ks500_ver1');
      }
  }



  function test_lg_ks660_ver1() {
    foreach(array(
'LG-KS660 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ks660_ver1');
      }
  }



  function test_lg_kt520_ver1() {
    foreach(array(
'LG-KT520/v10a Browser/Obigo-Q05A/3.11 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-KT520/v10a Browser/Obigo-Q05A/3.11 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG/KT520/v10b Browser/Obigo-Q05A/3.12 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.1 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kt520_ver1');
      }
  }



  function test_lg_kt525_ver1() {
    foreach(array(
'LG/KT525/v1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG/KT525/v1.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kt525_ver1');
      }
  }



  function test_lg_kt610_ver1() {
    foreach(array(
'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 LGKT610/v10A; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413'
    ) as $ua) {
        $this->checkUA($ua, 'lg_kt610_ver1');
      }
  }



  function test_lg_ku250_ver1() {
    foreach(array(
'LG-KU250/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU250/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU250/v10a Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU250/v10c Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku250_ver1');
      }
  }



  function test_lg_ku311_ver1() {
    foreach(array(
'LG-KU310/v10d Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-KU311/v10d Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku311_ver1');
      }
  }



  function test_lg_ku380_ver1() {
    foreach(array(
'LG-KU380/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU380/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU380/v10b Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU380/v10c Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LGKU380/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU380/V10a Browser/Obigo-Q05A1/2.16 MMS/LG-MMS-V1.0/1.2 MediaPlayer/LGPlayer/1.0 Java/ASVM/2.0.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku380_ver1');
      }
  }



  function test_lg_ku385_ver1() {
    foreach(array(
'LG/KU385/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku385_ver1');
      }
  }



  function test_lg_ku450_ver1() {
    foreach(array(
'LG/KU450/v10a Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku450_ver1');
      }
  }



  function test_lg_ku580_ver1() {
    foreach(array(
'LG-KU580 Browser/Obigo-Q05A1/2.16 MMS/LG-MMS-V1.0/1.2 Java/LGVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-V-Profile/VSCL-2.0.0',
'LG-KU580-Orange/v10a Browser/Obigo-Q05A1/2.16 MMS/LG-MMS-V1.0/1.2 Java/LGVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU580/V10a Browser/Obigo-Q05A1/2.16 MMS/LG-MMS-V1.0/1.2 Java/LGVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-V-Profile/VSCL-2.0.0',
'LG/KU580/V10a Browser/Obigo-Q05A1/2.16 MMS/LG-MMS-V1.0/1.2 Java/LGVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-V-Profile/VSCL-2.0.0 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku580_ver1');
      }
  }



  function test_lg_ku800_ver1() {
    foreach(array(
'LG-KU800/v10a Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG/KU800/v1.0',
'LG/KU800/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku800_ver1');
      }
  }



  function test_lg_ku950_ver1_full() {
    foreach(array(
'LG/KU950/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku950_ver1_full');
      }
  }



  function test_lg_ku970_ver1() {
    foreach(array(
'LG-KU970/v1.0',
'LG-KU970/v1.0 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG/KU970/v10a Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU970/v10a Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'LG/KU970/v10a Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.0.0.06.5.0.0.0',
'LG/KU970/v10b Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku970_ver1');
      }
  }



  function test_lg_ku990_ver1() {
    foreach(array(
'LG-KU990/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-KU990/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 lg-ku990',
'LG-KU990/v10c Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/V10g Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/v10ai Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/v10bi Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/v10c Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/v10ci Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/v10e Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/v10f Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990-Orange/v10g Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990/V10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990/V10g Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'LG/KU990/v10a SP Java/ASVM/1.0 SP Profile/MIDP-2.0 SP Configuration/CLDC-1.1 UNTRUSTED/1.0',
'LG/KU990/v10b Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990/v10h Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990/v10i Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990/V10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990/V10b Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990/V10b Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.13.0',
'Vodafone/1.0/LG-KU990/V10c Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990/V10f Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990/V10g Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990/V10h Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990/V10i Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990/V10j Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku990_ver1');
      }
  }



  function test_lg_ku990i_ver1() {
    foreach(array(
'LG/KU990i-Bouygues/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990i-Orange/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990i/v1.0',
'LG/KU990i/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG/KU990i/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.15.0',
'LG/KU990i/v10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.1.16.0',
'Vodafone/1.0/LG-KU990i/V10a Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990i/V10b Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990i/V10b SP Java/ASVM/1.0 SP Profile/MIDP-2.0 SP Configuration/CLDC-1.1 UNTRUSTED/1.0',
'Vodafone/1.0/LG-KU990i/V10c Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'Vodafone/1.0/LG-KU990i/V10c Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1(REAL IP: 212.183.140.36)',
'Vodafone/1.0/LG-KU990i/V10d Browser/Obigo-Q05A/3.6 MMS/LG-MMS-V1.0/1.2 Java/ASVM/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ku990i_ver1');
      }
  }



  function test_lg_l1100_ver1() {
    foreach(array(
'LG-L1100 UP.Browser/6.2.2 (GUI) MMP/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_l1100_ver1');
      }
  }



  function test_lg_l1150_ver1() {
    foreach(array(
'LG-L1150 UP.Browser/6.2.3 (GUI) MMP/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_l1150_ver1');
      }
  }



  function test_lg_l600v_ver1() {
    foreach(array(
'LG/L600V/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_l600v_ver1');
      }
  }



  function test_lg_lg100c_ver1() {
    foreach(array(
'LG-LG100 UP.Browser/6.2.3.8 (GUI) MMP/2.0',
'LG-LG100C[TF268435458500898053003303016207558188] UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lg100c_ver1');
      }
  }



  function test_lg_lg385_ver1() {
    foreach(array(
'LGE-LG385 AU-OBIGO/Q04C1-1.27 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lg385_ver1');
      }
  }



  function test_lg_lg410g_ver1() {
    foreach(array(
'LG-LG410/V10b[TF011804003786920000190019493783676] Teleca/WAP2.0 UP.Link/6.3.1.20.0',
'LG-LG410/V10c[TF011804008694194001304015012068429] Teleca/WAP2.0 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lg410g_ver1');
      }
  }



  function test_lg_lg570v_ver1() {
    foreach(array(
'LGE-LG570V AU-OBIGO/Q04C1-1.27 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lg570v_ver1');
      }
  }



  function test_lg_lg620g_ver1() {
    foreach(array(
'LG-LG620G[TF012114001654529009420018282798939] Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'LG-LG620G[TF012114001767602000000014172317954] Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'LG-LG620G[TF012114001798086000000019043222343] Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'LG-LG620G[TF012114001862445000000013364733052] Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0',
'LG-LG620G[TF012114003058109000000014174347540] Obigo/WAP2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.3.1.20.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lg620g_ver1');
      }
  }



  function test_lg_lg830() {
    foreach(array(
'LGE-LG830 AU-OBIGO/Q05A1-3.8 MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lg830');
      }
  }

  function test_lg_gt_540_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; de-DE; GT540)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; GM_DSTL1)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-GB; GT540)',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-BE; GT540)',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-FR; GT540)',
'Mozilla/5.0 (Linux; U; Android 1.6; ko-KR; GT540)',
'Mozilla/5.0 (Linux; U; Android 1.6; pl-PL; GT540)',
'Mozilla/5.0 (Linux; U; Android 1.6; ru-RU; GT540)',
'Mozilla/5.0 (Linux; U; Android 1.6; tr-tr; GM_DSTL1 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-gb; LG KH5200 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; LG-GT540 ; Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 Java/Jbed/7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 MMS/LG-Android-MMS-V1.0/1.2',
'Mozilla/5.0 (Linux; U; Android 1.6; en-us; LG-GT540; Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 Java/Jbed/7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 MMS/LG-Android-MMS-V1.0/1.2',
'Mozilla/5.0 (Linux; U; Android 1.6; fr-fr; LG-GT540 ; Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1 Java/Jbed/7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 MMS/LG-Android-MMS-V1.0/1.2',
'Mozilla/5.0 (Linux; U; Android 1.6; ko-KR; LG KH5200)',
    ) as $ua) {
      $this->checkUA($ua, 'lg_gt_540_ver1');
    }
  }


  function test_lg_lu2300_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; ko-KR; LU2300)',
'Mozilla/5.0 (Linux; U; Android 1.6; ko-kr; LU2300 Build/Donut) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lu2300_ver1');
      }
  }



  function test_lg_lw310_ver1() {
    foreach(array(
'LGE-LW310/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lw310_ver1');
      }
  }



  function test_lg_lx160_ver1() {
    foreach(array(
'LG-LX165/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lx160_ver1');
      }
  }



  function test_lg_lx260_ver1() {
    foreach(array(
'LG-LX260 POLARIS-LX260/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lx260_ver1');
      }
  }



  function test_lg_lx400_ver1() {
    foreach(array(
'LG-LX400 TELECA-LX400/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lx400_ver1');
      }
  }



  function test_lg_lx550_ver1() {
    foreach(array(
'LG-LX550 AU-MIC-LX550/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lx550_ver1');
      }
  }



  function test_lg_lx570_ver1() {
    foreach(array(
'LG-LX570 AU-MIC-LX570/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lx570_ver1');
      }
  }



  function test_lg_lx600_ver1() {
    foreach(array(
'LG-LX600 Polaris/6.0 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1',
'LG-LX600 Polaris/6.0 MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.4.1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lx600_ver1');
      }
  }



  function test_lg_lx_265_ver1() {
    foreach(array(
'POLARIS/6.01 (BREW 3.1.5; U; en-us; LG; LX265; POLARIS/6.01/WAP) MMP/2.0 profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lx_265_ver1');
      }
  }



  function test_lg_lx_370_ver1() {
    foreach(array(
'POLARIS/6.01 (BREW 3.1.5; U; en-us; LG; LX370; POLARIS/6.01/AMB) MMP/2.0 Profile/MIDP-2.1 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_lx_370_ver1');
      }
  }



  function test_lg_m6100_ver1() {
    foreach(array(
'LG-M6100 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_m6100_ver1');
      }
  }



  function test_lg_me550_ver1() {
    foreach(array(
'LG-ME550 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_me550_ver1');
      }
  }



  function test_lg_me770_ver1() {
    foreach(array(
'LG-ME770 MIC/1.1.14 MIDP-2.0/CLDC-1.1',
'LG-ME770 MIC/1.1.14 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_me770_ver1');
      }
  }



  function test_lg_me770d_ver1() {
    foreach(array(
'LG-ME770d MIC/1.1.14 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_me770d_ver1');
      }
  }



  function test_lg_me850d_ver1() {
    foreach(array(
'LG-ME850d MIC/1.1.14 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_me850d_ver1');
      }
  }



  function test_lg_me970d_ver1() {
    foreach(array(
'LG-ME970d MIC/1.1.14 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_me970d_ver1');
      }
  }



  function test_lg_mg110_ver1() {
    foreach(array(
'LG-MG110 AU/4.10 Profile/MIDP-1.0 Configuration/CLDC-1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mg110_ver1');
      }
  }



  function test_lg_mg280_ver1() {
    foreach(array(
'LG-MG280 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mg280_ver1');
      }
  }



  function test_lg_mg295_ver1() {
    foreach(array(
'LG-MG295 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-MG295 Obigo/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mg295_ver1');
      }
  }



  function test_lg_mg300d_ver1() {
    foreach(array(
'LG-MG300D MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mg300d_ver1');
      }
  }



  function test_lg_mg320c_ver1() {
    foreach(array(
'LG-MG320c MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mg320c_ver1');
      }
  }



  function test_lg_mg810d_ver1() {
    foreach(array(
'LG-MG810D UP.Browser/6.2.3 (GUI) MMP/1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mg810d_ver1');
      }
  }



  function test_lg_mn240_ver1() {
    foreach(array(
'LGE-MN240/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mn240_ver1');
      }
  }



  function test_lg_mt310_ver1() {
    foreach(array(
'LGE-MT310/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mt310_ver1');
      }
  }



  function test_lg_mt375_ver1() {
    foreach(array(
'LGE-MT375/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mt375_ver1');
      }
  }



  function test_lg_mu500_ver1() {
    foreach(array(
'LG-MU500 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-MU500 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.3.0.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mu500_ver1');
      }
  }



  function test_lg_mx275_ver1() {
    foreach(array(
'LGE-MX275/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx275_ver1');
      }
  }



  function test_lg_mx300_ver1() {
    foreach(array(
'LGE-MX300/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx300_ver1');
      }
  }



  function test_lg_mx380_ver1() {
    foreach(array(
'LGE-MX380/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx380_ver1');
      }
  }



  function test_lg_mx505_ver1() {
    foreach(array(
'LGE-MX505/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx505_ver1');
      }
  }



  function test_lg_mx510_ver1() {
    foreach(array(
'LGE-MX510/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx510_ver1');
      }
  }



  function test_lg_mx830_ver1() {
    foreach(array(
'LGE-MX830/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx830_ver1');
      }
  }



  function test_lg_mx8500_ver1() {
    foreach(array(
'LGE-MX8500/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx8500_ver1');
      }
  }



  function test_lg_mx8550_ver1() {
    foreach(array(
'LGE-MX8550/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0',
'LGE-MX8550_VEZ/1.0 UP.Browser/6.2.3.9 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx8550_ver1');
      }
  }



  function test_lg_mx8700_ver1() {
    foreach(array(
'LGE-MX8700/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx8700_ver1');
      }
  }



  function test_lg_mx9700_ver1() {
    foreach(array(
'LGE-MX9700_VEZ/1.0 Mozilla/4.1 (compatible; MSIE 6.0; ) 240X400'
    ) as $ua) {
        $this->checkUA($ua, 'lg_mx9700_ver1');
      }
  }



  function test_lg_nx550_ver1() {
    foreach(array(
'LG-NX550 AU-MIC-NX550/2.0 MMP/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_nx550_ver1');
      }
  }



  function test_lg_p7200_ver1() {
    foreach(array(
'LG-P7200 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_p7200_ver1');
      }
  }



  function test_lg_s5000_ver1() {
    foreach(array(
'LG-S5000 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_s5000_ver1');
      }
  }



  function test_lg_s5100_ver1() {
    foreach(array(
'LG-S5100 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_s5100_ver1');
      }
  }



  function test_lg_s5200_ver1() {
    foreach(array(
'LG-S5200 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_s5200_ver1');
      }
  }



  function test_lg_te365_ver1() {
    foreach(array(
'LG-TE365 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1',
'LG-TE365 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UNTRUSTED/1.0',
'LG-TE365 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.1.0.0',
'LG-TE365 Teleca/WAP2.0 MIDP-2.0/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_te365_ver1');
      }
  }



  function test_lg_tu500_ver1() {
    foreach(array(
'LG-TU500 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-TU500 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'LG-TU515 Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_tu500_ver1');
      }
  }



  function test_lg_tu550_ver1() {
    foreach(array(
'LG-TU550 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_tu550_ver1');
      }
  }



  function test_lg_tu575_ver1() {
    foreach(array(
'LG-TU575/V0.9 Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_tu575_ver1');
      }
  }



  function test_lg_tu720_ver1() {
    foreach(array(
'LG-TU720 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-TU720 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0',
'LG-TU720 Obigo/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0',
'LG-TU720/V0.9 Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_tu720_ver1');
      }
  }



  function test_lg_tu750_ver1() {
    foreach(array(
'LG-TU750/V10a Teleca/Q7.0 Profile/MIDP-2.1 Configuration/CLDC-1.1 UP.Link/6.5.1.0.06.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_tu750_ver1');
      }
  }



  function test_lg_tu915_ver1() {
    foreach(array(
'LG-TU915 Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1',
'LG-TU915 Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Link/6.5.1.0.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_tu915_ver1');
      }
  }



  function test_lg_u250_ver1() {
    foreach(array(
'LG/U250/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u250_ver1');
      }
  }



  function test_lg_u300_ver1() {
    foreach(array(
'LG/U300/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u300_ver1');
      }
  }



  function test_lg_u310_ver1() {
    foreach(array(
'LG/U310/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u310_ver1');
      }
  }



  function test_lg_u370_ver1() {
    foreach(array(
'LG/U370/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u370_ver1');
      }
  }



  function test_lg_u400_ver1() {
    foreach(array(
'LG/U400/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u400_ver1');
      }
  }



  function test_lg_u450_ver1() {
    foreach(array(
'LG/U450/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u450_ver1');
      }
  }



  function test_lg_u8110_ver1() {
    foreach(array(
'LG/U8110/v1.0',
'LG/U8110/v2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8110_ver1');
      }
  }



  function test_lg_u8120_ver1() {
    foreach(array(
'LG/U8120/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8120_ver1');
      }
  }



  function test_lg_u8130_ver1() {
    foreach(array(
'LG/U8130/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8130_ver1');
      }
  }



  function test_lg_u8138_ver1() {
    foreach(array(
'LG/U8138/v1.0',
'LG/U8138/v2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8138_ver1');
      }
  }



  function test_lg_u8290_ver1() {
    foreach(array(
'LG-U8290 MIC/WAP2.0 MIDP-2.0/CLDC-1.1'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8290_ver1');
      }
  }



  function test_lg_u830_ver1() {
    foreach(array(
'LGE-LG830/1.0 UP.Browser/6.2.3.8 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u830_ver1');
      }
  }



  function test_lg_u8330_ver1() {
    foreach(array(
'LG/U8330/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8330_ver1');
      }
  }



  function test_lg_u8360_ver1() {
    foreach(array(
'LG/U8360/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8360_ver1');
      }
  }



  function test_lg_u8380_ver1() {
    foreach(array(
'LG/U8380/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8380_ver1');
      }
  }



  function test_lg_u8550_ver1() {
    foreach(array(
'LG/U8550/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u8550_ver1');
      }
  }



  function test_lg_u880_ver1() {
    foreach(array(
'LG/U880/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u880_ver1');
      }
  }



  function test_lg_u890_ver1() {
    foreach(array(
'LG/U890/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u890_ver1');
      }
  }



  function test_lg_u900_ver1() {
    foreach(array(
'LG/U900/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u900_ver1');
      }
  }



  function test_lg_u960_ver1() {
    foreach(array(
'LG/U960/v1.0',
'LG/U960/v1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra/5.2.25.1.11lgu960(J2ME-OPT)'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u960_ver1');
      }
  }



  function test_lg_u970_ver1() {
    foreach(array(
'LG/U970/v1.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u970_ver1');
      }
  }



  function test_lg_u990_ver1() {
    foreach(array(
'LG/U990/v1.0',
'LG/U990/v2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_u990_ver1');
      }
  }



  function test_lg_ux700_ver1() {
    foreach(array(
'Mozilla/5.0 (compatible; Teleca Q7; Brew 3.1.5; U; en) 240X400 LGE LG700',
'Mozilla/5.0 (compatible; Teleca Q7; Brew 3.1.5; U; en) 240X400 LGE UX700'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ux700_ver1');
      }
  }



  function test_lg_ux840_ver1() {
    foreach(array(
'Mozilla/5.0 (compatible; Teleca Q7; Brew 3.1.5; U; en) 240X400 LGE UX840'
    ) as $ua) {
        $this->checkUA($ua, 'lg_ux840_ver1');
      }
  }



  function test_lg_vm265_ver1() {
    foreach(array(
'LGE-VM265/1.0 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vm265_ver1');
      }
  }



  function test_lg_vm510_ver1() {
    foreach(array(
'LGE-VM510 NetFront/3.5.1 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vm510_ver1');
      }
  }



  function test_lg_vx10000_ver1() {
    foreach(array(
'Mozilla/4.1 (compatible; MSIE 6.0; ) 400x240 LGE VX10000'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx10000_ver1');
      }
  }



  function test_lg_vx11000_ver1() {
    foreach(array(
'Mozilla/5.0 (BREW; U; BREW 3.1.5; en) AppleWebKit/525.26 (KHTML, like Gecko) Polaris/7.0 Safari/525.26 480X800 LGE VX11000',
'Mozilla/5.0 (compatible; Teleca Q7; Brew 3.1.5; U; en) 480X800 LGE VX11000'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx11000_ver1');
      }
  }



  function test_lg_vx5500_ver1() {
    foreach(array(
'LGE-VX5500/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx5500_ver1');
      }
  }



  function test_lg_vx5600_ver1() {
    foreach(array(
'LGE-VX5600/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx5600_ver1');
      }
  }



  function test_lg_vx8300_ver1() {
    foreach(array(
'LGE-VX8300/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx8300_ver1');
      }
  }



  function test_lg_vx8500_ver1() {
    foreach(array(
'LGE-VX8500/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx8500_ver1');
      }
  }



  function test_lg_vx8560_ver1() {
    foreach(array(
'LGE-VX8560/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx8560_ver1');
      }
  }



  function test_lg_vx9100_ver1() {
    foreach(array(
'LGE-VX9100/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx9100_ver1');
      }
  }



  function test_lg_vx9200_ver1() {
    foreach(array(
'Mozilla/5.0 (compatible; Teleca Q7; Brew 3.1.5; U; en) 320X240 LGE VX9200'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx9200_ver1');
      }
  }



  function test_lg_vx9600_ver1() {
    foreach(array(
'Mozilla/5.0 (compatible; Teleca Q7; Brew 3.1.5; U; en) 240X480 LGE VX9600',
'Mozilla/5.0(compatible; Teleca Q7; Brew 3.1.5; U; en) 240X480 LGE VX9600'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx9600_ver1');
      }
  }



  function test_lg_vx9700_ver1() {
    foreach(array(
'Mozilla/5.0 (compatible; Teleca Q7; Brew 3.1.5; U; en) 240X400 LGE VX9700'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx9700_ver1');
      }
  }



  function test_lg_vx_8360_ver1() {
    foreach(array(
'LGE-VX8360/1.0 UP.Browser/6.2.3.2 (GUI) MMP/2.0'
    ) as $ua) {
        $this->checkUA($ua, 'lg_vx_8360_ver1');
      }
  }



  ############################################################

  function checkUA($agent, $expected) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $actual =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($expected != $actual)
      echo "Expected: $expected, got: $actual\nUA: $agent\n";
    $this->assertEqual($expected, $actual);
  }

  function lgTest() {
    $this->UnitTestCase('lg Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new LgTest();
$test->run(new TextReporter());

?>
