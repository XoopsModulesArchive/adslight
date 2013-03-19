<?php
/*
-------------------------------------------------------------------------
                     ADSLIGHT 2 : Module for Xoops                           

        Redesigned and ameliorate By iluc user at www.frxoops.org
		Started with the Classifieds module and made MANY changes 
        Website : http://www.limonads.com
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

define('_AM_ADSLIGHT_CONF', 'Configuration des annonces ');
define('_AM_ADSLIGHT_ADDON', 'Pluggins');
define('_AM_ADSLIGHT_ANNDEL', 'Les annonces s&eacute;lectionn&eacute;es ont &eacute;t&eacute; supprim&eacute;es');
define('_AM_ADSLIGHT_ADDCATPRINC', 'Ajouter une cat&eacute;gorie principale');
define('_AM_ADSLIGHT_CATNAME', 'Nom:');
define('_AM_ADSLIGHT_ADDSUBCAT', 'Ajouter une sous-cat&eacute;gorie');
define('_AM_ADSLIGHT_DELSUBCAT', 'Supprimer une cat&eacute;gorie');
define('_AM_ADSLIGHT_MODIFSUBCAT', 'Modifier une cat&eacute;gorie');
define('_AM_ADSLIGHT_ADD', 'Ajouter');
define('_AM_ADSLIGHT_CATDEL', 'La cat&eacute;gorie s&eacute;lectionn&eacute;e a &eacute;t&eacute; supprim&eacute;e');
define('_AM_ADSLIGHT_OUI', 'Oui');
define('_AM_ADSLIGHT_NON', 'Non');
define('_AM_ADSLIGHT_SURDELCAT', 'ATTENTION: Etes-vous s&ucirc;r de vouloir supprimer cette cat&eacute;gorie, les sous-cat&eacute;gories et les annonces seront d&eacute;truites elles aussi.');
define('_AM_ADSLIGHT_IN', 'Dans ');
define('_AM_ADSLIGHT_MODIF', 'Modifier');
define('_AM_ADSLIGHT_MODIFCAT', 'Modifier une cat&eacute;gorie');
define('_AM_ADSLIGHT_CAT', 'Cat&eacute;gorie');
define('_AM_ADSLIGHT_SUBCAT', 'Sous-cat&eacute;gorie:');
define('_AM_ADSLIGHT_CONFMYA', 'Configuration des annonces ');
define('_AM_ADSLIGHT_CATADD', 'Cat&eacute;gorie ajout&eacute;e');
define('_AM_ADSLIGHT_SUBCATADD', 'la sous-cat&eacute;gorie est ajout&eacute;e');
define('_AM_ADSLIGHT_ANNMOD', 'l&acute;annonce a &eacute;t&eacute; modifi&eacute;e');
define('_AM_ADSLIGHT_NOANNVAL', 'Il n&acute;y a actuellement aucune annonce &agrave; approuver');
define('_AM_ADSLIGHT_NOMODACTIV', 'La mod&eacute;ration n&acute;est pas activ&eacute;e : pas d&acute;annonce &agrave; approuver');
define('_AM_ADSLIGHT_MODANN', 'Modifier une annonce');
define('_AM_ADSLIGHT_ALLMODANN', '(Toutes les annonces peuvent &ecirc;tre modifi&eacute;es par l&acute;administrateur.)');
// Message
define('_AM_ADSLIGHT_HELLO', 'Bonjour');
define('_AM_ADSLIGHT_ANNVALID', 'L&acute;annonce a &eacute;t&eacute; approuv&eacute;e');
define('_AM_ADSLIGHT_DEL', 'Supprimer');
define('_AM_ADSLIGHT_SAVMOD', 'Enregistrer les modifications');
define('_AM_ADSLIGHT_MODTYPE', 'Modifier le type d&acute;annonce');
define('_AM_ADSLIGHT_ANNACCEPT', 'Votre annonce a &eacute;t&eacute; approuv&eacute;e');
define('_AM_ADSLIGHT_CONSULTTO', 'S&acute;il vous pla&icirc;t contactez:');
define('_AM_ADSLIGHT_THANK', 'Merci');
define('_AM_ADSLIGHT_TEAMOF', 'Equipe');
// Message de fin
define('_AM_ADSLIGHT_RETURN', 'Retour');
define('_AM_ADSLIGHT_MODSUBCAT', 'Changer le nom de la sous-cat&eacute;gorie');
define('_AM_ADSLIGHT_MODCAT', 'Changer le nom de la cat&eacute;gorie principale');
define('_AM_ADSLIGHT_GO', 'Go');
define('_AM_ADSLIGHT_SENDBY', 'Ajout&eacute;e par:');
define('_AM_ADSLIGHT_EMAIL', 'E-mail:');
define('_AM_ADSLIGHT_TEL', 'T&eacute;l&eacute;phone:');
define('_AM_ADSLIGHT_TOWN', 'Ville:');
define('_AM_ADSLIGHT_COUNTRY', 'Pays:');
define('_AM_ADSLIGHT_TITLE2', 'Titre:');
define('_AM_ADSLIGHT_TYPE', 'Type:');
define('_AM_ADSLIGHT_TYPE_USURE', 'L&acute;&eacute;tat d&acute;usure:');
define('_AM_ADSLIGHT_PRICE2', 'Prix:');
define('_AM_ADSLIGHT_CAT2', 'Cat&eacute;gorie');
define('_AM_ADSLIGHT_DESCRIPTION', 'Code Google Adsence ou code d&acute;une banni&egrave;re:<br />Format: width = 300 height = 250');
define('_AM_ADSLIGHT_THEREIS', 'Il y a');
define('_AM_ADSLIGHT_WAIT', 'Annonces en attente d&acute;&ecirc;tre approuv&eacute;es');
define('_AM_ADSLIGHT_ADDTYPE', 'Ajouter un type d&acute;annonce');
define('_AM_ADSLIGHT_ERRORTYPE', 'ERREUR: type');
define('_AM_ADSLIGHT_EXIST', 'Existe d&eacute;j&agrave;!');
define('_AM_ADSLIGHT_ERRORCAT', 'ERREUR: Cat&eacute;gorie');
define('_AM_ADSLIGHT_ERRORSUBCAT', 'ERREUR: Sous-cat&eacute;gorie');
define('_AM_ADSLIGHT_TYPEMOD', 'Le type d&acute;annonce a &eacute;t&eacute; modifi&eacute;');
define('_AM_ADSLIGHT_TYPEDEL', 'Le type d&acute;annonce a &eacute;t&eacute; supprim&eacute;');
define('_AM_ADSLIGHT_ADDTYPE2', 'Le type d&acute;annonce a &eacute;t&eacute; ajout&eacute;');
define('_AM_ADSLIGHT_ACCESMYANN', 'Annonces');
define('_AM_ADSLIGHT_IMGCAT', 'Image');
define('_AM_ADSLIGHT_REPIMGCAT', 'R&eacute;pertoire d&acute;images:');
define('_AM_ADSLIGHT_GESTCAT', 'Gestion des cat&eacute;gories');
//Condition de paiement
define('_AM_ADSLIGHT_ADDPRICE', 'Ajouter une condition de paiement');
define('_AM_ADSLIGHT_MODPRICE', 'Modifier un type de prix');
define('_AM_ADSLIGHT_ADDPRICE2', 'Le type de prix a &eacute;t&eacute; ajout&eacute;');
define('_AM_ADSLIGHT_PRICEMOD', 'Le type de prix a &eacute;t&eacute; modifi&eacute;');
define('_AM_ADSLIGHT_PRICEDEL', 'Le type de prix a &eacute;t&eacute; supprim&eacute;');
define('_AM_ADSLIGHT_ORDRE', 'Ordre:');
define('_AM_ADSLIGHT_ORDRECLASS', 'Cat&eacute;gorie de commande:');
define('_AM_ADSLIGHT_ORDREALPHA', 'Trier par ordre alphab&eacute;tique');
define('_AM_ADSLIGHT_ORDREPERSO', 'Ordre personnalis&eacute; ');
define('_AM_ADSLIGHT_BIGCAT', 'Cat&eacute;gorie principale');
define('_AM_ADSLIGHT_HELP1', '<strong> Pour ajouter une cat&eacute;gorie:<br /></strong>Cliquez sur l&acute;image <img src="'.XOOPS_URL.'/modules/adslight/images/plus.gif" border="0" width="10" height="10" alt="Ajouter une cat&eacute;gorie" /> &agrave; c&ocirc;t&eacute; de la cat&eacute;gorie sous laquelle vous souhaitez ajouter le titre de la nouvelle cat&eacute;gorie.<p><strong>Pour modifier ou supprimer une cat&eacute;gorie:<br /></strong>Cliquez sur le nom de la cat&eacute;gorie');
define('_AM_ADSLIGHT_HELP2', '<strong>Classification des Cat&eacute;gories: </strong>Les entiers entre crochets correspondent &agrave; l&acute;ordre au sein de la cat&eacute;gorie sup&eacute;rieure ou de la cat&eacute;gorie principale. Des entiers n&eacute;gatifs  peuvent &ecirc;tre utilis&eacute;s : -1');

// Fichier pref.php
define('_AM_ADSLIGHT_CONFSAVE', 'Configuration enregistr&eacute;e');
define('_AM_ADSLIGHT_ANNOCANPOST', 'Les utilisateurs anonymes peuvent envoyer des annonces:');
define('_AM_ADSLIGHT_PERPAGE', 'Annonces par page:');
define('_AM_ADSLIGHT_MONEY', 'Symbole de la devise:');
define('_AM_ADSLIGHT_NUMNEW', 'Nombre de nouvelles annonces:');
define('_AM_ADSLIGHT_MODERAT', 'Annonces mod&eacute;r&eacute;es :');
define('_CAL_MAXIIMGS', 'Taille maximale de la photo :');
define('_AM_ADSLIGHT_TIMEANN', 'Dur&eacute;e de l&acute;annonce:');
define('_AM_ADSLIGHT_INOCTET', 'En octets');
define('_AM_ADSLIGHT_INDAYS', 'En jours');
define('_AM_ADSLIGHT_TYPEBLOC', 'Type de bloc:');
define('_AM_ADSLIGHT_ANNRAND', 'Annonce al&eacute;atoire');
define('_AM_ADSLIGHT_LASTTEN', 'Les 10 derni&egrave;res annonces');
define('_AM_ADSLIGHT_NEWTIME', 'Nouvelles annonces de:');
define('_AM_ADSLIGHT_DISPLPRICE', 'Affichage des prix:');
define('_AM_ADSLIGHT_DISPLPRICE2', 'Affichage des prix:');
define('_AM_ADSLIGHT_INTHISCAT', 'Dans cette cat&eacute;gorie');
define('_AM_ADSLIGHT_DISPLSUBCAT', 'Affichage des sous-cat&eacute;gories:');
define('_AM_ADSLIGHT_ONHOME', 'Sur la page d&acute;accueil du module');
define('_AM_ADSLIGHT_NBDISPLSUBCAT', 'Nombre de sous-cat&eacute;gories &agrave; afficher:');
define('_AM_ADSLIGHT_IF', 'Si»');
define('_AM_ADSLIGHT_ISAT', 'Est au');
define('_AM_ADSLIGHT_VIEWNEWCLASS', 'Afficher les nouvelles annonces:');
define('_AM_ADSLIGHT_PERMADDNG', 'Impossible d&acute;ajouter %s permission &agrave; %s  pour le groupe %s');
define('_AM_ADSLIGHT_PERMADDOK', 'Ajout de %s permission pour %s  pour le groupe %s');
define('_AM_ADSLIGHT_PERMRESETNG', 'Impossible de réinitialiser les permissions du groupe pour le module %s');
define('_AM_ADSLIGHT_PERMADDNGP', 'Tous les articles parent doivent &ecirc;tre s&eacute;lectionn&eacute;s. ');
define('_AM_ADSLIGHT_EXPIRE', 'Nombre de jours que l&acute;annonce va durer.');
define('_AM_ADSLIGHT_DBUPDATED', 'La base de donn&eacute;es a &eacute;t&eacute; mise &agrave; jour. ');
define('_AM_ADSLIGHT_CONTACT_BY_EMAIL', 'E-mail');
define('_AM_ADSLIGHT_CONTACT_BY_PM', 'Message priv&eacute; (MP)');
define('_AM_ADSLIGHT_CONTACT_BY_BOTH', 'Les deux, E-mail ou PM');
define('_AM_ADSLIGHT_CONTACT_BY_PHONE', 'Par t&eacute;l&eacute;phone seulement');
define('_AM_ADSLIGHT_CONTACTBY', 'Contacter par:');
define('_AM_ADSLIGHT_PREMIUM', 'Annonce Premium:');
define('_AM_ADSLIGHT_OK', 'Accepter');
define('_AM_ADSLIGHT_CATSMOD', 'La cat&eacute;gorie a &eacute;t&eacute; mise &agrave; jour');
define('_AM_ADSLIGHT_ADDED_ON', 'Ajout&eacute;e le');
define('_AM_ADSLIGHT_NUMANN', 'Annonce N&deg;:');
define('_AM_ADSLIGHT_ACTIVE', 'Actif');
define('_AM_ADSLIGHT_INACTIVE', 'Inactif');
define('_AM_ADSLIGHT_SOLD', 'R&eacute;serv&eacute;');
define('_AM_ADSLIGHT_STATUS', 'Etat');
define('_AM_ADSLIGHT_UPDATECOMPLETE', 'Mise &agrave; jour effectu&eacute;e');
define('_AM_ADSLIGHT_UPDATEMODULE', '<strong> Module de mise &agrave; jour </strong>');
define('_AM_ADSLIGHT_UPGRADEFAILED', 'La mise &agrave; jour &agrave; &eacute;chou&eacute;');
define('_AM_ADSLIGHT_UPGRADEFAILED0', 'Mettre &agrave; jour');
define('_AM_ADSLIGHT_UPGR_ACCESS_ERROR', 'Erreur d&acute;acc&egrave;s');
define('_AM_ADSLIGHT_THANKS', 'Merci d&acute;utiliser nos annonces class&eacute;es');
define('_AM_ADSLIGHT_WEBMASTER', 'Webmaster');
define('_AM_ADSLIGHT_YOUR_AD', 'Votre annonce');
define('_AM_ADSLIGHT_AT', '&Agrave;');
define('_AM_ADSLIGHT_VEDIT_AD', 'Vous pouvez consulter ou modifier votre annonce ici');
define('_AM_ADSLIGHT_YOUR_AD_ON', 'Votre annonce sur');
define('_AM_ADSLIGHT_APPROVED', 'A &eacute;t&eacute; approuv&eacute;e.');
define('_AM_ADSLIGHT_EXPIRED', 'A expir&eacute; et a &eacute;t&eacute; supprim&eacute;e.');
define('_AM_ADSLIGHT_CHECKER', 'Dossier de v&eacute;rification des permissions ');
define('_AM_ADSLIGHT_DIRPERMS', 'Passer le r&eacute;pertoire en permission d&acute;&eacute;criture! =&gt; ');
define('_AM_ADSLIGHT_PHOTO1', 'Nombre de photos:');
define('_AM_ADSLIGHT_SUBMITTER','Soumis par');

define('_AM_ADSLIGHT_TITLE','Titre');
define('_AM_ADSLIGHT_LID','ID');
define('_AM_ADSLIGHT_DATE','Date d&acute;ajout');
define('_AM_ADSLIGHT_DESC','Description');

define('_AM_ADSLIGHT_FREECAT','Ce sera une cat&eacute;gorie libre');
define('_AM_ADSLIGHT_MODERATE_CAT','Mod&eacute;r&eacute; cette cat&eacute;gorie');
define('_AM_ADSLIGHT_VISIT_LINK', 'Vous pouvez consulter l&acute;int&eacute;gralit&eacute; de l&acute;annonce en cliquant sur le lien ci-dessous:');
define('_AM_ADSLIGHT_LISTING_NUMBER', 'Nombre de cotation ');
define('_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW', 'Vous pouvez consulter la liste compl&egrave;te en cliquant sur le lien ci-dessous');
define('_AM_ADSLIGHT_NOREPLY','!!!  Ne r&eacute;pondez pas &agrave; cet e-mail, vous ne recevrez pas de r&eacute;ponse.  !!!');

define('_AM_ADSLIGHT_ADDED_TO_CAT','Une nouvelle annonce a &eacute;t&eacute; ajout&eacute;e &agrave; la cat&eacute;gorie ');
define('_AM_ADSLIGHT_RECIEVING_NOTIF','Vous avez souscrit un abonnement pour recevoir les notifications de ce genre.');
define('_AM_ADSLIGHT_ERROR_NOTIF','S&acute;il s&acute;agit d&acute;une erreur ou vous ne souhaitez pas recevoir de telles notifications, s&acute;il vous pla&icirc;t mettez &agrave; jour votre abonnement en cliquant sur le lien ci-dessous:');
define('_AM_ADSLIGHT_FOLLOW_LINK','Voici un lien vers la nouvelle annonce');
define('_AM_ADSLIGHT_CAPTCHA','Security Code :');
define('_AM_ADSLIGHT_MODERATE_SUBCATS','Mod&eacute;r&eacute; les sous-cat&eacute;gories de cette cat&eacute;gorie');
define('_AM_ADSLIGHT_DOCUMENTATION','Documentation');
define('_AM_ADSLIGHT_FEATURES','Fonctions');
define('_AM_ADSLIGHT_CLONE','How to Clone');
define('_AM_ADSLIGHT_INCOMPLETE','Incomplete');

// Ajouter par iLuc //
//Condition de paiement
define('_AM_ADSLIGHT_ADDUSURE', 'Ajouter un type d&acute;usure');
define('_AM_ADSLIGHT_MODUSURE', 'Modifier un type d&acute;usure');
define('_AM_ADSLIGHT_ADDUSURE2', 'Le type d&acute;usure a &eacute;t&eacute; ajout&eacute;');
define('_AM_ADSLIGHT_USUREMOD', 'Le type d&acute;usure a &eacute;t&eacute; modifi&eacute;');
define('_AM_ADSLIGHT_USUREDEL', 'Le type d&acute;usure a &eacute;t&eacute; supprim&eacute;');

//about.php
define('_AM_ADSLIGHT_ABOUT_AUTHOR','Auteur');
define('_AM_ADSLIGHT_ABOUT_CHANGELOG','Change log');
define('_AM_ADSLIGHT_ABOUT_CREDITS','Cr&#233;dits');
define('_AM_ADSLIGHT_ABOUT_LICENSE','License');
define('_AM_ADSLIGHT_ABOUT_MODULEINFOS','Informations sur le module');
define('_AM_ADSLIGHT_ABOUT_MODULEWEBSITE','Site de support');
define('_AM_ADSLIGHT_ABOUT_RELEASEDATE','Date de sortie');
define('_AM_ADSLIGHT_ABOUT_STATUS','Status');

define('_AM_ADSLIGHT_PERSONS_PARTICIPATED','Personnes qui ont particip&eacute; &agrave; l&acute;am&eacute;lioration du module');
define('_AM_ADSLIGHT_PERSONS_PARTICIP_NAME','Pseudo');
define('_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE','Website');
define('_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION','Version');
define('_AM_ADSLIGHT_PERSONS_PARTICIP_DESC','Pr&eacute;sentation');

//groupperms.php 
define('_AM_ADSLIGHT_GPERM_G_ADD', 'Peut ajouter');
define('_AM_ADSLIGHT_CAT2GROUPDESC', 'V&eacute;rifiez les cat&eacute;gories auxquelles vous pouvez d&acute;acc&eacute;der');
define('_AM_ADSLIGHT_GROUPPERMDESC', 'S&eacute;lectionnez le(s) groupe(s) autoris&eacute;(s) &agrave; soumettre des annonces.');
define('_AM_ADSLIGHT_GROUPPERM', 'Permissions de soumettre ');
define('_AM_ADSLIGHT_SUBMITFORM', 'Permissions de d&eacute;poser une annonce');
define('_AM_ADSLIGHT_SUBMITFORM_DESC', 'S&eacute;lectionnez, qui peut pr&eacute;senter des annonces');
define('_AM_ADSLIGHT_VIEWFORM', 'Permissions de voir les annonces');
define('_AM_ADSLIGHT_VIEWFORM_DESC', 'S&eacute;lectionnez les groupes qui peuvent voir les annonces');
define('_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC', 'S&eacute;lectionnez, qui peut afficher des résumés');
define('_AM_ADSLIGHT_SUPPORT', 'Soutenez ce logiciel');
define('_AM_ADSLIGHT_OP', 'Lire mon avis');
define('_AM_ADSLIGHT_PREMIUM_DESC', 'Choisir les groupes qui peuvent s&eacute;lectionner la dur&eacute;e de parution des annonces');

//Release Test
define('_AM_ADSLIGHT_RELEASEOK', 'Vous utilisez la derni&egrave;re version du Module.');
define('_AM_ADSLIGHT_RELEASEISNOTOK', 'Votre module n&acute;est plus &agrave; jour, une nouvelle version est disponible.');
define('_AM_ADSLIGHT_RELEASEDOWNLOAD', 'T&eacute;l&eacute;charger.');
define('_AM_ADSLIGHT_NBR_PHOTO','Photo(s)');

//Version 1.05
// Méta Description / keywords Categories
define('_AM_ADSLIGHT_CAT_META_DESCRIPTION','<strong>M&eacute;ta description:</strong><br />Pour un meilleur r&eacute;f&eacute;rencement,</strong>ajoutez ici une description pr&eacute;cise de votre cat&eacute;gorie. ');
define('_AM_ADSLIGHT_CAT_META_KEYWORDS','<strong>M&eacute;ta keywords:</strong><br />Pour un meilleur r&eacute;f&eacute;rencement,</strong>ajoutez ici les mots clefs en rapports avec la c&eacute;t&eacute;gorie.<br /><strong><font color=\"#ff3300\">s&eacute;parer les mots par des virgules</font></strong>. ( english, espagne, france,...)');

//Version 1.053
// Test Maps Xml
define('_AM_ADSLIGHT_XMLNOTOK', 'Le fichier xml pour la carte, est inexistant, ou alors ne correspond pas &agrave; la carte s&eacute;l&eacute;ctionner dans les pr&eacute;f&eacute;rences.');
define('_AM_ADSLIGHT_XMLUPGRADE', 'Mettre &agrave; jour le fichier xml');

//Version 1.054
// Support_forum.php
define('_AM_ADSLIGHT_SUPPORTFORUM_TITLE', 'Liste des forums d&acute;entraide');
define('_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS', 'Lien');
define('_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG', 'Langue');
define('_AM_ADSLIGHT_SUPPORTFORUM_DESC', 'Description');
define('_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE', 'Traduction');

////////////////////////////
//// Version 1.06 //////////

// ../admin/index.php

// Stat
define('_AM_ADSLIGHT_STAT_TITLE', 'Statistiques');
define('_AM_ADSLIGHT_STAT_NUM1', 'Annonces');
define('_AM_ADSLIGHT_STAT_NUM2', 'Cat&#233;gories');
define('_AM_ADSLIGHT_STAT_NUM3', 'Utilisateurs');
define('_AM_ADSLIGHT_STAT_NUM4', 'Commentaires');


// Option Menu
define('_AM_ADSLIGHT_USERMENU_TITLE', 'Options');
define('_AM_ADSLIGHT_USERMENU_SENDMAIL', ' Envoyer un mail');
define('_AM_ADSLIGHT_USERMENU_COMMENT', ' Commentaires');
define('_AM_ADSLIGHT_USERMENU_BAMMIER', ' Banni&#232;res');

// Menu Category
define('_AM_ADSLIGHT_CATMENU_TITLE', 'Cat&#233;gories');
define('_AM_ADSLIGHT_CATMENU_CATEGORY', ' Ajouter une cat&#233;gories');
define('_AM_ADSLIGHT_CATMENU_MODIFCAT', ' Gestion des cat&#233;gories');

// Menu Annonces
define('_AM_ADSLIGHT_ADSMENU_TITLE', 'Annonces');
define('_AM_ADSLIGHT_ADSMENU_VALIDADS', ' Valider les annonces');
define('_AM_ADSLIGHT_ADSMENU_VIEWADS', ' Voir les annonces');
define('_AM_ADSLIGHT_ADS_MODIFADS', ' Modifier une annonce');

// Menu Downloads
define('_AM_ADSLIGHT_DOWNLOADS_TITLE', 'T&#233;l&#233;chargement');
define('_AM_ADSLIGHT_DOWNLOADS_PLUGINS', ' Plugins');
define('_AM_ADSLIGHT_DOWNLOADS_MAPS', ' Cartes');

// Menu Devellopment
define('_AM_ADSLIGHT_DEVLLP_TITLE', 'D&#233;veloppement');
define('_AM_ADSLIGHT_DEVLLP_HACK', ' Proposer un Hack');
define('_AM_ADSLIGHT_DEVLLP_TRANSLATE', ' Proposer une Traduction');
define('_AM_ADSLIGHT_DEVLLP_CORRECTION', ' Proposer une correction');
define('_AM_ADSLIGHT_DEVLLP_MAPFLASH', ' Proposer une carte (.swf)');
define('_AM_ADSLIGHT_DEVLLP_FORUM', ' Forum');

// Menu Faire un Don
define('_AM_ADSLIGHT_DONATE_TITLE', ' Faire un Don');
define('_AM_ADSLIGHT_DONATE', 'AdsLight est gratuit et le restera.<br />Vous pouvez, si vous le souhaitez,<br />faire un don afin de m&acute;encourager &#224; continuer.<br />');


////RSS Forum
define('_AM_ADSLIGHT_MENURSSFORUM_TITLE', 'Forum d&acute;entraide AdsLight');
define('_AM_ADSLIGHT_MENURSSFORUM_URL', 'http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=65');

define('_AM_ADSLIGHT_MENURSSFORUM_LINK1', 'http://www.i-luc.fr/adslight/modules/newbb/viewforum.php?forum=65');
define('_AM_ADSLIGHT_MENURSSFORUM_GOFORUM', 'Allez au Forum');

define('_AM_ADSLIGHT_MENURSSFORUM_LINK2', 'http://www.i-luc.fr/adslight/modules/profile/register.php');
define('_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT', 'Vous inscrire');

////	RSS AdsLight News
define('_AM_ADSLIGHT_MENURSS_TITLE', 'Actualit&#233;s AdsLight');
 
// ../admin/view_ads.php
define('_AM_ADSLIGHT_ADSVALIDE', 'annonces valides');
define('_AM_ADSLIGHT_NOANNVALADS', 'Il n&acute;y a actuellement aucune annonce');
define('_AM_ADSLIGHT_USURE', '&#201;tat');

// AdsLight 2
// Block Admin New Annonces
define('_AM_ADSLIGHT_ADSMENU_NEW', 'Nouveau');
define('_AM_ADSLIGHT_ADSMENU_NEWTXT', ' <b>AdsLight Version 2 :</b><br />
<br /><b>- Bookmark :</b> tu peux maintenant activer les Bookmarks dans les annonces.<br />
<br /><b>- Template Annonces :</b> le template des annonces a &#233;tait am&#233;lior&#233;.<br />
<br /><b>- Carte Google :</b> Ajout de la carte Google dans les annonces.<br />
<br /><b>- Flux RSS :</b> Le Flux RSS par cat&#233;gories est disponible.<br />
<br /><b>- Menu :</b> Optimisation du menu. On peut le d&#233;sactiver dans les pr&#233;f&#233;rences du modules.<br />
<br /><b>- Fichiers Langages :</b> les fichiers langages (french) ont &#233;tait optimiser pour gagner en temps d\'affichage.<br />
<br /><b>- R&#233;f&#233;rencement :</b> le module a &#233;tait corriger pour un meilleur r&#233;f&#233;rencement.<br />
<br /><b>- Hack Xpayment :</b> Le module peut-&#234;tre utiliser avec Xpayment. ( Thanks Simon Roberts )<br />
');
// Block Admin Plugin
define('_AM_ADSLIGHT_ADSMENU_PLUGIN', 'Liste des Plugins');


?>