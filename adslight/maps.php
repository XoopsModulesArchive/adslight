<?php
// AdsLight  version 1.051 $Id$    //
// ------------------------------------------------------------------------- //
//                     AdsLight Module for Xoops                             //
// ------------------------------------------------------------------------- //
//         Redesigned and ameliorate By iluc user at www.frxoops.org         //
//          Find it or report problems at www.i-luc.fr/adslight/             //
//      Started with the Classifieds module and made MANY changes            //
// ------------------------------------------------------------------------- //
//              Original credits below Version History                       //
// ------------------------------------------------------------------------- //
//                    Classified Module for Xoops                            //
//  By John Mordo user jlm69 at www.xoops.org and www.jlmzone.com            //
//      Started with the MyAds module and made MANY changes                  //
// ------------------------------------------------------------------------- //
// Original Author: Pascal Le Boustouller                                    //
// Author Website : pascal.e-xoops@perso-search.com                          //
// Licence Type   : GPL                                                      //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

include("header.php");
require_once( XOOPS_ROOT_PATH."/modules/adslight/include/gtickets.php" ) ;

$myts =& MyTextSanitizer::getInstance();
$module_id = $xoopsModule->getVar('mid');

if (is_object($xoopsUser)) {
    $groups = $xoopsUser->getGroups();
} else {
	$groups = XOOPS_GROUP_ANONYMOUS;
}
$gperm_handler =& xoops_gethandler('groupperm');
if (isset($_POST['item_id'])) {
    $perm_itemid = intval($_POST['item_id']);
} else {
    $perm_itemid = 0;
}
//If no access
if (!$gperm_handler->checkRight("adslight_view", $perm_itemid, $groups, $module_id)) {
    redirect_header(XOOPS_URL."/index.php", 3, _NOPERM);
    exit();
}
if (!$gperm_handler->checkRight("adslight_premium", $perm_itemid, $groups, $module_id)) {
    $prem_perm = "0";
} else {
    $prem_perm = "1";
}


#  function AdslightMaps
#####################################################
function AdslightMaps()
{
	global $xoopsDB, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $xoopsUser, $xoopsTpl, $myts, $mytree, $meta, $mid, $mydirname, $main_lang, $prem_perm;
	
	$GLOBALS['xoopsOption']['template_main'] = "adslight_maps.html";
	
	include XOOPS_ROOT_PATH."/header.php";
	
	$xoopsTpl->assign('xmid', $xoopsModule->getVar('mid'));
	$xoopsTpl->assign('add_from', constant("_ADSLIGHT_ADDFROM")." ".$xoopsConfig['sitename']);
	$xoopsTpl->assign('add_from_title', constant("_ADSLIGHT_ADDFROM") );
	$xoopsTpl->assign('add_from_sitename', $xoopsConfig['sitename']);
	$xoopsTpl->assign('search_listings', constant("_ADSLIGHT_SEARCH_LISTINGS") );
	$xoopsTpl->assign('all_words', constant("_ADSLIGHT_ALL_WORDS") );
	$xoopsTpl->assign('any_words', constant("_ADSLIGHT_ANY_WORDS") );
	$xoopsTpl->assign('exact_match', constant("_ADSLIGHT_EXACT_MATCH") );
	$xoopsTpl->assign('only_pix', constant("_ADSLIGHT_ONLYPIX") );
	$xoopsTpl->assign('search', constant("_ADSLIGHT_SEARCH") );
	$xoopsTpl->assign('add_title_menu1', constant("_ADSLIGHT_ADD_TITLEMENU1") );
	$xoopsTpl->assign('add_title_menu2', constant("_ADSLIGHT_ADD_TITLEMENU2") );
	$xoopsTpl->assign('add_title_menu4', constant("_ADSLIGHT_ADD_TITLEMENU4") );
	$xoopsTpl->assign('add_title_menu5', constant("_ADSLIGHT_ADD_TITLEMENU5") );
	$xoopsTpl->assign('add_title_menu6', constant("_ADSLIGHT_ADD_TITLEMENU6") );
	$xoopsTpl->assign('add_title_menu7', constant("_ADSLIGHT_ADD_TITLEMENU7") );
	$xoopsTpl->assign('add_title_menu8', constant("_ADSLIGHT_ADD_TITLEMENU8") );
	$xoopsTpl->assign('add_title_menu9', constant("_ADSLIGHT_ADD_TITLEMENU9") );
	$xoopsTpl->assign('add_title_menu10', constant("_ADSLIGHT_ADD_TITLEMENU10") );
	$xoopsTpl->assign('permit', $prem_perm);
	$xoopsTpl->assign('imgscss', XOOPS_URL."/modules/adslight/style/adslight.css");
	$xoopsTpl->assign('adslight_logolink', constant("_ADSLIGHT_LOGOLINK") );
	
	$maps_name = $xoopsModuleConfig['adslight_maps_set'];
	$maps_width = $xoopsModuleConfig['adslight_maps_width'];
	$maps_height = $xoopsModuleConfig['adslight_maps_height'];
	
	$xoopsTpl->assign('maps_name', $maps_name);
	$xoopsTpl->assign('maps_width', $maps_width);
	$xoopsTpl->assign('maps_height', $maps_height);
	
	
	$xoopsTpl->assign('adlight_maps_title', constant("_ADSLIGHT_MAPS_TITLE") );
	$xoopsTpl->assign('adlight_mapsdesc_text', constant("_ADSLIGHT_MAPS_TEXT") );
	
	if ($xoopsUser) {
	$member_usid = $xoopsUser->getVar('uid');
	if ($usid = $member_usid) {
		$xoopsTpl->assign('istheirs', true);
		
	list($show_user) = $xoopsDB->fetchRow($xoopsDB->query("select COUNT(*) FROM ".$xoopsDB->prefix("adslight_listing")." WHERE usid=$member_usid"));

	$xoopsTpl->assign('show_user', $show_user);
	$xoopsTpl->assign('show_user_link', "members.php?usid=$member_usid");
		}
	}
    
    
}


######################################################

$pa = !isset($_GET['pa'])? NULL : $_GET['pa'];


switch($pa)
{
   default:
		$xoopsOption['template_main'] = "adslight_maps.html";
		AdslightMaps();
		break;
}
include(XOOPS_ROOT_PATH."/footer.php");
?>