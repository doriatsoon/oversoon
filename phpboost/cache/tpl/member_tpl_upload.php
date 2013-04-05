	<?php if (isset($this->_var['HEADER'])) echo $this->_var['HEADER']; ?>
	<script type="text/javascript">
	<!--
	function insert_popup(code) 
	{
		var area = opener.document.getElementById("<?php if (isset($this->_var['FIELD'])) echo $this->_var['FIELD']; ?>");
		var nav = navigator.appName; //Recupère le nom du navigateur

		area.focus();
		if( nav == 'Microsoft Internet Explorer' ) // Internet Explorer
			ie_sel(area, code, 'smile');
		else if( nav == 'Netscape' || nav == 'Opera' ) //Netscape ou opera
			netscape_sel(area, code, 'smile');
		else //insertion normale (autres navigateurs)
			opener.document.getElementById("<?php if (isset($this->_var['FIELD'])) echo $this->_var['FIELD']; ?>").value += ' ' + code;
	}	
	function close_popup()
	{
		opener=self;
		self.close();
	}
	function Confirm_file() {
		return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_FILE'])) echo $this->_var['L_CONFIRM_DEL_FILE']; ?>");
	}
	function Confirm_folder() {
		return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_FOLDER'])) echo $this->_var['L_CONFIRM_DEL_FOLDER']; ?>");
	}	
	function Confirm_member() {
		return confirm("<?php if (isset($this->_var['L_CONFIRM_EMPTY_FOLDER'])) echo $this->_var['L_CONFIRM_EMPTY_FOLDER']; ?>");
	}
	function popup_upload(id, width, height, scrollbars)
	{
		if( height == '0' )
			height = screen.height - 150;
		if( width == '0' )
			width = screen.width - 200;
		window.open('../member/upload_popup.php?id=' + id, "", "width="+width+", height="+height+ ",location=no,status=no,toolbar=no,scrollbars=" + scrollbars + ",resizable=yes");
	}
	var hide_folder = false;
	var empty_folder = 0;
	
	function display_new_folder()
	{
		if( document.getElementById('empty_folder') )
				document.getElementById('empty_folder').style.display = 'none';	
		
		if ( typeof this.divid == 'undefined' )
			this.divid = 0;
		else
			this.divid++;
			
		if( !hide_folder )
		{
			document.getElementById('new_folder').innerHTML += '<div style="width:210px;height:90px;float:left;margin-top:5px;" id="new_folder' + divid + '"><table style="border:0"><tr><td style="width:34px;vertical-align:top;"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/folder_max.png" alt="" /></td><td style="padding-top:8px;"><input type="text" name="folder_name" id="folder_name" class="text" value="" onblur="add_folder(\'<?php if (isset($this->_var['FOLDER_ID'])) echo $this->_var['FOLDER_ID']; ?>\', \'<?php if (isset($this->_var['USER_ID'])) echo $this->_var['USER_ID']; ?>\', ' + divid + ');" /></td></tr></table></div>';
			document.getElementById('folder_name').focus();
		}
		else
		{	
			document.getElementById('new_folder' + (divid - 1)).style.display = 'block';
			document.getElementById('new_folder' + (divid - 1)).innerHTML = '<div style="width:210px;height:90px;float:left;margin-top:5px;" id="new_folder' + divid + '"><table style="border:0"><tr><td style="width:34px;vertical-align:top;"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/folder_max.png" alt="" /></td><td style="padding-top:8px;"><input type="text" name="folder_name" id="folder_name" class="text" value="" onblur="add_folder(\'<?php if (isset($this->_var['FOLDER_ID'])) echo $this->_var['FOLDER_ID']; ?>\', \'<?php if (isset($this->_var['USER_ID'])) echo $this->_var['USER_ID']; ?>\', ' + (divid - 1) + ');" /></td></tr></table></div>';
			document.getElementById('folder_name').focus();
			this.divid--;	
			hide_folder = false;
		}
	}
	function display_rename_folder(id, previous_name, previous_cut_name)
	{
		if( document.getElementById('f' + id) )
		{	
			document.getElementById('f' + id).innerHTML = '<input type="text" name="finput' + id + '" id="finput' + id + '" class="text" value="' + previous_name + '" onblur="rename_folder(\'' + id + '\', \'' + previous_name.replace(/\'/g, "\\\'") + '\', \'' + previous_cut_name.replace(/\'/g, "\\\'") + '\');" />';
			document.getElementById('finput' + id).focus();
		}
	}		
	function rename_folder(id_folder, previous_name, previous_cut_name)
	{
		var name = document.getElementById('finput' + id_folder).value;
		var regex = /\/|\.|\\|\||\?|<|>|\"/;
		
		document.getElementById('img' + id_folder).innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" class="valign_middle" />';
		if( name != '' && regex.test(name) ) //interdiction des caractères spéciaux dans la nom.
		{
			alert("<?php if (isset($this->_var['L_FOLDER_FORBIDDEN_CHARS'])) echo $this->_var['L_FOLDER_FORBIDDEN_CHARS']; ?>");
			document.getElementById('f' + id_folder).innerHTML = '<a class="com" href="upload.php?f=' + id_folder + '<?php if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>">' + previous_cut_name + '</a>';
			document.getElementById('img' + id_folder).innerHTML = '';
		}
		else if( name != '' )
		{
			name2 = escape_xmlhttprequest(name);
			data = "id_folder=" + id_folder + "&name=" + name2 + "&previous_name=" + previous_name;
			var xhr_object = xmlhttprequest_init('../kernel/framework/ajax/uploads_xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&rename_folder=1');
			xhr_object.onreadystatechange = function() 
			{
				if( xhr_object.readyState == 4 && xhr_object.status == 200 ) 
				{
					if( xhr_object.responseText != '' )
					{
						document.getElementById('f' + id_folder).innerHTML = '<a class="com" href="upload.php?f=' + id_folder + '<?php if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>">' + name + '</a>';
						document.getElementById('fhref' + id_folder).innerHTML = '<a href="javascript:display_rename_folder(\'' + id_folder + '\', \'' + xhr_object.responseText.replace(/\'/g, "\\\'") + '\', \'' + name.replace(/\'/g, "\\\'") + '\');"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" class="valign_middle" /></a>';
					}
					else
					{	
						alert("<?php if (isset($this->_var['L_FOLDER_ALREADY_EXIST'])) echo $this->_var['L_FOLDER_ALREADY_EXIST']; ?>");
						document.getElementById('f' + id_folder).innerHTML = '<a class="com" href="upload.php?f=' + id_folder + '<?php if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>">' + previous_cut_name + '</a>';
					}
					document.getElementById('img' + id_folder).innerHTML = '';
				}
				else if( xhr_object.readyState == 4 )
					document.getElementById('img' + id_folder).innerHTML = '';
			}
			xmlhttprequest_sender(xhr_object, data);
		}
	}	
	function add_folder(id_parent, user_id, divid)
	{
		var name = document.getElementById("folder_name").value;
		var regex = /\/|\.|\\|\||\?|<|>|\"/;

		if( name != '' && regex.test(name) ) //interdiction des caractères spéciaux dans le nom.
		{
			alert("<?php if (isset($this->_var['L_FOLDER_FORBIDDEN_CHARS'])) echo $this->_var['L_FOLDER_FORBIDDEN_CHARS']; ?>");
			document.getElementById('new_folder' + divid).innerHTML = '';
			document.getElementById('new_folder' + divid).style.display = 'none';
			hide_folder = true;
			if( document.getElementById('empty_folder') && empty_folder == 0 )
				document.getElementById('empty_folder').style.display = 'block';
		}
		else if( name != '' )
		{
			name2 = escape_xmlhttprequest(name);
			data = "name=" + name2 + "&user_id=" + user_id + "&id_parent=" + id_parent;
			var xhr_object = xmlhttprequest_init('../kernel/framework/ajax/uploads_xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&new_folder=1');
			xhr_object.onreadystatechange = function() 
			{
				if( xhr_object.readyState == 4 && xhr_object.status == 200 ) 
				{
					if( xhr_object.responseText > 0 )
					{
						document.getElementById('new_folder' + divid).innerHTML = '<table style="border:0"><tr><td style="width:34px;vertical-align:top;"><a href="upload.php?f=' + xhr_object.responseText + '<?php if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/folder_max.png" alt="" /></a></td><td style="padding-top:8px;"> <span id="f' + xhr_object.responseText + '"><a class="com" href="upload.php?f=' + xhr_object.responseText + '<?php if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>">' + name + '</a></span></span><div style="padding-top:5px;"><span id="fhref' + xhr_object.responseText + '"><span id="fihref' + xhr_object.responseText + '"><a href="javascript:display_rename_folder(\'' + xhr_object.responseText + '\', \'' + name.replace(/\'/g, "\\\'") + '\', \'' + name.replace(/\'/g, "\\\'") + '\');"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" class="valign_middle" /></a></span></a></span> <a href="upload.php?delf=' + xhr_object.responseText + '&amp;f=<?php if (isset($this->_var['FOLDER_ID'])) echo $this->_var['FOLDER_ID'];if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>" onclick="javascript:return Confirm_folder();"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="" class="valign_middle" /></a> <a href="upload.php?move=' + xhr_object.responseText + '<?php if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>" title="<?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/move.png" alt="" class="valign_middle" /></a></div><span id="img' + xhr_object.responseText + '"></span></td></tr></table>';
						var total_folder = document.getElementById('total_folder').innerHTML;
						total_folder++;						
						document.getElementById('total_folder').innerHTML = total_folder;
						
						empty_folder++;
					}
					else
					{	
						alert("<?php if (isset($this->_var['L_FOLDER_ALREADY_EXIST'])) echo $this->_var['L_FOLDER_ALREADY_EXIST']; ?>");
						document.getElementById('new_folder' + divid).innerHTML = '';
						document.getElementById('new_folder' + divid).style.display = 'none';
						hide_folder = true;
					}
				}
			}
			xmlhttprequest_sender(xhr_object, data);
		}
		else
		{
			if( document.getElementById('empty_folder') && empty_folder == 0 )
				document.getElementById('empty_folder').style.display = 'block';
			document.getElementById('new_folder' + divid).innerHTML = '';
			document.getElementById('new_folder' + divid).style.display = 'none';
			hide_folder = true;
		}
	}
	function display_rename_file(id, previous_name, previous_cut_name)
	{
		if( document.getElementById('fi' + id) )
		{	
			document.getElementById('fi1' + id).style.display = 'none';
			document.getElementById('fi' + id).style.display = 'inline';
			document.getElementById('fi' + id).innerHTML = '<input type="text" name="fiinput' + id + '" id="fiinput' + id + '" class="text" value="' + previous_name + '" onblur="rename_file(\'' + id + '\', \'' + previous_name.replace(/\'/g, "\\\'") + '\', \'' + previous_cut_name.replace(/\'/g, "\\\'") + '\');" />';
			document.getElementById('fiinput' + id).focus();
		}
	}	
	function rename_file(id_file, previous_name, previous_cut_name)
	{
		var name = document.getElementById("fiinput" + id_file).value;
		var regex = /\/|\\|\||\?|<|>|\"/;

		document.getElementById('imgf' + id_file).innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" class="valign_middle" />';
		if( name != '' && regex.test(name) ) //interdiction des caractères spéciaux dans la nom.
		{
			alert("<?php if (isset($this->_var['L_FOLDER_FORBIDDEN_CHARS'])) echo $this->_var['L_FOLDER_FORBIDDEN_CHARS']; ?>");	
			document.getElementById('fi1' + id_file).style.display = 'inline';
			document.getElementById('fi' + id_file).style.display = 'none';
			document.getElementById('imgf' + id_file).innerHTML = '';
		}
		else if( name != '' )
		{
			name2 = escape_xmlhttprequest(name);
			data = "id_file=" + id_file + "&name=" + name2 + "&previous_name=" + previous_cut_name;
			var xhr_object = xmlhttprequest_init('../kernel/framework/ajax/uploads_xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&rename_file=1');
			xhr_object.onreadystatechange = function() 
			{
				if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText != '' ) 
				{					
					if( xhr_object.responseText == '/' )
					{
						alert("<?php if (isset($this->_var['L_FOLDER_ALREADY_EXIST'])) echo $this->_var['L_FOLDER_ALREADY_EXIST']; ?>");	
						document.getElementById('fi1' + id_file).style.display = 'inline';
						document.getElementById('fi' + id_file).style.display = 'none';
					}
					else
					{
						document.getElementById('fi' + id_file).style.display = 'none';
						document.getElementById('fi1' + id_file).style.display = 'inline';
						document.getElementById('fi1' + id_file).innerHTML = xhr_object.responseText;
						document.getElementById('fihref' + id_file).innerHTML = '<a href="javascript:display_rename_file(\'' + id_file + '\', \'' + name.replace(/\'/g, "\\\'") + '\', \'' + previous_name.replace(/\'/g, "\\\'") + '\', \'' + xhr_object.responseText.replace(/\'/g, "\\\'") + '\');"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" class="valign_middle" /></a>';
					}
					document.getElementById('imgf' + id_file).innerHTML = '';
				}
				else if( xhr_object.readyState == 4 && xhr_object.responseText == '' )
				{
					document.getElementById('fi' + id_file).style.display = 'none';
					document.getElementById('fi1' + id_file).style.display = 'inline';	
					document.getElementById('fihref' + id_file).innerHTML = '<a href="javascript:display_rename_file(\'' + id_file + '\', \'' + previous_name.replace(/\'/g, "\\\'") + '\', \'' + previous_cut_name.replace(/\'/g, "\\\'") + '\');"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" class="valign_middle" /></a>';
					document.getElementById('imgf' + id_file).innerHTML = '';					
				}
			}
			xmlhttprequest_sender(xhr_object, data);
		}
	}	
	var delay = 1000; //Délai après lequel le bloc est automatiquement masqué, après le départ de la souris.
	var timeout;
	var displayed = false;
	var previous_block;
	
	//Affiche le bloc.
	function upload_display_block(divID)
	{
		var i;
		
		if( timeout )
			clearTimeout(timeout);
		
		var block = document.getElementById('move' + divID);
		if( block.style.display == 'none' )
		{
			if( document.getElementById(previous_block) )
				document.getElementById(previous_block).style.display = 'none';
			displayed = true;
			block.style.display = 'block';
			previous_block = 'move' + divID;
		}
		else
		{
			block.style.display = 'none';
			displayed = false;
		}
	}
	//Cache le bloc.
	function upload_hide_block(idfield, stop)
	{
		if( stop && timeout )
		{	
			clearTimeout(timeout);
		}
		else if( displayed )
		{
			clearTimeout(timeout);
			timeout = setTimeout('upload_display_block(\'' + idfield + '\')', delay);
		}	
	}
	var selected = 0;
	function select_div(id)
	{
		if( document.getElementById(id) )
		{
			if( selected == 0 )
			{	
				document.getElementById(id).select();
				selected = 1;
			}
			else
			{
				document.getElementById(id).blur();
				selected = 0;
			}
		}	
	}
	-->
	</script>
	
	<table class="module_table" style="margin:8px;margin-bottom:0px;">
		<tr> 
			<th>
				<?php if (isset($this->_var['L_FILES_ACTION'])) echo $this->_var['L_FILES_ACTION']; ?>
			</th>
		</tr>							
		<tr> 
			<td class="row2">
				<span style="float:left;">
					<a href="upload.php?root=1<?php if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/home.png" class="valign_middle" alt="" /></a>
					<a href="upload.php?root=1<?php if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>"><?php if (isset($this->_var['L_ROOT'])) echo $this->_var['L_ROOT']; ?></a>
					<br />					
					<a href="upload.php?fup=<?php if (isset($this->_var['FOLDER_ID'])) echo $this->_var['FOLDER_ID'];if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/folder_up.png" class="valign_middle" alt="" /></a>
					<a href="upload.php?fup=<?php if (isset($this->_var['FOLDER_ID'])) echo $this->_var['FOLDER_ID'];if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>"><?php if (isset($this->_var['L_FOLDER_UP'])) echo $this->_var['L_FOLDER_UP']; ?></a>
				</span>
				<span style="float:right;">
					<span id="new_folder_link">
						<a href="javascript:display_new_folder();"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/folder_new.png" class="valign_middle" alt="" /></a>
						<a href="javascript:display_new_folder();"><?php if (isset($this->_var['L_FOLDER_NEW'])) echo $this->_var['L_FOLDER_NEW']; ?></a>
					</span>
					<br />
					<a href="#new_file"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/files_add.png" class="valign_middle" alt="" /></a>
					<a href="#new_file"><?php if (isset($this->_var['L_ADD_FILES'])) echo $this->_var['L_ADD_FILES']; ?></a>		
					<br />
				</span>
			</td>
		</tr>							
		<tr> 
			<td class="row3" style="margin:0px;padding:0px">
				<div style="float:left;padding:2px;padding-left:8px;">
					<?php if (isset($this->_var['L_URL'])) echo $this->_var['L_URL']; ?>
				</div>
				<div style="float:right;width:90%;padding:2px;background:#f3f3ee;padding-left:6px;color:black;border:1px solid #7f9db9;">
						<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/folder_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['U_ROOT'])) echo $this->_var['U_ROOT'];if (isset($this->_var['URL'])) echo $this->_var['URL']; ?>
				</div>
			</td>
		</tr>	
		
		<tr>	
			<td class="row2" style="padding:10px 2px;">
				<div style="height:260px;overflow:auto;">
					<?php if (isset($this->_var['C_EMPTY_FOLDER']) && $this->_var['C_EMPTY_FOLDER']) { ?>
						<p style="text-align:center;padding-top:25px;" id="empty_folder">					
							<?php if (isset($this->_var['L_EMPTY_FOLDER'])) echo $this->_var['L_EMPTY_FOLDER']; ?>					
						</p>
					<?php }echo ' ';if (!isset($this->_block['folder']) || !is_array($this->_block['folder'])) $this->_block['folder'] = array();
foreach ($this->_block['folder'] as $folder_key => $folder_value) {
$_tmpb_folder = &$this->_block['folder'][$folder_key]; ?>		
					<div style="width:210px;height:90px;float:left;margin-top:5px;">
						<table style="border:0;">
							<tr>
								<td style="width:34px;vertical-align:top;">
									<a href="upload.php?f=<?php if (isset($_tmpb_folder['ID'])) echo $_tmpb_folder['ID'];if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/folder_max.png" alt="" /></a>
								</td>
								<td style="padding-top:8px;">						
									<span id="f<?php if (isset($_tmpb_folder['ID'])) echo $_tmpb_folder['ID']; ?>"><a href="upload.php?f=<?php if (isset($_tmpb_folder['ID'])) echo $_tmpb_folder['ID'];if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>" class="com"><?php if (isset($_tmpb_folder['NAME'])) echo $_tmpb_folder['NAME']; ?></a></span>
									<div style="padding-top:5px;">
										<?php if (isset($_tmpb_folder['RENAME_FOLDER'])) echo $_tmpb_folder['RENAME_FOLDER']; ?>	<a href="upload.php?delf=<?php if (isset($_tmpb_folder['ID'])) echo $_tmpb_folder['ID']; ?>&amp;f=<?php if (isset($this->_var['FOLDER_ID'])) echo $this->_var['FOLDER_ID']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN'];if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>" onclick="javascript:return Confirm_folder();" title="<?php if (isset($_tmpb_folder['L_TYPE_DEL_FOLDER'])) echo $_tmpb_folder['L_TYPE_DEL_FOLDER']; ?>"><?php if (isset($_tmpb_folder['DEL_TYPE_IMG'])) echo $_tmpb_folder['DEL_TYPE_IMG']; ?></a>
										
										<a href="upload<?php if (isset($_tmpb_folder['U_MOVE'])) echo $_tmpb_folder['U_MOVE']; ?>" title="<?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/move.png" alt="" class="valign_middle" /></a>
										
										<span id="img<?php if (isset($_tmpb_folder['ID'])) echo $_tmpb_folder['ID']; ?>"></span>
									</div>
								</td>
							</tr>						
						</table>
					</div>
					<?php } ?>
			
					<span id="new_folder"></span>
					
					<?php if (!isset($this->_block['files']) || !is_array($this->_block['files'])) $this->_block['files'] = array();
foreach ($this->_block['files'] as $files_key => $files_value) {
$_tmpb_files = &$this->_block['files'][$files_key]; ?>
					<div style="width:210px;height:90px;float:left;margin-top:5px;">
						<table style="border:0;">
							<tr>
								<td style="width:34px;vertical-align:top;">
									<?php if (isset($_tmpb_files['IMG'])) echo $_tmpb_files['IMG']; ?>
								</td>
								<td style="padding-top:8px;">	
									<a class="com" href="<?php if (isset($_tmpb_files['URL'])) echo $_tmpb_files['URL']; ?>" title="<?php if (isset($_tmpb_files['TITLE'])) echo $_tmpb_files['TITLE']; ?>"><span id="fi1<?php if (isset($_tmpb_files['ID'])) echo $_tmpb_files['ID']; ?>"><?php if (isset($_tmpb_files['NAME'])) echo $_tmpb_files['NAME']; ?></span></a><span id="fi<?php if (isset($_tmpb_files['ID'])) echo $_tmpb_files['ID']; ?>"></span><br />
									<?php if (isset($_tmpb_files['BBCODE'])) echo $_tmpb_files['BBCODE']; ?><br />							
									<span class="text_small"><?php if (isset($_tmpb_files['FILETYPE'])) echo $_tmpb_files['FILETYPE']; ?></span><br />
									<span class="text_small"><?php if (isset($_tmpb_files['SIZE'])) echo $_tmpb_files['SIZE']; ?></span><br />
									<?php if (isset($_tmpb_files['RENAME_FILE'])) echo $_tmpb_files['RENAME_FILE']; ?>
									<a href="upload.php?del=<?php if (isset($_tmpb_files['ID'])) echo $_tmpb_files['ID']; ?>&amp;f=<?php if (isset($this->_var['FOLDER_ID'])) echo $this->_var['FOLDER_ID']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN'];if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>" onclick="javascript:return Confirm_file();" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="" class="valign_middle" /></a> 
									
									<a href="upload<?php if (isset($_tmpb_files['U_MOVE'])) echo $_tmpb_files['U_MOVE']; ?>" title="<?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/move.png" alt="" class="valign_middle" /></a>								
									
									<?php if (isset($_tmpb_files['INSERT'])) echo $_tmpb_files['INSERT']; ?>
									<span id="imgf<?php if (isset($_tmpb_files['ID'])) echo $_tmpb_files['ID']; ?>"></span>
								</td>
							</tr>
						</table>
					</div>	
					<?php } ?>				
				</div>
			</td>
		</tr>
		
		<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
		<tr>
			<td class="row3">	
				<span id="errorh"></span>
				<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
					<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
					<br />	
				</div>
				<br />	
			</td>	
		</tr>
		<?php } ?>
		<tr>				
			<td class="row3" id="new_file">							
				<form action="upload.php?f=<?php if (isset($this->_var['FOLDER_ID'])) echo $this->_var['FOLDER_ID']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN'];if (isset($this->_var['POPUP'])) echo $this->_var['POPUP']; ?>" enctype="multipart/form-data" method="post">
					<span style="float:left">						
						<strong><?php if (isset($this->_var['L_ADD_FILES'])) echo $this->_var['L_ADD_FILES']; ?></strong>
						<br />
							<input type="file" name="upload_file" size="30" class="file" />					
							<input type="hidden" name="max_file_size" value="2000000" />
							<br />
							<input type="submit" name="valid_up" value="<?php if (isset($this->_var['L_UPLOAD'])) echo $this->_var['L_UPLOAD']; ?>" class="submit" />							
					</span>	
					<span style="float:right;text-align:right">
						<?php if (isset($this->_var['L_FOLDERS'])) echo $this->_var['L_FOLDERS']; ?>: <strong><span id="total_folder"><?php if (isset($this->_var['TOTAL_FOLDERS'])) echo $this->_var['TOTAL_FOLDERS']; ?></span></strong><br />
						<?php if (isset($this->_var['L_FILES'])) echo $this->_var['L_FILES']; ?>: <strong><?php if (isset($this->_var['TOTAL_FILES'])) echo $this->_var['TOTAL_FILES']; ?></strong><br />
						<?php if (isset($this->_var['L_FOLDER_SIZE'])) echo $this->_var['L_FOLDER_SIZE']; ?>: <strong><?php if (isset($this->_var['TOTAL_FOLDER_SIZE'])) echo $this->_var['TOTAL_FOLDER_SIZE']; ?></strong><br />
						<?php if (isset($this->_var['L_DATA'])) echo $this->_var['L_DATA']; ?>: <strong><?php if (isset($this->_var['TOTAL_SIZE'])) echo $this->_var['TOTAL_SIZE']; ?>/<?php if (isset($this->_var['SIZE_LIMIT'])) echo $this->_var['SIZE_LIMIT'];echo ' ';if (isset($this->_var['PERCENT'])) echo $this->_var['PERCENT']; ?></strong>
					</span>	
				</form>				
			</td>
		</tr>	
	</table>
	
	<?php if (isset($this->_var['FOOTER'])) echo $this->_var['FOOTER']; ?>
	