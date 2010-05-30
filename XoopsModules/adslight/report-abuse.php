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

include("header.php");
require_once( XOOPS_ROOT_PATH."/modules/adslight/include/gtickets.php" ) ;
include(XOOPS_ROOT_PATH."/modules/adslight/include/functions.php");

function ReportAbuse($lid)
{
   global $xoopsConfig, $xoopsModuleConfig, $xoopsDB, $xoopsUser, $xoopsTheme, $xoopsLogger, $mydirname, $main_lang;

	include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";

	$result = $xoopsDB->query("select lid, title, type FROM ".$xoopsDB->prefix("adslight_listing")." where lid=".mysql_real_escape_string($lid)."");
    list($lid, $title, $type) = $xoopsDB->fetchRow($result);
	
        
	echo "<table width='100%' border='0' cellspacing='1' cellpadding='8'><tr class='bg4'><td valign='top'>\n";
    echo "<b>"._ADSLIGHT_REPORTSENDTO." $lid </b>: \" $type : $title \"<br /><br />
	    <form action=\"report-abuse.php\" method=post>
	    <input type=\"hidden\" name=\"lid\" value=\"$lid\" />";
    if($xoopsUser) {
		$idd = $xoopsUser->getVar("uname", "E");
		$idde = $xoopsUser->getVar("email", "E");
                $iddee = $xoopsConfig['adminmail']; }else {
	        $iddee = $xoopsConfig['adminmail']; }

    
    echo "
	<table width='99%' class='outer' cellspacing='1'>
    <tr>
      <td class='head' width='30%'>"._ADSLIGHT_NAME." </td>
      <td class='even'><input class=\"textbox\" type=\"text\" name=\"yname\" value=\"$idd\" /></td>
    </tr>
    <tr>
      <td class='head'>"._ADSLIGHT_MAIL." </td>
      <td class='even'><input class=\"textbox\" type=\"text\" name=\"ymail\" value=\"$idde\" /></td>
    </tr>
    <tr>
      <td class='head'></td>
      <td class='even'><input class=\"textbox\" type=\"hidden\" name=\"fmail\" value=\"$iddee\"/></td>
    </tr>";


if ($xoopsModuleConfig["adslight_use_captcha"] == '1') {
echo "<tr><td class='head'>"._ADSLIGHT_CAPTCHA." </td><td class='even'>";
	$jlm_captcha = "";
	$jlm_captcha = (new XoopsFormCaptcha(_ADSLIGHT_CAPTCHA, "xoopscaptcha", false));
	echo $jlm_captcha->render();
echo "</td></tr>";
}

echo "</table><br />
    <input type=hidden name=op value=MailAd>
    <input type=submit value="._ADSLIGHT_SENDFR.">
    </form>     ";
    echo "</td></tr></table>";
}


function MailAd($lid, $yname, $ymail, $fname, $fmail)
{
    global $xoopsConfig, $xoopsUser, $xoopsTpl, $xoopsDB, $xoopsModule, $xoopsModuleConfig, $myts, $xoopsLogger, $mydirname, $main_lang;

if ($xoopsModuleConfig["adslight_use_captcha"] == '1') {
	xoops_load("xoopscaptcha");
	$xoopsCaptcha = XoopsCaptcha::getInstance();
	if( !$xoopsCaptcha->verify() ) {
        redirect_header( XOOPS_URL . "/modules/adslight/index.php", 2, $xoopsCaptcha->getMessage() );
		}
	}

	$result = $xoopsDB->query("select lid, title, expire, type, desctext, tel, price, typeprice, date, email, submitter, town, country, photo FROM ".$xoopsDB->prefix("adslight_listing")." where lid=".mysql_real_escape_string($lid)."");
    list($lid, $title, $expire, $type, $desctext, $tel, $price, $typeprice, $date, $email, $submitter, $town, $country, $photo) = $xoopsDB->fetchRow($result);
	
        
	$title = $myts->addSlashes($title);
	$expire = $myts->addSlashes($expire);
	$type = $myts->addSlashes($type);
	$desctext = $myts->displayTarea($desctext, 1, 1, 1, 1, 1);
	$tel = $myts->addSlashes($tel);
	$price = $myts->addSlashes($price);
	$typeprice = $myts->addSlashes($typeprice);
	$submitter = $myts->addSlashes($submitter);	
	$town = $myts->addSlashes($town);
	$country = $myts->addSlashes($country); 

	$tags = array();
	$tags['YNAME'] = stripslashes($yname);
	$tags['YMAIL'] = $ymail;
	$tags['FNAME'] = stripslashes($fname);
	$tags['FMAIL'] = $fmail;
	$tags['HELLO'] = _ADSLIGHT_HELLO;
	$tags['LID'] = $lid;
	$tags['LISTING_NUMBER'] = _ADSLIGHT_LISTING_NUMBER;
	$tags['TITLE'] = $title;
	$tags['TYPE'] = $type;
	$tags['DESCTEXT'] = $desctext;
	$tags['PRICE'] = $price;
	$tags['TYPEPRICE'] = $typeprice;
	$tags['TEL'] = $tel;
	$tags['TOWN'] = $town;
	$tags['COUNTRY'] = $country;
	$tags['OTHER'] = ""._ADSLIGHT_INTERESS."". $xoopsConfig['sitename']."";
	$tags['LISTINGS'] = "".XOOPS_URL."/modules/adslight/";
	$tags['LINK_URL'] = "".XOOPS_URL."/modules/adslight/viewads.php?lid=".addslashes($lid)."";
	$tags['THINKS_REPORT'] = ""._ADSLIGHT_REPORTMESSAGE."";
	$tags['NO_MAIL'] = ""._ADSLIGHT_NOMAIL."";
	$tags['YOU_CAN_VIEW_BELOW'] = ""._ADSLIGHT_YOU_CAN_VIEW_BELOW."";
	$tags['WEBMASTER'] = _ADSLIGHT_WEBMASTER;
	$tags['NO_REPLY'] = _ADSLIGHT_NOREPLY;
	$subject = ""._ADSLIGHT_REPORTSUBJET." ".$xoopsConfig['sitename']."";
	
	$xoopsMailer =& xoops_getMailer();
	$xoopsMailer->multimailer->isHTML(true);
	$xoopsMailer->useMail();
    $xoopsMailer->setTemplateDir(XOOPS_ROOT_PATH."/modules/". $xoopsModule->getVar('dirname') ."/language/".$xoopsConfig['language']."/mail_template/");
    $xoopsMailer->setTemplate("listing_report_abuse.tpl");
	$xoopsMailer->setFromEmail($ymail);
	$xoopsMailer->setToEmails($fmail);
	$xoopsMailer->setSubject($subject);
 	$xoopsMailer->assign($tags);
 	
 	// $fmail = $xoopsConfig['adminmail'];
 	// $xoopsMailer->setToEmails($xoopsConfig['adminmail']);
 	// $idde = $xoopsUserIsAdmin->getVar("adminmail", "E");

	$xoopsMailer->send();
	echo $xoopsMailer->getErrors();

	redirect_header("index.php",3,_ADSLIGHT_REPORTANNSEND);
	exit();
}

##############################################################
$yname = !empty($_POST['yname']) ? $myts->addSlashes($_POST['yname']) : "";
$ymail = !empty($_POST['ymail']) ? $myts->addSlashes($_POST['ymail']) : "";
$fname = !empty($_POST['fname']) ? $myts->addSlashes($_POST['fname']) : "";
$fmail = !empty($_POST['fmail']) ? $myts->addSlashes($_POST['fmail']) : "";


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

    case "ReportAbuse":
	include(XOOPS_ROOT_PATH."/header.php");
	ReportAbuse($lid);
	include(XOOPS_ROOT_PATH."/footer.php");
	break;
	
    case "MailAd":
	MailAd($lid, $yname, $ymail, $fname, $fmail);
	break;

    default:
	redirect_header("index.php",1,""._RETURNGLO."");
	break;

}

?>