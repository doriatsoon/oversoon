		<?php if (isset($this->_var['C_CONFIRM_REGISTER']) && $this->_var['C_CONFIRM_REGISTER']) { ?>
		<form action="" method="post">
			<table class="module_table">
				<tr>
					<th colspan="2">
						<?php if (isset($this->_var['L_REGISTER'])) echo $this->_var['L_REGISTER']; ?>
					</th>
				</tr>
				<tr>
					<td colspan="2" class="row3" style="text-align:center;">						
						<span class="text_strong"><?php if (isset($this->_var['L_REGISTRATION_TERMS'])) echo $this->_var['L_REGISTRATION_TERMS']; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="row2">
						<?php if (isset($this->_var['L_HAVE_TO_ACCEPT']) && $this->_var['L_HAVE_TO_ACCEPT']) { ?>
							<div class="warning" style="margin:15px auto;width:550px;"><?php if (isset($this->_var['L_HAVE_TO_ACCEPT'])) echo $this->_var['L_HAVE_TO_ACCEPT']; ?></div>
						<?php }echo ' ';if (isset($this->_var['MSG_REGISTER'])) echo $this->_var['MSG_REGISTER']; ?>
					</td>
				</tr>
				<tr>
					<td class="row3" style="text-align:center;">
						<label><input type="checkbox" name="confirm" value="true" /> <?php if (isset($this->_var['L_ACCEPT'])) echo $this->_var['L_ACCEPT']; ?></label>
					</td>	
				</tr>	
			</table>
			<br /><br />
			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
				<input type="submit" name="register_valid" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
			</fieldset>
		</form>
		<?php }echo ' ';if (isset($this->_var['C_ACTIVATION_REGISTER']) && $this->_var['C_ACTIVATION_REGISTER']) { ?>
		<form action="" method="post">
		<table class="module_table">
			<tr>
				<th colspan="2">
					<?php if (isset($this->_var['L_REGISTER'])) echo $this->_var['L_REGISTER']; ?>
				</th>
			</tr>
			<tr>
				<td colspan="2" class="row3" style="text-align:center;">
					<br /><br />
					<span class="text_strong"><?php if (isset($this->_var['L_ACTIVATION_REPORT'])) echo $this->_var['L_ACTIVATION_REPORT']; ?></span>
					<br /><br /><br />
				</td>
			</tr>
			<tr>
				<td colspan="2" style="border: solid 1px black;" class="news_bottom">
					&nbsp;
				</td>
			</tr>
		</table>
		</form>
		<?php }echo ' ';if (isset($this->_var['C_REGISTER']) && $this->_var['C_REGISTER']) { ?>
		<script type="text/javascript">
		<!--
		function check_form()
		{
			if(document.getElementById('mail').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_MAIL'])) echo $this->_var['L_REQUIRE_MAIL']; ?>");
				return false;
		    }
			if(document.getElementById('log').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_PSEUDO'])) echo $this->_var['L_REQUIRE_PSEUDO']; ?>");
				return false;
		    }
			if(document.getElementById('pass').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_PASSWORD'])) echo $this->_var['L_REQUIRE_PASSWORD']; ?>");
				return false;
		    }
			if( document.getElementById('pass_bis').value == "" ) {
				alert("<?php if (isset($this->_var['L_REQUIRE_PASSWORD'])) echo $this->_var['L_REQUIRE_PASSWORD']; ?>");
				return false;
		    }
			<?php if (isset($this->_var['L_REQUIRE_VERIF_CODE'])) echo $this->_var['L_REQUIRE_VERIF_CODE'];echo ' ';if (!isset($this->_block['miscellaneous_js_list']) || !is_array($this->_block['miscellaneous_js_list'])) $this->_block['miscellaneous_js_list'] = array();
foreach ($this->_block['miscellaneous_js_list'] as $miscellaneous_js_list_key => $miscellaneous_js_list_value) {
$_tmpb_miscellaneous_js_list = &$this->_block['miscellaneous_js_list'][$miscellaneous_js_list_key]; ?>
			if(document.getElementById('<?php if (isset($_tmpb_miscellaneous_js_list['ID'])) echo $_tmpb_miscellaneous_js_list['ID']; ?>') && document.getElementById('<?php if (isset($_tmpb_miscellaneous_js_list['ID'])) echo $_tmpb_miscellaneous_js_list['ID']; ?>').value == "") {
				alert("<?php if (isset($_tmpb_miscellaneous_js_list['L_REQUIRED'])) echo $_tmpb_miscellaneous_js_list['L_REQUIRED']; ?>");
				return false;
			}
			<?php } ?>	
			
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
			if (array_identifier[lang] && document.getElementById(id)) 
				document.getElementById(id).src = '../images/stats/countries/' + array_identifier[lang] + '.png';
		}
		
		function XMLHttpRequest_register_login(value)
		{
			document.getElementById('msg_login').innerHTML = '<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" />';
			data = "login=" + value;
			var xhr_object = xmlhttprequest_init('<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/member/register_xmlhttprequest.php');
			xhr_object.onreadystatechange = function() 
			{
				if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText == '1' )
				{
					document.getElementById('msg_login').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forbidden_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_login_div').innerHTML = "<?php if (isset($this->_var['L_PSEUDO_AUTH'])) echo $this->_var['L_PSEUDO_AUTH']; ?>";
				}
				else if( xhr_object.readyState == 4 )
				{
					document.getElementById('msg_login').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/processed_mini.png" alt="" class="valign_middle" />';
					document.getElementById('msg_login_div').innerHTML = '';
				}
			}
			xmlhttprequest_sender(xhr_object, data);
		}
		function check_login(value) 
		{
			if (value.length<3)			
			{	
				document.getElementById('msg_login').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forbidden_mini.png" alt="" class="valign_middle" />';
				document.getElementById('msg_login_div').innerHTML = "<?php if (isset($this->_var['L_PSEUDO_HOW'])) echo $this->_var['L_PSEUDO_HOW']; ?>";
			}
			else	
				XMLHttpRequest_register_login(value);
		}
		
		function XMLHttpRequest_register_mail(value)
		{
			document.getElementById('msg_email').innerHTML = '<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" />';
			data = "mail=" + value;
			var xhr_object = xmlhttprequest_init('<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/member/register_xmlhttprequest.php');
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
		<form action="../member/register_valid.php" enctype="multipart/form-data" method="post" onsubmit="return check_form();" class="fieldset_content">
			<fieldset>
				<legend><?php if (isset($this->_var['L_REGISTER'])) echo $this->_var['L_REGISTER']; ?></legend>
				<p>
					<?php if (isset($this->_var['L_REQUIRE'])) echo $this->_var['L_REQUIRE'];echo ' ';if (!isset($this->_block['activ_mbr']) || !is_array($this->_block['activ_mbr'])) $this->_block['activ_mbr'] = array();
foreach ($this->_block['activ_mbr'] as $activ_mbr_key => $activ_mbr_value) {
$_tmpb_activ_mbr = &$this->_block['activ_mbr'][$activ_mbr_key]; ?>
					<br />
					<strong><?php if (isset($_tmpb_activ_mbr['L_ACTIV_MBR'])) echo $_tmpb_activ_mbr['L_ACTIV_MBR']; ?></strong>
					<?php } ?>
				</p>
				
				<dl>
					<dt><label for="log">* <?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?></label><br /><span><?php if (isset($this->_var['L_PSEUDO_HOW'])) echo $this->_var['L_PSEUDO_HOW']; ?></span></dt>
					<dd><label><input size="25" type="text" class="text" name="log" id="log" maxlength="25" onblur="check_login(this.value);" /> &nbsp;<span id="msg_login"></span><div style="font-weight:bold" id="msg_login_div"></div></label></dd>			
				</dl>
				<dl>
					<dt><label for="mail">* <?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?></label><br /><span><?php if (isset($this->_var['L_VALID'])) echo $this->_var['L_VALID']; ?></span></dt>
					<dd><label><input size="30" type="text" class="text" name="mail" id="mail" maxlength="50" onblur="check_email(this.value);" /> &nbsp;<span id="msg_email"></span><div style="font-weight:bold" id="msg_email_div"></div></label></dd>			
				</dl>
				<dl>
					<dt><label for="pass">* <?php if (isset($this->_var['L_PASSWORD'])) echo $this->_var['L_PASSWORD']; ?></label><br /><span><?php if (isset($this->_var['L_PASSWORD_HOW'])) echo $this->_var['L_PASSWORD_HOW']; ?></span></dt>
					<dd><label><input size="30" type="password" class="text" name="pass" id="pass" maxlength="30" onblur="check_password(this.value);" /> &nbsp;<span id="msg_password1"></span><div style="font-weight:bold" id="msg_password1_div"></div></label></dd>			
				</dl>
				<dl>
					<dt><label for="pass_bis">* <?php if (isset($this->_var['L_CONFIRM_PASSWORD'])) echo $this->_var['L_CONFIRM_PASSWORD']; ?></label></dt>
					<dd><label><input size="30" type="password" class="text" name="pass_bis" id="pass_bis" maxlength="30" onblur="check_password2(this.value);" /> &nbsp;<span id="msg_password2"></span><div style="font-weight:bold" id="msg_password2_div"></div></label></dd>			
				</dl>
				<?php if (isset($this->_var['C_VERIF_CODE']) && $this->_var['C_VERIF_CODE']) { ?>
				<dl>
					<dt><label for="verif_code">* <?php if (isset($this->_var['L_VERIF_CODE'])) echo $this->_var['L_VERIF_CODE']; ?></label><br /><span><?php if (isset($this->_var['L_VERIF_CODE_EXPLAIN'])) echo $this->_var['L_VERIF_CODE_EXPLAIN']; ?></span></dt>
					<dd>
						<label>
							<?php if (isset($this->_var['VERIF_CODE'])) echo $this->_var['VERIF_CODE']; ?>
						</label>
					</dd>			
				</dl>
				<?php } ?>
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
							</select>
							&nbsp;<img id="img_lang" src="<?php if (isset($this->_var['IMG_LANG_IDENTIFIER'])) echo $this->_var['IMG_LANG_IDENTIFIER']; ?>" alt="" class="valign_middle" />
						</label>
					</dd>			
				</dl>
			</fieldset>
				
			<fieldset>
				<legend><?php if (isset($this->_var['L_OPTIONS'])) echo $this->_var['L_OPTIONS']; ?></legend>					
				<dl>
					<dt><label for="user_theme"><?php if (isset($this->_var['L_THEME_CHOOSE'])) echo $this->_var['L_THEME_CHOOSE']; ?></label></dt>
					<dd>
						<label>
							<select name="user_theme" id="user_theme" onchange="change_img_theme('img_theme', this.options[selectedIndex].value)">			
								<?php if (!isset($this->_block['select_theme']) || !is_array($this->_block['select_theme'])) $this->_block['select_theme'] = array();
foreach ($this->_block['select_theme'] as $select_theme_key => $select_theme_value) {
$_tmpb_select_theme = &$this->_block['select_theme'][$select_theme_key]; ?>
									<option value="<?php if (isset($_tmpb_select_theme['IDNAME'])) echo $_tmpb_select_theme['IDNAME']; ?>"<?php if (isset($_tmpb_select_theme['SELECTED'])) echo $_tmpb_select_theme['SELECTED']; ?>><?php if (isset($_tmpb_select_theme['NAME'])) echo $_tmpb_select_theme['NAME']; ?></option>
								<?php } ?>
							</select>
							<img id="img_theme" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/images/theme.jpg" alt="" style="vertical-align:top" />
						</label>
					</dd>			
				</dl>
				<dl>
					<dt><label for="user_editor"><?php if (isset($this->_var['L_EDITOR_CHOOSE'])) echo $this->_var['L_EDITOR_CHOOSE']; ?></label></dt>
					<dd>
						<label>
							<select name="user_editor" id="user_editor">	
								<?php if (isset($this->_var['SELECT_EDITORS'])) echo $this->_var['SELECT_EDITORS']; ?>						
							</select>
						</label>
					</dd>			
				</dl>
				<dl>
					<dt><label for="user_timezone"><?php if (isset($this->_var['L_TIMEZONE_CHOOSE'])) echo $this->_var['L_TIMEZONE_CHOOSE']; ?></label><br /><span><?php if (isset($this->_var['L_TIMEZONE_CHOOSE_EXPLAIN'])) echo $this->_var['L_TIMEZONE_CHOOSE_EXPLAIN']; ?></span></dt>
					<dd>
						<label>
							<select name="user_timezone" id="user_timezone">	
								<?php if (isset($this->_var['SELECT_TIMEZONE'])) echo $this->_var['SELECT_TIMEZONE']; ?>						
							</select>
						</label>
					</dd>			
				</dl>
				<dl>
					<dt><label for="user_show_mail"><?php if (isset($this->_var['L_HIDE_MAIL'])) echo $this->_var['L_HIDE_MAIL']; ?></label></dt>
					<dd><label><input type="checkbox" class="text" name="user_show_mail" id="user_show_mail" checked="checked" /></label></dd>			
				</dl>
			</fieldset>	

			<fieldset>
				<legend><?php if (isset($this->_var['L_INFO'])) echo $this->_var['L_INFO']; ?></legend>			
				<dl>
					<dt><label for="user_web"><?php if (isset($this->_var['L_WEB_SITE'])) echo $this->_var['L_WEB_SITE']; ?></label><br /><span><?php if (isset($this->_var['L_VALID'])) echo $this->_var['L_VALID']; ?></span></dt>
					<dd><label><input size="30" type="text" class="text" name="user_web" id="user_web" maxlength="70" /></label></dd>			
				</dl>
				<dl>
					<dt><label for="user_local"><?php if (isset($this->_var['L_LOCALISATION'])) echo $this->_var['L_LOCALISATION']; ?></label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_local" id="user_local" maxlength="25" /></label></dd>			
				</dl>
				<dl>
					<dt><label for="user_occupation"><?php if (isset($this->_var['L_JOB'])) echo $this->_var['L_JOB']; ?></label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_occupation" id="user_occupation" maxlength="50" /></label></dd>			
				</dl>
				<dl>
					<dt><label for="user_hobbies"><?php if (isset($this->_var['L_HOBBIES'])) echo $this->_var['L_HOBBIES']; ?></label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_hobbies" id="user_hobbies" maxlength="50" /></label></dd>			
				</dl>
				<dl>
					<dt><label for="user_sex"><?php if (isset($this->_var['L_SEX'])) echo $this->_var['L_SEX']; ?></label></dt>
					<dd><label>
						<select name="user_sex" id="user_sex" onchange="img_sex(this.options[selectedIndex].value)">
							<option selected="seleted" value="0">--</option>
							<option value="1"><?php if (isset($this->_var['L_MALE'])) echo $this->_var['L_MALE']; ?></option>
							<option value="2"><?php if (isset($this->_var['L_FEMALE'])) echo $this->_var['L_FEMALE']; ?></option>
						</select>
						<span id="img_sex"></span>
					</label></dd>			
				</dl>
				<dl class="overflow_visible">
					<dt><label for="user_born"><?php if (isset($this->_var['L_DATE_OF_BIRTH'])) echo $this->_var['L_DATE_OF_BIRTH']; ?></label><br /><span><?php if (isset($this->_var['L_VALID'])) echo $this->_var['L_VALID']; ?></span></dt>
					<dd><label>
						<input size="10" maxlength="10" type="text" class="text" id="user_born" name="user_born" /> 
						
						<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar1">
							<div id="calendar" class="calendar_block" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);"></div>
						</div>
						<a onclick="xmlhttprequest_calendar('calendar', '?input_field=user_born&amp;field=calendar&amp;lyear=1');display_calendar(1);" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgcalendar" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
					</label></dd>			
				</dl>
				<dl>
					<dt><label for="user_sign"><?php if (isset($this->_var['L_SIGN'])) echo $this->_var['L_SIGN']; ?></label><br /><span><?php if (isset($this->_var['L_SIGN_WHERE'])) echo $this->_var['L_SIGN_WHERE']; ?></span></dt>
					<dd><label><textarea class="post" rows="4" cols="27" name="user_sign" id="user_sign"></textarea> </label></dd>			
				</dl>
			</fieldset>
			
			<fieldset>
				<legend><?php if (isset($this->_var['L_CONTACT'])) echo $this->_var['L_CONTACT']; ?></legend>			
				<dl>
					<dt><label for="user_msn">MSN</label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_msn" id="user_msn" maxlength="50" /></label></dd>			
				</dl>
				<dl>
					<dt><label for="user_yahoo">Yahoo</label></dt>
					<dd><label><input size="30" type="text" class="text" name="user_yahoo" id="user_yahoo" maxlength="50" /></label></dd>			
				</dl>			
			</fieldset>
			
			<fieldset>
				<legend><?php if (isset($this->_var['L_AVATAR_MANAGEMENT'])) echo $this->_var['L_AVATAR_MANAGEMENT']; ?></legend>		
				<?php if (!isset($this->_block['upload_avatar']) || !is_array($this->_block['upload_avatar'])) $this->_block['upload_avatar'] = array();
foreach ($this->_block['upload_avatar'] as $upload_avatar_key => $upload_avatar_value) {
$_tmpb_upload_avatar = &$this->_block['upload_avatar'][$upload_avatar_key]; ?>
				<dl>
					<dt><label for="avatars"><?php if (isset($this->_var['L_UPLOAD_AVATAR'])) echo $this->_var['L_UPLOAD_AVATAR']; ?></label><br /><span><?php if (isset($this->_var['L_UPLOAD_AVATAR_WHERE'])) echo $this->_var['L_UPLOAD_AVATAR_WHERE']; ?></span></dt>
					<dd><label>
						<input type="file" name="avatars" id="avatars" size="30" class="text" />					
						<input type="hidden" name="max_file_size" value="2000000" />
						<br />
						<?php if (isset($this->_var['L_WEIGHT_MAX'])) echo $this->_var['L_WEIGHT_MAX']; ?>: <?php if (isset($_tmpb_upload_avatar['WEIGHT_MAX'])) echo $_tmpb_upload_avatar['WEIGHT_MAX']; ?> ko
						<br />
						<?php if (isset($this->_var['L_HEIGHT_MAX'])) echo $this->_var['L_HEIGHT_MAX']; ?>: <?php if (isset($_tmpb_upload_avatar['HEIGHT_MAX'])) echo $_tmpb_upload_avatar['HEIGHT_MAX']; ?> pixels
						<br />
						<?php if (isset($this->_var['L_WIDTH_MAX'])) echo $this->_var['L_WIDTH_MAX']; ?>: <?php if (isset($_tmpb_upload_avatar['WIDTH_MAX'])) echo $_tmpb_upload_avatar['WIDTH_MAX']; ?> pixels
					</label></dd>			
				</dl>
				<?php } ?>		
				<dl>
					<dt><label for="user_avatar"><?php if (isset($this->_var['L_AVATAR_LINK'])) echo $this->_var['L_AVATAR_LINK']; ?></label><br /><span><?php if (isset($this->_var['L_AVATAR_LINK_WHERE'])) echo $this->_var['L_AVATAR_LINK_WHERE']; ?></span></dt>
					<dd><label><input type="text" name="user_avatar" id="user_avatar" size="30" /></label></dd>			
				</dl>
			</fieldset>

			<?php if (!isset($this->_block['miscellaneous']) || !is_array($this->_block['miscellaneous'])) $this->_block['miscellaneous'] = array();
foreach ($this->_block['miscellaneous'] as $miscellaneous_key => $miscellaneous_value) {
$_tmpb_miscellaneous = &$this->_block['miscellaneous'][$miscellaneous_key]; ?>
			<fieldset>
				<legend><?php if (isset($this->_var['L_MISCELLANEOUS'])) echo $this->_var['L_MISCELLANEOUS']; ?></legend>	
					
				<?php if (!isset($_tmpb_miscellaneous['list']) || !is_array($_tmpb_miscellaneous['list'])) $_tmpb_miscellaneous['list'] = array();
foreach ($_tmpb_miscellaneous['list'] as $list_key => $list_value) {
$_tmpb_list = &$_tmpb_miscellaneous['list'][$list_key]; ?>
				<dl>
					<dt><label for="<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>"><?php if (isset($_tmpb_list['NAME'])) echo $_tmpb_list['NAME']; ?></label><br /><span><?php if (isset($_tmpb_list['DESC'])) echo $_tmpb_list['DESC']; ?></span></dt>
					<dd><?php if (isset($_tmpb_list['FIELD'])) echo $_tmpb_list['FIELD']; ?></dd>
				</dl>
				<?php } ?>	
			</fieldset>
			<?php } ?>	

			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
				<input type="submit" name="valid" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />	
			</fieldset>
		</form>
		<?php } ?>
		