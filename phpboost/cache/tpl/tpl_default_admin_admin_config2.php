		<script type="text/javascript">
		<!--
		function check_form_conf(){
			if(document.getElementById('server_name').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_SERV'])) echo $this->_var['L_REQUIRE_SERV']; ?>");
				return false;
		    }
			if(document.getElementById('site_name').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_NAME'])) echo $this->_var['L_REQUIRE_NAME']; ?>");
				return false;
		    }
			if(document.getElementById('site_cookie').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_COOKIE_NAME'])) echo $this->_var['L_REQUIRE_COOKIE_NAME']; ?>");
				return false;
		    }
			if(document.getElementById('site_session').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_SESSION_TIME'])) echo $this->_var['L_REQUIRE_SESSION_TIME']; ?>");
				return false;
		    }
			if(document.getElementById('site_session_invit').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_SESSION_INVIT'])) echo $this->_var['L_REQUIRE_SESSION_INVIT']; ?>");
				return false;
		    }
			return true;
		}
						
		function Confirm_unlock() {
			return confirm("<?php if (isset($this->_var['L_CONFIRM_UNLOCK_ADMIN'])) echo $this->_var['L_CONFIRM_UNLOCK_ADMIN']; ?>");
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
		
		<form action="admin_config.php?adv=1&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" onsubmit="return check_form_conf();" class="fieldset_content">
			<fieldset> 
				<legend><?php if (isset($this->_var['L_CONFIG_ADVANCED'])) echo $this->_var['L_CONFIG_ADVANCED']; ?></legend>
				<dl>
					<dt><label for="server_name">* <?php if (isset($this->_var['L_SERV_NAME'])) echo $this->_var['L_SERV_NAME']; ?></label><br /><span><?php if (isset($this->_var['L_SERV_NAME_EXPLAIN'])) echo $this->_var['L_SERV_NAME_EXPLAIN']; ?></span></dt>
					<dd><label><input type="text" maxlength="255" size="40" id="server_name" name="server_name" value="<?php if (isset($this->_var['SERVER_NAME'])) echo $this->_var['SERVER_NAME']; ?>" class="text" /></label></dd>
				</dl>
				<dl>
					<dt><label for="server_path">* <?php if (isset($this->_var['L_SERV_PATH'])) echo $this->_var['L_SERV_PATH']; ?></label><br /><span><?php if (isset($this->_var['L_SERV_PATH_EXPLAIN'])) echo $this->_var['L_SERV_PATH_EXPLAIN']; ?></span></dt>
					<dd><label><input type="text" maxlength="255" size="20" id="server_path" name="server_path" value="<?php if (isset($this->_var['SERVER_PATH'])) echo $this->_var['SERVER_PATH']; ?>" class="text" /></label></dd>
				</dl>
			</fieldset> 
			
			<fieldset>  
				<legend><?php if (isset($this->_var['L_REWRITE'])) echo $this->_var['L_REWRITE']; ?></legend> 
				<p style="text-align:left;"><?php if (isset($this->_var['L_EXPLAIN_REWRITE'])) echo $this->_var['L_EXPLAIN_REWRITE']; ?></p>		
				<br />
				<p style="text-align:center;">			
					<?php if (isset($this->_var['L_REWRITE_SERVER'])) echo $this->_var['L_REWRITE_SERVER'];echo ' ';if (isset($this->_var['CHECK_REWRITE'])) echo $this->_var['CHECK_REWRITE']; ?>
				</p>					
				<p style="text-align:center;">
					<label><input type="radio" name="rewrite_engine" value="1" <?php if (isset($this->_var['CHECKED'])) echo $this->_var['CHECKED']; ?> /> <?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?></label>
					&nbsp;&nbsp; 
					<label><input type="radio" name="rewrite_engine" value="0" <?php if (isset($this->_var['UNCHECKED'])) echo $this->_var['UNCHECKED']; ?> /> <?php if (isset($this->_var['L_UNACTIVE'])) echo $this->_var['L_UNACTIVE']; ?></label>
				</p>
			</fieldset>
			
			<fieldset>
				<legend>
					<?php if (isset($this->_var['L_HTACCESS_MANUAL_CONTENT'])) echo $this->_var['L_HTACCESS_MANUAL_CONTENT']; ?>
				</legend>
				<dl>
					<dt>
						<label for="htaccess_manual_content">
							<?php if (isset($this->_var['L_HTACCESS_MANUAL_CONTENT'])) echo $this->_var['L_HTACCESS_MANUAL_CONTENT']; ?>
						</label>
						<br /><span><?php if (isset($this->_var['L_HTACCESS_MANUAL_CONTENT_EXPLAIN'])) echo $this->_var['L_HTACCESS_MANUAL_CONTENT_EXPLAIN']; ?></span>
					</dt>
					<dd>
						<textarea name="htaccess_manual_content" rows="5" cols="5" style="font-family:'Courier new';"><?php if (isset($this->_var['HTACCESS_MANUAL_CONTENT'])) echo $this->_var['HTACCESS_MANUAL_CONTENT']; ?></textarea>
					</dd>
				</dl>
			</fieldset>
			
			<fieldset>  
				<legend><?php if (isset($this->_var['L_USER_CONNEXION'])) echo $this->_var['L_USER_CONNEXION']; ?></legend> 
				<dl>
					<dt><label for="site_cookie">* <?php if (isset($this->_var['L_COOKIE_NAME'])) echo $this->_var['L_COOKIE_NAME']; ?></label></dt>
					<dd>
						<label><input type="text" size="20" maxlength="150" id="site_cookie" name="site_cookie" value="<?php if (isset($this->_var['SITE_COOKIE'])) echo $this->_var['SITE_COOKIE']; ?>" class="text" /></label>
					</dd>
				</dl>
				<dl>
					<dt><label for="site_session">* <?php if (isset($this->_var['L_SESSION_TIME'])) echo $this->_var['L_SESSION_TIME']; ?></label><br /><span><?php if (isset($this->_var['L_SESSION_TIME_EXPLAIN'])) echo $this->_var['L_SESSION_TIME_EXPLAIN']; ?></span></dt>
					<dd><label><input type="text" size="4" id="site_session" name="site_session" value="<?php if (isset($this->_var['SITE_SESSION'])) echo $this->_var['SITE_SESSION']; ?>" class="text" /> <?php if (isset($this->_var['L_SECONDS'])) echo $this->_var['L_SECONDS']; ?></label></dd>
				</dl>
				<dl>
					<dt><label for="site_session_invit">* <?php if (isset($this->_var['L_SESSION_INVIT'])) echo $this->_var['L_SESSION_INVIT']; ?></label><br /><span><?php if (isset($this->_var['L_SESSION_INVIT_EXPLAIN'])) echo $this->_var['L_SESSION_INVIT_EXPLAIN']; ?></span></dt>
					<dd><label><input type="text" size="4" id="site_session_invit" name="site_session_invit" value="<?php if (isset($this->_var['SITE_SESSION_VISIT'])) echo $this->_var['SITE_SESSION_VISIT']; ?>" class="text" /> <?php if (isset($this->_var['L_SECONDS'])) echo $this->_var['L_SECONDS']; ?></label></dd>
				</dl>
			</fieldset>
			
			<fieldset>  
				<legend><?php if (isset($this->_var['L_MISC'])) echo $this->_var['L_MISC']; ?></legend>
				<dl>
					<dt><label for="timezone"><?php if (isset($this->_var['L_TIMEZONE_CHOOSE'])) echo $this->_var['L_TIMEZONE_CHOOSE']; ?></label><br /><span><?php if (isset($this->_var['L_TIMEZONE_CHOOSE_EXPLAIN'])) echo $this->_var['L_TIMEZONE_CHOOSE_EXPLAIN']; ?></span></dt>
					<dd>
						<label>
							<select name="timezone" id="timezone">	
								<?php if (isset($this->_var['SELECT_TIMEZONE'])) echo $this->_var['SELECT_TIMEZONE']; ?>						
							</select>
						</label>
					</dd>
				</dl>
				<dl>
					<dt><label for="ob_gzhandler"><?php if (isset($this->_var['L_ACTIV_GZHANDLER'])) echo $this->_var['L_ACTIV_GZHANDLER']; ?></label><br /><span><?php if (isset($this->_var['L_ACTIV_GZHANDLER_EXPLAIN'])) echo $this->_var['L_ACTIV_GZHANDLER_EXPLAIN']; ?></span></dt>
					<dd>
						<label><input type="radio" <?php if (isset($this->_var['GZHANDLER_ENABLED'])) echo $this->_var['GZHANDLER_ENABLED']; ?> name="ob_gzhandler" id="ob_gzhandler" value="1" <?php if (isset($this->_var['GZ_DISABLED'])) echo $this->_var['GZ_DISABLED']; ?> /> <?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?></label>
						&nbsp;&nbsp;
						<label><input type="radio" <?php if (isset($this->_var['GZHANDLER_DISABLED'])) echo $this->_var['GZHANDLER_DISABLED']; ?> name="ob_gzhandler" value="0" <?php if (isset($this->_var['GZ_DISABLED'])) echo $this->_var['GZ_DISABLED']; ?> /> <?php if (isset($this->_var['L_UNACTIVE'])) echo $this->_var['L_UNACTIVE']; ?></label>
					</dd>
				</dl>
				<dl>
					<dt><label for="sign"><?php if (isset($this->_var['L_UNLOCK_ADMIN'])) echo $this->_var['L_UNLOCK_ADMIN']; ?></label><br /><span><?php if (isset($this->_var['L_UNLOCK_ADMIN_EXPLAIN'])) echo $this->_var['L_UNLOCK_ADMIN_EXPLAIN']; ?></span></dt>
					<dd><label><a href="admin_config.php?unlock=1" onclick="javascript:return Confirm_unlock();"><?php if (isset($this->_var['L_UNLOCK_LINK'])) echo $this->_var['L_UNLOCK_LINK']; ?></a></label></dd>
				</dl>
	            <dl>
                        <dt><label for="debug"><?php if (isset($this->_var['L_DEBUG'])) echo $this->_var['L_DEBUG']; ?></label><br /><span><?php if (isset($this->_var['L_DEBUG_EXPLAIN'])) echo $this->_var['L_DEBUG_EXPLAIN']; ?></span></dt>
                        <dd>
                            <label><input type="radio" <?php if (isset($this->_var['DEBUG_ENABLED'])) echo $this->_var['DEBUG_ENABLED']; ?> name="debug" id="debug" value="1" /> <?php if (isset($this->_var['L_ACTIV'])) echo $this->_var['L_ACTIV']; ?></label>
                            &nbsp;&nbsp;
                            <label><input type="radio" <?php if (isset($this->_var['DEBUG_DISABLED'])) echo $this->_var['DEBUG_DISABLED']; ?> name="debug" value="0" /> <?php if (isset($this->_var['L_UNACTIVE'])) echo $this->_var['L_UNACTIVE']; ?></label>
                        </dd>
                    </dl>
			</fieldset> 
			
			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
				<input type="submit" name="advanced" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
				&nbsp;&nbsp; 
				<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
			</fieldset>		
		</form>	
	</div>