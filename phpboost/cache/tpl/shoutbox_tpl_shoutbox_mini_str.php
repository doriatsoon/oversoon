<?php $tplString = '<script type="text/javascript">
<!--
function XMLHttpRequest_shoutmsg()
{
';
if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) {
$tplString .= '
tinyMCE.triggerSave();
';
}
$tplString .= '

var pseudo = document.getElementById("shout_pseudo").value;
var contents = document.getElementById("shout_contents").value;if( pseudo != \'\' && contents != \'\' )
{
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/loading_mini.gif\';pseudo = escape_xmlhttprequest(pseudo);
contents = escape_xmlhttprequest(contents);
data = "pseudo=" + pseudo + "&contents=" + contents;
var xhr_object = xmlhttprequest_init(\''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/shoutbox/xmlhttprequest.php?token='; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='&add=1&token='; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='\');
xhr_object.onreadystatechange = function() 
{
if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText != \'-1\' && xhr_object.responseText != \'-2\' && xhr_object.responseText != \'-3\' && xhr_object.responseText != \'-4\' && xhr_object.responseText != \'-5\' && xhr_object.responseText != \'-6\' )
{	
var array_shout = new Array(\'\', \'\');
eval(xhr_object.responseText);
document.getElementById(\'shout_container\').innerHTML = \'<p id="shout_container_\' + array_shout[2] + \'">\' + array_shout[0] + \'<span class="text_small">: \' + array_shout[1] + \'</span></p>\' + document.getElementById(\'shout_container\').innerHTML;
document.getElementById(\'shout_contents\').value = \'\';
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/refresh_mini.png\';
}
else if( xhr_object.readyState == 4 )
{	
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/refresh_mini.png\';
switch( xhr_object.responseText )
{
case \'-1\': 
alert("'; if (isset($this->_var['L_ALERT_UNAUTH_POST'])) $tplString .= $this->_var['L_ALERT_UNAUTH_POST']; $tplString .='");
break;
case \'-2\': 
alert("'; if (isset($this->_var['L_ALERT_FLOOD'])) $tplString .= $this->_var['L_ALERT_FLOOD']; $tplString .='");
break;
case \'-3\': 
alert("'; if (isset($this->_var['L_ALERT_LINK_PSEUDO'])) $tplString .= $this->_var['L_ALERT_LINK_PSEUDO']; $tplString .='");
break;
case \'-4\': 
alert("'; if (isset($this->_var['L_ALERT_LINK_FLOOD'])) $tplString .= $this->_var['L_ALERT_LINK_FLOOD']; $tplString .='");
break;
case \'-5\': 
alert("'; if (isset($this->_var['L_ALERT_INCOMPLETE'])) $tplString .= $this->_var['L_ALERT_INCOMPLETE']; $tplString .='");
break;
case \'-6\': 
alert("'; if (isset($this->_var['L_ALERT_READONLY'])) $tplString .= $this->_var['L_ALERT_READONLY']; $tplString .='");
break;
}
}
}
xmlhttprequest_sender(xhr_object, data);
}
else
alert("'; if (isset($this->_var['L_ALERT_INCOMPLETE'])) $tplString .= $this->_var['L_ALERT_INCOMPLETE']; $tplString .='");
}
function XMLHttpRequest_shoutdelmsg(idmsg)
{
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/loading_mini.gif\';
data = "idmsg=" + idmsg;
var xhr_object = xmlhttprequest_init(\''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/shoutbox/xmlhttprequest.php?del=1&token='; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='\');
xhr_object.onreadystatechange = function() 
{
if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText == \'1\' )
{
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/refresh_mini.png\';
document.getElementById(\'shout_container_\' + idmsg).style.display = \'none\';
}
else if( xhr_object.readyState == 4 )
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/refresh_mini.png\';
}
xmlhttprequest_sender(xhr_object, data);
}function XMLHttpRequest_shoutrefresh()
{
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/loading_mini.gif\';
var xhr_object = xmlhttprequest_init(\''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/shoutbox/xmlhttprequest.php?refresh=1&token='; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='\');
xhr_object.onreadystatechange = function() 
{
if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText != \'\' )
{
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/refresh_mini.png\';
document.getElementById(\'shout_container\').innerHTML = xhr_object.responseText;
}
else if( xhr_object.readyState == 4 )
document.getElementById(\'shoutimg\').src = \''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/refresh_mini.png\';
}
xmlhttprequest_sender(xhr_object, null);
if( '; if (isset($this->_var['SHOUT_REFRESH_DELAY'])) $tplString .= $this->_var['SHOUT_REFRESH_DELAY']; $tplString .=' > 0 )
setTimeout(\'XMLHttpRequest_shoutrefresh()\', '; if (isset($this->_var['SHOUT_REFRESH_DELAY'])) $tplString .= $this->_var['SHOUT_REFRESH_DELAY']; $tplString .=');
}
function check_form_shout(){
if(document.getElementById(\'shout_contents\').value == "") {
alert("'; if (isset($this->_var['L_ALERT_TEXT'])) $tplString .= $this->_var['L_ALERT_TEXT']; $tplString .='");
return false;
}
return true;
}
function Confirm_del_shout(idmsg) {
if( confirm("'; if (isset($this->_var['L_DELETE_MSG'])) $tplString .= $this->_var['L_DELETE_MSG']; $tplString .='") )
XMLHttpRequest_shoutdelmsg(idmsg);
}
if( '; if (isset($this->_var['SHOUT_REFRESH_DELAY'])) $tplString .= $this->_var['SHOUT_REFRESH_DELAY']; $tplString .=' > 0 )
setTimeout(\'XMLHttpRequest_shoutrefresh()\', '; if (isset($this->_var['SHOUT_REFRESH_DELAY'])) $tplString .= $this->_var['SHOUT_REFRESH_DELAY']; $tplString .=');
-->
</script><form action="?token='; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='" method="post" onsubmit="return check_form_shout();">
<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_SHOUTBOX'])) $tplString .= $this->_var['L_SHOUTBOX']; $tplString .='</h5>
</div>
<div class="module_mini_contents">
<div id="shout_container">
';
if (!isset($this->_block['shout']) || !is_array($this->_block['shout'])) $this->_block['shout'] = array();
foreach ($this->_block['shout'] as $shout_key => $shout_value) {
$_tmpb_shout = &$this->_block['shout'][$shout_key];
$tplString .= '
<p id="shout_container_'; if (isset($_tmpb_shout['IDMSG'])) $tplString .= $_tmpb_shout['IDMSG']; $tplString .= '">'; if (isset($_tmpb_shout['PSEUDO'])) $tplString .= $_tmpb_shout['PSEUDO']; $tplString .= '<span class="text_small">: '; if (isset($_tmpb_shout['CONTENTS'])) $tplString .= $_tmpb_shout['CONTENTS']; $tplString .= '</span></p>
';
}
$tplString .= '
</div>
';
if (isset($this->_var['C_VISIBLE_SHOUT']) && $this->_var['C_VISIBLE_SHOUT']) {
$tplString .= '
<label for="shout_pseudo"><span class="text_small">'; if (isset($this->_var['L_PSEUDO'])) $tplString .= $this->_var['L_PSEUDO']; $tplString .='</span></label>
<input size="16" maxlength="25" type="text" class="text" name="shout_pseudo" id="shout_pseudo" value="'; if (isset($this->_var['SHOUTBOX_PSEUDO'])) $tplString .= $this->_var['SHOUTBOX_PSEUDO']; $tplString .='" />
';
}
$tplString .= '
';
if (isset($this->_var['C_HIDDEN_SHOUT']) && $this->_var['C_HIDDEN_SHOUT']) {
$tplString .= '
<input size="16" maxlength="25" type="hidden" class="text" name="shout_pseudo" id="shout_pseudo" value="'; if (isset($this->_var['SHOUTBOX_PSEUDO'])) $tplString .= $this->_var['SHOUTBOX_PSEUDO']; $tplString .='" />
';
}
$tplString .= '
<br />
<label for="shout_contents"><span class="text_small">'; if (isset($this->_var['L_MESSAGE'])) $tplString .= $this->_var['L_MESSAGE']; $tplString .='</span></label>
<textarea class="post" id="shout_contents" name="shout_contents" rows="4" cols="16"></textarea>

<input type="submit" name="shoutbox" id="shoutbox_submit" value="'; if (isset($this->_var['L_SUBMIT'])) $tplString .= $this->_var['L_SUBMIT']; $tplString .='" class="submit" />
<script type="text/javascript">
<!--
document.getElementById(\'shoutbox_submit\').style.display = \'none\';
document.write(\'<input value="'; if (isset($this->_var['L_SUBMIT'])) $tplString .= $this->_var['L_SUBMIT']; $tplString .='" onclick="XMLHttpRequest_shoutmsg();" type="button" class="submit" />\');
-->
</script>
<a href="javascript:XMLHttpRequest_shoutrefresh();" title="'; if (isset($this->_var['L_REFRESH'])) $tplString .= $this->_var['L_REFRESH']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/refresh_mini.png" id="shoutimg" alt="'; if (isset($this->_var['L_REFRESH'])) $tplString .= $this->_var['L_REFRESH']; $tplString .='" class="valign_middle" /></a>
<p style="margin:0;margin-top:10px;">
<a class="small_link" href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/shoutbox/shoutbox.php'; if (isset($this->_var['SID'])) $tplString .= $this->_var['SID']; $tplString .='" title="">'; if (isset($this->_var['L_ARCHIVES'])) $tplString .= $this->_var['L_ARCHIVES']; $tplString .='</a>
</p>
</div>
<div class="module_mini_bottom">
</div>
</div>
</form>
'; ?>