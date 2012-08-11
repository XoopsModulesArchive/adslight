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

define("_AM_ADSLIGHT_CONF","Pode&scaron;avanje");
define("_AM_ADSLIGHT_ADDON","Oglasi");
define("_AM_ADSLIGHT_ANNDEL","Izaberi Oglase koje treba izbrisati");
define("_AM_ADSLIGHT_ADDCATPRINC","Napravi kategoriju");
define("_AM_ADSLIGHT_CATNAME","Naziv :");
define("_AM_ADSLIGHT_ADDSUBCAT","Napravi podkategoriju");
define("_AM_ADSLIGHT_DELSUBCAT","Izbri&scaron;i kategoriju");
define("_AM_ADSLIGHT_MODIFSUBCAT","Uredi kategoriju");
define("_AM_ADSLIGHT_ADD","Napravi");
define("_AM_ADSLIGHT_CATDEL","Kategorija je izbrisana");
define("_AM_ADSLIGHT_OUI","da");
define("_AM_ADSLIGHT_NON","Ne");
define("_AM_ADSLIGHT_SURDELCAT","Pa&#382;nja: Jesi li siguran da ovu kategoriju sa njenim sadr&#382;ajem treba izbrisati?");
define("_AM_ADSLIGHT_IN","u");
define("_AM_ADSLIGHT_MODIF","Uredi");
define("_AM_ADSLIGHT_MODIFCAT","Kategoriju uredi");
define("_AM_ADSLIGHT_CAT","Kategorija :");
define("_AM_ADSLIGHT_SUBCAT","Podkategorija :");
define("_AM_ADSLIGHT_CONFMYA","Konfiguracija");
define("_AM_ADSLIGHT_CATADD","Kategorija je napravljena");
define("_AM_ADSLIGHT_SUBCATADD","Podkategorija je napravljena");
define("_AM_ADSLIGHT_ANNMOD","Oglas je promijenjen");
define("_AM_ADSLIGHT_NOANNVAL","Trenutno nema novih oglasa");
define("_AM_ADSLIGHT_NOMODACTIV","Moderacija nije aktivna, trenutno nema oglasa");
define("_AM_ADSLIGHT_MODANN","Oglas uredi");
define("_AM_ADSLIGHT_ALLMODANN","(Administrator mo&#382;e sve oglase ure&#273;ivati.)");
define("_AM_ADSLIGHT_HELLO","Halo ");
define("_AM_ADSLIGHT_ANNVALID","tvoj Oglas je objavljen");
define("_AM_ADSLIGHT_DEL","Izbri&scaron;i");
define("_AM_ADSLIGHT_SAVMOD","Memori&scaron;i");
define("_AM_ADSLIGHT_MODTYPE","Tip Oglasa uredi");
define("_AM_ADSLIGHT_ANNACCEPT","Tvoj Oglas smo primili");
define("_AM_ADSLIGHT_CONSULTTO","Kontakt :");
define("_AM_ADSLIGHT_THANK","Hvala");
define("_AM_ADSLIGHT_TEAMOF","Team");
define("_AM_ADSLIGHT_RETURN","Nazad");
define("_AM_ADSLIGHT_MODSUBCAT","Naziv podkategorije promjeni");
define("_AM_ADSLIGHT_MODCAT","Naziv kategorije promjeni");
define("_AM_ADSLIGHT_GO","Po&scaron;alji");
define("_AM_ADSLIGHT_SENDBY","Poslao(la) :");
define("_AM_ADSLIGHT_EMAIL","Email :");
define("_AM_ADSLIGHT_TEL","Telefon :");
define("_AM_ADSLIGHT_TOWN","Grad(Mjesto) :");
define("_AM_ADSLIGHT_COUNTRY","Zemlja :");
define("_AM_ADSLIGHT_TITLE2","Naslov :");
define("_AM_ADSLIGHT_TYPE","Tip :");
define("_AM_ADSLIGHT_PRICE2","Cijena :");
define("_AM_ADSLIGHT_CAT2","Kategorija :");
define("_AM_ADSLIGHT_DESCRIPTION","Opis :");
define("_AM_ADSLIGHT_THEREIS","Trenutno ima ");
define("_AM_ADSLIGHT_WAIT","Oglasa koji &#269;ekaju Moderaciju");
define("_AM_ADSLIGHT_ADDTYPE","Tip Oglasa dodaj");
define("_AM_ADSLIGHT_ERRORTYPE","Gre&scaron;ka : Tip");
define("_AM_ADSLIGHT_EXIST","ve&#263; postoji!");
define("_AM_ADSLIGHT_ERRORCAT","Gre&scaron;ka : Kategorija");
define("_AM_ADSLIGHT_ERRORSUBCAT","Gre&scaron;ka : Podkategorija");
define("_AM_ADSLIGHT_TYPEMOD","Tip Oglasa uredi");
define("_AM_ADSLIGHT_TYPEDEL","Tip Oglasa izbri&scaron;i");
define("_AM_ADSLIGHT_ADDTYPE2","Tip Oglasa je dodat");
define("_AM_ADSLIGHT_ACCESMYANN","Oglasi");
define("_AM_ADSLIGHT_IMGCAT","Slika :");
define("_AM_ADSLIGHT_REPIMGCAT","Od slika direktorij :");
define("_AM_ADSLIGHT_GESTCAT","Administracija kategorija");
define("_AM_ADSLIGHT_ADDPRICE","Dodaj Tip Cijena");
define("_AM_ADSLIGHT_MODPRICE","Tip Cijena uredi");
define("_AM_ADSLIGHT_ADDPRICE2","Tip Cijena je dodat");
define("_AM_ADSLIGHT_PRICEMOD","Tip Cijena je dodat");
define("_AM_ADSLIGHT_PRICEDEL","Tip Cijenaje izbrisan");
define("_AM_ADSLIGHT_ORDRE","Redoslijed :");
define("_AM_ADSLIGHT_ORDRECLASS","Sortiranje kategorija :");
define("_AM_ADSLIGHT_ORDREALPHA","Alfabetski");
define("_AM_ADSLIGHT_ORDREPERSO","Sortiranje izbora");
define("_AM_ADSLIGHT_BIGCAT","Glavni meni");
define("_AM_ADSLIGHT_HELP1","<B>Napravi kategoriju :</B> Klikni na Icon <IMG SRC=\"".XOOPS_URL."/modules/Ads/images/plus.gif\" BORDER=0 WIDTH=10 HEIGHT=10 alt=\"\"> pored Kategorije gdje se treba Kategorija dodati.<P><B>Promjenuti ili Izbrisati Kategoriju :</B> Klikni na naziv Kategorije");
define("_AM_ADSLIGHT_HELP2","<B>Sortiranje Kategorija:</B> Broj u zagradi ozna&#269;ava redoslijed Kategorije, negativna vrijednost se mo&#382;e primjenuti.: -1");
define("_AM_ADSLIGHT_CONFSAVE","Promjena je memorisana");
define("_AM_ADSLIGHT_ANNOCANPOST","Mogu li Gosti slati Oglase :");
define("_AM_ADSLIGHT_PERPAGE","Broj Oglasa po stranici :");
define("_AM_ADSLIGHT_MONEY","Simbol valute :");
define("_AM_ADSLIGHT_NUMNEW","Novi Oglasi :");
define("_AM_ADSLIGHT_MODERAT","Oglase Moderirati :");
define("_CAL_MAXIIMGS","Max. veli&#269;ina slike :");
define("_AM_ADSLIGHT_TIMEANN","Vrijeme prikazivanje Oglasa:");
define("_AM_ADSLIGHT_INOCTET","u bytima");
define("_AM_ADSLIGHT_INDAYS","Dana");
define("_AM_ADSLIGHT_TYPEBLOC","Blok tip :");
define("_AM_ADSLIGHT_ANNRAND","slu&#269;ajni Oglas");
define("_AM_ADSLIGHT_LASTTEN","zadnjih 10 Oglasa");
define("_AM_ADSLIGHT_NEWTIME","Neue Anzeige von :");
define("_AM_ADSLIGHT_DISPLPRICE","Cijenu prika&#382;i :");
define("_AM_ADSLIGHT_DISPLPRICE2","Cijenu prika&#382;i :");
define("_AM_ADSLIGHT_INTHISCAT","u ovoj Kategoriji");
define("_AM_ADSLIGHT_DISPLSUBCAT","Podkategoriju prika&#382;i :");
define("_AM_ADSLIGHT_ONHOME","na start stranici ovog modula");
define("_AM_ADSLIGHT_NBDISPLSUBCAT","prika&#382;i podkategorije :");
define("_AM_ADSLIGHT_IF","ako");
define("_AM_ADSLIGHT_ISAT","je na");
define("_AM_ADSLIGHT_VIEWNEWCLASS","prika&#382;i nove Oglase :");
define("_AM_ADSLIGHT_PERMADDNG","dodavanje %s nije dozvoljeno za %s za grupe %s");
define("_AM_ADSLIGHT_PERMADDOK"," %s odobrenje za %s za grupe %s");
define("_AM_ADSLIGHT_PERMRESETNG","Odobrenja za grupe se nemogu mjenjati %s");
define("_AM_ADSLIGHT_PERMADDNGP","Moraju se svi Artikli ozna&#269;iti.");
define("_AM_ADSLIGHT_EXPIRE","Oglas isti&#269;e za (Dana)");
define("_AM_ADSLIGHT_DBUPDATED","Baza podataka je aktulizirana.");
define("_AM_ADSLIGHT_CONTACT_BY_EMAIL","E-mail");
define("_AM_ADSLIGHT_CONTACT_BY_PM","Private poruka");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH","Oboje E-Mail i Privatna poruka");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE","Telefonom");
define("_AM_ADSLIGHT_CONTACTBY","Kontakt preko :");
define("_AM_ADSLIGHT_PREMIUM","Premium oglasi :");
define("_AM_ADSLIGHT_OK","prihvatam");
define("_AM_ADSLIGHT_CATSMOD","Kategorija je promijenjena");
define("_AM_ADSLIGHT_ADDED_ON"," kreiran dana ");
define("_AM_ADSLIGHT_NUMANN","Oglas Br. :");
define("_AM_ADSLIGHT_ACTIVE","Aktivan");
define("_AM_ADSLIGHT_INACTIVE","Rezervisan");
define("_AM_ADSLIGHT_SOLD","Prodato");
define("_AM_ADSLIGHT_STATUS","Statut artikla ");
define("_AM_ADSLIGHT_UPDATECOMPLETE","Update je kompletan");
define("_AM_ADSLIGHT_UPDATEMODULE","<b>Update Modula</b>");
define("_AM_ADSLIGHT_UPGRADEFAILED","Update nije uspjelo");
define("_AM_ADSLIGHT_UPGRADEFAILED0","Update");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR","Pristup gre&scaron;ka");
define("_AM_ADSLIGHT_THANKS","Zahvaljujemo ti se &scaron;to koristi&scaron; na&scaron;e Oglase");
define("_AM_ADSLIGHT_WEBMASTER","Webmaster");
define("_AM_ADSLIGHT_YOUR_AD","Mali Oglasi");
define("_AM_ADSLIGHT_AT","kod");
define("_AM_ADSLIGHT_VEDIT_AD","Ovdje mo&#382;e&scaron; svoj Oglas objaviti i urediti");
define("_AM_ADSLIGHT_YOUR_AD_ON","Oglas na");
define("_AM_ADSLIGHT_APPROVED","je potvr&#273;en.");
define("_AM_ADSLIGHT_EXPIRED","je istekao i izbrisan je.");

define("_AM_ADSLIGHT_CHECKER", 'Provjera direktorija');
define("_AM_ADSLIGHT_DIRPERMS", 'Provjeridalise u direktorije mo&#382;e pisati(CHMOD) ! => ');

define("_AM_ADSLIGHT_PHOTO1","Broj slika :");
define("_AM_ADSLIGHT_SUBMITTER","Poslao(la) ");
define("_AM_ADSLIGHT_TITLE","Naslov");
define("_AM_ADSLIGHT_LID","Oglasa ID");
define("_AM_ADSLIGHT_DATE","Datum objave");
define("_AM_ADSLIGHT_DESC","Opis");
define("_AM_ADSLIGHT_FREECAT","Ovo je slobodna Kategorija");
define("_AM_ADSLIGHT_MODERATE_CAT","Kategoriju Moderirati");
define("_AM_ADSLIGHT_VISIT_LINK","Ovdje klikni i vidi kompletan Oglas:");
define("_AM_ADSLIGHT_LISTING_NUMBER","Broj Oglasa ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW","Ovdje klikni i vidi kompletan Oglas");
define("_AM_ADSLIGHT_NOREPLY","!!!  Molimo te da ne &scaron;alje&scaron; E-Mail na ovu adresu, ne odgovaram na E-Mail.  !!!");
define("_AM_ADSLIGHT_ADDED_TO_CAT","Novi Oglas je u ovu kategoriju poslat ");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","Abonirano je obavje&scaron;tenje ove vrste");
define("_AM_ADSLIGHT_ERROR_NOTIF","Ako je ova obavijest Gre&scaron;ka onda je u opciji Obavijesti deaktiviraj:");
define("_AM_ADSLIGHT_FOLLOW_LINK","Ovdje je Link ka Oglasu");
define("_AM_ADSLIGHT_CAPTCHA","Sigurnosni Code :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","Moderiraj podkategoriju u ovoj kategoriji");

define("_AM_ADSLIGHT_DOCUMENTATION","Dokumentacija");
define("_AM_ADSLIGHT_FEATURES","Funkcije");
define("_AM_ADSLIGHT_CLONE","Kloniraj");
define("_AM_ADSLIGHT_INCOMPLETE","Nekompletno");

// Ajouter par iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE","Tip podnosioca dodaj");
define("_AM_ADSLIGHT_MODUSURE","Tip podnosioca uredi");
define("_AM_ADSLIGHT_ADDUSURE2","Vrsta podnosioca je dodata");
define("_AM_ADSLIGHT_USUREMOD","Mustra podnosioca je promijenjena");
define("_AM_ADSLIGHT_USUREDEL","Vrsta podnosioca je izbrisana ");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","Autor");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Change log");
define("_AM_ADSLIGHT_ABOUT_CREDITS","Krediti");
define("_AM_ADSLIGHT_ABOUT_LICENSE","Licena");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","Info-Modul");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","Website Support");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","Datum realizacije");
define("_AM_ADSLIGHT_ABOUT_STATUS","Statut");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","Osobe koje su pomogle u programiranju modula");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","Nik ime");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","Web stranica");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","Verzija");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","Pregled");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Mogu slati Oglase" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "Provjeri Kategorije kojima ima&scaron; pristup" ) ;
define("_AM_ADSLIGHT_GROUPPERMDESC" , "Izaberi grupe koje mogu slati Oglase." ) ;
define("_AM_ADSLIGHT_GROUPPERM","Odobrenja dodjeli ");
define("_AM_ADSLIGHT_SUBMITFORM","Odredi odobrenja za slanje podataka u oglasu");
define("_AM_ADSLIGHT_SUBMITFORM_DESC","Odredi koji Oglasi se mogu objaviti");
define("_AM_ADSLIGHT_VIEWFORM","Odobrenja u Oglasima prikazati");
define("_AM_ADSLIGHT_VIEWFORM_DESC","Izaberi grupe koje mogu odobrenja vidjeti");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC","Izaberi ko sa&#382;etke mo&#382;e vidjeti");
define("_AM_ADSLIGHT_SUPPORT","Podr&#382;i ovaj Program");
define("_AM_ADSLIGHT_OP","Pro&#269;itaj moje mi&scaron;ljenje");
define("_AM_ADSLIGHT_PREMIUM_DESC","Izaberi grupe koje mogu produ&#382;ivati Oglase");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK","Modul je sa najnovijom verziom kod tebe na web stranici.");
define("_AM_ADSLIGHT_RELEASEISNOTOK","Modul je star, ima novija verzija.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD","Downloduj.");
define("_AM_ADSLIGHT_NBR_PHOTO","Slika");

//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<b>Meta Opis:</b><br/>Za bolju optimizaciju,</b>upi&scaron;i ta&#269;an opis oglasa. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<b>Meta-Keywords:</b><br/>Za bolju optimizaciju,</b>upi&scaron;i klju&#269;ne rije&#269;i, u vezi postavljene kategorije.<br/><b><font color=\"#ff3300\">rije&#269;i rastavi sa zarezom</font></b>.Npr. ( english, espagne, france,bosna,...)");

//Version 1.053
// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK","XML-podatak za Kartu ne postoji, ili nije sa Kartom u pode&scaron;avanju izabran.");
define("_AM_ADSLIGHT_XMLUPGRADE","Aktualiziranje XML-podaka");

//Version 1.054
// Support_forum.php
define("_AM_ADSLIGHT_SUPPORTFORUM_TITLE","Lista Support-Foruma");
define("_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS","Link");
define("_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG","Govor");
define("_AM_ADSLIGHT_SUPPORTFORUM_DESC","Opis");
define("_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE","Prijevod");

////////////////////////////
//// Version 1.06 //////////

// ../admin/index.php

// Stat
define("_AM_ADSLIGHT_STAT_TITLE","Statistika");
define("_AM_ADSLIGHT_STAT_NUM1","Oglasi");
define("_AM_ADSLIGHT_STAT_NUM2","Kategorije");
define("_AM_ADSLIGHT_STAT_NUM3","Korisnici");
define("_AM_ADSLIGHT_STAT_NUM4","Komentari");


// Option Menu
define("_AM_ADSLIGHT_USERMENU_TITLE","Mogu&#263;nosti");
define("_AM_ADSLIGHT_USERMENU_SENDMAIL"," Po&#353;alji e-mail");
define("_AM_ADSLIGHT_USERMENU_COMMENT"," Komentari");
define("_AM_ADSLIGHT_USERMENU_BAMMIER"," Banneri");

// Menu Category
define("_AM_ADSLIGHT_CATMENU_TITLE","Kategorije");
define("_AM_ADSLIGHT_CATMENU_CATEGORY"," Dodaj kategorijama");
define("_AM_ADSLIGHT_CATMENU_MODIFCAT"," Category Management");

// Menu Annonces
define("_AM_ADSLIGHT_ADSMENU_TITLE","Oglasi");
define("_AM_ADSLIGHT_ADSMENU_VALIDADS"," Po&#353;aljite oglasi");
define("_AM_ADSLIGHT_ADSMENU_VIEWADS"," Prika&#382;i oglase");
define("_AM_ADSLIGHT_ADS_MODIFADS"," Uredi Oglasi");

// Menu Downloads
define("_AM_ADSLIGHT_DOWNLOADS_TITLE","Preuzmite");
define("_AM_ADSLIGHT_DOWNLOADS_PLUGINS"," Plugins");
define("_AM_ADSLIGHT_DOWNLOADS_MAPS"," Karte");

// Menu Devellopment
define("_AM_ADSLIGHT_DEVLLP_TITLE","Razvoj");
define("_AM_ADSLIGHT_DEVLLP_HACK"," Predlo&#382;i Hack");
define("_AM_ADSLIGHT_DEVLLP_TRANSLATE"," Po&#353;aljite Prijevod");
define("_AM_ADSLIGHT_DEVLLP_CORRECTION"," Predlo&#382;i ispravak");
define("_AM_ADSLIGHT_DEVLLP_MAPFLASH"," Po&#353;aljite karte (.Swf)");
define("_AM_ADSLIGHT_DEVLLP_FORUM"," Forum");

// Menu Faire un Don
define("_AM_ADSLIGHT_DONATE_TITLE"," Darovati");
define("_AM_ADSLIGHT_DONATE","AdsLight nije komercijalni projekt,<br />njegova uporaba je besplatna i da &#263;e ostati tako.<br />Mo&#382;ete, ako &#382;elite,<br />Napravite donacije projekt za mene poticanja.<br />");


////RSS Forum
define("_AM_ADSLIGHT_MENURSSFORUM_TITLE","uzajamna pomo&#263; forum AdsLight");
define("_AM_ADSLIGHT_MENURSSFORUM_URL","http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=66");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK1","http://www.i-luc.fr/adslight/modules/newbb/#googtrans/auto/hr");
define("_AM_ADSLIGHT_MENURSSFORUM_GOFORUM","Idi na forum");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK2","http://www.i-luc.fr/adslight/modules/profile/register.php#googtrans/auto/hr");
define("_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT","potpisati");

////	RSS AdsLight News
define("_AM_ADSLIGHT_MENURSS_TITLE","Vijesti AdsLight");
 
// ../admin/view_ads.php
define("_AM_ADSLIGHT_ADSVALIDE","Oglasi va&#382;e&#263;i");
define("_AM_ADSLIGHT_NOANNVALADS","Trenutno nema oglasa");


// Logo Paypall Donate
define("_AM_ADSLIGHT_DONATE_LOGO", '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

');



?>