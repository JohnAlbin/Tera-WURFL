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
 * Matches desktop browsers.  This UserAgentMatcher is unlike the rest in that it is does not use any database functions to find a matching device.  If a device is not matched with this UserAgentMatcher, another one is assigned to match it using the database.
 * @package TeraWurflUserAgentMatchers
 */
class SimpleDesktopUserAgentMatcher extends UserAgentMatcher {
	public function __construct(TeraWurfl $wurfl){
		parent::__construct($wurfl);
	}
	public function applyConclusiveMatch($ua) {
		return WurflConstants::$GENERIC_WEB_BROWSER;
	}
	/**
	 * Is the given user agent very likely to be a desktop browser
	 * @param String User agent
	 * @return Bool
	 */
	public static function isDesktopBrowser($ua){
		if(UserAgentUtils::isMobileBrowser($ua)) return false;
		if(self::contains($ua,array(
			'HTC', // HTC; horrible user agents, especially with Opera
			'PPC', // PowerPC; not always mobile, but we'll kick it out of SimpleDesktop and match it in the WURFL DB
			'Nintendo', // too hard to distinguish from Opera
		))) return false;
		// Firefox
		if(self::contains($ua,"Firefox") && !self::contains($ua,'Tablet')) return true;
		if(UserAgentUtils::isDesktopBrowser($ua)) return true;
		if(self::startsWith($ua,'Opera/')) return true;
		if(self::regexContains($ua,array(
			// Internet Explorer 9
			'/^Mozilla\/5\.0 \(compatible; MSIE 9\.0; Windows NT \d\.\d/',
			// Internet Explorer <9
			'/^Mozilla\/4\.0 \(compatible; MSIE \d\.\d; Windows NT \d\.\d/',
		))) return true;
		if(self::contains($ua,array(
			"Chrome",
			"yahoo.com",
			"google.com",
			"Comcast",
		))){
			return true;
		}
		return false;
	}
}
