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

// The name of this module
define("_MI_ADSLIGHT_NAME ","Marktplaats");
define("_MI_ADSLIGHT_MENUADD","Advertentie toevoegen");

// A brief description of this module
define("_MI_ADSLIGHT_DESC","Advertentie Module");

// Names of blocks for this module (Not all module has blocks)
define("_MI_ADSLIGHT_BNAME1","Recente advertenties");
define("_MI_ADSLIGHT_BNAME1_DESC","Recente advertentielijst");
define("_MI_ADSLIGHT_BNAME2","Top Advertenties");
define("_MI_ADSLIGHT_BNAME2_DESC","Top Advertentielijst");

// Names of admin menu items
define("_MI_ADSLIGHT_ADMENU0", "Hoofdmenu");
define("_MI_ADSLIGHT_ADMENU1", "Categorie beheer");
define("_MI_ADSLIGHT_ADMENU2", "Rechten");
define("_MI_ADSLIGHT_ADMENU3", "Blokken");
define("_MI_ADSLIGHT_ADMENU4", "Voorkeuren");
define("_MI_ADSLIGHT_ADMENU5", "Opties");
define("_MI_ADSLIGHT_ADMENU6", "Importeren");
define("_MI_ADSLIGHT_ADMENU7", "Over");
define("_MI_ADSLIGHT_ADMENU8", "Documenten");
define("_MI_ADSLIGHT_ADMENU9", "ga naar de module");
define("_MI_ADSLIGHT_ADMENU10", "Updated");
define("_MI_ADSLIGHT_ADMENU11", "Support Forum");


define("_MI_ADSLIGHT_CONFSAVE","Configuratie bewaard");
define("_MI_ADSLIGHT_CANPOST","Annonieme gebruikers kunnen advertenties plaatsen :");
define("_MI_ADSLIGHT_PERPAGE","Advertenties per pagina :");
define("_MI_ADSLIGHT_RES_PERPAGE","Resumes per page :");
define("_MI_ADSLIGHT_MONEY","Valuta symbool :");
define("_MI_ADSLIGHT_KOIVI","Gebruik Koivi Editor :");
define("_MI_ADSLIGHT_NUMNEW","Aantal nieuwe advertenties :");
define("_MI_ADSLIGHT_MODERAT","Bewerk advertentie :");
define("_MI_ADSLIGHT_DAYS","Looptijd van de advertentie :");
define("_MI_ADSLIGHT_MAXIIMGS","Maximaal afbeeldingsformaat :");
define("_MI_ADSLIGHT_MAXWIDE","Maximum afbeeldingsbreedte :");
define("_MI_ADSLIGHT_MAXHIGH","Maximum afbeeldingshoogte :");
define("_MI_ADSLIGHT_INBYTES","in bytes");
define("_MI_ADSLIGHT_INPIXEL","in pixels");
define("_MI_ADSLIGHT_INDAYS","in dagen");
define("_MI_ADSLIGHT_MUSTLOGIN","Sta annonieme gebruikers toe om op advertenties te reageren.");
define("_MI_ADSLIGHT_THRUMAIL","Gebruik het e-mail formulier (ivm spam is nee aanbevolen.)");
define("_MI_ADSLIGHT_TYPEBLOC","Type blok :");
define("_MI_ADSLIGHT_JOBRAND","Willekeurige advertenties");
define("_MI_ADSLIGHT_LASTTEN","Laatste 10 advertenties");
define("_MI_ADSLIGHT_NEWTIME","Nieuwe advertenties van :");
define("_MI_ADSLIGHT_DISPLPRICE","Laat de prijs zien :");
define("_MI_ADSLIGHT_DISPLPRICE2","Laat de prijs zien :");
define("_MI_ADSLIGHT_INTHISCAT","in deze categorie");
define("_MI_ADSLIGHT_DISPLSUBCAT","Toon subcategorieen :");
define("_MI_ADSLIGHT_ONHOME","op de voor Page van Module");
define("_MI_ADSLIGHT_NBDISPLSUBCAT","Aantal subcategorieen tonen :");
define("_MI_ADSLIGHT_IF","als");
define("_MI_ADSLIGHT_ISAT","is op");
define("_MI_ADSLIGHT_VIEWNEWCLASS","Toon nieuwe advertenties :");
define("_MI_ADSLIGHT_ORDREALPHA","Sorteer alfabetisch");
define("_MI_ADSLIGHT_ORDREPERSO","persoonlijke Volgorde");
define("_MI_ADSLIGHT_CSORT_ORDER","Category Default Sort Order");
define("_MI_ADSLIGHT_LSORT_ORDER","Standaard volgorde");
define("_MI_ADSLIGHT_ORDER_TITLE","Sorteer op titel");
define("_MI_ADSLIGHT_ORDER_PRICE","Sorteer op prijs");
define("_MI_ADSLIGHT_ORDER_DATE","Sorteer op datum (standaard)");
define("_MI_ADSLIGHT_ORDER_POP","Sorteer op hits");
define("_MI_ADSLIGHT_DBUPDATED", 'De database is geupdated.');
define("_MI_ADSLIGHT_GPERM_G_ADD" , "Kan toevoegen" ) ;
define("_MI_ADSLIGHT_CAT2GROUPDESC" , "Comtroleer categorieen waar je toegang toe hebt" ) ;
define("_MI_ADSLIGHT_GROUPPERMDESC" , "Selecteer group(en) welke advertenties mogen toevoegen." ) ;
define("_MI_ADSLIGHT_GROUPPERM", "Verzend rechten");
define("_MI_ADSLIGHT_SUBMITFORM", "Advertentie verzend rechten");
define("_MI_ADSLIGHT_SUBMITFORM_DESC", "Selecteer wie advertienties kunnen toevoegen");
define("_MI_ADSLIGHT_VIEWFORM", "Bekijk advertentierechten");
define("_MI_ADSLIGHT_VIEWFORM_DESC", "Select, wie advertenties kan bekijken");
define("_MI_ADSLIGHT_VIEW_RESUMEFORM_DESC", "Selecteer wie verlengde advertenties kan bekijken");
define("_MI_ADSLIGHT_SUPPORT", "Ondersteun this software");
define("_MI_ADSLIGHT_OP", "Lees mijn opinie");
define("_MI_ADSLIGHT_PREMIUM", "Advertentie Premium");
define("_MI_ADSLIGHT_PREMIUM_DESC", "Wie mag het aantal 'te tonen' dagen wijzigen?");

define("_MI_ADSLIGHT_CATEGORY_NOTIFY", 'Categorie'); 
define("_MI_ADSLIGHT_CATEGORY_NOTIFYDSC", 'Notificatie opties welke betrekking hebben op de huidige categorie.');
define("_MI_ADSLIGHT_NOTIFY", "Advertenties"); 
define("_MI_ADSLIGHT_NOTIFYDSC", 'Notificatie opties welke betrekking hebben op de huidige advertentie.');	
define("_MI_ADSLIGHT_GLOBAL_NOTIFY", 'Gehele module ');
define("_MI_ADSLIGHT_GLOBAL_NOTIFYDSC", 'Globale notificatie opties.');
define("_MI_ADSLIGHT_NEWPOST_NOTIFY", 'Nieuwe advertenties');
define("_MI_ADSLIGHT_NEWPOST_NOTIFYCAP", 'Meld mij als er nieuwe advertenties in deze categorie zijn.');
define("_MI_ADSLIGHT_NEWPOST_NOTIFYDSC", 'Ontvang een melding als er een nieuwe advertentie in deze categorie staat.');
define("_MI_ADSLIGHT_NEWPOST_NOTIFYSBJ", '[{X_SITENAME}] {X_MODULE}: Automatisch bericht : Nieuwe advertentie in categorie');
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFY", 'Nieuwe advertenties');
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYCAP", 'Meld mij als er nieuwe advertenties in deze categorie zijn.');
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYDSC", 'Ontvang een melding als er een nieuwe advertentie in deze categorie staat.');
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYSBJ", '[{X_SITENAME}] {X_MODULE}: Automatisch bericht : Nieuwe advertentie in categorie');
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFY", 'Advertentie geupdated');
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYCAP", 'Ontvang een melding als er een nieuwe advertentie in deze categorie staat.');
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYDSC", 'Ontvang een melding als er een nieuwe advertentie in deze categorie staat.');
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYSBJ", '[{X_SITENAME}] {X_MODULE}: Automatisch bericht : Nieuwe advertentie in categorie');
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFY", 'Advertentie verwijderd');
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYCAP", 'Ontvang een melding als er een nieuwe advertentie in deze categorie staat.');
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYDSC", 'Ontvang een melding als er een nieuwe advertentie in deze categorie staat.');
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYSBJ", '[{X_SITENAME}] {X_MODULE}: Automatisch bericht : Nieuwe advertentie in categorie');
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFY", 'Nieuwe advertentie');
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYCAP", 'Ontvang een melding als er een nieuwe advertentie geplaatst wordt.');
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYDSC", 'Ontvang een melding als er een nieuwe advertentie geplaatst wordt.');
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYSBJ", '[{X_SITENAME}] {X_MODULE}: Automatisch bericht : Nieuwe advertentie in categorie');
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFY", 'Nieuwe advertentie');
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYCAP", 'Ontvang een melding als er een nieuwe advertentie geplaatst wordt.');
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYDSC", 'Ontvang een melding als er een nieuwe advertentie geplaatst wordt.');
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYSBJ", '[{X_SITENAME}] {X_MODULE}: Automatisch bericht : Nieuwe advertentie in categorie');
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFY", 'Advertentie gewijzigd');
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYCAP", 'Ontvang een melding als er een  advertentie bewerkt wordt.');
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYDSC", 'Ontvang een melding als er een advertentie bewerkt wordt.');
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYSBJ", '[{X_SITENAME}] {X_MODULE}: auto-notify : Advertentie bewerkt in categorie');
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFY", 'Advertentie verwijderd');
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYCAP", 'Ontvang een bericht als er een advertentie verwijderd wordt.');
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYDSC", 'Ontvang een bericht als er een advertentie verwijderd wordt.');
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYSBJ", '[{X_SITENAME}] {X_MODULE}: automatisch bericht : Advertentie verwijderd in categorie');
define("_MI_ADSLIGHT_RATE_USER","Gebruikers kunnen verkopers beoordelen");
define("_MI_ADSLIGHT_RATE_ITEM","Gebruikers kunnen voorwerpen beoordelen");
define("_MI_ADSLIGHT_DIFF_NAME","Gebruikers kunnen een andere naam gebruiken");
define("_MI_ADSLIGHT_DIFF_EMAIL","Gebruikers kunnen een ander e-mail adres opgeven");
define("_MI_ADSLIGHT_NOT_PREMIUM","Aantal afbeeldingen - Niet Premium");
define("_MI_ADSLIGHT_NOT_PREMIUM_DESC" ,"Aantal afbeeldingen welke een standaard gebruiker mag gebruiken");
define("_MI_ADSLIGHT_NUMBPICT_TITLE","Aantal afbeeldingen - Premium");
define("_MI_ADSLIGHT_NUMBPICT_DESC" ,"Aantal afbeeldingen welke een Premium gebruiker mag gebruiken.");
define("_MI_ADSLIGHT_SMNAME1" ,"Verzend");
define("_MI_ADSLIGHT_THUMW_TITLE" , "Thumb breedte");
define("_MI_ADSLIGHT_THUMBW_DESC" , "Thumbnailn breedte in pixels<br />Dit betekent dat de thumbnail <br />minimaal deze breedte moet hebben<br />De verhoudingen blijven behouden");
define("_MI_ADSLIGHT_THUMBH_TITLE" , "Thumb Hoogte");
define("_MI_ADSLIGHT_THUMBH_DESC" , "Thumbnailn hoogte in pixels<br />>Dit betekent dat de thumbnail <br />minimaal deze hoogte moet hebben<br />De verhoudingen blijven behouden");
define("_MI_ADSLIGHT_RESIZEDW_TITLE" , "aangepaste afbeeldings breedte");
define("_MI_ADSLIGHT_RESIZEDW_DESC" , "Aangepaste afbeeldingsbreedte in pixels<br />Dit betekent dat de afbeelding <br />minimaal deze breedte moet hebben<br />De verhoudingen blijven behouden<br /> Het orgineel zal als deze grootte overschrijd<br /> worden aangepast.");
define("_MI_ADSLIGHT_RESIZEDH_TITLE" , "Aangepaste afbeeldings hoogte");
define("_MI_ADSLIGHT_RESIZEDH_DESC" , "Aangepaste afbeeldingshoogte in pixels<br />Dit betekent dat de afbeeldinge<br />minimaal deze hoogte moet hebbent<br />De verhoudingen blijven behouden<br /> Het orgineel zal als deze grootte overschrijd<br /> worden aangepast.");
define("_MI_ADSLIGHT_ORIGW_TITLE" , "Maximum orgineel afbeeldings breedte");
define("_MI_ADSLIGHT_ORIGW_DESC" , "Maximaal orgineel afbeeldings breedte in pixels<br />Betekent dat het orgineel deze breedte <br />niet mag overschrijven<br />anders zal deze niet worden geuploaded");
define("_MI_ADSLIGHT_ORIGH_TITLE" , "Maximum orgineel afbeeldings hoogte");
define("_MI_ADSLIGHT_ORIGH_DESC" , "Maximaal orgineel afbeeldings hoogte in pixels<br />Betekent dat het orgineel deze hoogte <br />niet mag overschrijven<br />anders zal deze niet worden geuploaded");
define("_MI_ADSLIGHT_UPLOAD_TITLE" , "Uploads pad");
define("_MI_ADSLIGHT_UPLOAD_DESC" , "Pad naar uw uploads directory<br />in linux  /var/www/uploads<br />in windows  C:/Program Files/www");
define("_MI_ADSLIGHT_LINKUPLOAD_TI","Link naar uw uploads directory");
define("_MI_ADSLIGHT_LINKUPLOAD_DE","Dit is het adres naat de map van uw uploads <br />bv. http://www.yoursite.com/uploads");
define("_MI_ADSLIGHT_MAXFILEBYTES_T","Max grootte in bytes");
define("_MI_ADSLIGHT_MAXFILEBYTES_D","This the maximum size a file of your pictue can have in bytes <br />like 512000 for 500 KB");
define("_MI_ADSLIGHT_EDITOR","Gebruik editor:");
define("_MI_ADSLIGHT_LIST_EDITORS","Selecteer de toegewezen editor.");
define("_MI_ADSLIGHT_LIGHTBOX","Lightbox effecten");
define("_MI_ADSLIGHT_LIGHTBOX_DESC","Gebruik het lightbox effects voor het bekijken van fotos.");
define("_MI_ADSLIGHT_USE_COUNTRY" ,"Gebruik het land veld");
define("_MI_ADSLIGHT_USE_COUNTRY_DESC" ,"Als 'Nee' het uw land veld zal niet getoond worden");
define("_MI_ADSLIGHT_SOLD_DAYS","Listing Duration after marked Sold");
define("_MI_ADSLIGHT_SOLDINDAYS","in days");
define("_MI_ADSLIGHT_ALMOST","When to send notice that the ad is about to expire");
define("_MI_ADSLIGHT_ALMOST_DESC","in days");
define("_MI_ADSLIGHT_MAIN_CAT","Allow users to add listings in the main categories");
define("_MI_ADSLIGHT_MAIN_CAT_DESC","or just allow adding listings in sub-categoreies");
define("_MI_ADSLIGHT_ADMIN_EDITOR","Editor to use for admin:");
define("_MI_ADSLIGHT_LIST_ADMIN_EDITORS","Select the editor to use on the admin side.");
define("_MI_ADSLIGHT_CAT_DESC", "Category Description");
define("_MI_ADSLIGHT_DESC_CAT_DESC", "Add a description for each category.");
define("_MI_ADSLIGHT_MUST_ADD_CAT","You must add a category first.");
define("_MI_ADSLIGHT_BNAME3","Recent Listings w/Photo");
define("_MI_ADSLIGHT_BNAME3_DESC","Recent Listings w/Photo Block");
define("_MI_ADSLIGHT_BNAME4","Top Listings w/Photo");
define("_MI_ADSLIGHT_BNAME4_DESC","Top Listings w/Photo Block");
define("_MI_ADSLIGHT_USE_CAPTCHA" ,"Gebruik Captcha");

// Menu AdsLight
define("_MI_ADSLIGHT_SMENU1","Uw advertenties");
define("_MI_ADSLIGHT_SMENU2","Verzend");
define("_MI_ADSLIGHT_SMENU3","Zoek"); 

// support.php 
define("_MI_ADSLIGHT_SUPPORT01", " If you wish to suggest an improvement:<br /><br />- A correction<br />- A translation<br />- A suggestion<br />- Report a Bug<br />");
define("_MI_ADSLIGHT_SUPPORT02", "Join us at the Support Forum AdsLight");
define("_MI_ADSLIGHT_SUPPORT03", "> Support Forum AdsLight <");

// Bloc Carte de France
define("_MI_ADSLIGHT_MAPFRANCE", "Map of France");
define("_MI_ADSLIGHT_MAPFRANCE_DESC", "In your area");

// Bloc Ajouter une annonce
define("_MI_ADSLIGHT_ADDMENU", "Add Ad");
define("_MI_ADSLIGHT_ADDMENU_DESC", "Menu");

// version Adslight 1.0.2
// Active RewriteUrl
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL" ,"Enable URL Rewrite");
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL_DESC" ,"Enable URL rewriting for a better ranking.<br/>To install the rewrite, thank you to read the file README.txt");

// Activer thumbs_index
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX" ,"Enable Snapshot page index");
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX_DESC" ,"Enable the display of thumbnail images to homepage<br/>If it is off an icon <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> indicates whether or not there is a picture in the ad.");

// Activer thumbs_cats
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS" ,"Enable Snapshot in categories");
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS_DESC" ,"Enable the display of thumbnail pictures in the categories<br/>If it is off an icon <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> indicates whether or not there is a picture in the ad.");

// Code Adscence index
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE","Code aanvullende startpagina");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_DESC","Zet uw AdSense-code of andere even");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE","Gebruik aanvullende code naar de homepage");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE_DESC","Plaats de aanvullende code tussen de aanbiedingen<br />op de homepage en de categorie-pagina.<br /><br />Banners, Adsense-code, enz. ...");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE","Plaats waar de code wordt weergegeven in de lijst");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE_DESC","Ex. Als u kiest voor 4 Er worden 3 voorstellen voordat deze code. <br /> De code wordt weergegeven in 4de positie.");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER","Gebruik code banner Xoops");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER_DESC","stelt u in staat in te voegen tussen de banners Xoops voorstellen. <br /> Als u Ja kiest <br /> NO insert code hier");

// Version 1.0.5
// Code Adscence Catégories
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE", "Pub-code op de pagina's categorie&#235;n");
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE_DESC", "Google adsence code of code van een banner:<br/>Formaat: breedte = 300 hoogte = 250");

// adslight_theme_set
define("_MI_ADSLIGHT_THEMESET", "Template keuze");

// Méta Description / keywords Categories
define("_MI_ADSLIGHT_CAT_META","sta meta tags toe, Meta keywords categorieen?");
define("_MI_ADSLIGHT_CAT_META_DESCRIPTION","Als u deze optie op 'Ja' zet,<br/> 
kunt u voor elke categorie meta gegevens meegeven<br/>( Aanbevolen voor een betere ranking. )");

// tips_writing_ad.php
define("_MI_ADSLIGHT_USE_TIPS_WRITE", "Aanpassen pagina info / advies?");
define("_MI_ADSLIGHT_USEDESC_TIPS_WRITE", "Als u ja, kunt u schrijven onder de titel en de tekst van de pagina info / advies");
define("_MI_ADSLIGHT_TITLE_TIPS_WRITE", "Titel pagina info / advies");
define("_MI_ADSLIGHT_TITLEDESC_TIPS_WRITE", "Schrijf hier de titel die zal verschijnen op de pagina info / advies");
define("_MI_ADSLIGHT_TEXT_TIPS_WRITE", "Tekst van de pagina info / advies");
define("_MI_ADSLIGHT_TEXTDESC_TIPS_WRITE", "Schrijf hier de tekst weergegeven op de pagina info / advies");

// Version 1.0.53
// adslight_maps
define("_MI_ADSLIGHT_MAPSSET", "Selecteer de kaart uit uw land");
define("_MI_ADSLIGHT_MAPSSET_DESC", "Wilt u de kaart van uw land te cre&#235;ren.<br />Dank u voor de module docs te lezen.");
define("_MI_ADSLIGHT_MAPSW_TITLE", "Breedte kaart");
define("_MI_ADSLIGHT_MAPSH_TITLE", "Hoogte kaart");


?>