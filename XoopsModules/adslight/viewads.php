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
require_once XOOPS_ROOT_PATH.'/modules/adslight/include/gtickets.php';

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
if (!$gperm_handler->checkRight('adslight_view', $perm_itemid, $groups, $module_id)) {
    redirect_header(XOOPS_URL.'/index.php', 3, _NOPERM);
    exit();
}
if (!$gperm_handler->checkRight("adslight_premium", $perm_itemid, $groups, $module_id)) {
    $prem_perm = '0';
} else {
    $prem_perm = '1';
}

include XOOPS_ROOT_PATH.'/modules/adslight/class/classifiedstree.php';
include XOOPS_ROOT_PATH.'/modules/adslight/include/functions.php';
$mytree = new ClassifiedsTree($xoopsDB->prefix('adslight_categories'),'cid','pid');


#  function viewads
#####################################################
function viewads($lid=0)
{
    global $xoopsDB, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $xoopsTpl, $xoopsUser, $myts, $meta, $mydirname, $main_lang, $prem_perm;
	$GLOBALS['xoopsOption']['template_main'] = "adslight_item.html";
	include XOOPS_ROOT_PATH.'/header.php';
	include XOOPS_ROOT_PATH.'/include/comment_view.php';
	$lid = (intval($lid) > 0) ? intval($lid) : 0 ;
	$rate = ($xoopsModuleConfig["adslight_rate_item"] == '1') ? '1' : '0' ;
	$xoopsTpl->assign('rate', $rate);
    $xoopsTpl->assign('imgscss', XOOPS_URL.'/modules/adslight/style/adslight.css');
    $xoopsTpl->assign('xmid', $xoopsModule->getVar('mid'));
    $xoopsTpl->assign('search_listings', _ADSLIGHT_SEARCH_LISTINGS );
	$xoopsTpl->assign('all_words', _ADSLIGHT_ALL_WORDS );
	$xoopsTpl->assign('any_words', _ADSLIGHT_ANY_WORDS );
	$xoopsTpl->assign('exact_match', _ADSLIGHT_EXACT_MATCH );
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
	
	if ($xoopsUser) {
	$member_usid = $xoopsUser->getVar('uid');
	if ($usid = $member_usid) {
		$xoopsTpl->assign('istheirs', true);
		
	list($show_user) = $xoopsDB->fetchRow($xoopsDB->query("select COUNT(*) FROM ".$xoopsDB->prefix("adslight_listing")." WHERE usid=$member_usid"));

	$xoopsTpl->assign('show_user', $show_user);
	$xoopsTpl->assign('show_user_link', 'members.php?usid='.$member_usid.'');
		}
	}

	if ($xoopsUser) {
	$currentid = $xoopsUser->getVar("uid", "E");
	}

	$cat_perms = "";
	$categories = adslight_MygetItemIds('adslight_view');
	if(is_array($categories) && count($categories) > 0) {
	$cat_perms .= ' AND cid IN ('.implode(',', $categories).') ';
	}

	$result=$xoopsDB->query("select l.lid, l.cid, l.title, l.status, l.expire, l.type, l.desctext, l.tel, l.price, l.typeprice, l.typeusure, l.date, l.email, l.submitter, l.usid, l.town, l.country, l.contactby, l.premium, l.valid, l.photo, l.photo2, l.photo3, l.hits, l.item_rating, l.item_votes, l.user_rating, l.user_votes, l.comments, p.cod_img, p.lid, p.uid_owner, p.url FROM ".$xoopsDB->prefix("adslight_listing")." l LEFT JOIN ".$xoopsDB->prefix("adslight_pictures")." p ON l.lid=p.lid  WHERE l.valid='Yes' and l.lid = ".mysql_real_escape_string($lid)." and l.status!='1' $cat_perms");
	$recordexist = $xoopsDB->getRowsNum($result);

	if ($recordexist) {
	list($lid, $cid, $title, $status, $expire, $type, $desctext, $tel, $price, $typeprice,  $typeusure, $date, $email, $submitter, $usid, $town, $country, $contactby, $premium, $valid, $photo, $photo2, $photo3, $hits, $item_rating, $item_votes, $user_rating, $user_votes, $comments, $cod_img, $pic_lid, $uid_owner, $url)=$xoopsDB->fetchRow($result);


		$newcount = $xoopsModuleConfig['adslight_countday'];
		$startdate = (time()-(86400 * $newcount));
		if ($startdate < $date) {
		$newitem = '<img src="'.XOOPS_URL.'/modules/adslight/images/newred.gif" />';
		$xoopsTpl->assign('new', $newitem);
			}

	$updir = $xoopsModuleConfig['adslight_link_upload'];
	$xoopsTpl->assign('add_from', _ADSLIGHT_ADDFROM.' '.$xoopsConfig['sitename']);
	$xoopsTpl->assign('add_from_title', _ADSLIGHT_ADDFROM );
	$xoopsTpl->assign('add_from_sitename', $xoopsConfig['sitename']);
	$xoopsTpl->assign('ad_exists', $recordexist);
	$xoopsTpl->assign('mydirname', $mydirname);


	$count = 0;
	$x=0;
	$i=0;

	$result3 = $xoopsDB->query('select cid, pid, title from '.$xoopsDB->prefix('adslight_categories').' where  cid='.mysql_real_escape_string($cid).'');
	list($ccid, $pid, $ctitle) = $xoopsDB->fetchRow($result3);
	
	$ctitle = $myts->htmlSpecialChars($ctitle);
	$varid[$x]=$ccid;
	$varnom[$x]=$ctitle;
	
	list($nbe) = $xoopsDB->fetchRow($xoopsDB->query('select COUNT(*) FROM '.$xoopsDB->prefix('adslight_listing').' where valid="Yes" AND cid='.mysql_real_escape_string($cid).' and status!="1"'));

	if($pid!=0) {
		$x=1;	
		while($pid!=0) {
			$result4 = $xoopsDB->query('select cid, pid, title from '.$xoopsDB->prefix('adslight_categories').' where cid='.mysql_real_escape_string($pid).'');
			list($ccid, $pid, $ctitle) = $xoopsDB->fetchRow($result4);
			
			$ctitle = $myts->htmlSpecialChars($ctitle);
			$varid[$x]=$ccid;
			$varnom[$x]=$ctitle;
			$x++;
		}
		$x=$x-1;
	}
	$subcats = '';
$arrow = '&nbsp;<img src="'.XOOPS_URL.'/modules/adslight/images/arrow.gif" alt="&raquo;" />';
	while($x!=-1) {
		$subcats .= ' '.$arrow.' <a href="viewcats.php?cid='.$varid[$x].'">'.$varnom[$x].'</a>';
		$x=$x-1;
	}
	$xoopsTpl->assign('nav_main', '<a href="index.php">'._ADSLIGHT_MAIN.'</a>');
	$xoopsTpl->assign('nav_sub', $subcats);
	$xoopsTpl->assign('nav_subcount', $nbe);
		$viewcount_judge = true ;
		$useroffset = "";
		if($xoopsUser) {
		$timezone = $xoopsUser->timezone();
		if(isset($timezone)) {
		$useroffset = $xoopsUser->timezone();
		}else {
		$useroffset = $xoopsConfig['default_TZ'];
		}
		if ($xoopsUser->isAdmin()) {
		$adslight_admin = true;
		} else {
		$adslight_admin = false;
		}
		// Specification for Japan: view count up judge
		if (($adslight_admin = true)||($xoopsUser->getVar("uid") ==$usid)) {
		$viewcount_judge = false ;
		}

			$contact_pm ='<a href="'.XOOPS_URL.'/pmlite.php?send2=1&amp;to_userid='.addslashes($usid).'">&nbsp;'._ADSLIGHT_CONTACTBYMP.'</a>';
		}
		if ($viewcount_judge == true ){
			$xoopsDB->queryF('UPDATE '.$xoopsDB->prefix('adslight_listing').' SET hits=hits+1 WHERE lid = '.mysql_real_escape_string($lid).'');
		}
			if ($item_votes == 1) {
				$votestring = _ADSLIGHT_ONEVOTE;
			} else {
				$votestring = sprintf(_ADSLIGHT_NUMVOTES,$item_votes);
			}
		$date = ($useroffset*3600) + $date;	
		$date2 = $date + ($expire*86400);
		$date = formatTimestamp($date,'s');
		$date2 = formatTimestamp($date2,'s');
		$title = $myts->htmlSpecialChars($title);
		$status = $myts->htmlSpecialChars($status);
		$expire = $myts->htmlSpecialChars($expire);
		$type = $myts->htmlSpecialChars($type);
		$desctext = $myts->displayTarea($desctext,1,1,1);
		$tel = $myts->htmlSpecialChars($tel);
		$price = number_format($price, 2, ',', ' ');
		$typeprice = $myts->htmlSpecialChars($typeprice);
        $typeusure = $myts->htmlSpecialChars($typeusure);
		$submitter = $myts->htmlSpecialChars($submitter);
		$usid = $myts->htmlSpecialChars($usid);
		$town = $myts->htmlSpecialChars($town);
		$country = $myts->htmlSpecialChars($country);
		$contactby = $myts->htmlSpecialChars($contactby);
		$premium = $myts->htmlSpecialChars($premium);
		
		if ($status == 2) {
		$xoopsTpl->assign('sold', '<font color="red"><b>[ '._ADSLIGHT_RESERVED.' ]</b></font>');
		
		}
		
		$xoopsTpl->assign('printA', '<a href="print.php?op=PrintAd&amp;lid='.addslashes($lid).'" target=_blank><img src="images/print.gif" border=0 alt="'._ADSLIGHT_PRINT.'"/></a>&nbsp;');
	
		if ($usid > 0) {
		$xoopsTpl->assign('submitter', '<img src="images/lesannonces.png" border="0" alt="'._ADSLIGHT_VIEW_MY_ADS.'"/>&nbsp;&nbsp;<a href="members.php?usid='.addslashes($usid).'" title="'._ADSLIGHT_VIEW_MY_ADS.' '.$submitter.'" />'._ADSLIGHT_VIEW_MY_ADS.' '.$submitter.'</a>');
		
			
		} else {
		$xoopsTpl->assign('submitter', _ADSLIGHT_VIEW_MY_ADS . ' $submitter');
		}
		$xoopsTpl->assign('lid', $lid);
		$xoopsTpl->assign('read', "$hits " . _ADSLIGHT_VIEW2);
		$xoopsTpl->assign('rating', number_format($item_rating, 2));
		$xoopsTpl->assign('votes', $votestring);
		$xoopsTpl->assign('lang_rating', _ADSLIGHT_RATINGC);
		$xoopsTpl->assign('lang_ratethisitem', _ADSLIGHT_RATETHISITEM);
		$xoopsTpl->assign('xoop_user', false);
		$isOwner = "";
		if ($xoopsUser) {
		$xoopsTpl->assign('xoop_user', true);
			$currentid = $xoopsUser->getVar('uid', 'E');
			if ($usid == $currentid) {
   				$xoopsTpl->assign('modifyads', '<img src="images/modif.gif" border="0" alt="'._ADSLIGHT_MODIFANN.'"/>&nbsp;&nbsp;<a href="modify.php?op=ModAd&amp;lid='.addslashes($lid).'">'._ADSLIGHT_MODIFANN.'</a>');
				$xoopsTpl->assign('deleteads', '<img src="images/del.gif" border="0" alt="'._ADSLIGHT_SUPPRANN.'"/>&nbsp;&nbsp;<a href="modify.php?op=ListingDel&amp;lid='.addslashes($lid).'">'._ADSLIGHT_SUPPRANN.'</a>');
				$xoopsTpl->assign('add_photos', '<a href="view_photos.php?lid='.$lid.'&uid='.$usid.'" title="'._ADSLIGHT_ADD_PHOTOS.'">'._ADSLIGHT_ADD_PHOTOS.'</a>');
				
				
			$isOwner = true;
			$xoopsTpl->assign('isOwner',$isOwner);
			}
			if ($xoopsUser->isAdmin()) {
				$xoopsTpl->assign('admin', '<a href="'.XOOPS_URL.'/modules/adslight/admin/validate_ads.php?op=ModifyAds&amp;lid='.addslashes($lid).'"><img src="images/modif.gif" border=0 alt="'._ADSLIGHT_MODADMIN.'"></a>');
			}
		}
		$xoopsTpl->assign('type', $type);
		$xoopsTpl->assign('title', $title);
		$xoopsTpl->assign('status', $status);
		$xoopsTpl->assign('desctext', $desctext);
		$xoopsTpl->assign('xoops_pagetitle', $title. ', ' .$type. ': ' .$price. ' '.$xoopsModuleConfig["adslight_money"].'  ' .$typeprice. ' - ' .$ctitle );
		
		// meta description tags for ads 
$desctextclean = strip_tags ( $desctext , '<font><img><b><i><u>' ); 
$xoTheme -> addMeta ( 'meta' , 'description' , "$title $type $price".$xoopsModuleConfig["adslight_money"]." $typeprice " . substr ( $desctextclean , 0 , 150 ));
		
	if ($price > 0) {
		$xoopsTpl->assign('price', '<b>' . _ADSLIGHT_PRICE2 . "</b> $price ".$xoopsModuleConfig["adslight_money"]." - $typeprice");
		$xoopsTpl->assign('price_head', _ADSLIGHT_PRICE2 );
		$xoopsTpl->assign('price_price', "$price". " ".$xoopsModuleConfig["adslight_money"]." ");
		$xoopsTpl->assign('price_typeprice', $typeprice);
		
		}
        
        $xoopsTpl->assign('usure_typeusure', $typeusure);
		$xoopsTpl->assign('premium', $premium);

		$xoopsTpl->assign('mustlogin', _ADSLIGHT_MUSTLOGIN);
		$xoopsTpl->assign('redirect', ""."?xoops_redirect=/modules/adslight/index.php");

		if ($town) {
			$xoopsTpl->assign('local_town', "$town");
	  	}
if ($xoopsModuleConfig["adslight_use_country"] == 1) {
		if ($country) {
			$xoopsTpl->assign('local_country', "$country");
			$xoopsTpl->assign('country_head', _ADSLIGHT_COUNTRY);
			}
	}
		//contactby
		$xoopsTpl->assign('contact_head', _ADSLIGHT_CONTACTBY);
	$tphon = "";
	    if ($tel) {
		 $tphon = "<br />"._ADSLIGHT_ORBY."&nbsp;<b>"._ADSLIGHT_TEL."</b> $tel";
		}
		if ($contactby == ""._ADSLIGHT_CONTACT_BY_PHONE."") {
			$contact = "&nbsp;<b>"._ADSLIGHT_TEL."</b> $tel";
		}
		if ($contactby == ""._ADSLIGHT_CONTACT_BY_BOTH."") {
			$contact = "<a href=\"contact.php?lid=".addslashes($lid)."\">"._ADSLIGHT_BYMAIL2."</a>".$tphon."<br />"._ADSLIGHT_ORBY."$contact_pm"; 
		}
		if ($contactby == ""._ADSLIGHT_CONTACT_BY_PM."") {
			$contact = "$contact_pm".$tphon."";
		}
		if ($contactby == ""._ADSLIGHT_CONTACT_BY_EMAIL."") {
			$contact = "<a href=\"contact.php?lid=".addslashes($lid)."\">"._ADSLIGHT_BYMAIL2."</a>".$tphon."";
		}
		$xoopsTpl->assign('contact', $contact);
		$xoopsTpl->assign('local_head', _ADSLIGHT_LOCAL);
		
		
$user_profile = XoopsUser::getUnameFromId($usid);
$xoopsTpl->assign('namesubmitter', _ADSLIGHT_CONTACT_SUBMITTER . " $submitter");
$xoopsTpl->assign('user_profile', $user_profile);
$xoopsTpl->assign('profile', '<img src="images/profil.png" border="0" alt="'._ADSLIGHT_PROFILE.'"/>&nbsp;&nbsp;'._ADSLIGHT_PROFILE.'');


if ($photo != "") {
include 'class/pictures.php';


$criteria_lid = new criteria('lid',$lid);
$criteria_uid = new criteria('uid',$usid);
$album_factory = new Xoopsjlm_picturesHandler($xoopsDB);
$pictures_object_array = $album_factory->getObjects($criteria_lid,$criteria_uid);
$pictures_number = $album_factory->getCount($criteria_lid,$criteria_uid);
if ($pictures_number==0){
        $nopicturesyet = _ADSLIGHT_NOTHINGYET;
        $xoopsTpl->assign('lang_nopicyet',$nopicturesyet);
} else {

    /**
     * Lets populate an array with the data from the pictures
     */  
    $i = 0;
    foreach ($pictures_object_array as $picture){
        $pictures_array[$i]['url']      = $picture->getVar('url','s');
        $pictures_array[$i]['desc']     = $picture->getVar('title','s');
        $pictures_array[$i]['cod_img']  = $picture->getVar('cod_img','s');
        $pictures_array[$i]['lid']      = $picture->getVar('lid','s');
        $xoopsTpl->assign('pics_array', $pictures_array);

    $i++;
    }
}
$owner = new XoopsUser();
$identifier = $owner->getUnameFromId($usid);
if ($xoopsModuleConfig['adslight_lightbox'] == 1) {

$header_lightbox = '<script type="text/javascript" src="extra/lightbox/js/prototype.js"></script>
<script type="text/javascript" src="extra/lightbox/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="extra/lightbox/js/lightbox.js"></script>
<link rel="stylesheet" href="style/galery.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="extra/lightbox/css/lightbox.css"></link>';

} else {

$header_lightbox = '<link rel="stylesheet" href="style/galery.css" type="text/css" media="screen" />';
}
$xoopsTpl->assign('path_uploads',$xoopsModuleConfig['adslight_link_upload']);

$xoopsTpl->assign('permit',$prem_perm);
$xoopsTpl->assign('xoops_module_header', $header_lightbox);

			$xoopsTpl->assign('photo', $photo);
			$xoopsTpl->assign('pic_lid', $pic_lid);
			$xoopsTpl->assign('pic_owner', $uid_owner);
		} else {
			$xoopsTpl->assign('photo', '');
		}
		$xoopsTpl->assign('date', _ADSLIGHT_DATE2." $date  - "._ADSLIGHT_DISPO." $date2 ");
	} else {
    	$xoopsTpl->assign('no_ad', _ADSLIGHT_NOCLAS);
    }
    $result8 = $xoopsDB->query('select title from '.$xoopsDB->prefix('adslight_categories').' where cid='.mysql_real_escape_string($cid).'');
    
    list($ctitle) = $xoopsDB->fetchRow($result8);
	$xoopsTpl->assign('friend', '<img src="images/friend.gif" border="0" alt="'._ADSLIGHT_SENDFRIENDS.'"/>&nbsp;&nbsp;<a href="sendfriend.php?op=SendFriend&amp;lid='.addslashes($lid).'" title="'._ADSLIGHT_SENDFRIENDS.'">'._ADSLIGHT_SENDFRIENDS.'</a>');
	
	$xoopsTpl->assign('alerteabus', '<img src="images/alerteabus.png" border="0" alt="'._ADSLIGHT_ALERTEABUS.'"/>&nbsp;&nbsp;<a href="report-abuse.php?op=ReportAbuse&amp;lid='.addslashes($lid).'" title="'._ADSLIGHT_ALERTEABUS.'">'._ADSLIGHT_ALERTEABUS.'</a>');
	
	$xoopsTpl->assign('link_main', '<a href="../adslight/" title="'._ADSLIGHT_MAIN.'">'._ADSLIGHT_MAIN.'</a>');
	$xoopsTpl->assign('link_cat', '<a href="viewcats.php?cid='.addslashes($cid).'" title="'.$ctitle.'">'._ADSLIGHT_GORUB.' '.$ctitle.'</a>');
	
	$xoopsTpl->assign('printA', '<img src="images/print.gif" border="0" alt="'._ADSLIGHT_PRINT.'"/>&nbsp;&nbsp;<a href="print.php?op=PrintAd&amp;lid='.addslashes($lid).'" title="'._ADSLIGHT_PRINT.'" target=_blank>'._ADSLIGHT_PRINT.'</a>');
}



#  function categorynewgraphic
#####################################################
function categorynewgraphic($cid)
{
    global $xoopsDB, $xoopsModuleConfig;
	
	$cat_perms ="";
	$categories = adslight_MygetItemIds('adslight_view');
	if(is_array($categories) && count($categories) > 0) {
	$cat_perms .= ' AND cid IN ('.implode(',', $categories).') ';
	}

    $newresult = $xoopsDB->query('select date from '.$xoopsDB->prefix('adslight_listing').' where cid='.mysql_real_escape_string($cid).' and valid = "Yes" '.$cat_perms.' order by date desc limit 1');
    list($date)= $xoopsDB->fetchRow($newresult);

	$newcount = $xoopsModuleConfig['adslight_countday'];
	$startdate = (time()-(86400 * $newcount));
	if ($startdate < $date) {
	return '<img src="'.XOOPS_URL.'/modules/adslight/images/newred.gif" />';
	}
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
		$xoopsOption['template_main'] = 'adslight_item.html';

		viewads($lid);
		break;
}
include XOOPS_ROOT_PATH.'/footer.php';
?>