<?php
// AdsLight  version 1.053 $Id$    //
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

define("_AM_ADSLIGHT_CONF","Configuraci&oacute;n de los anuncios de ");
define("_AM_ADSLIGHT_ADDON","Pluggins");
define("_AM_ADSLIGHT_ANNDEL","Los anuncios fueron seleccionados; supprim&eacute;es");
define("_AM_ADSLIGHT_ADDCATPRINC","A&ntilde;adir una categor&iacute;a principal");
define("_AM_ADSLIGHT_CATNAME","Name:");
define("_AM_ADSLIGHT_ADDSUBCAT","A&ntilde;adir una sub-categor&iacute;a");
define("_AM_ADSLIGHT_DELSUBCAT","Eliminar una categor&iacute;a");
define("_AM_ADSLIGHT_MODIFSUBCAT","Editar una categor&iacute;a");
define("_AM_ADSLIGHT_ADD","Agregar");
define("_AM_ADSLIGHT_CATDEL","La categor&iacute;a seleccionada se ha eliminado");
define("_AM_ADSLIGHT_OUI","S&iacute;");
define("_AM_ADSLIGHT_NON","No");
define("_AM_ADSLIGHT_SURDELCAT","ATENCI&Oacute;N: &iquest;Est&aacute;s seguro de que quieres eliminar esta categor&iacute;a, sub-categor&iacute;as y los anuncios tambi&eacute;n ser&aacute;n destruidos.");
define("_AM_ADSLIGHT_IN","En ");
define("_AM_ADSLIGHT_MODIF","Editar");
define("_AM_ADSLIGHT_MODIFCAT","Editar Categor&iacute;a");
define("_AM_ADSLIGHT_CAT","Categor&iacute;a");
define("_AM_ADSLIGHT_SUBCAT","Subcategor&iacute;a:");
define("_AM_ADSLIGHT_CONFMYA","Configuraci&oacute;n de los anuncios de ");
define("_AM_ADSLIGHT_CATADD","Cat&amp;eacute;gorie ajout&amp;eacute;e");
define("_AM_ADSLIGHT_SUBCATADD","subcategor&iacute;a se a&ntilde;ade");
define("_AM_ADSLIGHT_ANNMOD","El anuncio ha sido modificado");
define("_AM_ADSLIGHT_NOANNVAL","Actualmente no hay anuncios para aprobar");
define("_AM_ADSLIGHT_NOMODACTIV","La moderaci&oacute;n no est&aacute; habilitado: no hay anuncios para aprobar");
define("_AM_ADSLIGHT_MODANN","Cambio de anuncios");
define("_AM_ADSLIGHT_ALLMODANN","(Todos los anuncios pueden ser modificados por el administrador.)");
// Message
define("_AM_ADSLIGHT_HELLO","Hola");
define("_AM_ADSLIGHT_ANNVALID","El anuncio fue aprobado");
define("_AM_ADSLIGHT_DEL","Eliminar");
define("_AM_ADSLIGHT_SAVMOD","Guardar cambios");
define("_AM_ADSLIGHT_MODTYPE","Cambiar tipo de anuncio");
define("_AM_ADSLIGHT_ANNACCEPT","Su anuncio ha sido aprobado");
define("_AM_ADSLIGHT_CONSULTTO","P&oacute;ngase en contacto con:");
define("_AM_ADSLIGHT_THANK","Gracias");
define("_AM_ADSLIGHT_TEAMOF","Equipo");
// Message de fin
define("_AM_ADSLIGHT_RETURN","Espalda
");
define("_AM_ADSLIGHT_MODSUBCAT","Cambiar el nombre de la sub-categor&iacute;a");
define("_AM_ADSLIGHT_MODCAT","Cambiar el nombre de la categor&iacute;a principal");
define("_AM_ADSLIGHT_GO","Ir");
define("_AM_ADSLIGHT_SENDBY","Agregado por:");
define("_AM_ADSLIGHT_EMAIL","E-mail:");
define("_AM_ADSLIGHT_TEL","Tel&eacute;fono:");
define("_AM_ADSLIGHT_TOWN","Ciudad:");
define("_AM_ADSLIGHT_COUNTRY","Pa&iacute;s:");
define("_AM_ADSLIGHT_TITLE2","T&iacute;tulo:");
define("_AM_ADSLIGHT_TYPE","Tipo:");
define("_AM_ADSLIGHT_TYPE_USURE","La condici&oacute;n de desgaste:");
define("_AM_ADSLIGHT_PRICE2","Precio:");
define("_AM_ADSLIGHT_CAT2","Categor&iacute;a");
define("_AM_ADSLIGHT_DESCRIPTION","Adsence c&oacute;digo de Google o el c&oacute;digo de un banner:<br/>Formato: width = 300 height = 250");
define("_AM_ADSLIGHT_THEREIS","Hay");
define("_AM_ADSLIGHT_WAIT","Anuncios en espera de ser aprobado");
define("_AM_ADSLIGHT_ADDTYPE","A&ntilde;adir un tipo de anuncio");
define("_AM_ADSLIGHT_ERRORTYPE","ERREUR: type");
define("_AM_ADSLIGHT_EXIST","Ya existe!");
define("_AM_ADSLIGHT_ERRORCAT","ERROR: Categor&iacute;a");
define("_AM_ADSLIGHT_ERRORSUBCAT","ERROR: Subcategor&iacute;a");
define("_AM_ADSLIGHT_TYPEMOD","El tipo de anuncio ha sido modificado");
define("_AM_ADSLIGHT_TYPEDEL","El tipo de anuncio ha sido eliminado");
define("_AM_ADSLIGHT_ADDTYPE2","El tipo de anuncios se a&ntilde;adi&oacute;");
define("_AM_ADSLIGHT_ACCESMYANN","Anuncios");
define("_AM_ADSLIGHT_IMGCAT","Cuadro");
define("_AM_ADSLIGHT_REPIMGCAT","Galer&iacute;a de im&aacute;genes:");
define("_AM_ADSLIGHT_GESTCAT","Category Management");
//Condition de paiement
define("_AM_ADSLIGHT_ADDPRICE","A&ntilde;adir una condici&oacute;n para el pago");
define("_AM_ADSLIGHT_MODPRICE","Cambio de un tipo de precio");
define("_AM_ADSLIGHT_ADDPRICE2","El tipo de premio fue a&ntilde;adido");
define("_AM_ADSLIGHT_PRICEMOD","El tipo de fijaci&oacute;n de precios se ha cambiado
");
define("_AM_ADSLIGHT_PRICEDEL","El tipo de fijaci&oacute;n de precios se ha suprimido");
define("_AM_ADSLIGHT_ORDRE","Ordenar:");
define("_AM_ADSLIGHT_ORDRECLASS","Categor&iacute;a de control:");
define("_AM_ADSLIGHT_ORDREALPHA","Ordenar alfab&eacute;ticamente");
define("_AM_ADSLIGHT_ORDREPERSO","Formalidad ");
define("_AM_ADSLIGHT_BIGCAT","Categor&iacute;a principal");
define("_AM_ADSLIGHT_HELP1","<b> Para agregar una categor&iacute;a:<br/></b>Haga clic en la imagen <img src=\"".XOOPS_URL."/modules/adslight/images/plus.gif\" border=0 width=10 height=10 alt=\"Agregar Categor&iacute;a\"> junto a la categor&iacute;a en la que desea agregar el t&iacute;tulo de la nueva categor&iacute;a.<p><b>Para editar o eliminar una categor&iacute;a:<br/></b>Haga clic en el nombre de la categor&iacute;a");
define("_AM_ADSLIGHT_HELP2","<b>Categor&iacute;as de clasificaci&oacute;n: </b>Los n&uacute;meros entre par&eacute;ntesis corresponden al orden en la categor&iacute;a superior o de una categor&iacute;a principal. N&uacute;meros enteros negativos se pueden utilizar: -1");

// Fichier pref.php
define("_AM_ADSLIGHT_CONFSAVE","Configuraci&oacute;n guardada");
define("_AM_ADSLIGHT_ANNOCANPOST","Los usuarios an&oacute;nimos pueden publicar anuncios de:");
define("_AM_ADSLIGHT_PERPAGE","Anuncios por p&aacute;gina:");
define("_AM_ADSLIGHT_MONEY","S&iacute;mbolo de moneda:");
define("_AM_ADSLIGHT_NUMNEW","N&uacute;mero de nuevos anuncios:");
define("_AM_ADSLIGHT_MODERAT","Anuncios moderada:");
define("_CAL_MAXIIMGS","El tama&ntilde;o m&aacute;ximo de la foto:");
define("_AM_ADSLIGHT_TIMEANN","Duraci&oacute;n del anuncio:");
define("_AM_ADSLIGHT_INOCTET","En bytes");
define("_AM_ADSLIGHT_INDAYS","En los d&iacute;as");
define("_AM_ADSLIGHT_TYPEBLOC","Block Tipo:");
define("_AM_ADSLIGHT_ANNRAND","Al azar de anuncios");
define("_AM_ADSLIGHT_LASTTEN","Los &uacute;ltimos 10 anuncios");
define("_AM_ADSLIGHT_NEWTIME","Nuevas ofertas:");
define("_AM_ADSLIGHT_DISPLPRICE","Precios:");
define("_AM_ADSLIGHT_DISPLPRICE2","Precios");
define("_AM_ADSLIGHT_INTHISCAT","En esta categor&iacute;a");
define("_AM_ADSLIGHT_DISPLSUBCAT","Subcategor&iacute;as Mostrar:");
define("_AM_ADSLIGHT_ONHOME","En la p&aacute;gina principal del m&oacute;dulo");
define("_AM_ADSLIGHT_NBDISPLSUBCAT","N&uacute;mero de sub-categor&iacute;as que se mostrar&aacute;n:");
define("_AM_ADSLIGHT_IF","Si»");
define("_AM_ADSLIGHT_ISAT","Es el");
define("_AM_ADSLIGHT_VIEWNEWCLASS","Mostrar anuncios nuevos:");
define("_AM_ADSLIGHT_PERMADDNG","No se puede agregar %s permiso %s  para el grupo de %s");
define("_AM_ADSLIGHT_PERMADDOK","A&ntilde;adido %s permiso para %s  para el grupo de %s");
define("_AM_ADSLIGHT_PERMRESETNG","No es posible restablecer los permisos de grupo para el m&oacute;dulo de %s");
define("_AM_ADSLIGHT_PERMADDNGP","Todos los elementos de los padres debe ser seleccionado. ");
define("_AM_ADSLIGHT_EXPIRE","N&uacute;mero de d&iacute;as que el anuncio lo pasado");
define("_AM_ADSLIGHT_DBUPDATED","La base de datos ha sido actualizada. ");
define("_AM_ADSLIGHT_CONTACT_BY_EMAIL","E-mail");
define("_AM_ADSLIGHT_CONTACT_BY_PM","Mensaje privado (PM)");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH","Ambos, E-mail o PM");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE","Por tel&eacute;fono s&oacute;lo");
define("_AM_ADSLIGHT_CONTACTBY","Contactar por:");
define("_AM_ADSLIGHT_PREMIUM","Listado Premium:");
define("_AM_ADSLIGHT_OK","Aceptar");
define("_AM_ADSLIGHT_CATSMOD","La categor&iacute;a se ha actualizado");
define("_AM_ADSLIGHT_ADDED_ON","A&ntilde;adido");
define("_AM_ADSLIGHT_NUMANN","Id Anuncio:");
define("_AM_ADSLIGHT_ACTIVE","Activo");
define("_AM_ADSLIGHT_INACTIVE","Inactivo");
define("_AM_ADSLIGHT_SOLD","Restringido;");
define("_AM_ADSLIGHT_STATUS","Estado");
define("_AM_ADSLIGHT_UPDATECOMPLETE","Actualizado");
define("_AM_ADSLIGHT_UPDATEMODULE","<b> M&oacute;dulo de actualizaci&oacute;n </b>");
define("_AM_ADSLIGHT_UPGRADEFAILED","La actualizaci&oacute;n no");
define("_AM_ADSLIGHT_UPGRADEFAILED0","Actualizar");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR","Error de acceso");
define("_AM_ADSLIGHT_THANKS","Gracias por usar nuestros anuncios clasificados");
define("_AM_ADSLIGHT_WEBMASTER","Webmaster");
define("_AM_ADSLIGHT_YOUR_AD","Su anuncio");
define("_AM_ADSLIGHT_AT","Para");
define("_AM_ADSLIGHT_VEDIT_AD","Usted puede ver o editar su anuncio aqu&iacute;");
define("_AM_ADSLIGHT_YOUR_AD_ON","Su anuncio en");
define("_AM_ADSLIGHT_APPROVED","Ha sido aprobado.");
define("_AM_ADSLIGHT_EXPIRED","A expirado y se ha eliminado.");
define("_AM_ADSLIGHT_CHECKER","Auditor&iacute;a de los permisos de archivos ");
define("_AM_ADSLIGHT_DIRPERMS","Ir al directorio de permiso de escritura! =&gt; ");
define("_AM_ADSLIGHT_PHOTO1","N&uacute;mero de fotos:");
define("_AM_ADSLIGHT_SUBMITTER","Enviado por");
define("_AM_ADSLIGHT_NBR_PHOTO","Foto(s)");
define("_AM_ADSLIGHT_TITLE","T&iacute;tulo");
define("_AM_ADSLIGHT_LID","ID");
define("_AM_ADSLIGHT_DATE","Fecha Alta");
define("_AM_ADSLIGHT_DESC","Descripci&oacute;n");

define("_AM_ADSLIGHT_FREECAT","Esta ser&aacute; una clase gratis");
define("_AM_ADSLIGHT_MODERATE_CAT","Moderado esta categor&iacute;a");
define("_AM_ADSLIGHT_VISIT_LINK","Usted puede leer el anuncio completo haciendo clic en el enlace de abajo:");
define("_AM_ADSLIGHT_LISTING_NUMBER","N&uacute;mero de venta ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW","Puede ver la lista completa haciendo clic en el enlace de abajo");
define("_AM_ADSLIGHT_NOREPLY","!!!  No responda a este correo electr&oacute;nico, usted no recibir&aacute; una respuesta.  !!!");

define("_AM_ADSLIGHT_ADDED_TO_CAT","Una nueva lista se ha a&ntilde;adido a la categor&iacute;a de ");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","Usted se ha suscrito para recibir notificaciones de este tipo.");
define("_AM_ADSLIGHT_ERROR_NOTIF","Si esto es un error o no desea recibir esas notificaciones, por favor, actualice su suscripci&oacute;n haciendo clic en el enlace de abajo:");
define("_AM_ADSLIGHT_FOLLOW_LINK","Aqu&iacute; hay un enlace a la nueva lista");
define("_AM_ADSLIGHT_CAPTCHA","C&oacute;digo de Seguridad :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","Moderado sub-categor&iacute;as para esta categor&iacute;a");
define("_AM_ADSLIGHT_DOCUMENTATION","Documentaci&oacute;n");
define("_AM_ADSLIGHT_FEATURES","Caracter&iacute;sticas");
define("_AM_ADSLIGHT_CLONE","C&oacute;mo clonar");
define("_AM_ADSLIGHT_INCOMPLETE","Incompleta");

// Ajouter par iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE","A&ntilde;adir un tipo de desgaste");
define("_AM_ADSLIGHT_MODUSURE","Cambiar un tipo de desgaste");
define("_AM_ADSLIGHT_ADDUSURE2","El tipo de desgaste se ha a&ntilde;adido");
define("_AM_ADSLIGHT_USUREMOD","El patr&oacute;n de desgaste se ha cambiado");
define("_AM_ADSLIGHT_USUREDEL","El tipo de desgaste se ha suprimido");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","Autor");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Cambio de registro");
define("_AM_ADSLIGHT_ABOUT_CREDITS","Cr&eacute;ditos");
define("_AM_ADSLIGHT_ABOUT_LICENSE","Licencia");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","M&oacute;dulo de Informaci&oacute;n");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","Soporte Web");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","Fecha de Publicaci&oacute;n");
define("_AM_ADSLIGHT_ABOUT_STATUS","Estatus");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","Las personas que participaron en la mejora del m&oacute;dulo de");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","Nickname");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","Sitio web");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","Liberar");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","Descripci&oacute;n general");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Puede agregar" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "Compruebe las categor&iacute;as que usted puede acceder" ) ;
define("_AM_ADSLIGHT_GROUPPERMDESC" , "Seleccione (s) grupo (s) (s) autorizada para presentar los anuncios." ) ;
define("_AM_ADSLIGHT_GROUPPERM","Permiso para presentar ");
define("_AM_ADSLIGHT_SUBMITFORM","Permiso para presentar una lista");
define("_AM_ADSLIGHT_SUBMITFORM_DESC","Seleccione, que puede mostrar anuncios");
define("_AM_ADSLIGHT_VIEWFORM","Permisos para ver los anuncios");
define("_AM_ADSLIGHT_VIEWFORM_DESC","Selecciona los grupos que se pueden ver los listados");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC","Seleccione, que puede mostrar res&uacute;menes");
define("_AM_ADSLIGHT_SUPPORT","Apoya a este programa");
define("_AM_ADSLIGHT_OP","Leer mi examen
");
define("_AM_ADSLIGHT_PREMIUM_DESC","Seleccione los grupos que puede seleccionar la duraci&oacute;n de la publicidad es");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK","Est&aacute; utilizando la &uacute;ltima versi&oacute;n del m&oacute;dulo.");
define("_AM_ADSLIGHT_RELEASEISNOTOK","Su m&oacute;dulo es obsoleta, una nueva versi&oacute;n est&aacute; disponible.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD","Descargar.");
define("_AM_ADSLIGHT_NBR_PHOTO","Foto(s)");

//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<b>Meta Description:</b><br/>Para una mejor optimizaci&oacute;n,</b>agregar aqu&iacute; una descripci&oacute;n precisa de su clase. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<b>Meta Keywords:</b><br/>Para una mejor optimizaci&oacute;n,</b>a&ntilde;adir palabras clave aqu&iacute;, en relaci&oacute;n con la c&eacute;t&eacute;gorie.<br/><b><font color=\"#ff3300\">palabras separadas por comas</font></b>. ( english, espagne, france,...)");

///Version 1.053
/// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK","El archivo XML para la tarjeta de, es inexistente, o bien, no coincide con la tarjeta seleccionada en las preferencias.");
define("_AM_ADSLIGHT_XMLUPGRADE","Actualizar archivo XML");

//Version 1.054
// Support_forum.php
define("_AM_ADSLIGHT_SUPPORTFORUM_TITLE","Lista Foro de soporte");
define("_AM_ADSLIGHT_SUPPORTFORUM_WEBLINKS","Enlace");
define("_AM_ADSLIGHT_SUPPORTFORUM_CONTRYLANG","Idioma");
define("_AM_ADSLIGHT_SUPPORTFORUM_DESC","Descripci&oacute;n");
define("_AM_ADSLIGHT_SUPPORTFORUM_TRANSLATE","Traducci&oacute;n");

////////////////////////////
//// Version 1.06 //////////

// ../admin/index.php

// Stat
define("_AM_ADSLIGHT_STAT_TITLE","Estad&#237;stica");
define("_AM_ADSLIGHT_STAT_NUM1","Anuncios");
define("_AM_ADSLIGHT_STAT_NUM2","Categor&#237;as");
define("_AM_ADSLIGHT_STAT_NUM3","Usuario");
define("_AM_ADSLIGHT_STAT_NUM4","Comentarios");


// Option Menu
define("_AM_ADSLIGHT_USERMENU_TITLE","Opciones");
define("_AM_ADSLIGHT_USERMENU_SENDMAIL","Enviar E-mail");
define("_AM_ADSLIGHT_USERMENU_COMMENT"," Comentarios");
define("_AM_ADSLIGHT_USERMENU_BAMMIER"," Banderas");

// Menu Category
define("_AM_ADSLIGHT_CATMENU_TITLE","Categor&#237;as");
define("_AM_ADSLIGHT_CATMENU_CATEGORY"," A&#241;adir categor&#237;as");
define("_AM_ADSLIGHT_CATMENU_MODIFCAT"," Gesti&#243;n por Categor&#237;as");

// Menu Annonces
define("_AM_ADSLIGHT_ADSMENU_TITLE","Anuncios");
define("_AM_ADSLIGHT_ADSMENU_VALIDADS"," validar los anuncios");
define("_AM_ADSLIGHT_ADSMENU_VIEWADS"," ver los anuncios");
define("_AM_ADSLIGHT_ADS_MODIFADS"," editar anuncio");

// Menu Downloads
define("_AM_ADSLIGHT_DOWNLOADS_TITLE","Descargar");
define("_AM_ADSLIGHT_DOWNLOADS_PLUGINS"," Plugins");
define("_AM_ADSLIGHT_DOWNLOADS_MAPS"," Mapas");

// Menu Devellopment
define("_AM_ADSLIGHT_DEVLLP_TITLE","Desarrollo");
define("_AM_ADSLIGHT_DEVLLP_HACK"," Sugerir un Hack");
define("_AM_ADSLIGHT_DEVLLP_TRANSLATE"," Enviar traducci&#243;n");
define("_AM_ADSLIGHT_DEVLLP_CORRECTION"," Sugerir una correcci&#243;n");
define("_AM_ADSLIGHT_DEVLLP_MAPFLASH"," Presentar un mapa (.swf)");
define("_AM_ADSLIGHT_DEVLLP_FORUM"," Foro");

// Menu Faire un Don
define("_AM_ADSLIGHT_DONATE_TITLE"," Donar");
define("_AM_ADSLIGHT_DONATE","AdsLight no es un proyecto comercial,<br />su uso es gratuito y lo seguir&#225; siendo.<br />puede hacerlo si lo desea,<br />hacer una donaci&#243;n para apoyarme.<br />");


////RSS Forum
define("_AM_ADSLIGHT_MENURSSFORUM_TITLE","Foro de Soporte t&#233;cnico AdsLight");
define("_AM_ADSLIGHT_MENURSSFORUM_URL","http://www.i-luc.fr/adslight/modules/newbb/rss.php?f=33");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK1","http://www.i-luc.fr/adslight/modules/newbb/#googtrans/auto/es");
define("_AM_ADSLIGHT_MENURSSFORUM_GOFORUM","ir al Foro");

define("_AM_ADSLIGHT_MENURSSFORUM_LINK2","http://www.i-luc.fr/adslight/modules/profile/register.php#googtrans/auto/es");
define("_AM_ADSLIGHT_MENURSSFORUM_SUBSCRIT","Registro");

////	RSS AdsLight News
define("_AM_ADSLIGHT_MENURSS_TITLE","Noticias AdsLight");
 
// ../admin/view_ads.php
define("_AM_ADSLIGHT_ADSVALIDE","anuncios elegir");
define("_AM_ADSLIGHT_NOANNVALADS","Este momento no hay anuncios");


// Logo Paypall Donate
define("_AM_ADSLIGHT_DONATE_LOGO", '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/es_ES/ES/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

');

?>