<?php
/**
* @version $Id: toolbar.checkin.html.php 10002 2008-02-08 10:56:57Z willebil $
* @package Joomla / Tradu��o JoomlaClube 2008 - www.joomlaclube.com.br
* @subpackage Checkin
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

/**
* @package Joomla
* @subpackage Checkin
*/
class TOOLBAR_checkin {
	/**
	* Draws the menu for a New category
	*/
	function _DEFAULT() {
		mosMenuBar::startTable();
		mosMenuBar::help( 'screen.checkin' );
		mosMenuBar::endTable();
	}
}
?>