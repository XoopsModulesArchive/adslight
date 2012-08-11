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


// The name of this module
define("_MI_ADSLIGHT_NAME ","adslight");
define("_MI_ADSLIGHT_MENUADD","Anzeige aufgeben");
define("_MI_ADSLIGHT_DESC","Kleinanzeigen");
define("_MI_ADSLIGHT_BNAME1","Neuste Kleinanzeigen");
define("_MI_ADSLIGHT_BNAME1_DESC","Neuste Kleinanzeigen Block");
define("_MI_ADSLIGHT_BNAME2","Top Kleinanzeigen");
define("_MI_ADSLIGHT_BNAME2_DESC","Top Kleinanzeigen Block");

// Noms des lments du menu admin
define("_MI_ADSLIGHT_ADMENU0","Administration");
define("_MI_ADSLIGHT_ADMENU1","Management Kategorien");
define("_MI_ADSLIGHT_ADMENU2","Berechtigungen");
define("_MI_ADSLIGHT_ADMENU3","Blogs");
define("_MI_ADSLIGHT_ADMENU4","Einstellungen");
define("_MI_ADSLIGHT_ADMENU5","Optionen");
define("_MI_ADSLIGHT_ADMENU6","Import");
define("_MI_ADSLIGHT_ADMENU7","&#x0153;ber");
define("_MI_ADSLIGHT_ADMENU8","Text & Tabellen");
define("_MI_ADSLIGHT_ADMENU9","Zur Modul");
define("_MI_ADSLIGHT_ADMENU10","Aktualisiert");
define("_MI_ADSLIGHT_ADMENU11","Support Forum");

define("_MI_ADSLIGHT_CONFSAVE","Konfiguration gespeichert");
define("_MI_ADSLIGHT_CANPOST","Benutzergruppe Anonyme kann einsenden:");
define("_MI_ADSLIGHT_PERPAGE","Anzeigen pro Seite:");
define("_MI_ADSLIGHT_RES_PERPAGE","Zusammenfassung der Seite :");
define("_MI_ADSLIGHT_MONEY","W&auml;hrungssymbol:");
define("_MI_ADSLIGHT_KOIVI","Koivi Editor voreinstellen:");
define("_MI_ADSLIGHT_NUMNEW","Anzahl neuer Anzeigen:");
define("_MI_ADSLIGHT_MODERAT","Anzeigen moderieren:");
define("_MI_ADSLIGHT_DAYS","Voreinstellung Dauer Anzeigen:");
define("_MI_ADSLIGHT_MAXIIMGS","Max. Gr&ouml;sse des Foto :");
define("_MI_ADSLIGHT_MAXWIDE","Max. Breite des Foto :");
define("_MI_ADSLIGHT_MAXHIGH","Max. H�he des Foto :");
define("_MI_ADSLIGHT_INBYTES","in Bytes");
define("_MI_ADSLIGHT_INPIXEL","in Pixel");
define("_MI_ADSLIGHT_INDAYS","Anzahl Tagen");
define("_MI_ADSLIGHT_MUSTLOGIN","G&auml;sten kann das einstellen von Anzeigen erlaubt werden.");
define("_MI_ADSLIGHT_THRUMAIL","Achtung bei JA kann es zu Spameintr&auml;gen kommen!");
define("_MI_ADSLIGHT_TYPEBLOC","Blocktyp :");
define("_MI_ADSLIGHT_JOBRAND","zuf&auml;llig auflisten");
define("_MI_ADSLIGHT_LASTTEN","letzten 10 auflisten");
define("_MI_ADSLIGHT_NEWTIME","Zeige neue Kleinanzeigen der letzten x Tage:");
define("_MI_ADSLIGHT_DISPLPRICE","Preis anzeigen:");
define("_MI_ADSLIGHT_DISPLPRICE2","Den Preis anzeigen :");
define("_MI_ADSLIGHT_INTHISCAT","in der Kategorie");
define("_MI_ADSLIGHT_DISPLSUBCAT","Unterkategorie :");
define("_MI_ADSLIGHT_ONHOME","auf der Startseite von dem Modul");
define("_MI_ADSLIGHT_NBDISPLSUBCAT","Anzahl der Unterkategorien :");
define("_MI_ADSLIGHT_IF","wenn");
define("_MI_ADSLIGHT_ISAT","ist an");
define("_MI_ADSLIGHT_VIEWNEWCLASS","Zeige neue Kleinanzeigen :");
define("_MI_ADSLIGHT_ORDREALPHA","Alphabetisch");
define("_MI_ADSLIGHT_ORDREPERSO","Person");
define("_MI_ADSLIGHT_CSORT_ORDER","Standardsortierung f&uuml;r Kategorien");
define("_MI_ADSLIGHT_LSORT_ORDER","Standardsortierung f&uuml;r Anzeigen ");
define("_MI_ADSLIGHT_ORDER_TITLE","Liste sortiert nach Titel");
define("_MI_ADSLIGHT_ORDER_PRICE","Liste sortiert nach Preis");
define("_MI_ADSLIGHT_ORDER_DATE","Liste sortiert nach Datum (default)");
define("_MI_ADSLIGHT_ORDER_POP","Liste sortiert nach Treffer");
define("_MI_ADSLIGHT_DBUPDATED","Datenbank wurde aktualisiert.");
define("_MI_ADSLIGHT_GPERM_G_ADD" , "kann hinzuf�gen" ) ;
define("_MI_ADSLIGHT_CAT2GROUPDESC" , "&#x0153;berpr&uuml;en Sie die Kategorien welche Sie freigeben m&ouml;chten" ) ;
define("_MI_ADSLIGHT_GROUPPERMDESC" , "Ausgew&auml;hlte Benutzergruppen k&ouml;nnen Anzeigen einsenden." ) ;
define("_MI_ADSLIGHT_GROUPPERM","Berechtigungen abschicken");
define("_MI_ADSLIGHT_SUBMITFORM","Berechtigung Anzeigen einsenden");
define("_MI_ADSLIGHT_SUBMITFORM_DESC","Ausw&auml;hlen wer Anzeigen einsenden darf");
define("_MI_ADSLIGHT_VIEWFORM","wer darf die Anzeigen lesen");
define("_MI_ADSLIGHT_VIEWFORM_DESC","Ausw&auml;hlen wer Anzeigen sehen darf");
define("_MI_ADSLIGHT_VIEW_RESUMEFORM_DESC","Ausw&auml;hlen wer Zusammenfassung einsehen darf");
define("_MI_ADSLIGHT_SUPPORT","Support von Kleinanzeigen");
define("_MI_ADSLIGHT_OP"," ");
define("_MI_ADSLIGHT_PREMIUM","wer darf Premium Kleinanzeigen einsenden");
define("_MI_ADSLIGHT_PREMIUM_DESC","Wer kann ausw&auml;hlen wie lange eine Anzeige geschalten wird");
	

// Notification event descriptions and mail templates
define("_MI_ADSLIGHT_CATEGORY_NOTIFY","Kategorie"); 
define("_MI_ADSLIGHT_CATEGORY_NOTIFYDSC","Benachrichtigungsoptionen einstellen zu dieser Kategorie.");
define("_MI_ADSLIGHT_NOTIFY","Liste"); 
define("_MI_ADSLIGHT_NOTIFYDSC","Benachrichtigungsoptionen zu dieser Liste.");	
define("_MI_ADSLIGHT_GLOBAL_NOTIFY","Gesamte Modul ");
define("_MI_ADSLIGHT_GLOBAL_NOTIFYDSC","Globale Benachrichtigungseinstellungen.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFY","Neue Kleinanzeigen");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYCAP","Benachrichtigen zu neuen Kleinanzeigen in dieser Kategorie.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYDSC","Benachrichtigen zur Ver&uuml;ffentlichung in dieser Kategorie.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-notify : Neue Anzeigen in dieser Kategorie");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFY","Neue Kleinanzeigen");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYCAP","Benachrichtigen zu neuen Kleinanzeigen in dieser Kategorie.");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYDSC","Benachrichtigen wenn neue Kleinanezeigen in dieser Kategorie ver&ouml;ffentlicht wurden.");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-notify : Neue Anzeigen in dieser Kategorie");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFY","Update der Kleinanzeigen");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYCAP","Benachrichtigen wenn Kleinaziegen aktualisiert wurden.");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYDSC","Benachrichtigen wenn Kleinanzeigen in dieser Kategorie aktualisiert wurden.");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-notify : Neue Kleinzeigen in dieser Kategorie");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFY","Gel�schte Kleinanzeigen");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYCAP","Benachrichtigen zu neuen Kleinanzeigen in dieser Kategorie.");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYDSC","Benachrichtigen zur Ver&ouml;ffentlichung in dieser Kategorie.");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-notify : Neue Anzeigen in dieser Kategorie");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFY","Neue Kleinanzeigen");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYCAP","Benachrichtigen zu neuen Kleinanzeigen in allen Kategorien.");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYDSC","Benachrichtigen zu neuen Kleinanzeigen in allen Kategorien.");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-notify : Neue Anzeigen in dieser Kategorie");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFY","Neue Kleinanzeigen");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYCAP","Benachrichtigen zu neuen Kleinanzeigen in allen Kategorien.");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYDSC","Benachrichtigen zu neuen Kleinanzeigen in allen Kategorien.");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-notify : Neue Anzeigen in dieser Kategorie");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFY","Aktualisierte Kleinanzeigen");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYCAP","Benachrichtigen zu aktualisierten Kleinanzeigen in allen Kategorien.");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYDSC","Benachrichtigen zu aktualisierten Kleinanzeigen in allen Kategorien.");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-notify : Aktualisierte Anzeigen in dieser Kategorie");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFY","Gel&ouml;schte Kleinanzeigen");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYCAP","Benachrichtigen zu gel&ouml;schten Kleinanzeigen in allen Kategorien.");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYDSC","Benachrichtigen zu gel&ouml;schten Kleinanzeigen in allen Kategorien.");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-notify : Gel&ouml;schte Kleinanzeigen in Kategorien");
define("_MI_ADSLIGHT_RATE_USER","Erlaube User die Bewertung von Verk&auml;ufern");
define("_MI_ADSLIGHT_RATE_ITEM","Erlaube User die Bewertung von Anzeigen");
define("_MI_ADSLIGHT_DIFF_NAME","Erlaube User unterschiedliche Namen (beim erstellen von Anzeigen)");
define("_MI_ADSLIGHT_DIFF_EMAIL","Erlaube User unterschiedliche E-mail Adressen (beim erstellen von Anzeigen)");
define("_MI_ADSLIGHT_NOT_PREMIUM","Anzahl Bilder - Kein Premium");
define("_MI_ADSLIGHT_NOT_PREMIUM_DESC" ,"Anzahl der Bilder die ein NICHT PREMIUM Mitglied auf der Seiten haben darf");
define("_MI_ADSLIGHT_NUMBPICT_TITLE","Anzahl Bilder - Premium");
define("_MI_ADSLIGHT_NUMBPICT_DESC" ,"Anzahl der Bilder die ein PREMIUM Mitglied auf der Seiten haben darf");
define("_MI_ADSLIGHT_SMNAME1" ,"Submit");
define("_MI_ADSLIGHT_THUMW_TITLE" , "Vorschaubild Breite");
define("_MI_ADSLIGHT_THUMBW_DESC" , "Vorschaubilder Breite in Pixels<br />Das bedeutet das die Vorschaubilder mit dieser Breite angezeigt werden<br />Die Proportionen werden beibehalten");
define("_MI_ADSLIGHT_THUMBH_TITLE" , "Vorschaubild H&ouml;he");
define("_MI_ADSLIGHT_THUMBH_DESC" , "Vorschaubilder H&ouml;he in Pixels<br />Das bedeutet das die Vorschaubilder mit dieser H&ouml;he angezeigt werden<br />Die Proportionen werden beibehalten");
define("_MI_ADSLIGHT_RESIZEDW_TITLE" , "Angepa&yuml;te Bild Breite");
define("_MI_ADSLIGHT_RESIZEDW_DESC" , "Angepa&yuml;te Bilder Breite in Pixels<br />Die Bilder werden mit dieser Breite angezeigt<br />Die Proportionen werden beibehalten<br /> Ist das Bild gr&ouml;&szlig;er wird es automatisch angepa&yuml;t <br /> um das Template nicht zu zerst&ouml;ren");
define("_MI_ADSLIGHT_RESIZEDH_TITLE" , "Angepa&yuml;te Bild H&ouml;he");
define("_MI_ADSLIGHT_RESIZEDH_DESC" , "Angepa&yuml;te Bilder H&ouml;he in Pixels<br />Die Bilder werden mit dieser H&ouml;he angezeigt<br />Die Proportionen werden beibehalten<br /> Ist das Bild grogr&ouml;&szlig;er wird es automatisch angepa&yuml;t <br /> um das Template nicht zu zerst&ouml;ren");
define("_MI_ADSLIGHT_ORIGW_TITLE" , "Max. Original Bild Breite");
define("_MI_ADSLIGHT_ORIGW_DESC" , "Maximale Breite des Original Bildes in Pixels<br />Das bedeutet das die das Original Bild diese Breite nicht &#x0153;berschreiten darf<br />sonst kann es nicht hochgeladen werden");
define("_MI_ADSLIGHT_ORIGH_TITLE" , "Max. Original Bild H&ouml;he");
define("_MI_ADSLIGHT_ORIGH_DESC" , "Maximale H&ouml;he des Original Bildes in Pixels<br />Das bedeutet das die das Original Bild diese H&ouml;he nicht &#x0153;berschreiten darf<br />sonst kann es nicht hochgeladen werden");
define("_MI_ADSLIGHT_UPLOAD_TITLE" , "Uploadordner");
define("_MI_ADSLIGHT_UPLOAD_DESC" , "Pfad zum Uploadordner<br />z.B. bei Linux : /var/www/uploads<br />oder in Windows : C:/Program Files/www");
define("_MI_ADSLIGHT_LINKUPLOAD_TI","Link zum Uploadordner");
define("_MI_ADSLIGHT_LINKUPLOAD_DE","Dies ist die Adresse des Root Uploadordners <br />z.B. http://www.deineSeite.de/uploads");
define("_MI_ADSLIGHT_MAXFILEBYTES_T","Maximale Dateigr&ouml;&szlig;e in Bytes");
define("_MI_ADSLIGHT_MAXFILEBYTES_D","Dies ist die maximale gr&ouml;&szlig;e in bytes die ein Bild haben darf<br />z.B. 512000 f&uuml;r 500 KB");
define("_MI_ADSLIGHT_EDITOR","Editorauswahl:");
define("_MI_ADSLIGHT_LIST_EDITORS","Welcher Editor soll benutzt werden.");
define("_MI_ADSLIGHT_LIGHTBOX","Lightbox Effekt");
define("_MI_ADSLIGHT_LIGHTBOX_DESC","Benutze den Lightbox Effekt um Bilder anzuzeigen.");
define("_MI_ADSLIGHT_USE_COUNTRY" ,"Zeige Land Feld");
define("_MI_ADSLIGHT_USE_COUNTRY_DESC" ,"Wenn 'Nein' wird das Land Feld nicht angezeigt");
define("_MI_ADSLIGHT_SOLD_DAYS","Anzeige als verkauft markieren nach X Tagen");
define("_MI_ADSLIGHT_SOLDINDAYS","Eingabe Anzahl der Tage");
define("_MI_ADSLIGHT_ALMOST","Anzahl Tage wenn eine Erinnerung zum Ablauf einer Anzeige gesendet werdne soll");
define("_MI_ADSLIGHT_ALMOST_DESC","In Tagen");
define("_MI_ADSLIGHT_MAIN_CAT","Erlaube Mitgliedern Kleinanzeigen in der Hauptkategorie anzulegen");
define("_MI_ADSLIGHT_MAIN_CAT_DESC","oder erlaube das erstellen nur in Unterkategorien");
define("_MI_ADSLIGHT_ADMIN_EDITOR","Editor f&uuml;r Admins:");
define("_MI_ADSLIGHT_LIST_ADMIN_EDITORS","Editor den man auf der Admin Seite benutzt ausw&auml;hlen.");
define("_MI_ADSLIGHT_CAT_DESC","Kategorie Beschreibung");
define("_MI_ADSLIGHT_DESC_CAT_DESC","Erstelle eine Beschreibung der Kategorie.");
define("_MI_ADSLIGHT_MUST_ADD_CAT","Es muss zuerst eine Kategorie erstellt werden.");
define("_MI_ADSLIGHT_BNAME3","Neu Kleinanzeigen mit Photo");
define("_MI_ADSLIGHT_BNAME3_DESC","Block mit neuen Kleinanzeigen und Photo ");
define("_MI_ADSLIGHT_BNAME4","Top Kleinanzeigen mit Photo");
define("_MI_ADSLIGHT_BNAME4_DESC","Block f&uuml;r Top Kleinanzeigen mit Photo");
define("_MI_ADSLIGHT_USE_CAPTCHA" ,"Benutze Sicherheitscode abfrage");

// Menu AdsLight
define("_MI_ADSLIGHT_SMENU1","Dein Kleinanzeigen");
define("_MI_ADSLIGHT_SMENU2","&#x0153;bermitteln");
define("_MI_ADSLIGHT_SMENU3","Suche"); 

// support.php 
define("_MI_ADSLIGHT_SUPPORT01"," Wenn Sie zu einer Verbesserung vorschlagen:<br /><br />- Eine Korrektur<br />- Eine &#x0153;bersetzung<br />- Ein Vorschlag<br />- Einen Bug melden<br />");
define("_MI_ADSLIGHT_SUPPORT02","Begleiten Sie uns auf der Support-Forum AdsLight");
define("_MI_ADSLIGHT_SUPPORT03","> Support-Forum AdsLight <");

// Bloc Carte de France
define("_MI_ADSLIGHT_MAPFRANCE","Karte von Frankreich");
define("_MI_ADSLIGHT_MAPFRANCE_DESC","In Ihrer N&auml;he");

// Bloc Ajouter une annonce
define("_MI_ADSLIGHT_ADDMENU","hinzuf&uuml;gen Kleinanzeigen");
define("_MI_ADSLIGHT_ADDMENU_DESC","Men&uuml; Tropfen");

// version Adslight 1.0.2
// Activer RewriteUrl
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL" ,"Aktivieren Rewrite URL");
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL_DESC" ,"Aktivieren Sie das Umschreiben url, f�r eine bessere SEO.<br/>So installieren Sie das neu zu schreiben, ich danke Ihnen, um die Datei zu lesen README.txt");

// Activer thumbs_index
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX" ,"Aktivieren der Miniaturansichten Index");
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX_DESC" ,"Aktivieren Sie die Anzeige von Miniaturansichten zur Startseite<br/>Wenn es ausgeschaltet ist ein Symbol <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> zeigt an, ob oder nicht es ist ein Bild in der Kleinanzeigen.");

// Activer thumbs_cats
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS" ,"Aktivieren Sie Snapshot in den Kategorien");
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS_DESC" ,"Aktivieren Sie die Anzeige von Miniaturansichten zur Kategorien<br/>Wenn es ausgeschaltet ist ein Symbol <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> zeigt an, ob oder nicht es ist ein Bild in der Anzeige.");

// Code Adscence index
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE","Weitere Code auf der Homepage");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_DESC","Platzieren Sie Ihren Code adsense oder auch hier");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE","Verwenden Sie zusätzlichen Code auf der Homepage");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE_DESC","Die zus�tzlichen Code Anzeige zwischen Inserate<br />auf der Startseite und die Kategorie Seite.<br /><br />Banner, Adsense-Code, etc. ...");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE","Ort, an dem der Code in der Liste angezeigt werden ");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE_DESC","Ex. Wenn Sie w&auml;hlen, 4 gibt es 3 Inserate, bevor Sie diesen Code.<br />Der Code wird in der 4. Position angezeigt werden.");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER","Benutzen Sie den Code Banner Xoops");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER_DESC","Sie legen zwischen Xoops Werbebanner.<br />Si vous choisissez Oui<br />Legen Sie <b>NO</b> Code unten");

// Version 1.0.5
// Code Adscence Cat�gories
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE","Ver&ouml;ffentlicht Code auf den Seiten Klassen");
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE_DESC","Google adsence-Code oder Code eines Banners:<br/>Format: width = 300 height = 250");

// adslight_theme_set
define("_MI_ADSLIGHT_THEMESET","Wahl der Set-Vorlage");

// M�ta Description / keywords Categories
define("_MI_ADSLIGHT_CAT_META","Lassen Sie die Beschlagnahme Meta-Beschreibung, Meta-Keywords Kategorien?");
define("_MI_ADSLIGHT_CAT_META_DESCRIPTION","Wenn Sie diese Option auf 'Ja',<br/> 
Sie zum Schreiben von Daten Meta-Keywords und eine Beschreibung f&uuml;r jede Kategorie<br/>( Empfehlen Sie ein besseres Ranking. )");

// Version 1.0.51
// tips_writing_ad.php
define("_MI_ADSLIGHT_USE_TIPS_WRITE","Seite Anpassen Info / Beratung?");
define("_MI_ADSLIGHT_USEDESC_TIPS_WRITE","Wenn Sie Ja, schreiben Sie unter dem Titel und den Text auf der Seite Info / Beratung");
define("_MI_ADSLIGHT_TITLE_TIPS_WRITE","Titel Seite Info / Beratung");
define("_MI_ADSLIGHT_TITLEDESC_TIPS_WRITE","Schreiben Sie hier den Titel, der auf der Seite erscheinen wird info / Beratung");
define("_MI_ADSLIGHT_TEXT_TIPS_WRITE","Text auf der Seite Info / Beratung");
define("_MI_ADSLIGHT_TEXTDESC_TIPS_WRITE","Schreiben Sie hier den Text auf der Seite angezeigt Info / Beratung");

// Version 1.0.53
// adslight_maps
define("_MI_ADSLIGHT_MAPSSET","W&#228;hlen Sie die Karte aus Ihrem Land");
define("_MI_ADSLIGHT_MAPSSET_DESC","Wenn Sie die Karte Ihres Landes zu schaffen.<br />Vielen Dank an die docs Modul lesen.");
define("_MI_ADSLIGHT_MAPSW_TITLE","Breite der Karte");
define("_MI_ADSLIGHT_MAPSH_TITLE","H&#246;he der Karte");

?>