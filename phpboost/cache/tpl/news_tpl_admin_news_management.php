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
			<?php if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key]; ?>
			<script type="text/javascript">
			<!--
			function Confirm() {
				return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_NEWS'])) echo $this->_var['L_CONFIRM_DEL_NEWS']; ?>");
			}
			-->
			</script>
			<table class="module_table">
				<tr style="text-align:center;">
					<th>
						<?php if (isset($this->_var['L_TITLE'])) echo $this->_var['L_TITLE']; ?>
					</th>
					<th>
						<?php if (isset($this->_var['L_CATEGORY'])) echo $this->_var['L_CATEGORY']; ?>
					</th>
					<th>
						<?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?>
					</th>
					<th>
						<?php if (isset($this->_var['L_DATE'])) echo $this->_var['L_DATE']; ?>
					</th>
					<th>
						<?php if (isset($this->_var['L_APROB'])) echo $this->_var['L_APROB']; ?>
					</th>
					<th>
						<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>
					</th>
					<th>
						<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>
					</th>
				</tr>
				
				<?php if (!isset($_tmpb_list['news']) || !is_array($_tmpb_list['news'])) $_tmpb_list['news'] = array();
foreach ($_tmpb_list['news'] as $news_key => $news_value) {
$_tmpb_news = &$_tmpb_list['news'][$news_key]; ?>
				<tr style="text-align:center;"> 
					<td class="row2"> 
						<a href="news.php?id=<?php if (isset($_tmpb_news['IDNEWS'])) echo $_tmpb_news['IDNEWS']; ?>"><?php if (isset($_tmpb_news['TITLE'])) echo $_tmpb_news['TITLE']; ?></a>
					</td>
					<td class="row2"> 
						<?php if (isset($_tmpb_news['CATEGORY'])) echo $_tmpb_news['CATEGORY']; ?>
					</td>
					<td class="row2"> 
						<?php if (isset($_tmpb_news['PSEUDO'])) echo $_tmpb_news['PSEUDO']; ?>
					</td>
					<td class="row2">
						<?php if (isset($_tmpb_news['DATE'])) echo $_tmpb_news['DATE']; ?>
					</td>
					<td class="row2">
						<?php if (isset($_tmpb_news['APROBATION'])) echo $_tmpb_news['APROBATION']; ?> 
						<br />
						<span class="text_small"><?php if (isset($_tmpb_news['VISIBLE'])) echo $_tmpb_news['VISIBLE']; ?></span>
					</td>
					<td class="row2"> 
						<a href="admin_news.php?id=<?php if (isset($_tmpb_news['IDNEWS'])) echo $_tmpb_news['IDNEWS']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" title="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" /></a>
					</td>
					<td class="row2">
						<a href="admin_news.php?delete=true&amp;id=<?php if (isset($_tmpb_news['IDNEWS'])) echo $_tmpb_news['IDNEWS']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" onclick="javascript:return Confirm();"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" /></a>
					</td>
				</tr>
				<?php } ?>
			</table>

			<br /><br />
			<p style="text-align: center;"><?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?></p>	
			<?php }echo ' ';if (!isset($this->_block['news']) || !is_array($this->_block['news'])) $this->_block['news'] = array();
foreach ($this->_block['news'] as $news_key => $news_value) {
$_tmpb_news = &$this->_block['news'][$news_key]; ?>

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

				<?php if (!isset($_tmpb_news['preview']) || !is_array($_tmpb_news['preview'])) $_tmpb_news['preview'] = array();
foreach ($_tmpb_news['preview'] as $preview_key => $preview_value) {
$_tmpb_preview = &$_tmpb_news['preview'][$preview_key]; ?>
				<div class="block_container">
				<div class="block_top"><?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?></div>
				<div class="block_contents row2">
					<div class="news_container">
						<div class="news_top_l"></div>			
						<div class="news_top_r"></div>
						<div class="news_top">
							<div style="float:left"><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/syndication.php?m=news" title="Rss"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Rss" title="Rss" /></a> <h3 class="title valign_middle"><?php if (isset($_tmpb_preview['TITLE'])) echo $_tmpb_preview['TITLE']; ?></h3></div>
							<div style="float:right"></div>
						</div>													
						<div class="news_content">
							<?php if (isset($_tmpb_preview['IMG'])) echo $_tmpb_preview['IMG'];echo ' ';if (isset($_tmpb_preview['CONTENTS'])) echo $_tmpb_preview['CONTENTS']; ?>
							<div class="spacer"></div>
							<hr />
							<?php if (isset($_tmpb_preview['EXTEND_CONTENTS'])) echo $_tmpb_preview['EXTEND_CONTENTS']; ?>
							<div class="spacer"></div>
						</div>
						<div class="news_bottom_l"></div>		
						<div class="news_bottom_r"></div>
						<div class="news_bottom">
							<span style="float:left"><a class="small_link" href="../member/member<?php if (isset($_tmpb_preview['USER_ID'])) echo $_tmpb_preview['USER_ID']; ?>"><?php if (isset($_tmpb_preview['PSEUDO'])) echo $_tmpb_preview['PSEUDO']; ?></a></span>
							<span style="float:right"><?php if (isset($this->_var['L_ON'])) echo $this->_var['L_ON']; ?>: <?php if (isset($_tmpb_preview['DATE'])) echo $_tmpb_preview['DATE']; ?></span>
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
			
				<form action="admin_news.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" name="form" method="post" style="margin:auto;" onsubmit="return check_form();" class="fieldset_content">
					<fieldset>
						<legend><?php if (isset($this->_var['L_ADD_NEWS'])) echo $this->_var['L_ADD_NEWS']; ?></legend>
						<p><?php if (isset($this->_var['L_REQUIRE'])) echo $this->_var['L_REQUIRE']; ?></p>
						<dl>
							<dt><label for="title">* <?php if (isset($this->_var['L_TITLE'])) echo $this->_var['L_TITLE']; ?></label></dt>
							<dd><label><input type="text" size="65" maxlength="100" id="title" name="title" value="<?php if (isset($_tmpb_news['TITLE'])) echo $_tmpb_news['TITLE']; ?>" class="text" /></label></dd>
						</dl>
						<dl>
							<dt><label for="idcat">* <?php if (isset($this->_var['L_CATEGORY'])) echo $this->_var['L_CATEGORY']; ?></label></dt>
							<dd><label>
								<select id="idcat" name="idcat">				
								<?php if (!isset($_tmpb_news['select']) || !is_array($_tmpb_news['select'])) $_tmpb_news['select'] = array();
foreach ($_tmpb_news['select'] as $select_key => $select_value) {
$_tmpb_select = &$_tmpb_news['select'][$select_key];echo ' ';if (isset($_tmpb_select['CAT'])) echo $_tmpb_select['CAT'];echo ' ';} ?>				
								</select>
							</label></dd>
						</dl>
						
						<label for="contents">* <?php if (isset($this->_var['L_TEXT'])) echo $this->_var['L_TEXT']; ?></label>
						<?php if (isset($this->_var['KERNEL_EDITOR'])) echo $this->_var['KERNEL_EDITOR']; ?>
						<label><textarea rows="20" cols="86" id="contents" name="contents"><?php if (isset($_tmpb_news['CONTENTS'])) echo $_tmpb_news['CONTENTS']; ?></textarea></label>
						<br /><br />
						<label for="extend_contents"><?php if (isset($this->_var['L_EXTENDED_NEWS'])) echo $this->_var['L_EXTENDED_NEWS']; ?></label>
						<?php if (isset($this->_var['KERNEL_EDITOR_EXTEND'])) echo $this->_var['KERNEL_EDITOR_EXTEND']; ?>
						<label><textarea rows="20" cols="86" id="extend_contents" name="extend_contents"><?php if (isset($_tmpb_news['EXTEND_CONTENTS'])) echo $_tmpb_news['EXTEND_CONTENTS']; ?></textarea></label>
						<br />
						<dl class="overflow_visible">
							<dt><label for="release_date">* <?php if (isset($this->_var['L_RELEASE_DATE'])) echo $this->_var['L_RELEASE_DATE']; ?></label></dt>
							<dd>
								<div onclick="document.getElementById('start_end_date').checked = true;">
									<label><input type="radio" value="2" name="visible" id="start_end_date" <?php if (isset($_tmpb_news['VISIBLE_WAITING'])) echo $_tmpb_news['VISIBLE_WAITING']; ?> /></label>
									<input type="text" size="7" maxlength="8" id="start" name="start" value="<?php if (isset($_tmpb_news['START'])) echo $_tmpb_news['START']; ?>" class="text" /> 								
									<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar1">
										<div id="start_date" class="calendar_block" style="width:204px;" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);">							
										</div>
									</div>
									<a onclick="xmlhttprequest_calendar('start_date', '?input_field=start&amp;field=start_date&amp;d=<?php if (isset($_tmpb_news['DAY_RELEASE_S'])) echo $_tmpb_news['DAY_RELEASE_S']; ?>&amp;m=<?php if (isset($_tmpb_news['MONTH_RELEASE_S'])) echo $_tmpb_news['MONTH_RELEASE_S']; ?>&amp;y=<?php if (isset($_tmpb_news['YEAR_RELEASE_S'])) echo $_tmpb_news['YEAR_RELEASE_S']; ?>');display_calendar(1);" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgstart_date" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
									<?php if (isset($this->_var['L_AT'])) echo $this->_var['L_AT']; ?>
									<input type="text" size="1" maxlength="2" name="start_hour" value="<?php if (isset($_tmpb_news['START_HOUR'])) echo $_tmpb_news['START_HOUR']; ?>" class="text" /> <?php if (isset($this->_var['L_UNIT_HOUR'])) echo $this->_var['L_UNIT_HOUR']; ?> <input type="text" size="1" maxlength="2" name="start_min" value="<?php if (isset($_tmpb_news['START_MIN'])) echo $_tmpb_news['START_MIN']; ?>" class="text" />
									&nbsp;<?php if (isset($this->_var['L_UNTIL'])) echo $this->_var['L_UNTIL']; ?>&nbsp;
									<input type="text" size="7" maxlength="8" id="end" name="end" value="<?php if (isset($_tmpb_news['END'])) echo $_tmpb_news['END']; ?>" class="text" />
									<div style="position:relative;z-index:100;top:6px;margin-left:155px;float:left;display:none;" id="calendar2">
										<div id="end_date" class="calendar_block" style="width:204px;" onmouseover="hide_calendar(2, 1);" onmouseout="hide_calendar(2, 0);">							
										</div>
									</div>
									<a onclick="xmlhttprequest_calendar('end_date', '?input_field=end&amp;field=end_date&amp;d=<?php if (isset($this->_var['DAY_RELEASE_S'])) echo $this->_var['DAY_RELEASE_S']; ?>&amp;m=<?php if (isset($this->_var['MONTH_RELEASE_S'])) echo $this->_var['MONTH_RELEASE_S']; ?>&amp;y=<?php if (isset($this->_var['YEAR_RELEASE_S'])) echo $this->_var['YEAR_RELEASE_S']; ?>');display_calendar(2, 'end_date');" onmouseover="hide_calendar(2, 1);" onmouseout="hide_calendar(2, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgend_date" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
									<?php if (isset($this->_var['L_AT'])) echo $this->_var['L_AT']; ?>
									<input type="text" size="1" maxlength="2" name="end_hour" value="<?php if (isset($_tmpb_news['END_HOUR'])) echo $_tmpb_news['END_HOUR']; ?>" class="text" /> <?php if (isset($this->_var['L_UNIT_HOUR'])) echo $this->_var['L_UNIT_HOUR']; ?> <input type="text" size="1" maxlength="2" name="end_min" value="<?php if (isset($_tmpb_news['END_MIN'])) echo $_tmpb_news['END_MIN']; ?>" class="text" />
								</div>
								<label><input type="radio" value="1" name="visible" <?php if (isset($_tmpb_news['VISIBLE_ENABLED'])) echo $_tmpb_news['VISIBLE_ENABLED']; ?> id="release_date" /> <?php if (isset($this->_var['L_IMMEDIATE'])) echo $this->_var['L_IMMEDIATE']; ?></label>
								<br />
								<label><input type="radio" value="0" name="visible" <?php if (isset($_tmpb_news['VISIBLE_UNAPROB'])) echo $_tmpb_news['VISIBLE_UNAPROB']; ?> /> <?php if (isset($this->_var['L_UNAPROB'])) echo $this->_var['L_UNAPROB']; ?></label>
							</dd>
						</dl>
						<dl class="overflow_visible">
							<dt><label for="current_date">* <?php if (isset($this->_var['L_NEWS_DATE'])) echo $this->_var['L_NEWS_DATE']; ?></label></dt>
							<dd>
								<input type="text" size="7" maxlength="8" id="current_date" name="current_date" value="<?php if (isset($_tmpb_news['CURRENT_DATE'])) echo $_tmpb_news['CURRENT_DATE']; ?>" class="text" />		
								<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar3">
									<div id="current" class="calendar_block" onmouseover="hide_calendar(3, 1);" onmouseout="hide_calendar(3, 0);">							
									</div>
								</div>
								<a onclick="xmlhttprequest_calendar('current', '?input_field=current_date&amp;field=current&amp;d=<?php if (isset($_tmpb_news['DAY_DATE'])) echo $_tmpb_news['DAY_DATE']; ?>&amp;m=<?php if (isset($_tmpb_news['MONTH_DATE'])) echo $_tmpb_news['MONTH_DATE']; ?>&amp;y=<?php if (isset($_tmpb_news['YEAR_DATE'])) echo $_tmpb_news['YEAR_DATE']; ?>');display_calendar(3);" onmouseover="hide_calendar(3, 1);" onmouseout="hide_calendar(3, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgcurrent" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>								
								<?php if (isset($this->_var['L_AT'])) echo $this->_var['L_AT']; ?>
								<input type="text" size="1" maxlength="2" name="current_hour" value="<?php if (isset($_tmpb_news['CURRENT_HOUR'])) echo $_tmpb_news['CURRENT_HOUR']; ?>" class="text" /> <?php if (isset($this->_var['L_UNIT_HOUR'])) echo $this->_var['L_UNIT_HOUR']; ?> <input type="text" size="1" maxlength="2" name="current_min" value="<?php if (isset($_tmpb_news['CURRENT_MIN'])) echo $_tmpb_news['CURRENT_MIN']; ?>" class="text" />
							</dd>
						</dl>
					</fieldset>	
					
					<fieldset>
						<legend><?php if (isset($this->_var['L_IMG_MANAGEMENT'])) echo $this->_var['L_IMG_MANAGEMENT']; ?></legend>
						<dl>
							<dt><label><?php if (isset($this->_var['L_PREVIEW_IMG'])) echo $this->_var['L_PREVIEW_IMG']; ?></label><br /><span><?php if (isset($this->_var['L_PREVIEW_IMG_EXPLAIN'])) echo $this->_var['L_PREVIEW_IMG_EXPLAIN']; ?></span></dt>
							<dd><?php if (isset($_tmpb_news['IMG_PREVIEW'])) echo $_tmpb_news['IMG_PREVIEW']; ?></dd>
						</dl>
						<dl>
							<dt><label for="img_field"><?php if (isset($this->_var['L_IMG_LINK'])) echo $this->_var['L_IMG_LINK']; ?></label></dt>
							<dd><label><input type="text" size="60" id="img_field" name="img" value="<?php if (isset($_tmpb_news['IMG'])) echo $_tmpb_news['IMG']; ?>" class="text" /> &nbsp;&nbsp;<a title="<?php if (isset($this->_var['L_BB_UPLOAD'])) echo $this->_var['L_BB_UPLOAD']; ?>" href="#" onclick="window.open('<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/member/upload.php?popup=1&amp;fd=img_field', '', 'height=500,width=720,resizable=yes,scrollbars=yes');return false;"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/files_add.png" alt="" /></a></label></dd>
						</dl>
						<dl>
							<dt><label for="alt"><?php if (isset($this->_var['L_IMG_DESC'])) echo $this->_var['L_IMG_DESC']; ?></label></dt>
							<dd><label><input type="text" size="60" name="alt" id="alt" value="<?php if (isset($_tmpb_news['ALT'])) echo $_tmpb_news['ALT']; ?>" class="text" /></label></dd>
						</dl>
					</fieldset>		
					
					<fieldset class="fieldset_submit">
						<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
						<input type="hidden" name="id" value="<?php if (isset($_tmpb_news['IDNEWS'])) echo $_tmpb_news['IDNEWS']; ?>" class="submit" />
						<input type="hidden" name="user_id" value="<?php if (isset($_tmpb_news['USER_ID'])) echo $_tmpb_news['USER_ID']; ?>" class="submit" />
						<input type="submit" name="valid" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
						&nbsp;&nbsp; 
						<input type="submit" name="previs" value="<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>" class="submit" />
						&nbsp;&nbsp; 
						<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />				
					</fieldset>	
				</form>
			<?php } ?>
			
		</div>	

