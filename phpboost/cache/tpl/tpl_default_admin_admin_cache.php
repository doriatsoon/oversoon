		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_CACHE'])) echo $this->_var['L_CACHE']; ?></li>
                <li>
                    <a href="admin_cache.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/cache.png" alt="" /></a>
                    <br />
                    <a href="admin_cache.php" class="quick_link"><?php if (isset($this->_var['L_CACHE'])) echo $this->_var['L_CACHE']; ?></a>
                </li>
                <li>
                    <a href="admin_cache.php?cache=syndication"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/rss.png" alt="" /></a>
                    <br />
                    <a href="admin_cache.php?cache=syndication" class="quick_link"><?php if (isset($this->_var['L_SYNDICATION'])) echo $this->_var['L_SYNDICATION']; ?></a>
                </li>
			</ul>
		</div>
		
		<div id="admin_contents">
			<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
			<div class="error_handler_position">
				<span id="errorh"></span>
				<div id="error_msg">
					<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
						<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
						<br />	
					</div>	
				</div>
			</div>
			<script type="text/javascript">
			<!--
				//Javascript timeout to hide this message
				setTimeout('Effect.Fade("error_msg");', 1500);
			-->
			</script>
			<?php } ?>
			
			<form action="admin_cache.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_CACHE'])) echo $this->_var['L_CACHE']; ?></legend>
					<p>
						<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/cache.png" alt="" class="img_left" />
						<?php if (isset($this->_var['L_EXPLAIN_SITE_CACHE'])) echo $this->_var['L_EXPLAIN_SITE_CACHE']; ?>
						<br /><br />
					</p>
				</fieldset>
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_GENERATE'])) echo $this->_var['L_GENERATE']; ?></legend>
					<input type="submit" name="cache" value="<?php if (isset($this->_var['L_GENERATE'])) echo $this->_var['L_GENERATE']; ?>" class="submit" />		
				</fieldset>	
			</form>
		</div>
		