<?php $tplString = '';
if (isset($this->_var['C_MINI']) && $this->_var['C_MINI']) {
$tplString .= ' 
<div class="module_mini_container" style="'; if (isset($this->_var['STYLE'])) $tplString .= $this->_var['STYLE']; $tplString .='">
<div class="module_mini_top">
<span id="m'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='"></span>
<h5 class="sub_title">
'; if (isset($this->_var['NAME'])) $tplString .= $this->_var['NAME']; $tplString .='
';
if (isset($this->_var['C_EDIT']) && $this->_var['C_EDIT']) {
$tplString .= '
<a href="'; if (isset($this->_var['U_EDIT'])) $tplString .= $this->_var['U_EDIT']; $tplString .='" title="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/french/edit.png" alt="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='" class="valign_middle" />
</a>
';
}
$tplString .= '
';
if (isset($this->_var['C_DEL']) && $this->_var['C_DEL']) {
$tplString .= '
<a href="'; if (isset($this->_var['U_DELETE'])) $tplString .= $this->_var['U_DELETE']; $tplString .='" title="'; if (isset($this->_var['L_DEL'])) $tplString .= $this->_var['L_DEL']; $tplString .='" onclick="javascript:return Confirm_menu();">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/french/delete.png" alt="'; if (isset($this->_var['L_DEL'])) $tplString .= $this->_var['L_DEL']; $tplString .='" class="valign_middle" />
</a>
';
}
$tplString .= '
</h5>
</div><br />
<div class="module_mini_contents">
<p>
';
if (isset($this->_var['C_MENU_ACTIVATED']) && $this->_var['C_MENU_ACTIVATED']) {
$tplString .= '
<select name="'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='_enabled" onchange="document.location = '; if (isset($this->_var['U_ONCHANGE_ENABLED'])) $tplString .= $this->_var['U_ONCHANGE_ENABLED']; $tplString .='">
<option value="1" '; if (isset($this->_var['SELECT_ENABLED'])) $tplString .= $this->_var['SELECT_ENABLED']; $tplString .='>'; if (isset($this->_var['L_ENABLED'])) $tplString .= $this->_var['L_ENABLED']; $tplString .='</option>
<option value="0" '; if (isset($this->_var['SELECT_DISABLED'])) $tplString .= $this->_var['SELECT_DISABLED']; $tplString .='>'; if (isset($this->_var['L_DISABLED'])) $tplString .= $this->_var['L_DISABLED']; $tplString .='</option>
</select>
';
}
$tplString .= '
</p>
<div style="width:100px;height:30px;margin:auto;">
<div style="float:left">
';
if (isset($this->_var['C_UP']) && $this->_var['C_UP']) {
$tplString .= '
<a href="'; if (isset($this->_var['U_UP'])) $tplString .= $this->_var['U_UP']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/up.png" alt="" /></a>
';
} else {
$tplString .= '
<div style="float:left;width:32px;"> </div>
';
}
$tplString .= '
';
if (isset($this->_var['C_DOWN']) && $this->_var['C_DOWN']) {
$tplString .= '
<a href="'; if (isset($this->_var['U_DOWN'])) $tplString .= $this->_var['U_DOWN']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/down.png" alt="" /></a>
';
} else {
$tplString .= '
<div style="float:left;width:32px;"> </div>
';
}
$tplString .= '
</div>
<div style="position:relative;float:right">
<div style="position:absolute;z-index:99;margin-top:155px;margin-left:-70px;float:left;display:none;" id="movemenu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='">
<div class="bbcode_block" style="width:170px;overflow:auto;" onmouseover="menu_hide_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\', 1);" onmouseout="menu_hide_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\', 0);">
<div style="margin-bottom:4px;" class="text_small"><strong>'; if (isset($this->_var['L_MOVETO'])) $tplString .= $this->_var['L_MOVETO']; $tplString .='</strong>:</div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#cee6cd;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_HEADER'])) $tplString .= $this->_var['I_HEADER']; $tplString .='">'; if (isset($this->_var['L_HEADER'])) $tplString .= $this->_var['L_HEADER']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#CCFF99;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_SUBHEADER'])) $tplString .= $this->_var['I_SUBHEADER']; $tplString .='">'; if (isset($this->_var['L_SUB_HEADER'])) $tplString .= $this->_var['L_SUB_HEADER']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#afafaf;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_LEFT'])) $tplString .= $this->_var['I_LEFT']; $tplString .='">'; if (isset($this->_var['L_LEFT_MENU'])) $tplString .= $this->_var['L_LEFT_MENU']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#FFE25F;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_TOPCENTRAL'])) $tplString .= $this->_var['I_TOPCENTRAL']; $tplString .='">'; if (isset($this->_var['L_TOP_CENTRAL_MENU'])) $tplString .= $this->_var['L_TOP_CENTRAL_MENU']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#FF5F5F;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_BOTTOMCENTRAL'])) $tplString .= $this->_var['I_BOTTOMCENTRAL']; $tplString .='">'; if (isset($this->_var['L_BOTTOM_CENTRAL_MENU'])) $tplString .= $this->_var['L_BOTTOM_CENTRAL_MENU']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#bdaeca;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_RIGHT'])) $tplString .= $this->_var['I_RIGHT']; $tplString .='">'; if (isset($this->_var['L_RIGHT_MENU'])) $tplString .= $this->_var['L_RIGHT_MENU']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#90ab8e;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_TOPFOOTER'])) $tplString .= $this->_var['I_TOPFOOTER']; $tplString .='">'; if (isset($this->_var['L_TOP_FOOTER'])) $tplString .= $this->_var['L_TOP_FOOTER']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#A8D1CB;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_FOOTER'])) $tplString .= $this->_var['I_FOOTER']; $tplString .='">'; if (isset($this->_var['L_FOOTER'])) $tplString .= $this->_var['L_FOOTER']; $tplString .='</a></div>
</div>
</div>
<a href="javascript:menu_display_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\');" onmouseover="menu_hide_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\', 1);" onmouseout="menu_hide_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_MOVETO'])) $tplString .= $this->_var['L_MOVETO']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/move.png" alt="" /></a>
</div>
</div>
<div style="margin-top:10px;">
'; if (isset($this->_var['CONTENTS'])) $tplString .= $this->_var['CONTENTS']; $tplString .='
</div>
</div>
<div class="module_mini_bottom">
</div>
</div>
';
} else {
$tplString .= '
<div style="margin:15px;width:auto;'; if (isset($this->_var['ADDITIONAL_STYLE'])) $tplString .= $this->_var['ADDITIONAL_STYLE']; $tplString .='" class="module_position">
<div class="module_top_l"></div>
<div class="module_top_r"></div>
<div class="module_top">
<strong><span id="m'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='"></span></strong>
<h5 class="sub_title">
'; if (isset($this->_var['NAME'])) $tplString .= $this->_var['NAME']; $tplString .='
';
if (isset($this->_var['C_EDIT']) && $this->_var['C_EDIT']) {
$tplString .= '
<a href="'; if (isset($this->_var['U_EDIT'])) $tplString .= $this->_var['U_EDIT']; $tplString .='" title="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/french/edit.png" alt="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='" class="valign_middle" />
</a>
';
}
$tplString .= '
';
if (isset($this->_var['C_DEL']) && $this->_var['C_DEL']) {
$tplString .= '
<a href="'; if (isset($this->_var['U_DELETE'])) $tplString .= $this->_var['U_DELETE']; $tplString .='" title="'; if (isset($this->_var['L_DEL'])) $tplString .= $this->_var['L_DEL']; $tplString .='" onclick="javascript:return Confirm_menu();">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/french/delete.png" alt="'; if (isset($this->_var['L_DEL'])) $tplString .= $this->_var['L_DEL']; $tplString .='" class="valign_middle" />
</a>
';
}
$tplString .= '
</h5>
</div>

<div class="module_contents">
<p>
<select name="'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='_enabled" onchange="document.location = '; if (isset($this->_var['U_ONCHANGE_ENABLED'])) $tplString .= $this->_var['U_ONCHANGE_ENABLED']; $tplString .='">
<option value="1" '; if (isset($this->_var['SELECT_ENABLED'])) $tplString .= $this->_var['SELECT_ENABLED']; $tplString .='>'; if (isset($this->_var['L_ENABLED'])) $tplString .= $this->_var['L_ENABLED']; $tplString .='</option>
<option value="0" '; if (isset($this->_var['SELECT_DISABLED'])) $tplString .= $this->_var['SELECT_DISABLED']; $tplString .='>'; if (isset($this->_var['L_DISABLED'])) $tplString .= $this->_var['L_DISABLED']; $tplString .='</option>
</select>
</p>
<div style="width:100px;height:30px;">
<div style="float:left">
';
if (isset($this->_var['C_UP']) && $this->_var['C_UP']) {
$tplString .= '
<a href="'; if (isset($this->_var['U_UP'])) $tplString .= $this->_var['U_UP']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/up.png" alt="" /></a>
';
} else {
$tplString .= '
<div style="float:left;width:32px;"> </div>
';
}
$tplString .= '
';
if (isset($this->_var['C_DOWN']) && $this->_var['C_DOWN']) {
$tplString .= '
<a href="'; if (isset($this->_var['U_DOWN'])) $tplString .= $this->_var['U_DOWN']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/admin/down.png" alt="" /></a>
';
} else {
$tplString .= '
<div style="float:left;width:32px;"> </div>
';
}
$tplString .= '
</div>
<div style="position:relative;float:right">
<div style="position:absolute;z-index:100;margin-top:155px;margin-left:-100px;float:left;display:none;" id="movemenu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='">
<div class="bbcode_block" style="width:170px;overflow:auto;" onmouseover="menu_hide_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\', 1);" onmouseout="menu_hide_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\', 0);">
<div style="margin-bottom:4px;" class="text_small"><strong>'; if (isset($this->_var['L_MOVETO'])) $tplString .= $this->_var['L_MOVETO']; $tplString .='</strong>:</div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#cee6cd;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_HEADER'])) $tplString .= $this->_var['I_HEADER']; $tplString .='">'; if (isset($this->_var['L_HEADER'])) $tplString .= $this->_var['L_HEADER']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#CCFF99;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_SUBHEADER'])) $tplString .= $this->_var['I_SUBHEADER']; $tplString .='">'; if (isset($this->_var['L_SUB_HEADER'])) $tplString .= $this->_var['L_SUB_HEADER']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#afafaf;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_LEFT'])) $tplString .= $this->_var['I_LEFT']; $tplString .='">'; if (isset($this->_var['L_LEFT_MENU'])) $tplString .= $this->_var['L_LEFT_MENU']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#FFE25F;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_TOPCENTRAL'])) $tplString .= $this->_var['I_TOPCENTRAL']; $tplString .='">'; if (isset($this->_var['L_TOP_CENTRAL_MENU'])) $tplString .= $this->_var['L_TOP_CENTRAL_MENU']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#FF5F5F;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_BOTTOMCENTRAL'])) $tplString .= $this->_var['I_BOTTOMCENTRAL']; $tplString .='">'; if (isset($this->_var['L_BOTTOM_CENTRAL_MENU'])) $tplString .= $this->_var['L_BOTTOM_CENTRAL_MENU']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#bdaeca;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_RIGHT'])) $tplString .= $this->_var['I_RIGHT']; $tplString .='">'; if (isset($this->_var['L_RIGHT_MENU'])) $tplString .= $this->_var['L_RIGHT_MENU']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#90ab8e;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_TOPFOOTER'])) $tplString .= $this->_var['I_TOPFOOTER']; $tplString .='">'; if (isset($this->_var['L_TOP_FOOTER'])) $tplString .= $this->_var['L_TOP_FOOTER']; $tplString .='</a></div>
<div style="float:left;margin-left:5px;height:10px;width:10px;background:#A8D1CB;border:1px solid black"></div> <div style="clear:right"><a href="'; if (isset($this->_var['U_MOVE'])) $tplString .= $this->_var['U_MOVE']; $tplString .='&amp;move='; if (isset($this->_var['I_FOOTER'])) $tplString .= $this->_var['I_FOOTER']; $tplString .='">'; if (isset($this->_var['L_FOOTER'])) $tplString .= $this->_var['L_FOOTER']; $tplString .='</a></div>
</div>
</div>
</div>
<a href="javascript:menu_display_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\');" onmouseover="menu_hide_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\', 1);" onmouseout="menu_hide_block(\'menu'; if (isset($this->_var['IDMENU'])) $tplString .= $this->_var['IDMENU']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_MOVETO'])) $tplString .= $this->_var['L_MOVETO']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/move.png" alt="" /></a>
</div>
<div style="margin:10px 0px;">
'; if (isset($this->_var['CONTENTS'])) $tplString .= $this->_var['CONTENTS']; $tplString .='
</div>
</div>
<div class="module_bottom_l"></div>
<div class="module_bottom_r"></div>
<div class="module_bottom"></div>
</div>
';
}
$tplString .= '
'; ?>