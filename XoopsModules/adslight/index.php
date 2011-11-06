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

include 'header.php';
require XOOPS_ROOT_PATH.'/modules/adslight/include/gtickets.php';

$myts =& MyTextSanitizer::getInstance();
$module_id = $xoopsModule->getVar('mid');

(is_object($xoopsUser)) ? $groups = $xoopsUser->getGroups() : $groups = XOOPS_GROUP_ANONYMOUS;

$gperm_handler =& xoops_gethandler('groupperm');

(isset($_POST['item_id'])) ? $perm_itemid = intval($_POST['item_id']) : $perm_itemid = 0;


if (!$gperm_handler->checkRight('adslight_view', $perm_itemid, $groups, $module_id)) {
    redirect_header(XOOPS_URL.'/index.php', 3, _NOPERM);
    exit();
    }

(!$gperm_handler->checkRight('adslight_premium', $perm_itemid, $groups, $module_id)) ? $prem_perm = '0' : $prem_perm = '1';


include XOOPS_ROOT_PATH.'/modules/adslight/class/classifiedstree.php';
include XOOPS_ROOT_PATH.'/modules/adslight/include/functions.php';
$mytree = new ClassifiedsTree($xoopsDB->prefix('adslight_categories'),'cid','pid');

#  function index
#####################################################
function index()
{
	global $xoopsDB, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $xoopsUser, $xoopsTpl, $myts, $mytree, $meta, $mid, $mydirname, $main_lang, $prem_perm;
	
	$GLOBALS['xoopsOption']['template_main'] = 'adslight_index.html';
	
	include XOOPS_ROOT_PATH.'/header.php';

	$xoopsTpl->assign('xmid', $xoopsModule->getVar('mid'));
	$xoopsTpl->assign('add_from', _ADSLIGHT_ADDFROM." ".$xoopsConfig['sitename']);
	$xoopsTpl->assign('add_from_title', _ADSLIGHT_ADDFROM );
	$xoopsTpl->assign('add_from_sitename', $xoopsConfig['sitename']);
	$xoopsTpl->assign('search_listings', _ADSLIGHT_SEARCH_LISTINGS );
	$xoopsTpl->assign('all_words', _ADSLIGHT_ALL_WORDS );
	$xoopsTpl->assign('any_words', _ADSLIGHT_ANY_WORDS );
	$xoopsTpl->assign('exact_match', _ADSLIGHT_EXACT_MATCH );
	$xoopsTpl->assign('only_pix', _ADSLIGHT_ONLYPIX );
	$xoopsTpl->assign('search', _ADSLIGHT_SEARCH );
	$xoopsTpl->assign('add_title_menu1', _ADSLIGHT_ADD_TITLEMENU1 );
	$xoopsTpl->assign('add_title_menu2', _ADSLIGHT_ADD_TITLEMENU2 );
	$xoopsTpl->assign('add_title_menu4', _ADSLIGHT_ADD_TITLEMENU4 );
	$xoopsTpl->assign('add_title_menu5', _ADSLIGHT_ADD_TITLEMENU5 );
	$xoopsTpl->assign('add_title_menu6', _ADSLIGHT_ADD_TITLEMENU6 );
	$xoopsTpl->assign('add_title_menu7', _ADSLIGHT_ADD_TITLEMENU7 );
	$xoopsTpl->assign('add_title_menu8', _ADSLIGHT_ADD_TITLEMENU8 );
	$xoopsTpl->assign('add_title_menu9', _ADSLIGHT_ADD_TITLEMENU9 );
	$xoopsTpl->assign('add_title_menu10', _ADSLIGHT_ADD_TITLEMENU10 );
	$xoopsTpl->assign('adslight_logolink', _ADSLIGHT_LOGOLINK );
	$xoopsTpl->assign('permit', $prem_perm);
	$xoopsTpl->assign('imgscss', XOOPS_URL.'/modules/adslight/style/adslight.css');
	
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
	
	ExpireAd();

	    if ($xoopsUser) {
	$member_usid = $xoopsUser->getVar('uid');
	if ($usid = $member_usid) {
		$xoopsTpl->assign('istheirs', true);
		
	list($show_user) = $xoopsDB->fetchRow($xoopsDB->query('select SQL_CACHE COUNT(*) FROM '.$xoopsDB->prefix('adslight_listing').' WHERE usid='.$member_usid.''));

	$xoopsTpl->assign('show_user', $show_user);
	$xoopsTpl->assign('show_user_link', 'members.php?usid='.$member_usid.'');
		}
	}

	$result = $xoopsDB->query('select SQL_CACHE COUNT(*)  FROM '.$xoopsDB->prefix('adslight_listing').' WHERE valid="No"');
		list($propo) = $xoopsDB->fetchRow($result);


if ($propo > 0) {
	$xoopsTpl->assign('moderated', true);
	}
	    if ($xoopsUser) {
			if ($xoopsUser->isAdmin()) {
				$xoopsTpl->assign('admin_block', _ADSLIGHT_ADMINCADRE);
				if($propo == 0) {
					$xoopsTpl->assign('confirm_ads', _ADSLIGHT_NO_CLA);
				} else {
					$xoopsTpl->assign('confirm_ads', _ADSLIGHT_THEREIS.' '.$propo.'  '._ADSLIGHT_WAIT.'<br /><a href="'.XOOPS_URL.'/modules/adslight/admin/validate_ads.php">'._ADSLIGHT_SEEIT.'</a>');
				}
			}

$categories = adslight_MygetItemIds('adslight_submit');
if(is_array($categories) && count($categories) > 0) {
	$intro = _ADSLIGHT_INTRO;
} else {	
	$intro = "";
}
	$xoopsTpl->assign('intro', $intro);

		}

	
	$sql = 'SELECT SQL_CACHE cid, title, img FROM '.$xoopsDB->prefix('adslight_categories').' WHERE pid = 0 ';

$categories = adslight_MygetItemIds('adslight_view');
if(is_array($categories) && count($categories) > 0) {
	$sql .= ' AND cid IN ('.implode(',', $categories).') ';
} else {	
	redirect_header(XOOPS_URL.'/index.php', 3, _NOPERM);
	exit();	
}
$sql .= 'ORDER BY title';

$result = $xoopsDB->query($sql);

$count = 1;
$content = '';
while($myrow = $xoopsDB->fetchArray($result)) {
	$title = $myts->htmlSpecialChars($myrow['title']);

	if ($myrow['img'] && $myrow['img'] != 'http://'){

		$cat_img = $myts->htmlSpecialChars($myrow['img']);
		$img = '<a href="viewcats.php?cid='.$myrow['cid'].'"><img src="'.XOOPS_URL.'/modules/adslight/images/cat/'.$cat_img.'" align="middle" alt="'.$title.'" title="'.$title.'"/></a>';

	} else {
		$img = '';
	}

	$content .= $title.' ';

	$arr = array();
	if(in_array($myrow['cid'], $categories)) {
		$arr = $mytree->getFirstChild($myrow['cid'], 'title');
		$space = 0;
		$chcount = 0;
		$subcategories = '';
	if ($xoopsModuleConfig["adslight_souscat"] == 1) {
		foreach($arr as $ele){
			if(in_array($ele['cid'], $categories)) {
				$chtitle=$myts->htmlSpecialChars($ele['title']);
				if ($chcount>$xoopsModuleConfig['adslight_nbsouscat']) {
					$subcategories .= ', ...';
					break;
				}
				if ($space>0) {
					$subcategories .= '<br />';
				}
				$subcategories .= '-&nbsp;<a href="'.XOOPS_URL.'/modules/adslight/viewcats.php?cid='.$ele['cid'].'" title="'.$chtitle.'">'.$chtitle.'</a>';
				$space++;
				$chcount++;
				$content .= $ele['title'].' ';
			}
		}
	}
		$xoopsTpl->append('categories', array('image' => $img, 'id' => $myrow['cid'], 'title' => $myts->htmlSpecialChars($myrow['title']), 'new' => categorynewgraphic($myrow['cid']), 'subcategories' => $subcategories, 'count' => $count));
		 $count++;
	}
}
	$cat_perms = '';
if(is_array($categories) && count($categories) > 0) {
	$cat_perms .= ' AND cid IN ('.implode(',', $categories).') ';
}

	list($ads) = $xoopsDB->fetchRow($xoopsDB->query("select SQL_CACHE COUNT(*)  FROM ".$xoopsDB->prefix('adslight_listing')." WHERE valid='Yes' AND status!='1' $cat_perms"));



	$xoopsTpl->assign('total_listing', _ADSLIGHT_ACTUALY.  ' '.$ads.' '  ._ADSLIGHT_ADVERTISEMENTS.' ');
	
	$submit_perms = adslight_MygetItemIds('adslight_submit');
	if(is_array($submit_perms) && count($submit_perms) > 0) {

	$add_listing = ''._ADSLIGHT_ADD_LISTING_BULLOK.'<a href="add.php">'._ADSLIGHT_ADD_LISTING_SUBOK.'</a>';	
	} 
	
	else {	
	$add_listing = ''._ADSLIGHT_ADD_LISTING_BULL.'<a href="'.XOOPS_URL.'/register.php">'._ADSLIGHT_ADD_LISTING_SUB.'</a>.';
	}
	
	if ($xoopsModuleConfig["adslight_main_cat"] == 1 || $pid != 0) {
	$xoopsTpl->assign('add_listing', $add_listing);
	}
	
	
    $xoopsTpl->assign('total_confirm', _ADSLIGHT_AND." $propo "._ADSLIGHT_WAIT3);

	if ($xoopsModuleConfig['adslight_newad'] == 1) {
	$cat_perms = "";
	if(is_array($categories) && count($categories) > 0) {
	$cat_perms .= ' AND cid IN ('.implode(',', $categories).') ';
	}

	$result=$xoopsDB->query("select SQL_CACHE lid, title, status, type, price, typeprice, date, town, country, usid, premium, valid, photo, hits from ".$xoopsDB->prefix('adslight_listing')." WHERE valid='Yes' and status!='1' $cat_perms ORDER BY date DESC LIMIT ".$xoopsModuleConfig['adslight_newcount'].'');
	if ($result){
		$xoopsTpl->assign('last_head', _ADSLIGHT_THE.' '.$xoopsModuleConfig['adslight_newcount'].' '._ADSLIGHT_LASTADD);
		$xoopsTpl->assign('last_head_title', _ADSLIGHT_TITLE);
		$xoopsTpl->assign('last_head_price', _ADSLIGHT_PRICE);
		$xoopsTpl->assign('last_head_date', _ADSLIGHT_DATE);
		$xoopsTpl->assign('last_head_local', _ADSLIGHT_LOCAL2);
		$xoopsTpl->assign('last_head_hits', _ADSLIGHT_VIEW);
		$xoopsTpl->assign('last_head_photo', _ADSLIGHT_PHOTO);
		$rank = 1;

		while(list($lid, $title, $status, $type, $price, $typeprice, $date, $town, $country, $usid, $premium, $valid, $photo, $hits)=$xoopsDB->fetchRow($result)) {

			$title = $myts->htmlSpecialChars($title);
			$type = $myts->htmlSpecialChars($type);
			$price = number_format($price, 2, ',', ' ');
			$town = $myts->htmlSpecialChars($town);
			$country = $myts->htmlSpecialChars($country);
			$premium = $myts->htmlSpecialChars($premium);
            $a_item = array();
		    $newcount = $xoopsModuleConfig['adslight_countday'];
		    $startdate = (time()-(86400 * $newcount));
		    
		if ($startdate < $date) {
		$newitem = '<img src="'.XOOPS_URL.'/modules/adslight/images/newred.gif" />';
		$a_item['new'] = $newitem;
			}

			$useroffset = '';
	    	if($xoopsUser) {
			$timezone = $xoopsUser->timezone();
		if(isset($timezone)) {
			$useroffset = $xoopsUser->timezone();
			} else {
			$useroffset = $xoopsConfig['default_TZ'];
				}
			}

			$date = ($useroffset*3600) + $date;
			$date = formatTimestamp($date,'s');
		if ($xoopsUser) {
			if ($xoopsUser->isAdmin()) {
				$a_item['admin'] = '<a href="'.XOOPS_URL.'/modules/adslight/admin/validate_ads.php?op=ModifyAds&amp;lid='.addslashes($lid).'"><img src="'.XOOPS_URL.'/modules/adslight/images/modif.gif" border=0 alt="'._ADSLIGHT_MODADMIN.'" /></a>';
			}
			}

			$a_item['type'] = $type;
			$a_item['title'] = '<a href="'.XOOPS_URL.'/modules/adslight/viewads.php?lid='.addslashes($lid).'">'.$title.'</a>';
		if ($price > 0) {
			$a_item['price'] = $price. ' '. $xoopsModuleConfig['adslight_money'].'';
			$a_item['price_typeprice'] = $typeprice;
		}else {
			$a_item['price'] = '';
			$a_item['price_typeprice'] = $typeprice;
				}
			$a_item['premium'] = $premium;
			$a_item['date'] = $date;
			$a_item['local'] = '';
			if ($town) {
				$a_item['local'] .= $town;
			}
			$a_item['country'] = '';
			if ($country) {
			$a_item['country'] = $country;
			}

		if ($status == 2) {
		$a_item['sold'] = '<font color="red"><b>[ '._ADSLIGHT_RESERVED.' ]</b></font>';
		}
		
if ( $xoopsModuleConfig['active_thumbsindex'] > 0 )
{		
		$a_item['no_photo'] = '<a href="'.XOOPS_URL.'/modules/adslight/viewads.php?lid='.addslashes($lid).'"><img class="thumb" src="'.XOOPS_URL.'/modules/adslight/images/nophoto.jpg" align="left" width="100px" alt="'.$title.'"></a>';
		
		$updir = $xoopsModuleConfig['adslight_link_upload'];
		$sql = "select cod_img, lid, uid_owner, url from ".$xoopsDB->prefix('adslight_pictures')." where  uid_owner=".mysql_real_escape_string($usid)." and lid=".mysql_real_escape_string($lid)." order by date_added ASC limit 1";
		$resultp = $xoopsDB->query($sql);
		
while(list($cod_img, $pic_lid, $uid_owner, $url)=$xoopsDB->fetchRow($resultp)) {
		
	if ($photo) {
				$a_item['photo'] = '<a href="'.XOOPS_URL.'/modules/adslight/viewads.php?lid='.addslashes($lid).'"><img class="thumb" src="'.$updir.'/thumbs/thumb_'.$url.'" align="left" width="100px" alt="'.$title.'"></a>';
			}
		}
} else {

		$a_item['no_photo'] = '<img src="'.XOOPS_URL.'/modules/adslight/images/camera_nophoto.png" align="left" width="24" alt="'.$title.'">';
		$updir = $xoopsModuleConfig['adslight_link_upload'];
		$sql = "select cod_img, lid, uid_owner, url from ".$xoopsDB->prefix('adslight_pictures')." where  uid_owner=".mysql_real_escape_string($usid)." and lid=".mysql_real_escape_string($lid)." order by date_added ASC limit 1";
		$resultp = $xoopsDB->query($sql);
		
		while(list($cod_img, $pic_lid, $uid_owner, $url)=$xoopsDB->fetchRow($resultp)) {
			if ($photo) {
				$a_item['photo'] = '<img src="'.XOOPS_URL.'/modules/adslight/images/camera_photo.png" align="left" width="24" alt="'.$title.'">';
			}
		}			
	
	
	}		
			$a_item['hits'] = $hits;
			$rank++;
			$xoopsTpl->append('items', $a_item);
			}
		}
	}
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
	case 'Adsview':
		$xoopsOption['template_main'] = 'adslight_category.html';
		Adsview($cid,$min,$orderby,$show);
		break;
	case 'viewads':
		$xoopsOption['template_main'] = 'adslight_item.html';
		viewads($lid);
		break;
    default:
		$xoopsOption['template_main'] = 'adslight_index.html';
		index();
		break;
}
include XOOPS_ROOT_PATH.'/footer.php';
?>