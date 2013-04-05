		<script type="text/javascript">
		<!--
			var path = '<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>';
			var selected_cat = <?php if (isset($this->_var['SELECTED_CAT'])) echo $this->_var['SELECTED_CAT']; ?>;
			function check_form_post(){
				if(document.getElementById('title').value == "") {
					alert("<?php if (isset($this->_var['L_ALERT_TITLE'])) echo $this->_var['L_ALERT_TITLE']; ?>");
					return false;
				}
				if(document.getElementById('contents').value == "") {
					alert("<?php if (isset($this->_var['L_ALERT_CONTENTS'])) echo $this->_var['L_ALERT_CONTENTS']; ?>");
					return false;
				}
				return true;
			}
		-->
		</script>
		<script type="text/javascript" src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/templates/wiki.js"></script>

		<?php if (!isset($this->_block['preview']) || !is_array($this->_block['preview'])) $this->_block['preview'] = array();
foreach ($this->_block['preview'] as $preview_key => $preview_value) {
$_tmpb_preview = &$this->_block['preview'][$preview_key]; ?>
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top"><?php if (isset($this->_var['L_PREVIEWING'])) echo $this->_var['L_PREVIEWING']; ?>: <?php if (isset($_tmpb_preview['TITLE'])) echo $_tmpb_preview['TITLE']; ?></div>
			<div class="module_contents" id="preview">
				<?php if (!isset($_tmpb_preview['menu']) || !is_array($_tmpb_preview['menu'])) $_tmpb_preview['menu'] = array();
foreach ($_tmpb_preview['menu'] as $menu_key => $menu_value) {
$_tmpb_menu = &$_tmpb_preview['menu'][$menu_key]; ?>
					<div class="row3" style="width:70%">
						<div style="text-align:center;"><strong><?php if (isset($this->_var['L_TABLE_OF_CONTENTS'])) echo $this->_var['L_TABLE_OF_CONTENTS']; ?></strong></div>
						<?php if (isset($_tmpb_menu['MENU'])) echo $_tmpb_menu['MENU']; ?>
					</div>
				<?php } ?>
				<br /><br />
				<?php if (isset($_tmpb_preview['CONTENTS'])) echo $_tmpb_preview['CONTENTS']; ?>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom"></div>
		</div>
		<?php }echo ' ';if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
		<span id="errorh"></span>
		<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
			<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
		</div>
		<?php } ?>
		
		<form action="<?php if (isset($this->_var['TARGET'])) echo $this->_var['TARGET']; ?>" method="post" onsubmit="return check_form_post();" class="fieldset_content">					
			<fieldset>
				<legend><?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?></legend>
				<?php if (!isset($this->_block['create']) || !is_array($this->_block['create'])) $this->_block['create'] = array();
foreach ($this->_block['create'] as $create_key => $create_value) {
$_tmpb_create = &$this->_block['create'][$create_key]; ?>
				<dl>
					<dt><label for="title"><?php if (isset($this->_var['L_TITLE_FIELD'])) echo $this->_var['L_TITLE_FIELD']; ?></label></dt>
					<dd><label><input type="text" class="text" id="title" name="title" size="70" maxlength="250" value="<?php if (isset($this->_var['ARTICLE_TITLE'])) echo $this->_var['ARTICLE_TITLE']; ?>" /></label></dd>					
				</dl>
				<dl>
					<dt><label for="selected_cat"><?php if (isset($this->_var['L_CURRENT_CAT'])) echo $this->_var['L_CURRENT_CAT']; ?></label></dt>
					<dd>
						<input type="hidden" name="id_cat" id="id_cat" value="<?php if (isset($this->_var['ID_CAT'])) echo $this->_var['ID_CAT']; ?>"/>
						<div id="selected_cat"><?php if (isset($this->_var['CURRENT_CAT'])) echo $this->_var['CURRENT_CAT']; ?></div>
					</dd>					
				</dl>		
				<dl>
					<dt><label><?php if (isset($this->_var['L_CAT'])) echo $this->_var['L_CAT']; ?></label></dt>
					<dd>
						<span style="padding-left:17px;"><a href="javascript:select_cat(0);"><img src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/cat_root.png" alt="" /> <span id="class_0" class="<?php if (isset($this->_var['CAT_0'])) echo $this->_var['CAT_0']; ?>"><?php if (isset($this->_var['L_DO_NOT_SELECT_ANY_CAT'])) echo $this->_var['L_DO_NOT_SELECT_ANY_CAT']; ?></span></a></span>
						<br />
						<ul style="margin:0;padding:0;list-style-type:none;line-height:normal;">
						<?php if (!isset($_tmpb_create['list']) || !is_array($_tmpb_create['list'])) $_tmpb_create['list'] = array();
foreach ($_tmpb_create['list'] as $list_key => $list_value) {
$_tmpb_list = &$_tmpb_create['list'][$list_key];echo ' ';if (isset($_tmpb_list['DIRECTORY'])) echo $_tmpb_list['DIRECTORY'];echo ' ';}echo ' ';if (isset($this->_var['CAT_LIST'])) echo $this->_var['CAT_LIST']; ?>
						</ul>
					</dd>					
				</dl>
				<?php } ?>	
				<br />
				<label for="contents"><?php if (isset($this->_var['L_CONTENTS'])) echo $this->_var['L_CONTENTS']; ?></label>
				<?php $this->_include('post_js_tools');echo ' ';if (isset($this->_var['KERNEL_EDITOR'])) echo $this->_var['KERNEL_EDITOR']; ?>
				<label><textarea rows="25" cols="66" id="contents" name="contents"><?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?></textarea></label>
				<br />
			</fieldset>	
			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
				<input type="hidden" name="is_cat" value="<?php if (isset($this->_var['IS_CAT'])) echo $this->_var['IS_CAT']; ?>" />
				<input type="hidden" name="id_edit" value="<?php if (isset($this->_var['ID_EDIT'])) echo $this->_var['ID_EDIT']; ?>" />
				<input type="hidden" name="token" value="<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" />
				<input type="submit" class="submit" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" />
				<input type="submit" value="<?php if (isset($this->_var['L_PREVIEW'])) echo $this->_var['L_PREVIEW']; ?>" class="submit" name="preview" />
				<input value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" type="reset" />
			</fieldset>
		</form>
