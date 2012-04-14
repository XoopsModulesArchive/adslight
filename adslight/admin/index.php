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

include 'admin_header.php';


if (isset($_REQUEST['op'])) {
	$op = $_REQUEST['op'];
} else {
	$op = 'liste';
}

#  function Index
#####################################################
function Index()
{
    global $hlpfile, $xoopsDB, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $myts, $desctext, $mydirname;

	$mytree = new ClassifiedsTree($xoopsDB->prefix("adslight_categories"),"cid","pid");
	
    include 'header.php';
    require_once("adsligh_rsslib.php");
    
    xoops_cp_header();
    loadModuleAdminMenu(0, "");
    
    

echo "<table width=\"50%\" border=\"0\" cellspacing=\"8\" cellpadding=\"0\">
      <tr>
		<td valign=\"top\">";
		
/// Test Xml ///    
$resultat_xml = XOOPS_ROOT_PATH."/modules/adslight/datas.xml";
$adslight_xml = $xoopsModuleConfig['adslight_maps_set'];

$page2 = implode("", file("$resultat_xml"));
if(ereg("$adslight_xml",$page2))
{ } else { 
  
  echo "<table class='outer' border=0 cellspacing=5 cellpadding=0><tr><td width=40>";
  echo "<img src='../images/admin/page_table_close_32.png' border=0 alt=\"._AM_ADSLIGHT_XMLNOTOK.\" /></td><td>";
  echo "&nbsp;<font color='#FE0101'><b>"._AM_ADSLIGHT_XMLNOTOK."</b></font><br />";
  echo "&nbsp;<a href='index.php?op=CopyXml'>"._AM_ADSLIGHT_XMLUPGRADE."</a></td></tr></table>";
  
  }
    

/// Test Release ///    
$resultat_site = "http://www.i-luc.fr/release/release.html";
$page1 = implode("", file("$resultat_site"));
if(ereg("1.061",$page1))
{ echo "<table class='outer' border=0 cellspacing=5 cellpadding=0><tr><td width=40>";
  echo "<img src='../images/admin/info_button_32.png' border=0 alt=\"._AM_ADSLIGHT_RELEASEOK.\" /></td><td>"; 
  echo "<font color='#00B4C4'><b>"._AM_ADSLIGHT_RELEASEOK." 1.061</b></font>";
  echo "</td></tr></table><br />";
  
} else { 

  echo "<table class='outer' border=0 cellspacing=5 cellpadding=0><tr><td width=40>";
  echo "<img src='../images/admin/error_button_32.png' border=0 alt=\"._AM_ADSLIGHT_RELEASEDOWNLOAD.\" /></td><td>";
  echo "<font color='#FE0101'><b>"._AM_ADSLIGHT_RELEASEISNOTOK."</b></font><br />";
  echo "<a href='http://www.i-luc.fr/adslight/modules/TDMDownloads/visit.php?cid=1&lid=3'>"._AM_ADSLIGHT_RELEASEDOWNLOAD."</a></td></tr></table><br />";
  
  }
      
///////// Il y a [..] Annonces en attente d'être approuvées //////  
	$result = $xoopsDB->query("select lid from ".$xoopsDB->prefix("adslight_listing")." WHERE valid='no'");
	$numrows = $xoopsDB->getRowsNum($result);
    if ($numrows>0) {
    
   		echo "<table class='outer' border=0 cellspacing=5 cellpadding=0><tr><td width=40>";
  		echo "<img src='../images/admin/error_button.png' border=0 /></td><td>";
        echo "<font color=\"#00B4C4\"><b>"._AM_ADSLIGHT_THEREIS."</b></font> <b>$numrows</b> <font color=\"#00B4C4\">"._AM_ADSLIGHT_WAIT."</b></font>";
        echo "</td></tr></table><br />";
		
		} else {
		
		echo "<table class='outer' width='50%' border='0'><tr><td width=40>";
		echo "<img src='../images/admin/search_button_green_32.png' border=0 alt=\"._AM_ADSLIGHT_RELEASEOK.\" /></td><td>";
		echo "<font color='#00B4C4'><b>"._AM_ADSLIGHT_NOANNVAL."</b></font>";
        echo '</td></tr></table><br />';
  
    }
    
//// Center menu

   /// Annonces
    
    	  echo '<table width="50%" border="0" class="outer">
    	  		<tr><th align="left">'._AM_ADSLIGHT_ADSMENU_TITLE.'</th></tr>
            	
		 		<tr class="odd"><td><img src="../images/admin/report_go.png" border=0 />
		  		<a href="'.XOOPS_URL.'/modules/adslight/admin/validate_ads.php">'._AM_ADSLIGHT_ADSMENU_VALIDADS.'</a>
		  		</td></tr>
		  
		 		<tr class="even"><td><img src="../images/admin/report_magnify.png" border=0 />
		  		<a href="'.XOOPS_URL.'/modules/adslight/admin/view_ads.php">'._AM_ADSLIGHT_ADSMENU_VIEWADS.'</a>
		  		</td></tr>
		  
		  		<tr class="odd"><td><img src="../images/admin/report_add.png" border=0 />
		  		<a href="'.XOOPS_URL.'/modules/adslight/admin/modify_ads.php">'._AM_ADSLIGHT_ADS_MODIFADS.'</a>
		  		</td></tr>
		 			
		  	</table><br />';
		  	
 ////	RSS AdsLight Forum
    	  
    	  echo '<table width="50%" border="0" class="outer">
    	  		<tr><th align="left">'._AM_ADSLIGHT_MENURSSFORUM_TITLE.'</th></tr>
  				<tr class="even"><td width="300">';
  				
  	
	$url = _AM_ADSLIGHT_MENURSSFORUM_URL;
		  echo RSS_DisplayForum($url, 5, false, true);
		 
		 
		  echo '</td></tr>
		  		<tr class="odd"><td><img src="../images/admin/user_go.png" border=0 />
		  		<a href="'._AM_ADSLIGHT_MENURSSFORUM_LINK1.'">'._AM_ADSLIGHT_MENURSSFORUM_GOFORUM.'</a>  |
		  		
		  		<img src="../images/admin/vcard_add.png" border=0 />
		  		<a href="'._AM_ADSLIGHT_MENURSSFORUM_LINK2.'">'._AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT.'</a>  |
		  		</td></tr>
		  		</table>';
  
 ////	RSS AdsLight News
    	  
    	echo '<table width="50%" border="0" class="outer">
    	  	  <tr><th align="left">'._AM_ADSLIGHT_MENURSS_TITLE.'</th></tr>';
  			
  				$url = "http://www.i-luc.fr/adslight/backend.php";
		echo RSS_Display($url, 3, false, true);
		 
		 
			echo '</table><br />
    	  
    	  
       	</td>
    	  <td valign="top">';
    	  
////// Right Menu Admin

/// Statistiques
$Num1 = mysql_num_rows(mysql_query("select * from ".$xoopsDB->prefix("adslight_listing")."  where (valid='Yes' AND status!='1')"));
$Num2 = mysql_num_rows(mysql_query("select * from ".$xoopsDB->prefix("adslight_categories").""));
$Num3 = mysql_num_rows(mysql_query("select * from ".$xoopsDB->prefix("users")."  where (level = '1')"));
$Num4 = mysql_num_rows(mysql_query("select * from ".$xoopsDB->prefix("xoopscomments")."  where (com_status = '2')"));

		  echo '<table width=100 border="0" class="outer"><tr>
            	<th align="left">'._AM_ADSLIGHT_STAT_TITLE.'</th></tr>
            	
		  		<tr class="odd"><td>
		  		<b>'.$Num1.'</b> '._AM_ADSLIGHT_STAT_NUM1.'
		  		</td></tr>
		  		
		  			
		 		<tr class="even"><td>
		 		<b>'.$Num2.'</b> '._AM_ADSLIGHT_STAT_NUM2.'
		 		</td></tr>
		 		
		  		<tr class="odd"><td>
		  		<b>'.$Num3.'</b> '._AM_ADSLIGHT_STAT_NUM3.'
		  		</td></tr>
		  		
		 		<tr class="odd"><td>
		 		<b>'.$Num4.'</b> '._AM_ADSLIGHT_STAT_NUM4.'
		 		</td></tr>
		 		
		  		</table><br />';
    
		  
	/// Menu Catégories  
		  echo '<table width=100 border="0" class="outer"><tr>
           		<th width="50%" align="left">'._AM_ADSLIGHT_CATMENU_TITLE.'</th></tr>
            	
		  		<tr class="odd"><td><img src="../images/admin/chart_organisation_add.png" border=0 />
		  		<a href="'.XOOPS_URL.'/modules/adslight/admin/category.php?op=AdsNewCat&cid=0">'._AM_ADSLIGHT_CATMENU_CATEGORY.'</a>
		  		</td></tr>
		  
		  		<tr class="even"><td><img src="../images/admin/chart_organisation.png" border=0 />
		  		<a href="'.XOOPS_URL.'/modules/adslight/admin/map.php">'._AM_ADSLIGHT_CATMENU_MODIFCAT.'</a>
		  		</td></tr>
		 			
		  </table><br />';

	/// Menu Gestion
		  echo '<table width=100 border="0" class="outer"><tr>
            	<th align="left">'._AM_ADSLIGHT_USERMENU_TITLE.'</th></tr>
            	
		  		<tr class="odd"><td><img src="../images/admin/email_forward.png" border=0 />
		  		<a href="'.XOOPS_URL.'/modules/system/admin.php?fct=mailusers">'._AM_ADSLIGHT_USERMENU_SENDMAIL.'</a>
		  		</td></tr>
		  		
		  		<tr class="even"><td><img src="../images/admin/comment_user.png" border=0 />
		  		<a href="'.XOOPS_URL.'/modules/system/admin.php?fct=comments">'._AM_ADSLIGHT_USERMENU_COMMENT.'</a>
		  		</td></tr>
		  		
		 		<tr class="odd"><td><img src="../images/admin/web_layout.png" border=0 />
		 		<a href="'.XOOPS_URL.'/modules/system/admin.php?fct=banners">'._AM_ADSLIGHT_USERMENU_BAMMIER.'</a>
		 		</td></tr>
		 			
		  		</table><br />';
		  		
		/// Menu Downloads
		  echo '<table width=100 border="0" class="outer"><tr>
            	<th align="left">'._AM_ADSLIGHT_DOWNLOADS_TITLE.'</th></tr>
            	
		  		<tr class="odd"><td><img src="../images/admin/brick.png" border=0 />
		  		<a href="http://www.i-luc.fr/adslight/modules/TDMDownloads/viewcat.php?cid=5">'._AM_ADSLIGHT_DOWNLOADS_PLUGINS.'</a>
		  		</td></tr>
		  		
		  		<tr class="even"><td><img src="../images/admin/world.png" border=0 />
		  		<a href="http://www.i-luc.fr/adslight/modules/TDMDownloads/index.php">'._AM_ADSLIGHT_DOWNLOADS_MAPS.'</a>
		  		</td></tr>
		 			
		  		</table><br />';

		  
	/// Menu Devellopement
		  echo '<table width=100 border="0" class="outer">
		  
		  		<tr><th align="left">'._AM_ADSLIGHT_DEVLLP_TITLE.'</th></tr>
            	
		 		<tr class="odd"><td><img src="../images/admin/page_white_code.png" border=0 />
		 		<a href="mailto:adslight.translate@gmail.com?subject=Hack AdsLight">'._AM_ADSLIGHT_DEVLLP_HACK.'</a>
		 		</td></tr>
		  
		 		<tr class="even"><td><img src="../images/admin/page_white_world.png" border=0 />
		 		<a href="mailto:adslight.translate@gmail.com?subject=Traduction AdsLight">'._AM_ADSLIGHT_DEVLLP_TRANSLATE.'</a>
		 		</td></tr>
		  
		  		<tr class="odd"><td><img src="../images/admin/page_white_text.png" border=0 />
		  		<a href="mailto:adslight.translate@gmail.com?subject=Correction AdsLight">'._AM_ADSLIGHT_DEVLLP_CORRECTION.'</a>
		  		</td></tr>
		  		
		  		<tr class="even"><td><img src="../images/admin/page_white_flash.png" border=0 />
		  		<a href="mailto:adslight.translate@gmail.com?subject=Correction AdsLight">'._AM_ADSLIGHT_DEVLLP_MAPFLASH.'</a>
		  		</td></tr>
		  
		  		<tr class="odd"><td><img src="../images/admin/group.png" border=0 />
		  		<a href="'.XOOPS_URL.'/modules/adslight/admin/support_forum.php">'._AM_ADSLIGHT_DEVLLP_FORUM.'</a>
		  		</td></tr>
		 			
		  		</table><br />';
		  		
		/// Faire un don
		  echo '<table width=100 border="0" class="outer">
		  
		  		<tr><th align="left">'._AM_ADSLIGHT_DONATE_TITLE.'</th></tr>
            	
		 		<tr class="odd"><td width=100>
		 		'._AM_ADSLIGHT_DONATE.'
		 		</td></tr>
		  
		 		<tr class="even"><td><center>
		 		'._AM_ADSLIGHT_DONATE_LOGO.'
		 		</center></td></tr>
		 			
		  		</table><br />';	
				
				
////// AND Right Menu Admin /////       
    echo "</td>
			</tr>
				</table>";

   xoops_cp_footer();
}





#  function CopyXml
#####################################################
function CopyXml($lid)
{
     global $xoopsDB, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $xoopsUser, $xoopsTpl, $myts, $mytree, $meta, $mid, $mydirname, $main_lang, $prem_perm;
     
     
    $adslight_maps = $xoopsModuleConfig['adslight_maps_set'];
	
	$indexFile = XOOPS_ROOT_PATH."/modules/adslight/maps/$adslight_maps/datas.xml";
	copy($indexFile, XOOPS_ROOT_PATH."/modules/adslight/datas.xml");

	
	redirect_header("index.php",3,_AM_ADSLIGHT_ANNVALID);
	exit();
}


#####################################################
#####################################################

foreach ($_POST as $k => $v) {
	${$k} = $v;
}

    $pa = isset( $_GET['pa'] ) ? $_GET['pa'] : '' ;

if(!isset($_POST['lid']) && isset($_GET['lid']) ) {
	$lid = $_GET['lid'] ;
}
if(!isset($_POST['op']) && isset($_GET['op']) ) {
	$op = $_GET['op'] ;
}
if (!isset($op)) {
	$op = '';
}


switch ($op) {

    
    case "CopyXml":
    CopyXml($lid);
    break;

    default:
    Index();
    break;

}


?>