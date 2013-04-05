		<?php if (isset($this->_var['C_ERRORH_CONNEXION']) && $this->_var['C_ERRORH_CONNEXION']) { ?>
		<script type="text/javascript">
		<!--
		function check_connect_error(){
			if(document.getElementById('login_error').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_PSEUDO'])) echo $this->_var['L_REQUIRE_PSEUDO']; ?>");
				return false;
			}
			if(document.getElementById('password_error').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_PASSWORD'])) echo $this->_var['L_REQUIRE_PASSWORD']; ?>");
				return false;
			}
			return true;
		}
		-->
		</script>
		
		<form action="" method="post" style="margin:auto;" onsubmit="return check_connect_error();">
			<div class="module_position">					
				<div class="module_top_l"></div>		
				<div class="module_top_r"></div>
				<div class="module_top"><strong><?php if (isset($this->_var['L_CONNECT'])) echo $this->_var['L_CONNECT']; ?></strong></div>
				<div class="module_contents" style="text-align:center;">
					<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
					<span id="errorh"></span>
					<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
						<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
						<br />	
					</div>
					<br />	
					<?php } ?>
					
					<p style="margin:2px;"><label><?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?> <input size="15" type="text" class="text" id="login_error" name="login" maxlength="25" /></label></p>
					<p style="margin:2px;"><label><?php if (isset($this->_var['L_PASSWORD'])) echo $this->_var['L_PASSWORD']; ?>	<input size="15" type="password" name="password" id="password_error" class="text" maxlength="30" /></label></p>
					<p style="margin:2px;"><label><?php if (isset($this->_var['L_AUTOCONNECT'])) echo $this->_var['L_AUTOCONNECT']; ?> <input type="checkbox" name="auto" checked="checked" /></label></p>
					<p style="margin:5px;">
						<input type="submit" name="connect" value="<?php if (isset($this->_var['L_CONNECT'])) echo $this->_var['L_CONNECT']; ?>" class="submit" />
						<input type="hidden" name="token" value="<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" />
					</p>
					
					<br />
					<?php if (isset($this->_var['U_REGISTER'])) echo $this->_var['U_REGISTER']; ?>
					<a href="../member/forget.php"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/forget_mini.png" alt="" class="valign_middle" />  <?php if (isset($this->_var['L_FORGOT_PASS'])) echo $this->_var['L_FORGOT_PASS']; ?></a>	
				</div>
				<div class="module_bottom_l"></div>		
				<div class="module_bottom_r"></div>
				<div class="module_bottom"></div>
			</div>
		</form>	
		<?php }echo ' ';if (isset($this->_var['C_ERRORH']) && $this->_var['C_ERRORH']) { ?>
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top"><strong><?php if (isset($this->_var['L_ERROR'])) echo $this->_var['L_ERROR']; ?></strong></div>
			<div class="module_contents">
				<span id="errorh"></span>
				<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
					<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
				</div>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom"><strong><?php if (isset($this->_var['U_BACK'])) echo $this->_var['U_BACK']; ?></strong></div>
		</div>
		<?php } ?>
		