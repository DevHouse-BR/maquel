<?php
/**
* @version $Id: mod_newsflash.php 5071 2006-09-15 16:16:55Z friesengeist $
* @package Joomla / Tradução JoomlaClube 2008 - www.joomlaclube.com.br
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

$sectionID = intval( $params->get( 'sectionID' ) );
$textoAntesCategoria = $params->get( 'textoAntesCategoria' );
$textoAntesConteudo = $params->get( 'textoAntesConteudo' );


$query = "SELECT id, name "
."\n FROM #__categories "
."\n WHERE section = " . $sectionID
."\n ORDER BY name";
$database->setQuery( $query, 0, $items );
$rows = $database->loadObjectList();
?>
<div style="padding:5px;"><?=$textoAntesCategoria?></div>
<div style="padding:5px;"><select style="width:100%" name="categoria" onchange="populaSelectConteudo(this.value);">
<?
foreach ($rows as $row ) {
	echo('<option value="' . $row->id . '">' . $row->name . '</option>');
}
?>
</select></div>
<div style="padding:5px;"><?=$textoAntesConteudo?></div>
<div style="padding:5px;"><select style="width:100%" name="selectConteudo" id="selectConteudo" onchange="vaiParaItem(this.value)">
</select></div>
<script language="javascript">
	var conteudos = new Array();
	<?
	$query = "SELECT id, title, sectionid "
	."\n FROM #__content "
	."\n WHERE sectionid = " . $sectionID
	."\n ORDER BY title";
	$database->setQuery( $query, 0, $items );
	$rows = $database->loadObjectList();
	//print_r($rows);
	foreach ($rows as $row ) { ?>
		conteudos.push(new Array("<?=$row->id?>", "<?=$row->title?>", "<?=$row->sectionid?>"));
	<? } ?>

	function populaSelectConteudo(cat){
		selObj = document.getElementById("selectConteudo");
		for (i = selObj.length - 1; i>=0; i--) {
			selObj.remove(i);
		}
		var novoOption = document.createElement('option');
		novoOption.text = "";
		novoOption.value = "";
		selObj.add(novoOption, null);
		for (x in conteudos){
			if(conteudos[x][2] == cat){
				var novoOption = document.createElement('option');
				novoOption.text = conteudos[x][1];
				novoOption.value = conteudos[x][0];
				selObj.add(novoOption, null);
			}
		}
	}
	function vaiParaItem(id){
		self.location = "index.php?option=com_content&task=view&Itemid=24&id=" + id;
	}	
</script>