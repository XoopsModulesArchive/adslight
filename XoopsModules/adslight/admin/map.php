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

$mytree = new ClassifiedsTree($xoopsDB->prefix("adslight_categories"),"cid","pid");

global $mytree, $xoopsDB, $xoopsModuleConfig, $mydirname;
include 'header.php';
xoops_cp_header();
loadModuleAdminMenu(1, "");

echo "<fieldset style='padding: 20px;'><legend style='font-weight: bold; color: #FF7300;'>"._AM_ADSLIGHT_GESTCAT." </legend>";
echo "<p align=\"left\"><button name=\"buttonName\" type=\"button\" onclick=\"document.location.href='category.php?op=AdsNewCat&amp;cid=0';\">"._AM_ADSLIGHT_ADDCATPRINC."</button></p>";
$mytree->makeAdSelBox("title", "".$xoopsModuleConfig["adslight_csortorder"]."");
echo "<br />";
echo "<br /></fieldset><br />";

xoops_cp_footer();


?>