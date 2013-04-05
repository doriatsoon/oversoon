		<script type="text/javascript">
		<!--
		function check_form(){
			if(document.getElementById('login2').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_LOGIN'])) echo $this->_var['L_REQUIRE_LOGIN']; ?>");
				return false;
		    }
			if(document.getElementById('mail2').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_MAIL'])) echo $this->_var['L_REQUIRE_MAIL']; ?>");
				return false;
		    }
				if(document.getElementById('password2').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_PASS'])) echo $this->_var['L_REQUIRE_PASS']; ?>");
				return false;
		    }
			if(document.getElementById('level').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_RANK'])) echo $this->_var['L_REQUIRE_RANK']; ?>");
				return false;
		    }
			return true;
		}
		function check_form_search(){
			if(document.getElementById('search').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_LOGIN'])) echo $this->_var['L_REQUIRE_LOGIN']; ?>");
				return false;
		    }

			return true;
		}
		function check_msg(){
			if(document.getElementById('contents').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_TEXT'])) echo $this->_var['L_REQUIRE_TEXT']; ?>");
				return false;
		    }
			return true;
		}
		function Confirm(level) {
			ok = confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_USER'])) echo $this->_var['L_CONFIRM_DEL_USER']; ?>");
			if (ok && (level == 2)) {
				return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_ADMIN'])) echo $this->_var['L_CONFIRM_DEL_ADMIN']; ?>");
			}
			return ok;
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
			
			<span id="search"></span>
			<form action="admin_members.php#search" method="post" onsubmit="return check_form_search();" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_SEARCH_USER'])) echo $this->_var['L_SEARCH_USER']; ?></legend>
					<dl>
						<dt><label for="login_mbr">* <?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?></label><br /><span><?php if (isset($this->_var['L_JOKER'])) echo $this->_var['L_JOKER']; ?></span></dt>
						<dd>
							<div style="float:left;">
								<?php if (isset($this->_var['L_SEARCH_USER'])) echo $this->_var['L_SEARCH_USER']; ?>: <input type="text" size="20" maxlength="25" id="login" value="<?php if (isset($_tmpb_all['LOGIN'])) echo $_tmpb_all['LOGIN']; ?>" name="login_mbr" class="text" />
								<span id="search_img"></span>
							
							</div>
							<div style="float:left;margin-left:5px;">
								<input type="submit" id="search_member" name="search_member" value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" class="submit" />
								<script type="text/javascript">
								<!--								
									document.getElementById('search_member').style.display = 'none';
									document.write('<input value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" onclick="XMLHttpRequest_search_members(\'\', \'<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>\', \'admin_member\', \'<?php if (isset($this->_var['L_REQUIRE_LOGIN'])) echo $this->_var['L_REQUIRE_LOGIN']; ?>\');" type="button" class="submit">');
								-->
								</script>									
								<div id="xmlhttprequest_result_search" <?php if (isset($this->_var['C_DISPLAY_SEARCH_RESULT']) && !$this->_var['C_DISPLAY_SEARCH_RESULT']) { ?> style="display:none;" <?php } ?> class="xmlhttprequest_result_search">
									<?php if (!isset($this->_block['search']) || !is_array($this->_block['search'])) $this->_block['search'] = array();
foreach ($this->_block['search'] as $search_key => $search_value) {
$_tmpb_search = &$this->_block['search'][$search_key];echo ' ';if (isset($_tmpb_search['RESULT'])) echo $_tmpb_search['RESULT'];echo ' ';} ?>
								</div>
							</div>
						</dd>
					</dl>
				</fieldset>	
			</form>

			<table  class="module_table">
				<tr> 
					<th colspan="9">
						<?php if (isset($this->_var['L_USERS_MANAGEMENT'])) echo $this->_var['L_USERS_MANAGEMENT']; ?>
					</th>
				</tr>
				<tr style="text-align:center;">
					<td class="row1">
						<a href="admin_members.php?sort=alph&amp;mode=desc"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" /></a>
						<?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?> 
						<a href="admin_members.php?sort=alph&amp;mode=asc"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" /></a>
					</td>
					<td class="row1">
						<a href="admin_members.php?sort=rank&amp;mode=desc"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" /></a>
						<?php if (isset($this->_var['L_RANK'])) echo $this->_var['L_RANK']; ?>
						<a href="admin_members.php?sort=rank&amp;mode=asc"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" /></a>
					</td>
					<td class="row1">
						<?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?>
					</td>
					<td class="row1">
						<?php if (isset($this->_var['L_WEBSITE'])) echo $this->_var['L_WEBSITE']; ?>
					</td>
					<td class="row1">
						<a href="admin_members.php?sort=time&amp;mode=desc"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" /></a>
						<?php if (isset($this->_var['L_REGISTERED'])) echo $this->_var['L_REGISTERED']; ?>
						<a href="admin_members.php?sort=time&amp;mode=asc"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" /></a>
					</td>
					<td class="row1">
						<a href="admin_members.php?sort=aprob&amp;mode=desc"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" /></a>
						<?php if (isset($this->_var['L_APROB'])) echo $this->_var['L_APROB']; ?>
						<a href="admin_members.php?sort=aprob&amp;mode=asc"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" /></a>
					</td>
					<td class="row1">
						<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>
					</td>
					<td class="row1">
						<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>
					</td>
				</tr>
				
				<?php if (!isset($this->_block['member']) || !is_array($this->_block['member'])) $this->_block['member'] = array();
foreach ($this->_block['member'] as $member_key => $member_value) {
$_tmpb_member = &$this->_block['member'][$member_key]; ?>
				<tr style="text-align:center;"> 
					<td class="row2">
						<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/member/member.php?id=<?php if (isset($_tmpb_member['IDMBR'])) echo $_tmpb_member['IDMBR']; ?>"><?php if (isset($_tmpb_member['NAME'])) echo $_tmpb_member['NAME']; ?></a>				
					</td>
					<td class="row2"> 
						<?php if (isset($_tmpb_member['RANK'])) echo $_tmpb_member['RANK']; ?>
					</td>
					<td class="row2">
						<a href="mailto:<?php if (isset($_tmpb_member['MAIL'])) echo $_tmpb_member['MAIL']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/email.png" alt="<?php if (isset($_tmpb_member['MAIL'])) echo $_tmpb_member['MAIL']; ?>" title="<?php if (isset($_tmpb_member['MAIL'])) echo $_tmpb_member['MAIL']; ?>" /></a>
					</td>
					<td class="row2">
						<?php if (isset($_tmpb_member['WEB'])) echo $_tmpb_member['WEB']; ?>
					</td>
					<td class="row2">
						<?php if (isset($_tmpb_member['DATE'])) echo $_tmpb_member['DATE']; ?>
					</td>			
					<td class="row2">
						<?php if (isset($_tmpb_member['APROB'])) echo $_tmpb_member['APROB']; ?>
					</td>
					<td class="row2"> 
						<a href="admin_members.php?id=<?php if (isset($_tmpb_member['IDMBR'])) echo $_tmpb_member['IDMBR']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" title="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" /></a>
					</td>
					<td class="row2">
						<a href="admin_members.php?delete=1&amp;id=<?php if (isset($_tmpb_member['IDMBR'])) echo $_tmpb_member['IDMBR']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" onclick="javascript:return Confirm(<?php if (isset($_tmpb_member['LEVEL'])) echo $_tmpb_member['LEVEL']; ?>);"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" /></a>
					</td>
				</tr>
				<?php } ?>

			</table>

			<p style="text-align: center;"><?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?></p>
		</div>
