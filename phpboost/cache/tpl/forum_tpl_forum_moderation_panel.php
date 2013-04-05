		<?php $this->_include('forum_top'); ?>
		
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">&bull; <a href="index.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['FORUM_NAME'])) echo $this->_var['FORUM_NAME']; ?></a> &raquo; <a href="moderation_forum.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_MODERATION_FORUM'])) echo $this->_var['L_MODERATION_FORUM']; ?></a> <?php if (isset($this->_var['U_MODERATION_FORUM_ACTION'])) echo $this->_var['U_MODERATION_FORUM_ACTION']; ?></div>
			<div class="module_contents">
				<table class="module_table">
					<tr>							
						<td style="text-align:center;" class="row2">
							<a href="moderation_forum.php?action=warning" title="<?php if (isset($this->_var['L_USERS_WARNING'])) echo $this->_var['L_USERS_WARNING']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/notice.png" alt="<?php if (isset($this->_var['L_USERS_WARNING'])) echo $this->_var['L_USERS_WARNING']; ?>" /><br /><?php if (isset($this->_var['L_USERS_WARNING'])) echo $this->_var['L_USERS_WARNING']; ?></a>
						</td>
						<td style="text-align:center;" class="row2">
							<a href="moderation_forum.php?action=punish" title="<?php if (isset($this->_var['L_USERS_PUNISHMENT'])) echo $this->_var['L_USERS_PUNISHMENT']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stop.png" alt="<?php if (isset($this->_var['L_USERS_PUNISHMENT'])) echo $this->_var['L_USERS_PUNISHMENT']; ?>" /><br /><?php if (isset($this->_var['L_USERS_PUNISHMENT'])) echo $this->_var['L_USERS_PUNISHMENT']; ?></a>
						</td>
						<td style="text-align:center;" class="row2">
							<a href="moderation_forum.php?action=alert" title="<?php if (isset($this->_var['L_ALERT_MANAGEMENT'])) echo $this->_var['L_ALERT_MANAGEMENT']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/important.png" alt="<?php if (isset($this->_var['L_ALERT_MANAGEMENT'])) echo $this->_var['L_ALERT_MANAGEMENT']; ?>" /><br /><?php if (isset($this->_var['L_ALERT_MANAGEMENT'])) echo $this->_var['L_ALERT_MANAGEMENT']; ?></a>
						</td>
					</tr>
				</table>				
				<br /><br />
				
				
				<?php if (isset($this->_var['C_FORUM_MODO_MAIN']) && $this->_var['C_FORUM_MODO_MAIN']) { ?>
				<script type="text/javascript">
				<!--

				function Confirm_history()
				{
					return confirm("<?php if (isset($this->_var['L_DEL_HISTORY'])) echo $this->_var['L_DEL_HISTORY']; ?>");
				}
				-->
				</script>
				<form action="moderation_forum<?php if (isset($this->_var['U_ACTION_HISTORY'])) echo $this->_var['U_ACTION_HISTORY']; ?>" method="post" onsubmit="javascript:return Confirm_history();">					
					<table class="module_table">	
						<tr>
							<th colspan="4">
								<?php if (isset($this->_var['L_HISTORY'])) echo $this->_var['L_HISTORY']; ?>
							</th>
						</tr>
						<tr style="text-align:center;font-weight: bold;width: 150px">
							<td class="row3">
								<?php if (isset($this->_var['L_MODO'])) echo $this->_var['L_MODO']; ?>
							</td>
							<td class="row3">
								<?php if (isset($this->_var['L_ACTION'])) echo $this->_var['L_ACTION']; ?>
							</td>
							<td class="row3">
								<?php if (isset($this->_var['L_USER_CONCERN'])) echo $this->_var['L_USER_CONCERN']; ?>
							</td>
							<td class="row3" style="width: 150px">
								<?php if (isset($this->_var['L_DATE'])) echo $this->_var['L_DATE']; ?>
							</td>
						</tr>
						
						<?php if (!isset($this->_block['action_list']) || !is_array($this->_block['action_list'])) $this->_block['action_list'] = array();
foreach ($this->_block['action_list'] as $action_list_key => $action_list_value) {
$_tmpb_action_list = &$this->_block['action_list'][$action_list_key]; ?> 
						<tr style="text-align:center;">
							<td class="row2" style="width: 150px">
								<a href="../member/member<?php if (isset($_tmpb_action_list['U_USER_ID'])) echo $_tmpb_action_list['U_USER_ID']; ?>"><?php if (isset($_tmpb_action_list['LOGIN'])) echo $_tmpb_action_list['LOGIN']; ?></a>
							</td>
							<td class="row2">
								<?php if (isset($_tmpb_action_list['U_ACTION'])) echo $_tmpb_action_list['U_ACTION']; ?>
							</td>
							<td class="row2" style="width: 150px">
								<?php if (isset($_tmpb_action_list['U_USER_CONCERN'])) echo $_tmpb_action_list['U_USER_CONCERN']; ?>
							</td>
							<td class="row2" style="width: 150px">
								<?php if (isset($_tmpb_action_list['DATE'])) echo $_tmpb_action_list['DATE']; ?>
							</td>
						</tr>
						<?php }echo ' ';if (isset($this->_var['C_FORUM_NO_ACTION']) && $this->_var['C_FORUM_NO_ACTION']) { ?>
						<tr style="text-align:center;">
							<td class="row2" colspan="4">
								<?php if (isset($this->_var['L_NO_ACTION'])) echo $this->_var['L_NO_ACTION']; ?>
							</td>
						</tr>
						<?php } ?>
						
						<tr>
							<td class="row3" colspan="4" style="text-align:center;">
								<?php if (isset($this->_var['C_FORUM_ADMIN']) && $this->_var['C_FORUM_ADMIN']) { ?>
								<span style="float:left"><input type="submit" name="valid" value="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" class="submit" /></span> 
								<?php } ?>
								<a href="moderation_forum<?php if (isset($this->_var['U_MORE_ACTION'])) echo $this->_var['U_MORE_ACTION']; ?>"><?php if (isset($this->_var['L_MORE_ACTION'])) echo $this->_var['L_MORE_ACTION']; ?></a>
							</td>
						</tr>
					</table>
				</form>	
				<?php }echo ' ';if (isset($this->_var['C_FORUM_ALERTS']) && $this->_var['C_FORUM_ALERTS']) { ?>
				<script type="text/javascript">
				<!--
				function check_alert(status)
				{
					for (i = 0; i < document.alert.length; i++)
						document.alert.elements[i].checked = status;
				}
				function Confirm_msg() {
					return confirm("<?php if (isset($this->_var['L_DELETE_MESSAGE'])) echo $this->_var['L_DELETE_MESSAGE']; ?>");
				}
				-->
				</script>
		
				<form name="alert" action="moderation_forum<?php if (isset($this->_var['U_ACTION_ALERT'])) echo $this->_var['U_ACTION_ALERT']; ?>" method="post" onsubmit="javascript:return Confirm_alert();">
					<table class="module_table">
						<tr>			
							<th style="width:25px;"><input type="checkbox" onclick="if(this.checked) {check_alert(true)} else {check_alert(false)};" /></th>
							<th style="width:20%;"><?php if (isset($this->_var['L_TITLE'])) echo $this->_var['L_TITLE']; ?></th>
							<th style="width:20%;"><?php if (isset($this->_var['L_TOPIC'])) echo $this->_var['L_TOPIC']; ?></th>
							<th style="width:100px;"><?php if (isset($this->_var['L_STATUS'])) echo $this->_var['L_STATUS']; ?></th>
							<th style="width:70px;"><?php if (isset($this->_var['L_LOGIN'])) echo $this->_var['L_LOGIN']; ?></th>
							<th style="width:70px;"><?php if (isset($this->_var['L_TIME'])) echo $this->_var['L_TIME']; ?></th>
						</tr>
					</table>
				
					<table class="module_table">
						<?php if (!isset($this->_block['alert_list']) || !is_array($this->_block['alert_list'])) $this->_block['alert_list'] = array();
foreach ($this->_block['alert_list'] as $alert_list_key => $alert_list_value) {
$_tmpb_alert_list = &$this->_block['alert_list'][$alert_list_key]; ?>
						<tr>
							<td class="row1" style="text-align:center;width:25px;">
								<input type="checkbox" name="<?php if (isset($_tmpb_alert_list['ID'])) echo $_tmpb_alert_list['ID']; ?>" />
							</td>
							<td class="row1" style="text-align:center;width:20%;">
								<?php if (isset($_tmpb_alert_list['TITLE'])) echo $_tmpb_alert_list['TITLE'];echo ' ';if (isset($_tmpb_alert_list['EDIT'])) echo $_tmpb_alert_list['EDIT']; ?>
							</td>
							<td class="row1" style="text-align:center;width:20%;">
								<?php if (isset($_tmpb_alert_list['TOPIC'])) echo $_tmpb_alert_list['TOPIC']; ?>
							</td>
							<td class="row1" style="text-align:center;width:100px;<?php if (isset($_tmpb_alert_list['BACKGROUND_COLOR'])) echo $_tmpb_alert_list['BACKGROUND_COLOR']; ?>">
								<?php if (isset($_tmpb_alert_list['STATUS'])) echo $_tmpb_alert_list['STATUS']; ?>
							</td>
							<td class="row1" style="text-align:center;width:70px;">
								<?php if (isset($_tmpb_alert_list['LOGIN'])) echo $_tmpb_alert_list['LOGIN']; ?>
							</td>
							<td class="row1" style="text-align:center;width:70px;">
								<?php if (isset($_tmpb_alert_list['TIME'])) echo $_tmpb_alert_list['TIME']; ?>
							</td>
						</tr>
						<?php }echo ' ';if (isset($this->_var['C_FORUM_NO_ALERT']) && $this->_var['C_FORUM_NO_ALERT']) { ?>		
						<tr>
							<td class="row2" colspan="6" style="text-align:center;">
								<?php if (isset($this->_var['L_NO_ALERT'])) echo $this->_var['L_NO_ALERT']; ?>
							</td>
						</tr>		
						<?php } ?>				
						<tr>
							<td class="row2" colspan="6">
								&nbsp;<input type="submit" value="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" class="submit" />
							</td>
						</tr>
					</table>
				</form>
				<?php }echo ' ';if (isset($this->_var['C_FORUM_ALERT_LIST']) && $this->_var['C_FORUM_ALERT_LIST']) { ?>
				<table class="module_table">
					<tr>
						<th colspan="2" style="text-align:center;">
							<?php if (isset($this->_var['TOPIC'])) echo $this->_var['TOPIC']; ?>
						</th>
					</tr>
					<tr>
						<td class="row1" style="width:25%;">
							<?php if (isset($this->_var['L_TITLE'])) echo $this->_var['L_TITLE']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_TOPIC'])) echo $this->_var['L_TOPIC']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['TOPIC'])) echo $this->_var['TOPIC']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_CAT'])) echo $this->_var['L_CAT']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['CAT'])) echo $this->_var['CAT']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_CONTENTS'])) echo $this->_var['L_CONTENTS']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_STATUS'])) echo $this->_var['L_STATUS']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['STATUS'])) echo $this->_var['STATUS']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_LOGIN'])) echo $this->_var['L_LOGIN']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['LOGIN'])) echo $this->_var['LOGIN']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_TIME'])) echo $this->_var['L_TIME']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['TIME'])) echo $this->_var['TIME']; ?>
						</td>
					</tr>
				</table>	

				<form action="<?php if (isset($this->_var['U_CHANGE_STATUS'])) echo $this->_var['U_CHANGE_STATUS']; ?>" method="post">
					<fieldset class="fieldset_submit" style="padding-top:25px;">
						<legend></legend>
						<input type="submit" name="valid" value="<?php if (isset($this->_var['L_CHANGE_STATUS'])) echo $this->_var['L_CHANGE_STATUS']; ?>" class="submit" />
					</fieldset>		
				</form>
				<?php }echo ' ';if (isset($this->_var['C_FORUM_ALERT_NOT_AUTH']) && $this->_var['C_FORUM_ALERT_NOT_AUTH']) { ?>
				<table class="module_table">
					<tr>
						<th colspan="2">
							<?php if (isset($this->_var['L_MODERATION_FORUM'])) echo $this->_var['L_MODERATION_FORUM']; ?> :: <?php if (isset($this->_var['L_ALERT_MANAGEMENT'])) echo $this->_var['L_ALERT_MANAGEMENT']; ?> 
						</th>
					</tr>				
					<tr>
						<td style="text-align:center;" colspan="2">
							<br /><br />
							<?php if (isset($this->_var['L_NO_ALERT'])) echo $this->_var['L_NO_ALERT']; ?>
							<br /><br />
						</td>
					</tr>
				</table>
				<?php }echo ' ';if (isset($this->_var['C_FORUM_USER_LIST']) && $this->_var['C_FORUM_USER_LIST']) { ?>
				<script type="text/javascript">
				<!--
					function XMLHttpRequest_search()
					{
						var login = document.getElementById('login').value;
						if( login != '' )
						{
							if( document.getElementById('search_img') )
								document.getElementById('search_img').innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" class="valign_middle" />';
							data = 'login=' + login;
							var xhr_object = xmlhttprequest_init('xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&<?php if (isset($this->_var['U_XMLHTTPREQUEST'])) echo $this->_var['U_XMLHTTPREQUEST']; ?>=1');
							xhr_object.onreadystatechange = function() 
							{
								if( xhr_object.readyState == 4 && xhr_object.status == 200 ) 
								{
									document.getElementById('xmlhttprequest_result_search').innerHTML = xhr_object.responseText;
									hide_div('xmlhttprequest_result_search');
									if( document.getElementById('search_img') )
										document.getElementById('search_img').innerHTML = '';
								}
								else if( xhr_object.readyState == 4 ) 
								{
									if( document.getElementById('search_img') )
										document.getElementById('search_img').innerHTML = '';
								}
							}
							xmlhttprequest_sender(xhr_object, data);
						}	
						else
							alert("<?php if (isset($this->_var['L_REQUIRE_LOGIN'])) echo $this->_var['L_REQUIRE_LOGIN']; ?>");
					}
					
					function hide_div(divID)
					{
						if( document.getElementById(divID) )
							document.getElementById(divID).style.display = 'block';
					}
					-->
				</script>

				<form action="moderation_forum<?php if (isset($this->_var['U_ACTION'])) echo $this->_var['U_ACTION']; ?>" method="post">
				<table class="module_table">
					<tr>
						<td class="row2">
							<span style="float:left;">
								<?php if (isset($this->_var['L_SEARCH_USER'])) echo $this->_var['L_SEARCH_USER']; ?>: <input type="text" size="20" maxlength="25" id="login" name="login" class="text" />
								<span id="search_img"></span>
							</span>
							<span style="float:left;margin-left:5px;">
								<input type="submit" id="search_member" name="search_member" value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" class="submit" />
								<script type="text/javascript">
								<!--								
									document.getElementById('search_member').style.display = 'none';
									document.write('<input value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" onclick="XMLHttpRequest_search();" type="button" class="submit">');
								-->
								</script>									
								<div id="xmlhttprequest_result_search" style="display:none;" class="xmlhttprequest_result_search"></div>
							</span>
						</td>
					</tr>
				</table>
				<table class="module_table">
					<tr>			
						<th style="width:25%;"><?php if (isset($this->_var['L_LOGIN'])) echo $this->_var['L_LOGIN']; ?></th>
						<th style="width:25%;"><?php if (isset($this->_var['L_INFO'])) echo $this->_var['L_INFO']; ?></th>
						<th style="width:25%;"><?php if (isset($this->_var['L_ACTION_USER'])) echo $this->_var['L_ACTION_USER']; ?></th>
						<th style="width:25%;"><?php if (isset($this->_var['L_PM'])) echo $this->_var['L_PM']; ?></th>
					</tr>
				</table>
				<table class="module_table">	
					<?php if (!isset($this->_block['user_list']) || !is_array($this->_block['user_list'])) $this->_block['user_list'] = array();
foreach ($this->_block['user_list'] as $user_list_key => $user_list_value) {
$_tmpb_user_list = &$this->_block['user_list'][$user_list_key]; ?>
					<tr>
						<td class="row1" style="text-align:center;width:25%;">
							<a href="../member/<?php if (isset($_tmpb_user_list['U_PROFILE'])) echo $_tmpb_user_list['U_PROFILE']; ?>"><?php if (isset($_tmpb_user_list['LOGIN'])) echo $_tmpb_user_list['LOGIN']; ?></a>
						</td>
						<td class="row1" style="text-align:center;width:25%;">
							<?php if (isset($_tmpb_user_list['INFO'])) echo $_tmpb_user_list['INFO']; ?>
						</td>
						<td class="row1" style="text-align:center;width:25%;">
							<?php if (isset($_tmpb_user_list['U_ACTION_USER'])) echo $_tmpb_user_list['U_ACTION_USER']; ?>
						</td>
						<td class="row1" style="text-align:center;width:25%;">
							<a href="../member/pm<?php if (isset($_tmpb_user_list['U_PM'])) echo $_tmpb_user_list['U_PM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/pm.png" alt="" /></a>
						</td>
					</tr>
					<?php }echo ' ';if (isset($this->_var['C_FORUM_NO_USER']) && $this->_var['C_FORUM_NO_USER']) { ?>
					<tr>
						<td class="row1" style="text-align:center;">
							<?php if (isset($this->_var['L_NO_USER'])) echo $this->_var['L_NO_USER']; ?>
						</td>
					</tr>		
					<?php } ?>
				</table>
				</form>
				<?php }echo ' ';if (isset($this->_var['C_FORUM_USER_INFO']) && $this->_var['C_FORUM_USER_INFO']) { ?>
				<script type="text/javascript">
				<!--
				function change_textarea_level(replace_value, regex)
				{
					<?php if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) { ?>  tinyMCE.activeEditor.save(); <?php } ?>
					
					var contents = document.getElementById('action_contents').value;
					<?php if (isset($this->_var['REPLACE_VALUE'])) echo $this->_var['REPLACE_VALUE']; ?>	
					document.getElementById('action_contents').value = contents;
					
					<?php if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) { ?>  tinyMCE.getInstanceById('action_contents').getBody().innerHTML = contents;  <?php } ?>
				}
				-->
				</script>
				<form action="moderation_forum<?php if (isset($this->_var['U_ACTION_INFO'])) echo $this->_var['U_ACTION_INFO']; ?>" method="post">		
					<table class="module_table">
						<tr>
							<td class="row1" style="width:30%;">
								<?php if (isset($this->_var['L_LOGIN'])) echo $this->_var['L_LOGIN']; ?>
							</td>
							<td class="row2">
								<?php if (isset($this->_var['LOGIN'])) echo $this->_var['LOGIN']; ?>
							</td>
						</tr>
						<tr>
							<td class="row1">
								<?php if (isset($this->_var['L_PM'])) echo $this->_var['L_PM']; ?>
							</td>
							<td class="row2">
								<a href="../member/pm<?php if (isset($this->_var['U_PM'])) echo $this->_var['U_PM']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/pm.png" alt="PM" /></a>
							</td>
						</tr>
						<tr>
							<td class="row2" colspan="2">
								<div class="question"><?php if (isset($this->_var['L_ALTERNATIVE_PM'])) echo $this->_var['L_ALTERNATIVE_PM']; ?></div>
								<?php if (isset($this->_var['KERNEL_EDITOR'])) echo $this->_var['KERNEL_EDITOR']; ?>
								<label><textarea name="action_contents" id="action_contents" class="post" rows="12" cols="15"><?php if (isset($this->_var['ALTERNATIVE_PM'])) echo $this->_var['ALTERNATIVE_PM']; ?></textarea></label>
							</td>
						</tr>
						<tr>
							<td class="row1">
								<label for="new_info"><?php if (isset($this->_var['L_INFO_EXPLAIN'])) echo $this->_var['L_INFO_EXPLAIN']; ?></label>
							</td>
							<td class="row2">
								<span id="action_info"><?php if (isset($this->_var['INFO'])) echo $this->_var['INFO']; ?></span>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<label><select name="new_info" id="new_info" onchange="change_textarea_level(this.options[this.selectedIndex].value, <?php if (isset($this->_var['REGEX'])) echo $this->_var['REGEX']; ?>)">
									<?php if (isset($this->_var['SELECT'])) echo $this->_var['SELECT']; ?>
								</select></label>	
								<input type="submit" name="valid_user" value="<?php if (isset($this->_var['L_CHANGE_INFO'])) echo $this->_var['L_CHANGE_INFO']; ?>" class="submit" />				
							</td>
						</tr>
					</table>
				</form>				
				<?php } ?>


				<br /><br />
			</div>	
			<div class="module_bottom_r"></div>	
			<div class="module_bottom_l"></div>
			<div class="module_bottom text_strong">
				&bull; <a href="index.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['FORUM_NAME'])) echo $this->_var['FORUM_NAME']; ?></a> &raquo; <a href="moderation_forum.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_MODERATION_FORUM'])) echo $this->_var['L_MODERATION_FORUM']; ?></a> <?php if (isset($this->_var['U_MODERATION_FORUM_ACTION'])) echo $this->_var['U_MODERATION_FORUM_ACTION']; ?>
			</div>	
		</div>
		
		<?php $this->_include('forum_bottom'); ?>
		