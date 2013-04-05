<?php $tplString = '<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_RANDOM_GESTBOOK'])) $tplString .= $this->_var['L_RANDOM_GESTBOOK']; $tplString .='</h5>
</div>
<div class="module_mini_contents">
';
if (isset($this->_var['C_ANY_MESSAGE_GESTBOOK']) && $this->_var['C_ANY_MESSAGE_GESTBOOK']) {
$tplString .= '
<p class="text_small">'; if (isset($this->_var['L_BY'])) $tplString .= $this->_var['L_BY']; $tplString .=' '; if (isset($this->_var['RAND_MSG_LOGIN'])) $tplString .= $this->_var['RAND_MSG_LOGIN']; $tplString .='</p>
<p class="text_small">'; if (isset($this->_var['RAND_MSG_CONTENTS'])) $tplString .= $this->_var['RAND_MSG_CONTENTS']; $tplString .='</p>
';
} else {
$tplString .= '
<p class="text_small">'; if (isset($this->_var['L_NO_MESSAGE_GESTBOOK'])) $tplString .= $this->_var['L_NO_MESSAGE_GESTBOOK']; $tplString .='</p>
';
}
$tplString .= '
<p><a class="small_link" href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/guestbook/guestbook.php">'; if (isset($this->_var['L_RANDOM_GESTBOOK'])) $tplString .= $this->_var['L_RANDOM_GESTBOOK']; $tplString .='</a></p>
</div>
<div class="module_mini_bottom">
</div>
</div>
'; ?>