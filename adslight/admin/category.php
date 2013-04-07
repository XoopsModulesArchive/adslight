<?php
/*
-------------------------------------------------------------------------
                     ADSLIGHT 2 : Module for Xoops                           

        Redesigned and ameliorate By Luc Bizet user at www.frxoops.org
		Started with the Classifieds module and made MANY changes 
        Website : http://www.luc-bizet.fr
        Contact : adslight.translate@gmail.com
-------------------------------------------------------------------------
             Original credits below Version History                       
##########################################################################
#                    Classified Module for Xoops                         #
#  By John Mordo user jlm69 at www.xoops.org and www.jlmzone.com         #
#      Started with the MyAds module and made MANY changes               #
##########################################################################
 Original Author: Pascal Le Boustouller                                   
 Author Website : pascal.e-xoops@perso-search.com                         
 Licence Type   : GPL                                                     
------------------------------------------------------------------------- 
*/

include 'admin_header.php';
xoops_cp_header();

if (isset($_REQUEST['op'])) {
	$op = $_REQUEST['op'];
} else {
	$op = 'liste';
}

#  function AdsNewCat
#####################################################
function AdsNewCat($cat)
{
    global $xoopsDB, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $myts, $mydirname;
	
	$mytree = new ClassifiedsTree($xoopsDB->prefix("adslight_categories"),"cid","pid");

    include 'header.php';
    
//    loadModuleAdminMenu(1, "");
	echo "<fieldset><legend style='font-weight: bold; color: #900;'>"._AM_ADSLIGHT_ADDSUBCAT."</legend>"; 
	ShowImg();
	
	echo "<form method=\"post\" action=\"category.php\" name=\"imcat\"><input type=\"hidden\" name=\"op\" value=\"AdsAddCat\"></font><br><br>
		<table class=\"outer\" border=0>
    <tr>
      <td class=\"even\">"._AM_ADSLIGHT_CATNAME." </td><td class=\"odd\" colspan=2><input type=\"text\" name=\"title\" size=\"50\" maxlength=\"100\">&nbsp; "._AM_ADSLIGHT_IN." &nbsp;";

$cid = $_GET['cid'] ;

	$result = $xoopsDB->query("select cid, pid, title, cat_desc, cat_keywords, img, ordre, affprice, cat_moderate, moderate_subcat from ".$xoopsDB->prefix("adslight_categories")." where cid=$cat");
	list($cat_id, $pid, $title, $cat_desc, $cat_keywords, $imgs, $ordre, $affprice, $cat_moderate, $moderate_subcat) = $xoopsDB->fetchRow($result);
	$mytree->makeMySelBox("title", "title", $cat, 1);
	echo "</td>
	</tr>";
$cat_desc = '';
$cat_keywords = '';

	if ($xoopsModuleConfig["adslight_cat_desc"] = "1") {
	echo "<tr><td class=\"even\">"._AM_ADSLIGHT_CAT_META_DESCRIPTION." </td><td class=\"odd\" colspan=2>";
	echo "<input type=\"text\" name=\"cat_desc\" value=\"$cat_desc\" size=\"80\" maxlength=\"200\">";
	echo "</td></tr>";
	
	echo "<tr><td class=\"even\">"._AM_ADSLIGHT_CAT_META_KEYWORDS." </td><td class=\"odd\" colspan=2>";
	echo "<input type=\"text\" name=\"cat_keywords\" value=\"$cat_keywords\" size=\"80\" maxlength=\"200\">";
	echo "</td></tr>";
    }
	
	echo "<tr>
      <td class=\"even\">"._AM_ADSLIGHT_IMGCAT."  </td><td class=\"odd\" colspan=2><select name=\"img\" onChange=\"showimage()\">";	  
	  
	$rep = XOOPS_ROOT_PATH."/modules/adslight/images/img_cat";
	$handle=opendir($rep);
	while ($file = readdir($handle)) {
		$filelist[] = $file;
	}
	asort($filelist);
	while (list ($key, $file) = each ($filelist)) {
		if (preg_match('/.gif/i', $file) || preg_match('/.jpg/i', $file) || preg_match('/.png/i', $file)) {
			if ($file == "." || $file == "..") $a=1;
		} else {
			if ($file == "default.png") {
				echo "<option value=$file selected>$file</option>";
			} else {
				echo "<option value=$file>$file</option>";
			}
		}
	}
	echo "</select>&nbsp;&nbsp;<img src=\"".XOOPS_URL."/modules/adslight/images/img_cat/default.png\" name=\"avatar\" align=\"absmiddle\"><br/><b>"._AM_ADSLIGHT_REPIMGCAT."</b><br/>../modules/adslight/images/img_cat/..</td></tr>";

		echo "<tr><td class=\"even\">"._AM_ADSLIGHT_DISPLPRICE2." </td><td class=\"odd\" colspan=2><input type=\"radio\" name=\"affprice\" value=\"1\" checked>"._AM_ADSLIGHT_OUI."&nbsp;&nbsp; <input type=\"radio\" name=\"affprice\" value=\"0\">"._AM_ADSLIGHT_NON." ("._AM_ADSLIGHT_INTHISCAT.")</td></tr>";

		echo "<tr><td class=\"even\">"._AM_ADSLIGHT_MODERATE_CAT." </td><td class=\"odd\" colspan=2><input type=\"radio\" name=\"cat_moderate\" value=\"1\"checked>"._AM_ADSLIGHT_OUI."&nbsp;&nbsp; <input type=\"radio\" name=\"cat_moderate\" value=\"0\">"._AM_ADSLIGHT_NON."</td></tr>";

		echo "<tr><td class=\"even\">"._AM_ADSLIGHT_MODERATE_SUBCATS." </td><td class=\"odd\" colspan=2><input type=\"radio\" name=\"moderate_subcat\" value=\"1\"checked>"._AM_ADSLIGHT_OUI."&nbsp;&nbsp; <input type=\"radio\" name=\"moderate_subcat\" value=\"0\">"._AM_ADSLIGHT_NON."</td></tr>";
		
		
	if ($xoopsModuleConfig["adslight_csortorder"] != "title") {
		echo "<tr><td>"._AM_ADSLIGHT_ORDRE." </td><td><input type=\"text\" name=\"ordre\" size=\"4\" value=\"0\" /></td><td class=\"foot\"><input type=\"submit\" value=\""._AM_ADSLIGHT_ADD."\" /></td></tr>";
	} else {
		$ordre = intval($ordre);
		echo "<input type=\"hidden\" name=\"ordre\" value=\"$ordre\">";
		echo "<tr><td class=\"foot\" colspan=3><input type=\"submit\" value=\""._AM_ADSLIGHT_ADD."\" /></td></tr>";
	}

	echo "</table>
	    </form>";
	echo "<br>";
	
	echo "</fieldset><br />";
	xoops_cp_footer();
}

#  function AdsModCat
#####################################################
function AdsModCat($cid)
{
    global $xoopsDB, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $myts, $mydirname;

	$mytree = new ClassifiedsTree($xoopsDB->prefix("adslight_categories"),"cid","pid");
	
    include 'header.php';
  
//    loadModuleAdminMenu(1, "");
	echo "<fieldset><legend style='font-weight: bold; color: #900;'>". _AM_ADSLIGHT_MODIFCAT . "</legend>";
	ShowImg();

	$result = $xoopsDB->query("select cid, pid, title, cat_desc, cat_keywords, img, ordre, affprice, cat_moderate, moderate_subcat from ".$xoopsDB->prefix("adslight_categories")." where cid=$cid");
	list($cat_id, $pid, $title, $cat_desc, $cat_keywords, $imgs, $ordre, $affprice, $cat_moderate, $moderate_subcat) = $xoopsDB->fetchRow($result);
	
	$title = $myts->htmlSpecialChars($title);
	$cat_desc = $myts->addslashes($cat_desc);
	echo "<form action=\"category.php\" method=\"post\" name=\"imcat\">
		<table class=\"outer\" border=\"0\"><tr>
	<td class=\"even\">"._AM_ADSLIGHT_CATNAME."   </td><td class=\"odd\"><input type=\"text\" name=\"title\" value=\"$title\" size=\"50\" maxlength=\"100\" />&nbsp; "._AM_ADSLIGHT_IN." &nbsp;";
	$mytree->makeMySelBox("title", "title", $pid, 1);
	echo "</td></tr>";

	if ($xoopsModuleConfig["adslight_cat_desc"] = "1") {
	echo "<tr><td class=\"even\">"._AM_ADSLIGHT_CAT_META_DESCRIPTION." </td><td class=\"odd\" colspan=2>";
	echo "<input type=\"text\" name=\"cat_desc\" value=\"$cat_desc\" size=\"80\" maxlength=\"200\">";
	echo "</td></tr>";
	
	echo "<tr><td class=\"even\">"._AM_ADSLIGHT_CAT_META_KEYWORDS." </td><td class=\"odd\" colspan=2>";
	echo "<input type=\"text\" name=\"cat_keywords\" value=\"$cat_keywords\" size=\"80\" maxlength=\"200\">";
	echo "</td></tr>";
	
    }
	
	echo "<tr>
	<td class=\"even\">"._AM_ADSLIGHT_IMGCAT."  </td><td class=\"odd\"><select name=\"img\" onChange=\"showimage()\">";	  
	  
	$rep = XOOPS_ROOT_PATH."/modules/adslight/images/img_cat";
	$handle=opendir($rep);
	while ($file = readdir($handle)) {
		$filelist[] = $file;
	}
	asort($filelist);
	while (list ($key, $file) = each ($filelist)) {
		if (preg_match('/.gif/i', $file) || preg_match('/.jpg/i', $file) || preg_match('/.png/i', $file)) {
			if ($file == "." || $file == "..") $a=1;
		} else {
			if ($file == $imgs) {
				echo "<option value=$file selected>$file</option>";
			} else {
				echo "<option value=$file>$file</option>";
			}
		}
	}
		echo "</select>&nbsp;&nbsp;<img src=\"".XOOPS_URL."/modules/adslight/images/img_cat/$imgs\" name=\"avatar\" align=\"absmiddle\"><br/><b>"._AM_ADSLIGHT_REPIMGCAT."</b><br/>../modules/adslight/images/img_cat/..</td></tr>";

		echo "<tr><td class=\"even\">"._AM_ADSLIGHT_DISPLPRICE2." </td><td class=\"odd\" colspan=2><input type=\"radio\" name=\"affprice\" value=\"1\""; if ($affprice == "1")
		echo "checked"; 
		echo ">"._AM_ADSLIGHT_OUI."&nbsp;&nbsp; <input type=\"radio\" name=\"affprice\" value=\"0\""; if ($affprice == "0") 
		echo "checked"; 
		echo ">"._AM_ADSLIGHT_NON." ("._AM_ADSLIGHT_INTHISCAT.")</td></tr>";

		echo "<tr><td class=\"even\">"._AM_ADSLIGHT_MODERATE_CAT." </td><td class=\"odd\" colspan=2><input type=\"radio\" name=\"cat_moderate\" value=\"1\""; if ($cat_moderate == "1")
		echo "checked"; 
		echo ">"._AM_ADSLIGHT_OUI."&nbsp;&nbsp; <input type=\"radio\" name=\"cat_moderate\" value=\"0\""; if ($cat_moderate == "0") 
		echo "checked"; 
		echo ">"._AM_ADSLIGHT_NON."</td></tr>";

  		echo "<tr><td class=\"even\">"._AM_ADSLIGHT_MODERATE_SUBCATS." </td><td class=\"odd\" colspan=2><input type=\"radio\" name=\"moderate_subcat\" value=\"1\""; if ($moderate_subcat == "1")
		echo "checked"; 
		echo ">"._AM_ADSLIGHT_OUI."&nbsp;&nbsp; <input type=\"radio\" name=\"moderate_subcat\" value=\"0\""; if ($moderate_subcat == "0") 
		echo "checked";    
		echo ">"._AM_ADSLIGHT_NON."</td></tr>";

	if ($xoopsModuleConfig["adslight_csortorder"] != "title") {
		echo "<tr><td class=\"even\">"._AM_ADSLIGHT_ORDRE." </td><td class=\"odd\"><input type=\"text\" name=\"ordre\" size=\"4\" value=\"$ordre\"></td></tr>";
	} else {
	$ordre = intval($ordre);
	echo "<input type=\"hidden\" name=\"ordre\" value=\"$ordre\">";
	}

	echo "</table>";
		
	echo "<input type=\"hidden\" name=\"cidd\" value=\"$cid\">"
	    ."<input type=\"hidden\" name=\"op\" value=\"AdsModCatS\">"
	    ."<table class=\"foot\" border=\"0\"><tr><td width=\"20%\"><br />"

	    ."<input type=\"submit\" value=\""._AM_ADSLIGHT_SAVMOD."\"></form></td><td><br />"
	    ."<form action=\"category.php\" method=\"post\">"
	    ."<input type=\"hidden\" name=\"cid\" value=\"$cid\">"
	    ."<input type=\"hidden\" name=\"op\" value=\"AdsDelCat\">"
	    ."<input type=\"submit\" value=\""._AM_ADSLIGHT_DEL."\"></form></td></tr></table>";
	echo "</fieldset><br />";
	xoops_cp_footer();
}

#  function AdsModCatS
#####################################################
function AdsModCatS($cidd, $cid, $img, $title, $cat_desc, $cat_keywords, $ordre, $affprice, $cat_moderate, $moderate_subcat)
{
    global $xoopsDB, $xoopsConfig, $myts, $mydirname;
	
	$title = $myts->htmlSpecialChars($title);

	$xoopsDB->query("update ".$xoopsDB->prefix("adslight_categories")." set title='$title', cat_desc='$cat_desc', cat_keywords='$cat_keywords', pid='$cid', img='$img', ordre='$ordre', affprice='$affprice', cat_moderate='$cat_moderate', moderate_subcat='$moderate_subcat' where cid=$cidd");

	if ($moderate_subcat != 1) {
	$xoopsDB->queryF("UPDATE ".$xoopsDB->prefix("adslight_categories")." SET cat_moderate=0, moderate_subcat=0 WHERE pid = ".mysql_real_escape_string($cidd)."");
	} else {
	$xoopsDB->queryF("UPDATE ".$xoopsDB->prefix("adslight_categories")." SET cat_moderate=1, moderate_subcat=1 WHERE pid = ".mysql_real_escape_string($cidd)."");
	}

	
	redirect_header("map.php",10,_AM_ADSLIGHT_CATSMOD);
	exit();
}

	#  function AdsAddCat
#####################################################
function AdsAddCat($title, $cat_desc, $cat_keywords, $cid, $img, $ordre, $affprice, $cat_moderate, $moderate_subcat) 
{
    global $xoopsDB, $xoopsConfig, $myts, $mydirname;

	$title = $myts->htmlSpecialChars($title);
	$moderate_subcat = intval($moderate_subcat);
	if ($title == "") {
		$title = "! ! ? ! !";
	}
	
	$xoopsDB->query("insert into ".$xoopsDB->prefix("adslight_categories")." values (NULL, '$cid', '$title', '$cat_desc', '$cat_keywords', '$img', '$ordre', '$affprice', '$cat_moderate', '$moderate_subcat')");


	if ($moderate_subcat = 1) {
	$xoopsDB->queryF("UPDATE ".$xoopsDB->prefix("adslight_categories")." SET cat_moderate=1 WHERE pid = ".mysql_real_escape_string($cid)."");
	} else {
	$xoopsDB->queryF("UPDATE ".$xoopsDB->prefix("adslight_categories")." SET cat_moderate=0 WHERE pid = ".mysql_real_escape_string($cid)."");
	}

	
	redirect_header("map.php",3,_AM_ADSLIGHT_CATADD);
	exit();
}

#  function AdsDelCat
#####################################################
function AdsDelCat($cid, $ok=0) {
    global $xoopsDB, $xoopsConfig, $xoopsModule, $mydirname;

    if(intval($ok)==1) {
    	$xoopsDB =& XoopsDatabaseFactory::getDatabaseConnection();
	    $xoopsDB->queryf("delete from ".$xoopsDB->prefix("adslight_categories")." where cid=$cid or pid=$cid");
	    $xoopsDB->queryf("delete from ".$xoopsDB->prefix("adslight_listing")." where cid=$cid");


		redirect_header("map.php",1,_AM_ADSLIGHT_CATDEL);
		exit();   
    } else {

        include 'header.php';
//        loadModuleAdminMenu(1, "");

		OpenTable();
		echo "<br><center><b>"._AM_ADSLIGHT_SURDELCAT."</b><br><br>";
		echo "[ <a href=\"category.php?op=AdsDelCat&cid=$cid&ok=1\">"._AM_ADSLIGHT_OUI."</a> | <a href=\"map.php\">"._AM_ADSLIGHT_NON."</a> ]<br><br>";
		CloseTable();
		xoops_cp_footer();
	}	
}

#####################################################
foreach ($_POST as $k => $v) {
	${$k} = $v;
}

$ok = isset( $_GET['ok'] ) ? $_GET['ok'] : '' ;

if(!isset($_POST['cid']) && isset($_GET['cid']) ) {
	$cid = $_GET['cid'] ;
}
if(!isset($_POST['op']) && isset($_GET['op']) ) {
	$op = $_GET['op'] ;
}

switch ($op) {

    case "AdsNewCat":
    AdsNewCat($cid);
    break;

    case "AdsAddCat":
    AdsAddCat($title, $cat_desc, $cat_keywords, $cid, $img, $ordre, $affprice, $cat_moderate, $moderate_subcat);
    break;

    case "AdsDelCat":
    AdsDelCat($cid, $ok);
    break;

    case "AdsModCat":
    AdsModCat($cid);
    break;

    case "AdsModCatS":
    AdsModCatS($cidd, $cid, $img, $title, $cat_desc, $cat_keywords, $ordre, $affprice, $cat_moderate, $moderate_subcat);
    break;

    default:
    Index();
    break;

}