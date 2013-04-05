		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_CONTENT_CONFIG'])) echo $this->_var['L_CONTENT_CONFIG']; ?></li>
				<li>
					<a href="admin_content_config.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/content.png" alt="" /></a>
					<br />
					<a href="admin_content_config.php" class="quick_link"><?php if (isset($this->_var['L_CONTENT_CONFIG'])) echo $this->_var['L_CONTENT_CONFIG']; ?></a>
				</li>
			</ul>
		</div>
		
		<script type="text/javascript">
		<!--
			function check_select_multiple(id, status)
			{
				var i;
				
				for(i = 0; i < <?php if (isset($this->_var['NBR_TAGS'])) echo $this->_var['NBR_TAGS']; ?>; i++)
				{	
					if( document.getElementById(id + i) )
						document.getElementById(id + i).selected = status;			
				}
			}	
		-->
		</script>
		
		<div id="admin_contents">
			<form action="admin_content_config.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_LANGUAGE_CONFIG'])) echo $this->_var['L_LANGUAGE_CONFIG']; ?></legend>
					<dl> 
						<dt><label for="formatting_language"><?php if (isset($this->_var['L_DEFAULT_LANGUAGE'])) echo $this->_var['L_DEFAULT_LANGUAGE']; ?></label></dt>
						<dd>
							<select name="formatting_language" id="formatting_language">
								<option value="bbcode" <?php if (isset($this->_var['BBCODE_SELECTED'])) echo $this->_var['BBCODE_SELECTED']; ?>>BBCode</option>
								<option value="tinymce" <?php if (isset($this->_var['TINYMCE_SELECTED'])) echo $this->_var['TINYMCE_SELECTED']; ?>>TinyMCE</option>
							</select>
						</dd>
					</dl>
					<dl> 
						<dt><label for="forbidden_tags"><?php if (isset($this->_var['L_FORBIDDEN_TAGS'])) echo $this->_var['L_FORBIDDEN_TAGS']; ?></label></dt>
						<dd>
								<select id="forbidden_tags" name="forbidden_tags[]" size="10" multiple="multiple">
								<?php if (!isset($this->_block['tag']) || !is_array($this->_block['tag'])) $this->_block['tag'] = array();
foreach ($this->_block['tag'] as $tag_key => $tag_value) {
$_tmpb_tag = &$this->_block['tag'][$tag_key];echo ' ';if (isset($_tmpb_tag['C_ENABLED']) && $_tmpb_tag['C_ENABLED']) { ?>
									<option id="tag<?php if (isset($_tmpb_tag['IDENTIFIER'])) echo $_tmpb_tag['IDENTIFIER']; ?>" selected="selected" value="<?php if (isset($_tmpb_tag['CODE'])) echo $_tmpb_tag['CODE']; ?>"><?php if (isset($_tmpb_tag['TAG_NAME'])) echo $_tmpb_tag['TAG_NAME']; ?></option>
									<?php } else { ?>
									<option id="tag<?php if (isset($_tmpb_tag['IDENTIFIER'])) echo $_tmpb_tag['IDENTIFIER']; ?>" value="<?php if (isset($_tmpb_tag['CODE'])) echo $_tmpb_tag['CODE']; ?>"><?php if (isset($_tmpb_tag['TAG_NAME'])) echo $_tmpb_tag['TAG_NAME']; ?></option>
									<?php }echo ' ';} ?>
								</select>
								<br />
								<span class="text_small">(<?php if (isset($this->_var['L_EXPLAIN_SELECT_MULTIPLE'])) echo $this->_var['L_EXPLAIN_SELECT_MULTIPLE']; ?>)</span>
								<br />
								<a class="small_link" href="javascript:check_select_multiple('tag', true);"><?php if (isset($this->_var['L_SELECT_ALL'])) echo $this->_var['L_SELECT_ALL']; ?></a>/<a class="small_link" href="javascript:check_select_multiple('tag', false);"><?php if (isset($this->_var['L_SELECT_NONE'])) echo $this->_var['L_SELECT_NONE']; ?></a>
						</dd>
					</dl>
				</fieldset>
				
				<fieldset>
					<legend><?php if (isset($this->_var['L_HTML_LANGUAGE'])) echo $this->_var['L_HTML_LANGUAGE']; ?></legend>
					<dl> 
						<dt><label for="groups_auth1"><?php if (isset($this->_var['L_AUTH_USE_HTML'])) echo $this->_var['L_AUTH_USE_HTML']; ?></label></dt>
						<dd>
							<?php if (isset($this->_var['SELECT_AUTH_USE_HTML'])) echo $this->_var['SELECT_AUTH_USE_HTML']; ?>
						</dd>
					</dl>
				</fieldset>
				
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
					<input type="submit" name="submit" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />					
				</fieldset>	
			</form>
		</div>
		
