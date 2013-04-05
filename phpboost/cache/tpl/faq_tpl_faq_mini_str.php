<?php $tplString = '<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_FAQ_RANDOM_QUESTION'])) $tplString .= $this->_var['L_FAQ_RANDOM_QUESTION']; $tplString .='</h5>
</div>
<div class="module_mini_contents">
<a href="'; if (isset($this->_var['U_FAQ_QUESTION'])) $tplString .= $this->_var['U_FAQ_QUESTION']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/faq/faq.png" alt="" /></a>
<br />
<a href="'; if (isset($this->_var['U_FAQ_QUESTION'])) $tplString .= $this->_var['U_FAQ_QUESTION']; $tplString .='" class="small_link">'; if (isset($this->_var['FAQ_QUESTION'])) $tplString .= $this->_var['FAQ_QUESTION']; $tplString .='</a>
</div>
<div class="module_mini_bottom">
</div>
</div>
'; ?>