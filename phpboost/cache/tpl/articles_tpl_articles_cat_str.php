<?php $tplString = ''; if (isset($this->_var['JAVA'])) $tplString .= $this->_var['JAVA']; $tplString .=' <div class="module_position">
<div class="module_top_l"></div>
<div class="module_top_r"></div>
<div class="module_top">
<a href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/syndication.php?m=articles&amp;cat='; if (isset($this->_var['IDCAT'])) $tplString .= $this->_var['IDCAT']; $tplString .='" title="Rss"><img style="vertical-align:middle;margin-top:-2px;" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/rss.png" alt="Rss" title="Rss" /></a> <a href="../articles/articles.php'; if (isset($this->_var['SID'])) $tplString .= $this->_var['SID']; $tplString .='">'; if (isset($this->_var['L_ARTICLES_INDEX'])) $tplString .= $this->_var['L_ARTICLES_INDEX']; $tplString .='</a> &raquo; '; if (isset($this->_var['U_ARTICLES_CAT_LINKS'])) $tplString .= $this->_var['U_ARTICLES_CAT_LINKS']; $tplString .=' 
';
if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) {
$tplString .= ' <a href="admin_articles_cat.php?id='; if (isset($this->_var['IDCAT'])) $tplString .= $this->_var['IDCAT']; $tplString .='"><img class="valign_middle" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['LANG'])) $tplString .= $this->_var['LANG']; $tplString .='/edit.png" alt="" /></a> ';
}
$tplString .= '
'; if (isset($this->_var['EDIT'])) $tplString .= $this->_var['EDIT']; $tplString .=' 
'; if (isset($this->_var['ADD_ARTICLES'])) $tplString .= $this->_var['ADD_ARTICLES']; $tplString .='
</div>
<div class="module_contents">
';
if (isset($this->_var['C_ARTICLES_CAT']) && $this->_var['C_ARTICLES_CAT']) {
$tplString .= '
<p style="text-align:center;" class="text_strong">
'; if (isset($this->_var['L_CATEGORIES'])) $tplString .= $this->_var['L_CATEGORIES']; $tplString .='
';
if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) {
$tplString .= ' <a href="admin_articles_cat.php"><img class="valign_middle" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['LANG'])) $tplString .= $this->_var['LANG']; $tplString .='/edit.png" alt="" /></a> ';
}
$tplString .= '
</p>
<hr style="margin-bottom:20px;" />
';
if (!isset($this->_block['cat_list']) || !is_array($this->_block['cat_list'])) $this->_block['cat_list'] = array();
foreach ($this->_block['cat_list'] as $cat_list_key => $cat_list_value) {
$_tmpb_cat_list = &$this->_block['cat_list'][$cat_list_key];
$tplString .= '
<div style="float:left;text-align:center;width:'; if (isset($this->_var['COLUMN_WIDTH_CAT'])) $tplString .= $this->_var['COLUMN_WIDTH_CAT']; $tplString .='%;margin-bottom:20px;">
'; if (isset($_tmpb_cat_list['ICON_CAT'])) $tplString .= $_tmpb_cat_list['ICON_CAT']; $tplString .= '
<a href="../articles/articles'; if (isset($_tmpb_cat_list['U_CAT'])) $tplString .= $_tmpb_cat_list['U_CAT']; $tplString .= '">'; if (isset($_tmpb_cat_list['CAT'])) $tplString .= $_tmpb_cat_list['CAT']; $tplString .= '</a> '; if (isset($_tmpb_cat_list['EDIT'])) $tplString .= $_tmpb_cat_list['EDIT']; $tplString .= '
<br />
<span class="text_small">'; if (isset($_tmpb_cat_list['DESC'])) $tplString .= $_tmpb_cat_list['DESC']; $tplString .= '</span> 
<br />
<span class="text_small">'; if (isset($_tmpb_cat_list['L_NBR_ARTICLES'])) $tplString .= $_tmpb_cat_list['L_NBR_ARTICLES']; $tplString .= '</span> 
</div>
';
}
$tplString .= '
<div class="spacer">&nbsp;</div>
<p style="text-align:center;">'; if (isset($this->_var['PAGINATION_CAT'])) $tplString .= $this->_var['PAGINATION_CAT']; $tplString .='</p>
<hr />
';
}
$tplString .= '

';
if (isset($this->_var['C_ARTICLES_LINK']) && $this->_var['C_ARTICLES_LINK']) {
$tplString .= '
<br /><br />
<table class="module_table">
<tr>
<th style="text-align:center;">
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_ALPHA_TOP'])) $tplString .= $this->_var['U_ARTICLES_ALPHA_TOP']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/top.png" alt="" class="valign_middle" /></a>
'; if (isset($this->_var['L_ARTICLES'])) $tplString .= $this->_var['L_ARTICLES']; $tplString .='
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_ALPHA_BOTTOM'])) $tplString .= $this->_var['U_ARTICLES_ALPHA_BOTTOM']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/bottom.png" alt="" class="valign_middle" /></a>
</th>
<th style="text-align:center;">
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_DATE_TOP'])) $tplString .= $this->_var['U_ARTICLES_DATE_TOP']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/top.png" alt="" class="valign_middle" /></a>
'; if (isset($this->_var['L_DATE'])) $tplString .= $this->_var['L_DATE']; $tplString .='
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_DATE_BOTTOM'])) $tplString .= $this->_var['U_ARTICLES_DATE_BOTTOM']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/bottom.png" alt="" class="valign_middle" /></a>
</th>
<th style="text-align:center;">
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_VIEW_TOP'])) $tplString .= $this->_var['U_ARTICLES_VIEW_TOP']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/top.png" alt="" class="valign_middle" /></a>
'; if (isset($this->_var['L_VIEW'])) $tplString .= $this->_var['L_VIEW']; $tplString .='
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_VIEW_BOTTOM'])) $tplString .= $this->_var['U_ARTICLES_VIEW_BOTTOM']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/bottom.png" alt="" class="valign_middle" /></a>
</th>
<th style="text-align:center;">
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_NOTE_TOP'])) $tplString .= $this->_var['U_ARTICLES_NOTE_TOP']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/top.png" alt="" class="valign_middle" /></a>
'; if (isset($this->_var['L_NOTE'])) $tplString .= $this->_var['L_NOTE']; $tplString .='
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_NOTE_BOTTOM'])) $tplString .= $this->_var['U_ARTICLES_NOTE_BOTTOM']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/bottom.png" alt="" class="valign_middle" /></a>
</th>
<th style="text-align:center;">
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_COM_TOP'])) $tplString .= $this->_var['U_ARTICLES_COM_TOP']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/top.png" alt="" class="valign_middle" /></a>
'; if (isset($this->_var['L_COM'])) $tplString .= $this->_var['L_COM']; $tplString .='
<a href="../articles/articles'; if (isset($this->_var['U_ARTICLES_COM_BOTTOM'])) $tplString .= $this->_var['U_ARTICLES_COM_BOTTOM']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/bottom.png" alt="" class="valign_middle" /></a>
</th>
</tr>
';
if (!isset($this->_block['articles']) || !is_array($this->_block['articles'])) $this->_block['articles'] = array();
foreach ($this->_block['articles'] as $articles_key => $articles_value) {
$_tmpb_articles = &$this->_block['articles'][$articles_key];
$tplString .= '
<tr>	
<td class="row2" style="padding-left:25px">
'; if (isset($_tmpb_articles['ICON'])) $tplString .= $_tmpb_articles['ICON']; $tplString .= ' &nbsp;&nbsp;<a href="../articles/articles'; if (isset($_tmpb_articles['U_ARTICLES_LINK'])) $tplString .= $_tmpb_articles['U_ARTICLES_LINK']; $tplString .= '">'; if (isset($_tmpb_articles['NAME'])) $tplString .= $_tmpb_articles['NAME']; $tplString .= '</a>
</td>
<td class="row2" style="text-align: center;">
'; if (isset($_tmpb_articles['DATE'])) $tplString .= $_tmpb_articles['DATE']; $tplString .= '
</td>
<td class="row2" style="text-align: center;">
'; if (isset($_tmpb_articles['COMPT'])) $tplString .= $_tmpb_articles['COMPT']; $tplString .= ' 
</td>
<td class="row2" style="text-align: center;">
'; if (isset($_tmpb_articles['NOTE'])) $tplString .= $_tmpb_articles['NOTE']; $tplString .= '
</td>
<td class="row2" style="text-align: center;">
'; if (isset($_tmpb_articles['COM'])) $tplString .= $_tmpb_articles['COM']; $tplString .= ' 
</td>
</tr>
';
}
$tplString .= '
<tr>
<td colspan="6" class="row3">
'; if (isset($this->_var['PAGINATION'])) $tplString .= $this->_var['PAGINATION']; $tplString .='
</td>	
</tr>
</table>
<br />
';
}
$tplString .= '

<p style="text-align:center;padding-top:10px;" class="text_small">
'; if (isset($this->_var['L_NO_ARTICLES'])) $tplString .= $this->_var['L_NO_ARTICLES']; $tplString .=' '; if (isset($this->_var['L_TOTAL_ARTICLE'])) $tplString .= $this->_var['L_TOTAL_ARTICLE']; $tplString .='
</p>
&nbsp;
</div>
<div class="module_bottom_l"></div>
<div class="module_bottom_r"></div>
<div class="module_bottom text_strong">
<a href="../articles/articles.php'; if (isset($this->_var['SID'])) $tplString .= $this->_var['SID']; $tplString .='">'; if (isset($this->_var['L_ARTICLES_INDEX'])) $tplString .= $this->_var['L_ARTICLES_INDEX']; $tplString .='</a> &raquo; '; if (isset($this->_var['U_ARTICLES_CAT_LINKS'])) $tplString .= $this->_var['U_ARTICLES_CAT_LINKS']; $tplString .=' '; if (isset($this->_var['EDIT'])) $tplString .= $this->_var['EDIT']; $tplString .=' '; if (isset($this->_var['ADD_ARTICLES'])) $tplString .= $this->_var['ADD_ARTICLES']; $tplString .='
</div>
</div>
'; ?>