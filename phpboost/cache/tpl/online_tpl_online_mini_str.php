<?php $tplString = '<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_ONLINE'])) $tplString .= $this->_var['L_ONLINE']; $tplString .='</h5>
</div>
<div class="module_mini_contents">
<span class="text_small">'; if (isset($this->_var['VISIT'])) $tplString .= $this->_var['VISIT']; $tplString .=' '; if (isset($this->_var['L_VISITOR'])) $tplString .= $this->_var['L_VISITOR']; $tplString .=', '; if (isset($this->_var['USER'])) $tplString .= $this->_var['USER']; $tplString .=' '; if (isset($this->_var['L_USER'])) $tplString .= $this->_var['L_USER']; $tplString .=', '; if (isset($this->_var['MODO'])) $tplString .= $this->_var['MODO']; $tplString .=' '; if (isset($this->_var['L_MODO'])) $tplString .= $this->_var['L_MODO']; $tplString .=', '; if (isset($this->_var['ADMIN'])) $tplString .= $this->_var['ADMIN']; $tplString .=' '; if (isset($this->_var['L_ADMIN'])) $tplString .= $this->_var['L_ADMIN']; $tplString .=' '; if (isset($this->_var['L_ONLINE'])) $tplString .= $this->_var['L_ONLINE']; $tplString .='.</span>
<br /><br />
';
if (!isset($this->_block['online']) || !is_array($this->_block['online'])) $this->_block['online'] = array();
foreach ($this->_block['online'] as $online_key => $online_value) {
$_tmpb_online = &$this->_block['online'][$online_key];
$tplString .= '
'; if (isset($_tmpb_online['USER'])) $tplString .= $_tmpb_online['USER']; $tplString .= '
';
}
$tplString .= '
'; if (isset($this->_var['MORE'])) $tplString .= $this->_var['MORE']; $tplString .='

<div class="text_small" style="margin-top:10px;">
'; if (isset($this->_var['L_TOTAL'])) $tplString .= $this->_var['L_TOTAL']; $tplString .=' : '; if (isset($this->_var['TOTAL'])) $tplString .= $this->_var['TOTAL']; $tplString .='
</div>
</div>
<div class="module_mini_bottom">
</div>
</div>
'; ?>