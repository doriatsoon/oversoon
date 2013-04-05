<?php $tplString = '<dl>
<dt><label for="ForumTime">'; if (isset($this->_var['L_DATE'])) $tplString .= $this->_var['L_DATE']; $tplString .='</label></dt>
<dd>
<select id="ForumTime" name="ForumTime" class="search_field">
<option value="30000" '; if (isset($this->_var['IS_SELECTED_30000'])) $tplString .= $this->_var['IS_SELECTED_30000']; $tplString .='>Tout</option>
<option value="1" '; if (isset($this->_var['IS_SELECTED_1'])) $tplString .= $this->_var['IS_SELECTED_1']; $tplString .='>1 '; if (isset($this->_var['L_DAY'])) $tplString .= $this->_var['L_DAY']; $tplString .='</option>
<option value="7" '; if (isset($this->_var['IS_SELECTED_7'])) $tplString .= $this->_var['IS_SELECTED_7']; $tplString .='>7 '; if (isset($this->_var['L_DAYS'])) $tplString .= $this->_var['L_DAYS']; $tplString .='</option>
<option value="15" '; if (isset($this->_var['IS_SELECTED_15'])) $tplString .= $this->_var['IS_SELECTED_15']; $tplString .='>15 '; if (isset($this->_var['L_DAYS'])) $tplString .= $this->_var['L_DAYS']; $tplString .='</option>
<option value="30" '; if (isset($this->_var['IS_SELECTED_30'])) $tplString .= $this->_var['IS_SELECTED_30']; $tplString .='>1 '; if (isset($this->_var['L_MONTH'])) $tplString .= $this->_var['L_MONTH']; $tplString .='</option>
<option value="180" '; if (isset($this->_var['IS_SELECTED_180'])) $tplString .= $this->_var['IS_SELECTED_180']; $tplString .='>6 '; if (isset($this->_var['L_MONTHS'])) $tplString .= $this->_var['L_MONTHS']; $tplString .='</option>
<option value="360" '; if (isset($this->_var['IS_SELECTED_360'])) $tplString .= $this->_var['IS_SELECTED_360']; $tplString .='>1 '; if (isset($this->_var['L_YEAR'])) $tplString .= $this->_var['L_YEAR']; $tplString .='</option>
</select>
</dd>
</dl>
<dl>
<dt><label for="ForumIdcat">'; if (isset($this->_var['L_CATEGORY'])) $tplString .= $this->_var['L_CATEGORY']; $tplString .='</label></dt>
<dd><label>
<select name="ForumIdcat" id="ForumIdcat" class="search_field">
<option value="-1" '; if (isset($this->_var['IS_ALL_CATS_SELECTED'])) $tplString .= $this->_var['IS_ALL_CATS_SELECTED']; $tplString .='>'; if (isset($this->_var['L_ALL_CATS'])) $tplString .= $this->_var['L_ALL_CATS']; $tplString .='</option>
';
if (!isset($this->_block['cats']) || !is_array($this->_block['cats'])) $this->_block['cats'] = array();
foreach ($this->_block['cats'] as $cats_key => $cats_value) {
$_tmpb_cats = &$this->_block['cats'][$cats_key];
$tplString .= '
<option value="'; if (isset($_tmpb_cats['ID'])) $tplString .= $_tmpb_cats['ID']; $tplString .= '" '; if (isset($_tmpb_cats['IS_SELECTED'])) $tplString .= $_tmpb_cats['IS_SELECTED']; $tplString .= '>'; if (isset($_tmpb_cats['MARGIN'])) $tplString .= $_tmpb_cats['MARGIN']; $tplString .= ' '; if (isset($_tmpb_cats['L_NAME'])) $tplString .= $_tmpb_cats['L_NAME']; $tplString .= '</option>
';
}
$tplString .= '
</select>
</label></dd>
</dl>
<dl>
<dt><label for="ForumWhere">'; if (isset($this->_var['L_OPTIONS'])) $tplString .= $this->_var['L_OPTIONS']; $tplString .='</label></dt>
<dd>
<label><input type="radio" id="ForumWhere" name="ForumWhere" value="title" '; if (isset($this->_var['IS_TITLE_CHECKED'])) $tplString .= $this->_var['IS_TITLE_CHECKED']; $tplString .='/> '; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .='</label>
<br />
<label><input type="radio" name="ForumWhere" id="where" value="contents" '; if (isset($this->_var['IS_CONTENTS_CHECKED'])) $tplString .= $this->_var['IS_CONTENTS_CHECKED']; $tplString .='/> '; if (isset($this->_var['L_CONTENTS'])) $tplString .= $this->_var['L_CONTENTS']; $tplString .='</label>
<br />
<label><input type="radio" name="ForumWhere" value="all" '; if (isset($this->_var['IS_ALL_CHECKED'])) $tplString .= $this->_var['IS_ALL_CHECKED']; $tplString .='/> '; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .=' / '; if (isset($this->_var['L_CONTENTS'])) $tplString .= $this->_var['L_CONTENTS']; $tplString .='</label>
</dd>
</dl>
<dl>
<dt><label for="ForumColorate_result">'; if (isset($this->_var['L_COLORATE_RESULTS'])) $tplString .= $this->_var['L_COLORATE_RESULTS']; $tplString .='</label></dt>
<dd>
<label><input type="checkbox" name="ForumColorate_result" id="ForumColorate_result" value="1" '; if (isset($this->_var['IS_COLORATION_CHECKED'])) $tplString .= $this->_var['IS_COLORATION_CHECKED']; $tplString .='/></label>
</dd>
</dl>'; ?>