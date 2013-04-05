<?php $tplString = '<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_RANDOM_PICS'])) $tplString .= $this->_var['L_RANDOM_PICS']; $tplString .='</h5>
</div>
<div class="module_mini_contents">
<div style="width:'; if (isset($this->_var['WIDTH_DIV'])) $tplString .= $this->_var['WIDTH_DIV']; $tplString .='px;height:'; if (isset($this->_var['HEIGHT_DIV'])) $tplString .= $this->_var['HEIGHT_DIV']; $tplString .='px;margin:auto;">
<div style="position:relative;width:'; if (isset($this->_var['WIDTH_DIV'])) $tplString .= $this->_var['WIDTH_DIV']; $tplString .='px;height:'; if (isset($this->_var['HEIGHT_DIV'])) $tplString .= $this->_var['HEIGHT_DIV']; $tplString .='px;overflow:hidden;" id="scrolling_images">
';
if (isset($this->_var['C_STATIC']) && $this->_var['C_STATIC']) {
$tplString .= '
';
if (!isset($this->_block['pics_mini']) || !is_array($this->_block['pics_mini'])) $this->_block['pics_mini'] = array();
foreach ($this->_block['pics_mini'] as $pics_mini_key => $pics_mini_value) {
$_tmpb_pics_mini = &$this->_block['pics_mini'][$pics_mini_key];
$tplString .= '
<a href="'; if (isset($_tmpb_pics_mini['U_PICS'])) $tplString .= $_tmpb_pics_mini['U_PICS']; $tplString .= '#pics_max"><img src="'; if (isset($_tmpb_pics_mini['PICS'])) $tplString .= $_tmpb_pics_mini['PICS']; $tplString .= '" alt="'; if (isset($_tmpb_pics_mini['NAME'])) $tplString .= $_tmpb_pics_mini['NAME']; $tplString .= '" width="'; if (isset($_tmpb_pics_mini['WIDTH'])) $tplString .= $_tmpb_pics_mini['WIDTH']; $tplString .= 'px" height="'; if (isset($_tmpb_pics_mini['HEIGHT'])) $tplString .= $_tmpb_pics_mini['HEIGHT']; $tplString .= 'px" /></a>
';
}
$tplString .= '
';
} else {
$tplString .= '
<script src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/gallery/templates/images/js/marquee.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
new Marquee({
element: "scrolling_images",
';
if (isset($this->_var['C_VERTICAL_SCROLL']) && $this->_var['C_VERTICAL_SCROLL']) {
$tplString .= '	
animIn: Marquee.blindIn,
animOut: Marquee.blindOut,
';
}
$tplString .= '
';
if (isset($this->_var['C_HORIZONTAL_SCROLL']) && $this->_var['C_HORIZONTAL_SCROLL']) {
$tplString .= '
animIn: Marquee.slideOut,
animOut: Marquee.slideIn,
';
}
$tplString .= '
';
if (isset($this->_var['C_FADE']) && $this->_var['C_FADE']) {
$tplString .= '
animIn: Marquee.fadeIn,
animOut: Marquee.fadeOut,
';
}
$tplString .= '
delay: '; if (isset($this->_var['SCROLL_DELAY'])) $tplString .= $this->_var['SCROLL_DELAY']; $tplString .=',
data: [
';
if (!isset($this->_block['pics_mini']) || !is_array($this->_block['pics_mini'])) $this->_block['pics_mini'] = array();
foreach ($this->_block['pics_mini'] as $pics_mini_key => $pics_mini_value) {
$_tmpb_pics_mini = &$this->_block['pics_mini'][$pics_mini_key];
$tplString .= '
{ message: \'<a href="'; if (isset($_tmpb_pics_mini['U_PICS'])) $tplString .= $_tmpb_pics_mini['U_PICS']; $tplString .= '#pics_max"><img src="'; if (isset($_tmpb_pics_mini['PICS'])) $tplString .= $_tmpb_pics_mini['PICS']; $tplString .= '" alt="'; if (isset($_tmpb_pics_mini['NAME'])) $tplString .= $_tmpb_pics_mini['NAME']; $tplString .= '" width="'; if (isset($_tmpb_pics_mini['WIDTH'])) $tplString .= $_tmpb_pics_mini['WIDTH']; $tplString .= 'px" height="'; if (isset($_tmpb_pics_mini['HEIGHT'])) $tplString .= $_tmpb_pics_mini['HEIGHT']; $tplString .= 'px" /></a>\' },
';
}
$tplString .= '
]
});
-->
</script>
';
}
$tplString .= '
</div>
</div>
<a class="small_link" href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/gallery/gallery.php'; if (isset($this->_var['SID'])) $tplString .= $this->_var['SID']; $tplString .='">'; if (isset($this->_var['L_GALLERY'])) $tplString .= $this->_var['L_GALLERY']; $tplString .='</a>
</div>
<div class="module_mini_bottom">
</div>
</div>
<span id="test"></span>
'; ?>