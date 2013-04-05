<script type="text/javascript"><!--

var idMax = <?php if (isset($this->_var['ID_MAX'])) echo $this->_var['ID_MAX']; ?>;

function destroySortableMenu() {
    Sortable.destroy('menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_list');   
}

function createSortableMenu() {
    Sortable.create('menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_list', {tree:true,scroll:window,format: /^menu_element_([0-9]+)$/});   
}

function toggleProperties(id) {
    if (document.getElementById("menu_element_" + id + "_properties").style.display == "none")
    {   //Si les propriétés sont repliées, on les affiche
        Effect.Appear("menu_element_" + id + "_properties");
        document.getElementById("menu_element_" + id + "_more_image").src = "<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/form/minus.png";
    }
    else
    {   //Sinon, on les cache
        Effect.Fade("menu_element_" + id + "_properties");
        document.getElementById("menu_element_" + id + "_more_image").src = "<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/form/plus.png";
    }
}

function build_menu_elements_tree() {
    document.getElementById("menu_tree").value = Sortable.serialize('menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_list');
}

function select(element_id, execute) {
    if (execute) {
        document.getElementById(element_id).select();
    } else {
        setTimeout('select(\'' + element_id + '\', true)', 100);
    }
}

var authForm = new String('<div>' + <?php if (isset($this->_var['J_AUTH_FORM'])) echo $this->_var['J_AUTH_FORM']; ?> + '</div>');
function getAuthForm(id) {
    return Builder.build(authForm.replace(/##UID##/g, id));
}

function addSubElement(menu_element_id) {
    var id = idMax++;
    var newDiv = Builder.node('li', {id: 'menu_element_' + id, className: 'row2 menu_link_element', style: 'display:none;' }, [
        Builder.node('div', {style: 'float:left;'}, [
            Builder.node('img', {src: '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/form/url.png', alt: 'plus', className: 'valign_middle'}),
            ' ',
            Builder.node('label', {htmlFor: 'menu_element_' + id + '_name'}, <?php if (isset($this->_var['JL_NAME'])) echo $this->_var['JL_NAME']; ?>),
            ' ',
            Builder.node('input', {type: 'text', value: <?php if (isset($this->_var['JL_ADD_SUB_ELEMENT'])) echo $this->_var['JL_ADD_SUB_ELEMENT']; ?>, id: 'menu_element_' + id + '_name', name: 'menu_element_' + id + '_name'}),
            ' ',
            Builder.node('label', {htmlFor: 'menu_element_' + id + '_url'}, <?php if (isset($this->_var['JL_URL'])) echo $this->_var['JL_URL']; ?>),
            ' ',
            Builder.node('input', {type: 'text', value: '', id: 'menu_element_' + id + '_url', name: 'menu_element_' + id + '_url'}),
            ' ',
            Builder.node('label', {htmlFor: 'menu_element_' + id + '_image'}, <?php if (isset($this->_var['JL_IMAGE'])) echo $this->_var['JL_IMAGE']; ?>),
            ' ',
            Builder.node('input', {type: 'text', value: '', id: 'menu_element_' + id + '_image', name: 'menu_element_' + id + '_image'})
        ]),
        Builder.node('div', {style: 'float:right;'}, [
            Builder.node('img', {src: '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/form/plus.png', alt: <?php if (isset($this->_var['JL_MORE'])) echo $this->_var['JL_MORE']; ?>, id: 'menu_element_' + id + '_more_image', className: 'valign_middle', onclick: 'toggleProperties(' + id + ');'}),
            ' ',
            Builder.node('img', {src: '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png', alt: <?php if (isset($this->_var['JL_DELETE'])) echo $this->_var['JL_DELETE']; ?>, id: 'menu_element_' + id + '_delete_image', className: 'valign_middle', onclick: 'deleteElement(\'menu_element_' + id + '\');'})
        ]),
        Builder.node('div', {className: 'spacer'}),
        Builder.node('fieldset', {id: 'menu_element_' + id + '_properties', style: 'display:none;'}, [
            Builder.node('legend', <?php if (isset($this->_var['JL_PROPERTIES'])) echo $this->_var['JL_PROPERTIES']; ?>),
            Builder.node('dl', [
                Builder.node('dt', [
                    Builder.node('label', {htmlFor: 'menu_element_' + id + '_auth'}, <?php if (isset($this->_var['JL_AUTHORIZATIONS'])) echo $this->_var['JL_AUTHORIZATIONS']; ?>)
                ]),
                Builder.node('dd', getAuthForm(id)),
            ]),
        ])
    ]);

    $(menu_element_id + '_list').appendChild(newDiv);
    Effect.Appear(newDiv.id);
    destroySortableMenu();
    createSortableMenu();
    select('menu_element_' + id + '_name');
}

function addSubMenu(menu_element_id) {
    var id = idMax++;
    var newDiv = Builder.node('li', {id: 'menu_element_' + id, className: 'row1 menu_link_element', style: 'display:none;' }, [
        Builder.node('div', {style: 'float:left;'}, [
            Builder.node('img', {src: '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/folder.png', alt: 'folder', className: 'valign_middle'}),
            ' ',
            Builder.node('label', {htmlFor: 'menu_element_' + id + '_name'}, <?php if (isset($this->_var['JL_NAME'])) echo $this->_var['JL_NAME']; ?>),
            ' ',
            Builder.node('input', {type: 'text', value: <?php if (isset($this->_var['JL_ADD_SUB_MENU'])) echo $this->_var['JL_ADD_SUB_MENU']; ?>, id: 'menu_element_' + id + '_name', name: 'menu_element_' + id + '_name'}),
            ' ',
            Builder.node('label', {htmlFor: 'menu_element_' + id + '_url'}, <?php if (isset($this->_var['JL_URL'])) echo $this->_var['JL_URL']; ?>),
            ' ',
            Builder.node('input', {type: 'text', value: '', id: 'menu_element_' + id + '_url', name: 'menu_element_' + id + '_url'}),
            ' ',
            Builder.node('label', {htmlFor: 'menu_element_' + id + '_image'}, <?php if (isset($this->_var['JL_IMAGE'])) echo $this->_var['JL_IMAGE']; ?>),
            ' ',
            Builder.node('input', {type: 'text', value: '', id: 'menu_element_' + id + '_image', name: 'menu_element_' + id + '_image'})
        ]),
        Builder.node('div', {style: 'float:right;'}, [
            Builder.node('img', {src: '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/form/plus.png', alt: <?php if (isset($this->_var['JL_MORE'])) echo $this->_var['JL_MORE']; ?>, id: 'menu_element_' + id + '_more_image', className: 'valign_middle', onclick: 'toggleProperties(' + id + ');'}),
            ' ',
            Builder.node('img', {src: '<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png', alt: <?php if (isset($this->_var['JL_DELETE'])) echo $this->_var['JL_DELETE']; ?>, id: 'menu_element_' + id + '_delete_image', className: 'valign_middle', onclick: 'deleteElement(\'menu_element_' + id + '\');'})
        ]),
        Builder.node('div', {className: 'spacer'}),
        Builder.node('fieldset', {id: 'menu_element_' + id + '_properties', style: 'display:none;'}, [
            Builder.node('legend', <?php if (isset($this->_var['JL_PROPERTIES'])) echo $this->_var['JL_PROPERTIES']; ?>),
            Builder.node('dl', [
                Builder.node('dt', [
                  Builder.node('label', {htmlFor: 'menu_element_' + id + '_auth'}, <?php if (isset($this->_var['JL_AUTHORIZATIONS'])) echo $this->_var['JL_AUTHORIZATIONS']; ?>)
                ]),
                Builder.node('dd', getAuthForm(id)),
            ]),
        ]),
        Builder.node('hr', {style: 'background-color:#999999;margin-top:5px;'}),
        Builder.node('ul', {id: 'menu_element_' + id + '_list', className: 'menu_link_list'}),
        Builder.node('fieldset', {className: 'fieldset_submit', style: 'margin-bottom:0px;padding-bottom:0px;'}, [
            Builder.node('input', {type: 'button', id: 'menu_element_' + id + '_add_sub_element', name: 'menu_element_' + id + '_add_sub_element', value: <?php if (isset($this->_var['JL_ADD_SUB_ELEMENT'])) echo $this->_var['JL_ADD_SUB_ELEMENT']; ?>, onclick: 'addSubElement(\'menu_element_' + id + '\');', className: 'submit'}),
            ' ',
            Builder.node('input', {type: 'button', id: 'menu_element_' + id + '_add_sub_menu', name: 'menu_element_' + id + '_add_sub_menu', value: <?php if (isset($this->_var['JL_ADD_SUB_MENU'])) echo $this->_var['JL_ADD_SUB_MENU']; ?>, onclick: 'addSubMenu(\'menu_element_' + id + '\');', className: 'submit'}),
        ]),
    ]);

    $(menu_element_id + '_list').appendChild(newDiv);
    Effect.Appear(newDiv.id);
    addSubElement('menu_element_' + id);
    select('menu_element_' + id + '_name');
}

function deleteElement(element_id)
{
    if (confirm(<?php if (isset($this->_var['JL_DELETE_ELEMENT'])) echo $this->_var['JL_DELETE_ELEMENT']; ?>))
    {
        var elementToDelete = document.getElementById(element_id);
        elementToDelete.parentNode.removeChild(elementToDelete);
        destroySortableMenu();
        createSortableMenu();
    }
}

--></script>
<div id="admin_contents">
	<form action="links.php?action=save" method="post" class="fieldset_content" onsubmit="build_menu_elements_tree();">
		<fieldset> 
			<legend><?php if (isset($this->_var['L_ACTION_MENUS'])) echo $this->_var['L_ACTION_MENUS']; ?></legend>
			<dl>
				<dt><label for="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_name">* <?php if (isset($this->_var['L_NAME'])) echo $this->_var['L_NAME']; ?></label></dt>
				<dd><input type="text" name="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_name" id="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_name" value="<?php if (isset($this->_var['MENU_NAME'])) echo $this->_var['MENU_NAME']; ?>" /></dd>
			</dl>
			<dl>
				<dt><label for="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_url"><?php if (isset($this->_var['L_URL'])) echo $this->_var['L_URL']; ?></label></dt>
				<dd><input type="text" name="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_url" id="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_url" value="<?php if (isset($this->_var['MENU_URL'])) echo $this->_var['MENU_URL']; ?>" /></dd>
			</dl>
			<dl>
				<dt><label for="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_image"><?php if (isset($this->_var['L_IMAGE'])) echo $this->_var['L_IMAGE']; ?></label></dt>
				<dd><input type="text" name="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_image" id="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_image" value="<?php if (isset($this->_var['MENU_IMG'])) echo $this->_var['MENU_IMG']; ?>" /></dd>
			</dl>
			<dl>
				<dt><label for="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_type">* <?php if (isset($this->_var['L_TYPE'])) echo $this->_var['L_TYPE']; ?></label></dt>
				<dd>
					<label>
						<select name="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_type" id="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_type">
							<?php if (!isset($this->_block['type']) || !is_array($this->_block['type'])) $this->_block['type'] = array();
foreach ($this->_block['type'] as $type_key => $type_value) {
$_tmpb_type = &$this->_block['type'][$type_key]; ?>
								<option value="<?php if (isset($_tmpb_type['NAME'])) echo $_tmpb_type['NAME']; ?>"<?php if (isset($_tmpb_type['SELECTED'])) echo $_tmpb_type['SELECTED']; ?>><?php if (isset($_tmpb_type['L_NAME'])) echo $_tmpb_type['L_NAME']; ?></option>
							<?php } ?>
						</select>
					</label>
				</dd>
			</dl>
			<dl>
				<dt><label for="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_location">* <?php if (isset($this->_var['L_LOCATION'])) echo $this->_var['L_LOCATION']; ?></label></dt>
				<dd><label>
                    <select name="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_location" id="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_location">
                        <?php if (!isset($this->_block['location']) || !is_array($this->_block['location'])) $this->_block['location'] = array();
foreach ($this->_block['location'] as $location_key => $location_value) {
$_tmpb_location = &$this->_block['location'][$location_key]; ?>
                            <option value="<?php if (isset($_tmpb_location['VALUE'])) echo $_tmpb_location['VALUE']; ?>" <?php if (isset($_tmpb_location['C_SELECTED']) && $_tmpb_location['C_SELECTED']) { ?> selected="selected"<?php } ?>>
                                <?php if (isset($_tmpb_location['NAME'])) echo $_tmpb_location['NAME']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </label></dd>
			</dl>
			<dl>
				<dt><label for="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_enabled"><?php if (isset($this->_var['L_STATUS'])) echo $this->_var['L_STATUS']; ?></label></dt>
				<dd><label>
					<select name="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_enabled" id="menu_element_<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>_enabled">
					   <?php if (isset($this->_var['C_ENABLED']) && $this->_var['C_ENABLED']) { ?>
							<option value="1" selected="selected"><?php if (isset($this->_var['L_ENABLED'])) echo $this->_var['L_ENABLED']; ?></option>
							<option value="0"><?php if (isset($this->_var['L_DISABLED'])) echo $this->_var['L_DISABLED']; ?></option>
						<?php } else { ?>
                            <option value="1"><?php if (isset($this->_var['L_ENABLED'])) echo $this->_var['L_ENABLED']; ?></option>
                            <option value="0" selected="selected"><?php if (isset($this->_var['L_DISABLED'])) echo $this->_var['L_DISABLED']; ?></option>
						<?php } ?>					
					</select>
				</label></dd>
			</dl>
			<dl>
				<dt><?php if (isset($this->_var['L_AUTHS'])) echo $this->_var['L_AUTHS']; ?></dt>
				<dd><?php if (isset($this->_var['AUTH_MENUS'])) echo $this->_var['AUTH_MENUS']; ?></dd>
			</dl>
		</fieldset>
		
		<fieldset>
			<legend>* <?php if (isset($this->_var['L_CONTENT'])) echo $this->_var['L_CONTENT']; ?></legend>
			<?php if (isset($this->_var['MENU_TREE'])) echo $this->_var['MENU_TREE']; ?>
		    <script type="text/javascript">
		    <!--
		    createSortableMenu();
            -->
            </script>
			<br />
	    </fieldset>			
	
		<fieldset class="fieldset_submit">
			<legend><?php if (isset($this->_var['L_ACTION'])) echo $this->_var['L_ACTION']; ?></legend>
			<input type="hidden" name="id" value="<?php if (isset($this->_var['MENU_ID'])) echo $this->_var['MENU_ID']; ?>" />
			<input type="hidden" name="menu_tree" id="menu_tree" value="" />
			<input type="submit" name="valid" value="<?php if (isset($this->_var['L_ACTION'])) echo $this->_var['L_ACTION']; ?>" class="submit" />					
		</fieldset>
	</form>
</div>