		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_MODULES_MANAGEMENT'])) echo $this->_var['L_MODULES_MANAGEMENT']; ?></li>
				<li>
					<a href="admin_modules.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules.png" alt="" /></a>
					<br />
					<a href="admin_modules.php" class="quick_link"><?php if (isset($this->_var['L_MODULES_MANAGEMENT'])) echo $this->_var['L_MODULES_MANAGEMENT']; ?></a>
				</li>
				<li>
					<a href="admin_modules_add.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules.png" alt="" /></a>
					<br />
					<a href="admin_modules_add.php" class="quick_link"><?php if (isset($this->_var['L_ADD_MODULES'])) echo $this->_var['L_ADD_MODULES']; ?></a>
				</li>
				<li>
					<a href="admin_modules_update.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules.png" alt="" /></a>
					<br />
					<a href="admin_modules_update.php" class="quick_link"><?php if (isset($this->_var['L_UPDATE_MODULES'])) echo $this->_var['L_UPDATE_MODULES']; ?></a>
				</li>
			</ul>
		</div>
		
		<div id="admin_contents">
			<?php if (isset($this->_var['C_MODULES_LIST']) && $this->_var['C_MODULES_LIST']) { ?>	
				<form action="admin_modules.php?uninstall=1" method="post">
					<table class="module_table" style="width:99%;margin-bottom:30px;">
						<tr> 
							<th colspan="5">
								<?php if (isset($this->_var['L_MODULES_INSTALLED'])) echo $this->_var['L_MODULES_INSTALLED']; ?>
							</th>
						</tr>
						<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
						<tr> 
							<td class="row2" colspan="5" style="text-align:center;">
								<span id="errorh"></span>
								<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
									<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
									<br />	
								</div>
								<br />		
							</td>
						</tr>
						<?php }echo ' ';if (isset($this->_var['C_MODULES_INSTALLED']) && $this->_var['C_MODULES_INSTALLED']) { ?>
						<tr>
							<td class="row2" style="width:100px;text-align:center;">
								<?php if (isset($this->_var['L_NAME'])) echo $this->_var['L_NAME']; ?>
							</td>
							<td class="row2" style="text-align:center;">
								<?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?>
							</td>
							<td class="row2" style="width:50px;text-align:center;">
								<?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?>
							</td>
							<td class="row2" style="width:200px;text-align:center;">
								<?php if (isset($this->_var['L_AUTH_ACCESS'])) echo $this->_var['L_AUTH_ACCESS']; ?>
							</td>
							<td class="row2" style="width:80px;text-align:center;">
								<?php if (isset($this->_var['L_UNINSTALL'])) echo $this->_var['L_UNINSTALL']; ?>
							</td>
						</tr>
						<?php }echo ' ';if (isset($this->_var['C_NO_MODULE_INSTALLED']) && $this->_var['C_NO_MODULE_INSTALLED']) { ?>
						<tr>
							<td class="row2" colspan="4" style="text-align:center;">
								<strong><?php if (isset($this->_var['L_NO_MODULES_INSTALLED'])) echo $this->_var['L_NO_MODULES_INSTALLED']; ?></strong>
							</td>
						</tr>
						<?php }echo ' ';if (!isset($this->_block['installed']) || !is_array($this->_block['installed'])) $this->_block['installed'] = array();
foreach ($this->_block['installed'] as $installed_key => $installed_value) {
$_tmpb_installed = &$this->_block['installed'][$installed_key]; ?>
						<tr> 	
							<td class="row2" style="text-align:center;">					
								<span id="m<?php if (isset($_tmpb_installed['ID'])) echo $_tmpb_installed['ID']; ?>"></span>
								<img class="valign_middle" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/<?php if (isset($_tmpb_installed['ICON'])) echo $_tmpb_installed['ICON']; ?>/<?php if (isset($_tmpb_installed['ICON'])) echo $_tmpb_installed['ICON']; ?>.png" alt="" /><br />
								<strong><?php if (isset($_tmpb_installed['NAME'])) echo $_tmpb_installed['NAME']; ?></strong> <em>(<?php if (isset($_tmpb_installed['VERSION'])) echo $_tmpb_installed['VERSION']; ?>)</em>
							</td>
							<td class="row2">	
								<strong><?php if (isset($this->_var['L_AUTHOR'])) echo $this->_var['L_AUTHOR']; ?>:</strong> <?php if (isset($_tmpb_installed['AUTHOR'])) echo $_tmpb_installed['AUTHOR'];echo ' ';if (isset($_tmpb_installed['AUTHOR_WEBSITE'])) echo $_tmpb_installed['AUTHOR_WEBSITE']; ?><br />
								<strong><?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?>:</strong> <?php if (isset($_tmpb_installed['DESC'])) echo $_tmpb_installed['DESC']; ?><br />
								<strong><?php if (isset($this->_var['L_COMPAT'])) echo $this->_var['L_COMPAT']; ?>:</strong> PHPBoost <?php if (isset($_tmpb_installed['COMPAT'])) echo $_tmpb_installed['COMPAT']; ?>
								<br /><br />
								<strong><?php if (isset($this->_var['L_ADMIN'])) echo $this->_var['L_ADMIN']; ?>:</strong> <?php if (isset($_tmpb_installed['ADMIN'])) echo $_tmpb_installed['ADMIN']; ?><br />
								<strong><?php if (isset($this->_var['L_USE_SQL'])) echo $this->_var['L_USE_SQL']; ?>:</strong> <?php if (isset($_tmpb_installed['USE_SQL'])) echo $_tmpb_installed['USE_SQL']; ?> <em><?php if (isset($_tmpb_installed['SQL_TABLE'])) echo $_tmpb_installed['SQL_TABLE']; ?></em><br />
								<strong><?php if (isset($this->_var['L_USE_CACHE'])) echo $this->_var['L_USE_CACHE']; ?>:</strong> <?php if (isset($_tmpb_installed['USE_CACHE'])) echo $_tmpb_installed['USE_CACHE']; ?><br />
								<strong><?php if (isset($this->_var['L_ALTERNATIVE_CSS'])) echo $this->_var['L_ALTERNATIVE_CSS']; ?>:</strong> <?php if (isset($_tmpb_installed['ALTERNATIVE_CSS'])) echo $_tmpb_installed['ALTERNATIVE_CSS']; ?><br />
							</td>
							<td class="row2">								
								<label><input type="radio" name="activ<?php if (isset($_tmpb_installed['ID'])) echo $_tmpb_installed['ID']; ?>" value="1" <?php if (isset($_tmpb_installed['ACTIV_ENABLED'])) echo $_tmpb_installed['ACTIV_ENABLED']; ?> /> <?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?></label>
								<label><input type="radio" name="activ<?php if (isset($_tmpb_installed['ID'])) echo $_tmpb_installed['ID']; ?>" value="0" <?php if (isset($_tmpb_installed['ACTIV_DISABLED'])) echo $_tmpb_installed['ACTIV_DISABLED']; ?> /> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?></label>
							</td>
							<td class="row2">							
								<?php if (isset($_tmpb_installed['AUTH_MODULES'])) echo $_tmpb_installed['AUTH_MODULES']; ?>			
							</td>
							<td class="row2">	
								<input type="submit" name="<?php if (isset($_tmpb_installed['ID'])) echo $_tmpb_installed['ID']; ?>" value="<?php if (isset($this->_var['L_UNINSTALL'])) echo $this->_var['L_UNINSTALL']; ?>" class="submit" />
							</td>
						</tr>					
						<?php } ?>
					</table>
					
					<fieldset class="fieldset_submit">
						<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
						<input type="submit" name="valid" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
						&nbsp;&nbsp; 
						<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
					</fieldset>
				</form>
			<?php }echo ' ';if (isset($this->_var['C_MODULES_DEL']) && $this->_var['C_MODULES_DEL']) { ?>				
				<form action="admin_modules.php?uninstall=1" method="post" class="fieldset_content">
					<fieldset>
						<legend><?php if (isset($this->_var['L_DEL_MODULE'])) echo $this->_var['L_DEL_MODULE']; ?></legend>
						<div class="error_warning" style="width:500px;margin:auto;">
							<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/important.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_DEL_DATA'])) echo $this->_var['L_DEL_DATA']; ?>
						</div>
						<br />
						<dl>
							<dt><label for="drop_files"><?php if (isset($this->_var['L_DEL_FILE'])) echo $this->_var['L_DEL_FILE']; ?></label></dt>
							<dd><label><input type="radio" name="drop_files" value="1" /> <?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?></label>
							<label><input type="radio" name="drop_files" id="drop_files" value="0" checked="checked" /> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?></label></dd>
						</dl>
					</fieldset>		
					<fieldset class="fieldset_submit">
						<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
						<input type="hidden" name="idmodule" value="<?php if (isset($this->_var['IDMODULE'])) echo $this->_var['IDMODULE']; ?>" />
						<input type="submit" name="valid_del" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
					</fieldset>
				</form>
			<?php } ?>
		</div>
		