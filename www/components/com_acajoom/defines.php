<?php
defined('_JEXEC') OR defined('_VALID_MOS') OR die('...Direct Access to this location is not allowed...');
### Copyright (C) 2006-2009 Acajoom Services. All rights reserved.
### http://www.acajoom.com/license.php


//if(defined('JPATH_ROOT')) define ('ACA_JPATH_ROOT' , JPATH_ROOT );
if ( !defined('ACA_CMSTYPE')) {
	if ( defined('JPATH_ROOT') AND class_exists('JFactory')) {	// joomla 15
		define( 'ACA_CMSTYPE', true );
	} else {
		define( 'ACA_CMSTYPE', false );
	}//endif
}//endif


if ( ACA_CMSTYPE ) {	// joomla 15
	global $mainframe;

	define ('ACA_JPATH_ROOT_NO_ADMIN' , JPATH_ROOT );
	define( 'ACA_DEBUG', $mainframe->getCfg('debug') );

	$site_url = $mainframe->getCfg('live_site');
	if(empty($site_url)) $site_url = JURI::root();
	define( 'ACA_JPATH_LIVE', rtrim( $site_url, "/" ));

	define( 'ACA_SITE_NAME', $mainframe->getCfg('sitename') );
	define( 'ACA_TIME_OFFSET', $mainframe->getCfg('offset') );
	$lang= JFactory::getLanguage();
	define( 'ACA_CONFIG_LANG', $lang->_metadata['backwardlang'] );
//echo '<br />my TRace here2  : ';
//print_r( $lang->_metadata['backwardlang'] );
//echo '<br />my TRace here3  : ';
//		return $lang->getTag();
//var_dump($lang);

// JRoute::_($link);

} else {									//joomla 1x
	define ('ACA_JPATH_ROOT_NO_ADMIN' , $GLOBALS['mosConfig_absolute_path']  );
	if ( !defined('ACA_JPATH_ROOT') ) define( 'ACA_JPATH_ROOT', $GLOBALS['mosConfig_absolute_path']);
	define( 'ACA_DEBUG', $GLOBALS['mosConfig_debug'] );
	define( 'ACA_JPATH_LIVE', $GLOBALS['mosConfig_live_site'] );

	define( 'ACA_SITE_NAME', $GLOBALS['mosConfig_sitename'] );
	define( 'ACA_TIME_OFFSET', $GLOBALS['mosConfig_offset'] );
	define( 'ACA_CONFIG_LANG', $GLOBALS['mosConfig_lang'] );


//ACA_CONFIG_LANG
//$GLOBALS['mosConfig_sef']


//$GLOBALS['mosConfig_fromname'];
//				$list->senderemail = $GLOBALS['mosConfig_mailfrom'];
//				$list->bounceadres = $GLOBALS['mosConfig_mailfrom'];
//$GLOBALS['mosConfig_smtphost'];
//$GLOBALS['mosConfig_sendmail'];
//$GLOBALS['mosConfig_mailer'];
//		$config['emailmethod'] = $GLOBALS['mosConfig_mailer'];
//		$config['sendmail_path'] = $GLOBALS['mosConfig_sendmail'];
//		$config['sendmail_from'] = $GLOBALS['mosConfig_mailfrom'];
//		$config['sendmail_name'] = $GLOBALS['mosConfig_fromname'];
//		$config['smtp_host'] = $GLOBALS['mosConfig_smtphost'];
//		$config['smtp_auth_required'] = $GLOBALS['mosConfig_smtpauth'];
//		$config['smtp_username'] = $GLOBALS['mosConfig_smtpuser'];
//		$config['smtp_password'] = $GLOBALS['mosConfig_smtppass'];
//		$config['confirm_fromname'] = $GLOBALS['mosConfig_fromname'];
//		$config['confirm_fromemail'] = $GLOBALS['mosConfig_mailfrom'];
//		$config['confirm_return'] = $GLOBALS['mosConfig_mailfrom'];
//

}//endif

define( 'ACA_OPTION', 'com_acajoom' );
define('ACA', 'aca_');
if (!defined('DS'))  define( 'DS', DIRECTORY_SEPARATOR );
define( 'WPATH_ADMIN' , ACA_JPATH_ROOT_NO_ADMIN . DS . 'administrator' . DS . 'components' . DS . ACA_OPTION . DS );
define( 'WPATH_FRONT' , ACA_JPATH_ROOT_NO_ADMIN . DS . 'components' . DS . ACA_OPTION . DS );
define( 'WPATH_CLASS', WPATH_ADMIN  . 'classes' .DS );
define( 'WJ_ADMIN_IMG', ACA_JPATH_LIVE .DS . 'administrator' . DS .'images'. DS );
define( 'WCOMP_AIMG', ACA_JPATH_LIVE .DS . 'administrator' . DS . 'components' . DS . ACA_OPTION . DS .'images'. DS );
define( 'ACA_PATH_LANG', WPATH_ADMIN .'language' .DS );
if (!defined('_MOS_NOTRIM')) define( '_MOS_NOTRIM', 0x0001 );
if (!defined('_MOS_ALLOWHTML')) define( '_MOS_ALLOWHTML', 0x0002 );
if (!defined('_MOS_ALLOWRAW')) define( '_MOS_ALLOWRAW', 0x0004 );
if(!defined('_BUTTON_LOGIN') and defined('BUTTON_LOGIN')) define('_BUTTON_LOGIN',BUTTON_LOGIN);


