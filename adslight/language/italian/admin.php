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

define("_AM_ADSLIGHT_CONF", "Annunci di configurazione");
define("_AM_ADSLIGHT_ADDON", "Addons");
define("_AM_ADSLIGHT_ANNDEL", "annunci pubblicitari selezionati sono stati cancellati");
define("_AM_ADSLIGHT_ADDCATPRINC", "Aggiungere una categoria principale");
define("_AM_ADSLIGHT_CATNAME", "Nome:");
define("_AM_ADSLIGHT_ADDSUBCAT", "Eliminazione di una categoria");
define("_AM_ADSLIGHT_DELSUBCAT", "Sopprimere una categoria");
define("_AM_ADSLIGHT_MODIFSUBCAT", "Modificare una categoria");
define("_AM_ADSLIGHT_ADD", "Aggiungi");
define("_AM_ADSLIGHT_CATDEL", "La categoria selezionata &#232; stata eliminata");
define("_AM_ADSLIGHT_OUI", "S&#236;");
define("_AM_ADSLIGHT_NON", "No");
define("_AM_ADSLIGHT_SURDELCAT", "ATTENZIONE: Sei sicuro di voler eliminare questa categoria, e tutte le sottocategorie e la pubblicit&#224;.");
define("_AM_ADSLIGHT_IN", "in");
define("_AM_ADSLIGHT_MODIF", "Modifica");
define("_AM_ADSLIGHT_MODIFCAT", "Modificare una categoria");
define("_AM_ADSLIGHT_CAT", "Categoria:");
define("_AM_ADSLIGHT_SUBCAT", "Sottocategoria:");
define("_AM_ADSLIGHT_CONFMYA", "Annunci di configurazione");
define("_AM_ADSLIGHT_CATADD", "Categoria aggiunto");
define("_AM_ADSLIGHT_SUBCATADD", "Sottocategoria aggiunto");
define("_AM_ADSLIGHT_ANNMOD", "Pubblicit&#224; &#232; stato modificato");
define("_AM_ADSLIGHT_NOANNVAL", "Attualmente non ci sono annunci per l&#39;approvazione");
define("_AM_ADSLIGHT_NOMODACTIV", "La moderazione non &#232; attiva, nessuna pubblicit&#224; per l&#39;approvazione");
define("_AM_ADSLIGHT_MODANN", "Modificare un annuncio");
define("_AM_ADSLIGHT_ALLMODANN", "(Tutti gli annunci possono essere modificati dall&#39;amministratore annunci.)");
define("_AM_ADSLIGHT_HELLO", "Ciao");
define("_AM_ADSLIGHT_ANNVALID", "Pubblicit&#224; &#232; stato approvato");
define("_AM_ADSLIGHT_DEL", "Elimina");
define("_AM_ADSLIGHT_SAVMOD", "Salvare le modifiche");
define("_AM_ADSLIGHT_MODTYPE", "Modifica del tipo di annuncio");
define("_AM_ADSLIGHT_ANNACCEPT", "Il vostro annuncio &#232; stato approvato");
define("_AM_ADSLIGHT_CONSULTTO", "Si prega di contattare:");
define("_AM_ADSLIGHT_THANK", "Grazie");
define("_AM_ADSLIGHT_TEAMOF", "Team");
define("_AM_ADSLIGHT_RETURN", "Ritorno");
define("_AM_ADSLIGHT_MODSUBCAT", "Cambia sottocategoria nome");
define("_AM_ADSLIGHT_MODCAT", "Cambiare il nome principale categoria");
define("_AM_ADSLIGHT_GO", "Vai");
define("_AM_ADSLIGHT_SENDBY", "Inserito da:");
define("_AM_ADSLIGHT_EMAIL", "E-mail:");
define("_AM_ADSLIGHT_TEL", "Telefono:");
define("_AM_ADSLIGHT_TOWN", "Citt&#224;:");
define("_AM_ADSLIGHT_COUNTRY", "Paese:");
define("_AM_ADSLIGHT_TITLE2", "Titolo:");
define("_AM_ADSLIGHT_TYPE", "Tipo:");
define("_AM_ADSLIGHT_PRICE2", "Prezzo:");
define("_AM_ADSLIGHT_CAT2", "Categoria:");
define("_AM_ADSLIGHT_DESCRIPTION", "Google Code adsence o codice di un banner: <br/> Formato: width = 300 height = 250");
define("_AM_ADSLIGHT_THEREIS", "Ci sono");
define("_AM_ADSLIGHT_WAIT", "Annunci in attesa di essere moderato");
define("_AM_ADSLIGHT_ADDTYPE", "Aggiungi Tipo di annuncio");
define("_AM_ADSLIGHT_ERRORTYPE", "ERRORE: tipo di");
define("_AM_ADSLIGHT_EXIST", "esiste gi&#224;!");
define("_AM_ADSLIGHT_ERRORCAT", "ERRORE: Categoria");
define("_AM_ADSLIGHT_ERRORSUBCAT", "ERRORE: Sottocategoria");
define("_AM_ADSLIGHT_TYPEMOD", "Il tipo di annunci &#232; stato modificato");
define("_AM_ADSLIGHT_TYPEDEL", "Il tipo di annuncio &#232; stato cancellato");
define("_AM_ADSLIGHT_ADDTYPE2", "Tipo di annuncio &#232; stato aggiunto");
define("_AM_ADSLIGHT_ACCESMYANN", "Annunci");
define("_AM_ADSLIGHT_IMGCAT", "Immagine:");
define("_AM_ADSLIGHT_REPIMGCAT", "Immagine di repertorio:");
define("_AM_ADSLIGHT_GESTCAT", "Categoria di manutenzione");
define("_AM_ADSLIGHT_ADDPRICE", "Aggiungere un tipo di prezzo");
define("_AM_ADSLIGHT_MODPRICE", "Modificare un tipo di prezzo");
define("_AM_ADSLIGHT_ADDPRICE2", "Tipo di prezzo &#232; stato aggiunto");
define("_AM_ADSLIGHT_PRICEMOD", "Tipo di prezzo &#232; stato modificato");
define("_AM_ADSLIGHT_PRICEDEL", "Tipo di prezzo &#232; stato eliminato");
define("_AM_ADSLIGHT_ORDRE", "Ordina per:");
define("_AM_ADSLIGHT_ORDRECLASS", "Categoria Ordine:");
define("_AM_ADSLIGHT_ORDREALPHA", "Ordine alfabetico");
define("_AM_ADSLIGHT_ORDREPERSO", "Ordine personalizzato");
define("_AM_ADSLIGHT_BIGCAT", "Categoria principale");
define("_AM_ADSLIGHT_HELP1", "<b>Per aggiungere una categoria:</b> clicca sull&#39;immagine <img src=\"".XOOPS_URL."/modules/adslight/images/plus.gif\" border=0 width=10 height=10 alt=\"Aggiungi una categoria\" /> accanto alla categoria che si desidera aggiungere sotto la categoria <p>Per modificare o eliminare una categoria:.</b> clicca sul nome della categoria");
define("_AM_ADSLIGHT_HELP2", "<B>Categoria Ordine:</b> intero tra parentesi corrisponde l&#39;ordine all&#39;interno della categoria superiore o della categoria principale. interi negativi possono essere utilizzati:. -1");
	
// fichier pref.php //
define("_AM_ADSLIGHT_CONFSAVE", "Configurazione salvata");
define("_AM_ADSLIGHT_ANNOCANPOST", "utenti anonimi possono postare annunci:");
define("_AM_ADSLIGHT_PERPAGE", "Annunci per pagina:");
define("_AM_ADSLIGHT_MONEY", "Simbolo di valuta:");
define("_AM_ADSLIGHT_NUMNEW", "Numero di nuovi annunci:");
define("_AM_ADSLIGHT_MODERAT", "Annunci moderato:");
define("_CAL_MAXIIMGS", "Massima foto formato:");
define("_AM_ADSLIGHT_TIMEANN", "Ad durata:");
define("_AM_ADSLIGHT_INOCTET", "in byte");
define("_AM_ADSLIGHT_INDAYS", "in giorni");
define("_AM_ADSLIGHT_TYPEBLOC", "Tipo di blocco:");
define("_AM_ADSLIGHT_ANNRAND", "Random annunci");
define("_AM_ADSLIGHT_LASTTEN", "Ultimi 10 annunci");
define("_AM_ADSLIGHT_NEWTIME", "Nuovi annunci da:");

define("_AM_ADSLIGHT_DISPLPRICE", "Indicazione del prezzo:");
define("_AM_ADSLIGHT_DISPLPRICE2", "Indicazione del prezzo:");
define("_AM_ADSLIGHT_INTHISCAT", "in questa categoria");
define("_AM_ADSLIGHT_DISPLSUBCAT", "Display sottocategorie:");
define("_AM_ADSLIGHT_ONHOME", "sulla prima pagina del modulo");
define("_AM_ADSLIGHT_NBDISPLSUBCAT", "Numero di sottocategorie per mostrare:");
define("_AM_ADSLIGHT_IF", "se");
define("_AM_ADSLIGHT_ISAT", "&#232; a");
define("_AM_ADSLIGHT_VIEWNEWCLASS", "Mostra gli annunci nuovo:");

define("_AM_ADSLIGHT_PERMADDNG", "Impossibile aggiungere %s permesso per %s per il gruppo %s ");
define("_AM_ADSLIGHT_PERMADDOK", "%s &#232; stato aggiunto il permesso di s% per il gruppo %s ");
define("_AM_ADSLIGHT_PERMRESETNG", "Impossibile ripristinare il permesso di gruppo per modulo %s ");
define("_AM_ADSLIGHT_PERMADDNGP", "Tutti gli articoli genitore deve essere selezionata.");
define("_AM_ADSLIGHT_EXPIRE", "annuncio Days durer&#224;.");
define("_AM_ADSLIGHT_DBUPDATED", "Il database &#232; stato aggiornato.");

define("_AM_ADSLIGHT_CONTACT_BY_EMAIL", "E-mail");
define("_AM_ADSLIGHT_CONTACT_BY_PM", "Messaggio Privato (PM)");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH", "Entrambe le e-mail o PM");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE", "Solo per telefono");
define("_AM_ADSLIGHT_CONTACTBY", "Contatto da:");
define("_AM_ADSLIGHT_PREMIUM", "Premio di quotazione:");

define("_AM_ADSLIGHT_OK", "Approvare");
define("_AM_ADSLIGHT_CATSMOD", "Categoria &#232; stato modificato");
define("_AM_ADSLIGHT_ADDED_ON", "aggiunto il");
define("_AM_ADSLIGHT_NUMANN", "Inserzione n&#176;:");

define("_AM_ADSLIGHT_ACTIVE", "Attivo");
define("_AM_ADSLIGHT_INACTIVE", "Inattivo");
define("_AM_ADSLIGHT_SOLD", "Riservato");
define("_AM_ADSLIGHT_STATUS", "Status");
define("_AM_ADSLIGHT_UPDATECOMPLETE", "Aggiornamento completo");
define("_AM_ADSLIGHT_UPDATEMODULE", "<b>Modulo di aggiornamento</b>");
define("_AM_ADSLIGHT_UPGRADEFAILED", "Aggiornamento non riuscito");
define("_AM_ADSLIGHT_UPGRADEFAILED0", "Aggiornamento");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR", "Errore di accesso");
define("_AM_ADSLIGHT_THANKS", "Grazie per aver scelto i nostri annunci");
define("_AM_ADSLIGHT_WEBMASTER", "Webmaster");
define("_AM_ADSLIGHT_YOUR_AD", "Il tuo annuncio");
define("_AM_ADSLIGHT_AT", "a");
define("_AM_ADSLIGHT_VEDIT_AD", "E&#39; possibile visualizzare o modificare il tuo annuncio qui");
define("_AM_ADSLIGHT_YOUR_AD_ON", "Il tuo annuncio su");
define("_AM_ADSLIGHT_APPROVED", "&#232; stato approvato.");
define("_AM_ADSLIGHT_EXPIRED", "&#232; scaduto ed &#232; stato eliminato.");
define("_AM_ADSLIGHT_CHECKER", "Elenco autorizzazioni Checker");
define("_AM_ADSLIGHT_DIRPERMS", "Change Directory permesso di scrittura! =&gt;");

define("_AM_ADSLIGHT_PHOTO1", "Numero di foto:");
define("_AM_ADSLIGHT_SUBMITTER", "Inserito da");
define("_AM_ADSLIGHT_NBR_PHOTO", "Photo (s)");
define("_AM_ADSLIGHT_TITLE", "Titolo");
define("_AM_ADSLIGHT_LID", "ID");
define("_AM_ADSLIGHT_DATE", "Data di inserimento");
define("_AM_ADSLIGHT_DESC", "Descrizione");

define("_AM_ADSLIGHT_FREECAT", "Questa sar&#224; una categoria libera");
define("_AM_ADSLIGHT_MODERATE_CAT", "Moderato questa categoria");
define("_AM_ADSLIGHT_VISIT_LINK", "E&#39; possibile visualizzare l&#39;annuncio completo al link qui sotto:");
define("_AM_ADSLIGHT_LISTING_NUMBER", "Numero annuncio");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW", "E&#39; possibile visualizzare la lista completa al link qui sotto");
define("_AM_ADSLIGHT_NOREPLY", "! Non rispondere a questa e-mail, non sar&#224; possibile ottenere una risposta!");

define("_AM_ADSLIGHT_ADDED_TO_CAT", "Una lista &#232; stata aggiunta alla categoria");
define("_AM_ADSLIGHT_RECIEVING_NOTIF", "E&#39; stato sottoscritto per ricevere le notifiche di questo tipo.");
define("_AM_ADSLIGHT_ERROR_NOTIF", "Se questo &#232; un errore o non si desidera ricevere ulteriormente tali notifiche, aggiorna i sottoscrizioni visitando il link qui sotto:");
define("_AM_ADSLIGHT_FOLLOW_LINK", "Questo &#232; il link alla nuova inserzione");
define("_AM_ADSLIGHT_CAPTCHA", "Codice di sicurezza:");
define("_AM_ADSLIGHT_MODERATE_SUBCATS", "subcats moderato di questa categoria");
define("_AM_ADSLIGHT_DOCUMENTATION", "Documentazione");
define("_AM_ADSLIGHT_FEATURES", "Caratteristiche");
define("_AM_ADSLIGHT_CLONE", "Come clonare");
define("_AM_ADSLIGHT_INCOMPLETE", "Incompleto");

// Added by iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE", "Aggiungere un tipo di usura");
define("_AM_ADSLIGHT_MODUSURE", "Modificare un tipo di usura");
define("_AM_ADSLIGHT_ADDUSURE2", "Il tipo di usura &#232; stato aggiunto");
define("_AM_ADSLIGHT_USUREMOD", "Il modello di usura &#232; stato cambiato");
define("_AM_ADSLIGHT_USUREDEL", "Il tipo di usura &#232; stato soppresso");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR", "Autore");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG", "Cambia registro");
define("_AM_ADSLIGHT_ABOUT_CREDITS", "Credits");
define("_AM_ADSLIGHT_ABOUT_LICENSE", "Licenza");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS", "Modulo Informazioni");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE", "Supporto sul sito web");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE", "Data di rilascio");
define("_AM_ADSLIGHT_ABOUT_STATUS", "Status");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED", "Le persone che hanno partecipato al miglioramento del modulo");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME", "Nickname");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE", "Sito");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION", "Version");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC", "Panoramica");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Can add" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "Check the categories which allow you to access" ) ;
define("_AM_ADSLIGHT_GROUPPERMDESC" , "Select groups allowed to submit ads." ) ;
define("_AM_ADSLIGHT_GROUPPERM", "Autorizzazione a presentare");
define("_AM_ADSLIGHT_SUBMITFORM", "Autorizzazione a presentare una lista");
define("_AM_ADSLIGHT_SUBMITFORM_DESC", "Seleziona, chi pu&#242; visualizzare annunci");
define("_AM_ADSLIGHT_VIEWFORM", "Le autorizzazioni per visualizzare gli annunci");
define("_AM_ADSLIGHT_VIEWFORM_DESC", "Selezionare i gruppi che possono vedere annunci");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC", "Selezionare, chi pu&#242; visualizzare riprende");
define("_AM_ADSLIGHT_SUPPORT", "Sostenere questo programma");
define("_AM_ADSLIGHT_OP", "Leggi la mia recensione");
define("_AM_ADSLIGHT_PREMIUM_DESC", "Scegli i gruppi che pu&#242; selezionare la durata della pubblicit&#224; &#232;");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK", "Si utilizza l&#39;ultima versione del modulo.");
define("_AM_ADSLIGHT_RELEASEISNOTOK", "Il modulo &#232; obsoleto, una nuova versione &#232; disponibile.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD", "Download.");
define("_AM_ADSLIGHT_NBR_PHOTO","Photo(s)");

//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION", "<b>Meta Description:</b> <br/> Per una migliore ottimizzazione, aggiungere qui una descrizione precisa della classe.");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS", "<b>Meta Keywords:</b> <br/> Per una migliore SEO, aggiungere qui una descrizione precisa della vostra categoria .. <br /><b><font color=\"#ff3300\">separa le parole per comma</font></b>. Es: ( inglese, spagnolo, francese, italian, etc...)");

//Version 1.053
// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK", "Il file xml per la scheda &#232; assente, oppure non corrisponde alla carta scelta nelle preferenze.");
define("_AM_ADSLIGHT_XMLUPGRADE", "Aggiornamento xml");

//Version 1.054
// Support_forum.php
define("_AM_ADSLIGHT_SUPPORTFORUM_TITLE", "Lista Forum di supporto");
define("_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS", "Link");
define("_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG", "Lingua");
define("_AM_ADSLIGHT_SUPPORTFORUM_DESC", "Descrizione");
define("_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE", "Traduzione");

////////////////////////////
//// Version 1.06 //////////

// ../admin/index.php

// Stat
define("_AM_ADSLIGHT_STAT_TITLE", "Statistiche");
define("_AM_ADSLIGHT_STAT_NUM1", "Annunci");
define("_AM_ADSLIGHT_STAT_NUM2", "Categorie");
define("_AM_ADSLIGHT_STAT_NUM3", "Utenti");
define("_AM_ADSLIGHT_STAT_NUM4", "Commenti");


// Option Menu
define("_AM_ADSLIGHT_USERMENU_TITLE", "Opzioni");
define("_AM_ADSLIGHT_USERMENU_SENDMAIL", "Inviare e-mail");
define("_AM_ADSLIGHT_USERMENU_COMMENT", "Commenti");
define("_AM_ADSLIGHT_USERMENU_BAMMIER", "Banners");

// Menu Category
define("_AM_ADSLIGHT_CATMENU_TITLE", "Categorie");
define("_AM_ADSLIGHT_CATMENU_CATEGORY", "Aggiungi le categorie");
define("_AM_ADSLIGHT_CATMENU_MODIFCAT", "Category Management");

// Menu Annonces
define("_AM_ADSLIGHT_ADSMENU_TITLE", "Annunci");
define("_AM_ADSLIGHT_ADSMENU_VALIDADS", "Convalida degli annunci");
define("_AM_ADSLIGHT_ADSMENU_VIEWADS", "Consulta gli annunci");
define("_AM_ADSLIGHT_ADS_MODIFADS", "Modificare gli annunci");

// Menu Downloads
define("_AM_ADSLIGHT_DOWNLOADS_TITLE", "Downloading");
define("_AM_ADSLIGHT_DOWNLOADS_PLUGINS", "Plugin");
define("_AM_ADSLIGHT_DOWNLOADS_MAPS", "Mappe");

// Menu Devellopment
define("_AM_ADSLIGHT_DEVLLP_TITLE", "Sviluppo");
define("_AM_ADSLIGHT_DEVLLP_HACK", "Proponi una Hack");
define("_AM_ADSLIGHT_DEVLLP_TRANSLATE", "Invia Traduzione");
define("_AM_ADSLIGHT_DEVLLP_CORRECTION", "Proponi una correzione");
define("_AM_ADSLIGHT_DEVLLP_MAPFLASH", "Invia una mappa (. Swf)");
define("_AM_ADSLIGHT_DEVLLP_FORUM", "Forum");

// Menu Faire un Don
define("_AM_ADSLIGHT_DONATE_TITLE", "Donare");
define("_AM_ADSLIGHT_DONATE", "AdsLight il suo utilizzo &#232; gratuito e rimarr&#224; tale. <br /> E&#39; anche possibile fare una donazione <br /> Se volete sostenere me. <br />");


////RSS Forum
define("_AM_ADSLIGHT_MENURSSFORUM_TITLE", "Forum di Supporto AdsLight");
define("_AM_ADSLIGHT_MENURSSFORUM_URL", "http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=56");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK1", "googtrans http://www.i-luc.fr/adslight/modules/newbb/viewforum.php?forum=56/ # / auto / it");
define("_AM_ADSLIGHT_MENURSSFORUM_GOFORUM", "Vai al forum");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK2", "http://www.i-luc.fr/adslight/modules/profile/register.php # googtrans / auto / it");
define("_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT", "Registrati");

////	RSS AdsLight News
define("_AM_ADSLIGHT_MENURSS_TITLE", "News AdsLight");
 
// ../admin/view_ads.php
define("_AM_ADSLIGHT_ADSVALIDE", "Annunci valido");
define("_AM_ADSLIGHT_NOANNVALADS", "Attualmente non ci sono annunci");
define("_AM_ADSLIGHT_USURE", "usura");

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