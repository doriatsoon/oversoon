		<script type="text/javascript">
		<!--
		function check_form_mail(){
			if(document.getElementById('mail_email').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_MAIL'])) echo $this->_var['L_REQUIRE_MAIL']; ?>");
				return false;
		    }
			if(document.getElementById('mail_contents').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_TEXT'])) echo $this->_var['L_REQUIRE_TEXT']; ?>");
				return false;
		    }
			<?php if (isset($this->_var['L_REQUIRE_VERIF_CODE'])) echo $this->_var['L_REQUIRE_VERIF_CODE']; ?>
			return true;
		}
		-->
		</script>

		<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
		<span id="errorh"></span>
		<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
			<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
			<br />	
		</div>
		<?php } ?>
				
		<form action="<?php if (isset($this->_var['U_ACTION_CONTACT'])) echo $this->_var['U_ACTION_CONTACT']; ?>" method="post" onsubmit="return check_form_mail();" class="fieldset_mini">
			<fieldset>
				<legend><?php if (isset($this->_var['L_CONTACT_MAIL'])) echo $this->_var['L_CONTACT_MAIL']; ?></legend>
				<p><?php if (isset($this->_var['L_REQUIRE'])) echo $this->_var['L_REQUIRE']; ?></p>
				<dl>
					<dt><label for="mail_email">* <?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?></label><br /><span><?php if (isset($this->_var['L_VALID_MAIL'])) echo $this->_var['L_VALID_MAIL']; ?></span></dt>
					<dd><label><input type="text" size="30" maxlength="50" id="mail_email" name="mail_email" value="<?php if (isset($this->_var['MAIL'])) echo $this->_var['MAIL']; ?>" class="text" /></label></dd>
				</dl>		
				<dl>
					<dt><label for="mail_objet"><?php if (isset($this->_var['L_OBJET'])) echo $this->_var['L_OBJET']; ?></label></dt>
					<dd><label><input type="text" size="30" name="mail_object" id="mail_object" class="text" value="<?php if (isset($this->_var['CONTACT_OBJECT'])) echo $this->_var['CONTACT_OBJECT']; ?>" /></label></dd>
				</dl>
				<?php if (isset($this->_var['C_VERIF_CODE']) && $this->_var['C_VERIF_CODE']) { ?>
				<dl>
					<dt><label for="verif_code">* <?php if (isset($this->_var['L_VERIF_CODE'])) echo $this->_var['L_VERIF_CODE']; ?></label></dt>
					<dd>
						<label>
							<?php if (isset($this->_var['VERIF_CODE'])) echo $this->_var['VERIF_CODE']; ?>
						</label>
					</dd>			
				</dl>
				<?php } ?>
				<label for="mail_contents">* <?php if (isset($this->_var['L_CONTENTS'])) echo $this->_var['L_CONTENTS']; ?></label>
				<label><textarea rows="10" cols="47" id="mail_contents" name="mail_contents"><?php if (isset($this->_var['CONTACT_CONTENTS'])) echo $this->_var['CONTACT_CONTENTS']; ?></textarea></label>
			</fieldset>
			
			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
				<input type="submit" name="mail_valid" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
				&nbsp;
				<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
				<input type="hidden" name="token" value="<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" />			
			</fieldset>
		</form>
