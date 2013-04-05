<?php $tplString = '<div style="float:left">
	<select id="groups_auth'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='" name="groups_auth'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='[]" size="8" multiple="multiple" onclick="'; if (isset($this->_var['DISABLED_SELECT'])) $tplString .= $this->_var['DISABLED_SELECT']; $tplString .=' document.getElementById(\'id'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='r2\').selected = true;">
<optgroup label="'; if (isset($this->_var['L_RANKS'])) $tplString .= $this->_var['L_RANKS']; $tplString .='">
';
if (!isset($this->_block['ranks_list']) || !is_array($this->_block['ranks_list'])) $this->_block['ranks_list'] = array();
foreach ($this->_block['ranks_list'] as $ranks_list_key => $ranks_list_value) {
$_tmpb_ranks_list = &$this->_block['ranks_list'][$ranks_list_key];
$tplString .= '
<option '; if (isset($_tmpb_ranks_list['DISABLED'])) $tplString .= $_tmpb_ranks_list['DISABLED']; $tplString .= ' value="r'; if (isset($_tmpb_ranks_list['IDRANK'])) $tplString .= $_tmpb_ranks_list['IDRANK']; $tplString .= '" id="id'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='r'; if (isset($_tmpb_ranks_list['ID'])) $tplString .= $_tmpb_ranks_list['ID']; $tplString .= '" '; if (isset($_tmpb_ranks_list['SELECTED'])) $tplString .= $_tmpb_ranks_list['SELECTED']; $tplString .= ' onclick="check_select_multiple_ranks(\'id'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='r\', '; if (isset($_tmpb_ranks_list['ID'])) $tplString .= $_tmpb_ranks_list['ID']; $tplString .= ')">'; if (isset($_tmpb_ranks_list['RANK_NAME'])) $tplString .= $_tmpb_ranks_list['RANK_NAME']; $tplString .= '</option>
';
}
$tplString .= '
</optgroup><optgroup label="'; if (isset($this->_var['L_GROUPS'])) $tplString .= $this->_var['L_GROUPS']; $tplString .='">
';
if (!isset($this->_block['groups_list']) || !is_array($this->_block['groups_list'])) $this->_block['groups_list'] = array();
foreach ($this->_block['groups_list'] as $groups_list_key => $groups_list_value) {
$_tmpb_groups_list = &$this->_block['groups_list'][$groups_list_key];
$tplString .= '
<option '; if (isset($_tmpb_groups_list['DISABLED'])) $tplString .= $_tmpb_groups_list['DISABLED']; $tplString .= ' value="'; if (isset($_tmpb_groups_list['IDGROUP'])) $tplString .= $_tmpb_groups_list['IDGROUP']; $tplString .= '" '; if (isset($_tmpb_groups_list['SELECTED'])) $tplString .= $_tmpb_groups_list['SELECTED']; $tplString .= '>'; if (isset($_tmpb_groups_list['GROUP_NAME'])) $tplString .= $_tmpb_groups_list['GROUP_NAME']; $tplString .= '</option>
';
}
$tplString .= '
<option></option>
</optgroup>
	</select>
</div>';
if (isset($this->_var['C_NO_ADVANCED_AUTH']) && $this->_var['C_NO_ADVANCED_AUTH']) {
$tplString .= '
<div class="spacer"></div> 
';
}
$tplString .= '';
if (isset($this->_var['C_ADVANCED_AUTH']) && $this->_var['C_ADVANCED_AUTH']) {
$tplString .= '
<div id="advanced_authb'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='" style="margin-left:5px;'; if (isset($this->_var['ADVANCED_AUTH_STYLE'])) $tplString .= $this->_var['ADVANCED_AUTH_STYLE']; $tplString .='float:left;">
	<select id="members_auth'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='" name="members_auth'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='[]" size="8" multiple="multiple">
<optgroup label="'; if (isset($this->_var['L_USERS'])) $tplString .= $this->_var['L_USERS']; $tplString .='" id="advanced_auth3'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='">
';
if (!isset($this->_block['members_list']) || !is_array($this->_block['members_list'])) $this->_block['members_list'] = array();
foreach ($this->_block['members_list'] as $members_list_key => $members_list_value) {
$_tmpb_members_list = &$this->_block['members_list'][$members_list_key];
$tplString .= '
<option value="'; if (isset($_tmpb_members_list['USER_ID'])) $tplString .= $_tmpb_members_list['USER_ID']; $tplString .= '" selected="selected">'; if (isset($_tmpb_members_list['LOGIN'])) $tplString .= $_tmpb_members_list['LOGIN']; $tplString .= '</option>
';
}
$tplString .= '
<option></option>
</optgroup>
	</select>
</div><div id="advanced_auth'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='" style="'; if (isset($this->_var['ADVANCED_AUTH_STYLE'])) $tplString .= $this->_var['ADVANCED_AUTH_STYLE']; $tplString .='float:left;margin-left:5px;width:150px;">
	<strong>'; if (isset($this->_var['L_ADD_USER'])) $tplString .= $this->_var['L_ADD_USER']; $tplString .='</strong>
	<br />
	<input type="text" size="14" class="text" value="" id="login'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='" name="login'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='" />
	<input onclick="XMLHttpRequest_search_members(\''; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='\', \''; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='\', \'add_member_auth\', \''; if (isset($this->_var['L_REQUIRE_PSEUDO'])) $tplString .= $this->_var['L_REQUIRE_PSEUDO']; $tplString .='\');" type="button" name="valid" value="'; if (isset($this->_var['L_GO'])) $tplString .= $this->_var['L_GO']; $tplString .='" class="submit" />
	<br />
	<span id="search_img'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='"></span> 
	<div id="xmlhttprequest_result_search'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='" style="display:none;width:125px;height:67px;margin-top:2px;" class="xmlhttprequest_result_search"></div>
</div>
';
}
$tplString .= '<div class="spacer"></div>
<a class="small_link" href="javascript:display_div_auto(\'advanced_auth'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='\', \'\');display_div_auto(\'advanced_authb'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='\', \'\');switch_img(\'advanced_auth_plus'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='\', \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/upload/minus.png\', \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/upload/plus.png\');"><img id="advanced_auth_plus'; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='" src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/upload/plus.png" alt="" class="valign_middle" /> '; if (isset($this->_var['L_ADVANCED_AUTHORIZATION'])) $tplString .= $this->_var['L_ADVANCED_AUTHORIZATION']; $tplString .='</a>
<br />
<a class="small_link" href="javascript:check_select_multiple(\''; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='\', true);">'; if (isset($this->_var['L_SELECT_ALL'])) $tplString .= $this->_var['L_SELECT_ALL']; $tplString .='</a>/<a class="small_link" href="javascript:check_select_multiple(\''; if (isset($this->_var['IDSELECT'])) $tplString .= $this->_var['IDSELECT']; $tplString .='\', false);">'; if (isset($this->_var['L_SELECT_NONE'])) $tplString .= $this->_var['L_SELECT_NONE']; $tplString .='</a>
<br />
<span class="text_small">('; if (isset($this->_var['L_EXPLAIN_SELECT_MULTIPLE'])) $tplString .= $this->_var['L_EXPLAIN_SELECT_MULTIPLE']; $tplString .=')</span>
'; ?>