<?php
/**
* Author: Omar Mohammed
* Module: Simple Image Holder
* Version: 1.0
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

$width	= $params->get( 'width', "" );
$height	= $params->get( 'height', "" );
$pretext= $params->get( 'pretext', "" );
$prepos= $params->get( 'prepos', "" );
$align	= $params->get( 'align', "" );
$dir	= $params->get( 'direction', "" );
$item0	= $params->get( 'item0', "" );
$item1	= $params->get( 'item1', "" );
$link1	= $params->get( 'link1', "");
$item2	= $params->get( 'item2', "" );
$link2	= $params->get( 'link2', "");
$item3	= $params->get( 'item3', "" );
$link3	= $params->get( 'link3', "");
$item4	= $params->get( 'item4', "" );
$link4	= $params->get( 'link4', "");
$item5	= $params->get( 'item5', "" );
$link5	= $params->get( 'link5', "");
$item6	= $params->get( 'item6', "" );
$link6	= $params->get( 'link6', "");
$item7	= $params->get( 'item7', "" );
$link7	= $params->get( 'link7', "");
$item8	= $params->get( 'item8', "" );
$link8	= $params->get( 'link8', "");
$item9	= $params->get( 'item9', "" );
$link9	= $params->get( 'link9', "");
$item10	= $params->get( 'item10', "" );
$link10	= $params->get( 'link10', "");
$item11	= $params->get( 'item11', "" );
$link11	= $params->get( 'link11', "");
$item12	= $params->get( 'item12', "" );
$link12	= $params->get( 'link12', "");
$item13	= $params->get( 'item13', "" );
$link13	= $params->get( 'link13', "");
$item14	= $params->get( 'item14', "" );
$link14	= $params->get( 'link14', "");
$item15	= $params->get( 'item15', "" );
$link15	= $params->get( 'link15', "");
$item16	= $params->get( 'item16', "" );
$link16	= $params->get( 'link16', "");
$item17	= $params->get( 'item17', "" );
$link17	= $params->get( 'link17', "");
$item18	= $params->get( 'item18', "" );
$link18	= $params->get( 'link18', "");
$item19	= $params->get( 'item19', "" );
$link19	= $params->get( 'link19', "");
$item20	= $params->get( 'item20', "" );
$link20	= $params->get( 'link20', "");
$item21	= $params->get( 'item21', "" );
$link21	= $params->get( 'link21', "");
$item22	= $params->get( 'item22', "" );
$link22	= $params->get( 'link22', "");
$item23	= $params->get( 'item23', "" );
$link23	= $params->get( 'link23', "");
$item24	= $params->get( 'item24', "" );
$link24	= $params->get( 'link24', "");
$item25	= $params->get( 'item25', "" );
$link25	= $params->get( 'link25', "");
$item26	= $params->get( 'item26', "" );
$link26	= $params->get( 'link26', "");
$item27	= $params->get( 'item27', "" );
$link27	= $params->get( 'link27', "");
$item28	= $params->get( 'item28', "" );
$link28	= $params->get( 'link28', "");
$item29	= $params->get( 'item29', "" );
$link29	= $params->get( 'link29', "");
$item30	= $params->get( 'item30', "" );
$link30	= $params->get( 'link30', "");
//$page	= $params->get( 'page', "" );


if ($width == null)
	{$resize_w = "";}
else
	{$resize_w = " width=".$width;}

if ($height == null)
	{$resize_h = "";}
else
	{$resize_h = " height=".$height;}

// Output
?>

<style type="text/css">
	.selectbox-align {
		text-align: <?php echo $align; ?>;
		direction: <?php echo $dir; ?>;
	}
</style>

<table cellpadding="0" cellspacing="0" style="width:100%" class="selectbox-align">
	<tr>
		<td>
		<?php echo $pretext; ?>
		</td>
	<?php if ($prepos==1) 
		echo "</tr><tr>";
	?>
		<td>
			<form method="get">
				<select name="Select1" style="width: auto" onChange="top.location.href=this.options[this.selectedIndex].value">
				<?php 
				//if (($item1 != null)&&($link1 != null)) { echo "<option value=\"".$link1."\">".$item1."</option>"; }
				if ($item0 != null) { echo "<option value=\"\">".$item0."</option>"; }
				if ($item1 != null) { echo "<option value=\"".$link1."\">".$item1."</option>"; }
				if ($item2 != null) { echo "<option value=\"".$link2."\">".$item2."</option>"; }
				if ($item3 != null) { echo "<option value=\"".$link3."\">".$item3."</option>"; }
				if ($item4 != null) { echo "<option value=\"".$link4."\">".$item4."</option>"; }
				if ($item5 != null) { echo "<option value=\"".$link5."\">".$item5."</option>"; }
				if ($item6 != null) { echo "<option value=\"".$link6."\">".$item6."</option>"; }
				if ($item7 != null) { echo "<option value=\"".$link7."\">".$item7."</option>"; }
				if ($item8 != null) { echo "<option value=\"".$link8."\">".$item8."</option>"; }
				if ($item9 != null) { echo "<option value=\"".$link9."\">".$item9."</option>"; }
				if ($item10 != null) { echo "<option value=\"".$link10."\">".$item10."</option>"; }
				if ($item11 != null) { echo "<option value=\"".$link11."\">".$item11."</option>"; }
				if ($item12 != null) { echo "<option value=\"".$link12."\">".$item12."</option>"; }
				if ($item13 != null) { echo "<option value=\"".$link13."\">".$item13."</option>"; }
				if ($item14 != null) { echo "<option value=\"".$link14."\">".$item14."</option>"; }
				if ($item15 != null) { echo "<option value=\"".$link15."\">".$item15."</option>"; }
				if ($item16 != null) { echo "<option value=\"".$link16."\">".$item16."</option>"; }
				if ($item17 != null) { echo "<option value=\"".$link17."\">".$item17."</option>"; }
				if ($item18 != null) { echo "<option value=\"".$link18."\">".$item18."</option>"; }
				if ($item19 != null) { echo "<option value=\"".$link19."\">".$item19."</option>"; }
				if ($item20 != null) { echo "<option value=\"".$link20."\">".$item20."</option>"; }
				if ($item21 != null) { echo "<option value=\"".$link21."\">".$item21."</option>"; }
				if ($item22 != null) { echo "<option value=\"".$link22."\">".$item22."</option>"; }
				if ($item23 != null) { echo "<option value=\"".$link23."\">".$item23."</option>"; }
				if ($item24 != null) { echo "<option value=\"".$link24."\">".$item24."</option>"; }
				if ($item25 != null) { echo "<option value=\"".$link25."\">".$item25."</option>"; }
				if ($item26 != null) { echo "<option value=\"".$link26."\">".$item26."</option>"; }
				if ($item27 != null) { echo "<option value=\"".$link27."\">".$item27."</option>"; }
				if ($item28 != null) { echo "<option value=\"".$link28."\">".$item28."</option>"; }
				if ($item29 != null) { echo "<option value=\"".$link29."\">".$item29."</option>"; }
				if ($item30 != null) { echo "<option value=\"".$link30."\">".$item30."</option>"; }
				?>
				</select>
			</form>
		</td>
	</tr>
</table>
