		<script type="text/javascript">
		<!--
		function Confirm() {
		return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_ENTRY'])) echo $this->_var['L_CONFIRM_DEL_ENTRY']; ?>");
		}
		-->
		</script>

		<div id="admin_quick_menu">
				<ul>
					<li class="title_menu"><?php if (isset($this->_var['L_WIKI_MANAGEMENT'])) echo $this->_var['L_WIKI_MANAGEMENT']; ?></li>
				<li>
					<a href="admin_wiki.php"><img src="wiki.png" alt="" /></a>
					<br />
					<a href="admin_wiki.php" class="quick_link"><?php if (isset($this->_var['L_CONFIG_WIKI'])) echo $this->_var['L_CONFIG_WIKI']; ?></a>
				</li>
				<li>
					<a href="admin_wiki_groups.php"><img src="wiki.png" alt="" /></a>
					<br />
					<a href="admin_wiki_groups.php" class="quick_link"><?php if (isset($this->_var['L_WIKI_GROUPS'])) echo $this->_var['L_WIKI_GROUPS']; ?></a>
				</li>
			</ul>
		</div>

		<div id="admin_contents">
			<form action="admin_wiki_groups.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post">
				<table class="module_table">
					<tr>			
						<th colspan="2">
							<?php if (isset($this->_var['L_WIKI_GROUPS'])) echo $this->_var['L_WIKI_GROUPS']; ?>
						</th>
					</tr>	
					<tr>			
						<td colspan="2" class="row3">
							<?php if (isset($this->_var['EXPLAIN_WIKI_GROUPS'])) echo $this->_var['EXPLAIN_WIKI_GROUPS']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1" style="width:200px;">
							<?php if (isset($this->_var['L_CREATE_ARTICLE'])) echo $this->_var['L_CREATE_ARTICLE']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_CREATE_ARTICLE'])) echo $this->_var['SELECT_CREATE_ARTICLE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1" style="width:250px;">
							<?php if (isset($this->_var['L_CREATE_CAT'])) echo $this->_var['L_CREATE_CAT']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_CREATE_CAT'])) echo $this->_var['SELECT_CREATE_CAT']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1" style="width:250px;">
							<?php if (isset($this->_var['L_RESTORE_ARCHIVE'])) echo $this->_var['L_RESTORE_ARCHIVE']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_RESTORE_ARCHIVE'])) echo $this->_var['SELECT_RESTORE_ARCHIVE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1" style="width:250px;">
							<?php if (isset($this->_var['L_DELETE_ARCHIVE'])) echo $this->_var['L_DELETE_ARCHIVE']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_DELETE_ARCHIVE'])) echo $this->_var['SELECT_DELETE_ARCHIVE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_EDIT'])) echo $this->_var['SELECT_EDIT']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_DELETE'])) echo $this->_var['SELECT_DELETE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_RENAME'])) echo $this->_var['L_RENAME']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_RENAME'])) echo $this->_var['SELECT_RENAME']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_REDIRECT'])) echo $this->_var['L_REDIRECT']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_REDIRECT'])) echo $this->_var['SELECT_REDIRECT']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_MOVE'])) echo $this->_var['L_MOVE']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_MOVE'])) echo $this->_var['SELECT_MOVE']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_STATUS'])) echo $this->_var['L_STATUS']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_STATUS'])) echo $this->_var['SELECT_STATUS']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_COM'])) echo $this->_var['L_COM']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_COM'])) echo $this->_var['SELECT_COM']; ?>
						</td>
					</tr>
					<tr>
						<td class="row1">
							<?php if (isset($this->_var['L_RESTRICTION'])) echo $this->_var['L_RESTRICTION']; ?>
						</td>
						<td class="row2">
							<?php if (isset($this->_var['SELECT_RESTRICTION'])) echo $this->_var['SELECT_RESTRICTION']; ?>
						</td>
					</tr>
				</table>
				
				<br /><br />
				
				<fieldset class="fieldset_submit">
					<legend><?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?></legend>
					<input type="submit" name="valid" value="<?php if (isset($this->_var['L_UPDATE'])) echo $this->_var['L_UPDATE']; ?>" class="submit" />
					&nbsp;&nbsp; 
					<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />				
				</fieldset>	
			</form>
		</div>