<?php $tplString = '<script type="text/javascript">
<!--
function refresh_img_'; if (isset($this->_var['CAPTCHA_INSTANCE'])) $tplString .= $this->_var['CAPTCHA_INSTANCE']; $tplString .='()
{
if ( typeof this.img_id == \'undefined\' )
this.img_id = 0;
else
this.img_id++;
document.getElementById(\'verif_code_img'; if (isset($this->_var['CAPTCHA_INSTANCE'])) $tplString .= $this->_var['CAPTCHA_INSTANCE']; $tplString .='\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/verif_code.php?instance='; if (isset($this->_var['CAPTCHA_INSTANCE'])) $tplString .= $this->_var['CAPTCHA_INSTANCE']; $tplString .='&width='; if (isset($this->_var['CAPTCHA_WIDTH'])) $tplString .= $this->_var['CAPTCHA_WIDTH']; $tplString .='&difficulty='; if (isset($this->_var['CAPTCHA_DIFFICULTY'])) $tplString .= $this->_var['CAPTCHA_DIFFICULTY']; $tplString .='&height='; if (isset($this->_var['CAPTCHA_HEIGHT'])) $tplString .= $this->_var['CAPTCHA_HEIGHT']; $tplString .='&font='; if (isset($this->_var['CAPTCHA_FONT'])) $tplString .= $this->_var['CAPTCHA_FONT']; $tplString .='&new=\' + img_id;}
-->
</script>
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/verif_code.php?instance='; if (isset($this->_var['CAPTCHA_INSTANCE'])) $tplString .= $this->_var['CAPTCHA_INSTANCE']; $tplString .='&amp;width='; if (isset($this->_var['CAPTCHA_WIDTH'])) $tplString .= $this->_var['CAPTCHA_WIDTH']; $tplString .='&amp;height='; if (isset($this->_var['CAPTCHA_HEIGHT'])) $tplString .= $this->_var['CAPTCHA_HEIGHT']; $tplString .='&amp;difficulty='; if (isset($this->_var['CAPTCHA_DIFFICULTY'])) $tplString .= $this->_var['CAPTCHA_DIFFICULTY']; $tplString .='&amp;font='; if (isset($this->_var['CAPTCHA_FONT'])) $tplString .= $this->_var['CAPTCHA_FONT']; $tplString .='" id="verif_code_img'; if (isset($this->_var['CAPTCHA_INSTANCE'])) $tplString .= $this->_var['CAPTCHA_INSTANCE']; $tplString .='" alt="" style="padding:2px;" />
<br />
<input size="30" type="text" class="text" name="verif_code'; if (isset($this->_var['CAPTCHA_INSTANCE'])) $tplString .= $this->_var['CAPTCHA_INSTANCE']; $tplString .='" id="verif_code'; if (isset($this->_var['CAPTCHA_INSTANCE'])) $tplString .= $this->_var['CAPTCHA_INSTANCE']; $tplString .='" />
<a href="javascript:refresh_img_'; if (isset($this->_var['CAPTCHA_INSTANCE'])) $tplString .= $this->_var['CAPTCHA_INSTANCE']; $tplString .='()"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/refresh.png" alt="" class="valign_middle" /></a>
'; ?>