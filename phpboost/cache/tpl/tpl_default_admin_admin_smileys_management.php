		<script type="text/javascript">
		<!--
		function Confirm() {
		return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_SMILEY'])) echo $this->_var['L_CONFIRM_DEL_SMILEY']; ?>");
		}
		-->
		</script>

		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_ADD_SMILEY'])) echo $this->_var['L_ADD_SMILEY']; ?></li>
				<li>
					<a href="admin_smileys.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/smileys.png" alt="" /></a>
					<br />
					<a href="admin_smileys.php" class="quick_link"><?php if (isset($this->_var['L_SMILEY_MANAGEMENT'])) echo $this->_var['L_SMILEY_MANAGEMENT']; ?></a>
				</li>
				<li>
					<a href="admin_smileys_add.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/smileys.png" alt="" /></a>
					<br />
					<a href="admin_smileys_add.php" class="quick_link"><?php if (isset($this->_var['L_ADD_SMILEY'])) echo $this->_var['L_ADD_SMILEY']; ?></a>
				</li>
			</ul>
		</div>
		
		<div id="admin_contents">
			
			<table class="module_table">
				<tr> 
					<th colspan="4">
						<?php if (isset($this->_var['L_SMILEY_MANAGEMENT'])) echo $this->_var['L_SMILEY_MANAGEMENT']; ?>
					</th>
				</tr>
				<tr style="text-align:center;width: 25%"> 
					<td class="row1">
						<?php if (isset($this->_var['L_SMILEY'])) echo $this->_var['L_SMILEY']; ?>
					</td>
					<td class="row1" style="width: 25%">
						<?php if (isset($this->_var['L_CODE'])) echo $this->_var['L_CODE']; ?>
					</td>
					<td class="row1" style="width: 25%">
						<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>
					</td>
					<td class="row1" style="width: 25%">
						<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>
					</td>
				</tr>
				 
				<?php if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key]; ?>
				
				<tr style="text-align:center;"> 
					<td class="row2">
						<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/images/smileys/<?php if (isset($_tmpb_list['URL_SMILEY'])) echo $_tmpb_list['URL_SMILEY']; ?>" alt="" />
					</td>
					<td class="row2">
						<?php if (isset($_tmpb_list['CODE_SMILEY'])) echo $_tmpb_list['CODE_SMILEY']; ?>
					</td>
					<td class="row2">
						<a href="admin_smileys.php?id=<?php if (isset($_tmpb_list['IDSMILEY'])) echo $_tmpb_list['IDSMILEY']; ?>&amp;edit=1" title="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>" title="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>" /></a>
					</td>
					<td class="row2">
						<a href="admin_smileys.php?id=<?php if (isset($_tmpb_list['IDSMILEY'])) echo $_tmpb_list['IDSMILEY']; ?>&amp;del=1&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" onclick="javascript:return Confirm();"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="" /></a>
					</td>
				</tr>
				
				<?php } ?>

			</table>
		</div>
		