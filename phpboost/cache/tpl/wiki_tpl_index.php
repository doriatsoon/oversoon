		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top"><?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?></div>
			<div class="module_contents">
				<?php $this->_include('wiki_tools'); ?>
				<br /><br />
				<?php if (isset($this->_var['INDEX_TEXT'])) echo $this->_var['INDEX_TEXT']; ?>
				<br /><br /><br />
				<div style="text-align:center;" class="row3">
					<a href="<?php if (isset($this->_var['U_EXPLORER'])) echo $this->_var['U_EXPLORER']; ?>"><img src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/explorer.png" alt="<?php if (isset($this->_var['L_EXPLORER'])) echo $this->_var['L_EXPLORER']; ?>" class="valign_middle" /></a> &nbsp; <a href="<?php if (isset($this->_var['U_EXPLORER'])) echo $this->_var['U_EXPLORER']; ?>"><?php if (isset($this->_var['L_EXPLORER'])) echo $this->_var['L_EXPLORER']; ?></a>
				</div>
				<br />
				<?php if (!isset($this->_block['cat_list']) || !is_array($this->_block['cat_list'])) $this->_block['cat_list'] = array();
foreach ($this->_block['cat_list'] as $cat_list_key => $cat_list_value) {
$_tmpb_cat_list = &$this->_block['cat_list'][$cat_list_key]; ?>
					<hr /><br />
					<strong><em><?php if (isset($_tmpb_cat_list['L_CATS'])) echo $_tmpb_cat_list['L_CATS']; ?></em></strong>
					<br /><br />
					<?php if (!isset($_tmpb_cat_list['list']) || !is_array($_tmpb_cat_list['list'])) $_tmpb_cat_list['list'] = array();
foreach ($_tmpb_cat_list['list'] as $list_key => $list_value) {
$_tmpb_list = &$_tmpb_cat_list['list'][$list_key]; ?>
						<img src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/cat.png" class="valign_middle" alt="" />&nbsp;<a href="<?php if (isset($_tmpb_list['U_CAT'])) echo $_tmpb_list['U_CAT']; ?>"><?php if (isset($_tmpb_list['CAT'])) echo $_tmpb_list['CAT']; ?></a><br />
					<?php }echo ' ';if (isset($this->_var['L_NO_CAT'])) echo $this->_var['L_NO_CAT'];echo ' ';}echo ' ';if (!isset($this->_block['last_articles']) || !is_array($this->_block['last_articles'])) $this->_block['last_articles'] = array();
foreach ($this->_block['last_articles'] as $last_articles_key => $last_articles_value) {
$_tmpb_last_articles = &$this->_block['last_articles'][$last_articles_key]; ?>				
				<hr /><br />
				<table class="module_table">
					<tr>
						<th colspan="2">
							<strong><em><?php if (isset($_tmpb_last_articles['L_ARTICLES'])) echo $_tmpb_last_articles['L_ARTICLES']; ?></em></strong> <?php if (isset($_tmpb_last_articles['RSS'])) echo $_tmpb_last_articles['RSS']; ?>
						</th>
					</tr>
					<tr>
						<?php if (!isset($_tmpb_last_articles['list']) || !is_array($_tmpb_last_articles['list'])) $_tmpb_last_articles['list'] = array();
foreach ($_tmpb_last_articles['list'] as $list_key => $list_value) {
$_tmpb_list = &$_tmpb_last_articles['list'][$list_key];echo ' ';if (isset($_tmpb_list['TR'])) echo $_tmpb_list['TR']; ?>
							<td class="row2" style="width:50%">
								<img src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/article.png" class="valign_middle" alt="" />&nbsp;<a href="<?php if (isset($_tmpb_list['U_ARTICLE'])) echo $_tmpb_list['U_ARTICLE']; ?>"><?php if (isset($_tmpb_list['ARTICLE'])) echo $_tmpb_list['ARTICLE']; ?></a>
							</td>
						<?php }echo ' ';if (isset($this->_var['L_NO_ARTICLE'])) echo $this->_var['L_NO_ARTICLE']; ?>
					</tr>
				</table>
				<?php } ?>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom"></div>
		</div>
		