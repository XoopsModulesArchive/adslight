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


define("_ADSLIGHT_ADDON","Addon");
define("_ADSLIGHT_ANNONCES","Ogłoszenia");
define("_ADSLIGHT_MAIN","Main");
define("_ADSLIGHT_ADDFROM","Ogłoszenia sprzedam/kupie/zamienie/oddam   ");
define("_ADSLIGHT_NEWTOD","nowych ogłoszeń, które zostały dodane w tej kategorii dzisiaj");
define("_ADSLIGHT_NEWTRED","nowych ogłoszeń, które zostały dodane w tej kategorii w ciągu ostatnich 3 dni");
define("_ADSLIGHT_NEWWEEK","nowych ogłoszeń, które zostały dodane w tej kategorii w ciągu ostatniego tygodnia");
define("_ADSLIGHT_NOCLAS","Nie ma żadnych ogłoszeń...");
define("_ADSLIGHT_INTRO","<b>Tu możesz dodać ogłoszenia za darmo.<br />Wystarczy kliknąć na kategorię do której chcesz dodać ogłoszenie</b>");
define("_ADSLIGHT_PRICE","Cena");
define("_ADSLIGHT_DATE","Data");
define("_ADSLIGHT_TITLE","Tytuł");
define("_ADSLIGHT_CAT","Kategoria");
define("_ADSLIGHT_THE","The");
define("_ADSLIGHT_LASTADD","Ostatnie ogłoszenie");
define("_ADSLIGHT_PREV","Poprzednie ogłoszenie");
define("_ADSLIGHT_NEXT","Następne ogłoszenie");
define("_ADSLIGHT_THEREIS","Liczba ogłoszeń aktywnych");
define("_ADSLIGHT_INTHISCAT","Ogłoszenie w kategorii");
define("_ADSLIGHT_AVAILAB","dostępne podkategorie :");
define("_ADSLIGHT_ADMINCADRE","Panel administracyjny");
define("_ADSLIGHT_WAIT","Ogłoszenie czeka na zatwierdzenie");
define("_ADSLIGHT_NO_CLA","Nie ma żadnych ogłoszeń oczekujących na zatwierdzone");
define("_ADSLIGHT_SEEIT","Zobacz czas ogłoszenia");
define("_ADSLIGHT_LOCAL","Miejscowość :");
define("_ADSLIGHT_LOCAL2","Miejscowość");
define("_ADSLIGHT_ANNFROM","Ogłoszenie z");
define("_ADSLIGHT_ADDED","dodał");
define("_ADSLIGHT_GORUB","Idź do ");
define("_ADSLIGHT_DATE2","To formacie ogłoszenia został dodany");
define("_ADSLIGHT_SUPPRANN","Usuń ogłoszenie");
define("_ADSLIGHT_MODIFANN","Edytuj ogłoszenie");
define("_ADSLIGHT_PHOTO","Zdjęcia");
define("_ADSLIGHT_VIEW","Wyświetleń");
define("_ADSLIGHT_CONTACT","Kontakt");
define("_ADSLIGHT_BYMAIL2","E-mail");

define("_ADSLIGHT_TYPE_USURE","Transport i płatność");

define("_ADSLIGHT_STOP2","trwanie ogłoszeń  :");
define("_ADSLIGHT_STOP3","została zakończona, został on usunięty");

define("_ADSLIGHT_VU2","to");
define("_ADSLIGHT_OTHER","Jeżeli chcesz umieścić inne reklamy");
define("_ADSLIGHT_THANK","Dziękujemy za korzystanie z naszych usług");
define("_ADSLIGHT_TEAM","Zespół");
define("_ADSLIGHT_ACTUALY","Liczba ogłoszeń");
define("_ADSLIGHT_ADVERTISEMENTS","aktywne");
	//define("_ADSLIGHT_DISPO","disponible jusqu'au");
define("_ADSLIGHT_MODADMIN","Zmień to ogłoszenie (administrator)");
define("_ADSLIGHT_AND","i");
define("_ADSLIGHT_WAIT3","Ogłoszenie czeka na zatwierdzenie");
define("_ADSLIGHT_CREATBY","napisany przez");
define("_ADSLIGHT_FOR","dla");
define("_ADSLIGHT_OF","z");
define("_ADSLIGHT_VIEW2","odsłon");
define("_ADSLIGHT_VIEWANN2","Zobacz pliki ogłoszenia");
define("_ADSLIGHT_ACCESADMIN","MyAds Administration");
define("_ADSLIGHT_NOANNINCAT","Nie ma żadnych ogłoszeń w tej kategorii");
define("_ADSLIGHT_INCAT","w");
define("_ADSLIGHT_CAT2","kategori");
	
   
// addlisting.php //
define("_ADSLIGHT_DESC","Opis");
define("_ADSLIGHT_ADDANNONCE2","Dodaj ogłoszenie zaliczane do tej kategorii");
define("_ADSLIGHT_ADDANNONCE3","Dodawanie ogłoszenie drobne");
define("_ADSLIGHT_ANNMODERATE","Twoje ogłoszenia są w kolejce do zatwierdzenia, a po zatwierdzeniu, będą widoczne");
define("_ADSLIGHT_NOBIZ","Wstęp wzbroniony");
define("_ADSLIGHT_REDIRECT_BIZ","Zobacz nasze kursy");
define("_ADSLIGHT_ANNNOMODERATE","Dodano twoje ogłoszenie będzie trwało do ");
define("_ADSLIGHT_FORMEMBERS2","ogłoszenia mogą dodawać osoby zarejestrowane<br /> Proszę zarejestruj się lub zaloguj, jeśli już jesteś członkiem.");
define("_ADSLIGHT_OR","lub");
define("_ADSLIGHT_DAY","dzień");
define("_ADSLIGHT_CAT3","Kategoria :");
define("_ADSLIGHT_TITLE2","Tytuł ogłoszenia :");
define("_ADSLIGHT_TYPE","Rodzaj :");
define("_ADSLIGHT_NOTYPE","Żaden");
define("_ADSLIGHT_CLASSIFIED_AD","Ogłoszenia :");
define("_ADSLIGHT_CHARMAX","(maks. 255 znaków)");
define("_ADSLIGHT_IMG","Dodaj obrazek :");
define("_ADSLIGHT_IMG2","Dodaj drugi obraz:");
define("_ADSLIGHT_IMG3","Dodaj trzeci obraz:");
define("_ADSLIGHT_PRICE2","Cena :");
define("_ADSLIGHT_EMAIL","E-mail :");
define("_ADSLIGHT_TEL","Telefon :");
define("_ADSLIGHT_TOWN","Miasto :");
define("_ADSLIGHT_COUNTRY","Kraj :");
define("_ADSLIGHT_VALIDATE","Sprawdź");
define("_ADSLIGHT_SELECTYPE","Wybierz typ reklamy niejawne");
define("_ADSLIGHT_SELECTCAT","Wybierz kategorie");
define("_ADSLIGHT_SELECTYPOTHER","Inne typy");
define("_ADSLIGHT_SELECTCATOTHER","Drugiej kategorii");
define("_ADSLIGHT_RETURN","Powrót");
define("_ADSLIGHT_FILES","Pliki z rozszerzeniem");
define("_ADSLIGHT_FILESTOP","nie może być załadowany. Upload stopped");
define("_ADSLIGHT_YIMG","Obraz");
define("_ADSLIGHT_TOBIG","jest zbyt duży. <p> Użyj funkcji <b> Poprzednia strona </ b>, aby powrócić do formularza dodać plik");
define("_ADSLIGHT_ADSADDED","Twoje ogłoszenie zostało dodane.");
define("_ADSLIGHT_PRINT","Drukuj tą reklame");
define("_ADSLIGHT_FRIENDSEND","Wyślij to ogłoszenie do znajomego");
define("_ADSLIGHT_IMGPISP","zdjęcia");
define("_ADSLIGHT_VALIDERORMSG","There are errors which prevent this listing from being saved!");
define("_ADSLIGHT_VALIDTITLE","Tytuł jest wymagany.");
define("_ADSLIGHT_VALIDTYPE","Typ jest wymagany.");
define("_ADSLIGHT_VALIDCAT","Kategoria jest wymagana.");
define("_ADSLIGHT_VALIDANN","Opis jest wymagany.");
define("_ADSLIGHT_VALIDTOWN","Miejscowość jest wymagana.");
define("_ADSLIGHT_VALIDEMAIL","E-mail jest wymagany.");
define("_ADSLIGHT_VALIDSUBMITTER","Imię jest wymagane.");
define("_ADSLIGHT_VALIDMSG","Proszę poprawić te błędy, aby zapisać ogłoszenie.");
	


// display-image.php //
define("_ADSLIGHT_CLOSEF","Zamknij");
	
// listing-p-f.php //
define("_ADSLIGHT_EXTRANN","Ta reklama jest klasyfikowany z sekcji reklam na stronie ");
define("_ADSLIGHT_SENDTO","<b> Wyślij to ogłoszenie do znajomego </ b> <br> <br> Tytuł: ");
define("_ADSLIGHT_FRIEND","... :");
define("_ADSLIGHT_NAME","Twoje imię :");
define("_ADSLIGHT_MAIL","Twój e-mail :");
define("_ADSLIGHT_NAMEFR","Imię znajomego :");
define("_ADSLIGHT_MAILFR","E-mail znajomego :");
define("_ADSLIGHT_SENDFR","Wyślij");
define("_ADSLIGHT_ANNSEND","tajne reklamy stron została wysłana");
define("_ADSLIGHT_SUBJET","ciekawe ogłoszenie");
define("_ADSLIGHT_HELLO","Witaj");
define("_ADSLIGHT_MESSAGE","uważa, że to ogłoszenie niejawne mogą Cię interesują i wysłał tę wiadomość.");
define("_ADSLIGHT_INTERESS","Inne promocji można zobaczyć w");
define("_ADSLIGHT_TEL2","Telefon :");
define("_ADSLIGHT_BYMAIL","E-mail :");
define("_ADSLIGHT_DISPO","wygasa");
define("_ADSLIGHT_NOMAIL","Nie podawaj adresów e-mail użytkowników, nawiązać z nimi kontakt przez e-mail skorzystaj z formularza kontaktowego na naszej stronie klikając na e-mail link w reklamie, można wyświetlić reklam następującej stronie internetowej. ");

// modify.php //
define("_ADSLIGHT_OUI","Tak");
define("_ADSLIGHT_NON","Nie");
define("_ADSLIGHT_SURDELANN","UWAGA: Czy na pewno chcesz usunąć te ogłoszenie");
define("_RETURNANN","Wróć do listy ogłoszeń");
define("_ADSLIGHT_ANNDEL","Ogłoszenie zostało usunięte");
define("_ADSLIGHT_ANNMOD2","Ogłoszenie zostalo edytowane");
define("_ADSLIGHT_NOMODIMG","Twoje ogłoszenie zawiera zdjęcia <br /> (zdjęcia nie mogą zostać zmienione)");
define("_ADSLIGHT_DU","dodany");   
define("_ADSLIGHT_MODIFBEFORE","Zmiany w tym formacie ogłoszenia musi zostać zatwierdzony przez administratora i będzie w kolejce do zatwierdzenia");
define("_ADSLIGHT_SENDBY","Dodane przez :");
define("_ADSLIGHT_NUMANNN","Classified Ad No. :");
define("_ADSLIGHT_NEWPICT","Nowe zdjęcie :");
define("_ADSLIGHT_ACTUALPICT","Aktualne zdjęcie :");
define("_ADSLIGHT_DELPICT","Usuń zdjęcie");
   
// contact.php //

define("_ADSLIGHT_CONTACTAUTOR","Skontaktuj się z autorem tego ogłoszenia");
define("_ADSLIGHT_TEXTAUTO","wiadomości automatycznie wysyła pierwsze trzy pola: imię i nazwisko, e-mail i numer telefonu, nie trzeba wprowadzić je ponownie do wiadomości.");
define("_ADSLIGHT_YOURNAME","Twoje imię :");
define("_ADSLIGHT_YOUREMAIL","Twój e-mail :");
define("_ADSLIGHT_YOURPHONE","Twój telefon :");
define("_ADSLIGHT_YOURMESSAGE","Twoja wiadomość :");
define("_ADSLIGHT_VALIDMESS","Wiadomość jest wymagana.");
define("_ADSLIGHT_MESSEND","Twoja wiadomość została wysłana ...");
define("_ADSLIGHT_CLASSIFIED","Ogłoszenia");
define("_ADSLIGHT_FROM","Wprowadzone przez ");

	//contact form ip
define("_ADSLIGHT_YOUR_IP","Twóje IP ");
define("_ADSLIGHT_IP_LOGGED"," i został zalogowany! działania zostaną podjęte w sprawie nadużyć w tym systemie.");

// message //
define("_ADSLIGHT_CONTACTAFTERANN","Komentarz do ogłoszeń");
define("_ADSLIGHT_MESSFROM","Message from");
define("_ADSLIGHT_FROMANNOF","z ogłoszeń drobnych w");
define("_ADSLIGHT_REMINDANN","Masz odpowiedź na swoje ogłoszenia w");
define("_ADSLIGHT_STARTMESS","Poniżej jest odpowiedz na ogłoszenie");
define("_ADSLIGHT_ENDMESS","!!! Nie odpowiadaj na ten adres e-mail nie dotrze do nadawcy. Jeśli chcesz odpowiedzieć nadawcy, korzystać z informacji kontaktowych powyżej. !!!");
define("_ADSLIGHT_CANJOINT","możesz odpowiedzieć");
define("_ADSLIGHT_TO","w");
define("_ADSLIGHT_ORAT","lub ");
define("_ADSLIGHT_NOMAIL2","Nie podawaj adresów e-mail użytkowników, nawiązać z nimi kontakt przez e-mail skorzystaj z formularza kontaktowego na naszej stronie, możesz odpowiedzieć na reklamy na następujący adres. ");
define("_ADSLIGHT_MESSAGE_END","Koniec wiadomości.");
define("_ADSLIGHT_SECURE_SEND","Ten komunikat został wysłany za pomocą bezpiecznego formularza kontaktu nadawca nie zna adresu e-mail.");
// message end //
define("_ADSLIGHT_HOW_LONG","Czas wyświetlania ogłoszenia");
define("_ADSLIGHT_WILL_LAST","Ogłoszenie będzie trwało");
	
	
//for search on index page
define("_ADSLIGHT_SEARCHRESULTS", "promocji Wyniki wyszukiwania");
define("_ADSLIGHT_SEARCH_LISTINGS", "Wyszukiwanie ofert:");
define("_ADSLIGHT_ALL_WORDS", "Wszystkie słowa");
define("_ADSLIGHT_ANY_WORDS", "Każdy Words");
define("_ADSLIGHT_EXACT_MATCH", "Dokładne dopasowanie");
define("_ADSLIGHT_ONLYPIX", "Tylko <br /> Reklamy ze zdjęciem");
define("_ADSLIGHT_SEARCH", "Szukaj");
define("_ADSLIGHT_REQUIRED", "* wymagane");
define("_ADSLIGHT_MY_ADS", "wszystkie ogłoszenia");
define("_ADSLIGHT_VIEW_MY_ADS", "Zobacz wszystkie ogłoszenia");
define("_ADSLIGHT_COMMENTS_HEAD", "<h3> komentarzy na temat tego sprzedającego </ h3>");
define("_ADSLIGHT_PREMIUM_DAY", "<b> dni, jeśli nie zmienić. </ b>");
define("_ADSLIGHT_PREMIUM_LONG_HEAD", "<b> formacie ogłoszenia rozpocznie się natychmiast </ b>");
define("_ADSLIGHT_PREMIUM_MEMBER", "<b> Ponieważ jesteś Premium, możesz wybrać, jak długo reklama będzie ostatni. <br /> <br /> To ostatnie </ b>");
define("_ADSLIGHT_PREMIUM_MODERATED_HEAD", "<b> formacie ogłoszenia zostanie umieszczony w kolejce do zatwierdzenia </ b>");


// ADDED FOR RATINGS
define("_ADSLIGHT_TOPRATED","Top Lista");
define("_ADSLIGHT_RATINGC","Ocena");
define("_ADSLIGHT_ONEVOTE","1 głos");
define("_ADSLIGHT_NUMVOTES","% s głosów");
define("_ADSLIGHT_RATETHIS","Stawka tego Użytkownika");
define("_ADSLIGHT_VOTEAPPRE","Twój głos jest mile widziane.");
define("_ADSLIGHT_THANKURATE","Dziękujemy za poświęcenie czasu, aby ocenić ten użytkownik tu na% s.");
define("_ADSLIGHT_VOTEFROMYOU","Wejście od użytkowników takich jak Ty, pomogą innym odwiedzającym zdecydować, które reklamy wybrać.");
define("_ADSLIGHT_VOTEONCE","Proszę nie głosować na ten sam zasób więcej niż raz.");
define("_ADSLIGHT_RATINGSCALE","skala 1 - 10, gdzie 1 znaczy kiepski i 10 znaczy wspaniały.");
define("_ADSLIGHT_BEOBJECTIVE","Prosimy o obiektywizm, jeśli ktoś otrzyma 1 i 10, oceny nie są bardzo przydatne.");
define("_ADSLIGHT_DONOTVOTE","Nie głosuj na własne zasoby.");
define("_ADSLIGHT_RATEIT","Oceń go!");
define("_ADSLIGHT_RATING","Ocena");
define("_ADSLIGHT_VOTE","Głosuj");

define("_ADSLIGHT_NORATING","Nie rankingu stron.");
define("_ADSLIGHT_CANTVOTEOWN","Nie możesz głosować w sprawie zasobów dodaÅÇeÅõ. <br /> Wszystkie głosy są rejestrowane i sprawdzane.");
define("_ADSLIGHT_VOTEONCE2","Głosuj na wybrany tylko raz. <br /> Wszystkie głosy są rejestrowane i sprawdzane.");
define("_ADSLIGHT_TOTALVOTES","tajne reklam głosów (oddanych głosów:% s)");
define("_ADSLIGHT_USERTOTALVOTES","głosów zarejestrowanych użytkowników (liczba głosów:% s)");
define("_ADSLIGHT_ANONTOTALVOTES","Anonymous User głosów (oddanych głosów:% s)");
define("_ADSLIGHT_USERAVG","user AVG Ocena");
define("_ADSLIGHT_TOTALRATE","Razem Recenzja");
define("_ADSLIGHT_NOREGVOTES","Brak głosów zarejestrowanych użytkowników");
define("_ADSLIGHT_NOUNREGVOTES","Brak głosów niezarejestrowanych użytkowników");
define("_ADSLIGHT_VOTEDELETED","skreśla Głosowanie danych.");
define("_ADSLIGHT_USER_RATING","Ocena Użytkownika:");
define("_ADSLIGHT_RATETHISUSER","Stawka tego Użytkownika");
define("_ADSLIGHT_THANKURATEUSER","Dziękujemy za poświęcenie czasu, aby ocenić ten użytkownika tutaj na% s.");
define("_ADSLIGHT_RATETHISITEM","Kurs ten przedmiot");
define("_ADSLIGHT_THANKURATEITEM","Dziękujemy za poświęcenie czasu, aby ocenić ten przedmiot tutaj na% s.");
define("_ADSLIGHT_MY_PRICE","Cena");
define("_ADSLIGHT_MY_DATE","Data");
define("_ADSLIGHT_MY_TITLE","Tytuł");
define("_ADSLIGHT_MY_LOCAL2","miejsce");
define("_ADSLIGHT_MY_VIEW","oglądane");
define("_ADSLIGHT_SORTBY","Sortuj:");

define("_ADSLIGHT_CURSORTEDBY","Program aktualnie sortowana według:% s");
define("_ADSLIGHT_POPULARITYLTOM","Popularność (od najmniej do najczęściej ściąganych)");
define("_ADSLIGHT_POPULARITYMTOL","Popularność (Od najczęściej do najmniej odwiedzanych)");
define("_ADSLIGHT_TITLEATOZ","Tytuł (A do Z)");
define("_ADSLIGHT_TITLEZTOA","Tytuł (Z do A)");
define("_ADSLIGHT_DATEOLD","Data (stare aukcje First)");
define("_ADSLIGHT_DATENEW","Data (Nowe wpisy na początku)");
define("_ADSLIGHT_RATINGLTOH","Ocena (Ocena od najniższej do najwyższej Score)");
define("_ADSLIGHT_RATINGHTOL","Standard (najwyższy wynik w Ocena najniższa)");
define("_ADSLIGHT_PRICELTOH","Cena (od najniższej do najwyższej)");
define("_ADSLIGHT_PRICEHTOL","Cena (od najwyższej do najniższej)");
define("_ADSLIGHT_POPULARITY","popularność");
define("_ADSLIGHT_ACTUALPICT2","Obecny drugi obraz:");
define("_ADSLIGHT_ACTUALPICT3","Obecny trzeci obraz:");
define("_ADSLIGHT_NEWPICT2","Nowe drugi obraz:");
define("_ADSLIGHT_NEWPICT3","Nowe trzeci obraz:");
define("_ADSLIGHT_SELECT_CONTACTBY","Wybierz opcję");
define("_ADSLIGHT_CONTACTBY","Kontakt do mnie przez");
define("_ADSLIGHT_CONTACT_BY_EMAIL","E-mail");
define("_ADSLIGHT_CONTACT_BY_PM","Prywatna Wiadomość (PM)");
define("_ADSLIGHT_CONTACT_BY_BOTH","zarówno e-mail lub PM");
define("_ADSLIGHT_CONTACT_BY_PHONE","tylko telefonicznie");
define("_ADSLIGHT_ORBY", "lub");

define("_ADSLIGHT_PREMYOUHAVE", "Dodałeś %s zdjęć do tego ogłoszenia.");
define("_ADSLIGHT_YOUHAVE", "Dodałeś %s zdjęć do tego ogłoszenia.");
define("_ADSLIGHT_YOUCANHAVE", "Konto <b>Premium</b> dozwolona ilość zdjęć <b> %s </b> ");
define("_ADSLIGHT_BMCANHAVE", "Konto darmowe dozwolona ilość zdjęć <b> %s </b> ");
define("_ADSLIGHT_UPGRADE_NOW", "Zamów konto Premium");
define("_ADSLIGHT_DELETE", "Usuń");
define("_ADSLIGHT_EDITDESC", "Usuń opis");
define("_ADSLIGHT_TOKENEXPIRED", "Źle wpisałeś kod potwierdzenia<br /> Spróbuj jeszcze raz");
define("_ADSLIGHT_DESC_EDITED","Pomyślnie edytowano opis zdjęcia");
define("_ADSLIGHT_DELETED","Pomyślnie usunięto zdjęcie");
define("_ADSLIGHT_SUBMIT_PIC_TITLE","Prześlij zdjęcia do ogłoszenia");
define("_ADSLIGHT_SELECT_PHOTO","Wybierz zdjęcie");
define("_ADSLIGHT_CAPTION","Tytuł zdjęcia");
define("_ADSLIGHT_UPLOADPICTURE","Prześlij zdjęcia");
define("_ADSLIGHT_YOUCANUPLOAD","Możesz przesłać tylko pliki jpg do %s KBytes");

define("_ADSLIGHT_ALBUMTITLE","%s zdjęcia ogłoszeń");

define("_ADSLIGHT_WELCOME","Welcome to your album");
define("_ADSLIGHT_NOTHINGYET","Brak zdjęć w tym ogłoszeniu jeszcze");
define("_ADSLIGHT_NOCACHACA","Sorry no cachaca for you");
define("_ADSLIGHT_ADD_PHOTOS","Dodaj zdjęcie");
define("_ADSLIGHT_SHOWCASE","Galeria");
define("_ADSLIGHT_EDIT_CAPTION","Edytuj tytuł zdjęcia");
define("_ADSLIGHT_EDIT","Edytuj");
define("_ADSLIGHT_SUBMITTER","Imię :");
define("_ADSLIGHT_ADD_LISTING","Dodaj wpis");
define("_ADSLIGHT_SUBMIT","Wyślij");




define("_ADSLIGHT_PRICETYPE","Format oferty :");
define("_ADSLIGHT_ADD_PHOTO_NOW","Czy chcesz dodać zdjęcia");
define("_ADSLIGHT_ACTIVE","Aktywnuj");
define("_ADSLIGHT_INACTIVE","Nieaktywuj");
define("_ADSLIGHT_SOLD","Reserved");
define("_ADSLIGHT_STATUS","Status");
define("_ADSLIGHT_REPLIES","Replies");
define("_ADSLIGHT_EXPIRES_ON","Expires on");
define("_ADSLIGHT_ADDED_ON","Dodano");
define("_ADSLIGHT_REPLY_MESSAGE","Odpowiedzi");
define("_ADSLIGHT_REPLIED_ON","Odpowiedział : ");
define("_ADSLIGHT_VIEWNOW","widok");
define("_ADSLIGHT_REPLY_TITLE","Odpowiedzi na aukcji ");
define("_ADSLIGHT_ALL_USER_LISTINGS","Program dla wszystkich ");
define("_ADSLIGHT_REPLY","Komentarz -");
define("_ADSLIGHT_PAGES","Strona -");
define("_ADSLIGHT_REALNAME","Nazwa");
define("_ADSLIGHT_VIEW_YOUR_LISTINGS","Zobacz ogłoszenie");
define("_ADSLIGHT_REPLIED_BY","Odpowiedź : ");
define("_ADSLIGHT_DELETE_REPLY", "Usuń odpowiedź");
define("_ADSLIGHT_NO_REPLIES", "Brak odpowiedzi");
define("_ADSLIGHT_THANKS", "Dziękujemy za korzystanie z naszych Ogłoszenia");
define("_ADSLIGHT_WEBMASTER", "Webmaster");
define("_ADSLIGHT_YOUR_AD", "Reklama");
define("_ADSLIGHT_AT","w");
define("_ADSLIGHT_VEDIT_AD", "Wyświetl lub edytuj reklamę tutaj");
define("_ADSLIGHT_ALMOST", "reklama jest przy wygaśnięciu");
define("_ADSLIGHT_EXPIRED", "czas reklamy upłyną i została usunięta.");
define("_ADSLIGHT_YOUR_AD_ON", "Reklama w ");
define("_ADSLIGHT_VU","Twoja reklama została wyświetlona");
define("_ADSLIGHT_TIMES","times.");
define("_ADSLIGHT_STOP","Ogłoszenie niejawne wygasł");
define("_ADSLIGHT_SOON","będzie wygasać niebawem.");
define("_ADSLIGHT_MUSTLOGIN","Musisz zalogować się, aby odpowiedzieć na to ogłoszenie.");
define("_ADSLIGHT_VIEW_AD", "Zobacz reklama w");
define("_ADSLIGHT_MORE_PHOTOS", "Pokaż więcej zdjęć");
define("_ADSLIGHT_CANCEL","Cancel");



//Added for 1.2 RC1
define("_ADSLIGHT_ADDED_TO_CAT","nowy wykaz został dodany do kategorii");
define("_ADSLIGHT_RECIEVING_NOTIF","Masz zgodę na otrzymywanie powiadomień o tego rodzaju.");
define("_ADSLIGHT_ERROR_NOTIF","Jeśli to jest błąd lub nie chcesz otrzymywać kolejnych takich zgłoszeń, proszę zaktualizować swoje subskrypcje, odwiedzając poniższy link:");
define("_ADSLIGHT_FOLLOW_LINK","Tu jest link do nowej aukcji");
define("_ADSLIGHT_YOU_CAN_VIEW_BELOW","można zobaczyć pełną reklam na link poniżej");
define("_ADSLIGHT_LISTING_NUMBER","Aukcja Liczba:");


define("_ADSLIGHT_NOREPLY ","!!! Nie odpowiadaj na ten adres e-mail, nie dostaniesz odpowiedzi. !!!");
define("_ADSLIGHT_CAPTCHA","Security Code");

define("_ADSLIGHT_NEW_WAITING_SUBJECT","Nowe reklamy! Czekam zatwierdzenia.");
define("_ADSLIGHT_NEW_WAITING","Nie ma nowych Lista oczekujących na moderowane.");
define("_ADSLIGHT_PLEASE_CHECK","Proszę kliknąć na poniższy adres URL w celu sprawdzenia tej reklamy.");
define("_ADSLIGHT_ADMIN","administrator");
define("_ADSLIGHT_NEWAD","nowy wykaz znajduje się poniżej.");
define("_ADSLIGHT_NEED_TO_LOGIN","Musisz być zalogowany");

define("_ADSLIGHT_PROFILE","");

////AJOUTER PAR ILUC////
define("_ADSLIGHT_MI_ADSLIGHT_SMENU1","Twój Program");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU2","Wyślij");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU3","Szukaj");

//viewads.php
define("_ADSLIGHT_ALERTEABUS","Zobacz raport");
define("_ADSLIGHT_CONTACT_SUBMITTER","Użytkownki ");
define("_ADSLIGHT_SENDFRIENDS","Wyślij to ogłoszenie do znajomego");

//report-abuse.php
define("_ADSLIGHT_REPORTSENDTO","<b> Zgłoś tę reklamę: </ b> <br/> <br/> Liczba reklam");
define("_ADSLIGHT_REPORTANNSEND","Thank you for your help! <br/> reklam tylko być zgłaszane do administratora.");
define("_ADSLIGHT_REPORTSUBJET","[Alarm] ad niepożądane");
define("_ADSLIGHT_REPORTMESSAGE","uważa, że to oświadczenie jest niezgodne z prawem i chcesz wiedzieć.");

//index.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULL","Aby dodać <br />Ogłoszenie");
define("_ADSLIGHT_ADD_LISTING_SUB","Zarejestruj się");
define("_ADSLIGHT_ADD_LISTING_BULLOK", "Aby dodać<br />Ogłoszenie: ");
define("_ADSLIGHT_ADD_LISTING_SUBOK", "Kliknij tutaj...");

//index.php >> Title Menu //
define("_ADSLIGHT_ADD_TITLEMENU1","Edytuj / Usuń reklamy, czy też zgłoszony jako [zastrzeżone] ...");
define("_ADSLIGHT_ADD_TITLEMENU2","Dodaj DARMOWE ogłoszenie, jeśli można przeglądać kategorie.");
define("_ADSLIGHT_ADD_TITLEMENU4","All good wskazówki na temat pisania reklam.");
define("_ADSLIGHT_ADD_TITLEMENU5","Szukaj Cyble lub badań w danym obszarze.");
define("_ADSLIGHT_ADD_TITLEMENU6","Czytanie i wysłać po południu.");
define("_ADSLIGHT_ADD_TITLEMENU7","Masz nową wiadomość.");
define("_ADSLIGHT_ADD_TITLEMENU8","Musisz być zalogowany, aby przeczytać wiadomości.");

//viewcats.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULLCATS","Możesz dodać <br /> ogłoszenie w tej kategorii <br />");
define("_ADSLIGHT_ADD_LISTING_BULLCATSOK", "Aby dodać jedno <br /> Ogłoszenie w tej kategorii <br /> Dziękujemy");

// Reserved
define("_ADSLIGHT_RESERVED", "Reserved");

// tips_writing_ad.php
define("_ADSLIGHT_TIPSWRITE", "Jak dodać ogłoszenie?<br />Jak znaleść ogłoszenie");
define("_ADSLIGHT_TIPSWRITE_TITLE", "Wskazówki");

define("_ADSLIGHT_TIPSWRITE_TEXT", "<b>Wstęp</b><br>
Codziennie znajdziesz tu wiele okazji cenowych oraz unikatowych przedmiotów. Zakupy są tutaj proste i bezpieczne, a co najważniejsze – aby je zrobić, nie musisz nawet wychodzić z domu. Kupioną rzecz dostaniesz pocztą na wskazany adres. 
<br>Jeśli chcesz kupić, zarejestruj się – to proste (wystarczy adres e-mail) i nic nie kosztuje!
<br><br><b>Znajdź przedmiot</b><br>Szukasz konkretnego przedmiotu? A może interesują Cię przedmioty z określonej dziedziny? Aby znaleźć coś w tstyl, wystarczy skorzystać z wyszukiwarki lub przejrzeć kategorie, w których wystawiane są ogłoszenia.<br>
<br>Wyszukaj oferty:
<br>W polu Znajdź przedmiot wpisz nazwę rzeczy, którą chcesz kupić. Po zatwierdzeniu przyciskiem Szukaj zobaczysz listę odpowiednich ogłoszeń. Aby przeczytać opis, kliknij w jedną z nich.<br>
<br>Przejrzyj kategorie:
<br>Znajdź tę, do której pasuje szukany przez Ciebie przedmiot, i kliknij w jej nazwę. Wybierz pasującą podkategorię - wyświetli się lista ogłoszeń. Po kliknięciu w nazwę jednej z nich zobaczysz pełen opis.
<br>
Nie długim czasie będzie dodana opcja komentarze/opinie o osobie wystawiającej przedmiotu…


");

?>