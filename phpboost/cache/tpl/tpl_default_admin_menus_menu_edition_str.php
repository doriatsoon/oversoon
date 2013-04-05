<?php $tplString = '';
if (isset($this->_var['C_FIRST_MENU']) && $this->_var['C_FIRST_MENU']) {
$tplString .= '
<div id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='">
<input type="hidden" id="menu_uid" name="menu_uid" value="'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='" />
	<ul id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_list" class="menu_link_list">
';
if (!isset($this->_block['elements']) || !is_array($this->_block['elements'])) $this->_block['elements'] = array();
foreach ($this->_block['elements'] as $elements_key => $elements_value) {
$_tmpb_elements = &$this->_block['elements'][$elements_key];
$tplString .= '
'; if (isset($_tmpb_elements['DISPLAY'])) $tplString .= $_tmpb_elements['DISPLAY']; $tplString .= '
';
}
$tplString .= '
	</ul>
<fieldset class="fieldset_submit" style="padding:0;margin-bottom:4px;margin-top:15px;">
<input type="button" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_add_sub_element" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_add_sub_element" value="'; if (isset($this->_var['L_ADD_SUB_ELEMENT'])) $tplString .= $this->_var['L_ADD_SUB_ELEMENT']; $tplString .='" onclick="addSubElement(\'menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\');" class="submit" />
<input type="button" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_add_sub_menu" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_add_sub_menu" value="'; if (isset($this->_var['L_ADD_SUB_MENU'])) $tplString .= $this->_var['L_ADD_SUB_MENU']; $tplString .='" onclick="addSubMenu(\'menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\');" class="submit" />
</fieldset>
</div>
';
}
$tplString .= '';
if (isset($this->_var['C_NEXT_MENU']) && $this->_var['C_NEXT_MENU']) {
$tplString .= '
	<li class="row1 menu_link_element" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='">
<div style="float:left;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/upload/folder.png" alt="plus" class="valign_middle" />
<label for="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_name">'; if (isset($this->_var['L_NAME'])) $tplString .= $this->_var['L_NAME']; $tplString .='</label> <input type="text" value="'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_name" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_name" />
<label for="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_url">'; if (isset($this->_var['L_URL'])) $tplString .= $this->_var['L_URL']; $tplString .='</label> <input type="text" value="'; if (isset($this->_var['RELATIVE_URL'])) $tplString .= $this->_var['RELATIVE_URL']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_url" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_url" />
<label for="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_image">'; if (isset($this->_var['L_IMAGE'])) $tplString .= $this->_var['L_IMAGE']; $tplString .='</label> <input type="text" value="'; if (isset($this->_var['RELATIVE_IMG'])) $tplString .= $this->_var['RELATIVE_IMG']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_image" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_image" />
</div>
<div style="float:right;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/plus.png" alt="More..." id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_more_image" class="valign_middle" onclick="toggleProperties('; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .=');" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['LANG'])) $tplString .= $this->_var['LANG']; $tplString .='/delete.png" alt="'; if (isset($this->_var['L_DELETE'])) $tplString .= $this->_var['L_DELETE']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_delete_image" class="valign_middle" onclick="deleteElement(\'menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\');" />
</div>
<div class="spacer"></div>
<fieldset id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_properties" style="display:none;">
<legend>'; if (isset($this->_var['L_PROPERTIES'])) $tplString .= $this->_var['L_PROPERTIES']; $tplString .='</legend>
<dl>
<dt>'; if (isset($this->_var['L_AUTHORIZATIONS'])) $tplString .= $this->_var['L_AUTHORIZATIONS']; $tplString .='</dt>
<dd>'; if (isset($this->_var['AUTH_FORM'])) $tplString .= $this->_var['AUTH_FORM']; $tplString .='</dd>
</dl>
</fieldset>
<hr style="background-color:#999999;margin-top:5px;" />
<ul class="menu_link_list" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_list">
';
if (!isset($this->_block['elements']) || !is_array($this->_block['elements'])) $this->_block['elements'] = array();
foreach ($this->_block['elements'] as $elements_key => $elements_value) {
$_tmpb_elements = &$this->_block['elements'][$elements_key];
$tplString .= '
'; if (isset($_tmpb_elements['DISPLAY'])) $tplString .= $_tmpb_elements['DISPLAY']; $tplString .= '
';
}
$tplString .= '
</ul>
<fieldset class="fieldset_submit" style="padding:0;margin-bottom:4px;margin-top:15px;">
<input type="button" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_add_sub_element" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_add_sub_element" value="'; if (isset($this->_var['L_ADD_SUB_ELEMENT'])) $tplString .= $this->_var['L_ADD_SUB_ELEMENT']; $tplString .='" onclick="addSubElement(\'menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\');" class="submit" />
<input type="button" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_add_sub_menu" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_add_sub_menu" value="'; if (isset($this->_var['L_ADD_SUB_MENU'])) $tplString .= $this->_var['L_ADD_SUB_MENU']; $tplString .='" onclick="addSubMenu(\'menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\');" class="submit" />
</fieldset>
	</li>
';
}
$tplString .= '';
if (isset($this->_var['C_LINK']) && $this->_var['C_LINK']) {
$tplString .= '
<li class="row2 menu_link_element" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='">
<div style="float:left;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/url.png" alt="plus" class="valign_middle" />
<label for="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_name">'; if (isset($this->_var['L_NAME'])) $tplString .= $this->_var['L_NAME']; $tplString .='</label> <input type="text" value="'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_name" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_name" />
<label for="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_url">'; if (isset($this->_var['L_URL'])) $tplString .= $this->_var['L_URL']; $tplString .='</label> <input type="text" value="'; if (isset($this->_var['RELATIVE_URL'])) $tplString .= $this->_var['RELATIVE_URL']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_url" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_url" />
<label for="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_image">'; if (isset($this->_var['L_IMAGE'])) $tplString .= $this->_var['L_IMAGE']; $tplString .='</label> <input type="text" value="'; if (isset($this->_var['RELATIVE_IMG'])) $tplString .= $this->_var['RELATIVE_IMG']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_image" name="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_image" />
</div>
<div style="float:right;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/plus.png" alt="'; if (isset($this->_var['L_MORE'])) $tplString .= $this->_var['L_MORE']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_more_image" class="valign_middle" onclick="toggleProperties('; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .=');" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['LANG'])) $tplString .= $this->_var['LANG']; $tplString .='/delete.png" alt="'; if (isset($this->_var['L_DELETE'])) $tplString .= $this->_var['L_DELETE']; $tplString .='" id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_delete_image" class="valign_middle" onclick="deleteElement(\'menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\');" />
</div>
<div class="spacer"></div>
<fieldset id="menu_element_'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='_properties" style="display:none;">
<legend>'; if (isset($this->_var['L_PROPERTIES'])) $tplString .= $this->_var['L_PROPERTIES']; $tplString .='</legend>
<dl>
<dt>'; if (isset($this->_var['L_AUTHORIZATIONS'])) $tplString .= $this->_var['L_AUTHORIZATIONS']; $tplString .='</dt>
<dd>'; if (isset($this->_var['AUTH_FORM'])) $tplString .= $this->_var['AUTH_FORM']; $tplString .='</dd>
</dl>
</fieldset>
</li>
';
}
$tplString .= '
'; ?>