		<script type="text/javascript">
		<!--
			var theme = '<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>';
		-->
		</script>
		<script type="text/javascript" src="../kernel/framework/js/calendar.js"></script>
		<script type="text/javascript">
		<!--
		function check_form(){
			<?php if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) { ?>
				tinyMCE.triggerSave();
			<?php } ?>
			
			if(document.getElementById('title').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_TITLE'])) echo $this->_var['L_REQUIRE_TITLE']; ?>");
				return false;
		    }
			if(document.getElementById('contents').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_TEXT'])) echo $this->_var['L_REQUIRE_TEXT']; ?>");
				return false;
		    }

			return true;
		}

		-->
		</script>

		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_NEWS_MANAGEMENT'])) echo $this->_var['L_NEWS_MANAGEMENT']; ?></li>
				<li>
					<a href="admin_news.php"><img src="news.png" alt="" /></a>
					<br />
					<a href="admin_news.php" class="quick_link"><?php if (isset($this->_var['L_NEWS_MANAGEMENT'])) echo $this->_var['L_NEWS_MANAGEMENT']; ?></a>
				</li>
				<li>
					<a href="admin_news_add.php"><img src="news.png" alt="" /></a>
					<br />
					<a href="admin_news_add.php" class="quick_link"><?php if (isset($this->_var['L_ADD_NEWS'])) echo $this->_var['L_ADD_NEWS']; ?></a>
				</li>
				<li>
					<a href="admin_news_cat.php"><img src="news.png" alt="" /></a>
					<br />
					<a href="admin_news_cat.php" class="quick_link"><?php if (isset($this->_var['L_CAT_NEWS'])) echo $this->_var['L_CAT_NEWS']; ?></a>
				</li>
				<li>
					<a href="admin_news_config.php"><img src="news.png" alt="" /></a>
					<br />
					<a href="admin_news_config.php" class="quick_link"><?php if (isset($this->_var['L_CONFIG_NEWS'])) echo $this->_var['L_CONFIG_NEWS']; ?></a>
				</li>
			</ul>
		</div>
		<div id="admin_contents">
			<?php if (!isset($this->_block['news']) || !is_array($this->_block['news'])) $this->_block['news'] = array();
foreach ($this->_block['news'] as $news_key => $news_value) {
$_tmpb_news = &$this->_block['news'][$news_key]; ?>
			<div class="block_container">
			<div class="block_top"><?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?></div>
			<div class="block_contents row2">
				<div class="news_container">
					<div class="news_top_l"></div>			
					<div class="news_top_r"></div>
					<div class="news_top">
						<div style="float:left"><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/syndication.php?m=news" title="Rss"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Rss" title="Rss" /></a> <h3 class="title valign_middle"><?php if (isset($_tmpb_news['TITLE'])) echo $_tmpb_news['TITLE']; ?></h3></div>
						<div style="float:right"></div>
					</div>													
					<div class="news_content">
						<?php if (isset($_tmpb_news['IMG'])) echo $_tmpb_news['IMG'];echo ' ';if (isset($_tmpb_news['PREVIEWED_CONTENTS'])) echo $_tmpb_news['PREVIEWED_CONTENTS']; ?>
						<div class="spacer"></div>
						<hr />
						<?php if (isset($_tmpb_news['PREVIEWED_EXTEND_CONTENTS'])) echo $_tmpb_news['PREVIEWED_EXTEND_CONTENTS']; ?>
						<div class="spacer"></div>
					</div>									
					<div class="news_bottom_l"></div>		
					<div class="news_bottom_r"></div>
					<div class="news_bottom">
						<span style="float:left"><a class="small_link" href="../member/member<?php if (isset($_tmpb_news['U_USER_ID'])) echo $_tmpb_news['U_USER_ID']; ?>"><?php if (isset($_tmpb_news['PSEUDO'])) echo $_tmpb_news['PSEUDO']; ?></a></span>
						<span style="float:right"><?php if (isset($this->_var['L_ON'])) echo $this->_var['L_ON']; ?>: <?php if (isset($_tmpb_news['DATE'])) echo $_tmpb_news['DATE']; ?></span>
					</div>
				</div>					
			</div>				
			</div>
		
			<br /><br /><br />
			<?php }echo ' ';if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
			<div class="error_handler_position">
				<span id="errorh"></span>
				<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
					<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
					<br />	
				</div>
			</div>
			<?php } ?>	
			
			<form action="admin_news_add.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" name="form" method="post" style="margin:auto;" onsubmit="return check_form();" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_ADD_NEWS'])) echo $this->_var['L_ADD_NEWS']; ?></legend>
					<p><?php if (isset($this->_var['L_REQUIRE'])) echo $this->_var['L_REQUIRE']; ?></p>
					<dl>
						<dt><label for="title">* <?php if (isset($this->_var['L_TITLE'])) echo $this->_var['L_TITLE']; ?></label></dt>
						<dd><label><input type="text" size="65" maxlength="100" id="title" name="title" value="<?php if (isset($this->_var['NEWS_TITLE'])) echo $this->_var['NEWS_TITLE']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="idcat">* <?php if (isset($this->_var['L_CATEGORY'])) echo $this->_var['L_CATEGORY']; ?></label></dt>
						<dd><label>
							<select id="idcat" name="idcat">				
							<?php if (!isset($this->_block['select']) || !is_array($this->_block['select'])) $this->_block['select'] = array();
foreach ($this->_block['select'] as $select_key => $select_value) {
$_tmpb_select = &$this->_block['select'][$select_key];echo ' ';if (isset($_tmpb_select['CAT'])) echo $_tmpb_select['CAT'];echo ' ';} ?>				
							</select>
						</label></dd>
					</dl>
					<br />
					<label for="contents">* <?php if (isset($this->_var['L_TEXT'])) echo $this->_var['L_TEXT']; ?></label>
					<?php if (isset($this->_var['KERNEL_EDITOR'])) echo $this->_var['KERNEL_EDITOR']; ?>
					<label><textarea rows="20" cols="86" id="contents" name="contents"><?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?></textarea></label>
					<br />
					<br />
					<label for="extend_contents"><?php if (isset($this->_var['L_EXTENDED_NEWS'])) echo $this->_var['L_EXTENDED_NEWS']; ?></label>
					<?php if (isset($this->_var['KERNEL_EDITOR_EXTEND'])) echo $this->_var['KERNEL_EDITOR_EXTEND']; ?>
					<label><textarea rows="20" cols="86" id="extend_contents" name="extend_contents"><?php if (isset($this->_var['EXTEND_CONTENTS'])) echo $this->_var['EXTEND_CONTENTS']; ?></textarea> </label>
					<br />
					<dl class="overflow_visible">
						<dt><label for="release_date">* <?php if (isset($this->_var['L_RELEASE_DATE'])) echo $this->_var['L_RELEASE_DATE']; ?></label></dt>
						<dd>
							<div onclick="document.getElementById('start_end_date').checked = true;">
								<label><input type="radio" value="2" name="visible" id="start_end_date" <?php if (isset($this->_var['VISIBLE_WAITING'])) echo $this->_var['VISIBLE_WAITING']; ?> /></label>
								<input type="text" size="7" maxlength="8" id="start" name="start" value="<?php if (isset($this->_var['START'])) echo $this->_var['START']; ?>" class="text" /> 				
								<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar1">
									<div id="start_date" class="calendar_block" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);"></div>
								</div>
								<a onclick="xmlhttprequest_calendar('start_date', '?input_field=start&amp;field=start_date&amp;d=<?php if (isset($this->_var['DAY_RELEASE_S'])) echo $this->_var['DAY_RELEASE_S']; ?>&amp;m=<?php if (isset($this->_var['MONTH_RELEASE_S'])) echo $this->_var['MONTH_RELEASE_S']; ?>&amp;y=<?php if (isset($this->_var['YEAR_RELEASE_S'])) echo $this->_var['YEAR_RELEASE_S']; ?>');display_calendar(1);" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgstart_date" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
								
								<?php if (isset($this->_var['L_AT'])) echo $this->_var['L_AT']; ?>
								<input type="text" size="1" maxlength="2" name="start_hour" value="<?php if (isset($this->_var['START_HOUR'])) echo $this->_var['START_HOUR']; ?>" class="text" /> <?php if (isset($this->_var['L_UNIT_HOUR'])) echo $this->_var['L_UNIT_HOUR']; ?> <input type="text" size="1" maxlength="2" name="start_min" value="<?php if (isset($this->_var['START_MIN'])) echo $this->_var['START_MIN']; ?>" class="text" />
								&nbsp;<?php if (isset($this->_var['L_UNTIL'])) echo $this->_var['L_UNTIL']; ?>&nbsp;
								<input type="text" size="7" maxlength="8" id="end" name="end" value="<?php if (isset($this->_var['END'])) echo $this->_var['END']; ?>" class="text" /> 
								<div style="position:relative;z-index:100;top:6px;margin-left:250px;float:left;display:none;" id="calendar2">
									<div id="end_date" class="calendar_block" onmouseover="hide_calendar(2, 1);" onmouseout="hide_calendar(2, 0);"></div>
								</div>
								<a onclick="xmlhttprequest_calendar('end_date', '?input_field=end&amp;field=end_date&amp;d=<?php if (isset($this->_var['DAY_RELEASE_S'])) echo $this->_var['DAY_RELEASE_S']; ?>&amp;m=<?php if (isset($this->_var['MONTH_RELEASE_S'])) echo $this->_var['MONTH_RELEASE_S']; ?>&amp;y=<?php if (isset($this->_var['YEAR_RELEASE_S'])) echo $this->_var['YEAR_RELEASE_S']; ?>');display_calendar(2, 'end_date');" onmouseover="hide_calendar(2, 1);" onmouseout="hide_calendar(2, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgend_date" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
								<?php if (isset($this->_var['L_AT'])) echo $this->_var['L_AT']; ?>
								<input type="text" size="1" maxlength="2" name="end_hour" value="<?php if (isset($this->_var['END_HOUR'])) echo $this->_var['END_HOUR']; ?>" class="text" /> <?php if (isset($this->_var['L_UNIT_HOUR'])) echo $this->_var['L_UNIT_HOUR']; ?> <input type="text" size="1" maxlength="2" name="end_min" value="<?php if (isset($this->_var['END_MIN'])) echo $this->_var['END_MIN']; ?>" class="text" />
							</div>
							<label><input type="radio" value="1" name="visible" <?php if (isset($this->_var['VISIBLE_ENABLED'])) echo $this->_var['VISIBLE_ENABLED']; ?> id="release_date" /> <?php if (isset($this->_var['L_IMMEDIATE'])) echo $this->_var['L_IMMEDIATE']; ?></label>
							<br />
							<label><input type="radio" value="0" name="visible" <?php if (isset($this->_var['VISIBLE_UNAPROB'])) echo $this->_var['VISIBLE_UNAPROB']; ?> /> <?php if (isset($this->_var['L_UNAPROB'])) echo $this->_var['L_UNAPROB']; ?></label>
						</dd>
					</dl>
					<dl class="overflow_visible">
						<dt><label for="current_date">* <?php if (isset($this->_var['L_NEWS_DATE'])) echo $this->_var['L_NEWS_DATE']; ?></label></dt>
						<dd>
							<input type="text" size="7" maxlength="8" id="current_date" name="current_date" value="<?php if (isset($this->_var['CURRENT_DATE'])) echo $this->_var['CURRENT_DATE']; ?>" class="text" />			
							<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar3">
								<div id="current" class="calendar_block" onmouseover="hide_calendar(3, 1);" onmouseout="hide_calendar(3, 0);"></div>
							</div>
							<a onclick="xmlhttprequest_calendar('current', '?input_field=current_date&amp;field=current&amp;d=<?php if (isset($this->_var['DAY_RELEASE_S'])) echo $this->_var['DAY_RELEASE_S']; ?>&amp;m=<?php if (isset($this->_var['MONTH_RELEASE_S'])) echo $this->_var['MONTH_RELEASE_S']; ?>&amp;y=<?php if (isset($this->_var['YEAR_RELEASE_S'])) echo $this->_var['YEAR_RELEASE_S']; ?>');display_calendar(3);" onmouseover="hide_calendar(3, 1);" onmouseout="hide_calendar(3, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgcurrent"  src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>							
							<?php if (isset($this->_var['L_AT'])) echo $this->_var['L_AT']; ?>
							<input type="text" size="1" maxlength="2" name="current_hour" value="<?php if (isset($this->_var['CURRENT_HOUR'])) echo $this->_var['CURRENT_HOUR']; ?>" class="text" /> <?php if (isset($this->_var['L_UNIT_HOUR'])) echo $this->_var['L_UNIT_HOUR']; ?> <input type="text" size="1" maxlength="2" name="current_min" value="<?php if (isset($this->_var['CURRENT_MIN'])) echo $this->_var['CURRENT_MIN']; ?>" class="text" />							
						</dd>
					</dl>
				</fieldset>	
				
				<fieldset>
					<legend><?php if (isset($this->_var['L_IMG_MANAGEMENT'])) echo $this->_var['L_IMG_MANAGEMENT']; ?></legend>
					<dl>
						<dt><label><?php if (isset($this->_var['L_PREVIEW_IMG'])) echo $this->_var['L_PREVIEW_IMG']; ?></label><br /><span><?php if (isset($this->_var['L_PREVIEW_IMG_EXPLAIN'])) echo $this->_var['L_PREVIEW_IMG_EXPLAIN']; ?></span></dt>
						<dd><?php if (isset($this->_var['IMG_PREVIEW'])) echo $this->_var['IMG_PREVIEW']; ?></dd>
					</dl>
					<dl>
						<dt><label for="img_field"><?php if (isset($this->_var['L_IMG_LINK'])) echo $this->_var['L_IMG_LINK']; ?></label></dt>
						<dd><label><input type="text" size="60" id="img_field" name="img" value="<?php if (isset($this->_var['IMG'])) echo $this->_var['IMG']; ?>" class="text" /> &nbsp;&nbsp;<a title="<?php if (isset($this->_var['L_BB_UPLOAD'])) echo $this->_var['L_BB_UPLOAD']; ?>" href="#" onclick="window.open('<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/member/upload.php?popup=1&amp;fd=img_field', '', 'height=500,width=720,resizable=yes,scrollbars=yes');return false;"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/files_add.png" alt="" /></a></label></dd>
					</dl>
					<dl>
						<dt><label for="alt"><?php if (isset($this->_var['L_IMG_DESC'])) echo $this->_var['L_IMG_DESC']; ?></label></dt>
						<dd><label><input type="text" size="60" name="alt" id="alt" value="<?php if (isset($this->_var['ALT'])) echo $this->_var['ALT']; ?>" class="text" /></label></dd>
					</dl>
				</fieldset>		
				
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
					<input type="submit" name="valid" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
					&nbsp;&nbsp; 
					<input type="submit" name="previs" value="<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>" class="submit" />
					&nbsp;&nbsp; 
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />				
				</fieldset>	
			</form>
		</div>
