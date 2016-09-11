<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* ================================================================================
* CORRIGIDO PARA O PORTUGU�S DO BRASIL - CORRECTED TO BRAZILIAN PORTUGUESE
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
	var $_PHPSHOP_ADMIN = 'Administra��o';
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
	var $_PHPSHOP_RANDOM = 'Produtos Aleat�rios';
	var $_PHPSHOP_LATEST = '�ltimos Produtos';
	var $_PHPSHOP_HOME_TITLE = 'In�cio';
	var $_PHPSHOP_CART_TITLE = 'Cesto';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Concluir Pedido';
	var $_PHPSHOP_LOGIN_TITLE = 'Login';
	var $_PHPSHOP_LOGOUT_TITLE = 'Logout';
	var $_PHPSHOP_BROWSE_TITLE = 'Veja';
	var $_PHPSHOP_SEARCH_TITLE = 'Procurar';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Manuten��o de Conta';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navega��o';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Departamento';
	var $_PHPSHOP_INFO = 'Informa��o';
	var $_PHPSHOP_BROWSE_LBL = 'Procurar Artigos';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produtos';
	var $_PHPSHOP_PRODUCT_LBL = 'Produto';
	var $_PHPSHOP_SEARCH_LBL = 'Pesquisar';
	var $_PHPSHOP_FLYPAGE_LBL = 'Detalhes do Produto';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Pesquisar Produto';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nome do Produto';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Categoria';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Descri��o';
	var $_PHPSHOP_CART_SHOW = 'Mostrar Cesto';
	var $_PHPSHOP_CART_ADD_TO = 'P�r no Cesto';
	var $_PHPSHOP_CART_NAME = 'Nome';
	var $_PHPSHOP_CART_SKU = 'Ref.';
	var $_PHPSHOP_CART_PRICE = 'Valor';
	var $_PHPSHOP_CART_QUANTITY = 'Quantidade';
	var $_PHPSHOP_CART_SUBTOTAL = 'Subtotal';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Adicionar um novo';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Endere�o de Entrega';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'A sua pesquisa n�o devolveu resultados.<br/>';
	var $_PHPSHOP_PRICE_LABEL = 'Pre�o: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Adicionar';
	var $_PHPSHOP_NO_CUSTOMER = 'Voc� n�o � um Cliente Registrado ainda. Por favor forne�a suas Informa��es de Faturamento.';
	var $_PHPSHOP_DELETE_MSG = 'Voc� tem certeza que quer deletar este registro?';
	var $_PHPSHOP_THANKYOU = 'Obrigado pelo seu pedido.';
	var $_PHPSHOP_NOT_SHIPPED = 'Ainda n�o foi enviado.';
	var $_PHPSHOP_EMAIL_SENDTO = 'Um e-mail de confirma��o foi enviado para';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Lamentamos, mas n�o existem usu�rios que possam ser adicionados � lista de usu�rios de com_virtuemart';
	var $_PHPSHOP_ERROR = 'ERRO';
	var $_PHPSHOP_MOD_NOT_REG = 'M�dulo N�o Registrado.';
	var $_PHPSHOP_MOD_ISNO_REG = 'n�o � um m�dulo v�lido do n�cleo do VirtueMart.';
	var $_PHPSHOP_MOD_NO_AUTH = 'N�o tem permiss�o para acessar o m�dulo requisitado.';
	var $_PHPSHOP_PAGE_404_1 = 'P�gina N�o Existe';
	var $_PHPSHOP_PAGE_404_2 = 'Nome de arquivo fornecido n�o existe. Imposs�vel encontrar o arquivo:';
	var $_PHPSHOP_PAGE_403 = 'Direitos de Acesso Insuficientes';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Voc� n�o tem permiss�o para executar';
	var $_PHPSHOP_FUNC_NOT_REG = 'Fun��o N�o Registrada';
	var $_PHPSHOP_FUNC_ISNO_REG = 'n�o � uma fun��o v�lida do VirtueMart.';
	var $_PHPSHOP_ADMIN_MOD = 'Administra��o';
	var $_PHPSHOP_USER_LIST_MNU = 'Listar Usu�rios';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista de Usu�rios';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Nome de usu�rio';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Nome Completo';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_USER_FORM_MNU = 'Adicionar Usu�rio';
	var $_PHPSHOP_USER_FORM_LBL = 'Adicionar/Atualizar Informa��es do Usu�rio';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Informa��es de Cobran�a';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Endere�os de Entrega';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Adicionar Endere�o';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'N�o existem Endere�os para Envio.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Endere�o';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Sobrenome';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_USER_FORM_TITLE = 'Cargo';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Nome de usu�rio';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Senha';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Confirmar Senha';
	var $_PHPSHOP_USER_FORM_PERMS = 'Permiss�es';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'N�mero / ID de Cliente';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Endere�o';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_USER_FORM_CITY = 'Cidade';
	var $_PHPSHOP_USER_FORM_STATE = 'Estado';
	var $_PHPSHOP_USER_FORM_ZIP = 'CEP (apenas n�meros)';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Celular';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Listar M�dulos';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Lista de M�dulos';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Nome do M�dulo';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Permiss�es do M�dulo';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Fun��es';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Pedidos';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Adicionar M�dulo';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Informa��es do M�dulo';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Etiqueta do M�dulo (para o menu superior)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Nome do M�dulo';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Permiss�es do M�dulo';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Cabe�alho do M�dulo';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Rodap� do M�dulo';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Exibir M�dulo no Menu de Administra��o?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Ordem de Exibi��o';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Descri��o do M�dulo';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'C�digo de Idioma';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Arquivo de Idioma';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Listar Fun��es';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Lista de Fun��es';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Nome da Fun��o';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Nome da Classe';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'M�todo da Classe';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Permiss�es';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Adicionar Fun��o';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Informa��es da Fun��o';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nome da Fun��o';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Nome da Classe';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'M�todo da Classe';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Permiss�es da Fun��o';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Descri��o da Fun��o';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Listar Moedas';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Lista de Moedas';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Adicionar Moeda';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Nome da Moeda';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'C�digo da Moeda';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Listar Pa�ses';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lista de Pa�ses';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Adicionar Pa�s';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nome do Pa�s';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'C�digo Pa�s (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'C�digo Pa�s (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Listar Estado';
	var $_PHPSHOP_STATE_LIST_LBL = 'Lista de Estados para: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Adicionar/Atualizar um Estado';
	var $_PHPSHOP_STATE_LIST_NAME = 'Nome do Estado';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'C�digo do Estado (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'C�digo do Estado (2)';
	var $_PHPSHOP_ADDRESS = 'Endere�o';
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
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Listar M�todos de Envio';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'M�todo de Envio Atual';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'M�todos de Envio';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Ativo';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Despesas de manuseio';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Tempo de Entrega';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'tarifa plana';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'porcento';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dias';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configurar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Adicionar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configurar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Atualizar';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'M�todo de Envio';
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
	var $_PHPSHOP_ORDER_LIST_ID = 'N�mero do Pedido';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Data da Pedido';
	var $_PHPSHOP_ORDER_LIST_MDATE = '�ltima Modifica��o';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Situa��o';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_ITEM = 'Itens do Pedido';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Ordem de Compra';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'N�mero do Pedido';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Data do Pedido';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Situa��o do Pedido';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Informa��es do Cliente';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Informa��es de Cobran�a';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informa��es de Envio';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Cobrar de';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Enviar para';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nome';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Empresa';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Endere�o';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Cidade';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Estado';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'CEP';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Pa�s';
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
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'M�todo de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nome da Conta';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'N�mero da Conta';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Data de Expira��o';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Registro de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informa��es de Envio';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informac�es de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Portador';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Modo de Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Data de Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Valor do Envio';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Tipos de Situa��o de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Adicionar Tipo de Situa��o de Pedido';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'C�digo da Situa��o de Pedido';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nome da Situa��o de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Situa��o do Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'C�digo da Situa��o de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nome da Situa��o de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Ordem na Lista';
	var $_PHPSHOP_PRODUCT_MOD = 'Produtos';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Produto Atual';
	var $_PHPSHOP_CURRENT_ITEM = 'Artigo Atual';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Invent�rio';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Ver Invent�rio';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Pre�o';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Estoque';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Listar Produtos';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Produtos';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nome';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publicar';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Pesquisar Produto';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modificado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'com pre�o modificado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'sem pre�o';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Depois';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Antes';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Adicionar Produto';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editar este produto';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Ver atual p�gina de detalhes do produto na loja';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Adicionar Item';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Adicionar Outro Item';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Novo Produto';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Atualizar Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informa��es do Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Situa��o do Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimens�es e Peso do Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Imagens do Produto';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Novo Item';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Atualizar Item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informa��es do Item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Situa��o do Item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimens�es e Peso do Item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Imagens do Item';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Regressar a Produto Relacionado';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Para Atualizar a imagem atual, v� � pasta e insira a nova imagem.';
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
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Pre�o do Produto (bruto)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Pre�o do Produto (s/ Imposto)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Descri��o do Produto';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Descri��o Curta';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Em Estoque';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'No Pedido';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Data de Disponibilidade';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Em Promo��o';
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
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Aqui voc� pode preencher o n�mero de unidades na embalagem. (m�x. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Unidades na Caixa';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Aqui voc� pode preencher o n�mero de unidades na caixa. (m�x. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Resultados de Adicionar Produto';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Resultados de Atualizar Produto';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Resultados de Adicionar Item';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Resultados de Atualizar Item';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Importa��o/Exporta��o CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Diret�rios de Produtos';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Listar Categorias';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Categorias';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Adicionar Categoria';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informa��es da Categoria';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Pai';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'P�gina de Detalhes da Categoria';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Listar Atributos';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Lista de Atributos para';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nome do Atributo';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Ordem da Lista';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Adicionar Atributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formul�rio do Atributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Novo Atributo para Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Atualizar Atributo para Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Novo Atributo para Item';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Atualizar Atributo para Item';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nome do Atributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Ordem da Lista';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Listar Pre�os';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Lista de Pre�os';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Pre�o para';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Nome do Grupo';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Pre�o';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Moeda';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Adicionar Pre�o';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informa��es do Pre�o';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Novo Pre�o para Produto';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Atualizar Pre�o para Produto';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Novo Pre�o para Item';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Atualizar Pre�o para Item';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Pre�o';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Relat�rios';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Listas Individuais de Produto';
	var $_PHPSHOP_RB_SALE_TITLE = 'Relat�rio de Vendas';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Vis�o Geral da Atividade das Vendas';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Setar Intervalo';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mensal';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Semanal';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Di�rio';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Este M�s';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = '�ltimo M�s';
	var $_PHPSHOP_RB_LAST60_BUTTON = '�ltimos 60 dias';
	var $_PHPSHOP_RB_LAST90_BUTTON = '�ltimos 90 dias';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Come�ar em';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Terminar em';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Mostrar esta faixa selecionada';
	var $_PHPSHOP_RB_REPORT_FOR = 'Relat�rio para ';
	var $_PHPSHOP_RB_DATE = 'Data';
	var $_PHPSHOP_RB_ORDERS = 'Pedidos';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Total de itens vendidos';
	var $_PHPSHOP_RB_REVENUE = 'Rendimento';
	var $_PHPSHOP_RB_PRODLIST = 'Listagem de Produtos';
	var $_PHPSHOP_SHOP_MOD = 'Loja';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Imagem';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Pre�o';
	var $_PHPSHOP_ORDER_STATUS_P = 'Pendente';
	var $_PHPSHOP_ORDER_STATUS_C = 'Confirmado';
	var $_PHPSHOP_ORDER_STATUS_X = 'Cancelado';
	var $_PHPSHOP_ORDER_BUTTON = 'Pedido';
	var $_PHPSHOP_SHOPPER_MOD = 'Clientes';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Listar Clientes';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Lista de Clientes';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nome de usu�rio';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Nome Completo';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Adicionar Cliente';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informa��es do Cliente';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Informa��es de Cobran�a';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informa��o';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informa��es de Envio';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Adicionar Endere�o';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Apelido do Endere�o';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nome de usu�rio';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Sobrenome';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nome do Cliente';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Senha';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Confirmar Senha';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Endere�o';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Cidade';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Estado';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'CEP (apenas n�meros)';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Celular';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Sim';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'N�o';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Grupos de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Lista de Grupos de Cliente';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nome do Grupo';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Descri��o do Grupo';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Formul�rio de Grupo de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Adicionar Grupo de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nome do Grupo';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Descri��o do Grupo';
	var $_PHPSHOP_STORE_MOD = 'Loja';
	var $_PHPSHOP_STORE_FORM_MNU = 'Editar Loja';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informa��es sobre a Loja';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Informa��es de Contato';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Imagem Completa';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Carregar Imagem';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nome da Loja';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Endere�o';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_STORE_FORM_CITY = 'Cidade';
	var $_PHPSHOP_STORE_FORM_STATE = 'Estado';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_STORE_FORM_ZIP = 'CEP (apenas n�meros)';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Sobrenome';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_STORE_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefone 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefone 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Pasta para a Imagem';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_PAYMENT = 'Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'M�todos de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'M�todos de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nome';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'C�digo';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Desconto';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Cybercash';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Adicionar M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formul�rio de M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nome de Formul�rio de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Desconto';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'C�digo';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Ordem na listagem';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Usar Cybercash';
	var $_PHPSHOP_TAX_MOD = 'Imposto';
	var $_PHPSHOP_TAX_RATE = 'Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_MNU = 'Listar Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_LBL = 'Lista de Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_STATE = 'Imposto por Estado ou Regi�o';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Imposto do Pa�s';
	var $_PHPSHOP_TAX_LIST_RATE = 'Lista de Taxas de Imposto';
	var $_PHPSHOP_TAX_FORM_MNU = 'Adicionar Taxa de Imposto';
	var $_PHPSHOP_TAX_FORM_LBL = 'Adicionar Informa��es do Imposto ';
	var $_PHPSHOP_TAX_FORM_STATE = 'Imposto por Estado ou Regi�o';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Imposto do Pa�s';
	var $_PHPSHOP_TAX_FORM_RATE = 'Taxa de Imposto (para 16% => entre 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'Vendedor';
	var $_PHPSHOP_VENDOR_ADMIN = 'Vendedores';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Listar Vendedores';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lista de Vendedores';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nome';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Administrador';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Adicionar Vendedor';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Adicionar Informa��o';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Informa��es do Vendedor';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Informa��es de Contato';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Imagem';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Carregar Imagem';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nome do Vendedor da Loja';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nome do Vendedor da Empresa';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Endere�o';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Bairro';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Cidade';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Estado';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'CEP (apenas n�meros)';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Sobrenome';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefone 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefone 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Pasta de Imagens';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Categorias de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista de Categorias de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nome da Categoria';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vendedores';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Adicionar Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formul�rio de Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informa��es da Categoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Listar Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Lista de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nome do Fabricante';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Administra��o';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Adicionar Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Adicionar Informa��o';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Informa��es do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nome do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Categoria do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'P�gina do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Categorias de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Lista de Categorias de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nome da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Adicionar Categoria de Fabricante';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Detalhes da Categoria de Fabricante';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informa��es da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_HELP_MOD = 'Ajuda';
	var $_PHPSHOP_CART_ACTION = 'Atualizar';
	var $_PHPSHOP_CART_UPDATE = 'Atualiza Quantidade no Cesto';
	var $_PHPSHOP_CART_DELETE = 'Deletar Produto do Cesto';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Pre�o';
	var $_PHPSHOP_PRODUCT_CALL = 'Contate para Pre�o';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Anterior';
	var $_PHPSHOP_PRODUCT_NEXT = 'Seguinte';
	var $_PHPSHOP_CART_TAX = 'Imposto';
	var $_PHPSHOP_CART_SHIPPING = 'Taxa de Envio e Manuseio';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Pr�ximo';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registrar-se';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Informa��es de Faturamento';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Empresa';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Endere�o';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefone';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Informa��es de Envio';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Empresa';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Endere�o';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefone';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Informa��es de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nome no cart�o';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'M�todo de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'N�mero de Cart�o de Cr�dito';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Data de Expira��o';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Completar o Pedido';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Informa��o requerida quando o pagamento por Cart�o de Cr�dito � selecionado.';
	var $_PHPSHOP_ZONE_MOD = 'Envio por Zonas';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Listar Zonas';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Adicionar Zona';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Atribuir Zona';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Pa�s';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zona Atual';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Atribuir � Zona';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Atualizar';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Atribuir Zonas';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nome da Zona';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Descri��o da Zona';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Custo por Item na Zona';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limite de Custo na Zona';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Lista de Zonas';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nome da Zona';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Descri��o da Zona';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Custo por Item na Zona';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limite de Custo na Zona';
	var $_PHPSHOP_LOGIN_FIRST = 'Por favor, fa�a o Login ou registe-se primeiro.<br>Obrigado.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Termos do Servi�o';
	var $_PHPSHOP_AGREE_TO_TOS = 'Tem de concordar com os Termos do Servi�o.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Concordo com os Termos do Servi�o';
	var $_PHPSHOP_LEAVE_BLANK = '(deixe em BRANCO se voc� n�o tem<br />nenhum arquivo php individual para ele)';
	var $_PHPSHOP_RETURN_LOGIN = 'J� possui Registro? Por favor, fa�a o Login';
	var $_PHPSHOP_NEW_CUSTOMER = '� um novo cliente? Por favor, insira os seus dados para faturamento';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Conta de Cliente:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informa��es do Pedido';
	var $_PHPSHOP_ACC_UPD_BILL = 'Aqui voc� pode atualizar seus dados para faturamento.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Aqui adiciona ou atualiza a Endere�o para envio.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informa��es da Conta';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informa��es de Envio';
	var $_PHPSHOP_ACC_NO_ORDERS = 'N�o h� pedidos para exibir';
	var $_PHPSHOP_ACC_BILL_DEF = '- Padr�o (igual ao de faturamento)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Pode adicionar Endere�os de envio � sua conta.
Por favor, escolha um apelido ou c�digo para a Endere�o que selecionar abaixo.';
	var $_PHPSHOP_CONFIG = 'Configura��o';
	var $_PHPSHOP_USERS = 'Usu�rios';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Paga com cart�o de cr�dito?';
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
	var $_PHPSHOP_RATE_FORM_NAME = 'Descri��o da Taxa de Envio';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Transportador';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'In�cio do intervalo de CEP�s';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Final do intervalo de CEP�s';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Peso M�nimo';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Peso M�ximo';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Taxa';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Sua taxa de pacote';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Imposto';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Ordem da lista';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportador';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Descri��o da Taxa de Envio';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Peso de ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... at�';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Empresa Transportadora';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Ordem da Listagem';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERRO: ID de Transportador j� existe.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERRO: Escolha um transportador.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERRO: Pelo menos uma taxa de envio existe, delete as taxas antes do Transportador.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERRO: N�o foi encontrado nenhum transportador com este ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERRO: Escolha um transportador.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERRO: N�o foi encontrado nenhum transportador com este ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERRO: Uma descri��o da taxa � requerida.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERRO: O Pa�s de destino � inv�lido. Se optou por mais de um pa�s, Por favor separe-os com um espa�o';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERRO: Um peso m�nimo � requerido';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERRO: Um peso m�ximo  � requerido';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERRO: O peso mais baixo deve ser mais pequeno que o peso mais alto';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERRO: � obrigat�rioapresentar uma taxa de transporte';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERRO: Escolha uma moeda';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERRO: Uma taxa de envio � requerida';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Por favor selecione';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Transportador';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Taxa de Envio';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Valor';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-nenhum-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Cart�o de Cr�dito';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Usar Processador de Pagamentos';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'D�bito Banc�rio';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Apenas Endere�o / Dinheiro na Entrega';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Por favor escolha um Endere�o para Entrega!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Por favor escolha um M�todo de Envio!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Por favor selecione um M�todo de Pagamento!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Por favor verifique os dados introduzidos e confirme o pedido!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Por favor selecione um M�todo de Envio.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Por favor selecione outro M�todo de Envio!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Por favor selecione um M�todo de Pagamento.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Por favor digite o n�mero do seu Cart�o de Cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Por favor digite o nome que est� no Cart�o de Cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'O N�mero do Cart�o de Cr�dito n�o � v�lido.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Por favor, digite o m�s da data de expira��o do cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Por favor, digite o ano da data de expira��o do cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'A data de expira��o n�o � v�lida.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Por favor selecione um Endere�o para Envio.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'N�mero de conta inv�lido.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'N�o h� nada no seu cesto de compras!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERRO: Por favor escolha um transportador!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERRO: A taxa de transporte n�o foi encontrada!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERRO: O seu endere�o para envio n�o foi encontrado!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERRO: N�o existem dados sobre o Cart�o de Cr�dito....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERRO: N�mero de Cart�o de Cr�dito n�o encontrado!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Desculpe, mas o n�mero do cart�o de cr�dito que voc� usou � um n�mero de teste!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'O user_id n�o foi encontrado na base de dados!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Voc� ainda n�o forneceu o nome de titular da sua conta banc�ria.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Ainda n�o forneceu o seu IBAN (N�mero de Conta Banc�ria Internacional).';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Voc� ainda n�o forneceu um n�mero de conta banc�ria.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Ainda n�o forneceu o c�digo do seu Banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Ainda n�o forneceu o nome do seu Banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Foi executado um passo inv�lido para efetuar o CheckOut!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'A informa��o de pagamento capturada para posterior processamento.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Ainda n�o atingiu o valor m�nimo para efetuar a sua compra.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'O valor m�nimo para efetuar compras � de:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Pagamento por Cart�o de Cr�dito';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'outros m�todos de pagamento';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Por favor escolha um m�todo de pagamento:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Valor m�nimo de pedido para sua loja';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informa��es de Conta Banc�ria';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'N�mero da Conta';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'C�digo do Banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Nome do Banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Titular da Conta';
	var $_PHPSHOP_MODULES = 'M�dulos';
	var $_PHPSHOP_FUNCTIONS = 'Fun��es';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Produtos Especiais';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Por favor deixe uma nota juntamente com seu pedido se achar necess�rio';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Nota do Cliente';
	var $_PHPSHOP_INCLUDING_TAX = '(Inclui $tax% Imposto)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Por favor escolha um item.';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Item';
	var $_PHPSHOP_DOWNLOADS_TITLE = '�rea de Download';
	var $_PHPSHOP_DOWNLOADS_START = 'Iniciar Download';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Por favor digite o ID de Download que voc� recebeu em seu e-mail e clique em "Iniciar Download".';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Lamentamos, mas o seu download expirou!';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Lamentamos, mas seu n�mero m�ximo de downloads j� foi atingido.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'ID de Download Inv�lido!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'N�o foi poss�vel enviar a mensagem a ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Mensagem enviada a  ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informa��o do Download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'o(s) arquivo(s) solicitados est�o prontos para download.';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Por favor, digite o(s) seguinte(s) ID(�s) de Download(s) em nossa �rea de Downloads:';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'o n�mero m�ximo de downloads para cada arquivo � de: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Download dispon�vel por at� {expire} dias ap�s o primeiro download.';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Quest�es? Problemas?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informa��o de Download por  ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Produto sujeito a download?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Obrigado por seu pagamento.
A transa��o obteve sucesso. Voc� receber� um e-mail de confirma��o para a transa��o
atrav�s do PayPal.
Voc� pode continuar agora ou logar em <a href=http://www.paypal.com>
www.paypal.com</a> para ver os detalhes da transa��o.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Ocorreu um erro ao processar sua transa��o. O status de sua ordem n�o p�de ser atualizado.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Muito obrigado por comprar conosco. Seguem as informa��es de seu pedido.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Muito obrigado pela sua prefer�ncia!';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Quest�es? Problemas?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'O seguinte pedido foi recebido.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Clique neste link para ver seu pedido.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Quantidades negativas n�o s�o permitidas.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Por favor, entre com uma quantidade v�lida para este item.';
	var $_PHPSHOP_CART_STOCK_1 = 'A quantidade selecionada excede o estoque dispon�vel.';
	var $_PHPSHOP_CART_STOCK_2 = 'Atualmente temos $product_in_stock itens dispon�veis.';
	var $_PHPSHOP_CART_STOCK_3 = 'Clique aqui para ser incluido em nossa lista de espera.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Para adicionar este produto ao seu cesto voc� precisa selecionar uma variante do produto na p�gina de detalhes.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nenhum';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Sr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Sra.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Padr�o';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administra��o de Afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Listar Afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Lista de Afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nome do Afiliado';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Ativo';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Taxa';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Total mensal';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Comiss�o mensal';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Lista de processos';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-mail Afiliados';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail Afiliados';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'E-mail para Quem (* = TODOS)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Seu E-mail';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Assunto';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Incluir estat�sticas atuais';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Taxa de Comiss�o (percentual)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Ativo?';
	var $_PHPSHOP_DELIVERY_TIME = 'Prazo de Entrega (aprox.)';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informa��es da Entrega';
	var $_PHPSHOP_MORE_CATEGORIES = 'mais categorias';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilidade';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Este produto est� indispon�vel no momento.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Dispon�vel em: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Sum�rio';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Estat�sticas';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clientes';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Produtos Ativos';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Produtos Inativos';
	var $_PHPSHOP_STATISTIC_SUM = 'Soma';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Novas Pedidos';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Novos Clientes';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Por favor intruduza seu e-mail abaixo para ser notificado quando este produto voltar ao estoque. 
N�s n�o compartilhamos, arrendamos, vendemos ou usamos este endere�o de e-mail para qualquer outra finalidade que n�o seja informar-lhe quando o produto est� de volta ao estoque. <br /> <br />Muito obrigado!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Obrigado por aguardar! <br />Vamos inform�-lo assim que chegar em nosso estoque.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Notifique-me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Visualizar Impress�o';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Por favor escolha ENTRE Authorize.net OU CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Status do arquivo de configura��o:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = '� grav�vel';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'n�o � grav�vel';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Geral';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Caminho & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Transporte';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Finaliza��o';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Downloads';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Pagamentos';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Usar somente como cat�logo';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Se marcar isto, voc� desabilitar� todas as funcionalidades do cesto.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Mostrar Pre�os';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Mostrar Pre�os incluindo impostos?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Define a maneira como os compradores v�m os pre�os, se incluindo impostos ou excluindo impostos.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Marque para mostrar os pre�os. Se utilizando a funcionalidade de cat�logo, alguns n�o querem que os pre�os apare�am nas p�ginas.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Imposto Virtual';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Isso determina se os itens com peso zero s�o tributados ou n�o. Modifique ps_checkout.php->calc_order_taxable() para personalizar isto.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Modo de Tributa��o:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Baseado no endere�o de entrega';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Baseado no endere�o do vendedor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Isto determina qual taxa de imposto � usada para c�lcular os impostos:<br /><ul><li>Estadual/Nacional referente ao local do vendedor.</li> <li>ou referente ao local do comprador.</li> <li>ou "Modo UE", em que � usada uma taxa de imposto por produto se o cliente est� na Uni�o Europ�ia, caso contr�rio, a taxa de imposto � baseada no endere�o do cliente.</li> </ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Ativar m�ltiplas taxas de imposto?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Marque isto se voc� tem produtos com diferentes taxas de imposto (ex. 7% para livros e comida, 16% para outros coisas)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Subtrair desconto do pagamento antes do imposto/frete?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Ativar Sistema de Coment�rios/Avalia��es de Clientes';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Se ativado, voc� permite que os clientes <strong>avaliem produtos</strong> e <strong>escrevam coment�rios</strong> sobre eles. <br /> Assim, os clientes podem escrever as suas experi�ncias com o produto para outros clientes.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Define a op��o para subtrair o desconto da forma de pagamento ANTES (marcado) ou DEPOIS dos impostos e frete.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Os clientes podem deixar sua informa��o banc�ria?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Selecione esta op��o se desejar que os clientes deixem a sua informa��o banc�ria quando se registam.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Os clientes podem selecionar um Estado/Regi�o?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Selecione esta op��o se desejar que os clientes possam escolher o Estado/Regi�o quando se registam.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Deve concordar com os Termos de Servi�o?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Marque se voc� quer que seus clientes concordem com os Termos do Servi�o antes de se registrarem na loja.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Verifica Estoque?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Define se deve ser verificado o estoque quando um usu�rio adiciona um �tem ao cesto de compras. Se marcado, isto n�o ir� permitir ao usu�rio adicionar mais itens ao cesto do que est�o dispon�veis em estoque.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Ativar Programa de Afiliados?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Isto habilita o rastreamento de afiliados na vitrine da loja. Habilite se voc� adicionou afiliados na administra��o.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Formato e-mails de Pedido:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'E-mail texto';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'E-mail HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Isto determina como s�o configurados os e-mails de confirma��o de pedido:<br /><ul><li>como e-mail de texto simples</li><li>ou como e-mail em html com imagens.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Permitir Administra��o pela Vitrine para Usu�rios n�o Administrativos?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Com esta configura��o voc� pode ativar a Administra��o pela Vitrine para usu�rios que sejam administradores de loja, mas que n�o podem acessar a Administra��o do Joomla (ex. Registrado / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'Endere�o (URL)';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'O Endere�o (URL) do seu Site. Id�ntico normalmente ao seu Joomla! URL (Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'URL Segura';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'URL segura para seu site. (https - com a barra no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'Endere�o (URL) do Componente';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'O Endere�o (URL) para o componente VirtueMart. (Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'Endere�o (URL) de Imagens';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'O Endere�o (URL) para a pasta de imagens do componente VirtueMart.(Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'O caminho para a pasta do componente VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'O caminho para a pasta classes do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'O caminho para a pasta html do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'O caminho para a pasta shop_image do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'P�gina Inicial';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Esta � a p�gina que ser� carregado por padr�o.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'P�gina de Erro';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Esta � a p�gina padr�o para exibir mensagens de erro.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Esta � a p�gina pr�-definidapara mensagens de debug.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEPURA��O ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEPURA��O ? Liga a sa�da de depura��o. Causa a exibi��o da p�gina de DEPURA��O na parte de baixo de cada p�gina. Muito �til durante o desenvolvimento da loja, uma vez que mostra os conte�dos dos cestos, valores dos campos de formul�rio, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'P�gina de Detalhes de Produto';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Esta � a p�gina padr�o para exibir detalhes de produto.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Tema de Categoria';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Define o tema de categoria padr�o para exibi��o de produtos em uma categoria.<br />Voc� pode criar novos temas personalizando os arquivos de tema existentes <br /> (que residem no diret�rio <strong>COMPONENTPATH/html/templates/	</strong> e come�am com browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'N�mero padr�o de produtos em uma linha';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Isto define o n�mero de produtos em uma linha. <br /> Exemplo: Se voc� defini-lo para 4, o tema de categoria ir� mostrar 4 produtos por linha';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Imagem "sem imagem"';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Esta imagem ser� mostrada quando nenhuma imagem de produto estiver dispon�vel.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Filas numa Procura';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determina o n�mero de filas por p�gina quando os resultados de uma procura s�o mostrados numa lista.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'C�r da Procura 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Especifica a c�r das filas �mpares numa lista de resultados.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'C�r da Procura 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Especifica a c�r das filas pares numa lista de resultados.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'N�mero m�ximo de filas';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Ajusta o n�mero de filas a mostrar na lista de pedido da caixa selecionada.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Mostrar rodap�';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Exibe a imagem "powered-by-VirtueMart" no rodap�.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Escolha o m�todo de envio da sua loja';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'M�dulo de Envio Padr�o com configura��es individuais para transportador e taxas. <strong>RECOMENDADO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'M�dulo de Zonas de Envio do Pa�s Vers�o 1.0<br />Para mais informa��es sobre este m�dulo por favor visite <a href="http://ZephWare.com">http://ZephWare.com</a><br /> para detalhes ou contate <a href="mailto:zephware@devcompany.com">ZephWare.com</a> <br />Marque isto para ativar o m�dulo de zonas de envio';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'Ferramentas de C�lculo de Envio da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'C�digo de acesso UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Seu c�digo de acesso da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'ID de usu�rio UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'ID de usu�rio obtido da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Senha UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Senha para sua conta da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'M�dulo InterShipper. Marque apenas se voc� tiver uma conta Intershipper.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Desabilita a sele��o de M�todo de Envio. Escolha se seus clientes compram produtos que n�o precisam ser enviados, como downloads.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Senha InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Senha para sua conta intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'e-mail InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'E-mail para sua conta intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'CHAVE CODIFICADA';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Usado para criptografar os dados armazenados no banco de dados com esta chave. Isto significa que este arquivo deve ser protegido de visualiza��es todo o tempo.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Ativa a Barra de Finaliza��o';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Marque isto se voc� desejar que a ';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Escolha o processo de finaliza��o na sua loja';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Padr�o:</strong><br/>1. Pedido de endere�o de envio<br />2. Pedido de m�todo de envio<br />3. Pedido de m�todo de pagamento<br />4. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Processo 2:</strong><br/>1. Pedido de m�todo de envio<br />2. Pedido de m�todo de pagamento<br />3. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Processo 3:</strong><br/>1. Pedido de m�todo de envio<br />2. Pedido de m�todo de pagamento<br />3. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Processo 4:</strong><br/>1. Pedido de m�todo de pagamento<br /> 2. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Ativar Downloads';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Marque para habilitar a capacidade de download. Somente se voc� desejar vender downloads.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Situa��o de Pedido que habilita o download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Selecione a Situa��o de Pedido na qual o cliente � notificado sobre o download via e-mail.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Situa��o de Pedido que desabilita os downloads';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Define a situa��o de pedido na qual o download � desabilitado para o cliente.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Raiz dos Downloads';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'O caminho f�sico dos arquivos para o cliente baixar. (barra no final!)<br> <span class="message">Para seguran�a de sua loja: Se voc� puder, por favor use um diret�rio EM QUALQUER LUGAR FORA DA RAIZ DO DOM�NIO</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'M�ximo de Downloads';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Define o n�mero de downloads que pode ser feito com um ID de Download, (para um pedido)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Expira��o do Download';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Defina o intervalo de tempo <strong>em segundos</strong> no qual o download esta dispon�vel para o cliente. Este intervalo come�a com o primeiro download! Quando o intervalo expira, o ID de Download � desabilitado.<br />Nota : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Habilitar pagamento IPN via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Marque para deixar seus clientes usar o sistema de pagamento PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'E-mail do pagamento PayPal:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Seu e-mail comercial para os pagamentos PayPal. Tamb�m usado como e-mail do receptor.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Situa��o do pedido para transa��es bem sucedidas';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Selecione a situa��o de pedido para o qual o pedido atual � setado caso o retorno do PayPal IPN for bem sucedido. Se estiver usando op��es para venda de download: selecione a situa��o que habilita o download (ent�o o cliente � notificado imediatamente sobre o download atrav�s do e-mail).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Situa��o do Pedido para transa��es falhas';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Selecione uma situa��o de pedido para transa��es PayPal falhas.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Habilitar pagamentos via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Marque para permitir que seus clientes usem o sistema de pagamento Australiano PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Nome de usu�rio PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Seu usu�rio da conta PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Habilitar pagamento via Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Marque para usar Authorize.net com o VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Modo de Teste ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Selecione \'Sim\' quando testando. Selecione \'N�o\' para habilitar transa��es OnLine.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Sim';
	var $_PHPSHOP_ADMIN_CFG_NO = 'N�o';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'ID de Login Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Este � seu ID de Login na Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Chave de Transa��o Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Esta � sua chave de transa��o Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Tipo de Autentica��o';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Este � o tipo de autentica��o na Authorize.net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Habilitar CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Marque para usar CyberCash com o VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'Em CyberCash MERCHANT voc� deve entrar com seu CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'Chave CyberCash Merchant';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'A chave CyberCash Merchant � fornecida pela CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'URL do pagamento CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'URL do pagamento CyberCash � a URL fornecida por Cybercash para pagamento seguro';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'Tipo de autentica��o CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Tipo de autentica��o fornecido por Cybercash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Pesquisa Avan�ada';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Pesquisar em Todas as Categorias';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Pesquisar todas as informa��es do produto';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Apenas nome do produto';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Apenas Fabricante/Vendedor';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Apenas descri��o do produto';
	var $_PHPSHOP_SEARCH_AND = 'e';
	var $_PHPSHOP_SEARCH_NOT = 'n�o';
	var $_PHPSHOP_SEARCH_TEXT1 = 'A primeira lista permite selecionar uma categoria a qual limitar a pesquisa. A segunda lista permite limitar a sua pesquisa a uma determinada parte das informa��es do produto (ex. Nome).
Uma vez selecionadas (ou deixadas no padr�o), introduza a palavra-chave a ser pesquisada.';
	var $_PHPSHOP_SEARCH_TEXT2 = 'Voc� pode refinar ainda mais a sua pesquisa, adicionando uma segunda palavra-chave e selecionando os operadores AND (e) ou NOT (n�o). Selecionando AND significa que ambas as palavras devem estar presentes para o produto ser exibido.
Selecionando NOT significa que o produto ser� exibido somente se a primeira palavra-chave estiver presente e a segunda n�o.';
	var $_PHPSHOP_ORDERBY = 'Ordenar por';
	var $_PHPSHOP_CUSTOMER_RATING = 'M�dia de votos';
	var $_PHPSHOP_TOTAL_VOTES = 'Total de votos';
	var $_PHPSHOP_CAST_VOTE = 'Por favor expresse seu voto';
	var $_PHPSHOP_RATE_BUTTON = 'Avaliar';
	var $_PHPSHOP_RATE_NOM = 'Avalia��o';
	var $_PHPSHOP_REVIEWS = 'Coment�rios de Clientes';
	var $_PHPSHOP_NO_REVIEWS = 'Ainda n�o h� coment�rios para este produto.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Seja o primeiro a fazer um coment�rio...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Por favor fa�a o seu login para escrever um coment�rio.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Por favor avalie o produto para completar seu coment�rio!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Por favor escreva mais algumas palavras no seu coment�rio. M�nimo de 100 caracteres.';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Por favor reduza seu coment�rio. M�ximo de 2000 caracteres.';
	var $_PHPSHOP_WRITE_REVIEW = 'Fa�a um coment�rio a este produto!';
	var $_PHPSHOP_REVIEW_RATE = 'Primeiro: Avalie o produto. Selecione de 0 (pior) a 5 estrelas (melhor).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Agora escreva um (pequeno) coment�rio....(m�n. 100, m�x. 2000 caracteres)';
	var $_PHPSHOP_REVIEW_COUNT = 'Caracteres escritos: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Submeter coment�rio';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Voc� j� escreveu anteriormente um coment�rio para este produto. Muito obrigado.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Obrigado por seu coment�rio.';
	var $_PHPSHOP_COMMENT = 'Coment�rio';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Adiciona/Edita Tipos Cart�o Cr�dito';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nome de Cart�o de Cr�dito';
	var $_PHPSHOP_CREDITCARD_CODE = 'C�digo Curto do Cart�o de Cr�dito';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tipo de Cart�o de Cr�dito';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Listagem de Cart�es de Cr�dito';
	var $_PHPSHOP_UDATE_ADDRESS = 'Atualizar Endere�o';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continuar Comprando';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Seu pedido foi efetuado com sucesso!';
	var $_PHPSHOP_ORDER_LINK = 'Acesse este link para visualizar os Detalhes do Pedido.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'a Situa��o do seu Pedido de N� {order_id} foi modificada.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'A nova Situa��o �:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Para ver os Detalhes do Pedido, por favor acesse este link (ou copie-o para seu navegador):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Situa��o do Pedido Modificada: Seu Pedido {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Notificar Cliente?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Por favor modifique a Situa��o do Pedido primeiro!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Desconto no Pre�o para o Grupo de Compradores padr�o (em %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Uma quantidade positiva X significa: Se o Produto n�o tiver nenhum Pre�o atribu�do a ESTE Grupo de Cliente, o pre�o padr�o � diminuido em X %. Uma quantidade negativa tem o efeito oposto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Desconto do Produto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista de Descontos dos Produtos';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Adiciona/Edita Descontos de Produtos';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Quantia de desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Entre com a quantia do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tipo de Desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Percentual';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Total';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'A quantia deve ser um percentual ou um total?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Data de in�cio do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Especifica o dia em que o desconto come�a';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Data final do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Especifica o dia em que o desconto termina';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Voc� pode usar o Formul�rio de Desconto de Produto para adicionar descontos!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Voc� Economiza';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Ampliar Imagem';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Estilo de Exibi��o da Moeda';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'S�mbolo monet�rio';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Voc� tamb�m pode usar Tags HTML aqui(ex: EUR (Euro), � (Libra), � (Ien),...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Casas Decimais';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'N�mero de casas decimais mostrados (pode ser 0)<br><b>Faz arredondamentos se os valores t�m diferentes n�meros de casas decimais</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'S�mbolo decimal';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Caractere usado para s�mbolo decimal';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Separador de milhar';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Caractere usado para separar milhar (pode ficar vazio)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Formato positivo';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Exibe formato usado para mostrar valores positivos.<br>
(Symb representa o s�mbolo da moeda)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Formato negativo';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Exibe formato usado para mostrar valores negativos.<br>
(Symb representa o s�mbolo da moeda)';
	var $_PHPSHOP_OTHER_LISTS = 'Outras Listas de Produtos';
	var $_PHPSHOP_MORE_IMAGES = 'Ver Mais Imagens';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Imagens Dispon�veis para';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Voltar aos Detalhes do Produto';
	var $_PHPSHOP_FILEMANAGER = 'Gerenciador de Arquivos';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Gerenciador de arquivos::Lista de Produtos';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Adicionar Imagem/Arquivo';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Atribuir Imagens';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = '� para Download?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Arquivos Associados (Folhas de C�lculo,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publicado?';
	var $_PHPSHOP_FILES_LIST = 'Gerenciador de Arquivos::Lista de Imagem/Arquivo para';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nome de Arquivo';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'T�tulo do Arquivo';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Tipo do Arquivo';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Editar entrada do arquivo';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Imagem Grande';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Imagem Miniatura';
	var $_PHPSHOP_FILES_FORM = 'Carregar um Arquivo para';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Arquivo Atual';
	var $_PHPSHOP_FILES_FORM_FILE = 'Arquivo adicional';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Imagem adicional';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Carregar para';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Caminho padr�o para Imagens de Produto';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Especifique a localiza��o do arquivo';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Caminho de Download (ex. para venda de downloads!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Auto-Criar Miniatura?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Arquivo est� publicado?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'T�tulo do Arquivo (aquilo que o Cliente v�)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Descri��o do arquivo';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL do Arquivo (opcional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Por favor entre um caminho v�lido!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'A Miniatura da Imagem foi criada com sucesso!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'N�O foi poss�vel criar a Miniatura da Imagem!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Erro de carregamento de Arquivo/Imagem';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'N�o foi poss�vel deletar a Imagem.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Imagem deletada com sucesso.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'N�o foi poss�vel deletar a Miniatura da Imagem (talvez n�o exista): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Miniatura da Imagem deletada com sucesso.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'N�o foi poss�vel deletar o Arquivo.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Arquivo deletado com sucesso.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Desculpe, mas o arquivo requisitado n�o foi encontrado!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Imagem n�o encontrada!';
	var $_PHPSHOP_COUPON_MOD = 'Cupom';
	var $_PHPSHOP_COUPONS = 'Cupons';
	var $_PHPSHOP_COUPON_LIST = 'Lista de Cupons';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'O cupom j� foi compensado.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Cupom utilizado! Muito Obrigado.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Se voc� tem o c�digo de cupom, favor inserir abaixo:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Enviar';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Este c�digo de cupom j� existe. Por favor tente novamente.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Atualizar Cupom';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Clique em um c�digo de cupom para edit�-lo, ou para deletar um c�digo de cupom, selecione-o e clique em Delete:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'C�digo';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Percentual ou Total';
	var $_PHPSHOP_COUPON_TYPE = 'Tipo de Cupom';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Um Cupom Presente � deletado depois de ser usado para descontar um pedido. Um Cupom Permanente poder� ser utilizado quantas vezes o cliente quiser.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Cupom Presente';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Cupom Permanente';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Valor';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Deletar C�digo';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Voc� tem certeza que deseja deletar este c�digo de cupom?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Por favor, complete todos os campos.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'O valor do cupom deve ser um n�mero.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Novo Cupom';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'C�digo do Cupom';
	var $_PHPSHOP_COUPON_PERCENT = 'Percentagem';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Valor';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'C�digo de cupom salvo.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Salvar Cupom';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Desconto do Cupom';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'C�digo do cupom n�o encontrado. Favor tentar novamente.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Habilita Uso de Cupons';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Se voc� habilitar o Uso de Cupons voc� permitir� aos clientes digitar N�meros de Cupons para ganhar doscontos em suas compras.';
	var $_PHPSHOP_FREE_SHIPPING = 'Entrega Gr�tis';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'A entrega � gratuita neste Pedido!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Quantia M�nima para Entrega Gr�tis';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'A quantia (IMPOSTOS INCLUSIVE!) que � o M�nimo para Entrega Gr�tis (exemplo: <strong>50</strong> significa Entrega Gr�tis quando o cliente finalizar o pedido com R$50,00 (incluindo impostos) ou mais.';
	var $_PHPSHOP_YOUR_STORE = 'Sua Loja';
	var $_PHPSHOP_CONTROL_PANEL = 'Painel de Controle';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Bot�o - PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Exibe ou Oculta o Bot�o - PDF na Loja.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Deve-se concordar com os Termos do Servi�o em CADA PEDIDO?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Marque se voc� quer que seu cliente concorde com seus Termos do Servi�o em CADA PEDIDO (antes de confirmar o pedido).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Tipo Conta Banc�ria';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Conta Pessoal';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Conta Empresarial';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Poupan�a';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Fatura Parcelada?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Define se voc� quer faturamento parcelado.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Erro Interno ao processar a Requisi��o para';
	var $_PHPSHOP_PAYMENT_ERROR = 'Falha ao Processar o Pagamento';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Pagamento processado com sucesso';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'A UPS n�o p�de processar a Taxa de Envio Requisitada.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Dia(s) de Garantia para Entrega';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'M�todo de Coleta UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Como voc� entrega os pacotes � UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Embalagem UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Selecione o Tipo padr�o de Embalagem.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Entrega Residencial?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residencial (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Comercial (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Cita��o para Entrega Resid�ncial (RES) ou Comercial (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Taxa de Manuseio';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Sua Taxa de Manuseio para este m�todo de envio.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Classe de Taxa��o';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Use a seguinte classe de taxa��o para despesas de envio.';
	var $_PHPSHOP_ERROR_CODE = 'C�digo de Erro';
	var $_PHPSHOP_ERROR_DESC = 'Descri��o do Erro';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Mostrar/Mudar a Chave de Transa��o';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Mostrar/ Alterar a Senha/chave de transa��o';
	var $_PHPSHOP_TYPE_PASSWORD = 'Por favor insira a sua senha de usu�rio';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Senha Atual';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Chave Transa��o Atual';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'A chave de Transa��o foi modificada com sucesso.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Requisita/Captura C�digo do Cart�o de Cr�dito (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Verifica a validade do CVV2/CVC2/CID (n�mero de tr�s ou quadro d�gitos no verso de um cart�o de cr�dito; na Frente se Cart�es American Express)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Por favor digite o n�mero de tr�s ou quadro d�gitos que est� no verso do seu cart�o de cr�dito (Na frente se Cart�o American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Voc� deve entrar com o C�digo do seu Cart�o de Cr�dito para proceguir.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Insira o nome do arquivo';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTA: Aqui pode inserir o nome de um arquivo. <strong>Se 
escolher esta op��o, nenhum arquivo ser� carregado (uploaded)!!! Ter� que o fazer manualmente via FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OU fa�a o Upload de um novo';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Pode fazer o upload de qualquer arquivo. Esse ser� o seu 
produto para venda. Qualquer arquivo j� existente ser� substituido.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Preencha aqui algum texto que ser� mostrado ao cliente na p�gina de detalhes do Produto.<br />ex. 24h, 48 horas, 3 - 5 dias, Sob Pedido...';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OU selecione uma imagem a ser exibida na P�gina de 
Detalhes (flypage).<br />As imagens residem no diret�rio <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Lista de Atributos';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplos para o Formato da Lista de Atributos:</h4>
<pre>Tamanho,GG[+1.99],M,P[-2.99];Cor,Vermelho,Verde,Amarelo,Cor_Especial[=24.00];Etc...,...,...</pre>
<h4>Ajustes de pre�o em linha para utilizar modifica��o Avan�ada de Atributos:</h4><pre>+ == Adiciona esta quantia ao pre�o configurado.<br />- == Subtrai esta quantia do pre�o configurado.<br />= == Seta o pre�o do produto para esta quantia.</pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Lista de Atributos Personalizados';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplos do Formato da Lista de Atributos Personaliz�veis:</h4>
<pre><strong>Nome;Extras;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Sele��o m�ltipla: use tecla-CTRL e Mouse';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Habilitar pagamento eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Marque para usar eProcessingNetwork.com com o VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Modo de Teste ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Selecione \'Sim\' enquanto testa. Select \'N�o\' para 
habilitar as transa��es reais.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'ID de Login eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Este � seu ID de Login no eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'Chave de Transa��o do eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Esta � sua Chave de Transa��o do eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Tipo de Autentica��o';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Este � o tipo de autentica��o no eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Produtos Relacionados';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Voc� pode estabelecer relacionamentos entre produtos usando esta lista. 
Selecione um ou mais produtos e estes tornam-se <strong>Produtos Relacionados</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Voc� tamb�m pode estar interessado neste(s) produto(s)';
	var $_PHPSHOP_IMAGE_ACTION = 'A��o Imagem';
	var $_PHPSHOP_NONE = 'nenhum';
	var $_PHPSHOP_ORDER_HISTORY = 'Hist�rico do Pedido';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Coment�rio';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Coment�rios em seu Pedido';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Incluir este coment�rio?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Data de Inclus�o';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Cliente Notificado?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Altera��o na Situa��o do Pedido';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'None de Usu�rio USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'None de Usu�rio na USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'Senha USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Senha na USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'Servidor USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'Servidor da USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'Caminho USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'Caminho no servidor USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'Tamanho da Embalagem USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Tamanho da Embalagem USPS';
	var $_PHPSHOP_USPS_PADDING = 'Percentagem a inflar o peso para a embalagem de envio. (Incluir %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Infla o peso do envio para permitir peso adicional para a caixa e embalagem  do envio. Usando isto voc� pode colocar o peso atual nas configura��es de peso de seus itens.  Requer que voc� inclua o s�mbolo %.  Exemplo 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Taxa de manuseio';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Sua Taxa de Manuseio para este m�todo de envio.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Sua Taxa de Manuseio para este m�todo de envio.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'A sua Taxa de Manuseio para Envios USPS Internacionais.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'A sua Taxa de Manuseio para Envios USPS Internacionais.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Sua taxa Internacional por libra para envios USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Sua taxa Internacional por libra para envios USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = 'Se forem utilizados pedidos parcelados e for inferior a 1,7kg e acima de 16kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Este pacote pode ser gerido por 
uma m�quina?  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS Correio dom�stico';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS Correio expresso';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = 'USPS Correio expresso normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS Correio expresso em envelope de tarifa plana (31 x 24cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio expresso em envelope de tarifa plana. Padr�o deve ser N�o j� que pode ser mais barato que a tarifa atual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS Correio priorit�rio';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = 'USPS Correio priorit�rio normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = 'USPS Correio priorit�rio em envelope de tarifa plana (31 x 24cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio priorit�rio em envelope de tarifa plana.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa atual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS Correio priorit�rio em caixa de tarifa plana (28.6 x 22.2 x 15.2cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio priorit�rio em caixa de tarifa plana.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa atual mas pode n�o caber na caixa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS Correio priorit�rio em caixa de tarifa plana (35 x 30 x 8.8cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio priorit�rio em caixa de tarifa plana.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa atual mas pode n�o caber na caixa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS Correio de Primeira Classe (inferior a 390g.)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio de Primeira Classe.  Isto s� ser� exibido se o peso do pacote for inferior a 40kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS Envio de parcelas';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'USPS Correio parcelado normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS Conjunto de material impresso';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = 'Selecionar se pretende enviar via USPS Conjunto de material impresso.  Padr�o deve ser N�o a n�o ser que envie revistas ou jornais em grupos. Limite: 6,8kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS Correio de Media';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio de Media. Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS Correio de biblioteca';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio de Biblioteca.  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS Correio internacional';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS Servi�o global expresso de documentos registados';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = 'Selecionar se pretende enviar via USPS Servi�o global expresso de documentos registados.  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS Servi�o global expresso de documentos n�o-registados';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = 'Selcionar se pretende enviar via USPS Servi�o global expresso de documentos n�o-registados.  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS Correio expresso global (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = 'USPS Correio expresso global normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS Correio global priorit�rio em Envelope Grande de tarifa plana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio global priorit�rio em Envelope grande de tarifa plana.  Padr�o deve ser N�o j� que pode ser mais barato 
que a tarifa atual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS Correio global priorit�rio em Envelope 
pequeno de tarifa plana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio global priorit�rio em Envelope pequeno de tarifa plana.  Padr�o deve ser N�o j� que pode ser mais barato 
que a tarifa atual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS Correio de prioridade global - Peso vari�vel';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = 'USPS Correio priorit�rio global normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS Correio de carta por via a�rea';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio de carta por via a�rea.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa atual mas pode n�o 
caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS envio de parcela por via a�rea';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = 'USPS envio normal de parcela por via a�rea.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS Correio carta econ�mico';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = 'Selecionar se pretende enviar via USPS Correio carta econ�mico.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa atual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS envio econ�mico de parcela';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = 'Correio parcelado normal econ�mico.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS n�o p�de processar a Taxa de Envio Requisitada.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Par�metros';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Lista de Tipos de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Adiciona/Edita Tipo de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Lista de Tipos de Produto para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Lista Tipos de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Adicionar Tipo de Produto para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Adiciona Tipo de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Nome do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Descri��o do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Par�metros';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informa��es do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'P�gina de Navega��o do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'P�gina de Detalhes do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Par�metros do Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Informa��es do Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Tipo de Produto n�o encontrado!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nome do Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Este nome ser� o nome da coluna da tabela. 
Deve ser �nico e sem espa�os.<br />Por exemplo: material_principal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etiqueta do Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Descri��o do Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Tipo do Par�metro';
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
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'M�ltiplos Valores';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Valores Poss�veis';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Exibir Valores Poss�veis como M�ltipla sele��o?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Se Valores Poss�veis s�o fixados, o Par�metro pode ter apenas estes valores. Exemplo de Valores Poss�veis:</strong><br/><span class="sectionname">
A�o;Madeira;Pl�stico;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Valor Padr�o';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Para Valor Padr�o do Par�metro use este formato:<ul><li>Data: AAA-MM-DD</li><li>Hora: HH:MM:SS</li><li>Data & Hora: AAAA-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unidade';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Pesquisa Avan�ada segundo os Par�metros';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Procurar Par�metros';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Voc� deseja procurar produtos segundo par�metros t�cnicos?<BR>Voc� pode utilizar qualquer formul�rio j� preparado:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Lamento. N�o h� nenhuma categoria para pesquisar.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Lamento. N�o existe nenhum Tipo de Produto publicado com esse nome.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = '� Como';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'N�O � Como';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Pesquisar texto completo';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Todos os selecionados';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Qualquer Selecionado';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Redefinir o Formul�rio';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Pesquisar na Categoria';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Alterar Par�metros';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Ordem Descendente';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ordem Ascendente';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Par�metros da Categoria';
	var $_PHPSHOP_FEE = 'Comiss�o';
	var $_PHPSHOP_PRODUCT_CLONE = 'Clonar Produto';
	var $_PHPSHOP_CSV_SETTINGS = 'Configura��es';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimitador';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Caractere delimitador de Campo';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Carregar (Upload) um arquivo CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Submeter arquivo CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Carregar da pasta';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Carregar arquivo CSV do Servidor';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exportar para arquivo CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Escolher tipo de ordena��o para os campos';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Ordena��o Padr�o';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'A minha ordena��o personalizada';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exportar todos os produtos para um arquivo CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Importar/Exportar Configura��o de CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Salvar altera��es';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nome do Campo';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Valor Padr�o';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Campo de Ordena��o';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'campo Obrigat�rio?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importar/Exportar';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Adicionar novo Campo';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documenta��o';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Desculpe, mas o Produto solicitado n�o foi encontrado!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Mostrar Produtos que est�o fora de Estoque';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Quando ativado, Produtos que n�o se encontram atualmente em Estoque s�o exibidos. Caso contr�rio, tais produtos s�o ocultados.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'N�mero {unit}s na embalagem:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'N�mero {unit}s na caixa:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Ocultar produtos fora de estoque';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Produtos em Destaque & com Desconto';
	var $_PHPSHOP_FEATURED = 'Destacados';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Voltar ao Pa�s';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Voltar ao ger�nciador de arquivos';
	var $_PHPSHOP_ADD_STATE = 'Adiciona um Estado';
	var $_PHPSHOP_LIST_STATES = 'Lista Estados';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Destacados E com Desconto';
	var $_PHPSHOP_SHOW_FEATURED = 'Produtos em Destaque';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Produtos com Desconto';
	var $_PHPSHOP_FILTER = 'Filtro';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Voltar ao Site Principal';
	var $_PHPSHOP_EXPAND_TREE = 'Expandir �rvore';
	var $_PHPSHOP_COLLAPSE_TREE = 'Encolher �rvore';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Pre�o Descontado';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Aqui voc� pode sobrepor a configura��o de desconto inserido um desconto especial para este produto.<br/>A Loja criar� um novo registro de desconto a partir do pre�o descontado.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Pre�o Unit�rio';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'A loja est� fora do ar?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Se voc� marcar isto, a Loja ir� exibir uma Mensagem de Fora do Ar.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Mensagem de Fora do Ar';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefixo de Tabela para as Tabelas da Loja';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Isto � por padr�o <strong>vm</strong>.';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Mostrar a Navega��o de P�gina no Topo da Listagem de Produtos?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Ativa ou Desativa a exibi��o da navega��o de p�gina no topo da Lista de Produtos na Vitrine.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Mostrar o N�mero de Produtos?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Mostrar o N�mero de Produtos em uma Categoria  como Categoria(4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Estilo do Bot�o P�r-no-Cesto';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Ativar Redimensionamento Din�mico de Miniaturas?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Se marcado, voc� ativa o Redimensionamento Din�mico de Imagens. Isto significa que todas as Imagens Miniatura ser�o redimensionadas para se ajustarem aos Tamanhos que voc� fornecer abaixo usando as fun��es GD2 do PHP (voc� pode verificar se voc� tem suporte a GD2 navegando em "System" -> "System Info" -> "PHP Info" -> gd).
As qualidade da Miniatura de Imagem � muito melhor do que imagens que foram "redimensionadas" pelo navegador. As novas imagens geradas s�o postas no diret�rio /shop_image/prduct/resized. Se a imagem j� foi redimensionada, esta c�pia ser� enviada ao navegador, assim a imagem n�o � redimensionada novamente e novamente.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Largura da imagem pequena';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'A <strong>largura</ strong> desejada da Imagem Miniatura redimensionada.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Altura da Imagem Miniatura';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'A <strong>largura</ strong> desejada da Imagem Miniatura redimensionada.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Por favor selecione pelo menos uma op��o na Configura��o de Entrega!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Configura��o do Pre�o';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Grupo de Membros para mostrar pre�os a';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'O grupo de membros selecionado e todos os grupos com permiss�es mais elevadas poder�o ver os pre�os dos produtos.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Mostrar "(inclui XX% de Imposto)" quando aplic�vel?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Quando marcada, os usu�rios ver�o o texto "(inclui XX% de Imposto)" quando os pre�os s�o mostrados incluindo impostos.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Mostrar a etiqueta de pre�o para embalagem?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Quando marcada, a etiqueta de pre�o � derivada da unidade do produto e dos valores de embalagem: <strong>Pre�o por Unidade (10 pe�as)</strong><br/>Quando n�o marcado, as etiquetas de pre�o t�m o aspecto de costume: <strong>Pre�o: R$xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'mais Configura��es do N�cleo';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Configura��es do N�cleo';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Caracter�sticas da Vitrine';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Configura��o dos Impostos';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantidade Inicial';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantidade Final';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Configura��es de Registro de Usu�rios';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Registro de usu�rios permitido?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Novas contas necessitam ativa��o?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Usar registro silencioso (oculto) de usu�rios?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Quando ativo, os clientes n�o precisam inserir um Usu�rio e Senha para uma nova conta. Em vez disso usam um endere�o de e-mail e recebem uma senha gerada aleat�riamente. Os dados de registro s�o enviados por e-mail ao cliente.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Ol� %s,

Obrigado por se registar em %s. Sua conta de cliente foi criada.
Pode fazer o login em %s utilizando o seguinte usu�rio e senha:

Usu�rio - %s
Senha - %s';
	var $_PEAR_LOG_CRIT = 'Cr�tico';
	var $_PEAR_LOG_ERR = 'Erro';
	var $_PEAR_LOG_WARNING = 'Aten��o';
	var $_PEAR_LOG_INFO = 'Informa��o';
	var $_PEAR_LOG_TIP = 'Informa��o';
	var $_PEAR_LOG_ALERT = 'Alerta';
	var $_PEAR_LOG_EMERG = 'Emerg�ncia';
	var $_PEAR_LOG_NOTICE = 'Notifica��o';
	var $_PEAR_LOG_DEBUG = 'Depurar';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Habilitar pagamento PayFlow Pro?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Marque para usar VeriSign\'s PayFlow Pro com o VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Modo de Teste?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Selecione \'Sim\' enquanto testa. Selecione \'N�o\' para 
habilitar transa��es Reais.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign Processando ID de Parceiro';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'O ID de Parceiro fornecido a voc� pelo Revendedor autorizado VeriSign que o registrou no servi�o PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'ID de Login para PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Estes s�o os dados para autentica��o no servi�o PayFlow Pro';
	var $_VM_TAXDETAILS_LABEL = 'Total de taxas e impostos';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Ordena��o padr�o dos produtos';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Define por qual campo os produtos s�o ordenados por padr�o nas p�ginas de navega��o';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Campos "Classificar por" dispon�veis';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Escolha os campos "Classificar por" para a p�gina de navega��o. Cada um define um m�todo de classifica��o para a p�gina de navega��o de produto. Se voc� desmarcar todos, o formul�ro "Ordenar por" n�o ser� mostrado.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Mostrar informa��es sobre "Pol�tica de Devolu��es" na p�gina de confirma��o de pedido?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'Os propriet�rios de lojas s�o obrigados por lei a informar os seus clientes sobre as pol�ticas de devolu��o e cancelamento de pedido na maioria dos pa�ses europeus. Portanto, isto deve ser ativado na maioria dos casos.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Texto de informa��es legais (vers�o curta).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Este texto instrui seus clientes abreviadamente sobre suas pol�ticas de devolu��o e cancelamento de pedido. � mostrado na �ltima p�gina da finaliza��o, logo acima do bot�o "Confirmar Pedido".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Vers�o completa da pol�tica de devolu��es (lincar para um item de conte�do).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Por favor adicione um novo item de conte�do sobre os detalhes de sua pol�tica de devolu��o e cancelamento de pedido.
Posteriormente voc� poder� selecion�-lo aqui.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Pol�tica de devolu��es</h5>

Se o produto n�o corresponder �s suas expectativas, assiste-lhe o direito de dissolver o contrato nos 7 dias posteriores � entrega da mercadoria. Para o efeito, dever� proceder ao envio de carta registada com Aviso de Recep��o, comunicando ao vendedor a vontade de dissolver o contrato.
O consumidor disp�e de um prazo de 15 dias �teis a contar da recep��o da mercadoria para devolver a mesma � entidade 
fornecedora, efetuando esta a sua troca ou reembolso. Esta garantia aplica-se a produtos em estado de novo, sem 
utiliza��es e na embalagem original.
No caso do direito de resolu��o ser utilizado, os montantes que j� tiverem sido pagos pelo consumidor ser�o reembolsados no prazo de 15 dias a contar da data da recep��o das mercadorias devolvidas. 
Para mais informa��es sobre cancelamento de pedidos e devolu��o de produtos, veja a p�gina <a href="%s" onclick="%s" target="_blank">Nossa pol�tica de devolu��es</a>.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Modo Uni�o Europ�ia';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'O diret�rio para armazenar os dados da sess�o n�o � grav�vel.  Por favor corrija isto ou entre em contato com seu provedor.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'O Caminho de Grava��o da Sess�o %s n�o � grav�vel. Por favor corrija isto! A loja est� tentando usar tempor�riamente %s em substitui��o.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Seu navegador n�o aceita cookies. Para colocar produtos em seu cesto e compr�-los voc� precisa habilitar os cookies.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Ignorar primeira linha';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Ignorar valor padr�o';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Sobre escrever dados existentes';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Incluir cabe�alhos de coluna';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Configura��es de carregamento (Upload)';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Campos dispon�veis';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'Mensagens de carregamento (upload) de CSV:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Contagem';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Total';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'Arquivo CSV Importado';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Atualizado';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Deletado';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Adicionado';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Ignorado';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Incorreto';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'Os seguintes campos est�o dispon�veis para voc� usar na imprta��o ou na exporta��o.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'No m�nimo s�o requeridos os campos product_sku, product_name e category_path. 
Exceto por product_sku, os outros dois campos n�o s�o �nicos.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'O �nico identificador para um produto.<br /.>Valores:<ul>
<li>N�mero</li><li>Letras</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'O nome do produto. Valores:<ul><li>Texto: N�o � permitido 
c�digo HTML.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'O campo product_delete � um campo especial. Este campo � usado para determinar se um produto deve ser deletado ou n�o.<br />Uso:<ol><li>Adicione o nome "product_delete" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas  e deve estar em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor Y. Se o campo cont�m algum outro valor, o produto n�o ser� deletado.</li></ol> <br /.>Valores:<ul><li>S: Sim, o produto ser� deletado</li><li>N: N�o, o produto n�o ser� deletado</li><li>Vazio: Vazio, o produto n�o ser� deletado</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Descri��o longa para o roduto.<br />Valores:<ul><li>Texto: c�digo HTML permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Descri��o curta para o roduto.<br />Valores:<ul><li>Texto: c�digo HTML n�o permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'O status se um produto est� publicado ou n�o.<br />Valores:<ul><li>S: Sim, o produto est� publicado</li><li>N: N�o, o produto n�o est� publicado</li><li>Vazio: Vazio, o produto est� publicado.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'A largura do produto.<br />Valores:<ul><li>N�mero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'A Altura do produto.<br />Valores:<ul><li>N�mero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'A data em que o produto estar� dispon�vel. Para importa��o a data deve estar no formato of dia/m�s/ano ou dia-m�s-ano. Em sistemas Windows a data vai at� 19/01/2038.<br />Uso:<ol><li>Adicione o nome "product_available_date" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas e deve estar em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com uma data. Se o campo cont�m algum outro valor, os dados ser�o ignorados.</li></ol><br />Valores:<ul><li>Data: dia/m�s/ano ou dia-m�s-ano</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'O n�mero de artigos que voc� tem em estoque.<br /><br />Uso:<ol><li>Adicione o nome "product_in_stock" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas  e deve estar em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor num�rico. Se o campo cont�m algum outro valor, o valor padr�o ser� usado.</li></ol><br />Valores:<ul><li>N�mero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'As diferentes escolhas que um produto tem. Use isto para dar a um produto especifica��es diferentes. Por exemplo uma camiseta que vem em diferentes tamanhos e cores. Voc� pode especificar os tamanhos e cores como este exemplo: Tamanho,XL[+1.99],M,S[-2.99];Cor,Vermelha,Verde,Amarelo,CorExpressiva[=24.00];E assim por diante,..,..<br /><br />Voc� pode ajustar os pre�os por atributos usando as seguintes op��es:<ul><li>+: Adicione este montate ao pre�o configurado.</li><li>-: Subtraia este montante do pre�o configurado.</li><li>=: Setar o pre�o do produto para este montante.</li></ul><br />
Uso:<ol><li>Adicione o nome "attribute" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas  e deve estar em letras min�sculas.</li>
<li>Adicione uma coluna ao seu arquivo CSV como atributo texto.</li></ol><br /.>Valores:<ul><li>Texto: c�digo HTML n�o permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'Este exibe quando o produto est� dispon�vel. O valor pode ser um texto descritivo ou o nome de um arquivo de imagem. Imagens devem ser postas em "shop_image/availability/".<br />Uso:<ol><li>Adicione o nome "product_availability" � tela de configura��o. O nome 
� sens�vel a letras mai�sculas ou min�sculas e deve estar em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor de texto.</li></ol><br />
Valores:<ul><li>Texto: c�digo HTML n�o permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'O nome de arquivo da imagem localizada na pasta "shop_image/product/". O nome de arquivo pode ser tamb�m uma URL.<br />NOTA: Se voc� tem o redimencionamento din�mico habilitado, voc� precisa preencher o campo "product_thumb_image". O VirtueMart redimenciona a imagem especificada aqui.<br/><br />Uso:<ol><li>Adicione o nome "product_full_image" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas e deve estar 
em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor de texto.</li></ol><br />Valores:<ul><li>Texto:<ul><li>c�digo HTML n�o permitido</li>
<li>URL\'s s�o permitidas.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'O nome de arquivo da imagem thumbnail localizada na pasta "shop_image/product/". O nome de arquivo tamb�m 
pode ser uma URL.<br />NOTA: Se voc� tem o redimencionamento din�mico habilitado, voc� continua precisando preencher o campo. O VirtueMart redimenciona a imagem especificada aqui.<br /><br />Uso:<ol><li>Adicione o nome "product_full_image" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas e deve estar 
em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor de texto.</li></ol><br />Valores:<ul><li>Texto:<ul><li>c�digo HTML n�o permitido.</li>
<li>URL\'s s�o permitidas.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'Um atributo personalizado dever� adicionar um campo de entrada � p�gina de produto com a descri��o do atributo 
fornecido. Atributos personalizados s�o especificados como estes: Nome;Extras;...<br />Uso:<ol><li>Adicione o nome "custom_attribute" � tela de configura��o. O nome � 
sens�vel a letras mai�sculas ou min�sculas e deve estar em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com o atributo texto.</li></ol><br /.>
Valores:<ul><li>Texto: c�digo HTML n�o permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Especifique o n�mero de �tens no pacote.<br />Uso:<ol><li>Adicione o nome "product_packaging" � tela de 
configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas  e deve estar em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com o n�mero de itens no pacote.</li></ol><br /.>Valores:<ul><li>N�mero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Especifique o n�mero de �tens na caixa.<br />Uso:<ol><li>Adicione o nome "product_box" � tela de configura��o. 
O nome � sens�vel a letras mai�sculas ou min�sculas  e deve estar em letras min�sculas.</li><li>Adicione uma coluna ao seu arquivo CSV com o n�mero de �tens na caixa.</li>
</ol><br /.>Valores:<ul><li>N�mero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Especifique o valor ou percentual do desconto que o produto tem. Os valores entrados s�o valores exatos, nenhum c�lculo � feito. Isto � o mesmo que se voc� estivesse preenchendo um desconto atrav�s da lista de desconto do produto. Se o desconto j� existir, n�o ser� adicionado a base de dados mas o produto ser� ligado ao desconto existente. O crit�rio para determinar se um desconto j� existe � o seguinte: os valores t�m que ser exatamente os mesmos:
<ol><li>Um Valor, seja ele um total ou uma porcentagem</li><li>Data de In�cio</li><li>Data Encerramento</li></ol>Isto impede de encher a base de dados com um n�mero enorme dos mesmos descontos.<br /><br />Uso:<ol><li>Adicione o nome "product_discount" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas  e deve estar em letras min�sculas.</li><li>Opcional: Adicione o nome "product_discount_date_start" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas e deve estar em letras min�sculas.</li><li>Opcional: Adicione o nome "product_discount_date_end" � tela de configura��o. O nome � sens�vel a letras mai�sculas ou min�sculas e deve estar em letras min�sculas.</li><li>Adicione as colunas selecionadas ao seu arquivo CSV com os valores correspondentes.</li></ol><br /.>Valores:<ul><li>product_discount</li><ul>
<li>N�mero<br />Ex. 10</li><li>Percentagem: Precisa incluir o s�mbolo % <br />Ex. 10%</li></ul><li>product_discount_date_start</li><ul><li>Data: dia/m�s/ano ou dia-m�s-ano<br />
Dia e m�s podem ter a nota��o de 1 ou 2 d�gitos.<br />Ano pode ter a nota��o de 2 ou 4 d�gitos.</li></ul><li>product_discount_date_end</li><ul><li>Data: dia/m�s/ano ou dia-m�s-ano<br />Dia e m�s podem ter a nota��o de 1 ou 2 d�gitos.<br />Ano pode ter a nota��o de 2 ou 4 d�gitos.</li></ul></ul>';
	var $_ITEM_PREVIOUS = 'anterior';
	var $_ITEM_NEXT = 'pr�ximo';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Continuar';
	var $_CMN_CANCEL = 'Cancelar';
	var $_BUTTON_SEND_REG = 'Enviar Registro';
	var $_CONTACT_FORM_NC = 'Por favor certifique-se de que o formul�rio esteja completo e seja v�lido.';
	var $_CMN_REQUIRED = 'Requerido';
	var $_CMN_NEW = 'Novo';
	var $_CMN_SAVE = 'Salvar';
	var $_CMN_NEW_ITEM_LAST = 'Novos �tens, por padr�o, nas �ltimas posi��es. A ordena��o pode ser alterada ap�s este item ser salvo.';
	var $_CMN_OPTIONAL = 'Opcional';
	var $_E_APPLY = 'Aplicar';
	var $_E_IMAGES = 'Imagens';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Selecione uma categoria';
	var $_E_REMOVE = 'Remover';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'P�gina';
	var $_PN_OF = 'de';
	var $_PN_START = 'In�cio';
	var $_PN_PREVIOUS = 'Anterior';
	var $_PN_NEXT = 'Pr�ximo';
	var $_PN_END = 'Final';
	var $_PN_DISPLAY_NR = 'Mostrar #';
	var $_PN_RESULTS = 'Resultados';
	var $_CMN_PRINT = 'Imprimir';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Voltar';
	var $_USERNAME = 'Nome de usu�rio';
	var $_PASSWORD = 'Senha';
	var $_BUTTON_LOGIN = 'Logar';
	var $_REGISTER_UNAME = 'Nome de usu�rio';
	var $_REGISTER_EMAIL = 'E-mail';
	var $_REGWARN_NAME = 'Por favor digite seu nome.';
	var $_REGWARN_UNAME = 'Por favor digite nome de usu�rio.';
	var $_REGWARN_MAIL = 'Por favor entre um endere�o de e-mail v�lido.';
	var $_SEND_SUB = 'Detalhes de conta para %s em %s';
	var $_ASEND_MSG = 'Ol� %s,
	
	Um novo usu�rio se registrou em %s.
	Este e-mail cont�m seus detalhes:
	
	Nome - %s
	E-mail - %s
	Nome de Usu�rio - %s
	
	Por favor n�o responda esta messagem pois � gerada automaticamente e � apenas para fins de informa��o';
	var $_REG_COMPLETE = '<div class="componentheading">Registro Completo!</div><br />Voc� pode se Logar agora.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registro Completo!</div><br />Sua conta foi criada e um link de ativa��o foi enviado para o endere�o de e-mail que voc� cadastrou. Note que voc� precisa ativar a conta clicando no link de ativa��o quando voc� receber o e-mail antes de voc� poder se logar.';
	var $_DATE_FORMAT_LC = '%A, %d de %B de %Y';
	var $_LAST_UPDATED = '�ltima Atualiza��o';
	var $_NOT_AUTH = 'Voc� n�o est� autorizado a ver este recurso.';
	var $_DO_LOGIN = 'Voc� precisa se logar.';
	var $_VALID_AZ09 = 'Por favor entre com um %s v�lido.  Sem espa�os, com mais de %d caracteres e contendo 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Publicado';
	var $_CMN_UNPUBLISHED = 'Despublicado';
	var $_MORE = 'Mais...';
	var $_EMPTY_CATEGORY = 'Esta Categoria est� atualmente vazia.';
	var $_BUTTON_LOGOUT = 'Sair';
	var $_NO_ACCOUNT = 'Ainda n�o tem conta?';
	var $_CREATE_ACCOUNT = 'Registro';
	var $_REGWARN_PASS = 'Por favor entre com uma senha v�lida. Sem espa�os, com mais de 6 caracteres e contendo 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Por favor verifique a senha.';
	var $_REGWARN_VPASS2 = 'Os campos de Senha e de Verifica��o n�o conferem, por favor tente novamente.';
	var $_USEND_MSG_ACTIVATE = 'Ol� %s,

Obrigado por se registrar em %s. Sua conta foi criada e precisa ser ativada antes que voc� possa us�-la.
Para ativar a conta clique no seguinte link ou copie-o e cole-o em seu navegador:
%s

Depois da ativa��o voc� poder� se logar em %s usando o seguinte nome de usu�rio e senha:

Nome de usu�rio - %s
Senha - %s';
	var $_USEND_MSG = 'Ol� %s,

Obrigado por se registrar em %s.

Voc� pode se logar agora em %s usando o nome de usu�rio e senha com os quais se registrou.';
	var $_PROMPT_PASSWORD = 'Perdeu sua senha?';
	var $_HI = 'Oi';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Detalhes do Novo Usu�rio';
	var $_NEW_USER_MESSAGE = 'Ol� %s,


Voc� foi adicionado como um usu�rio em %s por um Administrador.

Este e-mail cont�m seu nome de usu�rio e senha para logar-se em %s

Nome de usu�rio - %s
Senha - %s


Por favor n�o responda esta messagem pois � gerada automaticamente e � apenas para fins de informa��o';
	var $_REMEMBER_ME = 'Lembre-me';
	var $_REGISTER_TITLE = 'Registro';
	var $_JAN = 'Janeiro';
	var $_FEB = 'Fevereiro';
	var $_MAR = 'Mar�o';
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
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Somente Upload da lista de pre�os';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Upload de m�ltiplos pre�os';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Usar cabe�alhos da coluna como configura��o';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Coletar informa��es de depura��o';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Pr�-visualizar';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Upload Regular';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Upload de tipos de produtos';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Upload de par�metros de tipos de produtos';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Upload de refer�ncias cruzadas de tipos de produtos';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Upload dos detalhes de tipos de produtos';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Banco de dados vazio';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Continuar upload';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Cancelar upload';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Passos para carregar um arquivo CSV</span>
										<ol>
										<li>Crie uma lista de produtos em um arquivo CSV qualquer, com ou sem os cabe�alhos de coluna.
										<br />� recomendado usar o delimitador de texto ~ (til) e o delimitador do campo ^ (acento circunflexo).
										<br /><span style="font-weight: bold;">Arquivo de Exemplo:</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~
~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~
~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>
										<li>Configure os campos na aba �Configura��o� na mesma ordem que no arquivo CSV. Os campos devem combinar com o local exato no arquivo CSV.
										<br />Exemplo: product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">A informa��o m�nima requerida para adicionar um produto �:</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> � uma seq��ncia de caracteres limitada por contra-barras () que comece com uma categoria de n�vel superior e siga com as sub-categorias, por exemplo: <br />
										<div class="quote">category/sub-category_1/sub_category_2</div>
										<br />
										Quando o produto tem que ser atribu�do a mais de uma categoria, voc� pode fornecer todas as categorias,<br />
										delimitadas por um <span style="font-weight: bold;">|</span> , como no exemplo abaixo:
										<div class="quote">Category/Sub-category_1/Sub_category_2|Category2/Subcategory22|Category3/Subcategory33</div>
										</li>
										<li>Escolha os delimitadores na aba "Importa��o/Exporta��o�.</li>
										<li>Escolha os ajustes do upload na aba "importa��o/exporta��o�.</li>
										<li>Escolha carregar um arquivo de seu computador local (submeter arquivo CSV) ou usar um arquivo local (Carregar arquivo CSV do servidor).</li>
										<li>A importa��o inicia.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Tipos de Produto</span><br /><br />
													Para adicionar tipos de produto, voc� necessita de 4 arquivos CSV. Cada arquivo CSV representa uma parte do tipo do produto.
													<ul>
													<li><span style="font-weight: bold;">Tipos de produto</span><br />
													Este arquivo CSV cont�m os tipos principais do produto e deve parecer com este:
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>Music track</td><td>Track</td><td>Y</td><td> </td><td> </td></tr>
													<tr><td>Music album</td><td>Album</td><td>Y</td><td> </td><td> </td></tr>
													<tr><td>Music artist</td><td>Artist</td><td>Y</td><td> </td><td> </td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">Par�metros do tipo de produto</span><br />
													Este arquivo CSV cont�m os par�metros por tipo de produto e deve parecer com este:
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>Music artist</td><td>Name</td><td>Name</td><td>Artist Name</td><td>1</td><td>I</td><td> </td><td>N</td><td> </td><td> </td></tr>
													<tr><td>Music artist</td><td>Birth</td><td>Birth</td><td>Artist Birth</td><td>2</td><td>D</td><td> </td><td>N</td><td> </td><td> </td></tr>
													<tr><td>Music album</td><td>Duration</td><td>Duration</td><td>Duration of album</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>minutes</td></tr>
													</table>
													</div>
													<br />
													O par�metro do tipo de produto do pode ter diversos valores, eles s�o:
													<ul>
													<li>I: Inteiro</li>
													<li>T: Texto</li>
													<li>S: Texto curto</li>
													<li>F: Flutuante</li>
													<li>C: Caractere</li>
													<li>D: Data & Hora</li>
													<li>M: Hora</li>
													<li>V: Valores M�ltiplos</li>
													<li>B: Quebra de Linha</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">�tens por nome de tipo de produto</span><br />
													Este arquivo CSV cont�m os detalhes pelo par�metro nome do tipo de produto e deve parecer com este:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>Music artist</td><td>Singing Star</td><td>1975</td></tr>
													<tr><td>5678</td><td>Music artist</td><td>Rocking Band</td><td>1980</td></tr>
													</table><br />
													Por nome de tipo de produto voc� necessita um arquivo CSV separado. A raz�o para isto � que os nomes das colunas para cada arquivo CSV s�o diferentes por causa do conjunto do par�metros de tipo de produto.
													</li><br />
													<li><span style="font-weight: bold;">Refer�ncia cruzada entre Tipo de Produto e SKU (c�digo) do Produto</span><br />
													Este arquivo CSV cont�m a liga��o entre um tipo de produto e um SKU (c�digo) de produto e deve parecer com este:
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
													<li>Carregue o arquivo CSV Par�metros do Tipo de Produto</li>
													<li>Carregue o arquivo CSV �tens do Tipo de Produto</li>
													<li>Carregue o arquivo CSV Refer�ncia Cruzada de Tipo de Produto</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Base de Dados Vazia</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">USE COM CUIDADO !!! N�O H� RETORNO !!!</span><br /><br />
													 Esvaziar a base de dados remover� TODOS OS dados em sua base de dados das seguintes tabelas:
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
													 Tudo com exce��o do primeiro fabricante � removido:
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 As seguintes tabelas s�o completamente deletadas:
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													 O x representa o n�mero da tabela. Este n�mero relaciona-se aos tipos do produto que est�o no sistema. Desde que a tabela tipos de produto esteja completamente vazia, estas tabelas ser�o removidas. Os carregamento de novos tipos de produto recriar� as tabelas.<br /><br />
													 Procedimento:
													 <ol>
													 <li>Escolher �Base de Dados Vazia� nas configura��es de carregamento(Upload)</li>
													 <li>Marcar �Coletar informa��es de depura��o� se voc� quiser informa��es adicionais do resultado</li>
													 <li>Clique em "Submeter arquivo CSV" ou "Carregar arquivo CSV do Servidor". N�o � necess�rio entrar com um nome de arquivo.</li>
													 <li>Voc� � perguntado se est� certo de que voc� quer esvaziar sua base de dados. Clique OK se voc� tem certeza, caso contr�rio clique Cancelar.</li>
													 <li>A base de dados � esvaziada agora ou voc� � retornado � tela principal dependendo de sua escolha anterior.</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Upload de M�ltiplos Pre�os</span><br /><br />
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
														    Veja na aba Campos Dispon�veis que informa��o cada campo cont�m. Se voc� quiser usar os cabe�alhos das colunas como configura��o, preencha a primeira linha com o nome dos cabe�alhos das colunas.
														    </li>
														    <li>Ajuste os campos da configura��o, como mencionado no ponto 1 na aba Configura��o ou se voc� adicionou os cabe�alhos das colunas ao seu arquivo CSV, selecione �Usar cabe�alhos da coluna como configura��o� nas Configura��es de carregamento (Upload).
														    </li>
														    <li>Selecione "Upload de M�ltiplos Pre�os" nas Configura��es de carregamento (Upload)</li>
														    <li>Opcionalmente, selecione "Pr�-visualizar" e/ou "Coletar informa��es de depura��o"</li>
														    <li>Selecione um arquivo para carregar ou para ler de um diret�rio</li>
														    <li>Selecione "Submeter arquivo CSV" ou "Carregar arquivo CSV do Servidor" dependendo se voc� est� carregando um arquivo ou lendo um arquivo de um diret�rio</li>
														    <li>Os pre�os ser�o importados agora</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">Deletar Pre�os</span><br />
														    Usando a importa��o de pre�os m�ltiplos tamb�m � poss�vel deletar pre�os. Um pre�o � deletado quando os seguintes campos no arquivo CSV combinam com os dados na base de dados:
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'O pre�o para um produto sem denominador da moeda corrente.<br /><br />Uso:<ol><li>Selecione o nome "product_price" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor do pre�o.</li></ol><br />Valores:<ul><li>Num�rico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'O comprimento do produto.<br /><br />Uso:<ol><li>Selecione o nome "product_length" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor num�rico.</li></ol><br />Valores:<ul><li>Num�rico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'A medida do comprimento, da largura e da altura do produto. Pode ser polegadas, centimeters, etc.<br /><br />Uso:<ol><li>Selecione o nome "product_lwh_uom" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'O peso do produto.<br /><br />Uso:<ol><li>Selecione o nome "product_weight" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor num�rico.</li></ol><br />Valores:<ul><li>Num�rico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'A medida do peso do produto. Pode ser libras, kilo, etc. <br /><br />Uso:<ol><li>Selecione o nome "product_weight_uom" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Os atributos s�o parte de um produto e s�o usados pelos "produtos-filhos" para dar-lhes especifica��es.<br />Uso:<ol><li>Selecione o nome "attributes" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com atributos texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido.<br />Os valores devem ser separados por um s�mbolo de tubula��o (|). Por exemplo: attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Os atributos s�o parte de um produto e s�o usados pelos "produtos-filhos" para dar-lhes especifica��es.<br />Uso:<ol><li>Selecione o nome "custom_attribute" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor dos atributos texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido.<br />Os valores devem ser separados por um s�mbolo de tubula��o (|). Por exemplo: attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'O dia onde o desconto para um produto come�a. Para mais informa��o ver "product_discount".<br /><br />Uso:<ol><li>Selecione o nome "product_discount_date_start" do menu na tela de configura��o.</li><li>Adicionar as colunas escolhidas a seu arquivo CSV com o valor da data.</li></ol><br />Valores:<ul><li>product_discount_date_start</li><ul><li>Data: dia/m�s/ano ou dia-m�s-ano<br />Dia e m�s podem ser numa nota��o de 1 ou 2 d�gitos.<br />Ano pode ser numa nota��o de 2 ou 4 d�gitos.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'O dia onde o desconto para um produto termina. Para mais informa��o ver "product_discount".<br /><br />Uso:<ol><li>Selecione o nome "product_discount_date_end" do menu na tela de configura��o.</li><li>Adicionar as colunas escolhidas a seu arquivo CSV com o valor da data.</li></ol><br />Valores:<ul><li>product_discount_date_end</li><ul><li>Data: dia/m�s/ano ou dia-m�s-ano<br />Dia e m�s podem ser numa nota��o de 1 ou 2 d�gitos.<br />Ano pode ser numa nota��o de 2 ou 4 d�gitos.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Saltar a primeira linha</span><br />Se o arquivo CSV tiver uma linha de cabe�alho no come�o, escolher esta op��o saltar essa linha. Isto impede que o cabe�alho seja adicionado a sua base de dados.</li><li><span style="font-weight: bold;">Sobrescrever dados existentes</span><br />Quando adicionar produtos novos a sua base de dados, desmarque esta op��o para impedir que quaisquer dados existentes sejam substitu�dos por produtos que j� existem em sua base de dados. O padr�o � atualizar dados do produto.</li><li><span style="font-weight: bold;">Pular valor padr�o</span><br />Na p�gina de configura��o, um valor padr�o pode ser especificado para o caso de o campo estar vazio no arquivo CSV. Habilitando esta op��o, a importa��o n�o incluir� o campo para atualizar se n�o houver nenhum valor no arquivo CSV.</li><li><span style="font-weight: bold;">Carga da lista de pre�os somente</span><br />A "Carga da lista de pre�os somente" deve ser usado se voc� estiver atualizando os pre�os de seus produtos. � esperado que a disposi��o do CSV tenha 2 colunas:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Por favor note que isto N�O leva em conta as configura��es existentes na p�gina de Configura��o.<li><span style="font-weight: bold;">Usar cabe�alhos das colunas como configura��o</span><br />Caso o arquivo CSV contenha cabe�alhos de coluna na primeira linha, esta op��o pode ser usada para que se possa usar os cabe�alhos de coluna como sendo a configura��o atual. Os cabe�alhos de coluna devem combinar um dos nomes de coluna definidos na p�gina de Abas Dispon�veis. Esta configura��o a base do uso, nada � salvo. Os valores padr�o n�o podem ser usados com esta op��o.</li><li><span style="font-weight: bold;">Pr�-visualizar</span><br />Mostra uma pr�via de 5 linhas do arquivo a ser importado. A importa��o pode ent�o ser cancelada ou continuada.</li><li><span style="font-weight: bold;">Coletar informa��es de depura��o</span><br />Em caso de problemas, use esta op��o para ver o que aconteceu durante a importa��o. No final da importa��o um relat�rio ser� gerado com as etapas e consultas executadas durante a importa��o.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'O nome do fabricante que est� relacionado ao produto. Isto � usado em combina��o com o ID do fabricante. Se nenhum ID de fabricante for especificado, somente o nome � verificado. Os fabricantes novos ser�o o criados com ID�s incrementais. O processo de adi��o/atualiza��o de fabricantes segue os seguintes regras:<ol><li>Nome existe, ID existe --> O ID � atualizado se diferente</li><li>Nome existe, ID n�o existe --> fabricante novo criado com o incremento de ID</li><li>Nome n�o existe, ID existe --> Nome gen�rico adicionado com o ID existente</li><li>Nome n�o existe, ID n�o existe --> N�o faz nada</li></ol>Uso:<ol><li>Selecione o nome "manufacturer_name" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com nome do fabricante.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'O ID de fabricante relacionado ao produto e deve ser �nico. � usado em combina��o com o nome do fabricante. Se nenhum nome de fabricante for especificado, somente o link do fabricante do produto ser� adicionado/atualizado. A adi��o/atualiza��o de fabricantes segue o seguinte processo:<ol><li>Nome existe, ID existe --> ID � atualizado se diferente</li><li>Nome existe, ID n�o existe --> Fabricante novo criado com o incremento de ID</li><li>Nome n�o existe, ID existe --> Nome gen�rico adicionado com o ID existente</li><li>Nome n�o existe, ID n�o existe --> N�o faz nada</li></ol>Quando nenhum nome ou ID existem nada � feito para prevenir que sejam adicionados numerosos nomes gen�ricos de fabricantes.<br /><br />Uso:<ol><li>Selecione o nome "manufacturer_id" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com o ID de fabricante.</li></ol><br />Valores:<ul><li>Num�rico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'Uma URL para uma imagem ou p�gina web do produto. Quando ligado a uma imagem, esta ser� exibida na p�gina dos detalhes do produto.<br /><br />Uso:<ol><li>Selecione o nome "product_url" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'O n�mero de produtos que foram vendidos.<br /><br />Uso:<ol><li>Selecione o nome "product_sales" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor num�rico.</li></ol><br />Valores:<ul><li>Num�rico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'Quando um produto � setado para estar �Em promo��o�, este ser� oferecido no bloco de Produtos em Oferta.<br />Uso:<ol><li>Selecione o nome "product_special" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor "Y".</li></ol><br />Valores:<ul><li>Y: Sim, o produto est� em promo��o</li><li>N: N�o, o produto n�o est� em promo��o</li><li>Vazio: Valor em branco, o produto n�o est� em promo��o</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'A unidade do produto como � vendido. Isto �, caixa, saco, etc.<br />Uso:<ol><li>Selecione o nome "product_unit" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor "Y".</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Os produtos-pai s�o categorizados de acordo com o caminho de categoria. O caminho de categoria especifica a que categoria um produto pertence. Isto conta somente para produtos principais n�o para produtos-filho desde que os produtos-filho se relacionem aos produtos-pai, n�o �s categorias. Para produtos-filho este campo deve ser deixado vazio. O campo "product_parent_sku" deve estar vazio para produtos principais desde que n�o se relacionem a nenhum outro produto-pai.<br /><br />Uso:<ol><li>Selecione o nome "category_path" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com o caminho.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido<br />O caminho da categoria deve ser separado por uma barra normal (/). Por exemplo: M�veis/Cadeiras/Madeira</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'O sku (c�digo) do produto-pai � necess�rio para identificar o pai de produtos-filho. Por favor notem: o campo �category_path� DEVE estar vazio caso contr�rio o produto ser� tratado como um produto-pai.<br />Uso:<ol><li>Selecione o nome "category_path" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor de "product_sku" do produto-pai.</li></ol><br />Valores:<ul><li>Num�rico</li><li>Letras</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'O ID da taxa de imposto que voc� quer aplicar ao produto<br />Uso:<ol><li>Selecione o nome "product_tax_id" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor de "product_tax_id" para a taxa de imposto apropriada.</li></ol><br />Valores:<ul><li>Num�rico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'Uma moeda corrente diferente pode ser especificada para cada produto.<br />Uso:<ol><li>Selecione o nome "product_currency" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com valor da nova moeda.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido<br />Exemplo: EUR, USD, IDR</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'Esta � uma p�gina personalizada para mostrar seus tipos de produto. Deixar EM BRANCO se voc� n�o tiver nenhum arquivo-php individual para ela.<br /><br />Uso:<ol><li>Selecione o nome "product_type_browsepage" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto:<ul><li>Nenhum c�digo HTML � permitido</li><li>URL\'s s�o permitidas.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'Uma descri��o para seu tipo de produto.<br /><br />Uso:<ol><li>Selecione o nome "product_type_description" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: C�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'Esta � uma p�gina personalizada para mostrar seus tipos de produto. Deixar este ESPA�O EM BRANCO se voc� n�o tiver nenhum arquivo php individual para ela.<br /><br />Uso:<ol><li>Selecione o nome "product_type_flypage" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto:<ul><li>Nenhum c�digo HTML � permitido</li><li>URL\'s s�o permitidas.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'O nome do tipo de produto. Este nome deve ser �nico e sem espa�os.<br /><br />Uso:<ol><li>Selecione o nome "product_type_name" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'Um valor padr�o para mostrar quando n�o h� nada preenchido para o par�metro.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_default" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'Uma descri��o para seu par�metro de tipo de produto.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_description" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: C�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'Um r�tulo para seu par�metro de tipo de produto.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_label" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Especificar em que ordem o par�metro do produto deve ser exibido.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_list_order" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Num�rico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Sete como "yes" para mostrar os valores de par�metro poss�veis como �tens de m�ltipla sele��o<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_list_multiselect" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com o valor "Y" ou "N".</li></ol><br />Valores:<ul><li>Y: Sim, os valores s�o multi sele��o</li><li>N: N�o, os valores n�o s�o multi sele��o</li><li>Vazio: Valor em branco, os valores n�o s�o multi sele��o</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'O nome do par�metro de tipo de produto. Este nome deve ser �nico e sem espa�os porque ser� o nome da coluna para os detalhes do par�metro.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_type" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'Isto ajusta o tipo de par�metro que ser� usado. H� um n�mero de valores diferentes que podem ser usados.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_type" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor.</li></ol><br />Valores:<ul><li>Texto:<ul>
													<li>I: Inteiro</li>
													<li>T: Texto</li>
													<li>S: Texto Curto</li>
													<li>F: Flutuante</li>
													<li>C: Caractere</li>
													<li>D: Data & Hora</li>
													<li>M: Hora</li>
													<li>V: Valores M�ltiplos</li>
													<li>B: Quebra de Linha</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'A unidade a que o par�metro de tipo de produto se refere.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_unit" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Texto: Nenhum c�digo HTML � permitido</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'Estes s�o os valores para o par�metro e t�m de satisfazer os requesitos definidos pelo tipo de par�metro.<br /><br />Uso:<ol><li>Selecione o nome "product_type_parameter_values" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Isto depende do tipo setado no campo do product_type_parameter_type. Todos os valores t�m de ser separados por ponto-e-v�rgula (;).</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'O status se um tipo de produto for publicado ou n�o.<br /><br />Uso:<ol><li>Selecione o nome "product_type_publish" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor texto.</li></ol><br />Valores:<ul><li>Y: Sim, o tipo de produto est� publicado</li><li>N: N�o, o tipo de produto n�o est� publicado</li><li>Vazio: Valor em branco, o tipo de produto est� publicado.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'O campo "price_delete" � um campo especial. Este campo � usado para determinar se um pre�o para um produto deve ser deletado ou n�o. Este campo � usado ao fazer um carregamento (upload) de m�ltiplos pre�os. Antes de um pre�o ser deletado � necess�rio que os seguintes campos combinem:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Uso:<ol><li>Selecione o nome "price_delete" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor "Y". Se o campo contiver algum outro valor, o produto n�o ser� deletado.</li></ol><br />Valores:<ul><li>Y: Sim, o pre�o ser� deletado</li><li>N: N�o, o pre�o n�o ser� deletado</li><li>Vazio: Valor em branco, o pre�o n�o ser� deletado</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'A quantidade em que o pre�o mencionado est� dispon�vel.<br /><br />Uso:<ol><li>Selecione o nome "price_quantity_start" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor num�rico.</li></ol><br />Valores: Num�rico</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'A quantidade em que o pre�o mencionado j� n�o estar� dispon�vel.<br /><br />Uso:<ol><li>Selecione o nome "price_quantity_end" do menu na tela de configura��o.</li><li>Adicione uma coluna ao seu arquivo CSV com um valor num�rico.</li></ol><br />Valores: Num�rico</li></ul>';
	var $_VM_UPDATE_STATUS = 'Atualizar Status';
	var $_PRODUCT_WAITING_LIST_EMAIL_SUBJECT = '%s Chegou!';
	var $_PRODUCT_WAITING_LIST_EMAIL_TEXT = 'Obrigado pela sua paci�ncia.

Nosso %s est� agora em estoque e pode ser adquirido clicando neste link:
%s

Este � um aviso �nico, voc� n�o receber� este e-mail novamente.';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_EXTRA = 'Informa��es Extras do Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_EXTRA_TIP = '� mostrada na P�gina de Confirma��o de Pedido. Pode ser: C�digo HTML do c�digo de seu Provedor de Servi�os de Pagamento, Sugest�es ao cliente etc.';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CLASSNAME = 'Nome da classe de pagamento (Ex.:<strong>ps_netbanx</strong>)';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CLASSNAME_TIP = 'Deixe em branco se voc� n�o tiver certeza do colocar!';
	var $_CMN_PUBLISH = 'Publicar';
	var $_CMN_UNPUBLISH = 'Despublicar';
	var $_VM_MENUBAR_PLEASESELECT_PUBLISH = 'Por favor fa�a uma sele��o da lista para publicar';
	var $_VM_MENUBAR_PLEASESELECT_UNPUBLISH = 'Por favor fa�a uma sele��o da lista para despublicar';
	var $_VM_MENUBAR_PLEASESELECT_DELETE = 'Por favor fa�a uma sele��o da lista para deletar';
	var $_VM_MENUBAR_CONFIRM_DELETE = 'Voc� tem certeza que quer deletar os itens selecionados?';
	var $_VM_MENUBAR_PLEASESELECT_TO = 'Por favor fa�a uma sele��o da lista para';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>