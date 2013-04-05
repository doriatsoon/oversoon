		<script type="text/javascript">
		<!--
		function check_form_conf(){
			if(document.getElementById('mail').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_VALID_MAIL'])) echo $this->_var['L_REQUIRE_VALID_MAIL']; ?>");
				return false;
		    }
			
			return true;
		}
		-->
		</script>

		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_CONFIG'])) echo $this->_var['L_CONFIG']; ?></li>
				<li>
					<a href="admin_config.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/configuration.png" alt="" /></a>
					<br />
					<a href="admin_config.php" class="quick_link"><?php if (isset($this->_var['L_CONFIG_MAIN'])) echo $this->_var['L_CONFIG_MAIN']; ?></a>
				</li>
				<li>
					<a href="admin_config.php?adv=1"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/configuration.png" alt="" /></a>
					<br />
					<a href="admin_config.php?adv=1" class="quick_link"><?php if (isset($this->_var['L_CONFIG_ADVANCED'])) echo $this->_var['L_CONFIG_ADVANCED']; ?></a>
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
				
			<script type="text/javascript">
			<!--	
			var array_identifier = new Array();
			<?php if (isset($this->_var['JS_LANG_IDENTIFIER'])) echo $this->_var['JS_LANG_IDENTIFIER']; ?>
			function change_img_lang(id, lang)
			{
				if( array_identifier[lang] && document.getElementById(id) ) 
					document.getElementById(id).src = '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/images/stats/countries/' + array_identifier[lang] + '.png';
			}
			-->
			</script>
				
			<form action="admin_config.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" onsubmit="return check_form_conf();" class="fieldset_content">
				<fieldset> 
					<legend><?php if (isset($this->_var['L_CONFIG_MAIN'])) echo $this->_var['L_CONFIG_MAIN']; ?></legend>
					<dl>
						<dt><label for="site_name"><?php if (isset($this->_var['L_SITE_NAME'])) echo $this->_var['L_SITE_NAME']; ?></label></dt>
						<dd><label><input type="text" size="40" maxlength="100" id="site_name" name="site_name" value="<?php if (isset($this->_var['SITE_NAME'])) echo $this->_var['SITE_NAME']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="site_desc"><?php if (isset($this->_var['L_SITE_DESC'])) echo $this->_var['L_SITE_DESC']; ?></label><br /><span><?php if (isset($this->_var['L_SITE_DESC_EXPLAIN'])) echo $this->_var['L_SITE_DESC_EXPLAIN']; ?></span></dt>
						<dd><label><textarea class="post" rows="3" cols="37" name="site_desc" id="site_desc"><?php if (isset($this->_var['SITE_DESCRIPTION'])) echo $this->_var['SITE_DESCRIPTION']; ?></textarea></label></dd>
					</dl>
					<dl>
						<dt><label for="site_keyword"><?php if (isset($this->_var['L_SITE_KEYWORDS'])) echo $this->_var['L_SITE_KEYWORDS']; ?></label><br /><span><?php if (isset($this->_var['L_SITE_KEYWORDS_EXPLAIN'])) echo $this->_var['L_SITE_KEYWORDS_EXPLAIN']; ?></span></dt>
						<dd><label><textarea class="post" rows="3" cols="37" name="site_keyword" id="site_keyword"><?php if (isset($this->_var['SITE_KEYWORD'])) echo $this->_var['SITE_KEYWORD']; ?></textarea></label></dd>
					</dl> 
					<dl>
						<dt><label for="site_lang">* <?php if (isset($this->_var['L_DEFAULT_LANGUAGES'])) echo $this->_var['L_DEFAULT_LANGUAGES']; ?></label></dt>
						<dd>
							<label><select name="lang" id="site_lang" onchange="change_img_lang('img_lang', this.options[this.selectedIndex].value)">				
							<?php if (!isset($this->_block['select_lang']) || !is_array($this->_block['select_lang'])) $this->_block['select_lang'] = array();
foreach ($this->_block['select_lang'] as $select_lang_key => $select_lang_value) {
$_tmpb_select_lang = &$this->_block['select_lang'][$select_lang_key];echo ' ';if (isset($_tmpb_select_lang['LANG'])) echo $_tmpb_select_lang['LANG'];echo ' ';} ?>				
							</select> <img id="img_lang" src="<?php if (isset($this->_var['IMG_LANG_IDENTIFIER'])) echo $this->_var['IMG_LANG_IDENTIFIER']; ?>" alt="" class="valign_middle" /></label>
						</dd>
					</dl>
					<dl>
						<dt><label for="default_theme">* <?php if (isset($this->_var['L_DEFAULT_THEME'])) echo $this->_var['L_DEFAULT_THEME']; ?></label></dt>
						<dd><label>
							<select name="theme" id="default_theme" onchange="change_img_path('img_theme', '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/' + this.options[selectedIndex].value + '/theme/images/theme.jpg');">
							<?php if (!isset($this->_block['select']) || !is_array($this->_block['select'])) $this->_block['select'] = array();
foreach ($this->_block['select'] as $select_key => $select_value) {
$_tmpb_select = &$this->_block['select'][$select_key];echo ' ';if (isset($_tmpb_select['THEME'])) echo $_tmpb_select['THEME'];echo ' ';} ?>				
							</select>
							<img id="img_theme" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME_DEFAULT'])) echo $this->_var['THEME_DEFAULT']; ?>/theme/images/theme.jpg" alt="" style="vertical-align:top" />
						</label></dd>
					</dl>
					<dl>
						<dt><label for="start_page">* <?php if (isset($this->_var['L_START_PAGE'])) echo $this->_var['L_START_PAGE']; ?></label></dt>
						<dd><label>
							<select name="start_page" id="start_page" onclick="document.getElementById('start_page2').value = '';">		
								<option value="" selected="selected" id="start_page_default">--</option>
								<?php if (isset($this->_var['SELECT_PAGE'])) echo $this->_var['SELECT_PAGE']; ?>			
							</select> 
						</label>
						<br />
						<label><?php if (isset($this->_var['L_OTHER'])) echo $this->_var['L_OTHER']; ?> 
						<input type="text" maxlength="255" size="20" id="start_page2" name="start_page2" class="text" value="<?php if (isset($this->_var['START_PAGE'])) echo $this->_var['START_PAGE']; ?>" onclick="document.getElementById('start_page_default').selected = true;" /></label>
						</dd>
					</dl>
					<dl>
						<dt><label for="count"><?php if (isset($this->_var['L_COMPT'])) echo $this->_var['L_COMPT']; ?></label></dt>
						<dd>
							<label><input type="radio" <?php if (isset($this->_var['COMPTEUR_ENABLED'])) echo $this->_var['COMPTEUR_ENABLED']; ?> name="compteur" id="count" value="1" /> <?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?></label>
							&nbsp;&nbsp;
							<label><input type="radio" <?php if (isset($this->_var['COMPTEUR_DISABLED'])) echo $this->_var['COMPTEUR_DISABLED']; ?> name="compteur" value="0" /> <?php if (isset($this->_var['L_UNACTIVE'])) echo $this->_var['L_UNACTIVE']; ?></label>
						</dd>
					</dl>
					<dl>
						<dt><label for="bench"><?php if (isset($this->_var['L_BENCH'])) echo $this->_var['L_BENCH']; ?></label><br /><span><?php if (isset($this->_var['L_BENCH_EXPLAIN'])) echo $this->_var['L_BENCH_EXPLAIN']; ?></span></dt>
						<dd>
							<label><input type="radio" <?php if (isset($this->_var['BENCH_ENABLED'])) echo $this->_var['BENCH_ENABLED']; ?> name="bench" id="bench" value="1" /> <?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?></label>
							&nbsp;&nbsp;
							<label><input type="radio" <?php if (isset($this->_var['BENCH_DISABLED'])) echo $this->_var['BENCH_DISABLED']; ?> name="bench" value="0" /> <?php if (isset($this->_var['L_UNACTIVE'])) echo $this->_var['L_UNACTIVE']; ?></label>
						</dd>
					</dl>
					<dl>
						<dt><label for="theme_author"><?php if (isset($this->_var['L_THEME_AUTHOR'])) echo $this->_var['L_THEME_AUTHOR']; ?></label><br /><span><?php if (isset($this->_var['L_THEME_AUTHOR_EXPLAIN'])) echo $this->_var['L_THEME_AUTHOR_EXPLAIN']; ?></span></dt>
						<dd>
							<label><input type="radio" <?php if (isset($this->_var['THEME_AUTHOR_ENABLED'])) echo $this->_var['THEME_AUTHOR_ENABLED']; ?> name="theme_author" id="theme_author" value="1" /> <?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?></label>
							&nbsp;&nbsp;
							<label><input type="radio" <?php if (isset($this->_var['THEME_AUTHOR_DISABLED'])) echo $this->_var['THEME_AUTHOR_DISABLED']; ?> name="theme_author" value="0" /> <?php if (isset($this->_var['L_UNACTIVE'])) echo $this->_var['L_UNACTIVE']; ?></label>
						</dd>
					</dl>
				</fieldset> 
				<fieldset>  
					<legend><?php if (isset($this->_var['L_POST_MANAGEMENT'])) echo $this->_var['L_POST_MANAGEMENT']; ?></legend> 
					<dl>
						<dt><label for="pm_max"><?php if (isset($this->_var['L_PM_MAX'])) echo $this->_var['L_PM_MAX']; ?></label><br /><span><?php if (isset($this->_var['L_PM_MAX_EXPLAIN'])) echo $this->_var['L_PM_MAX_EXPLAIN']; ?></span></dt>
						<dd><label><input type="text" size="2" name="pm_max" id="pm_max" value="<?php if (isset($this->_var['PM_MAX'])) echo $this->_var['PM_MAX']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="anti_flood"><?php if (isset($this->_var['L_ANTI_FLOOD'])) echo $this->_var['L_ANTI_FLOOD']; ?></label><br /><span><?php if (isset($this->_var['L_ANTI_FLOOD_EXPLAIN'])) echo $this->_var['L_ANTI_FLOOD_EXPLAIN']; ?></span></dt>
						<dd>
							<label><input type="radio" <?php if (isset($this->_var['FLOOD_ENABLED'])) echo $this->_var['FLOOD_ENABLED']; ?> name="anti_flood" id="anti_flood" value="1" /> <?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?>&nbsp;&nbsp;</label>
							<label><input type="radio" <?php if (isset($this->_var['FLOOD_DISABLED'])) echo $this->_var['FLOOD_DISABLED']; ?> name="anti_flood" value="0" /> <?php if (isset($this->_var['L_UNACTIVE'])) echo $this->_var['L_UNACTIVE']; ?></label>
						</dd>
					</dl>
					<dl>
						<dt><label for="delay_flood"><?php if (isset($this->_var['L_INT_FLOOD'])) echo $this->_var['L_INT_FLOOD']; ?></label><br /><span><?php if (isset($this->_var['L_INT_FLOOD_EXPLAIN'])) echo $this->_var['L_INT_FLOOD_EXPLAIN']; ?></span></dt>
						<dd><label><input type="text" size="3" maxlength="9" name="delay_flood" id="delay_flood" value="<?php if (isset($this->_var['DELAY_FLOOD'])) echo $this->_var['DELAY_FLOOD']; ?>" class="text" /> <?php if (isset($this->_var['L_SECONDS'])) echo $this->_var['L_SECONDS']; ?></label></dd>
					</dl>
				</fieldset>
				
				<fieldset>  
					<legend>
						<?php if (isset($this->_var['L_EMAIL_MANAGEMENT'])) echo $this->_var['L_EMAIL_MANAGEMENT']; ?>
					</legend>
					<dl>
						<dt><label for="mail_exp">* <?php if (isset($this->_var['L_EMAIL_ADMIN_EXP'])) echo $this->_var['L_EMAIL_ADMIN_EXP']; ?></label><br /><span><?php if (isset($this->_var['L_EMAIL_ADMIN_EXP_EXPLAIN'])) echo $this->_var['L_EMAIL_ADMIN_EXP_EXPLAIN']; ?></span></dt>
						<dd><label><input type="text" maxlength="255" size="40" id="mail_exp" name="mail_exp" value="<?php if (isset($this->_var['MAIL_EXP'])) echo $this->_var['MAIL_EXP']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="mail">* <?php if (isset($this->_var['L_EMAIL_ADMIN'])) echo $this->_var['L_EMAIL_ADMIN']; ?></label><br /><span><?php if (isset($this->_var['L_EMAIL_ADMIN_EXPLAIN'])) echo $this->_var['L_EMAIL_ADMIN_EXPLAIN']; ?></span></dt>
						<dd><label><input type="text" maxlength="255" size="40" id="mail" name="mail" value="<?php if (isset($this->_var['MAIL'])) echo $this->_var['MAIL']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="sign"><?php if (isset($this->_var['L_EMAIL_ADMIN_SIGN'])) echo $this->_var['L_EMAIL_ADMIN_SIGN']; ?></label><br /><span><?php if (isset($this->_var['L_EMAIL_ADMIN_SIGN_EXPLAIN'])) echo $this->_var['L_EMAIL_ADMIN_SIGN_EXPLAIN']; ?></span></dt>
						<dd><label><textarea class="post" rows="3" cols="37" name="sign" id="sign"><?php if (isset($this->_var['SIGN'])) echo $this->_var['SIGN']; ?></textarea></label></dd>
					</dl>
				</fieldset> 

				
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
					<input type="submit" name="valid" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
					&nbsp;&nbsp; 
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
				</fieldset>
			</form>
		</div>