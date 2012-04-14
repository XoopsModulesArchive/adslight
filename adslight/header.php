<?php
/////////////////////////////////////
// AdsLight UrlRewrite By Nikita   //
// http://www.aideordi.com         //
/////////////////////////////////////

include("../../mainfile.php");
global $xoopsModuleConfig;

if ( $xoopsModuleConfig["active_rewriteurl"] > 0 )
{
	include "seo_url.php";
}



$myts =& MyTextSanitizer::getInstance();
?>