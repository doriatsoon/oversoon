		<?php if (isset($this->_var['C_DOWNLOAD_CAT']) && $this->_var['C_DOWNLOAD_CAT']) { ?>
		<div class="module_position">			
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/syndication.php?m=download&amp;cat=<?php if (isset($this->_var['IDCAT'])) echo $this->_var['IDCAT']; ?>" title="Rss"><img style="vertical-align:middle;margin-top:-2px;" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/rss.png" alt="Rss" title="Rss" /></a>  <?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE'];echo ' ';if (isset($this->_var['C_ADMIN']) && $this->_var['C_ADMIN']) { ?>
				<a href="<?php if (isset($this->_var['U_ADMIN_CAT'])) echo $this->_var['U_ADMIN_CAT']; ?>">
					<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" />
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
								<?php if (isset($_tmpb_list_cats['C_CAT_IMG']) && $_tmpb_list_cats['C_CAT_IMG']) { ?>
									<a href="<?php if (isset($_tmpb_list_cats['U_CAT'])) echo $_tmpb_list_cats['U_CAT']; ?>" title="<?php if (isset($_tmpb_list_cats['IMG_NAME'])) echo $_tmpb_list_cats['IMG_NAME']; ?>"><img src="<?php if (isset($_tmpb_list_cats['SRC'])) echo $_tmpb_list_cats['SRC']; ?>" alt="<?php if (isset($_tmpb_list_cats['IMG_NAME'])) echo $_tmpb_list_cats['IMG_NAME']; ?>" /></a>
									<br />
								<?php } ?>
								<a href="<?php if (isset($_tmpb_list_cats['U_CAT'])) echo $_tmpb_list_cats['U_CAT']; ?>"><?php if (isset($_tmpb_list_cats['NAME'])) echo $_tmpb_list_cats['NAME']; ?></a>
								
								<?php if (isset($this->_var['C_ADMIN']) && $this->_var['C_ADMIN']) { ?>
								<a href="<?php if (isset($_tmpb_list_cats['U_ADMIN_CAT'])) echo $_tmpb_list_cats['U_ADMIN_CAT']; ?>">
									<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" />
								</a>
								<?php } ?>
								<div class="text_small">
									<?php if (isset($_tmpb_list_cats['NUM_FILES'])) echo $_tmpb_list_cats['NUM_FILES']; ?>
								</div>
							</div>
						<?php } ?>
						<div class="spacer">&nbsp;</div>
					<?php } ?>
					<hr style="margin-bottom:25px;" />
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
							<option value="size"<?php if (isset($this->_var['SELECTED_SIZE'])) echo $this->_var['SELECTED_SIZE']; ?>><?php if (isset($this->_var['L_SIZE'])) echo $this->_var['L_SIZE']; ?></option>
							<option value="date"<?php if (isset($this->_var['SELECTED_DATE'])) echo $this->_var['SELECTED_DATE']; ?>><?php if (isset($this->_var['L_DATE'])) echo $this->_var['L_DATE']; ?></option>
							<option value="hits"<?php if (isset($this->_var['SELECTED_HITS'])) echo $this->_var['SELECTED_HITS']; ?>><?php if (isset($this->_var['L_POPULARITY'])) echo $this->_var['L_POPULARITY']; ?></option>
							<option value="note"<?php if (isset($this->_var['SELECTED_NOTE'])) echo $this->_var['SELECTED_NOTE']; ?>><?php if (isset($this->_var['L_NOTE'])) echo $this->_var['L_NOTE']; ?></option>
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
						<div class="block_container" style="margin-bottom:20px;">
							<div class="block_contents">
								<?php if (isset($_tmpb_file['C_IMG']) && $_tmpb_file['C_IMG']) { ?>
									<div class="float_right">
										<a href="<?php if (isset($_tmpb_file['U_DOWNLOAD_LINK'])) echo $_tmpb_file['U_DOWNLOAD_LINK']; ?>">
											<img src="<?php if (isset($_tmpb_file['IMG'])) echo $_tmpb_file['IMG']; ?>" alt="<?php if (isset($_tmpb_file['IMG_NAME'])) echo $_tmpb_file['IMG_NAME']; ?>" />
										</a>
									</div>
								<?php } ?>
								<p style="margin-bottom:10px">
									<a href="<?php if (isset($_tmpb_file['U_DOWNLOAD_LINK'])) echo $_tmpb_file['U_DOWNLOAD_LINK']; ?>" class="big_link"><?php if (isset($_tmpb_file['NAME'])) echo $_tmpb_file['NAME']; ?></a>
									<?php if (isset($this->_var['C_ADMIN']) && $this->_var['C_ADMIN']) { ?>
										<a href="<?php if (isset($_tmpb_file['U_ADMIN_EDIT_FILE'])) echo $_tmpb_file['U_ADMIN_EDIT_FILE']; ?>">
											<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" />
										</a>
										<a href="<?php if (isset($_tmpb_file['U_ADMIN_DELETE_FILE'])) echo $_tmpb_file['U_ADMIN_DELETE_FILE']; ?>" onclick="return confirm('<?php if (isset($this->_var['L_CONFIRM_DELETE_FILE'])) echo $this->_var['L_CONFIRM_DELETE_FILE']; ?>');">
											<img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="" />
										</a>
									<?php } ?>
								</p>
								<?php if (isset($_tmpb_file['C_DESCRIPTION']) && $_tmpb_file['C_DESCRIPTION']) { ?>
									<p>
									<?php if (isset($_tmpb_file['DESCRIPTION'])) echo $_tmpb_file['DESCRIPTION']; ?>
									</p>
								<?php } ?>
								<div class="text_small">
									<?php if (isset($_tmpb_file['DATE'])) echo $_tmpb_file['DATE']; ?>
									<br />
									<?php if (isset($_tmpb_file['COUNT_DL'])) echo $_tmpb_file['COUNT_DL']; ?>
									<br />
									<?php if (isset($_tmpb_file['U_COM_LINK'])) echo $_tmpb_file['U_COM_LINK']; ?>
									<br />
									<?php if (isset($this->_var['L_NOTE'])) echo $this->_var['L_NOTE'];echo ' ';if (isset($_tmpb_file['NOTE'])) echo $_tmpb_file['NOTE']; ?>
								</div>
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
		<?php }echo ' ';if (isset($this->_var['C_DISPLAY_DOWNLOAD']) && $this->_var['C_DISPLAY_DOWNLOAD']) { ?>			
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">
				<div style="float:left">
					<?php if (isset($this->_var['NAME'])) echo $this->_var['NAME']; ?>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['U_COM'])) echo $this->_var['U_COM'];echo ' ';if (isset($this->_var['C_EDIT_AUTH']) && $this->_var['C_EDIT_AUTH']) { ?>
						<a href="<?php if (isset($this->_var['U_EDIT_FILE'])) echo $this->_var['U_EDIT_FILE']; ?>">
							<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" class="valign_middle" alt="<?php if (isset($this->_var['L_EDIT_FILE'])) echo $this->_var['L_EDIT_FILE']; ?>" />
						</a>
						<a href="<?php if (isset($this->_var['U_DELETE_FILE'])) echo $this->_var['U_DELETE_FILE']; ?>" onclick="return confirm('<?php if (isset($this->_var['L_CONFIRM_DELETE_FILE'])) echo $this->_var['L_CONFIRM_DELETE_FILE']; ?>');">
							<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" class="valign_middle" alt="<?php if (isset($this->_var['L_DELETE_FILE'])) echo $this->_var['L_DELETE_FILE']; ?>" />
						</a>
					<?php } ?>
				</div>
			</div>
			<div class="module_contents">
				<table>
					<tr>
						<td style="text-align:center;padding-right:20px;">
							<?php if (isset($this->_var['C_IMG']) && $this->_var['C_IMG']) { ?>
								<img src="<?php if (isset($this->_var['U_IMG'])) echo $this->_var['U_IMG']; ?>" alt="<?php if (isset($this->_var['IMAGE_ALT'])) echo $this->_var['IMAGE_ALT']; ?>" />
								<br /><br />
							<?php } ?>
							<a href="<?php if (isset($this->_var['U_DOWNLOAD_FILE'])) echo $this->_var['U_DOWNLOAD_FILE']; ?>">
								<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/download_file.png" alt="" />
							</a>
							<p><a href="<?php if (isset($this->_var['U_DOWNLOAD_FILE'])) echo $this->_var['U_DOWNLOAD_FILE']; ?>"><?php if (isset($this->_var['L_DOWNLOAD_FILE'])) echo $this->_var['L_DOWNLOAD_FILE']; ?></a></p>
						</td>
						<td>
							<p class="text_justify">
								<?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?>
							</p>
						</td>
					</tr>
				</table>
				<br />
				<table style="width:430px;margin-right:0;" class="module_table text_small">
					<tr>
						<th colspan="2">
							<?php if (isset($this->_var['L_FILE_INFOS'])) echo $this->_var['L_FILE_INFOS']; ?>
						</th>
					</tr>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_SIZE'])) echo $this->_var['L_SIZE']; ?>
						</td>
						<td class="row2" style="padding:3px">
							<?php if (isset($this->_var['SIZE'])) echo $this->_var['SIZE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_INSERTION_DATE'])) echo $this->_var['L_INSERTION_DATE']; ?>
						</td>
						<td class="row2" style="padding:3px">
							<?php if (isset($this->_var['CREATION_DATE'])) echo $this->_var['CREATION_DATE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_RELEASE_DATE'])) echo $this->_var['L_RELEASE_DATE']; ?>
						</td>
						<td class="row2" style="padding:3px">
							<?php if (isset($this->_var['RELEASE_DATE'])) echo $this->_var['RELEASE_DATE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_DOWNLOADED'])) echo $this->_var['L_DOWNLOADED']; ?>
						</td>
						<td class="row2" style="padding:3px">
							<?php if (isset($this->_var['HITS'])) echo $this->_var['HITS']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1" style="padding:3px">
							<?php if (isset($this->_var['L_NOTE'])) echo $this->_var['L_NOTE']; ?> <em><span id="nbrnote<?php if (isset($this->_var['ID_FILE'])) echo $this->_var['ID_FILE']; ?>">(<?php if (isset($this->_var['NUM_NOTES'])) echo $this->_var['NUM_NOTES']; ?>)</span></em>
						</td>
						<td class="row2" style="padding:1px">
							<?php if (isset($this->_var['KERNEL_NOTATION'])) echo $this->_var['KERNEL_NOTATION']; ?>
						</td>
					</tr>
				</table>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom">
			</div>
		</div>		
		<br /><br />
		<?php if (isset($this->_var['COMMENTS'])) echo $this->_var['COMMENTS'];echo ' ';} ?>
		