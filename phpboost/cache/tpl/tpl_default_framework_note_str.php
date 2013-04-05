<?php $tplString = '<script type="text/javascript">
<!--
';
if (isset($this->_var['C_JS_NOTE']) && $this->_var['C_JS_NOTE']) {
$tplString .= '
array_note = new Array();
';
}
$tplString .= '

var theme = \''; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='\';
var l_already_voted = \''; if (isset($this->_var['L_ALERT_ALREADY_VOTE'])) $tplString .= $this->_var['L_ALERT_ALREADY_VOTE']; $tplString .='\';
var l_auth_error = \''; if (isset($this->_var['L_AUTH_ERROR'])) $tplString .= $this->_var['L_AUTH_ERROR']; $tplString .='\';
var l_notes = \''; if (isset($this->_var['L_NOTES'])) $tplString .= $this->_var['L_NOTES']; $tplString .='\';
var l_note = \''; if (isset($this->_var['L_NOTE'])) $tplString .= $this->_var['L_NOTE']; $tplString .='\';
var note_max = '; if (isset($this->_var['NOTE_MAX'])) $tplString .= $this->_var['NOTE_MAX']; $tplString .=';
'; if (isset($this->_var['ARRAY_NOTE'])) $tplString .= $this->_var['ARRAY_NOTE']; $tplString .='
note_timeout = null;
on_img = 0;
-->
</script> 
';
if (isset($this->_var['C_JS_NOTE']) && $this->_var['C_JS_NOTE']) {
$tplString .= '
<script type="text/javascript" src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/kernel/framework/js/note.js"></script>
';
}
$tplString .= '

<form action="" method="post" class="text_small">
<div>
'; if (isset($this->_var['NOTE'])) $tplString .= $this->_var['NOTE']; $tplString .='
<select id="note_select'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='" name="note">
'; if (isset($this->_var['SELECT'])) $tplString .= $this->_var['SELECT']; $tplString .='
</select>
<input type="hidden" name="token" value="'; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='" />
<input type="submit" name="valid_note" id="valid_note'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='" value="'; if (isset($this->_var['L_VALID_NOTE'])) $tplString .= $this->_var['L_VALID_NOTE']; $tplString .='" class="submit" style="padding:1px 2px;" />
</div>
<script type="text/javascript">
<!--
document.getElementById(\'note_value'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\').style.display = \'none\';
document.getElementById(\'note_select'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\').style.display = \'none\';
document.getElementById(\'valid_note'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\').style.display = \'none\';
document.getElementById(\'note_stars'; if (isset($this->_var['ID'])) $tplString .= $this->_var['ID']; $tplString .='\').style.display = \''; if (isset($this->_var['DISPLAY'])) $tplString .= $this->_var['DISPLAY']; $tplString .='\';
-->
</script>
</form>
'; ?>