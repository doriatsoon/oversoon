<?php $tplString = '';
if (isset($this->_var['C_MENU']) && $this->_var['C_MENU']) {
$tplString .= ' <!-- Menu -->
';
if (isset($this->_var['C_FIRST_MENU']) && $this->_var['C_FIRST_MENU']) {
$tplString .= ' <!-- Title -->
<div class="module_mini_container">
<div class="module_mini_top">
<h3 class="menu_vertical_'; if (isset($this->_var['DEPTH'])) $tplString .= $this->_var['DEPTH']; $tplString .=' menu_vertical">
';
if (isset($this->_var['RELATIVE_URL']) && $this->_var['RELATIVE_URL']) {
$tplString .= '
';
if (isset($this->_var['C_IMG']) && $this->_var['C_IMG']) {
$tplString .= '<a href="'; if (isset($this->_var['ABSOLUTE_URL'])) $tplString .= $this->_var['ABSOLUTE_URL']; $tplString .='" title="'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='"><img src="'; if (isset($this->_var['ABSOLUTE_IMG'])) $tplString .= $this->_var['ABSOLUTE_IMG']; $tplString .='" class="valign_middle" alt="" /></a>';
}
$tplString .= '
<a href="'; if (isset($this->_var['ABSOLUTE_URL'])) $tplString .= $this->_var['ABSOLUTE_URL']; $tplString .='" title="'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='">'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='</a>
';
} else {
$tplString .= '
';
if (isset($this->_var['C_IMG']) && $this->_var['C_IMG']) {
$tplString .= '<img src="'; if (isset($this->_var['ABSOLUTE_IMG'])) $tplString .= $this->_var['ABSOLUTE_IMG']; $tplString .='" class="valign_middle" alt="" />';
}
$tplString .= '
'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='
';
}
$tplString .= '
</h3>
</div>
<div class="module_mini_contents">
';
if (isset($this->_var['C_HAS_CHILD']) && $this->_var['C_HAS_CHILD']) {
$tplString .= '<ul class="menu_vertical_'; if (isset($this->_var['DEPTH'])) $tplString .= $this->_var['DEPTH']; $tplString .=' menu_vertical">';
if (!isset($this->_block['elements']) || !is_array($this->_block['elements'])) $this->_block['elements'] = array();
foreach ($this->_block['elements'] as $elements_key => $elements_value) {
$_tmpb_elements = &$this->_block['elements'][$elements_key];
 if (isset($_tmpb_elements['DISPLAY'])) $tplString .= $_tmpb_elements['DISPLAY']; 
}
$tplString .= '</ul>';
}
$tplString .= '
</div>
<div class="module_mini_bottom">
</div>
</div>
';
}
$tplString .= '
';
if (isset($this->_var['C_NEXT_MENU']) && $this->_var['C_NEXT_MENU']) {
$tplString .= ' <!-- Children -->
<li>
<h3 class="menu_vertical_'; if (isset($this->_var['DEPTH'])) $tplString .= $this->_var['DEPTH']; $tplString .=' menu_vertical">
';
if (isset($this->_var['RELATIVE_URL']) && $this->_var['RELATIVE_URL']) {
$tplString .= '
';
if (isset($this->_var['C_IMG']) && $this->_var['C_IMG']) {
$tplString .= '<a href="'; if (isset($this->_var['ABSOLUTE_URL'])) $tplString .= $this->_var['ABSOLUTE_URL']; $tplString .='" title="'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='"><img src="'; if (isset($this->_var['ABSOLUTE_IMG'])) $tplString .= $this->_var['ABSOLUTE_IMG']; $tplString .='" class="valign_middle" alt="" /></a> ';
}
$tplString .= ' 
<a href="'; if (isset($this->_var['ABSOLUTE_URL'])) $tplString .= $this->_var['ABSOLUTE_URL']; $tplString .='" title="'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='">'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='</a>
';
} else {
$tplString .= '
<span>'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='</span>
';
}
$tplString .= '
</h3>
';
if (isset($this->_var['C_HAS_CHILD']) && $this->_var['C_HAS_CHILD']) {
$tplString .= '<ul class="menu_vertical_'; if (isset($this->_var['DEPTH'])) $tplString .= $this->_var['DEPTH']; $tplString .=' menu_vertical">';
if (!isset($this->_block['elements']) || !is_array($this->_block['elements'])) $this->_block['elements'] = array();
foreach ($this->_block['elements'] as $elements_key => $elements_value) {
$_tmpb_elements = &$this->_block['elements'][$elements_key];
 if (isset($_tmpb_elements['DISPLAY'])) $tplString .= $_tmpb_elements['DISPLAY']; 
}
$tplString .= '</ul>';
}
$tplString .= '
</li>
';
}
$tplString .= '
';
} else {
$tplString .= ' <!-- Simple Menu Link -->
<li>
';
if (isset($this->_var['C_IMG']) && $this->_var['C_IMG']) {
$tplString .= '<a href="'; if (isset($this->_var['ABSOLUTE_URL'])) $tplString .= $this->_var['ABSOLUTE_URL']; $tplString .='" title="'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='"><img src="'; if (isset($this->_var['ABSOLUTE_IMG'])) $tplString .= $this->_var['ABSOLUTE_IMG']; $tplString .='" class="valign_middle" alt="" /></a> ';
}
$tplString .= '
<a href="'; if (isset($this->_var['ABSOLUTE_URL'])) $tplString .= $this->_var['ABSOLUTE_URL']; $tplString .='" title="'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='">'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='</a>
</li>
';
}
$tplString .= '
'; ?>