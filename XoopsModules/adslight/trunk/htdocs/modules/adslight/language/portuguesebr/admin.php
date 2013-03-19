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

define("_AM_ADSLIGHT_CONF", "Configura��o dos an�ncios");
define("_AM_ADSLIGHT_ADDON", "Plugins");
define("_AM_ADSLIGHT_ANNDEL", "Os an�ncios foram selecionados foram exclu�dos");
define("_AM_ADSLIGHT_ADDCATPRINC", "Adicionar uma categoria principal");
define("_AM_ADSLIGHT_CATNAME", "Nome:");
define("_AM_ADSLIGHT_ADDSUBCAT", "Adicionar uma sub-categoria");
define("_AM_ADSLIGHT_DELSUBCAT", "Excluir uma sub-categoria");
define("_AM_ADSLIGHT_MODIFSUBCAT", "Editar uma sub-categoria");
define("_AM_ADSLIGHT_ADD", "Adicionar");
define("_AM_ADSLIGHT_CATDEL", "A categoria selecionada foi exclu�da");
define("_AM_ADSLIGHT_OUI", "Sim");
define("_AM_ADSLIGHT_NON", "N�o");
define("_AM_ADSLIGHT_SURDELCAT", "Aviso: Tem certeza que deseja apagar esta categoria? As sub-categorias e os an�ncios contidos tamb�m ser�o exclu�dos.");
define("_AM_ADSLIGHT_IN", "Em");
define("_AM_ADSLIGHT_MODIF", "Editar");
define("_AM_ADSLIGHT_MODIFCAT", "Editar Categoria");
define("_AM_ADSLIGHT_CAT", "Categoria");
define("_AM_ADSLIGHT_SUBCAT", "sub-categoria");
define("_AM_ADSLIGHT_CONFMYA", "Configura��o dos an�ncios");
define("_AM_ADSLIGHT_CATADD", "Adicionar categoria");
define("_AM_ADSLIGHT_SUBCATADD", "Adicionar sub-categoria");
define("_AM_ADSLIGHT_ANNMOD", "O an�ncio foi alterado");
define("_AM_ADSLIGHT_NOANNVAL", "Atualmente, n�o existem an�ncios para aprovar");
define("_AM_ADSLIGHT_NOMODACTIV", "A modera��o est� sem permiss�o: nenhum an�ncio para aprovar");
define("_AM_ADSLIGHT_MODANN", "Alterar an�ncios");
define("_AM_ADSLIGHT_ALLMODANN", "(Todos os an�ncios podem ser alterados pelo administrador .)");
// Message
define("_AM_ADSLIGHT_HELLO", "Ol�");
define("_AM_ADSLIGHT_ANNVALID", "O an�ncio foi aprovado");
define("_AM_ADSLIGHT_DEL", "Excluir");
define("_AM_ADSLIGHT_SAVMOD", "Salvar altera��es");
define("_AM_ADSLIGHT_MODTYPE", "Alterar tipo de an�ncio");
define("_AM_ADSLIGHT_ANNACCEPT", "Seu an�ncio foi aprovado");
define("_AM_ADSLIGHT_CONSULTTO", "Contato");
define("_AM_ADSLIGHT_THANK", "Obrigado");
define("_AM_ADSLIGHT_TEAMOF", "Equipe");
// Message de fin
define("_AM_ADSLIGHT_RETURN", "Voltar");
define("_AM_ADSLIGHT_MODSUBCAT", "Mudar o nome da sub-categoria");
define("_AM_ADSLIGHT_MODCAT", "Mudar o nome da categoria principal");
define("_AM_ADSLIGHT_GO", "Ir");
define("_AM_ADSLIGHT_SENDBY", "Adicionado por:");
define("_AM_ADSLIGHT_EMAIL", "E-mail:");
define("_AM_ADSLIGHT_TEL", "Telefone:");
define("_AM_ADSLIGHT_TOWN", "Cidade:");
define("_AM_ADSLIGHT_COUNTRY", "Pa�s:");
define("_AM_ADSLIGHT_TITLE2", "T�tulo:");
define("_AM_ADSLIGHT_TYPE", "Tipo:");
define("_AM_ADSLIGHT_TYPE_USURE", "Condi��o de uso:");
define("_AM_ADSLIGHT_PRICE2", "Pre�o");
define("_AM_ADSLIGHT_CAT2", "Categoria");
define("_AM_ADSLIGHT_DESCRIPTION", "C�digo adsence do Google ou o c�digo de um banner: <br/> Formato: largura = 300 altura = 250");
define("_AM_ADSLIGHT_THEREIS", "H�");
define("_AM_ADSLIGHT_WAIT", "An�ncios esperando aprova��o");
define("_AM_ADSLIGHT_ADDTYPE", "Adicionar um tipo de an�ncio");
define("_AM_ADSLIGHT_ERRORTYPE", "Erro: tipo");
define("_AM_ADSLIGHT_EXIST", "J� existe!");
define("_AM_ADSLIGHT_ERRORCAT", "ERRO: Categoria");
define("_AM_ADSLIGHT_ERRORSUBCAT", "ERRO: Sub-categoria");
define("_AM_ADSLIGHT_TYPEMOD", "O tipo de an�ncio foi alterado");
define("_AM_ADSLIGHT_TYPEDEL", "O tipo de an�ncio foi exclu�do");
define("_AM_ADSLIGHT_ADDTYPE2", "O tipo de an�ncio foi adicionado");
define("_AM_ADSLIGHT_ACCESMYANN", "An�ncios");
define("_AM_ADSLIGHT_IMGCAT", "Tabela");
define("_AM_ADSLIGHT_REPIMGCAT", "Galeria");
define("_AM_ADSLIGHT_GESTCAT", "Gerenciamento de Categoria");
// Condi��o de paiement
define("_AM_ADSLIGHT_ADDPRICE", "Adicionar uma condi��o de pagamento");
define("_AM_ADSLIGHT_MODPRICE", "Mudar tipo de pre�o");
define("_AM_ADSLIGHT_ADDPRICE2", "O tipo de premia��o foi adicionado");
define("_AM_ADSLIGHT_PRICEMOD", "O tipo de fixa��o de pre�os mudou");
define("_AM_ADSLIGHT_PRICEDEL", "O tipo de fixa��o de pre�os foi exclu�do");
define("_AM_ADSLIGHT_ORDRE", "Ordenar:");
define("_AM_ADSLIGHT_ORDRECLASS", "Controle de Categoria:");
define("_AM_ADSLIGHT_ORDREALPHA", "Ordenar alfabeticamente");
define("_AM_ADSLIGHT_ORDREPERSO", "Formalidade ");
define("_AM_ADSLIGHT_BIGCAT", "Categoria principal");
define("_AM_ADSLIGHT_HELP1", "<b> Para adicionar uma categoria:<br/></b>Clique na imagem <img src=\"".XOOPS_URL."/modules/adslight/images/plus.gif\" border=0 width=10 height=10 alt=\"Adicionar Categoria\"> ao lado da categoria na qual voc� deseja adicionar o t�tulo da nova categoria.<p><b>para editar ou excluir uma categoria:<br/></b>Clique no nome da categoria");
define("_AM_ADSLIGHT_HELP2", "<b>Classifica�ao de categorias: </b>Os n�meros entre par�nteses correspondem � ordem na categoria superior de uma categoria principal. N�mero inteiro negativo que podem ser utilizado: -1");

// Fichier pref.php
define("_AM_ADSLIGHT_CONFSAVE", "Configura��o salva");
define("_AM_ADSLIGHT_ANNOCANPOST", "Os usuarios an�nimos podem publicar an�ncios de:");
define("_AM_ADSLIGHT_PERPAGE", "An�ncios por p�gina:");
define("_AM_ADSLIGHT_MONEY", "S�mbolo de moeda:");
define("_AM_ADSLIGHT_NUMNEW", "N�mero de novos an�ncios:");
define("_AM_ADSLIGHT_MODERAT", "An�ncios moderados:");
Define ( "_CAL_MAXIIMGS", "Tamanho m�ximo da foto:");
define("_AM_ADSLIGHT_TIMEANN", "Dura��o do an�ncio:");
define("_AM_ADSLIGHT_INOCTET", "Em bytes");
define("_AM_ADSLIGHT_INDAYS", "Em dias");
define("_AM_ADSLIGHT_TYPEBLOC", "Tipo de bloco:");
define("_AM_ADSLIGHT_ANNRAND", "An�ncios aleat�rios");
define("_AM_ADSLIGHT_LASTTEN", "Os �ltimos 10 an�ncios");
define("_AM_ADSLIGHT_NEWTIME", "Novas ofertas:");
define("_AM_ADSLIGHT_DISPLPRICE", "Pre�os:");
define("_AM_ADSLIGHT_DISPLPRICE2", "Pre�os");
define("_AM_ADSLIGHT_INTHISCAT", "Nesta categoria");
define("_AM_ADSLIGHT_DISPLSUBCAT", "Exiber sub-categoria:");
define("_AM_ADSLIGHT_ONHOME", "Na p�gina principal do m�dulo");
define("_AM_ADSLIGHT_NBDISPLSUBCAT", "N�mero de sub-categor&ias para exibir:");
define("_AM_ADSLIGHT_IF", "Sim");
define("_AM_ADSLIGHT_ISAT", "Esta em");
define("_AM_ADSLIGHT_VIEWNEWCLASS", "Mostrar an�ncios novos:");
define("_AM_ADSLIGHT_PERMADDNG", "N�o foi poss�vel adicionar %s permiss�es para o grupo de %s");
define("_AM_ADSLIGHT_PERMADDOK", "Adicionado %s permiss�es para %s  para o grupo de %s");
define("_AM_ADSLIGHT_PERMRESETNG", "N�o � poss�vel redefinir as permiss�es para o grupo do m�dulo de %s");
define("_AM_ADSLIGHT_PERMADDNGP", "Todos os elementos dos pais devem ser selecionados.");
define("_AM_ADSLIGHT_EXPIRE", "N�mero de dias ap�s o aviso");
define("_AM_ADSLIGHT_DBUPDATED", "O banco de dados foi atualizado.");
define("_AM_ADSLIGHT_CONTACT_BY_EMAIL", "E-mail");
define("_AM_ADSLIGHT_CONTACT_BY_PM", "Mensagem privada - PM");
define("_AM_ADSLIGHT_CONTACT_BY_BOTH", "Ambos, E-mail ou PM");
define("_AM_ADSLIGHT_CONTACT_BY_PHONE", "Por telefone somente");
define("_AM_ADSLIGHT_CONTACTBY", "Contato por:");
define("_AM_ADSLIGHT_PREMIUM", "Listagem premium");
define("_AM_ADSLIGHT_OK", "Aceitar");
define("_AM_ADSLIGHT_CATSMOD", "A categoria foi atualizada");
define("_AM_ADSLIGHT_ADDED_ON", "Adicionado");
define("_AM_ADSLIGHT_NUMANN", "Id do An�ncio:");
define("_AM_ADSLIGHT_ACTIVE", "Ativo");
define("_AM_ADSLIGHT_INACTIVE", "Inativo");
define("_AM_ADSLIGHT_SOLD", "Restringido;");
define("_AM_ADSLIGHT_STATUS", "Estado");
define("_AM_ADSLIGHT_UPDATECOMPLETE", "Atualizado");
define("_AM_ADSLIGHT_UPDATEMODULE", "<b> M�dulo de Atualiza��o </b>");
define("_AM_ADSLIGHT_UPGRADEFAILED", "Falha na atualiza��o");
define("_AM_ADSLIGHT_UPGRADEFAILED0", "Atualizar");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR", "Erro de acceso");
define("_AM_ADSLIGHT_THANKS", "Obrigado por usar nosso Classificados");
define("_AM_ADSLIGHT_WEBMASTER", "Webmaster");
define("_AM_ADSLIGHT_YOUR_AD", "Seu an�ncio");
define("_AM_ADSLIGHT_AT", "Para");
define("_AM_ADSLIGHT_VEDIT_AD", "Voc� pode ver ou editar seu an�ncio aqui");
define("_AM_ADSLIGHT_YOUR_AD_ON", "Seu an�ncio em");
define("_AM_ADSLIGHT_APPROVED", "Foi aprovado.");
define("_AM_ADSLIGHT_EXPIRED", "Expirou e foi eliminado.");
define("_AM_ADSLIGHT_CHECKER", "Auditoria de Permiss�es de Arquivos");
define("_AM_ADSLIGHT_DIRPERMS", "Ir para o directorio de permiss�es escrita! =&gt; ");
define("_AM_ADSLIGHT_PHOTO1", "N�mero de fotos:");
define("_AM_ADSLIGHT_SUBMITTER","Enviado por");
define("_AM_ADSLIGHT_NBR_PHOTO","Foto(s)");
define("_AM_ADSLIGHT_TITLE","T�tulo");
define("_AM_ADSLIGHT_LID","ID");
define("_AM_ADSLIGHT_DATE","Data");
define("_AM_ADSLIGHT_DESC","Descri��o");

define("_AM_ADSLIGHT_FREECAT","Esta ser� uma aula gr�tis");
define("_AM_ADSLIGHT_MODERATE_CAT","Moderada esta categoria");
define("_AM_ADSLIGHT_VISIT_LINK", "Voc� pode ler o an�ncio completo clicando no link abaixo:");
define("_AM_ADSLIGHT_LISTING_NUMBER", "N�mero de venda ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW", "Voc� pode ver a lista completa clicando no link abaixo");
define("_AM_ADSLIGHT_NOREPLY","!!!  N�o responda a este e-mail, voc� n�o receber� uma resposta.  !!!");

define("_AM_ADSLIGHT_ADDED_TO_CAT","Uma nova lista foi adicionado � categoria de");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","Voc� se inscreveu para receber tais notifica��es.");
define("_AM_ADSLIGHT_ERROR_NOTIF","Se isto � um erro ou voc� n�o deseja receber essas notifica��es, atualize sua inscri��o clicando no link abaixo:");
define("_AM_ADSLIGHT_FOLLOW_LINK","Aqui est� um link para a nova lista");
define("_AM_ADSLIGHT_CAPTCHA","C�digo de Seguran�a :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","Moderada as sub-categorias nesta categoria");
define("_AM_ADSLIGHT_DOCUMENTATION","Documenta��o");
define("_AM_ADSLIGHT_FEATURES","Caracter�sticas");
define("_AM_ADSLIGHT_CLONE","Como clonar");
define("_AM_ADSLIGHT_INCOMPLETE","Incompleta");

// Ajouter par iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE", "Adicionar tipo de juros");
define("_AM_ADSLIGHT_MODUSURE", "Mudar tipo de juros");
define("_AM_ADSLIGHT_ADDUSURE2", "O tipo de juros foi adicionando");
define("_AM_ADSLIGHT_USUREMOD", "O padr�o de juros mudado");
define("_AM_ADSLIGHT_USUREDEL", "O tipo de juros foi exclu�do");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","Autor");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Mudan�a de registro");
define("_AM_ADSLIGHT_ABOUT_CREDITS","Cr�itos");
define("_AM_ADSLIGHT_ABOUT_LICENSE","Licen�a");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","M�dulo de Informa��es");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","Suporte Web");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","Data de publica��o");
define("_AM_ADSLIGHT_ABOUT_STATUS","Status");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","As pessoas envolvidas na melhoria do m�dulo");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","Nickname");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","Site web");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","Vers�o");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","Descri��o geral");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Pode adicionar" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "Verificar as categorias que voc� pode acessar" );
define("_AM_ADSLIGHT_GROUPPERMDESC" , "Selecione o(s) grupo(s) autorizado(s) a apresentar os an�ncios." );
define("_AM_ADSLIGHT_GROUPPERM", "Permiss�o para arquivo");
define("_AM_ADSLIGHT_SUBMITFORM", "Permiss�es para fazer uma lista");
define("_AM_ADSLIGHT_SUBMITFORM_DESC", "Selecione para quem poder� se exibido");
define("_AM_ADSLIGHT_VIEWFORM", "Permiss�es para ver os an�ncios");
define("_AM_ADSLIGHT_VIEWFORM_DESC", "Selecione os grupos que poder�o ver a lista");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC", "Selecione os grupos que poder�o mostrar resumos");
define("_AM_ADSLIGHT_SUPPORT", "Apoiar este programa");
define("_AM_ADSLIGHT_OP", "Leia  minha an�lise");
define("_AM_ADSLIGHT_PREMIUM_DESC", "Seleccione los grupos que puede seleccionar la duraci&oacute;n de la publicidad es");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK", "Voc� est� usando a vers�o mais recente do m�dulo.");
define("_AM_ADSLIGHT_RELEASEISNOTOK", "Seu m�dulo est� obsoleto, uma nova vers�o est� dispon�vel.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD", "Download.");
define("_AM_ADSLIGHT_NBR_PHOTO","Foto(s)");

//Version 1.05
// M�ta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<b>Meta Descri��o :</b><br/>Para uma melhor otimiza��o</b> acrescentar aqui uma descri��o precisa da sua classe. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<b>Meta Palavras-chave :</b><br/>Para uma melhor otimiza��o</b> adicionar palavras-chave aqui, em rela��o com a categoria.<br/><b><font color=\"#ff3300\">palavras separadas por v�rgulas</font></b>. (Ex. ingl�s, espanha, fran�a,...)");

///Version 1.053
/// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK", "O arquivo XML n�o exist ou n�o est� coincidindo com o cart�o selecionado nas prefer�ncias.");
define("_AM_ADSLIGHT_XMLUPGRADE", "Atualizar arquivo XML");

/// Faire un Don
define("_AM_ADSLIGHT_FAIREUNDON", "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
<input type=\"hidden\" name=\"encrypted\" value=\"-----BEGIN PKCS7-----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-----END PKCS7-----
\">
<input type=\"image\" src=\"https://www.paypal.com/es_ES/ES/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal. A forma r�pida e segura de pagar na Internet.\">
<img alt=\"\" border=\"0\" src=\"https://www.paypal.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
</form>");

?>