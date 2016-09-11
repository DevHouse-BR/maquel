<?php
/**
* @package bot sIFR
* @copyright (C) 2006 Joomla-addons.org
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* sIFR version used: 2.0.1, Copyright 2004 - 2005 Mike Davidson, Shaun Inman, Tomas Jogin and Mark Wubben
* sIFR is licensed under the CC-GNU LGPL <http://creativecommons.org/licenses/LGPL/2.1/>
* 
* First version by Joomlastuff.org
*/

// Set flag that this is a parent file
define( '_VALID_MOS', 1 );

$_MAMBOTS->registerFunction( 'onAfterStart', 'botSIFR' );


function botSIFR(){
  global $mainframe;
  
  $mainframe->addCustomHeadTag('<link rel="stylesheet" href="'. $mainframe->getCfg('live_site') . '/mambots/system/sIFR-screen.css" type="text/css" media="screen" />');
  $mainframe->addCustomHeadTag('<link rel="stylesheet" href="'. $mainframe->getCfg('live_site') . '/mambots/system/sIFR-print.css" type="text/css" media="print" />');
  
  $mainframe->addCustomHeadTag('<script src="'. $mainframe->getCfg('live_site') . '/mambots/system/sifr.js" type="text/javascript"></script>');
  $mainframe->addCustomHeadTag('<script src="'. $mainframe->getCfg('live_site') . '/mambots/system/sifr-addons.js" type="text/javascript"></script>');
  /*
  put this in your template somewhere:
  
  <script type="text/javascript">
  if(typeof sIFR == "function"){
    sIFR.replaceElement(".contentheading, .componentheading", named({sFlashSrc: "mambots/system/tradegothic.swf", sColor: "#c64934", sWmode: "transparent"}));
  }
  </script>
	*/
}
?>