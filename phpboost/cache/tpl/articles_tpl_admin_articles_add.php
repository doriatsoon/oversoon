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
			if(document.getElementById('idcat').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_CAT'])) echo $this->_var['L_REQUIRE_CAT']; ?>");
				return false;
		    }
			if(document.getElementById('contents').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_TEXT'])) echo $this->_var['L_REQUIRE_TEXT']; ?>");
				return false;
		    }
			return true;
		}
		function change_icon(img_path)
		{
			document.getElementById('icon_img').innerHTML = '<img src="' + img_path + '" alt="" class="valign_middle" />';
		}
		function bbcode_page()
		{
			var page = prompt("<?php if (isset($this->_var['L_PAGE_PROMPT'])) echo $this->_var['L_PAGE_PROMPT']; ?>");
			if( page != null && page != '' )
				insertbbcode('[page]' + page, '[/page]', 'contents');
		}
		-->
		</script>

		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_ARTICLES_MANAGEMENT'])) echo $this->_var['L_ARTICLES_MANAGEMENT']; ?></li>
				<li>
					<a href="admin_articles.php"><img src="articles.png" alt="" /></a>
					<br />
					<a href="admin_articles.php" class="quick_link"><?php if (isset($this->_var['L_ARTICLES_MANAGEMENT'])) echo $this->_var['L_ARTICLES_MANAGEMENT']; ?></a>
				</li>
				<li>
					<a href="admin_articles_add.php"><img src="articles.png" alt="" /></a>
					<br />
					<a href="admin_articles_add.php" class="quick_link"><?php if (isset($this->_var['L_ARTICLES_ADD'])) echo $this->_var['L_ARTICLES_ADD']; ?></a>
				</li>
				<li>
					<a href="admin_articles_cat.php"><img src="articles.png" alt="" /></a>
					<br />
					<a href="admin_articles_cat.php" class="quick_link"><?php if (isset($this->_var['L_ARTICLES_CAT'])) echo $this->_var['L_ARTICLES_CAT']; ?></a>
				</li>
				<li>
					<a href="admin_articles_cat_add.php"><img src="articles.png" alt="" /></a>
					<br />
					<a href="admin_articles_cat_add.php" class="quick_link"><?php if (isset($this->_var['L_ARTICLES_CAT_ADD'])) echo $this->_var['L_ARTICLES_CAT_ADD']; ?></a>
				</li>
				<li>
					<a href="admin_articles_config.php"><img src="articles.png" alt="" /></a>
					<br />
					<a href="admin_articles_config.php" class="quick_link"><?php if (isset($this->_var['L_ARTICLES_CONFIG'])) echo $this->_var['L_ARTICLES_CONFIG']; ?></a>
				</li>
			</ul>
		</div>
		
		<div id="admin_contents">
			<?php if (isset($this->_var['C_ARTICLES_PREVIEW']) && $this->_var['C_ARTICLES_PREVIEW']) { ?>
			<table class="module_table">
				<tr> 
					<th colspan="2">
						<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>
					</th>
				</tr>
				<tr> 
					<td>
						<br />
						<div class="module_position">					
							<div class="module_top_l"></div>		
							<div class="module_top_r"></div>
							<div class="module_top">
								<div style="float:left">
									<?php if (isset($this->_var['TITLE_PRW'])) echo $this->_var['TITLE_PRW']; ?>
								</div>
								<div style="float:right">
									<?php if (isset($this->_var['L_COM'])) echo $this->_var['L_COM']; ?> (0)
								</div>
							</div>
							<div class="module_contents">
								<?php if (isset($this->_var['CONTENTS_PRW'])) echo $this->_var['CONTENTS_PRW']; ?>
							</div>
							<div class="module_bottom_l"></div>		
							<div class="module_bottom_r"></div>
							<div class="module_bottom">
								<div style="float:left" class="text_small">
									&nbsp;
								</div>
								<div style="float:right" class="text_small">
									<?php if (isset($this->_var['L_WRITTEN_BY'])) echo $this->_var['L_WRITTEN_BY']; ?>: <?php if (isset($this->_var['PSEUDO_PRW'])) echo $this->_var['PSEUDO_PRW']; ?>, <?php if (isset($this->_var['L_ON'])) echo $this->_var['L_ON']; ?>: <?php if (isset($this->_var['DATE_PRW'])) echo $this->_var['DATE_PRW']; ?>
								</div>
							</div>
						</div>
						<br />
					</td>
				</tr>
			</table>	

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
				
			<form action="admin_articles_add.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" style="margin:auto;" onsubmit="return check_form();" class="fieldset_content">
				<fieldset>
					<legend><?php if (isset($this->_var['L_ARTICLES_ADD'])) echo $this->_var['L_ARTICLES_ADD']; ?></legend>
					<p><?php if (isset($this->_var['L_REQUIRE'])) echo $this->_var['L_REQUIRE']; ?></p>
					<dl>
						<dt><label for="title">* <?php if (isset($this->_var['L_TITLE'])) echo $this->_var['L_TITLE']; ?></label></dt>
						<dd><label><input type="text" size="65" maxlength="100" id="title" name="title" value="<?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?>" class="text" /></label></dd>
					</dl>
					<dl>
						<dt><label for="idcat">* <?php if (isset($this->_var['L_CATEGORY'])) echo $this->_var['L_CATEGORY']; ?></label></dt>
						<dd><label>
						<select id="idcat" name="idcat">				
								<?php if (isset($this->_var['CATEGORIES'])) echo $this->_var['CATEGORIES']; ?>		
							</select>
						</label></dd>
					</dl>
					<dl>
						<dt><label for="icon"><?php if (isset($this->_var['L_ARTICLE_ICON'])) echo $this->_var['L_ARTICLE_ICON']; ?></label></dt>
						<dd>
							<select name="icon" onchange="change_icon(this.options[this.selectedIndex].value)" onclick="change_icon(this.options[this.selectedIndex].value)">
								<?php if (isset($this->_var['IMG_LIST'])) echo $this->_var['IMG_LIST']; ?>
							</select>
							<span id="icon_img"><?php if (isset($this->_var['IMG_ICON'])) echo $this->_var['IMG_ICON']; ?></span>
							<br />
							<span class="text_small"><?php if (isset($this->_var['L_OR_DIRECT_PATH'])) echo $this->_var['L_OR_DIRECT_PATH']; ?></span> <input type="text" class="text" name="icon_path" value="<?php if (isset($this->_var['IMG_PATH'])) echo $this->_var['IMG_PATH']; ?>" onblur="if(this.value != '')change_icon(this.value)" />
						</dd>
					</dl>
					<br />
					<label for="contents">* <?php if (isset($this->_var['L_TEXT'])) echo $this->_var['L_TEXT']; ?></label>
					<label>
						<?php if (isset($this->_var['KERNEL_EDITOR'])) echo $this->_var['KERNEL_EDITOR']; ?>
						<textarea rows="30" cols="90" id="contents" name="contents"><?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?></textarea> 
						<p class="text_center" style="margin-top:8px;">
							<a href="javascript:bbcode_page();"><img src="../articles/articles.png" alt="<?php if (isset($this->_var['L_EXPLAIN_PAGE'])) echo $this->_var['L_EXPLAIN_PAGE']; ?>" title="<?php if (isset($this->_var['L_EXPLAIN_PAGE'])) echo $this->_var['L_EXPLAIN_PAGE']; ?>" /></a>
						</p>
						<p class="text_center" style="margin-top:-15px;">
							<a href="javascript:bbcode_page();"><?php if (isset($this->_var['L_EXPLAIN_PAGE'])) echo $this->_var['L_EXPLAIN_PAGE']; ?></a>
						</p>
					</label>
					<br /><br />
					<dl class="overflow_visible">
						<dt><label for="release_date">* <?php if (isset($this->_var['L_RELEASE_DATE'])) echo $this->_var['L_RELEASE_DATE']; ?></label></dt>
						<dd>
							<div onclick="document.getElementById('start_end_date').checked = true;">
								<label><input type="radio" value="2" name="visible" id="start_end_date" <?php if (isset($this->_var['VISIBLE_WAITING'])) echo $this->_var['VISIBLE_WAITING']; ?> /></label> 
								<input type="text" size="8" maxlength="8" id="start" name="start" value="<?php if (isset($this->_var['START'])) echo $this->_var['START']; ?>" class="text" />
								<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar1">
									<div id="start_date" class="calendar_block" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);">							
									</div>
								</div>
								<a onclick="xmlhttprequest_calendar('start_date', '?input_field=start&amp;field=start_date&amp;d=<?php if (isset($this->_var['DAY_RELEASE_S'])) echo $this->_var['DAY_RELEASE_S']; ?>&amp;m=<?php if (isset($this->_var['MONTH_RELEASE_S'])) echo $this->_var['MONTH_RELEASE_S']; ?>&amp;y=<?php if (isset($this->_var['YEAR_RELEASE_S'])) echo $this->_var['YEAR_RELEASE_S']; ?>');display_calendar(1);" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgstart_date" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>

								<?php if (isset($this->_var['L_UNTIL'])) echo $this->_var['L_UNTIL']; ?>&nbsp;
								
								<input type="text" size="8" maxlength="8" id="end" name="end" value="<?php if (isset($this->_var['END'])) echo $this->_var['END']; ?>" class="text" /> 
								<div style="position:relative;z-index:100;top:6px;margin-left:155px;float:left;display:none;" id="calendar2">
									<div id="end_date" class="calendar_block" onmouseover="hide_calendar(2, 1);" onmouseout="hide_calendar(2, 0);">							
									</div>
								</div>
								<a onclick="xmlhttprequest_calendar('end_date', '?input_field=end&amp;field=end_date&amp;d=<?php if (isset($this->_var['DAY_RELEASE_S'])) echo $this->_var['DAY_RELEASE_S']; ?>&amp;m=<?php if (isset($this->_var['MONTH_RELEASE_S'])) echo $this->_var['MONTH_RELEASE_S']; ?>&amp;y=<?php if (isset($this->_var['YEAR_RELEASE_S'])) echo $this->_var['YEAR_RELEASE_S']; ?>');display_calendar(2);" onmouseover="hide_calendar(2, 1);" onmouseout="hide_calendar(2, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgend_date" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
							
							</div>
							<label><input type="radio" value="1" name="visible" id="release_date" <?php if (isset($this->_var['VISIBLE_ENABLED'])) echo $this->_var['VISIBLE_ENABLED']; ?> /> <?php if (isset($this->_var['L_IMMEDIATE'])) echo $this->_var['L_IMMEDIATE']; ?></label>
							<br />
							<label><input type="radio" value="0" name="visible" <?php if (isset($this->_var['VISIBLE_UNAPROB'])) echo $this->_var['VISIBLE_UNAPROB']; ?> /> <?php if (isset($this->_var['L_UNAPROB'])) echo $this->_var['L_UNAPROB']; ?></label>
						</dd>
					</dl>
					<dl class="overflow_visible">
						<dt><label for="current_date">* <?php if (isset($this->_var['L_ARTICLES_DATE'])) echo $this->_var['L_ARTICLES_DATE']; ?></label></dt>
						<dd>
							<label>
								<input type="text" size="8" maxlength="8" id="current_date" name="current_date" value="<?php if (isset($this->_var['CURRENT_DATE'])) echo $this->_var['CURRENT_DATE']; ?>" class="text" /> 
								<div style="position:relative;z-index:100;top:6px;float:left;display:none;" id="calendar3">
									<div id="current" class="calendar_block" onmouseover="hide_calendar(3, 1);" onmouseout="hide_calendar(3, 0);">							
									</div>
								</div>
								<a onclick="xmlhttprequest_calendar('current', '?input_field=current_date&amp;field=current&amp;d=<?php if (isset($this->_var['DAY_RELEASE_S'])) echo $this->_var['DAY_RELEASE_S']; ?>&amp;m=<?php if (isset($this->_var['MONTH_RELEASE_S'])) echo $this->_var['MONTH_RELEASE_S']; ?>&amp;y=<?php if (isset($this->_var['YEAR_RELEASE_S'])) echo $this->_var['YEAR_RELEASE_S']; ?>');display_calendar(3);" onmouseover="hide_calendar(3, 1);" onmouseout="hide_calendar(3, 0);" style="cursor:pointer;"><img class="valign_middle" id="imgcurrent" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
								
								<?php if (isset($this->_var['L_AT'])) echo $this->_var['L_AT']; ?>
								<input type="text" size="2" maxlength="2" name="hour" value="<?php if (isset($this->_var['HOUR'])) echo $this->_var['HOUR']; ?>" class="text" /> H <input type="text" size="2" maxlength="2" name="min" value="<?php if (isset($this->_var['MIN'])) echo $this->_var['MIN']; ?>" class="text" />
							</label>
						</dd>
					</dl>
				</fieldset>			
				
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
					<input type="submit" name="valid" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
					&nbsp;&nbsp; 
					<input type="submit" name="previs" value="<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>" class="submit" />
					&nbsp;&nbsp; 
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />				
				</fieldset>	
			</form>
		</div>