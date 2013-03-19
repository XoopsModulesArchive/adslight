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


define("_ADSLIGHT_ADDON", "Addon");
define("_ADSLIGHT_ANNONCES", "Annunci");
define("_ADSLIGHT_LOGOLINK", "Free Xoops Modulo AdsLight annunci Ads");
define("_ADSLIGHT_MAIN", "Principali");
define("_ADSLIGHT_ADDFROM", "Annunci economici");
define("_ADSLIGHT_NEWTOD", "Nuovi annunci sono stati aggiunti in questa categoria oggi");
define("_ADSLIGHT_NEWTRED", "Nuovi annunci sono stati aggiunti in questa categoria nel corso degli ultimi 3 giorni");
define("_ADSLIGHT_NEWWEEK", "Nuovi annunci sono stati aggiunti in questa categoria durante l&#39;ultima settimana");
define("_ADSLIGHT_INTRO", "<b>Puoi aggiungere i tuoi annunci classificati gratuitamente. <br /> Basta cliccare sulla categoria che si desidera aggiungere ad essa, <br />Vedrete un link &#39;Aggiungi un annuncio in questa categoria&#39;.</b>");
define("_ADSLIGHT_PRICE", "Prezzo");
define("_ADSLIGHT_DATE", "Data");
define("_ADSLIGHT_TITLE", "Titolo");
define("_ADSLIGHT_CAT", "Categoria");
define("_ADSLIGHT_THE", "L&#39;");
define("_ADSLIGHT_LASTADD", "Ultimi annunci");
define("_ADSLIGHT_PREV", "Gli annunci precedenti");
define("_ADSLIGHT_NEXT", "Annunci accanto");
define("_ADSLIGHT_THEREIS", "Ci sono");
define("_ADSLIGHT_INTHISCAT", "Annunci in questa categoria");
define("_ADSLIGHT_AVAILAB", "Sottocategorie disponibili:");
define("_ADSLIGHT_ADMINCADRE", "Pannello di amministrazione");
define("_ADSLIGHT_WAIT", "Annuncio in attesa di essere approvato");
define("_ADSLIGHT_NO_CLA", "Non ci sono annunci in attesa di essere approvati");
define("_ADSLIGHT_SEEIT", "Vista in attesa di annunci");
define("_ADSLIGHT_LOCAL", "Localit&#224;:");
define("_ADSLIGHT_LOCAL2", "Posizione");
define("_ADSLIGHT_ANNFROM", "Annunci da");
define("_ADSLIGHT_ADDED", "ha aggiunto");
define("_ADSLIGHT_GORUB", "Vai");
define("_ADSLIGHT_DATE2", "L&#39;annuncio e &#39;stato aggiunto");
define("_ADSLIGHT_SUPPRANN", "Elimina i tuoi annunci classificati");
define("_ADSLIGHT_MODIFANN", "Modifica i tuoi annunci classificati");
define("_ADSLIGHT_PHOTO", "Foto");
define("_ADSLIGHT_VIEW", "Visto");
define("_ADSLIGHT_CONTACT", "Contattaci");
define("_ADSLIGHT_BYMAIL2", "E-mail");

define("_ADSLIGHT_STOP2", "Il periodo di iscrizione per il tuo annuncio:");
define("_ADSLIGHT_STOP3", "Si &#232; concluso, &#232; stato eliminato");

define("_ADSLIGHT_VU2", "questo");
define("_ADSLIGHT_OTHER", "Se vuoi che il tuo posto un altro annuncio");
define("_ADSLIGHT_THANK", "Grazie per aver utilizzato il nostro servizio di annunci classificati.");
define("_ADSLIGHT_TEAM", "Team");
define("_ADSLIGHT_ACTUALY", "Ci sono");
define("_ADSLIGHT_ADVERTISEMENTS", "Ad Classificato (s) attivo");
	//define("_ADSLIGHT_DISPO", "jusqu&#39;au disponible");
define("_ADSLIGHT_MODADMIN", "Cambia l&#39;annuncio (amministratore)");
define("_ADSLIGHT_AND", "e");
define("_ADSLIGHT_WAIT3", "Ad Classificato(i) in attesa di essere approvato");
define("_ADSLIGHT_CREATBY", "&#232; stato scritto da");
define("_ADSLIGHT_FOR", "per");
define("_ADSLIGHT_OF", "di");
define("_ADSLIGHT_VIEW2", "viste");
define("_ADSLIGHT_VIEWANN2", "Vedi il tuo annuncio");
define("_ADSLIGHT_ACCESADMIN", "Amministrazione MyAds");
define("_ADSLIGHT_NOANNINCAT", "Non ci sono annunci in questa categoria");
define("_ADSLIGHT_INCAT", "in");
define("_ADSLIGHT_CAT2", "categorie");
	
   
// addlisting.php //
define("_ADSLIGHT_DESC", "Descrizione");
define("_ADSLIGHT_ADDANNONCE2", "Aggiungi un annuncio in questa categoria");
define("_ADSLIGHT_ADDANNONCE3", "Aggiunta di un annuncio");
define("_ADSLIGHT_ANNMODERATE", "Il tuo annuncio verr&#224; messo in coda per l&#39;approvazione e, una volta approvato, avr&#224; una durata di");
define("_ADSLIGHT_NOBIZ", "Business pubblicit&#224; non ammessi");
define("_ADSLIGHT_REDIRECT_BIZ", "Guarda la tariffe business");
define("_ADSLIGHT_ANNNOMODERATE", "Il tuo annuncio inizier&#224; immediatamente e avr&#224; una durata di");
define("_ADSLIGHT_FORMEMBERS2", "pubblicit&#224; distacco &#232; limitato ai membri <br /> Si prega di registrarsi oppure Accedi se sei gi&#224; membro.");
define("_ADSLIGHT_OR", "o");
define("_ADSLIGHT_DAY", "giorno");
define("_ADSLIGHT_CAT3", "Categoria:");
define("_ADSLIGHT_TITLE2", "Titolo:");
define("_ADSLIGHT_TYPE", "Tipo:");
define("_ADSLIGHT_NOTYPE", "Nessun tipo di");
define("_ADSLIGHT_CLASSIFIED_AD", "Annunci:");
define("_ADSLIGHT_CHARMAX", "(255 caratteri max)");
define("_ADSLIGHT_IMG", "Aggiungere un&#39;immagine:");
define("_ADSLIGHT_IMG2", "Aggiungere una seconda immagine:");
define("_ADSLIGHT_IMG3", "Aggiungere una terza immagine:");
define("_ADSLIGHT_PRICE2", "Prezzo:");
define("_ADSLIGHT_EMAIL", "E-mail:");
define("_ADSLIGHT_TEL", "Telefono:");
define("_ADSLIGHT_TOWN", "Citt&#224;:");
define("_ADSLIGHT_COUNTRY", "Paese:");
define("_ADSLIGHT_VALIDATE", "Valida");
define("_ADSLIGHT_SELECTYPE", "Seleziona tipo di annunci classificati");
define("_ADSLIGHT_SELECTCAT", "Seleziona una categoria");
define("_ADSLIGHT_SELECTYPOTHER", "Altro tipo");
define("_ADSLIGHT_SELECTCATOTHER", "categoria Altro");
define("_ADSLIGHT_RETURN", "Ritorno");
define("_ADSLIGHT_FILES", "I file con questa estensione");
define("_ADSLIGHT_FILESTOP", "non pu&#242; essere caricato. Caricamento fermato");
define("_ADSLIGHT_YIMG", "La tua immagine");
define("_ADSLIGHT_TOBIG", "&#232; troppo grande. <p> Utilizzare la <b>pagina precedente</b> funzione per tornare al modulo uno aggiungere un file");
define("_ADSLIGHT_ADSADDED", "La vostra pubblicit&#224; &#232; stato aggiunto.");
define("_ADSLIGHT_PRINT", "Stampa questo annuncio Annuncio");
define("_ADSLIGHT_FRIENDSEND", "Invia questo annuncio ad un amico");
define("_ADSLIGHT_IMGPISP", "Foto disponibili");
define("_ADSLIGHT_VALIDERORMSG", "Ci sono errori che impediscono la messa di essere salvata!");
define("_ADSLIGHT_VALIDTITLE", "Titolo &#232; obbligatorio.");
define("_ADSLIGHT_VALIDTYPE", "Tipo &#232; necessaria.");
define("_ADSLIGHT_VALIDCAT", "Categoria &#232; richiesto.");
define("_ADSLIGHT_VALIDANN", "Descrizione &#232; necessaria.");
define("_ADSLIGHT_VALIDTOWN", "Citt&#224; &#232; obbligatorio.");
define("_ADSLIGHT_VALIDEMAIL", "E-mail &#232; obbligatorio.");
define("_ADSLIGHT_VALIDSUBMITTER", "Nome &#232; obbligatorio.");
define("_ADSLIGHT_VALIDMSG", "Si prega di correggere questi errori per salvare la lista.");
	


// display-image.php //
define("_ADSLIGHT_CLOSEF", "Chiudere questa finestra");
	
// listing-p-f.php //
define("_ADSLIGHT_EXTRANN", "Questo annuncio &#232; della sezione piccoli annunci sul sito web");
define("_ADSLIGHT_SENDTO", "<b>Invia questo annuncio ad un amico</b> <br><br> E&#39; possibile inviare annunci No");
define("_ADSLIGHT_FRIEND", "ad un amico:");
define("_ADSLIGHT_NAME", "Il tuo nome:");
define("_ADSLIGHT_MAIL", "La tua email:");
define("_ADSLIGHT_NAMEFR", "Nome amico:");
define("_ADSLIGHT_MAILFR", "E-mail amico:");
define("_ADSLIGHT_SENDFR", "Invia");
define("_ADSLIGHT_ANNSEND", "The Ad Classified selezionato &#232; stato inviato");
define("_ADSLIGHT_SUBJET", "Un annuncio interessante Diretto da");
define("_ADSLIGHT_HELLO", "Ciao");
define("_ADSLIGHT_MESSAGE", "pensa che l&#39;annuncio potrebbe interessarti e ti ha inviato questo messaggio.");
define("_ADSLIGHT_INTERESS", "Altri annunci pu&#242; essere visto");
define("_ADSLIGHT_TEL2", "Telefono:");
define("_ADSLIGHT_BYMAIL", "E-mail:");
define("_ADSLIGHT_DISPO","expires on");
define("_ADSLIGHT_NOMAIL", "Noi non diamo agli utenti indirizzi email per contattare via e-mail si prega di utilizzare il modulo contatti sul nostro sito cliccando sul link e-mail nella pubblicit&#224;, &#232; possibile visualizzare l&#39;annuncio presso il seguente indirizzo web.");

// modify.php //
define("_ADSLIGHT_OUI", "S&#236;");
define("_ADSLIGHT_NON", "No");
define("_ADSLIGHT_SURDELANN", "ATTENZIONE: Sei sicuro di voler eliminare questo annuncio");
define("_RETURNANN", "Ritorno Annunci annuncio");
define("_ADSLIGHT_ANNDEL", "Classificato annunci selezionati &#232; stata eliminata");
define("_ADSLIGHT_ANNMOD2", "Classificato annunci selezionati &#232; stata modificata");
define("_ADSLIGHT_NOMODIMG", "Il tuo annuncio include una foto <br /> (Le immagini non possono essere modificati)");
define("_ADSLIGHT_DU", "aggiunto il");   
define("_ADSLIGHT_MODIFBEFORE", "Le modifiche per l&#39;annuncio devono essere approvate dall&#39;amministratore e sar&#224; in coda per l&#39;approvazione");
define("_ADSLIGHT_SENDBY", "Aggiunto da:");
define("_ADSLIGHT_NUMANNN", "Annuncio Classificato n.:");
define("_ADSLIGHT_NEWPICT", "Nuova immagine:");
define("_ADSLIGHT_ACTUALPICT", "Immagine corrente:");
define("_ADSLIGHT_DELPICT", "Eliminare questa immagine");
   
// contact.php //

define("_ADSLIGHT_CONTACTAUTOR", "Contatta l&#39;autore dell&#39;annuncio");
define("_ADSLIGHT_TEXTAUTO", "Il messaggio invia automaticamente i primi tre campi, il nome, l&#39;e-mail e il tuo numero di telefono, non &#232; necessario immettere di nuovo nel tuo messaggio.");
define("_ADSLIGHT_YOURNAME", "Il tuo nome:");
define("_ADSLIGHT_YOUREMAIL", "Il tuo indirizzo email:");
define("_ADSLIGHT_YOURPHONE", "Il tuo telefono:");
define("_ADSLIGHT_YOURMESSAGE", "Il tuo messaggio:");
define("_ADSLIGHT_VALIDMESS", "Il messaggio &#232; obbligatorio.");
define("_ADSLIGHT_MESSEND", "Il tuo messaggio &#232; stato inviato ...");
define("_ADSLIGHT_CLASSIFIED", "Classifica annunci");
define("_ADSLIGHT_FROM", "Inserito da");
	
	//contact form ip
define("_ADSLIGHT_YOUR_IP", "Il tuo IP &#232;");
define("_ADSLIGHT_IP_LOGGED", "ed &#232; stato registrato! Azione verr&#224; eseguita per qualsiasi abuso su questo sistema.");

// message //
define("_ADSLIGHT_CONTACTAFTERANN", "Rispondi al tuo annuncio");
define("_ADSLIGHT_MESSFROM", "Messaggio da");
define("_ADSLIGHT_FROMANNOF", "dal annunci su");
define("_ADSLIGHT_REMINDANN", "Hai una risposta al tuo annuncio su");
define("_ADSLIGHT_STARTMESS", "Qui di seguito c&#39;&#232; la risposta al tuo annuncio.");
define("_ADSLIGHT_ENDMESS", "! Non rispondere a questa e-mail, non raggiunger&#224; il mittente. Se si vuole rispondere al mittente, utilizzare le informazioni di contatto sopra!");
define("_ADSLIGHT_CANJOINT", "Puoi rispondere a");
define("_ADSLIGHT_TO", "a");
define("_ADSLIGHT_ORAT", "o");
define("_ADSLIGHT_NOMAIL2", "Noi non diamo agli utenti indirizzi email per contattare via e-mail si prega di utilizzare il modulo contatti sul nostro sito, &#232; possibile rispondere all&#39;annuncio al seguente indirizzo.");
define("_ADSLIGHT_MESSAGE_END", "Fine del messaggio.");
define("_ADSLIGHT_SECURE_SEND", "Questo messaggio &#232; stato inviato attraverso un modulo di contatto sicuro, il mittente non conosce il tuo indirizzo email.");
// message end //
define("_ADSLIGHT_HOW_LONG", "Per quanto tempo si desidera che il nostro esempio.");
define("_ADSLIGHT_WILL_LAST", "Questo annuncio durer&#224;.");
	
//for search on index page
define("_ADSLIGHT_SEARCHRESULTS", "Annunci Risultati della ricerca");
define("_ADSLIGHT_SEARCH_LISTINGS", "Annunci di ricerca:");
define("_ADSLIGHT_ALL_WORDS", "Tutte le parole");
define("_ADSLIGHT_ANY_WORDS", "Qualsiasi parola");
define("_ADSLIGHT_EXACT_MATCH", "Corrispondenza esatta");
define("_ADSLIGHT_ONLYPIX", "Mostra solo <br /> Annunci con foto");
define("_ADSLIGHT_SEARCH", "Cerca");
define("_ADSLIGHT_REQUIRED", "* Richiesto");
define("_ADSLIGHT_MY_ADS", "Tutti gli annunci da");
define("_ADSLIGHT_VIEW_MY_ADS", "Visualizza tutti gli annunci di");
define("_ADSLIGHT_COMMENTS_HEAD", "<h3> Commenti su questo negoziante </h3>");
define("_ADSLIGHT_PREMIUM_DAY", "<b>giorni, se non lo si cambia.</b>");
define("_ADSLIGHT_PREMIUM_LONG_HEAD", "<b>Il tuo annuncio verr&#224; avviata immediatamente</b>");
define("_ADSLIGHT_PREMIUM_MEMBER", "<b>Dato che sei un membro Premium, &#232; possibile scegliere per quanto tempo durer&#224; il tuo annuncio. <br /><br /> Durer&#224;</b>");
define("_ADSLIGHT_PREMIUM_MODERATED_HEAD", "<b>Il tuo annuncio verr&#224; messo in coda per l&#39;approvazione</b>");

// ADDED FOR RATINGS
define("_ADSLIGHT_TOPRATED", "I pi&#249; votati");
define("_ADSLIGHT_RATINGC", "Rating:");
define("_ADSLIGHT_ONEVOTE", "1 voto");
define("_ADSLIGHT_NUMVOTES", "% S voti");
define("_ADSLIGHT_RATETHIS", "Vota questo utente");
define("_ADSLIGHT_VOTEAPPRE", "Il tuo voto &#232; apprezzato.");
define("_ADSLIGHT_THANKURATE", "Grazie per aver dedicato del tempo per votare questo utente qui a %s.");
define("_ADSLIGHT_VOTEFROMYOU", "Input dagli utenti come te aiutare gli altri visitatori meglio decidere quali annunci scegliere.");
define("_ADSLIGHT_VOTEONCE", "Si prega di non votare per la stessa risorsa pi&#249; di una volta.");
define("_ADSLIGHT_RATINGSCALE", "La scala &#232; 1 - 10, con 1 considerato scarso e 10 eccellente.");
define("_ADSLIGHT_BEOBJECTIVE", "Si prega di essere obiettivi, se tutti ricevono un 1 o un 10, la votazione non sono molto utili.");
define("_ADSLIGHT_DONOTVOTE", "Non votare per le tue risorse.");
define("_ADSLIGHT_RATEIT", "Vota Questo!");
define("_ADSLIGHT_RATING", "Votato");
define("_ADSLIGHT_VOTE", "Vota");
define("_ADSLIGHT_NORATING", "Nessuna valutazione selezionata.");
define("_ADSLIGHT_CANTVOTEOWN", "Non &#232; possibile votare la risorsa che hai inviato. <br /> Tutti i voti sono registrati e valutati.");
define("_ADSLIGHT_VOTEONCE2", "Vota per la risorsa selezionata una sola volta. <br />Tutti i voti sono registrati e valutati.");
define("_ADSLIGHT_TOTALVOTES", "Classificato Ad Voti (voti totali: %s )");
define("_ADSLIGHT_USERTOTALVOTES", "Voti da Utenti Registrati (voti totali: %s )");
define("_ADSLIGHT_ANONTOTALVOTES", "Utente anonimo Voti (voti totali: %s )");
define("_ADSLIGHT_USERAVG", "AVG User Rating");
define("_ADSLIGHT_TOTALRATE", "Voti totali");
define("_ADSLIGHT_NOREGVOTES", "N&#176; Voti da Utenti Registrati");
define("_ADSLIGHT_NOUNREGVOTES", "Nessun Voto utenti non registrati");
define("_ADSLIGHT_VOTEDELETED", "Vota i dati cancellati.");
define("_ADSLIGHT_USER_RATING", "Valutazione utente:");
define("_ADSLIGHT_RATETHISUSER", "Vota questo utente");
define("_ADSLIGHT_THANKURATEUSER", "Grazie per aver dedicato del tempo per votare questo utente qui a %s.");
define("_ADSLIGHT_RATETHISITEM", "Vota questo articolo");
define("_ADSLIGHT_THANKURATEITEM", "Grazie per aver dedicato del tempo per votare questo articolo qui su %s.");
define("_ADSLIGHT_MY_PRICE", "Prezzo");
define("_ADSLIGHT_MY_DATE", "Data");
define("_ADSLIGHT_MY_TITLE", "Titolo");
define("_ADSLIGHT_MY_LOCAL2", "Posizione");
define("_ADSLIGHT_MY_VIEW", "Visto");
define("_ADSLIGHT_SORTBY", "Ordina per:");
define("_ADSLIGHT_CURSORTEDBY", "Liste ordinate per: %s ");
define("_ADSLIGHT_POPULARITYLTOM", "Popolarit&#224; (Da Minori a Maggiori Hits)");
define("_ADSLIGHT_POPULARITYMTOL", "Titolo (A meno Hits)");
define("_ADSLIGHT_TITLEATOZ", "Titolo (dalla A alla Z)");
define("_ADSLIGHT_TITLEZTOA", "Titolo (dalla Z alla A)");
define("_ADSLIGHT_DATEOLD", "Data (Liste Old First)");
define("_ADSLIGHT_DATENEW", "Data (Liste New First)");
define("_ADSLIGHT_RATINGLTOH", "Voto (punteggio pi&#249; basso al pi&#249; alto punteggio)");
define("_ADSLIGHT_RATINGHTOL", "Voto (punteggio pi&#249; alto a punteggio pi&#249; basso)");
define("_ADSLIGHT_PRICELTOH", "Prezzo (pi&#249; basso al pi&#249; alto)");
define("_ADSLIGHT_PRICEHTOL", "Prezzo (ordine decrescente)");
define("_ADSLIGHT_POPULARITY", "Popolarit&#224;");
define("_ADSLIGHT_ACTUALPICT2", "Attuale seconda immagine:");
define("_ADSLIGHT_ACTUALPICT3", "Attuale terza immagine:");
define("_ADSLIGHT_NEWPICT2", "Nuova seconda immagine:");
define("_ADSLIGHT_NEWPICT3", "Nuova terza immagine:");
define("_ADSLIGHT_SELECT_CONTACTBY", "Selezionare un&#39;opzione");
define("_ADSLIGHT_CONTACTBY", "Contattatemi tramite:");
define("_ADSLIGHT_CONTACT_BY_EMAIL", "E-mail");
define("_ADSLIGHT_CONTACT_BY_PM", "Messaggio Privato (PM)");
define("_ADSLIGHT_CONTACT_BY_BOTH", "Entrambe le e-mail o PM");
define("_ADSLIGHT_CONTACT_BY_PHONE", "Solo per telefono");
define("_ADSLIGHT_ORBY", "o da");
define("_ADSLIGHT_PREMYOUHAVE", "Hai %s immagine nel tuo album.");
define("_ADSLIGHT_YOUHAVE", "Hai %s immagine(i) nel tuo album.");
define("_ADSLIGHT_YOUCANHAVE", "In qualit&#224; di membro Premium si possono avere fino a %s immagini.");
define("_ADSLIGHT_BMCANHAVE", "Come membro di base si pu&#242; avere solo un&#39;immagine %s.");
define("_ADSLIGHT_UPGRADE_NOW", "Aggiornamento a Membro Premium");
define("_ADSLIGHT_DELETE", "Elimina");
define("_ADSLIGHT_EDITDESC", "Modifica descrizione");
define("_ADSLIGHT_TOKENEXPIRED", "Il tuo Security Token &#232; scaduto...<br />Riprova");
define("_ADSLIGHT_DESC_EDITED", "La descrizione della tua immagine &#232; stata curata con successo");
define("_ADSLIGHT_DELETED", "Immagine eliminata con successo");
define("_ADSLIGHT_SUBMIT_PIC_TITLE", "Invia una foto al tuo album");
define("_ADSLIGHT_SELECT_PHOTO", "Seleziona foto");
define("_ADSLIGHT_CAPTION", "Didascalia");
define("_ADSLIGHT_UPLOADPICTURE", "Carica Immagine");
define("_ADSLIGHT_YOUCANUPLOAD", "E&#39; possibile caricare solo i file jpg fino a %s KBytes");
define("_ADSLIGHT_ALBUMTITLE", " %s Album");
define("_ADSLIGHT_WELCOME", "Benvenuto nel tuo album");
define("_ADSLIGHT_NOTHINGYET", "Nessuna foto in questo album");
define("_ADSLIGHT_NOCACHACA", "Spiacente, non cachaca per voi");
define("_ADSLIGHT_ADD_PHOTOS", "Aggiungi Foto");
define("_ADSLIGHT_SHOWCASE", "Gallery");
define("_ADSLIGHT_EDIT_CAPTION", "Modifica la didascalia");
define("_ADSLIGHT_EDIT", "Modifica");
define("_ADSLIGHT_SUBMITTER", "Nome:");
define("_ADSLIGHT_ADD_LISTING", "Aggiungi un annuncio");
define("_ADSLIGHT_SUBMIT", "Invia");
define("_ADSLIGHT_PRICETYPE", "Tipo di prezzo:");
define("_ADSLIGHT_ADD_PHOTO_NOW", "Vuoi aggiungere le foto ora");
define("_ADSLIGHT_ACTIVE", "Attivo");
define("_ADSLIGHT_INACTIVE", "Inattivo");
define("_ADSLIGHT_SOLD", "Riservato");
define("_ADSLIGHT_STATUS", "Stato");
define("_ADSLIGHT_REPLIES", "Risposte");
define("_ADSLIGHT_EXPIRES_ON", "Scade il");
define("_ADSLIGHT_ADDED_ON", "Aggiunto");
define("_ADSLIGHT_REPLY_MESSAGE", "Rispondi");
define("_ADSLIGHT_REPLIED_ON", "Risposta del:");
define("_ADSLIGHT_VIEWNOW", "vista");
define("_ADSLIGHT_REPLY_TITLE", "Risposte per il Listato");
define("_ADSLIGHT_ALL_USER_LISTINGS", "Tutti gli annunci di");
define("_ADSLIGHT_REPLY", "Replica -");
define("_ADSLIGHT_PAGES", "Pagina -");
define("_ADSLIGHT_REALNAME", "Nome");
define("_ADSLIGHT_VIEW_YOUR_LISTINGS", "Visualizza le inserzioni");
define("_ADSLIGHT_REPLIED_BY", "Risposta di:");
define("_ADSLIGHT_DELETE_REPLY", "Cancella questo Messaggio Rispondi");
define("_ADSLIGHT_NO_REPLIES", "Non ci sono risposte");
define("_ADSLIGHT_THANKS", "Grazie per aver scelto i nostri annunci");
define("_ADSLIGHT_WEBMASTER", "Webmaster");
define("_ADSLIGHT_YOUR_AD", "Il tuo annuncio");
define("_ADSLIGHT_AT", "a");
define("_ADSLIGHT_VEDIT_AD", "Visualizza o modifica il tuo annuncio qui");
define("_ADSLIGHT_ALMOST", "Il tuo annuncio sta per scadere");
define("_ADSLIGHT_EXPIRED", "&#232; scaduto ed &#232; stato eliminato.");
define("_ADSLIGHT_YOUR_AD_ON", "Il tuo annuncio su");
define("_ADSLIGHT_VU", "Il tuo annuncio &#232; stato visto");
define("_ADSLIGHT_TIMES", "volte.");
define("_ADSLIGHT_STOP", "Il tuo annuncio &#232; scaduto");
define("_ADSLIGHT_SOON", "sta per scadere.");
define("_ADSLIGHT_MUSTLOGIN", "Devi effettuare il login per rispondere a questo annuncio.");
define("_ADSLIGHT_VIEW_AD", "Visualizza il tuo annuncio su");
define("_ADSLIGHT_MORE_PHOTOS", "Visualizza pi&#249; foto");
define("_ADSLIGHT_CANCEL", "Annulla");

//Added for 1.2 RC1
define("_ADSLIGHT_ADDED_TO_CAT", "Una lista &#232; stata aggiunta alla categoria");
define("_ADSLIGHT_RECIEVING_NOTIF", "E&#39; stato sottoscritto per ricevere le notifiche di questo tipo.");
define("_ADSLIGHT_ERROR_NOTIF", "Se questo &#232; un errore o non si desidera ricevere ulteriormente tali notifiche, aggiorna le sottoscrizioni visitando il link qui sotto:");
define("_ADSLIGHT_FOLLOW_LINK", "Questo &#232; il link alla nuova inserzione");
define("_ADSLIGHT_YOU_CAN_VIEW_BELOW", "E&#39; possibile visualizzare l&#39;annuncio completo al link qui sotto");
define("_ADSLIGHT_LISTING_NUMBER", "Inserzione numero:");

define("_ADSLIGHT_NOREPLY", "! Non rispondere a questa e-mail, non sar&#224; possibile ottenere una risposta!");
define("_ADSLIGHT_CAPTCHA", "Codice di sicurezza:");

define("_ADSLIGHT_NEW_WAITING_SUBJECT", "Nuovo annuncio! In attesa di approvazione.");
define("_ADSLIGHT_NEW_WAITING", "Non ci sono annunci nuovi in attesa di essere moderato.");
define("_ADSLIGHT_PLEASE_CHECK", "Si prega di scegliere l&#39;URL qui sotto per controllare questo annuncio.");
define("_ADSLIGHT_ADMIN", "Amministratore");
define("_ADSLIGHT_NEWAD", "Il nuovo elenco &#232; qui di seguito.");
define("_ADSLIGHT_NEED_TO_LOGIN", "Hai bisogno di essere loggato");

define("_ADSLIGHT_PROFILE", "Profilo di");

////AJOUTER PAR ILUC////
define("_ADSLIGHT_MI_ADSLIGHT_SMENU1", "Le inserzioni");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU2", "Invia");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU3", "Cerca");

//viewads.php
define("_ADSLIGHT_ALERTEABUS", "Segnala un abuso");
define("_ADSLIGHT_CONTACT_SUBMITTER", "Contattaci");
define("_ADSLIGHT_SENDFRIENDS", "Invia questo annuncio");

//report-abuse.php
define("_ADSLIGHT_REPORTSENDTO", "<b>Segnala questo annuncio:</b> <br/><br/> No. annuncio");
define("_ADSLIGHT_REPORTANNSEND", "Grazie per il tuo aiuto! <br/> L&#39;annuncio dev&#39;essere segnalato all&#39;Admin.");
define("_ADSLIGHT_REPORTSUBJET", "[Alert] Un annuncio indesiderato");
define("_ADSLIGHT_REPORTMESSAGE", "Ritieni che questo annuncio &#232; illegale e che volevi saperne di pi&#249;.");

//index.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULL", "Per aggiungere un annuncio <br /> Grazie per la");
define("_ADSLIGHT_ADD_LISTING_SUB", "registro");
define("_ADSLIGHT_ADD_LISTING_BULLOK", "E&#39; possibile aggiungere 0 <br /> Annunci:");
define("_ADSLIGHT_ADD_LISTING_SUBOK", "Clicca qui");

//index.php >> Title Menu //
define("_ADSLIGHT_ADD_TITLEMENU1", "Modifica/cancella i tuoi annunci, 0 anche riferito come [Riservato] ...");
define("_ADSLIGHT_ADD_TITLEMENU2", "Pubblica un annuncio gratuito, se &#232; possibile sfogliare le categorie.");
define("_ADSLIGHT_ADD_TITLEMENU4", "Tutti buoni consigli per la scrittura di annunci.");
define("_ADSLIGHT_ADD_TITLEMENU5", "Cerca Cyble o di ricerca nella tua zona.");
define("_ADSLIGHT_ADD_TITLEMENU6", "Leggere e inviare pm.");
define("_ADSLIGHT_ADD_TITLEMENU7", "Hai un nuovo messaggio.");
define("_ADSLIGHT_ADD_TITLEMENU8", "Devi essere registrato per leggere i messaggi.");
define("_ADSLIGHT_ADD_TITLEMENU9", "Devi essere registrato per vedere il tuo profilo.");
define("_ADSLIGHT_ADD_TITLEMENU10", "Visualizzare o modificare il tuo profilo qui.");

//viewcats.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULLCATS", "E&#39; possibile aggiungere o <br /> Annunci in questa categoria <br />");
define("_ADSLIGHT_ADD_LISTING_BULLCATSOK", "Per aggiungere uno o <br /> Annunci in questa categoria <br /> Grazie per la");

// Reserved
define("_ADSLIGHT_RESERVED", "Riservato");

// tips_writing_ad.php
define("_ADSLIGHT_TIPSWRITE", "Tutti i buoni consigli <br /> scrivere i tuoi annunci per molti");
define("_ADSLIGHT_TIPSWRITE_TITLE", "I suggerimenti su come scrivere il tuo annuncio");

define("_ADSLIGHT_TIPSWRITE_TEXT", "<b>1. Une ou des photos</b><br><br>
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
define("_ADSLIGHT_MAPS_TITLE", "Ricerca per regione");
define("_ADSLIGHT_MAPS_TEXT", "Seleziona una regione sulla mappa <br /> per visualizzare gli annunci di una regione.");

//viewads.php
define("_ADSLIGHT_NOCLAS", "Attualmente non ci sono annunci <br /> in questa categoria ...");

//version 1.063
// viawcats.php

define("_ADSLIGHT_ADD_LISTING_NOTADDSINTHISCAT", "Non ci sono annunci in questa categoria. <br />");
define("_ADSLIGHT_ADD_LISTING_NOTADDSSUBMIT", "Aggiungi annuncio");

//version 1.064
define("_ADSLIGHT_CATPLUS", "<br/>Di pi&#249; ...");

//Version 1.08
define("_MN_ADSLIGHT_PURCHASE", "Acquista adesso");
define("_MN_ADSLIGHT_YOURNAME", "Disegna la fattura a:");
define("_MN_ADSLIGHT_YOUREMAIL", "Disegna Fattura Per inviare un&#39;email a:");
?><?php // Translation done by xtransam & admin - 2011-02-04 22:00 ?>
