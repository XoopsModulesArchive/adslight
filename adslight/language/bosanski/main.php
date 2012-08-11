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


define("_ADSLIGHT_ADDON","Dodaj");
define("_ADSLIGHT_ANNONCES","Mali oglasi  ");
define("_ADSLIGHT_LOGOLINK","Xoops Modul AdsLight za besplatne oglase");
define("_ADSLIGHT_MAIN","Glavna stranica");
define("_ADSLIGHT_ADDFROM","Mali Oglasi  ");
define("_ADSLIGHT_NEWTOD","Danas novi Oglasi u ovoj kategoriji");
define("_ADSLIGHT_NEWTRED","Novi Oglasi u adnja 3 dana u ovoj kategoriji");
define("_ADSLIGHT_NEWWEEK","Novi Oglasi u zadnjih 7 dana u ovoj kategoriji");
define("_ADSLIGHT_INTRO","<b>Tra&#382;i po Malim oglasima<br />Tra&#382;enu rije&#269; upi&scaron;i<br /></b>");
define("_ADSLIGHT_PRICE","Cijena");
define("_ADSLIGHT_DATE","Datum");
define("_ADSLIGHT_TITLE","Naslov");
define("_ADSLIGHT_CAT","Kategorija");
define("_ADSLIGHT_THE","Vidi ");
define("_ADSLIGHT_LASTADD","zadnjih Oglasa");
define("_ADSLIGHT_PREV","Prethodni Oglas");
define("_ADSLIGHT_NEXT","Sljede&#263;i Oglas");
define("_ADSLIGHT_THEREIS","Ukupno");
define("_ADSLIGHT_INTHISCAT","Oglasa u ovoj Kategoriji");
define("_ADSLIGHT_AVAILAB","Podkategorije :");
define("_ADSLIGHT_ADMINCADRE","Administracija");
define("_ADSLIGHT_WAIT","Oglasi koji &#269;ekaju na odobrenje");
define("_ADSLIGHT_NO_CLA","Trenutno nema Oglasa koji &#269;ekaju na odobrenje za objavljivanje");
define("_ADSLIGHT_SEEIT","Prika&#382;i Oglase koji &#269;ekaju na odobrenje");
define("_ADSLIGHT_LOCAL","Mjesto :");
define("_ADSLIGHT_LOCAL2","Mjesto");
define("_ADSLIGHT_ANNFROM","Oglas od");
define("_ADSLIGHT_ADDED","je dodat");
define("_ADSLIGHT_GORUB","Idi u ");
define("_ADSLIGHT_DATE2","Oglas je dodat dana");
define("_ADSLIGHT_SUPPRANN","Tvoj Oglas izbri&scaron;i");
define("_ADSLIGHT_MODIFANN","Tvoj Oglas uredi");
define("_ADSLIGHT_PHOTO","Slika");
define("_ADSLIGHT_VIEW","gledano");
define("_ADSLIGHT_CONTACT","Kontakt :");
define("_ADSLIGHT_BYMAIL2","Email");
define("_ADSLIGHT_STOP2","Rok prikazivanja tvog Oglasa je do:");
define("_ADSLIGHT_STOP3","je isteklo, Oglas je izbrisan");
define("_ADSLIGHT_VU2","ovaj");
define("_ADSLIGHT_OTHER","&#382;eli&scaron; li drugi Oglas postaviti?");
define("_ADSLIGHT_THANK","Hvala ti na kori&scaron;tenju na&scaron;eg servisa.");
define("_ADSLIGHT_TEAM","Team");
define("_ADSLIGHT_ACTUALY","Ukupno trenutno");
define("_ADSLIGHT_ADVERTISEMENTS","Malih Oglasa aktivnih");
define("_ADSLIGHT_MODADMIN","Ovaj Oglas promjeni (Administrator)");
define("_ADSLIGHT_AND","i");
define("_ADSLIGHT_WAIT3","Oglasi &#269;ekaju na dobrenje i objavljivanje");
define("_ADSLIGHT_CREATBY","objavio(la)");
define("_ADSLIGHT_FOR","za");
define("_ADSLIGHT_OF","od");
define("_ADSLIGHT_VIEW2","klikova");
define("_ADSLIGHT_VIEWANN2","Tvoj Oglas je gledalo");
define("_ADSLIGHT_ACCESADMIN","Mali Oglasi-Administracija");
define("_ADSLIGHT_NOANNINCAT","Nema Arikli Oglasa u ovoj Kategoriji");
define("_ADSLIGHT_INCAT","u");
define("_ADSLIGHT_CAT2","Kategorije");
	
   
// addlisting.php //
define("_ADSLIGHT_DESC","Opis");
define("_ADSLIGHT_ADDANNONCE2","Oglas u ovu Kategoriju dodaj");
define("_ADSLIGHT_ADDANNONCE3","U Male Oglase dodaj");
define("_ADSLIGHT_ANNMODERATE","Tvoj Oglas &#263;e poslije provjere biti objavljen");
define("_ADSLIGHT_NOBIZ","Poslovni Mali Oglasi od neke firme nije dozvoljen bez suglasnosti da se objavi");
define("_ADSLIGHT_REDIRECT_BIZ","Obrati pa&#382;nju i posebno pravilo za poslovne Oglase firmi");
define("_ADSLIGHT_ANNNOMODERATE","Tvoj Oglas &#263;e uskoro biti objavljen");
define("_ADSLIGHT_FORMEMBERS2","Oglase mogu besplatno samo registrovani &#269;lanovi da koriste <br />Molimo te prije nego po&scaron;alje&scaron; Oglas regristruj se ili se uloguj.");
define("_ADSLIGHT_OR","ili");
define("_ADSLIGHT_DAY","Dana");
define("_ADSLIGHT_CAT3","Kategorija :");
define("_ADSLIGHT_TITLE2","Naslov :");
define("_ADSLIGHT_TYPE","Tip :");
define("_ADSLIGHT_NOTYPE","bez Tipa");
define("_ADSLIGHT_CLASSIFIED_AD","Mali Oglas :");
define("_ADSLIGHT_CHARMAX","(Max. 255 slova/oznaka)");
define("_ADSLIGHT_IMG","Slika 1 :");
define("_ADSLIGHT_IMG2","Slika 2 :");
define("_ADSLIGHT_IMG3","Slika 3 :");
define("_ADSLIGHT_PRICE2","Cijena :");
define("_ADSLIGHT_EMAIL","Email :");
define("_ADSLIGHT_TEL","Telefon :");
define("_ADSLIGHT_TOWN","Grad/Mjeto :");
define("_ADSLIGHT_COUNTRY","Dr&#382;ava :");
define("_ADSLIGHT_VALIDATE","Potvrdi");
define("_ADSLIGHT_SELECTYPE","izaberi Tip oglasa");
define("_ADSLIGHT_SELECTCAT","izaberi Kategoriju");
define("_ADSLIGHT_SELECTYPOTHER","Drugi Tip");
define("_ADSLIGHT_SELECTCATOTHER","Druga Kategorija");
define("_ADSLIGHT_RETURN","Nazad");
define("_ADSLIGHT_FILES","Podatak sa ovim formatom");
define("_ADSLIGHT_FILESTOP","Upload je zaustavljen");
define("_ADSLIGHT_YIMG","Tvoja slika");
define("_ADSLIGHT_TOBIG","je prevelika.<p> Koristi ovu funkciju <b>Nazad na prethodnu stranicu</b> Upload");
define("_ADSLIGHT_ADSADDED","Tvoj Mali Oglas je objavljen.");
define("_ADSLIGHT_PRINT","Mali Oglas izdrukaj");
define("_ADSLIGHT_FRIENDSEND","Po&scaron;alji svome prijatelju");
define("_ADSLIGHT_IMGPISP","Slika ima");
define("_ADSLIGHT_VALIDERORMSG","Do&scaron;lo je do gre&scaron;ke, memorisanje nije uspjelo!");
define("_ADSLIGHT_VALIDTITLE","Potrebno je Naslov upisati.");
define("_ADSLIGHT_VALIDTYPE","Vrstu Oglasa izaberi.");
define("_ADSLIGHT_VALIDCAT","Kategoriju izaberi.");
define("_ADSLIGHT_VALIDANN","Tekst Oglasa nije upisan.");
define("_ADSLIGHT_VALIDTOWN","Grad/Mjesto je potrebno upisati.");
define("_ADSLIGHT_VALIDEMAIL","Email je potrebno upisati.");
define("_ADSLIGHT_VALIDSUBMITTER","Ime je potrebno upisati.");
define("_ADSLIGHT_VALIDMSG","Molimo te gre&scaron;ku korigiraj i onda tek memori&scaron;i.");
	

// display-image.php //
define("_ADSLIGHT_CLOSEF","Zatvori Prozor");
	
	
// listing-p-f.php //
define("_ADSLIGHT_EXTRANN","Mali Oglas je iz jedne Kategorje sa ove web stranice");
define("_ADSLIGHT_SENDTO","<b>Mali Oglas svome prijatelju po&scaron;alji</b><br><br>nemo&#382;e&scaron;e&scaron; poslati Mali Oglas ");
define("_ADSLIGHT_FRIEND","svome prijatelju :");
define("_ADSLIGHT_NAME","Toje Ime :");
define("_ADSLIGHT_MAIL","Tvoj Email :");
define("_ADSLIGHT_NAMEFR","Email tvoga prijatelja :");
define("_ADSLIGHT_MAILFR","Email tvoga prijatelja :");
define("_ADSLIGHT_SENDFR","Po&scaron;alji");
define("_ADSLIGHT_ANNSEND","Mali Oglas je poslat");
define("_ADSLIGHT_SUBJET","Halo, mo¾da te interesuje ovaj Mali Oglas");
define("_ADSLIGHT_HELLO","Halo");
define("_ADSLIGHT_MESSAGE","Mislio(la) sam da te mo&#382;da ovaj Oglasinteresuje.");
define("_ADSLIGHT_INTERESS","Ostale male Oglase mo&#382;e&scaron; poslati na ");
define("_ADSLIGHT_TEL2","Telefon :");
define("_ADSLIGHT_BYMAIL","Email :");
define("_ADSLIGHT_DISPO","Isti&#269;e dana");
define("_ADSLIGHT_NOMAIL","Mi nemamo E-Mail adrese da biste kontaktirali, zbog toga molimo te koriszi ovaj Formular. ");

// modify.php //
define("_ADSLIGHT_OUI","Da");
define("_ADSLIGHT_NON","Ne");
define("_ADSLIGHT_SURDELANN","Pa&#382;nja! Treba li stvarno ovaj Oglas izbrisati?");
define("_RETURNANN","Mali Oglas ponovo objavi");
define("_ADSLIGHT_ANNDEL","Mali oglas je izbrisan");
define("_ADSLIGHT_ANNMOD2","Mali Oglas je ure&#273;en");
define("_ADSLIGHT_NOMODIMG","Tvoji Oglasi sa slikama<br/>(Slika se nemo&#382;e mjenjati)");
define("_ADSLIGHT_DU","Dodaj");   
define("_ADSLIGHT_MODIFBEFORE","izmjene mo&#382;e samo Admin odraditi ili mora Admin Oglas potvrditi i objaviti .");
define("_ADSLIGHT_SENDBY","Poslao(la) :");
define("_ADSLIGHT_NUMANNN","Malog Oglasa-Br. :");
define("_ADSLIGHT_NEWPICT","nova slika :");
define("_ADSLIGHT_ACTUALPICT","trenutna slika :");
define("_ADSLIGHT_DELPICT","Sliku izbri&scaron;i");
   
// contact.php //
define("_ADSLIGHT_CONTACTAUTOR","Kontaktiraj Autora Malog Oglasa");
define("_ADSLIGHT_TEXTAUTO","Prva tri polja &#263;e biti automatski popunjeni.");
define("_ADSLIGHT_YOURNAME","Tvoje Ime :");
define("_ADSLIGHT_YOUREMAIL","Tvoj Email :");
define("_ADSLIGHT_YOURPHONE","Tvoj br. Telefona :");
define("_ADSLIGHT_YOURMESSAGE","Tvoja poruka :");
define("_ADSLIGHT_VALIDMESS","Nachricht erforderlich.");
define("_ADSLIGHT_MESSEND","Tvoja poruka je poslata...");
define("_ADSLIGHT_CLASSIFIED","Mali Oglas ");
define("_ADSLIGHT_FROM","poslat od ");
	
//contact form ip
define("_ADSLIGHT_YOUR_IP","Tvoja IP ");
define("_ADSLIGHT_IP_LOGGED"," je memorisana! Sa ovim poku&scaron;avamo sistem za&scaron;titi.");

// message //
define("_ADSLIGHT_CONTACTAFTERANN","Odgovor na Mali oglas");
define("_ADSLIGHT_MESSFROM","Poruka od");
define("_ADSLIGHT_FROMANNOF","zbog tvoga Oglasa");
define("_ADSLIGHT_REMINDANN","Ima&scaron; poruku u vezi tvoga Oglasa");
define("_ADSLIGHT_STARTMESS","Evo odgovora na tvoj oglas. ");
define("_ADSLIGHT_ENDMESS","!!!  Molimo te na ovu poruku i E-Mail ne odgovaraj. Ako je potrebno nas u vezi ovoga kontaktirati onda koristi Kontakt formular  !!!");
define("_ADSLIGHT_CANJOINT","Odgovori");
define("_ADSLIGHT_TO","na");
define("_ADSLIGHT_ORAT","ili na ");
define("_ADSLIGHT_NOMAIL2","Mi nedajemo E-Mail adrese da biste sa nekim kontaktirali, molimo zbog toga koristite svi Formular. ");
define("_ADSLIGHT_MESSAGE_END","Kraj poruke.");
define("_ADSLIGHT_SECURE_SEND","Ova poruka je preko Formulara poslata, po&scaron;aljilac ne poznaje tvoju E-Mail adresu.");
// message end //

define("_ADSLIGHT_HOW_LONG","Koliko vremena treba tvoj Oglas biti objavljen.");
define("_ADSLIGHT_WILL_LAST"," Objava Oglasa traje do");

//for search on index page
define("_ADSLIGHT_SEARCHRESULTS","Rezultat pretrage Malih Oglasa");
define("_ADSLIGHT_SEARCH_LISTINGS","Pretra&#382;i Oglase : ");
define("_ADSLIGHT_ALL_WORDS","Sve rije&#269;i");
define("_ADSLIGHT_ANY_WORDS","JSvaku rije&#269;");
define("_ADSLIGHT_EXACT_MATCH","samo tra&#382;eno");
define("_ADSLIGHT_ONLYPIX","Prika&#382;i samo<br /> Oglase sa slikama");
define("_ADSLIGHT_SEARCH","Tra&#382;i");
define("_ADSLIGHT_REQUIRED","* obavezno");
define("_ADSLIGHT_MY_ADS","Sve Oglase od  ");
define("_ADSLIGHT_VIEW_MY_ADS","Prika&#382;i sve moje Oglase  ");
define("_ADSLIGHT_COMMENTS_HEAD","<h3>Komentari o ovome prodava&#269;u</h3>");
define("_ADSLIGHT_PREMIUM_DAY","<b> ako nije promijenjeno.</b> ");
define("_ADSLIGHT_PREMIUM_LONG_HEAD","<b>Oglasi se odmah objavljuju!</b><br> ");
define("_ADSLIGHT_PREMIUM_MEMBER","<b>kao Premium &#269;lan sam(a) odredi koliko treba Oglas da bude objavljen.<br /> Oglas traje do </b>");
define("_ADSLIGHT_PREMIUM_MODERATED_HEAD","<b>Oglas se posle provjere objavljuje</b>");

// ADDED FOR RATINGS
define("_ADSLIGHT_TOPRATED","Top Ocjenjeni");
define("_ADSLIGHT_RATINGC","Ocjena: ");
define("_ADSLIGHT_ONEVOTE","1 glas");
define("_ADSLIGHT_NUMVOTES","%s glasova");
define("_ADSLIGHT_RATETHIS","Ocjeni ovoga &#269;lana");
define("_ADSLIGHT_VOTEAPPRE","Glasanje tvoje je ubrojano.");
define("_ADSLIGHT_THANKURATE"," Hvala ti na glasanju za %s.");
define("_ADSLIGHT_VOTEFROMYOU","Glasanjem poma&#382;e&scaron; &#269;lanovima da se uvjere u vrijednos oglasa.");
define("_ADSLIGHT_VOTEONCE","Molimo te da samo jedanputa ocijeni&scaron; Mali Oglas.");
define("_ADSLIGHT_RATINGSCALE","Ocjene se daju od 1 - 10, gdje je 1 najlo&scaron;ija ocjena dok je 10 najbolja.");
define("_ADSLIGHT_BEOBJECTIVE","Molimo te da objektivno daje&scaron; ocjene, ako bi svako samo sa 1 ili 10 ocjenjivao onda ova analiza nebi imala smisla.");
define("_ADSLIGHT_DONOTVOTE","Za svoje Male Oglase nemo&#382;e&scaron; davati ocjene.");
define("_ADSLIGHT_RATEIT","Ocjena");
define("_ADSLIGHT_RATING","Ocjene");
define("_ADSLIGHT_VOTE","Glasaj");
define("_ADSLIGHT_NORATING","Ocjenu nisi izabrao(la).");
define("_ADSLIGHT_CANTVOTEOWN","Za svoje Male Oglase nemo&#382;e&scaron; davati ocjene.");
define("_ADSLIGHT_VOTEONCE2","Mali oglas mo&#382;e&scaron; samo 1 puta ocjenuti.<br />Sve se ocjene zbrajaju.");
define("_ADSLIGHT_TOTALVOTES","Mali Oglasi ocjene (ukupno ocjena: %s)");
define("_ADSLIGHT_USERTOTALVOTES","Od registrovanih ocjene (ukupno: %s)");
define("_ADSLIGHT_ANONTOTALVOTES","Od gostiju ocjene (ukupno: %s)");
define("_ADSLIGHT_USERAVG","&#268;lan AVG ocjena");
define("_ADSLIGHT_TOTALRATE","Ukupno");
define("_ADSLIGHT_NOREGVOTES","Nema ocjena od registrovanih");
define("_ADSLIGHT_NOUNREGVOTES","Nema ocjena od gostiju");
define("_ADSLIGHT_VOTEDELETED","Ocjene su izbrisane.");
define("_ADSLIGHT_USER_RATING","Ocjeni &#269;lana: ");
define("_ADSLIGHT_RATETHISUSER","Ocjeni ovog &#269;lana");
define("_ADSLIGHT_THANKURATEUSER","Hvala ti za ocjenu ovoga &#269;lana %s.");
define("_ADSLIGHT_RATETHISITEM","Ocjeni Artikal");
define("_ADSLIGHT_THANKURATEITEM","Hvala ti za ocjenu ovoga %s Artikla.");
define("_ADSLIGHT_MY_PRICE","Cijana");
define("_ADSLIGHT_MY_DATE","Datum");
define("_ADSLIGHT_MY_TITLE","Naslov");
define("_ADSLIGHT_MY_LOCAL2","Mjesto");
define("_ADSLIGHT_MY_VIEW","pregleda");
define("_ADSLIGHT_SORTBY","Sortiraj po:");
define("_ADSLIGHT_CURSORTEDBY","Oglasi su sortirani po: %s");
define("_ADSLIGHT_POPULARITYLTOM","Popularni (manje prvo)");
define("_ADSLIGHT_POPULARITYMTOL","Popularni (vi&scaron;e prvo)");
define("_ADSLIGHT_TITLEATOZ","Naslovi (A do Z)");
define("_ADSLIGHT_TITLEZTOA","Naslovi (Z ka A)");
define("_ADSLIGHT_DATEOLD","Datum (Stariji Oglasi prvo)");
define("_ADSLIGHT_DATENEW","Datum (Noviji Oglasi prvo)");
define("_ADSLIGHT_RATINGLTOH","Ocjene (manje prvo)");
define("_ADSLIGHT_RATINGHTOL","Ocjene (najve&#263;e prvo)");
define("_ADSLIGHT_PRICELTOH","Cijene (najmanje prvo)");
define("_ADSLIGHT_PRICEHTOL","Cijene (najve&#263;e prvo)");
define("_ADSLIGHT_POPULARITY","Popularni");
define("_ADSLIGHT_ACTUALPICT2","aktuelna druga slika :");
define("_ADSLIGHT_ACTUALPICT3","aktuelna tre&#263;a slika :");
define("_ADSLIGHT_NEWPICT2","Nova druga slika :");
define("_ADSLIGHT_NEWPICT3","Nova tre&#263;a slika :");
define("_ADSLIGHT_SELECT_CONTACTBY","Izaberi opciju");
define("_ADSLIGHT_CONTACTBY","Kontakt preko :");
define("_ADSLIGHT_CONTACT_BY_EMAIL","E-Maila");
define("_ADSLIGHT_CONTACT_BY_PM","Privatne poruke)");
define("_ADSLIGHT_CONTACT_BY_BOTH","Oboje E-Mail i P.pruka");
define("_ADSLIGHT_CONTACT_BY_PHONE","Telefona");
define("_ADSLIGHT_ORBY"," ili ");
define("_ADSLIGHT_PREMYOUHAVE","Trenutno je %s slika u Albumu.");
define("_ADSLIGHT_YOUHAVE","Trenutno je %s slika u Albumu.");
define("_ADSLIGHT_YOUCANHAVE","Kao Premium &#269;lan tebi je %s slika dozvoljeno.");
define("_ADSLIGHT_BMCANHAVE","Kao registrovanom &#269;lanu tebi je %s slika dozvoljeno.");
define("_ADSLIGHT_UPGRADE_NOW","Upgrade u Premium &#269;lanstvo");
define("_ADSLIGHT_DELETE","Izbri&scaron;i");
define("_ADSLIGHT_EDITDESC","Uredi opis");
define("_ADSLIGHT_TOKENEXPIRED","Vrijeme za neaktivno ulogovanje je isteklo<br /> Molimo te uloguj se i probaj ponovo");
define("_ADSLIGHT_DESC_EDITED","Opis slike je uspje&scaron;no izmijenjen.");
define("_ADSLIGHT_DELETED","Slika je uspje&scaron;no izbrisana");
define("_ADSLIGHT_SUBMIT_PIC_TITLE","Sliku u Album unesi");
define("_ADSLIGHT_SELECT_PHOTO","Izaberi sliku");
define("_ADSLIGHT_CAPTION","Naziv slike");
define("_ADSLIGHT_UPLOADPICTURE","Unesi");
define("_ADSLIGHT_YOUCANUPLOAD","Samo je dozvoljen jpg format slike i to do %s KByta");
define("_ADSLIGHT_ALBUMTITLE"," Od %s  Album");
define("_ADSLIGHT_WELCOME","Dobrodo&scaron;li u Album");
define("_ADSLIGHT_NOTHINGYET","Trenutno nema slika u Albumu");
define("_ADSLIGHT_NOCACHACA","Izvini uvjeti za sliku nisu ispunjeni");
define("_ADSLIGHT_ADD_PHOTOS","Dodaj sliku");
define("_ADSLIGHT_SHOWCASE","Album");
define("_ADSLIGHT_EDIT_CAPTION","Naslov promjeni");
define("_ADSLIGHT_EDIT","Uredi");
define("_ADSLIGHT_SUBMITTER","Poslao(la) :");
define("_ADSLIGHT_ADD_LISTING","Dodaj Mali Oglas");
define("_ADSLIGHT_SUBMIT","Po&scaron;alji");
define("_ADSLIGHT_PRICETYPE","Tip Cijene :");
define("_ADSLIGHT_ADD_PHOTO_NOW","Treba li sliku dodati?");
define("_ADSLIGHT_ACTIVE","Aktivno");
define("_ADSLIGHT_INACTIVE","Reservirano");
define("_ADSLIGHT_SOLD","Prodato");
define("_ADSLIGHT_STATUS","Statut");
define("_ADSLIGHT_REPLIES","Odgovori");
define("_ADSLIGHT_EXPIRES_ON","Zavr&scaron;ava dana");
define("_ADSLIGHT_ADDED_ON","Dadat dana");
define("_ADSLIGHT_REPLY_MESSAGE","Odgovori");
define("_ADSLIGHT_REPLIED_ON","odgovoreno : ");
define("_ADSLIGHT_VIEWNOW","Prika&#382;i");
define("_ADSLIGHT_REPLY_TITLE","Odgovori na Oglas ");
define("_ADSLIGHT_ALL_USER_LISTINGS","Svi Oglasi od ");
define("_ADSLIGHT_REPLY","Odgovori -");
define("_ADSLIGHT_PAGES","Stranica -");
define("_ADSLIGHT_REALNAME","Ime");
define("_ADSLIGHT_VIEW_YOUR_LISTINGS","Vidi tvoje Oglase");
define("_ADSLIGHT_REPLIED_BY","Odgovor od : ");
define("_ADSLIGHT_DELETE_REPLY","Odgovor izbri&scaron;i");
define("_ADSLIGHT_NO_REPLIES","Trenutno nema odgovora");
define("_ADSLIGHT_THANKS","Hvala ti na kori&scaron;tenju na&scaron;ih Malih Oglasa");
define("_ADSLIGHT_WEBMASTER","Webmaster");
define("_ADSLIGHT_YOUR_AD","Mali Oglas");
define("_ADSLIGHT_VU","ukupno je oglas gledalo");
define("_ADSLIGHT_TIMES","puta.");
define("_ADSLIGHT_STOP","Mali Oglas isti&#269;e dana");
define("_ADSLIGHT_SOON","uskoro isti&#269;e.");
define("_ADSLIGHT_MUSTLOGIN","Mora&scaron; biti ulogovan(a).");
define("_ADSLIGHT_VIEW_AD","Vidi tvoj Oglas");
define("_ADSLIGHT_MORE_PHOTOS","Vidi vi&scaron;e slika");
define("_ADSLIGHT_CANCEL","Odustani");

//Added for 1.2 RC1
define("_ADSLIGHT_ADDED_TO_CAT","Objavljen je novi oglas u ovoj kategoriji ");
define("_ADSLIGHT_RECIEVING_NOTIF","Obavijest ove vrste je abonirana.");
define("_ADSLIGHT_ERROR_NOTIF","Ako ti ova vrsta obavijesti nije potrebna isklju&#269;i je u opciji obavje&scaron;tavanja ovdje:");
define("_ADSLIGHT_FOLLOW_LINK","Klikni ovdje");
define("_ADSLIGHT_YOU_CAN_VIEW_BELOW","Klikni ovdje i vidi kompletan Oglas");
define("_ADSLIGHT_LISTING_NUMBER","Broj Oglasa:");
define("_ADSLIGHT_NOREPLY","!!!  Molimo te na ovaj E-Mail ne odgovaraj, on je automatski ti poslat  !!!");
define("_ADSLIGHT_CAPTCHA","Sigurnosni Code :");
define("_ADSLIGHT_NEW_WAITING_SUBJECT","Novi Oglas! &#268;eka na objavu");
define("_ADSLIGHT_NEW_WAITING","Ima novih Oglasa za objavljivanje.");
define("_ADSLIGHT_PLEASE_CHECK","Lin za Oglas je ispod.");
define("_ADSLIGHT_ADMIN","Administrator");
define("_ADSLIGHT_NEWAD","Novi Oglas je ispod.");
define("_ADSLIGHT_NEED_TO_LOGIN","Mora&scaron; se ulogovati.");

////AJOUTER PAR iLuc////
define("_ADSLIGHT_PROFILE","Profil od: ");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU1","Tvoji Oglasi");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU2"," Po&scaron;alji");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU3","Tra&#382;i");

//viewads.php
define("_ADSLIGHT_ALERTEABUS","Zloupotrebu prijavi");
define("_ADSLIGHT_CONTACT_SUBMITTER","Kontakt");
define("_ADSLIGHT_SENDFRIENDS","Po&scaron;alji prijatelju");

//report-abuse.php
define("_ADSLIGHT_REPORTSENDTO","<b>Po&scaron;alji ovaj Oglas:</b><br/><br/>Broj Oglasa ");
define("_ADSLIGHT_REPORTANNSEND"," Hvala ti na pomo&#263;i !!<br/>Obavijesti Admina.");
define("_ADSLIGHT_REPORTSUBJET","[Alert] Prijavi Junk ");
define("_ADSLIGHT_REPORTMESSAGE","Smatram da ovakvi Oglas nije po&#382;eljan na stranici.");

//index.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULL","Dodaj Mali Oglas<br />vala ");
define("_ADSLIGHT_ADD_LISTING_SUB","Registar");
define("_ADSLIGHT_ADD_LISTING_BULLOK","Dodaj svoj<br />Mali Oglas: ");
define("_ADSLIGHT_ADD_LISTING_SUBOK","Klikni ovdje");

//index.php >> Title Menu //
define("_ADSLIGHT_ADD_TITLEMENU1","Uredi/Izbri&scaron;i Mali Oglas, i prijavi oglas...");
define("_ADSLIGHT_ADD_TITLEMENU2","Dodaj Mali Oglas, ili pretra&#382;i kategoriju.");
define("_ADSLIGHT_ADD_TITLEMENU4","Svi dobri savjeti za pisanje Oglasa.");
define("_ADSLIGHT_ADD_TITLEMENU5","Tra&#382;i Oglas ili Oglase u blizini tvoga mjesta boravka.");
define("_ADSLIGHT_ADD_TITLEMENU6","Pisanje i &#269;itanje ostavi u tragu.");
define("_ADSLIGHT_ADD_TITLEMENU7","Ima&scaron; poruku");
define("_ADSLIGHT_ADD_TITLEMENU8","Uloguj se i vidi poruku.");
define("_ADSLIGHT_ADD_TITLEMENU9","Uloguj se da vidi profil.");
define("_ADSLIGHT_ADD_TITLEMENU10","Vidi i uredi svoj profil ovdje.");

//viewcats.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULLCATS","Dodaj Oglas ili <br />dodaj Oglas u ovu Kategoriju<br />");
define("_ADSLIGHT_ADD_LISTING_BULLCATSOK","Dodaj Oglas ili <br />dodaj Oglas u ovu Kategoriju<br />Hvala ");

// Réservé
define("_ADSLIGHT_RESERVED","rezervisano");

// tips_writing_ad.php
define("_ADSLIGHT_TIPSWRITE","Svi dobri savjeti<br />Ovako napi&scaron;i Oglas");
define("_ADSLIGHT_TIPSWRITE_TITLE","savjet za objavu oglasa");

define("_ADSLIGHT_TIPSWRITE_TEXT","<b>1. Jedna ili vi&scaron;e slika</b><br /><br />
Prvo &scaron;to posjetioca privla&#269;i u Oglasu je slika onoga &scaron;to nudi&scaron; u svome Oglasu.<br>Da bi prodao(la) svoj Artikal potrebna je obavezno slika, jedna ili vi&scaron;e jo&scaron; je bolje.<br />
Statiti&#269;ki se Oglasi sa slikama se-7-puta vi&scaron;e gledaju nego bez slika! <br>Posjetilac je sigurniji &scaron;ta kupuje i br&#382;e se odlu&#269;i da kupi tvoj Artikal u tvom oglasu.<br /><br />
<br>- Najpotrebnije informacije o Artiklu prave tvoj Artikal aktaktrivnije.<br>- Slika mora biti jako kvalitativna i vidna. (Nepo&#382;eljno je da slika bude tamna)<br>- Okvire slika ne pravite.<br />- Izbjegavaj ubacivanje mutnih i nejasnih slika<br /><br /><b>2. Jasan opis Oglasa</b><br /><br />
Osim slike tvog Artikla treba idobar ops istog u tvome Oglasu da bi tajsvoj Artikal naravno bolje prodao(la). <br>Za dobar opis Artikla u Oglasnu potrebno je da na sljede&#263;e pazi&scaron;.<br /><br />
- Izbjegavaj opisae kao nap. u &quot;SMS&quot;,ovdje mo&#382;e&scaron; op&scaron;irnije svoj Oglas predstaviti.<br />
Zna&#269;i dobro opi&#269;i svoj Artikal i bolje i br&#382;e &#263;e&scaron; ga prodati.<br /><br />
- Naslov sa velikim slovima kao i opis Artikla velikim slovima obavezno izbjegavaj.<br /><br />
- Superlative izbjegavaj.<br /><br />
- Opi&scaron;i Oglas detaljno da nebi dobijao(la) poruke, E-Maile ili telefonske pozive, time gubi&scaron; svoje dragocjenovrijeme <br /><br />
- Izbjegavaj Oglas da toliko dovoljno opi&scaron;e&scaron; kao Roman, preduga&#269;ak tekst slabo ko voli do kraja da pro&#269;ita.<br /><br />
- Posjetioci odustaju od prevelikog opisa Artikla.<br /><br />
Dobar opis Artikla u Oglasu kao gore navedeno u savjetima sigurno vas dovodi do br&#382;e prodaje.<br /><br />
I ne zaboravi u poslu trgovine je uvijek uspjeh,<br />ako su trovac i prodava&#269; obostrano zadovoljni!");

//version 1.053
// maps.php
define("_ADSLIGHT_MAPS_TITLE","Tra&#382;i po Regionu");
define("_ADSLIGHT_MAPS_TEXT"," Izaberi Region na Karti,<br />da vidi&scaron; Oglase iz tog Regiona.");

//viewads.php
define("_ADSLIGHT_NOCLAS","Trenutno nema Oglasa u ovoj Kategoriji<br />u ovoj Kategoriji ...");

?>