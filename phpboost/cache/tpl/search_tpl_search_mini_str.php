<?php $tplString = '<script type="text/javascript">
<!--
function check_search_mini_form_post()
{
var textSearched = document.getElementById(\'TxTMiniSearched\').value;
if ( (textSearched.length > 3) && (textSearched != escape(\''; if (isset($this->_var['L_SEARCH'])) $tplString .= $this->_var['L_SEARCH']; $tplString .='...\')) )
{
textSearched = escape_xmlhttprequest(textSearched);
return true;
}
else
{
alert(\''; if (isset($this->_var['WARNING_LENGTH_STRING_SEARCH'])) $tplString .= $this->_var['WARNING_LENGTH_STRING_SEARCH']; $tplString .='\');
return false;
}
}
-->
</script>

';
if (isset($this->_var['C_VERTICAL']) && $this->_var['C_VERTICAL']) {
$tplString .= '
<form action="'; if (isset($this->_var['U_FORM_VALID'])) $tplString .= $this->_var['U_FORM_VALID']; $tplString .='" onsubmit="return check_search_mini_form_post();" method="post">
<div class="module_mini_container">
<div class="module_mini_top"><h5 class="sub_title">'; if (isset($this->_var['SEARCH'])) $tplString .= $this->_var['SEARCH']; $tplString .='</h5></div>
<div class="module_mini_contents">
<label><input type="text" size="14" id="TxTMiniSearched" name="q" value="'; if (isset($this->_var['TEXT_SEARCHED'])) $tplString .= $this->_var['TEXT_SEARCHED']; $tplString .='" class="text" style="background:#FFFFFF url('; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/search.png) no-repeat;background-position:2px 1px;padding-left:22px;" onclick="if(this.value==\''; if (isset($this->_var['L_SEARCH'])) $tplString .= $this->_var['L_SEARCH']; $tplString .='...\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\''; if (isset($this->_var['L_SEARCH'])) $tplString .= $this->_var['L_SEARCH']; $tplString .='...\';" /></label>
<br /><br />
<input type="hidden" name="token" value="'; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='" />
<input type="submit" id="search_mini_submit" name="search_submit"value="'; if (isset($this->_var['SEARCH'])) $tplString .= $this->_var['SEARCH']; $tplString .='" class="submit" /><br />
<a href="'; if (isset($this->_var['U_ADVANCED_SEARCH'])) $tplString .= $this->_var['U_ADVANCED_SEARCH']; $tplString .='" class="small_link">'; if (isset($this->_var['L_ADVANCED_SEARCH'])) $tplString .= $this->_var['L_ADVANCED_SEARCH']; $tplString .='</a>
</div>
<div class="module_mini_bottom"></div>
</div>
</form>
';
} else {
$tplString .= '
<form action="'; if (isset($this->_var['U_FORM_VALID'])) $tplString .= $this->_var['U_FORM_VALID']; $tplString .='" onsubmit="return check_search_mini_form_post();" method="post">
<div id="search_form">
<input type="text" size="14" id="TxTMiniSearched" name="q" value="'; if (isset($this->_var['TEXT_SEARCHED'])) $tplString .= $this->_var['TEXT_SEARCHED']; $tplString .='" class="search_entry" onclick="if(this.value==\''; if (isset($this->_var['L_SEARCH'])) $tplString .= $this->_var['L_SEARCH']; $tplString .='...\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\''; if (isset($this->_var['L_SEARCH'])) $tplString .= $this->_var['L_SEARCH']; $tplString .='...\';" />
<input type="hidden" name="search_submit" id="search_submit_mini" value="'; if (isset($this->_var['SEARCH'])) $tplString .= $this->_var['SEARCH']; $tplString .='" class="submit" />
<input type="image" name="search_submit" class="search_submit" value="1" src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/search/templates/images/search_submit.png" />
</div>
</form>
';
}
 ?>