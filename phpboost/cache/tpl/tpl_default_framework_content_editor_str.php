<?php $tplString = '<script type="text/javascript">
<!--
var displayed = new Array();
displayed[\''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\'] = false;
function XMLHttpRequest_preview(field)
{
if( XMLHttpRequest_preview.arguments.length == 0 )
field = \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\';'; if (isset($this->_var['TINYMCE_TRIGGER'])) $tplString .= $this->_var['TINYMCE_TRIGGER']; $tplString .='
var contents = document.getElementById(field).value;

if( contents != "" )
{
if( !displayed[field] ) 
Effect.BlindDown(\'xmlhttprequest_preview\' + field, { duration: 0.5 });

if( document.getElementById(\'loading_preview\' + field) )
document.getElementById(\'loading_preview\' + field).style.display = \'block\';
displayed[field] = true;new Ajax.Request(
\''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/kernel/framework/ajax/content_xmlhttprequest.php\',
{
method: \'post\',
parameters: {
token: \''; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='\',
path_to_root: \''; if (isset($this->_var['PHP_PATH_TO_ROOT'])) $tplString .= $this->_var['PHP_PATH_TO_ROOT']; $tplString .='\',
editor: \''; if (isset($this->_var['EDITOR_NAME'])) $tplString .= $this->_var['EDITOR_NAME']; $tplString .='\',
page_path: \''; if (isset($this->_var['PAGE_PATH'])) $tplString .= $this->_var['PAGE_PATH']; $tplString .='\',
contents: contents,
ftags: \''; if (isset($this->_var['FORBIDDEN_TAGS'])) $tplString .= $this->_var['FORBIDDEN_TAGS']; $tplString .='\'
 },
onSuccess: function(response)
{
document.getElementById(\'xmlhttprequest_preview\' + field).innerHTML = response.responseText;
if( document.getElementById(\'loading_preview\' + field) )
document.getElementById(\'loading_preview\' + field).style.display = \'none\';
}
}
);
}	
else
alert("'; if (isset($this->_var['L_REQUIRE_TEXT'])) $tplString .= $this->_var['L_REQUIRE_TEXT']; $tplString .='");
}
-->
</script>
<div style="position:relative;display:none;" id="loading_preview'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='"><div style="margin:auto;margin-top:90px;width:100%;text-align:center;position:absolute;"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/loading.gif" alt="" /></div></div>
<div style="display:none;" class="xmlhttprequest_preview" id="xmlhttprequest_preview'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='"></div>

';
if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) {
$tplString .= '
<script language="javascript" type="text/javascript">
<!--
tinyMCE.init({
mode : "exact",
elements : "'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='", 
theme : "advanced",
language : "fr",
content_css : "'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/theme/tinymce.css",
theme_advanced_buttons1 : "'; if (isset($this->_var['THEME_ADVANCED_BUTTONS1'])) $tplString .= $this->_var['THEME_ADVANCED_BUTTONS1']; $tplString .='", 
theme_advanced_buttons2 : "'; if (isset($this->_var['THEME_ADVANCED_BUTTONS2'])) $tplString .= $this->_var['THEME_ADVANCED_BUTTONS2']; $tplString .='", 
theme_advanced_buttons3 : "'; if (isset($this->_var['THEME_ADVANCED_BUTTONS3'])) $tplString .= $this->_var['THEME_ADVANCED_BUTTONS3']; $tplString .='",
theme_advanced_toolbar_location : "top", 
theme_advanced_toolbar_align : "center", 
theme_advanced_statusbar_location : "bottom",
plugins : "table,flash,searchreplace,inlinepopups,fullscreen,emotions",
extended_valid_elements : "font[face|size|color|style],span[class|align|style],a[href|name]",
theme_advanced_resize_horizontal : false, 
theme_advanced_resizing : true
});
-->
</script>

';
if (isset($this->_var['C_UPLOAD_MANAGEMENT']) && $this->_var['C_UPLOAD_MANAGEMENT']) {
$tplString .= '
<div style="float:right;margin-left:5px;">
<a style="font-size: 10px;" title="'; if (isset($this->_var['L_BB_UPLOAD'])) $tplString .= $this->_var['L_BB_UPLOAD']; $tplString .='" href="#" onclick="window.open(\''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/upload.php?popup=1&amp;fd='; if (isset($this->_var['IDENTIFIER'])) $tplString .= $this->_var['IDENTIFIER']; $tplString .='\', \'\', \'height=500,width=720,resizable=yes,scrollbars=yes\');return false;"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/upload/files_add.png" alt="" /></a>
</div>
';
}
$tplString .= '

';
}
$tplString .= '

';
if (isset($this->_var['C_BBCODE_NORMAL_MODE']) && $this->_var['C_BBCODE_NORMAL_MODE']) {
$tplString .= '
';
if (isset($this->_var['C_EDITOR_NOT_ALREADY_INCLUDED']) && $this->_var['C_EDITOR_NOT_ALREADY_INCLUDED']) {
$tplString .= ' <script type="text/javascript" src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/kernel/framework/js/bbcode.js"></script> ';
}
$tplString .= '
<script type="text/javascript">
<!--
function bbcode_color_'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='()
{
var i;
var br;
var contents;
var color = new Array(
\'black\', \'maroon\', \'#333300\', \'#003300\', \'#003366\', \'#000080\', \'#333399\', \'#333333\',
\'#800000\', \'orange\', \'#808000\', \'green\', \'#008080\', \'blue\', \'#666699\', \'#808080\',
\'red\', \'#FF9900\', \'#99CC00\', \'#339966\', \'#33CCCC\', \'#3366FF\', \'#800080\', \'#ACA899\',
\'pink\', \'#FFCC00\', \'yellow\', \'#00FF00\', \'#00FFFF\', \'#00CCFF\', \'#993366\', \'#C0C0C0\',
\'#FF99CC\', \'#FFCC99\', \'#FFFF99\', \'#CCFFCC\', \'#CCFFFF\', \'#CC99FF\', \'#CC99FF\', \'white\');

contents = \'<table style="border-collapse:collapse;margin:auto;"><tr>\';
for(i = 0; i < 40; i++)
{
br = (i+1) % 8;
br = (br == 0 && i != 0 && i < 39) ? \'</tr><tr>\' : \'\';
contents += \'<td style="padding:2px;"><a onclick="insertbbcode(\\\'[color=\' + color[i] + \']\\\', \\\'[/color]\\\', \\\''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\\\');" class="bbcode_hover"><span style="background:\' + color[i] + \';padding:0px 4px;border:1px solid #ACA899;">&nbsp;</span></a></td>\' + br;
}
document.getElementById("bbcolor'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='").innerHTML = contents + \'</tr></table>\';
}
function bbcode_table_'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='()
{
var cols = document.getElementById(\'bb_cols'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\').value;
var lines = document.getElementById(\'bb_lines'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\').value;
var head = document.getElementById(\'bb_head'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\').checked;
var code = \'\';

if( cols >= 0 && lines >= 0 )
{
var colspan = cols > 1 ? \' colspan="\' + cols + \'"\' : \'\';
var pointor = head ? (59 + colspan.length) : 22;
code = head ? \'[table]\\n\\t[row]\\n\\t\\t[head\' + colspan + \']'; if (isset($this->_var['L_TABLE_HEAD'])) $tplString .= $this->_var['L_TABLE_HEAD']; $tplString .='[/head]\\n\\t[/row]\\n\' : \'[table]\\n\';

for(var i = 0; i < lines; i++)
{
code += \'\\t[row]\\n\';
for(var j = 0; j < cols; j++)
code += \'\\t\\t[col][/col]\\n\';
code += \'\\t[/row]\\n\';
}
code += \'[/table]\';

insertbbcode(code.substring(0, pointor), code.substring(pointor, code.length), \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');
}
}
function bbcode_list_'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='()
{
var elements = document.getElementById(\'bb_list'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\').value;
var ordered_list = document.getElementById(\'bb_ordered_list'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\').checked;
if( elements <= 0 )
elements = 1;

var pointor = ordered_list ? 19 : 11;

code = \'[list\' + (ordered_list ? \'=ordered\' : \'\') + \']\\n\';
for(var j = 0; j < elements; j++)
code += \'\\t[*]\\n\';
code += \'[/list]\';
insertbbcode(code.substring(0, pointor), code.substring(pointor, code.length), \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');
}
function bbcode_url_'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='()
{
var url = prompt("'; if (isset($this->_var['L_URL_PROMPT'])) $tplString .= $this->_var['L_URL_PROMPT']; $tplString .='");
if( url != null && url != \'\' )
insertbbcode(\'[url=\' + url + \']\', \'[/url]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');
else
insertbbcode(\'[url]\', \'[/url]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');
}
-->
</script>
<table style="margin:4px;margin-left:auto;margin-right:auto;">
<tr>
<td>
<table class="bbcode">
<tr>
<td style="padding:1px;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" /><div style="position:relative;z-index:100;margin-left:-50px;float:left;display:none;" id="bb_block1'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div class="bbcode_block" style="width:130px;" onmouseover="bb_hide_block(\'1\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'1\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
';
if (!isset($this->_block['smiley']) || !is_array($this->_block['smiley'])) $this->_block['smiley'] = array();
foreach ($this->_block['smiley'] as $smiley_key => $smiley_value) {
$_tmpb_smiley = &$this->_block['smiley'][$smiley_key];
$tplString .= '
<a onclick="insertbbcode(\''; if (isset($_tmpb_smiley['CODE'])) $tplString .= $_tmpb_smiley['CODE']; $tplString .= '\', \'smile\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" class="bbcode_hover" title="'; if (isset($_tmpb_smiley['CODE'])) $tplString .= $_tmpb_smiley['CODE']; $tplString .= '">'; if (isset($_tmpb_smiley['IMG'])) $tplString .= $_tmpb_smiley['IMG']; $tplString .= '</a>'; if (isset($_tmpb_smiley['END_LINE'])) $tplString .= $_tmpb_smiley['END_LINE']; $tplString .= '
';
}
$tplString .= '
';
if (isset($this->_var['C_BBCODE_SMILEY_MORE']) && $this->_var['C_BBCODE_SMILEY_MORE']) {
$tplString .= '
<br />
<a style="font-size: 10px;" href="#" onclick="window.open(\''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/kernel/framework/content/editor/smileys.php?field='; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', \''; if (isset($_tmpb_more['L_SMILEY'])) $tplString .= $_tmpb_more['L_SMILEY']; $tplString .= '\', \'height=550,width=650,resizable=yes,scrollbars=yes\');return false;">'; if (isset($this->_var['L_ALL_SMILEY'])) $tplString .= $this->_var['L_ALL_SMILEY']; $tplString .='</a>
';
}
$tplString .= '
</div>
</div>
<a href="javascript:bb_display_block(\'1\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseover="bb_hide_block(\'1\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'1\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_SMILEYS'])) $tplString .= $this->_var['L_BB_SMILEYS']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/smileys.png"'; if (isset($this->_var['AUTH_SMILEYS'])) $tplString .= $this->_var['AUTH_SMILEYS']; $tplString .=' alt="'; if (isset($this->_var['L_BB_SMILEYS'])) $tplString .= $this->_var['L_BB_SMILEYS']; $tplString .='" /></a>

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/bold.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_B'])) $tplString .= $this->_var['AUTH_B']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_B'])) $tplString .= $this->_var['DISABLED_B']; $tplString .='insertbbcode(\'[b]\', \'[/b]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_BOLD'])) $tplString .= $this->_var['L_BB_BOLD']; $tplString .='" title="'; if (isset($this->_var['L_BB_BOLD'])) $tplString .= $this->_var['L_BB_BOLD']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/italic.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_I'])) $tplString .= $this->_var['AUTH_I']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_I'])) $tplString .= $this->_var['DISABLED_I']; $tplString .='insertbbcode(\'[i]\', \'[/i]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_ITALIC'])) $tplString .= $this->_var['L_BB_ITALIC']; $tplString .='" title="'; if (isset($this->_var['L_BB_ITALIC'])) $tplString .= $this->_var['L_BB_ITALIC']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/underline.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_U'])) $tplString .= $this->_var['AUTH_U']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_U'])) $tplString .= $this->_var['DISABLED_U']; $tplString .='insertbbcode(\'[u]\', \'[/u]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_UNDERLINE'])) $tplString .= $this->_var['L_BB_UNDERLINE']; $tplString .='" title="'; if (isset($this->_var['L_BB_UNDERLINE'])) $tplString .= $this->_var['L_BB_UNDERLINE']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/strike.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_S'])) $tplString .= $this->_var['AUTH_S']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_S'])) $tplString .= $this->_var['DISABLED_S']; $tplString .='insertbbcode(\'[s]\', \'[/s]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_STRIKE'])) $tplString .= $this->_var['L_BB_STRIKE']; $tplString .='" title="'; if (isset($this->_var['L_BB_STRIKE'])) $tplString .= $this->_var['L_BB_STRIKE']; $tplString .='" />

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />

<div style="position:relative;z-index:100;float:left;display:none;" id="bb_block2'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div style="margin-left:110px;" class="bbcode_block" onmouseover="bb_hide_block(\'2\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'2\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
<select id="title'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" onchange="insertbbcode_select(\'title\', \'[/title]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\')">
<option value="" selected="selected" disabled="disabled">'; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .='</option>
<option value="1">'; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .='1</option>
<option value="2">'; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .='2</option>
<option value="3">'; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .='3</option>
<option value="4">'; if (isset($this->_var['L_TITLE'])) $tplString .= $this->_var['L_TITLE']; $tplString .='4</option>
</select>	
</div>
</div>
<a href="javascript:'; if (isset($this->_var['DISABLED_TITLE'])) $tplString .= $this->_var['DISABLED_TITLE']; $tplString .='bb_display_block(\'2\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseout="'; if (isset($this->_var['DISABLED_TITLE'])) $tplString .= $this->_var['DISABLED_TITLE']; $tplString .='bb_hide_block(\'2\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_TITLE'])) $tplString .= $this->_var['L_BB_TITLE']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/title.png" '; if (isset($this->_var['AUTH_TITLE'])) $tplString .= $this->_var['AUTH_TITLE']; $tplString .=' alt="'; if (isset($this->_var['L_BB_TITLE'])) $tplString .= $this->_var['L_BB_TITLE']; $tplString .='" /></a>

<div style="position:relative;z-index:100;float:left;display:none;" id="bb_block3'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div style="margin-left:135px;" class="bbcode_block" onmouseover="bb_hide_block(\'3\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'3\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
<select id="blocks'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" onchange="insertbbcode_select2(\'blocks\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\')">
<option value="" selected="selected" disabled="disabled">'; if (isset($this->_var['L_CONTAINER'])) $tplString .= $this->_var['L_CONTAINER']; $tplString .='</option>
<option value="block">'; if (isset($this->_var['L_BLOCK'])) $tplString .= $this->_var['L_BLOCK']; $tplString .='</option>
<option value="fieldset">'; if (isset($this->_var['L_FIELDSET'])) $tplString .= $this->_var['L_FIELDSET']; $tplString .='</option>
</select>	
</div>
</div>
<a href="javascript:'; if (isset($this->_var['DISABLED_BLOCK'])) $tplString .= $this->_var['DISABLED_BLOCK']; $tplString .='bb_display_block(\'3\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseout="'; if (isset($this->_var['DISABLED_BLOCK'])) $tplString .= $this->_var['DISABLED_BLOCK']; $tplString .='bb_hide_block(\'3\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_CONTAINER'])) $tplString .= $this->_var['L_BB_CONTAINER']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/subtitle.png" '; if (isset($this->_var['AUTH_BLOCK'])) $tplString .= $this->_var['AUTH_BLOCK']; $tplString .=' alt="'; if (isset($this->_var['L_BB_CONTAINER'])) $tplString .= $this->_var['L_BB_CONTAINER']; $tplString .='" /></a>

<div style="position:relative;z-index:100;float:left;display:none;" id="bb_block4'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div style="margin-left:160px;" class="bbcode_block" onmouseover="bb_hide_block(\'4\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'4\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
<select id="style'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" onchange="insertbbcode_select(\'style\', \'[/style]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\')">
<option value="" selected="selected" disabled="disabled">'; if (isset($this->_var['L_STYLE'])) $tplString .= $this->_var['L_STYLE']; $tplString .='</option>
<option value="success">'; if (isset($this->_var['L_SUCCESS'])) $tplString .= $this->_var['L_SUCCESS']; $tplString .='</option>
<option value="question">'; if (isset($this->_var['L_QUESTION'])) $tplString .= $this->_var['L_QUESTION']; $tplString .='</option>
<option value="notice">'; if (isset($this->_var['L_NOTICE'])) $tplString .= $this->_var['L_NOTICE']; $tplString .='</option>
<option value="warning">'; if (isset($this->_var['L_WARNING'])) $tplString .= $this->_var['L_WARNING']; $tplString .='</option>
<option value="error">'; if (isset($this->_var['L_ERROR'])) $tplString .= $this->_var['L_ERROR']; $tplString .='</option>
</select>	
</div>
</div>
<a href="javascript:'; if (isset($this->_var['DISABLED_STYLE'])) $tplString .= $this->_var['DISABLED_STYLE']; $tplString .='bb_display_block(\'4\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseout="'; if (isset($this->_var['DISABLED_STYLE'])) $tplString .= $this->_var['DISABLED_STYLE']; $tplString .='bb_hide_block(\'4\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_STYLE'])) $tplString .= $this->_var['L_BB_STYLE']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/style.png" '; if (isset($this->_var['AUTH_STYLE'])) $tplString .= $this->_var['AUTH_STYLE']; $tplString .=' alt="'; if (isset($this->_var['L_BB_STYLE'])) $tplString .= $this->_var['L_BB_STYLE']; $tplString .='" /></a>

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/url.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_URL'])) $tplString .= $this->_var['AUTH_URL']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_URL'])) $tplString .= $this->_var['DISABLED_URL']; $tplString .='bbcode_url_'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='();" alt="'; if (isset($this->_var['L_BB_URL'])) $tplString .= $this->_var['L_BB_URL']; $tplString .='" title="'; if (isset($this->_var['L_BB_URL'])) $tplString .= $this->_var['L_BB_URL']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/image.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_IMG'])) $tplString .= $this->_var['AUTH_IMG']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_IMG'])) $tplString .= $this->_var['DISABLED_IMG']; $tplString .='insertbbcode(\'[img]\', \'[/img]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_IMG'])) $tplString .= $this->_var['L_BB_IMG']; $tplString .='" title="'; if (isset($this->_var['L_BB_IMG'])) $tplString .= $this->_var['L_BB_IMG']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/quote.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_QUOTE'])) $tplString .= $this->_var['AUTH_QUOTE']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_QUOTE'])) $tplString .= $this->_var['DISABLED_QUOTE']; $tplString .='insertbbcode(\'[quote]\', \'[/quote]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_QUOTE'])) $tplString .= $this->_var['L_BB_QUOTE']; $tplString .='" title="'; if (isset($this->_var['L_BB_QUOTE'])) $tplString .= $this->_var['L_BB_QUOTE']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/hide.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_HIDE'])) $tplString .= $this->_var['AUTH_HIDE']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_HIDE'])) $tplString .= $this->_var['DISABLED_HIDE']; $tplString .='insertbbcode(\'[hide]\', \'[/hide]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_HIDE'])) $tplString .= $this->_var['L_BB_HIDE']; $tplString .='" title="'; if (isset($this->_var['L_BB_HIDE'])) $tplString .= $this->_var['L_BB_HIDE']; $tplString .='" />	

<div style="position:relative;z-index:100;float:right;display:none;" id="bb_block9'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div class="bbcode_block" style="margin-left:-220px;width:180px;" onmouseover="bb_hide_block(\'9\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'9\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
<p><label style="font-size:10px;font-weight:normal">* '; if (isset($this->_var['L_LINES'])) $tplString .= $this->_var['L_LINES']; $tplString .=' <input size="3" type="text" class="text" name="bb_list'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" id="bb_list'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" maxlength="3" value="3" /></label></p>
<p><label style="font-size:10px;font-weight:normal">'; if (isset($this->_var['L_ORDERED_LIST'])) $tplString .= $this->_var['L_ORDERED_LIST']; $tplString .=' <input size="3" type="checkbox" name="bb_ordered_list'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" id="bb_ordered_list'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" /></label></p>
<p style="text-align:center;"><a class="small_link" href="javascript:bbcode_list_'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='();"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/list.png" alt="'; if (isset($this->_var['L_BB_LIST'])) $tplString .= $this->_var['L_BB_LIST']; $tplString .='" title="'; if (isset($this->_var['L_BB_LIST'])) $tplString .= $this->_var['L_BB_LIST']; $tplString .='" class="valign_middle" /> '; if (isset($this->_var['L_INSERT_LIST'])) $tplString .= $this->_var['L_INSERT_LIST']; $tplString .='</a></p>
</div>
</div>
<a href="javascript:'; if (isset($this->_var['DISABLED_LIST'])) $tplString .= $this->_var['DISABLED_LIST']; $tplString .='bb_display_block(\'9\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseout="'; if (isset($this->_var['DISABLED_LIST'])) $tplString .= $this->_var['DISABLED_LIST']; $tplString .='bb_hide_block(\'9\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_LIST'])) $tplString .= $this->_var['L_BB_LIST']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/list.png" '; if (isset($this->_var['AUTH_LIST'])) $tplString .= $this->_var['AUTH_LIST']; $tplString .=' alt="'; if (isset($this->_var['L_BB_LIST'])) $tplString .= $this->_var['L_BB_LIST']; $tplString .='" title="'; if (isset($this->_var['L_BB_LIST'])) $tplString .= $this->_var['L_BB_LIST']; $tplString .='" /></a>

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />

<div style="position:relative;z-index:100;float:right;display:none;" id="bb_block5'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div id="bbcolor'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" class="bbcode_block" style="margin-left:-170px;background:white;" onmouseover="bb_hide_block(\'5\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'5\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
</div>
</div>
<a href="javascript:'; if (isset($this->_var['DISABLED_COLOR'])) $tplString .= $this->_var['DISABLED_COLOR']; $tplString .='bbcode_color_'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='();'; if (isset($this->_var['DISABLED_COLOR'])) $tplString .= $this->_var['DISABLED_COLOR']; $tplString .='bb_display_block(\'5\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseout="'; if (isset($this->_var['DISABLED_COLOR'])) $tplString .= $this->_var['DISABLED_COLOR']; $tplString .='bb_hide_block(\'5\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_COLOR'])) $tplString .= $this->_var['L_BB_COLOR']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/color.png" '; if (isset($this->_var['AUTH_COLOR'])) $tplString .= $this->_var['AUTH_COLOR']; $tplString .=' alt="'; if (isset($this->_var['L_BB_COLOR'])) $tplString .= $this->_var['L_BB_COLOR']; $tplString .='" /></a>

<div style="position:relative;z-index:100;margin-left:-70px;float:right;display:none;" id="bb_block6'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div style="margin-left:-120px;" class="bbcode_block" onmouseover="bb_hide_block(\'6\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'6\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
<select id="size'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" onchange="insertbbcode_select(\'size\', \'[/size]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\')">
<option value="" selected="selected" disabled="disabled">'; if (isset($this->_var['L_SIZE'])) $tplString .= $this->_var['L_SIZE']; $tplString .='</option>
<option value="5">5</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="25">25</option>
<option value="30">30</option>
<option value="35">35</option>
<option value="40">40</option>
<option value="45">45</option>
</select>
</div>
</div>
<a href="javascript:'; if (isset($this->_var['DISABLED_SIZE'])) $tplString .= $this->_var['DISABLED_SIZE']; $tplString .='bb_display_block(\'6\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseout="'; if (isset($this->_var['DISABLED_SIZE'])) $tplString .= $this->_var['DISABLED_SIZE']; $tplString .='bb_hide_block(\'6\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_SIZE'])) $tplString .= $this->_var['L_BB_SIZE']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/size.png" '; if (isset($this->_var['AUTH_SIZE'])) $tplString .= $this->_var['AUTH_SIZE']; $tplString .=' alt="'; if (isset($this->_var['L_BB_SIZE'])) $tplString .= $this->_var['L_BB_SIZE']; $tplString .='" /></a><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />
&nbsp;
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/minus.png" style="cursor: pointer;cursor:hand;" onclick="textarea_resize(\''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', -100, \'height\');textarea_resize(\'xmlhttprequest_preview\', -100, \'height\');" alt="'; if (isset($this->_var['L_BB_SMALL'])) $tplString .= $this->_var['L_BB_SMALL']; $tplString .='" title="'; if (isset($this->_var['L_BB_SMALL'])) $tplString .= $this->_var['L_BB_SMALL']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/plus.png" style="cursor: pointer;cursor:hand;" onclick="textarea_resize(\''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 100, \'height\');textarea_resize(\'xmlhttprequest_preview\', 100, \'height\');" alt="'; if (isset($this->_var['L_BB_LARGE'])) $tplString .= $this->_var['L_BB_LARGE']; $tplString .='" title="'; if (isset($this->_var['L_BB_LARGE'])) $tplString .= $this->_var['L_BB_LARGE']; $tplString .='" /><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/more.png" alt="" class="bbcode_hover" onclick="show_bbcode_div(\'bbcode_more'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" />
</td>
</tr>	
</table>
<table class="bbcode2" id="bbcode_more'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<tr>
<td style="width:100%;padding:1px;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/left.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_ALIGN'])) $tplString .= $this->_var['AUTH_ALIGN']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_ALIGN'])) $tplString .= $this->_var['DISABLED_ALIGN']; $tplString .='insertbbcode(\'[align=left]\', \'[/align]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_LEFT'])) $tplString .= $this->_var['L_BB_LEFT']; $tplString .='" title="'; if (isset($this->_var['L_BB_LEFT'])) $tplString .= $this->_var['L_BB_LEFT']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/center.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_ALIGN'])) $tplString .= $this->_var['AUTH_ALIGN']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_ALIGN'])) $tplString .= $this->_var['DISABLED_ALIGN']; $tplString .='insertbbcode(\'[align=center]\', \'[/align]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_CENTER'])) $tplString .= $this->_var['L_BB_CENTER']; $tplString .='" title="'; if (isset($this->_var['L_BB_CENTER'])) $tplString .= $this->_var['L_BB_CENTER']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/right.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_ALIGN'])) $tplString .= $this->_var['AUTH_ALIGN']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_ALIGN'])) $tplString .= $this->_var['DISABLED_ALIGN']; $tplString .='insertbbcode(\'[align=right]\', \'[/align]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_RIGHT'])) $tplString .= $this->_var['L_BB_RIGHT']; $tplString .='" title="'; if (isset($this->_var['L_BB_RIGHT'])) $tplString .= $this->_var['L_BB_RIGHT']; $tplString .='" />	
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/justify.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_ALIGN'])) $tplString .= $this->_var['AUTH_ALIGN']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_ALIGN'])) $tplString .= $this->_var['DISABLED_ALIGN']; $tplString .='insertbbcode(\'[align=justify]\', \'[/align]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_JUSTIFY'])) $tplString .= $this->_var['L_BB_JUSTIFY']; $tplString .='" title="'; if (isset($this->_var['L_BB_JUSTIFY'])) $tplString .= $this->_var['L_BB_JUSTIFY']; $tplString .='" />	
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/float_left.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_FLOAT'])) $tplString .= $this->_var['AUTH_FLOAT']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_FLOAT'])) $tplString .= $this->_var['DISABLED_FLOAT']; $tplString .='insertbbcode(\'[float=left]\', \'[/float]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_FLOAT_LEFT'])) $tplString .= $this->_var['L_BB_FLOAT_LEFT']; $tplString .='" title="'; if (isset($this->_var['L_BB_FLOAT_LEFT'])) $tplString .= $this->_var['L_BB_FLOAT_LEFT']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/float_right.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_FLOAT'])) $tplString .= $this->_var['AUTH_FLOAT']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_FLOAT'])) $tplString .= $this->_var['DISABLED_FLOAT']; $tplString .='insertbbcode(\'[float=right]\', \'[/float]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_FLOAT_RIGHT'])) $tplString .= $this->_var['L_BB_FLOAT_RIGHT']; $tplString .='" title="'; if (isset($this->_var['L_BB_FLOAT_RIGHT'])) $tplString .= $this->_var['L_BB_FLOAT_RIGHT']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/sup.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_SUP'])) $tplString .= $this->_var['AUTH_SUP']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_SUP'])) $tplString .= $this->_var['DISABLED_SUP']; $tplString .='insertbbcode(\'[sup]\', \'[/sup]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_SUP'])) $tplString .= $this->_var['L_BB_SUP']; $tplString .='" title="'; if (isset($this->_var['L_BB_SUP'])) $tplString .= $this->_var['L_BB_SUP']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/sub.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_SUB'])) $tplString .= $this->_var['AUTH_SUB']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_SUB'])) $tplString .= $this->_var['DISABLED_SUB']; $tplString .='insertbbcode(\'[sub]\', \'[/sub]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_SUB'])) $tplString .= $this->_var['L_BB_SUB']; $tplString .='" title="'; if (isset($this->_var['L_BB_SUB'])) $tplString .= $this->_var['L_BB_SUB']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/indent.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_INDENT'])) $tplString .= $this->_var['AUTH_INDENT']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_INDENT'])) $tplString .= $this->_var['DISABLED_INDENT']; $tplString .='insertbbcode(\'[indent]\', \'[/indent]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_INDENT'])) $tplString .= $this->_var['L_BB_INDENT']; $tplString .='" title="'; if (isset($this->_var['L_BB_INDENT'])) $tplString .= $this->_var['L_BB_INDENT']; $tplString .='" />

<div style="position:relative;z-index:100;float:left;display:none;" id="bb_block7'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div id="bbtable'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" class="bbcode_block" style="margin-left:130px;width:180px;" onmouseover="bb_hide_block(\'7\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'7\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
<p><label style="font-size:10px;font-weight:normal">* '; if (isset($this->_var['L_LINES'])) $tplString .= $this->_var['L_LINES']; $tplString .=' <input size="3" type="text" class="text" name="bb_lines'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" id="bb_lines'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" maxlength="3" value="2" /></label></p>
<p><label style="font-size:10px;font-weight:normal">* '; if (isset($this->_var['L_COLS'])) $tplString .= $this->_var['L_COLS']; $tplString .=' <input size="3" type="text" class="text" name="bb_cols'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" id="bb_cols'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" maxlength="3" value="2" /></label></p>
<p><label style="font-size:10px;font-weight:normal">'; if (isset($this->_var['L_ADD_HEAD'])) $tplString .= $this->_var['L_ADD_HEAD']; $tplString .=' <input size="3" type="checkbox" name="bb_head'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" id="bb_head'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" /></label></p>
<p style="text-align:center;"><a class="small_link" href="javascript:'; if (isset($this->_var['DISABLED_TABLE'])) $tplString .= $this->_var['DISABLED_TABLE']; $tplString .='bbcode_table_'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='();"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/table.png" alt="'; if (isset($this->_var['L_BB_TABLE'])) $tplString .= $this->_var['L_BB_TABLE']; $tplString .='" title="'; if (isset($this->_var['L_BB_TABLE'])) $tplString .= $this->_var['L_BB_TABLE']; $tplString .='" class="valign_middle" /> '; if (isset($this->_var['L_INSERT_TABLE'])) $tplString .= $this->_var['L_INSERT_TABLE']; $tplString .='</a></p>
</div>
</div>
<a href="javascript:'; if (isset($this->_var['DISABLED_TABLE'])) $tplString .= $this->_var['DISABLED_TABLE']; $tplString .='bb_display_block(\'7\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseover="'; if (isset($this->_var['DISABLED_TABLE'])) $tplString .= $this->_var['DISABLED_TABLE']; $tplString .='bb_hide_block(\'7\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_TABLE'])) $tplString .= $this->_var['L_BB_TABLE']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/table.png" '; if (isset($this->_var['AUTH_TABLE'])) $tplString .= $this->_var['AUTH_TABLE']; $tplString .=' alt="'; if (isset($this->_var['L_BB_TABLE'])) $tplString .= $this->_var['L_BB_TABLE']; $tplString .='" title="'; if (isset($this->_var['L_BB_TABLE'])) $tplString .= $this->_var['L_BB_TABLE']; $tplString .='" /></a>

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/flash.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_SWF'])) $tplString .= $this->_var['AUTH_SWF']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_SWF'])) $tplString .= $this->_var['DISABLED_SWF']; $tplString .='insertbbcode(\'[swf=425,344]\', \'[/swf]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_SWF'])) $tplString .= $this->_var['L_BB_SWF']; $tplString .='" title="'; if (isset($this->_var['L_BB_SWF'])) $tplString .= $this->_var['L_BB_SWF']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/movie.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_MOVIE'])) $tplString .= $this->_var['AUTH_MOVIE']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_MOVIE'])) $tplString .= $this->_var['DISABLED_MOVIE']; $tplString .='insertbbcode(\'[movie=100,100]\', \'[/movie]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_MOVIE'])) $tplString .= $this->_var['L_BB_MOVIE']; $tplString .='" title="'; if (isset($this->_var['L_BB_MOVIE'])) $tplString .= $this->_var['L_BB_MOVIE']; $tplString .='" />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/sound.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_SOUND'])) $tplString .= $this->_var['AUTH_SOUND']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_SOUND'])) $tplString .= $this->_var['DISABLED_SOUND']; $tplString .='insertbbcode(\'[sound]\', \'[/sound]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_SOUND'])) $tplString .= $this->_var['L_BB_SOUND']; $tplString .='" title="'; if (isset($this->_var['L_BB_SOUND'])) $tplString .= $this->_var['L_BB_SOUND']; $tplString .='" />

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />

<div style="position:relative;z-index:100;margin-left:-70px;float:right;display:none;" id="bb_block8'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='">
<div style="margin-left:-120px;" class="bbcode_block" onmouseover="bb_hide_block(\'8\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 1);" onmouseout="bb_hide_block(\'8\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);">
<select id="code'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='" onchange="insertbbcode_select(\'code\', \'[/code]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\')">
<option value="" selected="selected" disabled="disabled">'; if (isset($this->_var['L_CODE'])) $tplString .= $this->_var['L_CODE']; $tplString .='</option>
<optgroup label="'; if (isset($this->_var['L_TEXT'])) $tplString .= $this->_var['L_TEXT']; $tplString .='">
<option value="text">Text</option>
<option value="sql">Sql</option>
<option value="xml">Xml</option>
</optgroup>
<optgroup label="'; if (isset($this->_var['L_PHPBOOST_LANGUAGES'])) $tplString .= $this->_var['L_PHPBOOST_LANGUAGES']; $tplString .='">
<option value="bbcode">BBCode</option>
<option value="tpl">Template</option>
</optgroup>
<optgroup label="'; if (isset($this->_var['L_SCRIPT'])) $tplString .= $this->_var['L_SCRIPT']; $tplString .='">
<option value="php">PHP</option>
<option value="asp">Asp</option>
<option value="python">Python</option>
<option value="perl">Perl</option>
<option value="ruby">Ruby</option>
<option value="bash">Bash</option>
</optgroup>
<optgroup label="'; if (isset($this->_var['L_WEB'])) $tplString .= $this->_var['L_WEB']; $tplString .='">	
<option value="html">Html</option>
<option value="css">Css</option>
<option value="javascript">Javascript</option>
</optgroup>
<optgroup label="'; if (isset($this->_var['L_PROG'])) $tplString .= $this->_var['L_PROG']; $tplString .='">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="c#">C#</option>
<option value="d">D</option>
<option value="java">Java</option>
<option value="pascal">Pascal</option>
<option value="delphi">Delphi</option>
<option value="fortran">Fortran</option>
<option value="vb">Vb</option>
<option value="asm">Asm</option>
</optgroup>
</select>
</div>
</div>
<a href="javascript:'; if (isset($this->_var['DISABLED_CODE'])) $tplString .= $this->_var['DISABLED_CODE']; $tplString .='bb_display_block(\'8\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" onmouseout="'; if (isset($this->_var['DISABLED_CODE'])) $tplString .= $this->_var['DISABLED_CODE']; $tplString .='bb_hide_block(\'8\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', 0);" class="bbcode_hover" title="'; if (isset($this->_var['L_BB_CODE'])) $tplString .= $this->_var['L_BB_CODE']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/code.png" '; if (isset($this->_var['AUTH_CODE'])) $tplString .= $this->_var['AUTH_CODE']; $tplString .=' alt="'; if (isset($this->_var['L_BB_CODE'])) $tplString .= $this->_var['L_BB_CODE']; $tplString .='" /></a>

<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/math.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_MATH'])) $tplString .= $this->_var['AUTH_MATH']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_MATH'])) $tplString .= $this->_var['DISABLED_MATH']; $tplString .='insertbbcode(\'[math]\', \'[/math]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_MATH'])) $tplString .= $this->_var['L_BB_MATH']; $tplString .='" title="'; if (isset($this->_var['L_BB_MATH'])) $tplString .= $this->_var['L_BB_MATH']; $tplString .='" />	
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/html.png" class="bbcode_hover" '; if (isset($this->_var['AUTH_HTML'])) $tplString .= $this->_var['AUTH_HTML']; $tplString .=' onclick="'; if (isset($this->_var['DISABLED_HTML'])) $tplString .= $this->_var['DISABLED_HTML']; $tplString .='insertbbcode(\'[html]\', \'[/html]\', \''; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');" alt="'; if (isset($this->_var['L_BB_HTML'])) $tplString .= $this->_var['L_BB_HTML']; $tplString .='" title="'; if (isset($this->_var['L_BB_HTML'])) $tplString .= $this->_var['L_BB_HTML']; $tplString .='" />
</td>
<td style="width:3px;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/separate.png" alt="" />
</td>
<td style="padding:0px 2px;width:22px;">
<a href="http://www.phpboost.com/wiki/bbcode" title="'; if (isset($this->_var['L_BB_HELP'])) $tplString .= $this->_var['L_BB_HELP']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/form/help.png" alt="'; if (isset($this->_var['L_BB_HELP'])) $tplString .= $this->_var['L_BB_HELP']; $tplString .='" /></a>
</td>
</tr>	
</table>
</td>
<td style="vertical-align:top;padding-left:8px;padding-top:5px;">
';
if (isset($this->_var['C_UPLOAD_MANAGEMENT']) && $this->_var['C_UPLOAD_MANAGEMENT']) {
$tplString .= '
<a title="'; if (isset($this->_var['L_BB_UPLOAD'])) $tplString .= $this->_var['L_BB_UPLOAD']; $tplString .='" href="#" onclick="window.open(\''; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/member/upload.php?popup=1&amp;fd='; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\', \'\', \'height=500,width=720,resizable=yes,scrollbars=yes\');return false;"><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/upload/files_add.png" alt="" /></a>
';
}
$tplString .= '
</td>
</tr>
</table>

<script type="text/javascript">
<!--
set_bbcode_preference(\'bbcode_more'; if (isset($this->_var['FIELD'])) $tplString .= $this->_var['FIELD']; $tplString .='\');
-->
</script>
';
}
$tplString .= '
'; ?>