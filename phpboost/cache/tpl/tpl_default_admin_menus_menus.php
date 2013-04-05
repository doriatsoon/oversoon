<script type="text/javascript">
<!--
function Confirm_menu() {
	return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_MENU'])) echo $this->_var['L_CONFIRM_DEL_MENU']; ?>");
}
var delay = 2000; //Délai après lequel le bloc est automatiquement masqué, après le départ de la souris.
var timeout;
var displayed = false;
var previous = '';
var started = false;

//Affiche le bloc.
function menu_display_block(divID)
{
	if( timeout )
		clearTimeout(timeout);
	
	if( document.getElementById(previous) )
	{		
		document.getElementById(previous).style.display = 'none';
		started = false
	}	

	if( document.getElementById('move' + divID) )
	{			
		document.getElementById('move' + divID).style.display = 'block';
		previous = 'move' + divID;
		started = true;
	}
}
//Cache le bloc.
function menu_hide_block(idfield, stop)
{
	if( stop && timeout )
		clearTimeout(timeout);
	else if( started )
		timeout = setTimeout('menu_display_block()', delay);
}
-->
</script>

<div id="admin_contents">
	<table class="module_table" style="background:#FFFFFF;width:100%">
		<tr>
			<td colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>" style="border:1px solid black;background:#cee6cd">
				<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_HEADER'])) echo $this->_var['L_HEADER']; ?></p>
				<?php if (!isset($this->_block['mod_header']) || !is_array($this->_block['mod_header'])) $this->_block['mod_header'] = array();
foreach ($this->_block['mod_header'] as $mod_header_key => $mod_header_value) {
$_tmpb_mod_header = &$this->_block['mod_header'][$mod_header_key];echo ' ';if (isset($_tmpb_mod_header['MENU'])) echo $_tmpb_mod_header['MENU'];echo ' ';} ?>
			</td>
		</tr>
		<tr>
			<td colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>" style="border:1px solid black;background:#CCFF99">
				<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_SUB_HEADER'])) echo $this->_var['L_SUB_HEADER']; ?></p>
				<?php if (!isset($this->_block['mod_subheader']) || !is_array($this->_block['mod_subheader'])) $this->_block['mod_subheader'] = array();
foreach ($this->_block['mod_subheader'] as $mod_subheader_key => $mod_subheader_value) {
$_tmpb_mod_subheader = &$this->_block['mod_subheader'][$mod_subheader_key];echo ' ';if (isset($_tmpb_mod_subheader['MENU'])) echo $_tmpb_mod_subheader['MENU'];echo ' ';} ?>
			</td>
		</tr>
		<tr>				
			<?php if (isset($this->_var['LEFT_COLUMN']) && $this->_var['LEFT_COLUMN']) { ?>
			<td style="width:18%;vertical-align:top;padding:4px;border:1px solid black;background:#afafaf">
				<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_LEFT_MENU'])) echo $this->_var['L_LEFT_MENU']; ?></p>
				<div class="module_mini_container" style="background:none;padding:0;margin:auto;float:none;border:none;">
				<?php if (!isset($this->_block['mod_left']) || !is_array($this->_block['mod_left'])) $this->_block['mod_left'] = array();
foreach ($this->_block['mod_left'] as $mod_left_key => $mod_left_value) {
$_tmpb_mod_left = &$this->_block['mod_left'][$mod_left_key];echo ' ';if (isset($_tmpb_mod_left['MENU'])) echo $_tmpb_mod_left['MENU'];echo ' ';}echo ' ';if (isset($this->_var['RIGHT_COLUMN']) && !$this->_var['RIGHT_COLUMN']) { ?>
				<hr /><br />
				<?php if (!isset($this->_block['mod_right']) || !is_array($this->_block['mod_right'])) $this->_block['mod_right'] = array();
foreach ($this->_block['mod_right'] as $mod_right_key => $mod_right_value) {
$_tmpb_mod_right = &$this->_block['mod_right'][$mod_right_key];echo ' ';if (isset($_tmpb_mod_right['MENU'])) echo $_tmpb_mod_right['MENU'];echo ' ';}echo ' ';} ?>   			
				</div>
			</td>
			<?php } ?>
			
			<td style="vertical-align:top;border:1px solid black;background:#E5E5E5">
				<table class="module_table" style="width:100%;margin-top:0;">
					<tr>
						<td style="border:1px solid black;padding:4px;">
							&nbsp;&nbsp;<a class="small_link" href="<?php if (isset($this->_var['START_PAGE'])) echo $this->_var['START_PAGE']; ?>" title="<?php if (isset($this->_var['L_INDEX'])) echo $this->_var['L_INDEX']; ?>"><?php if (isset($this->_var['L_INDEX'])) echo $this->_var['L_INDEX']; ?></a> <img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/breadcrumb.png" alt="" class="valign_middle" />
						</td>
					</tr>
					<tr>
						<td style="border:1px solid black;background:#FFE25F">
							<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_TOP_CENTRAL_MENU'])) echo $this->_var['L_TOP_CENTRAL_MENU']; ?></p>
							<?php if (!isset($this->_block['mod_topcentral']) || !is_array($this->_block['mod_topcentral'])) $this->_block['mod_topcentral'] = array();
foreach ($this->_block['mod_topcentral'] as $mod_topcentral_key => $mod_topcentral_value) {
$_tmpb_mod_topcentral = &$this->_block['mod_topcentral'][$mod_topcentral_key];echo ' ';if (isset($_tmpb_mod_topcentral['MENU'])) echo $_tmpb_mod_topcentral['MENU'];echo ' ';} ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td style="border:1px solid black;">
							<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_MENUS_AVAILABLE'])) echo $this->_var['L_MENUS_AVAILABLE']; ?></p>
							<?php if (!isset($this->_block['mod_main']) || !is_array($this->_block['mod_main'])) $this->_block['mod_main'] = array();
foreach ($this->_block['mod_main'] as $mod_main_key => $mod_main_value) {
$_tmpb_mod_main = &$this->_block['mod_main'][$mod_main_key];echo ' ';if (isset($_tmpb_mod_main['MENU'])) echo $_tmpb_mod_main['MENU'];echo ' ';} ?>
							
							<div class="spacer">&nbsp;</div>
							
							<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_UNINSTALLED_MENUS'])) echo $this->_var['L_UNINSTALLED_MENUS']; ?></p>								
							<?php if (!isset($this->_block['mod_main_uninstalled']) || !is_array($this->_block['mod_main_uninstalled'])) $this->_block['mod_main_uninstalled'] = array();
foreach ($this->_block['mod_main_uninstalled'] as $mod_main_uninstalled_key => $mod_main_uninstalled_value) {
$_tmpb_mod_main_uninstalled = &$this->_block['mod_main_uninstalled'][$mod_main_uninstalled_key]; ?>
							<div class="module_mini_container" style="margin:5px;margin-top:0px;float:left">
								<div class="module_mini_top">
									<h5 class="sub_title"><?php if (isset($_tmpb_mod_main_uninstalled['NAME'])) echo $_tmpb_mod_main_uninstalled['NAME']; ?></h5>
								</div>
								<div class="module_mini_contents">
									<a href="<?php if (isset($_tmpb_mod_main_uninstalled['U_INSTALL'])) echo $_tmpb_mod_main_uninstalled['U_INSTALL']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/files_mini.png" class="valign_middle" alt="" /></a>
									<br />
									<a href="<?php if (isset($_tmpb_mod_main_uninstalled['U_INSTALL'])) echo $_tmpb_mod_main_uninstalled['U_INSTALL']; ?>"><?php if (isset($this->_var['L_INSTALL'])) echo $this->_var['L_INSTALL']; ?></a>
								</div>
								<div class="module_mini_bottom">
								</div>
							</div>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<td style="border:1px solid black;background:#FF5F5F">
							<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_BOTTOM_CENTRAL_MENU'])) echo $this->_var['L_BOTTOM_CENTRAL_MENU']; ?></p>
							<?php if (!isset($this->_block['mod_bottomcentral']) || !is_array($this->_block['mod_bottomcentral'])) $this->_block['mod_bottomcentral'] = array();
foreach ($this->_block['mod_bottomcentral'] as $mod_bottomcentral_key => $mod_bottomcentral_value) {
$_tmpb_mod_bottomcentral = &$this->_block['mod_bottomcentral'][$mod_bottomcentral_key];echo ' ';if (isset($_tmpb_mod_bottomcentral['MENU'])) echo $_tmpb_mod_bottomcentral['MENU'];echo ' ';} ?>
							&nbsp;
						</td>
					</tr>
				</table>							
			</td>
			
			<?php if (isset($this->_var['RIGHT_COLUMN']) && $this->_var['RIGHT_COLUMN']) { ?>
			<td style="width:18%;vertical-align:top;padding:4px;border:1px solid black;background:#bdaeca">
				<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_RIGHT_MENU'])) echo $this->_var['L_RIGHT_MENU']; ?></p>
				<?php if (!isset($this->_block['mod_right']) || !is_array($this->_block['mod_right'])) $this->_block['mod_right'] = array();
foreach ($this->_block['mod_right'] as $mod_right_key => $mod_right_value) {
$_tmpb_mod_right = &$this->_block['mod_right'][$mod_right_key];echo ' ';if (isset($_tmpb_mod_right['MENU'])) echo $_tmpb_mod_right['MENU'];echo ' ';}echo ' ';if (isset($this->_var['LEFT_COLUMN']) && !$this->_var['LEFT_COLUMN']) { ?>
				<hr /><br />
				<?php if (!isset($this->_block['mod_left']) || !is_array($this->_block['mod_left'])) $this->_block['mod_left'] = array();
foreach ($this->_block['mod_left'] as $mod_left_key => $mod_left_value) {
$_tmpb_mod_left = &$this->_block['mod_left'][$mod_left_key];echo ' ';if (isset($_tmpb_mod_left['MENU'])) echo $_tmpb_mod_left['MENU'];echo ' ';}echo ' ';} ?>			
			</td>
			<?php } ?>
		</tr>
		<tr>
			<td colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>" style="border:1px solid black;background:#90ab8e">
				<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_TOP_FOOTER'])) echo $this->_var['L_TOP_FOOTER']; ?></p>
				<?php if (!isset($this->_block['mod_topfooter']) || !is_array($this->_block['mod_topfooter'])) $this->_block['mod_topfooter'] = array();
foreach ($this->_block['mod_topfooter'] as $mod_topfooter_key => $mod_topfooter_value) {
$_tmpb_mod_topfooter = &$this->_block['mod_topfooter'][$mod_topfooter_key];echo ' ';if (isset($_tmpb_mod_topfooter['MENU'])) echo $_tmpb_mod_topfooter['MENU'];echo ' ';} ?>
			</td>
		</tr>
		<tr>
			<td colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>" style="border:1px solid black;background:#A8D1CB">
				<p class="text_center text_strong" style="padding:6px;padding-bottom:0px;"><?php if (isset($this->_var['L_FOOTER'])) echo $this->_var['L_FOOTER']; ?></p>
				<?php if (!isset($this->_block['mod_footer']) || !is_array($this->_block['mod_footer'])) $this->_block['mod_footer'] = array();
foreach ($this->_block['mod_footer'] as $mod_footer_key => $mod_footer_value) {
$_tmpb_mod_footer = &$this->_block['mod_footer'][$mod_footer_key];echo ' ';if (isset($_tmpb_mod_footer['MENU'])) echo $_tmpb_mod_footer['MENU'];echo ' ';} ?>
			</td>
		</tr>
	</table>
	
	<table class="module_table">
		<tr> 
			<th colspan="6"><?php if (isset($this->_var['L_MENUS_MANAGEMENT'])) echo $this->_var['L_MENUS_MANAGEMENT']; ?></th>
		</tr>
		<tr> 
			<td class="row2">
				<div style="float:left;margin-left:5px;margin-right:10px;height:15px;width:15px;background:#cee6cd;border:1px solid black"></div> <div style="clear:right"><?php if (isset($this->_var['L_HEADER'])) echo $this->_var['L_HEADER']; ?></div>
				<br />
				<div style="float:left;margin-left:5px;margin-right:10px;height:15px;width:15px;background:#CCFF99;border:1px solid black"></div> <div style="clear:right"><?php if (isset($this->_var['L_SUB_HEADER'])) echo $this->_var['L_SUB_HEADER']; ?></div>
				<br />
				<div style="float:left;margin-left:5px;margin-right:10px;height:15px;width:15px;background:#afafaf;border:1px solid black"></div> <div style="clear:right"><?php if (isset($this->_var['L_LEFT_MENU'])) echo $this->_var['L_LEFT_MENU']; ?></div>
				<br />
				<div style="float:left;margin-left:5px;margin-right:10px;height:15px;width:15px;background:#FFE25F;border:1px solid black"></div> <div style="clear:right"><?php if (isset($this->_var['L_TOP_CENTRAL_MENU'])) echo $this->_var['L_TOP_CENTRAL_MENU']; ?></div>
			</td>
			<td class="row2" style="vertical-align:top">
				<div style="float:left;margin-left:5px;margin-right:10px;height:15px;width:15px;background:#FF5F5F;border:1px solid black"></div> <div style="clear:right"><?php if (isset($this->_var['L_BOTTOM_CENTRAL_MENU'])) echo $this->_var['L_BOTTOM_CENTRAL_MENU']; ?></div>
				<br />
				<div style="float:left;margin-left:5px;margin-right:10px;height:15px;width:15px;background:#bdaeca;border:1px solid black"></div> <div style="clear:right"><?php if (isset($this->_var['L_RIGHT_MENU'])) echo $this->_var['L_RIGHT_MENU']; ?></div>
				<br />
				<div style="float:left;margin-left:5px;margin-right:10px;height:15px;width:15px;background:#90ab8e;border:1px solid black"></div> <div style="clear:right"><?php if (isset($this->_var['L_TOP_FOOTER'])) echo $this->_var['L_TOP_FOOTER']; ?></div>
				<br />
				<div style="float:left;margin-left:5px;margin-right:10px;height:15px;width:15px;background:#A8D1CB;border:1px solid black"></div> <div style="clear:right"><?php if (isset($this->_var['L_FOOTER'])) echo $this->_var['L_FOOTER']; ?></div>
			</td>
		</tr>
	</table>

</div>

