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


define("_ADSLIGHT_ADDON", "Adicionar a");
define("_ADSLIGHT_ANNONCES", "Anúncios");
define("_ADSLIGHT_LOGOLINK", "Módulo de Anúncios AdsLight");
define("_ADSLIGHT_MAIN", "Inicio");
define("_ADSLIGHT_ADDFROM", "Classificados grátis em: ");
define("_ADSLIGHT_NEWTOD", "Novas ofertas foram adicionadas nesta categoria hoje.");
define("_ADSLIGHT_NEWTRED", "Novas ofertas foram adicionados nesta categoria nos últimos 3 dias.");
define("_ADSLIGHT_NEWWEEK", "Novas ofertas foram adicionados nesta categoria durante a última semana.");
define("_ADSLIGHT_INTRO", "<b>Você pode adicionar seu(s) anúncio(s) gratuitamente.<br/> Basta clicar na categoria que você deseja adicionar<br/> Você verá um link (adicionar um pouco de anúncios nessa categoria)</b>");
define("_ADSLIGHT_PRICE", "Preço");
define("_ADSLIGHT_DATE", "Data");
define("_ADSLIGHT_TITLE", "Título");
define("_ADSLIGHT_CAT", "Categoria");
define("_ADSLIGHT_THE", "O");
define("_ADSLIGHT_LASTADD", "Anúncios Recentes");
define("_ADSLIGHT_PREV", "Anúncios Anteriores");
define("_ADSLIGHT_NEXT", "Anúncios Seguinte");
define("_ADSLIGHT_THEREIS", "Eles são:");
define("_ADSLIGHT_INTHISCAT", "Classificados desta categoria.");
define("_ADSLIGHT_AVAILAB", "Sub-categorias disponiveis:");
define("_ADSLIGHT_ADMINCADRE", "Administração");
define("_ADSLIGHT_WAIT", "Anúncios classificados em espera de aprovação");
define("_ADSLIGHT_NO_CLA", "Não há anúncios em espera de aprovação");
define("_ADSLIGHT_SEEIT", "Mostrar anúncios em espera");
define("_ADSLIGHT_LOCAL", "Cidade:");
define("_ADSLIGHT_LOCAL2", "Localização");
define("_ADSLIGHT_ANNFROM", "Anúncios:");
define("_ADSLIGHT_ADDED", "Adicionado");
define("_ADSLIGHT_GORUB", "Ir para");
define("_ADSLIGHT_DATE2", "Adicionado em");
define("_ADSLIGHT_SUPPRANN", "Eliminar seu anúncio");
define("_ADSLIGHT_MODIFANN", "Editar seu anúncio");
define("_ADSLIGHT_PHOTO", "Foto");
define("_ADSLIGHT_VIEW", "Vistas");
define("_ADSLIGHT_CONTACT", "Contato");
define("_ADSLIGHT_BYMAIL2", "E-mail");

define("_ADSLIGHT_CONTACTBYMP", "Mensagem Privada");
define("_ADSLIGHT_STOP2", "O prazo para colocar o seu anúncio classificado:");
define("_ADSLIGHT_STOP3", "Prazo final, foi eliminado");
define("_ADSLIGHT_VU2", "Este");
define("_ADSLIGHT_OTHER", "Se você deseja colocar um outro anúncio");
define("_ADSLIGHT_THANK", "Obrigado por usar nosso serviço de Classificados.");
define("_ADSLIGHT_TEAM", "Equipe");
define("_ADSLIGHT_ACTUALY", "Há");
define("_ADSLIGHT_ADVERTISEMENTS", "Anúncios ativos");
define("_ADSLIGHT_MODADMIN", "Modificar este anúncio (administrador)");
define("_ADSLIGHT_AND", "e");
define("_ADSLIGHT_WAIT3", "Anúncio(s) com aprovação pendente(s)");
define("_ADSLIGHT_CREATBY", "Foi escrito por");
define("_ADSLIGHT_FOR", "Para");
define("_ADSLIGHT_OF", "De");
define("_ADSLIGHT_VIEW2", "Vistas");
define("_ADSLIGHT_VIEWANN2", "Ver seu anúncio");
define("_ADSLIGHT_ACCESADMIN", "Acessar Administração");
define("_ADSLIGHT_NOANNINCAT", "Não há anúncios nesta categoria");
define("_ADSLIGHT_INCAT", "Em");
define("_ADSLIGHT_CAT2", "Categorias");
define("_ADSLIGHT_DESC", "Descrição");
define("_ADSLIGHT_ADDANNONCE2", "Adicionar um anúncio nesta categoria");
define("_ADSLIGHT_ADDANNONCE3", "Adicionar Anúncio");
define("_ADSLIGHT_ANNMODERATE","Your Classified Ad will be queued for approval and once approved, will run for");
define("_ADSLIGHT_NOBIZ","Business Advertising Not Allowed");
define("_ADSLIGHT_REDIRECT_BIZ","View our Business Rates");
define("_ADSLIGHT_ANNMODERATE", "Seu anúncio está pendente de aprovação e uma vez aprovada, ela irá durar.");
define("_ADSLIGHT_NOBIZ", "Publicidade não autorizada");
define("_ADSLIGHT_REDIRECT_BIZ", "Veja nossa tarifa comercial");
define("_ADSLIGHT_ANNNOMODERATE", "O anúncio vai começar imediatamente e vai durar.");
define("_ADSLIGHT_FORMEMBERS2", "Todos os anúncios são reservados para os membros.<br/> Registe-se ou faça login se você já for um membro.");
define("_ADSLIGHT_OR", "Ou");
define("_ADSLIGHT_DAY", "Dias");
define("_ADSLIGHT_CAT3", "Categoria");
define("_ADSLIGHT_TITLE2", "Título:");
define("_ADSLIGHT_TYPE", "Tipo de anúcio:");
define("_ADSLIGHT_TYPE_USURE", "O status de juros:");
define("_ADSLIGHT_NOTYPE", "Sem Tipo");
define("_ADSLIGHT_CLASSIFIED_AD", "Anúncios");
define("_ADSLIGHT_CHARMAX", "(255 caracteres máximo)");
define("_ADSLIGHT_IMG", "Adicionar uma imagem:");
define("_ADSLIGHT_IMG2", "Adicionar uma segunda imagem:");
define("_ADSLIGHT_IMG3", "Adicionar uma terceira imagem:");
define("_ADSLIGHT_PRICE2", "Preço:");
define("_ADSLIGHT_EMAIL", "E-mail:");
define("_ADSLIGHT_TEL", "Telefone:");
define("_ADSLIGHT_TOWN", "Cidade:");
define("_ADSLIGHT_COUNTRY", "País:");
define("_ADSLIGHT_VALIDATE", "OK");
define("_ADSLIGHT_SELECTYPE", "Seleciona o tipo de anúncios classificado:");
define("_ADSLIGHT_SELECTCAT", "Selecione uma categoria:");
define("_ADSLIGHT_SELECTYPOTHER", "Outro tipo");
define("_ADSLIGHT_SELECTCATOTHER", "Outras categorias:");
define("_ADSLIGHT_RETURN", "Voltar");
define("_ADSLIGHT_FILES", "Os arquivos com extensão:");
define("_ADSLIGHT_FILESTOP", "Não pode ser transferido. Enviar Ordem");
define("_ADSLIGHT_YIMG", "Sua imagem");
define("_ADSLIGHT_TOBIG", "É muito grande.<p> Use a função. <b>Página anterior</b> Voltar para o formulário de envio de arquivo.");
define("_ADSLIGHT_ADSADDED", "Seu anúncio foi adicionado.");
define("_ADSLIGHT_PRINT", "Imprimir este anúncio");
define("_ADSLIGHT_FRIENDSEND", "Enviar anúncio a um amigo(a).");
define("_ADSLIGHT_IMGPISP", "Foto disponivel");
define("_ADSLIGHT_VALIDERORMSG", "Há erros que está evitando que seu anúncio sej salvo!");
define("_ADSLIGHT_VALIDTITLE", "O título é necessário.");
define("_ADSLIGHT_VALIDTYPE", "O tipo é necessário.");
define("_ADSLIGHT_VALIDCAT", "A classe é obrigatória.");
define("_ADSLIGHT_VALIDANN", "Descrição da empresa é obrigatório.");
define("_ADSLIGHT_VALIDTOWN", "A cidade é necessário.");
define("_ADSLIGHT_VALIDEMAIL", "O E-mail é obligatório.");
define("_ADSLIGHT_VALIDSUBMITTER", "O nome é obrigatório.");
define("_ADSLIGHT_VALIDMSG", "Por favor, corrija os erros de registro de sua empresa.");
	


// display-image.php //
define("_ADSLIGHT_CLOSEF", "Fechar esta janela.");
	
// listing-p-f.php //
define("_ADSLIGHT_EXTRANN", "Este anúncio está no site");
define("_ADSLIGHT_SENDTO", "<b>Enviar anúncio para um amigo(a)</b><br><br>Pode enviar a lista não;");
define("_ADSLIGHT_FRIEND", "a um amigo(a):");
define("_ADSLIGHT_NAME", "Seu nome:");
define("_ADSLIGHT_MAIL", "Seu Email:");
define("_ADSLIGHT_NAMEFR", "Nome do amigo(a):");
define("_ADSLIGHT_MAILFR", "Email do amigo(a):");
define("_ADSLIGHT_SENDFR", "Enviar");
define("_ADSLIGHT_ANNSEND", "O anúncio selecionado foi enviado");
define("_ADSLIGHT_SUBJET", "Um anúncio interesante");
define("_ADSLIGHT_HELLO", "Olá");
define("_ADSLIGHT_MESSAGE", "Considerou que você poderia estar interessado no anúncio e enviou a seguinte mensagem.");
define("_ADSLIGHT_INTERESS", "Outros anúncios podem ser visto em");
define("_ADSLIGHT_TEL2", "Telefone:");
define("_ADSLIGHT_BYMAIL", "Email:");
define("_ADSLIGHT_DISPO", "Expira:");
define("_ADSLIGHT_NOMAIL", "Não fornecer aos usuarios o e-mail dos anunciantes.<br/>Para contatá-los por e-mail, por favor use o formulário de contato em nosso site.<br/>Você pode ler o anúncio, no seguinte endereço: ");

// modify.php //
define("_ADSLIGHT_OUI", "Sim");
define("_ADSLIGHT_NON", "Não");
define("_ADSLIGHT_SURDELANN", "CUIDADO<br/><br/> Tem certeza que deseja excluir este anúncio?");
define ( "_RETURNANN", "Voltar para lista de anúncios classificados.");
define("_ADSLIGHT_ANNDEL", "O(s) anúncio(s) selecionado(s) foram excluído(s)");
define("_ADSLIGHT_ANNMOD2", "O(s) anúncio(s) selecionado(s) foram modificados(s)");
define("_ADSLIGHT_NOMODIMG", "O seu anúncio inclui uma foto <br/> (fotos não podem ser alteradas)");
define("_ADSLIGHT_DU", "Adicionado:");
define("_ADSLIGHT_MODIFBEFORE", "As alterações no anúncio deverá ser aprovado pelo administrador, e será colocado em fila para aprovação.");
define("_ADSLIGHT_SENDBY", "Adicionado por:");
define("_ADSLIGHT_NUMANNN", "Sem anúncios");
define("_ADSLIGHT_NEWPICT", "Nova imagen:");
define("_ADSLIGHT_ACTUALPICT", "Atualizar a imagem:");
define("_ADSLIGHT_DELPICT", "Excluir imagem");
   
// contact.php //

define("_ADSLIGHT_CONTACTAUTOR", "Contatar o autor deste anúncio.");
define("_ADSLIGHT_TEXTAUTO", "A mensagem é enviada automaticamente com os três primeiros campos, o seu nome, o e-mail e número de telefone, você não precisa re-introduzir a sua mensagem.");
define("_ADSLIGHT_YOURNAME", "Seu nome:");
define("_ADSLIGHT_YOUREMAIL", "Seu email:");
define("_ADSLIGHT_YOURPHONE", "Seu telefone:");
define("_ADSLIGHT_YOURMESSAGE", "Sua mensagem:");
define("_ADSLIGHT_VALIDMESS", "É necesário escreverr una mensagem.");
define("_ADSLIGHT_MESSEND", "Sua mensagem foi enviada ...");
define("_ADSLIGHT_CLASSIFIED", "Anúncios");
define("_ADSLIGHT_FROM", "A partir de");
// formulaire de contact IP
define("_ADSLIGHT_YOUR_IP", "Seu endereço IP é");
define("_ADSLIGHT_IP_LOGGED", "Foi gravado! As medidas serão tomadas contra qualquer abuso deste sistema ");

// message //
define("_ADSLIGHT_CONTACTAFTERANN", "Em resposta a seu anúncio classificado");
define("_ADSLIGHT_MESSFROM", "Mensagem:");
define("_ADSLIGHT_FROMANNOF", "Anúncios em:");
define("_ADSLIGHT_REMINDANN", "Em resposta a seu anúncio em:");
define("_ADSLIGHT_STARTMESS", "Você encontrará abaixo a resposta ao seu anúncio.");
define("_ADSLIGHT_ENDMESS ","!!! Não responda a este e-mail. Se você quer responder ao remetente, utilize os contactos acima. !!!");
define("_ADSLIGHT_CANJOINT", "Pode responder");
define("_ADSLIGHT_TO", "Para contatar:");
define("_ADSLIGHT_ORAT", "ou:");
define("_ADSLIGHT_NOMAIL2", "Não fornecer aos usuários o email dos anunciantes. Para entrar em contato pelo e-mail, por favor use o formulário de contato em nosso site. Você pode responder ao apelo no seguinte endereço:");
define("_ADSLIGHT_MESSAGE_END", "Fim da mensagem.");
define("_ADSLIGHT_SECURE_SEND", "Esta mensagem foi enviada através de um formulário de contato seguro, o remetente não sabe o seu endereço de e-mail.");
// Message de fin //
define("_ADSLIGHT_HOW_LONG", "Hora de saída:");
define("_ADSLIGHT_WILL_LAST", "Este anúncio vai durar:");
// Pour les recherches sur la page d'index
define("_ADSLIGHT_SEARCHRESULTS", "Resultados da busca de anúncios");
define("_ADSLIGHT_SEARCH_LISTINGS", "Busca de anúncios:");
define("_ADSLIGHT_ALL_WORDS", "Todas as palavras");
define("_ADSLIGHT_ANY_WORDS", "Qualquer das palavras");
define("_ADSLIGHT_EXACT_MATCH", "Frase exata");
define("_ADSLIGHT_ONLYPIX", "Mostrar apenas <br/> Anúncio com foto");
define("_ADSLIGHT_SEARCH", "Busca");
define("_ADSLIGHT_REQUIRED", "* Requerido");
define("_ADSLIGHT_MY_ADS", "Todos os anúncios");
define("_ADSLIGHT_VIEW_MY_ADS", "Os anúncios");
define("_ADSLIGHT_COMMENTS_HEAD", "<h3>Comentários sobre esta loja:</h3>");
define("_ADSLIGHT_PREMIUM_DAY", "<b> Dias, se não mudar a forma como mostrado abaixo. </B>");
define("_ADSLIGHT_PREMIUM_LONG_HEAD", "<b> A partir de seu anúncio imediatamente </b>");
define("_ADSLIGHT_PREMIUM_MEMBER", "<b> Como você é um membro, oferecemos um bônus, você pode escolher a duração do seu anúncio. <br/> <br/> Durará </b>");
define("_ADSLIGHT_PREMIUM_MODERATED_HEAD", "<b> Seu anúncio está pendente de aprovação </b>");

define("_ADSLIGHT_TOPRATED", "Top popularidade");
define("_ADSLIGHT_RATINGC", "Nota:");
define("_ADSLIGHT_ONEVOTE", "1 voto");
define("_ADSLIGHT_NUMVOTES", " %s votos");
define("_ADSLIGHT_RATETHIS", "Avalie este usuario");
define("_ADSLIGHT_VOTEAPPRE", "Agradecemos o seu voto.");
define("_ADSLIGHT_THANKURATE", "Obrigado por tomar o tempo para avaliar este usuário %s.");
define("_ADSLIGHT_VOTEFROMYOU", "As contribuições de usuários como você, vai ajudar outros visitantes melhor decidir o seu anúncio.");
define("_ADSLIGHT_VOTEONCE", "Por favor, não vote para o mesmo mais de uma vez.");
define("_ADSLIGHT_RATINGSCALE", "A escala é de 1a 10, sendo 1 o mais baixo e 10 sendo excelente.");
define("_ADSLIGHT_BEOBJECTIVE", "Por favor, seja objetivo, se todos receberem 1 ou 10, as avaliações são muito úteis.");
define("_ADSLIGHT_DONOTVOTE", "Não vote para seu próprio anúncio.");
define("_ADSLIGHT_RATEIT", "Vote!");
define("_ADSLIGHT_RATING", "Avaliação");
define("_ADSLIGHT_VOTE", "Voto");
define("_ADSLIGHT_NORATING", "Não foi selecionado.");
define("_ADSLIGHT_CANTVOTEOWN", "Você não pode votar nos anúncios que você enviou. <br/> Todos os votos são identificados e analizados.");
define("_ADSLIGHT_VOTEONCE2", "Não vote para a lista, selecione uma vez. <br/> Todos os votos são identificados e analizados.");
define("_ADSLIGHT_TOTALVOTES", "Avaliação de Anuncios (Total de votos: %s)");
define("_ADSLIGHT_USERTOTALVOTES", "Votos de usuarios registrados (Total de votos: %s)");
define("_ADSLIGHT_ANONTOTALVOTES", "Votos de usuarios anônimos (Total de votos: %s)");
define("_ADSLIGHT_USERAVG", "AVG Avaliação do Usuário");
define("_ADSLIGHT_TOTALRATE", "Total de votos");
define("_ADSLIGHT_NOREGVOTES", "Votos de usuarios registrados");
define("_ADSLIGHT_NOUNREGVOTES", "Não há votos para os usuários não registrados");
define("_ADSLIGHT_VOTEDELETED", "Dados de voto excluído.");
define("_ADSLIGHT_USER_RATING", "Avaliação: ");
define("_ADSLIGHT_RATETHISUSER", "Avaliar este usuario");
define("_ADSLIGHT_THANKURATEUSER", "Obrigado por tomar o tempo para avaliar este usuário %s.");
define("_ADSLIGHT_RATETHISITEM", "Vota neste anúncio");
define("_ADSLIGHT_THANKURATEITEM", "Obrigado por tomar o tempo para avaliar o anúncio aqui em  %s.");
define("_ADSLIGHT_MY_PRICE", "Preço (Â€)");
define("_ADSLIGHT_MY_DATE", "Data");
define("_ADSLIGHT_MY_TITLE", "Título");
define("_ADSLIGHT_MY_LOCAL2", "Localização");
define("_ADSLIGHT_MY_VIEW", "Popular");
define("_ADSLIGHT_SORTBY", "Ordenar por:");
define("_ADSLIGHT_CURSORTEDBY", "Anúncios classificados por: %s");
define("_ADSLIGHT_POPULARITYLTOM", "Popularidade (Menos visitas)");
define("_ADSLIGHT_POPULARITYMTOL", "Popularidade (Mais vistos)");
define("_ADSLIGHT_TITLEATOZ", "Título (A a Z)");
define("_ADSLIGHT_TITLEZTOA", "Título (Z a A)");
define("_ADSLIGHT_DATEOLD", "Data (do mais antigo para o mais novo)");
define("_ADSLIGHT_DATENEW", "Data (mais recente para a mais antiga)");
define("_ADSLIGHT_RATINGLTOH", "Avaliação (do menor para o mayor)");
define("_ADSLIGHT_RATINGHTOL", "Classificação (da maior a menor pontuação)");
define("_ADSLIGHT_PRICELTOH", "Preço (do menor para o maior)");
define("_ADSLIGHT_PRICEHTOL", "Preço (do maior para o menor)");
define("_ADSLIGHT_POPULARITY", "Popularidade");
define("_ADSLIGHT_ACTUALPICT2", "Segunda atualização de imagem:");
define("_ADSLIGHT_ACTUALPICT3", "Terceira atualização de imagem:");
define("_ADSLIGHT_NEWPICT2", "Nova imagen da segunda:");
define("_ADSLIGHT_NEWPICT3", "Nova imagen de terceiros:");
define("_ADSLIGHT_SELECT_CONTACTBY", "Escolha uma opção");
define("_ADSLIGHT_CONTACTBY", "por:");
define("_ADSLIGHT_CONTACT_BY_EMAIL", "E-mail");
define("_ADSLIGHT_CONTACT_BY_PM", "Mensagem privado (PM)");
define("_ADSLIGHT_CONTACT_BY_BOTH", "Ambos E-mail ou PM");
define("_ADSLIGHT_CONTACT_BY_PHONE", "Por telefone apenas");
define("_ADSLIGHT_ORBY", "ou por:");
define("_ADSLIGHT_PREMYOUHAVE", "Você tem %s em seu anúncio.");
define("_ADSLIGHT_YOUHAVE", "Você tem %s foto(s) em seu anúncio.");
define("_ADSLIGHT_YOUCANHAVE", "Como um membro Premium, você pode ter até %s foto(s).");
define("_ADSLIGHT_BMCANHAVE", "Como um membro padrão, você só pode ter %s foto(s).");
define("_ADSLIGHT_UPGRADE_NOW", "Atualizar para um membro Premium");
define("_ADSLIGHT_DELETE", "Excluirr");
define("_ADSLIGHT_EDITDESC", "Editar descrição");
define("_ADSLIGHT_TOKENEXPIRED", "[Segurança] Você excedeu o tempo permitido para inserir seu anúncio. <br/> Voltar para tentar novamente");
define("_ADSLIGHT_DESC_EDITED", "A descrição da imagem foi publicada com sucesso");
define("_ADSLIGHT_DELETED", "A imagem foi excluída com sucesso");
define("_ADSLIGHT_SUBMIT_PIC_TITLE", "Enviar uma foto para seu anúncio");
define("_ADSLIGHT_SELECT_PHOTO", "Selecione a foto");
define("_ADSLIGHT_CAPTION", "Legenda");
define("_ADSLIGHT_UPLOADPICTURE", "Download");
define("_ADSLIGHT_YOUCANUPLOAD", "Você pode enviar arquivos JPG, com um tamanho máximo de %s Kb");
define("_ADSLIGHT_ALBUMTITLE", " Anúncio %s ");
define("_ADSLIGHT_WELCOME", "Bem-vindo ao álbum de fotos do seu anúncio");
define("_ADSLIGHT_NOTHINGYET", "Não há fotos neste álbum");
define("_ADSLIGHT_NOCACHACA", "Desculpe, não temos acesso a este serviço");
define("_ADSLIGHT_ADD_PHOTOS", "Adicionar foto");
define("_ADSLIGHT_SHOWCASE", "Galeria");
define("_ADSLIGHT_EDIT_CAPTION", "Editar legenda");
define("_ADSLIGHT_EDIT", "Editar");
define("_ADSLIGHT_SUBMITTER", "Nome:");
define("_ADSLIGHT_ADD_LISTING", "Adicionar anúncio");
define("_ADSLIGHT_SUBMIT", "OK");
define("_ADSLIGHT_PRICETYPE", "Seu preço da publicação é:");
define("_ADSLIGHT_ADD_PHOTO_NOW", "Adicione uma foto agora?");
define("_ADSLIGHT_ACTIVE", "Ativo");
define("_ADSLIGHT_INACTIVE", "Inativo");
define("_ADSLIGHT_SOLD", "Limitado");
define("_ADSLIGHT_STATUS", "Status");
define("_ADSLIGHT_REPLIES", "Respostas");
define("_ADSLIGHT_EXPIRES_ON", "Vencimento");
define("_ADSLIGHT_ADDED_ON", "Adicionado");
define("_ADSLIGHT_REPLY_MESSAGE", "Mensagem");
define("_ADSLIGHT_REPLIED_ON", "Enviar:");
define("_ADSLIGHT_VIEWNOW", " Exibir agora");
define("_ADSLIGHT_REPLY_TITLE", "Mensagens recebidas para o anúncio:");
define("_ADSLIGHT_ALL_USER_LISTINGS", "Todos os anúncios ");
define("_ADSLIGHT_REPLY", "Resposta -");
define("_ADSLIGHT_PAGES", "Página -");
define("_ADSLIGHT_REALNAME", "Nome");
define("_ADSLIGHT_VIEW_YOUR_LISTINGS", "Ver anúncios");
define("_ADSLIGHT_REPLIED_BY", "Mensagem:");
define("_ADSLIGHT_DELETE_REPLY", "Excluirar esta resposta");
define("_ADSLIGHT_NO_REPLIES", "Não há uma resposta");
define("_ADSLIGHT_THANKS", "Obrigado por usar nosso serviço de Classificados");
define("_ADSLIGHT_WEBMASTER", "Webmaster");
define("_ADSLIGHT_YOUR_AD", "Seu anúncio");
define("_ADSLIGHT_AT", "Para;");
define("_ADSLIGHT_VEDIT_AD", "Ver ou editar seu anúncio aqui");
define("_ADSLIGHT_ALMOST", "Seu anúncio está prestes a expirar");
define("_ADSLIGHT_EXPIRED", "Seu anúncio expirou e foi excluído.");
define("_ADSLIGHT_YOUR_AD_ON", "Você anunciou em");
define("_ADSLIGHT_VU", "Seu anúncio foi visto");
define("_ADSLIGHT_TIMES", "Vezes.");
define("_ADSLIGHT_STOP", "Seu anúncio expirou:");
define("_ADSLIGHT_SOON", "Seu anúncio vai expirar em breve.");
define("_ADSLIGHT_MUSTLOGIN", "Você deve estar conectado <br/> responder a este anúncio.");
define("_ADSLIGHT_VIEW_AD", "Ver seu anúncio");
define("_ADSLIGHT_MORE_PHOTOS", "Ver mais fotos");
define("_ADSLIGHT_CANCEL", "Cancelar");
define("_ADSLIGHT_ADDED_TO_CAT","Uma nova lista foi adicionado à categoria de ");
define("_ADSLIGHT_RECIEVING_NOTIF","Você se inscreveu para receber essas notificações.");
define("_ADSLIGHT_ERROR_NOTIF","Se isto é um erro ou você não quiser mais receber essas notificações, atualize sua inscrição acessando o seguinte link:");
define("_ADSLIGHT_FOLLOW_LINK","Aqui está um link para a nova lista");
define("_ADSLIGHT_YOU_CAN_VIEW_BELOW", "Você pode ver o anúncio completo no link abaixo");
define("_ADSLIGHT_LISTING_NUMBER","Anúncio Nº ");

define("_ADSLIGHT_NOREPLY", "!!!  Não responda a este e-mail, você não receberá uma resposta. !");
define("_ADSLIGHT_CAPTCHA", "Código de Segurança :");

define("_ADSLIGHT_NEW_WAITING_SUBJECT","Novo anúncio pendente.");
define("_ADSLIGHT_NEW_WAITING","Há uma nova lista a espera de ser moderada.");
define("_ADSLIGHT_PLEASE_CHECK","Clique na URL a seguir para verificar essa informação.");
define("_ADSLIGHT_ADMIN","Administrador");
define("_ADSLIGHT_NEWAD","O novo anúncio está logo abaixo.");
define("_ADSLIGHT_NEED_TO_LOGIN","Você deve está conectado");


////Agregado por iLuc////
define("_ADSLIGHT_PROFILE","Perfil de: ");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU1","Listados");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU2","Enviar");
define("_ADSLIGHT_MI_ADSLIGHT_SMENU3","Busca");

//viewads.php
define("_ADSLIGHT_ALERTEABUS","Reportar Abuso");
define("_ADSLIGHT_CONTACT_SUBMITTER","Contato");
define("_ADSLIGHT_SENDFRIENDS", "Enviar este anúncio");

//report-abuse.php
define("_ADSLIGHT_REPORTSENDTO", "<b>Denunciar este anúncio:</b><br/><br/>Anúncio nº ");
define("_ADSLIGHT_REPORTANNSEND", "Obrigado pela sua ajuda!<br/>O anúncio acaba de ser comunicado à administração.");
define("_ADSLIGHT_REPORTSUBJET", "[Alerta] Um anúncio indesejável ");
define("_ADSLIGHT_REPORTMESSAGE", "Considera que este aviso é ilegal e que você queria saber.");

//index.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULL", "Para adicionar uma lista de<br />Por favor ");
define("_ADSLIGHT_ADD_LISTING_SUB", "registro");
define("_ADSLIGHT_ADD_LISTING_BULLOK", "Você pode adicionar o<br />anúncio: ");
define("_ADSLIGHT_ADD_LISTING_SUBOK", "Clique aqui");

//index.php >> Title Menu //
define("_ADSLIGHT_ADD_TITLEMENU1", "Editar / excluir seus anúncios, ou também os relatados como [Reservados]...");
define("_ADSLIGHT_ADD_TITLEMENU2", "Publicar um anúncio grátis, se você pode navegar pelas categorias.");
define("_ADSLIGHT_ADD_TITLEMENU4", "Todas as dicas para escrever anúncios.");
define("_ADSLIGHT_ADD_TITLEMENU5", "Busca Cyble ou busca em sua área.");
define("_ADSLIGHT_ADD_TITLEMENU6", "Ler e escrever mensagens.");
define("_ADSLIGHT_ADD_TITLEMENU7", "Você tem uma nova mensagem");
define("_ADSLIGHT_ADD_TITLEMENU8", "Você deve estar logado para ler as suas mensagens.");
define("_ADSLIGHT_ADD_TITLEMENU9", "Você deve estar logado para ver seu perfil.");
define("_ADSLIGHT_ADD_TITLEMENU10", "Exibir ou editar seu perfil aqui.");

//viewcats.php >> Infos Bulle //
define("_ADSLIGHT_ADD_LISTING_BULLCATS", "Você pode adicionar os<br />anúncios nsta categoria<br />");
define("_ADSLIGHT_ADD_LISTING_BULLCATSOK", "Para adicionar um ou<br />mais anúncios nesta categori<br />Por favor ");

// Reservados
define("_ADSLIGHT_RESERVED", "Reservado");

// tips_writing_ad.php
define("_ADSLIGHT_TIPSWRITE", "Todos os conselhos<br />para escrever seus anúncios");
define("_ADSLIGHT_TIPSWRITE_TITLE", "Dicas para escrever seu anúncio");

define("_ADSLIGHT_TIPSWRITE_TEXT", " sçfksçdkfçlsdf sdfksdjkfsd fsdifjsdfjsdiowoerower werioweroiwer weriowe");

//version 1.053
// maps.php
define("_ADSLIGHT_MAPS_TITLE", "Busca por região");
define("_ADSLIGHT_MAPS_TEXT", "Selecione uma região no mapa<br />para ver os anúncios de uma região.");

//viewads.php
define("_ADSLIGHT_NOCLAS", "Atualmente não há anúncios<br />nesta categoria...");

?>