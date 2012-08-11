<?php
// AdsLight  version 1.0.4 $Id$    //
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

// Le nom de ce module
define("_MI_ADSLIGHT_NAME ","adslight");
define("_MI_ADSLIGHT_MENUADD","Agregar Anuncio");

// Une brève description de ce module
define("_MI_ADSLIGHT_DESC","Anuncios M&oacute;dulo");

// Noms des blocs de ce module (module possède pas tous les blocs)
define("_MI_ADSLIGHT_BNAME1","Los recientes anuncios");
define("_MI_ADSLIGHT_BNAME1_DESC","El &uacute;ltimo bloque de anuncios de");
define("_MI_ADSLIGHT_BNAME2","Top Anuncios");
define("_MI_ADSLIGHT_BNAME2_DESC","Bloc des Top annonces");

// Noms des éléments du menu admin
define("_MI_ADSLIGHT_ADMENU0","Terminal");
define("_MI_ADSLIGHT_ADMENU1","Category Management");
define("_MI_ADSLIGHT_ADMENU2","Permisos");
define("_MI_ADSLIGHT_ADMENU3","Bloques");
define("_MI_ADSLIGHT_ADMENU4","Preferencias");
define("_MI_ADSLIGHT_ADMENU5","Opciones");
define("_MI_ADSLIGHT_ADMENU6","Importaci&oacute;n");
define("_MI_ADSLIGHT_ADMENU7","sobre");
define("_MI_ADSLIGHT_ADMENU8","Docs");
define("_MI_ADSLIGHT_ADMENU9","Pase al m&oacute;dulo");
define("_MI_ADSLIGHT_ADMENU10","Actualizado");
define("_MI_ADSLIGHT_ADMENU11","Foro de Soporte");

define("_MI_ADSLIGHT_CONFSAVE","Configuraci&oacute;n guardada");
define("_MI_ADSLIGHT_CANPOST","Los usuarios an&oacute;nimos pueden publicar anuncios de:");
define("_MI_ADSLIGHT_PERPAGE","Anuncios por p&aacute;gina:");
define("_MI_ADSLIGHT_RES_PERPAGE","S&iacute;ntesis por p&aacute;gina:");
define("_MI_ADSLIGHT_MONEY","S&iacute;mbolo de moneda:<pr> 
<li>por ejemplo, el euro (&euro;)</li>");
define("_MI_ADSLIGHT_KOIVI","Utilice el editor Koivi :");
define("_MI_ADSLIGHT_NUMNEW","N&uacute;mero de nuevos anuncios:");
define("_MI_ADSLIGHT_MODERAT","&iquest;Quieres frenar el acceso en los anuncios:");
define("_MI_ADSLIGHT_DAYS","Duraci&oacute;n del anuncio:");
define("_MI_ADSLIGHT_MAXIIMGS","Tama&ntilde;o m&aacute;ximo de foto:");
define("_MI_ADSLIGHT_MAXWIDE","Ancho m&aacute;ximo de las im&aacute;genes:");
define("_MI_ADSLIGHT_MAXHIGH","M&aacute;ximo Fotos:");
define("_MI_ADSLIGHT_INBYTES","En bytes");
define("_MI_ADSLIGHT_INPIXEL","En p&iacute;xeles");
define("_MI_ADSLIGHT_INDAYS","En los d&iacute;as");
define("_MI_ADSLIGHT_MUSTLOGIN","Permitir a los usuarios an&oacute;nimos para responder a un anuncio.");
define("_MI_ADSLIGHT_THRUMAIL","Utilizando el formulario de e-mail (Se recomienda no responder a causa de spam.)");
define("_MI_ADSLIGHT_TYPEBLOC","Block Tipo:");
define("_MI_ADSLIGHT_JOBRAND","Anuncio de peligro");
define("_MI_ADSLIGHT_LASTTEN","Los &uacute;ltimos 10 anuncios");
define("_MI_ADSLIGHT_NEWTIME","Tiempo que el anuncio se considera nuevo:");
define("_MI_ADSLIGHT_DISPLPRICE","Precios:");
define("_MI_ADSLIGHT_DISPLPRICE2","Precios:");
define("_MI_ADSLIGHT_INTHISCAT","En esta categor&iacute;a");
define("_MI_ADSLIGHT_DISPLSUBCAT","Subcategor&iacute;as Mostrar:");
define("_MI_ADSLIGHT_ONHOME","En la p&aacute;gina principal del m&oacute;dulo");
define("_MI_ADSLIGHT_NBDISPLSUBCAT","N&uacute;mero de sub-categor&iacute;as que se mostrar&aacute;n:");
define("_MI_ADSLIGHT_IF","Si");
define("_MI_ADSLIGHT_ISAT","Es el");
define("_MI_ADSLIGHT_VIEWNEWCLASS","Mostrar anuncios nuevos:");
define("_MI_ADSLIGHT_ORDREALPHA","Ordenar alfab&eacute;ticamente");
define("_MI_ADSLIGHT_ORDREPERSO","Ranking personalizada");
define("_MI_ADSLIGHT_CSORT_ORDER","Categor&iacute;as: Ordenar por defecto");
define("_MI_ADSLIGHT_LSORT_ORDER","Anuncios: Ordenar por defecto");
define("_MI_ADSLIGHT_ORDER_TITLE","Ranking de anuncios por t&iacute;tulo");
define("_MI_ADSLIGHT_ORDER_PRICE","Ranking del anuncio por Precio");
define("_MI_ADSLIGHT_ORDER_DATE","Ranking de anuncios por fecha (por defecto)");
define("_MI_ADSLIGHT_ORDER_POP","Ranking de anuncios por cantidad de visitas");
define("_MI_ADSLIGHT_DBUPDATED","La base de datos ha sido actualizada. ");
define("_MI_ADSLIGHT_GPERM_G_ADD","Puede agregar");
define("_MI_ADSLIGHT_CAT2GROUPDESC","Compruebe las categor&iacute;as que le permiten acceder a");
define("_MI_ADSLIGHT_GROUPPERMDESC","Seleccione (s) grupo (s) (s) autorizada para presentar los anuncios.");
define("_MI_ADSLIGHT_GROUPPERM","Permiso para presentar ");
define("_MI_ADSLIGHT_SUBMITFORM","Permiso para presentar una lista");
define("_MI_ADSLIGHT_SUBMITFORM_DESC","Seleccione, que puede mostrar anuncios");
define("_MI_ADSLIGHT_VIEWFORM","Permisos para ver los anuncios");
define("_MI_ADSLIGHT_VIEWFORM_DESC","Selecciona los grupos que se pueden ver los listados");
define("_MI_ADSLIGHT_VIEW_RESUMEFORM_DESC","Seleccionar qui&eacute;n puede ver el curriculum vitae");
define("_MI_ADSLIGHT_SUPPORT","Apoya a este programa");
define("_MI_ADSLIGHT_OP","Leer mi examen");
define("_MI_ADSLIGHT_PREMIUM","Anuncios Destacados");
define("_MI_ADSLIGHT_PREMIUM_DESC","Seleccione los grupos que puede seleccionar la duraci&oacute;n de la publicidad es");


define("_MI_ADSLIGHT_CATEGORY_NOTIFY","Categor&iacute;a");
define("_MI_ADSLIGHT_CATEGORY_NOTIFYDSC","Las opciones de notificaci&oacute;n que se aplican a la categor&iacute;a actual. ");
define("_MI_ADSLIGHT_NOTIFY","nueva anuncios");
define("_MI_ADSLIGHT_NOTIFYDSC","Las opciones de notificaci&oacute;n que se aplican con el actual. ");
define("_MI_ADSLIGHT_GLOBAL_NOTIFY","Global");
define("_MI_ADSLIGHT_GLOBAL_NOTIFYDSC","Lista completa de opciones de notificaci&oacute;n.");

define("_MI_ADSLIGHT_NEWPOST_NOTIFY","nueva lista");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYCAP","Notifiqueme de nuevas entradas en la categor&iacute;a actual. ");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYDSC","Recibir aviso cuando el anuncio se muestra en la categor&iacute;a actual. ");
define("_MI_ADSLIGHT_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notificaci&oacute;n autom&aacute;tica: anuncio de nuevo en la categor&iacute;a de ");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFY","nueva lista");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYCAP","Notifiqueme de nuevas entradas en la categor&iacute;a actual. ");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYDSC","Recibir aviso cuando el anuncio se muestra en la categor&iacute;a actual. ");
define("_MI_ADSLIGHT_VALIDATE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notificaci&oacute;n autom&aacute;tica: anuncio de nuevo en la categor&iacute;a de ");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFY","Actualizaci&oacute;n de la pantalla ");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYCAP","Notifiqueme de cambios a las listas de la categor&iacute;a actual. ");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYDSC","Recibir una notificaci&oacute;n cuando el listado se actualiza en la categor&iacute;a actual.");
define("_MI_ADSLIGHT_UPDATE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notificaci&oacute;n autom&aacute;tica: anuncio de nuevo en la categor&iacute;a de ");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFY","Mostrar eliminados ");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYCAP","Notifiqueme de nuevas entradas en la categor&iacute;a actual. ");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYDSC","Recibir una notificaci&oacute;n cuando el anuncio es eliminado de la categor&iacute;a actual.");
define("_MI_ADSLIGHT_DELETE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notificaci&oacute;n autom&aacute;tica: nueva lista en la categor&iacute;a ");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFY","Registro");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYCAP","Notifiqueme de nuevos anuncios en todas las categor&iacute;as. ");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYDSC","Recibir aviso cuando el anuncio se muestra en todas las categor&iacute;as. ");
define("_MI_ADSLIGHT_GLOBAL_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notificaci&oacute;n autom&aacute;tica: anuncio de nuevo en la categor&iacute;a de ");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFY","nueva lista");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYCAP","Notifiqueme de nuevos anuncios en todas las categor&iacute;as. ");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYDSC","Recibir aviso cuando el anuncio se puede encontrar en todas las categor&iacute;as. ");
define("_MI_ADSLIGHT_GLOBAL_VALIDATE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notificaci&oacute;n autom&aacute;tica: anuncio de nuevo en la categor&iacute;a de ");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFY","Actualizaci&oacute;n de la lista ");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYCAP","Notifiqueme de cambios a las listas en todas las categor&iacute;as. ");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYDSC","Recibir una notificaci&oacute;n cuando el listado se actualiza en todas las categor&iacute;as.");
define("_MI_ADSLIGHT_GLOBAL_UPDATE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notificaci&oacute;n autom&aacute;tica: Ad actualizada en algunas categor&iacute;as");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFY","Anuncios suprimidos ");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYCAP","Notifiqueme de anuncios suprimido en todas las categor&iacute;as. ");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYDSC","Recibir una notificaci&oacute;n cuando un anuncio se elimina en todas las categor&iacute;as.");
define("_MI_ADSLIGHT_GLOBAL_DELETE_NEWPOST_NOTIFYSBJ","[X_SITENAME ()] () X_MODULE: notificaci&oacute;n autom&aacute;tica: Anuncio eliminado en las categor&iacute;as");

define("_MI_ADSLIGHT_RATE_USER","Permitir a los usuarios evaluar a los proveedores");
define("_MI_ADSLIGHT_RATE_ITEM","Permitir a los usuarios evaluar los anuncios");
define("_MI_ADSLIGHT_DIFF_NAME","Permitir a los usuarios utilizar varios nombres");
define("_MI_ADSLIGHT_DIFF_EMAIL","Permitir a los usuarios utilizar diferentes e-mail");
define("_MI_ADSLIGHT_NOT_PREMIUM","N&uacute;mero de fotos - no Premium");
define("_MI_ADSLIGHT_NOT_PREMIUM_DESC","N&uacute;mero de fotos de un usuario premium no puede tener en su p&aacute;gina de");
define("_MI_ADSLIGHT_NUMBPICT_TITLE","N&uacute;mero de fotos - Premium");
define("_MI_ADSLIGHT_NUMBPICT_DESC","N&uacute;mero de fotos que un usuario puede tener la prima en su p&aacute;gina de");
define("_MI_ADSLIGHT_SMNAME1","validar");
define("_MI_ADSLIGHT_THUMW_TITLE","Ancho de la etiqueta de");
define("_MI_ADSLIGHT_THUMBW_DESC","Ancho de la miniatura en p&iacute;xeles <br /> Esto significa que la miniatura de tu foto <br /> que este tama&ntilde;o de ancho <br /> proporcionalmente");
define("_MI_ADSLIGHT_THUMBH_TITLE","Altura de la miniatura");




define("_MI_ADSLIGHT_THUMBH_DESC","Altura de la miniatura en p&iacute;xeles <br /> Esto significa que la miniatura de tu foto <br /> de este tama&ntilde;o en altura <br /> Proporcionalmente");
define("_MI_ADSLIGHT_RESIZEDW_TITLE","Ajuste de la anchura de la imagen");
define("_MI_ADSLIGHT_RESIZEDW_DESC","Ajuste de la anchura de la imagen en p&iacute;xeles <br/> Esto significa que su imagen se <br /> que este tama&ntilde;o de ancho <br /> Proporcionalmente <br />  Si la foto original es m&aacute;s grande que este tama&ntilde;o se puede cambiar el tama&ntilde;o para evitar la desestructuraci&oacute;n de su dise&ntilde;o de ");
define("_MI_ADSLIGHT_RESIZEDH_TITLE","Establezca la altura de la imagen");
define("_MI_ADSLIGHT_RESIZEDH_DESC"," Ajuste de la altura de la imagen en p&iacute;xeles <br/> Esto significa que su imagen se <br /> de este tama&ntilde;o en altura <br /> de este tama&ntilde;o en altura <br /> Si la foto original es m&aacute;s grande que este tama&ntilde;o se puede cambiar el tama&ntilde;o para evitar la desestructuraci&oacute;n de su dise&ntilde;o de ");
define("_MI_ADSLIGHT_ORIGW_TITLE","Ancho m&aacute;ximo de la imagen original");
define("_MI_ADSLIGHT_ORIGW_DESC","Anchura m&aacute;xima en p&iacute;xeles de la foto original <br/>  Esto significa que la imagen original de que el usuario no puede exceder el tama&ntilde;o en anchura o no ser&aacute; transferido");
define("_MI_ADSLIGHT_ORIGH_TITLE","Altura m&aacute;xima de la foto original");
define("_MI_ADSLIGHT_ORIGH_DESC","Altura m&aacute;xima de la imagen original en p&iacute;xeles <br/>  Esto significa que la imagen original de que el usuario no puede superar este tama&ntilde;o en altura o no ser&aacute; transferido");
define("_MI_ADSLIGHT_UPLOAD_TITLE","Camino a la carga ");
define("_MI_ADSLIGHT_UPLOAD_DESC"," Ruta de acceso al directorio de carga <br/>  en Linux esto debe ser similar a /var/www/uploads <br/>  y Windows C:/Program Files/www");
define("_MI_ADSLIGHT_LINKUPLOAD_TI"," Enlace a su directorio de carga");
define("_MI_ADSLIGHT_LINKUPLOAD_DE","Es la direcci&oacute;n de la ra&iacute;z de sus env&iacute;os de http://www.yoursite.com/uploads <br/>");
define("_MI_ADSLIGHT_MAXFILEBYTES_T","El tama&ntilde;o m&aacute;ximo en bytes");
define("_MI_ADSLIGHT_MAXFILEBYTES_D","Este es el tama&ntilde;o m&aacute;ximo de Q'una archivo de imagen puede ser en bytes <br/> ya que 512000 para 500 KB");
define("_MI_ADSLIGHT_EDITOR"," Editor de usar:");
define("_MI_ADSLIGHT_LIST_EDITORS"," Seleccione el editor usar.");
define("_MI_ADSLIGHT_LIGHTBOX","Efectos Lightbox");
define("_MI_ADSLIGHT_LIGHTBOX_DESC","Utilizaci&oacute;n de efectos Lightbox cuando las im&aacute;genes de visualizaci&oacute;n.");
define("_MI_ADSLIGHT_USE_COUNTRY","Utilice el Pa&iacute;s campos");
define("_MI_ADSLIGHT_USE_COUNTRY_DESC"," Si se establece a 'No', el pa&iacute;s no se mostrar&aacute;;");
define("_MI_ADSLIGHT_SOLD_DAYS"," Mostrar el tiempo de la convocatoria despu&eacute;s de que presentara Vendido");
define("_MI_ADSLIGHT_SOLDINDAYS","En los d&iacute;as");
define("_MI_ADSLIGHT_ALMOST"," Notificar cuando el anuncio est&aacute; a punto de caducar?");
define("_MI_ADSLIGHT_ALMOST_DESC","En los d&iacute;as");
define("_MI_ADSLIGHT_MAIN_CAT"," Permite a los usuarios a&ntilde;adir anuncios en las principales categor&iacute;as");
define("_MI_ADSLIGHT_MAIN_CAT_DESC"," O simplemente permitir la colocaci&oacute;n de anuncios en el sub-categor&iacute;as de");
define("_MI_ADSLIGHT_ADMIN_EDITOR"," Editorial para su uso por el administrador:");
define("_MI_ADSLIGHT_LIST_ADMIN_EDITORS"," Seleccione el editor a usar para la administraci&oacute;n.");
define("_MI_ADSLIGHT_CAT_DESC"," C&oacute;digo Google AdSense o banner");
define("_MI_ADSLIGHT_DESC_CAT_DESC"," A&ntilde;ade un c&oacute;digo de Google AdSense o una bandera de publicidad para cada categor&iacute;a.");
define("_MI_ADSLIGHT_MUST_ADD_CAT"," Usted debe agregar una categor&iacute;a.");
define("_MI_ADSLIGHT_BNAME3"," &Uacute;ltimos anuncios + fotos");
define("_MI_ADSLIGHT_BNAME3_DESC"," &Uacute;ltimos anuncios + fotos");
define("_MI_ADSLIGHT_BNAME4","Top anuncios fotos");
define("_MI_ADSLIGHT_BNAME4_DESC","Top anuncios fotos Bloque");
define("_MI_ADSLIGHT_USE_CAPTCHA" ,"Use Captcha");

// Menu AdsLight
define("_MI_ADSLIGHT_SMENU1","listados");
define("_MI_ADSLIGHT_SMENU2","Enviar");
define("_MI_ADSLIGHT_SMENU3","B&uacute;squeda"); 

// support.php 
define("_MI_ADSLIGHT_SUPPORT01"," Si desea sugerir una mejora:<br /><br />- Una correcci&oacute;n<br />- Una traducci&oacute;n<br />- Una sugerencia<br />- Informar de un error<br />");
define("_MI_ADSLIGHT_SUPPORT02","&Uacute;nete a nosotros en el Foro de Soporte t&eacute;cnico AdsLight");
define("_MI_ADSLIGHT_SUPPORT03","> Foro de Soporte t&eacute;cnico AdsLight <");

// Bloc Carte de France
define("_MI_ADSLIGHT_MAPFRANCE","Mapa de Francia");
define("_MI_ADSLIGHT_MAPFRANCE_DESC","En su &aacute;rea");

// Bloc Ajouter une annonce
define("_MI_ADSLIGHT_ADDMENU","Agregar Anuncio");
define("_MI_ADSLIGHT_ADDMENU_DESC","Men&uacute;");

// version AdsLight 1.0.2
// Activer RewriteUrl
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL" ,"activar Rewrite URL");
define("_MI_ADSLIGHT_ACTIVE_REWRITEURL_DESC" ,"Activar la reescritura de URL para un mejor ranking.<br/>Para instalar la reescritura, gracias a leer el archivo README.txt");

// Activer thumbs_index
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX" ,"Habilitar el &Iacute;ndice de la p&aacute;gina de instant&aacute;neas");
define("_MI_ADSLIGHT_ACTIVE_THUMBSINDEX_DESC" ,"Habilitar la visualizaci&oacute;n de la p&aacute;gina de fotos en miniatura<br/>Si est&aacute; apagado en un icono <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> indica si existe o no una imagen en el anuncio.");

// Activer thumbs_cats
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS" ,"Habilitar instant&aacute;neas en las categor&iacute;as");
define("_MI_ADSLIGHT_ACTIVE_THUMBSCATS_DESC" ,"Habilitar la visualizaci&oacute;n de im&aacute;genes en miniatura en las categor&iacute;as de<br/>Si est&aacute; apagado en un icono <img src='".XOOPS_URL."/modules/adslight/images/camera_photo.png' width='24px' ><br/> indica si existe o no una imagen en el anuncio.");

// Code Adscence index
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE","C&oacute;digo de p&aacute;gina de inicio adicionales");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_DESC","Pon tu c&oacute;digo de Google AdSense o de otra &iacute;ndole aqu&iacute;");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE","Use el c&oacute;digo adicional a la p&aacute;gina principal");
define("_MI_ADSLIGHT_ADSLIGHT_USE_INDEX_CODE_DESC","Coloque el c&oacute;digo adicional entre las propuestas<br />en la p&aacute;gina de inicio y p&aacute;gina de la categor&iacute;a.<br /><br />Banners, c&oacute;digo de AdSense, etc ...
");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE","Lugar donde el c&oacute;digo se mostrar&aacute; en la lista ");
define("_MI_ADSLIGHT_ADSLIGHT_INDEX_CODE_PLACE_DESC","Ex. Si usted elige 4 habr&aacute; 3 propuestas antes de este c&oacute;digo.<br />El c&oacute;digo se mostrar&aacute; en la 4 &ordf; posici&oacute;n.");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER","Xoops banner Utilice el c&oacute;digo");
define("_MI_ADSLIGHT_ADSLIGHT_USE_BANNER_DESC","se inserta entre los anuncios de banner Xoops.<br />Si elige S&iacute;<br />C&oacute;digo insertar aqu&iacute;");

// Version 1.0.5
// Code Adscence Catégories
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE","Pub. c&oacute;digo en las p&aacute;ginas de las clases de");
define("_MI_ADSLIGHT_ADSLIGHT_CATS_CODE_DESC","Adsence c&oacute;digo de Google o el c&oacute;digo de un banner:<br/>Format: width = 300 height = 250");

// adslight_theme_set
define("_MI_ADSLIGHT_THEMESET","Elecci&oacute;n del conjunto de plantillas");

// Méta Description / keywords Categories
define("_MI_ADSLIGHT_CAT_META","Permitir el secuestro Meta descripci&oacute;n, palabras clave Meta categor&iacute;as?");
define("_MI_ADSLIGHT_CAT_META_DESCRIPTION","Si establece esta opci&oacute;n 'S&iacute;',<br/> 
Puede escribir palabras clave meta datos y la descripci&oacute;n para cada categor&iacute;a de Noticias<br/>( Recomendar a un mejor ranking. )");


// tips_writing_ad.php
define("_MI_ADSLIGHT_USE_TIPS_WRITE","Personalizar P&aacute;gina info/consejos?");
define("_MI_ADSLIGHT_USEDESC_TIPS_WRITE","Si selecciona &quot;s&iacute;&quot;, usted puede escribir a continuaci&oacute;n, el t&iacute;tulo y el texto de la p&aacute;gina de infos/conseils");
define("_MI_ADSLIGHT_TITLE_TIPS_WRITE","Titre de la page info/consejos");
define("_MI_ADSLIGHT_TITLEDESC_TIPS_WRITE","Escriba aqu&iacute; el t&iacute;tulo que aparecer&aacute; en la p&aacute;gina info/consejos");
define("_MI_ADSLIGHT_TEXT_TIPS_WRITE","Texto de p&aacute;gina info/consejos");
define("_MI_ADSLIGHT_TEXTDESC_TIPS_WRITE","Escriba aqu&iacute; el texto que aparece en la p&aacute;gina info/consejos");

// Version 1.0.53
// adslight_maps
define("_MI_ADSLIGHT_MAPSSET","Seleccione la tarjeta de su pa&#237;s");
define("_MI_ADSLIGHT_MAPSSET_DESC","Si desea crear el mapa de su pa&#237;s.<br />Gracias lectura de la documentaci&#243;n del m&#243;dulo.");
define("_MI_ADSLIGHT_MAPSW_TITLE","Ancho de la hoja de");
define("_MI_ADSLIGHT_MAPSH_TITLE","Altura mapa");


?>