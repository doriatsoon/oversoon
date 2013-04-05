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
		
			<?php if (isset($this->_var['C_THEME_MAIN']) && $this->_var['C_THEME_MAIN']) { ?>
			<form action="admin_themes.php?uninstall=1&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post">
				<table class="module_table">
					<tr> 
						<th colspan="7">
							<?php if (isset($this->_var['L_THEME_MANAGEMENT'])) echo $this->_var['L_THEME_MANAGEMENT']; ?>
						</th>
					</tr>
					<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
					<tr> 
						<td class="row2" colspan="7" style="text-align:center;">
							<span id="errorh"></span>
							<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
								<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
								<br />	
							</div>
							<br />		
						</td>
					</tr>
					<?php } ?>				
					<tr>
						<td class="row2" colspan="7">
							<strong><?php if (isset($this->_var['L_EXPLAIN_DEFAULT_THEME'])) echo $this->_var['L_EXPLAIN_DEFAULT_THEME']; ?></strong>
						</td>
					</tr>
					<?php if (isset($this->_var['C_NO_THEME_PRESENT']) && $this->_var['C_NO_THEME_PRESENT']) { ?>
					<tr> 
						<td class="row1" style="text-align:center;">
							<?php if (isset($this->_var['L_NO_THEME_ON_SERV'])) echo $this->_var['L_NO_THEME_ON_SERV']; ?>
						</td>
					</tr>
					<?php }echo ' ';if (isset($this->_var['C_THEME_PRESENT']) && $this->_var['C_THEME_PRESENT']) { ?>
					<tr>
						<th style="width:120px;text-align:center;">
							<?php if (isset($this->_var['L_THEME'])) echo $this->_var['L_THEME']; ?>
						</th>
						<th style="width:160px;text-align:center;">
							<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>
						</th>
						<th style="text-align:center;">
							<?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?>
						</th>
						<th style="width:80px;text-align:center;">
							<?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?>
						</th>
						<th style="width:100px;text-align:center;">
							<?php if (isset($this->_var['L_RANK'])) echo $this->_var['L_RANK']; ?>
						</th>
						<th style="width:80px;text-align:center;">
							<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>
						</th>
						<th style="width:100px;text-align:center;">
							<?php if (isset($this->_var['L_UNINSTALL'])) echo $this->_var['L_UNINSTALL']; ?>
						</th>
					</tr>
					<?php }echo ' ';if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key]; ?>
					<tr> 	
						<td class="row2" style="text-align:center;">					
							<span id="t<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>"><strong><?php if (isset($_tmpb_list['THEME'])) echo $_tmpb_list['THEME']; ?></strong></span> <em>(<?php if (isset($_tmpb_list['VERSION'])) echo $_tmpb_list['VERSION']; ?>)</em>				
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
						<?php if (isset($_tmpb_list['C_THEME_NOT_DEFAULT']) && $_tmpb_list['C_THEME_NOT_DEFAULT']) { ?>
						<td class="row2" style="text-align:center;">	
							<input type="radio" name="<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>activ" value="1" <?php if (isset($_tmpb_list['THEME_ACTIV'])) echo $_tmpb_list['THEME_ACTIV']; ?> onchange="document.location = 'admin_themes.php?activ=1&amp;id=<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>'" /> <?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?>
							<input type="radio" name="<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>activ" value="0" <?php if (isset($_tmpb_list['THEME_UNACTIV'])) echo $_tmpb_list['THEME_UNACTIV']; ?> onchange="document.location = 'admin_themes.php?activ=0&amp;id=<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>'" /> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?>
						</td>
						<td class="row2" style="text-align:center;">	
							<select name="<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>secure" onchange="document.location = 'admin_themes.php?secure=' + this.options[this.selectedIndex].value + '&amp;id=<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>'"> 
								<?php if (isset($_tmpb_list['OPTIONS'])) echo $_tmpb_list['OPTIONS']; ?>
							</select>
						</td>
						<td class="row2" style="text-align:center;">
							<a href="admin_themes.php?edit=1&amp;id=<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" /></a>
						</td>
						<td class="row2" style="text-align:center;">
							<input type="submit" name="<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>" value="<?php if (isset($this->_var['L_UNINSTALL'])) echo $this->_var['L_UNINSTALL']; ?>" class="submit" />
						</td>
						<?php }echo ' ';if (isset($_tmpb_list['C_THEME_DEFAULT']) && $_tmpb_list['C_THEME_DEFAULT']) { ?>
						<td class="row2" style="text-align:center;">	
							<?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?>
						</td>
						<td class="row2" style="text-align:center;">	
							<?php if (isset($this->_var['L_GUEST'])) echo $this->_var['L_GUEST']; ?>
						</td>
						<td class="row2" style="text-align:center;">
							<a href="admin_themes.php?edit=1&amp;id=<?php if (isset($_tmpb_list['IDTHEME'])) echo $_tmpb_list['IDTHEME']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" /></a>
						</td>
						<td class="row2" style="text-align:center;">
							-
						</td>
						<?php } ?>
					</tr>
					<?php } ?>	
					<tr> 
						<th colspan="7">
							<input type="submit" name="valid" id="submit_theme" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
							<script type="text/javascript">
							<!--				
							document.getElementById('submit_theme').style.display = 'none';
							-->
							</script>
							&nbsp;
						</th>
					</tr>	
				</table>
			</form>
			<?php }echo ' ';if (isset($this->_var['C_DEL_THEME']) && $this->_var['C_DEL_THEME']) { ?>
			<form action="admin_themes.php?uninstall=1&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_DEL_THEME'])) echo $this->_var['L_DEL_THEME']; ?></legend>
					<dl>
						<dt><label for="drop_files"><?php if (isset($this->_var['L_DEL_FILE'])) echo $this->_var['L_DEL_FILE']; ?></label></dt>
						<dd><label><input type="radio" name="drop_files" value="1" /> <?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?></label>
						<label><input type="radio" name="drop_files" id="drop_files" value="0" checked="checked" /> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?></label></dd>
					</dl>
				</fieldset>			
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?></legend>
					<input type="submit" name="valid_del" value="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" class="submit" />	
					<input type="hidden" name="idtheme" value="<?php if (isset($this->_var['IDTHEME'])) echo $this->_var['IDTHEME']; ?>" />					
				</fieldset>	
			</form>
			<?php }echo ' ';if (isset($this->_var['C_EDIT_THEME']) && $this->_var['C_EDIT_THEME']) { ?>			
			<form action="admin_themes.php?edit=1&amp;id=<?php if (isset($this->_var['IDTHEME'])) echo $this->_var['IDTHEME']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" class="fieldset_content">	
				<fieldset> 
				<legend><?php if (isset($this->_var['L_THEME_MANAGEMENT'])) echo $this->_var['L_THEME_MANAGEMENT']; ?></legend>
					<p><?php if (isset($this->_var['L_THEME'])) echo $this->_var['L_THEME']; ?> <strong><?php if (isset($this->_var['THEME_NAME'])) echo $this->_var['THEME_NAME']; ?></strong></p>
					<dl>
						<dt><label for="left_column"><?php if (isset($this->_var['L_LEFT_COLUMN'])) echo $this->_var['L_LEFT_COLUMN']; ?></label></dt>
						<dd><label><input type="checkbox" <?php if (isset($this->_var['LEFT_COLUMN_ENABLED'])) echo $this->_var['LEFT_COLUMN_ENABLED']; ?> name="left_column" id="left_column" value="1" /></label></dd>
					</dl>
					<dl>
						<dt><label for="right_column"><?php if (isset($this->_var['L_RIGHT_COLUMN'])) echo $this->_var['L_RIGHT_COLUMN']; ?></label></dt>
						<dd><label><input type="checkbox" <?php if (isset($this->_var['RIGHT_COLUMN_ENABLED'])) echo $this->_var['RIGHT_COLUMN_ENABLED']; ?> name="right_column" id="right_column" value="1" /></label></dd>
					</dl>
				</fieldset>
				<fieldset class="fieldset_submit" style="margin-bottom:0px">
					<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
					<input type="submit" name="valid_edit" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
					&nbsp;&nbsp; 
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
				</fieldset>
			</form>			
			<?php } ?>
			
		</div>
