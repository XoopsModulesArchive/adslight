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


define("_ADSLIGHT_ADDON","Toevoegen");
define("_ADSLIGHT_ANNONCES","Onze advertenties");
define("_ADSLIGHT_LOGOLINK", "");
define("_ADSLIGHT_MAIN","Main");
define("_ADSLIGHT_ADDFROM","Persoonlijke advertenties ");
define("_ADSLIGHT_NEWTOD","Nieuwe advertenties zijn vandaag voor deze categorie toegevoegd");
define("_ADSLIGHT_NEWTRED","Nieuwe advertenties zijn de laatste drie dagen voor deze categorie toegevoegd");
define("_ADSLIGHT_NEWWEEK","Nieuwe advertenties zijn deze week voor deze categorie toegevoegd");
define("_ADSLIGHT_INTRO","<b>U kunt uw advertentie gratis toevoegen.<br />U hoeft alleen op de categorie te klikken waar u hem wilt plaatsen,<br />U zal een 'Voeg een advertentie toe in deze categorie' link zien.</b>");
define("_ADSLIGHT_PRICE","Prijs");
define("_ADSLIGHT_DATE","Datum");
define("_ADSLIGHT_TITLE","Titel");
define("_ADSLIGHT_CAT","Categorie");
define("_ADSLIGHT_THE","de");
define("_ADSLIGHT_LASTADD","Laatste advertenties");
define("_ADSLIGHT_PREV","Vorige advertentie");
define("_ADSLIGHT_NEXT","Volgende advertentie");
define("_ADSLIGHT_THEREIS","In deze categorie bevinden zich");
define("_ADSLIGHT_INTHISCAT","persoonlijke advertenties");
define("_ADSLIGHT_AVAILAB","Subcategorieen beschikbaar :");
define("_ADSLIGHT_ADMINCADRE","Administratie Paneel");
define("_ADSLIGHT_WAIT","Advertenties wachtend op goedkeuring");
define("_ADSLIGHT_NO_CLA","Er zijn geen advertenties welke wachten op goedkeuring");
define("_ADSLIGHT_SEEIT","Bekijk wachtende advertenties");
define("_ADSLIGHT_LOCAL","Locatie :");
define("_ADSLIGHT_LOCAL2","Locatie");
define("_ADSLIGHT_ANNFROM","Advertenties van");
define("_ADSLIGHT_ADDED","Toegevoegd");
define("_ADSLIGHT_GORUB","Ga naar ");
define("_ADSLIGHT_DATE2","Deze advertentie is toegevoegd");
define("_ADSLIGHT_SUPPRANN","Verwijder uw advertentie");
define("_ADSLIGHT_MODIFANN","Bewerk uw advertentie");
define("_ADSLIGHT_PHOTO","Foto");
define("_ADSLIGHT_VIEW","Bekeken");
define("_ADSLIGHT_CONTACT","Contact");
define("_ADSLIGHT_BYMAIL2","Email");

define("_ADSLIGHT_STOP2","De getoonde periode voor uw advertentie  :");
define("_ADSLIGHT_STOP3","is beeindigd, hij is verwijderd");

define("_ADSLIGHT_VU2","deze");
define("_ADSLIGHT_OTHER","Als u nog een advertentie wilt plaatsen ");
define("_ADSLIGHT_THANK","Bedankt dat u ons advertentie systeem gebruikt heeft.");
define("_ADSLIGHT_TEAM","Team");
define("_ADSLIGHT_ACTUALY","Hier zijn");
define("_ADSLIGHT_ADVERTISEMENTS","Advertentie(s) actief");
	//define("_ADSLIGHT_DISPO","disponible jusqu'au");
define("_ADSLIGHT_MODADMIN","Bewerk deze advertentie (administrator)");
define("_ADSLIGHT_AND","en");
define("_ADSLIGHT_WAIT3","Advertentie(s) wacht(en) op goedkeuring");
define("_ADSLIGHT_CREATBY","was toegevoegd door");
define("_ADSLIGHT_FOR","voor");
define("_ADSLIGHT_OF","van");
define("_ADSLIGHT_VIEW2","bekeken");
define("_ADSLIGHT_VIEWANN2","Bekijk uw advertentie(s)");
define("_ADSLIGHT_ACCESADMIN","MijnAds Administratie");
define("_ADSLIGHT_NOANNINCAT","Er zijn in deze categorie geen advertenties");
define("_ADSLIGHT_INCAT","in");
define("_ADSLIGHT_CAT2","categorieen");
	
   
// addlisting.php //
define("_ADSLIGHT_DESC","omschrijving");
define("_ADSLIGHT_ADDANNONCE2","Voeg een advertentie toe aan deze categorie");
define("_ADSLIGHT_ADDANNONCE3","Toevoegen van een advertentie");
define("_ADSLIGHT_ANNMODERATE","Uw advertentie zal worden bekeken voor goedkeuring, en geplaatst");
define("_ADSLIGHT_NOBIZ","Adverteren voor een bedrijf is niet toegestaan");
define("_ADSLIGHT_REDIRECT_BIZ","Bekijk onze zakelijke tarieven");
define("_ADSLIGHT_ANNNOMODERATE","Uw advertentie is direct zichtbaar ");
define("_ADSLIGHT_FORMEMBERS2","U kunt alleen een advertentie plaatsen als u geregistreerd bent <br />registreer u zelf, of log in als u al geregistreerd bent.");
define("_ADSLIGHT_OR","of");
define("_ADSLIGHT_DAY","dagen");
define("_ADSLIGHT_CAT3","categorie :");
define("_ADSLIGHT_TITLE2","Titel :");
define("_ADSLIGHT_TYPE","Type :");
define("_ADSLIGHT_NOTYPE","Geen type");
define("_ADSLIGHT_CLASSIFIED_AD","Advertenties :");
define("_ADSLIGHT_CHARMAX","(255 karacters max)");
define("_ADSLIGHT_IMG","Voeg een afbeelding toe :");
define("_ADSLIGHT_IMG2","Voeg een 2e afbeelding toe :");
define("_ADSLIGHT_IMG3","Voeg een 3e afbeelding toe :");
define("_ADSLIGHT_PRICE2","Prijs :");
define("_ADSLIGHT_EMAIL","Email :");
define("_ADSLIGHT_TEL","Telefoon :");
define("_ADSLIGHT_TOWN","Woonplaats :");
define("_ADSLIGHT_COUNTRY","Land :");
define("_ADSLIGHT_VALIDATE","Validatie");
define("_ADSLIGHT_SELECTYPE","Selecteer advertentie type");
define("_ADSLIGHT_SELECTCAT","Selecteer een categorie");
define("_ADSLIGHT_SELECTYPOTHER","Ander type");
define("_ADSLIGHT_SELECTCATOTHER","Andere categorie");
define("_ADSLIGHT_RETURN","Vorige");
define("_ADSLIGHT_FILES","Bestanden met deze extentie");
define("_ADSLIGHT_FILESTOP","mogen niet geuploaded worden. Upload gestopt");
define("_ADSLIGHT_YIMG","uw afbeelding");
define("_ADSLIGHT_TOBIG","is te groot.<p> gebruik de functie <b>naVorige pag</b> om terug te keren een juist bestand te selecteren");
define("_ADSLIGHT_ADSADDED","Uw advertentie is toegevoegd.");
define("_ADSLIGHT_PRINT","Druk deze advertentie af");
define("_ADSLIGHT_FRIENDSEND","Verstuur deze advertentie naar een vriend");
define("_ADSLIGHT_IMGPISP","foto beschikbaar");
define("_ADSLIGHT_VALIDERORMSG","Er zijn fouten opgetreden waardoor deze toevoeging niet geplaatst kan worden!");
define("_ADSLIGHT_VALIDTITLE","Titel is verplicht.");
define("_ADSLIGHT_VALIDTYPE","Type is verplicht.");
define("_ADSLIGHT_VALIDCAT","Categorie is verplicht.");
define("_ADSLIGHT_VALIDANN","Omschrijving is verplicht.");
define("_ADSLIGHT_VALIDTOWN","Stad is verplicht.");
define("_ADSLIGHT_VALIDEMAIL","Email is verplicht.");
define("_ADSLIGHT_VALIDSUBMITTER","Naam is verplicht.");
define("_ADSLIGHT_VALIDMSG","Corigeer deze fouten aub.");
define("_ADSLIGHT_TYPE_USURE", "Staat van het product:");

	


// display-image.php //
define("_ADSLIGHT_CLOSEF","Sluit dit venster");
	
// listing-p-f.php //
define("_ADSLIGHT_EXTRANN","Deze advertentie komt van de advertentie pagina op ");
define("_ADSLIGHT_SENDTO","<b>Verzend deze advertentie naar een vriend</b><br><br>u kunt verzenden advertentie nummer ");
define("_ADSLIGHT_FRIEND","naar een vriend :");
define("_ADSLIGHT_NAME","Uw naam :");
define("_ADSLIGHT_MAIL","Uw e-mail :");
define("_ADSLIGHT_NAMEFR","Vriends naam :");
define("_ADSLIGHT_MAILFR","Vriends e-mail :");
define("_ADSLIGHT_SENDFR","Verstuur");
define("_ADSLIGHT_ANNSEND","De advertentie is verzonden");
define("_ADSLIGHT_SUBJET","een interesantie advertentie van");
define("_ADSLIGHT_HELLO","Hallo");
define("_ADSLIGHT_MESSAGE","denkt dat deze advertentie u kan intereseren, en heeft deze u verstuurd.");
define("_ADSLIGHT_INTERESS","Meer advertenties kunt u bekijken op ");
define("_ADSLIGHT_TEL2","Telefoon :");
define("_ADSLIGHT_BYMAIL","E-mail :");
define("_ADSLIGHT_DISPO","verloopt op");
define("_ADSLIGHT_NOMAIL","Wij verstrekken geen e-mail adressen, om in contact te komen via de e-mail, gebruikt u het contactformulier door op het e-mail icoontje te klikken op de advertentiepagina. U kunt de advertentie op de volgende pagina bekijken ");

// modify.php //
define("_ADSLIGHT_OUI","Ja");
define("_ADSLIGHT_NON","Nee");
define("_ADSLIGHT_SURDELANN","LET OP : Weet u zeker dat u deze advertentie wilt verwijderen");
define("_RETURNANN","Terug naar de advertenties");
define("_ADSLIGHT_ANNDEL","Advertentie is verwijderd");
define("_ADSLIGHT_ANNMOD2","Advertentie is aangepast");
define("_ADSLIGHT_NOMODIMG","Uw advertentie bevat een foto<br />(afbeeldingen kunnen niet worden bewerkt)");
define("_ADSLIGHT_DU","toegevoegd op");   
define("_ADSLIGHT_MODIFBEFORE","Veranderingen aan deze advertentie moeten worden goedgekeurd door de administrator.");
define("_ADSLIGHT_SENDBY","Toegevoegd door :");
define("_ADSLIGHT_NUMANNN","Advertentie nummer. :");
define("_ADSLIGHT_NEWPICT","Nieuwe afbeelding :");
define("_ADSLIGHT_ACTUALPICT","Huidige afbeelding :");
define("_ADSLIGHT_DELPICT","Verwijder deze afbeelding");
   
// contact.php //

define("_ADSLIGHT_CONTACTAUTOR","Contact de eigenaar van deze advertentie");
define("_ADSLIGHT_TEXTAUTO","Het bericht verzend automatisch de volgende 3 velden, uw naam, uw e-mail en uw telefoonnummer. Deze hoeft u niet meer zelf in te geven.");
define("_ADSLIGHT_YOURNAME","Uw naam :");
define("_ADSLIGHT_YOUREMAIL","Uw email :");
define("_ADSLIGHT_YOURPHONE","Uw telefoonnummer :");
define("_ADSLIGHT_YOURMESSAGE","Uw bericht :");
define("_ADSLIGHT_VALIDMESS","Bericht is verplicht.");
define("_ADSLIGHT_MESSEND","Uw bericht is verzonden...");
define("_ADSLIGHT_CLASSIFIED","Advertenties ");
define("_ADSLIGHT_FROM","Verzonden door ");
	
	//contact form ip
define("_ADSLIGHT_YOUR_IP","Uw IP is ");
define("_ADSLIGHT_IP_LOGGED"," en is gelogd! Actie volgt als er misbruik van het systeem gemaakt wordt.");

// message //
define("_ADSLIGHT_CONTACTAFTERANN","Reageer op uw advertentie");
define("_ADSLIGHT_MESSFROM","Bericht van");
define("_ADSLIGHT_FROMANNOF","Van de advertentie op");
define("_ADSLIGHT_REMINDANN","U heeft een reactie op uw advertentie welke staat op ");
define("_ADSLIGHT_STARTMESS","Hieronder staat de reactie. ");
define("_ADSLIGHT_ENDMESS","!!! Reageer niet op deze e-mail, het zal niet de afzender bereiken. Als u wilt reageren, gebruik de contact informatie hierboven  !!!");
define("_ADSLIGHT_CANJOINT","U kunt reageren naar");
define("_ADSLIGHT_TO","op");
define("_ADSLIGHT_ORAT","of op ");
define("_ADSLIGHT_NOMAIL2","Wij verschaffen geen e-mail adressen, om te contacten via e-mail, gebruikt u het dan het contactformulier op de website. U kunt op de advertentie reageren via de volgende website. ");
define("_ADSLIGHT_MESSAGE_END","Einde van het bericht.");
define("_ADSLIGHT_SECURE_SEND","Dit bericht is verzonden via ons contactformulier, de verzender heeft uw e-mail adres niet!");
// message end //
define("_ADSLIGHT_HOW_LONG","Hoe lang wilt u de advertentie laten staan.");
define("_ADSLIGHT_WILL_LAST","Deze advertente is zichtbaar tot.");
	
//for search on index page
define("_ADSLIGHT_SEARCHRESULTS","Zoek resultaten advertenties");
define("_ADSLIGHT_SEARCH_LISTINGS","Doorzoek Advertenties : ");
define("_ADSLIGHT_ALL_WORDS","Alle woorden");
define("_ADSLIGHT_ANY_WORDS","Bepaald woord");
define("_ADSLIGHT_EXACT_MATCH","Exact");
define("_ADSLIGHT_ONLYPIX","Toon alleen<br /> advertenties met foto");
define("_ADSLIGHT_SEARCH","Zoeken");
define("_ADSLIGHT_REQUIRED","* verplicht");
define("_ADSLIGHT_MY_ADS","Alle advertenties van ");
define("_ADSLIGHT_VIEW_MY_ADS","Bekijk alle advertenties van ");
define("_ADSLIGHT_COMMENTS_HEAD","<h3>Commentaar over deze adverteerder</h3>");
define("_ADSLIGHT_PREMIUM_DAY","<b> dagen, als u het niet veranderd.</b> ");
define("_ADSLIGHT_PREMIUM_LONG_HEAD","<b>Uw advertentie zal direct zichtbaar zijn</b> ");
define("_ADSLIGHT_PREMIUM_MEMBER", "<b>Omdat u een premium aanbieder bent, kunt u aangeven hoelang uw advertentie zichtbaar is.<br /><br />Dit zal zijn </b>");
define("_ADSLIGHT_PREMIUM_MODERATED_HEAD","<b>Uw advertentie zal worden bekeken</b>");

// ADDED FOR RATINGS
define("_ADSLIGHT_TOPRATED","Best gewaardeerd");
define("_ADSLIGHT_RATINGC","waardering: ");
define("_ADSLIGHT_ONEVOTE","1 stem");
define("_ADSLIGHT_NUMVOTES","%s stemmen");
define("_ADSLIGHT_RATETHIS","beoordeel deze adverteerder");
define("_ADSLIGHT_VOTEAPPRE","Uw stem is gewaardeerd.");
define("_ADSLIGHT_THANKURATE","Dank u voor de moeite om deze adverteerder te beoordelen op %s.");
define("_ADSLIGHT_VOTEFROMYOU","Reacties van gebruikers, zoals u zelf, zal andere bezoekers helpen met een juiste advertentie vinden.");
define("_ADSLIGHT_VOTEONCE","Stemt u aub maar 1 keer per onderdeel.");
define("_ADSLIGHT_RATINGSCALE","De schaal is 1 - 10, waarbij 1 het laagste.");
define("_ADSLIGHT_BEOBJECTIVE","Wees wel reeel, als iedereen een 1 of een 10 krijgt, heeft het systeem niet veel nut!");
define("_ADSLIGHT_DONOTVOTE","U kunt niet op uzelf stemmen.");
define("_ADSLIGHT_RATEIT","Beoordeel het!");
define("_ADSLIGHT_RATING","Beoordeling");
define("_ADSLIGHT_VOTE","Stem");
define("_ADSLIGHT_NORATING","Geen beoordeling geselecteerd.");
define("_ADSLIGHT_CANTVOTEOWN","U kunt niet op uzelf stemmen.<br />Alle stemmen worden beoordeeld.");
define("_ADSLIGHT_VOTEONCE2","Stem aub maar 1 keer.<br />Alle stemmen worden beoordeeld.");
define("_ADSLIGHT_TOTALVOTES","Advertentie stemmen (totaal aantal stemmen : %s)");
define("_ADSLIGHT_USERTOTALVOTES","Geregistreerde gebruikers stemmen (totaal aantal stemmen: %s)");
define("_ADSLIGHT_ANONTOTALVOTES","Annonieme gebruikers stemmen (totaal aantal stemmen: %s)");
define("_ADSLIGHT_USERAVG","Gemiddeld");
define("_ADSLIGHT_TOTALRATE","Totaal Waardering");
define("_ADSLIGHT_NOREGVOTES","Geen geregistreerde gebruikers stemmen");
define("_ADSLIGHT_NOUNREGVOTES","Geen annonieme stemmen");
define("_ADSLIGHT_VOTEDELETED","Alle stemmen zijn verwijderd.");
define("_ADSLIGHT_USER_RATING","Gebruikersbeoordeling: ");
define("_ADSLIGHT_RATETHISUSER","Beoordeel deze gebruiker");
define("_ADSLIGHT_THANKURATEUSER","Bedankt dat u de tijd heeft genomen om hier op %s uw oordeel te geven.");
define("_ADSLIGHT_RATETHISITEM","Geef dit item een cijfer");
define("_ADSLIGHT_THANKURATEITEM","Bedankt dat u de tijd heeft genomen om hier op %s uw oordeel te geven.");
define("_ADSLIGHT_MY_PRICE","Prijs");
define("_ADSLIGHT_MY_DATE","Datum");
define("_ADSLIGHT_MY_TITLE","Titel");
define("_ADSLIGHT_MY_LOCAL2","Locatie");
define("_ADSLIGHT_MY_VIEW","Bekeken");
define("_ADSLIGHT_SORTBY","Volgorde:");
define("_ADSLIGHT_CURSORTEDBY","Gesorteerd op: %s");
define("_ADSLIGHT_POPULARITYLTOM","Populariteit (Minste tot Meeste Hits)");
define("_ADSLIGHT_POPULARITYMTOL","Popularity (Meeste tot Minste Hits)");
define("_ADSLIGHT_TITLEATOZ","Titel (A to Z)");
define("_ADSLIGHT_TITLEZTOA","Titel (Z to A)");
define("_ADSLIGHT_DATEOLD","Datum (Oudste eerst)");
define("_ADSLIGHT_DATENEW","Datum (Nieuwste eerst)");
define("_ADSLIGHT_RATINGLTOH","Beoordeling (van Laag naar Hoog)");
define("_ADSLIGHT_RATINGHTOL","Beoordeling (van Hoog naar Laag)");
define("_ADSLIGHT_PRICELTOH","Prijs (van Laag naar Hoog)");
define("_ADSLIGHT_PRICEHTOL","Prijs (van Hoog naar Laag)");
define("_ADSLIGHT_POPULARITY","Populariteit");
define("_ADSLIGHT_ACTUALPICT2","Huidige 2e afbeelding :");
define("_ADSLIGHT_ACTUALPICT3","Huidige 3e afbeelding :");
define("_ADSLIGHT_NEWPICT2","Nieuw 2e afbeelding :");
define("_ADSLIGHT_NEWPICT3","Nieuw 3e afbeelding :");
define("_ADSLIGHT_SELECT_CONTACTBY","Selecteer een optie!");
define("_ADSLIGHT_CONTACTBY","Contact mij via :");
define("_ADSLIGHT_CONTACT_BY_EMAIL","E-mail");
define("_ADSLIGHT_CONTACT_BY_PM","Prive bericht(PB)");
define("_ADSLIGHT_CONTACT_BY_BOTH","Beide, e-mail of PB");
define("_ADSLIGHT_CONTACT_BY_PHONE","Alleen via telefoon");
define("_ADSLIGHT_ORBY"," of via ");
define("_ADSLIGHT_PREMYOUHAVE", "U heeft %s afbeelding in uw album.");
define("_ADSLIGHT_YOUHAVE", "U heeft %s afbeeldingen in uw album.");
define("_ADSLIGHT_YOUCANHAVE", "Als premium gebruiker kunt u %s afbeelding(en) gebruiken.");
define("_ADSLIGHT_BMCANHAVE", "Als standaard gebruiker kunt u %s afbeelding gebruiken.");
define("_ADSLIGHT_UPGRADE_NOW", "Waardeer op naar premium gebruiker");
define("_ADSLIGHT_DELETE", "Verwijder");
define("_ADSLIGHT_EDITDESC", "Bewerk omschrijving");
define("_ADSLIGHT_TOKENEXPIRED", "Uw beveiligingscode is verlopen,<br />Probeer nogmaals");
define("_ADSLIGHT_DESC_EDITED","Uw afbeelding beschrijving is juist bewerkt");
define("_ADSLIGHT_DELETED","Afbeelding succesvol verwijderd");
define("_ADSLIGHT_SUBMIT_PIC_TITLE","Verstuur een afbeelding naar uw album");
define("_ADSLIGHT_SELECT_PHOTO","Selecteer afbeelding");
define("_ADSLIGHT_CAPTION","Caption");
define("_ADSLIGHT_UPLOADPICTURE","Upload afbeelding");
define("_ADSLIGHT_YOUCANUPLOAD","U kunt alleen JPG bestanden uploaden tot %s KBytes");
define("_ADSLIGHT_ALBUMTITLE","%s's Album");
define("_ADSLIGHT_WELCOME","Welkom bij uw album");
define("_ADSLIGHT_NOTHINGYET","Hier staan geen afbeeldingen");
define("_ADSLIGHT_NOCACHACA","Sorry geen cachaca voor u");
define("_ADSLIGHT_ADD_PHOTOS","Voeg afbeeldingen toe");
define("_ADSLIGHT_SHOWCASE","Gallerij");
define("_ADSLIGHT_EDIT_CAPTION","Bewerk de");
define("_ADSLIGHT_EDIT","Bewerk");
define("_ADSLIGHT_SUBMITTER","Naam :");
define("_ADSLIGHT_ADD_LISTING","Voeg een advertentie toe");
define("_ADSLIGHT_SUBMIT","Verstuur");
define("_ADSLIGHT_PRICETYPE","Prijs type :");
define("_ADSLIGHT_ADD_PHOTO_NOW","Wilt u nu afbeeldingen toevoegen");
define("_ADSLIGHT_ACTIVE","Actief");
define("_ADSLIGHT_INACTIVE","Niet actief");
define("_ADSLIGHT_SOLD","Gereserveerd");
define("_ADSLIGHT_STATUS","Status");
define("_ADSLIGHT_REPLIES","reacties");
define("_ADSLIGHT_EXPIRES_ON","Verloopt op");
define("_ADSLIGHT_ADDED_ON","Toegevoegd op");
define("_ADSLIGHT_REPLY_MESSAGE","Reageer");
define("_ADSLIGHT_REPLIED_ON","Gereageerd op : ");
define("_ADSLIGHT_VIEWNOW","bekijk");
define("_ADSLIGHT_REPLY_TITLE","Reacties op advertentie ");
define("_ADSLIGHT_ALL_USER_LISTINGS","Ale advertenties voor ");
define("_ADSLIGHT_REPLY","Reactie -");
define("_ADSLIGHT_PAGES","Pagina -");
define("_ADSLIGHT_REALNAME","Naam");
define("_ADSLIGHT_VIEW_YOUR_LISTINGS","Bekijk uw advertenties");
define("_ADSLIGHT_REPLIED_BY","Reactie door : ");
define("_ADSLIGHT_DELETE_REPLY", "Verwijder deze reactie");
define("_ADSLIGHT_NO_REPLIES", "Er zijn geen reacties");
define("_ADSLIGHT_THANKS", "Bedankt voor het gebruik van ons systeem");
define("_ADSLIGHT_WEBMASTER", "Webmaster");
define("_ADSLIGHT_YOUR_AD", "Uw advertentie");
define("_ADSLIGHT_AT","op");
define("_ADSLIGHT_VEDIT_AD", "bekijk of wijzig uw advertentie hier");
define("_ADSLIGHT_ALMOST", "Uw advertentie verloopt binnenkort");
define("_ADSLIGHT_EXPIRED", "is verlopen en verwijderd.");
define("_ADSLIGHT_YOUR_AD_ON", "Uw advertentie op");
define("_ADSLIGHT_VU","Uw advertentie is bekeken");
define("_ADSLIGHT_TIMES","keer.");
define("_ADSLIGHT_STOP","Uw advertentie is verlopen");
define("_ADSLIGHT_SOON","verloopt binnekort.");
define("_ADSLIGHT_MUSTLOGIN","U moet ingelogd zijn om op deze advertentie te mogen reageren.");
define("_ADSLIGHT_VIEW_AD", "bekijk uw advertentie(s) op");
define("_ADSLIGHT_MORE_PHOTOS", "Bekijk meer afbeeldingen");
define("_ADSLIGHT_CANCEL","Annuleer");

//Added for 1.2 RC1
define("_ADSLIGHT_ADDED_TO_CAT","Er is een nieuwe advertentie toegevoegd aan de categorie ");
define("_ADSLIGHT_RECIEVING_NOTIF","You have subscribed to receive notifications of this sort.");
define("_ADSLIGHT_ERROR_NOTIF","If this is an error or you wish not to receive further such notifications, please update your subscriptions by visiting the link below:");
define("_ADSLIGHT_FOLLOW_LINK","Hier is een link naar de advertentie");
define("_ADSLIGHT_YOU_CAN_VIEW_BELOW", "U kunt de volledige advertentie bekijken via de onderstaande link");
define("_ADSLIGHT_LISTING_NUMBER","Advertentie nummer :");

define("_ADSLIGHT_NOREPLY","!!!  reageer niet op deze email, u zal geen bericht terug krijgen  !!!");
define("_ADSLIGHT_CAPTCHA","Beveiligingscode :");

define("_ADSLIGHT_NEW_WAITING_SUBJECT","Nieuwe Advertentie! Wacht op goedkeuring!.");
define("_ADSLIGHT_NEW_WAITING","Er is een nieuwe advertentie welke bewerkt moet worden.");
define("_ADSLIGHT_PLEASE_CHECK","Klik op de volgende link om de advertentie te bekijken");
define("_ADSLIGHT_ADMIN","Administrator");
define("_ADSLIGHT_NEWAD","De nieuwe advertentie staat hieronder.");
define("_ADSLIGHT_NEED_TO_LOGIN","U dient in te loggen.");

define("_ADSLIGHT_PROFILE","Profiel van ");

////AJOUTER PAR ILUC////
define("_ADSLIGHT_MI_ADSLIGHT_SMENU1","Uw advertenties");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU2","Verzend");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU3","Zoek");

//viewads.php
define("_ADSLIGHT_ALERTEABUS","Meld misbruik");
define("_ADSLIGHT_CONTACT_SUBMITTER","Contact");
define("_ADSLIGHT_SENDFRIENDS", "Verzend deze advertentie naar een vriend");

//report-abuse.php
define("_ADSLIGHT_REPORTSENDTO", "<b>Rapporteer deze advertentie:</b><br/><br/>ad No. ");
define("_ADSLIGHT_REPORTANNSEND", "Dank u voor uw hulp!<br/>De advertentie is net doorgegeven aan de admin.");
define("_ADSLIGHT_REPORTSUBJET", "[Alert] Gerapporteerde Advertentie ");
define("_ADSLIGHT_REPORTMESSAGE", "Vermoed dat deze advertentie niet correct is, en wilt u hiervan op de hoogte brengen.");

//index.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULL", "Een advertentie toe te voegen<br />dank u voor ");
define("_ADSLIGHT_ADD_LISTING_SUB", "registreer");
define("_ADSLIGHT_ADD_LISTING_BULLOK", "u kan toevoegen of<br />Advertenties: ");
define("_ADSLIGHT_ADD_LISTING_SUBOK", "Klik hier");

//index.php >> Title Menu //
define("_ADSLIGHT_ADD_TITLEMENU1", "Bewerk of verwijder uw advertenties, Ook voor de melding [gereserveerd] ...");
define("_ADSLIGHT_ADD_TITLEMENU2", "plaats een Advertentie.");
define("_ADSLIGHT_ADD_TITLEMENU4", "Tips voor een juiste advertentie.");
define("_ADSLIGHT_ADD_TITLEMENU5", "Zoek een advertentie in uw regio.");
define("_ADSLIGHT_ADD_TITLEMENU6", "lees en verstuur persoonlijke mail.");
define("_ADSLIGHT_ADD_TITLEMENU7", "U heeft een nieuw bericht.");
define("_ADSLIGHT_ADD_TITLEMENU8", "U dient ingelogt te zijn om berichten te kunnen bekijken.");
define("_ADSLIGHT_ADD_TITLEMENU9", "Login om uw profiel te kunnen bekijken of bewerken.");
define("_ADSLIGHT_ADD_TITLEMENU10", "Bewerk of bekijk uw profiel.");

//viewcats.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULLCATS", "U kan toevoegen of<br />advertenties in deze categorie<br />");
define("_ADSLIGHT_ADD_LISTING_BULLCATSOK", "Om 1 of<br />advertenties in deze categorie<br />Dank u voor ");

// Reserved
define("_ADSLIGHT_RESERVED", "Gereserveerd");

// tips_writing_ad.php
define("_ADSLIGHT_TIPSWRITE", "Tous les bons conseils<br />pour bien r&eacute;diger vos annonces");
define("_ADSLIGHT_TIPSWRITE_TITLE", "Les Conseils pour bien r&eacute;diger votre annonce");

define("_ADSLIGHT_TIPSWRITE_TEXT", "<b>1. Plaats foto's </b><br><br>
Le premier contact qu&rsquo;auront les visiteurs avec votre annonce, va &ecirc;tre une ou des photos de l'objet que vous allez vendre.<br>Il est vivement conseill&eacute; de mettre une ou des photos de votre objet.<br>
Une petite annonce avec photo est 7 fois plus consult&eacute;e qu&rsquo;une annonce sans photo ! <br>Elle donne aussi une premi&egrave;re id&eacute;e de l&rsquo;&eacute;tat de votre objet.<br><br>
<br>- Un objet propre est toujours plus attrayante.<br>- Soignez la qualit&eacute; de la photo. (Pas trop sombre)<br>- Cadrez l'objet de sorte qu&rsquo;il soit visible. <br>- &Eacute;vitez les photos &lsquo;floues&rsquo;<br><br><b>2. Claire et d&eacute;taill&eacute;e</b><br><br>
Apr&egrave;s avoir soigneusement pr&eacute;par&eacute; les photos de l'objet que vous allez vendre. <br>Il vous faut maintenant r&eacute;diger l&rsquo;annonce.<br><br>
- &Eacute;vitez le langage &laquo; SMS &raquo;, il est imp&eacute;ratif que l&rsquo;annonce soit facilement lisible.<br>
Sans cela, vous perdez des chances de vendre votre pi&egrave;ce d&eacute;tach&eacute;e.<br><br>
- Le titre en majuscules ainsi que toute l&rsquo;annonce &eacute;crite en majuscules, <br>est vivement d&eacute;conseiller.<br><br>
- Les superlatifs sont &agrave; &eacute;viter.<br><br>
- &Eacute;crivez tous les d&eacute;tails et faites en sorte que les visiteurs puissent au mieux identifier votre pi&egrave;ce d&eacute;tach&eacute;e. Sans cela ils vous contacteront par mail ou t&eacute;l&eacute;phone pour vous demander. (Perte de temps pour vous et l&rsquo;acheteur) <br><br>
- &Eacute;vitez d&rsquo;&eacute;crire un roman, cela doit rester une annonce.<br><br>
- Le visiteur doit pouvoir obtenir un maximum d&rsquo;infos lors de la lecture de votre annonce, et cela rapidement. <br><br>
Plus une annonce est claire et pr&eacute;cise, plus elle a de chance d'aboutir &agrave; une transaction.<br><br>
Et n'oubliez pas, une bonne affaire, <br>c'est lorsque l&rsquo;acheteur et le vendeur y trouvent leur bonheur!");

//version 1.053
// maps.php
define("_ADSLIGHT_MAPS_TITLE", "Zoeken op regio");
define("_ADSLIGHT_MAPS_TEXT", "Selecteer een regio op de kaart<br />om de advertenties te zien in een regio.");

//viewads.php
define("_ADSLIGHT_NOCLAS","Op het moment zijn er geen advertenties.");

//version 1.063
// viawcats.php

define("_ADSLIGHT_ADD_LISTING_NOTADDSINTHISCAT", "Er zijn geen advertenties in deze categorie.<br />");
define("_ADSLIGHT_ADD_LISTING_NOTADDSSUBMIT", "Voeg advertentie toe");

//version 1.064
define("_ADSLIGHT_CATPLUS", "<br/>&#187;&nbsp;Meer ...");
?>