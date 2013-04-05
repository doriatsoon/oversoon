<?php $tplString = '<dl>
<dt><label for="WikiWhere">'; if (isset($this->_var['L_WHERE'])) $tplString .= $this->_var['L_WHERE']; $tplString .='</label></dt>
<dd>
<select id="WikiWhere" name="WikiWhere" class="search_field">
<option value="title" '; if (isset($this->_var['IS_TITLE_SELECTED'])) $tplString .= $this->_var['IS_TITLE_SELECTED']; $tplString .='>'; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .='</option>
<option value="contents" '; if (isset($this->_var['IS_CONTENTS_SELECTED'])) $tplString .= $this->_var['IS_CONTENTS_SELECTED']; $tplString .='>'; if (isset($this->_var['L_CONTENTS'])) $tplString .= $this->_var['L_CONTENTS']; $tplString .='</option>
<option value="all" '; if (isset($this->_var['IS_ALL_SELECTED'])) $tplString .= $this->_var['IS_ALL_SELECTED']; $tplString .='>'; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .=' / '; if (isset($this->_var['L_CONTENTS'])) $tplString .= $this->_var['L_CONTENTS']; $tplString .='</option>
</select>
</dd>
</dl>'; ?>