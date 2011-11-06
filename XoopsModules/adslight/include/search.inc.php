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


include_once (XOOPS_ROOT_PATH."/modules/adslight/include/functions.php");

function adslight_search($queryarray, $andor, $limit, $offset, $userid){
	global $xoopsDB, $xoopsModuleConfig, $mydirname;
	
	$sql = "SELECT lid,title,type,desctext,tel,price,typeprice,date,submitter,usid,town,country FROM ".$xoopsDB->prefix("adslight_listing")." WHERE valid='Yes' AND status!='1' AND date<=".time()."";

	if ( $userid != 0 ) {
		$sql .= " AND usid=".$userid." ";
	}
	
//if (lid=lid)
	// because count() returns 1 even if a supplied variable
	// is not an array, we must check if $querryarray is really an array
	if ( is_array($queryarray) && $count = count($queryarray) ) {
		$sql .= " AND ((title LIKE '%$queryarray[0]%' OR type LIKE '%$queryarray[0]%' OR desctext LIKE '%$queryarray[0]%' OR tel LIKE '%$queryarray[0]%' OR price LIKE '%$queryarray[0]%' OR typeprice LIKE '%$queryarray[0]%' OR submitter LIKE '%$queryarray[0]%' OR town LIKE '%$queryarray[0]%' OR country LIKE '%$queryarray[0]%' )";
		for($i=1;$i<$count;$i++){
			$sql .= " $andor ";
			$sql .= "(title LIKE '%$queryarray[$i]%' OR type LIKE '%$queryarray[$i]%' OR desctext LIKE '%$queryarray[$i]%' OR tel LIKE '%$queryarray[$i]%' OR price LIKE '%$queryarray[$i]%' OR typeprice LIKE '%$queryarray[$i]%' OR submitter LIKE '%$queryarray[$i]%' OR town LIKE '%$queryarray[$i]%' OR country LIKE '%$queryarray[$i]%' )";
		}
		$sql .= ") ";
	}
	$sql .= " ORDER BY premium DESC, date DESC";
	$result = $xoopsDB->query($sql,$limit,$offset);
	$ret = array();
	$i = 0;
 	while($myrow = $xoopsDB->fetchArray($result)){

	$myts =& MyTextSanitizer::getInstance();
	$result2 = $xoopsDB->query("SELECT url FROM ".$xoopsDB->prefix("adslight_pictures")." WHERE lid=".$myrow['lid']." ORDER BY date_added LIMIT 1 ");
	list($url) = $xoopsDB->fetchRow($result2);
    $url = $myts->htmlSpecialChars($url);
    
		$ret[$i]['image'] = "images/deco/icon.png";
		$ret[$i]['link'] = "viewads.php?lid=".$myrow['lid']."";
		$ret[$i]['title'] = $myrow['title'];
		$ret[$i]['type'] = $myrow['type'];
		$ret[$i]['price'] = number_format($myrow['price'], 2, ".", ",");
		$ret[$i]['typeprice'] = $myrow['typeprice'];
		$ret[$i]['town'] = $myrow['town'];
		$ret[$i]['desctext'] = $myts->displayTarea($myrow['desctext'],1,1,1,1,1);
		$ret[$i]['nophoto'] = "images/nophoto.jpg";
		$ret[$i]['photo'] = $url;
		$ret[$i]['sphoto'] = $xoopsModuleConfig["adslight_link_upload"]."thumbs/thumb_".$url."";
		$ret[$i]['time'] = $myrow['date'];
		$ret[$i]['uid'] = $myrow['usid'];
		$i++;
	}
	return $ret;
}
?>