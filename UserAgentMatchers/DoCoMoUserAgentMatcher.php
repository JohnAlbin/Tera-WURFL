<?php
/**
 * Tera_WURFL - PHP MySQL driven WURFL
 * 
 * Tera-WURFL was written by Steve Kamerman, and is based on the
 * Java WURFL Evolution package by Luca Passani and WURFL PHP Tools by Andrea Trassati.
 * This version uses a database to store the entire WURFL file, multiple patch
 * files, and a persistent caching mechanism to provide extreme performance increases.
 * 
 * @package TeraWurflUserAgentMatchers
 * @author Steve Kamerman <stevekamerman AT gmail.com>
 * @license http://www.mozilla.org/MPL/ MPL Vesion 1.1
 */
/**
 * Provides a specific user agent matching technique
 * @package TeraWurflUserAgentMatchers
 */
class DoCoMoUserAgentMatcher extends UserAgentMatcher {
	
	public static $constantIDs = array('docomo_generic_jap_ver2','docomo_generic_jap_ver1');
	
	public function __construct(TeraWurfl $wurfl){
		parent::__construct($wurfl);
	}
	public function applyConclusiveMatch($ua) {
		$deviceId = '';
		if(UserAgentUtils::numSlashes($ua) >= 2){
			$tolerance = UserAgentUtils::secondSlash($ua);
		}else{
			//  DoCoMo/2.0 F01A(c100;TB;W24H17)
			$tolerance = UserAgentUtils::firstOpenParen($ua);
		}
		$this->wurfl->toLog("Applying ".get_class($this)." Conclusive Match: RIS with threshold $tolerance",LOG_INFO);
		$deviceId = $this->risMatch($ua, $tolerance);
		return $deviceId;
	}
	public function recoveryMatch($ua){
		$versionIndex = 7;
		$version = $ua[$versionIndex];
		return ($version == '2')? 'docomo_generic_jap_ver2': 'docomo_generic_jap_ver1';
	}
}

