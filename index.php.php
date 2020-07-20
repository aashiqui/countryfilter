<?php


require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();

/* 
Notes:

The default base currency is USD (see http://www.geoplugin.com/webservices:currency ).
You can change this before the call to geoPlugin::locate with eg:
$geoplugin->currency = 'EUR';

The default IP to lookup is $_SERVER['REMOTE_ADDR']
You can lookup a specific IP address, by entering the IP in the call to geoPlugin::locate
eg
$geoplugin->locate('209.85.171.100');

The default language is English 'en'
supported languages:
de (German)
en (English - default)
es (Spanish)
fr (French)
ja (Japanese)
pt-BR (Portugese, Brazil)
ru (Russian)
zh-CN (Chinese, Zn)

To change the language to e.g. Japanese, use:
$geoplugin->lang = 'ja';

*/

//locate the IP
$geoplugin->locate();


 if(strtolower($geoplugin->countryName) =="india"){
     
     echo "i love india";
 }
 
 
 if(strtolower($geoplugin->countryName) =="germany"){
     
     echo "i love germany";
 }
 if(strtolower($geoplugin->countryName) =="pakistan"){
     
     echo "i love pakistan";
 }
?>
