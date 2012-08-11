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
define("_MI_ADSLIGHT_NAME ","Oglasi");
define("_MI_ADSLIGHT_MENUADD","Po&scaron;alji Oglas");
define("_MI_ADSLIGHT_DESC","Mali Oglasi");
define("_MI_ADSLIGHT_BNAME1","Najnoviji Oglasi");
define("_MI_ADSLIGHT_BNAME1_DESC","Blok najnovijih Oglasa");
define("_MI_ADSLIGHT_BNAME2","Top Oglasi");
define("_MI_ADSLIGHT_BNAME2_DESC","Blok Top oglasa");

// Noms des lments du menu admin
define("_MI_ADSLIGHT_ADMENU0","Administracija");
define("_MI_ADSLIGHT_ADMENU1","Kategorije");
define("_MI_ADSLIGHT_ADMENU2","Odobrenja");
define("_MI_ADSLIGHT_ADMENU3","Blokovi");
define("_MI_ADSLIGHT_ADMENU4","Pode&scaron;avanja");
define("_MI_ADSLIGHT_ADMENU5","Opcije");
define("_MI_ADSLIGHT_ADMENU6","Import");
define("_MI_ADSLIGHT_ADMENU7","O modulu");
define("_MI_ADSLIGHT_ADMENU8","Tekst & Tabele");
define("_MI_ADSLIGHT_ADMENU9","Idi u Modul");
define("_MI_ADSLIGHT_ADMENU10","Aktualiziraj");
define("_MI_ADSLIGHT_ADMENU11","Support Forum");

define("_MI_ADSLIGHT_CONFSAVE","Konfiguracija memorisana");
define("_MI_ADSLIGHT_CANPOST","gosti mogu slati:");
define("_MI_ADSLIGHT_PERPAGE","Oglasa po stranici:");
define("_MI_ADSLIGHT_RES_PERPAGE","Sa&#382;etak stranice :");
define("_MI_ADSLIGHT_MONEY","Simbol valute:");
define("_MI_ADSLIGHT_KOIVI","Koivi Editor upotrijebiti:");
define("_MI_ADSLIGHT_NUMNEW","Broj novih oglasa:");
define("_MI_ADSLIGHT_MODERAT","Oglase moderisati:");
define("_MI_ADSLIGHT_DAYS","Trajanje Oglasa:");
define("_MI_ADSLIGHT_MAXIIMGS","Max. Gr&ouml;sse des Foto :");
define("_MI_ADSLIGHT_MAXWIDE","Max. veli&#269;ina slike :");
define("_MI_ADSLIGHT_MAXHIGH","Max. visina slike :");
define("_MI_ADSLIGHT_INBYTES","u Bytima");
define("_MI_ADSLIGHT_INPIXEL","in Pixelima");
define("_MI_ADSLIGHT_INDAYS","Broj dana");
define("_MI_ADSLIGHT_MUSTLOGIN","Gosti mogu slati svoje Oglase.");
define("_MI_ADSLIGHT_THRUMAIL","Ako je DA izabrano onda je mogu&#263;e da Gosti mogu Spam poslati!");
define("_MI_ADSLIGHT_TYPEBLOC","Tip Bloka :");
define("_MI_ADSLIGHT_JOBRAND","slu&#269;ajne prikazati");
define("_MI_ADSLIGHT_LASTTEN","zadnjih 10 prikazati");
define("_MI_ADSLIGHT_NEWTIME","Prika&#382;i Male Oglase u zadnjih x dana:");
define("_MI_ADSLIGHT_DISPLPRICE","Prika&#382;i cijenu:");
define("_MI_ADSLIGHT_DISPLPRICE2","Prika&#382;i cijene :");
define("_MI_ADSLIGHT_INTHISCAT","u Kategoriji");
define("_MI_ADSLIGHT_DISPLSUBCAT","Podkategoriji :");
define("_MI_ADSLIGHT_ONHOME","na start stranici Modula");
define("_MI_ADSLIGHT_NBDISPLSUBCAT","Broj Podkategorija :");
define("_MI_ADSLIGHT_IF","ako");
define("_MI_ADSLIGHT_ISAT","je na");
define("_MI_ADSLIGHT_VIEWNEWCLASS","Prika&#382;i Male Oglase :");
define("_MI_ADSLIGHT_ORDREALPHA","Alfabetski");
define("_MI_ADSLIGHT_ORDREPERSO","Personima");
define("_MI_ADSLIGHT_CSORT_ORDER","Standardno sortiranje za Kategorije");
define("_MI_ADSLIGHT_LSORT_ORDER","Standardno sortiranje za Oglase ");
define("_MI_ADSLIGHT_ORDER_TITLE","Listu sortirati po naslovima");
define("_MI_ADSLIGHT_ORDER_PRICE","Listu sortirati po cijenama");
define("_MI_ADSLIGHT_ORDER_DATE","Listu sortirati po datumu (standard)");
define("_MI_ADSLIGHT_ORDER_POP","Listu sortirati po zadjoj pretrazi");
define("_MI_ADSLIGHT_DBUPDATED","Baza podataka je aktulizirana.");
define("_MI_ADSLIGHT_GPERM_G_ADD" , "mo&#382;e&scaron; dodati" ) ;
define("_MI_ADSLIGHT_CAT2GROUPDESC" , "Provjeri kategorije koje obajavljuje&scaron;" ) ;
define("_MI_ADSLIGHT_GROUPPERMDESC" , "Izabrane grupe mogu Male Oglase slati." ) ;
define("_MI_ADSLIGHT_GROUPPERM","Potvrdi odobrenje");
define("_MI_ADSLIGHT_SUBMITFORM","Odobrenje za Oglase po&scaron;alji");
define("_MI_ADSLIGHT_SUBMITFORM_DESC","Izaberi ko Oglase mo&#382;e slati");
define("_MI_ADSLIGHT_VIEWFORM","ko mo&#382;e Oglase &#269;itati");
define("_MI_ADSLIGHT_VIEWFORM_DESC","Izaberi ko smije Oglase vidjeti");
define("_MI_ADSLIGHT_VIEW_RESUMEFORM_DESC","Izaberi ko mo&#382;e vidjeti sa&#382;etak");
define("_MI_ADSLIGHT_SUPPORT","Support od Malih Oglasa");
define("_MI_ADSLIGHT_OP"," ");
define("_MI_ADSLIGHT_PREMIUM","ko mo&#382;e Premium Male Oglase slati");
define("_MI_ADSLIGHT_PREMIUM_DESC","Izaberi ko smije odrediti dokle Mali Oglasi smiju se javno prikazivati");
	

// Notification event descriptions and mail templates
define("_MI_ADSLIGHT_CATEGORY_NOTIFY","Kategorija"); 
define("_MI_ADSLIGHT_CATEGORY_NOTIFYDSC","napravi opciju obavijesti za ovu kategoriju.");
define("_MI_ADSLIGHT_NOTIFY","Lista"); 
define("_MI_ADSLIGHT_NOTIFYDSC","Opcija obavijesti za ovu Listu.");	
define("_MI_ADSLIGHT_GLOBAL_NOTIFY","Cjelokupan Modul ");
define("_MI_ADSLIGHT_GLOBAL_NOTIFYDSC","Globalno pode&scaron;avanje obavijesti.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFY","Novi Mali Oglasi");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYCAP","Obavijest za Male Oglase u ovoj Kategoriji.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYDSC","Obavijest za objavljivanje Malih Oglasa u ovoj Kategoriji.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-obavijest : Ima novi glas u ovoj Kategoriji");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFY","Novi Mali Oglasi");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYCAP","Obavijest ako ima novi Mali Oglas u ovoj Kategoriji.");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYDSC","Obavijest ako ima Mali Oglas objavljen u ovoj Kategoriji.");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-obavijest : Ima novi glas u ovoj Kategoriji");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFY","Aktulizirani Male Oglasi");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYCAP","Obavijest ako su aktulizirani Mali Oglasi.");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYDSC","Obavijest ako ima Malih Oglasa u ovoj Kategoriji aktuliziranih.");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-obavijest : Ima novi glas u ovoj Kategoriji");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFY","Izbrisan Mali Oglas");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYCAP","Obavijest ako ima izbrisan Mali Oglas u ovoj Kategoriji.");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYDSC","Obavijest ako ima objavljenih Malih Oglasa u ovoj Kategoriji.");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-obavijest : Ima novi glas u ovoj Kategoriji");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFY","Novi Mali Oglasi");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYCAP","Obavijest ako ima Malih Oglasa u svim Kategorijama.");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYDSC","Obavijest ako ima novih Malih Oglasa u.");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-obavijest : Ima novi glas u ovoj Kategoriji");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFY","Novi Mali Oglasi");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYCAP","Obavijesti za Male Oglase u svim Kategorijama.");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYDSC","Obavijesti za nove Male Oglase u svim Kategorijama.");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-obavijest : Ima novi glas u ovoj Kategoriji");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFY","Aktualizirani Mali Oglasi");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYCAP","Obavijest za aktulizirane Male Oglase u svim Kategorijama.");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYDSC","Obavijest ako ima aktuliziranih Malih Oglasa u svim Kategorijama.");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-obavijest : Aktualizirani Mali Oglasi u ovoj Kategoriji");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFY","Izbrisani Mali Oglasi");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYCAP","Obavijest ako ima izbrisanih Malih Oglasa u svim Kategorijama.");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYDSC","Obavijest za izbrisane Male Oglase u svim Kategorijama.");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: auto-obavijest : Izbrisani Mali Oglasi u kategorijama");
define("_MI_ADSLIGHT_RATE_USER","Dozvoli registrovanim da ocjenjuju prodava&#269;a");
define("_MI_ADSLIGHT_RATE_ITEM","Dozvoli registrovanim da ocjenjuju Male Oglase");
define("_MI_ADSLIGHT_DIFF_NAME","Dozvoli registrovanim da mjenjaju svoje Nik ime (kod objavljivanja svojih Oglasa)");
define("_MI_ADSLIGHT_DIFF_EMAIL","Dozvoli registrovanim da koriste razne svoje E-mail Adrese (kod objavljivanja svojih Oglasa)");
define("_MI_ADSLIGHT_NOT_PREMIUM","Broj slika - Za registrovane");
define("_MI_ADSLIGHT_NOT_PREMIUM_DESC" ,"Odredi koliki broj slika u svojim Oglsima registrovani mogu koristiti");
define("_MI_ADSLIGHT_NUMBPICT_TITLE","Broj slika za - Premium &#269;lanove");
define("_MI_ADSLIGHT_NUMBPICT_DESC" ,"Odredi koliki broj slika u svojim Oglsima premium &#269;lanovi mogu koristit");
define("_MI_ADSLIGHT_SMNAME1" ,"Po&scaron;alji");
define("_MI_ADSLIGHT_THUMW_TITLE" , "&scaron;irina pregledne slike oglasa");
define("_MI_ADSLIGHT_THUMBW_DESC" , "&scaron;irina pregledne slike oglasa u Pixelima<br />Sa datom &scaron;irinom se pregledna slika prikazuje u datoj veli&#269;ini<br />Od slike se originalana veli&#269;ina zadr&#382;ava u punom prikazu");
define("_MI_ADSLIGHT_THUMBH_TITLE" , "Visina pregledne slike");
define("_MI_ADSLIGHT_THUMBH_DESC" , "Visina pregledne slike oglasa u Pixelima<br />Sa datom visinom se pregledna slika prikazuje u datoj veli&#269;ini<br />Od slike se originalana veli&#269;ina zadr&#382;ava u punom prikazu");
define("_MI_ADSLIGHT_RESIZEDW_TITLE" , "Prilago&#273;ena &scaron;irina slike");
define("_MI_ADSLIGHT_RESIZEDW_DESC" , "Prilago&#273;ena &scaron;irina slike u Pixelima<br />Slika se sa datom &scaron;irinom prikazuje<br />Od slike se originalana veli&#269;ina zadr&#382;ava u punom prikazu<br /> Ako je slika prevelika onda se automatski na ovu veli&#269;inu prilago&#273;ava <br /> sa time da se Template stranice ne poremeti");
define("_MI_ADSLIGHT_RESIZEDH_TITLE" , "Prilago&#273;ena visina slike");
define("_MI_ADSLIGHT_RESIZEDH_DESC" , "Prilago&#273;ena visina slike u Pixelima<br />Slika se sa datom visinom prikazuje<br />Od slike se originalana veli&#269;ina zadr&#382;ava u punom prikazu<br /> Ako je slika prevelika onda se automatski na ovu veli&#269;inu prilago&#273;ava <br /> sa time da se Template stranice ne poremeti");
define("_MI_ADSLIGHT_ORIGW_TITLE" , "Max. Originalna &scaron;irina slike");
define("_MI_ADSLIGHT_ORIGW_DESC" , "Maximalna &scaron;irina Originalne slike u Pixelelima<br />Originalna slika se sa datom &scaron;irinom nesmije prekora&#269;iti &scaron;irinu <br />");
define("_MI_ADSLIGHT_ORIGH_TITLE" , "Max. visina Originalne slike");
define("_MI_ADSLIGHT_ORIGH_DESC" , "Maximalna visina Originalne slike u Pixelelima<br />Originalna slika se sa datom visinom nesmije prekora&#269;iti visinu <br />");
define("_MI_ADSLIGHT_UPLOAD_TITLE" , "Ordner za upload");
define("_MI_ADSLIGHT_UPLOAD_DESC" , "Veza ordnera za upload<br />npr. kod Linux servera : /var/www/uploads<br />ili u Windows serverima : C:/Program Files/www");
define("_MI_ADSLIGHT_LINKUPLOAD_TI","Link za upload ordner");
define("_MI_ADSLIGHT_LINKUPLOAD_DE","Link je url adresa za Root Upload ordner <br />npr. http://www.tvojastranica.ba/uploads");
define("_MI_ADSLIGHT_MAXFILEBYTES_T","Max. veli&#269;ina podatka u Bytima");
define("_MI_ADSLIGHT_MAXFILEBYTES_D","Odredi max. veli&#269;inu u bytima kou slika mo&#382;e imati<br />npr. 512000 za 500 KB");
define("_MI_ADSLIGHT_EDITOR","Izaberi Editoe:");
define("_MI_ADSLIGHT_LIST_EDITORS","Odredi Editor koji se treba koristiti.");
define("_MI_ADSLIGHT_LIGHTBOX","Lightbox Efekt");
define("_MI_ADSLIGHT_LIGHTBOX_DESC","Koristi Lightbox Efekt za prikaz slika.");
define("_MI_ADSLIGHT_USE_COUNTRY" ,"Prika&#382;i polje Zemlje");
define("_MI_ADSLIGHT_USE_COUNTRY_DESC" ,"Ako je 'Ne' izabrano onda se polje Zemlje ne prikazuje");
define("_MI_ADSLIGHT_SOLD_DAYS","Prika&#382;i da je Artikl  Oglasu prodat za X dana");
define("_MI_ADSLIGHT_SOLDINDAYS","Eingabe Anzahl der Tage");
define("_MI_ADSLIGHT_ALMOST","Odredi za koliko dana se alarmira isticanje nekog Oglasa");
define("_MI_ADSLIGHT_ALMOST_DESC","U danima");
define("_MI_ADSLIGHT_MAIN_CAT","Dozvoli registrovanim svoje Oglase da &scaron;alju u glavnu kategoriju");
define("_MI_ADSLIGHT_MAIN_CAT_DESC","ili dozvoli im da sami kreiraju podkategorije");
define("_MI_ADSLIGHT_ADMIN_EDITOR","Editor za Admine:");
define("_MI_ADSLIGHT_LIST_ADMIN_EDITORS","Editor koji Admin u administraciji koristi.");
define("_MI_ADSLIGHT_CAT_DESC","Opis kategorije");
define("_MI_ADSLIGHT_DESC_CAT_DESC","Napi&scaron;i opis Kategorije.");
define("_MI_ADSLIGHT_MUST_ADD_CAT","Prije svega napravi prvo Kategoriju.");
define("_MI_ADSLIGHT_BNAME3","Novi Mali Oglas sa slikom");
define("_MI_ADSLIGHT_BNAME3_DESC","Blok sa novim Malim Oglasom i slikom ");
define("_MI_ADSLIGHT_BNAME4","Top Mali Oglasi sa slikom");
define("_MI_ADSLIGHT_BNAME4_DESC","Blok za Top Male Oglase sa slikom");
define("_MI_ADSLIGHT_USE_CAPTCHA" ,"Koristi sigurnosni code");

// Menu AdsLight
define("_MI_ADSLIGHT_SMENU1","Tvoji Mali Oglasi");
define("_MI_ADSLIGHT_SMENU2","Po&scaron;alji");
define("_MI_ADSLIGHT_SMENU3","Tra&#382;i"); 

// support.php 
define("_MI_ADSLIGHT_SUPPORT01"," Ako ima&scaron; predlog za pobolj&scaron;anje modula:<br /><br />- Korekturu<br />- Prevod Modula<br />- Predlog<br />- Ili da prijavi&scaron; gre&scaron;ku<br />");
define("_MI_ADSLIGHT_SUPPORT02","Idi na Support-Forum AdsLight");
define("_MI_ADSLIGHT_SUPPORT03","> Support-Forum AdsLight <");

// Bloc Carte de France
define("_MI_ADSLIGHT_MAPFRANCE","Karta od Bosne i Hercegovine");
define("_MI_ADSLIGHT_MAPFRANCE_DESC","U tvojoj blizini");

// Bloc Ajouter une annonce
define("_MI_ADSLIGHT_ADDMENU","Dodaj Mali Oglas");
define("_MI_ADSLIGHT_ADDMENU_DESC","Meni");

// version Adslight 1.0.2
// Activer RewriteUrl
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL" ,"Aktiviraj Rewrite URL");
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL_DESC" ,"Aktiviraj prepis url-a, zabolji SEO.<br/>Upustvo instalacije nalazi se u README.txt");

// Activer thumbs_index
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX" ,"Aktiviraj miniaturni Index");
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX_DESC" ,"Aktiviraj prikaz minijaturnog izgleda na index stranici<br/>Ako je isklju&#269;en Symbol <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> onda on prikazuje, dali ima ili nema slika u oglasu.");

// Activer thumbs_cats
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS" ,"Aktiviraj Snapshot u Kategorijama");
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS_DESC" ,"Aktiviraj miniaturni prikaz Oglasa u Kategorijama<br/>Ako je isklju&#269;en Symbol <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> onda on prikazuje, dali ima ili nema slika u oglasu.");

// Code Adscence index
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE","Adsense Code na stranici");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_DESC","Unesi Code adsense ovdje");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE","Upotriebi dodatni code na stranici");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE_DESC","Dodatni Code se izme&#273;u onda on prikazuje, dali ima ili nema slika u oglasuu Inserti<br />na strtstranici modula i na stranicama kategorija.<br /><br />Banner, Adsense-Code, itd. ...");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE","Mjesto, gdje se Code u listi prikazuje ");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE_DESC","Ex. Ako izabere&scaron;, 4 oni daju 3 Inserta, prije ovog Code.<br />Code se u 4. Poziciji prikazuje.");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER","Upotrijebi Code Baner od Xoops-a");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER_DESC","Postavi izme&#273;u Xoops Banera.<br />Ako izabere&scaron; DA<br />Onda postavi <b>NE</b> Code ispod");

// Version 1.0.5
// Code Adscence Catégories
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE","Objavljeni Code na stranici Klasse");
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE_DESC","Google adsence-Code ili Code nekog Banera:<br/>Format: width = 300 height = 250");

// adslight_theme_set
define("_MI_ADSLIGHT_THEMESET","Izaberi Set-prezentaciju");

// Méta Description / keywords Categories
define("_MI_ADSLIGHT_CAT_META","Postavi Meta-Opise, Meta-Keywords Kategorije?");
define("_MI_ADSLIGHT_CAT_META_DESCRIPTION","YAko je opcija sa 'Da' izabrana,<br/> 
onda upi&scaron;i Meta-Keywords i opis za svaku Kategoriju<br/>( SEO je bolji. )");

// Version 1.0.51
// tips_writing_ad.php
define("_MI_ADSLIGHT_USE_TIPS_WRITE","Stranicu podesi sa Info / Savjeti?");
define("_MI_ADSLIGHT_USEDESC_TIPS_WRITE","Ako je Da izabrano, onda upi&scaron;i naslov i tekst na stranici Info / Savjeti");
define("_MI_ADSLIGHT_TITLE_TIPS_WRITE","Naslov stranice Info / Savjeti");
define("_MI_ADSLIGHT_TITLEDESC_TIPS_WRITE","Napi&scaron;i naslov, koji se prikazuje na vrhu stranice info / Savjeti");
define("_MI_ADSLIGHT_TEXT_TIPS_WRITE","Tkst na stranici Info / Savjeti");
define("_MI_ADSLIGHT_TEXTDESC_TIPS_WRITE","Napi&scaron;i tekst, koji se prikazuje na vrhu stranice Info / Beratung");

// Version 1.0.53
// adslight_maps
define("_MI_ADSLIGHT_MAPSSET","Odaberite karticu iz Va&#353;e zemlje");
define("_MI_ADSLIGHT_MAPSSET_DESC","Ako &#382;elite stvoriti karti svoje zemlje.<br />Hvala vam za &#269;itanje dokumenata modula.");
define("_MI_ADSLIGHT_MAPSW_TITLE","&#352;irina karte");
define("_MI_ADSLIGHT_MAPSH_TITLE","Visina karti");

?>