<?php $tplString = '<script type="text/javascript">
<!--
function Confirm() {
return confirm("'; if (isset($this->_var['L_ALERT_DELETE_NEWS'])) $tplString .= $this->_var['L_ALERT_DELETE_NEWS']; $tplString .='");
}
-->
</script>

';
if (isset($this->_var['C_NEWS_EDITO']) && $this->_var['C_NEWS_EDITO']) {
$tplString .= '
<div class="news_container">
<div class="news_top_l"></div>
<div class="news_top_r"></div>
<div class="news_top">
<div style="float:left;padding-left:30px;"><h3 class="title">'; if (isset($this->_var['TITLE'])) $tplString .= $this->_var['TITLE']; $tplString .='</h3></div>
<div style="float:right;">';
if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) {
$tplString .= ' <a href="../news/admin_news_config.php" title="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['LANG'])) $tplString .= $this->_var['LANG']; $tplString .='/edit.png" class="valign_middle" alt="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='" /></a> ';
}
$tplString .= '</div>
</div>
<div class="news_content">
&nbsp;&nbsp;'; if (isset($this->_var['CONTENTS'])) $tplString .= $this->_var['CONTENTS']; $tplString .='
</div>

<div class="news_bottom_l"></div>
<div class="news_bottom_r"></div>
<div class="news_bottom"></div>
</div>
';
}
$tplString .= '

';
if (isset($this->_var['C_NEWS_NO_AVAILABLE']) && $this->_var['C_NEWS_NO_AVAILABLE']) {
$tplString .= '
<div class="news_container">
<div class="news_top_l"></div>
<div class="news_top_r"></div>
<div class="news_top">
<div style="float:left;padding-left:30px;"><a href="../syndication.php?m=news" title="Syndication"><img class="valign_middle" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/rss.png" alt="Syndication" title="Syndication" /></a></div>
<div style="float:right;"><h3 class="title valign_middle">'; if (isset($this->_var['L_LAST_NEWS'])) $tplString .= $this->_var['L_LAST_NEWS']; $tplString .='</h3></div>
</div>
<div class="news_content">
<p class="text_strong text_center">'; if (isset($this->_var['L_NO_NEWS_AVAILABLE'])) $tplString .= $this->_var['L_NO_NEWS_AVAILABLE']; $tplString .='</p>
</div>
<div class="news_bottom_l"></div>
<div class="news_bottom_r"></div>
<div class="news_bottom"></div>
</div>
';
}
$tplString .= '



';
if (isset($this->_var['C_NEWS_BLOCK']) && $this->_var['C_NEWS_BLOCK']) {
$tplString .= '

';
if (!isset($this->_block['news']) || !is_array($this->_block['news'])) $this->_block['news'] = array();
foreach ($this->_block['news'] as $news_key => $news_value) {
$_tmpb_news = &$this->_block['news'][$news_key];
$tplString .= '
';
if (isset($_tmpb_news['C_NEWS_ROW']) && $_tmpb_news['C_NEWS_ROW']) {
$tplString .= ' <div class="spacer"></div> ';
}
$tplString .= '
';
if (isset($this->_var['C_NEWS_BLOCK_COLUMN']) && $this->_var['C_NEWS_BLOCK_COLUMN']) {
$tplString .= ' 
<div class="news_container" style="float:left;width:'; if (isset($this->_var['COLUMN_WIDTH'])) $tplString .= $this->_var['COLUMN_WIDTH']; $tplString .='%">
';
} else {
$tplString .= '
<div class="news_container">
';
}
$tplString .= '
<div class="news_top_l"></div>
<div class="news_top_r"></div>
<div class="news_top">
<span style="float:left;padding-left:5px;">
<a href="../syndication.php?m=news" title="Rss"><img class="valign_middle" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/rss.png" alt="Rss" title="Rss" /></a>
<a class="news_title" href="../news/news'; if (isset($_tmpb_news['U_NEWS_LINK'])) $tplString .= $_tmpb_news['U_NEWS_LINK']; $tplString .= '">'; if (isset($_tmpb_news['TITLE'])) $tplString .= $_tmpb_news['TITLE']; $tplString .= '</a>
</span>
<span style="float:right;">
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/news/templates/images/comments.png" alt="" class="valign_middle" /> '; if (isset($_tmpb_news['U_COM'])) $tplString .= $_tmpb_news['U_COM']; $tplString .= '
';
if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) {
$tplString .= '
<a href="../news/admin_news.php?id='; if (isset($_tmpb_news['ID'])) $tplString .= $_tmpb_news['ID']; $tplString .= '" title="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='"><img class="valign_middle" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['LANG'])) $tplString .= $this->_var['LANG']; $tplString .='/edit.png" alt="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='" /></a>
<a href="../news/admin_news.php?delete=1&amp;id='; if (isset($_tmpb_news['ID'])) $tplString .= $_tmpb_news['ID']; $tplString .= '&amp;token='; if (isset($this->_var['TOKEN'])) $tplString .= $this->_var['TOKEN']; $tplString .='" title="'; if (isset($this->_var['L_DELETE'])) $tplString .= $this->_var['L_DELETE']; $tplString .='" onclick="javascript:return Confirm();"><img class="valign_middle" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['LANG'])) $tplString .= $this->_var['LANG']; $tplString .='/delete.png" alt="'; if (isset($this->_var['L_DELETE'])) $tplString .= $this->_var['L_DELETE']; $tplString .='" /></a>
';
}
$tplString .= '
</span>
</div>
<div class="news_content">
';
if (isset($_tmpb_news['IMG']) && $_tmpb_news['IMG']) {
$tplString .= ' <img src="'; if (isset($_tmpb_news['IMG'])) $tplString .= $_tmpb_news['IMG']; $tplString .= '" alt="'; if (isset($_tmpb_news['IMG_DESC'])) $tplString .= $_tmpb_news['IMG_DESC']; $tplString .= '" title="'; if (isset($_tmpb_news['IMG_DESC'])) $tplString .= $_tmpb_news['IMG_DESC']; $tplString .= '" class="img_right" /> ';
}
$tplString .= ' 
';
if (isset($_tmpb_news['C_ICON']) && $_tmpb_news['C_ICON']) {
$tplString .= ' <a href="news.php?cat='; if (isset($_tmpb_news['IDCAT'])) $tplString .= $_tmpb_news['IDCAT']; $tplString .= '"><img class="valign_middle" src="'; if (isset($_tmpb_news['ICON'])) $tplString .= $_tmpb_news['ICON']; $tplString .= '" alt="" /></a> ';
}
$tplString .= ' 

'; if (isset($_tmpb_news['CONTENTS'])) $tplString .= $_tmpb_news['CONTENTS']; $tplString .= '
<br /><br />
'; if (isset($_tmpb_news['EXTEND_CONTENTS'])) $tplString .= $_tmpb_news['EXTEND_CONTENTS']; $tplString .= '
<div class="spacer"></div>
</div>
<div class="news_bottom_l"></div>
<div class="news_bottom_r"></div>
<div class="news_bottom">
<span style="float:left"><a class="small_link" href="../member/member'; if (isset($_tmpb_news['U_USER_ID'])) $tplString .= $_tmpb_news['U_USER_ID']; $tplString .= '">'; if (isset($_tmpb_news['PSEUDO'])) $tplString .= $_tmpb_news['PSEUDO']; $tplString .= '</a></span>
<span style="float:right">'; if (isset($_tmpb_news['DATE'])) $tplString .= $_tmpb_news['DATE']; $tplString .= '</span>
</div>
</div>
'; if (isset($this->_var['COMMENTS'])) $tplString .= $this->_var['COMMENTS']; $tplString .='	
';
}
$tplString .= '

';
if (isset($this->_var['C_NEWS_NAVIGATION_LINKS']) && $this->_var['C_NEWS_NAVIGATION_LINKS']) {
$tplString .= '
<div style="width:90%;padding:20px;margin:auto;margin-top:-15px;">
';
if (isset($this->_var['C_PREVIOUS_NEWS']) && $this->_var['C_PREVIOUS_NEWS']) {
$tplString .= ' <span style="float:left;"><a href="news'; if (isset($this->_var['U_PREVIOUS_NEWS'])) $tplString .= $this->_var['U_PREVIOUS_NEWS']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/left.png" alt="" class="valign_middle" /></a> <a href="news'; if (isset($this->_var['U_PREVIOUS_NEWS'])) $tplString .= $this->_var['U_PREVIOUS_NEWS']; $tplString .='">'; if (isset($this->_var['PREVIOUS_NEWS'])) $tplString .= $this->_var['PREVIOUS_NEWS']; $tplString .='</a></span> ';
}
$tplString .= '
';
if (isset($this->_var['C_NEXT_NEWS']) && $this->_var['C_NEXT_NEWS']) {
$tplString .= ' <span style="float:right;"><a href="news'; if (isset($this->_var['U_NEXT_NEWS'])) $tplString .= $this->_var['U_NEXT_NEWS']; $tplString .='">'; if (isset($this->_var['NEXT_NEWS'])) $tplString .= $this->_var['NEXT_NEWS']; $tplString .='</a> <a href="news'; if (isset($this->_var['U_NEXT_NEWS'])) $tplString .= $this->_var['U_NEXT_NEWS']; $tplString .='"><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/right.png" alt="" class="valign_middle" /></a></span> ';
}
$tplString .= '
</div>
';
}
$tplString .= '

<div class="spacer"></div>
<div class="text_center">'; if (isset($this->_var['PAGINATION'])) $tplString .= $this->_var['PAGINATION']; $tplString .='</div>
<div class="text_center">'; if (isset($this->_var['ARCHIVES'])) $tplString .= $this->_var['ARCHIVES']; $tplString .='</div>
<div class="spacer"></div>
';
}
$tplString .= '



';
if (isset($this->_var['C_NEWS_LINK']) && $this->_var['C_NEWS_LINK']) {
$tplString .= '
<div class="news_container">
<div class="news_top_l"></div>
<div class="news_top_r"></div>
<div class="news_top">
<div style="float:left"><a href="../syndication.php?m=news" title="Syndication"><img class="valign_middle" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/rss.png" alt="Syndication" title="Syndication" /></a> <h3 class="title valign_middle">'; if (isset($this->_var['L_LAST_NEWS'])) $tplString .= $this->_var['L_LAST_NEWS']; $tplString .='</h3></div>
<div style="float:right">';
if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) {
$tplString .= ' &nbsp;&nbsp;<a href="admin_news_cat.php?id='; if (isset($this->_var['IDCAT'])) $tplString .= $this->_var['IDCAT']; $tplString .='" title="'; if (isset($this->_var['L_EDIT'])) $tplString .= $this->_var['L_EDIT']; $tplString .='"><img class="valign_middle" src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/'; if (isset($this->_var['LANG'])) $tplString .= $this->_var['LANG']; $tplString .='/edit.png" /></a> ';
}
$tplString .= '</div>
</div>	
<div class="news_content">

';
if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key];
$tplString .= '
';
if (isset($_tmpb_list['C_NEWS_ROW']) && $_tmpb_list['C_NEWS_ROW']) {
$tplString .= ' 
<div class="spacer"></div> 
';
}
$tplString .= '

';
if (isset($this->_var['C_NEWS_LINK_COLUMN']) && $this->_var['C_NEWS_LINK_COLUMN']) {
$tplString .= ' 
<div style="float:left;width:'; if (isset($this->_var['COLUMN_WIDTH'])) $tplString .= $this->_var['COLUMN_WIDTH']; $tplString .='%">
';
} else {
$tplString .= '
<div>
';
}
$tplString .= '
<ul style="margin:0;padding:0;list-style-type:none;">
<li><img src="../templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/li.png" alt="" /> '; if (isset($_tmpb_list['ICON'])) $tplString .= $_tmpb_list['ICON']; $tplString .= ' <span class="text_small">'; if (isset($_tmpb_list['DATE'])) $tplString .= $_tmpb_list['DATE']; $tplString .= ' :</span> <a href="'; if (isset($_tmpb_list['U_NEWS'])) $tplString .= $_tmpb_list['U_NEWS']; $tplString .= '">'; if (isset($_tmpb_list['TITLE'])) $tplString .= $_tmpb_list['TITLE']; $tplString .= '</a></li>
</ul>
</div>
';
}
$tplString .= '

<div class="spacer">&nbsp;</div>
<div class="text_center">'; if (isset($this->_var['PAGINATION'])) $tplString .= $this->_var['PAGINATION']; $tplString .='</div>
<div class="text_center">'; if (isset($this->_var['ARCHIVES'])) $tplString .= $this->_var['ARCHIVES']; $tplString .='</div>
</div>
<div class="news_bottom_l"></div>
<div class="news_bottom_r"></div>
<div class="news_bottom"></div>
</div>
';
}
$tplString .= '
'; ?>