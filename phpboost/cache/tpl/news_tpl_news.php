        <script type="text/javascript">
        <!--
        function Confirm() {
            return confirm("<?php if (isset($this->_var['L_ALERT_DELETE_NEWS'])) echo $this->_var['L_ALERT_DELETE_NEWS']; ?>");
        }
        -->
        </script>
        
        <?php if (isset($this->_var['C_NEWS_EDITO']) && $this->_var['C_NEWS_EDITO']) { ?>
        <div class="news_container">
            <div class="news_top_l"></div>
            <div class="news_top_r"></div>
            <div class="news_top">
                <div style="float:left;padding-left:30px;"><h3 class="title"><?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?></h3></div>
                <div style="float:right;"><?php if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) { ?> <a href="../news/admin_news_config.php" title="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" class="valign_middle" alt="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>" /></a> <?php } ?></div>
            </div>
            <div class="news_content">
                &nbsp;&nbsp;<?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?>
            </div>
            
            <div class="news_bottom_l"></div>
            <div class="news_bottom_r"></div>
            <div class="news_bottom"></div>
        </div>
        <?php }echo ' ';if (isset($this->_var['C_NEWS_NO_AVAILABLE']) && $this->_var['C_NEWS_NO_AVAILABLE']) { ?>
        <div class="news_container">
            <div class="news_top_l"></div>
            <div class="news_top_r"></div>
            <div class="news_top">
                <div style="float:left;padding-left:30px;"><a href="../syndication.php?m=news" title="Syndication"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Syndication" title="Syndication" /></a></div>
                <div style="float:right;"><h3 class="title valign_middle"><?php if (isset($this->_var['L_LAST_NEWS'])) echo $this->_var['L_LAST_NEWS']; ?></h3></div>
            </div>  
            <div class="news_content">
                <p class="text_strong text_center"><?php if (isset($this->_var['L_NO_NEWS_AVAILABLE'])) echo $this->_var['L_NO_NEWS_AVAILABLE']; ?></p>
            </div>
            <div class="news_bottom_l"></div>
            <div class="news_bottom_r"></div>
            <div class="news_bottom"></div>
        </div>
        <?php }echo ' ';if (isset($this->_var['C_NEWS_BLOCK']) && $this->_var['C_NEWS_BLOCK']) {echo ' ';if (!isset($this->_block['news']) || !is_array($this->_block['news'])) $this->_block['news'] = array();
foreach ($this->_block['news'] as $news_key => $news_value) {
$_tmpb_news = &$this->_block['news'][$news_key];echo ' ';if (isset($_tmpb_news['C_NEWS_ROW']) && $_tmpb_news['C_NEWS_ROW']) { ?> <div class="spacer"></div> <?php }echo ' ';if (isset($this->_var['C_NEWS_BLOCK_COLUMN']) && $this->_var['C_NEWS_BLOCK_COLUMN']) { ?> 
        <div class="news_container" style="float:left;width:<?php if (isset($this->_var['COLUMN_WIDTH'])) echo $this->_var['COLUMN_WIDTH']; ?>%">
		<?php } else { ?>
        <div class="news_container">
		<?php } ?>
            <div class="news_top_l"></div>
            <div class="news_top_r"></div>
            <div class="news_top">
                <span style="float:left;padding-left:5px;">
                    <a href="../syndication.php?m=news" title="Rss"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Rss" title="Rss" /></a>
                    <a class="news_title" href="../news/news<?php if (isset($_tmpb_news['U_NEWS_LINK'])) echo $_tmpb_news['U_NEWS_LINK']; ?>"><?php if (isset($_tmpb_news['TITLE'])) echo $_tmpb_news['TITLE']; ?></a>
                </span>
                <span style="float:right;">
					<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/news/templates/images/comments.png" alt="" class="valign_middle" /> <?php if (isset($_tmpb_news['U_COM'])) echo $_tmpb_news['U_COM'];echo ' ';if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) { ?>
					<a href="../news/admin_news.php?id=<?php if (isset($_tmpb_news['ID'])) echo $_tmpb_news['ID']; ?>" title="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>" /></a>
					<a href="../news/admin_news.php?delete=1&amp;id=<?php if (isset($_tmpb_news['ID'])) echo $_tmpb_news['ID']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" onclick="javascript:return Confirm();"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" /></a>
					<?php } ?>
				</span>
            </div>
            <div class="news_content">
                <?php if (isset($_tmpb_news['IMG']) && $_tmpb_news['IMG']) { ?> <img src="<?php if (isset($_tmpb_news['IMG'])) echo $_tmpb_news['IMG']; ?>" alt="<?php if (isset($_tmpb_news['IMG_DESC'])) echo $_tmpb_news['IMG_DESC']; ?>" title="<?php if (isset($_tmpb_news['IMG_DESC'])) echo $_tmpb_news['IMG_DESC']; ?>" class="img_right" /> <?php }echo ' ';if (isset($_tmpb_news['C_ICON']) && $_tmpb_news['C_ICON']) { ?> <a href="news.php?cat=<?php if (isset($_tmpb_news['IDCAT'])) echo $_tmpb_news['IDCAT']; ?>"><img class="valign_middle" src="<?php if (isset($_tmpb_news['ICON'])) echo $_tmpb_news['ICON']; ?>" alt="" /></a> <?php }echo ' ';if (isset($_tmpb_news['CONTENTS'])) echo $_tmpb_news['CONTENTS']; ?>
                <br /><br />
                <?php if (isset($_tmpb_news['EXTEND_CONTENTS'])) echo $_tmpb_news['EXTEND_CONTENTS']; ?>
				<div class="spacer"></div>
            </div>
            <div class="news_bottom_l"></div>
            <div class="news_bottom_r"></div>
            <div class="news_bottom">
                <span style="float:left"><a class="small_link" href="../member/member<?php if (isset($_tmpb_news['U_USER_ID'])) echo $_tmpb_news['U_USER_ID']; ?>"><?php if (isset($_tmpb_news['PSEUDO'])) echo $_tmpb_news['PSEUDO']; ?></a></span>
                <span style="float:right"><?php if (isset($_tmpb_news['DATE'])) echo $_tmpb_news['DATE']; ?></span>
            </div>
        </div>		
       <?php if (isset($this->_var['COMMENTS'])) echo $this->_var['COMMENTS'];echo ' ';}echo ' ';if (isset($this->_var['C_NEWS_NAVIGATION_LINKS']) && $this->_var['C_NEWS_NAVIGATION_LINKS']) { ?>
        <div style="width:90%;padding:20px;margin:auto;margin-top:-15px;">
            <?php if (isset($this->_var['C_PREVIOUS_NEWS']) && $this->_var['C_PREVIOUS_NEWS']) { ?> <span style="float:left;"><a href="news<?php if (isset($this->_var['U_PREVIOUS_NEWS'])) echo $this->_var['U_PREVIOUS_NEWS']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/left.png" alt="" class="valign_middle" /></a> <a href="news<?php if (isset($this->_var['U_PREVIOUS_NEWS'])) echo $this->_var['U_PREVIOUS_NEWS']; ?>"><?php if (isset($this->_var['PREVIOUS_NEWS'])) echo $this->_var['PREVIOUS_NEWS']; ?></a></span> <?php }echo ' ';if (isset($this->_var['C_NEXT_NEWS']) && $this->_var['C_NEXT_NEWS']) { ?> <span style="float:right;"><a href="news<?php if (isset($this->_var['U_NEXT_NEWS'])) echo $this->_var['U_NEXT_NEWS']; ?>"><?php if (isset($this->_var['NEXT_NEWS'])) echo $this->_var['NEXT_NEWS']; ?></a> <a href="news<?php if (isset($this->_var['U_NEXT_NEWS'])) echo $this->_var['U_NEXT_NEWS']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/right.png" alt="" class="valign_middle" /></a></span> <?php } ?>
        </div>
        <?php } ?>
        
		<div class="spacer"></div>
        <div class="text_center"><?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?></div>
        <div class="text_center"><?php if (isset($this->_var['ARCHIVES'])) echo $this->_var['ARCHIVES']; ?></div>
		<div class="spacer"></div>
        <?php }echo ' ';if (isset($this->_var['C_NEWS_LINK']) && $this->_var['C_NEWS_LINK']) { ?>		
		<div class="news_container">
			<div class="news_top_l"></div>			
			<div class="news_top_r"></div>
			<div class="news_top">
				<div style="float:left"><a href="../syndication.php?m=news" title="Syndication"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Syndication" title="Syndication" /></a> <h3 class="title valign_middle"><?php if (isset($this->_var['L_LAST_NEWS'])) echo $this->_var['L_LAST_NEWS']; ?></h3></div>
				<div style="float:right"><?php if (isset($this->_var['C_IS_ADMIN']) && $this->_var['C_IS_ADMIN']) { ?> &nbsp;&nbsp;<a href="admin_news_cat.php?id=<?php if (isset($this->_var['IDCAT'])) echo $this->_var['IDCAT']; ?>" title="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" /></a> <?php } ?></div>
			</div>	
			<div class="news_content">
		
			<?php if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key];echo ' ';if (isset($_tmpb_list['C_NEWS_ROW']) && $_tmpb_list['C_NEWS_ROW']) { ?> 
				<div class="spacer"></div> 
				<?php }echo ' ';if (isset($this->_var['C_NEWS_LINK_COLUMN']) && $this->_var['C_NEWS_LINK_COLUMN']) { ?> 
				<div style="float:left;width:<?php if (isset($this->_var['COLUMN_WIDTH'])) echo $this->_var['COLUMN_WIDTH']; ?>%">
				<?php } else { ?>
				<div>
				<?php } ?>
					<ul style="margin:0;padding:0;list-style-type:none;">
						<li><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/li.png" alt="" /> <?php if (isset($_tmpb_list['ICON'])) echo $_tmpb_list['ICON']; ?> <span class="text_small"><?php if (isset($_tmpb_list['DATE'])) echo $_tmpb_list['DATE']; ?> :</span> <a href="<?php if (isset($_tmpb_list['U_NEWS'])) echo $_tmpb_list['U_NEWS']; ?>"><?php if (isset($_tmpb_list['TITLE'])) echo $_tmpb_list['TITLE']; ?></a></li>
					</ul>
				</div>
			<?php } ?>
			
				<div class="spacer">&nbsp;</div>
				<div class="text_center"><?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?></div>
				<div class="text_center"><?php if (isset($this->_var['ARCHIVES'])) echo $this->_var['ARCHIVES']; ?></div>				
			</div>
			<div class="news_bottom_l"></div>		
			<div class="news_bottom_r"></div>
			<div class="news_bottom"></div>
		</div>		
		<?php } ?>
		