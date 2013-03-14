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

define("_AM_ADSLIGHT_CONF", "Configuração dos anúncios");
define("_AM_ADSLIGHT_ADDON", "Plugins");
define("_AM_ADSLIGHT_ANNDEL", "Os anúncios foram selecionados foram excluídos");
define("_AM_ADSLIGHT_ADDCATPRINC", "Adicionar uma categoria principal");
define("_AM_ADSLIGHT_CATNAME", "Nome:");
define("_AM_ADSLIGHT_ADDSUBCAT", "Adicionar uma sub-categoria");
define("_AM_ADSLIGHT_DELSUBCAT", "Excluir uma sub-categoria");
define("_AM_ADSLIGHT_MODIFSUBCAT", "Editar uma sub-categoria");
define("_AM_ADSLIGHT_ADD", "Adicionar");
define("_AM_ADSLIGHT_CATDEL", "A categoria selecionada foi excluída");
define("_AM_ADSLIGHT_OUI", "Sim");
define("_AM_ADSLIGHT_NON", "Não");
define("_AM_ADSLIGHT_SURDELCAT", "Aviso: Tem certeza que deseja apagar esta categoria? As sub-categorias e os anúncios contidos também serão excluídos.");
define("_AM_ADSLIGHT_IN", "Em");
define("_AM_ADSLIGHT_MODIF", "Editar");
define("_AM_ADSLIGHT_MODIFCAT", "Editar Categoria");
define("_AM_ADSLIGHT_CAT", "Categoria");
define("_AM_ADSLIGHT_SUBCAT", "sub-categoria");
define("_AM_ADSLIGHT_CONFMYA", "Configuração dos anúncios");
define("_AM_ADSLIGHT_CATADD", "Adicionar categoria");
define("_AM_ADSLIGHT_SUBCATADD", "Adicionar sub-categoria");
define("_AM_ADSLIGHT_ANNMOD", "O anúncio foi alterado");
define("_AM_ADSLIGHT_NOANNVAL", "Atualmente, não existem anúncios para aprovar");
define("_AM_ADSLIGHT_NOMODACTIV", "A moderação está sem permissão: nenhum anúncio para aprovar");
define("_AM_ADSLIGHT_MODANN", "Alterar anúncios");
define("_AM_ADSLIGHT_ALLMODANN", "(Todos os anúncios podem ser alterados pelo administrador .)");
// Message
define("_AM_ADSLIGHT_HELLO", "Olá");
define("_AM_ADSLIGHT_ANNVALID", "O anúncio foi aprovado");
define("_AM_ADSLIGHT_DEL", "Excluir");
define("_AM_ADSLIGHT_SAVMOD", "Salvar alterações");
define("_AM_ADSLIGHT_MODTYPE", "Alterar tipo de anúncio");
define("_AM_ADSLIGHT_ANNACCEPT", "Seu anúncio foi aprovado");
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
define("_AM_ADSLIGHT_COUNTRY", "País:");
define("_AM_ADSLIGHT_TITLE2", "Título:");
define("_AM_ADSLIGHT_TYPE", "Tipo:");
define("_AM_ADSLIGHT_TYPE_USURE", "Condição de uso:");
define("_AM_ADSLIGHT_PRICE2", "Preço");
define("_AM_ADSLIGHT_CAT2", "Categoria");
define("_AM_ADSLIGHT_DESCRIPTION", "Código adsence do Google ou o código de um banner: <br/> Formato: largura = 300 altura = 250");
define("_AM_ADSLIGHT_THEREIS", "Há");
define("_AM_ADSLIGHT_WAIT", "Anúncios esperando aprovação");
define("_AM_ADSLIGHT_ADDTYPE", "Adicionar um tipo de anúncio");
define("_AM_ADSLIGHT_ERRORTYPE", "Erro: tipo");
define("_AM_ADSLIGHT_EXIST", "Já existe!");
define("_AM_ADSLIGHT_ERRORCAT", "ERRO: Categoria");
define("_AM_ADSLIGHT_ERRORSUBCAT", "ERRO: Sub-categoria");
define("_AM_ADSLIGHT_TYPEMOD", "O tipo de anúncio foi alterado");
define("_AM_ADSLIGHT_TYPEDEL", "O tipo de anúncio foi excluído");
define("_AM_ADSLIGHT_ADDTYPE2", "O tipo de anúncio foi adicionado");
define("_AM_ADSLIGHT_ACCESMYANN", "Anúncios");
define("_AM_ADSLIGHT_IMGCAT", "Tabela");
define("_AM_ADSLIGHT_REPIMGCAT", "Galeria");
define("_AM_ADSLIGHT_GESTCAT", "Gerenciamento de Categoria");
// Condição de paiement
define("_AM_ADSLIGHT_ADDPRICE", "Adicionar uma condição de pagamento");
define("_AM_ADSLIGHT_MODPRICE", "Mudar tipo de preço");
define("_AM_ADSLIGHT_ADDPRICE2", "O tipo de premiação foi adicionado");
define("_AM_ADSLIGHT_PRICEMOD", "O tipo de fixação de preços mudou");
define("_AM_ADSLIGHT_PRICEDEL", "O tipo de fixação de preços foi excluído");
define("_AM_ADSLIGHT_ORDRE", "Ordenar:");
define("_AM_ADSLIGHT_ORDRECLASS", "Controle de Categoria:");
define("_AM_ADSLIGHT_ORDREALPHA", "Ordenar alfabeticamente");
define("_AM_ADSLIGHT_ORDREPERSO", "Formalidade ");
define("_AM_ADSLIGHT_BIGCAT", "Categoria principal");
define("_AM_ADSLIGHT_HELP1", "<b> Para adicionar uma categoria:<br/></b>Clique na imagem <img src=\"".XOOPS_URL."/modules/adslight/images/plus.gif\" border=0 width=10 height=10 alt=\"Adicionar Categoria\"> ao lado da categoria na qual você deseja adicionar o título da nova categoria.<p><b>para editar ou excluir uma categoria:<br/></b>Clique no nome da categoria");
define("_AM_ADSLIGHT_HELP2", "<b>Classificaçao de categorias: </b>Os números entre parênteses correspondem à ordem na categoria superior de uma categoria principal. Número inteiro negativo que podem ser utilizado: -1");

// Fichier pref.php
define("_AM_ADSLIGHT_CONFSAVE", "Configuração salva");
define("_AM_ADSLIGHT_ANNOCANPOST", "Os usuarios anônimos podem publicar anúncios de:");
define("_AM_ADSLIGHT_PERPAGE", "Anúncios por página:");
define("_AM_ADSLIGHT_MONEY", "Símbolo de moeda:");
define("_AM_ADSLIGHT_NUMNEW", "Número de novos anúncios:");
define("_AM_ADSLIGHT_MODERAT", "Anúncios moderados:");
Define ( "_CAL_MAXIIMGS", "Tamanho máximo da foto:");
define("_AM_ADSLIGHT_TIMEANN", "Duração do anúncio:");
define("_AM_ADSLIGHT_INOCTET", "Em bytes");
define("_AM_ADSLIGHT_INDAYS", "Em dias");
define("_AM_ADSLIGHT_TYPEBLOC", "Tipo de bloco:");
define("_AM_ADSLIGHT_ANNRAND", "Anúncios aleatórios");
define("_AM_ADSLIGHT_LASTTEN", "Os últimos 10 anúncios");
define("_AM_ADSLIGHT_NEWTIME", "Novas ofertas:");
define("_AM_ADSLIGHT_DISPLPRICE", "Preços:");
define("_AM_ADSLIGHT_DISPLPRICE2", "Preços");
define("_AM_ADSLIGHT_INTHISCAT", "Nesta categoria");
define("_AM_ADSLIGHT_DISPLSUBCAT", "Exiber sub-categoria:");
define("_AM_ADSLIGHT_ONHOME", "Na página principal do módulo");
define("_AM_ADSLIGHT_NBDISPLSUBCAT", "Número de sub-categor&ias para exibir:");
define("_AM_ADSLIGHT_IF", "Sim");
define("_AM_ADSLIGHT_ISAT", "Esta em");
define("_AM_ADSLIGHT_VIEWNEWCLASS", "Mostrar anúncios novos:");
define("_AM_ADSLIGHT_PERMADDNG", "Não foi possível adicionar %s permissões para o grupo de %s");
define("_AM_ADSLIGHT_PERMADDOK", "Adicionado %s permissões para %s  para o grupo de %s");
define("_AM_ADSLIGHT_PERMRESETNG", "Não é possível redefinir as permissões para o grupo do módulo de %s");
define("_AM_ADSLIGHT_PERMADDNGP", "Todos os elementos dos pais devem ser selecionados.");
define("_AM_ADSLIGHT_EXPIRE", "Número de dias após o aviso");
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
define("_AM_ADSLIGHT_NUMANN", "Id do Anúncio:");
define("_AM_ADSLIGHT_ACTIVE", "Ativo");
define("_AM_ADSLIGHT_INACTIVE", "Inativo");
define("_AM_ADSLIGHT_SOLD", "Restringido;");
define("_AM_ADSLIGHT_STATUS", "Estado");
define("_AM_ADSLIGHT_UPDATECOMPLETE", "Atualizado");
define("_AM_ADSLIGHT_UPDATEMODULE", "<b> Módulo de Atualização </b>");
define("_AM_ADSLIGHT_UPGRADEFAILED", "Falha na atualização");
define("_AM_ADSLIGHT_UPGRADEFAILED0", "Atualizar");
define("_AM_ADSLIGHT_UPGR_ACCESS_ERROR", "Erro de acceso");
define("_AM_ADSLIGHT_THANKS", "Obrigado por usar nosso Classificados");
define("_AM_ADSLIGHT_WEBMASTER", "Webmaster");
define("_AM_ADSLIGHT_YOUR_AD", "Seu anúncio");
define("_AM_ADSLIGHT_AT", "Para");
define("_AM_ADSLIGHT_VEDIT_AD", "Você pode ver ou editar seu anúncio aqui");
define("_AM_ADSLIGHT_YOUR_AD_ON", "Seu anúncio em");
define("_AM_ADSLIGHT_APPROVED", "Foi aprovado.");
define("_AM_ADSLIGHT_EXPIRED", "Expirou e foi eliminado.");
define("_AM_ADSLIGHT_CHECKER", "Auditoria de Permissões de Arquivos");
define("_AM_ADSLIGHT_DIRPERMS", "Ir para o directorio de permissões escrita! =&gt; ");
define("_AM_ADSLIGHT_PHOTO1", "Número de fotos:");
define("_AM_ADSLIGHT_SUBMITTER","Enviado por");
define("_AM_ADSLIGHT_NBR_PHOTO","Foto(s)");
define("_AM_ADSLIGHT_TITLE","Título");
define("_AM_ADSLIGHT_LID","ID");
define("_AM_ADSLIGHT_DATE","Data");
define("_AM_ADSLIGHT_DESC","Descrição");

define("_AM_ADSLIGHT_FREECAT","Esta será uma aula grátis");
define("_AM_ADSLIGHT_MODERATE_CAT","Moderada esta categoria");
define("_AM_ADSLIGHT_VISIT_LINK", "Você pode ler o anúncio completo clicando no link abaixo:");
define("_AM_ADSLIGHT_LISTING_NUMBER", "Número de venda ");
define("_AM_ADSLIGHT_YOU_CAN_VIEW_BELOW", "Você pode ver a lista completa clicando no link abaixo");
define("_AM_ADSLIGHT_NOREPLY","!!!  Não responda a este e-mail, você não receberá uma resposta.  !!!");

define("_AM_ADSLIGHT_ADDED_TO_CAT","Uma nova lista foi adicionado à categoria de");
define("_AM_ADSLIGHT_RECIEVING_NOTIF","Você se inscreveu para receber tais notificações.");
define("_AM_ADSLIGHT_ERROR_NOTIF","Se isto é um erro ou você não deseja receber essas notificações, atualize sua inscrição clicando no link abaixo:");
define("_AM_ADSLIGHT_FOLLOW_LINK","Aqui está um link para a nova lista");
define("_AM_ADSLIGHT_CAPTCHA","Código de Segurança :");
define("_AM_ADSLIGHT_MODERATE_SUBCATS","Moderada as sub-categorias nesta categoria");
define("_AM_ADSLIGHT_DOCUMENTATION","Documentação");
define("_AM_ADSLIGHT_FEATURES","Características");
define("_AM_ADSLIGHT_CLONE","Como clonar");
define("_AM_ADSLIGHT_INCOMPLETE","Incompleta");

// Ajouter par iLuc //
//Condition de paiement
define("_AM_ADSLIGHT_ADDUSURE", "Adicionar tipo de juros");
define("_AM_ADSLIGHT_MODUSURE", "Mudar tipo de juros");
define("_AM_ADSLIGHT_ADDUSURE2", "O tipo de juros foi adicionando");
define("_AM_ADSLIGHT_USUREMOD", "O padrão de juros mudado");
define("_AM_ADSLIGHT_USUREDEL", "O tipo de juros foi excluído");

//about.php
define("_AM_ADSLIGHT_ABOUT_AUTHOR","Autor");
define("_AM_ADSLIGHT_ABOUT_CHANGELOG","Mudança de registro");
define("_AM_ADSLIGHT_ABOUT_CREDITS","Créitos");
define("_AM_ADSLIGHT_ABOUT_LICENSE","Licença");
define("_AM_ADSLIGHT_ABOUT_MODULEINFOS","Módulo de Informações");
define("_AM_ADSLIGHT_ABOUT_MODULEWEBSITE","Suporte Web");
define("_AM_ADSLIGHT_ABOUT_RELEASEDATE","Data de publicação");
define("_AM_ADSLIGHT_ABOUT_STATUS","Status");

define("_AM_ADSLIGHT_PERSONS_PARTICIPATED","As pessoas envolvidas na melhoria do módulo");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_NAME","Nickname");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_WEBSITE","Site web");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_VERSION","Versão");
define("_AM_ADSLIGHT_PERSONS_PARTICIP_DESC","Descrição geral");

//groupperms.php 
define("_AM_ADSLIGHT_GPERM_G_ADD" , "Pode adicionar" ) ;
define("_AM_ADSLIGHT_CAT2GROUPDESC" , "Verificar as categorias que você pode acessar" );
define("_AM_ADSLIGHT_GROUPPERMDESC" , "Selecione o(s) grupo(s) autorizado(s) a apresentar os anúncios." );
define("_AM_ADSLIGHT_GROUPPERM", "Permissão para arquivo");
define("_AM_ADSLIGHT_SUBMITFORM", "Permissões para fazer uma lista");
define("_AM_ADSLIGHT_SUBMITFORM_DESC", "Selecione para quem poderá se exibido");
define("_AM_ADSLIGHT_VIEWFORM", "Permissões para ver os anúncios");
define("_AM_ADSLIGHT_VIEWFORM_DESC", "Selecione os grupos que poderão ver a lista");
define("_AM_ADSLIGHT_VIEW_RESUMEFORM_DESC", "Selecione os grupos que poderão mostrar resumos");
define("_AM_ADSLIGHT_SUPPORT", "Apoiar este programa");
define("_AM_ADSLIGHT_OP", "Leia  minha análise");
define("_AM_ADSLIGHT_PREMIUM_DESC", "Seleccione los grupos que puede seleccionar la duraci&oacute;n de la publicidad es");

//Release Test
define("_AM_ADSLIGHT_RELEASEOK", "Você está usando a versão mais recente do módulo.");
define("_AM_ADSLIGHT_RELEASEISNOTOK", "Seu módulo está obsoleto, uma nova versão está disponível.");
define("_AM_ADSLIGHT_RELEASEDOWNLOAD", "Download.");
define("_AM_ADSLIGHT_NBR_PHOTO","Foto(s)");

//Version 1.05
// Méta Description / keywords Categories
define("_AM_ADSLIGHT_CAT_META_DESCRIPTION","<b>Meta Descrição :</b><br/>Para uma melhor otimização</b> acrescentar aqui uma descrição precisa da sua classe. ");
define("_AM_ADSLIGHT_CAT_META_KEYWORDS","<b>Meta Palavras-chave :</b><br/>Para uma melhor otimização</b> adicionar palavras-chave aqui, em relação com a categoria.<br/><b><font color=\"#ff3300\">palavras separadas por vírgulas</font></b>. (Ex. inglês, espanha, frança,...)");

///Version 1.053
/// Test Maps Xml
define("_AM_ADSLIGHT_XMLNOTOK", "O arquivo XML não exist ou não está coincidindo com o cartão selecionado nas preferências.");
define("_AM_ADSLIGHT_XMLUPGRADE", "Atualizar arquivo XML");

/// Faire un Don
define("_AM_ADSLIGHT_FAIREUNDON", "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
<input type=\"hidden\" name=\"encrypted\" value=\"-----BEGIN PKCS7-----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-----END PKCS7-----
\">
<input type=\"image\" src=\"https://www.paypal.com/es_ES/ES/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal. A forma rápida e segura de pagar na Internet.\">
<img alt=\"\" border=\"0\" src=\"https://www.paypal.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
</form>");

?>