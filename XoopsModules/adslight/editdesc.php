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

$mydirname = basename( dirname( dirname( __FILE__ ) ) ) ;
$main_lang =  '_' . strtoupper( $mydirname ) ;


/**
 * Xoops Header
 */
include_once("../../mainfile.php");
include_once("../../header.php");
include_once("../../class/criteria.php");

/**
 * Include modules classes  
 */
include("class/pictures.php");

/**
 * Check if using XoopsCube (by jlm69)
 * Needed because of a difference in the way Xoops and XoopsCube handle tokens 
 */

$xCube=false;
if(preg_match("/^XOOPS Cube/",XOOPS_VERSION)) // XOOPS Cube 2.1x
{
$xCube=true;
}

/**
 * Verify Ticket for Xoops Cube (by jlm69)
 * If your site is XoopsCube it uses $xoopsGTicket for the token.

 */

if ($xCube) {
if ( ! $xoopsGTicket->check( true , 'token' ) ) {
		redirect_header($_SERVER['HTTP_REFERER'],3,$xoopsGTicket->getErrors());
	}

} else {
/**
 * Verify TOKEN for Xoops
 * If your site is Xoops it uses xoopsSecurity for the token.
 */
if (!($GLOBALS['xoopsSecurity']->check())){
            redirect_header($_SERVER['HTTP_REFERER'], 3, constant("_ADSLIGHT_TOKENEXPIRED"));
}

}


/**
 * Receiving info from get parameters  
 */ 
$cod_img = $_POST['cod_img'];
//$lid = $_POST['lid'];
//$marker = $_POST['marker'];
$marker = isset( $_POST['marker'] ) ? $_POST['marker'] : '' ;

if ($marker==1) {
/**
 * Creating the factory  loading the picture changing its caption
 */  
$picture_factory = new Xoopsjlm_picturesHandler ($xoopsDB);
$picture = $picture_factory->create(false);
$picture->load($_POST['cod_img']);
$picture->setVar("title",$_POST['caption']);



/**
 * Verifying who's the owner to allow changes
 */
$uid = $xoopsUser->getVar('uid');
$lid = $picture->getVar('lid');
if ($uid == $picture->getVar('uid_owner')){
 	      if ($picture_factory->insert($picture)){
                     redirect_header("view_photos.php?lid=".$lid."&uid=".$uid."", 2, constant("_ADSLIGHT_DESC_EDITED"));
              } else {
                     redirect_header("view_photos.php?lid=".$lid."&uid=".$uid."", 2, constant("_ADSLIGHT_NOCACHACA"));
              }
	}
}







/**
 * Creating the factory  and the criteria to edit the desc of the picture
 * The user must be the owner
 */ 
$album_factory      = new Xoopsjlm_picturesHandler($xoopsDB);
$criteria_img = new Criteria ('cod_img',$cod_img);
$uid = $xoopsUser->getVar('uid');
$criteria_uid = new Criteria ('uid_owner',$uid);
$criteria = new CriteriaCompo ($criteria_img);
$criteria->add($criteria_uid);

/**
 * Lets fetch the info of the pictures to be able to render the form
 * The user must be the owner
 */   
if ($array_pict = $album_factory->getObjects($criteria)){
        $caption = $array_pict[0]->getVar("title");
        $url = $array_pict[0]->getVar("url");
}
$url = $xoopsModuleConfig["adslight_link_upload"]."/thumbs/thumb_".$url;
$album_factory->renderFormEdit($caption,$cod_img,$url);

/**
 * Close page
 */
include("../../footer.php");
?>
