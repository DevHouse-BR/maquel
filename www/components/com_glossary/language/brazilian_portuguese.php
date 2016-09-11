<?php

// English language file for Glossary component
// Model code: if (!defined('')) define ('', '');
// First list standard definitions needed for cmsapi to function properly
if (!defined('_CMSAPI_CPANEL_RETURN')) define ('_CMSAPI_CPANEL_RETURN', 'Painel de Controle');
if (!defined('_CMSAPI_DISPLAY_NUMBER')) define ('_CMSAPI_DISPLAY_NUMBER', '?');
if (!defined('_CMSAPI_YES')) define ('_CMSAPI_YES', 'Sim');
if (!defined('_CMSAPI_NO')) define ('_CMSAPI_NO', 'Não');
if (!defined('_CMSAPI_CANCEL')) define ('_CMSAPI_CANCEL', 'Cancelar');
if (!defined('_CMSAPI_CONFIG_COMP')) define ('_CMSAPI_CONFIG_COMP', 'Configuração Salva');
if (!defined('_CMSAPI_CLASS_NOT_PRESENT')) define ('_CMSAPI_CLASS_NOT_PRESENT', 'Erro de Componente %s: tentativa de usar uma classe não existente %s');
if (!defined('_CMSAPI_METHOD_NOT_PRESENT')) define ('_CMSAPI_METHOD_NOT_PRESENT', 'Component %s error: requested task %s but no suitable method in class %s');
if (!defined('_CMSAPI_DISPLAY_NUMBER')) DEFINE('_CMSAPI_DISPLAY_NUMBER','Mostrar #');
if (!defined('_CMSAPI_PAGE_TEXT')) DEFINE ('_CMSAPI_PAGE_TEXT', 'Página');
if (!defined('_CMSAPI_PAGE_SHOW_RESULTS')) DEFINE('_CMSAPI_PAGE_SHOW_RESULTS','Mostrar resultados ');
if (!defined('_CMSAPI_PAGE_SHOW_RANGE')) DEFINE('_CMSAPI_PAGE_SHOW_RANGE','%s até %s de %s');
if (!defined('_CMSAPI_PREVIOUS')) define ('_CMSAPI_PREVIOUS', 'Anterior');
if (!defined('_CMSAPI_NEXT')) define ('_CMSAPI_NEXT', 'Próxima');
// Component specific definitions follow
if (!defined('_GLOSSARY_LIST_ENTRIES')) define ('_GLOSSARY_LIST_ENTRIES', 'Lista Entradas');
if (!defined('_GLOSSARY_LIST_GLOSSARIES')) define ('_GLOSSARY_LIST_GLOSSARIES', 'Lista Glossários');
if (!defined('_GLOSSARY_EDIT_ENTRIES')) define ('_GLOSSARY_EDIT_ENTRIES', 'Edita Entradas');
if (!defined('_GLOSSARY_EDIT_GLOSSARIES')) define ('_GLOSSARY_EDIT_GLOSSARIES', 'Edita Glossários');
if (!defined('_GLOSSARY_EDIT_CONFIG')) define ('_GLOSSARY_EDIT_CONFIG', 'Edita Configuração');
if (!defined('_GLOSSARY_USER_CONFIG')) define ('_GLOSSARY_USER_CONFIG', 'Usuário');
if (!defined('_GLOSSARY_ADMIN_CONFIG')) define ('_GLOSSARY_ADMIN_CONFIG', 'Admin');
if (!defined('_GLOSSARY_ABOUT_HEADING')) define ('_GLOSSARY_ABOUT_HEADING', 'Informações Gerais');
if (!defined('_GLOSSARY_GLOSSARY_LIST')) define ('_GLOSSARY_GLOSSARY_LIST', 'Outros Glossários Disponíveis aqui');
if (!defined('_GLOSSARY_FILTER_TERM')) define ('_GLOSSARY_FILTER_TERM', 'Termo de Filtro (use expressões regulares):');
if (!defined('_GLOSSARY_FILTER_DEFINITION')) define ('_GLOSSARY_FILTER_DEFINITION', 'Definições de Filtro (palavras, booleano opcional):');
if (!defined('_GLOSSARY_ALL_GLOSSARIES')) define ('_GLOSSARY_ALL_GLOSSARIES', 'Todos os Glossários');
if (!defined('_GLOSSARY_REFRESH')) define ('_GLOSSARY_REFRESH', 'Recarregar Página');
// Glossary entry headings
if (!defined('_GLOSSARY_TERM')) define ('_GLOSSARY_TERM', 'Termo');
if (!defined('_GLOSSARY_LETTER')) define ('_GLOSSARY_LETTER', 'Letra (opcional)');
if (!defined('_GLOSSARY_DEFINITION')) define ('_GLOSSARY_DEFINITION', 'Definição');
if (!defined('_GLOSSARY_DATE')) define ('_GLOSSARY_DATE', 'Data');
if (!defined('_GLOSSARY_PUBLISHED')) define ('_GLOSSARY_PUBLISHED', 'Publicado');
if (!defined('_GLOSSARY_NAME')) define ('_GLOSSARY_NAME', 'Nome');
if (!defined('_GLOSSARY_DESCRIPTION')) define ('_GLOSSARY_DESCRIPTION', 'Descrição do Glossário');
if (!defined('_GLOSSARY_GLOSSARY_SELECT')) define ('_GLOSSARY_GLOSSARY_SELECT', 'Selecione o Glossário');
// Glossary entry edit labels - admin side
if (!defined('_GLOSSARY_AUTHOR_NAME')) define ('_GLOSSARY_AUTHOR_NAME', 'Nome do Autor');
if (!defined('_GLOSSARY_LOCALITY')) define ('_GLOSSARY_LOCALITY', 'Localidade do Autor');
if (!defined('_GLOSSARY_MAIL')) define ('_GLOSSARY_MAIL', 'Email do Autor');
if (!defined('_GLOSSARY_PAGE')) define ('_GLOSSARY_PAGE', 'Home Page do Autor');
if (!defined('_GLOSSARY_COMMENT')) define ('_GLOSSARY_COMMENT', 'Comentário');
// Glossary entry edit labels - user side
if (!defined('_GLOSSARY_USER_LOCALITY')) define ('_GLOSSARY_USER_LOCALITY', 'Sua Localidade');
if (!defined('_GLOSSARY_USER_MAIL')) define ('_GLOSSARY_USER_MAIL', 'Seu eMail');
if (!defined('_GLOSSARY_USER_NAME')) define ('_GLOSSARY_USER_NAME', 'Seu nome');
if (!defined('_GLOSSARY_USER_URI')) define ('_GLOSSARY_USER_URI', 'Sua homepage');
if (!defined('_GLOSSARY_USER_SUBMIT')) define ('_GLOSSARY_USER_SUBMIT', 'Enviar');
if (!defined('_GLOSSARY_USER_CLEAR')) define ('_GLOSSARY_USER_CLEAR', 'Limpar');
// Glossary item listing headings etc
if (!defined('_GLOSSARY_TERM_HEAD')) define ('_GLOSSARY_TERM_HEAD', 'Termo');
if (!defined('_GLOSSARY_DEFINITION_HEAD')) define ('_GLOSSARY_DEFINITION_HEAD', 'Definição');
if (!defined('_GLOSSARY_ITEM_COUNT')) define ('_GLOSSARY_ITEM_COUNT', 'Existem %d entradas neste glossário.');
if (!defined('_GLOSSARY_IS_EMPTY')) define ('_GLOSSARY_IS_EMPTY', 'Esta seção não tem registros.');
if (!defined('_GLOSSARY_ADD_ENTRY')) define ('_GLOSSARY_ADD_ENTRY', 'Adicione novo registro');
// Glossary search texts
if (!defined('_GLOSSARY_SEARCH_INTRO')) define ('_GLOSSARY_SEARCH_INTRO', 'Busca por termos no Glossário (Permite expressões regulares)');
if (!defined('_GLOSSARY_BEGINS_WITH')) define ('_GLOSSARY_BEGINS_WITH', 'Começa com');
if (!defined('_GLOSSARY_TERM_CONTAINS')) define ('_GLOSSARY_TERM_CONTAINS', 'Contém');
if (!defined('_GLOSSARY_EXACT_TERM')) define ('_GLOSSARY_EXACT_TERM', 'Termo Exato');
if (!defined('_GLOSSARY_SEARCH_SEARCH')) define ('_GLOSSARY_SEARCH_SEARCH', 'busca...');
if (!defined('_GLOSSARY_GO')) define ('_GLOSSARY_GO', 'OK');
// Definitions of glossary configuration items
if (!defined('_GLOSSARY_UTF8')) define ('_GLOSSARY_UTF8', 'Selecione UTF-8:');
if (!defined('_GLOSSARY_PER_PAGE')) define ('_GLOSSARY_PER_PAGE', 'Entradas por página:');
if (!defined('_GLOSSARY_ALLOWENTRY')) define ('_GLOSSARY_ALLOWENTRY', 'Permite Entradas:');
if (!defined('_GLOSSARY_ANONENTRY')) define ('_GLOSSARY_ANONENTRY', 'Entradas Anônimas:');
if (!defined('_GLOSSARY_HIDEAUTHOR')) define ('_GLOSSARY_HIDEAUTHOR', 'Esconde Autor:');
if (!defined('_GLOSSARY_USEEDITOR')) define ('_GLOSSARY_USEEDITOR', 'Use editor padrão:');
if (!defined('_GLOSSARY_SHOWCATEGORIES')) define ('_GLOSSARY_SHOWCATEGORIES', 'Mostrar Glossários:');
if (!defined('_GLOSSARY_SHOWCATDESCRIPTIONS')) define ('_GLOSSARY_SHOWCATDESCRIPTIONS', 'Mostrar descrição de Glossários:');
if (!defined('_GLOSSARY_SHOWNUMBEROFENTRIES')) define ('_GLOSSARY_SHOWNUMBEROFENTRIES', 'Mostrar contagem de termos');
if (!defined('_GLOSSARY_UTF8_ADMIN')) define ('_GLOSSARY_UTF8_ADMIN', 'Select UTF-8:');
if (!defined('_GLOSSARY_SHOW_ALPHABET')) define ('_GLOSSARY_SHOW_ALPHABET', 'Mostrar o alfabeto:');
if (!defined('_GLOSSARY_STRIP_ACCENTS')) define ('_GLOSSARY_STRIP_ACCENTS', 'Retira Acentos:');
if (!defined('_GLOSSARY_AUTOPUBLISH')) define ('_GLOSSARY_AUTOPUBLISH', 'Autopublicar entradas:');
if (!defined('_GLOSSARY_NOTIFY')) define ('_GLOSSARY_NOTIFY', 'Notificar Webmaster:');
if (!defined('_GLOSSARY_NOTIFY_EMAIL')) define ('_GLOSSARY_NOTIFY_EMAIL', 'Email do Webmaster:');
if (!defined('_GLOSSARY_THANK_USER')) define ('_GLOSSARY_THANK_USER', 'Agradece Usuário:');
if (!defined('_GLOSSARY_PAGE_SPREAD')) define ('_GLOSSARY_PAGE_SPREAD', 'Page spread:');
if (!defined('_GLOSSARY_LANGUAGE')) define ('_GLOSSARY_LANGUAGE', 'Sobre-escrever língua do Glossário');
// Descriptions of glossary configuration items
if (!defined('_GLOSSARY_DESC_UTF8')) define ('_GLOSSARY_DESC_UTF8', 'Glossario informa banco de dados e navegador a usar UTF-8');
if (!defined('_GLOSSARY_DESC_PER_PAGE')) define ('_GLOSSARY_DESC_PER_PAGE', 'Número de registros mostrados por página.');
if (!defined('_GLOSSARY_DESC_ALLOWENTRY')) define ('_GLOSSARY_DESC_ALLOWENTRY', 'Permite usuários a escrever novas entradas. (Editors, Publishers, Admins e Super Admins tem sempre permissão para criar novas entradas.)');
if (!defined('_GLOSSARY_DESC_ANONENTRY')) define ('_GLOSSARY_DESC_ANONENTRY', 'Permitir que usuários não registrados escrevam entradas.');
if (!defined('_GLOSSARY_DESC_HIDEAUTHOR')) define ('_GLOSSARY_DESC_HIDEAUTHOR', 'Esconder os detalhes do autor como nome, localização, etc.');
if (!defined('_GLOSSARY_DESC_USEEDITOR')) define ('_GLOSSARY_DESC_USEEDITOR', 'Sim para usar o editor padrão ao adicionar entradas ou Não para usar uma simples TextArea');
if (!defined('_GLOSSARY_DESC_SHOWCATEGORIES')) define ('_GLOSSARY_DESC_SHOWCATEGORIES', 'Se ajustado para não, o componente apenas mostrará o glossário padrão');
if (!defined('_GLOSSARY_DESC_SHOWCATDESCRIPTIONS')) define ('_GLOSSARY_DESC_SHOWCATDESCRIPTIONS', 'Se ajustado para não, as descrições dos glossários não serão mostradas no frontend');
if (!defined('_GLOSSARY_DESC_SHOWNUMBEROFENTRIES')) define ('_GLOSSARY_DESC_SHOWNUMBEROFENTRIES', 'SIM mostra o número de entradas na página principal.');
if (!defined('_GLOSSARY_DESC_UTF8_ADMIN')) define ('_GLOSSARY_DESC_UTF8_ADMIN', 'Glossario informa banco de dados e navegador a usar UTF-8');
if (!defined('_GLOSSARY_DESC_SHOW_ALPHABET')) define ('_GLOSSARY_DESC_SHOW_ALPHABET', 'Tela principal do glossário mostrará todas as letras do alfabeto como links');
if (!defined('_GLOSSARY_DESC_STRIP_ACCENTS')) define ('_GLOSSARY_DESC_STRIP_ACCENTS', 'Ignore acentos quando construindo o alfabeto');
if (!defined('_GLOSSARY_DESC_AUTOPUBLISH')) define ('_GLOSSARY_DESC_AUTOPUBLISH', 'Auto-publicar novas entradas no glossário.');
if (!defined('_GLOSSARY_DESC_NOTIFY')) define ('_GLOSSARY_DESC_NOTIFY', 'Notificar o webmaster quando chegarem novas entradas.');
if (!defined('_GLOSSARY_DESC_NOTIFY_EMAIL')) define ('_GLOSSARY_DESC_NOTIFY_EMAIL', 'Endereço de email, onde notificações são enviadas.');
if (!defined('_GLOSSARY_DESC_THANKUSER')) define ('_GLOSSARY_DESC_THANKUSER', 'Enviar email de "Obrigado" para o usuário.'); 
if (!defined('_GLOSSARY_DESC_PAGE_SPREAD')) define ('_GLOSSARY_DESC_PAGE_SPREAD', 'Quantas outros números de página serão mostrados na paginação');
if (!defined('_GLOSSARY_DESC_LANGUAGE')) define ('_GLOSSARY_DESC_LANGUAGE', 'Sobre-escrever a seleção automática de língua');