	<?php if (isset($this->_var['C_CONTRIBUTION_LIST']) && $this->_var['C_CONTRIBUTION_LIST']) { ?>
	<div class="module_position">			
		<div class="module_top_l"></div>		
		<div class="module_top_r"></div>
		<div class="module_top">
			<?php if (isset($this->_var['L_CONTRIBUTION_PANEL'])) echo $this->_var['L_CONTRIBUTION_PANEL']; ?>
		</div>
		<div class="module_contents">
			<h1><?php if (isset($this->_var['L_CONTRIBUTION_LIST'])) echo $this->_var['L_CONTRIBUTION_LIST']; ?></h1>
			<br />
			<?php if (isset($this->_var['C_NO_CONTRIBUTION']) && $this->_var['C_NO_CONTRIBUTION']) { ?>
			<div class="warning"><?php if (isset($this->_var['L_NO_CONTRIBUTION_TO_DISPLAY'])) echo $this->_var['L_NO_CONTRIBUTION_TO_DISPLAY']; ?></div>
			<?php } else { ?>						
			<table class="module_table" style="width:100%;">
				<tr>
					<th>
						<?php if (isset($this->_var['C_ORDER_ENTITLED_ASC']) && !$this->_var['C_ORDER_ENTITLED_ASC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_ENTITLED_ASC'])) echo $this->_var['U_ORDER_ENTITLED_ASC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
						<?php }echo ' ';if (isset($this->_var['L_ENTITLED'])) echo $this->_var['L_ENTITLED'];echo ' ';if (isset($this->_var['C_ORDER_ENTITLED_DESC']) && !$this->_var['C_ORDER_ENTITLED_DESC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_ENTITLED_DESC'])) echo $this->_var['U_ORDER_ENTITLED_DESC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						<?php } ?>
					</th>
					<th>
						<?php if (isset($this->_var['C_ORDER_MODULE_ASC']) && !$this->_var['C_ORDER_MODULE_ASC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_MODULE_ASC'])) echo $this->_var['U_ORDER_MODULE_ASC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
						<?php }echo ' ';if (isset($this->_var['L_MODULE'])) echo $this->_var['L_MODULE'];echo ' ';if (isset($this->_var['C_ORDER_MODULE_DESC']) && !$this->_var['C_ORDER_MODULE_DESC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_MODULE_DESC'])) echo $this->_var['U_ORDER_MODULE_DESC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						<?php } ?>
					</th>
					<th>
						<?php if (isset($this->_var['C_ORDER_STATUS_ASC']) && !$this->_var['C_ORDER_STATUS_ASC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_STATUS_ASC'])) echo $this->_var['U_ORDER_STATUS_ASC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
						<?php }echo ' ';if (isset($this->_var['L_STATUS'])) echo $this->_var['L_STATUS'];echo ' ';if (isset($this->_var['C_ORDER_STATUS_DESC']) && !$this->_var['C_ORDER_STATUS_DESC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_STATUS_DESC'])) echo $this->_var['U_ORDER_STATUS_DESC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						<?php } ?>
					</th>
					<th>
						<?php if (isset($this->_var['C_ORDER_CREATION_DATE_ASC']) && !$this->_var['C_ORDER_CREATION_DATE_ASC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_CREATION_DATE_ASC'])) echo $this->_var['U_ORDER_CREATION_DATE_ASC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
						<?php }echo ' ';if (isset($this->_var['L_CREATION_DATE'])) echo $this->_var['L_CREATION_DATE'];echo ' ';if (isset($this->_var['C_ORDER_CREATION_DATE_DESC']) && !$this->_var['C_ORDER_CREATION_DATE_DESC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_CREATION_DATE_DESC'])) echo $this->_var['U_ORDER_CREATION_DATE_DESC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						<?php } ?>
					</th>
					<th>
						<?php if (isset($this->_var['C_ORDER_FIXING_DATE_ASC']) && !$this->_var['C_ORDER_FIXING_DATE_ASC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_FIXING_DATE_ASC'])) echo $this->_var['U_ORDER_FIXING_DATE_ASC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
						<?php }echo ' ';if (isset($this->_var['L_FIXING_DATE'])) echo $this->_var['L_FIXING_DATE'];echo ' ';if (isset($this->_var['C_ORDER_FIXING_DATE_DESC']) && !$this->_var['C_ORDER_FIXING_DATE_DESC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_FIXING_DATE_DESC'])) echo $this->_var['U_ORDER_FIXING_DATE_DESC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						<?php } ?>
					</th>
					<th>
						<?php if (isset($this->_var['C_ORDER_POSTER_ASC']) && !$this->_var['C_ORDER_POSTER_ASC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_POSTER_ASC'])) echo $this->_var['U_ORDER_POSTER_ASC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
						<?php }echo ' ';if (isset($this->_var['L_POSTER'])) echo $this->_var['L_POSTER'];echo ' ';if (isset($this->_var['C_ORDER_POSTER_DESC']) && !$this->_var['C_ORDER_POSTER_DESC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_POSTER_DESC'])) echo $this->_var['U_ORDER_POSTER_DESC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						<?php } ?>
					</th>
					<th>
						<?php if (isset($this->_var['C_ORDER_FIXER_ASC']) && !$this->_var['C_ORDER_FIXER_ASC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_FIXER_ASC'])) echo $this->_var['U_ORDER_FIXER_ASC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/top.png" alt="" class="valign_middle" /></a>
						<?php }echo ' ';if (isset($this->_var['L_FIXER'])) echo $this->_var['L_FIXER'];echo ' ';if (isset($this->_var['C_ORDER_FIXER_DESC']) && !$this->_var['C_ORDER_FIXER_DESC']) { ?>
							<a href="<?php if (isset($this->_var['U_ORDER_FIXER_DESC'])) echo $this->_var['U_ORDER_FIXER_DESC']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/bottom.png" alt="" class="valign_middle" /></a>
						<?php } ?>
					</th>
				</tr>
				<?php if (!isset($this->_block['contributions']) || !is_array($this->_block['contributions'])) $this->_block['contributions'] = array();
foreach ($this->_block['contributions'] as $contributions_key => $contributions_value) {
$_tmpb_contributions = &$this->_block['contributions'][$contributions_key]; ?>
				<tr>
					<td class="row2" style="text-align:center;">
						<a href="<?php if (isset($_tmpb_contributions['U_CONSULT'])) echo $_tmpb_contributions['U_CONSULT']; ?>"><?php if (isset($_tmpb_contributions['ENTITLED'])) echo $_tmpb_contributions['ENTITLED']; ?></a>
					</td>
					<td class="row2" style="text-align:center;">
						<?php if (isset($_tmpb_contributions['MODULE'])) echo $_tmpb_contributions['MODULE']; ?>
					</td>
					<?php if (isset($_tmpb_contributions['C_FIXED']) && $_tmpb_contributions['C_FIXED']) { ?>
					<td class="row2" style="text-align:center; background-color:#7FFF9C;">
						<?php if (isset($_tmpb_contributions['STATUS'])) echo $_tmpb_contributions['STATUS']; ?>
					</td>
					<?php } else {echo ' ';if (isset($_tmpb_contributions['C_PROCESSING']) && $_tmpb_contributions['C_PROCESSING']) { ?>
						<td class="row2" style="text-align:center; background-color:#FFD86F;">
							<?php if (isset($_tmpb_contributions['STATUS'])) echo $_tmpb_contributions['STATUS']; ?>
						</td>
						<?php } else { ?>
						<td class="row2" style="text-align:center; background-color:#FF796F;">
							<?php if (isset($_tmpb_contributions['STATUS'])) echo $_tmpb_contributions['STATUS']; ?>
						</td>
						<?php }echo ' ';} ?>
					<td class="row2" style="text-align:center;">
						<?php if (isset($_tmpb_contributions['CREATION_DATE'])) echo $_tmpb_contributions['CREATION_DATE']; ?>
					</td>
					<td class="row2" style="text-align:center;">
						<?php if (isset($_tmpb_contributions['C_FIXED']) && $_tmpb_contributions['C_FIXED']) {echo ' ';if (isset($_tmpb_contributions['FIXING_DATE'])) echo $_tmpb_contributions['FIXING_DATE'];echo ' ';} else { ?>
						-
						<?php } ?>
					</td>
					<td class="row2" style="text-align:center;">
						<a href="<?php if (isset($_tmpb_contributions['U_POSTER_PROFILE'])) echo $_tmpb_contributions['U_POSTER_PROFILE']; ?>"><?php if (isset($_tmpb_contributions['POSTER'])) echo $_tmpb_contributions['POSTER']; ?></a>
					</td>
					<td class="row2" style="text-align:center;">
						<?php if (isset($_tmpb_contributions['C_FIXED']) && $_tmpb_contributions['C_FIXED']) { ?>
						<a href="<?php if (isset($_tmpb_contributions['U_FIXER_PROFILE'])) echo $_tmpb_contributions['U_FIXER_PROFILE']; ?>"><?php if (isset($_tmpb_contributions['FIXER'])) echo $_tmpb_contributions['FIXER']; ?></a>
						<?php } else { ?>
						-
						<?php } ?>
					</td>
				</tr>	
				<?php } ?>
				<tr>
					<td class="row1" style="text-align:center;" colspan="7">
						<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
					</td>
				</tr>
			</table>
			<?php } ?>
			
				<hr style="margin:20px 0;" />
				
				<h1><?php if (isset($this->_var['L_CONTRIBUTE'])) echo $this->_var['L_CONTRIBUTE']; ?></h1>
				<br />
				<?php if (isset($this->_var['C_NO_MODULE_IN_WHICH_CONTRIBUTE']) && !$this->_var['C_NO_MODULE_IN_WHICH_CONTRIBUTE']) { ?>
					<p><?php if (isset($this->_var['L_CONTRIBUTE_EXPLAIN'])) echo $this->_var['L_CONTRIBUTE_EXPLAIN']; ?></p>
					
					<?php if (!isset($this->_block['row']) || !is_array($this->_block['row'])) $this->_block['row'] = array();
foreach ($this->_block['row'] as $row_key => $row_value) {
$_tmpb_row = &$this->_block['row'][$row_key];echo ' ';if (!isset($_tmpb_row['module']) || !is_array($_tmpb_row['module'])) $_tmpb_row['module'] = array();
foreach ($_tmpb_row['module'] as $module_key => $module_value) {
$_tmpb_module = &$_tmpb_row['module'][$module_key]; ?>
							<div style="float:left;width:<?php if (isset($_tmpb_module['WIDTH'])) echo $_tmpb_module['WIDTH']; ?>%;text-align:center;margin:20px 0px;">
								<a href="<?php if (isset($_tmpb_module['U_MODULE_LINK'])) echo $_tmpb_module['U_MODULE_LINK']; ?>" title="<?php if (isset($_tmpb_module['LINK_TITLE'])) echo $_tmpb_module['LINK_TITLE']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/<?php if (isset($_tmpb_module['MODULE_ID'])) echo $_tmpb_module['MODULE_ID']; ?>/<?php if (isset($_tmpb_module['MODULE_ID'])) echo $_tmpb_module['MODULE_ID']; ?>.png" alt="<?php if (isset($_tmpb_module['LINK_TITLE'])) echo $_tmpb_module['LINK_TITLE']; ?>" /></a>
								<br />							
								<a href="<?php if (isset($_tmpb_module['U_MODULE_LINK'])) echo $_tmpb_module['U_MODULE_LINK']; ?>" title="<?php if (isset($_tmpb_module['LINK_TITLE'])) echo $_tmpb_module['LINK_TITLE']; ?>"><?php if (isset($_tmpb_module['MODULE_NAME'])) echo $_tmpb_module['MODULE_NAME']; ?></a>
							</div>
						<?php } ?>
						<div class="spacer">&nbsp;</div>
					<?php }echo ' ';} else { ?>
					<div class="warning"><?php if (isset($this->_var['L_NO_MODULE_IN_WHICH_CONTRIBUTE'])) echo $this->_var['L_NO_MODULE_IN_WHICH_CONTRIBUTE']; ?></div>
				<?php } ?>
			</div>
		<div class="module_bottom_l"></div>		
		<div class="module_bottom_r"></div>
		<div class="module_bottom"></div>
	</div>
	<?php }echo ' ';if (isset($this->_var['C_CONSULT_CONTRIBUTION']) && $this->_var['C_CONSULT_CONTRIBUTION']) { ?>
	<div class="module_position">			
		<div class="module_top_l"></div>		
		<div class="module_top_r"></div>
		<div class="module_top">
			<span style="float:left;">
				<?php if (isset($this->_var['ENTITLED'])) echo $this->_var['ENTITLED']; ?>
			</span>
			<?php if (isset($this->_var['C_WRITE_AUTH']) && $this->_var['C_WRITE_AUTH']) { ?>
			<span style="float:right;">
				<a href="<?php if (isset($this->_var['U_UPDATE'])) echo $this->_var['U_UPDATE']; ?>" title="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" /></a>
				<a href="<?php if (isset($this->_var['U_DELETE'])) echo $this->_var['U_DELETE']; ?>" onclick="return confirm('<?php if (isset($this->_var['L_CONFIRM_DELETE_CONTRIBUTION'])) echo $this->_var['L_CONFIRM_DELETE_CONTRIBUTION']; ?>');" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" /></a>
			</span>
			<?php } ?>
		</div>
		<div class="module_contents">
			<?php if (isset($this->_var['C_WRITE_AUTH']) && $this->_var['C_WRITE_AUTH']) {echo ' ';if (isset($this->_var['C_UNPROCESSED_CONTRIBUTION']) && $this->_var['C_UNPROCESSED_CONTRIBUTION']) { ?>
				<div style="text-align:center;">
					<a href="<?php if (isset($this->_var['FIXING_URL'])) echo $this->_var['FIXING_URL']; ?>" title="<?php if (isset($this->_var['L_PROCESS_CONTRIBUTION'])) echo $this->_var['L_PROCESS_CONTRIBUTION']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/process-contribution.png" alt="<?php if (isset($this->_var['L_PROCESS_CONTRIBUTION'])) echo $this->_var['L_PROCESS_CONTRIBUTION']; ?>" /></a>
					<br />
					<a href="<?php if (isset($this->_var['FIXING_URL'])) echo $this->_var['FIXING_URL']; ?>" title="<?php if (isset($this->_var['L_PROCESS_CONTRIBUTION'])) echo $this->_var['L_PROCESS_CONTRIBUTION']; ?>"><?php if (isset($this->_var['L_PROCESS_CONTRIBUTION'])) echo $this->_var['L_PROCESS_CONTRIBUTION']; ?></a>
				</div>
				<?php }echo ' ';} ?>
			
			<fieldset>
				<legend><?php if (isset($this->_var['L_CONTRIBUTION'])) echo $this->_var['L_CONTRIBUTION']; ?></legend>
				<dl>
					<dt>
						<?php if (isset($this->_var['L_ENTITLED'])) echo $this->_var['L_ENTITLED']; ?>
					</dt>
					<dd>
						<?php if (isset($this->_var['ENTITLED'])) echo $this->_var['ENTITLED']; ?>
					</dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_DESCRIPTION'])) echo $this->_var['L_DESCRIPTION']; ?></dt>
					<dd><?php if (isset($this->_var['DESCRIPTION'])) echo $this->_var['DESCRIPTION']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_STATUS'])) echo $this->_var['L_STATUS']; ?></dt>
					<dd><?php if (isset($this->_var['STATUS'])) echo $this->_var['STATUS']; ?></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_CONTRIBUTOR'])) echo $this->_var['L_CONTRIBUTOR']; ?></dt>
					<dd><a href="<?php if (isset($this->_var['U_CONTRIBUTOR_PROFILE'])) echo $this->_var['U_CONTRIBUTOR_PROFILE']; ?>"><?php if (isset($this->_var['CONTRIBUTER'])) echo $this->_var['CONTRIBUTER']; ?></a></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_CREATION_DATE'])) echo $this->_var['L_CREATION_DATE']; ?></dt>
					<dd><?php if (isset($this->_var['CREATION_DATE'])) echo $this->_var['CREATION_DATE']; ?></dd>
				</dl>
				<?php if (isset($this->_var['C_CONTRIBUTION_FIXED']) && $this->_var['C_CONTRIBUTION_FIXED']) { ?>
				<dl>
					<dt><?php if (isset($this->_var['L_FIXER'])) echo $this->_var['L_FIXER']; ?></dt>
					<dd><a href="<?php if (isset($this->_var['U_FIXER_PROFILE'])) echo $this->_var['U_FIXER_PROFILE']; ?>"><?php if (isset($this->_var['FIXER'])) echo $this->_var['FIXER']; ?></a></dd>
				</dl>
				<dl>
					<dt><?php if (isset($this->_var['L_FIXING_DATE'])) echo $this->_var['L_FIXING_DATE']; ?></dt>
					<dd><?php if (isset($this->_var['FIXING_DATE'])) echo $this->_var['FIXING_DATE']; ?></dd>
				</dl>
				<?php } ?>
				<dl>
					<dt><?php if (isset($this->_var['L_MODULE'])) echo $this->_var['L_MODULE']; ?></dt>
					<dd><?php if (isset($this->_var['MODULE'])) echo $this->_var['MODULE']; ?></dd>
				</dl>
			</fieldset>
			
			<?php if (isset($this->_var['COMMENTS'])) echo $this->_var['COMMENTS']; ?>
		</div>
		<div class="module_bottom_l"></div>		
		<div class="module_bottom_r"></div>
		<div class="module_bottom"></div>
	</div>
	<?php }echo ' ';if (isset($this->_var['C_EDIT_CONTRIBUTION']) && $this->_var['C_EDIT_CONTRIBUTION']) { ?>
	<div class="module_position">			
		<div class="module_top_l"></div>		
		<div class="module_top_r"></div>
		<div class="module_top">
			<?php if (isset($this->_var['ENTITLED'])) echo $this->_var['ENTITLED']; ?>
		</div>
		<div class="module_contents">
			<form action="<?php if (isset($this->_var['U_TARGET'])) echo $this->_var['U_TARGET']; ?>" method="post">
				<fieldset>
					<legend><?php if (isset($this->_var['L_CONTRIBUTION'])) echo $this->_var['L_CONTRIBUTION']; ?></legend>
					<dl>
						<dt>
							<label for="entitled"><?php if (isset($this->_var['L_ENTITLED'])) echo $this->_var['L_ENTITLED']; ?></label>
						</dt>
						<dd>
							<input type="text" name="entitled" id="entitled" value="<?php if (isset($this->_var['ENTITLED'])) echo $this->_var['ENTITLED']; ?>" size="40" />
						</dd>
					</dl>
					<label for="contents"><?php if (isset($this->_var['L_DESCRIPTION'])) echo $this->_var['L_DESCRIPTION']; ?></label>
					<?php if (isset($this->_var['EDITOR'])) echo $this->_var['EDITOR']; ?>
					<textarea rows="15" cols="66" id="contents" name="contents"><?php if (isset($this->_var['DESCRIPTION'])) echo $this->_var['DESCRIPTION']; ?></textarea>
					<br />
					<dl>
						<dt><label for="status"><?php if (isset($this->_var['L_STATUS'])) echo $this->_var['L_STATUS']; ?></label></dt>
						<dd><select name="status" id="status">
								<option value="0"<?php if (isset($this->_var['CONTRIBUTION_STATUS_UNREAD_SELECTED'])) echo $this->_var['CONTRIBUTION_STATUS_UNREAD_SELECTED']; ?>><?php if (isset($this->_var['L_CONTRIBUTION_STATUS_UNREAD'])) echo $this->_var['L_CONTRIBUTION_STATUS_UNREAD']; ?></option>
								<option value="1"<?php if (isset($this->_var['CONTRIBUTION_STATUS_BEING_PROCESSED_SELECTED'])) echo $this->_var['CONTRIBUTION_STATUS_BEING_PROCESSED_SELECTED']; ?>><?php if (isset($this->_var['L_CONTRIBUTION_STATUS_BEING_PROCESSED'])) echo $this->_var['L_CONTRIBUTION_STATUS_BEING_PROCESSED']; ?></option>
								<option value="2"<?php if (isset($this->_var['CONTRIBUTION_STATUS_PROCESSED_SELECTED'])) echo $this->_var['CONTRIBUTION_STATUS_PROCESSED_SELECTED']; ?>><?php if (isset($this->_var['L_CONTRIBUTION_STATUS_PROCESSED'])) echo $this->_var['L_CONTRIBUTION_STATUS_PROCESSED']; ?></option>
							</select>
						</dd>
					</dl>
				</fieldset>
				<fieldset class="fieldset_submit">
					<input type="hidden" name="idedit" value="<?php if (isset($this->_var['CONTRIBUTION_ID'])) echo $this->_var['CONTRIBUTION_ID']; ?>" />
					<input type="submit" class="submit" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" />
					<input type="button" class="submit" value="<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>" name="preview" onclick="XMLHttpRequest_preview();" />
					<input value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" type="reset" />
				</fieldset>
			</form>
		</div>
		<div class="module_bottom_l"></div>		
		<div class="module_bottom_r"></div>
		<div class="module_bottom"></div>
	</div>
	<?php } ?>