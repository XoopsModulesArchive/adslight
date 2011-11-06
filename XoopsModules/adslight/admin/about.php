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
 
include_once("../../../include/cp_header.php");
include 'header.php';
xoops_cp_header();

if ( !is_readable(XOOPS_ROOT_PATH . "/Frameworks/art/functions.admin.php"))	{
    adslight_adminmenu(6, "");
} else {
    include_once XOOPS_ROOT_PATH.'/Frameworks/art/functions.admin.php';
    loadModuleAdminMenu (6, "");
}


$versioninfo =& $module_handler->get( $xoopsModule->getVar( 'mid' ) );
echo "
	<style type=\"text/css\">
	label,text {
		display: block;
		float: left;
		margin-bottom: 2px;
	}
	label {
		text-align: right;
		width: 100px;
		padding-right: 20px;
	}
	br {
		clear: left;
	}
	</style>
";
///// Présentation du Module
echo '<table width=100 border="0" class="outer"><tr>
           <th width="50%" align="left">'. $xoopsModule->getVar("name").'</th></tr>
           <tr class="odd"><td>
           <img src="'.XOOPS_URL.'/modules/'.$xoopsModule->getVar('dirname').'/'. $versioninfo->getInfo('image').'" alt="" hspace="10" vspace="0" /></a>
		</td></tr>
		<tr class="even"><td>
		    <div style="padding: 5px;"><strong>'.$versioninfo->getInfo('name').'version'.$versioninfo->getInfo('version').'</strong></div>
			<label>'._AM_ADSLIGHT_ABOUT_RELEASEDATE.':</label><text>' . $versioninfo->getInfo( 'release' ) . '</text><br />
			<label>'._AM_ADSLIGHT_ABOUT_AUTHOR.':</label><text>'.$versioninfo->getInfo('author').'</text><br />
			<label>'._AM_ADSLIGHT_ABOUT_CREDITS.':</label><text>'.$versioninfo->getInfo('credits').'</text><br />
			<label>'._AM_ADSLIGHT_ABOUT_LICENSE.':</label><text><a href="'.$versioninfo->getInfo('license_file').'" target="_blank" >'.$versioninfo->getInfo('license').'</a></text>
		  		</td></tr>
		  </table><br />';

///// People who participate in improving the module
echo '<table width=100 border="0" class="outer" ><tr>
         <th width="50%" align="left">'._AM_ADSLIGHT_PERSONS_PARTICIPATED.'</th></tr>';

    //// iLuc ///
echo "<tr class='odd'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>iLuc</b></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text><a href=\"http://www.i-luc.fr\" target=\"_blank\" >www.i-luc.fr</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>AdsLight [Author]</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Improvements, corrections, reDesign for a lighter module : 'AdsLight'</text><br />
		<br /></td></tr>";


    //// Patrick Seegers ///
echo "<tr class='even'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>Patrick Seegers</b></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text><a href=\"http://www.xoops.nl\" target=\"_blank\" >Nederlandstalige XOOPS Support Website</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>AdsLight 1.056</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Dutch Vertaling</text><br />
		<br /></td></tr>";



    //// Saba ///
echo "<tr class='odd'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>Saba</b></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text>sitio : <a href=\"http://g-orahovica.com/\" target=\"_blank\" >Gornja Orahovica</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text>Webmaster : <a href=\"http://www.xoopsba.org/\" target=\"_blank\" >Xoops Bosnu i Hercegovinu</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>AdsLight 1.055</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Prijevod Bosanskih</text><br />
		<br /></td></tr>";

    //// aitor ///
echo "<tr class='even'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>aitor</b></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text>sitio : <a href=\"http://www.uskola.info/\" target=\"_blank\" >Uskola Informatica</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text>Administrador : <a href=\"http://www.esxoops.com/\" target=\"_blank\" >Xoops Espa&ntilde;a</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>AdsLight</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Traducci&oacute;n al espa&ntilde;ol utf8 del m&oacute;dulo. Y buenos consejos...</text><br />
		<br /></td></tr>";

    
    //// Scasmar  ///
echo "<tr class='odd'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>scasmar</b></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text>Miembros : <a href=\"http://www.esxoops.com/\" target=\"_blank\" >Xoops Espa&ntilde;a</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>AdsLight 1.052</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Traducci&oacute;n al espa&ntilde;ol del m&oacute;dulo.</text><br />
		<br /></td></tr>";


    //// Nikita ///
echo "<tr class='even'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>Nikita</b></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text><a href=\"http://www.aideordi.com\" target=\"_blank\" >www.aideordi.com</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>AdsLight 1.00</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Author of the url rewriting, and various improvements and corrections.</text><br />
		<br /></td></tr>";


    //// John Mordo / Classifieds ///
echo "<tr class='odd'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>John Mordo</b> user jlm69 at www.xoops.org</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text><a href=\"http://www.jlmzone.com\" target=\"_blank\" >www.jlmzone.com</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>Classifieds [Author]</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Improvements and corrections. Started with the MyAds module and made MANY, MANY changes</text><br />
		<br /></td></tr>";

    //// Grandoc / Classifieds ///
echo "<tr class='even'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>Grandoc</b></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text><a href=\"http://www.olivet-online.com\" target=\"_blank\" >www.olivet-online.com</a></text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>Classifieds</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Improvements and corrections.</text><br />
		<br /></td></tr>";


    //// Pascal Le Boustouller [ Original Author ] ///
echo "<tr class='odd'><td><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_NAME . ":</label><text><b>Pascal Le Boustouller</b> [ Original Author ]</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE . ":</label><text>-</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_VERSION . ":</label><text>MyAds module</text><br />
		<label>" . _AM_ADSLIGHT_PERSONS_PARTICIP_DESC . ":</label><text>Original Author</text><br />
		<br /></td></tr>


</table><br clear=\"all\" />";



///// Change log du module ////////
//
// $file = XOOPS_ROOT_PATH. "/modules/adslight/changelog.txt";
// if ( is_readable( $file ) ){
//	echo "<fieldset><legend style='font-weight: bold; color: #900;'>" . _AM_ADSLIGHT_ABOUT_CHANGELOG . "</legend>
//		<div style='padding: 8px;'>
//		<div>". utf8_encode(implode("<br />", file( $file ))) . "</div>
//		</div>
//		</fieldset>
//		<br clear=\"all\" />";
// }

xoops_cp_footer();
?>