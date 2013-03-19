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

define("_AM_ADSLIGHT_CONF","Konfiguracja ogłoszenia");
define("_AM_ADSLIGHT_ADDON","Dodatki");
define("_AM_ADSLIGHT_ANNDEL","Wybrane ogłoszenia zostały usunięte");
define("_AM_ADSLIGHT_ADDCATPRINC","Dodaj kategorię główną");
define("_AM_ADSLIGHT_CATNAME","Nazwa :");
define("_AM_ADSLIGHT_ADDSUBCAT","Usuń kategorię");
define("_AM_ADSLIGHT_DELSUBCAT", "Usuwanie kategorii");
define("_AM_ADSLIGHT_MODIFSUBCAT", "Edytuj kategorię");
define("_AM_ADSLIGHT_ADD","Dodaj");
define("_AM_ADSLIGHT_CATDEL","Wybrane kategorii został usunięty");
define("_AM_ADSLIGHT_OUI","Tak");
define("_AM_ADSLIGHT_NON","Nie");
define("_AM_ADSLIGHT_SURDELCAT","UWAGA: Czy na pewno chcesz usunąć tej kategorii i wszystkich podkategorii i reklama.");
define("_AM_ADSLIGHT_IN","w");
define("_AM_ADSLIGHT_MODIF","Modyfikuj");
define("_AM_ADSLIGHT_MODIFCAT","Edytuj kategorie");
define("_AM_ADSLIGHT_CAT","Kategorie :");
define("_AM_ADSLIGHT_SUBCAT","Podkategorie :");
define("_AM_ADSLIGHT_CONFMYA","Konfiguracja ogłoszenia");
define("_AM_ADSLIGHT_CATADD","Dodał kategorie");
define("_AM_ADSLIGHT_SUBCATADD","Dodał podkategorie");
define("_AM_ADSLIGHT_ANNMOD","Ogłoszenie zostało zmienione");
define("_AM_ADSLIGHT_NOANNVAL","Obecnie nie ma ogłoszenia do zatwierdzenia");
define("_AM_ADSLIGHT_NOMODACTIV","Moderation is not active, no advertisements to approve");
define("_AM_ADSLIGHT_MODANN","Zmiana ogłoszenia");
define("_AM_ADSLIGHT_ALLMODANN","(Wszystkie reklamy mogą być zmienione przez administratora reklam.)");
define("_AM_ADSLIGHT_HELLO","Witaj! ");
define("_AM_ADSLIGHT_ANNVALID","Reklama została zatwierdzona");
define("_AM_ADSLIGHT_DEL","Usuń");
define("_AM_ADSLIGHT_SAVMOD","Zapisz zmiany");
define("_AM_ADSLIGHT_MODTYPE","Zmień format oferty");
define("_AM_ADSLIGHT_ANNACCEPT","Twoja reklama została zatwierdzona");
define("_AM_ADSLIGHT_CONSULTTO","Proszę o kontakt :");
define("_AM_ADSLIGHT_THANK","Dziękuję");
define("_AM_ADSLIGHT_TEAMOF","Zespół");
define("_AM_ADSLIGHT_RETURN","Powrót");
define("_AM_ADSLIGHT_MODSUBCAT","Zmiana nazwy podkategorii");
define("_AM_ADSLIGHT_MODCAT","Zmień nazwę głównej kategorii");
define("_AM_ADSLIGHT_GO","Go");
define("_AM_ADSLIGHT_SENDBY","Dodał :");
define("_AM_ADSLIGHT_EMAIL","E-mail :");
define("_AM_ADSLIGHT_TEL","Telefon :");
define("_AM_ADSLIGHT_TOWN","Miasto :");
define("_AM_ADSLIGHT_COUNTRY","Kraj :");
define("_AM_ADSLIGHT_TITLE2","Tytuł :");
define("_AM_ADSLIGHT_TYPE","Typ :");
define("_AM_ADSLIGHT_PRICE2","Cena :");
define("_AM_ADSLIGHT_CAT2","Kategoria :");
define("_AM_ADSLIGHT_DESCRIPTION","Google adsence code or code of a banner:<br/>Format: width = 300 height = 250");
define("_AM_ADSLIGHT_THEREIS","Są ");
define("_AM_ADSLIGHT_WAIT","Ogłoszenie oczekujące akceptacje przez moderatora");
define("_AM_ADSLIGHT_ADDTYPE","Dodaj Format oferty");
define("_AM_ADSLIGHT_ERRORTYPE","ERROR : typ");
define("_AM_ADSLIGHT_EXIST","Gotowe!");
define("_AM_ADSLIGHT_ERRORCAT","ERROR : Kategoria");
define("_AM_ADSLIGHT_ERRORSUBCAT","ERROR : Podkategoria");
define("_AM_ADSLIGHT_TYPEMOD","Typ reklamy został zmodyfikowany");
define("_AM_ADSLIGHT_TYPEDEL","Typ reklamy został usunięty");
define("_AM_ADSLIGHT_ADDTYPE2","Typ reklamy został dodany");
define("_AM_ADSLIGHT_ACCESMYANN","Ogłoszenia");
define("_AM_ADSLIGHT_IMGCAT","Zdjęcie :");
define("_AM_ADSLIGHT_REPIMGCAT","Image directory :");
define("_AM_ADSLIGHT_GESTCAT","Spis kategorii");
define("_AM_ADSLIGHT_ADDPRICE","Dodaj typ ceny");
define("_AM_ADSLIGHT_MODPRICE","Zmień typ ceny");
define("_AM_ADSLIGHT_ADDPRICE2","Typ ceny został przyjęty");
define("_AM_ADSLIGHT_PRICEMOD","Typ ceny został zmodyfikowany");
define("_AM_ADSLIGHT_PRICEDEL","Typ ceny został usunięty");
define("_AM_ADSLIGHT_ORDRE","Sortuj :");
define("_AM_ADSLIGHT_ORDRECLASS","Zaproponuj kategorie :");
define("_AM_ADSLIGHT_ORDREALPHA","Sortuj alfabetycznie");
define("_AM_ADSLIGHT_ORDREPERSO","Zindywidualizowane Zamówienie");
define("_AM_ADSLIGHT_BIGCAT","Moja kategoria");
define("_AM_ADSLIGHT_HELP1","<b>Aby dodać kategorie :</b> kliknij na zdjęcie <img src=\"".XOOPS_URL."/modules/adslight/images/plus.gif\" border=0 width=10 height=10 alt=\"Add a category\"> wraz z kategorii chcesz dodać kategorię, w ramce.<p><b>Aby zmienić lub usunąć kategorię:</b> kliknij na nazwę kategorii");
define("_AM_ADSLIGHT_HELP2","<B>Aby Kategoria:</B> liczba całkowita w nawiasach odpowiada kolejności w najwyższej kategorii lub głównych kategorii. Ujemne liczby całkowite mogą być użyte.: -1");
	
// fichier pref.php //
define("_AM_ADSLIGHT_CONFSAVE","Zapisz konfiguracje");
define("_AM_ADSLIGHT_ANNOCANPOST","Anonimowy użytkownik może wysyłać ogłoszenia :");
define("_AM_ADSLIGHT_PERPAGE","Ogłoszeń na stronie :");
define("_AM_ADSLIGHT_MONEY","Symbol waluty :");
define("_AM_ADSLIGHT_NUMNEW","Liczba nowych ogłoszeń :");
define("_AM_ADSLIGHT_MODERAT","Umiarkowane ogłoszenie :");
define("_CAL_MAXIIMGS","Maksymalna wielkość zdjęcia :");
define("_AM_ADSLIGHT_TIMEANN","czas trwania ogłoszenia :");
define("_AM_ADSLIGHT_INOCTET","w bajtach");
define("_AM_ADSLIGHT_INDAYS","w dniach");
define("_AM_ADSLIGHT_TYPEBLOC","Typ blokowania :");
define("_AM_ADSLIGHT_ANNRAND","Losowe ogłoszenia");
define("_AM_ADSLIGHT_LASTTEN","Ostatnie 10 ogłoszeń");
define("_AM_ADSLIGHT_NEWTIME","Nowe reklamy z :");

define("_AM_ADSLIGHT_DISPLPRICE","Wystaw cene :");
define("_AM_ADSLIGHT_DISPLPRICE2","Wystaw cene :");
define("_AM_ADSLIGHT_INTHISCAT","w tej kategorii");
define("_AM_ADSLIGHT_DISPLSUBCAT","Wystaw podkategorie :");
define("_AM_ADSLIGHT_ONHOME","na pierwszej stronie modułu");
define("_AM_ADSLIGHT_NBDISPLSUBCAT","Liczba podkategorii, aby pokazać :");
define("_AM_ADSLIGHT_IF","jeśli");
define("_AM_ADSLIGHT_ISAT","jest");
define("_AM_ADSLIGHT_VIEWNEWCLASS","Pokaż nowe ogłoszenie :");

define("_AM_ADSLIGHT_PERMADDNG", 'Nie można dodać %s pozwolenie na %s dla grupy %s');
define("_AM_ADSLIGHT_PERMADDOK",'Dodano %s pozwolenie na %s dla grupy %s');
define("_AM_ADSLIGHT_PERMRESETNG",'Nie można zresetować uprawnienia grupy do modułu %s');
define("_AM_ADSLIGHT_PERMADDNGP", 'Wszystkich pozycji dominującej powinny być zaznaczone.');
define("_AM_ADSLIGHT_EXPIRE", 'Days listing will last.');
define("_AM_ADSLIGHT_DBUPDATED", 'Baza danych została zaktualizowana');

define("_AM_ADSLIGHT_CONTACT_BY_EMAIL","E-mail");
define("_AM_ADSLIGHT_CONTACT_BY_PM","Prywatna Wiadomość(PW)");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH","Zarówno E-mail jak i PW");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE","Tylko telefonicznie");
define("_AM_ADSLIGHT_CONTACTBY","Konatakt :");
define("_AM_ADSLIGHT_PREMIUM","Premium aukcji :");

define("_AM_ADSLIGHT_OK","Zatwierdzać");
define("_AM_ADSLIGHT_CATSMOD","Kategoria została zmieniona");
define("_AM_ADSLIGHT_ADDED_ON"," dodana ");
define("_AM_ADSLIGHT_NUMANN","Lista nr. :");

define("_AM_ADSLIGHT_ACTIVE","Aktywne");
define("_AM_ADSLIGHT_INACTIVE","Nieaktywne");
define("_AM_ADSLIGHT_SOLD","Zarezerwowany");
define("_AM_ADSLIGHT_STATUS","Status");
define("_AM_ADSLIGHT_UPDATECOMPLETE","Update Complete");
define("_AM_ADSLIGHT_UPDATEMODULE","<b>Update Module</b>");
define("_AM_ADSLIGHT_UPGRADEFAILED","Update Failed");
define("_AM_ADSLIGHT_UPGRADEFAILED0","Update");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR","Access Error");
define("_AM_ADSLIGHT_THANKS", "Dziękujemy za korzystanie z naszych Ogłoszenia");
define("_AM_ADSLIGHT_WEBMASTER", "Administrator");
define("_AM_ADSLIGHT_YOUR_AD", "Reklama");
define("_AM_ADSLIGHT_AT","w");
define("_AM_ADSLIGHT_VEDIT_AD", "Możesz wyświetlać lub edytować swoje ogłoszenie tutaj");
define("_AM_ADSLIGHT_YOUR_AD_ON", "Reklama w");
define("_AM_ADSLIGHT_APPROVED", "został zatwierdzona.");
define("_AM_ADSLIGHT_EXPIRED", "upłynął czas i została usunięta.");
define("_AM_ADSLIGHT_CHECKER", 'Directory Sprawdzania uprawnień');
define("_AM_ADSLIGHT_DIRPERMS", 'Uprawnienie do zmiany klasyfikacji zapisu ! => ');

define("_AM_ADSLIGHT_PHOTO1","Ilość zdjęć :");
define("_AM_ADSLIGHT_SUBMITTER","Wysłane przez");
define("_AM_ADSLIGHT_NBR_PHOTO","Zdjęcie");
define("_AM_ADSLIGHT_TITLE","Tytuł");
define("_AM_ADSLIGHT_LID","ID");
define("_AM_ADSLIGHT_DATE","Data dodania");
define("_AM_ADSLIGHT_DESC","Opis");

define("_AM_ADSLIGHT_FREECAT","To będzie darmowa kategorii");
define("_AM_ADSLIGHT_MODERATE_CAT","Moderate this category");
define("_AM_ADSLIGHT_VISIT_LINK", "Możesz zobaczyć pełną reklam na poniższy link:");
define("_AM_ADSLIGHT_LISTING_NUMBER", "Liczba ogłoszeń ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW", "Możesz zobaczyć pełną listę w linku poniżej");
define("_AM_ADSLIGHT_NOREPLY","!!!  Nie odpowiadaj na tego e-mail.  !!!");

define("_AM_ADSLIGHT_ADDED_TO_CAT","Nowy wykaz został dodany do kategorii ");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","Masz zgodę na otrzymywanie tego typu zgłoszeń.");
define("_AM_ADSLIGHT_ERROR_NOTIF","Jeśli jest to błąd, albo nie chcesz otrzymywać kolejnych takich zgłoszeń, należy zgłosić, poniższym linku:");
define("_AM_ADSLIGHT_FOLLOW_LINK","Tu jest link do nowej aukcji");
define("_AM_ADSLIGHT_CAPTCHA","Kod potwierdzenia :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","Moderate subcats of this category");
define("_AM_ADSLIGHT_DOCUMENTATION","Dokumentacja");
define("_AM_ADSLIGHT_FEATURES","Funkcje");
define("_AM_ADSLIGHT_CLONE","How to Clone");
define("_AM_ADSLIGHT_INCOMPLETE","Niekompletny");

// Added by iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE", "Dodaj rodzaj transportu, płatności");
define("_AM_ADSLIGHT_MODUSURE", "Zmienić rodzaj transport i płatności");
define("_AM_ADSLIGHT_ADDUSURE2", "Rodzaj transportu i płatności został dodany");
define("_AM_ADSLIGHT_USUREMOD", "Transport i płatność została zmieniona");
define("_AM_ADSLIGHT_USUREDEL", "Rodzaj transport i płatności został usunięty");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","Autor");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Change log");
define("_AM_ADSLIGHT_ABOUT_CREDITS","Credits");
define("_AM_ADSLIGHT_ABOUT_LICENSE","License");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","Informacje o module");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","Website Support");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","Release Date");
define("_AM_ADSLIGHT_ABOUT_STATUS","Status");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","Osoby, które uczestniczyły w ulepszanie modułu");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","Nazwa");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","www");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","Wersja");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","Opis");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Można dodać" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "Sprawdź kategorie, które umożliwiają dostęp do" ) ;
define("_AM_ADSLIGHT_GROUPPERMDESC" , "Zaznacz grupy, które mogą złożyć ogłoszenie." ) ;
define("_AM_ADSLIGHT_GROUPPERM", "Uprawnienia do wysyłania");
define("_AM_ADSLIGHT_SUBMITFORM", "Uprawnień do pliku aukcji");
define("_AM_ADSLIGHT_SUBMITFORM_DESC", "Wybierz, które mogą wyświetlać reklamy");
define("_AM_ADSLIGHT_VIEWFORM", "Uprawnień do wyświetlania reklam");
define("_AM_ADSLIGHT_VIEWFORM_DESC", "Zaznacz grupy, które mogą zobaczyć ogłoszenia");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC", "Wybierz, kto może wyświetlać się ponownie");
define("_AM_ADSLIGHT_SUPPORT", "Wsparcie tego programu");
define("_AM_ADSLIGHT_OP", "Przeczytaj moją recenzję");
define("_AM_ADSLIGHT_PREMIUM_DESC", "Wybierz grup, które mogą wybrać czas trwania reklamy");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK", "Korzystasz z najnowszej wersji modułu.");
define("_AM_ADSLIGHT_RELEASEISNOTOK", "Modułu jest przestarzała, nowa wersja jest dostępna.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD", "Pobierz");
define("_AM_ADSLIGHT_NBR_PHOTO","Zdjęcie");

//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<b>Meta Opis:</b><br/>Dla lepszej optymalizacji,</b>tu dodać dokładny opis swojej kategori. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<b>Meta keywords:</b><br/>Na lepsze SEO,</b>tu dodać dokładny opis danej kategorii ..<br/><b><font color=\"#ff3300\">Rozdziel słowa przecinkami</font></b>. ( english, polski, espagne, france,...)");


//Version 1.053
// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK", "Xml nie istnieje, albo nie pasuje do wybranych preferencji.");
define("_AM_ADSLIGHT_XMLUPGRADE", "Update xml");

//Version 1.054
// Support_forum.php
define("_AM_ADSLIGHT_SUPPORTFORUM_TITLE", "Lista forum Support");
define("_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS", "Link");
define("_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG", "Język");
define("_AM_ADSLIGHT_SUPPORTFORUM_DESC", "Opis");
define("_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE", "Tłumaczenie");

////////////////////////////
//// Version 1.06 //////////

// ../admin/index.php

// Stat
define("_AM_ADSLIGHT_STAT_TITLE", "Statystyka");
define("_AM_ADSLIGHT_STAT_NUM1", "Ogłoszenia");
define("_AM_ADSLIGHT_STAT_NUM2", "Kategorii");
define("_AM_ADSLIGHT_STAT_NUM3", "Użytkowników");
define("_AM_ADSLIGHT_STAT_NUM4", "Komentarzy");


// Option Menu
define("_AM_ADSLIGHT_USERMENU_TITLE", "Opcje");
define("_AM_ADSLIGHT_USERMENU_SENDMAIL", " Wyślij e-mail");
define("_AM_ADSLIGHT_USERMENU_COMMENT", " Komentarze");
define("_AM_ADSLIGHT_USERMENU_BAMMIER", " Banery");

// Menu Category
define("_AM_ADSLIGHT_CATMENU_TITLE", "Kategorii");
define("_AM_ADSLIGHT_CATMENU_CATEGORY", " Dodaj kategorie");
define("_AM_ADSLIGHT_CATMENU_MODIFCAT", " Zarządzanie kategorią");

// Menu Annonces
define("_AM_ADSLIGHT_ADSMENU_TITLE", "Ogłoszenie");
define("_AM_ADSLIGHT_ADSMENU_VALIDADS", " Sprawdź ogłoszenie");
define("_AM_ADSLIGHT_ADSMENU_VIEWADS", " Pokaż ogłoszenie");
define("_AM_ADSLIGHT_ADS_MODIFADS", " Edytuj ogłoszenie");

// Menu Downloads
define("_AM_ADSLIGHT_DOWNLOADS_TITLE", "Pobierz");
define("_AM_ADSLIGHT_DOWNLOADS_PLUGINS", " Plugins");
define("_AM_ADSLIGHT_DOWNLOADS_MAPS", " Maps");

// Menu Devellopment
define("_AM_ADSLIGHT_DEVLLP_TITLE", "Rozwój");
define("_AM_ADSLIGHT_DEVLLP_HACK", " Zaproponuj Hack");
define("_AM_ADSLIGHT_DEVLLP_TRANSLATE", " Dodaj tłumaczenie");
define("_AM_ADSLIGHT_DEVLLP_CORRECTION", " Zaproponuj korekty");
define("_AM_ADSLIGHT_DEVLLP_MAPFLASH", " Wyślij mape (.Swf)");
define("_AM_ADSLIGHT_DEVLLP_FORUM", " Forum");

// Menu Faire un Don
define("_AM_ADSLIGHT_DONATE_TITLE", " Wsparcie");
define("_AM_ADSLIGHT_DONATE", "AdsLight jego używanie jest bezpłatne i pozostanie.<br />Można także dokonać wpłaty<br />Jeśli chcesz nas wspierać.<br />");


////RSS Forum
define("_AM_ADSLIGHT_MENURSSFORUM_TITLE", "Support forum AdsLight");
define("_AM_ADSLIGHT_MENURSSFORUM_URL", "http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=56");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK1", "http://www.i-luc.fr/adslight/modules/newbb/viewforum.php?forum=56/#googtrans/auto/en");
define("_AM_ADSLIGHT_MENURSSFORUM_GOFORUM", "idź do Forum");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK2", "http://www.i-luc.fr/adslight/modules/profile/register.php#googtrans/auto/en");
define("_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT", "Rejestracja w adslight");

////	RSS AdsLight News
define("_AM_ADSLIGHT_MENURSS_TITLE", "Nowości w AdsLight");
 
// ../admin/view_ads.php
define("_AM_ADSLIGHT_ADSVALIDE", "Ads valid");
define("_AM_ADSLIGHT_NOANNVALADS", "There are currently no ads");
define("_AM_ADSLIGHT_USURE", "wear");

// Logo Paypall Donate
define("_AM_ADSLIGHT_DONATE_LOGO", '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
');

?>