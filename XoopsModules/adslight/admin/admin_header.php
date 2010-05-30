<?php

include_once '../../../include/cp_header.php';

include_once $GLOBALS['xoops']->path( "/modules/adslight/include/gtickets.php");
include_once $GLOBALS['xoops']->path( "/modules/adslight/include/functions.php");
include_once $GLOBALS['xoops']->path( "/class/xoopsformloader.php" );
include_once $GLOBALS['xoops']->path( "/modules/adslight/class/classifiedstree.php");
include_once $GLOBALS['xoops']->path( "/modules/adslight/class/grouppermform.php");

if ( $xoopsUser ) {
	$xoopsModule = XoopsModule::getByDirname("adslight");
	if ( !$xoopsUser->isAdmin($xoopsModule->mid()) ) { 
		redirect_header(XOOPS_URL."/",3,_NOPERM);
		exit();
	}
} else {
	redirect_header(XOOPS_URL."/",3,_NOPERM);
	exit();
}

// Include language file
xoops_loadLanguage('admin', 'system');
xoops_loadLanguage('admin', $xoopsModule->getVar('dirname', 'e'));
xoops_loadLanguage('modinfo', $xoopsModule->getVar('dirname', 'e'));
$myts =& MyTextSanitizer::getInstance();
?>