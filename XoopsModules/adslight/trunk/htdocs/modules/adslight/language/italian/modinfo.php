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

// The name of this module
define("_MI_ADSLIGHT_NAME", "adslight");
define("_MI_ADSLIGHT_MENUADD", "Aggiungi un annuncio");

// A brief description of this module
define("_MI_ADSLIGHT_DESC", "Modulo di annunci classificati");

// Names of blocks for this module (Not all module has blocks)
define("_MI_ADSLIGHT_BNAME1", "Annunci recenti");
define("_MI_ADSLIGHT_BNAME1_DESC", "Annunci recenti Block");
define("_MI_ADSLIGHT_BNAME2", "Top Annunci");
define("_MI_ADSLIGHT_BNAME2_DESC", "Liste Top Block");

// Names of admin menu items
define("_MI_ADSLIGHT_ADMENU0", "Terminal");
define("_MI_ADSLIGHT_ADMENU1", "Category Management");
define("_MI_ADSLIGHT_ADMENU2", "Autorizzazioni");
define("_MI_ADSLIGHT_ADMENU3", "Blocchi");
define("_MI_ADSLIGHT_ADMENU4", "Preferenze");
define("_MI_ADSLIGHT_ADMENU5", "Opzioni");
define("_MI_ADSLIGHT_ADMENU6", "Importa");
define("_MI_ADSLIGHT_ADMENU7", "Informazioni su");
define("_MI_ADSLIGHT_ADMENU8", "Documenti");
define("_MI_ADSLIGHT_ADMENU9", "Vai al Modulo");
define("_MI_ADSLIGHT_ADMENU10", "Aggiornato");
define("_MI_ADSLIGHT_ADMENU11", "Forum di Supporto");

define("_MI_ADSLIGHT_CONFSAVE", "Configurazione salvata");
define("_MI_ADSLIGHT_CANPOST", "utenti anonimi possono postare inserzioni:");
define("_MI_ADSLIGHT_PERPAGE", "Annunci per pagina:");
define("_MI_ADSLIGHT_RES_PERPAGE", "Riprende per pagina:");
define("_MI_ADSLIGHT_MONEY", "Simbolo di valuta:");
define("_MI_ADSLIGHT_KOIVI", "Utilizzare Editor Koivi:");
define("_MI_ADSLIGHT_NUMNEW", "Numero di nuovi annunci:");
define("_MI_ADSLIGHT_MODERAT", "Annunci moderato:");
define("_MI_ADSLIGHT_DAYS", "Inserzione Durata:");
define("_MI_ADSLIGHT_MAXIIMGS", "Massimo Formato foto:");
define("_MI_ADSLIGHT_MAXWIDE", "Massimo Foto Larghezza:");
define("_MI_ADSLIGHT_MAXHIGH", "Massimo Foto Altezza:");
define("_MI_ADSLIGHT_INBYTES", "in byte");
define("_MI_ADSLIGHT_INPIXEL", "in pixel");
define("_MI_ADSLIGHT_INDAYS", "in giorni");
define("_MI_ADSLIGHT_MUSTLOGIN", "Consentire agli utenti anonimi di rispondere ad un annuncio.");
define("_MI_ADSLIGHT_THRUMAIL", "utilizzando il modulo di e-mail (raccomandata &#232; di No, perché di spam.)");
define("_MI_ADSLIGHT_TYPEBLOC", "Tipo di blocco:");
define("_MI_ADSLIGHT_JOBRAND", "Random Listing");
define("_MI_ADSLIGHT_LASTTEN", "Ultimi 10 Annunci");
define("_MI_ADSLIGHT_NEWTIME", "Nuovo Liste a partire da:");
define("_MI_ADSLIGHT_DISPLPRICE", "Indicazione del prezzo:");
define("_MI_ADSLIGHT_DISPLPRICE2", "Indicazione del prezzo:");
define("_MI_ADSLIGHT_INTHISCAT", "in questa categoria");
define("_MI_ADSLIGHT_DISPLSUBCAT", "Display sottocategorie:");
define("_MI_ADSLIGHT_ONHOME", "sulla prima pagina del modulo");
define("_MI_ADSLIGHT_NBDISPLSUBCAT", "Numero di sottocategorie per mostrare:");
define("_MI_ADSLIGHT_IF", "se");
define("_MI_ADSLIGHT_ISAT", "&#232; a");
define("_MI_ADSLIGHT_VIEWNEWCLASS", "Liste Mostra:");
define("_MI_ADSLIGHT_ORDREALPHA", "Ordine alfabetico");
define("_MI_ADSLIGHT_ORDREPERSO", "Ordine personalizzato");
define("_MI_ADSLIGHT_CSORT_ORDER", "Categoria predefinita ordinamento");
define("_MI_ADSLIGHT_LSORT_ORDER", "Inserzione Ordinamento di default");
define("_MI_ADSLIGHT_ORDER_TITLE", "Ordina link per titolo");
define("_MI_ADSLIGHT_ORDER_PRICE", "Ordina gli annunci per prezzo");
define("_MI_ADSLIGHT_ORDER_DATE", "Ordina link per data (default)");
define("_MI_ADSLIGHT_ORDER_POP", "Ordina link per visite");
define("_MI_ADSLIGHT_DBUPDATED", "Il database &#232; stato aggiornato.");
define("_MI_ADSLIGHT_GPERM_G_ADD" , "Puoi aggiungere" ) ;
define("_MI_ADSLIGHT_CAT2GROUPDESC" , "Check categories which you allow to access" ) ;
define("_MI_ADSLIGHT_GROUPPERMDESC" , "Select group(s) allowed to submit listings." ) ;
define("_MI_ADSLIGHT_GROUPPERM", "Invia Autorizzazioni");
define("_MI_ADSLIGHT_SUBMITFORM", "Autorizzazioni Invio Annunci");
define("_MI_ADSLIGHT_SUBMITFORM_DESC", "Selezionare, che potranno proporre gli annunci");
define("_MI_ADSLIGHT_VIEWFORM", "Consulta gli annunci Autorizzazioni");
define("_MI_ADSLIGHT_VIEWFORM_DESC", "Selezionare, chi pu&#242; visualizzare annunci");
define("_MI_ADSLIGHT_VIEW_RESUMEFORM_DESC", "Selezionare, chi pu&#242; visualizzare riprende");
define("_MI_ADSLIGHT_SUPPORT", "Supporta questo software");
define("_MI_ADSLIGHT_OP", "Leggi il mio parere");
define("_MI_ADSLIGHT_PREMIUM", "Annunci Premium");
define("_MI_ADSLIGHT_PREMIUM_DESC", "Chi pu&#242; selezionare i giorni annuncio durer&#224;");

define("_MI_ADSLIGHT_CATEGORY_NOTIFY", "Categoria"); 
define("_MI_ADSLIGHT_CATEGORY_NOTIFYDSC", "Opzioni di notifica, che si applicano alla categoria corrente.");
define("_MI_ADSLIGHT_NOTIFY", "Inserzione"); 
define("_MI_ADSLIGHT_NOTIFYDSC", "Opzioni di notifica, che si applicano alla quotazione corrente.");	
define("_MI_ADSLIGHT_GLOBAL_NOTIFY", "Tutta modulo");
define("_MI_ADSLIGHT_GLOBAL_NOTIFYDSC", "Global annuncio opzioni di notifica.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFY", "New Listing");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYCAP", "Inviate di nuovi annunci nella categoria corrente.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYDSC", "Ricezione di una notifica quando l&#39;annuncio viene inviato alla categoria corrente.");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE}: auto-comunica: nuova inserzione in categoria");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFY", "New Listing");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYCAP", "Inviate di nuovi annunci nella categoria corrente.");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYDSC", "Ricezione di una notifica quando l&#39;annuncio viene inviato alla categoria corrente.");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE}: auto-comunica: nuova inserzione in categoria");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFY", "Elenco aggiornato");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYCAP", "Inviate annunci aggiornato nella categoria corrente.");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYDSC", "Ricevere una notifica quando un annuncio viene aggiornato nella categoria corrente.");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE}: auto-comunica: nuova inserzione in categoria");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFY", "Inserzione eliminata");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYCAP", "Inviate di nuovi annunci nella categoria corrente.");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYDSC", "Ricevere una notifica quando un annuncio viene cancellato dalla categoria corrente.");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE}: auto-comunica: nuova inserzione in categoria");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFY", "New Listing");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYCAP", "Inviate di nuovi annunci in tutte le categorie.");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYDSC", "Ricezione di una notifica quando l&#39;annuncio viene inviato a tutte le categorie.");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE}: auto-comunica: nuova inserzione in categoria");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFY", "New Listing");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYCAP", "Inviate di nuovi annunci in tutte le categorie.");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYDSC", "Ricezione di una notifica quando l&#39;annuncio viene inviato a tutte le categorie.");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE}: auto-comunica: nuova inserzione in categoria");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFY", "Elenco aggiornato");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYCAP", "Inviate annunci aggiornato in tutte le categorie.");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYDSC", "Ricevere una notifica quando un annuncio viene aggiornato in tutte le categorie.");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE}: auto-comunica: elenco aggiornato delle categorie");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFY", "Inserzione eliminata");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYCAP", "Inviate annunci eliminato in tutte le categorie.");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYDSC", "Ricevere una notifica quando un annuncio viene eliminato in tutte le categorie.");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} : auto-comunica: Listing eliminato nelle categorie");
define("_MI_ADSLIGHT_RATE_USER", "Consentire agli utenti di venditori tasso");
define("_MI_ADSLIGHT_RATE_ITEM", "Consenti agli utenti la velocit&#224; di oggetti");
define("_MI_ADSLIGHT_DIFF_NAME", "Consentire agli utenti di usare il nome diverso");
define("_MI_ADSLIGHT_DIFF_EMAIL", "Consentire agli utenti di utilizzare diverse e-mail");
define("_MI_ADSLIGHT_NOT_PREMIUM", "Numero di Immagini - Non Premium");
define("_MI_ADSLIGHT_NOT_PREMIUM_DESC" ,"Number of pictures a non-Premium user can have in his page");
define("_MI_ADSLIGHT_NUMBPICT_TITLE", "Numero di immagini - Premium");
define("_MI_ADSLIGHT_NUMBPICT_DESC" ,"Number of pictures a Premium user can have in his page");
define("_MI_ADSLIGHT_SMNAME1" ,"Submit");
define("_MI_ADSLIGHT_THUMW_TITLE", "Thumb Larghezza");
define("_MI_ADSLIGHT_THUMBW_DESC", "Anteprima larghezza in pixel <br /> Questo significa che il tuo thumbnail dell&#39;immagine avr&#224; <br /> al massimo queste dimensioni in larghezza <br /> Tutte le proporzioni sono mantenute");
define("_MI_ADSLIGHT_THUMBH_TITLE", "Thumb Altezza");
define("_MI_ADSLIGHT_THUMBH_DESC", "Miniature Altezza in pixel <br /> Questo significa che il tuo thumbnail dell&#39;immagine avr&#224; <br /> al massimo queste dimensioni in altezza <br /> Tutte le proporzioni sono mantenute");
define("_MI_ADSLIGHT_RESIZEDW_TITLE", "Larghezza immagine ridimensionata");
define("_MI_ADSLIGHT_RESIZEDW_DESC", "immagine ridimensionata larghezza in pixel <br /> Questo significa che l&#39;immagine avr&#224; <br /> al massimo queste dimensioni in larghezza <br /> Tutte le proporzioni sono mantenute <br /> La foto originale, se più grande di queste dimensioni <br /> essere ridimensionata in modo da non spezzare il modello");
define("_MI_ADSLIGHT_RESIZEDH_TITLE", "immagine ridimensionata altezza");
define("_MI_ADSLIGHT_RESIZEDH_DESC", "immagine ridimensionata altezza in pixel <br /> Questo significa che l&#39;immagine avr&#224; <br /> al massimo queste dimensioni in altezza <br /> Tutte le proporzioni sono mantenute <br /> La foto originale, se più grande di queste dimensioni <br /> essere ridimensionata in modo da non rompere il vostro modello di progettazione");
define("_MI_ADSLIGHT_ORIGW_TITLE", "Larghezza massima foto originale");
define("_MI_ADSLIGHT_ORIGW_DESC", "Larghezza massima foto originale in pixel <br /> Questo significa immagine originale dell&#39;utente non pu&#242; superare <br /> queste dimensioni in altezza <br /> altrimenti non verr&#224; caricato");
define("_MI_ADSLIGHT_ORIGH_TITLE", "Altezza max immagine originale");
define("_MI_ADSLIGHT_ORIGH_DESC", "Altezza massima immagine originale in pixel <br /> Questo significa immagine originale dell&#39;utente non pu&#242; superare <br /> queste dimensioni in altezza <br /> altrimenti non verr&#224; caricato");
define("_MI_ADSLIGHT_UPLOAD_TITLE", "Percorso Upload");
define("_MI_ADSLIGHT_UPLOAD_DESC", "Percorso della directory di upload <br /> in linux dovrebbe essere simile a /var/www/uploads <br /> in Windows, come C:/Programmi/www");
define("_MI_ADSLIGHT_LINKUPLOAD_TI", "Link alla vostra directory di upload");
define("_MI_ADSLIGHT_LINKUPLOAD_DE", "Questo &#232; l&#39;indirizzo della root del vostro upload <br /> come http://www.yoursite.com/uploads");
define("_MI_ADSLIGHT_MAXFILEBYTES_T", "Dimensione massima in byte");
define("_MI_ADSLIGHT_MAXFILEBYTES_D", "Questa la dimensione massima di un file del vostro pictue pu&#242; avere in byte <br /> come 512 mila per 500 KB");
define("_MI_ADSLIGHT_EDITOR", "Editor da usare:");
define("_MI_ADSLIGHT_LIST_EDITORS", "Selezionare l&#39;editor da usare.");
define("_MI_ADSLIGHT_LIGHTBOX", "Lightbox effetti");
define("_MI_ADSLIGHT_LIGHTBOX_DESC", "Utilizzare gli effetti lightbox quando guardi le foto.");
define("_MI_ADSLIGHT_USE_COUNTRY" ,"Use the Country Field");
define("_MI_ADSLIGHT_USE_COUNTRY_DESC" ,"If set to 'No' the Country Field will not be shown");
define("_MI_ADSLIGHT_SOLD_DAYS", "Inserzione Durata segnato dopo Venduto");
define("_MI_ADSLIGHT_SOLDINDAYS", "in giorni");
define("_MI_ADSLIGHT_ALMOST", "Quando per inviare notare che l&#39;annuncio sta per scadere");
define("_MI_ADSLIGHT_ALMOST_DESC", "in giorni");
define("_MI_ADSLIGHT_MAIN_CAT", "Consenti agli utenti di aggiungere inserzioni nelle categorie principali");
define("_MI_ADSLIGHT_MAIN_CAT_DESC", "o semplicemente permette di aggiungere annunci in sub-categoreies");
define("_MI_ADSLIGHT_ADMIN_EDITOR", "Editor da utilizzare per l&#39;admin:");
define("_MI_ADSLIGHT_LIST_ADMIN_EDITORS", "Selezionare l&#39;editor da usare sul lato admin.");
define("_MI_ADSLIGHT_CAT_DESC", "Categoria Descrizione");
define("_MI_ADSLIGHT_DESC_CAT_DESC", "Aggiungere una descrizione per ogni categoria.");
define("_MI_ADSLIGHT_MUST_ADD_CAT", "È necessario aggiungere un prima categoria.");
define("_MI_ADSLIGHT_BNAME3", "Annunci recenti w/Foto");
define("_MI_ADSLIGHT_BNAME3_DESC", "Annunci recenti w/Foto Block");
define("_MI_ADSLIGHT_BNAME4", "Top Annunci w/Foto");
define("_MI_ADSLIGHT_BNAME4_DESC", "Top Annunci w/Foto Block");
define("_MI_ADSLIGHT_USE_CAPTCHA" ,"Uso del Captcha");

// Menu AdsLight
define("_MI_ADSLIGHT_SMENU1", "Le inserzioni");
define("_MI_ADSLIGHT_SMENU2", "Invia");
define("_MI_ADSLIGHT_SMENU3", "Cerca"); 

// support.php 
define("_MI_ADSLIGHT_SUPPORT01", "Se volete suggerire un miglioramento: <br /><br /> - Una rettifica <br /> - Una traduzione <br /> - Un suggerimento <br /> - Segnala un Bug <br />");
define("_MI_ADSLIGHT_SUPPORT02", "Unisciti a noi presso il AdsLight Forum di Supporto");
define("_MI_ADSLIGHT_SUPPORT03", "&gt; Forum di supporto AdsLight &lt;");

// Bloc Carte de France
define("_MI_ADSLIGHT_MAPFRANCE", "Mappa di Francia");
define("_MI_ADSLIGHT_MAPFRANCE_DESC", "Vicino a casa tua");

// Bloc Ajouter une annonce
define("_MI_ADSLIGHT_ADDMENU", "Aggiungi annuncio");
define("_MI_ADSLIGHT_ADDMENU_DESC", "Menu");

// version Adslight 1.0.2
// Active RewriteUrl
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL" ,"Enable URL Rewrite");
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL_DESC" ,"Enable URL rewriting for a better ranking.<br />To install the rewrite, thank you to read the file README.txt");

// Activer thumbs_index
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX" ,"Enable Snapshot page index");
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX_DESC" ,"Enable the display of thumbnail images to homepage<br />If it is off an icon <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' /><br /> indicates whether or not there is a picture in the ad.");

// Activer thumbs_cats
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS" ,"Enable Snapshot in categories");
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS_DESC" ,"Enable the display of thumbnail pictures in the categories<br />If it is off an icon <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' /><br /> indicates whether or not there is a picture in the ad.");

// Code Adscence index
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE", "Codice home page supplementari");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_DESC", "Metti il tuo codice adsense o altre qui");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE", "Utilizzare un codice aggiuntivo alla homepage");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE_DESC", "Inserire il codice aggiuntivo tra gli annunci <br /> sulla home page e la pagina di categoria. <br /><br /> Striscioni, il codice Adsense, ecc ...");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE", "Luogo in cui il codice viene visualizzato nella lista");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE_DESC", "Ex. Se si sceglie 4 ci saranno 3 le proposte prima di questo codice. <br /> Il codice sar&#224; visualizzato in 4 ° posizione.");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER", "Usa il codice banner Xoops");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER_DESC", "consente di inserire banner Xoops tra proposte. <br /> Se si sceglie S&#236; <br /> NO inserire il codice qui");

// Version 1.0.5
// Code Adscence Cat�gories
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE", "codice Pub su categorie pagine");
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE_DESC", "Google Code adsence o codice di un banner: <br /> Formato: width = 300 height = 250");

// adslight_theme_set
define("_MI_ADSLIGHT_THEMESET", "Scelta del modello di serie");

// M�ta Description/keywords Categories
define("_MI_ADSLIGHT_CAT_META", "Lasciare che la descrizione sequestro Meta, Meta Keywords categorie?");
define("_MI_ADSLIGHT_CAT_META_DESCRIPTION","If you set this option to 'Yes',<br /> 
You can write data meta keywords and description for each category<br />( Recommend to a better ranking. )");

// Version 1.0.51
// tips_writing_ad.php
define("_MI_ADSLIGHT_USE_TIPS_WRITE", "Personalizza la pagina info/consigli?");
define("_MI_ADSLIGHT_USEDESC_TIPS_WRITE", "Se si seleziona &#39;s&#236;&#39;, &#232; possibile scrivere sotto il titolo e il testo della pagina info/consigli");
define("_MI_ADSLIGHT_TITLE_TIPS_WRITE", "Page Title informazione/consulenza");
define("_MI_ADSLIGHT_TITLEDESC_TIPS_WRITE", "Scrivi qui il titolo che apparir&#224; sulla pagina info/consigli");
define("_MI_ADSLIGHT_TEXT_TIPS_WRITE", "Testo della pagina info/consigli");
define("_MI_ADSLIGHT_TEXTDESC_TIPS_WRITE", "Inserisci il testo che appare qui sulla pagina info/consigli");

// Version 1.0.53
// adslight_maps
define("_MI_ADSLIGHT_MAPSSET", "Selezionare la scheda del tuo paese");
define("_MI_ADSLIGHT_MAPSSET_DESC", "Se si desidera creare la mappa del vostro paese. <br /> Grazie a leggere la documentazione del modulo.");
define("_MI_ADSLIGHT_MAPSW_TITLE", "Larghezza della mappa");
define("_MI_ADSLIGHT_MAPSH_TITLE", "Altezza mappa");

// Version 1.08
define("_MI_ADSLIGHT_PURCHASE", "Disponibile per l&#39;acquisto");
define("_MI_ADSLIGHT_PURCHASE_DESC", "Si tratta di categorie che sono disponibili per l&#39;acquisto tramite xpayment");
define("_MI_ADSLIGHT_CURRENCY", "Codice ISO valuta");

// Version 1.09
define("_MI_ADSLIGHT_LISTING_COST", "Inserzione verr&#224; addebitato a questo ritmo al giorno");
define("_MI_ADSLIGHT_PURCHASELISTING", "Purcasable Annunci");
define("_MI_ADSLIGHT_PURCHASELISTING_DESC", "Questa &#232; la categoria che costano al giorno alla lista un annuncio");
?>
