<?php
// AdsLight  version 1.0.60 $Id: add.php - 2010-03-03 02:43:47Z iLuc $    //
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
	die('XOOPS root path not defined');
	}

function adslight_b2_show($options)
{
	global $xoopsDB, $xoopsModuleConfig, $blockdirname, $block_lang;

	$block = array();
	$myts =& MyTextSanitizer::getInstance();
	
	$blockdirname = basename( dirname( dirname( __FILE__ ) ) ) ;
	$block_lang = '_MB_' . strtoupper( $blockdirname ) ;

	include_once (XOOPS_ROOT_PATH."/modules/$blockdirname/include/functions.php");

	$block['title'] = "".constant($block_lang."_TITLE")."";

	$updir = $xoopsModuleConfig["".$blockdirname."_link_upload"];
	$cat_perms = "";
	$categories = adslight_MygetItemIds('adslight_view');
	if(is_array($categories) && count($categories) > 0) {
	$cat_perms .= ' AND cid IN ('.implode(',', $categories).') ';
	}

	$result = $xoopsDB->query("SELECT lid, cid, title, status, type, price, typeprice, date, town, country, contactby, usid, premium, valid, photo, hits FROM ".$xoopsDB->prefix("".$blockdirname."_listing")." WHERE valid='Yes' and status!='1' $cat_perms ORDER BY ".$options[0]." DESC",$options[1],0);


	while($myrow=$xoopsDB->fetchArray($result)){
		$a_item = array();
		$title = $myts->htmlSpecialChars($myrow["title"]);
		$status = $myts->htmlSpecialChars($myrow["status"]);
		$type = $myts->htmlSpecialChars($myrow["type"]);
		$price = $myts->htmlSpecialChars($myrow["price"]);
		$typeprice = $myts->htmlSpecialChars($myrow["typeprice"]);
		$town = $myts->htmlSpecialChars($myrow["town"]);
		$country = $myts->htmlSpecialChars($myrow["country"]);
		$usid = $myts->htmlSpecialChars($myrow["usid"]);
		$hits = $myts->htmlSpecialChars($myrow["hits"]);

	if ( !XOOPS_USE_MULTIBYTES ) {
		if (strlen($myrow['title']) >= $options[2]) {
			$title = $myts->htmlSpecialChars(substr($myrow['title'],0,($options[2] -1)))."...";
		}
	}

	$ad_title = $myrow['title'];
	$a_item['status'] = $status;
	$a_item['type'] = $type;
	$a_item['price'] = $price;
	$a_item['typeprice'] = $typeprice;
	$a_item['town'] = $town;
	$a_item['country'] = $country;
	$a_item['id'] = $myrow['lid'];
	$a_item['cid'] = $myrow['cid'];
	$a_item['price_symbol'] = $xoopsModuleConfig["".$blockdirname."_money"];

	if ($status == 2) {
	$a_item['sold'] = "<img src=\"images/sold.gif\" align=\"left\" alt=\"\">";
	}

	$a_item['no_photo'] = "<a href=\"".XOOPS_URL."/modules/$blockdirname/viewads.php?lid=".addslashes($myrow['lid'])."\"><img class=\"thumb\" src=\"".XOOPS_URL."/modules/$blockdirname/images/nophoto.jpg\" align=\"left\" width=\"100px\" alt=\"$ad_title\"></a>";

	if ($myrow["photo"] != "") {
//	$updir = $xoopsModuleConfig["".$blockdirname."_link_upload"];
	$sql = "select cod_img, lid, uid_owner, url from ".$xoopsDB->prefix("".$blockdirname."_pictures")." where  uid_owner=".mysql_real_escape_string($usid)." and lid=".mysql_real_escape_string($myrow['lid'])." order by date_added ASC limit 1";
	$resultp = $xoopsDB->query($sql);
	while(list($cod_img, $pic_lid, $uid_owner, $url)=$xoopsDB->fetchRow($resultp)) {

	$a_item['photo'] = "<a href=\"".XOOPS_URL."/modules/$blockdirname/viewads.php?lid=".addslashes($myrow['lid'])."\"><img class=\"thumb\" src=\"".XOOPS_URL."/uploads/AdsLight/thumbs/thumb_$url\" align=\"left\" width=\"100px\" alt=\"$title\"></a>";
		}
	} else {
	$a_item['photo'] = "";
	}
    	$a_item['link'] = "<a href=\"".XOOPS_URL."/modules/$blockdirname/viewads.php?lid=".addslashes($myrow['lid'])."\"><b>$title</b></a>";
	$a_item['date'] = formatTimestamp($myrow['date'],"s");
	$a_item['hits'] = $myrow['hits'];
		
    	$block['items'][] = $a_item;
	}
	$block['lang_title'] = constant($block_lang."_ITEM");
	$block['lang_price'] = constant($block_lang."_PRICE");
	$block['lang_typeprice'] = constant($block_lang."_TYPEPRICE");
	$block['lang_date'] = constant($block_lang."_DATE");
	$block['lang_local'] = constant($block_lang."_LOCAL2");
	$block['lang_hits'] = constant($block_lang."_HITS");
	$block['link'] = "<a href=\"".XOOPS_URL."/modules/$blockdirname/\"><b>".constant($block_lang."_ALL_LISTINGS")."</b></a><br />";
	$block['add'] = "<a href=\"".XOOPS_URL."/modules/$blockdirname/\"><b>".constant($block_lang."_ADDNOW")."</b></a><br />";

	return $block;
	}

function adslight_b2_edit($options) {
 global $xoopsDB;
	$blockdirname = basename( dirname( dirname( __FILE__ ) ) ) ;
	$block_lang = '_MB_' . strtoupper( $blockdirname ) ;

	$form = constant($block_lang."_ORDER")."&nbsp;<select name='options[]'>";
	$form .= "<option value='date'";
	if ( $options[0] == 'date' ) {
        $form .= " selected='selected'";
	}
	$form .= '>'.constant($block_lang."_DATE")."</option>\n";
	$form .= "<option value='hits'";
	if($options[0] == 'hits'){
        $form .= " selected='selected'";
	}
	$form .= '>'.constant($block_lang."_HITS").'</option>';
	$form .= "</select>\n";
	$form .= '&nbsp;'.constant($block_lang."_DISP")."&nbsp;<input type='text' name='options[]' value='".$options[1]."'/>&nbsp;".constant($block_lang."_LISTINGS");
	$form .= "&nbsp;<br /><br />".constant($block_lang."_CHARS")."&nbsp;<input type='text' name='options[]' value='".$options[2]."'/>&nbsp;".constant($block_lang."_LENGTH").'<br /><br />';

	return $form;
	}
?>