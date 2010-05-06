# -*- coding: utf-8 -*-
# Python
######################################################################################
# Tera-WURFL remote webservice client for Python
# 
# Tera-WURFL was written by Steve Kamerman, and is based on the
# Java WURFL Evolution package by Luca Passani and WURFL PHP Tools by Andrea Trassati.
# This version uses a MySQL database to store the entire WURFL file, multiple patch
# files, and a persistent caching mechanism to provide extreme performance increases.
# 
# @author Steve Kamerman <stevekamerman AT gmail.com>
# @version Stable 2.1.1 (2010/02/21 17:41:47)
# @license http://www.mozilla.org/MPL/ MPL Vesion 1.1
# 
# Documentation is available at http://www.tera-wurfl.com
#######################################################################################

from urllib import quote
from urllib import urlopen
from xml.dom.minidom import parseString

# Location of Tera-WURFL webservice
webservice = "http://localhost/Tera-Wurfl/webservice.php"

# The User Agent you would like to check
user_agent = "Mozilla/5.0 (Linux; U; Android 1.0; en-us; dream) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2"

# Capabilities and Groups you want to find
search = "brand_name|model_name|marketing_name|is_wireless_device|device_claims_web_support|tera_wurfl"

querystring = "?ua=" + quote(user_agent) + "&search=" + search
xml_response = urlopen(webservice + querystring).read()
xml_object = parseString(xml_response)
deviceNode = xml_object.firstChild.childNodes[1]
errorsNode = xml_object.firstChild.childNodes[3]
capabilitiesNodes = deviceNode.getElementsByTagName("capability");

# Setup Top Level Properties
properties = {
	"apiVersion": deviceNode.attributes['apiVersion'].value,
	"id": deviceNode.attributes['id'].value,
	"useragent": deviceNode.attributes['useragent'].value
}
# Setup Capabilities
capabilities = {}
for capNode in capabilitiesNodes:
#	print capNode.toxml() + capNode.attributes['name'].value + capNode.attributes['value'].value + "\n"
	capabilities[capNode.attributes['name'].value] = capNode.attributes['value'].value


# Tera-WURFL processing is finished,  properties and capabilities dictionaries are now filled with data

print "Response from Tera-WURFL " + properties['apiVersion'];
for name, value in capabilities.items():
	print name + ": " + value
