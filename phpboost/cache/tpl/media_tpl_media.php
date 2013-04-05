		<?php if (isset($this->_var['C_CATEGORIES']) && $this->_var['C_CATEGORIES']) { ?>
		<div class="module_position">
			<div class="module_top_l"></div>
			<div class="module_top_r"></div>
			<div class="module_top">
				<a href="../syndication.php?m=media" title="Syndication"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Syndication" title="Syndication" /></a>
				<?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE'];echo ' ';if (isset($this->_var['C_ADMIN']) && $this->_var['C_ADMIN']) { ?>
				<a href="<?php if (isset($this->_var['U_ADMIN_CAT'])) echo $this->_var['U_ADMIN_CAT']; ?>">
					<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="">
				</a>
				<?php }echo ' ';if (isset($this->_var['C_MODO']) && $this->_var['C_MODO']) { ?>
				<a href="moderation_media.php">
					<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/moderation_panel.png" style="width:16px;height:16px;" alt="">
				</a>
				<?php } ?>
			</div>
			<div class="module_contents">
				<?php if (isset($this->_var['C_ADD_FILE']) && $this->_var['C_ADD_FILE']) { ?>
					<div style="text-align:center;">
						<a href="<?php if (isset($this->_var['U_ADD_FILE'])) echo $this->_var['U_ADD_FILE']; ?>" title="<?php if (isset($this->_var['L_ADD_FILE'])) echo $this->_var['L_ADD_FILE']; ?>">
							<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/french/add.png" alt="<?php if (isset($this->_var['L_ADD_FILE'])) echo $this->_var['L_ADD_FILE']; ?>" />
						</a>
					</div>
					<hr style="margin-top:25px; margin-bottom:25px;" />
				<?php }echo ' ';if (isset($this->_var['C_DESCRIPTION']) && $this->_var['C_DESCRIPTION']) {echo ' ';if (isset($this->_var['DESCRIPTION'])) echo $this->_var['DESCRIPTION']; ?>
					<hr style="margin-top:25px;" />
				<?php }echo ' ';if (isset($this->_var['C_SUB_CATS']) && $this->_var['C_SUB_CATS']) {echo ' ';if (!isset($this->_block['row']) || !is_array($this->_block['row'])) $this->_block['row'] = array();
foreach ($this->_block['row'] as $row_key => $row_value) {
$_tmpb_row = &$this->_block['row'][$row_key];echo ' ';if (!isset($_tmpb_row['list_cats']) || !is_array($_tmpb_row['list_cats'])) $_tmpb_row['list_cats'] = array();
foreach ($_tmpb_row['list_cats'] as $list_cats_key => $list_cats_value) {
$_tmpb_list_cats = &$_tmpb_row['list_cats'][$list_cats_key]; ?>
							<div style="float:left;width:<?php if (isset($_tmpb_list_cats['WIDTH'])) echo $_tmpb_list_cats['WIDTH']; ?>%;text-align:center;margin:20px 0px;">
								<a href="<?php if (isset($_tmpb_list_cats['U_CAT'])) echo $_tmpb_list_cats['U_CAT']; ?>" title="<?php if (isset($_tmpb_list_cats['IMG_NAME'])) echo $_tmpb_list_cats['IMG_NAME']; ?>">
									<img src="<?php if (isset($_tmpb_list_cats['SRC'])) echo $_tmpb_list_cats['SRC']; ?>" alt="<?php if (isset($_tmpb_list_cats['IMG_NAME'])) echo $_tmpb_list_cats['IMG_NAME']; ?>" />
								</a>
								<br />
								<a href="<?php if (isset($_tmpb_list_cats['U_CAT'])) echo $_tmpb_list_cats['U_CAT']; ?>"><?php if (isset($_tmpb_list_cats['NAME'])) echo $_tmpb_list_cats['NAME']; ?></a>
								<?php if (isset($this->_var['C_ADMIN']) && $this->_var['C_ADMIN']) { ?>
								<a href="<?php if (isset($_tmpb_list_cats['U_ADMIN_CAT'])) echo $_tmpb_list_cats['U_ADMIN_CAT']; ?>">
									<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="">
								</a>
								<?php }echo ' ';if (isset($_tmpb_list_cats['NUM_MEDIA']) && $_tmpb_list_cats['NUM_MEDIA']) { ?>
								<div class="text_small">
									<?php if (isset($_tmpb_list_cats['NUM_MEDIA'])) echo $_tmpb_list_cats['NUM_MEDIA']; ?>
								</div>
								<?php } ?>
							</div>
						<?php } ?>
						<div class="spacer">&nbsp;</div>
					<?php } ?>
					<hr />
				<?php }echo ' ';if (isset($this->_var['C_FILES']) && $this->_var['C_FILES']) { ?>
					<div style="float:right;" class="row3" id="form">
						<script type="text/javascript">
						<!--
						function change_order()
						{
							window.location = "<?php if (isset($this->_var['TARGET_ON_CHANGE_ORDER'])) echo $this->_var['TARGET_ON_CHANGE_ORDER']; ?>sort=" + document.getElementById("sort").value + "&mode=" + document.getElementById("mode").value;
						}
						-->
						</script>
						<?php if (isset($this->_var['L_ORDER_BY'])) echo $this->_var['L_ORDER_BY']; ?>
						<select name="sort" id="sort" class="nav" onchange="change_order()">
							<option value="alpha"<?php if (isset($this->_var['SELECTED_ALPHA'])) echo $this->_var['SELECTED_ALPHA']; ?>><?php if (isset($this->_var['L_ALPHA'])) echo $this->_var['L_ALPHA']; ?></option>
							<option value="date"<?php if (isset($this->_var['SELECTED_DATE'])) echo $this->_var['SELECTED_DATE']; ?>><?php if (isset($this->_var['L_DATE'])) echo $this->_var['L_DATE']; ?></option>
							<option value="nbr"<?php if (isset($this->_var['SELECTED_NBR'])) echo $this->_var['SELECTED_NBR']; ?>><?php if (isset($this->_var['L_NBR'])) echo $this->_var['L_NBR']; ?></option>
							<option value="note"<?php if (isset($this->_var['SELECTED_NOTE'])) echo $this->_var['SELECTED_NOTE']; ?>><?php if (isset($this->_var['L_NOTE'])) echo $this->_var['L_NOTE']; ?></option>
							<option value="com"<?php if (isset($this->_var['SELECTED_COM'])) echo $this->_var['SELECTED_COM']; ?>><?php if (isset($this->_var['L_COM'])) echo $this->_var['L_COM']; ?></option>
						</select>
						<select name="mode" id="mode" class="nav" onchange="change_order()">
							<option value="asc"<?php if (isset($this->_var['SELECTED_ASC'])) echo $this->_var['SELECTED_ASC']; ?>><?php if (isset($this->_var['L_ASC'])) echo $this->_var['L_ASC']; ?></option>
							<option value="desc"<?php if (isset($this->_var['SELECTED_DESC'])) echo $this->_var['SELECTED_DESC']; ?>><?php if (isset($this->_var['L_DESC'])) echo $this->_var['L_DESC']; ?></option>
						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<?php if (!isset($this->_block['file']) || !is_array($this->_block['file'])) $this->_block['file'] = array();
foreach ($this->_block['file'] as $file_key => $file_value) {
$_tmpb_file = &$this->_block['file'][$file_key]; ?>
						<div class="block_container">
							<div class="block_contents">
								<div>
									<?php if (isset($this->_var['C_MODO']) && $this->_var['C_MODO']) { ?>
									<div style="float:right;">
										<a href="<?php if (isset($_tmpb_file['U_ADMIN_UNVISIBLE_MEDIA'])) echo $_tmpb_file['U_ADMIN_UNVISIBLE_MEDIA']; ?>">
											<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/visible.png" alt="">
										</a>
										<a href="<?php if (isset($_tmpb_file['U_ADMIN_EDIT_MEDIA'])) echo $_tmpb_file['U_ADMIN_EDIT_MEDIA']; ?>">
											<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="">
										</a>
										<a href="<?php if (isset($_tmpb_file['U_ADMIN_DELETE_MEDIA'])) echo $_tmpb_file['U_ADMIN_DELETE_MEDIA']; ?>" onclick="return confirm('<?php if (isset($this->_var['L_CONFIRM_DELETE_FILE'])) echo $this->_var['L_CONFIRM_DELETE_FILE']; ?>');">
											<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="">
										</a>
									</div>
									<?php } ?>
										<a href="<?php if (isset($_tmpb_file['U_MEDIA_LINK'])) echo $_tmpb_file['U_MEDIA_LINK']; ?>" class="big_link"><?php if (isset($_tmpb_file['NAME'])) echo $_tmpb_file['NAME']; ?></a>
								</div>
								<?php if (isset($this->_var['A_DESC']) && $this->_var['A_DESC']) {echo ' ';if (isset($_tmpb_file['C_DESCRIPTION']) && $_tmpb_file['C_DESCRIPTION']) { ?>
									<p style="margin-top:10px">
									<?php if (isset($_tmpb_file['DESCRIPTION'])) echo $_tmpb_file['DESCRIPTION']; ?>
									<br />
									</p>
								<?php }echo ' ';} else { ?>
									<br />
								<?php }echo ' ';if (isset($this->_var['A_BLOCK']) && $this->_var['A_BLOCK']) { ?>
								<div class="text_small">
									<?php if (isset($this->_var['A_DATE']) && $this->_var['A_DATE']) {echo ' ';if (isset($_tmpb_file['DATE'])) echo $_tmpb_file['DATE']; ?>
									<br />
									<?php }echo ' ';if (isset($this->_var['A_USER']) && $this->_var['A_USER']) {echo ' ';if (isset($_tmpb_file['POSTER'])) echo $_tmpb_file['POSTER']; ?>
									<br />
									<?php }echo ' ';if (isset($this->_var['A_COUNTER']) && $this->_var['A_COUNTER']) {echo ' ';if (isset($_tmpb_file['COUNT'])) echo $_tmpb_file['COUNT']; ?>
									<br />
									<?php }echo ' ';if (isset($this->_var['A_COM']) && $this->_var['A_COM']) {echo ' ';if (isset($_tmpb_file['U_COM_LINK'])) echo $_tmpb_file['U_COM_LINK']; ?>
									<br />
									<?php }echo ' ';if (isset($this->_var['A_NOTE']) && $this->_var['A_NOTE']) {echo ' ';if (isset($this->_var['L_NOTE'])) echo $this->_var['L_NOTE'];echo ' ';if (isset($_tmpb_file['NOTE'])) echo $_tmpb_file['NOTE'];echo ' ';} ?>
								</div>
								<?php } ?>
								<div class="spacer"></div>
							</div>
						</div>
					<?php } ?>
					<div style="text-align:center;"><?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?></div>
				<?php }echo ' ';if (isset($this->_var['C_NO_FILE']) && $this->_var['C_NO_FILE']) { ?>
					<div class="notice">
						<?php if (isset($this->_var['L_NO_FILE_THIS_CATEGORY'])) echo $this->_var['L_NO_FILE_THIS_CATEGORY']; ?>
					</div>
				<?php } ?>
				<div class="spacer"></div>
			</div>
			<div class="module_bottom_l"></div>
			<div class="module_bottom_r"></div>
			<div class="module_bottom"></div>
		</div>
		<?php }echo ' ';if (isset($this->_var['C_DISPLAY_MEDIA']) && $this->_var['C_DISPLAY_MEDIA']) { ?>
		<div class="module_position">
			<div class="module_top_l"></div>
			<div class="module_top_r"></div>
			<div class="module_top">
				<div style="float:left">
					<?php if (isset($this->_var['NAME'])) echo $this->_var['NAME'];echo ' ';if (isset($this->_var['C_MODO']) && $this->_var['C_MODO']) { ?>
					<a href="moderation_media.php">
						<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/moderation_panel.png" style="width:16px;height:16px;" alt="">
					</a>
					<?php } ?>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['A_COM']) && $this->_var['A_COM']) {if (isset($this->_var['U_COM'])) echo $this->_var['U_COM'];}echo ' ';if (isset($this->_var['C_MODO']) && $this->_var['C_MODO']) { ?>
						<a href="<?php if (isset($this->_var['U_UNVISIBLE_MEDIA'])) echo $this->_var['U_UNVISIBLE_MEDIA']; ?>">
							<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/visible.png" alt="">
						</a>
						<a href="<?php if (isset($this->_var['U_EDIT_MEDIA'])) echo $this->_var['U_EDIT_MEDIA']; ?>">
							<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" class="valign_middle" alt="" />
						</a>
						<a href="<?php if (isset($this->_var['U_DELETE_MEDIA'])) echo $this->_var['U_DELETE_MEDIA']; ?>" onclick="return confirm('<?php if (isset($this->_var['L_CONFIRM_DELETE_FILE'])) echo $this->_var['L_CONFIRM_DELETE_FILE']; ?>');">
							<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" class="valign_middle" alt="" />
						</a>
					<?php } ?>
				</div>
			</div>
			<div class="module_contents">
				<?php if (isset($this->_var['A_DESC']) && $this->_var['A_DESC']) { ?>
				<p class="text_justify" style="margin-top:15px">
					<?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?>
				</p>
				<?php } ?>
				<p class="text_center" style="margin-top:25px;margin-bottom:25px;">
					<?php $this->_include('media_format'); ?>
				</p>
				<?php if (isset($this->_var['C_DISPLAY']) && $this->_var['C_DISPLAY']) { ?>
				<table style="width:430px;float:right;margin-top:40px;" class="module_table text_small">
					<tr>
						<th colspan="2">
							<?php if (isset($this->_var['L_MEDIA_INFOS'])) echo $this->_var['L_MEDIA_INFOS']; ?>
						</th>
					</tr>
					<?php if (isset($this->_var['A_DATE']) && $this->_var['A_DATE']) { ?>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_DATE'])) echo $this->_var['L_DATE']; ?>
						</td>
						<td class="row2" style="padding:3px">
							<?php if (isset($this->_var['DATE'])) echo $this->_var['DATE']; ?>
						</td>
					</tr>
					<?php }echo ' ';if (isset($this->_var['A_USER']) && $this->_var['A_USER']) { ?>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_BY'])) echo $this->_var['L_BY']; ?>
						</td>
						<td class="row2" style="padding:3px">
							<?php if (isset($this->_var['BY'])) echo $this->_var['BY']; ?>
						</td>
					</tr>
					<?php }echo ' ';if (isset($this->_var['A_COUNTER']) && $this->_var['A_COUNTER']) { ?>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_VIEWED'])) echo $this->_var['L_VIEWED']; ?>
						</td>
						<td class="row2" style="padding:3px">
							<?php if (isset($this->_var['HITS'])) echo $this->_var['HITS']; ?>
						</td>
					</tr>
					<?php }echo ' ';if (isset($this->_var['A_NOTE']) && $this->_var['A_NOTE']) { ?>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_NOTE'])) echo $this->_var['L_NOTE']; ?> <em><span id="nbrnote<?php if (isset($this->_var['ID_MEDIA'])) echo $this->_var['ID_MEDIA']; ?>">(<?php if (isset($this->_var['NUM_NOTES'])) echo $this->_var['NUM_NOTES']; ?>)</span></em>
						</td>
						<td class="row2" style="padding:1px">
							<?php if (isset($this->_var['KERNEL_NOTATION'])) echo $this->_var['KERNEL_NOTATION']; ?>
						</td>
					</tr>
					<?php } ?>
				</table>
				<div class="spacer"></div>
				<?php } ?>
			</div>
			<div class="module_bottom_l"></div>
			<div class="module_bottom_r"></div>
			<div class="module_bottom">
			</div>
		</div>
		<br /><br />
		<?php if (isset($this->_var['COMMENTS'])) echo $this->_var['COMMENTS'];echo ' ';} ?>