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

define("_AM_ADSLIGHT_CONF","Advertentie configuratie");
define("_AM_ADSLIGHT_ADDON","Toevoeging");
define("_AM_ADSLIGHT_ANNDEL","De geselecteerde advertentie is verwijderd");
define("_AM_ADSLIGHT_ADDCATPRINC","Nieuwe categorie toevoegen");
define("_AM_ADSLIGHT_CATNAME","Naam :");
define("_AM_ADSLIGHT_ADDSUBCAT","Verwijder categorie");
define("_AM_ADSLIGHT_DELSUBCAT", "Verwijder subcategorie");
define("_AM_ADSLIGHT_MODIFSUBCAT", "Bewerk een categorie");
define("_AM_ADSLIGHT_ADD","Voeg toe");
define("_AM_ADSLIGHT_CATDEL","De geselecteerde categorie is verwijderd");
define("_AM_ADSLIGHT_OUI","Ja");
define("_AM_ADSLIGHT_NON","Nee");
define("_AM_ADSLIGHT_SURDELCAT","LET OP!: weet u zeker dat u deze categorie en alle onderliggende onderdelen wilt verwijderen?");
define("_AM_ADSLIGHT_IN","in");
define("_AM_ADSLIGHT_MODIF","Bewerk");
define("_AM_ADSLIGHT_MODIFCAT","Bewerk een categorie");
define("_AM_ADSLIGHT_CAT","Categorie :");
define("_AM_ADSLIGHT_SUBCAT","Subcategorie :");
define("_AM_ADSLIGHT_CONFMYA","Advertentie configuratie");
define("_AM_ADSLIGHT_CATADD","Categorie toegevoegd");
define("_AM_ADSLIGHT_SUBCATADD","Subcategorie toegevoegd");
define("_AM_ADSLIGHT_ANNMOD","Advertentie is veranderd");
define("_AM_ADSLIGHT_NOANNVAL","op dit moment wachten er geen advertenties op goedkeuring");
define("_AM_ADSLIGHT_NOMODACTIV","Moderatie is niet actief, geen advertenties om goed te keuren.");
define("_AM_ADSLIGHT_MODANN","Verander de advertentie");
define("_AM_ADSLIGHT_ALLMODANN","(Alle advertenties kunnen aangepast worden door een admin.)");
define("_AM_ADSLIGHT_HELLO","Hallo ");
define("_AM_ADSLIGHT_ANNVALID","Advertentie is goedgekeurd");
define("_AM_ADSLIGHT_DEL","Verwijder");
define("_AM_ADSLIGHT_SAVMOD","Bewaar uw veranderingen");
define("_AM_ADSLIGHT_MODTYPE","Verander advertentie type");
define("_AM_ADSLIGHT_ANNACCEPT","uw advertentie is goedgekeurd");
define("_AM_ADSLIGHT_CONSULTTO","Neemt u contact op met :");
define("_AM_ADSLIGHT_THANK","Dank u");
define("_AM_ADSLIGHT_TEAMOF","Team");
define("_AM_ADSLIGHT_RETURN","Vorige");
define("_AM_ADSLIGHT_MODSUBCAT","Verander subcategorie naam");
define("_AM_ADSLIGHT_MODCAT","Verander hoofd categorie naam");
define("_AM_ADSLIGHT_GO","Doen");
define("_AM_ADSLIGHT_SENDBY","Toegevoegd door :");
define("_AM_ADSLIGHT_EMAIL","Email :");
define("_AM_ADSLIGHT_TEL","Telefoon :");
define("_AM_ADSLIGHT_TOWN","Woonplaats :");
define("_AM_ADSLIGHT_COUNTRY","Land :");
define("_AM_ADSLIGHT_TITLE2","Titel :");
define("_AM_ADSLIGHT_TYPE","Type :");
define("_AM_ADSLIGHT_PRICE2","Prijs :");
define("_AM_ADSLIGHT_CAT2","Categorie :");
define("_AM_ADSLIGHT_DESCRIPTION","Google adsence code of code van een banner:<br/>Formaat: breedte = 300 hoogte = 250");
define("_AM_ADSLIGHT_THEREIS","Er zijn ");
define("_AM_ADSLIGHT_WAIT","Advertenties wachtend op moderatie");
define("_AM_ADSLIGHT_ADDTYPE","Voeg advertentietype toe");
define("_AM_ADSLIGHT_ERRORTYPE","FOUT : type");
define("_AM_ADSLIGHT_EXIST","Bestaat al!");
define("_AM_ADSLIGHT_ERRORCAT","FOUT : Categorie");
define("_AM_ADSLIGHT_ERRORSUBCAT","FOUT : Subcategorie");
define("_AM_ADSLIGHT_TYPEMOD","Het advertentietype is veranderd");
define("_AM_ADSLIGHT_TYPEDEL","Het advertentietype is verwijderd");
define("_AM_ADSLIGHT_ADDTYPE2","Advertentietype toegevoegd");
define("_AM_ADSLIGHT_ACCESMYANN","Advertienties");
define("_AM_ADSLIGHT_IMGCAT","Afbeelding :");
define("_AM_ADSLIGHT_REPIMGCAT","Afbeelding directorie :");
define("_AM_ADSLIGHT_GESTCAT","Categorie Onderhoud");
define("_AM_ADSLIGHT_ADDPRICE","Voeg een prijs type toe");
define("_AM_ADSLIGHT_MODPRICE","Bewerk een prijs type");
define("_AM_ADSLIGHT_ADDPRICE2","Prijs type is toegevoegd");
define("_AM_ADSLIGHT_PRICEMOD","Prijs type is gewijzigd");
define("_AM_ADSLIGHT_PRICEDEL","Prijs type is verwijderd");
define("_AM_ADSLIGHT_ORDRE","Sorteren :");
define("_AM_ADSLIGHT_ORDRECLASS","Categorie Volgorde :");
define("_AM_ADSLIGHT_ORDREALPHA","Sorteer Alphabetisch");
define("_AM_ADSLIGHT_ORDREPERSO","Persoonlijke volgorde");
define("_AM_ADSLIGHT_BIGCAT","Hoofd Categorie");
define("_AM_ADSLIGHT_HELP1","<b>Voor het toevoegen van een categorie :</b> Klik op de afbeelding <img src=\"".XOOPS_URL."/modules/adslight/images/plus.gif\" border=0 width=10 height=10 alt=\"Voeg een categorie toe\"> alongside the category you want om een categorie toe te voegen.<p><b>Om een categorie te wijzigen of te verwijderen :</b> klik op de naam van de categorie");
define("_AM_ADSLIGHT_HELP2","<B>Cartegorie volgorde :</B> integer in brackets corresponds to the order within the superior category or of the principal category. Negative integers can be used.: -1");
	
// fichier pref.php //
define("_AM_ADSLIGHT_CONFSAVE","Configuratie bewaard");
define("_AM_ADSLIGHT_ANNOCANPOST","Anonieme gebruikers mogen een advertentie plaatsen :");
define("_AM_ADSLIGHT_PERPAGE","Advertenties per pagina :");
define("_AM_ADSLIGHT_MONEY","Huidig Symbool :");
define("_AM_ADSLIGHT_NUMNEW","Aantal nieuwe advertenties :");
define("_AM_ADSLIGHT_MODERAT","Modereer advertenties :");
define("_CAL_MAXIIMGS","Maximum foto grootte :");
define("_AM_ADSLIGHT_TIMEANN","Duur van de advertentie :");
define("_AM_ADSLIGHT_INOCTET","in bytes");
define("_AM_ADSLIGHT_INDAYS","in dagen");
define("_AM_ADSLIGHT_TYPEBLOC","Type Block :");
define("_AM_ADSLIGHT_ANNRAND","Willekeurige advertenties");
define("_AM_ADSLIGHT_LASTTEN","Laatste 10 advertenties");
define("_AM_ADSLIGHT_NEWTIME","Nieuwe advertenties van :");

define("_AM_ADSLIGHT_DISPLPRICE","Laat prijs zien :");
define("_AM_ADSLIGHT_DISPLPRICE2","Laat prijs zien :");
define("_AM_ADSLIGHT_INTHISCAT","in deze categorie");
define("_AM_ADSLIGHT_DISPLSUBCAT","Laat subcategorieen zien :");
define("_AM_ADSLIGHT_ONHOME","op de hoofdpagina van de module");
define("_AM_ADSLIGHT_NBDISPLSUBCAT","Aantal subcategorieen om te laten zien :");
define("_AM_ADSLIGHT_IF","Als");
define("_AM_ADSLIGHT_ISAT","is at");
define("_AM_ADSLIGHT_VIEWNEWCLASS","Laat nieuwe advertenties zien :");

define("_AM_ADSLIGHT_PERMADDNG", 'Kon niet toevoegen %s rechten aan %s voor groep %s');
define("_AM_ADSLIGHT_PERMADDOK",'Toegevoegd %s rechten aan %s voor groep %s');
define("_AM_ADSLIGHT_PERMRESETNG",'Kon de groeps rechten niet herstellen voor modulle %s');
define("_AM_ADSLIGHT_PERMADDNGP", 'Alle bovenliggende onderdelen moeten worden geselecteerd.');
define("_AM_ADSLIGHT_EXPIRE", 'Duur van tonen.');
define("_AM_ADSLIGHT_DBUPDATED", 'De database is ge-updated.');

define("_AM_ADSLIGHT_CONTACT_BY_EMAIL","E-mail");
define("_AM_ADSLIGHT_CONTACT_BY_PM","Prive bericht(PB)");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH","BoBeideth E-mail or PB");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE","Alleen via telefoon.");
define("_AM_ADSLIGHT_CONTACTBY","Contact via :");
define("_AM_ADSLIGHT_PREMIUM","Premium Lijst :");

define("_AM_ADSLIGHT_OK","Goedkeuren");
define("_AM_ADSLIGHT_CATSMOD","Categorie is aangepast");
define("_AM_ADSLIGHT_ADDED_ON"," Toegevoegd op ");
define("_AM_ADSLIGHT_NUMANN","Toevoeging nummer. :");

define("_AM_ADSLIGHT_ACTIVE","Actief");
define("_AM_ADSLIGHT_INACTIVE","Niet actief");
define("_AM_ADSLIGHT_SOLD","Gereserveerd");
define("_AM_ADSLIGHT_STATUS","Status");
define("_AM_ADSLIGHT_UPDATECOMPLETE","Update voltooid");
define("_AM_ADSLIGHT_UPDATEMODULE","<b>Update Module</b>");
define("_AM_ADSLIGHT_UPGRADEFAILED","Update fout");
define("_AM_ADSLIGHT_UPGRADEFAILED0","Update");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR","Toegangsfout");
define("_AM_ADSLIGHT_THANKS", "Dank u voor het gebruik van ons advertentiesysteem");
define("_AM_ADSLIGHT_WEBMASTER", "Webmaster");
define("_AM_ADSLIGHT_YOUR_AD", "Uw advertentie");
define("_AM_ADSLIGHT_AT","op");
define("_AM_ADSLIGHT_VEDIT_AD", "U kunt uw advertentie hier bekijken of bewerken");
define("_AM_ADSLIGHT_YOUR_AD_ON", "Uw advertentie op");
define("_AM_ADSLIGHT_APPROVED", "Is goedgekeurd.");
define("_AM_ADSLIGHT_EXPIRED", "is verlopen en verwijderd.");
define("_AM_ADSLIGHT_CHECKER", 'Directorie rechten controle');
define("_AM_ADSLIGHT_DIRPERMS", 'Wijzig directorie rechten naar schrijven ! => ');

define("_AM_ADSLIGHT_PHOTO1","Aantal foto's :");
define("_AM_ADSLIGHT_SUBMITTER","Toegevoegd door");
define("_AM_ADSLIGHT_NBR_PHOTO","foto(s)");
define("_AM_ADSLIGHT_TITLE","Titel");
define("_AM_ADSLIGHT_LID","ID");
define("_AM_ADSLIGHT_DATE","Datum toegevoegd");
define("_AM_ADSLIGHT_DESC","Description");

define("_AM_ADSLIGHT_FREECAT","Dit is een gratis categorie");
define("_AM_ADSLIGHT_MODERATE_CAT","Bewerk deze categorie");
define("_AM_ADSLIGHT_VISIT_LINK", "U kunt de volledige advertentie bekijken via de link hieronder:");
define("_AM_ADSLIGHT_LISTING_NUMBER", "toevoeging nummer ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW", "U kunt de volledige toevoeging bekijken via de link hieronder");
define("_AM_ADSLIGHT_NOREPLY","!!!  Beantwoord u deze email niet, deze zal namelijk niet beantwoord worden.  !!!");

define("_AM_ADSLIGHT_ADDED_TO_CAT","Er is een toevoeging gedaan in de categorie ");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","U heeft aangegeven op de hoogte gehouden te willen worden.");
define("_AM_ADSLIGHT_ERROR_NOTIF","Als dit een fout is, en u wilt, niet op de hoogte gehouden worden, verander deze dan door op de volgende link te klikken:");
define("_AM_ADSLIGHT_FOLLOW_LINK","Hier is de link naar de nieuwe toevoeging");
define("_AM_ADSLIGHT_CAPTCHA","Beveiligingscode :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","Bewerk subcategorieen van deze categorie");
define("_AM_ADSLIGHT_DOCUMENTATION","Documentatie");
define("_AM_ADSLIGHT_FEATURES","Features");
define("_AM_ADSLIGHT_CLONE","Hoe te klonen");
define("_AM_ADSLIGHT_INCOMPLETE","Niet compleet");

// Added by iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE", "Voeg een productstaat toe");
define("_AM_ADSLIGHT_MODUSURE", "Verander een productstaat");
define("_AM_ADSLIGHT_ADDUSURE2", "De productstaat is veranderd");
define("_AM_ADSLIGHT_USUREMOD", "De productstaat is veranderd");
define("_AM_ADSLIGHT_USUREDEL", "De productstaat is verwijderd");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","Auteur");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Veranderingen");
define("_AM_ADSLIGHT_ABOUT_CREDITS","met dank aan");
define("_AM_ADSLIGHT_ABOUT_LICENSE","Licentie");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","Informatie Module");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","Website ondersteuning");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","Publicatiedutum");
define("_AM_ADSLIGHT_ABOUT_STATUS","Status");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","Deze personen hebben medewerking verleend aan deze modulle");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","Bijnaam");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","Website");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","Versie");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","Overzicht");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Kan toevoegen" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "Controleer de categorieen waar u toegang toe zou moeten hebben" ) ;
define("_AM_ADSLIGHT_GROUPPERMDESC" , "Selecteer de groepen welke advertenties mogen ingeven." ) ;
define("_AM_ADSLIGHT_GROUPPERM", "Rechten om te versturen");
define("_AM_ADSLIGHT_SUBMITFORM", "Rechten om in te mogen sturen");
define("_AM_ADSLIGHT_SUBMITFORM_DESC", "Wie mogen advertenties bekijken?");
define("_AM_ADSLIGHT_VIEWFORM", "Rechten om advertenties te bekijken");
define("_AM_ADSLIGHT_VIEWFORM_DESC", "Select groups that can see listings");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC", "Wie mogen verlengde advertenties bekijken?");
define("_AM_ADSLIGHT_SUPPORT", "Ondersteun deze modulle");
define("_AM_ADSLIGHT_OP", "lees beoordelingen");
define("_AM_ADSLIGHT_PREMIUM_DESC", "Welke groep mag de advertentieduur aanpassen?");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK", "U gebruikt de laatste versie van deze modulle.");
define("_AM_ADSLIGHT_RELEASEISNOTOK", "Your module is verouderd, een nieuwe versie is beschikbaar.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD", "Download.");
define("_AM_ADSLIGHT_NBR_PHOTO","Foto(s)");

//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<b>Meta Omschrijving:</b><br/>Voor beter resultat,</b>geef hier een zin in. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<b>M&eacute;ta keywords:</b><br/>Voor betere SEO resultaten,</b>geef hier duidelijke steekwoorden over deze categorie..<br/><b><font color=\"#ff3300\">woorden gescheiden door een comma</font></b>. ( english, espagne, france,...)");

//Version 1.053
// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK", "The xml file for the card is absent, or else does not match the card selected in the preferences.");
define("_AM_ADSLIGHT_XMLUPGRADE", "Update xml");



//Version 1.054
// Support_forum.php
define("_AM_ADSLIGHT_SUPPORTFORUM_TITLE", "List Support forum");
define("_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS", "Link");
define("_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG", "Taal");
define("_AM_ADSLIGHT_SUPPORTFORUM_DESC", "Oomschrijving");
define("_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE", "Vertaling");

////////////////////////////
//// Version 1.06 //////////

// ../admin/index.php

// Stat
define("_AM_ADSLIGHT_STAT_TITLE", "Statistiek");
define("_AM_ADSLIGHT_STAT_NUM1", "Zoekertjes");
define("_AM_ADSLIGHT_STAT_NUM2", "Categorie&#235;n");
define("_AM_ADSLIGHT_STAT_NUM3", "Gebruikers");
define("_AM_ADSLIGHT_STAT_NUM4", "Reacties");


// Option Menu
define("_AM_ADSLIGHT_USERMENU_TITLE", "Opties");
define("_AM_ADSLIGHT_USERMENU_SENDMAIL", " Stuur e-mail");
define("_AM_ADSLIGHT_USERMENU_COMMENT", " Reacties");
define("_AM_ADSLIGHT_USERMENU_BAMMIER", " Banners");

// Menu Category
define("_AM_ADSLIGHT_CATMENU_TITLE", "Categorie&#235;n");
define("_AM_ADSLIGHT_CATMENU_CATEGORY", " Toevoegen categorie&#235;n");
define("_AM_ADSLIGHT_CATMENU_MODIFCAT", " Categoriebeheert");

// Menu Annonces
define("_AM_ADSLIGHT_ADSMENU_TITLE", "Zoekertjes");
define("_AM_ADSLIGHT_ADSMENU_VALIDADS", " Submit aanbiedingen");
define("_AM_ADSLIGHT_ADSMENU_VIEWADS", " Toon advertenties");
define("_AM_ADSLIGHT_ADS_MODIFADS", " advertentie bewerken");

// Menu Downloads
define("_AM_ADSLIGHT_DOWNLOADS_TITLE", "Downloaden");
define("_AM_ADSLIGHT_DOWNLOADS_PLUGINS", " Plugins");
define("_AM_ADSLIGHT_DOWNLOADS_MAPS", " Kaarten");

// Menu Devellopment
define("_AM_ADSLIGHT_DEVLLP_TITLE", "Ontwikkeling");
define("_AM_ADSLIGHT_DEVLLP_HACK", " Suggereer een Hack");
define("_AM_ADSLIGHT_DEVLLP_TRANSLATE", " Suggereer een Vertaling");
define("_AM_ADSLIGHT_DEVLLP_CORRECTION", " Suggereer een correctie");
define("_AM_ADSLIGHT_DEVLLP_MAPFLASH", " Suggereer een kaart (.swf)");
define("_AM_ADSLIGHT_DEVLLP_FORUM", " Forum");

// Menu Faire un Don
define("_AM_ADSLIGHT_DONATE_TITLE", " Donatie");
define("_AM_ADSLIGHT_DONATE", "AdsLight is geen commercieel project,<br />het gebruik ervan is gratis en dat zal zo blijven.<br />U kunt, indien u dat wenst,<br />en donatie doen om mij te steunen.<br />");


////RSS Forum
define("_AM_ADSLIGHT_MENURSSFORUM_TITLE", "Forum Wederzijds AdsLight");
define("_AM_ADSLIGHT_MENURSSFORUM_URL", "http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=58");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK1", "http://www.i-luc.fr/adslight/modules/newbb/viewforum.php?forum=58/#googtrans/auto/nl");
define("_AM_ADSLIGHT_MENURSSFORUM_GOFORUM", "Ga naar Forum");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK2", "http://www.i-luc.fr/adslight/modules/profile/register.php#googtrans/auto/nl");
define("_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT", "abonneren");

////	RSS AdsLight News
define("_AM_ADSLIGHT_MENURSS_TITLE", "Nieuws AdsLight");
 
// ../admin/view_ads.php
define("_AM_ADSLIGHT_ADSVALIDE", "Advertenties kiezen");
define("_AM_ADSLIGHT_NOANNVALADS", "Er zijn momenteel geen advertenties");
define("_AM_ADSLIGHT_USURE", "slijtage");

// Logo Paypall Donate
define("_AM_ADSLIGHT_DONATE_LOGO", '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/nl_NL/NL/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal, de veilige en complete manier van online betalen.">
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

');

?>