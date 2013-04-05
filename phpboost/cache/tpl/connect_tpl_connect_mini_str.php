<?php $tplString = '	';
if (isset($this->_var['C_VERTICAL']) && $this->_var['C_VERTICAL']) {
$tplString .= '
';
if (isset($this->_var['C_USER_NOTCONNECTED']) && $this->_var['C_USER_NOTCONNECTED']) {
$tplString .= '
<script type="text/javascript">
<!--
function check_connect()
{
return checkForms(new Array(
\'login\', "'; if (isset($this->_var['L_REQUIRE_PSEUDO'])) $tplString .= $this->_var['L_REQUIRE_PSEUDO']; $tplString .='", 
\'password\', "'; if (isset($this->_var['L_REQUIRE_PASSWORD'])) $tplString .= $this->_var['L_REQUIRE_PASSWORD']; $tplString .='"
));
}
-->
</script>

<form action="'; if (isset($this->_var['U_CONNECT'])) $tplString .= $this->_var['U_CONNECT']; $tplString .='" method="post" onsubmit="return check_connect();">
<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_CONNECT'])) $tplString .= $this->_var['L_CONNECT']; $tplString .='</h5>
</div>
<div class="module_mini_contents">
<p>
<label>'; if (isset($this->_var['L_PSEUDO'])) $tplString .= $this->_var['L_PSEUDO']; $tplString .='
<br />
<input size="15" type="text" class="text" id="login" name="login" maxlength="25" /></label>
<br />
<label>'; if (isset($this->_var['L_PASSWORD'])) $tplString .= $this->_var['L_PASSWORD']; $tplString .='
<br />
<input size="15" type="password" id="password" name="password" class="text" maxlength="30" /></label>
<br />
<label>'; if (isset($this->_var['L_AUTOCONNECT'])) $tplString .= $this->_var['L_AUTOCONNECT']; $tplString .=' <input checked="checked" type="checkbox" name="auto" /></label>
</p>
<p>
<input type="hidden" name="token" value="'; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='" />
<input type="submit" name="connect" value="'; if (isset($this->_var['L_CONNECT'])) $tplString .= $this->_var['L_CONNECT']; $tplString .='" class="submit" />
</p>
<p style="margin:0;margin-top:5px;">
';
if (isset($this->_var['C_USER_REGISTER']) && $this->_var['C_USER_REGISTER']) {
$tplString .= ' 
<a class="small_link" href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/register.php"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/register_mini.png" alt="" class="valign_middle" /> '; if (isset($this->_var['L_REGISTER'])) $tplString .= $this->_var['L_REGISTER']; $tplString .='</a> 
';
}
$tplString .= '
<br />
<a class="small_link" href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/forget.php"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/forget_mini.png" alt="" class="valign_middle" /> '; if (isset($this->_var['L_FORGOT_PASS'])) $tplString .= $this->_var['L_FORGOT_PASS']; $tplString .='</a>
</p>
</div>
<div class="module_mini_bottom">
</div>
</div>
</form>	
';
}
$tplString .= '

';
if (isset($this->_var['C_USER_CONNECTED']) && $this->_var['C_USER_CONNECTED']) {
$tplString .= '
<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_PROFIL'])) $tplString .= $this->_var['L_PROFIL']; $tplString .='</h5>
</div>
<div class="module_mini_contents" style="text-align:left;">
<ul style="margin:0;padding:0;padding-left:4px;list-style-type:none;line-height:18px">
<li><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/members_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/member'; if (isset($this->_var['U_USER_ID'])) $tplString .= $this->_var['U_USER_ID']; $tplString .='" class="small_link">'; if (isset($this->_var['L_PRIVATE_PROFIL'])) $tplString .= $this->_var['L_PRIVATE_PROFIL']; $tplString .='</a></li>
<li><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['IMG_PM'])) $tplString .= $this->_var['IMG_PM']; $tplString .='" class="valign_middle" alt="" /> <a href="'; if (isset($this->_var['U_USER_PM'])) $tplString .= $this->_var['U_USER_PM']; $tplString .='" class="small_link">'; if (isset($this->_var['L_NBR_PM'])) $tplString .= $this->_var['L_NBR_PM']; $tplString .='</a>&nbsp;</li>

';
if (isset($this->_var['C_ADMIN_AUTH']) && $this->_var['C_ADMIN_AUTH']) {
$tplString .= ' 
<li><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/ranks_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/admin/admin_index.php" class="small_link">'; if (isset($this->_var['L_ADMIN_PANEL'])) $tplString .= $this->_var['L_ADMIN_PANEL']; $tplString .='
';
if (isset($this->_var['C_UNREAD_ALERT']) && $this->_var['C_UNREAD_ALERT']) {
$tplString .= '
('; if (isset($this->_var['NUMBER_UNREAD_ALERTS'])) $tplString .= $this->_var['NUMBER_UNREAD_ALERTS']; $tplString .=')
';
}
$tplString .= '
</a></li> 
';
}
$tplString .= '

';
if (isset($this->_var['C_MODERATOR_AUTH']) && $this->_var['C_MODERATOR_AUTH']) {
$tplString .= ' 
<li><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/modo_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/moderation_panel.php" class="small_link">'; if (isset($this->_var['L_MODO_PANEL'])) $tplString .= $this->_var['L_MODO_PANEL']; $tplString .='</a></li> 
';
}
$tplString .= '

';
if (isset($this->_var['C_UNREAD_CONTRIBUTION']) && $this->_var['C_UNREAD_CONTRIBUTION']) {
$tplString .= '
';
if (isset($this->_var['C_KNOWN_NUMBER_OF_UNREAD_CONTRIBUTION']) && $this->_var['C_KNOWN_NUMBER_OF_UNREAD_CONTRIBUTION']) {
$tplString .= '
<li><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/contribution_panel_mini_new.gif" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/contribution_panel.php" class="small_link">'; if (isset($this->_var['L_CONTRIBUTION_PANEL'])) $tplString .= $this->_var['L_CONTRIBUTION_PANEL']; $tplString .=' ('; if (isset($this->_var['NUM_UNREAD_CONTRIBUTIONS'])) $tplString .= $this->_var['NUM_UNREAD_CONTRIBUTIONS']; $tplString .=')</a></li> 
';
} else {
$tplString .= '
<li><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/contribution_panel_mini_new.gif" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/contribution_panel.php" class="small_link">'; if (isset($this->_var['L_CONTRIBUTION_PANEL'])) $tplString .= $this->_var['L_CONTRIBUTION_PANEL']; $tplString .='</a></li> 
';
}
$tplString .= '
';
} else {
$tplString .= '
<li><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/contribution_panel_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/contribution_panel.php" class="small_link">'; if (isset($this->_var['L_CONTRIBUTION_PANEL'])) $tplString .= $this->_var['L_CONTRIBUTION_PANEL']; $tplString .='</a></li> 
';
}
$tplString .= '

<li><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/home_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['U_DISCONNECT'])) $tplString .= $this->_var['U_DISCONNECT']; $tplString .='" class="small_link">'; if (isset($this->_var['L_DISCONNECT'])) $tplString .= $this->_var['L_DISCONNECT']; $tplString .='</a></li>
</ul>
</div>
<div class="module_mini_bottom">
</div>
</div>
';
}
$tplString .= '
	';
} else {
$tplString .= '
';
if (isset($this->_var['C_USER_NOTCONNECTED']) && $this->_var['C_USER_NOTCONNECTED']) {
$tplString .= '	
<script type="text/javascript">
<!--
function check_connect(){
if(document.getElementById(\'login\').value == "") {
alert("'; if (isset($this->_var['L_REQUIRE_PSEUDO'])) $tplString .= $this->_var['L_REQUIRE_PSEUDO']; $tplString .='");
return false;
}
if(document.getElementById(\'password\').value == "") {
alert("'; if (isset($this->_var['L_REQUIRE_PASSWORD'])) $tplString .= $this->_var['L_REQUIRE_PASSWORD']; $tplString .='");
return false;
}
return true;
}

-->
</script>

<div style="float:right;margin-right:8px;">
<form action="'; if (isset($this->_var['U_CONNECT'])) $tplString .= $this->_var['U_CONNECT']; $tplString .='" method="post" onsubmit="return check_connect();" style="text-align:right;display:inline;">
<p style="display:inline"><input size="15" type="text" id="login" name="login" value="'; if (isset($this->_var['L_PSEUDO'])) $tplString .= $this->_var['L_PSEUDO']; $tplString .='" class="connect_form" onfocus="if( this.value == \''; if (isset($this->_var['L_PSEUDO'])) $tplString .= $this->_var['L_PSEUDO']; $tplString .='\' ) this.value = \'\';" maxlength="25" />
<input size="15" type="password" id="password" name="password" class="connect_form" value="******" onfocus="if( this.value == \'******\' ) this.value = \'\';" maxlength="30" />
<input checked="checked" type="checkbox" name="auto" />
<input type="submit" name="connect" value="'; if (isset($this->_var['L_CONNECT'])) $tplString .= $this->_var['L_CONNECT']; $tplString .='" class="submit" /></p>
</form>

';
if (isset($this->_var['C_USER_REGISTER']) && $this->_var['C_USER_REGISTER']) {
$tplString .= '
<form action="'; if (isset($this->_var['U_REGISTER'])) $tplString .= $this->_var['U_REGISTER']; $tplString .='" method="post" style="display:inline;">
<p style="display:inline"><input type="submit" name="register" value="'; if (isset($this->_var['L_REGISTER'])) $tplString .= $this->_var['L_REGISTER']; $tplString .='" class="submit" /></p>
</form>
';
}
$tplString .= '
</div>
';
}
$tplString .= '

';
if (isset($this->_var['C_USER_CONNECTED']) && $this->_var['C_USER_CONNECTED']) {
$tplString .= '
<p style="text-align:right;color:#FFFFFF;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/members_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/member'; if (isset($this->_var['U_USER_ID'])) $tplString .= $this->_var['U_USER_ID']; $tplString .='" class="small_link">'; if (isset($this->_var['L_PRIVATE_PROFIL'])) $tplString .= $this->_var['L_PRIVATE_PROFIL']; $tplString .='</a>&nbsp;
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['IMG_PM'])) $tplString .= $this->_var['IMG_PM']; $tplString .='" class="valign_middle" alt="" /> <a href="'; if (isset($this->_var['U_USER_PM'])) $tplString .= $this->_var['U_USER_PM']; $tplString .='" class="small_link">'; if (isset($this->_var['L_NBR_PM'])) $tplString .= $this->_var['L_NBR_PM']; $tplString .='</a>&nbsp;

';
if (isset($this->_var['C_ADMIN_AUTH']) && $this->_var['C_ADMIN_AUTH']) {
$tplString .= '
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/ranks_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/admin/admin_index.php" class="small_link">'; if (isset($this->_var['L_ADMIN_PANEL'])) $tplString .= $this->_var['L_ADMIN_PANEL']; $tplString .=' ';
if (isset($this->_var['C_UNREAD_ALERT']) && $this->_var['C_UNREAD_ALERT']) {
$tplString .= ' ('; if (isset($this->_var['NUMBER_UNREAD_ALERTS'])) $tplString .= $this->_var['NUMBER_UNREAD_ALERTS']; $tplString .=') ';
}
$tplString .= ' </a>&nbsp; 
';
}
$tplString .= '

';
if (isset($this->_var['C_UNREAD_CONTRIBUTION']) && $this->_var['C_UNREAD_CONTRIBUTION']) {
$tplString .= '
';
if (isset($this->_var['C_KNOWN_NUMBER_OF_UNREAD_CONTRIBUTION']) && $this->_var['C_KNOWN_NUMBER_OF_UNREAD_CONTRIBUTION']) {
$tplString .= '
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/contribution_panel_mini_new.gif" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/contribution_panel.php" class="small_link">'; if (isset($this->_var['L_CONTRIBUTION_PANEL'])) $tplString .= $this->_var['L_CONTRIBUTION_PANEL']; $tplString .=' ('; if (isset($this->_var['NUM_UNREAD_CONTRIBUTIONS'])) $tplString .= $this->_var['NUM_UNREAD_CONTRIBUTIONS']; $tplString .=')</a>&nbsp;
';
} else {
$tplString .= '
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/contribution_panel_mini_new.gif" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/contribution_panel.php" class="small_link">'; if (isset($this->_var['L_CONTRIBUTION_PANEL'])) $tplString .= $this->_var['L_CONTRIBUTION_PANEL']; $tplString .='</a>&nbsp;
';
}
$tplString .= '
';
} else {
$tplString .= '
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/contribution_panel_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/contribution_panel.php" class="small_link">'; if (isset($this->_var['L_CONTRIBUTION_PANEL'])) $tplString .= $this->_var['L_CONTRIBUTION_PANEL']; $tplString .='</a>&nbsp;
';
}
$tplString .= '

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/home_mini.png" alt="" class="valign_middle" /> <a href="'; if (isset($this->_var['U_DISCONNECT'])) $tplString .= $this->_var['U_DISCONNECT']; $tplString .='" class="small_link">'; if (isset($this->_var['L_DISCONNECT'])) $tplString .= $this->_var['L_DISCONNECT']; $tplString .='</a>
&nbsp;&nbsp;&nbsp;
</p>
';
}
$tplString .= '
	';
}
 ?>