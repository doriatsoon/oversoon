<?php $tplString = '<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_STATS'])) $tplString .= $this->_var['L_STATS']; $tplString .='</h5>
</div>
<div class="module_mini_contents">
<p>
'; if (isset($this->_var['L_USER_REGISTERED'])) $tplString .= $this->_var['L_USER_REGISTERED']; $tplString .='
</p>	
<p>
'; if (isset($this->_var['L_LAST_REGISTERED_USER'])) $tplString .= $this->_var['L_LAST_REGISTERED_USER']; $tplString .=':
<br /> 
'; if (isset($this->_var['U_LINK_LAST_USER'])) $tplString .= $this->_var['U_LINK_LAST_USER']; $tplString .='
</p>	
<p style="margin:0;margin-top:10px;">
<a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/stats/stats.php'; if (isset($this->_var['SID'])) $tplString .= $this->_var['SID']; $tplString .='" title="'; if (isset($this->_var['L_MORE_STAT'])) $tplString .= $this->_var['L_MORE_STAT']; $tplString .='" class="small_link">'; if (isset($this->_var['L_MORE_STAT'])) $tplString .= $this->_var['L_MORE_STAT']; $tplString .='</a>
</p>
</div>
<div class="module_mini_bottom">
</div>
</div>'; ?>