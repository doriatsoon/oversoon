		<script type="text/javascript">
		<!--
			var path = '<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>';
			var selected_cat = <?php if (isset($this->_var['SELECTED_CAT'])) echo $this->_var['SELECTED_CAT']; ?>;
		-->
		</script>
		<script type="text/javascript" src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/wiki.js"></script>


		<table class="module_table">
			<tr>
				<th colspan="2">
					<?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?>
				</th>
			</tr>
			<tr>
				<td style="width:200px;" class="row1">
					<?php if (isset($this->_var['L_CATS'])) echo $this->_var['L_CATS']; ?>
				</td>
				<td id="cat_contents" class="row2" rowspan="2" style="vertical-align:top;">
					<table style="width:100%;">
						<?php if (isset($this->_var['ROOT_CONTENTS'])) echo $this->_var['ROOT_CONTENTS']; ?>
					</table>
				</td>
			</tr>
			<tr>
				<td style="width:200px; vertical-align:top;" class="row2">
					<div style="overflow-x:auto; width:200px;">
						<span style="padding-left:17px;"><a href="javascript:open_cat(0);"><img src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/cat_root.png" alt="" /> <span id="class_0" class="<?php if (isset($this->_var['CAT_0'])) echo $this->_var['CAT_0']; ?>"><?php if (isset($this->_var['L_ROOT'])) echo $this->_var['L_ROOT']; ?></span></a></span>
						<br />
						<ul style="margin:0;padding:0;list-style-type:none;line-height:normal;">
						<?php if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key];echo ' ';if (isset($_tmpb_list['DIRECTORY'])) echo $_tmpb_list['DIRECTORY'];echo ' ';}echo ' ';if (isset($this->_var['CAT_LIST'])) echo $this->_var['CAT_LIST']; ?>
						</ul>
					</div>
					<br /><br />
				</td>
			</tr>
		</table>
