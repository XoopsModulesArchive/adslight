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


include 'header.php';
require XOOPS_ROOT_PATH.'/modules/adslight/include/gtickets.php';

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

if (!$gperm_handler->checkRight('adslight_view', $perm_itemid, $groups, $module_id)) {
    redirect_header(XOOPS_URL.'/index.php', 3, _NOPERM);
    exit();
}
if (!$gperm_handler->checkRight('adslight_premium', $perm_itemid, $groups, $module_id)) {
    $prem_perm = '0';
} else {
    $prem_perm = '1';
}

include XOOPS_ROOT_PATH.'/modules/adslight/class/classifiedstree.php';
include XOOPS_ROOT_PATH.'/modules/adslight/include/functions.php';
$mytree = new ClassifiedsTree($xoopsDB->prefix('adslight_categories'),'cid','pid');



#  function view (categories)
#####################################################
function Adsview ($cid=0,$min=0,$orderby,$show=0)
{
    global $xoopsDB, $xoopsTpl, $xoopsConfig, $xoopsUser, $xoopsModule, $xoopsModuleConfig, $myts, $mytree, $imagecat, $meta, $mydirname, $main_lang, $xoopsUser, $mid, $prem_perm;
	$GLOBALS['xoopsOption']['template_main'] = 'adslight_category.html';
	include XOOPS_ROOT_PATH.'/header.php';
	
	$xoopsTpl->assign('xmid', $xoopsModule->getVar('mid'));
	$xoopsTpl->assign('add_from', _ADSLIGHT_ADDFROM." ".$xoopsConfig['sitename']);
	$xoopsTpl->assign('add_from_title', _ADSLIGHT_ADDFROM);
	$xoopsTpl->assign('add_from_sitename', $xoopsConfig['sitename']);
	$xoopsTpl->assign('search_listings', _ADSLIGHT_SEARCH_LISTINGS);
	$xoopsTpl->assign('all_words', _ADSLIGHT_ALL_WORDS);
	$xoopsTpl->assign('any_words', _ADSLIGHT_ANY_WORDS);
	$xoopsTpl->assign('exact_match', _ADSLIGHT_EXACT_MATCH);
	$xoopsTpl->assign('only_pix', _ADSLIGHT_ONLYPIX);
	$xoopsTpl->assign('search', _ADSLIGHT_SEARCH);
    $xoopsTpl->assign('add_title_menu1', _ADSLIGHT_ADD_TITLEMENU1);
	$xoopsTpl->assign('add_title_menu2', _ADSLIGHT_ADD_TITLEMENU2);
	$xoopsTpl->assign('add_title_menu4', _ADSLIGHT_ADD_TITLEMENU4);
	$xoopsTpl->assign('add_title_menu5', _ADSLIGHT_ADD_TITLEMENU5);
	$xoopsTpl->assign('add_title_menu6', _ADSLIGHT_ADD_TITLEMENU6);
	$xoopsTpl->assign('add_title_menu7', _ADSLIGHT_ADD_TITLEMENU7);
	$xoopsTpl->assign('add_title_menu8', _ADSLIGHT_ADD_TITLEMENU8);
    $xoopsTpl->assign('add_title_menu9', _ADSLIGHT_ADD_TITLEMENU9);
    $xoopsTpl->assign('add_title_menu10', _ADSLIGHT_ADD_TITLEMENU10);
	$xoopsTpl->assign('adslight_logolink', _ADSLIGHT_LOGOLINK);
	$xoopsTpl->assign('permit', $prem_perm);
	$xoopsTpl->assign('imgscss', XOOPS_URL.'/modules/adslight/style/adslight.css');
	
	$adslight_use_catscode = $xoopsModuleConfig['adslight_use_catscode'];
	$adslight_cats_code = $xoopsModuleConfig['adslight_cats_code'];
	
	$xoopsTpl->assign('adslight_use_catscode', $adslight_use_catscode);
	$xoopsTpl->assign('adslight_cats_code', $adslight_cats_code);
	
	$banner = xoops_getbanner();
	$xoopsTpl->assign('banner', $banner);
	$index_code_place = $xoopsModuleConfig['adslight_index_code_place'];
	$use_extra_code = $xoopsModuleConfig['adslight_use_index_code'];
	$adslight_use_banner = $xoopsModuleConfig['adslight_use_banner'];
	$index_extra_code = $xoopsModuleConfig['adslight_index_code'];
	
	$xoopsTpl->assign('use_extra_code', $use_extra_code);
	$xoopsTpl->assign('adslight_use_banner', $adslight_use_banner);
	$xoopsTpl->assign('index_extra_code', $index_extra_code);
	$xoopsTpl->assign('index_code_place', $index_code_place);

	
    if ($xoopsUser) {
	$member_usid = $xoopsUser->getVar('uid');
	if ($usid = $member_usid) {
		$xoopsTpl->assign('istheirs', true);
		
	list($show_user) = $xoopsDB->fetchRow($xoopsDB->query('select COUNT(*) FROM '.$xoopsDB->prefix('adslight_listing').' WHERE usid='.$member_usid.''));

	$xoopsTpl->assign('show_user', $show_user);
	$xoopsTpl->assign('show_user_link', 'members.php?usid='.$member_usid.'');
		}
	}

	$default_sort = $xoopsModuleConfig['adslight_lsort_order'];

	$cid = (intval($cid) > 0) ? intval($cid) : 0 ;
	$min = (intval($min) > 0) ? intval($min) : 0 ;
	$show = (intval($show) > 0 ) ? intval($show) : $xoopsModuleConfig['adslight_perpage'] ;
	$max = $min + $show;
	$orderby = (isset($orderby)) ? adslight_convertorderbyin($orderby) : $default_sort ;

	$updir = $xoopsModuleConfig["adslight_link_upload"];
	$xoopsTpl->assign('add_from', _ADSLIGHT_ADDFROM." ".$xoopsConfig['sitename']);
	$xoopsTpl->assign('add_from_title', _ADSLIGHT_ADDFROM );
	$xoopsTpl->assign('add_from_sitename', $xoopsConfig['sitename']);

	$categories = adslight_MygetItemIds('adslight_view');
	if(is_array($categories) && count($categories) > 0) {
	if(!in_array($cid, $categories)) {
		redirect_header(XOOPS_URL.'/modules/adslight/index.php', 3, _NOPERM);
		exit();
	}
	} else {	// User can't see any category
	redirect_header(XOOPS_URL.'/index.php', 3, _NOPERM);
	exit();
	}
	
$arrow = '<img src="'.XOOPS_URL.'/modules/adslight/images/arrow.gif" alt="&raquo;" />';

$pathstring = '<a href="index.php">'.$xoopsModule->name().'</a>';
$pathstring .= $mytree->getNicePathFromId($cid, 'title', 'viewcats.php?');
$xoopsTpl->assign('module_name', $xoopsModule->getVar('name'));
$xoopsTpl->assign('category_path', $pathstring);
$xoopsTpl->assign('category_id', $cid);

 $countresult=$xoopsDB->query('select COUNT(*) FROM '.$xoopsDB->prefix('adslight_listing').' where  cid='.mysql_real_escape_string($cid).' AND valid="Yes" AND status!="1"');
			list($trow) = $xoopsDB->fetchRow($countresult);
			$trows = $trow;


$cat_perms = "";
	if(is_array($categories) && count($categories) > 0) {
	$cat_perms .= ' AND cid IN ('.implode(',', $categories).') ';
	}

$result = $xoopsDB->query('select cid, pid, title, cat_desc, cat_keywords from '.$xoopsDB->prefix('adslight_categories').' where cid='.mysql_real_escape_string($cid).' '.$cat_perms.'');
	list($cid, $pid, $title, $cat_desc, $cat_keywords) = $xoopsDB->fetchRow($result);
	
$xoopsTpl->assign('cat_desc',$cat_desc);
$xoopsTpl->assign('cat_keywords',$cat_keywords);
$xoopsTpl->assign('xoops_pagetitle', $title);


if ($cat_desc > "0") {
// meta description & keywords tags for categories 
$cat_desc_clean = strip_tags($cat_desc, '<font><img><b><i><u>'); 
$cat_keywords_clean = strip_tags($cat_keywords, '<font><img><b><i><u><br><li>');

$xoTheme->addMeta('meta', 'description', ''.substr($cat_desc_clean,0,200)); 
$xoTheme->addMeta('meta', 'keywords', ''.substr($cat_keywords_clean,0,1000));
} 

    $submit_perms = adslight_MygetItemIds('adslight_submit');
	if(is_array($submit_perms) && count($submit_perms) > 0) {

	$add_listing = ''._ADSLIGHT_ADD_LISTING_BULLCATS.'<a href="addlisting.php?cid='.addslashes($cid).'">'._ADSLIGHT_ADD_LISTING_SUBOK.'</a>
';	
	} 
	
	else {	// User can't see any category
	$add_listing = ''._ADSLIGHT_ADD_LISTING_BULLCATSOK.'<a href="'.XOOPS_URL.'/register.php">'._ADSLIGHT_ADD_LISTING_SUB.'</a>.
';
	}


if ($xoopsModuleConfig['adslight_main_cat'] == 1 || $pid != 0) {
	$xoopsTpl->assign('add_listing', $add_listing);
	}

$arr = array();
$arr = $mytree->getFirstChild($cid, 'title');


if ( count($arr) > 0 ) {
	$scount = 1;
	foreach($arr as $ele){
		if(in_array($ele['cid'], $categories)) {
			$sub_arr = array();
			$sub_arr = $mytree->getFirstChild($ele['cid'], 'title');
			$space = 0;
			$chcount = 0;
			$infercategories = "";
			foreach($sub_arr as $sub_ele){

if (in_array($sub_ele['cid'], $categories)) {

				$chtitle = $myts->htmlSpecialChars($sub_ele['title']);
				
				if ($chcount>5){
					$infercategories .= '...';
					break;
				}
				if ($space>0) {
					$infercategories .= ', ';
				}
				$infercategories .= '<a href="'.XOOPS_URL.'/modules/adslight/viewcats.php?cid='.$sub_ele['cid'].'">'.$chtitle.'</a>';

			 $infercategories .= '&nbsp;('.adslight_getTotalItems($sub_ele['cid']).')';
				 $infercategories .= '&nbsp;'.categorynewgraphic($sub_ele['cid']).'';
				$space++;
				$chcount++;
			} 
		} 
			
			$xoopsTpl->append('subcategories', array('title' => $myts->htmlSpecialChars($ele['title']), 'id' => $ele['cid'], 'infercategories' => $infercategories, ''));
			
			$scount++;
	$xoopsTpl->assign('lang_subcat', _ADSLIGHT_AVAILAB);
		}
	}
} 

	
		$pagenav = '';
if ($trows > "0") {
		$xoopsTpl->assign('last_head', _ADSLIGHT_THE." ".$xoopsModuleConfig['adslight_newcount'].' '._ADSLIGHT_LASTADD);
		$xoopsTpl->assign('last_head_title', _ADSLIGHT_TITLE);
		$xoopsTpl->assign('last_head_price', _ADSLIGHT_PRICE);
		$xoopsTpl->assign('last_head_date', _ADSLIGHT_DATE);
		$xoopsTpl->assign('last_head_local', _ADSLIGHT_LOCAL2);
		$xoopsTpl->assign('last_head_hits', _ADSLIGHT_VIEW);
		$xoopsTpl->assign('last_head_photo', _ADSLIGHT_PHOTO);
		$xoopsTpl->assign('cat', $cid);
		$xoopsTpl->assign('min', $min);
		$rank = 1;

	$cat_perms = "";
	if(is_array($categories) && count($categories) > 0) {
	$cat_perms .= ' AND cid IN ('.implode(',', $categories).') ';
	}

	$sql='select lid, title, status, type, price, typeprice, date, town, country, contactby, usid, premium, valid, photo, hits FROM '.$xoopsDB->prefix('adslight_listing').' WHERE valid="Yes" and cid='.mysql_real_escape_string($cid).' and status!="1" '.$cat_perms.' order by '.$orderby.'';
	$result1=$xoopsDB->query($sql,$show,$min);
	if ($trows > "1") {

	$xoopsTpl->assign('show_nav', true);
        $orderbyTrans = adslight_convertorderbytrans($orderby);
        $xoopsTpl->assign('lang_sortby', _ADSLIGHT_SORTBY);
        $xoopsTpl->assign('lang_title', _ADSLIGHT_TITLE);
	$xoopsTpl->assign('lang_titleatoz', _ADSLIGHT_TITLEATOZ);
	$xoopsTpl->assign('lang_titleztoa', _ADSLIGHT_TITLEZTOA);
        $xoopsTpl->assign('lang_date', _ADSLIGHT_DATE);
	$xoopsTpl->assign('lang_dateold', _ADSLIGHT_DATEOLD);
	$xoopsTpl->assign('lang_datenew', _ADSLIGHT_DATENEW);
        $xoopsTpl->assign('lang_price', _ADSLIGHT_PRICE);
	$xoopsTpl->assign('lang_priceltoh', ''._ADSLIGHT_PRICELTOH.'');
	$xoopsTpl->assign('lang_pricehtol', ''._ADSLIGHT_PRICEHTOL.'');
        $xoopsTpl->assign('lang_popularity', _ADSLIGHT_POPULARITY);
	$xoopsTpl->assign('lang_popularityleast', _ADSLIGHT_POPULARITYLTOM);
	$xoopsTpl->assign('lang_popularitymost', _ADSLIGHT_POPULARITYMTOL);
        $xoopsTpl->assign('lang_cursortedby', sprintf(_ADSLIGHT_CURSORTEDBY, adslight_convertorderbytrans($orderby)));
		}

		while(list($lid, $title, $status, $type, $price, $typeprice, $date, $town, $country, $contactby, $usid, $premium, $valid, $photo, $hits)=$xoopsDB->fetchRow($result1)) {

		$a_item = array();
		$title = $myts->htmlSpecialChars($title);
		$type = $myts->htmlSpecialChars($type);
		$price = number_format($price, 2, ',', ' ');
		$town = $myts->htmlSpecialChars($town);
		$country = $myts->htmlSpecialChars($country);
		$contactby = $myts->htmlSpecialChars($contactby);
		$useroffset = '';

		$newcount = $xoopsModuleConfig['adslight_countday'];
		$startdate = (time()-(86400 * $newcount));
		if ($startdate < $date) {
		$newitem = '<img src="'.XOOPS_URL.'/modules/adslight/images/newred.gif" />';
		$a_item['new'] = $newitem;
			}
		if($xoopsUser) {
			$timezone = $xoopsUser->timezone();
				if(isset($timezone)) {
					$useroffset = $xoopsUser->timezone();
				} else {
					$useroffset = $xoopsConfig['default_TZ'];
				}
			}
			$date = ($useroffset*3600) + $date;
			$date = formatTimestamp($date,"s");
		if ($xoopsUser) {
		if ($xoopsUser->isAdmin()){
				$a_item['admin'] = '<a href="'.XOOPS_URL.'/modules/adslight/admin/validate_ads.php?op=ModifyAds&amp;lid='.addslashes($lid).'"><img src="images/modif.gif" border=0 alt="'._ADSLIGHT_MODADMIN.'" /></a>';
				}
			}
			$a_item['type'] = $type;
			$a_item['title'] = '<a href="viewads.php?lid='.addslashes($lid).'">'.$title.'</a>';
			$a_item['status'] = $status;
		if ($price > 0) {
			$a_item['price_symbol'] = $xoopsModuleConfig['adslight_money'];
			$a_item['price'] = $price;
			$a_item['price_typeprice'] = $typeprice;
				}
			$a_item['date'] = $date;
			$a_item['local'] = '';
		if ($town) {
			$a_item['local'] .= $town;
			}
			$a_item['country'] = '';
		if ($country) {
			$a_item['country'] = $country;
			}

		$cat = addslashes($cid);
		if ($status == 2) {
		$a_item['sold'] = '<font color="red"><b>[ '._ADSLIGHT_RESERVED.' ]</b></font>';
		}
		
if ( $xoopsModuleConfig['active_thumbscats'] > 0 )
{		
		$a_item['no_photo'] = '<a href="'.XOOPS_URL.'/modules/adslight/viewads.php?lid='.addslashes($lid).'"><img class="thumb" src="'.XOOPS_URL.'/modules/adslight/images/nophoto.jpg" align="left" width="100px" alt="'.$title.'"></a>';
		
		$updir = $xoopsModuleConfig['adslight_link_upload'];
		$sql = 'select cod_img, lid, uid_owner, url from '.$xoopsDB->prefix('adslight_pictures').' where  uid_owner='.mysql_real_escape_string($usid).' and lid='.mysql_real_escape_string($lid).' order by date_added ASC limit 1';
		$resultp = $xoopsDB->query($sql);
		while(list($cod_img, $pic_lid, $uid_owner, $url)=$xoopsDB->fetchRow($resultp)) {
			if ($photo) {
				$a_item['photo'] = '<a href="'.XOOPS_URL.'/modules/adslight/viewads.php?lid='.addslashes($lid).'"><img class="thumb" src="'.$updir.'/thumbs/thumb_'.$url.'" align="left" width="100px" alt="'.$title.'"></a>';
			}
		}
} else {
$a_item['no_photo'] = '<p><img src="'.XOOPS_URL.'/modules/adslight/images/camera_nophoto.png" align="left" width="24" alt="'.$title.'"></p>';
		$updir = $xoopsModuleConfig['adslight_link_upload'];
		$sql = 'select cod_img, lid, uid_owner, url from '.$xoopsDB->prefix('adslight_pictures').' where  uid_owner='.mysql_real_escape_string($usid).' and lid='.mysql_real_escape_string($lid).' order by date_added ASC limit 1';
		$resultp = $xoopsDB->query($sql);
		while(list($cod_img, $pic_lid, $uid_owner, $url)=$xoopsDB->fetchRow($resultp)) {
			if ($photo) {
				$a_item['photo'] = '<p><img src="'.XOOPS_URL.'/modules/adslight/images/camera_photo.png" align="left" width="24" alt="'.$title.'"></p>';
			}
		}			
}
		
			$a_item['hits'] = $hits;
			$rank++;
			$xoopsTpl->append('items', $a_item);
		}

		$cid = (intval($cid) > 0) ? intval($cid) : 0 ;

		$orderby = adslight_convertorderbyout($orderby);
		$linkpages = ceil($trows / $show);
		 
    //Page Numbering
    if ($linkpages!=1 && $linkpages!=0) {
       $prev = $min - $show;
       if ($prev>=0) {
            $pagenav .= "<a href='viewcats.php?cid=$cid&min=$prev&orderby=$orderby&show=$show'><b><u>&laquo;</u></b></a> ";
        }
        $counter = 1;
        $currentpage = ($max / $show);
        while ( $counter<=$linkpages ) {
            $mintemp = ($show * $counter) - $show;
            if ($counter == $currentpage) {
                $pagenav .= "<b>($counter)</b> ";
            } else {
                $pagenav .= "<a href='viewcats.php?cid=$cid&min=$mintemp&orderby=$orderby&show=$show'>$counter</a> ";
            }
            $counter++;
        }
        if ( $trows >$max ) {
            $pagenav .= "<a href='viewcats.php?cid=$cid&min=$max&orderby=$orderby&show=$show'>";
            $pagenav .= '<b><u>&raquo;</u></b></a>';
        }
    }
} 

$xoopsTpl->assign('nav_page', $pagenav);
} 

#  function categorynewgraphic
#####################################################
function categorynewgraphic($cid)
{
    global $xoopsDB, $xoopsModuleConfig;
}

######################################################

$pa = !isset($_GET['pa'])? NULL : $_GET['pa'];
$lid = !isset($_GET['lid'])? NULL : $_GET['lid'];
$cid = !isset($_GET['cid'])? NULL : $_GET['cid'];
$usid = isset( $_GET['usid'] ) ? $_GET['usid'] : '' ;
$min = !isset($_GET['min'])? NULL : $_GET['min'];
$show = !isset($_GET['show'])? NULL : $_GET['show'];
$orderby = !isset($_GET['orderby'])? NULL : $_GET['orderby'];

switch($pa)
{
   default:
		$xoopsOption['template_main'] = 'adslight_category.html';
    Adsview($cid,$min,$orderby,$show);
		break;
} 
include XOOPS_ROOT_PATH.'/footer.php';
?>