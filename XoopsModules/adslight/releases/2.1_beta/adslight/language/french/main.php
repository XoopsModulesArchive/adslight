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

define('_ADSLIGHT_ADDON', 'Ajouter sur');
define('_ADSLIGHT_ANNONCES', 'Petites annonces');
define('_ADSLIGHT_LOGOLINK', 'AdsLight Module Xoops de petites annonces');
define('_ADSLIGHT_MAIN', 'Accueil');
define('_ADSLIGHT_ADDFROM', 'Annonces gratuites de ');
define('_ADSLIGHT_NEWTOD', 'De nouvelles annonces ont &eacute;t&eacute; ajout&eacute;es dans cette cat&eacute;gorie aujourd&acute;hui');
define('_ADSLIGHT_NEWTRED', 'De nouvelles annonces ont &eacute;t&eacute; ajout&eacute;es dans cette cat&eacute;gorie au cours des 3 derniers jours');
define('_ADSLIGHT_NEWWEEK', 'De nouvelles annonces ont &eacute;t&eacute; ajout&eacute;es dans cette cat&eacute;gorie au cours de la semaine derni&egrave;re');
define('_ADSLIGHT_INTRO', '<strong>Vous pouvez ajouter votre(vos) petite(s) annonce(s) gratuitement.<br /> Il suffit de cliquer sur la cat&eacute;gorie dans laquelle vous d&eacute;sirez l&acute;ajouter, <br /> Vous verrez un lien (Ajouter une petite annonce dans cette cat&eacute;gorie) .</B>');
define('_ADSLIGHT_PRICE', 'Prix');
define('_ADSLIGHT_DATE', 'Date');
define('_ADSLIGHT_TITLE', 'Titre');
define('_ADSLIGHT_CAT', 'Cat&eacute;gorie');
define('_ADSLIGHT_THE', 'Les');
define('_ADSLIGHT_LASTADD', 'Derni&egrave;res petites annonces');
define('_ADSLIGHT_PREV', 'Annonces Pr&eacute;c&eacute;dentes');
define('_ADSLIGHT_NEXT', 'Annonces Suivantes');
define('_ADSLIGHT_THEREIS', 'Il y a');
define('_ADSLIGHT_INTHISCAT', 'Annonces class&eacute;es dans cette cat&eacute;gorie');
define('_ADSLIGHT_AVAILAB', 'Sous-cat&eacute;gories disponibles:');
define('_ADSLIGHT_ADMINCADRE', 'Administration');
define('_ADSLIGHT_WAIT', 'Petites annonces en attente d&acute;&ecirc;tre approuv&eacute;es');
define('_ADSLIGHT_NO_CLA', 'Il n&acute;y a pas d&acute;annonce en attente d&acute;&ecirc;tre approuv&eacute;e');
define('_ADSLIGHT_SEEIT', 'Afficher les annonces en attente');
define('_ADSLIGHT_LOCAL', 'Ville:');
define('_ADSLIGHT_LOCAL2', 'Localisation');
define('_ADSLIGHT_ANNFROM', 'Annonces de');
define('_ADSLIGHT_ADDED', 'Ajout&eacute;');
define('_ADSLIGHT_GORUB', 'Aller &agrave;');
define('_ADSLIGHT_DATE2', 'Ajout&eacute;e le');
define('_ADSLIGHT_SUPPRANN', 'Supprimez votre annonce');
define('_ADSLIGHT_MODIFANN', 'Modifiez votre annonce');
define('_ADSLIGHT_PHOTO', 'Photo');
define('_ADSLIGHT_VIEW', 'Vues');
define('_ADSLIGHT_CONTACT', 'Contact');
define('_ADSLIGHT_BYMAIL2', 'E-mail');
define('_ADSLIGHT_CONTACTBYMP', 'Message Priv&eacute;');
define('_ADSLIGHT_STOP2', 'Le d&eacute;lai pour l&acute;inscription de votre petite annonce:');
define('_ADSLIGHT_STOP3', 'A pris fin, il a &eacute;t&eacute; supprim&eacute;');
define('_ADSLIGHT_VU2', 'Ce');
define('_ADSLIGHT_OTHER', 'Si vous souhaitez passer une autre annonce');
define('_ADSLIGHT_THANK', 'Merci pour l&acute;utilisation de notre service d&acute;annonces class&eacute;es.');
define('_ADSLIGHT_TEAM', 'Equipe');
define('_ADSLIGHT_ACTUALY', 'Il y a');
define('_ADSLIGHT_ADVERTISEMENTS', 'Petites annonces actives');
define('_ADSLIGHT_MODADMIN', 'Modifier cette petite annonce (administrateur)');
define('_ADSLIGHT_AND', 'Et');
define('_ADSLIGHT_WAIT3', 'Petite(s) annonces(s) en attente d&acute;&ecirc;tre approuv&eacute;(es)');
define('_ADSLIGHT_CREATBY', 'A &eacute;t&eacute; &eacute;crite par');
define('_ADSLIGHT_FOR', 'Pour');
define('_ADSLIGHT_OF', 'De');
define('_ADSLIGHT_VIEW2', 'Vues');
define('_ADSLIGHT_VIEWANN2', 'Consultez votre petite annonce');
define('_ADSLIGHT_ACCESADMIN', 'Annonce Administration');
define('_ADSLIGHT_NOANNINCAT', 'Il n&acute;y a pas d&acute;annonce dans cette cat&eacute;gorie');
define('_ADSLIGHT_INCAT', 'En');
define('_ADSLIGHT_CAT2', 'Cat&eacute;gories');
define('_ADSLIGHT_DESC', 'Description');
define('_ADSLIGHT_ADDANNONCE2', 'Ajouter une petite annonce dans cette cat&eacute;gorie');
define('_ADSLIGHT_ADDANNONCE3', 'Ajouter une annonce');
define('_ADSLIGHT_ANNMODERATE', 'Votre annonce sera en attente d&acute;approbation et une fois approuv&eacute;e, durera');
define('_ADSLIGHT_NOBIZ', 'Publicit&eacute; non autoris&eacute;e');
define('_ADSLIGHT_REDIRECT_BIZ', 'Voir notre tarif commercial');
define('_ADSLIGHT_ANNNOMODERATE', 'Votre annonce commencera imm&#233;diatement et durera');
define('_ADSLIGHT_FORMEMBERS2', 'Publication des annonces est r&eacute;serv&eacute; aux membres <br /> S&acute;il vous pla&icirc;t inscrivez-vous ou connectez-vous si vous &ecirc;tes d&eacute;j&agrave; membre.');
define('_ADSLIGHT_OR', 'Ou');
define('_ADSLIGHT_DAY', 'Jours');
define('_ADSLIGHT_CAT3', 'Cat&eacute;gorie');
define('_ADSLIGHT_TITLE2', 'Titre:');
define('_ADSLIGHT_TYPE', 'Type d&acute;annonce:');
define('_ADSLIGHT_TYPE_USURE', 'L&acute;&eacute;tat d&acute;usure:');
define('_ADSLIGHT_NOTYPE', 'Type n&#176;');
define('_ADSLIGHT_CLASSIFIED_AD', 'Petites annonces');
define('_ADSLIGHT_CHARMAX', '(255 caract&egrave;res max)');
define('_ADSLIGHT_IMG', 'Ajouter une image:');
define('_ADSLIGHT_IMG2', 'Ajouter une seconde image:');
define('_ADSLIGHT_IMG3', 'Ajouter une troisi&egrave;me image:');
define('_ADSLIGHT_PRICE2', 'Prix:');
define('_ADSLIGHT_EMAIL', 'E-mail:');
define('_ADSLIGHT_TEL', 'T&eacute;l&eacute;phone:');
define('_ADSLIGHT_TOWN', 'Ville:');
define('_ADSLIGHT_COUNTRY', 'Pays:');
define('_ADSLIGHT_VALIDATE', 'Valider');
define('_ADSLIGHT_SELECTYPE', 'Selection de type d&acute;annonces class&eacute;es:');
define('_ADSLIGHT_SELECTCAT', 'S&eacute;lectionnez une cat&eacute;gorie');
define('_ADSLIGHT_SELECTYPOTHER', 'Autre type');
define('_ADSLIGHT_SELECTCATOTHER', 'Autres cat&eacute;gories');
define('_ADSLIGHT_RETURN', 'Retour');
define('_ADSLIGHT_FILES', 'Les fichiers avec l&acute;extension');
define('_ADSLIGHT_FILESTOP', 'Ne peuvent pas &ecirc;tre transf&eacute;r&eacute;es. Envoyez arr&ecirc;t&eacute;');
define('_ADSLIGHT_YIMG', 'Votre image');
define('_ADSLIGHT_TOBIG', 'Est trop grand.<p> Utilisez la fonction <strong>Page Pr&eacute;c&eacute;dente</strong> pour revenir Ã  la forme un ajout d&acute;un fichier');
define('_ADSLIGHT_ADSADDED', 'Votre annonce a &eacute;t&eacute; ajout&eacute;e.');
define('_ADSLIGHT_PRINT', 'Imprimer cette annonce');
define('_ADSLIGHT_FRIENDSEND', 'Envoyer cette annonce &agrave; un ami');
define('_ADSLIGHT_IMGPISP', 'Photo disponible');
define('_ADSLIGHT_VALIDERORMSG', 'Il y a des erreurs qui emp&ecirc;chent que cette annonce soit enregistr&eacute;e!');
define('_ADSLIGHT_VALIDTITLE', 'Titre est n&eacute;cessaire.');
define('_ADSLIGHT_VALIDTYPE', 'Type est requis.');
define('_ADSLIGHT_VALIDCAT', 'Cat&eacute;gorie est obligatoire.');
define('_ADSLIGHT_VALIDANN', 'Description de l&acute;entreprise est n&eacute;cessaire.');
define('_ADSLIGHT_VALIDTOWN', 'Ville est n&eacute;cessaire.');
define('_ADSLIGHT_VALIDEMAIL', 'E-mail est obligatoire.');
define('_ADSLIGHT_VALIDSUBMITTER', 'Le nom est obligatoire.');
define('_ADSLIGHT_VALIDMSG', 'S&acute;il vous pla&icirc;t corrigez ces erreurs pour enregister votre annonce.');
// display-image.php //
define('_ADSLIGHT_CLOSEF', 'Fermez cette fen&ecirc;tre');
// liste-p-f.php //
define('_ADSLIGHT_EXTRANN', 'Cette annonce est sur le site Web');
define('_ADSLIGHT_SENDTO', '<strong>Envoyer cette annonce &agrave; un ami</strong><br /><br />Vous pouvez envoyer l&acute;annonce N&deg;°');
define('_ADSLIGHT_FRIEND', '&agrave; un ami:');
define('_ADSLIGHT_NAME', 'Votre nom:');
define('_ADSLIGHT_MAIL', 'Votre Email:');
define('_ADSLIGHT_NAMEFR', 'Nom de l&acute;ami:');
define('_ADSLIGHT_MAILFR', 'Email de l&acute;ami:');
define('_ADSLIGHT_SENDFR', 'Envoyer');
define('_ADSLIGHT_ANNSEND', 'Les petites annonces s&eacute;lectionn&eacute;es ont &eacute;t&eacute; envoy&eacute;es');
define('_ADSLIGHT_SUBJET', 'Une petite annonce int&eacute;ressante sur');
define('_ADSLIGHT_HELLO', 'Bonjour');
define('_ADSLIGHT_MESSAGE', 'Estime que cette annonce pourrait vous int&eacute;resser et vous a envoy&eacute; ce message.');
define('_ADSLIGHT_INTERESS', 'D&acute;autres Petites annonces peuvent &ecirc;tre vues sur');
define('_ADSLIGHT_TEL2', 'T&eacute;l&eacute;phone:');
define('_ADSLIGHT_BYMAIL', 'Email:');
define('_ADSLIGHT_DISPO', 'Expire le');
define('_ADSLIGHT_NOMAIL', 'Nous ne donnons pas aux utilisateurs les adresses e-mail des annonceurs.<br />Pour les contacter par e-mail, utilisez le formulaire de contact sur notre site.<br />Vous pouvez consulter l&acute;annonce Ã  l&acute;adresse Web suivante : ');
// modify.php //
define('_ADSLIGHT_OUI', 'Oui');
define('_ADSLIGHT_NON', 'Non');
define('_ADSLIGHT_SURDELANN', 'ATTENTION<br /><br /> Etes-vous s&ucirc;r de vouloir supprimer cette annonce ?');
define('_RETURNANN', 'Retour &agrave; la liste d&acute;annonces class&eacute;es');
define('_ADSLIGHT_ANNDEL', 'Petite(s) annonce(s) s&eacute;lectionn&eacute;e(s) a(ont) &eacute;t&eacute; supprim&eacute;e(s)');
define('_ADSLIGHT_ANNMOD2', 'Petite(s) annonce(s) s&eacute;lectionn&eacute;e(s) a(ont) &eacute;t&eacute; modifi&eacute;e(s)');
define('_ADSLIGHT_NOMODIMG', 'Votre annonce comporte une photo <br /> (les photos ne peuvent pas &ecirc;tre modifi&eacute;es)');
define('_ADSLIGHT_DU', 'Ajout&eacute;e le');
define('_ADSLIGHT_MODIFBEFORE', 'Les modifications apport&eacute;es &agrave; cette petite annonce doivent &ecirc;tre approuv&eacute;es par l&acute;administrateur, et elle sera mise en file d&acute;attente pour approbation');
define('_ADSLIGHT_SENDBY', 'Ajout&eacute;e par:');
define('_ADSLIGHT_NUMANNN', 'Petites annonces nÂ°:');
define('_ADSLIGHT_NEWPICT', 'Nouvelle image:');
define('_ADSLIGHT_ACTUALPICT', 'Actualiser l&acute;image:');
define('_ADSLIGHT_DELPICT', 'Supprimer cette image');
// contact.php //
define('_ADSLIGHT_CONTACTAUTOR', 'Contacter l&acute;auteur de cette petite annonce');
define('_ADSLIGHT_TEXTAUTO', 'Le message envoie automatiquement les trois premiers champs, votre nom, votre e-mail et votre num&eacute;ro de t&eacute;l&eacute;phone, vous n&acute;avez pas besoin de les entrer de nouveau dans votre message.');
define('_ADSLIGHT_YOURNAME', 'Votre nom:');
define('_ADSLIGHT_YOUREMAIL', 'Votre email:');
define('_ADSLIGHT_YOURPHONE', 'Votre t&eacute;l&eacute;phone:');
define('_ADSLIGHT_YOURMESSAGE', 'Votre message:');
define('_ADSLIGHT_VALIDMESS', 'Il est n&eacute;cessaire d&acute;&eacute;crire un message.');
define('_ADSLIGHT_MESSEND', 'Votre message a &eacute;t&eacute; envoy&eacute; ...');
define('_ADSLIGHT_CLASSIFIED', 'Petites annonces');
define('_ADSLIGHT_FROM', 'Pr&eacute;sent&eacute; par');
// formulaire de contact IP
define('_ADSLIGHT_YOUR_IP', 'Votre adresse IP est');
define('_ADSLIGHT_IP_LOGGED', 'elle a &eacute;t&eacute; enregistr&eacute;e! Des mesures seront prises contre tout abus de ce syst&egrave;me. ');
// Message //
define('_ADSLIGHT_CONTACTAFTERANN', 'R&eacute;pondre &agrave; vos Petites annonces');
define('_ADSLIGHT_MESSFROM', 'Message de');
define('_ADSLIGHT_FROMANNOF', 'Des petites annonces sur les');
define('_ADSLIGHT_REMINDANN', 'Vous avez une r&eacute;ponse &agrave; votre petite annonce sur');
define('_ADSLIGHT_STARTMESS', 'Vous trouverez ci-dessous la r&eacute;ponse &agrave; votre annonce.');
define('_ADSLIGHT_ENDMESS ','!!! Ne r&eacute;pondez pas &agrave; cet e-mail, il n&acute;arriverait pas &agrave; l&acute;exp&eacute;diteur. Si vous souhaitez r&eacute;pondre &agrave; l&acute;exp&eacute;diteur, utilisez les coordonn&eacute;es ci-dessus. !!!');
define('_ADSLIGHT_CANJOINT', 'Vous pouvez r&eacute;pondre &agrave;');
define('_ADSLIGHT_TO', 'Pour le contacter:');
define('_ADSLIGHT_ORAT', 'Ou au');
define('_ADSLIGHT_NOMAIL2', 'Nous ne fournissons pas aux utilisateurs les adresses e-mail &acute;des annonceurs&acute;. Pour les contacter par e-mail s&acute;il vous pla&icirc;t utilisez le formulaire de contact sur notre site. Vous pouvez r&eacute;pondre &agrave; l&acute;annonce &agrave; l&acute;adresse suivante :');
define('_ADSLIGHT_MESSAGE_END', 'Fin du message.');
define('_ADSLIGHT_SECURE_SEND', 'Ce message a &eacute;t&eacute; envoy&eacute; par un syst&egrave;me s&eacute;curis&eacute; formulaire de contact, l&acute;exp&eacute;diteur ne conna&icirc;t pas votre adresse email.');
// Message de fin //
define('_ADSLIGHT_HOW_LONG', 'Dur&eacute;e de parution');
define('_ADSLIGHT_WILL_LAST', 'Cette annonce va durer.');
// Pour les recherches sur la page d&acute;index
define('_ADSLIGHT_SEARCHRESULTS', 'Petites annonces R&eacute;sultats de la recherche');
define('_ADSLIGHT_SEARCH_LISTINGS', 'Recherche dans les annonces:');
define('_ADSLIGHT_ALL_WORDS', 'Tous les mots');
define('_ADSLIGHT_ANY_WORDS', 'Un des mots');
define('_ADSLIGHT_EXACT_MATCH', 'Expression exacte');
define('_ADSLIGHT_ONLYPIX', 'Afficher uniquement <br /> Annonces avec photo');
define('_ADSLIGHT_SEARCH', 'Recherche');
define('_ADSLIGHT_REQUIRED', '* Requis');
define('_ADSLIGHT_MY_ADS', 'Toutes les Annonces de');
define('_ADSLIGHT_VIEW_MY_ADS', 'Les annonces de');
define('_ADSLIGHT_COMMENTS_HEAD', '<h3>Commentaires &agrave; propos de ce vendeur :</h3>');
define('_ADSLIGHT_PREMIUM_DAY', '<strong> Jours, si vous ne changez pas l&acute;affichage du formulaire ci-dessous. </B>');
define('_ADSLIGHT_PREMIUM_LONG_HEAD', '<strong> Le lancement de votre annonce sera imm&eacute;diat </strong>');
define('_ADSLIGHT_PREMIUM_MEMBER', '<strong> Puisque vous &ecirc;tes un membre utilisant l&acute;offre PREMIUM, vous pouvez choisir la dur&eacute;e de votre annonce. <br /> <br /> Elle durera </strong>');
define('_ADSLIGHT_PREMIUM_MODERATED_HEAD', '<strong> Votre annonce sera en attente d&acute;approbation </strong>');

define('_ADSLIGHT_TOPRATED', 'Top popularit&eacute;');
define('_ADSLIGHT_RATINGC', 'Note:');
define('_ADSLIGHT_ONEVOTE', '1 vote');
define('_ADSLIGHT_NUMVOTES', ' %s votes');
define('_ADSLIGHT_RATETHIS', 'Evaluer cet utilisateur');
define('_ADSLIGHT_VOTEAPPRE', 'Votre vote est appr&eacute;ci&eacute;.');
define('_ADSLIGHT_THANKURATE', 'Merci d&acute;avoir pris le temps d&acute;&eacute;valuer cet utilisateur &agrave; %s.');
define('_ADSLIGHT_VOTEFROMYOU', 'Les contributions d&acute;utilisateurs tels que vous, aideront d&acute;autres visiteurs &agrave; mieux choisir leur annonce .');
define('_ADSLIGHT_VOTEONCE', 'S&acute;il vous pla&icirc;t ne votez pas pour la m&ecirc;me ressource plus d&acute;une fois.');
define('_ADSLIGHT_RATINGSCALE', 'L&acute;&eacute;chelle est de 1 &agrave; 10, avec 1 &eacute;tant le plus faible et 10 &eacute;tant excellent.');
define('_ADSLIGHT_BEOBJECTIVE', 'S&acute;il vous pla&icirc;t soyez objectif, si tout le monde re&ccedil;oit un 1 ou un 10, les notations ne seront pas tr&egrave;s utiles.');
define('_ADSLIGHT_DONOTVOTE', 'Ne votez pas pour votre propre annonce.');
define('_ADSLIGHT_RATEIT', 'Votez!');
define('_ADSLIGHT_RATING', 'Evaluation');
define('_ADSLIGHT_VOTE', 'Vote');
define('_ADSLIGHT_NORATING', 'Pas de notation s&eacute;lectionn&eacute;e.');
define('_ADSLIGHT_CANTVOTEOWN', 'Vous ne pouvez pas voter sur les annonces que vous avez soumises. <br /> Tous les votes sont identifi&eacute;s et examin&eacute;s.');
define('_ADSLIGHT_VOTEONCE2', 'Ne votez pour l&acute;annonce s&eacute;lectionn&eacute;e qu&acute;une seule fois. <br /> Tous les votes sont identifi&eacute;s et examin&eacute;s.');
define('_ADSLIGHT_TOTALVOTES', 'Evaluation des Petites Annonces (total des votes: %s)');
define('_ADSLIGHT_USERTOTALVOTES', 'Votes d&acute;utilisateurs enregistr&eacute;s (total des votes: %s)');
define('_ADSLIGHT_ANONTOTALVOTES', 'Votes d&acute;utilisateurs anonymes (total des votes: %s)');
define('_ADSLIGHT_USERAVG', 'User AVG Rating');
define('_ADSLIGHT_TOTALRATE', 'Total des votes');
define('_ADSLIGHT_NOREGVOTES', 'Pas de vote d&acute;utilisateurs enregistr&eacute;s');
define('_ADSLIGHT_NOUNREGVOTES', 'Pas de vote d&acute;utilisateurs non enregistr&eacute;s');
define('_ADSLIGHT_VOTEDELETED', 'Donn&eacute;es du vote supprim&eacute;es.');
define('_ADSLIGHT_USER_RATING', 'Notation/Evaluation: ');
define('_ADSLIGHT_RATETHISUSER', 'Evaluer cet utilisateur');
define('_ADSLIGHT_THANKURATEUSER', 'Merci de prendre le temps d&acute;&eacute;valuer cette ici &agrave; l&acute;utilisateur %s.');
define('_ADSLIGHT_RATETHISITEM', 'Evaluez cette annonce');
define('_ADSLIGHT_THANKURATEITEM', 'Merci de prendre le temps d&acute;&eacute;valuer cette annonce ici, Ã  %s.');
define('_ADSLIGHT_MY_PRICE', 'Prix (Â€)');
define('_ADSLIGHT_MY_DATE', 'Date');
define('_ADSLIGHT_MY_TITLE', 'Titre');
define('_ADSLIGHT_MY_LOCAL2', 'Localisation');
define('_ADSLIGHT_MY_VIEW', 'Populaires');
define('_ADSLIGHT_SORTBY', 'Tri&eacute; par:');
define('_ADSLIGHT_CURSORTEDBY', 'Annonces actuellement tri&eacute;s par: %s');
define('_ADSLIGHT_POPULARITYLTOM', 'Popularit&eacute; (les moins vues)');
define('_ADSLIGHT_POPULARITYMTOL', 'Popularit&eacute; (les plus vues)');
define('_ADSLIGHT_TITLEATOZ', 'Titre (A &#224; Z)');
define('_ADSLIGHT_TITLEZTOA', 'Titre (Z &#224; A)');
define('_ADSLIGHT_DATEOLD', 'Date (Du plus ancien au plus r&eacute;cent)');
define('_ADSLIGHT_DATENEW', 'Date (Du plus r&eacute;cent au plus ancien)');
define('_ADSLIGHT_RATINGLTOH', 'Evaluation (Score du plus bas au plus &eacute;lev&eacute;)');
define('_ADSLIGHT_RATINGHTOL', 'Evaluation (Score du plus &eacute;lev&eacute; au plus bas)');
define('_ADSLIGHT_PRICELTOH', 'Prix (moins &eacute;lev&eacute; au plus &eacute;lev&eacute;)');
define('_ADSLIGHT_PRICEHTOL', 'Prix (plus &eacute;lev&eacute; au plus bas)');
define('_ADSLIGHT_POPULARITY', 'Popularit&eacute;');
define('_ADSLIGHT_ACTUALPICT2', 'Actualiser seconde image:');
define('_ADSLIGHT_ACTUALPICT3', 'Actualiser troisi&#232;me  image:');
define('_ADSLIGHT_NEWPICT2', 'Nouvelle seconde image:');
define('_ADSLIGHT_NEWPICT3', 'Nouvelle troisi&#232;me  image:');
define('_ADSLIGHT_SELECT_CONTACTBY', 'Choisissez une option');
define('_ADSLIGHT_CONTACTBY', 'par:');
define('_ADSLIGHT_CONTACT_BY_EMAIL', 'E-mail');
define('_ADSLIGHT_CONTACT_BY_PM', 'Message priv&eacute; (MP)');
define('_ADSLIGHT_CONTACT_BY_BOTH', 'Les deux E-mail ou PM');
define('_ADSLIGHT_CONTACT_BY_PHONE', 'Par t&eacute;l&eacute;phone seulement');
define('_ADSLIGHT_ORBY', 'Ou par');
define('_ADSLIGHT_PREMYOUHAVE', 'Vous avez %s dans votre annonce.');
define('_ADSLIGHT_YOUHAVE', 'Vous avez %s photo (s) dans votre annonce.');
define('_ADSLIGHT_YOUCANHAVE', 'En tant que membre Premium, vous pouvez avoir jusqu&acute;&agrave; %s photo(s).');
define('_ADSLIGHT_BMCANHAVE', 'En tant que membre de base, vous pouvez avoir uniquement %s photos.');
define('_ADSLIGHT_UPGRADE_NOW', 'Mise &#224;  niveau vers un membre Premium');
define('_ADSLIGHT_DELETE', 'Supprimer');
define('_ADSLIGHT_EDITDESC', 'Modifier la description');
define('_ADSLIGHT_TOKENEXPIRED', '[Securit&eacute;] Vous avez d&eacute;pass&eacute; le temps allou&eacute; pour saisir votre annonce. <br /> r&eacute;-essayez &agrave; nouveau');
define('_ADSLIGHT_DESC_EDITED', 'La description de votre image a &eacute;t&eacute; &eacute;dit&eacute;e avec succ&egrave;s');
define('_ADSLIGHT_DELETED', 'Image supprim&eacute;e avec succ&egrave;s');
define('_ADSLIGHT_SUBMIT_PIC_TITLE', 'Soumettre une photo pour votre annonce');
define('_ADSLIGHT_SELECT_PHOTO', 'S&eacute;lectionner la photo');
define('_ADSLIGHT_CAPTION', 'L&eacute;gende');
define('_ADSLIGHT_UPLOADPICTURE', 'T&eacute;l&eacute;charger');
define('_ADSLIGHT_YOUCANUPLOAD', 'Vous ne pouvez transf&eacute;rer que des fichiers jpg, d&acute;un poids maximum de %s Ko');
define('_ADSLIGHT_ALBUMTITLE', ' Annonce de %s ');
define('_ADSLIGHT_WELCOME', 'Bienvenue dans l&acute;album photo de votre annonce');
define('_ADSLIGHT_NOTHINGYET', 'Il n&acute;y a pas de photo dans cet album');
define('_ADSLIGHT_NOCACHACA', 'D&eacute;sol&eacute;, vous n&acute;avez pas acc&egrave;s &agrave; ce service');
define('_ADSLIGHT_ADD_PHOTOS', 'Ajouter une photo');
define('_ADSLIGHT_SHOWCASE', 'Galerie');
define('_ADSLIGHT_EDIT_CAPTION', 'Modifier la l&eacute;gende');
define('_ADSLIGHT_EDIT', 'Modifier');
define('_ADSLIGHT_SUBMITTER', 'Nom:');
define('_ADSLIGHT_ADD_LISTING', 'Ajouter une annonce');
define('_ADSLIGHT_SUBMIT', 'Valider');
define('_ADSLIGHT_PRICETYPE', 'Votre prix annonc&eacute; est:');
define('_ADSLIGHT_ADD_PHOTO_NOW', 'Ajouter une photos maintenant?');
define('_ADSLIGHT_ACTIVE', 'Actif');
define('_ADSLIGHT_INACTIVE', 'Inactif');
define('_ADSLIGHT_SOLD', 'R&eacute;serv&eacute;');
define('_ADSLIGHT_STATUS', 'Status');
define('_ADSLIGHT_REPLIES', 'R&eacute;ponses');
define('_ADSLIGHT_EXPIRES_ON', 'Expiration');
define('_ADSLIGHT_ADDED_ON', 'Ajout&eacute;e le');
define('_ADSLIGHT_REPLY_MESSAGE', 'Message');
define('_ADSLIGHT_REPLIED_ON', 'Envoyer le:');
define('_ADSLIGHT_VIEWNOW', ' Lus');
define('_ADSLIGHT_REPLY_TITLE', 'Messages reÃ§us pour l&acute;annonce :');
define('_ADSLIGHT_ALL_USER_LISTINGS', 'Toutes les annonces de ');
define('_ADSLIGHT_REPLY', 'R&eacute;pondre -');
define('_ADSLIGHT_PAGES', 'Page -');
define('_ADSLIGHT_REALNAME', 'Nom');
define('_ADSLIGHT_VIEW_YOUR_LISTINGS', 'Voir vos annonces');
define('_ADSLIGHT_REPLIED_BY', 'Message de:');
define('_ADSLIGHT_DELETE_REPLY', 'Supprimer cette r&eacute;ponse');
define('_ADSLIGHT_NO_REPLIES', 'Il n&acute;y a pas de r&eacute;ponse');
define('_ADSLIGHT_THANKS', 'Merci d&acute;utiliser nos service de petites annonces');
define('_ADSLIGHT_WEBMASTER', 'Webmaster');
define('_ADSLIGHT_YOUR_AD', 'Votre annonce');
define('_ADSLIGHT_AT', '&Agrave;');
define('_ADSLIGHT_VEDIT_AD', 'Voir ou modifier votre annonce ici');
define('_ADSLIGHT_ALMOST', 'Votre annonce est sur le point d&acute;expirer');
define('_ADSLIGHT_EXPIRED', 'Votre annonce a expir&eacute; et a &eacute;t&eacute; supprim&eacute;e.');
define('_ADSLIGHT_YOUR_AD_ON', 'Votre annonce sur');
define('_ADSLIGHT_VU', 'Votre annonce a &eacute;t&eacute; vue');
define('_ADSLIGHT_TIMES', 'Fois.');
define('_ADSLIGHT_STOP', 'Votre annonce a expir&eacute;');
define('_ADSLIGHT_SOON', 'votre annonce va bient&ocirc;t prendre fin.');
define('_ADSLIGHT_MUSTLOGIN', 'Vous devez &ecirc;tre connect&eacute; pour<br />r&eacute;pondre &agrave; cette annonce.');
define('_ADSLIGHT_VIEW_AD', 'Votre annonce &agrave; voir');
define('_ADSLIGHT_MORE_PHOTOS', 'Voir plus de photos');
define('_ADSLIGHT_CANCEL', 'Annuler');
define('_ADSLIGHT_ADDED_TO_CAT','Une nouvelle annonce a &eacute;t&eacute; ajout&eacute;e &agrave; la cat&eacute;gorie ');
define('_ADSLIGHT_RECIEVING_NOTIF','Vous avez souscrit &agrave; recevoir des notifications de ce genre.');
define('_ADSLIGHT_ERROR_NOTIF','S&acute;il s&acute;agit d&acute;une erreur ou si vous souhaitez ne plus recevoir ces notifications, s&acute;il vous pla&icirc;t mettez &agrave; jour votre abonnement en visitant le lien ci-dessous:');
define('_ADSLIGHT_FOLLOW_LINK','Voici un lien vers la nouvelle annonce');
define('_ADSLIGHT_YOU_CAN_VIEW_BELOW', 'Vous pouvez voir l&acute;annonce compl&egrave;te sur le lien ci-dessous');
define('_ADSLIGHT_LISTING_NUMBER','Annonce N&deg; ');

define('_ADSLIGHT_NOREPLY','!!!  Ne r&eacute;pondez pas &agrave; cet e-mail, vous ne recevrez pas de r&eacute;ponse.  !!!');
define('_ADSLIGHT_CAPTCHA','Security Code :');

define('_ADSLIGHT_NEW_WAITING_SUBJECT','Nouvelle annonce En attente d&acute;approbation.');
define('_ADSLIGHT_NEW_WAITING','Il y a une nouvelle annonce en attente d&acute;&ecirc;tre mod&eacute;r&eacute;.');
define('_ADSLIGHT_PLEASE_CHECK','S&acute;il vous pla&icirc;t cliquez sur l&acute;URL ci-dessous pour v&eacute;rifier cette annonce.');
define('_ADSLIGHT_ADMIN','Administrateur');
define('_ADSLIGHT_NEWAD','La nouvelle annonce est ci-dessous.');
define('_ADSLIGHT_NEED_TO_LOGIN','Vous aurez besoin d&acute;&ecirc;tre connect&eacute;');


////AJOUTER PAR ILUC////
define('_ADSLIGHT_PROFILE','Profile de: ');
define('_ADSLIGHT_MI_ADSLIGHT_SMENU1','Vos annonces');
define('_ADSLIGHT_MI_ADSLIGHT_SMENU2','Soumettre');
define('_ADSLIGHT_MI_ADSLIGHT_SMENU3','Recherche');

//viewads.php
define('_ADSLIGHT_ALERTEABUS','Signaler un Abus');
define('_ADSLIGHT_CONTACT_SUBMITTER','Contacter');
define('_ADSLIGHT_SENDFRIENDS', 'Envoyer cette annonce');

//report-abuse.php
define('_ADSLIGHT_REPORTSENDTO', '<strong>Signaler cette annonce:</strong><br /><br />Annonce n&deg; ');
define('_ADSLIGHT_REPORTANNSEND', 'Merci pour votre aide !!<br />La petite annonce viens d&acute;&ecirc;tre signal&eacute;e &agrave; un Admin.');
define('_ADSLIGHT_REPORTSUBJET', '[Alerte] Une annonce indésirable sur ');
define('_ADSLIGHT_REPORTMESSAGE', 'Estime que cette annonce est ill&eacute;gale et a tenu &agrave; vous le signaler.');

//index.php >> Infos Bulle //
define('_ADSLIGHT_ADD_LISTING_BULL', 'Pour ajouter une annonce<br />Merci de ');
define('_ADSLIGHT_ADD_LISTING_SUB', 'vous inscrire');
define('_ADSLIGHT_ADD_LISTING_BULLOK', 'Vous pouvez ajouter une ou des<br />annonces: ');
define('_ADSLIGHT_ADD_LISTING_SUBOK', 'Cliquez ici');


//index.php >> Title Menu //
define('_ADSLIGHT_ADD_TITLEMENU1', 'Modifier/supprim&eacute;s vos annonces, ou aussi en signal&eacute;s comme &eacute;tant [r&eacute;serv&eacute;]...');
define('_ADSLIGHT_ADD_TITLEMENU2', 'Ajouter une annonce, vous pouvez sinon naviguer dans les cat&eacute;gories.');
define('_ADSLIGHT_ADD_TITLEMENU4', 'Tous les conseils pratiques pour bien r&eacute;diger vos annonces.');
define('_ADSLIGHT_ADD_TITLEMENU5', 'Effectuer une recherche cibl&eacute;, ou une recherche dans votre r&eacute;gion.');
define('_ADSLIGHT_ADD_TITLEMENU6', 'Lire et envoyer des messages.');
define('_ADSLIGHT_ADD_TITLEMENU7', 'Vous avez un/des nouveaux messages.');
define('_ADSLIGHT_ADD_TITLEMENU8', 'Vous devez &ecirc;tre connect&eacute; pour lire vos messages.');
define('_ADSLIGHT_ADD_TITLEMENU9', 'Vous devez &ecirc;tre connect&eacute; pour voir votre profil.');
define('_ADSLIGHT_ADD_TITLEMENU10', 'voir ou modifier ici votre profil.');

//viewcats.php >> Infos Bulle //
define('_ADSLIGHT_ADD_LISTING_BULLCATS', 'Vous pouvez ajouter une ou des<br />annonces dans cette cat&eacute;gorie<br />');
define('_ADSLIGHT_ADD_LISTING_BULLCATSOK', 'Pour pouvoir ajouter une ou des<br />annonces dans cette cat&eacute;gorie<br />Merci de ');

// tips_writing_ad.php
define('_ADSLIGHT_TIPSWRITE', 'Tous les bons conseils<br />pour bien r&eacute;diger vos annonces');
define('_ADSLIGHT_TIPSWRITE_TITLE', 'Les Conseils pour bien r&eacute;diger votre annonce');

define('_ADSLIGHT_TIPSWRITE_TEXT', '<strong>1. Une ou des photos</strong><br /><br />Le premier contact qu&rsquo;auront les visiteurs avec votre annonce, va &ecirc;tre une ou des photos de l&acute;objet que vous allez vendre.<br />Il est vivement conseill&eacute; de mettre une ou des photos de votre objet.<br />Une petite annonce avec photo est 7 fois plus consult&eacute;e qu&rsquo;une annonce sans photo ! <br />Elle donne aussi une premi&egrave;re id&eacute;e de l&rsquo;&eacute;tat de votre objet.<br /><br /><br />- Un objet propre est toujours plus attrayante.<br />- Soignez la qualit&eacute; de la photo. (Pas trop sombre)<br />- Cadrez l&acute;objet de sorte qu&rsquo;il soit visible. <br />- &Eacute;vitez les photos &lsquo;floues&rsquo;<br /><br /><strong>2. Claire et d&eacute;taill&eacute;e</strong><br /><br />Apr&egrave;s avoir soigneusement pr&eacute;par&eacute; les photos de l&acute;objet que vous allez vendre. <br />Il vous faut maintenant r&eacute;diger l&rsquo;annonce.<br /><br />- &Eacute;vitez le langage &laquo; SMS &raquo;, il est imp&eacute;ratif que l&rsquo;annonce soit facilement lisible.<br />Sans cela, vous perdez des chances de vendre votre pi&egrave;ce d&eacute;tach&eacute;e.<br /><br />- Le titre en majuscules ainsi que toute l&rsquo;annonce &eacute;crite en majuscules, <br />est vivement d&eacute;conseiller.<br /><br />- Les superlatifs sont &agrave; &eacute;viter.<br /><br />- &Eacute;crivez tous les d&eacute;tails et faites en sorte que les visiteurs puissent au mieux identifier votre Objet.<br />Sans cela ils vous contacteront par mail ou t&eacute;l&eacute;phone pour vous demander. (Perte de temps pour vous et l&rsquo;acheteur) <br /><br />- &Eacute;vitez d&rsquo;&eacute;crire un roman, cela doit rester une annonce.<br /><br />- Le visiteur doit pouvoir obtenir un maximum d&rsquo;infos lors de la lecture de votre annonce, et cela rapidement. <br /><br />Plus une annonce est claire et pr&eacute;cise, plus elle a de chance d&acute;aboutir &agrave; une transaction.<br /><br /><strong>Et n&acute;oubliez pas, une bonne affaire, <br />c&acute;est lorsque l&rsquo;acheteur et le vendeur y trouvent leur bonheur!</strong>');

//version 1.053
// maps.php
define('_ADSLIGHT_MAPS_TITLE', 'Recherche par r&eacute;gions');
define('_ADSLIGHT_MAPS_TEXT', 'S&eacute;lectionnez une r&eacute;gion sur la carte<br />pour voir les annonces d&acute;une r&eacute;gion.');

//viewads.php
define('_ADSLIGHT_NOCLAS', 'Il n&acute;y a actuellement aucune annonce<br />dans cette cat&eacute;gorie...');

//version 1.063
// viawcats.php

define('_ADSLIGHT_ADD_LISTING_NOTADDSINTHISCAT', 'Il n&acute;y a pas d&acute;annonces dans cette cat&#233;gorie.<br />');
define('_ADSLIGHT_ADD_LISTING_NOTADDSSUBMIT', 'Ajouter une annonce');

//version 1.064
define('_ADSLIGHT_CATPLUS', '<br />&#187;&nbsp;Plus ...');

/* AdsLight 2 */
define('_ADSLIGHT_RESERVED', 'Cette petite annonce est:<br /><font color="red"><strong>[R&eacute;serv&eacute;]</strong></font>');
define('_ADSLIGHT_RESERVEDMEMBER', '<strong>Statut:</strong> <font color="red"><strong>[R&eacute;serv&eacute;]</strong></font>');

// Xpayment //
define("_MN_ADSLIGHT_PURCHASE", "Achat imm&#233;diat");
define('_MN_ADSLIGHT_YOURNAME', 'Etablir la facture &#224; :');
define('_MN_ADSLIGHT_YOUREMAIL', 'Email de facturation:');

?>