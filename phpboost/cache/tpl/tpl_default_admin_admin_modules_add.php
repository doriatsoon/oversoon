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
			
			<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
			<div class="error_handler_position">
				<span id="errorh"></span>
				<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
					<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
					<br />	
				</div>
			</div>
			<?php } ?>
			
			<form action="admin_modules_add.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" enctype="multipart/form-data" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_UPLOAD_MODULE'])) echo $this->_var['L_UPLOAD_MODULE']; ?></legend>
					<dl>
						<dt><label for="upload_module"><?php if (isset($this->_var['L_EXPLAIN_ARCHIVE_UPLOAD'])) echo $this->_var['L_EXPLAIN_ARCHIVE_UPLOAD']; ?></label></dt>
						<dd><label><input type="file" name="upload_module" id="upload_module" size="30" class="file" />
						<input type="hidden" name="max_file_size" value="2000000" /></label></dd>
					</dl>
				</fieldset>			
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_UPLOAD'])) echo $this->_var['L_UPLOAD']; ?></legend>
					<input type="submit" value="<?php if (isset($this->_var['L_UPLOAD'])) echo $this->_var['L_UPLOAD']; ?>" class="submit" />				
				</fieldset>	
			</form>
			
			<form action="admin_modules_add.php?install=1" method="post">
				<table class="module_table">
					<tr> 
						<th colspan="4">
							<?php if (isset($this->_var['L_MODULES_AVAILABLE'])) echo $this->_var['L_MODULES_AVAILABLE']; ?>
						</th>
					</tr>
					<?php if (isset($this->_var['C_MODULES_AVAILABLE']) && $this->_var['C_MODULES_AVAILABLE']) { ?>
					<tr>
						<td class="row2" style="width:160px;text-align:center;">
							<?php if (isset($this->_var['L_NAME'])) echo $this->_var['L_NAME']; ?>
						</td>
						<td class="row2" style="text-align:center;">
							<?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?>
						</td>
						<td class="row2" style="width:100px;text-align:center;">
							<?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?>
						</td>
						<td class="row2" style="width:100px;text-align:center;">
							<?php if (isset($this->_var['L_INSTALL'])) echo $this->_var['L_INSTALL']; ?>
						</td>
					</tr>
					<?php }echo ' ';if (isset($this->_var['C_NO_MODULE']) && $this->_var['C_NO_MODULE']) { ?>
					<tr>
						<td class="row2" colspan="4" style="text-align:center;">
							<strong><?php if (isset($this->_var['L_NO_MODULES_AVAILABLE'])) echo $this->_var['L_NO_MODULES_AVAILABLE']; ?></strong>
						</td>
					</tr>
					<?php }echo ' ';if (!isset($this->_block['available']) || !is_array($this->_block['available'])) $this->_block['available'] = array();
foreach ($this->_block['available'] as $available_key => $available_value) {
$_tmpb_available = &$this->_block['available'][$available_key]; ?>
					<tr> 	
						<td class="row2">					
							<img class="valign_middle" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/<?php if (isset($_tmpb_available['ICON'])) echo $_tmpb_available['ICON']; ?>/<?php if (isset($_tmpb_available['ICON'])) echo $_tmpb_available['ICON']; ?>.png" alt="" /> <strong><?php if (isset($_tmpb_available['NAME'])) echo $_tmpb_available['NAME']; ?></strong> <em>(<?php if (isset($_tmpb_available['VERSION'])) echo $_tmpb_available['VERSION']; ?>)</em>
						</td>
						<td class="row2">	
							<strong><?php if (isset($this->_var['L_AUTHOR'])) echo $this->_var['L_AUTHOR']; ?>:</strong> <?php if (isset($_tmpb_available['AUTHOR'])) echo $_tmpb_available['AUTHOR'];echo ' ';if (isset($_tmpb_available['AUTHOR_WEBSITE'])) echo $_tmpb_available['AUTHOR_WEBSITE']; ?><br />
							<strong><?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?>:</strong> <?php if (isset($_tmpb_available['DESC'])) echo $_tmpb_available['DESC']; ?><br />
							<strong><?php if (isset($this->_var['L_COMPAT'])) echo $this->_var['L_COMPAT']; ?>:</strong> PHPBoost <?php if (isset($_tmpb_available['COMPAT'])) echo $_tmpb_available['COMPAT']; ?><br />
							<strong><?php if (isset($this->_var['L_USE_SQL'])) echo $this->_var['L_USE_SQL']; ?>:</strong> <?php if (isset($_tmpb_available['USE_SQL'])) echo $_tmpb_available['USE_SQL']; ?> <em><?php if (isset($_tmpb_available['SQL_TABLE'])) echo $_tmpb_available['SQL_TABLE']; ?></em><br />
							<strong><?php if (isset($this->_var['L_USE_CACHE'])) echo $this->_var['L_USE_CACHE']; ?>:</strong> <?php if (isset($_tmpb_available['USE_CACHE'])) echo $_tmpb_available['USE_CACHE']; ?><br />
							<strong><?php if (isset($this->_var['L_ALTERNATIVE_CSS'])) echo $this->_var['L_ALTERNATIVE_CSS']; ?>:</strong> <?php if (isset($_tmpb_available['ALTERNATIVE_CSS'])) echo $_tmpb_available['ALTERNATIVE_CSS']; ?><br />
						</td>
						<td class="row2">	
							<input type="radio" name="<?php if (isset($_tmpb_available['ID'])) echo $_tmpb_available['ID']; ?>activ" value="1" checked="checked" /> <?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?>
							<input type="radio" name="<?php if (isset($_tmpb_available['ID'])) echo $_tmpb_available['ID']; ?>activ" value="0" /> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?>
						</td>
						<td class="row2">	
							<input type="submit" name="module_<?php if (isset($_tmpb_available['ID'])) echo $_tmpb_available['ID']; ?>" value="<?php if (isset($this->_var['L_INSTALL'])) echo $this->_var['L_INSTALL']; ?>" class="submit" />
						</td>
					</tr>						
					<?php } ?>
				</table>			
			</form>
		</div>
		