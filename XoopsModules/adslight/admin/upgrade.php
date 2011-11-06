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

$mydirname = basename( dirname( dirname( __FILE__ ) ) );
$admin_lang = '_AM_' . strtoupper($mydirname);

include_once '../../../include/cp_header.php';
xoops_cp_header();
include_once XOOPS_ROOT_PATH.'/modules/adslight/include/functions.php';


if (is_object($xoopsUser) && $xoopsUser->isAdmin($xoopsModule->mid())) {
	$errors=0;

if(!jlm_ads_TableExists($xoopsDB->prefix("adslight_pictures")))
	{
		$sql = 'CREATE TABLE '.$xoopsDB->prefix("adslight_pictures")." (
  			cod_img int(11) NOT NULL auto_increment,
  			title varchar(255) NOT NULL default '',
  			date_added int(10)NOT NULL default '0',
  			date_modified int(10) NOT NULL default '0',
  			lid int(11) NOT NULL default '0',
  			uid_owner varchar(50) NOT NULL default '',
  			url varchar(50) NOT NULL default '',
  			PRIMARY KEY  (cod_img),
  			KEY storyid (storyid)
			) ENGINE=MyISAM;";
		if (!$xoopsDB->queryF($sql)) {
	    	echo '<br />' . constant($admin_lang."_UPGRADEFAILED").' '.constant($admin_lang."_UPGRADEFAILED1");
	    	$errors++;
		}
	}

// 3) Create the adslight_replies table if it does NOT exist 
	if(!jlm_ads_TableExists($xoopsDB->prefix("adslight_replies")))
	{
		$sql3 = "CREATE TABLE ".$xoopsDB->prefix("adslight_replies")." (
	  r_lid int(11) NOT NULL auto_increment,
	  lid int(5) unsigned NOT NULL default '0',
	  title varchar(50) NOT NULL default '',
	  date int(10) NOT NULL default '0',
	  submitter varchar(60) NOT NULL default '',
	  message text NOT NULL default '',
	  tele varchar(20) NOT NULL default '0',
	  email varchar(100) NOT NULL default '',
	  r_usid int(11) NOT NULL default '0',
	  PRIMARY KEY  (r_lid)
	) ENGINE=MyISAM;";

		if (!$xoopsDB->queryF($sql3)) {
		    	echo '<br />' . constant($admin_lang."_UPGRADEFAILED").' '.constant($admin_lang."_UPGRADEFAILED1");
		    	$errors++;
			}
		}

//  Add the new fields to the categories table
	if (!jlm_ads_FieldExists('cat_desc',$xoopsDB->prefix("adslight_categories"))) {
		jlm_ads_AddField("cat_desc text DEFAULT '' AFTER title",$xoopsDB->prefix("adslight_categories"));
	}

//  Add the new fields to the categories table
	if (!jlm_ads_FieldExists('cat_keywords',$xoopsDB->prefix("adslight_categories"))) {
		jlm_ads_AddField("cat_keywords text DEFAULT '' AFTER title",$xoopsDB->prefix("adslight_categories"));
	}	
	
//  Add the new fields to the categories table
	if (!jlm_ads_FieldExists('cat_moderate',$xoopsDB->prefix("adslight_categories"))) {
		jlm_ads_AddField("cat_moderate int(5) DEFAULT '0' AFTER affprice",$xoopsDB->prefix("adslight_categories"));
	}

//  Add the new fields to the categories table
	if (!jlm_ads_FieldExists('moderate_subcat',$xoopsDB->prefix("adslight_categories"))) {
		jlm_ads_AddField("moderate_subcat int(5) DEFAULT '0' AFTER cat_moderate",$xoopsDB->prefix("adslight_categories"));
	}

//  Add the new fields to the listing table
	if (!jlm_ads_FieldExists('status',$xoopsDB->prefix("adslight_listing"))) {
		jlm_ads_AddField("status INT(3) DEFAULT '0' NOT NULL AFTER title",$xoopsDB->prefix("adslight_listing"));
	}
//  Add the new fields to the listing table
	if (!jlm_ads_FieldExists('remind',$xoopsDB->prefix("adslight_listing"))) {
		jlm_ads_AddField("remind INT(11) DEFAULT '0' NOT NULL AFTER comments",$xoopsDB->prefix("adslight_listing"));
	}


    // At the end, if there was errors, show them or redirect user to the module's upgrade page
	if($errors) {
		echo '<H1>' . constant($admin_lang."_UPGRADEFAILED") . '</H1>';
		echo '<br />' . constant($admin_lang."_UPGRADEFAILED0");
	} else {
		echo "".constant($admin_lang."_UPDATECOMPLETE")." - <a href='".XOOPS_URL."/modules/system/admin.php?fct=modulesadmin&op=update&module=$mydirname'>".constant($admin_lang."_UPDATEMODULE")."</a>";
	}
} else {
	printf("<h2>%s</h2>\n",constant($admin_lang."_UPGR_ACCESS_ERROR"));
}
xoops_cp_footer();
?>
