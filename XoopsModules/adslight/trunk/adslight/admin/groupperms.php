<?php

// AdsLight  version 1.0.60 $Id$    //
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

include 'admin_header.php';

if (isset($_REQUEST['op'])) {
	$op = $_REQUEST['op'];
} else {
	$op = 'liste';
}

include 'header.php';
xoops_cp_header();
loadModuleAdminMenu(3, "");

    
echo "<br /><br />";
global $xoopsDB;
$countresult=$xoopsDB->query("select COUNT(*) FROM ".$xoopsDB->prefix("adslight_categories")."");
			list($cat_row) = $xoopsDB->fetchRow($countresult);
			$cat_rows = $cat_row;
if ($cat_rows == "0") {
echo ""._MI_ADSLIGHT_MUST_ADD_CAT."";
} else {

$permtoset= isset($_POST['permtoset']) ? intval($_POST['permtoset']) : 1;
$selected=array('','','');
$selected[$permtoset-1]=' selected';
echo "<form method='post' name='jselperm' action='groupperms.php'><table border=0><tr><td><select name='permtoset' onChange='javascript: document.jselperm.submit()'><option value='1'".$selected[0].">"._MI_ADSLIGHT_VIEWFORM."</option><option value='2'".$selected[1].">"._MI_ADSLIGHT_SUBMITFORM."</option><option value='3'".$selected[2].">"._MI_ADSLIGHT_PREMIUM."</option></select></td><td></tr></table></form>";
$module_id = $xoopsModule->getVar('mid');

switch($permtoset)
{
	case 1:
		$title_of_form = _MI_ADSLIGHT_VIEWFORM;
		$perm_name = "adslight_view";
		$perm_desc = _MI_ADSLIGHT_VIEWFORM_DESC;
		break;
	case 2:
		$title_of_form = _MI_ADSLIGHT_SUBMITFORM;
		$perm_name = "adslight_submit";
		$perm_desc = _MI_ADSLIGHT_SUBMITFORM_DESC;
		break;
	case 3:
		$title_of_form = _MI_ADSLIGHT_PREMIUM;
		$perm_name = "adslight_premium";
		$perm_desc = _MI_ADSLIGHT_PREMIUM_DESC;
		break;
}

$permform = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc, 'admin/groupperms.php');
$cattree = new ClassifiedsTree($xoopsDB->prefix("adslight_categories"),"cid","pid");
$allcats =& $cattree->getCategoryList();
foreach ($allcats as $cid => $category) {
    $permform->addItem($cid, $category['title'], $category['pid']);
}
echo $permform->render();
echo "<br /><br /><br /><br />\n";
unset ($permform);
}
xoops_cp_footer();

?>