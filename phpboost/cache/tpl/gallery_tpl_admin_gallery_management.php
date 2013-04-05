		<link href="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/gallery.css" rel="stylesheet" type="text/css" media="screen, handheld">
		<script type="text/javascript" src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/js/lightbox.js"></script>
		<script type="text/javascript">
		<!--
		function Confirm_file() {
			return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_FILE'])) echo $this->_var['L_CONFIRM_DEL_FILE']; ?>");
		}	
		var previous_path_pics = '';
		function display_pics(id, path, type)
		{
			document.getElementById('pics_max').innerHTML = '';					
			if( previous_path_pics != path )
			{	
				document.getElementById('pics_max').innerHTML = '<img src="' + path + '" alt="" /></a>';	
				previous_path_pics = path;
			}
		}
		function display_pics_popup(path, width, height)
		{
			width = parseInt(width);
			height = parseInt(height);
			if( height == 0 )
				height = screen.height - 150;
			if( width == 0 )
				width = screen.width - 200;
			window.open(path, '', 'width='+(width+17)+', height='+(height+17)+', location=no, status=no, toolbar=no, scrollbars=1, resizable=yes');
		}
		function display_rename_file(id, previous_name, previous_cut_name)
		{
			if( document.getElementById('fi' + id) )
			{	
				document.getElementById('fi_' + id).style.display = 'none';
				document.getElementById('fi' + id).style.display = 'inline';
				document.getElementById('fi' + id).innerHTML = '<input size="27" type="text" name="fiinput' + id + '" id="fiinput' + id + '" class="text" value="' + previous_name.replace(/\"/g, "&quot;") + '" onblur="rename_file(\'' + id + '\', \'' + previous_cut_name.replace(/\'/g, "\\\'").replace(/\"/g, "&quot;") + '\');" />';
				document.getElementById('fiinput' + id).focus();
			}
		}	
		function rename_file(id_file, previous_cut_name)
		{
			var name = document.getElementById("fiinput" + id_file).value;
			var regex = /\/|\\|\||\?|<|>/;
			
			if( regex.test(name) ) //interdiction des caractères spéciaux dans la nom.
			{
				alert("<?php if (isset($this->_var['L_FILE_FORBIDDEN_CHARS'])) echo $this->_var['L_FILE_FORBIDDEN_CHARS']; ?>");	
				document.getElementById('fi_' + id_file).style.display = 'inline';
				document.getElementById('fi' + id_file).style.display = 'none';
			}
			else
			{
				document.getElementById('img' + id_file).innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" class="valign_middle" />';
				data = "id_file=" + id_file + "&name=" + name.replace(/&/g, "%26") + "&previous_name=" + previous_cut_name.replace(/&/g, "%26");
				var xhr_object = xmlhttprequest_init('xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&rename_pics=1&token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>');
				xhr_object.onreadystatechange = function() 
				{
					if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText != '0' )
					{
						document.getElementById('fi' + id_file).style.display = 'none';
						document.getElementById('fi_' + id_file).style.display = 'inline';
						document.getElementById('fi_' + id_file).innerHTML = xhr_object.responseText;
						
						html_protected_name = name.replace(/\'/g, "\\\'").replace(/\"/g, "&quot;");
						html_protected_name2 = xhr_object.responseText.replace(/\'/g, "\\\'").replace(/\"/g, "&quot;");
						
						document.getElementById('fihref' + id_file).innerHTML = '<a href="javascript:display_rename_file(\'' + id_file + '\', \'' + html_protected_name + '\', \'' + html_protected_name2 + '\');"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" class="valign_middle" /></a>';
						document.getElementById('img' + id_file).innerHTML = '';
					}
					else if( xhr_object.readyState == 4 && xhr_object.responseText == '0' )
						document.getElementById('img' + id_file).innerHTML = '';
				}
				xmlhttprequest_sender(xhr_object, data);
			}
		}
		function pics_aprob(id_file)
		{
			var regex = /\/|\\|\||\?|<|>|\"/;
			
			document.getElementById('img' + id_file).innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" class="valign_middle" />';

			data = "id_file=" + id_file;
			var xhr_object = xmlhttprequest_init('xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&aprob_pics=1&token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>');
			xhr_object.onreadystatechange = function() 
			{
				if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText != '-1' )
				{	
					var img_aprob;
					if( xhr_object.responseText == 0 )
						img_aprob = 'unvisible.png';
					else
						img_aprob = 'visible.png';
						
					document.getElementById('img' + id_file).innerHTML = '';
					if( document.getElementById('img_aprob' + id_file) )
						document.getElementById('img_aprob' + id_file).src = '../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/' + img_aprob;
				}
				else if( xhr_object.readyState == 4 && xhr_object.responseText == '-1' )
					document.getElementById('img' + id_file).innerHTML = '';
			}
			xmlhttprequest_sender(xhr_object, data);
		}
		
		var delay = 2000; //Délai après lequel le bloc est automatiquement masqué, après le départ de la souris.
		var timeout;
		var displayed = false;
		var previous = '';
		var started = false;
		
		//Affiche le bloc.
		function pics_display_block(divID)
		{
			if( timeout )
				clearTimeout(timeout);
			
			if( document.getElementById(previous) )
			{		
				document.getElementById(previous).style.display = 'none';
				started = false
			}	

			if( document.getElementById('move' + divID) )
			{			
				document.getElementById('move' + divID).style.display = 'block';
				previous = 'move' + divID;
				started = true;
			}
		}
		//Cache le bloc.
		function pics_hide_block(idfield, stop)
		{
			if( stop && timeout )
				clearTimeout(timeout);
			else if( started )
				timeout = setTimeout('pics_display_block()', delay);
		}
		
		<?php if (isset($this->_var['ARRAY_JS'])) echo $this->_var['ARRAY_JS']; ?>
		var start_thumb = <?php if (isset($this->_var['START_THUMB'])) echo $this->_var['START_THUMB']; ?>;
		//Miniatures défilantes.
		function display_thumbnails(direction)
		{			
			if( direction == 'left' )
			{	
				if( start_thumb > 0 )
				{
					start_thumb--;
					if( start_thumb == 0 )
						document.getElementById('display_left').innerHTML = '';
					else
						document.getElementById('display_left').innerHTML = '<a href="javascript:display_thumbnails(\'left\')"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/left.png" class="valign_middle" alt="" /></a>';
					document.getElementById('display_right').innerHTML = '<a href="javascript:display_thumbnails(\'right\')"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/right.png" class="valign_middle" alt="" /></a>';
				}
				else
					return;
			}
			else if( direction == 'right' )
			{
				if( start_thumb <= <?php if (isset($this->_var['MAX_START'])) echo $this->_var['MAX_START']; ?> )
				{
					start_thumb++;
					if( start_thumb == (<?php if (isset($this->_var['MAX_START'])) echo $this->_var['MAX_START']; ?> + 1) )
						document.getElementById('display_right').innerHTML = '';
					else
						document.getElementById('display_right').innerHTML = '<a href="javascript:display_thumbnails(\'right\')"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/right.png" class="valign_middle" alt="" /></a>';
					document.getElementById('display_left').innerHTML = '<a href="javascript:display_thumbnails(\'left\')"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/left.png" class="valign_middle" alt="" /></a>';
				}
				else
					return;
			}	
			
			var j = 0;
			for(var i = 0; i <= <?php if (isset($this->_var['NBR_PICS'])) echo $this->_var['NBR_PICS']; ?>; i++)
			{
				if( document.getElementById('thumb' + i) ) 
				{
					var key_left = start_thumb + j;
					var key_right = start_thumb + j;
					if( direction == 'left' && array_pics[key_left] )							
					{	
						document.getElementById('thumb' + i).innerHTML = '<a href="admin_gallery' + array_pics[key_left]['link'] + '"><img src="pics/thumbnails/' + array_pics[key_left]['path'] + '" alt="" /></a>';
						j++;
					}
					else if( direction == 'right' && array_pics[key_right] ) 
					{
						document.getElementById('thumb' + i).innerHTML = '<a href="admin_gallery' + array_pics[key_right]['link'] + '"><img 	src="pics/thumbnails/' + array_pics[key_right]['path'] + '" alt="" /></a>';				
						j++;
					}
				}
			}
		}
		-->
		</script>
		
		<div id="admin_quick_menu">
			<ul>
				<li class="title_menu"><?php if (isset($this->_var['L_GALLERY_MANAGEMENT'])) echo $this->_var['L_GALLERY_MANAGEMENT']; ?></li>
				<li>
					<a href="admin_gallery.php"><img src="gallery.png" alt="" /></a>
					<br />
					<a href="admin_gallery.php" class="quick_link"><?php if (isset($this->_var['L_GALLERY_MANAGEMENT'])) echo $this->_var['L_GALLERY_MANAGEMENT']; ?></a>
				</li>
				<li>
					<a href="admin_gallery_add.php"><img src="gallery.png" alt="" /></a>
					<br />
					<a href="admin_gallery_add.php" class="quick_link"><?php if (isset($this->_var['L_GALLERY_PICS_ADD'])) echo $this->_var['L_GALLERY_PICS_ADD']; ?></a>
				</li>
				<li>
					<a href="admin_gallery_cat.php"><img src="gallery.png" alt="" /></a>
					<br />
					<a href="admin_gallery_cat.php" class="quick_link"><?php if (isset($this->_var['L_GALLERY_CAT_MANAGEMENT'])) echo $this->_var['L_GALLERY_CAT_MANAGEMENT']; ?></a>
				</li>
				<li>
					<a href="admin_gallery_cat_add.php"><img src="gallery.png" alt="" /></a>
					<br />
					<a href="admin_gallery_cat_add.php" class="quick_link"><?php if (isset($this->_var['L_GALLERY_CAT_ADD'])) echo $this->_var['L_GALLERY_CAT_ADD']; ?></a>
				</li>
				<li>
					<a href="admin_gallery_config.php"><img src="gallery.png" alt="" /></a>
					<br />
					<a href="admin_gallery_config.php" class="quick_link"><?php if (isset($this->_var['L_GALLERY_CONFIG'])) echo $this->_var['L_GALLERY_CONFIG']; ?></a>
				</li>
			</ul>
		</div>
						 
		<div id="admin_contents">
			
			
			<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
				<span id="errorh"></span>
				<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
					<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
					<br />	
				</div>
				<br />	
			<?php }echo ' ';if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>

			<table class="module_table">
				<tr> 
					<th colspan="2">
						<?php if (isset($this->_var['L_GALLERY'])) echo $this->_var['L_GALLERY']; ?>
					</th>
				</tr>
				<tr>
					<td class="row2">				
						<p class="row3">
							<span style="float:left">
								<a href="admin_gallery.php"><?php if (isset($this->_var['L_GALLERY_MANAGEMENT'])) echo $this->_var['L_GALLERY_MANAGEMENT']; ?></a> &raquo; <?php if (isset($this->_var['U_GALLERY_CAT_LINKS'])) echo $this->_var['U_GALLERY_CAT_LINKS'];echo ' ';if (isset($this->_var['ADD_PICS'])) echo $this->_var['ADD_PICS']; ?>
							</span>
							<span style="float:right">
								<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
							</span>
							<br />
						</p>
						
						<?php if (!isset($this->_block['cat']) || !is_array($this->_block['cat'])) $this->_block['cat'] = array();
foreach ($this->_block['cat'] as $cat_key => $cat_value) {
$_tmpb_cat = &$this->_block['cat'][$cat_key]; ?>
						<table class="module_table">
							<tr>
								<th colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>">
									<?php if (isset($this->_var['L_CATEGORIES'])) echo $this->_var['L_CATEGORIES']; ?>
								</th>
							</tr>
								
							<?php if (!isset($_tmpb_cat['list']) || !is_array($_tmpb_cat['list'])) $_tmpb_cat['list'] = array();
foreach ($_tmpb_cat['list'] as $list_key => $list_value) {
$_tmpb_list = &$_tmpb_cat['list'][$list_key];echo ' ';if (isset($_tmpb_list['TR_START'])) echo $_tmpb_list['TR_START']; ?>								
								<td class="row2" style="vertical-align:bottom;text-align:center;width:<?php if (isset($this->_var['COLUMN_WIDTH_CATS'])) echo $this->_var['COLUMN_WIDTH_CATS']; ?>%">
									<a href="admin_gallery.php?cat=<?php if (isset($_tmpb_list['IDCAT'])) echo $_tmpb_list['IDCAT']; ?>"><?php if (isset($_tmpb_list['IMG'])) echo $_tmpb_list['IMG']; ?></a>
									
									<br />
									<a href="admin_gallery.php?cat=<?php if (isset($_tmpb_list['IDCAT'])) echo $_tmpb_list['IDCAT']; ?>"><?php if (isset($_tmpb_list['CAT'])) echo $_tmpb_list['CAT']; ?></a> <a href="admin_gallery_cat.php?id=<?php if (isset($_tmpb_list['IDCAT'])) echo $_tmpb_list['IDCAT']; ?>"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="" /></a> 
									<br />
									<?php if (isset($_tmpb_list['LOCK'])) echo $_tmpb_list['LOCK']; ?> <span class="text_small"><?php if (isset($_tmpb_list['L_NBR_PICS'])) echo $_tmpb_list['L_NBR_PICS']; ?></span> 
								</td>	
							<?php if (isset($_tmpb_list['TR_END'])) echo $_tmpb_list['TR_END'];echo ' ';}echo ' ';if (!isset($_tmpb_cat['end_td']) || !is_array($_tmpb_cat['end_td'])) $_tmpb_cat['end_td'] = array();
foreach ($_tmpb_cat['end_td'] as $end_td_key => $end_td_value) {
$_tmpb_end_td = &$_tmpb_cat['end_td'][$end_td_key];echo ' ';if (isset($_tmpb_end_td['TD_END'])) echo $_tmpb_end_td['TD_END'];echo ' ';if (isset($_tmpb_end_td['TR_END'])) echo $_tmpb_end_td['TR_END'];echo ' ';} ?>
							
						</table>	
						<?php } ?>
						
						<br />
						
						<?php if (!isset($this->_block['pics']) || !is_array($this->_block['pics'])) $this->_block['pics'] = array();
foreach ($this->_block['pics'] as $pics_key => $pics_value) {
$_tmpb_pics = &$this->_block['pics'][$pics_key]; ?>
						<p style="text-align:center">		
							<?php if (isset($this->_var['PAGINATION_PICS'])) echo $this->_var['PAGINATION_PICS']; ?><span id="pics_max"></span>
						</p>				
						<table class="module_table">				
							<tr>
								<th colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>">
									<?php if (isset($this->_var['GALLERY'])) echo $this->_var['GALLERY'];echo ' ';if (isset($_tmpb_pics['EDIT'])) echo $_tmpb_pics['EDIT']; ?>
								</th>
							</tr>
							<tr>
								<td colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>" style="text-align:center;" class="row2">
									<?php if (isset($_tmpb_pics['PICS_MAX'])) echo $_tmpb_pics['PICS_MAX']; ?>
								</td>
							</tr>
							
							<?php if (!isset($_tmpb_pics['pics_max']) || !is_array($_tmpb_pics['pics_max'])) $_tmpb_pics['pics_max'] = array();
foreach ($_tmpb_pics['pics_max'] as $pics_max_key => $pics_max_value) {
$_tmpb_pics_max = &$_tmpb_pics['pics_max'][$pics_max_key]; ?>
							<tr>
								<td colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>" class="row1">
									<table style="border-collapse:collapse;margin:auto;width:400px" class="row2">
										<tr>
											<td>
												&nbsp;&nbsp;&nbsp;<?php if (isset($_tmpb_pics_max['U_PREVIOUS'])) echo $_tmpb_pics_max['U_PREVIOUS']; ?> 
											</td>	
											<td style="text-align:right;">
												<?php if (isset($_tmpb_pics_max['U_NEXT'])) echo $_tmpb_pics_max['U_NEXT']; ?>&nbsp;&nbsp;&nbsp;
											</td>
										</tr>
									</table>
									<br />
									<table style="border-collapse:collapse;margin:auto;width:100%" class="row2">
										<tr>
											<th colspan="2">
												<?php if (isset($this->_var['L_INFORMATIONS'])) echo $this->_var['L_INFORMATIONS']; ?>
											</th>
										</tr>
										<tr>
											<td class="row2 text_small" style="width:50%;border:none;padding:4px;">
												<strong><?php if (isset($this->_var['L_NAME'])) echo $this->_var['L_NAME']; ?>:</strong> <?php if (isset($_tmpb_pics_max['NAME'])) echo $_tmpb_pics_max['NAME']; ?>
											</td>
											<td class="row2 text_small" style="border:none;padding:4px;">
												<strong><?php if (isset($this->_var['L_POSTOR'])) echo $this->_var['L_POSTOR']; ?>:</strong> <?php if (isset($_tmpb_pics_max['POSTOR'])) echo $_tmpb_pics_max['POSTOR']; ?>
											</td>
										</tr>
										<tr>										
											<td class="row2 text_small" style="border:none;padding:4px;">
												<strong><?php if (isset($this->_var['L_VIEWS'])) echo $this->_var['L_VIEWS']; ?>:</strong> <?php if (isset($_tmpb_pics_max['VIEWS'])) echo $_tmpb_pics_max['VIEWS']; ?>
											</td>
											<td class="row2 text_small" style="border:none;padding:4px;">
												<strong><?php if (isset($this->_var['L_ADD_ON'])) echo $this->_var['L_ADD_ON']; ?>:</strong> <?php if (isset($_tmpb_pics_max['DATE'])) echo $_tmpb_pics_max['DATE']; ?>
											</td>
										</tr>
										<tr>										
											<td class="row2 text_small" style="border:none;padding:4px;">
												<strong><?php if (isset($this->_var['L_DIMENSION'])) echo $this->_var['L_DIMENSION']; ?>:</strong> <?php if (isset($_tmpb_pics_max['DIMENSION'])) echo $_tmpb_pics_max['DIMENSION']; ?>
											</td>
											<td class="row2 text_small" style="border:none;padding:4px;">
												<strong><?php if (isset($this->_var['L_SIZE'])) echo $this->_var['L_SIZE']; ?>:</strong> <?php if (isset($_tmpb_pics_max['SIZE'])) echo $_tmpb_pics_max['SIZE']; ?> Ko
											</td>
										</tr>
										<tr>										
											<td colspan="2" class="row2 text_small" style="border:none;padding:4px;">
												&nbsp;&nbsp;&nbsp;<span id="fihref<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>"><a href="javascript:display_rename_file('<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>', '<?php if (isset($_tmpb_pics_max['RENAME'])) echo $_tmpb_pics_max['RENAME']; ?>', '<?php if (isset($_tmpb_pics_max['RENAME_CUT'])) echo $_tmpb_pics_max['RENAME_CUT']; ?>');"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>" class="valign_middle" /></a></span>
												
												<a href="gallery<?php if (isset($_tmpb_pics_max['U_DEL'])) echo $_tmpb_pics_max['U_DEL']; ?>" onclick="javascript:return Confirm_file();" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" class="valign_middle" /></a> 
									
												<div style="position:absolute;z-index:100;margin-top:110px;float:left;display:none;" id="move<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>">
													<div class="bbcode_block" style="width:190px;overflow:auto;" onmouseover="pics_hide_block(<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>, 1);" onmouseout="pics_hide_block(<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>, 0);">
														<div style="margin-bottom:4px;"><strong><?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?></strong>:</div>
														<select class="valign_middle" name="<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>cat" onchange="document.location = 'gallery<?php if (isset($_tmpb_pics_max['U_MOVE'])) echo $_tmpb_pics_max['U_MOVE']; ?>">
															<?php if (isset($_tmpb_pics_max['CAT'])) echo $_tmpb_pics_max['CAT']; ?>
														</select>
														<br /><br />
													</div>
												</div>
												<a href="javascript:pics_display_block(<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>);" onmouseover="pics_hide_block(<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>, 1);" onmouseout="pics_hide_block(<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>, 0);" class="bbcode_hover" title="<?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/move.png" alt="" class="valign_middle" /></a>
												
												
												<a href="javascript:pics_aprob(<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>);" title="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>"><img id="img_aprob<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($_tmpb_pics_max['IMG_APROB'])) echo $_tmpb_pics_max['IMG_APROB']; ?>" alt="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>" title="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>" class="valign_middle" /></a>
												&nbsp;<span id="img<?php if (isset($_tmpb_pics_max['ID'])) echo $_tmpb_pics_max['ID']; ?>"></span>
											</td>
										</tr>
									</table>
									
									<br /><br />
									
									<table class="module_table" style="width:100%;">
										<tr>
											<th colspan="<?php if (isset($_tmpb_pics_max['COLSPAN'])) echo $_tmpb_pics_max['COLSPAN']; ?>">
												<?php if (isset($this->_var['L_THUMBNAILS'])) echo $this->_var['L_THUMBNAILS']; ?>
											</th>
										</tr>
										<tr>
											<td class="row2" style="width:50px;text-align:center">
												<?php if (isset($_tmpb_pics_max['U_LEFT_THUMBNAILS'])) echo $_tmpb_pics_max['U_LEFT_THUMBNAILS']; ?>
											</td>
											
											<?php if (!isset($_tmpb_pics_max['list_preview_pics']) || !is_array($_tmpb_pics_max['list_preview_pics'])) $_tmpb_pics_max['list_preview_pics'] = array();
foreach ($_tmpb_pics_max['list_preview_pics'] as $list_preview_pics_key => $list_preview_pics_value) {
$_tmpb_list_preview_pics = &$_tmpb_pics_max['list_preview_pics'][$list_preview_pics_key];echo ' ';if (isset($_tmpb_list_preview_pics['PICS'])) echo $_tmpb_list_preview_pics['PICS'];echo ' ';} ?>
											
											<td class="row2" style="width:50px;text-align:center">
												<?php if (isset($_tmpb_pics_max['U_RIGHT_THUMBNAILS'])) echo $_tmpb_pics_max['U_RIGHT_THUMBNAILS']; ?>
											</td>
										</tr>
									</table>
									
									<br />
									<?php $this->_include('handle_com'); ?>
								</td>
							</tr>
							<?php }echo ' ';if (!isset($_tmpb_pics['list']) || !is_array($_tmpb_pics['list'])) $_tmpb_pics['list'] = array();
foreach ($_tmpb_pics['list'] as $list_key => $list_value) {
$_tmpb_list = &$_tmpb_pics['list'][$list_key];echo ' ';if (isset($_tmpb_list['TR_START'])) echo $_tmpb_list['TR_START']; ?>
								<td class="row2" style="padding:6px;text-align:center;width:<?php if (isset($this->_var['COLUMN_WIDTH_PICS'])) echo $this->_var['COLUMN_WIDTH_PICS']; ?>%">
									<table style="border:0;margin:auto;">
										<tr>
											<td style="height:<?php if (isset($this->_var['HEIGHT_MAX'])) echo $this->_var['HEIGHT_MAX']; ?>px;">
												<span id="pics<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>"><a class="com" href="<?php if (isset($_tmpb_list['U_DISPLAY'])) echo $_tmpb_list['U_DISPLAY']; ?>" title="<?php if (isset($_tmpb_list['TITLE'])) echo $_tmpb_list['TITLE']; ?>" rel="lightbox"><?php if (isset($_tmpb_list['IMG'])) echo $_tmpb_list['IMG']; ?></a></span>
											</td>
										</tr>
										<tr>
											<td style="text-align:center;" class="text_small">
												<a class="com" href="<?php if (isset($_tmpb_list['U_DISPLAY'])) echo $_tmpb_list['U_DISPLAY']; ?>" title="<?php if (isset($_tmpb_list['TITLE'])) echo $_tmpb_list['TITLE']; ?>" rel="lightbox"><span id="fi_<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>"><?php if (isset($_tmpb_list['NAME'])) echo $_tmpb_list['NAME']; ?></span></a> <span id="fi<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>"></span>
												<br />
												<?php if (isset($_tmpb_list['U_POSTOR'])) echo $_tmpb_list['U_POSTOR']; ?>
											</td>
										</tr>									
										<tr>
											<td style="text-align:center;">
												<?php if (isset($_tmpb_list['RENAME_FILE'])) echo $_tmpb_list['RENAME_FILE']; ?>
												
												<a href="admin_gallery.php?del=<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&amp;cat=<?php if (isset($this->_var['CAT_ID'])) echo $this->_var['CAT_ID']; ?>" onclick="javascript:return Confirm_file();" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" class="valign_middle" /></a>
									
												<div style="position:absolute;z-index:100;margin-top:110px;float:left;display:none;" id="move<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>">
													<div class="bbcode_block" style="width:190px;overflow:auto;" onmouseover="pics_hide_block(<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>, 1);" onmouseout="pics_hide_block(<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>, 0);">
														<div style="margin-bottom:4px;"><strong><?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?></strong>:</div>
														<select class="valign_middle" name="<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>cat" onchange="document.location = 'admin_gallery.php?id=<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&amp;move=' + this.options[this.selectedIndex].value">
															<?php if (isset($_tmpb_list['CAT'])) echo $_tmpb_list['CAT']; ?>
														</select>
														<br /><br />
													</div>
												</div>
												<a href="javascript:pics_display_block(<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>);" onmouseover="pics_hide_block(<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>, 1);" onmouseout="pics_hide_block(<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>, 0);" class="bbcode_hover" title="<?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/move.png" alt="" class="valign_middle" /></a>
												
												
												<a href="javascript:pics_aprob(<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>);" title="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>"><img id="img_aprob<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/<?php if (isset($_tmpb_list['IMG_APROB'])) echo $_tmpb_list['IMG_APROB']; ?>" alt="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>" title="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>" class="valign_middle" /></a>
												&nbsp;<span id="img<?php if (isset($_tmpb_list['ID'])) echo $_tmpb_list['ID']; ?>"></span>
											</td>
										</tr>
									</table>
								</td>
							<?php if (isset($_tmpb_list['TR_END'])) echo $_tmpb_list['TR_END'];echo ' ';}echo ' ';if (!isset($_tmpb_pics['end_td_pics']) || !is_array($_tmpb_pics['end_td_pics'])) $_tmpb_pics['end_td_pics'] = array();
foreach ($_tmpb_pics['end_td_pics'] as $end_td_pics_key => $end_td_pics_value) {
$_tmpb_end_td_pics = &$_tmpb_pics['end_td_pics'][$end_td_pics_key];echo ' ';if (isset($_tmpb_end_td_pics['TD_END'])) echo $_tmpb_end_td_pics['TD_END'];echo ' ';if (isset($_tmpb_end_td_pics['TR_END'])) echo $_tmpb_end_td_pics['TR_END'];echo ' ';} ?>
							
						</table>	
						
						<p style="text-align:center">		
							<?php if (isset($this->_var['PAGINATION_PICS'])) echo $this->_var['PAGINATION_PICS']; ?>
						</p>			
						<?php } ?>
						
						<p style="text-align:center" class="text_small">
							<?php if (isset($this->_var['L_TOTAL_IMG'])) echo $this->_var['L_TOTAL_IMG']; ?>
						</p>	

						<p class="row3">
							<span style="float:left">
								<a href="admin_gallery.php"><?php if (isset($this->_var['L_GALLERY_MANAGEMENT'])) echo $this->_var['L_GALLERY_MANAGEMENT']; ?></a> &raquo; <?php if (isset($this->_var['U_GALLERY_CAT_LINKS'])) echo $this->_var['U_GALLERY_CAT_LINKS'];echo ' ';if (isset($this->_var['ADD_PICS'])) echo $this->_var['ADD_PICS']; ?>
							</span>
							<span style="float:right">
								<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
							</span>
							<br />
						</p>				
					</td>
				</tr>
			</table>
		</div>	