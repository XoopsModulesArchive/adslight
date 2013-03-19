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

define("_AM_ADSLIGHT_CONF","Einstellungen");
define("_AM_ADSLIGHT_ADDON","Addons");
define("_AM_ADSLIGHT_ANNDEL","W&auml;hle Anzeige zum l&ouml;schen");
define("_AM_ADSLIGHT_ADDCATPRINC","Hauptkategorie hinzuf&uuml;gen");
define("_AM_ADSLIGHT_CATNAME","Name :");
define("_AM_ADSLIGHT_ADDSUBCAT","Unterkategorie hinzuf&uuml;gen");
define("_AM_ADSLIGHT_DELSUBCAT", "L&ouml;schen einer Kategorie");
define("_AM_ADSLIGHT_MODIFSUBCAT", "Kategorie bearbeiten");
define("_AM_ADSLIGHT_ADD","Hinzuf&uuml;gen");
define("_AM_ADSLIGHT_CATDEL","Kategorie wurde gel&ouml;scht");
define("_AM_ADSLIGHT_OUI","Ja");
define("_AM_ADSLIGHT_NON","Nein");
define("_AM_ADSLIGHT_SURDELCAT","Achtung: Bist Du sicher, diese Kategorie mit Inhalt L&ouml;schen.");
define("_AM_ADSLIGHT_IN","in");
define("_AM_ADSLIGHT_MODIF","bearbeiten");
define("_AM_ADSLIGHT_MODIFCAT","Kategorie bearbeiten");
define("_AM_ADSLIGHT_CAT","Kategorie :");
define("_AM_ADSLIGHT_SUBCAT","Unterkategorie :");
define("_AM_ADSLIGHT_CONFMYA","Konfiguration");
define("_AM_ADSLIGHT_CATADD","Kategorie hinzugef&uuml;gt");
define("_AM_ADSLIGHT_SUBCATADD","Unterkategorie hinzugef&uuml;gt");
define("_AM_ADSLIGHT_ANNMOD","Anzeige ge&auml;ndert");
define("_AM_ADSLIGHT_NOANNVAL","Derzeit keine Anzeige zum freigeben");
define("_AM_ADSLIGHT_NOMODACTIV","Moderation ist nicht aktiv, keine Anzeige freigeben");
define("_AM_ADSLIGHT_MODANN","Anzeige bearbeiten");
define("_AM_ADSLIGHT_ALLMODANN","(Administrator kann alle Anzeigen bearbeiten.)");
define("_AM_ADSLIGHT_HELLO","Hallo ");
define("_AM_ADSLIGHT_ANNVALID","Ihre Kleinanzeige wurde freigegeben");
define("_AM_ADSLIGHT_DEL","L&ouml;schen
");
define("_AM_ADSLIGHT_SAVMOD","Speichern");
define("_AM_ADSLIGHT_MODTYPE","Anzeigen Type bearbeiten");
define("_AM_ADSLIGHT_ANNACCEPT","Ihre Kleinanzeige wurde angenommen");
define("_AM_ADSLIGHT_CONSULTTO","Kontakt :");
define("_AM_ADSLIGHT_THANK","Danke");
define("_AM_ADSLIGHT_TEAMOF","Team");
define("_AM_ADSLIGHT_RETURN","Zur&uuml;ck");
define("_AM_ADSLIGHT_MODSUBCAT","Name der Unterkategorie &auml;ndern");
define("_AM_ADSLIGHT_MODCAT","Name der Hauptkategorie &auml;ndern");
define("_AM_ADSLIGHT_GO","Absenden");
define("_AM_ADSLIGHT_SENDBY","Gesendet von :");
define("_AM_ADSLIGHT_EMAIL","Email :");
define("_AM_ADSLIGHT_TEL","Telefon :");
define("_AM_ADSLIGHT_TOWN","Stadt :");
define("_AM_ADSLIGHT_COUNTRY","Land :");
define("_AM_ADSLIGHT_TITLE2","Titel :");
define("_AM_ADSLIGHT_TYPE","Typ :");
define("_AM_ADSLIGHT_PRICE2","Preis :");
define("_AM_ADSLIGHT_CAT2","Kategorie :");
define("_AM_ADSLIGHT_DESCRIPTION","Beschreibung :");
define("_AM_ADSLIGHT_THEREIS","Es sind ");
define("_AM_ADSLIGHT_WAIT","Anzeigen warten auf Moderation");
define("_AM_ADSLIGHT_ADDTYPE","Anzeigen Typ hinzuf&uuml;gen");
define("_AM_ADSLIGHT_ERRORTYPE","Fehler : Typ");
define("_AM_ADSLIGHT_EXIST","besteht bereits!");
define("_AM_ADSLIGHT_ERRORCAT","Fehler : Kategorie");
define("_AM_ADSLIGHT_ERRORSUBCAT","Fehler : Unterkategorie");
define("_AM_ADSLIGHT_TYPEMOD","Anzeigentyp bearbeitet");
define("_AM_ADSLIGHT_TYPEDEL","Anzeigentyp gel&ouml;scht");
define("_AM_ADSLIGHT_ADDTYPE2","Anzeigentyp hinzugef&uuml;gt");
define("_AM_ADSLIGHT_ACCESMYANN","Anzeigen");
define("_AM_ADSLIGHT_IMGCAT","Bild :");
define("_AM_ADSLIGHT_REPIMGCAT","Bild-Dateiverzeichnis :");
define("_AM_ADSLIGHT_GESTCAT","Kategorien Administration");
define("_AM_ADSLIGHT_ADDPRICE","Preis Typ hinzuf&uuml;gen
");
define("_AM_ADSLIGHT_MODPRICE","Preis Typ bearbeiten");
define("_AM_ADSLIGHT_ADDPRICE2","Preis Typ wurde hinzugef&uuml;gt");
define("_AM_ADSLIGHT_PRICEMOD","Preis Typ wurde ge&auml;ndert");
define("_AM_ADSLIGHT_PRICEDEL","Preis Typ wurde gel&ouml;scht");
define("_AM_ADSLIGHT_ORDRE","Reihenfolge :");
define("_AM_ADSLIGHT_ORDRECLASS","Kategorie Sortierung :");
define("_AM_ADSLIGHT_ORDREALPHA","Alphabetisch");
define("_AM_ADSLIGHT_ORDREPERSO","Auswahl Sortierung");
define("_AM_ADSLIGHT_BIGCAT","Hauptmen&uuml; l;");
define("_AM_ADSLIGHT_HELP1","<B>Hinzuf&uuml;gen einer Kategorie :</B> Klicken Sie auf das Icon <IMG SRC=\"".XOOPS_URL."/modules/Ads/images/plus.gif\" BORDER=0 WIDTH=10 HEIGHT=10 alt=\"\"> neben der Kategorie wo die neue Kategorie hinzugef&uuml;gt werden soll.<P><B>&Atilde;ndern oder L&ouml;sche einer Kategorie :</B> Klicken Sie auf den Namen der Kategorie");
define("_AM_ADSLIGHT_HELP2","<B>Sortierung Kategorien:</B> Eine Zahl in Klammern bedeutet eine &Atilde;bergeordnete Kategorie, negative Wert k&ouml;nnen verwendet werden.: -1");
define("_AM_ADSLIGHT_CONFSAVE","nderung gespeichert");
define("_AM_ADSLIGHT_ANNOCANPOST","Anonyme Besucher knnen Anzeigen einsenden :");
define("_AM_ADSLIGHT_PERPAGE","Anzeigen pro Seite :");
define("_AM_ADSLIGHT_MONEY","W&auml;hrungs Symbol :");
define("_AM_ADSLIGHT_NUMNEW","Neue Anzeigen :");
define("_AM_ADSLIGHT_MODERAT","Anzeigen moderieren :");
define("_CAL_MAXIIMGS","Maximale Foto gr&ouml;&szlig;e :");
define("_AM_ADSLIGHT_TIMEANN","Laufzeit der Anzeigen:");
define("_AM_ADSLIGHT_INOCTET","in bytes");
define("_AM_ADSLIGHT_INDAYS","Tage");
define("_AM_ADSLIGHT_TYPEBLOC","Blocktyp :");
define("_AM_ADSLIGHT_ANNRAND","zuf&auml;llige Anzeige");
define("_AM_ADSLIGHT_LASTTEN","letzten 10 Anzeigen");
define("_AM_ADSLIGHT_NEWTIME","Neue Anzeige von :");
define("_AM_ADSLIGHT_DISPLPRICE","Preis anzeigen :");
define("_AM_ADSLIGHT_DISPLPRICE2","Preis anzeigen :");
define("_AM_ADSLIGHT_INTHISCAT","in dieser Kategorie");
define("_AM_ADSLIGHT_DISPLSUBCAT","Unterkategorie anzeigen :");
define("_AM_ADSLIGHT_ONHOME","auf der Startseite des Modul");
define("_AM_ADSLIGHT_NBDISPLSUBCAT","zeige Unterkategorien :");
define("_AM_ADSLIGHT_IF","wenn");
define("_AM_ADSLIGHT_ISAT","ist an");
define("_AM_ADSLIGHT_VIEWNEWCLASS","zeige neue Anzeigen :");
define("_AM_ADSLIGHT_PERMADDNG", "Hinzuf&uuml;gen %s nicht genehmigt f&uuml;r %s for group %s");
define("_AM_ADSLIGHT_PERMADDOK", " %s Berechtigungen zu %s f&uuml;r Benutzergruppen %s");
define("_AM_ADSLIGHT_PERMRESETNG","Berechtigungen f&uuml;r Benutzergruppen k&ouml;nnen nicht zur&uuml;ckgesetzt werden %s");
define("_AM_ADSLIGHT_PERMADDNGP", "Es m&uuml;ssen alle Artikel ausgew&auml;hlt werden.");
define("_AM_ADSLIGHT_EXPIRE", "Anzeige endet in (Tagen)");
define("_AM_ADSLIGHT_DBUPDATED", "Datenbank wurde aktualisiert.");
define("_AM_ADSLIGHT_CONTACT_BY_EMAIL","E-mail");
define("_AM_ADSLIGHT_CONTACT_BY_PM","Private Nachricht(PN)");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH","Beides E-Mail oder PN");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE","Telefonisch");
define("_AM_ADSLIGHT_CONTACTBY","Kontakt per :");
define("_AM_ADSLIGHT_PREMIUM","Premium Anzeige :");
define("_AM_ADSLIGHT_OK","akzeptieren");
define("_AM_ADSLIGHT_CATSMOD","Kategorie wurde ge&auml;ndert");
define("_AM_ADSLIGHT_ADDED_ON"," erstellt am ");
define("_AM_ADSLIGHT_NUMANN","Anzeigen Nr. :");
define("_AM_ADSLIGHT_ACTIVE","Aktiv");
define("_AM_ADSLIGHT_INACTIVE","Reserviert");
define("_AM_ADSLIGHT_SOLD","Verkauft");
define("_AM_ADSLIGHT_STATUS","Verkaufsstatus");
define("_AM_ADSLIGHT_UPDATECOMPLETE","Update komplett");
define("_AM_ADSLIGHT_UPDATEMODULE","<b>Update Module</b>");
define("_AM_ADSLIGHT_UPGRADEFAILED","Update fehlgeschlagen");
define("_AM_ADSLIGHT_UPGRADEFAILED0","Update");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR","Zugriffsfehler");
define("_AM_ADSLIGHT_THANKS", "Danke f&uuml;r die Benutzung von unseren Kleinanzeigen");
define("_AM_ADSLIGHT_WEBMASTER", "Webmaster");
define("_AM_ADSLIGHT_YOUR_AD", "Die Kleinanzeige");
define("_AM_ADSLIGHT_AT","bei");
define("_AM_ADSLIGHT_VEDIT_AD", "Hier kann die Anzeige bearbeitet oder angezeigt werden");
define("_AM_ADSLIGHT_YOUR_AD_ON", "Die Anzeige auf");
define("_AM_ADSLIGHT_APPROVED", "wurde best&auml;tigt.");
define("_AM_ADSLIGHT_EXPIRED", "ist abgelaufen und wurde gel&ouml;scht.");

define("_AM_ADSLIGHT_CHECKER", 'Directory Checker');
define("_AM_ADSLIGHT_DIRPERMS", 'Andere Ordnerberechtigung nach beschreibbar ! => ');

define("_AM_ADSLIGHT_PHOTO1","Anzahl der Photos :");
define("_AM_ADSLIGHT_SUBMITTER","Eingesendet von ");
define("_AM_ADSLIGHT_TITLE","Titel");
define("_AM_ADSLIGHT_LID","Anzeigen ID");
define("_AM_ADSLIGHT_DATE","Erstellungsdatum");
define("_AM_ADSLIGHT_DESC","Beschreibung");
define("_AM_ADSLIGHT_FREECAT","Dieses ist eine freie Kategorie");
define("_AM_ADSLIGHT_MODERATE_CAT","Kategorie Moderieren");
define("_AM_ADSLIGHT_VISIT_LINK", "Hier klicken um die ganze Anzeige zu sehen:");
define("_AM_ADSLIGHT_LISTING_NUMBER", "Anzeigen Nummer ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW", "Hier klicken um die ganze Anzeige zu sehen");
define("_AM_ADSLIGHT_NOREPLY","!!!  Keine E-Mail an diese Adresse schicken, es wird keine Antwort erstellt.  !!!");
define("_AM_ADSLIGHT_ADDED_TO_CAT","Eine neue Anzeige wurde in dieser Kategorie erstellt ");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","Es wurden Benachritigungen dieser Art abboniert");
define("_AM_ADSLIGHT_ERROR_NOTIF","Wenn dies Benachrichtigung ein Fehler ist oder keine weiteren gew&uuml;nscht sind, bitte die Benachrichtigungseinstellungen &auml;ndern:");
define("_AM_ADSLIGHT_FOLLOW_LINK","Hier ist ein link zur neuen Anzeige");
define("_AM_ADSLIGHT_CAPTCHA","Sicherheits Code :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","Moderiere Unterkategorien dieser Kategorie");

define("_AM_ADSLIGHT_DOCUMENTATION","Dokumentation");
define("_AM_ADSLIGHT_FEATURES","Fonctions");
define("_AM_ADSLIGHT_CLONE","Wie Klon");
define("_AM_ADSLIGHT_INCOMPLETE","Unvollst&auml;ndige");

// Ajouter par iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE", "Tragen Typ hinzuf&uuml;gen");
define("_AM_ADSLIGHT_MODUSURE", "Tragen Typ bearbeiten");
define("_AM_ADSLIGHT_ADDUSURE2", "Die Art des Verschleiÿes wurde hinzugef&uuml;gt");
define("_AM_ADSLIGHT_USUREMOD", "Der Verschleiÿ Muster wurde ge&auml;ndert");
define("_AM_ADSLIGHT_USUREDEL", "Die Art des Verschleiÿes wurde gel&ouml;scht ");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","Autor");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Change log");
define("_AM_ADSLIGHT_ABOUT_CREDITS","Credits");
define("_AM_ADSLIGHT_ABOUT_LICENSE","Lizenz");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","Info-Modul");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","Website Support");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","Release Date");
define("_AM_ADSLIGHT_ABOUT_STATUS","Status");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","Personen, die an der Verbesserung des Moduls");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","Nickname");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","Website");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","Freigabe");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","&#x0153;berblick");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Hinzuf&uuml;gen k&ouml;nnen" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "Pr&uuml;fen Sie die Kategorien, die Sie zugreifen k&ouml;nnen" ) ;
define("_AM_ADSLIGHT_GROUPPERMDESC" , "W&auml;hlen Sie Gruppen erlaubt, um Anzeigen zu &uuml;bermitteln." ) ;
define("_AM_ADSLIGHT_GROUPPERM", "Genehmigung vorlegen ");
define("_AM_ADSLIGHT_SUBMITFORM", "Permission to file ein Inserat aufgeben");
define("_AM_ADSLIGHT_SUBMITFORM_DESC", "W&auml;hlen Sie, welche Anzeigen geschaltet werden k&ouml;nnen");
define("_AM_ADSLIGHT_VIEWFORM", "Berechtigungen zum Anzeigen Anzeigen");
define("_AM_ADSLIGHT_VIEWFORM_DESC", "W&auml;hlen Sie die Gruppen, die Inserate sehen k&ouml;nnen");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC", "W&auml;hlen Sie, die Zusammenfassungen zeigen k&ouml;nnen");
define("_AM_ADSLIGHT_SUPPORT", "Unterst&uuml;tzung dieses Programms");
define("_AM_ADSLIGHT_OP", "Lesen Meiner Meinung nach");
define("_AM_ADSLIGHT_PREMIUM_DESC", "W&auml;hlen Sie Gruppen, die die Dauer der Werbung w&auml;hlen, wird");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK", "Sie sind mit der neuesten Version des Moduls.");
define("_AM_ADSLIGHT_RELEASEISNOTOK", "Das Modul ist veraltet, eine neue Version verf&uuml;gbar ist.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD", "Herunterladen.");
define("_AM_ADSLIGHT_NBR_PHOTO","Foto(s)");

//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<b>Meta Description:</b><br/>Zur besseren Optimierung,</b>f&uuml;gen Sie hier eine genaue Beschreibung Ihrer Klasse. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<b>Meta-Keywords:</b><br/>Zur besseren Optimierung,</b>Schl&uuml;sselw&ouml;rter hinzuf&uuml;gen, hier in Bezug auf die c&eacute;t&eacute;gorie.<br/><b><font color=\"#ff3300\">einzelne W&ouml;rter durch Kommas</font></b>. ( english, espagne, france,...)");

//Version 1.053
// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK", "Die XML-Datei f&uuml;r die Karte, ist nicht vorhanden, oder auch nicht mit der Karte in den Einstellungen ausgew&auml;hlt.");
define("_AM_ADSLIGHT_XMLUPGRADE", "Aktualisierung der XML-Datei");

//Version 1.054
// Support_forum.php
define("_AM_ADSLIGHT_SUPPORTFORUM_TITLE", "List Support-Forum");
define("_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS", "Link");
define("_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG", "Sprache");
define("_AM_ADSLIGHT_SUPPORTFORUM_DESC", "Beschreibung");
define("_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE", "&Uuml;bersetzung");

////////////////////////////
//// Version 1.06 //////////

// ../admin/index.php

// Stat
define("_AM_ADSLIGHT_STAT_TITLE", "Statistik");
define("_AM_ADSLIGHT_STAT_NUM1", "Anzeigen");
define("_AM_ADSLIGHT_STAT_NUM2", "Kategorien");
define("_AM_ADSLIGHT_STAT_NUM3", "Benutzer");
define("_AM_ADSLIGHT_STAT_NUM4", "Kommentare");


// Option Menu
define("_AM_ADSLIGHT_USERMENU_TITLE", "Optionen");
define("_AM_ADSLIGHT_USERMENU_SENDMAIL", " E-Mail senden");
define("_AM_ADSLIGHT_USERMENU_COMMENT", " Kommentare");
define("_AM_ADSLIGHT_USERMENU_BAMMIER", " Banners");

// Menu Category
define("_AM_ADSLIGHT_CATMENU_TITLE", "Kategorien");
define("_AM_ADSLIGHT_CATMENU_CATEGORY", " Kategorien hinzuf&#252;gen");
define("_AM_ADSLIGHT_CATMENU_MODIFCAT", " Category Management");

// Menu Annonces
define("_AM_ADSLIGHT_ADSMENU_TITLE", "Anzeigen");
define("_AM_ADSLIGHT_ADSMENU_VALIDADS", " validieren Anzeigen");
define("_AM_ADSLIGHT_ADSMENU_VIEWADS", " Anzeigen einsehen");
define("_AM_ADSLIGHT_ADS_MODIFADS", " Anzeige bearbeiten");

// Menu Downloads
define("_AM_ADSLIGHT_DOWNLOADS_TITLE", "Downloading");
define("_AM_ADSLIGHT_DOWNLOADS_PLUGINS", " Plugins");
define("_AM_ADSLIGHT_DOWNLOADS_MAPS", " Maps");

// Menu Devellopment
define("_AM_ADSLIGHT_DEVLLP_TITLE", "Entwicklung");
define("_AM_ADSLIGHT_DEVLLP_HACK", " Schlagen einen Hack");
define("_AM_ADSLIGHT_DEVLLP_TRANSLATE", " vorschlagen, eine &#220;bersetzung");
define("_AM_ADSLIGHT_DEVLLP_CORRECTION", " vorschlagen, eine Korrektur");
define("_AM_ADSLIGHT_DEVLLP_MAPFLASH", " vorschlagen, eine Karte (.swf)");
define("_AM_ADSLIGHT_DEVLLP_FORUM", " Forum");

// Menu Faire un Don
define("_AM_ADSLIGHT_DONATE_TITLE", " Machen Sie eine Spende");
define("_AM_ADSLIGHT_DONATE", "AdsLight ist kein kommerzielles Projekt, ihre<br />Verwendung ist kostenlos und wird auch so bleiben.<br />Sie k&#246;nnen, wenn Sie es w&#252;nschen,<br />Machen Sie eine Spende um mich zu unterst&#252;tzen.<br />");


////RSS Forum
define("_AM_ADSLIGHT_MENURSSFORUM_TITLE", "Hilfe-Forum AdsLight");
define("_AM_ADSLIGHT_MENURSSFORUM_URL", "http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=64");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK1", "http://www.i-luc.fr/adslight/modules/newbb/viewforum.php?forum=64/#googtrans/auto/de");
define("_AM_ADSLIGHT_MENURSSFORUM_GOFORUM", "Zum Forum");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK2", "http://www.i-luc.fr/adslight/modules/profile/register.php#googtrans/auto/de");
define("_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT", "zeichnen");

////	RSS AdsLight News
define("_AM_ADSLIGHT_MENURSS_TITLE", "Nachrichten AdsLight");
 
// ../admin/view_ads.php
define("_AM_ADSLIGHT_ADSVALIDE", "Anzeigen deaktiviert");
define("_AM_ADSLIGHT_NOANNVALADS", "Es liegen noch keine Anzeigen");
define("_AM_ADSLIGHT_USURE", "Verschlei&#223;");

// Logo Paypall Donate
define("_AM_ADSLIGHT_DONATE_LOGO", '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/de_DE/DE/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen   mit PayPal.">
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>');

?>