		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_QUICK_LINKS'])) echo $this->_var['L_QUICK_LINKS']; ?></li>
				<li>
					<a href="admin_alerts.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/administrator_alert.png" alt="" /></a>
					<br />
					<a href="admin_alerts.php" class="quick_link"><?php if (isset($this->_var['L_ADMINISTRATOR_ALERTS'])) echo $this->_var['L_ADMINISTRATOR_ALERTS']; ?></a>
				</li>
				<li>
					<a href="admin_members.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members.png" alt="" /></a>
					<br />
					<a href="admin_members.php" class="quick_link"><?php if (isset($this->_var['L_USERS_MANAGMENT'])) echo $this->_var['L_USERS_MANAGMENT']; ?></a>
				</li>
				<li>
					<a href="menus/menus.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus.png" alt="" /></a>
					<br />
					<a href="menus/menus.php" class="quick_link"><?php if (isset($this->_var['L_MENUS_MANAGMENT'])) echo $this->_var['L_MENUS_MANAGMENT']; ?></a>
				</li>
				<li>
					<a href="admin_modules.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules.png" alt="" /></a>
					<br />
					<a href="admin_modules.php" class="quick_link"><?php if (isset($this->_var['L_MODULES_MANAGMENT'])) echo $this->_var['L_MODULES_MANAGMENT']; ?></a>
				</li>
				<li>
					<a href="updates/updates.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/updater.png" alt="" /></a>
					<br />
					<a href="updates/updates.php" class="quick_link"><?php if (isset($this->_var['L_WEBSITE_UPDATES'])) echo $this->_var['L_WEBSITE_UPDATES']; ?></a>
				</li>
			</ul>
		</div>
		
		<div id="admin_contents">
			<div style="width:49%;float:left;">
				<table class="module_table">
					<tr> 
						<th colspan="4">
							<?php if (isset($this->_var['L_ADMIN_ALERTS'])) echo $this->_var['L_ADMIN_ALERTS']; ?>
						</th>
					</tr>
					<tr> 
						<td class="row2">
							<?php if (isset($this->_var['C_UNREAD_ALERTS']) && $this->_var['C_UNREAD_ALERTS']) { ?>
								<div class="warning">
									<?php if (isset($this->_var['L_UNREAD_ALERT'])) echo $this->_var['L_UNREAD_ALERT']; ?>
								</div>
							<?php } else { ?>
								<div class="success">
									<?php if (isset($this->_var['L_NO_UNREAD_ALERT'])) echo $this->_var['L_NO_UNREAD_ALERT']; ?>
								</div>
							<?php } ?>
							<div style="text-align:center;">
								<a href="admin_alerts.php"><?php if (isset($this->_var['L_DISPLAY_ALL_ALERTS'])) echo $this->_var['L_DISPLAY_ALL_ALERTS']; ?></a>
							</div>
						</td>
					</tr>
				</table>
				<table class="module_table">
					<tr> 
						<th colspan="4">
							<?php if (isset($this->_var['L_LAST_COMMENTS'])) echo $this->_var['L_LAST_COMMENTS']; ?>
						</th>
					</tr>
					<tr> 
						<td class="row2">
							<div style="height:140px;width:358px;overflow:auto;margin:auto;">
								<?php if (!isset($this->_block['com_list']) || !is_array($this->_block['com_list'])) $this->_block['com_list'] = array();
foreach ($this->_block['com_list'] as $com_list_key => $com_list_value) {
$_tmpb_com_list = &$this->_block['com_list'][$com_list_key]; ?>	
								<div style="margin-bottom:10px;">
									<a href="<?php if (isset($_tmpb_com_list['U_PROV'])) echo $_tmpb_com_list['U_PROV']; ?>#anchor_<?php if (isset($_tmpb_com_list['COM_SCRIPT'])) echo $_tmpb_com_list['COM_SCRIPT']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/ancre.png" alt="" /></a> <span class="text_small"><?php if (isset($this->_var['L_BY'])) echo $this->_var['L_BY'];echo ' ';if (isset($_tmpb_com_list['USER_PSEUDO'])) echo $_tmpb_com_list['USER_PSEUDO']; ?></span>
									<p class="text_small"><?php if (isset($_tmpb_com_list['CONTENTS'])) echo $_tmpb_com_list['CONTENTS']; ?></p>
								</div>	
								<?php }echo ' ';if (isset($this->_var['C_NO_COM']) && $this->_var['C_NO_COM']) { ?>
								<p style="text-align:center;margin:0px;margin-top:50px;"><em><?php if (isset($this->_var['L_NO_COMMENT'])) echo $this->_var['L_NO_COMMENT']; ?></em></p>
								<?php } ?>
							</div>
							<p style="text-align:center;margin:0;margin-top:9px;"><a class="small_link" href="admin_com.php"><?php if (isset($this->_var['L_VIEW_ALL_COMMENTS'])) echo $this->_var['L_VIEW_ALL_COMMENTS']; ?></a></p>
						</td>
					</tr>
				</table>
			</div>
			<div style="float:right;width:50%;">
				<form action="admin_index.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post">
					<table class="module_table">
						<tr> 
							<th colspan="4">
								<?php if (isset($this->_var['L_WRITING_PAD'])) echo $this->_var['L_WRITING_PAD']; ?>
							</th>
						</tr>
						<tr> 
							<td class="row2">
								<div class="block_contents">
									<textarea id="writing_pad_content" name="writing_pad_content" cols="15" rows="10" style="height:243px"><?php if (isset($this->_var['WRITING_PAD_CONTENT'])) echo $this->_var['WRITING_PAD_CONTENT']; ?></textarea> 
									<p style="text-align:center;margin:0;margin-top:8px;">
										<input type="submit" name="writingpad" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
										&nbsp;&nbsp; 
										<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
									</p>
								</div>
							</td>
						</tr>
					</table>	
				</form>
			</div>
			
			<div style="clear:right;"></div>
			
			<table class="module_table" style="margin-top:25px;margin-bottom:15px;">
				<tr> 
					<th colspan="4">
						<?php if (isset($this->_var['L_USER_ONLINE'])) echo $this->_var['L_USER_ONLINE']; ?>
					</th>
				</tr>
				<tr> 
					<td class="row1" style="text-align:center;">
						<?php if (isset($this->_var['L_USER_ONLINE'])) echo $this->_var['L_USER_ONLINE']; ?>
					</td>
					<td  class="row1" style="text-align:center;">
						<?php if (isset($this->_var['L_USER_IP'])) echo $this->_var['L_USER_IP']; ?>
					</td>
					<td  class="row1" style="text-align:center;">
						<?php if (isset($this->_var['L_LOCALISATION'])) echo $this->_var['L_LOCALISATION']; ?>
					</td>
					<td  class="row1" style="text-align:center;">
						<?php if (isset($this->_var['L_LAST_UPDATE'])) echo $this->_var['L_LAST_UPDATE']; ?>
					</td>
				</tr>				
				<?php if (!isset($this->_block['user']) || !is_array($this->_block['user'])) $this->_block['user'] = array();
foreach ($this->_block['user'] as $user_key => $user_value) {
$_tmpb_user = &$this->_block['user'][$user_key]; ?>
				<tr> 
					<td class="row2" style="text-align:center;">
						<?php if (isset($_tmpb_user['USER'])) echo $_tmpb_user['USER']; ?>
					</td>
					<td class="row2" style="text-align:center;">
						<?php if (isset($_tmpb_user['USER_IP'])) echo $_tmpb_user['USER_IP']; ?>
					</td>
					<td class="row2" style="text-align:center;">
						<?php if (isset($_tmpb_user['WHERE'])) echo $_tmpb_user['WHERE']; ?>
					</td>
					<td class="row2" style="text-align:center;">
						<?php if (isset($_tmpb_user['TIME'])) echo $_tmpb_user['TIME']; ?>
					</td>					
				</tr>
				<?php } ?>
			</table>
		</div>
			