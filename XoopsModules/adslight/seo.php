<?php

/////////////////////////////////////
// AdsLight UrlRewrite By Nikita   //
// http://www.aideordi.com         //
///////////////////////////////////// 

$seoOp = $_GET['seoOp'];
$seoArg = $_GET['seoArg'];
$seoOther = $_GET['seoOther'];

if (!empty($seoOther))
{
	$seoOther = explode("/",$seoOther);
}

$seoMap = array(
	'c' => 'viewcats.php',
	'p' => 'viewads.php'
//	'addlisting' => 'addlisting.php'
        



);

if (! empty($seoOp) && ! empty($seoMap[$seoOp]))
{
	// module specific dispatching logic, other module must implement as
	// per their requirements.
	$newUrl = '/modules/adslight/' . $seoMap[$seoOp];
	
/// if your site is in a folder.  ex: www.welcome.com/xoops_site/
/// Replace the line above, for it ///	
/// $newUrl = '/yourfile/modules/adslight/' . $seoMap[$seoOp];	
	
	
	

	$_ENV['PHP_SELF'] = $newUrl;
	$_SERVER['SCRIPT_NAME'] = $newUrl;
	$_SERVER['PHP_SELF'] = $newUrl;
	switch ($seoOp) {
		case 'c':
			$_SERVER['REQUEST_URI'] = $newUrl . '?cid=' . $seoArg;
			$_GET['cid'] = $seoArg;
			break;
		case 'p':
			$_SERVER['REQUEST_URI'] = $newUrl . '?lid=' . $seoArg;
			$_GET['lid'] = $seoArg;
			break;
	



	}

	include( $seoMap[$seoOp]);
}

exit;

?>