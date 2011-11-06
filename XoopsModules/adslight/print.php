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

include("header.php");
require_once( XOOPS_ROOT_PATH."/modules/adslight/include/gtickets.php" ) ;
include(XOOPS_ROOT_PATH."/modules/adslight/include/functions.php");

function PrintAd($lid)
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $xoopsModuleConfig, $useroffset, $myts, $xoopsLogger, $mydirname, $main_lang;
	
	$currenttheme = $xoopsConfig['theme_set'];
	
	$result = $xoopsDB->query("select l.lid, l.title, l.expire, l.type, l.desctext, l.tel, l.price, l.typeprice, l.date, l.email, l.submitter, l.town, l.country, l.photo, p.cod_img, p.lid, p.uid_owner, p.url FROM ".$xoopsDB->prefix("adslight_listing")." l LEFT JOIN ".$xoopsDB->prefix("adslight_pictures")." p ON l.lid=p.lid where l.lid=".mysql_real_escape_string($lid)."");
    list($lid, $title, $expire, $type, $desctext, $tel, $price, $typeprice, $date, $email, $submitter, $town, $country, $photo, $cod_img, $pic_lid, $uid_owner, $url) = $xoopsDB->fetchRow($result);
	
	$title = $myts->htmlSpecialChars($title);
	$expire = $myts->htmlSpecialChars($expire);
	$type = $myts->htmlSpecialChars($type);
	$desctext = $myts->displayTarea($desctext, 1, 1, 1, 1, 1);
	$tel = $myts->htmlSpecialChars($tel);
	$price = $myts->htmlSpecialChars($price);
	$typeprice = $myts->htmlSpecialChars($typeprice);
	$submitter = $myts->htmlSpecialChars($submitter);	
	$town = $myts->htmlSpecialChars($town);
	$country = $myts->htmlSpecialChars($country);
	
    echo "
    <html>
    <head><title>".$xoopsConfig['sitename']."</title>
	<link rel=\"StyleSheet\" href=\"../../themes/".$currenttheme."/style/style.css\" type=\"text/css\">
	</head>
    <body bgcolor=\"#FFFFFF\" text=\"#000000\">
    <table border=0><tr><td>
    <table border=0 width=100% cellpadding=0 cellspacing=1 bgcolor=\"#000000\"><tr><td>
    <table border=0 width=100% cellpadding=15 cellspacing=1 bgcolor=\"#FFFFFF\"><tr><td>";

	$useroffset = "";
    if($xoopsUser) {
		$timezone = $xoopsUser->timezone();
		if(isset($timezone)){
			$useroffset = $xoopsUser->timezone();
		}else{
			$useroffset = $xoopsConfig['default_TZ'];
		}
	}
	$date = ($useroffset*3600) + $date;	
	$date2 = $date + ($expire*86400);
	$date = formatTimestamp($date,"s");
	$date2 = formatTimestamp($date2,"s");
	
	echo "<br /><br /><table width=99% border=0>
	    <tr>
      <td>"._ADSLIGHT_CLASSIFIED." (No. $lid ) <br />"._ADSLIGHT_FROM." $submitter <br /><br />";
	
	echo " <b>$type :</b> <i>$title</i><br />";
	if ($price > 0) {
		echo"<b>"._ADSLIGHT_PRICE2."</b> $price ". $xoopsModuleConfig["adslight_money"]."  - $typeprice<br />";
	}
	if ($photo) {     
		echo "<tr><td><left><img class=\"thumb\" src=\"".XOOPS_URL."/uploads/AdsLight/$url\" width=\"130px\" border=0></center>";
	}
	echo "</td>
	      </tr>
    <tr>
      <td><b>"._ADSLIGHT_DESC."</b><br /><br /><div style=\"text-align:justify;\">$desctext</div><p>";
	if ($tel) {
		echo "<br /><b>"._ADSLIGHT_TEL."</b> $tel";
	}
	if ($town) {
		echo "<br /><b>"._ADSLIGHT_TOWN."</b> $town";
	}
	if ($country) {
		echo "<br /><b>"._ADSLIGHT_COUNTRY."</b> $country";
	}
	echo "<hr />";
	echo ""._ADSLIGHT_NOMAIL." <br />".XOOPS_URL."/modules/adslight/viewads.php?lid=".addslashes($lid)."<br />";
	echo "<br /><br />"._ADSLIGHT_DATE2." $date "._ADSLIGHT_AND." "._ADSLIGHT_DISPO." $date2<br /><br />";
	echo "</td>
	</tr>
	</table>";
	echo "<br /><br /></td></tr></table></td></tr></table>
    <br /><br /><center>
    "._ADSLIGHT_EXTRANN." <b>".$xoopsConfig['sitename']."</b><br />
    <a href=\"".XOOPS_URL."/modules/adslight/\">".XOOPS_URL."/modules/adslight/</a>
    </td></tr></table>
    </body>
    </html>";
}

##############################################################

if(!isset($_POST['lid']) && isset($_GET['lid']) ) {
	$lid = intval($_GET['lid']) ;
}else {
	$lid = intval($_POST['lid']) ;
}

$op= '';
if (!empty($_GET['op'])) {
	$op = $_GET['op'];
} elseif (!empty($_POST['op'])) {
	$op = $_POST['op'];
}

switch($op) {
	
    case "PrintAd":
	PrintAd($lid);
	break;

    default:
	redirect_header("index.php",3,""._RETURNGLO."");
	break;

}

?>