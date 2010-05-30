<?php


function xoops_module_update_adslight(&$xoopsModule, $oldVersion = null) {
 
 global $xoopsDB, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $xoopsUser, $xoopsTpl, $myts, $mytree, $meta, $mid, $mydirname, $main_lang, $prem_perm;
 

	
	if($oldVersion < 1052) {

		$db =& Database::getInstance();

		$sql = "ALTER TABLE `".$db->prefix('adslight_categories')."` ADD `cat_keywords` text NOT NULL AFTER `cat_desc` ;";
		$db->query($sql);

	}
	

    return true;
}


?>