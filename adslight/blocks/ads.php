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
 
 if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}

function adslight_show($options)
{
	global $xoopsDB, $xoopsModuleConfig, $blockdirname, $block_lang;

	$block = array();
	$myts =& MyTextSanitizer::getInstance();

	$blockdirname = basename( dirname( dirname( __FILE__ ) ) ) ;
	$block_lang = '_MB_' . strtoupper( $blockdirname ) ;

	$block['title'] = "".constant($block_lang."_TITLE")."";

		$result = $xoopsDB->query("SELECT lid, cid, title, type, date, hits FROM ".$xoopsDB->prefix("".$blockdirname."_listing")." WHERE valid='Yes' ORDER BY ".$options[0]." DESC",$options[1],0);

		while($myrow=$xoopsDB->fetchArray($result)){
			$a_item = array();
		$title = $myts->htmlSpecialChars($myrow["title"]);
		$type = $myts->htmlSpecialChars($myrow["type"]);

	if ( !XOOPS_USE_MULTIBYTES ) {
			if (strlen($myrow['title']) >= $options[2]) {
				$title = $myts->htmlSpecialChars(substr($myrow['title'],0,($options[2] -1)))."...";
			}
		}

    	$a_item['type'] = $type;
	$a_item['id'] = $myrow['lid'];
	$a_item['cid'] = $myrow['cid'];

	
    	$a_item['link'] = "<a href=\"".XOOPS_URL."/modules/$blockdirname/viewads.php?lid=".addslashes($myrow['lid'])."\"><b>$title</b></a>";

	if($options[0] == "date"){
			$a_item['date'] = formatTimestamp($myrow['date'],"s");
		}elseif($options[0] == "hits"){
			$a_item['hits'] = $myrow['hits'];
		}

    	$block['items'][] = $a_item;
    }

	$block['link'] = "<a href=\"".XOOPS_URL."/modules/$blockdirname/\"><b>".constant($block_lang."_ALL_LISTINGS")."</b></a><br />";
	$block['add'] = "<a href=\"".XOOPS_URL."/modules/$blockdirname/\"><b>".constant($block_lang."_ADDNOW")."</b></a><br />";

    return $block;
}

function adslight_edit($options) {
 global $xoopsDB;
	$blockdirname = basename( dirname( dirname( __FILE__ ) ) ) ;
	$block_lang = '_MB_' . strtoupper( $blockdirname ) ;

	$form = constant($block_lang."_ORDER")."&nbsp;<select name='options[]'>";
    $form .= "<option value='date'";
    if ( $options[0] == 'date' ) {
        $form .= " selected='selected'";
    }
    $form .= '>'.constant($block_lang."_DATE")."</option>\n";

    $form .= "<option value='hits'";
    if($options[0] == 'hits'){
        $form .= " selected='selected'";
    }
    $form .= '>'.constant($block_lang."_HITS").'</option>';
    $form .= "</select>\n";

    $form .= '&nbsp;'.constant($block_lang."_DISP")."&nbsp;<input type='text' name='options[]' value='".$options[1]."'/>&nbsp;".constant($block_lang."_LISTINGS");
    $form .= "&nbsp;<br /><br />".constant($block_lang."_CHARS")."&nbsp;<input type='text' name='options[]' value='".$options[2]."'/>&nbsp;".constant($block_lang."_LENGTH").'<br /><br />';

	return $form;
}
?>