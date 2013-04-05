<?php $tplString = '';
if (isset($this->_var['C_VERTICAL']) && $this->_var['C_VERTICAL']) {
$tplString .= '
<form action="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/newsletter/newsletter.php?token='; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='" method="post">
<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_NEWSLETTER'])) $tplString .= $this->_var['L_NEWSLETTER']; $tplString .='</h5>
</div>
<div class="module_mini_contents">
<p>
<input type="text" name="mail_newsletter" maxlength="50" size="18" class="text" value="'; if (isset($this->_var['USER_MAIL'])) $tplString .= $this->_var['USER_MAIL']; $tplString .='" />
</p>
<p>
<label><input type="radio" name="subscribe" value="subscribe" checked="checked" /> '; if (isset($this->_var['SUBSCRIBE'])) $tplString .= $this->_var['SUBSCRIBE']; $tplString .='</label>
<br />
<label><input type="radio" name="subscribe" value="unsubscribe" /> '; if (isset($this->_var['UNSUBSCRIBE'])) $tplString .= $this->_var['UNSUBSCRIBE']; $tplString .='</label>
</p>
<p>
<input type="hidden" name="token" value="'; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='" />
<input type="submit" value="'; if (isset($this->_var['L_SUBMIT'])) $tplString .= $this->_var['L_SUBMIT']; $tplString .='" class="submit" />	
</p>
<p style="margin:0;margin-top:10px;">
<a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/newsletter/newsletter.php'; if (isset($this->_var['SID'])) $tplString .= $this->_var['SID']; $tplString .='" class="small_link">'; if (isset($this->_var['L_ARCHIVES'])) $tplString .= $this->_var['L_ARCHIVES']; $tplString .='</a>
</p>
</div>
<div class="module_mini_bottom">
</div>
</div>
</form>
';
} else {
$tplString .= '
<div style="margin:10px 10px">
<form action="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/newsletter/newsletter.php?token='; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='" method="post">
<div class="newsletter_form" style="float:right;">
<span class="newsletter_title">'; if (isset($this->_var['L_NEWSLETTER'])) $tplString .= $this->_var['L_NEWSLETTER']; $tplString .='</span> 
<input type="text" name="mail_newsletter" maxlength="50" size="16" class="text newsletter_text" value="'; if (isset($this->_var['USER_MAIL'])) $tplString .= $this->_var['USER_MAIL']; $tplString .='" />
<input type="image" class="newsletter_img" value="1" src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/newsletter/templates/images/newsletter_submit.png" />
<input type="hidden" name="subscribe" value="subscribe" />
</div>
</form>
</div>
';
}
$tplString .= '
'; ?>