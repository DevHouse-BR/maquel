<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* ================================================================================
* CORRIGIDO PARA O PORTUGUÊS DO BRASIL - CORRECTED TO BRAZILIAN PORTUGUESE
* v.1.8 - Fernando Soares - http://www.fernandosoares.com.br - 21-Ago-2008
* Para (To): VirtueMart 1.0.x
* ================================================================================
*
* @version $Id: admin.martlanguages.php,v 1.6 2006/01/15 19:42:45 soeren_nb Exp $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
class vmLanguage extends vmAbstractLanguage {
	var $_PHPSHOP_MENU = 'Menu';
	var $_PHPSHOP_CATEGORY = 'Categoria';
	var $_PHPSHOP_CATEGORIES = 'Categorias';
	var $_PHPSHOP_SELECT_CATEGORY = 'Selecione uma Categoria:';
	var $_PHPSHOP_ADMIN = 'Administração';
	var $_PHPSHOP_PRODUCT = 'Produto';
	var $_PHPSHOP_LIST = 'Listar';
	var $_PHPSHOP_ALL = 'Todos';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Todos os Produtos';
	var $_PHPSHOP_VIEW = 'Ver';
	var $_PHPSHOP_SHOW = 'Mostrar';
	var $_PHPSHOP_ADD = 'Adicionar';
	var $_PHPSHOP_UPDATE = 'Atualizar';
	var $_PHPSHOP_DELETE = 'Deletar';
	var $_PHPSHOP_SELECT = 'Selecionar';
	var $_PHPSHOP_SUBMIT = 'Submeter';
	var $_PHPSHOP_RANDOM = 'Produtos Aleatórios';
	var $_PHPSHOP_LATEST = 'Últimos Produtos';
	var $_PHPSHOP_HOME_TITLE = 'Início';
	var $_PHPSHOP_CART_TITLE = 'Cesto';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Concluir Pedido';
	var $_PHPSHOP_LOGIN_TITLE = 'Login';
	var $_PHPSHOP_LOGOUT_TITLE = 'Logout';
	var $_PHPSHOP_BROWSE_TITLE = 'Veja';
	var $_PHPSHOP_SEARCH_TITLE = 'Procurar';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Manutenção de Conta';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navegação';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Departamento';
	var $_PHPSHOP_INFO = 'Informação';
	var $_PHPSHOP_BROWSE_LBL = 'Procurar Artigos';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produtos';
	var $_PHPSHOP_PRODUCT_LBL = 'Produto';
	var $_PHPSHOP_SEARCH_LBL = 'Pesquisar';
	var $_PHPSHOP_FLYPAGE_LBL = 'Detalhes do Produto';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Pesquisar Produto';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nome do Produto';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Categoria';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Descrição';
	var $_PHPSHOP_CART_SHOW = 'Mostrar Cesto';
	var $_PHPSHOP_CART_ADD_TO = 'Pôr no Cesto';
	var $_PHPSHOP_CART_NAME = 'Nome';
	var $_PHPSHOP_CART_SKU = 'Ref.';
	var $_PHPSHOP_CART_PRICE = 'Valor';
	var $_PHPSHOP_CART_QUANTITY = 'Quantidade';
	var $_PHPSHOP_CART_SUBTOTAL = 'Subtotal';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Adicionar um novo';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Endereço de Entrega';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'A sua pesquisa não devolveu resultados.<br/>';
	var $_PHPSHOP_PRICE_LABEL = 'Preço: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Adicionar';
	var $_PHPSHOP_NO_CUSTOMER = 'Você não é um Cliente Registrado ainda. Por favor forneça suas Informações de Faturamento.';
	var $_PHPSHOP_DELETE_MSG = 'Você tem certeza que quer deletar este registro?';
	var $_PHPSHOP_THANKYOU = 'Obrigado pelo seu pedido.';
	var $_PHPSHOP_NOT_SHIPPED = 'Ainda não foi enviado.';
	var $_PHPSHOP_EMAIL_SENDTO = 'Um e-mail de confirmação foi enviado para';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Lamentamos, mas não existem usuários que possam ser adicionados à lista de usuários de com_virtuemart';
	var $_PHPSHOP_ERROR = 'ERRO';
	var $_PHPSHOP_MOD_NOT_REG = 'Módulo Não Registrado.';
	var $_PHPSHOP_MOD_ISNO_REG = 'não é um módulo válido do núcleo do VirtueMart.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Não tem permissão para acessar o módulo requisitado.';
	var $_PHPSHOP_PAGE_404_1 = 'Página Não Existe';
	var $_PHPSHOP_PAGE_404_2 = 'Nome de arquivo fornecido não existe. Impossível encontrar o arquivo:';
	var $_PHPSHOP_PAGE_403 = 'Direitos de Acesso Insuficientes';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Você não tem permissão para executar';
	var $_PHPSHOP_FUNC_NOT_REG = 'Função Não Registrada';
	var $_PHPSHOP_FUNC_ISNO_REG = 'não é uma função válida do VirtueMart.';
	var $_PHPSHOP_ADMIN_MOD = 'Administração';
	var $_PHPSHOP_USER_LIST_MNU = 'Listar Usuários';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista de Usuários';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Nome de usuário';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Nome Completo';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_USER_FORM_MNU = 'Adicionar Usuário';
	var $_PHPSHOP_USER_FORM_LBL = 'Adicionar/Atualizar Informações do Usuário';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Informações de Cobrança';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Endereços de Entrega';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Adicionar Endereço';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Não existem Endereços para Envio.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Endereço';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Sobrenome';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_USER_FORM_TITLE = 'Cargo';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Nome de usuário';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Senha';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Confirmar Senha';
	var $_PHPSHOP_USER_FORM_PERMS = 'Permissões';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Número / ID de Cliente';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Endereço';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_USER_FORM_CITY = 'Cidade';
	var $_PHPSHOP_USER_FORM_STATE = 'Estado';
	var $_PHPSHOP_USER_FORM_ZIP = 'CEP (apenas números)';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'País';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Celular';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Listar Módulos';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Lista de Módulos';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Nome do Módulo';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Permissões do Módulo';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funções';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Pedidos';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Adicionar Módulo';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Informações do Módulo';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Etiqueta do Módulo (para o menu superior)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Nome do Módulo';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Permissões do Módulo';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Cabeçalho do Módulo';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Rodapé do Módulo';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Exibir Módulo no Menu de Administração?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Ordem de Exibição';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Descrição do Módulo';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Código de Idioma';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Arquivo de Idioma';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Listar Funções';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Lista de Funções';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Nome da Função';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Nome da Classe';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Método da Classe';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Permissões';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Adicionar Função';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Informações da Função';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nome da Função';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Nome da Classe';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Método da Classe';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Permissões da Função';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Descrição da Função';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Listar Moedas';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Lista de Moedas';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Adicionar Moeda';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Nome da Moeda';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Código da Moeda';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Listar Países';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lista de Países';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Adicionar País';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nome do País';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Código País (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Código País (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Listar Estado';
	var $_PHPSHOP_STATE_LIST_LBL = 'Lista de Estados para: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Adicionar/Atualizar um Estado';
	var $_PHPSHOP_STATE_LIST_NAME = 'Nome do Estado';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Código do Estado (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Código do Estado (2)';
	var $_PHPSHOP_ADDRESS = 'Endereço';
	var $_PHPSHOP_CONTINUE = 'Continuar';
	var $_PHPSHOP_EMPTY_CART = 'O seu Cesto encontra-se vazio no momento.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping Servidor InterShipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Servidor-InterShipper Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Falha em Ping InterShipper';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Resposta de Ping InterShipper';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Transportador';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Tempo de<br />Resposta';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'seg.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Listar Métodos de Envio';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Método de Envio Atual';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Métodos de Envio';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Ativo';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Despesas de manuseio';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Tempo de Entrega';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'tarifa plana';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'porcento';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dias';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configurar Método de Envio';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Adicionar Método de Envio';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configurar Método de Envio';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Atualizar';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Método de Envio';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Ativar';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Despesas de manuseio';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Tempo de Entrega';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'tarifa plana';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'porcento';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dias';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ORDER_MOD = 'Pedidos';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Confirmar Pedido';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Cancelar Pedido';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Imprimir Pedido';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Deletar Pedido';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Listar Pedidos';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Listagem de Pedidos';
	var $_PHPSHOP_ORDER_LIST_ID = 'Número do Pedido';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Data da Pedido';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Última Modificação';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Situação';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_ITEM = 'Itens do Pedido';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Ordem de Compra';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Número do Pedido';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Data do Pedido';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Situação do Pedido';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Informações do Cliente';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Informações de Cobrança';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informações de Envio';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Cobrar de';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Enviar para';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nome';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Empresa';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Endereço';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Cidade';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Estado';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'CEP';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'País';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefone';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Ordenar Itens';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Quantidade';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Qtd';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Ref.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Valor';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Total de Imposto';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Manuseio e Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Imposto sobre o Envio';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Método de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nome da Conta';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Número da Conta';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Data de Expiração';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Registro de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informações de Envio';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informacões de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Portador';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Modo de Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Data de Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Valor do Envio';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Tipos de Situação de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Adicionar Tipo de Situação de Pedido';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Código da Situação de Pedido';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nome da Situação de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Situação do Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Código da Situação de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nome da Situação de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Ordem na Lista';
	var $_PHPSHOP_PRODUCT_MOD = 'Produtos';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Produto Atual';
	var $_PHPSHOP_CURRENT_ITEM = 'Artigo Atual';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Inventário';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Ver Inventário';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Preço';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Estoque';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Listar Produtos';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Produtos';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nome';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publicar';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Pesquisar Produto';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modificado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'com preço modificado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'sem preço';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Depois';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Antes';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Adicionar Produto';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editar este produto';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Ver atual página de detalhes do produto na loja';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Adicionar Item';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Adicionar Outro Item';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Novo Produto';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Atualizar Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informações do Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Situação do Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimensões e Peso do Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Imagens do Produto';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Novo Item';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Atualizar Item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informações do Item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Situação do Item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimensões e Peso do Item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Imagens do Item';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Regressar a Produto Relacionado';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Para Atualizar a imagem atual, vá à pasta e insira a nova imagem.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Deletar imagem atual.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Itens do Produto';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Atributos do Item';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Tem certeza de que deseja deletar este Produtone os itens relacionados a ele?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Tem certeza de que deseja deletar este item?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Vendedor';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Fabricante';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nome';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Preço do Produto (bruto)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Preço do Produto (s/ Imposto)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Descrição do Produto';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Descrição Curta';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Em Estoque';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'No Pedido';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Data de Disponibilidade';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Em Promoção';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Tipo de Desconto';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Comprimento';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Largura';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Altura';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Unidade de Medida';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Unidade de Medida';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Imagem Pequena';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Imagem Grande';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'Kg';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'Cm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unidade';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'Un';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Unidades na Embalagem';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Aqui você pode preencher o número de unidades na embalagem. (máx. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Unidades na Caixa';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Aqui você pode preencher o número de unidades na caixa. (máx. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Resultados de Adicionar Produto';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Resultados de Atualizar Produto';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Resultados de Adicionar Item';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Resultados de Atualizar Item';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Importação/Exportação CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Diretórios de Produtos';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Listar Categorias';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Categorias';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Adicionar Categoria';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informações da Categoria';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Pai';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Descrição da Categoria';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Página de Detalhes da Categoria';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Listar Atributos';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Lista de Atributos para';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nome do Atributo';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Ordem da Lista';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Adicionar Atributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formulário do Atributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Novo Atributo para Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Atualizar Atributo para Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Novo Atributo para Item';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Atualizar Atributo para Item';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nome do Atributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Ordem da Lista';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Listar Preços';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Lista de Preços';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Preço para';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Nome do Grupo';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Preço';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Moeda';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Adicionar Preço';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informações do Preço';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Novo Preço para Produto';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Atualizar Preço para Produto';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Novo Preço para Item';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Atualizar Preço para Item';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Preço';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Relatórios';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Listas Individuais de Produto';
	var $_PHPSHOP_RB_SALE_TITLE = 'Relatório de Vendas';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Visão Geral da Atividade das Vendas';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Setar Intervalo';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mensal';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Semanal';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Diário';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Este Mês';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Último Mês';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Últimos 60 dias';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Últimos 90 dias';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Começar em';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Terminar em';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Mostrar esta faixa selecionada';
	var $_PHPSHOP_RB_REPORT_FOR = 'Relatório para ';
	var $_PHPSHOP_RB_DATE = 'Data';
	var $_PHPSHOP_RB_ORDERS = 'Pedidos';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Total de itens vendidos';
	var $_PHPSHOP_RB_REVENUE = 'Rendimento';
	var $_PHPSHOP_RB_PRODLIST = 'Listagem de Produtos';
	var $_PHPSHOP_SHOP_MOD = 'Loja';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Imagem';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Preço';
	var $_PHPSHOP_ORDER_STATUS_P = 'Pendente';
	var $_PHPSHOP_ORDER_STATUS_C = 'Confirmado';
	var $_PHPSHOP_ORDER_STATUS_X = 'Cancelado';
	var $_PHPSHOP_ORDER_BUTTON = 'Pedido';
	var $_PHPSHOP_SHOPPER_MOD = 'Clientes';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Listar Clientes';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Lista de Clientes';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nome de usuário';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Nome Completo';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Adicionar Cliente';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informações do Cliente';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Informações de Cobrança';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informação';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informações de Envio';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Adicionar Endereço';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Apelido do Endereço';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nome de usuário';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Sobrenome';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Título';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nome do Cliente';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Senha';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Confirmar Senha';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Endereço';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Cidade';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Estado';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'CEP (apenas números)';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'País';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Celular';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Sim';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Não';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Grupos de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Lista de Grupos de Cliente';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nome do Grupo';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Descrição do Grupo';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Formulário de Grupo de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Adicionar Grupo de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nome do Grupo';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Descrição do Grupo';
	var $_PHPSHOP_STORE_MOD = 'Loja';
	var $_PHPSHOP_STORE_FORM_MNU = 'Editar Loja';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informações sobre a Loja';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Informações de Contato';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Imagem Completa';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Carregar Imagem';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nome da Loja';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Endereço';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_STORE_FORM_CITY = 'Cidade';
	var $_PHPSHOP_STORE_FORM_STATE = 'Estado';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'País';
	var $_PHPSHOP_STORE_FORM_ZIP = 'CEP (apenas números)';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Sobrenome';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Título';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefone 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefone 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Pasta para a Imagem';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Descrição';
	var $_PHPSHOP_PAYMENT = 'Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Métodos de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Métodos de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nome';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Código';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Desconto';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Cybercash';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Adicionar Método de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formulário de Método de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nome de Formulário de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Desconto';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Código';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Ordem na listagem';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Usar Cybercash';
	var $_PHPSHOP_TAX_MOD = 'Imposto';
	var $_PHPSHOP_TAX_RATE = 'Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_MNU = 'Listar Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_LBL = 'Lista de Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_STATE = 'Imposto por Estado ou Região';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Imposto do País';
	var $_PHPSHOP_TAX_LIST_RATE = 'Lista de Taxas de Imposto';
	var $_PHPSHOP_TAX_FORM_MNU = 'Adicionar Taxa de Imposto';
	var $_PHPSHOP_TAX_FORM_LBL = 'Adicionar Informações do Imposto ';
	var $_PHPSHOP_TAX_FORM_STATE = 'Imposto por Estado ou Região';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Imposto do País';
	var $_PHPSHOP_TAX_FORM_RATE = 'Taxa de Imposto (para 16% => entre 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'Vendedor';
	var $_PHPSHOP_VENDOR_ADMIN = 'Vendedores';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Listar Vendedores';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lista de Vendedores';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nome';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Administrador';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Adicionar Vendedor';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Adicionar Informação';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Informações do Vendedor';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Informações de Contato';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Imagem';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Carregar Imagem';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nome do Vendedor da Loja';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nome do Vendedor da Empresa';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Endereço';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Cidade';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Estado';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'País';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'CEP (apenas números)';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Sobrenome';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Título';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefone 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefone 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Pasta de Imagens';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Descrição';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Categorias de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista de Categorias de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nome da Categoria';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Descrição da Categoria';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vendedores';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Adicionar Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formulário de Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informações da Categoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Descrição da Categoria';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Listar Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Lista de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nome do Fabricante';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Administração';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Adicionar Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Adicionar Informação';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Informações do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nome do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Categoria do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Página do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Descrição';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Categorias de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Lista de Categorias de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nome da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Descrição da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Adicionar Categoria de Fabricante';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Detalhes da Categoria de Fabricante';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informações da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Descrição da Categoria';
	var $_PHPSHOP_HELP_MOD = 'Ajuda';
	var $_PHPSHOP_CART_ACTION = 'Atualizar';
	var $_PHPSHOP_CART_UPDATE = 'Atualiza Quantidade no Cesto';
	var $_PHPSHOP_CART_DELETE = 'Deletar Produto do Cesto';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Preço';
	var $_PHPSHOP_PRODUCT_CALL = 'Contate para Preço';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Anterior';
	var $_PHPSHOP_PRODUCT_NEXT = 'Seguinte';
	var $_PHPSHOP_CART_TAX = 'Imposto';
	var $_PHPSHOP_CART_SHIPPING = 'Taxa de Envio e Manuseio';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Próximo';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registrar-se';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Informações de Faturamento';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Empresa';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Endereço';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefone';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Informações de Envio';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Empresa';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Endereço';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefone';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Informações de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nome no cartão';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Método de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Número de Cartão de Crédito';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Data de Expiração';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Completar o Pedido';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Informação requerida quando o pagamento por Cartão de Crédito é selecionado.';
	var $_PHPSHOP_ZONE_MOD = 'Envio por Zonas';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Listar Zonas';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Adicionar Zona';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Atribuir Zona';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'País';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zona Atual';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Atribuir à Zona';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Atualizar';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Atribuir Zonas';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nome da Zona';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Descrição da Zona';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Custo por Item na Zona';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limite de Custo na Zona';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Lista de Zonas';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nome da Zona';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Descrição da Zona';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Custo por Item na Zona';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limite de Custo na Zona';
	var $_PHPSHOP_LOGIN_FIRST = 'Por favor, faça o Login ou registe-se primeiro.<br>Obrigado.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Termos do Serviço';
	var $_PHPSHOP_AGREE_TO_TOS = 'Tem de concordar com os Termos do Serviço.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Concordo com os Termos do Serviço';
	var $_PHPSHOP_LEAVE_BLANK = '(deixe em BRANCO se você não tem<br />nenhum arquivo php individual para ele)';
	var $_PHPSHOP_RETURN_LOGIN = 'Já possui Registro? Por favor, faça o Login';
	var $_PHPSHOP_NEW_CUSTOMER = 'É um novo cliente? Por favor, insira os seus dados para faturamento';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Conta de Cliente:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informações do Pedido';
	var $_PHPSHOP_ACC_UPD_BILL = 'Aqui você pode atualizar seus dados para faturamento.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Aqui adiciona ou atualiza a Endereço para envio.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informações da Conta';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informações de Envio';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Não há pedidos para exibir';
	var $_PHPSHOP_ACC_BILL_DEF = '- Padrão (igual ao de faturamento)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Pode adicionar Endereços de envio à sua conta.
Por favor, escolha um apelido ou código para a Endereço que selecionar abaixo.';
	var $_PHPSHOP_CONFIG = 'Configuração';
	var $_PHPSHOP_USERS = 'Usuários';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Paga com cartão de crédito?';
	var $_PHPSHOP_SHIPPING_MOD = 'Entregas';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Entregas';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Transportadores';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Lista de Transportadores';
	var $_PHPSHOP_RATE_LIST_MNU = 'Taxas de Envio';
	var $_PHPSHOP_RATE_LIST_LBL = 'Lista de Taxas de Envio';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nome';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Ordem na lista';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Criar Transportador';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Editar/Criar Transportador';
	var $_PHPSHOP_RATE_FORM_MNU = 'Criar uma Taxa de Envio';
	var $_PHPSHOP_RATE_FORM_LBL = 'Criar/Editar uma Taxa de Envio';
	var $_PHPSHOP_RATE_FORM_NAME = 'Descrição da Taxa de Envio';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Transportador';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'País';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Início do intervalo de CEP´s';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Final do intervalo de CEP´s';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Peso Mínimo';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Peso Máximo';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Taxa';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Sua taxa de pacote';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Imposto';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Ordem da lista';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportador';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Descrição da Taxa de Envio';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Peso de ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... até';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Empresa Transportadora';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Ordem da Listagem';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERRO: ID de Transportador já existe.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERRO: Escolha um transportador.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERRO: Pelo menos uma taxa de envio existe, delete as taxas antes do Transportador.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERRO: Não foi encontrado nenhum transportador com este ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERRO: Escolha um transportador.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERRO: Não foi encontrado nenhum transportador com este ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERRO: Uma descrição da taxa é requerida.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERRO: O País de destino é inválido. Se optou por mais de um país, Por favor separe-os com um espaço';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERRO: Um peso mínimo é requerido';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERRO: Um peso máximo  é requerido';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERRO: O peso mais baixo deve ser mais pequeno que o peso mais alto';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERRO: É obrigatórioapresentar uma taxa de transporte';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERRO: Escolha uma moeda';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERRO: Uma taxa de envio é requerida';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Por favor selecione';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Transportador';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Taxa de Envio';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Valor';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-nenhum-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Cartão de Crédito';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Usar Processador de Pagamentos';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Débito Bancário';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Apenas Endereço / Dinheiro na Entrega';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Por favor escolha um Endereço para Entrega!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Por favor escolha um Método de Envio!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Por favor selecione um Método de Pagamento!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Por favor verifique os dados introduzidos e confirme o pedido!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Por favor selecione um Método de Envio.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Por favor selecione outro Método de Envio!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Por favor selecione um Método de Pagamento.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Por favor digite o número do seu Cartão de Crédito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Por favor digite o nome que está no Cartão de Crédito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'O Número do Cartão de Crédito não é válido.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Por favor, digite o mês da data de expiração do cartão de crédito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Por favor, digite o ano da data de expiração do cartão de crédito.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'A data de expiração não é válida.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Por favor selecione um Endereço para Envio.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Número de conta inválido.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Não há nada no seu cesto de compras!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERRO: Por favor escolha um transportador!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERRO: A taxa de transporte não foi encontrada!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERRO: O seu endereço para envio não foi encontrado!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERRO: Não existem dados sobre o Cartão de Crédito....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERRO: Número de Cartão de Crédito não encontrado!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Desculpe, mas o número do cartão de crédito que você usou é um número de teste!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'O user_id não foi encontrado na base de dados!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Você ainda não forneceu o nome de titular da sua conta bancária.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Ainda não forneceu o seu IBAN (Número de Conta Bancária Internacional).';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Você ainda não forneceu um número de conta bancária.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Ainda não forneceu o código do seu Banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Ainda não forneceu o nome do seu Banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Foi executado um passo inválido para efetuar o CheckOut!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'A informação de pagamento capturada para posterior processamento.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Ainda não atingiu o valor mínimo para efetuar a sua compra.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'O valor mínimo para efetuar compras é de:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Pagamento por Cartão de Crédito';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'outros métodos de pagamento';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Por favor escolha um método de pagamento:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Valor mínimo de pedido para sua loja';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informações de Conta Bancária';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Número da Conta';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Código do Banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Nome do Banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Titular da Conta';
	var $_PHPSHOP_MODULES = 'Módulos';
	var $_PHPSHOP_FUNCTIONS = 'Funções';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Produtos Especiais';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Por favor deixe uma nota juntamente com seu pedido se achar necessário';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Nota do Cliente';
	var $_PHPSHOP_INCLUDING_TAX = '(Inclui $tax% Imposto)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Por favor escolha um item.';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Item';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Área de Download';
	var $_PHPSHOP_DOWNLOADS_START = 'Iniciar Download';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Por favor digite o ID de Download que você recebeu em seu e-mail e clique em "Iniciar Download".';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Lamentamos, mas o seu download expirou!';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Lamentamos, mas seu número máximo de downloads já foi atingido.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'ID de Download Inválido!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Não foi possível enviar a mensagem a ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Mensagem enviada a  ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informação do Download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'o(s) arquivo(s) solicitados estão prontos para download.';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Por favor, digite o(s) seguinte(s) ID(´s) de Download(s) em nossa Área de Downloads:';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'o número máximo de downloads para cada arquivo é de: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Download disponível por até {expire} dias após o primeiro download.';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Questões? Problemas?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informação de Download por  ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Produto sujeito a download?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Obrigado por seu pagamento.
A transação obteve sucesso. Você receberá um e-mail de confirmação para a transação
através do PayPal.
Você pode continuar agora ou logar em <a href=http://www.paypal.com>
www.paypal.com</a> para ver os detalhes da transação.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Ocorreu um erro ao processar sua transação. O status de sua ordem não pôde ser atualizado.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Muito obrigado por comprar conosco. Seguem as informações de seu pedido.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Muito obrigado pela sua preferência!';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Questões? Problemas?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'O seguinte pedido foi recebido.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Clique neste link para ver seu pedido.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Quantidades negativas não são permitidas.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Por favor, entre com uma quantidade válida para este item.';
	var $_PHPSHOP_CART_STOCK_1 = 'A quantidade selecionada excede o estoque disponível.';
	var $_PHPSHOP_CART_STOCK_2 = 'Atualmente temos $product_in_stock itens disponíveis.';
	var $_PHPSHOP_CART_STOCK_3 = 'Clique aqui para ser incluido em nossa lista de espera.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Para adicionar este produto ao seu cesto você precisa selecionar uma variante do produto na página de detalhes.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nenhum';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Sr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Sra.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Padrão';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administração de Afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Listar Afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Lista de Afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nome do Afiliado';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Ativo';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Taxa';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Total mensal';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Comissão mensal';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Lista de processos';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-mail Afiliados';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail Afiliados';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'E-mail para Quem (* = TODOS)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Seu E-mail';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Assunto';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Incluir estatísticas atuais';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Taxa de Comissão (percentual)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Ativo?';
	var $_PHPSHOP_DELIVERY_TIME = 'Prazo de Entrega (aprox.)';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informações da Entrega';
	var $_PHPSHOP_MORE_CATEGORIES = 'mais categorias';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilidade';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Este produto está indisponível no momento.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Disponível em: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Sumário';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Estatísticas';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clientes';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Produtos Ativos';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Produtos Inativos';
	var $_PHPSHOP_STATISTIC_SUM = 'Soma';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Novas Pedidos';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Novos Clientes';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Por favor intruduza seu e-mail abaixo para ser notificado quando este produto voltar ao estoque. 
Nós não compartilhamos, arrendamos, vendemos ou usamos este endereço de e-mail para qualquer outra finalidade que não seja informar-lhe quando o produto está de volta ao estoque. <br /> <br />Muito obrigado!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Obrigado por aguardar! <br />Vamos informá-lo assim que chegar em nosso estoque.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Notifique-me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Visualizar Impressão';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Por favor escolha ENTRE Authorize.net OU CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Status do arquivo de configuração:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'é gravável';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'não é gravável';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Geral';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Caminho & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Transporte';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Finalização';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Downloads';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Pagamentos';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Usar somente como catálogo';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Se marcar isto, você desabilitará todas as funcionalidades do cesto.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Mostrar Preços';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Mostrar Preços incluindo impostos?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Define a maneira como os compradores vêm os preços, se incluindo impostos ou excluindo impostos.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Marque para mostrar os preços. Se utilizando a funcionalidade de catálogo, alguns não querem que os preços apareçam nas páginas.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Imposto Virtual';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Isso determina se os itens com peso zero são tributados ou não. Modifique ps_checkout.php->calc_order_taxable() para personalizar isto.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Modo de Tributação:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Baseado no endereço de entrega';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Baseado no endereço do vendedor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Isto determina qual taxa de imposto é usada para cálcular os impostos:<br /><ul><li>Estadual/Nacional referente ao local do vendedor.</li> <li>ou referente ao local do comprador.</li> <li>ou "Modo UE", em que é usada uma taxa de imposto por produto se o cliente está na União Européia, caso contrário, a taxa de imposto é baseada no endereço do cliente.</li> </ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Ativar múltiplas taxas de imposto?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Marque isto se você tem produtos com diferentes taxas de imposto (ex. 7% para livros e comida, 16% para outros coisas)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Subtrair desconto do pagamento antes do imposto/frete?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Ativar Sistema de Comentários/Avaliações de Clientes';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Se ativado, você permite que os clientes <strong>avaliem produtos</strong> e <strong>escrevam comentários</strong> sobre eles. <br /> Assim, os clientes podem escrever as suas experiências com o produto para outros clientes.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Define a opção para subtrair o desconto da forma de pagamento ANTES (marcado) ou DEPOIS dos impostos e frete.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Os clientes podem deixar sua informação bancária?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Selecione esta opção se desejar que os clientes deixem a sua informação bancária quando se registam.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Os clientes podem selecionar um Estado/Região?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Selecione esta opção se desejar que os clientes possam escolher o Estado/Região quando se registam.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Deve concordar com os Termos de Serviço?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Marque se você quer que seus clientes concordem com os Termos do Serviço antes de se registrarem na loja.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Verifica Estoque?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Define se deve ser verificado o estoque quando um usuário adiciona um ítem ao cesto de compras. Se marcado, isto não irá permitir ao usuário adicionar mais itens ao cesto do que estão disponíveis em estoque.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Ativar Programa de Afiliados?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Isto habilita o rastreamento de afiliados na vitrine da loja. Habilite se você adicionou afiliados na administração.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Formato e-mails de Pedido:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'E-mail texto';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'E-mail HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Isto determina como são configurados os e-mails de confirmação de pedido:<br /><ul><li>como e-mail de texto simples</li><li>ou como e-mail em html com imagens.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Permitir Administração pela Vitrine para Usuários não Administrativos?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Com esta configuração você pode ativar a Administração pela Vitrine para usuários que sejam administradores de loja, mas que não podem acessar a Administração do Joomla (ex. Registrado / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'Endereço (URL)';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'O Endereço (URL) do seu Site. Idêntico normalmente ao seu Joomla! URL (Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'URL Segura';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'URL segura para seu site. (https - com a barra no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'Endereço (URL) do Componente';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'O Endereço (URL) para o componente VirtueMart. (Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'Endereço (URL) de Imagens';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'O Endereço (URL) para a pasta de imagens do componente VirtueMart.(Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'O caminho para a pasta do componente VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'O caminho para a pasta classes do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'O caminho para a pasta html do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'O caminho para a pasta shop_image do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Página Inicial';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Esta é a página que será carregado por padrão.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Página de Erro';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Esta é a página padrão para exibir mensagens de erro.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Esta é a página pré-definidapara mensagens de debug.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEPURAÇÃO ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEPURAÇÃO ? Liga a saída de depuração. Causa a exibição da página de DEPURAÇÃO na parte de baixo de cada página. Muito útil durante o desenvolvimento da loja, uma vez que mostra os conteúdos dos cestos, valores dos campos de formulário, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Página de Detalhes de Produto';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Esta é a página padrão para exibir detalhes de produto.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Tema de Categoria';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Define o tema de categoria padrão para exibição de produtos em uma categoria.<br />Você pode criar novos temas personalizando os arquivos de tema existentes <br /> (que residem no diretório <strong>COMPONENTPATH/html/templates/	</strong> e começam com browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Número padrão de produtos em uma linha';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Isto define o número de produtos em uma linha. <br /> Exemplo: Se você defini-lo para 4, o tema de categoria irá mostrar 4 produtos por linha';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Imagem "sem imagem"';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Esta imagem será mostrada quando nenhuma imagem de produto estiver disponível.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Filas numa Procura';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determina o número de filas por página quando os resultados de uma procura são mostrados numa lista.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Côr da Procura 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Especifica a côr das filas ímpares numa lista de resultados.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Côr da Procura 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Especifica a côr das filas pares numa lista de resultados.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Número máximo de filas';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Ajusta o número de filas a mostrar na lista de pedido da caixa selecionada.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Mostrar rodapé';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Exibe a imagem "powered-by-VirtueMart" no rodapé.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Escolha o método de envio da sua loja';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Módulo de Envio Padrão com configurações individuais para transportador e taxas. <strong>RECOMENDADO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Módulo de Zonas de Envio do País Versão 1.0<br />Para mais informações sobre este módulo por favor visite <a href="http://ZephWare.com">http://ZephWare.com</a><br /> para detalhes ou contate <a href="mailto:zephware@devcompany.com">ZephWare.com</a> <br />Marque isto para ativar o módulo de zonas de envio';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'Ferramentas de Cálculo de Envio da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Código de acesso UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Seu código de acesso da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'ID de usuário UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'ID de usuário obtido da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Senha UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Senha para sua conta da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Módulo InterShipper. Marque apenas se você tiver uma conta Intershipper.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Desabilita a seleção de Método de Envio. Escolha se seus clientes compram produtos que não precisam ser enviados, como downloads.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Senha InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Senha para sua conta intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'e-mail InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'E-mail para sua conta intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'CHAVE CODIFICADA';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Usado para criptografar os dados armazenados no banco de dados com esta chave. Isto significa que este arquivo deve ser protegido de visualizações todo o tempo.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Ativa a Barra de Finalização';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Marque isto se você desejar que a ';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Escolha o processo de finalização na sua loja';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Padrão:</strong><br/>1. Pedido de endereço de envio<br />2. Pedido de método de envio<br />3. Pedido de método de pagamento<br />4. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Processo 2:</strong><br/>1. Pedido de método de envio<br />2. Pedido de método de pagamento<br />3. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Processo 3:</strong><br/>1. Pedido de método de envio<br />2. Pedido de método de pagamento<br />3. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Processo 4:</strong><br/>1. Pedido de método de pagamento<br /> 2. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Ativar Downloads';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Marque para habilitar a capacidade de download. Somente se você desejar vender downloads.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Situação de Pedido que habilita o download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Selecione a Situação de Pedido na qual o cliente é notificado sobre o download via e-mail.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Situação de Pedido que desabilita os downloads';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Define a situação de pedido na qual o download é desabilitado para o cliente.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Raiz dos Downloads';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'O caminho físico dos arquivos para o cliente baixar. (barra no final!)<br> <span class="message">Para segurança de sua loja: Se você puder, por favor use um diretório EM QUALQUER LUGAR FORA DA RAIZ DO DOMÍNIO</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Máximo de Downloads';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Define o número de downloads que pode ser feito com um ID de Download, (para um pedido)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Expiração do Download';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Defina o intervalo de tempo <strong>em segundos</strong> no qual o download esta disponível para o cliente. Este intervalo começa com o primeiro download! Quando o intervalo expira, o ID de Download é desabilitado.<br />Nota : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Habilitar pagamento IPN via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Marque para deixar seus clientes usar o sistema de pagamento PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'E-mail do pagamento PayPal:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Seu e-mail comercial para os pagamentos PayPal. Também usado como e-mail do receptor.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Situação do pedido para transações bem sucedidas';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Selecione a situação de pedido para o qual o pedido atual é setado caso o retorno do PayPal IPN for bem sucedido. Se estiver usando opções para venda de download: selecione a situação que habilita o download (então o cliente é notificado imediatamente sobre o download através do e-mail).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Situação do Pedido para transações falhas';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Selecione uma situação de pedido para transações PayPal falhas.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Habilitar pagamentos via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Marque para permitir que seus clientes usem o sistema de pagamento Australiano PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Nome de usuário PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Seu usuário da conta PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Habilitar pagamento via Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Marque para usar Authorize.net com o VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Modo de Teste ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Selecione \'Sim\' quando testando. Selecione \'Não\' para habilitar transações OnLine.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Sim';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Não';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'ID de Login Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Este é seu ID de Login na Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Chave de Transação Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Esta é sua chave de transação Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Tipo de Autenticação';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Este é o tipo de autenticação na Authorize.net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Habilitar CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Marque para usar CyberCash com o VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'Em CyberCash MERCHANT você deve entrar com seu CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'Chave CyberCash Merchant';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'A chave CyberCash Merchant é fornecida pela CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'URL do pagamento CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'URL do pagamento CyberCash é a URL fornecida por Cybercash para pagamento seguro';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'Tipo de autenticação CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Tipo de autenticação fornecido por Cybercash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Pesquisa Avançada';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Pesquisar em Todas as Categorias';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Pesquisar todas as informações do produto';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Apenas nome do produto';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Apenas Fabricante/Vendedor';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Apenas descrição do produto';
	var $_PHPSHOP_SEARCH_AND = 'e';
	var $_PHPSHOP_SEARCH_NOT = 'não';
	var $_PHPSHOP_SEARCH_TEXT1 = 'A primeira lista permite selecionar uma categoria a qual limitar a pesquisa. A segunda lista permite limitar a sua pesquisa a uma determinada parte das informações do produto (ex. Nome).
Uma vez selecionadas (ou deixadas no padrão), introduza a palavra-chave a ser pesquisada.';
	var $_PHPSHOP_SEARCH_TEXT2 = 'Você pode refinar ainda mais a sua pesquisa, adicionando uma segunda palavra-chave e selecionando os operadores AND (e) ou NOT (não). Selecionando AND significa que ambas as palavras devem estar presentes para o produto ser exibido.
Selecionando NOT significa que o produto será exibido somente se a primeira palavra-chave estiver presente e a segunda não.';
	var $_PHPSHOP_ORDERBY = 'Ordenar por';
	var $_PHPSHOP_CUSTOMER_RATING = 'Média de votos';
	var $_PHPSHOP_TOTAL_VOTES = 'Total de votos';
	var $_PHPSHOP_CAST_VOTE = 'Por favor expresse seu voto';
	var $_PHPSHOP_RATE_BUTTON = 'Avaliar';
	var $_PHPSHOP_RATE_NOM = 'Avaliação';
	var $_PHPSHOP_REVIEWS = 'Comentários de Clientes';
	var $_PHPSHOP_NO_REVIEWS = 'Ainda não há comentários para este produto.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Seja o primeiro a fazer um comentário...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Por favor faça o seu login para escrever um comentário.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Por favor avalie o produto para completar seu comentário!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Por favor escreva mais algumas palavras no seu comentário. Mínimo de 100 caracteres.';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Por favor reduza seu comentário. Máximo de 2000 caracteres.';
	var $_PHPSHOP_WRITE_REVIEW = 'Faça um comentário a este produto!';
	var $_PHPSHOP_REVIEW_RATE = 'Primeiro: Avalie o produto. Selecione de 0 (pior) a 5 estrelas (melhor).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Agora escreva um (pequeno) comentário....(mín. 100, máx. 2000 caracteres)';
	var $_PHPSHOP_REVIEW_COUNT = 'Caracteres escritos: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Submeter comentário';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Você já escreveu anteriormente um comentário para este produto. Muito obrigado.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Obrigado por seu comentário.';
	var $_PHPSHOP_COMMENT = 'Comentário';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Adiciona/Edita Tipos Cartão Crédito';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nome de Cartão de Crédito';
	var $_PHPSHOP_CREDITCARD_CODE = 'Código Curto do Cartão de Crédito';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tipo de Cartão de Crédito';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Listagem de Cartões de Crédito';
	var $_PHPSHOP_UDATE_ADDRESS = 'Atualizar Endereço';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continuar Comprando';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Seu pedido foi efetuado com sucesso!';
	var $_PHPSHOP_ORDER_LINK = 'Acesse este link para visualizar os Detalhes do Pedido.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'a Situação do seu Pedido de N° {order_id} foi modificada.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'A nova Situação é:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Para ver os Detalhes do Pedido, por favor acesse este link (ou copie-o para seu navegador):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Situação do Pedido Modificada: Seu Pedido {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Notificar Cliente?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Por favor modifique a Situação do Pedido primeiro!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Desconto no Preço para o Grupo de Compradores padrão (em %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Uma quantidade positiva X significa: Se o Produto não tiver nenhum Preço atribuído a ESTE Grupo de Cliente, o preço padrão é diminuido em X %. Uma quantidade negativa tem o efeito oposto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Desconto do Produto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista de Descontos dos Produtos';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Adiciona/Edita Descontos de Produtos';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Quantia de desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Entre com a quantia do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tipo de Desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Percentual';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Total';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'A quantia deve ser um percentual ou um total?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Data de início do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Especifica o dia em que o desconto começa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Data final do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Especifica o dia em que o desconto termina';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Você pode usar o Formulário de Desconto de Produto para adicionar descontos!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Você Economiza';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Ampliar Imagem';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Estilo de Exibição da Moeda';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Símbolo monetário';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Você também pode usar Tags HTML aqui(ex: EUR (Euro), £ (Libra), ¥ (Ien),...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Casas Decimais';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Número de casas decimais mostrados (pode ser 0)<br><b>Faz arredondamentos se os valores têm diferentes números de casas decimais</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Símbolo decimal';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Caractere usado para símbolo decimal';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Separador de milhar';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Caractere usado para separar milhar (pode ficar vazio)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Formato positivo';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Exibe formato usado para mostrar valores positivos.<br>
(Symb representa o símbolo da moeda)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Formato negativo';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Exibe formato usado para mostrar valores negativos.<br>
(Symb representa o símbolo da moeda)';
	var $_PHPSHOP_OTHER_LISTS = 'Outras Listas de Produtos';
	var $_PHPSHOP_MORE_IMAGES = 'Ver Mais Imagens';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Imagens Disponíveis para';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Voltar aos Detalhes do Produto';
	var $_PHPSHOP_FILEMANAGER = 'Gerenciador de Arquivos';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Gerenciador de arquivos::Lista de Produtos';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Adicionar Imagem/Arquivo';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Atribuir Imagens';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'É para Download?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Arquivos Associados (Folhas de Cálculo,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publicado?';
	var $_PHPSHOP_FILES_LIST = 'Gerenciador de Arquivos::Lista de Imagem/Arquivo para';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nome de Arquivo';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Título do Arquivo';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Tipo do Arquivo';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Editar entrada do arquivo';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Imagem Grande';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Imagem Miniatura';
	var $_PHPSHOP_FILES_FORM = 'Carregar um Arquivo para';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Arquivo Atual';
	var $_PHPSHOP_FILES_FORM_FILE = 'Arquivo adicional';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Imagem adicional';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Carregar para';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Caminho padrão para Imagens de Produto';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Especifique a localização do arquivo';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Caminho de Download (ex. para venda de downloads!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Auto-Criar Miniatura?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Arquivo está publicado?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Título do Arquivo (aquilo que o Cliente vê)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Descrição do arquivo';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL do Arquivo (opcional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Por favor entre um caminho válido!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'A Miniatura da Imagem foi criada com sucesso!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'NÃO foi possível criar a Miniatura da Imagem!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Erro de carregamento de Arquivo/Imagem';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Não foi possível deletar a Imagem.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Imagem deletada com sucesso.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Não foi possível deletar a Miniatura da Imagem (talvez não exista): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Miniatura da Imagem deletada com sucesso.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Não foi possível deletar o Arquivo.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Arquivo deletado com sucesso.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Desculpe, mas o arquivo requisitado não foi encontrado!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Imagem não encontrada!';
	var $_PHPSHOP_COUPON_MOD = 'Cupom';
	var $_PHPSHOP_COUPONS = 'Cupons';
	var $_PHPSHOP_COUPON_LIST = 'Lista de Cupons';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'O cupom já foi compensado.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Cupom utilizado! Muito Obrigado.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Se você tem o código de cupom, favor inserir abaixo:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Enviar';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Este código de cupom já existe. Por favor tente novamente.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Atualizar Cupom';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Clique em um código de cupom para editá-lo, ou para deletar um código de cupom, selecione-o e clique em Delete:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Código';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Percentual ou Total';
	var $_PHPSHOP_COUPON_TYPE = 'Tipo de Cupom';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Um Cupom Presente é deletado depois de ser usado para descontar um pedido. Um Cupom Permanente poderá ser utilizado quantas vezes o cliente quiser.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Cupom Presente';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Cupom Permanente';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Valor';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Deletar Código';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Você tem certeza que deseja deletar este código de cupom?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Por favor, complete todos os campos.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'O valor do cupom deve ser um número.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Novo Cupom';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Código do Cupom';
	var $_PHPSHOP_COUPON_PERCENT = 'Percentagem';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Valor';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Código de cupom salvo.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Salvar Cupom';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Desconto do Cupom';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Código do cupom não encontrado. Favor tentar novamente.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Habilita Uso de Cupons';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Se você habilitar o Uso de Cupons você permitirá aos clientes digitar Números de Cupons para ganhar doscontos em suas compras.';
	var $_PHPSHOP_FREE_SHIPPING = 'Entrega Grátis';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'A entrega é gratuita neste Pedido!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Quantia Mínima para Entrega Grátis';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'A quantia (IMPOSTOS INCLUSIVE!) que é o Mínimo para Entrega Grátis (exemplo: <strong>50</strong> significa Entrega Grátis quando o cliente finalizar o pedido com R$50,00 (incluindo impostos) ou mais.';
	var $_PHPSHOP_YOUR_STORE = 'Sua Loja';
	var $_PHPSHOP_CONTROL_PANEL = 'Painel de Controle';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Botão - PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Exibe ou Oculta o Botão - PDF na Loja.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Deve-se concordar com os Termos do Serviço em CADA PEDIDO?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Marque se você quer que seu cliente concorde com seus Termos do Serviço em CADA PEDIDO (antes de confirmar o pedido).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Tipo Conta Bancária';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Conta Pessoal';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Conta Empresarial';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Poupança';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Fatura Parcelada?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Define se você quer faturamento parcelado.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Erro Interno ao processar a Requisição para';
	var $_PHPSHOP_PAYMENT_ERROR = 'Falha ao Processar o Pagamento';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Pagamento processado com sucesso';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'A UPS não pôde processar a Taxa de Envio Requisitada.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Dia(s) de Garantia para Entrega';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'Método de Coleta UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Como você entrega os pacotes à UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Embalagem UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Selecione o Tipo padrão de Embalagem.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Entrega Residencial?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residencial (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Comercial (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Citação para Entrega Residêncial (RES) ou Comercial (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Taxa de Manuseio';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Sua Taxa de Manuseio para este método de envio.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Classe de Taxação';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Use a seguinte classe de taxação para despesas de envio.';
	var $_PHPSHOP_ERROR_CODE = 'Código de Erro';
	var $_PHPSHOP_ERROR_DESC = 'Descrição do Erro';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Mostrar/Mudar a Chave de Transação';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Mostrar/ Alterar a Senha/chave de transação';
	var $_PHPSHOP_TYPE_PASSWORD = 'Por favor insira a sua senha de usuário';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Senha Atual';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Chave Transação Atual';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'A chave de Transação foi modificada com sucesso.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Requisita/Captura Código do Cartão de Crédito (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Verifica a validade do CVV2/CVC2/CID (número de três ou quadro dígitos no verso de um cartão de crédito; na Frente se Cartões American Express)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Por favor digite o número de três ou quadro dígitos que está no verso do seu cartão de crédito (Na frente se Cartão American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Você deve entrar com o Código do seu Cartão de Crédito para proceguir.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Insira o nome do arquivo';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTA: Aqui pode inserir o nome de um arquivo. <strong>Se 
escolher esta opção, nenhum arquivo será carregado (uploaded)!!! Terá que o fazer manualmente via FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OU faça o Upload de um novo';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Pode fazer o upload de qualquer arquivo. Esse será o seu 
produto para venda. Qualquer arquivo já existente será substituido.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Preencha aqui algum texto que será mostrado ao cliente na página de detalhes do Produto.<br />ex. 24h, 48 horas, 3 - 5 dias, Sob Pedido...';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OU selecione uma imagem a ser exibida na Página de 
Detalhes (flypage).<br />As imagens residem no diretório <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Lista de Atributos';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplos para o Formato da Lista de Atributos:</h4>
<pre>Tamanho,GG[+1.99],M,P[-2.99];Cor,Vermelho,Verde,Amarelo,Cor_Especial[=24.00];Etc...,...,...</pre>
<h4>Ajustes de preço em linha para utilizar modificação Avançada de Atributos:</h4><pre>+ == Adiciona esta quantia ao preço configurado.<br />- == Subtrai esta quantia do preço configurado.<br />= == Seta o preço do produto para esta quantia.</pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Lista de Atributos Personalizados';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplos do Formato da Lista de Atributos Personalizáveis:</h4>
<pre><strong>Nome;Extras;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Seleção múltipla: use tecla-CTRL e Mouse';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Habilitar pagamento eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Marque para usar eProcessingNetwork.com com o VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Modo de Teste ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Selecione \'Sim\' enquanto testa. Select \'Não\' para 
habilitar as transações reais.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'ID de Login eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Este é seu ID de Login no eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'Chave de Transação do eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Esta é sua Chave de Transação do eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Tipo de Autenticação';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Este é o tipo de autenticação no eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Produtos Relacionados';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Você pode estabelecer relacionamentos entre produtos usando esta lista. 
Selecione um ou mais produtos e estes tornam-se <strong>Produtos Relacionados</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Você também pode estar interessado neste(s) produto(s)';
	var $_PHPSHOP_IMAGE_ACTION = 'Ação Imagem';
	var $_PHPSHOP_NONE = 'nenhum';
	var $_PHPSHOP_ORDER_HISTORY = 'Histórico do Pedido';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Comentário';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Comentários em seu Pedido';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Incluir este comentário?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Data de Inclusão';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Cliente Notificado?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Alteração na Situação do Pedido';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'None de Usuário USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'None de Usuário na USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'Senha USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Senha na USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'Servidor USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'Servidor da USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'Caminho USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'Caminho no servidor USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'Tamanho da Embalagem USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Tamanho da Embalagem USPS';
	var $_PHPSHOP_USPS_PADDING = 'Percentagem a inflar o peso para a embalagem de envio. (Incluir %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Infla o peso do envio para permitir peso adicional para a caixa e embalagem  do envio. Usando isto você pode colocar o peso atual nas configurações de peso de seus itens.  Requer que você inclua o símbolo %.  Exemplo 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Taxa de manuseio';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Sua Taxa de Manuseio para este método de envio.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Sua Taxa de Manuseio para este método de envio.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'A sua Taxa de Manuseio para Envios USPS Internacionais.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'A sua Taxa de Manuseio para Envios USPS Internacionais.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Sua taxa Internacional por libra para envios USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Sua taxa Internacional por libra para envios USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = 'Se forem utilizados pedidos parcelados e for inferior a 1,7kg e acima de 16kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Este pacote pode ser gerido por 
uma máquina?  Padrão deve ser Não.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS Correio doméstico';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS Correio expresso';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = 'USPS Correio expresso normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS Correio expresso em envelope de tarifa plana (31 x 24cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio expresso em envelope de tarifa plana. Padrão deve ser Não já que pode ser mais barato que a tarifa atual mas pode não caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS Correio prioritário';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = 'USPS Correio prioritário normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = 'USPS Correio prioritário em envelope de tarifa plana (31 x 24cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio prioritário em envelope de tarifa plana.  Padrão deve ser Não já que pode ser mais barato que a tarifa atual mas pode não caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS Correio prioritário em caixa de tarifa plana (28.6 x 22.2 x 15.2cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio prioritário em caixa de tarifa plana.  Padrão deve ser Não já que pode ser mais barato que a tarifa atual mas pode não caber na caixa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS Correio prioritário em caixa de tarifa plana (35 x 30 x 8.8cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio prioritário em caixa de tarifa plana.  Padrão deve ser Não já que pode ser mais barato que a tarifa atual mas pode não caber na caixa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS Correio de Primeira Classe (inferior a 390g.)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio de Primeira Classe.  Isto só será exibido se o peso do pacote for inferior a 40kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS Envio de parcelas';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'USPS Correio parcelado normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS Conjunto de material impresso';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = 'Selecionar se pretende enviar via USPS Conjunto de material impresso.  Padrão deve ser Não a não ser que envie revistas ou jornais em grupos. Limite: 6,8kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS Correio de Media';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio de Media. Padrão deve ser Não.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS Correio de biblioteca';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio de Biblioteca.  Padrão deve ser Não.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS Correio internacional';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS Serviço global expresso de documentos registados';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = 'Selecionar se pretende enviar via USPS Serviço global expresso de documentos registados.  Padrão deve ser Não.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS Serviço global expresso de documentos não-registados';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = 'Selcionar se pretende enviar via USPS Serviço global expresso de documentos não-registados.  Padrão deve ser Não.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS Correio expresso global (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = 'USPS Correio expresso global normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS Correio global prioritário em Envelope Grande de tarifa plana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio global prioritário em Envelope grande de tarifa plana.  Padrão deve ser Não já que pode ser mais barato 
que a tarifa atual mas pode não caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS Correio global prioritário em Envelope 
pequeno de tarifa plana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio global prioritário em Envelope pequeno de tarifa plana.  Padrão deve ser Não já que pode ser mais barato 
que a tarifa atual mas pode não caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS Correio de prioridade global - Peso variável';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = 'USPS Correio prioritário global normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS Correio de carta por via aérea';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio de carta por via aérea.  Padrão deve ser Não já que pode ser mais barato que a tarifa atual mas pode não 
caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS envio de parcela por via aérea';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = 'USPS envio normal de parcela por via aérea.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS Correio carta econômico';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio carta econômico.  Padrão deve ser Não já que pode ser mais barato que a tarifa atual mas pode não caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS envio econômico de parcela';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = 'Correio parcelado normal econômico.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS não pôde processar a Taxa de Envio Requisitada.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parâmetros';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Lista de Tipos de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Adiciona/Edita Tipo de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Lista de Tipos de Produto para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Lista Tipos de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Adicionar Tipo de Produto para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Adiciona Tipo de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Nome do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Descrição do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parâmetros';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informações do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Página de Navegação do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Página de Detalhes do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parâmetros do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Informações do Parâmetro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Tipo de Produto não encontrado!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nome do Parâmetro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Este nome será o nome da coluna da tabela. 
Deve ser único e sem espaços.<br />Por exemplo: material_principal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etiqueta do Parâmetro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Descrição do Parâmetro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Tipo do Parâmetro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Inteiro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Texto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Texto Curto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Flutuante';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Caractere';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Data & Hora';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Data';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Hora';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Quebra de Linha';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Múltiplos Valores';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Valores Possíveis';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Exibir Valores Possíveis como Múltipla seleção?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Se Valores Possíveis são fixados, o Parâmetro pode ter apenas estes valores. Exemplo de Valores Possíveis:</strong><br/><span class="sectionname">
Aço;Madeira;Plástico;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Valor Padrão';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Para Valor Padrão do Parâmetro use este formato:<ul><li>Data: AAA-MM-DD</li><li>Hora: HH:MM:SS</li><li>Data & Hora: AAAA-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unidade';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Pesquisa Avançada segundo os Parâmetros';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Procurar Parâmetros';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Você deseja procurar produtos segundo parâmetros técnicos?<BR>Você pode utilizar qualquer formulário já preparado:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Lamento. Não há nenhuma categoria para pesquisar.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Lamento. Não existe nenhum Tipo de Produto publicado com esse nome.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'É Como';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'NÃO É Como';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Pesquisar texto completo';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Todos os selecionados';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Qualquer Selecionado';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Redefinir o Formulário';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Pesquisar na Categoria';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Alterar Parâmetros';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Ordem Descendente';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ordem Ascendente';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parâmetros da Categoria';
	var $_PHPSHOP_FEE = 'Comissão';
	var $_PHPSHOP_PRODUCT_CLONE = 'Clonar Produto';
	var $_PHPSHOP_CSV_SETTINGS = 'Configurações';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimitador';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Caractere delimitador de Campo';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Carregar (Upload) um arquivo CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Submeter arquivo CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Carregar da pasta';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Carregar arquivo CSV do Servidor';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exportar para arquivo CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Escolher tipo de ordenação para os campos';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Ordenação Padrão';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'A minha ordenação personalizada';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exportar todos os produtos para um arquivo CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Importar/Exportar Configuração de CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Salvar alterações';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nome do Campo';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Valor Padrão';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Campo de Ordenação';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'campo Obrigatório?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importar/Exportar';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Adicionar novo Campo';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documentação';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Desculpe, mas o Produto solicitado não foi encontrado!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Mostrar Produtos que estão fora de Estoque';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Quando ativado, Produtos que não se encontram atualmente em Estoque são exibidos. Caso contrário, tais produtos são ocultados.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Número {unit}s na embalagem:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Número {unit}s na caixa:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Ocultar produtos fora de estoque';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Produtos em Destaque & com Desconto';
	var $_PHPSHOP_FEATURED = 'Destacados';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Voltar ao País';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Voltar ao gerênciador de arquivos';
	var $_PHPSHOP_ADD_STATE = 'Adiciona um Estado';
	var $_PHPSHOP_LIST_STATES = 'Lista Estados';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Destacados E com Desconto';
	var $_PHPSHOP_SHOW_FEATURED = 'Produtos em Destaque';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Produtos com Desconto';
	var $_PHPSHOP_FILTER = 'Filtro';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Voltar ao Site Principal';
	var $_PHPSHOP_EXPAND_TREE = 'Expandir Árvore';
	var $_PHPSHOP_COLLAPSE_TREE = 'Encolher Árvore';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Preço Descontado';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Aqui você pode sobrepor a configuração de desconto inserido um desconto especial para este produto.<br/>A Loja criará um novo registro de desconto a partir do preço descontado.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Preço Unitário';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'A loja está fora do ar?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Se você marcar isto, a Loja irá exibir uma Mensagem de Fora do Ar.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Mensagem de Fora do Ar';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefixo de Tabela para as Tabelas da Loja';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Isto é por padrão <strong>vm</strong>.';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Mostrar a Navegação de Página no Topo da Listagem de Produtos?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Ativa ou Desativa a exibição da navegação de página no topo da Lista de Produtos na Vitrine.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Mostrar o Número de Produtos?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Mostrar o Número de Produtos em uma Categoria  como Categoria(4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Estilo do Botão Pôr-no-Cesto';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Ativar Redimensionamento Dinâmico de Miniaturas?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Se marcado, você ativa o Redimensionamento Dinâmico de Imagens. Isto significa que todas as Imagens Miniatura serão redimensionadas para se ajustarem aos Tamanhos que você fornecer abaixo usando as funções GD2 do PHP (você pode verificar se você tem suporte a GD2 navegando em "System" -> "System Info" -> "PHP Info" -> gd).
As qualidade da Miniatura de Imagem é muito melhor do que imagens que foram "redimensionadas" pelo navegador. As novas imagens geradas são postas no diretório /shop_image/prduct/resized. Se a imagem já foi redimensionada, esta cópia será enviada ao navegador, assim a imagem não é redimensionada novamente e novamente.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Largura da imagem pequena';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'A <strong>largura</ strong> desejada da Imagem Miniatura redimensionada.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Altura da Imagem Miniatura';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'A <strong>largura</ strong> desejada da Imagem Miniatura redimensionada.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Por favor selecione pelo menos uma opção na Configuração de Entrega!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Configuração do Preço';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Grupo de Membros para mostrar preços a';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'O grupo de membros selecionado e todos os grupos com permissões mais elevadas poderão ver os preços dos produtos.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Mostrar "(inclui XX% de Imposto)" quando aplicável?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Quando marcada, os usuários verão o texto "(inclui XX% de Imposto)" quando os preços são mostrados incluindo impostos.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Mostrar a etiqueta de preço para embalagem?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Quando marcada, a etiqueta de preço é derivada da unidade do produto e dos valores de embalagem: <strong>Preço por Unidade (10 peças)</strong><br/>Quando não marcado, as etiquetas de preço têm o aspecto de costume: <strong>Preço: R$xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'mais Configurações do Núcleo';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Configurações do Núcleo';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Características da Vitrine';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Configuração dos Impostos';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantidade Inicial';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantidade Final';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Configurações de Registro de Usuários';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Registro de usuários permitido?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Novas contas necessitam ativação?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Usar registro silencioso (oculto) de usuários?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Quando ativo, os clientes não precisam inserir um Usuário e Senha para uma nova conta. Em vez disso usam um endereço de e-mail e recebem uma senha gerada aleatóriamente. Os dados de registro são enviados por e-mail ao cliente.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Olá %s,

Obrigado por se registar em %s. Sua conta de cliente foi criada.
Pode fazer o login em %s utilizando o seguinte usuário e senha:

Usuário - %s
Senha - %s';
	var $_PEAR_LOG_CRIT = 'Crítico';
	var $_PEAR_LOG_ERR = 'Erro';
	var $_PEAR_LOG_WARNING = 'Atenção';
	var $_PEAR_LOG_INFO = 'Informação';
	var $_PEAR_LOG_TIP = 'Informação';
	var $_PEAR_LOG_ALERT = 'Alerta';
	var $_PEAR_LOG_EMERG = 'Emergência';
	var $_PEAR_LOG_NOTICE = 'Notificação';
	var $_PEAR_LOG_DEBUG = 'Depurar';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Habilitar pagamento PayFlow Pro?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Marque para usar VeriSign\'s PayFlow Pro com o VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Modo de Teste?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Selecione \'Sim\' enquanto testa. Selecione \'Não\' para 
habilitar transações Reais.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign Processando ID de Parceiro';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'O ID de Parceiro fornecido a você pelo Revendedor autorizado VeriSign que o registrou no serviço PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'ID de Login para PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Estes são os dados para autenticação no serviço PayFlow Pro';
	var $_VM_TAXDETAILS_LABEL = 'Total de taxas e impostos';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Ordenação padrão dos produtos';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Define por qual campo os produtos são ordenados por padrão nas páginas de navegação';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Campos "Classificar por" disponíveis';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Escolha os campos "Classificar por" para a página de navegação. Cada um define um método de classificação para a página de navegação de produto. Se você desmarcar todos, o formuláro "Ordenar por" não será mostrado.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Mostrar informações sobre "Política de Devoluções" na página de confirmação de pedido?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'Os proprietários de lojas são obrigados por lei a informar os seus clientes sobre as políticas de devolução e cancelamento de pedido na maioria dos países europeus. Portanto, isto deve ser ativado na maioria dos casos.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Texto de informações legais (versão curta).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Este texto instrui seus clientes abreviadamente sobre suas políticas de devolução e cancelamento de pedido. É mostrado na última página da finalização, logo acima do botão "Confirmar Pedido".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Versão completa da política de devoluções (lincar para um item de conteúdo).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Por favor adicione um novo item de conteúdo sobre os detalhes de sua política de devolução e cancelamento de pedido.
Posteriormente você poderá selecioná-lo aqui.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Política de devoluções</h5>

Se o produto não corresponder às suas expectativas, assiste-lhe o direito de dissolver o contrato nos 7 dias posteriores à entrega da mercadoria. Para o efeito, deverá proceder ao envio de carta registada com Aviso de Recepção, comunicando ao vendedor a vontade de dissolver o contrato.
O consumidor dispõe de um prazo de 15 dias úteis a contar da recepção da mercadoria para devolver a mesma à entidade 
fornecedora, efetuando esta a sua troca ou reembolso. Esta garantia aplica-se a produtos em estado de novo, sem 
utilizações e na embalagem original.
No caso do direito de resolução ser utilizado, os montantes que já tiverem sido pagos pelo consumidor serão reembolsados no prazo de 15 dias a contar da data da recepção das mercadorias devolvidas. 
Para mais informações sobre cancelamento de pedidos e devolução de produtos, veja a página <a href="%s" onclick="%s" target="_blank">Nossa política de devoluções</a>.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Modo União Européia';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'O diretório para armazenar os dados da sessão não é gravável.  Por favor corrija isto ou entre em contato com seu provedor.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'O Caminho de Gravação da Sessão %s não é gravável. Por favor corrija isto! A loja está tentando usar temporáriamente %s em substituição.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Seu navegador não aceita cookies. Para colocar produtos em seu cesto e comprá-los você precisa habilitar os cookies.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Ignorar primeira linha';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Ignorar valor padrão';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Sobre escrever dados existentes';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Incluir cabeçalhos de coluna';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Configurações de carregamento (Upload)';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Campos disponíveis';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'Mensagens de carregamento (upload) de CSV:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Contagem';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Total';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'Arquivo CSV Importado';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Atualizado';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Deletado';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Adicionado';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Ignorado';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Incorreto';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'Os seguintes campos estão disponíveis para você usar na imprtação ou na exportação.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'No mínimo são requeridos os campos product_sku, product_name e category_path. 
Exceto por product_sku, os outros dois campos não são únicos.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'O único identificador para um produto.<br /.>Valores:<ul>
<li>Número</li><li>Letras</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'O nome do produto. Valores:<ul><li>Texto: Não é permitido 
código HTML.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'O campo product_delete é um campo especial. Este campo é usado para determinar se um produto deve ser deletado ou não.<br />Uso:<ol><li>Adicione o nome "product_delete" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas  e deve estar em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor Y. Se o campo contém algum outro valor, o produto não será deletado.</li></ol> <br /.>Valores:<ul><li>S: Sim, o produto será deletado</li><li>N: Não, o produto não será deletado</li><li>Vazio: Vazio, o produto não será deletado</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Descrição longa para o roduto.<br />Valores:<ul><li>Texto: código HTML permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Descrição curta para o roduto.<br />Valores:<ul><li>Texto: código HTML não permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'O status se um produto está publicado ou não.<br />Valores:<ul><li>S: Sim, o produto está publicado</li><li>N: Não, o produto não está publicado</li><li>Vazio: Vazio, o produto está publicado.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'A largura do produto.<br />Valores:<ul><li>Número</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'A Altura do produto.<br />Valores:<ul><li>Número</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'A data em que o produto estará disponível. Para importação a data deve estar no formato of dia/mês/ano ou dia-mês-ano. Em sistemas Windows a data vai até 19/01/2038.<br />Uso:<ol><li>Adicione o nome "product_available_date" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas e deve estar em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com uma data. Se o campo contém algum outro valor, os dados serão ignorados.</li></ol><br />Valores:<ul><li>Data: dia/mês/ano ou dia-mês-ano</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'O número de artigos que você tem em estoque.<br /><br />Uso:<ol><li>Adicione o nome "product_in_stock" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas  e deve estar em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor numérico. Se o campo contém algum outro valor, o valor padrão será usado.</li></ol><br />Valores:<ul><li>Número</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'As diferentes escolhas que um produto tem. Use isto para dar a um produto especificações diferentes. Por exemplo uma camiseta que vem em diferentes tamanhos e cores. Você pode especificar os tamanhos e cores como este exemplo: Tamanho,XL[+1.99],M,S[-2.99];Cor,Vermelha,Verde,Amarelo,CorExpressiva[=24.00];E assim por diante,..,..<br /><br />Você pode ajustar os preços por atributos usando as seguintes opções:<ul><li>+: Adicione este montate ao preço configurado.</li><li>-: Subtraia este montante do preço configurado.</li><li>=: Setar o preço do produto para este montante.</li></ul><br />
Uso:<ol><li>Adicione o nome "attribute" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas  e deve estar em letras minúsculas.</li>
<li>Adicione uma coluna ao seu arquivo CSV como atributo texto.</li></ol><br /.>Valores:<ul><li>Texto: código HTML não permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'Este exibe quando o produto está disponível. O valor pode ser um texto descritivo ou o nome de um arquivo de imagem. Imagens devem ser postas em "shop_image/availability/".<br />Uso:<ol><li>Adicione o nome "product_availability" à tela de configuração. O nome 
é sensível a letras maiúsculas ou minúsculas e deve estar em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor de texto.</li></ol><br />
Valores:<ul><li>Texto: código HTML não permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'O nome de arquivo da imagem localizada na pasta "shop_image/product/". O nome de arquivo pode ser também uma URL.<br />NOTA: Se você tem o redimencionamento dinâmico habilitado, você precisa preencher o campo "product_thumb_image". O VirtueMart redimenciona a imagem especificada aqui.<br/><br />Uso:<ol><li>Adicione o nome "product_full_image" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas e deve estar 
em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor de texto.</li></ol><br />Valores:<ul><li>Texto:<ul><li>código HTML não permitido</li>
<li>URL\'s são permitidas.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'O nome de arquivo da imagem thumbnail localizada na pasta "shop_image/product/". O nome de arquivo também 
pode ser uma URL.<br />NOTA: Se você tem o redimencionamento dinâmico habilitado, você continua precisando preencher o campo. O VirtueMart redimenciona a imagem especificada aqui.<br /><br />Uso:<ol><li>Adicione o nome "product_full_image" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas e deve estar 
em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor de texto.</li></ol><br />Valores:<ul><li>Texto:<ul><li>código HTML não permitido.</li>
<li>URL\'s são permitidas.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'Um atributo personalizado deverá adicionar um campo de entrada à página de produto com a descrição do atributo 
fornecido. Atributos personalizados são especificados como estes: Nome;Extras;...<br />Uso:<ol><li>Adicione o nome "custom_attribute" à tela de configuração. O nome é 
sensível a letras maiúsculas ou minúsculas e deve estar em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com o atributo texto.</li></ol><br /.>
Valores:<ul><li>Texto: código HTML não permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Especifique o número de ítens no pacote.<br />Uso:<ol><li>Adicione o nome "product_packaging" à tela de 
configuração. O nome é sensível a letras maiúsculas ou minúsculas  e deve estar em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com o número de itens no pacote.</li></ol><br /.>Valores:<ul><li>Número</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Especifique o número de ítens na caixa.<br />Uso:<ol><li>Adicione o nome "product_box" à tela de configuração. 
O nome é sensível a letras maiúsculas ou minúsculas  e deve estar em letras minúsculas.</li><li>Adicione uma coluna ao seu arquivo CSV com o número de ítens na caixa.</li>
</ol><br /.>Valores:<ul><li>Número</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Especifique o valor ou percentual do desconto que o produto tem. Os valores entrados são valores exatos, nenhum cálculo é feito. Isto é o mesmo que se você estivesse preenchendo um desconto através da lista de desconto do produto. Se o desconto já existir, não será adicionado a base de dados mas o produto será ligado ao desconto existente. O critério para determinar se um desconto já existe é o seguinte: os valores têm que ser exatamente os mesmos:
<ol><li>Um Valor, seja ele um total ou uma porcentagem</li><li>Data de Início</li><li>Data Encerramento</li></ol>Isto impede de encher a base de dados com um número enorme dos mesmos descontos.<br /><br />Uso:<ol><li>Adicione o nome "product_discount" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas  e deve estar em letras minúsculas.</li><li>Opcional: Adicione o nome "product_discount_date_start" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas e deve estar em letras minúsculas.</li><li>Opcional: Adicione o nome "product_discount_date_end" à tela de configuração. O nome é sensível a letras maiúsculas ou minúsculas e deve estar em letras minúsculas.</li><li>Adicione as colunas selecionadas ao seu arquivo CSV com os valores correspondentes.</li></ol><br /.>Valores:<ul><li>product_discount</li><ul>
<li>Número<br />Ex. 10</li><li>Percentagem: Precisa incluir o símbolo % <br />Ex. 10%</li></ul><li>product_discount_date_start</li><ul><li>Data: dia/mês/ano ou dia-mês-ano<br />
Dia e mês podem ter a notação de 1 ou 2 dígitos.<br />Ano pode ter a notação de 2 ou 4 dígitos.</li></ul><li>product_discount_date_end</li><ul><li>Data: dia/mês/ano ou dia-mês-ano<br />Dia e mês podem ter a notação de 1 ou 2 dígitos.<br />Ano pode ter a notação de 2 ou 4 dígitos.</li></ul></ul>';
	var $_ITEM_PREVIOUS = 'anterior';
	var $_ITEM_NEXT = 'próximo';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Continuar';
	var $_CMN_CANCEL = 'Cancelar';
	var $_BUTTON_SEND_REG = 'Enviar Registro';
	var $_CONTACT_FORM_NC = 'Por favor certifique-se de que o formulário esteja completo e seja válido.';
	var $_CMN_REQUIRED = 'Requerido';
	var $_CMN_NEW = 'Novo';
	var $_CMN_SAVE = 'Salvar';
	var $_CMN_NEW_ITEM_LAST = 'Novos ítens, por padrão, nas últimas posições. A ordenação pode ser alterada após este item ser salvo.';
	var $_CMN_OPTIONAL = 'Opcional';
	var $_E_APPLY = 'Aplicar';
	var $_E_IMAGES = 'Imagens';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Selecione uma categoria';
	var $_E_REMOVE = 'Remover';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Página';
	var $_PN_OF = 'de';
	var $_PN_START = 'Início';
	var $_PN_PREVIOUS = 'Anterior';
	var $_PN_NEXT = 'Próximo';
	var $_PN_END = 'Final';
	var $_PN_DISPLAY_NR = 'Mostrar #';
	var $_PN_RESULTS = 'Resultados';
	var $_CMN_PRINT = 'Imprimir';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Voltar';
	var $_USERNAME = 'Nome de usuário';
	var $_PASSWORD = 'Senha';
	var $_BUTTON_LOGIN = 'Logar';
	var $_REGISTER_UNAME = 'Nome de usuário';
	var $_REGISTER_EMAIL = 'E-mail';
	var $_REGWARN_NAME = 'Por favor digite seu nome.';
	var $_REGWARN_UNAME = 'Por favor digite nome de usuário.';
	var $_REGWARN_MAIL = 'Por favor entre um endereço de e-mail válido.';
	var $_SEND_SUB = 'Detalhes de conta para %s em %s';
	var $_ASEND_MSG = 'Olá %s,
	
	Um novo usuário se registrou em %s.
	Este e-mail contém seus detalhes:
	
	Nome - %s
	E-mail - %s
	Nome de Usuário - %s
	
	Por favor não responda esta messagem pois é gerada automaticamente e é apenas para fins de informação';
	var $_REG_COMPLETE = '<div class="componentheading">Registro Completo!</div><br />Você pode se Logar agora.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registro Completo!</div><br />Sua conta foi criada e um link de ativação foi enviado para o endereço de e-mail que você cadastrou. Note que você precisa ativar a conta clicando no link de ativação quando você receber o e-mail antes de você poder se logar.';
	var $_DATE_FORMAT_LC = '%A, %d de %B de %Y';
	var $_LAST_UPDATED = 'Última Atualização';
	var $_NOT_AUTH = 'Você não está autorizado a ver este recurso.';
	var $_DO_LOGIN = 'Você precisa se logar.';
	var $_VALID_AZ09 = 'Por favor entre com um %s válido.  Sem espaços, com mais de %d caracteres e contendo 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Publicado';
	var $_CMN_UNPUBLISHED = 'Despublicado';
	var $_MORE = 'Mais...';
	var $_EMPTY_CATEGORY = 'Esta Categoria está atualmente vazia.';
	var $_BUTTON_LOGOUT = 'Sair';
	var $_NO_ACCOUNT = 'Ainda não tem conta?';
	var $_CREATE_ACCOUNT = 'Registro';
	var $_REGWARN_PASS = 'Por favor entre com uma senha válida. Sem espaços, com mais de 6 caracteres e contendo 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Por favor verifique a senha.';
	var $_REGWARN_VPASS2 = 'Os campos de Senha e de Verificação não conferem, por favor tente novamente.';
	var $_USEND_MSG_ACTIVATE = 'Olá %s,

Obrigado por se registrar em %s. Sua conta foi criada e precisa ser ativada antes que você possa usá-la.
Para ativar a conta clique no seguinte link ou copie-o e cole-o em seu navegador:
%s

Depois da ativação você poderá se logar em %s usando o seguinte nome de usuário e senha:

Nome de usuário - %s
Senha - %s';
	var $_USEND_MSG = 'Olá %s,

Obrigado por se registrar em %s.

Você pode se logar agora em %s usando o nome de usuário e senha com os quais se registrou.';
	var $_PROMPT_PASSWORD = 'Perdeu sua senha?';
	var $_HI = 'Oi';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Detalhes do Novo Usuário';
	var $_NEW_USER_MESSAGE = 'Olá %s,


Você foi adicionado como um usuário em %s por um Administrador.

Este e-mail contém seu nome de usuário e senha para logar-se em %s

Nome de usuário - %s
Senha - %s


Por favor não responda esta messagem pois é gerada automaticamente e é apenas para fins de informação';
	var $_REMEMBER_ME = 'Lembre-me';
	var $_REGISTER_TITLE = 'Registro';
	var $_JAN = 'Janeiro';
	var $_FEB = 'Fevereiro';
	var $_MAR = 'Março';
	var $_APR = 'Abril';
	var $_MAY = 'Maio';
	var $_JUN = 'Junho';
	var $_JUL = 'Julho';
	var $_AUG = 'Agosto';
	var $_SEP = 'Setembro';
	var $_OCT = 'Outubro';
	var $_NOV = 'Novembro';
	var $_DEC = 'Dezembro';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'Sobre';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Somente Upload da lista de preços';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Upload de múltiplos preços';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Usar cabeçalhos da coluna como configuração';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Coletar informações de depuração';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Pré-visualizar';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Upload Regular';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Upload de tipos de produtos';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Upload de parâmetros de tipos de produtos';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Upload de referências cruzadas de tipos de produtos';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Upload dos detalhes de tipos de produtos';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Banco de dados vazio';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Continuar upload';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Cancelar upload';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Passos para carregar um arquivo CSV</span>
										<ol>
										<li>Crie uma lista de produtos em um arquivo CSV qualquer, com ou sem os cabeçalhos de coluna.
										<br />É recomendado usar o delimitador de texto ~ (til) e o delimitador do campo ^ (acento circunflexo).
										<br /><span style="font-weight: bold;">Arquivo de Exemplo:</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~
~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~
~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>
										<li>Configure os campos na aba “Configuração” na mesma ordem que no arquivo CSV. Os campos devem combinar com o local exato no arquivo CSV.
										<br />Exemplo: product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">A informação mínima requerida para adicionar um produto é:</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> é uma seqüência de caracteres limitada por contra-barras () que comece com uma categoria de nível superior e siga com as sub-categorias, por exemplo: <br />
										<div class="quote">category/sub-category_1/sub_category_2</div>
										<br />
										Quando o produto tem que ser atribuído a mais de uma categoria, você pode fornecer todas as categorias,<br />
										delimitadas por um <span style="font-weight: bold;">|</span> , como no exemplo abaixo:
										<div class="quote">Category/Sub-category_1/Sub_category_2|Category2/Subcategory22|Category3/Subcategory33</div>
										</li>
										<li>Escolha os delimitadores na aba "Importação/Exportação”.</li>
										<li>Escolha os ajustes do upload na aba "importação/exportação”.</li>
										<li>Escolha carregar um arquivo de seu computador local (submeter arquivo CSV) ou usar um arquivo local (Carregar arquivo CSV do servidor).</li>
										<li>A importação inicia.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Tipos de Produto</span><br /><br />
													Para adicionar tipos de produto, você necessita de 4 arquivos CSV. Cada arquivo CSV representa uma parte do tipo do produto.
													<ul>
													<li><span style="font-weight: bold;">Tipos de produto</span><br />
													Este arquivo CSV contém os tipos principais do produto e deve parecer com este:
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>Music track</td><td>Track</td><td>Y</td><td> </td><td> </td></tr>
													<tr><td>Music album</td><td>Album</td><td>Y</td><td> </td><td> </td></tr>
													<tr><td>Music artist</td><td>Artist</td><td>Y</td><td> </td><td> </td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">Parâmetros do tipo de produto</span><br />
													Este arquivo CSV contém os parâmetros por tipo de produto e deve parecer com este:
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>Music artist</td><td>Name</td><td>Name</td><td>Artist Name</td><td>1</td><td>I</td><td> </td><td>N</td><td> </td><td> </td></tr>
													<tr><td>Music artist</td><td>Birth</td><td>Birth</td><td>Artist Birth</td><td>2</td><td>D</td><td> </td><td>N</td><td> </td><td> </td></tr>
													<tr><td>Music album</td><td>Duration</td><td>Duration</td><td>Duration of album</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>minutes</td></tr>
													</table>
													</div>
													<br />
													O parâmetro do tipo de produto do pode ter diversos valores, eles são:
													<ul>
													<li>I: Inteiro</li>
													<li>T: Texto</li>
													<li>S: Texto curto</li>
													<li>F: Flutuante</li>
													<li>C: Caractere</li>
													<li>D: Data & Hora</li>
													<li>M: Hora</li>
													<li>V: Valores Múltiplos</li>
													<li>B: Quebra de Linha</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">Ítens por nome de tipo de produto</span><br />
													Este arquivo CSV contém os detalhes pelo parâmetro nome do tipo de produto e deve parecer com este:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>Music artist</td><td>Singing Star</td><td>1975</td></tr>
													<tr><td>5678</td><td>Music artist</td><td>Rocking Band</td><td>1980</td></tr>
													</table><br />
													Por nome de tipo de produto você necessita um arquivo CSV separado. A razão para isto é que os nomes das colunas para cada arquivo CSV são diferentes por causa do conjunto do parâmetros de tipo de produto.
													</li><br />
													<li><span style="font-weight: bold;">Referência cruzada entre Tipo de Produto e SKU (código) do Produto</span><br />
													Este arquivo CSV contém a ligação entre um tipo de produto e um SKU (código) de produto e deve parecer com este:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td></tr>
													<tr><td>1234</td><td>Music artist</td></tr>
													<tr><td>5678</td><td>Music artist</td></tr>
													</table>
													</li>
													</ul><br />
													Procedimento:<br />
													<ol>
													<li>Carregue o arquivo CSV Tipos de Produto</li>
													<li>Carregue o arquivo CSV Parâmetros do Tipo de Produto</li>
													<li>Carregue o arquivo CSV Ítens do Tipo de Produto</li>
													<li>Carregue o arquivo CSV Referência Cruzada de Tipo de Produto</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Base de Dados Vazia</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">USE COM CUIDADO !!! NÃO HÁ RETORNO !!!</span><br /><br />
													 Esvaziar a base de dados removerá TODOS OS dados em sua base de dados das seguintes tabelas:
													 <ul>
													 <li>products</li>
													 <li>products</li>
													 <li>product_price</li>
													 <li>product_mf_xref</li>
													 <li>product_attribute</li>
													 <li>category</li>
													 <li>category_xref</li>
													 <li>product_attribute_sku</li>
													 <li>product_category_xref</li>
													 <li>product_discount</li>
													 <li>product_type</li>
													 <li>product_type_parameter</li>
													 <li>product_product_type_xref</li>
													 </ul>
													 Tudo com exceção do primeiro fabricante é removido:
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 As seguintes tabelas são completamente deletadas:
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													 O x representa o número da tabela. Este número relaciona-se aos tipos do produto que estão no sistema. Desde que a tabela tipos de produto esteja completamente vazia, estas tabelas serão removidas. Os carregamento de novos tipos de produto recriará as tabelas.<br /><br />
													 Procedimento:
													 <ol>
													 <li>Escolher “Base de Dados Vazia” nas configurações de carregamento(Upload)</li>
													 <li>Marcar “Coletar informações de depuração” se você quiser informações adicionais do resultado</li>
													 <li>Clique em "Submeter arquivo CSV" ou "Carregar arquivo CSV do Servidor". Não é necessário entrar com um nome de arquivo.</li>
													 <li>Você é perguntado se está certo de que você quer esvaziar sua base de dados. Clique OK se você tem certeza, caso contrário clique Cancelar.</li>
													 <li>A base de dados é esvaziada agora ou você é retornado à tela principal dependendo de sua escolha anterior.</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Upload de Múltiplos Preços</span><br /><br />
														    Procedimento:
														    <ol>
														    <li>Crie um arquivo CSV que contenha os seguintes campos:
														    	<ul>
															<li>product_sku</li>
															<li>product_price</li>
															<li>product_currency</li>
															<li>price_quantity_start</li>
															<li>price_quantity_end</li>
															<li>price_delete</li>
															</ul>
														    Veja na aba Campos Disponíveis que informação cada campo contém. Se você quiser usar os cabeçalhos das colunas como configuração, preencha a primeira linha com o nome dos cabeçalhos das colunas.
														    </li>
														    <li>Ajuste os campos da configuração, como mencionado no ponto 1 na aba Configuração ou se você adicionou os cabeçalhos das colunas ao seu arquivo CSV, selecione “Usar cabeçalhos da coluna como configuração” nas Configurações de carregamento (Upload).
														    </li>
														    <li>Selecione "Upload de Múltiplos Preços" nas Configurações de carregamento (Upload)</li>
														    <li>Opcionalmente, selecione "Pré-visualizar" e/ou "Coletar informações de depuração"</li>
														    <li>Selecione um arquivo para carregar ou para ler de um diretório</li>
														    <li>Selecione "Submeter arquivo CSV" ou "Carregar arquivo CSV do Servidor" dependendo se você está carregando um arquivo ou lendo um arquivo de um diretório</li>
														    <li>Os preços serão importados agora</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">Deletar Preços</span><br />
														    Usando a importação de preços múltiplos também é possível deletar preços. Um preço é deletado quando os seguintes campos no arquivo CSV combinam com os dados na base de dados:
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'O preço para um produto sem denominador da moeda corrente.<br /><br />Uso:<ol><li>Selecione o nome "product_price" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor do preço.</li></ol><br />Valores:<ul><li>Numérico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'O comprimento do produto.<br /><br />Uso:<ol><li>Selecione o nome "product_length" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor numérico.</li></ol><br />Valores:<ul><li>Numérico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'A medida do comprimento, da largura e da altura do produto. Pode ser polegadas, centimeters, etc.<br /><br />Uso:<ol><li>Selecione o nome "product_lwh_uom" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'O peso do produto.<br /><br />Uso:<ol><li>Selecione o nome "product_weight" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor numérico.</li></ol><br />Valores:<ul><li>Numérico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'A medida do peso do produto. Pode ser libras, kilo, etc. <br /><br />Uso:<ol><li>Selecione o nome "product_weight_uom" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Os atributos são parte de um produto e são usados pelos "produtos-filhos" para dar-lhes especificações.<br />Uso:<ol><li>Selecione o nome "attributes" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com atributos texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido.<br />Os valores devem ser separados por um símbolo de tubulação (|). Por exemplo: attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Os atributos são parte de um produto e são usados pelos "produtos-filhos" para dar-lhes especificações.<br />Uso:<ol><li>Selecione o nome "custom_attribute" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor dos atributos texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido.<br />Os valores devem ser separados por um símbolo de tubulação (|). Por exemplo: attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'O dia onde o desconto para um produto começa. Para mais informação ver "product_discount".<br /><br />Uso:<ol><li>Selecione o nome "product_discount_date_start" do menu na tela de configuração.</li><li>Adicionar as colunas escolhidas a seu arquivo CSV com o valor da data.</li></ol><br />Valores:<ul><li>product_discount_date_start</li><ul><li>Data: dia/mês/ano ou dia-mês-ano<br />Dia e mês podem ser numa notação de 1 ou 2 dígitos.<br />Ano pode ser numa notação de 2 ou 4 dígitos.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'O dia onde o desconto para um produto termina. Para mais informação ver "product_discount".<br /><br />Uso:<ol><li>Selecione o nome "product_discount_date_end" do menu na tela de configuração.</li><li>Adicionar as colunas escolhidas a seu arquivo CSV com o valor da data.</li></ol><br />Valores:<ul><li>product_discount_date_end</li><ul><li>Data: dia/mês/ano ou dia-mês-ano<br />Dia e mês podem ser numa notação de 1 ou 2 dígitos.<br />Ano pode ser numa notação de 2 ou 4 dígitos.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Saltar a primeira linha</span><br />Se o arquivo CSV tiver uma linha de cabeçalho no começo, escolher esta opção saltar essa linha. Isto impede que o cabeçalho seja adicionado a sua base de dados.</li><li><span style="font-weight: bold;">Sobrescrever dados existentes</span><br />Quando adicionar produtos novos a sua base de dados, desmarque esta opção para impedir que quaisquer dados existentes sejam substituídos por produtos que já existem em sua base de dados. O padrão é atualizar dados do produto.</li><li><span style="font-weight: bold;">Pular valor padrão</span><br />Na página de configuração, um valor padrão pode ser especificado para o caso de o campo estar vazio no arquivo CSV. Habilitando esta opção, a importação não incluirá o campo para atualizar se não houver nenhum valor no arquivo CSV.</li><li><span style="font-weight: bold;">Carga da lista de preços somente</span><br />A "Carga da lista de preços somente" deve ser usado se você estiver atualizando os preços de seus produtos. É esperado que a disposição do CSV tenha 2 colunas:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Por favor note que isto NÃO leva em conta as configurações existentes na página de Configuração.<li><span style="font-weight: bold;">Usar cabeçalhos das colunas como configuração</span><br />Caso o arquivo CSV contenha cabeçalhos de coluna na primeira linha, esta opção pode ser usada para que se possa usar os cabeçalhos de coluna como sendo a configuração atual. Os cabeçalhos de coluna devem combinar um dos nomes de coluna definidos na página de Abas Disponíveis. Esta configuração a base do uso, nada é salvo. Os valores padrão não podem ser usados com esta opção.</li><li><span style="font-weight: bold;">Pré-visualizar</span><br />Mostra uma prévia de 5 linhas do arquivo a ser importado. A importação pode então ser cancelada ou continuada.</li><li><span style="font-weight: bold;">Coletar informações de depuração</span><br />Em caso de problemas, use esta opção para ver o que aconteceu durante a importação. No final da importação um relatório será gerado com as etapas e consultas executadas durante a importação.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'O nome do fabricante que está relacionado ao produto. Isto é usado em combinação com o ID do fabricante. Se nenhum ID de fabricante for especificado, somente o nome é verificado. Os fabricantes novos serão o criados com ID´s incrementais. O processo de adição/atualização de fabricantes segue os seguintes regras:<ol><li>Nome existe, ID existe --> O ID é atualizado se diferente</li><li>Nome existe, ID não existe --> fabricante novo criado com o incremento de ID</li><li>Nome não existe, ID existe --> Nome genérico adicionado com o ID existente</li><li>Nome não existe, ID não existe --> Não faz nada</li></ol>Uso:<ol><li>Selecione o nome "manufacturer_name" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com nome do fabricante.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'O ID de fabricante relacionado ao produto e deve ser único. É usado em combinação com o nome do fabricante. Se nenhum nome de fabricante for especificado, somente o link do fabricante do produto será adicionado/atualizado. A adição/atualização de fabricantes segue o seguinte processo:<ol><li>Nome existe, ID existe --> ID é atualizado se diferente</li><li>Nome existe, ID não existe --> Fabricante novo criado com o incremento de ID</li><li>Nome não existe, ID existe --> Nome genérico adicionado com o ID existente</li><li>Nome não existe, ID não existe --> Não faz nada</li></ol>Quando nenhum nome ou ID existem nada é feito para prevenir que sejam adicionados numerosos nomes genéricos de fabricantes.<br /><br />Uso:<ol><li>Selecione o nome "manufacturer_id" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com o ID de fabricante.</li></ol><br />Valores:<ul><li>Numérico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'Uma URL para uma imagem ou página web do produto. Quando ligado a uma imagem, esta será exibida na página dos detalhes do produto.<br /><br />Uso:<ol><li>Selecione o nome "product_url" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'O número de produtos que foram vendidos.<br /><br />Uso:<ol><li>Selecione o nome "product_sales" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor numérico.</li></ol><br />Valores:<ul><li>Numérico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'Quando um produto é setado para estar “Em promoção”, este será oferecido no bloco de Produtos em Oferta.<br />Uso:<ol><li>Selecione o nome "product_special" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor "Y".</li></ol><br />Valores:<ul><li>Y: Sim, o produto está em promoção</li><li>N: Não, o produto não está em promoção</li><li>Vazio: Valor em branco, o produto não está em promoção</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'A unidade do produto como é vendido. Isto é, caixa, saco, etc.<br />Uso:<ol><li>Selecione o nome "product_unit" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor "Y".</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Os produtos-pai são categorizados de acordo com o caminho de categoria. O caminho de categoria especifica a que categoria um produto pertence. Isto conta somente para produtos principais não para produtos-filho desde que os produtos-filho se relacionem aos produtos-pai, não às categorias. Para produtos-filho este campo deve ser deixado vazio. O campo "product_parent_sku" deve estar vazio para produtos principais desde que não se relacionem a nenhum outro produto-pai.<br /><br />Uso:<ol><li>Selecione o nome "category_path" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com o caminho.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido<br />O caminho da categoria deve ser separado por uma barra normal (/). Por exemplo: Móveis/Cadeiras/Madeira</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'O sku (código) do produto-pai é necessário para identificar o pai de produtos-filho. Por favor notem: o campo “category_path” DEVE estar vazio caso contrário o produto será tratado como um produto-pai.<br />Uso:<ol><li>Selecione o nome "category_path" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor de "product_sku" do produto-pai.</li></ol><br />Valores:<ul><li>Numérico</li><li>Letras</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'O ID da taxa de imposto que você quer aplicar ao produto<br />Uso:<ol><li>Selecione o nome "product_tax_id" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor de "product_tax_id" para a taxa de imposto apropriada.</li></ol><br />Valores:<ul><li>Numérico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'Uma moeda corrente diferente pode ser especificada para cada produto.<br />Uso:<ol><li>Selecione o nome "product_currency" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com valor da nova moeda.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido<br />Exemplo: EUR, USD, IDR</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'Esta é uma página personalizada para mostrar seus tipos de produto. Deixar EM BRANCO se você não tiver nenhum arquivo-php individual para ela.<br /><br />Uso:<ol><li>Selecione o nome "product_type_browsepage" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto:<ul><li>Nenhum código HTML é permitido</li><li>URL\'s são permitidas.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'Uma descrição para seu tipo de produto.<br /><br />Uso:<ol><li>Selecione o nome "product_type_description" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'Esta é uma página personalizada para mostrar seus tipos de produto. Deixar este ESPAÇO EM BRANCO se você não tiver nenhum arquivo php individual para ela.<br /><br />Uso:<ol><li>Selecione o nome "product_type_flypage" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto:<ul><li>Nenhum código HTML é permitido</li><li>URL\'s são permitidas.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'O nome do tipo de produto. Este nome deve ser único e sem espaços.<br /><br />Uso:<ol><li>Selecione o nome "product_type_name" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'Um valor padrão para mostrar quando não há nada preenchido para o parâmetro.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_default" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'Uma descrição para seu parâmetro de tipo de produto.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_description" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'Um rótulo para seu parâmetro de tipo de produto.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_label" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Especificar em que ordem o parâmetro do produto deve ser exibido.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_list_order" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Numérico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Sete como "yes" para mostrar os valores de parâmetro possíveis como ítens de múltipla seleção<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_list_multiselect" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor "Y" ou "N".</li></ol><br />Valores:<ul><li>Y: Sim, os valores são multi seleção</li><li>N: Não, os valores não são multi seleção</li><li>Vazio: Valor em branco, os valores não são multi seleção</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'O nome do parâmetro de tipo de produto. Este nome deve ser único e sem espaços porque será o nome da coluna para os detalhes do parâmetro.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_type" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'Isto ajusta o tipo de parâmetro que será usado. Há um número de valores diferentes que podem ser usados.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_type" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor.</li></ol><br />Valores:<ul><li>Texto:<ul>
													<li>I: Inteiro</li>
													<li>T: Texto</li>
													<li>S: Texto Curto</li>
													<li>F: Flutuante</li>
													<li>C: Caractere</li>
													<li>D: Data & Hora</li>
													<li>M: Hora</li>
													<li>V: Valores Múltiplos</li>
													<li>B: Quebra de Linha</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'A unidade a que o parâmetro de tipo de produto se refere.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_unit" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum código HTML é permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'Estes são os valores para o parâmetro e têm de satisfazer os requesitos definidos pelo tipo de parâmetro.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_values" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Isto depende do tipo setado no campo do product_type_parameter_type. Todos os valores têm de ser separados por ponto-e-vírgula (;).</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'O status se um tipo de produto for publicado ou não.<br /><br />Uso:<ol><li>Selecione o nome "product_type_publish" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Y: Sim, o tipo de produto está publicado</li><li>N: Não, o tipo de produto não está publicado</li><li>Vazio: Valor em branco, o tipo de produto está publicado.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'O campo "price_delete" é um campo especial. Este campo é usado para determinar se um preço para um produto deve ser deletado ou não. Este campo é usado ao fazer um carregamento (upload) de múltiplos preços. Antes de um preço ser deletado é necessário que os seguintes campos combinem:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Uso:<ol><li>Selecione o nome "price_delete" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor "Y". Se o campo contiver algum outro valor, o produto não será deletado.</li></ol><br />Valores:<ul><li>Y: Sim, o preço será deletado</li><li>N: Não, o preço não será deletado</li><li>Vazio: Valor em branco, o preço não será deletado</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'A quantidade em que o preço mencionado está disponível.<br /><br />Uso:<ol><li>Selecione o nome "price_quantity_start" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor numérico.</li></ol><br />Valores: Numérico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'A quantidade em que o preço mencionado já não estará disponível.<br /><br />Uso:<ol><li>Selecione o nome "price_quantity_end" do menu na tela de configuração.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor numérico.</li></ol><br />Valores: Numérico</li></ul>';
	var $_VM_UPDATE_STATUS = 'Atualizar Status';
	var $_PRODUCT_WAITING_LIST_EMAIL_SUBJECT = '%s Chegou!';
	var $_PRODUCT_WAITING_LIST_EMAIL_TEXT = 'Obrigado pela sua paciência.

Nosso %s está agora em estoque e pode ser adquirido clicando neste link:
%s

Este é um aviso único, você não receberá este e-mail novamente.';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_EXTRA = 'Informações Extras do Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_EXTRA_TIP = 'É mostrada na Página de Confirmação de Pedido. Pode ser: Código HTML do código de seu Provedor de Serviços de Pagamento, Sugestões ao cliente etc.';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CLASSNAME = 'Nome da classe de pagamento (Ex.:<strong>ps_netbanx</strong>)';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CLASSNAME_TIP = 'Deixe em branco se você não tiver certeza do colocar!';
	var $_CMN_PUBLISH = 'Publicar';
	var $_CMN_UNPUBLISH = 'Despublicar';
	var $_VM_MENUBAR_PLEASESELECT_PUBLISH = 'Por favor faça uma seleção da lista para publicar';
	var $_VM_MENUBAR_PLEASESELECT_UNPUBLISH = 'Por favor faça uma seleção da lista para despublicar';
	var $_VM_MENUBAR_PLEASESELECT_DELETE = 'Por favor faça uma seleção da lista para deletar';
	var $_VM_MENUBAR_CONFIRM_DELETE = 'Você tem certeza que quer deletar os itens selecionados?';
	var $_VM_MENUBAR_PLEASESELECT_TO = 'Por favor faça uma seleção da lista para';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>