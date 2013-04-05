		<script type="text/javascript">
		<!--
		function check_form_or(){
			<?php if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) { ?>
				tinyMCE.triggerSave();
			<?php } ?>
			
			if(document.getElementById('guestbook_contents').value == "") {
				alert("<?php if (isset($this->_var['L_ALERT_TEXT'])) echo $this->_var['L_ALERT_TEXT']; ?>");
				return false;
		    }
			return true;
		}

		function Confirm() {
		return confirm("<?php if (isset($this->_var['L_DELETE_MSG'])) echo $this->_var['L_DELETE_MSG']; ?>");
		}
		
		-->
		</script>

		<form action="guestbook.php<?php if (isset($this->_var['UPDATE'])) echo $this->_var['UPDATE']; ?>" method="post" onsubmit="return check_form_or();" class="fieldset_mini">
			<fieldset>
				<legend><?php if (isset($this->_var['L_ADD_MSG'])) echo $this->_var['L_ADD_MSG'];if (isset($this->_var['L_UPDATE_MSG'])) echo $this->_var['L_UPDATE_MSG']; ?></legend>
				<p><?php if (isset($this->_var['L_REQUIRE'])) echo $this->_var['L_REQUIRE']; ?></p>
				
				<?php if (isset($this->_var['C_VISIBLE_GUESTBOOK']) && $this->_var['C_VISIBLE_GUESTBOOK']) { ?>
				<dl>
					<dt><label for="guestbook_pseudo">* <?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?></label></dt>
					<dd><label><input type="text" size="25" maxlength="25" name="guestbook_pseudo" id="guestbook_pseudo" value="<?php if (isset($this->_var['PSEUDO'])) echo $this->_var['PSEUDO']; ?>" class="text" /></label></dd>
				</dl>
				<?php }echo ' ';if (isset($this->_var['C_VERIF_CODE']) && $this->_var['C_VERIF_CODE']) { ?>
				<dl>
					<dt><label for="verif_code">* <?php if (isset($this->_var['L_VERIF_CODE'])) echo $this->_var['L_VERIF_CODE']; ?></label></dt>
					<dd>
						<label>
							<?php if (isset($this->_var['VERIF_CODE'])) echo $this->_var['VERIF_CODE']; ?>
						</label>
					</dd>			
				</dl>
				<?php } ?>
				
				<label for="guestbook_contents">* <?php if (isset($this->_var['L_MESSAGE'])) echo $this->_var['L_MESSAGE']; ?></label>
				<div class="fieldset_mini"><?php if (isset($this->_var['KERNEL_EDITOR'])) echo $this->_var['KERNEL_EDITOR']; ?></div>
				<label><textarea rows="10" cols="47" id="guestbook_contents" name="guestbook_contents"><?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?></textarea></label>
			</fieldset>
			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
				<?php if (isset($this->_var['C_HIDDEN_GUESTBOOK']) && $this->_var['C_HIDDEN_GUESTBOOK']) { ?>
					<input type="hidden" size="25" maxlength="25" name="guestbook_pseudo" value="<?php if (isset($this->_var['PSEUDO'])) echo $this->_var['PSEUDO']; ?>" class="text" />
				<?php } ?>
				
				<input type="hidden" name="guestbook_contents_ftags" id="guestbook_contents_ftags" value="<?php if (isset($this->_var['FORBIDDEN_TAGS'])) echo $this->_var['FORBIDDEN_TAGS']; ?>" />
				<input type="submit" name="guestbook" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
				
				<input value="<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>" type="submit" name="previs" id="previs_guestbook" class="submit" />
				<script type="text/javascript">
				<!--				
				document.getElementById('previs_guestbook').style.display = 'none';
				document.write('<input value="<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>" onclick="XMLHttpRequest_preview();" type="button" class="submit" />');
				-->
				</script>
				
				<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />			
			</fieldset>	
		</form>

		<br />
		<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
		<span id="errorh"></span>
		<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
			<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
			<br />	
		</div>
		<br />		
		<?php } ?>
		
		<div class="msg_position">
			<div class="msg_top_l"></div>			
			<div class="msg_top_r"></div>
			<div class="msg_top" style="text-align:center;"><?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>&nbsp;</div>	
		</div>
		<?php if (!isset($this->_block['guestbook']) || !is_array($this->_block['guestbook'])) $this->_block['guestbook'] = array();
foreach ($this->_block['guestbook'] as $guestbook_key => $guestbook_value) {
$_tmpb_guestbook = &$this->_block['guestbook'][$guestbook_key]; ?>
		<div class="msg_position">
			<div class="msg_container<?php if (isset($_tmpb_guestbook['CLASS_COLOR'])) echo $_tmpb_guestbook['CLASS_COLOR']; ?>">
				<span id="m<?php if (isset($_tmpb_guestbook['ID'])) echo $_tmpb_guestbook['ID']; ?>"></span>
				<div class="msg_top_row">
					<div class="msg_pseudo_mbr">
						<?php if (isset($_tmpb_guestbook['USER_ONLINE'])) echo $_tmpb_guestbook['USER_ONLINE'];echo ' ';if (isset($_tmpb_guestbook['USER_PSEUDO'])) echo $_tmpb_guestbook['USER_PSEUDO']; ?>
					</div>
					<div style="float:left;">&nbsp;&nbsp;<a href="<?php if (isset($_tmpb_guestbook['U_ANCHOR'])) echo $_tmpb_guestbook['U_ANCHOR']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/ancre.png" alt="<?php if (isset($_tmpb_guestbook['ID'])) echo $_tmpb_guestbook['ID']; ?>" /></a> <?php if (isset($_tmpb_guestbook['DATE'])) echo $_tmpb_guestbook['DATE']; ?></div>
					<div style="float:right;"><?php if (isset($_tmpb_guestbook['EDIT'])) echo $_tmpb_guestbook['EDIT'];if (isset($_tmpb_guestbook['DEL'])) echo $_tmpb_guestbook['DEL']; ?>&nbsp;&nbsp;</div>
				</div>
				<div class="msg_contents_container">
					<div class="msg_info_mbr">
						<p style="text-align:center;"><?php if (isset($_tmpb_guestbook['USER_RANK'])) echo $_tmpb_guestbook['USER_RANK']; ?></p>
						<p style="text-align:center;"><?php if (isset($_tmpb_guestbook['USER_IMG_ASSOC'])) echo $_tmpb_guestbook['USER_IMG_ASSOC']; ?></p>
						<p style="text-align:center;"><?php if (isset($_tmpb_guestbook['USER_AVATAR'])) echo $_tmpb_guestbook['USER_AVATAR']; ?></p>
						<p style="text-align:center;"><?php if (isset($_tmpb_guestbook['USER_GROUP'])) echo $_tmpb_guestbook['USER_GROUP']; ?></p>
						<?php if (isset($_tmpb_guestbook['USER_SEX'])) echo $_tmpb_guestbook['USER_SEX'];echo ' ';if (isset($_tmpb_guestbook['USER_DATE'])) echo $_tmpb_guestbook['USER_DATE']; ?><br />
						<?php if (isset($_tmpb_guestbook['USER_MSG'])) echo $_tmpb_guestbook['USER_MSG']; ?><br />
						<?php if (isset($_tmpb_guestbook['USER_LOCAL'])) echo $_tmpb_guestbook['USER_LOCAL']; ?>
					</div>
					<div class="msg_contents<?php if (isset($_tmpb_guestbook['CLASS_COLOR'])) echo $_tmpb_guestbook['CLASS_COLOR']; ?>">
						<div class="msg_contents_overflow">
							<?php if (isset($_tmpb_guestbook['CONTENTS'])) echo $_tmpb_guestbook['CONTENTS']; ?>
						</div>
					</div>
				</div>
			</div>	
			<div class="msg_sign<?php if (isset($_tmpb_guestbook['CLASS_COLOR'])) echo $_tmpb_guestbook['CLASS_COLOR']; ?>">				
				<div class="msg_sign_overflow">
					<?php if (isset($_tmpb_guestbook['USER_SIGN'])) echo $_tmpb_guestbook['USER_SIGN']; ?>	
				</div>				
				<hr />
				<div style="float:left;">
					<?php if (isset($_tmpb_guestbook['U_USER_PM'])) echo $_tmpb_guestbook['U_USER_PM'];echo ' ';if (isset($_tmpb_guestbook['USER_MAIL'])) echo $_tmpb_guestbook['USER_MAIL'];echo ' ';if (isset($_tmpb_guestbook['USER_MSN'])) echo $_tmpb_guestbook['USER_MSN'];echo ' ';if (isset($_tmpb_guestbook['USER_YAHOO'])) echo $_tmpb_guestbook['USER_YAHOO'];echo ' ';if (isset($_tmpb_guestbook['USER_WEB'])) echo $_tmpb_guestbook['USER_WEB']; ?>
				</div>
				<div style="float:right;font-size:10px;">
					<?php if (isset($_tmpb_guestbook['WARNING'])) echo $_tmpb_guestbook['WARNING'];echo ' ';if (isset($_tmpb_guestbook['PUNISHMENT'])) echo $_tmpb_guestbook['PUNISHMENT']; ?>
				</div>&nbsp;
			</div>	
		</div>				
		<?php } ?>		
		<div class="msg_position">		
			<div class="msg_bottom_l"></div>		
			<div class="msg_bottom_r"></div>
			<div class="msg_bottom" style="text-align:center;"><?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>&nbsp;</div>
		</div>
		