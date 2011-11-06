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

if (!defined('XOOPS_ROOT_PATH')) {
	trigger_error ('Access not found');
	exit('Access not found');
}
	$mydirname = basename( dirname( dirname( __FILE__ ) ) ) ;

function adslight_notify_iteminfo($category, $item_id)
{
  global $xoopsDB, $mydirname;
	$module_handler =& xoops_gethandler('module');
	$module =& $module_handler->getByDirname("$mydirname");

	if ($category=='global') {
		$item['name'] = '';
		$item['url'] = '';
		return $item;
	}

	if ($category=='category') {

		// Assume we have a valid topid id
		$sql = 'SELECT SQL_CACHE title  FROM '. $xoopsDB->prefix("adslight_categories") .' WHERE cid = '. $item_id .' limit 1';

		$result = $xoopsDB->query($sql); // TODO: error check
		$result_array = $xoopsDB->fetchArray($result);
		$item['name'] = $result_array['title'];		
		$item['url'] = XOOPS_URL . '/modules/adslight/index.php?pa=adsview&amp;cid=' .  $item_id;
		return $item;
	}

	if ($category=='listing') {
		// Assume we have a valid post id
		$sql = 'SELECT title FROM ' . $xoopsDB->prefix("adslight_listing").  ' WHERE lid = ' . $item_id . ' LIMIT 1';
		$result = $xoopsDB->query($sql);
		$result_array = $xoopsDB->fetchArray($result);
		$item['name'] = $result_array['title'];
//		$item['catname'] = $result_array['cat.title'];
		$item['url'] = XOOPS_URL . '/modules/adslight/viewads.php?lid= ' .  $item_id;
		return $item;
	}
}

?>