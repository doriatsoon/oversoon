		<script type="text/javascript">
		<!--
		function check_form(){
			if(document.getElementById('name').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_PSEUDO'])) echo $this->_var['L_REQUIRE_PSEUDO']; ?>");
				return false;
		    }
			if(document.getElementById('mail').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_MAIL'])) echo $this->_var['L_REQUIRE_MAIL']; ?>");
				return false;
		    }
			if(document.getElementById('level').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_RANK'])) echo $this->_var['L_REQUIRE_RANK']; ?>");
				return false;
		    }
			return true;
		}
		-->
		</script>

		<script type="text/javascript">
		<!--
		function Confirm() {
		return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_USER'])) echo $this->_var['L_CONFIRM_DEL_USER']; ?>");
		}
		-->
		</script>
	
		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_USERS_MANAGEMENT'])) echo $this->_var['L_USERS_MANAGEMENT']; ?></li>
				<li>
					<a href="admin_members.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members.png" alt="" /></a>
					<br />
					<a href="admin_members.php" class="quick_link"><?php if (isset($this->_var['L_USERS_MANAGEMENT'])) echo $this->_var['L_USERS_MANAGEMENT']; ?></a>
				</li>
				<li>
					<a href="admin_members.php?add=1"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members.png" alt="" /></a>
					<br />
					<a href="admin_members.php?add=1" class="quick_link"><?php if (isset($this->_var['L_USERS_ADD'])) echo $this->_var['L_USERS_ADD']; ?></a>
				</li>
				<li>
					<a href="admin_members_config.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members.png" alt="" /></a>
					<br />
					<a href="admin_members_config.php" class="quick_link"><?php if (isset($this->_var['L_USERS_CONFIG'])) echo $this->_var['L_USERS_CONFIG']; ?></a>
				</li>
				<li>
					<a href="admin_members_punishment.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members.png" alt="" /></a>
					<br />
					<a href="admin_members_punishment.php" class="quick_link"><?php if (isset($this->_var['L_USERS_PUNISHMENT'])) echo $this->_var['L_USERS_PUNISHMENT']; ?></a>
				</li>
			</ul>
		</div>

		<div id="admin_contents">
	
			<?php if (isset($this->_var['C_USERS_ADD']) && $this->_var['C_USERS_ADD']) {echo ' ';if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
			<div class="error_handler_position">
				<span id="errorh"></span>
				<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
					<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
					<br />
				</div>
			</div>
			<?php } ?>
			<form action="admin_members.php?add=1&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" onsubmit="return check_form();" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_USERS_ADD'])) echo $this->_var['L_USERS_ADD']; ?></legend>
					<dl>
						<dt><label for="login2">* <?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?></label></dt>
						<dd><label><input type="text" maxlength="25" size="20" id="login2" name="login2" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="password2">* <?php if (isset($this->_var['L_PASSWORD'])) echo $this->_var['L_PASSWORD']; ?></label></dt>
						<dd><label><input type="password" maxlength="30" size="20" id="password2" name="password2" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="password2_bis">* <?php if (isset($this->_var['L_PASSWORD_CONFIRM'])) echo $this->_var['L_PASSWORD_CONFIRM']; ?></label></dt>
						<dd><label><input type="password" maxlength="30" size="20" id="password2_bis" name="password2_bis" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="mail2">* <?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?></label></dt>
						<dd><label><input type="text" maxlength="50" size="30" id="mail2" name="mail2" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="level2">* <?php if (isset($this->_var['L_RANK'])) echo $this->_var['L_RANK']; ?></label></dt>
						<dd><label>
							<select id="level2" name="level2">
								<option value="0" selected="selected"><?php if (isset($this->_var['L_USER'])) echo $this->_var['L_USER']; ?></option>
								<option value="1"><?php if (isset($this->_var['L_MODO'])) echo $this->_var['L_MODO']; ?></option>
								<option value="2"><?php if (isset($this->_var['L_ADMIN'])) echo $this->_var['L_ADMIN']; ?></option>
							</select>
						</label></dd>
					</dl>
				</fieldset>
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></legend>
					<input type="submit" name="add" value="<?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?>" class="submit" />
					&nbsp;&nbsp; 
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />				
				</fieldset>	
			</form>
			
			<?php }echo ' ';if (isset($this->_var['C_USERS_MANAGEMENT']) && $this->_var['C_USERS_MANAGEMENT']) { ?>
			<script type="text/javascript">
			<!--
			function check_select_multiple(id, status)
			{
				for(var i = 0; i < <?php if (isset($this->_var['NBR_GROUP'])) echo $this->_var['NBR_GROUP']; ?>; i++)
				{	
					if( document.getElementById(id + i) )
						document.getElementById(id + i).selected = status;			
				}
			}	 
			function img_change_sex(url)
			{
				if( document.getElementById('img_sex') )
				{
					var img_sex = '';
					if( url == 1 )
						img_sex = 'man.png';
					else if( url == 2 )
						img_sex = 'woman.png';
					document.getElementById('img_sex').innerHTML = (img_sex != '') ? '<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/' + img_sex + '" alt="" />' : '';
				}
			}
			function change_img_theme(id, value)
			{
				if(document.images )
					document.images[id].src = "<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/" + value + "/theme/images/theme.jpg";
			}
		
			var array_identifier = new Array();
			<?php if (isset($this->_var['JS_LANG_IDENTIFIER'])) echo $this->_var['JS_LANG_IDENTIFIER']; ?>
			function change_img_lang(id, lang)
			{
				if( array_identifier[lang] && document.getElementById(id) ) 
					document.getElementById(id).src = '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/images/stats/countries/' + array_identifier[lang] + '.png';
			}
			-->
			</script>
			<script type="text/javascript">
			<!--
				var theme = '<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>';
			-->
			</script>
			<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/calendar.js"></script>
				
			<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
			<div class="error_handler_position">
				<span id="errorh"></span>
				<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
					<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
					<br />	
				</div>
			</div>
			<?php } ?>
			
			<form action="admin_members.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" enctype="multipart/form-data" method="post" onsubmit="return check_form();" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_USERS_MANAGEMENT'])) echo $this->_var['L_USERS_MANAGEMENT']; ?></legend>
					<dl>
						<dt><label for="name">* <?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?></label></dt>
						<dd><label><input type="text" maxlength="25" size="25" id="name" name="name" value="<?php if (isset($this->_var['NAME'])) echo $this->_var['NAME']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="pass">* <?php if (isset($this->_var['L_PASSWORD'])) echo $this->_var['L_PASSWORD']; ?></label></dt>
						<dd><label><input type="password" maxlength="30" size="30" name="pass" id="pass" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="confirm_pass">* <?php if (isset($this->_var['L_CONFIRM_PASSWORD'])) echo $this->_var['L_CONFIRM_PASSWORD']; ?></label><br /><span><?php if (isset($this->_var['L_CONFIRM_PASSWORD_EXPLAIN'])) echo $this->_var['L_CONFIRM_PASSWORD_EXPLAIN']; ?></span></dt>
						<dd><label><input type="password" maxlength="30" size="30" name="confirm_pass" id="confirm_pass" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="mail">* <?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?></label></dt>
						<dd><label><input type="text" maxlength="50" size="50" id="mail" name="mail" value="<?php if (isset($this->_var['MAIL'])) echo $this->_var['MAIL']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="user_aprob"><?php if (isset($this->_var['L_APROB'])) echo $this->_var['L_APROB']; ?></label></dt>
						<dd><label>
							<select id="user_aprob" name="user_aprob">					
								<option value="0" <?php if (isset($this->_var['SELECT_UNAPROB'])) echo $this->_var['SELECT_UNAPROB']; ?>><?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?></option>
								<option value="1" <?php if (isset($this->_var['SELECT_APROB'])) echo $this->_var['SELECT_APROB']; ?>><?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?></option>
							</select>
						</label></dd>
					</dl>	
					<dl>
						<dt><label for="level"><?php if (isset($this->_var['L_RANK'])) echo $this->_var['L_RANK']; ?></label></dt>
						<dd><label>
							<select id="level" name="level">					
								<?php if (isset($this->_var['RANKS_OPTIONS'])) echo $this->_var['RANKS_OPTIONS']; ?>				
							</select>
						</label></dd>
					</dl>	
					<dl>
						<dt><label for="user_group"><?php if (isset($this->_var['L_GROUP'])) echo $this->_var['L_GROUP']; ?></label></dt>
						<dd><label>
							<select id="user_group" name="user_groups[]" size="6" multiple="multiple">
								<?php if (isset($this->_var['GROUPS_OPTIONS'])) echo $this->_var['GROUPS_OPTIONS']; ?>
							</select>
							<br />
							<a class="small_link" href="javascript:check_select_multiple('g', true);"><?php if (isset($this->_var['L_SELECT_ALL'])) echo $this->_var['L_SELECT_ALL']; ?></a>/<a class="small_link" href="javascript:check_select_multiple('g', false);"><?php if (isset($this->_var['L_SELECT_NONE'])) echo $this->_var['L_SELECT_NONE']; ?></a>
						</label></dd>
					</dl>	
					<dl>
						<dt><label for="user_lang"><?php if (isset($this->_var['L_LANG_CHOOSE'])) echo $this->_var['L_LANG_CHOOSE']; ?></label></dt>
						<dd><label>
							<select name="user_lang" id="user_lang" onchange="change_img_lang('img_lang', this.options[selectedIndex].value)">	
								<?php if (!isset($this->_block['select_lang']) || !is_array($this->_block['select_lang'])) $this->_block['select_lang'] = array();
foreach ($this->_block['select_lang'] as $select_lang_key => $select_lang_value) {
$_tmpb_select_lang = &$this->_block['select_lang'][$select_lang_key]; ?>
									<option value="<?php if (isset($_tmpb_select_lang['IDNAME'])) echo $_tmpb_select_lang['IDNAME']; ?>"<?php if (isset($_tmpb_select_lang['SELECTED'])) echo $_tmpb_select_lang['SELECTED']; ?>><?php if (isset($_tmpb_select_lang['NAME'])) echo $_tmpb_select_lang['NAME']; ?></option>
								<?php } ?>			
							</select> &nbsp;<img id="img_lang" src="<?php if (isset($this->_var['IMG_LANG_IDENTIFIER'])) echo $this->_var['IMG_LANG_IDENTIFIER']; ?>" alt="" class="valign_middle" />
						</label></dd>
					</dl>	
				</fieldset>
				
				<fieldset>
				<legend><?php if (isset($this->_var['L_OPTIONS'])) echo $this->_var['L_OPTIONS']; ?></legend>
					<dl>
						<dt><label for="user_theme"><?php if (isset($this->_var['L_THEME_CHOOSE'])) echo $this->_var['L_THEME_CHOOSE']; ?></label></dt>
						<dd><label>
							<select name="user_theme" id="user_theme" onchange="change_img_theme('img_theme', this.options[selectedIndex].value)">						
								<?php if (!isset($this->_block['select_theme']) || !is_array($this->_block['select_theme'])) $this->_block['select_theme'] = array();
foreach ($this->_block['select_theme'] as $select_theme_key => $select_theme_value) {
$_tmpb_select_theme = &$this->_block['select_theme'][$select_theme_key]; ?>
									<option value="<?php if (isset($_tmpb_select_theme['IDNAME'])) echo $_tmpb_select_theme['IDNAME']; ?>"<?php if (isset($_tmpb_select_theme['SELECTED'])) echo $_tmpb_select_theme['SELECTED']; ?>><?php if (isset($_tmpb_select_theme['NAME'])) echo $_tmpb_select_theme['NAME']; ?></option>
								<?php } ?>				
							</select>
							<img id="img_theme" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['USER_THEME'])) echo $this->_var['USER_THEME']; ?>/theme/images/theme.jpg" alt="" style="vertical-align:top" />			
						</label></dd>
					</dl>
					<dl>
						<dt><label for="user_editor">* <?php if (isset($this->_var['L_EDITOR_CHOOSE'])) echo $this->_var['L_EDITOR_CHOOSE']; ?></label></dt>
						<dd>
							<label>
								<select name="user_editor" id="user_editor">
									<?php if (isset($this->_var['EDITOR_OPTIONS'])) echo $this->_var['EDITOR_OPTIONS']; ?>
								</select>
							</label>
						</dd>
					</dl>	
					<dl>
						<dt><label for="user_timezone"><?php if (isset($this->_var['L_TIMEZONE_CHOOSE'])) echo $this->_var['L_TIMEZONE_CHOOSE']; ?></label><br /><span><?php if (isset($this->_var['L_TIMEZONE_CHOOSE_EXPLAIN'])) echo $this->_var['L_TIMEZONE_CHOOSE_EXPLAIN']; ?></span></dt>
						<dd>
							<label>
								<select name="user_timezone" id="user_timezone">	
									<?php if (isset($this->_var['TIMEZONE_OPTIONS'])) echo $this->_var['TIMEZONE_OPTIONS']; ?>
								</select>
							</label>
						</dd>			
					</dl>	
					<dl>
						<dt><label for="user_show_mail"><?php if (isset($this->_var['L_HIDE_MAIL'])) echo $this->_var['L_HIDE_MAIL']; ?></label><br /><span><?php if (isset($this->_var['L_HIDE_MAIL_EXPLAIN'])) echo $this->_var['L_HIDE_MAIL_EXPLAIN']; ?></span></dt>
						<dd><label><input type="checkbox" class="text" name="user_show_mail" id="user_show_mail" <?php if (isset($this->_var['SHOW_MAIL_CHECKED'])) echo $this->_var['SHOW_MAIL_CHECKED']; ?> /></label></dd>
					</dl>			
				</fieldset>	
				
				<fieldset>
					<legend><?php if (isset($this->_var['L_SANCTION'])) echo $this->_var['L_SANCTION']; ?></legend>				
					<dl>
						<dt><label for="delete"><?php if (isset($this->_var['L_CONFIRM_DEL_USER'])) echo $this->_var['L_CONFIRM_DEL_USER']; ?></label></dt>
						<dd><label><input type="checkbox" name="delete" id="delete" value="1" /> </label></dd>
					</dl>
					<dl>
						<dt><label for="user_ban"><?php if (isset($this->_var['L_BAN'])) echo $this->_var['L_BAN']; ?></label></dt>
						<dd><label>
							<select name="user_ban" id="user_ban">					
								<?php if (isset($this->_var['BAN_OPTIONS'])) echo $this->_var['BAN_OPTIONS']; ?>
							</select>
						</label></dd>
					</dl>
					<dl>
						<dt><label for="user_readonly"><?php if (isset($this->_var['L_READONLY'])) echo $this->_var['L_READONLY']; ?></label></dt>
						<dd><label>
							<select name="user_readonly" id="user_readonly">					
								<?php if (isset($this->_var['READONLY_OPTIONS'])) echo $this->_var['READONLY_OPTIONS']; ?>
							</select>
						</label></dd>
					</dl>
					<dl>
						<dt><label for="user_warning"><?php if (isset($this->_var['L_WARNING'])) echo $this->_var['L_WARNING']; ?></label></dt>
						<dd><label>
							<select name="user_warning" id="user_warning">					
								<?php if (isset($this->_var['WARNING_OPTIONS'])) echo $this->_var['WARNING_OPTIONS']; ?>
							</select>
						</label></dd>
					</dl>
				</fieldset>	
					
				<fieldset>
					<legend><?php if (isset($this->_var['L_INFO'])) echo $this->_var['L_INFO']; ?></legend>	
					<dl>
						<dt><label for="user_web"><?php if (isset($this->_var['L_WEBSITE'])) echo $this->_var['L_WEBSITE']; ?></label><br /><span><?php if (isset($this->_var['L_WEBSITE_EXPLAIN'])) echo $this->_var['L_WEBSITE_EXPLAIN']; ?></span></dt>
						<dd><label><input type="text" maxlength="70" size="40" name="user_web" id="user_web" value="<?php if (isset($this->_var['WEB'])) echo $this->_var['WEB']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="user_local"><?php if (isset($this->_var['L_LOCALISATION'])) echo $this->_var['L_LOCALISATION']; ?></label></dt>
						<dd><label><input type="text" maxlength=40" size="40" name="user_local" id="user_local" value="<?php if (isset($this->_var['LOCAL'])) echo $this->_var['LOCAL']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="user_occupation"><?php if (isset($this->_var['L_JOB'])) echo $this->_var['L_JOB']; ?></label></dt>
						<dd><label><input type="text" maxlength=40" size="40" name="user_occupation" id="user_occupation" value="<?php if (isset($this->_var['OCCUPATION'])) echo $this->_var['OCCUPATION']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="user_hobbies"><?php if (isset($this->_var['L_HOBBIES'])) echo $this->_var['L_HOBBIES']; ?></label></dt>
						<dd><label><input type="text" maxlength=40" size="40" name="user_hobbies" id="user_hobbies" value="<?php if (isset($this->_var['HOBBIES'])) echo $this->_var['HOBBIES']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="user_sex"><?php if (isset($this->_var['L_SEX'])) echo $this->_var['L_SEX']; ?></label></dt>
						<dd><label>
							<select name="user_sex" id="user_sex" onchange="img_change_sex(this.options[selectedIndex].value)">
								<?php if (isset($this->_var['SEX_OPTIONS'])) echo $this->_var['SEX_OPTIONS']; ?>						
							</select>
							<span id="img_sex"><?php if (isset($this->_var['IMG_SEX'])) echo $this->_var['IMG_SEX']; ?></span>
						</label></dd>
					</dl>
					<dl class="overflow_visible">
						<dt><label for="user_born"><?php if (isset($this->_var['L_DATE_BIRTH'])) echo $this->_var['L_DATE_BIRTH']; ?></label><br /><span><?php if (isset($this->_var['L_VALID'])) echo $this->_var['L_VALID']; ?></span></dt>
						<dd><label>
							<input size="10" maxlength="10" type="text" class="text" id="user_born" name="user_born" value="<?php if (isset($this->_var['BORN'])) echo $this->_var['BORN']; ?>" /> 

							<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar1">
								<div id="calendar" class="calendar_block" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);">							
								</div>
							</div>
							<a onclick="xmlhttprequest_calendar('calendar', '?input_field=user_born&amp;field=calendar&amp;lyear=1&amp;d=<?php if (isset($this->_var['BORN_DAY'])) echo $this->_var['BORN_DAY']; ?>&amp;m=<?php if (isset($this->_var['BORN_MONTH'])) echo $this->_var['BORN_MONTH']; ?>&amp;y=<?php if (isset($this->_var['BORN_YEAR'])) echo $this->_var['BORN_YEAR']; ?>');display_calendar(1);" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgcalendar" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
						</label></dd>
					</dl>
					<p><label for="user_sign"><?php if (isset($this->_var['L_USER_SIGN'])) echo $this->_var['L_USER_SIGN']; ?></label><br /><span><?php if (isset($this->_var['L_USER_SIGN_EXPLAIN'])) echo $this->_var['L_USER_SIGN_EXPLAIN']; ?></span></p>
					<p>
						<?php if (isset($this->_var['USER_SIGN_EDITOR'])) echo $this->_var['USER_SIGN_EDITOR']; ?>
						<textarea class="post" rows="10" cols="27" name="user_sign" id="user_sign"><?php if (isset($this->_var['SIGN'])) echo $this->_var['SIGN']; ?></textarea>
					</p>
					<p><label for="user_desc"><?php if (isset($this->_var['L_USER_BIOGRAPHY'])) echo $this->_var['L_USER_BIOGRAPHY']; ?></label></p>
					<p>
						<?php if (isset($this->_var['USER_DESC_EDITOR'])) echo $this->_var['USER_DESC_EDITOR']; ?>
						<textarea class="post" rows="10" cols="27" name="user_desc" id="user_desc"><?php if (isset($this->_var['BIOGRAPHY'])) echo $this->_var['BIOGRAPHY']; ?></textarea>
					</p>
					<div class="spacer">&nbsp;</div>
				</fieldset>	
					
				<fieldset>
					<legend><?php if (isset($this->_var['L_CONTACT'])) echo $this->_var['L_CONTACT']; ?></legend>	
					<dl>
						<dt><label for="user_msn">MSN</label></dt>
						<dd><label><input type="text" size="25" id="user_msn" name="user_msn" value="" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="user_yahoo">Yahoo</label></dt>
						<dd><label><input type="text" size="25" id="user_yahoo" name="user_yahoo" value="" class="text" /></label></dd>
					</dl>							
				</fieldset>
				
				<fieldset>
					<legend><?php if (isset($this->_var['L_AVATAR_GESTION'])) echo $this->_var['L_AVATAR_GESTION']; ?></legend>	
					<dl>
						<dt><label><?php if (isset($this->_var['L_CURRENT_AVATAR'])) echo $this->_var['L_CURRENT_AVATAR']; ?></label></dt>
						<dd><label><?php if (isset($this->_var['USER_AVATAR'])) echo $this->_var['USER_AVATAR']; ?></label></dd>
					</dl>
					<dl>
						<dt><label><?php if (isset($this->_var['L_UPLOAD_AVATAR'])) echo $this->_var['L_UPLOAD_AVATAR']; ?></label></dt>
						<dd><label>
							<?php if (isset($this->_var['L_WEIGHT_MAX'])) echo $this->_var['L_WEIGHT_MAX']; ?>: <?php if (isset($this->_var['WEIGHT_MAX'])) echo $this->_var['WEIGHT_MAX']; ?> ko
							<br />
							<?php if (isset($this->_var['L_HEIGHT_MAX'])) echo $this->_var['L_HEIGHT_MAX']; ?>: <?php if (isset($this->_var['HEIGHT_MAX'])) echo $this->_var['HEIGHT_MAX']; ?> px
							<br />
							<?php if (isset($this->_var['L_WIDTH_MAX'])) echo $this->_var['L_WIDTH_MAX']; ?>: <?php if (isset($this->_var['WIDTH_MAX'])) echo $this->_var['WIDTH_MAX']; ?> px
						</label></dd>
					</dl>
					<dl>
						<dt><label for="avatars"><?php if (isset($this->_var['L_UPLOAD_AVATAR'])) echo $this->_var['L_UPLOAD_AVATAR']; ?></label><br /><span><?php if (isset($this->_var['L_UPLOAD_AVATAR_WHERE'])) echo $this->_var['L_UPLOAD_AVATAR_WHERE']; ?></span></dt>
						<dd><label>
							<input type="file" name="avatars" id="avatars" size="30" class="file" />					
							<input type="hidden" name="max_file_size" value="2000000" />
						</label></dd>
					</dl>
					<dl>
						<dt><label for="avatar"><?php if (isset($this->_var['L_AVATAR_LINK'])) echo $this->_var['L_AVATAR_LINK']; ?></label><br /><span><?php if (isset($this->_var['L_AVATAR_LINK_WHERE'])) echo $this->_var['L_AVATAR_LINK_WHERE']; ?></span></dt>
						<dd><label><input type="text" maxlength="40" size="40" name="avatar" id="avatar" class="text" /></label></dd>
					</dl>	
					<dl>
						<dt><label for="delete_avatar"><?php if (isset($this->_var['L_AVATAR_DEL'])) echo $this->_var['L_AVATAR_DEL']; ?></label></dt>
						<dd><label><input type="checkbox" class="text" name="delete_avatar" id="delete_avatar" /></label></dd>
					</dl>
				</fieldset>
				
				<?php if (isset($this->_var['C_MISCELLANEOUS']) && $this->_var['C_MISCELLANEOUS']) { ?>
				<fieldset>
					<legend><?php if (isset($this->_var['L_MISCELLANEOUS'])) echo $this->_var['L_MISCELLANEOUS']; ?></legend>	
						
					<?php if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key]; ?>
					<dl>
						<dt><label for="<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>"><?php if (isset($_tmpb_list['NAME'])) echo $_tmpb_list['NAME']; ?></label><br /><span><?php if (isset($_tmpb_list['DESC'])) echo $_tmpb_list['DESC']; ?></span></dt>
						<dd><?php if (isset($_tmpb_list['FIELD'])) echo $_tmpb_list['FIELD']; ?></dd>
					</dl>
					<?php } ?>	
				</fieldset>
				<?php } ?>					
				
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
					<input type="submit" name="valid" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
					<input type="hidden" name="id" value="<?php if (isset($this->_var['IDMBR'])) echo $this->_var['IDMBR']; ?>" />
					&nbsp;&nbsp; 
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
				</fieldset>
			</form>
			<?php } ?>
		</div>
		