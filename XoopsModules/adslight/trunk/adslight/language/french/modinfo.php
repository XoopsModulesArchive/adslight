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

// Le nom de ce module
define("_MI_ADSLIGHT_NAME ","adslight");
define("_MI_ADSLIGHT_MENUADD","Ajouter une annonce");

// Une brève description de ce module
define("_MI_ADSLIGHT_DESC","Module de petites annonces");

// Noms des blocs de ce module (module possède pas tous les blocs)
define("_MI_ADSLIGHT_BNAME1","Annonces r&eacute;centes");
define("_MI_ADSLIGHT_BNAME1_DESC","Les derniers blocs d'annonces");
define("_MI_ADSLIGHT_BNAME2","Top annonces");
define("_MI_ADSLIGHT_BNAME2_DESC","Bloc des Top annonces");

// Noms des éléments du menu admin
define("_MI_ADSLIGHT_ADMENU0","Administration");
define("_MI_ADSLIGHT_ADMENU1","Gestion des cat&eacute;gories");
define("_MI_ADSLIGHT_ADMENU2","Permissions");
define("_MI_ADSLIGHT_ADMENU3","Blocs");
define("_MI_ADSLIGHT_ADMENU4","Pr&eacute;f&eacute;rences");
define("_MI_ADSLIGHT_ADMENU5","Options");
define("_MI_ADSLIGHT_ADMENU6","Importation");
define("_MI_ADSLIGHT_ADMENU7","A propos");
define("_MI_ADSLIGHT_ADMENU8","Docs");
define("_MI_ADSLIGHT_ADMENU9","Aller au Module");
define("_MI_ADSLIGHT_ADMENU10","Mise &agrave; jour");
define("_MI_ADSLIGHT_ADMENU11","Forum Entraide");

define("_MI_ADSLIGHT_CONFSAVE","Configuration sauvegard&eacute;e");
define("_MI_ADSLIGHT_CANPOST","Les utilisateurs anonymes peuvent envoyer des annonces:");
define("_MI_ADSLIGHT_PERPAGE","Annonces par page:");
define("_MI_ADSLIGHT_RES_PERPAGE","R&eacute;sum&eacute;s par page:");
define("_MI_ADSLIGHT_MONEY","Symbole de la devise:<pr> 
<li>exemple pour l'euro (&#8364;)</li>");
define("_MI_ADSLIGHT_KOIVI","Utiliser l'&eacute;diteur Koivi :");
define("_MI_ADSLIGHT_NUMNEW","Nombre de nouvelles annonces:");
define("_MI_ADSLIGHT_MODERAT","Voulez-vous mod&eacute;rer l'acc&egrave;s des annonces?:");
define("_MI_ADSLIGHT_DAYS","Dur&eacute;e de l'annonce:");
define("_MI_ADSLIGHT_MAXIIMGS","Taille maximale des photos:");
define("_MI_ADSLIGHT_MAXWIDE","Largeur maximale des photos:");
define("_MI_ADSLIGHT_MAXHIGH","Hauteur maximale des photos :");
define("_MI_ADSLIGHT_INBYTES","En octets");
define("_MI_ADSLIGHT_INPIXEL","En pixels");
define("_MI_ADSLIGHT_INDAYS","En jours");
define("_MI_ADSLIGHT_MUSTLOGIN","Autoriser les utilisateurs anonymes &agrave; r&eacute;pondre &agrave; une petite annonce.");
define("_MI_ADSLIGHT_THRUMAIL","En utilisant le formulaire e-mail (Il est recommand&eacute; de r&eacute;pondre non, &agrave; cause du spam .)");
define("_MI_ADSLIGHT_TYPEBLOC","Type de bloc:");
define("_MI_ADSLIGHT_JOBRAND","Annonce au hazard");
define("_MI_ADSLIGHT_LASTTEN","Les 10 derni&egrave;res annonces");
define("_MI_ADSLIGHT_NEWTIME","Dur&eacute;e pendant laquelle l'annonce est consid&eacute;r&eacute;e comme nouvelle:");
define("_MI_ADSLIGHT_DISPLPRICE","Affichage des prix:");
define("_MI_ADSLIGHT_DISPLPRICE2","Affichage des prix:");
define("_MI_ADSLIGHT_INTHISCAT","Dans cette cat&eacute;gorie");
define("_MI_ADSLIGHT_DISPLSUBCAT","Affichage des sous-cat&eacute;gories:");
define("_MI_ADSLIGHT_ONHOME","Sur la page d'accueil du module");
define("_MI_ADSLIGHT_NBDISPLSUBCAT","Nombre de sous-cat&eacute;gories &agrave; afficher:");
define("_MI_ADSLIGHT_IF","Si");
define("_MI_ADSLIGHT_ISAT","Est au");
define("_MI_ADSLIGHT_VIEWNEWCLASS","Afficher les nouvelles annonces:");
define("_MI_ADSLIGHT_ORDREALPHA","Trier par ordre alphab&eacute;tique");
define("_MI_ADSLIGHT_ORDREPERSO","Classement personalis&eacute;");
define("_MI_ADSLIGHT_CSORT_ORDER","Cat&eacute;gories : Trier par d&eacute;faut");
define("_MI_ADSLIGHT_LSORT_ORDER","Annonces : Trier par d&eacute;faut");
define("_MI_ADSLIGHT_ORDER_TITLE","Classement des annonces par titre");
define("_MI_ADSLIGHT_ORDER_PRICE","Classement des annonces par prix");
define("_MI_ADSLIGHT_ORDER_DATE","Classement des annonces par date (par d&eacute;faut)");
define("_MI_ADSLIGHT_ORDER_POP","Classement des annonces par nombre de visites");
define("_MI_ADSLIGHT_DBUPDATED","La base de donn&eacute;es a &eacute;t&eacute; mise &agrave; jour. ");
define("_MI_ADSLIGHT_GPERM_G_ADD","Peut ajouter");
define("_MI_ADSLIGHT_CAT2GROUPDESC","V&eacute;rifiez les cat&eacute;gories auxquelles vous permettez d'acc&eacute;der");
define("_MI_ADSLIGHT_GROUPPERMDESC","S&eacute;lectionnez le(s) groupe(s) autoris&eacute;(s) &agrave; soumettre des annonces.");
define("_MI_ADSLIGHT_GROUPPERM","Permissions de soumettre ");
define("_MI_ADSLIGHT_SUBMITFORM","Permissions de d&eacute;poser une annonce");
define("_MI_ADSLIGHT_SUBMITFORM_DESC","S&eacute;lectionnez, qui peut pr&eacute;senter des annonces");
define("_MI_ADSLIGHT_VIEWFORM","Permissions de voir les annonces");
define("_MI_ADSLIGHT_VIEWFORM_DESC","S&eacute;lectionnez les groupes qui peuvent voir les annonces");
define("_MI_ADSLIGHT_VIEW_RESUMEFORM_DESC","S&eacute;lectionnez, qui peut voir les curriculum vitae");
define("_MI_ADSLIGHT_SUPPORT","Soutenez ce logiciel");
define("_MI_ADSLIGHT_OP","Lire mon avis");
define("_MI_ADSLIGHT_PREMIUM","Annonces Premium");
define("_MI_ADSLIGHT_PREMIUM_DESC","Choisir les groupes qui peuvent s&eacute;lectionner la dur&eacute;e de parution des annonces");


define("_MI_ADSLIGHT_CATEGORY_NOTIFY","Cat&eacute;gorie");
define("_MI_ADSLIGHT_CATEGORY_NOTIFYDSC","Les options de notification qui s'appliquent &agrave; la cat&eacute;gorie en cours. ");
define("_MI_ADSLIGHT_NOTIFY","Annonces");
define("_MI_ADSLIGHT_NOTIFYDSC","Les options de notification qui s'appliquent &agrave; l'annonce actuelle. ");
define("_MI_ADSLIGHT_GLOBAL_NOTIFY","Globale");
define("_MI_ADSLIGHT_GLOBAL_NOTIFYDSC","Les options d'annonce de notification globale.");

define("_MI_ADSLIGHT_NEWPOST_NOTIFY","Nouvelle inscription");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYCAP","Avertissez-moi des nouvelles annonces dans la cat&eacute;gorie actuelle. ");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYDSC","Recevoir un avis quand une nouvelle annonce est affich&eacute;e dans la cat&eacute;gorie en cours. ");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notification automatique : Nouvelle annonce dans la cat&eacute;gorie ");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFY","Nouvelle inscription");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYCAP","Avertissez-moi des nouvelles annonces dans la cat&eacute;gorie actuelle. ");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYDSC","Recevoir un avis quand un nouveau r&eacute;f&eacute;rencement est affich&eacute; dans la cat&eacute;gorie courante. ");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notification automatique: Nouvelle annonce dans la cat&eacute;gorie ");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFY","Annonce &agrave; jour ");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYCAP","Avertissez-moi des mises &agrave; jour des annonces de la cat&eacute;gorie en cours. ");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYDSC","Recevoir une notification lorsque l'annonce est mise &agrave; jour dans la cat&eacute;gorie en cours.");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notification automatique: Nouvelle annonce dans la cat&eacute;gorie ");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFY","Annonce Supprim&eacute;e ");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYCAP","Avertissez-moi des nouvelles annonces dans la cat&eacute;gorie actuelle. ");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYDSC","Recevoir une notification lorsque l'annonce est supprim&eacute;e de la cat&eacute;gorie en cours.");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notification automatique: Nouvelle liste dans la cat&eacute;gorie ");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFY","Nouvelle inscription");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYCAP","Avertissez-moi des nouvelles annonces dans toutes les cat&eacute;gories. ");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYDSC","Recevoir un avis quand une nouvelle annonce est affich&eacute;e dans toutes les cat&eacute;gories. ");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notification automatique: Nouvelle annonce dans la cat&eacute;gorie ");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFY","Nouvelle inscription");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYCAP","Avertissez-moi des nouvelles annonces dans toutes les cat&eacute;gories. ");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYDSC","Recevoir un avis quand un nouveau r&eacute;f&eacute;rencement est affich&eacute; dans toutes les cat&eacute;gories. ");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notification automatique: Nouvelle annonce dans la cat&eacute;gorie ");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFY","Liste &agrave; jour ");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYCAP","Avertissez-moi des mises &agrave; jour des annonces dans toutes les cat&eacute;gories. ");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYDSC","Recevoir une notification lorsque la annonce est mise &agrave; jour dans toutes les cat&eacute;gories.");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notification automatique: Annonce mise &agrave; jour dans certaines des cat&eacute;gories");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFY","Listing Supprim&eacute; ");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYCAP","Avertissez-moi des annonces supprim&eacute; dans toutes les cat&eacute;gories. ");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYDSC","Recevoir une notification lorsqu'une annonce est supprim&eacute;e dans toutes les cat&eacute;gories.");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notification automatique: Annonce supprim&eacute;e dans des cat&eacute;gories");

define("_MI_ADSLIGHT_RATE_USER","Autoriser les utilisateurs &agrave; &eacute;valuer les vendeurs");
define("_MI_ADSLIGHT_RATE_ITEM","Autoriser les utilisateurs &agrave; &eacute;valuer les annonces");
define("_MI_ADSLIGHT_DIFF_NAME","Autoriser les utilisateurs &agrave; utiliser plusieurs noms");
define("_MI_ADSLIGHT_DIFF_EMAIL","Autoriser les utilisateurs &agrave; utiliser diff&eacute;rents e-mail");
define("_MI_ADSLIGHT_NOT_PREMIUM","Nombre de photos - non Premium");
define("_MI_ADSLIGHT_NOT_PREMIUM_DESC","Nombre de photos qu'un utilisateur non Premium peut avoir sur sa page");
define("_MI_ADSLIGHT_NUMBPICT_TITLE","Nombre de photos - Premium");
define("_MI_ADSLIGHT_NUMBPICT_DESC","Nombre de photos qu'un utilisateur Premium peut avoir sur sa page");
define("_MI_ADSLIGHT_SMNAME1","Valider");
define("_MI_ADSLIGHT_THUMW_TITLE","Largeur de la vignette");
define("_MI_ADSLIGHT_THUMBW_DESC","Largeur de la vignette en pixels <br /> Cela signifie que la vignette de votre photo aura <br /> au plus cette taille en largeur <br /> Toutes proportions gard&eacute;es");
define("_MI_ADSLIGHT_THUMBH_TITLE","Hauteur de la vignette");
define("_MI_ADSLIGHT_THUMBH_DESC","Hauteur de la vignette en pixels <br /> Cela signifie que la vignette de votre photo aura <br /> au plus cette taille en hauteur <br /> Toutes proportions gard&eacute;es");
define("_MI_ADSLIGHT_RESIZEDW_TITLE","R&eacute;glage de la largeur de l'image");
define("_MI_ADSLIGHT_RESIZEDW_DESC","R&eacute;glage de la largeur de l'image en pixels <br/> Cela signifie que votre image aura <br /> au plus cette taille en largeur <br /> Toutes proportions gard&eacute;es <br />  Si la photo originale est plus grande que cette taille, elle sera redimensionn&eacute;e pour ne pas destructurer votre mise en page ");
define("_MI_ADSLIGHT_RESIZEDH_TITLE","R&eacute;glage de l'image en hauteur");
define("_MI_ADSLIGHT_RESIZEDH_DESC"," R&eacute;glage de la hauteur de l'image en pixels <br/> Cela signifie que votre image aura <br /> au plus cette taille en hauteur <br /> Toutes proportions gard&eacute;es <br /> Si la photo originale est plus grande que cette taille,  elle sera redimensionn&eacute;e pour ne pas destructurer votre mise en page ");
define("_MI_ADSLIGHT_ORIGW_TITLE","Largeur maximale de l'image originale");
define("_MI_ADSLIGHT_ORIGW_DESC","Largeur maximale en pixels de la photo originale <br/>  Cela signifie que l'image originale de l' utilisateur ne peut exc&eacute;der cette taille en largeur ou bien elle ne sera pas transf&eacute;r&eacute;e");
define("_MI_ADSLIGHT_ORIGH_TITLE","Hauteur maximale de la photo originale");
define("_MI_ADSLIGHT_ORIGH_DESC","Hauteur maximale de l'image originale en pixels <br/>  Cela signifie que l'image originale de l' utilisateur ne peut exc&eacute;der cette taille en hauteur ou bien elle ne sera pas transf&eacute;r&eacute;e");
define("_MI_ADSLIGHT_UPLOAD_TITLE","Chemin pour l'upload ");
define("_MI_ADSLIGHT_UPLOAD_DESC"," Chemin vers votre r&eacute;pertoire d'upload <br/>  dans linux cela devrait ressembler &agrave; /var/www/uploads <br/>  et dans Windows &agrave; C:/Program Files/www");
define("_MI_ADSLIGHT_LINKUPLOAD_TI"," Lien vers votre r&eacute;pertoire d'upload");
define("_MI_ADSLIGHT_LINKUPLOAD_DESC","Il s'agit de l'adresse de la racine de vos envois comme http://www.yoursite.com/uploads <br/>");
define("_MI_ADSLIGHT_MAXFILEBYTES_T","Taille maximale en octets");
define("_MI_ADSLIGHT_MAXFILEBYTES_D","C'est la taille maximale q'un fichier image peut avoir en octets <br/> comme 512000 pour 500 KB");
define("_MI_ADSLIGHT_EDITOR"," Editeur &agrave; utiliser:");
define("_MI_ADSLIGHT_LIST_EDITORS"," Choisissez l'&eacute;diteur &agrave; utiliser.");
define("_MI_ADSLIGHT_LIGHTBOX","Effets Lightbox");
define("_MI_ADSLIGHT_LIGHTBOX_DESC","Utiliser les effets Lightbox lors de la visualisation de photos.");
define("_MI_ADSLIGHT_USE_COUNTRY","Utiliser les champs Pays");
define("_MI_ADSLIGHT_USE_COUNTRY_DESC"," S'il est r&eacute;gl&eacute; sur 'Non', le Pays ne sera pas affich&eacute;");
define("_MI_ADSLIGHT_SOLD_DAYS"," Dur&eacute;e d'affichage de l'annonce apr&egrave;s qu'elle soit class&eacute;e Vendue");
define("_MI_ADSLIGHT_SOLDINDAYS","En jours");
define("_MI_ADSLIGHT_ALMOST"," Quand pr&eacute;venir que l'annonce est sur le point d'expirer?");
define("_MI_ADSLIGHT_ALMOST_DESC","En jours");
define("_MI_ADSLIGHT_MAIN_CAT"," Permet aux utilisateurs d'ajouter des annonces dans les cat&eacute;gories principales");
define("_MI_ADSLIGHT_MAIN_CAT_DESC"," Ou juste de permettre l'ajout d'annonces dans les sous-cat&eacute;gories");
define("_MI_ADSLIGHT_ADMIN_EDITOR"," Editeur &agrave; utiliser par l'administrateur:");
define("_MI_ADSLIGHT_LIST_ADMIN_EDITORS"," S&eacute;lectionnez l'&eacute;diteur &agrave; utiliser pour l'admin.");
define("_MI_ADSLIGHT_CAT_DESC"," Code Google AdSense ou banni&egrave;re");
define("_MI_ADSLIGHT_DESC_CAT_DESC"," Permet d'ajouter un code Google AdSense ou une banni&egrave;re publicitaire pour chaque cat&eacute;gorie.");
define("_MI_ADSLIGHT_MUST_ADD_CAT"," Vous devez ajouter une premi&egrave;re cat&eacute;gorie.");
define("_MI_ADSLIGHT_BNAME3"," Annonces r&eacute;centes + photos");
define("_MI_ADSLIGHT_BNAME3_DESC"," Annonces r&eacute;centes + photos");
define("_MI_ADSLIGHT_BNAME4","Top Annonces w/Photo");
define("_MI_ADSLIGHT_BNAME4_DESC","Top Annonces w/Photo Block");
define("_MI_ADSLIGHT_USE_CAPTCHA" ,"Use Captcha");

// Menu AdsLight
define("_MI_ADSLIGHT_SMENU1","Vos annonces");
define("_MI_ADSLIGHT_SMENU2","Soumettre");
define("_MI_ADSLIGHT_SMENU3","Recherche"); 

// support.php 
define("_MI_ADSLIGHT_SUPPORT01"," Si vous souhaitez proposer une am&eacute;lioration:<br /><br />- Une corrections<br />- Une traduction<br />- Une suggestion<br />- Signaler un Bug<br />");
define("_MI_ADSLIGHT_SUPPORT02","Rejoignez nous sur le forum Support AdsLight");
define("_MI_ADSLIGHT_SUPPORT03","> Forum Support AdsLight <");

// Bloc Carte de France
define("_MI_ADSLIGHT_MAPFRANCE","Carte de France");
define("_MI_ADSLIGHT_MAPFRANCE_DESC","Dans votre r&eacute;gion");

// Bloc Ajouter une annonce
define("_MI_ADSLIGHT_ADDMENU","Ajouter une annonce");
define("_MI_ADSLIGHT_ADDMENU_DESC","Menu d&eacute;roulant");

// version Adslight 1.0.2
// Activer RewriteUrl
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL" ,"Activer le Rewrite URL");
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL_DESC" ,"Permet d'activer la r&eacute;&eacute;criture d'url, pour un meilleur r&eacute;f&eacute;rencement.<br/>Pour installer le rewrite, merci de Lire le fichier README.txt");

// Activer thumbs_index
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX" ,"Activer les Photos Miniatures en page index");
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX_DESC" ,"Permet d'activer l'affichage des photos miniatures en page d'accueil<br/>Si il est d&eacute;sactiver une icone <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> indique si oui ou non il y a une photo dans l'annonce.");

// Activer thumbs_cats
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS" ,"Activer les Photos Miniatures dans les cat&eacute;gories");
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS_DESC" ,"Permet d'activer l'affichage des photos miniatures dans les cat&eacute;gories<br/>Si il est d&eacute;sactiver une icone <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> indique si oui ou non il y a une photo dans l'annonce.");

// Code Adscence index
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE","Code suppl&eacute;mentaire sur la page d'accueil");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_DESC","Placez votre code adsense ou autre ici");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE","Utiliser un code suppl&eacute;mentaire sur la page d'accueil");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE_DESC","Le code suppl&eacute;mentaire sera afficher entre les annonces<br />sur la page d'accueil et la page des cat&eacute;gories.<br /><br />Banni&egrave;res, code Adsense, etc ...");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE","Place o&ugrave; le code sera affich&eacute; dans la liste ");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE_DESC","Ex. Si vous choisissez 4 il y aura 3 annonces avant ce code.<br />Le code sera affich&eacute; en 4&egrave;me position.");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER","Utiliser le code banni&egrave;res de Xoops");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER_DESC","vous permettra d'ins&eacute;rer des banni&egrave;res Xoops entre les annonces.<br />Si vous choisissez Oui<br />N'ins&eacute;rez <b>AUCUN</b> code ci-dessous");

// Version 1.0.5
// Code Adscence Catégories
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE","Code pub sur les pages cat&eacute;gories");
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE_DESC","Code Google Adsence ou code d'une banni&egrave;re:<br/>Format: width = 300 height = 250");


// Méta Description / keywords Categories
define("_MI_ADSLIGHT_CAT_META","Permettre la saisie M&eacute;ta description, M&eacute;ta keywords cat&eacute;gories?");
define("_MI_ADSLIGHT_CAT_META_DESCRIPTION","Si vous positionnez cette option sur 'Oui',<br/> 
Vous pourrez &eacute;crire les donn&eacute;es meta keywords et description pour chaque <b>cat&eacute;gories<br/>( Recommander pour un meilleur r&eacute;f&eacute;rencement. )");


// tips_writing_ad.php
define("_MI_ADSLIGHT_USE_TIPS_WRITE","Personnaliser la page infos/conseils?");
define("_MI_ADSLIGHT_USEDESC_TIPS_WRITE","Si vous s&eacute;lectionnez 'oui', vous pouvez &eacute;crire ci dessous, le titre et le texte de la page infos/conseils");
define("_MI_ADSLIGHT_TITLE_TIPS_WRITE","Titre de la page infos/conseils");
define("_MI_ADSLIGHT_TITLEDESC_TIPS_WRITE","&Eacute;crivez ici le titre qui s'affichera sur la page infos/conseils");
define("_MI_ADSLIGHT_TEXT_TIPS_WRITE","Texte de la page infos/conseils");
define("_MI_ADSLIGHT_TEXTDESC_TIPS_WRITE","&Eacute;crivez ici le texte qui s'affichera sur la page infos/conseils");

// Version 1.0.53
// adslight_maps
define("_MI_ADSLIGHT_MAPSSET","Choisissez la carte de votre pays");
define("_MI_ADSLIGHT_MAPSSET_DESC","Si vous souhaitez cr&eacute;er la carte de votre pays.<br />Merci de lire la docs du module.");
define("_MI_ADSLIGHT_MAPSW_TITLE","Largeur de la carte");
define("_MI_ADSLIGHT_MAPSH_TITLE","Hauteur de la carte");


?>