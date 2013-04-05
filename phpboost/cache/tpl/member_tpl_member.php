		<?php if (isset($this->_var['C_USER_UPDATE_PROFIL']) && $this->_var['C_USER_UPDATE_PROFIL']) { ?>
		
		<script type="text/javascript">
		<!--
		function check_form(){
			if(document.getElementById('mail').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_MAIL'])) echo $this->_var['L_REQUIRE_MAIL']; ?>");
				return false;
		    }
			<?php if (isset($this->_var['C_PROFIL_MISCELLANEOUS']) && $this->_var['C_PROFIL_MISCELLANEOUS']) {echo ' ';if (!isset($this->_block['miscellaneous_js_list']) || !is_array($this->_block['miscellaneous_js_list'])) $this->_block['miscellaneous_js_list'] = array();
foreach ($this->_block['miscellaneous_js_list'] as $miscellaneous_js_list_key => $miscellaneous_js_list_value) {
$_tmpb_miscellaneous_js_list = &$this->_block['miscellaneous_js_list'][$miscellaneous_js_list_key]; ?>
				if(document.getElementById('<?php if (isset($_tmpb_miscellaneous_js_list['ID'])) echo $_tmpb_miscellaneous_js_list['ID']; ?>') && document.getElementById('<?php if (isset($_tmpb_miscellaneous_js_list['ID'])) echo $_tmpb_miscellaneous_js_list['ID']; ?>').value == "") {
					alert("<?php if (isset($_tmpb_miscellaneous_js_list['L_REQUIRED'])) echo $_tmpb_miscellaneous_js_list['L_REQUIRED']; ?>");
					return false;
				}
				<?php }echo ' ';} ?>
			
			return true;
		}
		function img_sex(url)
		{
			if( document.getElementById('img_sex') )
			{
				var img_sex = '';
				if( url == 1 )
					img_sex = 'man.png';
				else if( url == 2 )
					img_sex = 'woman.png';
				document.getElementById('img_sex').innerHTML = (img_sex != '') ? '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/' + img_sex + '" alt="" />' : '';
			}
		}
		function change_img_theme(id, value)
		{
			if(document.images )
				document.images[id].src = "../templates/" + value + "/theme/images/theme.jpg";
		}
		
		var array_identifier = new Array();
		<?php if (isset($this->_var['JS_LANG_IDENTIFIER'])) echo $this->_var['JS_LANG_IDENTIFIER']; ?>
		function change_img_lang(id, lang)
		{
			if( array_identifier[lang] && document.getElementById(id) ) 
				document.getElementById(id).src = '../images/stats/countries/' + array_identifier[lang] + '.png';
		}
		function XMLHttpRequest_register_mail(value)
		{
			document.getElementById('msg_email').innerHTML = '<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" />';
			data = "mail=" + value + "&login=" + "<?php if (isset($this->_var['USER_LOGIN'])) echo $this->_var['USER_LOGIN']; ?>";
			var xhr_object = xmlhttprequest_init('<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/member/register_xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>');
			xhr_object.onreadystatechange = function() 
			{
				if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText == '1' )
				{
					document.getElementById('msg_email').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forbidden_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_email_div').innerHTML = "<?php if (isset($this->_var['L_MAIL_AUTH'])) echo $this->_var['L_MAIL_AUTH']; ?>";
				}
				else if( xhr_object.readyState == 4 )
				{	
					document.getElementById('msg_email').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_email_div').innerHTML = "";
				}
			}
			xmlhttprequest_sender(xhr_object, data);
		}
		function check_email(value) 
		{
			if (!check_mail_validity(value))
			{	
				document.getElementById('msg_email').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forbidden_mini.png" alt="" class="valign_middle" />';
				document.getElementById('msg_email_div').innerHTML = "<?php if (isset($this->_var['L_MAIL_INVALID'])) echo $this->_var['L_MAIL_INVALID']; ?>";
			}
			else
				XMLHttpRequest_register_mail(value);	
		}
		function check_password(value) 
		{
			if (value.length<6)
			{	
				document.getElementById('msg_password1').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forbidden_mini.png" alt="" class="valign_middle" />';
				document.getElementById('msg_password1_div').innerHTML = "<?php if (isset($this->_var['L_PASSWORD_HOW'])) echo $this->_var['L_PASSWORD_HOW']; ?>";
			}
			else
			{
				var password = document.getElementById('pass_bis').value;
				if (password == value)
				{
					document.getElementById('msg_password1').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password1_div').innerHTML = '';
					document.getElementById('msg_password2').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password2_div').innerHTML = '';
				}
				else if (password.length > 0)
				{	
					document.getElementById('msg_password1').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password1_div').innerHTML = '';
					document.getElementById('msg_password2').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forbidden_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password2_div').innerHTML = "<?php if (isset($this->_var['L_PASSWORD_SAME'])) echo $this->_var['L_PASSWORD_SAME']; ?>";
				}
				else
				{
					document.getElementById('msg_password1').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password1_div').innerHTML = '';
				}
			}	
		}
		function check_password2(value) 
		{
			if (value.length<6)
			{	
				document.getElementById('msg_password2').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forbidden_mini.png" alt="" class="valign_middle" />';
				document.getElementById('msg_password2_div').innerHTML = "<?php if (isset($this->_var['L_PASSWORD_HOW'])) echo $this->_var['L_PASSWORD_HOW']; ?>";
			}
			else
			{
				var password = document.getElementById('pass').value;
				if (password == value)
				{
					document.getElementById('msg_password1').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password1_div').innerHTML = '';
					document.getElementById('msg_password2').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password2_div').innerHTML = '';
				}
				else if (password.length > 0)
				{	
					document.getElementById('msg_password2').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password2_div').innerHTML = '';
					document.getElementById('msg_password1').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forbidden_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password1_div').innerHTML = "<?php if (isset($this->_var['L_PASSWORD_SAME'])) echo $this->_var['L_PASSWORD_SAME']; ?>";
				}
				else
				{
					document.getElementById('msg_password2').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_password2_div').innerHTML = '';
				}
			}	
		}
		-->
		</script>

		<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
		<span id="errorh"></span>
		<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
			<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
			<br />	
		</div>
		<br />		
		<?php } ?>
		
		<script type="text/javascript">
		<!--
			var theme = '<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>';
		-->
		</script>
		<script type="text/javascript" src="../kernel/framework/js/calendar.js"></script>
		<form action="member<?php if (isset($this->_var['U_USER_ACTION_UPDATE'])) echo $this->_var['U_USER_ACTION_UPDATE']; ?>" enctype="multipart/form-data" method="post" onsubmit="return check_form();" class="fieldset_content">
			<fieldset>
				<legend><?php if (isset($this->_var['L_PROFIL_EDIT'])) echo $this->_var['L_PROFIL_EDIT']; ?></legend>
				<dl>
					<dt><label for="mail">* <?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?></label><br /><span><?php if (isset($this->_var['L_VALID'])) echo $this->_var['L_VALID']; ?></span></dt>
					<dd><label><input type="text" maxlength="50" size="30" id="mail" name="mail" value="<?php if (isset($this->_var['MAIL'])) echo $this->_var['MAIL']; ?>" class="text" onblur="check_email(this.value);" /></label> &nbsp;<span id="msg_email"></span><div style="font-weight:bold" id="msg_email_div"></div></dd>
				</dl>
				<dl>
					<dt><label for="pass_old">(*) <?php if (isset($this->_var['L_PREVIOUS_PASS'])) echo $this->_var['L_PREVIOUS_PASS']; ?></label><br /><span><?php if (isset($this->_var['L_EDIT_JUST_IF_MODIF'])) echo $this->_var['L_EDIT_JUST_IF_MODIF']; ?></span></dt>
					<dd><label><input size="30" type="password" class="text" name="pass_old" id="pass_old" maxlength="30" /></label></dd>
				</dl>
				<dl>
					<dt><label for="pass">(*) <?php if (isset($this->_var['L_NEW_PASS'])) echo $this->_var['L_NEW_PASS']; ?></label><br /><span><?php if (isset($this->_var['L_EDIT_JUST_IF_MODIF'])) echo $this->_var['L_EDIT_JUST_IF_MODIF']; ?></span></dt>
					<dd><label><input size="30" type="password" class="text" name="pass" id="pass" maxlength="30" onblur="check_password(this.value);" /></label> &nbsp;<span id="msg_password1"></span><div style="font-weight:bold" id="msg_password1_div"></div></dd>
				</dl>
				<dl>
					<dt><label for="pass_bis">(*) <?php if (isset($this->_var['L_CONFIRM_PASS'])) echo $this->_var['L_CONFIRM_PASS']; ?></label><br /><span><?php if (isset($this->_var['L_EDIT_JUST_IF_MODIF'])) echo $this->_var['L_EDIT_JUST_IF_MODIF']; ?></span></dt>
					<dd><label><input size="30" type="password" class="text" name="pass_bis" id="pass_bis" maxlength="30" onblur="check_password2(this.value);" /></label> &nbsp;<span id="msg_password2"></span><div style="font-weight:bold" id="msg_password2_div"></div></dd>
				</dl>
				<dl>
					<dt><label for="del_member"><?php if (isset($this->_var['L_DEL_USER'])) echo $this->_var['L_DEL_USER']; ?></label></dt>
					<dd><label><input size="30" type="checkbox" name="del_member" id="del_member" /></label></dd>
				</dl>
				<dl>
					<dt><label for="user_lang">* <?php if (isset($this->_var['L_LANG_CHOOSE'])) echo $this->_var['L_LANG_CHOOSE']; ?></label></dt>
					<dd>
						<label>
							<select name="user_lang" id="user_lang" onchange="change_img_lang('img_lang', this.options[this.selectedIndex].value)">	
								<?php if (!isset($this->_block['select_lang']) || !is_array($this->_block['select_lang'])) $this->_block['select_lang'] = array();
foreach ($this->_block['select_lang'] as $select_lang_key => $select_lang_value) {
$_tmpb_select_lang = &$this->_block['select_lang'][$select_lang_key]; ?>
									<option value="<?php if (isset($_tmpb_select_lang['IDNAME'])) echo $_tmpb_select_lang['IDNAME']; ?>"<?php if (isset($_tmpb_select_lang['SELECTED'])) echo $_tmpb_select_lang['SELECTED']; ?>><?php if (isset($_tmpb_select_lang['NAME'])) echo $_tmpb_select_lang['NAME']; ?></option>
								<?php } ?>
							</select> &nbsp;<img id="img_lang" src="<?php if (isset($this->_var['IMG_LANG_IDENTIFIER'])) echo $this->_var['IMG_LANG_IDENTIFIER']; ?>" alt="" class="valign_middle" />
						</label>
					</dd>
				</dl>
			</fieldset>
				
			<fieldset>
				<legend><?php if (isset($this->_var['L_OPTIONS'])) echo $this->_var['L_OPTIONS']; ?></legend>
				<dl>
					<dt><label for="user_theme">* <?php if (isset($this->_var['L_THEME_CHOOSE'])) echo $this->_var['L_THEME_CHOOSE']; ?></label></dt>
					<dd>
						<label>
							<select name="user_theme" id="user_theme" onchange="change_img_theme('img_theme', this.options[selectedIndex].value)">
								<?php if (!isset($this->_block['select_theme']) || !is_array($this->_block['select_theme'])) $this->_block['select_theme'] = array();
foreach ($this->_block['select_theme'] as $select_theme_key => $select_theme_value) {
$_tmpb_select_theme = &$this->_block['select_theme'][$select_theme_key]; ?>
									<option value="<?php if (isset($_tmpb_select_theme['IDNAME'])) echo $_tmpb_select_theme['IDNAME']; ?>"<?php if (isset($_tmpb_select_theme['SELECTED'])) echo $_tmpb_select_theme['SELECTED']; ?>><?php if (isset($_tmpb_select_theme['NAME'])) echo $_tmpb_select_theme['NAME']; ?></option>
								<?php } ?>
							</select>
							<img id="img_theme" src="../templates/<?php if (isset($this->_var['USER_THEME'])) echo $this->_var['USER_THEME']; ?>/theme/images/theme.jpg" alt="" style="vertical-align:top" />
						</label>
					</dd>
				</dl>
				<dl>
					<dt><label for="user_editor">* <?php if (isset($this->_var['L_EDITOR_CHOOSE'])) echo $this->_var['L_EDITOR_CHOOSE']; ?></label></dt>
					<dd>
						<label>
							<select name="user_editor" id="user_editor">
								<?php if (!isset($this->_block['select_editor']) || !is_array($this->_block['select_editor'])) $this->_block['select_editor'] = array();
foreach ($this->_block['select_editor'] as $select_editor_key => $select_editor_value) {
$_tmpb_select_editor = &$this->_block['select_editor'][$select_editor_key];echo ' ';if (isset($_tmpb_select_editor['SELECT_EDITORS'])) echo $_tmpb_select_editor['SELECT_EDITORS'];echo ' ';} ?>
							</select>
						</label>
					</dd>
				</dl>
				<dl>
					<dt><label for="user_timezone"><?php if (isset($this->_var['L_TIMEZONE_CHOOSE'])) echo $this->_var['L_TIMEZONE_CHOOSE']; ?></label><br /><span><?php if (isset($this->_var['L_TIMEZONE_CHOOSE_EXPLAIN'])) echo $this->_var['L_TIMEZONE_CHOOSE_EXPLAIN']; ?></span></dt>
					<dd>
						<label>
							<select name="user_timezone" id="user_timezone">	
								<?php if (!isset($this->_block['select_timezone']) || !is_array($this->_block['select_timezone'])) $this->_block['select_timezone'] = array();
foreach ($this->_block['select_timezone'] as $select_timezone_key => $select_timezone_value) {
$_tmpb_select_timezone = &$this->_block['select_timezone'][$select_timezone_key];echo ' ';if (isset($_tmpb_select_timezone['SELECT_TIMEZONE'])) echo $_tmpb_select_timezone['SELECT_TIMEZONE'];echo ' ';} ?>						
							</select>
						</label>
					</dd>			
				</dl>
				<dl>
					<dt><label for="user_show_mail"><?php if (isset($this->_var['L_HIDE_MAIL'])) echo $this->_var['L_HIDE_MAIL']; ?></label><br /><span><?php if (isset($this->_var['L_HIDE_MAIL_WHO'])) echo $this->_var['L_HIDE_MAIL_WHO']; ?></span></dt>
					<dd><label><input type="checkbox" <?php if (isset($this->_var['SHOW_MAIL_CHECKED'])) echo $this->_var['SHOW_MAIL_CHECKED']; ?> name="user_show_mail" id="user_show_mail" /></label></dd>
				</dl>
			</fieldset>	
			
			<fieldset>
				<legend><?php if (isset($this->_var['L_INFO'])) echo $this->_var['L_INFO']; ?></legend>
				<dl>
					<dt><label for="user_web"><?php if (isset($this->_var['L_SITE_WEB'])) echo $this->_var['L_SITE_WEB']; ?></label><br /><span><?php if (isset($this->_var['L_VALID'])) echo $this->_var['L_VALID']; ?></span></dt>
					<dd><label><input size="30" type="text" class="text" name="user_web" id="user_web" value="<?php if (isset($this->_var['WEB'])) echo $this->_var['WEB']; ?>" maxlength="70" /></label></dd>
				</dl>
				<dl>
					<dt><label for="user_local"><?php if (isset($this->_var['L_LOCALISATION'])) echo $this->_var['L_LOCALISATION']; ?></label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_local" id="user_local" value="<?php if (isset($this->_var['LOCAL'])) echo $this->_var['LOCAL']; ?>" maxlength="25" /></label></dd>
				</dl>
				<dl>
					<dt><label for="user_occupation"><?php if (isset($this->_var['L_JOB'])) echo $this->_var['L_JOB']; ?></label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_occupation" id="user_occupation" value="<?php if (isset($this->_var['OCCUPATION'])) echo $this->_var['OCCUPATION']; ?>" maxlength="50" /></label></dd>
				</dl>
				<dl>
					<dt><label for="user_hobbies"><?php if (isset($this->_var['L_HOBBIES'])) echo $this->_var['L_HOBBIES']; ?></label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_hobbies" id="user_hobbies" value="<?php if (isset($this->_var['HOBBIES'])) echo $this->_var['HOBBIES']; ?>" maxlength="50" /></label></dd>
				</dl>
				<dl>
					<dt><label for="user_sex"><?php if (isset($this->_var['L_SEX'])) echo $this->_var['L_SEX']; ?></label></dt>
					<dd><label>
						<select name="user_sex" id="user_sex" onchange="img_sex(this.options[selectedIndex].value)">
							<?php if (!isset($this->_block['select_sex']) || !is_array($this->_block['select_sex'])) $this->_block['select_sex'] = array();
foreach ($this->_block['select_sex'] as $select_sex_key => $select_sex_value) {
$_tmpb_select_sex = &$this->_block['select_sex'][$select_sex_key];echo ' ';if (isset($_tmpb_select_sex['SEX'])) echo $_tmpb_select_sex['SEX'];echo ' ';} ?>
						</select>
						<span id="img_sex"><?php if (isset($this->_var['USER_SEX'])) echo $this->_var['USER_SEX']; ?></span>
					</label></dd>
				</dl>
				<dl class="overflow_visible">
					<dt><label for="user_born"><?php if (isset($this->_var['L_DATE_OF_BIRTH'])) echo $this->_var['L_DATE_OF_BIRTH']; ?></label><br /><span><?php if (isset($this->_var['L_DATE_FORMAT'])) echo $this->_var['L_DATE_FORMAT']; ?></span></dt>
					<dd>
						<label><input size="10" maxlength="10" type="text" class="text" id="user_born" name="user_born" value="<?php if (isset($this->_var['USER_BORN'])) echo $this->_var['USER_BORN']; ?>" /></label>
						<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar1">
							<div id="calendar" class="calendar_block" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);">							
							</div>
						</div>
						<a onclick="xmlhttprequest_calendar('calendar', '?input_field=user_born&amp;field=calendar&amp;lyear=1&amp;d=<?php if (isset($this->_var['BORN_DAY'])) echo $this->_var['BORN_DAY']; ?>&amp;m=<?php if (isset($this->_var['BORN_MONTH'])) echo $this->_var['BORN_MONTH']; ?>&amp;y=<?php if (isset($this->_var['BORN_YEAR'])) echo $this->_var['BORN_YEAR']; ?>');display_calendar(1);" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgcalendar" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
					</dd>
				</dl>
				<p><label for="user_sign"><?php if (isset($this->_var['L_SIGN'])) echo $this->_var['L_SIGN']; ?></label><br /><span class="text_small"><?php if (isset($this->_var['L_SIGN_WHERE'])) echo $this->_var['L_SIGN_WHERE']; ?></span></p>
				<?php if (isset($this->_var['USER_SIGN_EDITOR'])) echo $this->_var['USER_SIGN_EDITOR']; ?>
				<textarea class="post" rows="10" cols="27" name="user_sign" id="user_sign"><?php if (isset($this->_var['USER_SIGN'])) echo $this->_var['USER_SIGN']; ?></textarea>
				<p><label for="user_desc"><?php if (isset($this->_var['L_BIOGRAPHY'])) echo $this->_var['L_BIOGRAPHY']; ?></label></p>
				<?php if (isset($this->_var['USER_DESC_EDITOR'])) echo $this->_var['USER_DESC_EDITOR']; ?>
				<textarea class="post" rows="10" cols="27" id="user_desc" name="user_desc"><?php if (isset($this->_var['USER_DESC'])) echo $this->_var['USER_DESC']; ?></textarea>
				<div class="spacer">&nbsp;</div>
			</fieldset>
				
			<fieldset>
				<legend><?php if (isset($this->_var['L_CONTACT'])) echo $this->_var['L_CONTACT']; ?></legend>
				<dl>
					<dt><label for="user_msn">MSN</label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_msn" id="user_msn" value="<?php if (isset($this->_var['USER_MSN'])) echo $this->_var['USER_MSN']; ?>" maxlength="50" /></label></dd>
				</dl>
				<dl>
					<dt><label for="user_yahoo">Yahoo</label></dt>
					<dd><input size="30" type="text" class="text" name="user_yahoo" id="user_yahoo" value="<?php if (isset($this->_var['USER_YAHOO'])) echo $this->_var['USER_YAHOO']; ?>" maxlength="50" /></dd>
				</dl>
			</fieldset>	
				
			<fieldset>
				<legend><?php if (isset($this->_var['L_AVATAR_MANAGEMENT'])) echo $this->_var['L_AVATAR_MANAGEMENT']; ?></legend>
				<dl>
					<dt><label><?php if (isset($this->_var['L_CURRENT_AVATAR'])) echo $this->_var['L_CURRENT_AVATAR']; ?></label></dt>
					<dd><?php if (isset($this->_var['USER_AVATAR'])) echo $this->_var['USER_AVATAR']; ?></dd>
				</dl>	
				<?php if (isset($this->_var['C_UPLOAD_AVATAR']) && $this->_var['C_UPLOAD_AVATAR']) { ?>
				<dl>
					<dt><label for="avatars"><?php if (isset($this->_var['L_UPLOAD_AVATAR'])) echo $this->_var['L_UPLOAD_AVATAR']; ?></label><br /><span><?php if (isset($this->_var['L_UPLOAD_AVATAR_WHERE'])) echo $this->_var['L_UPLOAD_AVATAR_WHERE']; ?></span></dt>
					<dd><label>
						<input type="file" name="avatars" id="avatars" size="30" class="file" />					
						<input type="hidden" name="max_file_size" value="2000000" />
						<br />
						<?php if (isset($this->_var['L_WEIGHT_MAX'])) echo $this->_var['L_WEIGHT_MAX']; ?>: <?php if (isset($this->_var['WEIGHT_MAX'])) echo $this->_var['WEIGHT_MAX'];echo ' ';if (isset($this->_var['L_UNIT_KO'])) echo $this->_var['L_UNIT_KO']; ?>
						<br />
						<?php if (isset($this->_var['L_HEIGHT_MAX'])) echo $this->_var['L_HEIGHT_MAX']; ?>: <?php if (isset($this->_var['HEIGHT_MAX'])) echo $this->_var['HEIGHT_MAX'];echo ' ';if (isset($this->_var['L_UNIT_PX'])) echo $this->_var['L_UNIT_PX']; ?>
						<br />
						<?php if (isset($this->_var['L_WIDTH_MAX'])) echo $this->_var['L_WIDTH_MAX']; ?>: <?php if (isset($this->_var['WIDTH_MAX'])) echo $this->_var['WIDTH_MAX'];echo ' ';if (isset($this->_var['L_UNIT_PX'])) echo $this->_var['L_UNIT_PX']; ?>
					</label></dd>
				</dl>
				<?php } ?>
				<dl>
					<dt><label for="avatar"><?php if (isset($this->_var['L_AVATAR_LINK'])) echo $this->_var['L_AVATAR_LINK']; ?></label><br /><span><?php if (isset($this->_var['L_AVATAR_LINK_WHERE'])) echo $this->_var['L_AVATAR_LINK_WHERE']; ?></span></dt>
					<dd><label><input type="text" name="avatar" id="avatar" size="30" class="text" /></label></dd>
				</dl>
				<dl>
					<dt><label for="delete_avatar"><?php if (isset($this->_var['L_AVATAR_DEL'])) echo $this->_var['L_AVATAR_DEL']; ?></label></dt>
					<dd><label><input type="checkbox" name="delete_avatar" id="delete_avatar" /></label></dd>
				</dl>
			</fieldset>
			
			<?php if (isset($this->_var['C_PROFIL_MISCELLANEOUS']) && $this->_var['C_PROFIL_MISCELLANEOUS']) { ?>
			<fieldset>
				<legend><?php if (isset($this->_var['L_MISCELLANEOUS'])) echo $this->_var['L_MISCELLANEOUS']; ?></legend>	
					
				<?php if (!isset($this->_block['miscellaneous_list']) || !is_array($this->_block['miscellaneous_list'])) $this->_block['miscellaneous_list'] = array();
foreach ($this->_block['miscellaneous_list'] as $miscellaneous_list_key => $miscellaneous_list_value) {
$_tmpb_miscellaneous_list = &$this->_block['miscellaneous_list'][$miscellaneous_list_key]; ?>
				<dl>
					<dt><label for="<?php if (isset($_tmpb_miscellaneous_list['ID'])) echo $_tmpb_miscellaneous_list['ID']; ?>"><?php if (isset($_tmpb_miscellaneous_list['NAME'])) echo $_tmpb_miscellaneous_list['NAME']; ?></label><br /><span><?php if (isset($_tmpb_miscellaneous_list['DESC'])) echo $_tmpb_miscellaneous_list['DESC']; ?></span></dt>
					<dd><label><?php if (isset($_tmpb_miscellaneous_list['FIELD'])) echo $_tmpb_miscellaneous_list['FIELD']; ?></label></dd>
				</dl>
				<?php } ?>	
			</fieldset>
			<?php } ?>

			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
				<input type="submit" name="valid" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />	
				&nbsp;&nbsp; 
				<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
			</fieldset>
		</form>
		<?php }echo ' ';if (isset($this->_var['C_USER_INDEX']) && $this->_var['C_USER_INDEX']) { ?>
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top"><strong><?php if (isset($this->_var['L_PROFIL'])) echo $this->_var['L_PROFIL']; ?></strong></div>
			<div class="module_contents">
				<p style="text-align:center;" class="text_strong"><?php if (isset($this->_var['L_WELCOME'])) echo $this->_var['L_WELCOME'];echo ' ';if (isset($this->_var['USER_NAME'])) echo $this->_var['USER_NAME']; ?></p>
				
				<table class="module_table" style="width:99%;margin-top:15px;">
					<tr>
						<td class="row2" style="text-align:center;">
							<a href="member<?php if (isset($this->_var['U_USER_ID'])) echo $this->_var['U_USER_ID']; ?>" title="">
								<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/member.png" alt="<?php if (isset($this->_var['L_PROFIL_EDIT'])) echo $this->_var['L_PROFIL_EDIT']; ?>" title="<?php if (isset($this->_var['L_PROFIL_EDIT'])) echo $this->_var['L_PROFIL_EDIT']; ?>" />
							</a>
							<br />
							<a href="member<?php if (isset($this->_var['U_USER_ID'])) echo $this->_var['U_USER_ID']; ?>"><?php if (isset($this->_var['L_PROFIL_EDIT'])) echo $this->_var['L_PROFIL_EDIT']; ?></a> <br /><br />
						</td>
						<td class="row2" style="text-align:center;">
							<a href="pm<?php if (isset($this->_var['U_USER_PM'])) echo $this->_var['U_USER_PM']; ?>">
								<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['IMG_PM'])) echo $this->_var['IMG_PM']; ?>" alt="<?php if (isset($this->_var['L_PRIVATE_MESSAGE'])) echo $this->_var['L_PRIVATE_MESSAGE']; ?>" title="<?php if (isset($this->_var['L_PRIVATE_MESSAGE'])) echo $this->_var['L_PRIVATE_MESSAGE']; ?>" />
							</a>
							<br />
							<a href="pm<?php if (isset($this->_var['U_USER_PM'])) echo $this->_var['U_USER_PM']; ?>"><?php if (isset($this->_var['PM'])) echo $this->_var['PM'];echo ' ';if (isset($this->_var['L_PRIVATE_MESSAGE'])) echo $this->_var['L_PRIVATE_MESSAGE']; ?></a> <br /><br />
						</td>
						<?php if (isset($this->_var['C_USER_AUTH_FILES']) && $this->_var['C_USER_AUTH_FILES']) { ?>
						<td class="row2" style="text-align:center;">
							<a href="upload.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>">
								<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/files_add.png" alt="<?php if (isset($this->_var['L_FILES_MANAGEMENT'])) echo $this->_var['L_FILES_MANAGEMENT']; ?>" title="<?php if (isset($this->_var['L_FILES_MANAGEMENT'])) echo $this->_var['L_FILES_MANAGEMENT']; ?>" />
							</a>
							<br />
							<a href="upload.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_FILES_MANAGEMENT'])) echo $this->_var['L_FILES_MANAGEMENT']; ?></a> <br /><br />
						</td>				
						<?php } ?>
						<td class="row2" style="text-align:center;">
							<a href="<?php if (isset($this->_var['U_CONTRIBUTION_PANEL'])) echo $this->_var['U_CONTRIBUTION_PANEL']; ?>">
								<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/contribution.png" alt="<?php if (isset($this->_var['L_CONTRIBUTION_PANEL'])) echo $this->_var['L_CONTRIBUTION_PANEL']; ?>" title="<?php if (isset($this->_var['L_CONTRIBUTION_PANEL'])) echo $this->_var['L_CONTRIBUTION_PANEL']; ?>" />
							</a>
							<br />
							<a href="<?php if (isset($this->_var['U_CONTRIBUTION_PANEL'])) echo $this->_var['U_CONTRIBUTION_PANEL']; ?>"><?php if (isset($this->_var['L_CONTRIBUTION_PANEL'])) echo $this->_var['L_CONTRIBUTION_PANEL']; ?></a> <br /><br />
						</td>
						<?php if (isset($this->_var['C_IS_MODERATOR']) && $this->_var['C_IS_MODERATOR']) { ?>
						<td class="row2" style="text-align:center;">
							<a href="<?php if (isset($this->_var['U_MODERATION_PANEL'])) echo $this->_var['U_MODERATION_PANEL']; ?>">
								<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/moderation_panel.png" alt="<?php if (isset($this->_var['L_MODERATION_PANEL'])) echo $this->_var['L_MODERATION_PANEL']; ?>" title="<?php if (isset($this->_var['L_MODERATION_PANEL'])) echo $this->_var['L_MODERATION_PANEL']; ?>" />
							</a>
							<br />
							<a href="<?php if (isset($this->_var['U_MODERATION_PANEL'])) echo $this->_var['U_MODERATION_PANEL']; ?>"><?php if (isset($this->_var['L_MODERATION_PANEL'])) echo $this->_var['L_MODERATION_PANEL']; ?></a> <br /><br />
						</td>				
						<?php } ?>
					</tr>
				</table>
				<br /><br />
				<?php if (isset($this->_var['MSG_MBR'])) echo $this->_var['MSG_MBR']; ?>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom"></div>
		</div>
		<?php }echo ' ';if (isset($this->_var['C_USER_LIST']) && $this->_var['C_USER_LIST']) { ?>
		<table class="module_table" style="width:98%;">	
			<tr>
				<td style="vertical-align:top;" class="row2">
					<form action="../member/member.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post">
						<?php if (isset($this->_var['L_SELECT_GROUP'])) echo $this->_var['L_SELECT_GROUP']; ?>: <select name="show_group" style="text-align:center;" onchange="document.location = <?php if (isset($this->_var['U_SELECT_SHOW_GROUP'])) echo $this->_var['U_SELECT_SHOW_GROUP']; ?>;">
							<option value="0" selected="selected">-- <?php if (isset($this->_var['L_LIST'])) echo $this->_var['L_LIST']; ?> --</option>
							<?php if (!isset($this->_block['group_select']) || !is_array($this->_block['group_select'])) $this->_block['group_select'] = array();
foreach ($this->_block['group_select'] as $group_select_key => $group_select_value) {
$_tmpb_group_select = &$this->_block['group_select'][$group_select_key];echo ' ';if (isset($_tmpb_group_select['OPTION'])) echo $_tmpb_group_select['OPTION'];echo ' ';} ?>
						</select>
						
						<noscript>
							<input type="submit" name="valid" value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" class="submit" />
						</noscript>
					</form>				
				</td>
				<td style="vertical-align:top;" class="row2">
					<form action="member.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post">
						<span style="float:left;">
							<?php if (isset($this->_var['L_SEARCH_USER'])) echo $this->_var['L_SEARCH_USER']; ?>: <input type="text" size="20" maxlength="25" id="login" value="<?php if (isset($_tmpb_all['LOGIN'])) echo $_tmpb_all['LOGIN']; ?>" name="login_mbr" class="text" />
							<span id="search_img"></span>
						</span>
						<span style="float:left;margin-left:5px;">
							<input type="submit" id="search_member" name="search_member" value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" class="submit" />
							<script type="text/javascript">
							<!--								
								document.getElementById('search_member').style.display = 'none';
								document.write('<input value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" onclick="XMLHttpRequest_search_members(\'\', \'<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>\', \'member\', \'<?php if (isset($this->_var['L_REQUIRE_LOGIN'])) echo $this->_var['L_REQUIRE_LOGIN']; ?>\');" type="button" class="submit">');
							-->
							</script>									
							<div id="xmlhttprequest_result_search" style="display:none;" class="xmlhttprequest_result_search"></div>
						</span>
					</form>	
				</td>
			</tr>
		</table>	
		<br /><br />
		<table class="module_table" style="width: 98%;">	
			<tr>
				<th colspan="8">
					<?php if (isset($this->_var['L_PROFIL'])) echo $this->_var['L_PROFIL']; ?>
				</th>
			</tr>
			<tr>
				<td colspan="8" class="row1">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>&nbsp;
				</td>
			</tr>	
			<tr style="font-weight:bold;text-align: center;">
				<td class="row3">
					<a href="member<?php if (isset($this->_var['U_USER_ALPHA_TOP'])) echo $this->_var['U_USER_ALPHA_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" /></a>
					<?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?> 
					<a href="member<?php if (isset($this->_var['U_USER_ALPHA_BOTTOM'])) echo $this->_var['U_USER_ALPHA_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" /></a>
				</td>
				<td class="row3">
					<?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?>
				</td>
				<td class="row3">
					<a href="member<?php if (isset($this->_var['U_USER_TIME_TOP'])) echo $this->_var['U_USER_TIME_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" /></a>
					<?php if (isset($this->_var['L_REGISTERED'])) echo $this->_var['L_REGISTERED']; ?>
					<a href="member<?php if (isset($this->_var['U_USER_TIME_BOTTOM'])) echo $this->_var['U_USER_TIME_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" /></a>
				</td>
				<td class="row3">
					<a href="member<?php if (isset($this->_var['U_USER_MSG_TOP'])) echo $this->_var['U_USER_MSG_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" /></a>
					<?php if (isset($this->_var['L_MESSAGE'])) echo $this->_var['L_MESSAGE']; ?>
					<a href="member<?php if (isset($this->_var['U_USER_MSG_BOTTOM'])) echo $this->_var['U_USER_MSG_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" /></a>	
				</td>
				<td class="row3">
					<?php if (isset($this->_var['L_LOCALISATION'])) echo $this->_var['L_LOCALISATION']; ?>
				</td>
				<td class="row3">
					<a href="member<?php if (isset($this->_var['U_USER_LAST_TOP'])) echo $this->_var['U_USER_LAST_TOP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" /></a>
					<?php if (isset($this->_var['L_LAST_CONNECT'])) echo $this->_var['L_LAST_CONNECT']; ?>
					<a href="member<?php if (isset($this->_var['U_USER_LAST_BOTTOM'])) echo $this->_var['U_USER_LAST_BOTTOM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" /></a>
				</td>
				<td class="row3">
					<?php if (isset($this->_var['L_PRIVATE_MESSAGE'])) echo $this->_var['L_PRIVATE_MESSAGE']; ?>
				</td>
				<td class="row3">
					<?php if (isset($this->_var['L_WEB_SITE'])) echo $this->_var['L_WEB_SITE']; ?>
				</td>
			</tr>
			<?php if (!isset($this->_block['member_list']) || !is_array($this->_block['member_list'])) $this->_block['member_list'] = array();
foreach ($this->_block['member_list'] as $member_list_key => $member_list_value) {
$_tmpb_member_list = &$this->_block['member_list'][$member_list_key]; ?>
			<tr> 
				<td class="row2" style="text-align:center;padding:4px 0px;">
					<a href="member<?php if (isset($_tmpb_member_list['U_USER_ID'])) echo $_tmpb_member_list['U_USER_ID']; ?>"><?php if (isset($_tmpb_member_list['PSEUDO'])) echo $_tmpb_member_list['PSEUDO']; ?></a>
				</td>
				<td class="row2" style="text-align:center;padding:4px 0px;"> 
					<?php if (isset($_tmpb_member_list['MAIL'])) echo $_tmpb_member_list['MAIL']; ?>
				</td>
				<td class="row2" style="text-align:center;padding:4px 0px;"> 
					<?php if (isset($_tmpb_member_list['DATE'])) echo $_tmpb_member_list['DATE']; ?>
				</td>
				<td class="row2" style="text-align:center;padding:4px 0px;"> 
					<?php if (isset($_tmpb_member_list['MSG'])) echo $_tmpb_member_list['MSG']; ?>
				</td>
				<td class="row2" style="text-align:center;padding:4px 0px;"> 
					<?php if (isset($_tmpb_member_list['LOCAL'])) echo $_tmpb_member_list['LOCAL']; ?>
				</td>
				<td class="row2" style="text-align:center;padding:4px 0px;"> 
					<?php if (isset($_tmpb_member_list['LAST_CONNECT'])) echo $_tmpb_member_list['LAST_CONNECT']; ?>
				</td>
				<td class="row2" style="text-align:center;padding:4px 0px;"> 
					<a href="pm<?php if (isset($_tmpb_member_list['U_USER_PM'])) echo $_tmpb_member_list['U_USER_PM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/pm.png" alt="<?php if (isset($this->_var['L_PRIVATE_MESSAGE'])) echo $this->_var['L_PRIVATE_MESSAGE']; ?>" /></a>
				</td>
				<td class="row2" style="text-align:center;padding:4px 0px;"> 
					<?php if (isset($_tmpb_member_list['WEB'])) echo $_tmpb_member_list['WEB']; ?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="8" class="row1">
					<span style="float:left;"><?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?></span>
				</td>
			</tr>
		</table>
		<?php }echo ' ';if (isset($this->_var['C_PROFIL_USER_VIEW']) && $this->_var['C_PROFIL_USER_VIEW']) { ?>
		<div class="fieldset_content">
			<fieldset>
				<legend><?php if (isset($this->_var['L_PROFIL'])) echo $this->_var['L_PROFIL']; ?></legend>
				<?php if (isset($this->_var['C_USER_PROFIL_EDIT']) && $this->_var['C_USER_PROFIL_EDIT']) { ?>
				<dl>
					<dt><?php if (isset($this->_var['L_PROFIL_EDIT'])) echo $this->_var['L_PROFIL_EDIT']; ?></dt>
					<dd><a href="<?php if (isset($this->_var['U_USER_SCRIPT'])) echo $this->_var['U_USER_SCRIPT']; ?>" title="<?php if (isset($this->_var['L_PROFIL_EDIT'])) echo $this->_var['L_PROFIL_EDIT']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_PROFIL_EDIT'])) echo $this->_var['L_PROFIL_EDIT']; ?>" /></a></dd>
				</dl>
				<?php } ?>				
				<dl>
					<dt><?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?></dt>
					<dd><?php if (isset($this->_var['USER_NAME'])) echo $this->_var['USER_NAME']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_AVATAR'])) echo $this->_var['L_AVATAR']; ?></dt>
					<dd><?php if (isset($this->_var['USER_AVATAR'])) echo $this->_var['USER_AVATAR']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_STATUT'])) echo $this->_var['L_STATUT']; ?></dt>
					<dd><?php if (isset($this->_var['STATUT'])) echo $this->_var['STATUT']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_GROUPS'])) echo $this->_var['L_GROUPS']; ?></dt>
					<dd><?php if (isset($this->_var['USER_GROUPS_LIST'])) echo $this->_var['USER_GROUPS_LIST']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_REGISTERED'])) echo $this->_var['L_REGISTERED']; ?></dt>
					<dd><?php if (isset($this->_var['DATE'])) echo $this->_var['DATE']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_NBR_MSG'])) echo $this->_var['L_NBR_MSG']; ?></dt>
					<dd><?php if (isset($this->_var['USER_MSG'])) echo $this->_var['USER_MSG']; ?> <br /><a href="membermsg<?php if (isset($this->_var['U_USER_MSG'])) echo $this->_var['U_USER_MSG']; ?>"><?php if (isset($this->_var['L_DISPLAY_USER_MSG'])) echo $this->_var['L_DISPLAY_USER_MSG']; ?></a></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_LAST_CONNECT'])) echo $this->_var['L_LAST_CONNECT']; ?></dt>
					<dd><?php if (isset($this->_var['LAST_CONNECT'])) echo $this->_var['LAST_CONNECT']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_WEB_SITE'])) echo $this->_var['L_WEB_SITE']; ?></dt>
					<dd><?php if (isset($this->_var['WEB'])) echo $this->_var['WEB']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_LOCALISATION'])) echo $this->_var['L_LOCALISATION']; ?></dt>
					<dd><?php if (isset($this->_var['LOCAL'])) echo $this->_var['LOCAL']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_JOB'])) echo $this->_var['L_JOB']; ?></dt>
					<dd><?php if (isset($this->_var['OCCUPATION'])) echo $this->_var['OCCUPATION']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_HOBBIES'])) echo $this->_var['L_HOBBIES']; ?></dt>
					<dd><?php if (isset($this->_var['HOBBIES'])) echo $this->_var['HOBBIES']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_SEX'])) echo $this->_var['L_SEX']; ?></dt>
					<dd><?php if (isset($this->_var['USER_SEX'])) echo $this->_var['USER_SEX']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_AGE'])) echo $this->_var['L_AGE']; ?></dt>
					<dd><?php if (isset($this->_var['USER_AGE'])) echo $this->_var['USER_AGE']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_BIOGRAPHY'])) echo $this->_var['L_BIOGRAPHY']; ?></dt>
					<dd><div><?php if (isset($this->_var['USER_DESC'])) echo $this->_var['USER_DESC']; ?></div></dd>
				</dl>
			</fieldset>
			
			<fieldset>
				<legend><?php if (isset($this->_var['L_CONTACT'])) echo $this->_var['L_CONTACT']; ?></legend>
				<dl>
					<dt><?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?></dt>
					<dd><?php if (isset($this->_var['MAIL'])) echo $this->_var['MAIL']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_PRIVATE_MESSAGE'])) echo $this->_var['L_PRIVATE_MESSAGE']; ?></dt>
					<dd><a href="pm<?php if (isset($this->_var['U_USER_PM'])) echo $this->_var['U_USER_PM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/pm.png" alt="<?php if (isset($this->_var['L_PRIVATE_MESSAGE'])) echo $this->_var['L_PRIVATE_MESSAGE']; ?>" /></a></dd>
				</dl>
				<dl>
					<dt>MSN</dt>
					<dd><?php if (isset($this->_var['USER_MSN'])) echo $this->_var['USER_MSN']; ?></dd>
				</dl>
				<dl>
					<dt>Yahoo</dt>
					<dd><?php if (isset($this->_var['USER_YAHOO'])) echo $this->_var['USER_YAHOO']; ?></dd>
				</dl>
			</fieldset>
			
			<?php if (isset($this->_var['C_PROFIL_MISCELLANEOUS']) && $this->_var['C_PROFIL_MISCELLANEOUS']) { ?>
			<fieldset>
				<legend><?php if (isset($this->_var['L_MISCELLANEOUS'])) echo $this->_var['L_MISCELLANEOUS']; ?></legend>						
				<?php if (!isset($this->_block['miscellaneous_list']) || !is_array($this->_block['miscellaneous_list'])) $this->_block['miscellaneous_list'] = array();
foreach ($this->_block['miscellaneous_list'] as $miscellaneous_list_key => $miscellaneous_list_value) {
$_tmpb_miscellaneous_list = &$this->_block['miscellaneous_list'][$miscellaneous_list_key]; ?>
				<dl>
					<dt><?php if (isset($_tmpb_miscellaneous_list['NAME'])) echo $_tmpb_miscellaneous_list['NAME']; ?><br /><span><?php if (isset($_tmpb_miscellaneous_list['DESC'])) echo $_tmpb_miscellaneous_list['DESC']; ?></span></dt>
					<dd><?php if (isset($_tmpb_miscellaneous_list['FIELD'])) echo $_tmpb_miscellaneous_list['FIELD']; ?></dd>
				</dl>
				<?php } ?>	
			</fieldset>
			<?php } ?>
		</div>		
		<?php }echo ' ';if (isset($this->_var['C_GROUP_LIST']) && $this->_var['C_GROUP_LIST']) { ?>
		<table class="module_table" style="width:70%;">	
			<tr>
				<td style="vertical-align:top;" class="row2">
					<form action="member.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post">
						<?php if (isset($this->_var['L_SELECT_GROUP'])) echo $this->_var['L_SELECT_GROUP']; ?>: <select name="show_group" style="text-align:center;" onchange="document.location = <?php if (isset($this->_var['U_SELECT_SHOW_GROUP'])) echo $this->_var['U_SELECT_SHOW_GROUP']; ?>;">  
							<option value="0" selected="selected">-- <?php if (isset($this->_var['L_LIST'])) echo $this->_var['L_LIST']; ?> --</option>
							<?php if (!isset($this->_block['group_select']) || !is_array($this->_block['group_select'])) $this->_block['group_select'] = array();
foreach ($this->_block['group_select'] as $group_select_key => $group_select_value) {
$_tmpb_group_select = &$this->_block['group_select'][$group_select_key];echo ' ';if (isset($_tmpb_group_select['OPTION'])) echo $_tmpb_group_select['OPTION'];echo ' ';} ?>
						</select>
						&nbsp;&nbsp;<?php if (isset($_tmpb_group['ADMIN_GROUPS'])) echo $_tmpb_group['ADMIN_GROUPS']; ?>
						<noscript>
							<input type="submit" name="valid" value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" class="submit" />
						</noscript>
					</form>				
				</td>
			</tr>
		</table>	

		<br /><br />

		<table class="module_table" style="width: 70%;text-align:center;">
			<tr>
				<th colspan="3">
					<?php if (isset($this->_var['GROUP_NAME'])) echo $this->_var['GROUP_NAME']; ?>
				</th>
			</tr>
			<tr>
				<td class="row3" colspan="3" style="text-align:left;">
					<a href="member.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_BACK'])) echo $this->_var['L_BACK']; ?></a>
				</td>
			</tr>
			<tr>
				<td class="row3" style="font-weight: bold;width: 120px;">
					<?php if (isset($this->_var['L_AVATAR'])) echo $this->_var['L_AVATAR']; ?>
				</td>
				<td class="row3" style="font-weight: bold;">
					<?php if (isset($this->_var['L_LOGIN'])) echo $this->_var['L_LOGIN']; ?>
				</td>
				<td class="row3" style="font-weight: bold;">
					<?php if (isset($this->_var['L_STATUT'])) echo $this->_var['L_STATUT']; ?>
				</td>
			</tr>
			
			<?php if (!isset($this->_block['group_list']) || !is_array($this->_block['group_list'])) $this->_block['group_list'] = array();
foreach ($this->_block['group_list'] as $group_list_key => $group_list_value) {
$_tmpb_group_list = &$this->_block['group_list'][$group_list_key]; ?>
			<tr>
				<td class="row1">
					<?php if (isset($_tmpb_group_list['USER_AVATAR'])) echo $_tmpb_group_list['USER_AVATAR']; ?>
				</td>
				<td class="row1">
					<?php if (isset($_tmpb_group_list['U_USER'])) echo $_tmpb_group_list['U_USER']; ?>
				</td>
				<td class="row1">
					<?php if (isset($_tmpb_group_list['USER_RANK'])) echo $_tmpb_group_list['USER_RANK']; ?>
				</td>
			</tr>	
			<?php } ?>
		</table>
		<?php } ?>
