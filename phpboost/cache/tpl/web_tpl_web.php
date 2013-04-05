		<?php if (isset($this->_var['JAVA'])) echo $this->_var['JAVA'];echo ' ';if (isset($this->_var['C_WEB_CAT']) && $this->_var['C_WEB_CAT']) { ?>
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">
				<div style="float:left">
					<strong><?php if (isset($this->_var['L_CATEGORIES'])) echo $this->_var['L_CATEGORIES']; ?></strong> <?php if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) { ?> &nbsp;&nbsp;<a href="admin_web_cat.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>" title=""><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" class="valign_middle" /></a> <?php } ?>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
				</div>
			</div>
			<div class="module_contents">
				<?php if (!isset($this->_block['cat_list']) || !is_array($this->_block['cat_list'])) $this->_block['cat_list'] = array();
foreach ($this->_block['cat_list'] as $cat_list_key => $cat_list_value) {
$_tmpb_cat_list = &$this->_block['cat_list'][$cat_list_key]; ?>
				<div style="float:left;text-align:center;width:<?php if (isset($_tmpb_cat_list['WIDTH'])) echo $_tmpb_cat_list['WIDTH']; ?>%;">
					<?php if (isset($_tmpb_cat_list['U_IMG_CAT'])) echo $_tmpb_cat_list['U_IMG_CAT']; ?>
					<a href="../web/web<?php if (isset($_tmpb_cat_list['U_WEB_CAT'])) echo $_tmpb_cat_list['U_WEB_CAT']; ?>"><?php if (isset($_tmpb_cat_list['CAT'])) echo $_tmpb_cat_list['CAT']; ?></a> <span class="text_small">(<?php if (isset($_tmpb_cat_list['TOTAL'])) echo $_tmpb_cat_list['TOTAL']; ?>)</span><br />
					<span class="text_small"><?php if (isset($_tmpb_cat_list['CONTENTS'])) echo $_tmpb_cat_list['CONTENTS']; ?></span>
					<br /><br /><br />
				</div>	
				<?php } ?>
				
				<div class="text_small" style="padding-top:10px;text-align:center;clear:both">
					<?php if (isset($this->_var['TOTAL_FILE'])) echo $this->_var['TOTAL_FILE'];echo ' ';if (isset($this->_var['L_HOW_LINK'])) echo $this->_var['L_HOW_LINK']; ?>
				</div>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom">
				<div style="float:right">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
				</div>
			</div>
		</div>
		<?php }echo ' ';if (isset($this->_var['C_WEB_LINK']) && $this->_var['C_WEB_LINK']) { ?>
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">
				<div style="float:left">
					<strong><?php if (isset($this->_var['CAT_NAME'])) echo $this->_var['CAT_NAME']; ?></strong>  <?php if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) { ?> &nbsp;&nbsp;<a href="admin_web_cat.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>" title=""><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" class="valign_middle" /></a> <?php } ?>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
				</div>
			</div>
			<div class="module_contents">
				<table class="module_table">
					<tr>
						<th style="text-align:center;">
							<a href="web<?php if (isset($this->_var['U_WEB_ALPHA_TOP'])) echo $this->_var['U_WEB_ALPHA_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
							<?php if (isset($this->_var['L_LINK'])) echo $this->_var['L_LINK']; ?>
							<a href="web<?php if (isset($this->_var['U_WEB_ALPHA_BOTTOM'])) echo $this->_var['U_WEB_ALPHA_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						</th>
						<th style="text-align:center;">
							<a href="web<?php if (isset($this->_var['U_WEB_DATE_TOP'])) echo $this->_var['U_WEB_DATE_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
							<?php if (isset($this->_var['L_DATE'])) echo $this->_var['L_DATE']; ?>					
							<a href="web<?php if (isset($this->_var['U_WEB_DATE_BOTTOM'])) echo $this->_var['U_WEB_DATE_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						</th>
						<th style="text-align:center;">
							<a href="web<?php if (isset($this->_var['U_WEB_VIEW_TOP'])) echo $this->_var['U_WEB_VIEW_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
							<?php if (isset($this->_var['L_VIEW'])) echo $this->_var['L_VIEW']; ?>					
							<a href="web<?php if (isset($this->_var['U_WEB_VIEW_BOTTOM'])) echo $this->_var['U_WEB_VIEW_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						</th>
						<th style="text-align:center;">
							<a href="web<?php if (isset($this->_var['U_WEB_NOTE_TOP'])) echo $this->_var['U_WEB_NOTE_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
							<?php if (isset($this->_var['L_NOTE'])) echo $this->_var['L_NOTE']; ?>					
							<a href="web<?php if (isset($this->_var['U_WEB_NOTE_BOTTOM'])) echo $this->_var['U_WEB_NOTE_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						</th>
						<th style="text-align:center;">
							<a href="web<?php if (isset($this->_var['U_WEB_COM_TOP'])) echo $this->_var['U_WEB_COM_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
							<?php if (isset($this->_var['L_COM'])) echo $this->_var['L_COM']; ?>
							<a href="web<?php if (isset($this->_var['U_WEB_COM_BOTTOM'])) echo $this->_var['U_WEB_COM_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						</th>
					</tr>
					<?php if (!isset($this->_block['web']) || !is_array($this->_block['web'])) $this->_block['web'] = array();
foreach ($this->_block['web'] as $web_key => $web_value) {
$_tmpb_web = &$this->_block['web'][$web_key]; ?>
					<tr>	
						<td class="row2">
							&raquo; <a href="web<?php if (isset($_tmpb_web['U_WEB_LINK'])) echo $_tmpb_web['U_WEB_LINK']; ?>"><?php if (isset($_tmpb_web['NAME'])) echo $_tmpb_web['NAME']; ?></a>
						</td>
						<td class="row2" style="text-align: center;">
							<?php if (isset($_tmpb_web['DATE'])) echo $_tmpb_web['DATE']; ?>
						</td>
						<td class="row2" style="text-align: center;">
							<?php if (isset($_tmpb_web['COMPT'])) echo $_tmpb_web['COMPT']; ?> 
						</td>
						<td class="row2" style="text-align: center;">
							<?php if (isset($_tmpb_web['NOTE'])) echo $_tmpb_web['NOTE']; ?>
						</td>
						<td class="row2" style="text-align: center;">
							<?php if (isset($_tmpb_web['COM'])) echo $_tmpb_web['COM']; ?> 
						</td>
					</tr>
					<?php } ?>
				</table>
				<p style="text-align:center;padding:6px;"><?php if (isset($this->_var['NO_CAT'])) echo $this->_var['NO_CAT']; ?></p>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom">
				<div style="float:left">
					<strong><?php if (isset($this->_var['CAT_NAME'])) echo $this->_var['CAT_NAME']; ?></strong>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
				</div>
			</div>
		</div>		
		<?php }echo ' ';if (isset($this->_var['C_DISPLAY_WEB']) && $this->_var['C_DISPLAY_WEB']) { ?>
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">
				<div style="float:left">
					<strong><?php if (isset($this->_var['NAME'])) echo $this->_var['NAME']; ?></strong>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['COM'])) echo $this->_var['COM'];echo ' ';if (isset($this->_var['EDIT'])) echo $this->_var['EDIT'];if (isset($this->_var['DEL'])) echo $this->_var['DEL']; ?>
				</div>
			</div>
			<div class="module_contents">
				<p>					
					<strong><?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?>:</strong> <?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?>
					<br /><br />
					<strong><?php if (isset($this->_var['L_CAT'])) echo $this->_var['L_CAT']; ?>:</strong> 
					
					<a href="../web/web<?php if (isset($this->_var['U_WEB_CAT'])) echo $this->_var['U_WEB_CAT']; ?>" title="<?php if (isset($this->_var['CAT'])) echo $this->_var['CAT']; ?>"><?php if (isset($this->_var['CAT'])) echo $this->_var['CAT']; ?></a><br />
					
					<strong><?php if (isset($this->_var['L_DATE'])) echo $this->_var['L_DATE']; ?>:</strong> <?php if (isset($this->_var['DATE'])) echo $this->_var['DATE']; ?><br />						
					<strong><?php if (isset($this->_var['L_VIEWS'])) echo $this->_var['L_VIEWS']; ?>:</strong> <?php if (isset($this->_var['COMPT'])) echo $this->_var['COMPT'];echo ' ';if (isset($this->_var['L_TIMES'])) echo $this->_var['L_TIMES']; ?>
					
					<span class="spacer">&nbsp;</span>
				</p>
				<p class="text_center">					
					<a href="<?php if (isset($this->_var['URL'])) echo $this->_var['URL']; ?>" title="<?php if (isset($this->_var['NAME'])) echo $this->_var['NAME']; ?>" onclick="document.location = 'count.php?id=<?php if (isset($this->_var['IDWEB'])) echo $this->_var['IDWEB']; ?>';"><img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/bouton_url.gif" alt="" /></a>
				</p>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom text_small">
				<?php if (isset($this->_var['KERNEL_NOTATION'])) echo $this->_var['KERNEL_NOTATION']; ?>
			</div>
		</div>
			
		<br /><br />
		<?php if (isset($this->_var['COMMENTS'])) echo $this->_var['COMMENTS'];echo ' ';} ?>
		
		