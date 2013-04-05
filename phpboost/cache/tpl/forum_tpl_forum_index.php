		<?php $this->_include('forum_top');echo ' ';if (!isset($this->_block['forums_list']) || !is_array($this->_block['forums_list'])) $this->_block['forums_list'] = array();
foreach ($this->_block['forums_list'] as $forums_list_key => $forums_list_value) {
$_tmpb_forums_list = &$this->_block['forums_list'][$forums_list_key];echo ' ';if (!isset($_tmpb_forums_list['endcats']) || !is_array($_tmpb_forums_list['endcats'])) $_tmpb_forums_list['endcats'] = array();
foreach ($_tmpb_forums_list['endcats'] as $endcats_key => $endcats_value) {
$_tmpb_endcats = &$_tmpb_forums_list['endcats'][$endcats_key]; ?>
		<div class="module_position">
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom"></div>
		</div>
	</div>	
		<?php }echo ' ';if (!isset($_tmpb_forums_list['cats']) || !is_array($_tmpb_forums_list['cats'])) $_tmpb_forums_list['cats'] = array();
foreach ($_tmpb_forums_list['cats'] as $cats_key => $cats_value) {
$_tmpb_cats = &$_tmpb_forums_list['cats'][$cats_key]; ?>		
		<div style="margin-top:20px;">
			<div class="module_position">					
				<div class="module_top_l"></div>		
				<div class="module_top_r"></div>
				<div class="module_top">
					<span class="forum_cat_title">
						<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/syndication.php?m=forum&amp;cat=<?php if (isset($_tmpb_cats['IDCAT'])) echo $_tmpb_cats['IDCAT']; ?>" title="Rss"><img style="vertical-align:middle;margin-top:-2px;" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Rss" title="Rss" /></a>
						&nbsp;&nbsp;<a href="<?php if (isset($_tmpb_cats['U_FORUM_VARS'])) echo $_tmpb_cats['U_FORUM_VARS']; ?>" class="forum_link_cat"><?php if (isset($_tmpb_cats['NAME'])) echo $_tmpb_cats['NAME']; ?></a>
					</span>
					<span style="float:right">
						<a href="unread.php?cat=<?php if (isset($_tmpb_cats['IDCAT'])) echo $_tmpb_cats['IDCAT']; ?>" title="<?php if (isset($this->_var['L_DISPLAY_UNREAD_MSG'])) echo $this->_var['L_DISPLAY_UNREAD_MSG']; ?>"><img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/new_mini.png" alt="" /></a>
					</span>
				</div>
				<div class="module_contents forum_contents">
					<table class="module_table forum_table">
						<tr>			
							<td class="forum_text_column" style="min-width:175px;"><?php if (isset($this->_var['L_FORUM'])) echo $this->_var['L_FORUM']; ?></td>
							<td class="forum_text_column" style="width:60px;"><?php if (isset($this->_var['L_TOPIC'])) echo $this->_var['L_TOPIC']; ?></td>
							<td class="forum_text_column" style="width:60px;"><?php if (isset($this->_var['L_MESSAGE'])) echo $this->_var['L_MESSAGE']; ?></td>
							<td class="forum_text_column" style="width:150px;"><?php if (isset($this->_var['L_LAST_MESSAGE'])) echo $this->_var['L_LAST_MESSAGE']; ?></td>
						</tr>
					</table>
				</div>
			</div>		
			<?php }echo ' ';if (!isset($_tmpb_forums_list['subcats']) || !is_array($_tmpb_forums_list['subcats'])) $_tmpb_forums_list['subcats'] = array();
foreach ($_tmpb_forums_list['subcats'] as $subcats_key => $subcats_value) {
$_tmpb_subcats = &$_tmpb_forums_list['subcats'][$subcats_key]; ?>		
			<div class="module_position">
				<div class="module_contents forum_contents">
					<table class="module_table forum_table">
						<tr>
							<?php if (isset($_tmpb_subcats['U_FORUM_URL']) && $_tmpb_subcats['U_FORUM_URL']) { ?>
							<td class="forum_sous_cat" style="width:25px;text-align:center;">
								<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/weblink.png" alt="" />
							</td>
							<td class="forum_sous_cat" style="min-width:150px;border-right:none" colspan="3">
								<a href="<?php if (isset($_tmpb_subcats['U_FORUM_URL'])) echo $_tmpb_subcats['U_FORUM_URL']; ?>"><?php if (isset($_tmpb_subcats['NAME'])) echo $_tmpb_subcats['NAME']; ?></a>
								<br />
								<span class="text_small"><?php if (isset($_tmpb_subcats['DESC'])) echo $_tmpb_subcats['DESC']; ?></span>
							</td>
							<?php } else { ?>
							<td class="forum_sous_cat" style="width:25px;text-align:center;">
								<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/<?php if (isset($_tmpb_subcats['IMG_ANNOUNCE'])) echo $_tmpb_subcats['IMG_ANNOUNCE']; ?>.png" alt="" />
							</td>
							<td class="forum_sous_cat" style="min-width:150px;">
								<a href="forum<?php if (isset($_tmpb_subcats['U_FORUM_VARS'])) echo $_tmpb_subcats['U_FORUM_VARS']; ?>"><?php if (isset($_tmpb_subcats['NAME'])) echo $_tmpb_subcats['NAME']; ?></a>
								<br />
								<span class="text_small"><?php if (isset($_tmpb_subcats['DESC'])) echo $_tmpb_subcats['DESC']; ?></span>
								<span class="text_small"><?php if (isset($_tmpb_subcats['SUBFORUMS'])) echo $_tmpb_subcats['SUBFORUMS']; ?></span>
							</td>
							<td class="forum_sous_cat_compteur">
								<?php if (isset($_tmpb_subcats['NBR_TOPIC'])) echo $_tmpb_subcats['NBR_TOPIC']; ?>
							</td>
							<td class="forum_sous_cat_compteur">
								<?php if (isset($_tmpb_subcats['NBR_MSG'])) echo $_tmpb_subcats['NBR_MSG']; ?>
							</td>
							<td class="forum_sous_cat_last">
								<?php if (isset($_tmpb_subcats['U_LAST_TOPIC'])) echo $_tmpb_subcats['U_LAST_TOPIC']; ?>
							</td>
							<?php } ?>
						</tr>	
					</table>		
				</div>
			</div>
			<?php }echo ' ';}echo ' ';$this->_include('forum_bottom'); ?>
		