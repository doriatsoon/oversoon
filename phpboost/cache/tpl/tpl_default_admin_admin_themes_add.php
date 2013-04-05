		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_THEME_MANAGEMENT'])) echo $this->_var['L_THEME_MANAGEMENT']; ?></li>
				<li>
					<a href="admin_themes.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/themes.png" alt="" /></a>
					<br />
					<a href="admin_themes.php" class="quick_link"><?php if (isset($this->_var['L_THEME_MANAGEMENT'])) echo $this->_var['L_THEME_MANAGEMENT']; ?></a>
				</li>
				<li>
					<a href="admin_themes_add.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/themes.png" alt="" /></a>
					<br />
					<a href="admin_themes_add.php" class="quick_link"><?php if (isset($this->_var['L_THEME_ADD'])) echo $this->_var['L_THEME_ADD']; ?></a>
				</li>
			</ul>
		</div>
			
		<div id="admin_contents">
			<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
			<div class="error_handler_position">
				<span id="errorh"></span>
				<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
					<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
					<br />	
				</div>
			</div>
			<?php } ?>
			
			<form action="admin_themes_add.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" enctype="multipart/form-data" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_UPLOAD_THEME'])) echo $this->_var['L_UPLOAD_THEME']; ?></legend>
					<dl>
						<dt><label for="upload_theme"><?php if (isset($this->_var['L_EXPLAIN_ARCHIVE_UPLOAD'])) echo $this->_var['L_EXPLAIN_ARCHIVE_UPLOAD']; ?></label></dt>
						<dd><label><input type="file" name="upload_theme" id="upload_theme" size="30" class="file" />
						<input type="hidden" name="max_file_size" value="2000000" /></label></dd>
					</dl>
				</fieldset>			
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_UPLOAD'])) echo $this->_var['L_UPLOAD']; ?></legend>
					<input type="submit" value="<?php if (isset($this->_var['L_UPLOAD'])) echo $this->_var['L_UPLOAD']; ?>" class="submit" />				
				</fieldset>	
			</form>
		
			<form action="admin_themes_add.php?install=1&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post">
				<table class="module_table">
					<tr> 
						<th colspan="6">
							<?php if (isset($this->_var['L_THEME_ADD'])) echo $this->_var['L_THEME_ADD']; ?>
						</th>
					</tr>
					
					<?php if (isset($this->_var['C_NO_THEME_PRESENT']) && $this->_var['C_NO_THEME_PRESENT']) { ?>
					<tr> 
						<td class="row1" style="text-align:center;">
							<?php if (isset($this->_var['L_NO_THEME_ON_SERV'])) echo $this->_var['L_NO_THEME_ON_SERV']; ?>
						</td>
					</tr>
					<?php }echo ' ';if (isset($this->_var['C_THEME_PRESENT']) && $this->_var['C_THEME_PRESENT']) { ?>
					<tr>
						<td class="row2" style="width:120px;text-align:center;">
							<?php if (isset($this->_var['L_THEME'])) echo $this->_var['L_THEME']; ?>
						</td>
						<td class="row2" style="width:160px;text-align:center;">
							<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>
						</td>
						<td class="row2" style="text-align:center;">
							<?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?>
						</td>
						<td class="row2" style="width:100px;text-align:center;">
							<?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?>
						</td>
						<td class="row2" style="width:100px;text-align:center;">
							<?php if (isset($this->_var['L_RANK'])) echo $this->_var['L_RANK']; ?>
						</td>
						<td class="row2" style="width:100px;text-align:center;">
							<?php if (isset($this->_var['L_INSTALL'])) echo $this->_var['L_INSTALL']; ?>
						</td>
					</tr>
					<?php }echo ' ';if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key]; ?>
					<tr> 	
						<td class="row2" style="text-align:center;">					
							<strong><?php if (isset($_tmpb_list['THEME'])) echo $_tmpb_list['THEME']; ?></strong> <em>(<?php if (isset($_tmpb_list['VERSION'])) echo $_tmpb_list['VERSION']; ?>)</em>				
						</td>
						<td class="row2">					
							<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($_tmpb_list['ICON'])) echo $_tmpb_list['ICON']; ?>/theme/images/theme.jpg" alt="" />
						</td>
						<td class="row2" style="vertical-align:top">
							<strong><?php if (isset($this->_var['L_AUTHOR'])) echo $this->_var['L_AUTHOR']; ?>:</strong> <?php if (isset($_tmpb_list['AUTHOR'])) echo $_tmpb_list['AUTHOR'];echo ' ';if (isset($_tmpb_list['AUTHOR_WEBSITE'])) echo $_tmpb_list['AUTHOR_WEBSITE']; ?><br />
							<strong><?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?>:</strong> <?php if (isset($_tmpb_list['DESC'])) echo $_tmpb_list['DESC']; ?><br />
							<strong><?php if (isset($this->_var['L_COMPAT'])) echo $this->_var['L_COMPAT']; ?>:</strong> PHPBoost <?php if (isset($_tmpb_list['COMPAT'])) echo $_tmpb_list['COMPAT']; ?><br />
							<strong><?php if (isset($this->_var['L_XHTML'])) echo $this->_var['L_XHTML']; ?>:</strong> <?php if (isset($_tmpb_list['HTML_VERSION'])) echo $_tmpb_list['HTML_VERSION']; ?><br />
							<strong><?php if (isset($this->_var['L_CSS'])) echo $this->_var['L_CSS']; ?>:</strong> <?php if (isset($_tmpb_list['CSS_VERSION'])) echo $_tmpb_list['CSS_VERSION']; ?><br />
							<strong><?php if (isset($this->_var['L_MAIN_COLOR'])) echo $this->_var['L_MAIN_COLOR']; ?>:</strong> <?php if (isset($_tmpb_list['MAIN_COLOR'])) echo $_tmpb_list['MAIN_COLOR']; ?><br />
							<strong><?php if (isset($this->_var['L_VARIABLE_WIDTH'])) echo $this->_var['L_VARIABLE_WIDTH']; ?>:</strong> <?php if (isset($_tmpb_list['VARIABLE_WIDTH'])) echo $_tmpb_list['VARIABLE_WIDTH']; ?><br />
							<strong><?php if (isset($this->_var['L_WIDTH'])) echo $this->_var['L_WIDTH']; ?>:</strong> <?php if (isset($_tmpb_list['WIDTH'])) echo $_tmpb_list['WIDTH']; ?>				
						</td>
						<td class="row2" style="text-align:center;">	
							<input type="radio" name="<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>activ" value="1" checked="checked" /> <?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?>
							<input type="radio" name="<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>activ" value="0" /> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?>
						</td>
						<td class="row2" style="text-align:center;">	
							<select name="<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>secure">								
								<?php if (isset($_tmpb_list['OPTIONS'])) echo $_tmpb_list['OPTIONS']; ?>
							</select>
						</td>
						<td class="row2" style="text-align:center;">
							<input type="submit" name="<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>" value="<?php if (isset($this->_var['L_INSTALL'])) echo $this->_var['L_INSTALL']; ?>" class="submit" />
						</td>
					</tr>
					<?php } ?>
				</table>
			</form>
		</div>
		