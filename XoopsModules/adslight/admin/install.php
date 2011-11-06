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

include_once("../../../include/cp_header.php");
include 'header.php';
xoops_cp_header();

if ( !is_readable(XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php"))	{
    adslight_adminmenu(6, "");
} else {
    include_once XOOPS_ROOT_PATH.'/Frameworks/art/functions.admin.php';
    loadModuleAdminMenu (6, "");
}


$action='';
if (isset($_POST['action'])) {
  $action = $_POST['action'];
  $file=$_POST['file'];
}

$sql = 'SELECT conf_id FROM ' . $xoopsDB->prefix('config') . ' WHERE conf_name = "theme_set"';
$res = $xoopsDB->query( $sql );
list( $conf_id ) = $xoopsDB->fetchRow( $res );

$module         =& $module_handler->getByDirname('system');
$config_handler =& xoops_gethandler('config');
$config_theme   = $config_handler->getConfig($conf_id, true);
    
switch ($action){
  case 'new':
    copy(XOOPS_ROOT_PATH.'/modules/adslight/Root/'.$file,XOOPS_ROOT_PATH.'/'.$file);
    break;
  case 'remove':
    unlink(XOOPS_ROOT_PATH.'/'.$file);
    break;
  case 'copy':
    rename(XOOPS_ROOT_PATH.'/'.$file,XOOPS_ROOT_PATH.'/'.$file.'.svg');
    copy(XOOPS_ROOT_PATH.'/modules/adslight/Root/'.$file,XOOPS_ROOT_PATH.'/'.$file);
    break;
  case 'restore':
    unlink(XOOPS_ROOT_PATH.'/'.$file);
    rename(XOOPS_ROOT_PATH.'/'.$file.'.svg',XOOPS_ROOT_PATH.'/'.$file);
    break;
  case 'install_template':
    if(file_exists(XOOPS_ROOT_PATH.'/themes/'.$config_theme->getConfValueForOutput().'/modules/'.$file)){
      unlink(XOOPS_ROOT_PATH.'/themes/'.$config_theme->getConfValueForOutput().'/modules/'.$file);
    }
    FS_Storage::dircopy(XOOPS_ROOT_PATH.'/modules/adslight/Root/themes/',XOOPS_ROOT_PATH.'/themes/'.$config_theme->getConfValueForOutput().'/',$success,$error);
       include_once XOOPS_ROOT_PATH.'/class/template.php';
$xoopsTpl = new XoopsTpl();
$xoopsTpl->clear_cache('db:system_block_user.html');
$xoopsTpl->clear_cache('db:system_userinfo.html');
$xoopsTpl->clear_cache('db:profile_userinfo.html');
    break;
  case 'remove_template':
    unlink(XOOPS_ROOT_PATH.'/themes/'.$config_theme->getConfValueForOutput().'/modules/'.$file);
    break;
}

xoops_cp_footer();
?>
