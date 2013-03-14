<?php
/*
-------------------------------------------------------------------------
                     ADSLIGHT 2 : Module for Xoops                           

        Redesigned and ameliorate By Luc Bizet user at www.frxoops.org
		Started with the Classifieds module and made MANY changes 
        Website : http://www.luc-bizet.fr
        Contact : adslight.translate@gmail.com
-------------------------------------------------------------------------
             Original credits below Version History                       
##########################################################################
#                    Classified Module for Xoops                         #
#  By John Mordo user jlm69 at www.xoops.org and www.jlmzone.com         #
#      Started with the MyAds module and made MANY changes               #
##########################################################################
 Original Author: Pascal Le Boustouller                                   
 Author Website : pascal.e-xoops@perso-search.com                         
 Licence Type   : GPL                                                     
------------------------------------------------------------------------- 
*/

global $xoopsModule;

$adminmenu[0]['title'] = _MI_ADSLIGHT_ADMENU0;
$adminmenu[0]['link'] = "admin/index.php";
$adminmenu[0]['icon'] = "images/icons/plus.png";

$adminmenu[1]['title'] = _MI_ADSLIGHT_ADMENU1;
$adminmenu[1]['link'] = "admin/map.php";
$adminmenu[1]['icon'] = "images/icons/folder_smart.png";

$adminmenu[2]['title'] = _MI_ADSLIGHT_ADMENU5;
$adminmenu[2]['link'] = "admin/options.php";
$adminmenu[2]['icon'] = "images/icons/preferences.png";

$adminmenu[3]['title'] = _MI_ADSLIGHT_ADMENU2;
$adminmenu[3]['link'] = "admin/groupperms.php";
$adminmenu[3]['icon'] = "images/icons/public.png";

if (isset($xoopsModule) && $xoopsModule->getVar('dirname') == basename(dirname(dirname(__FILE__)))) {
$adminmenu[4]['title'] = _MI_ADSLIGHT_ADMENU3;
$adminmenu[4]['link'] = '../../modules/system/admin.php?fct=blocksadmin&amp;selvis=-1&amp;selmod=-2&amp;selgrp=-1&amp;selgen=' . $xoopsModule->getVar('mid');
}
$adminmenu[4]['icon'] = "images/icons/window.png";

/*$adminmenu[5]['title'] = _MI_ADSLIGHT_ADMENU9;
$adminmenu[5]['link'] = "index.php";
$adminmenu[5]['icon'] = "images/icons/up_alt.png"; */

$adminmenu[5]['title'] = _MI_ADSLIGHT_ADMENU10;
$adminmenu[5]['link'] = "../system/admin.php?fct=modulesadmin&op=update&module=adslight";
$adminmenu[5]['icon'] = "images/icons/refresh.png";

/* $adminmenu[7]['title'] = _MI_ADSLIGHT_ADMENU11;
$adminmenu[7]['link'] = "admin/support_forum.php";
$adminmenu[7]['icon'] = "images/icons/discussion.png"; */

$adminmenu[6]['title'] = _MI_ADSLIGHT_ADMENU7;
$adminmenu[6]['link'] = "admin/about.php";
$adminmenu[6]['icon'] = "images/icons/info.png";

?>