<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<?php
		if ($my->id) { initEditor(); } ?>
		<?php mosShowHead(); ?>
		<link href="templates/<?php echo $cur_template; ?>/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />		
	</head>
	<body>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td style="background-image:url(templates/<?php echo $cur_template; ?>/images/lateral_esq.png); background-position:bottom right; background-repeat:no-repeat;">&nbsp;</td>
				<td width="859">
					<table width="859" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td height="139" valign="bottom" background="templates/<?php echo $cur_template; ?>/images/cabecalho.png">
								<?php 
								if ( mosCountModules( 'user4' ) ) { ?>
			  						<div style="text-align:right;padding-right:35px;padding-bottom:22px;"><? mosLoadModules ( 'user4', -2 ); ?></div>
								<? }
								else echo("&nbsp;");
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php 
								if ( mosCountModules( 'top' ) ) {
			  						mosLoadModules ( 'top', -2 );
								}
								?>
								<div style="background-image:url(templates/<?php echo $cur_template; ?>/images/borda_menu.gif); width:100%; height:3px;"></div>
							</td>
						</tr>
						<tr>
							<td bgcolor="#EEEEEE" style="padding-left:8px; padding-top:6px;">
								<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td valign="top">
											<?php mosPathWay(); ?>
											<table width="100%" cellpadding="0" cellspacing="4">
												<tr>
													<?php if ( mosCountModules( 'left' ) ) { ?>
														<td width="150" valign="top" bgcolor="#e2d6e2">
															<? mosLoadModules ( 'left', -2 ); ?>
														</td>
													<? } ?>
														<td valign="top">
															<?php mosMainBody(); ?>
															<?php if ( mosCountModules( 'user2' ) ) { ?>
																<div>
																	<? mosLoadModules ( 'user2', -2 ); ?>
																</div>
															<? } ?>
														</td>
													<?php if ( mosCountModules( 'user1' ) ) { ?>
														<td valign="top" class="user1" width="190">
															<? mosLoadModules ( 'user1', -2 ); ?>
														</td>
													<? } ?>
													<?php if ( mosCountModules( 'inset' ) ) { ?>
														<td valign="top" width="159" bgcolor="#afafaf">
															<? mosLoadModules ( 'inset', -2 ); ?>
														</td>
													<? } ?>
												</tr>
											</table>
										</td>
										<?php if ( mosCountModules( 'right' ) ) { ?>
											<td width="212" valign="top">
												<table width="100%" cellpadding="0" cellspacing="0" border="0">
													<tr>
														<td colspan="2">
															<img src="templates/<?php echo $cur_template; ?>/images/barra_direita_topo.gif" />
														</td>
													</tr>
													<tr>
														<td width="6" background="templates/<?php echo $cur_template; ?>/images/barra_direita_esq.gif">&nbsp;</td>
														<td bgcolor="#EEEEEE" style="padding:10px;">
																<? mosLoadModules ( 'right', -2 ); ?>
														</td>
													</tr>
													<tr>
														<td colspan="2">
															<img src="templates/<?php echo $cur_template; ?>/images/barra_direita_rodape.gif" />
															<br /><br />
														</td>
													</tr>
												</table>
											</td>
										<? } ?>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="50" align="center" valign="top" style="background-image:url(templates/<?php echo $cur_template; ?>/images/rodape.png); background-position:top; background-repeat:no-repeat;">
								<?php 
								if ( mosCountModules( 'footer' ) ) {
			  						mosLoadModules ( 'footer', -2 );
								}
								?>
							</td>
						</tr>
					</table>		
				</td>
				<td style="background-image:url(templates/<?php echo $cur_template; ?>/images/lateral_dir.png); background-position:top left; background-repeat:no-repeat;">&nbsp;</td>
			</tr>
		</table>
		<script type="text/javascript">
			if(typeof sIFR == "function"){
				sIFR.replaceElement("div.moduletable h3, .pathway", named(
				{sFlashSrc: "mambots/system/sifr.swf", sColor: "#FFFFFF", sWmode: "transparent"}
				));
			}
		</script>
	</body>
</html>