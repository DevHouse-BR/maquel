<?php

class glossaryUserHTML {
	
	function view ($glossary, $grandtotal, $allowentry, $glosshtml, $searchhtml, $alphabethtml, $listhtml, $pagecontrol) {
		$gconfig = cmsapiConfiguration::getInstance();
		$navigation = $pagecontrol ? $pagecontrol->showNavigation($gconfig->pagespread) : '';
		$itemcount = $grandtotal ? sprintf(_GLOSSARY_ITEM_COUNT, $grandtotal) : '';
		$interface =& cmsapiInterface::getInstance();
		if ($allowentry) {
			$addlink = $interface->sefRelToAbs("index.php?option=com_glossary&task=edit&id=0&glossid=".$glossary->id);
			$addtext = _GLOSSARY_ADD_ENTRY;
			$addhtml = <<<ADD_ENTRY_HTML

			<a href="$addlink">$addtext</a>
		
ADD_ENTRY_HTML;

		}
		else $addhtml = '';

		echo <<<GLOSSARY_DISPLAY
		
		
		$itemcount
		$addhtml
		$searchhtml
		$alphabethtml
		$navigation
		$listhtml
		$navigation
		$glosshtml

GLOSSARY_DISPLAY;

	}
	
}