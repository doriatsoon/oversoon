		<?php if (isset($this->_var['C_DISPLAY_ARTICLE']) && $this->_var['C_DISPLAY_ARTICLE']) { ?>
		<script type="text/javascript">
		<!--
		function Confirm_del_article() {
		return confirm("<?php if (isset($this->_var['L_ALERT_DELETE_ARTICLE'])) echo $this->_var['L_ALERT_DELETE_ARTICLE']; ?>");
		}
		-->
		</script>		
		
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">
				<div style="float:left">
					<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/syndication.php?m=articles&amp;cat=<?php if (isset($this->_var['IDCAT'])) echo $this->_var['IDCAT']; ?>" title="Rss"><img style="vertical-align:middle;margin-top:-2px;" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Rss" title="Rss" /></a>  <strong><?php if (isset($this->_var['NAME'])) echo $this->_var['NAME']; ?></strong>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['COM'])) echo $this->_var['COM'];echo ' ';if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) { ?>
					&nbsp;&nbsp;<a href="../articles/admin_articles.php?id=<?php if (isset($this->_var['IDART'])) echo $this->_var['IDART']; ?>" title="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" class="valign_middle" alt="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>" /></a>
					&nbsp;&nbsp;<a href="../articles/admin_articles.php?delete=1&amp;id=<?php if (isset($this->_var['IDART'])) echo $this->_var['IDART']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" onclick="javascript:return Confirm_del_article();"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" class="valign_middle" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" /></a>
					<?php } ?>
					
					&nbsp;&nbsp;<a href="<?php if (isset($this->_var['U_PRINT_ARTICLE'])) echo $this->_var['U_PRINT_ARTICLE']; ?>" title="<?php if (isset($this->_var['L_PRINTABLE_VERSION'])) echo $this->_var['L_PRINTABLE_VERSION']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/print_mini.png" alt="<?php if (isset($this->_var['L_PRINTABLE_VERSION'])) echo $this->_var['L_PRINTABLE_VERSION']; ?>" class="valign_middle" /></a>
				</div>
			</div>
			<div class="module_contents">
				<?php if (isset($this->_var['PAGINATION_ARTICLES']) && $this->_var['PAGINATION_ARTICLES']) { ?>
				<div style="float:right;margin-right:35px;width:250px;">
					<form action="" method="post">
						<p class="row2 text_strong" style="padding:2px;text-indent:4px;"><?php if (isset($this->_var['L_SUMMARY'])) echo $this->_var['L_SUMMARY']; ?>:</p>
						<p class="row1" style="padding:2px;padding-bottom:15px">
							<select name="page_list" style="display:block;width:100%;margin:auto;font-size:12px;" onchange="document.location = <?php if (isset($this->_var['U_ONCHANGE_ARTICLE'])) echo $this->_var['U_ONCHANGE_ARTICLE']; ?>">
								<?php if (isset($this->_var['PAGES_LIST'])) echo $this->_var['PAGES_LIST']; ?>
							</select>
							<input type="submit" name="valid" id="articles_page_list" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
							<script type="text/javascript">
							<!--				
							document.getElementById('articles_page_list').style.display = 'none';
							-->
							</script>
						</p>
					</form>
				</div>
				<div class="spacer">&nbsp;</div>
				<?php }echo ' ';if (isset($this->_var['PAGE_NAME']) && $this->_var['PAGE_NAME']) { ?>
				<h2 class="title" style="text-indent:35px;"><?php if (isset($this->_var['PAGE_NAME'])) echo $this->_var['PAGE_NAME']; ?></h2>
				<?php }echo ' ';if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?>
				
				<div class="spacer" style="margin-top:35px;">&nbsp;</div>
				<?php if (isset($this->_var['PAGINATION_ARTICLES']) && $this->_var['PAGINATION_ARTICLES']) { ?>
				<div style="float:left;width:33%;text-align:right">&nbsp;<?php if (isset($this->_var['PAGE_PREVIOUS_ARTICLES'])) echo $this->_var['PAGE_PREVIOUS_ARTICLES']; ?></div>
				<div style="float:left;width:33%" class="text_center"><?php if (isset($this->_var['PAGINATION_ARTICLES'])) echo $this->_var['PAGINATION_ARTICLES']; ?></div>
				<div style="float:left;width:33%;"><?php if (isset($this->_var['PAGE_NEXT_ARTICLES'])) echo $this->_var['PAGE_NEXT_ARTICLES']; ?>&nbsp;</div>
				<?php } ?>
				<div class="spacer">&nbsp;</div>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom">
				<div style="float:left" class="text_small">
					<?php if (isset($this->_var['KERNEL_NOTATION'])) echo $this->_var['KERNEL_NOTATION']; ?>
				</div>
				<div style="float:right" class="text_small">
					<?php if (isset($this->_var['L_WRITTEN'])) echo $this->_var['L_WRITTEN']; ?>: <a class="small_link" href="../member/member<?php if (isset($this->_var['U_USER_ID'])) echo $this->_var['U_USER_ID']; ?>"><?php if (isset($this->_var['PSEUDO'])) echo $this->_var['PSEUDO']; ?></a>, <?php if (isset($this->_var['L_ON'])) echo $this->_var['L_ON']; ?>: <?php if (isset($this->_var['DATE'])) echo $this->_var['DATE']; ?>
				</div>
				<div class="spacer"></div>
			</div>
		</div>
		<br /><br />
		<?php if (isset($this->_var['COMMENTS'])) echo $this->_var['COMMENTS'];echo ' ';} ?>
		