		<script type="text/javascript">
		<!--
			var theme = '<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>';
		-->
		</script>
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/calendar.js"></script>
		
		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_MAINTAIN'])) echo $this->_var['L_MAINTAIN']; ?></li>
				<li>
					<a href="admin_maintain.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/maintain.png" alt="" /></a>
					<br />
					<a href="admin_maintain.php" class="quick_link"><?php if (isset($this->_var['L_MAINTAIN'])) echo $this->_var['L_MAINTAIN']; ?></a>
				</li>
			</ul>
		</div>

		<div id="admin_contents">
			<form action="admin_maintain.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_SET_MAINTAIN'])) echo $this->_var['L_SET_MAINTAIN']; ?></legend>
					<dl class="overflow_visible">
						<dt><label for="maintain"><?php if (isset($this->_var['L_SET_MAINTAIN'])) echo $this->_var['L_SET_MAINTAIN']; ?></label></dt>
						<dd>
							<label>
								<input type="radio" name="maintain_check" value="0"<?php if (isset($this->_var['MAINTAIN_CHECK_NO'])) echo $this->_var['MAINTAIN_CHECK_NO']; ?>> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?>
							</label>
							<br />	
							<label for="maintain" onclick="document.getElementById('maintain_check1').checked = 'checked';">
								<input type="radio" name="maintain_check" id="maintain_check1" value="1"<?php if (isset($this->_var['MAINTAIN_CHECK_DELAY'])) echo $this->_var['MAINTAIN_CHECK_DELAY']; ?>>
								<?php if (isset($this->_var['L_DURING'])) echo $this->_var['L_DURING']; ?>
								<select name="maintain" id="maintain">				
									<?php if (isset($this->_var['DELAY_MAINTAIN_OPTION'])) echo $this->_var['DELAY_MAINTAIN_OPTION']; ?>				
								</select>
							</label>
							<br />							
							<label>
								<input type="radio" name="maintain_check" id="maintain_check2" value="2"<?php if (isset($this->_var['MAINTAIN_CHECK_UNTIL'])) echo $this->_var['MAINTAIN_CHECK_UNTIL']; ?>>
								<?php if (isset($this->_var['L_UNTIL'])) echo $this->_var['L_UNTIL']; ?>&nbsp;
								
								<input type="text" size="8" maxlength="8" id="end" name="end" value="<?php if (isset($this->_var['DATE_UNTIL'])) echo $this->_var['DATE_UNTIL']; ?>" class="text" />
								<div style="position:relative;z-index:100;top:6px;margin-left:155px;float:left;display:none;" id="calendar2">
									<div id="end_date" class="calendar_block" onmouseover="hide_calendar(2, 1);" onmouseout="hide_calendar(2, 0);"></div>
								</div>
								<a onclick="document.getElementById('maintain_check2').checked = 'checked';xmlhttprequest_calendar('end_date', '?input_field=end&amp;field=end_date');display_calendar(2, 'end_date');" onmouseover="hide_calendar(2, 1);" onmouseout="hide_calendar(2, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgend_date" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
							</label>
						</dd>
					</dl>
					<dl>
						<dt><label for="display_delay"><?php if (isset($this->_var['L_MAINTAIN_DELAY'])) echo $this->_var['L_MAINTAIN_DELAY']; ?></label></dt>
						<dd><label><input type="radio" <?php if (isset($this->_var['DISPLAY_DELAY_ENABLED'])) echo $this->_var['DISPLAY_DELAY_ENABLED']; ?> name="display_delay" id="display_delay" value="1" /> <?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?></label>
						&nbsp;&nbsp; 
						<label><input type="radio" <?php if (isset($this->_var['DISPLAY_DELAY_DISABLED'])) echo $this->_var['DISPLAY_DELAY_DISABLED']; ?> name="display_delay" value="0" /> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?></label></dd>
					</dl>
					<dl>
						<dt><label for="maintain_display_admin"><?php if (isset($this->_var['L_MAINTAIN_DISPLAY_ADMIN'])) echo $this->_var['L_MAINTAIN_DISPLAY_ADMIN']; ?></label></dt>
						<dd><label><input type="radio" <?php if (isset($this->_var['DISPLAY_ADMIN_ENABLED'])) echo $this->_var['DISPLAY_ADMIN_ENABLED']; ?> name="maintain_display_admin" id="maintain_display_admin" value="1" /> <?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?></label>
						&nbsp;&nbsp; 
						<label><input type="radio" <?php if (isset($this->_var['DISPLAY_ADMIN_DISABLED'])) echo $this->_var['DISPLAY_ADMIN_DISABLED']; ?> name="maintain_display_admin" value="0" /> <?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?></label></dd>
					</dl>
					<label for="contents"><?php if (isset($this->_var['L_MAINTAIN_TEXT'])) echo $this->_var['L_MAINTAIN_TEXT']; ?></label>
					<label>
						<?php if (isset($this->_var['KERNEL_EDITOR'])) echo $this->_var['KERNEL_EDITOR']; ?>	
						<textarea rows="14" cols="20" name="contents" id="contents"><?php if (isset($this->_var['MAINTAIN_CONTENTS'])) echo $this->_var['MAINTAIN_CONTENTS']; ?></textarea>
					</label>
				</fieldset>			
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
					<input type="submit" name="valid" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
					<script type="text/javascript">
					<!--				
					document.write('&nbsp;&nbsp;<input value="<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>" onclick="XMLHttpRequest_preview();" type="button" class="submit" />');
					-->
					</script>
					&nbsp;&nbsp;
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />		
				</fieldset>	
			</form>	
		</div>
		