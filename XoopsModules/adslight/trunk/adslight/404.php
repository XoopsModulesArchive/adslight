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

if (file_exists('mainfile.php')) {
include('mainfile.php');
} elseif (file_exists('../mainfile.php')) {
include('../mainfile.php');
} else { 
include('../../mainfile.php');
}
include(XOOPS_ROOT_PATH.'/header.php');

$xoopsTpl->assign( 'xoops_showrblock', 1); // 1 = Avec blocs de droite - 0 = Sans blocs de droite
$xoopsTpl->assign( 'xoops_showlblock', 1); // 1 = Avec blocs de gauche - 0 = Sans blocs de gauche
$xoopsTpl->assign('xoops_pagetitle', 'Erreur 404');
$xoTheme -> addMeta ( 'meta', 'robots', 'noindex, nofollow');

echo '<table class="errorMsg" border="0" cellpadding="0" cellspacing="0">
<tr>
<td>
<center>
	<h1>Erreur 404</h1><br /><br />
</center>
</td>
</tr>
<tr>
<td>
<br />
<b><font size="3">La page n\'existe pas ou a &eacute;t&eacute; d&eacute;plac&eacute;e</font></b><br />
<br /><b>Vous avez saisi l\'adresse directement dans votre navigateur ?</b><br />
- v&eacute;rifiez votre saisie et r&eacute;essayez.<br /><br />
<b>Vous avez cliqu&eacute; sur un lien ?</b><br />
- il s\'agit peut-&ecirc;tre d\'un lien ancien qui n\'est plus valide.<br />
<p>Vous pouvez aussi utiliser notre <u><a href="search.php">moteur de recherche</a></u><br />
</td>
</tr>
</table>';
	
include(XOOPS_ROOT_PATH."/footer.php");
?>
