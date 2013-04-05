		<script type="text/javascript" src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/js/lightbox.js"></script>

		<script type="text/javascript">
		<!--		
		function Confirm_file() {
			return confirm("<?php if (isset($this->_var['L_CONFIRM_DEL_FILE'])) echo $this->_var['L_CONFIRM_DEL_FILE']; ?>");
		}			
		var pics_displayed = 0;
		function display_pics(id, path)
		{
			if( pics_displayed != id )
			{	
				document.getElementById('pics_max').innerHTML = '<img src="' + path + '" alt="" />';	
				pics_displayed = id;
			}
			else
			{
				document.getElementById('pics_max').innerHTML = '';	
				pics_displayed = 0;
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

			if( regex.test(name) ) //interdiction des caractères spéciaux dans le nom.
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
		function pics_aprob(id_file, aprob)
		{
			document.getElementById('img' + id_file).innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" class="valign_middle" />';

			data = 'id_file=' + id_file;
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
		
		var delay = 2000; //Délai après lequel le bloc est automatiquement masqué après le départ de la souris.
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
						document.getElementById('thumb' + i).innerHTML = '<a href="gallery' + array_pics[key_left]['link'] + '"><img src="pics/thumbnails/' + array_pics[key_left]['path'] + '" alt="" /></a>';
						j++;
					}
					else if( direction == 'right' && array_pics[key_right] ) 
					{
						document.getElementById('thumb' + i).innerHTML = '<a href="gallery' + array_pics[key_right]['link'] + '"><img 	src="pics/thumbnails/' + array_pics[key_right]['path'] + '" alt="" /></a>';				
						j++;
					}
				}
			}
		}	
		//incrément le nombre de vues d'une image.
		var already_view = false;
		var incr_pics_displayed = 0;
		function increment_view(idpics)
		{
			if (<?php if (isset($this->_var['DISPLAY_MODE'])) echo $this->_var['DISPLAY_MODE']; ?> == 1 && incr_pics_displayed == idpics)
				incr_pics_displayed = 0;
			else
			{
				if (document.getElementById('gv' + idpics))
				{	
					if (already_view && (<?php if (isset($this->_var['DISPLAY_MODE'])) echo $this->_var['DISPLAY_MODE']; ?> == 3 || <?php if (isset($this->_var['DISPLAY_MODE'])) echo $this->_var['DISPLAY_MODE']; ?> == 1))
					{
						data = '';
						var xhr_object = xmlhttprequest_init('xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&id=' + idpics + '&cat=<?php if (isset($this->_var['CAT_ID'])) echo $this->_var['CAT_ID']; ?>&increment_view=1');
						xmlhttprequest_sender(xhr_object, data);
					}

					var views = 0;
					views = document.getElementById('gv' + idpics).innerHTML;
					views++;
					document.getElementById('gv' + idpics).innerHTML = views;
					document.getElementById('gvl' + idpics).innerHTML = (views > 1) ? "<?php if (isset($this->_var['L_VIEWS'])) echo $this->_var['L_VIEWS']; ?>" : "<?php if (isset($this->_var['L_VIEW'])) echo $this->_var['L_VIEW']; ?>";

					already_view = true;
					incr_pics_displayed = idpics;
				}
			}
		}	
		-->
		</script> 

		<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
		<span id="errorh"></span>
		<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
			<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
			<br />	
		</div>
		<br />	
		<?php } ?>

		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">
				<div style="float:left">
					<a href="gallery.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_GALLERY'])) echo $this->_var['L_GALLERY']; ?></a> &raquo; <?php if (isset($this->_var['U_GALLERY_CAT_LINKS'])) echo $this->_var['U_GALLERY_CAT_LINKS'];echo ' ';if (isset($this->_var['ADD_PICS'])) echo $this->_var['ADD_PICS']; ?>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
				</div>
			</div>
			<div class="module_contents">
				<div style="margin-bottom:50px;">
					<div class="dynamic_menu" style="float:right;margin-right:55px;">
						<ul>
							<li onmouseover="show_menu(1, 0);" onmouseout="hide_menu(0);">
								<h5 style="margin-right:20px;"><img src="../wiki/templates/images/contribuate.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_DISPLAY'])) echo $this->_var['L_DISPLAY']; ?></h5>
								<ul id="smenu1">
									<li><?php if (isset($this->_var['U_BEST_VIEWS'])) echo $this->_var['U_BEST_VIEWS']; ?></li>
									<li><?php if (isset($this->_var['U_BEST_NOTES'])) echo $this->_var['U_BEST_NOTES']; ?></li>
								</ul>
							</li>
							<li onmouseover="show_menu(2, 0);" onmouseout="hide_menu(0);">
								<h5 style="margin-right:20px;"><img src="../wiki/templates/images/tools.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_ORDER_BY'])) echo $this->_var['L_ORDER_BY']; ?></h5>
								<ul id="smenu2">
									<?php if (!isset($this->_block['order']) || !is_array($this->_block['order'])) $this->_block['order'] = array();
foreach ($this->_block['order'] as $order_key => $order_value) {
$_tmpb_order = &$this->_block['order'][$order_key]; ?>
									<li><?php if (isset($_tmpb_order['ORDER_BY'])) echo $_tmpb_order['ORDER_BY']; ?></li>
									<?php } ?>
								</ul>
							</li>
							<li onmouseover="show_menu(3, 0);" onmouseout="hide_menu(0);">
								<h5 style="margin-right:5px;"><img src="../wiki/templates/images/tools.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_DIRECTION'])) echo $this->_var['L_DIRECTION']; ?></h5>
								<ul id="smenu3">
									<li><?php if (isset($this->_var['U_ASC'])) echo $this->_var['U_ASC']; ?></li>
									<li><?php if (isset($this->_var['U_DESC'])) echo $this->_var['U_DESC']; ?></li>	
								</ul>
							</li>
						</ul>
					</div>
				</div>
				
				<?php if (isset($this->_var['C_GALLERY_CATS']) && $this->_var['C_GALLERY_CATS']) { ?>
				<div class="block_container">
					<div class="block_top"><?php if (isset($this->_var['L_CATEGORIES'])) echo $this->_var['L_CATEGORIES'];echo ' ';if (isset($this->_var['EDIT_CAT'])) echo $this->_var['EDIT_CAT']; ?></div>
					<div class="block_contents">
						<table style="width:100%">
							<?php if (!isset($this->_block['cat_list']) || !is_array($this->_block['cat_list'])) $this->_block['cat_list'] = array();
foreach ($this->_block['cat_list'] as $cat_list_key => $cat_list_value) {
$_tmpb_cat_list = &$this->_block['cat_list'][$cat_list_key];echo ' ';if (isset($_tmpb_cat_list['OPEN_TR'])) echo $_tmpb_cat_list['OPEN_TR']; ?>								
							<td style="vertical-align:bottom;text-align:center;width:<?php if (isset($this->_var['COLUMN_WIDTH_CATS'])) echo $this->_var['COLUMN_WIDTH_CATS']; ?>%;margin:15px 0px;">
								<a href="gallery<?php if (isset($_tmpb_cat_list['U_CAT'])) echo $_tmpb_cat_list['U_CAT']; ?>"><?php if (isset($_tmpb_cat_list['IMG'])) echo $_tmpb_cat_list['IMG']; ?></a>
								<br />
								<a href="gallery<?php if (isset($_tmpb_cat_list['U_CAT'])) echo $_tmpb_cat_list['U_CAT']; ?>"><?php if (isset($_tmpb_cat_list['CAT'])) echo $_tmpb_cat_list['CAT']; ?></a> <?php if (isset($_tmpb_cat_list['EDIT'])) echo $_tmpb_cat_list['EDIT']; ?>
								<br />
								<span class="text_small"><?php if (isset($_tmpb_cat_list['DESC'])) echo $_tmpb_cat_list['DESC']; ?></span> 
								<br />
								<?php if (isset($_tmpb_cat_list['LOCK'])) echo $_tmpb_cat_list['LOCK']; ?> <span class="text_small"><?php if (isset($_tmpb_cat_list['L_NBR_PICS'])) echo $_tmpb_cat_list['L_NBR_PICS']; ?></span>
							</td>	
							<?php if (isset($_tmpb_cat_list['CLOSE_TR'])) echo $_tmpb_cat_list['CLOSE_TR'];echo ' ';}echo ' ';if (!isset($this->_block['end_table_cats']) || !is_array($this->_block['end_table_cats'])) $this->_block['end_table_cats'] = array();
foreach ($this->_block['end_table_cats'] as $end_table_cats_key => $end_table_cats_value) {
$_tmpb_end_table_cats = &$this->_block['end_table_cats'][$end_table_cats_key];echo ' ';if (isset($_tmpb_end_table_cats['TD_END'])) echo $_tmpb_end_table_cats['TD_END'];echo ' ';if (isset($_tmpb_end_table_cats['TR_END'])) echo $_tmpb_end_table_cats['TR_END'];echo ' ';} ?>
						</table>
					</div>
				</div>
				<?php }echo ' ';if (isset($this->_var['C_GALLERY_PICS']) && $this->_var['C_GALLERY_PICS']) { ?>
				<div class="block_container">
					<div class="block_top"><?php if (isset($this->_var['GALLERY'])) echo $this->_var['GALLERY'];echo ' ';if (isset($this->_var['EDIT'])) echo $this->_var['EDIT']; ?></div>
					<div class="block_contents">
						<p style="text-align:center" id="pics_max"><?php if (isset($this->_var['PAGINATION_PICS'])) echo $this->_var['PAGINATION_PICS']; ?></p>				
						
						<?php if (isset($this->_var['C_GALLERY_PICS_MAX']) && $this->_var['C_GALLERY_PICS_MAX']) { ?>
							<p style="text-align:center;padding:15px 0px;overflow:auto;"><?php if (isset($this->_var['IMG_MAX'])) echo $this->_var['IMG_MAX']; ?></p>
							<div style="margin:auto;width:400px;height:32px;padding:0;" class="row2">
								<span style="float:left">&nbsp;&nbsp;&nbsp;<?php if (isset($this->_var['U_PREVIOUS'])) echo $this->_var['U_PREVIOUS']; ?></span>
								<span style="float:right"><?php if (isset($this->_var['U_NEXT'])) echo $this->_var['U_NEXT']; ?>&nbsp;&nbsp;&nbsp;</span>
							</div>
							<br />
							<table class="module_table" style="width:100%">
								<tr>
									<th colspan="2">
										<?php if (isset($this->_var['L_INFORMATIONS'])) echo $this->_var['L_INFORMATIONS']; ?>
									</th>
								</tr>
								<tr>
									<td class="row2 text_small" style="width:50%;border:none;padding:4px;">
										<strong><?php if (isset($this->_var['L_NAME'])) echo $this->_var['L_NAME']; ?>:</strong> <?php if (isset($this->_var['NAME'])) echo $this->_var['NAME']; ?>
									</td>
									<td class="row2 text_small" style="border:none;padding:4px;">
										<strong><?php if (isset($this->_var['L_POSTOR'])) echo $this->_var['L_POSTOR']; ?>:</strong> <?php if (isset($this->_var['POSTOR'])) echo $this->_var['POSTOR']; ?>
									</td>
								</tr>
								<tr>										
									<td class="row2 text_small" style="border:none;padding:4px;">
										<strong><?php if (isset($this->_var['L_VIEWS'])) echo $this->_var['L_VIEWS']; ?>:</strong> <?php if (isset($this->_var['VIEWS'])) echo $this->_var['VIEWS']; ?>
									</td>
									<td class="row2 text_small" style="border:none;padding:4px;">
										<strong><?php if (isset($this->_var['L_ADD_ON'])) echo $this->_var['L_ADD_ON']; ?>:</strong> <?php if (isset($this->_var['DATE'])) echo $this->_var['DATE']; ?>
									</td>
								</tr>
								<tr>										
									<td class="row2 text_small" style="border:none;padding:4px;">
										<strong><?php if (isset($this->_var['L_DIMENSION'])) echo $this->_var['L_DIMENSION']; ?>:</strong> <?php if (isset($this->_var['DIMENSION'])) echo $this->_var['DIMENSION']; ?>
									</td>
									<td class="row2 text_small" style="border:none;padding:4px;">
										<strong><?php if (isset($this->_var['L_SIZE'])) echo $this->_var['L_SIZE']; ?>:</strong> <?php if (isset($this->_var['SIZE'])) echo $this->_var['SIZE'];echo ' ';if (isset($this->_var['L_KB'])) echo $this->_var['L_KB']; ?>
									</td>
								</tr>
								<tr>										
									<td class="row2 text_small" style="border:none;padding:4px;">
										<?php if (isset($this->_var['KERNEL_NOTATION'])) echo $this->_var['KERNEL_NOTATION']; ?>
									</td>
									<td class="row2 text_small" style="border:none;padding:4px;vertical-align:top">
										<strong><?php if (isset($this->_var['L_COM'])) echo $this->_var['L_COM']; ?>:</strong> <?php if (isset($this->_var['COM'])) echo $this->_var['COM']; ?>
									</td>
								</tr>
								
								<?php if (isset($this->_var['C_GALLERY_PICS_MODO']) && $this->_var['C_GALLERY_PICS_MODO']) { ?>
								<tr>										
									<td colspan="2" class="row2 text_small" style="border:none;padding:4px;">
										&nbsp;&nbsp;&nbsp;<span id="fihref<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>"><a href="javascript:display_rename_file('<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>', '<?php if (isset($this->_var['RENAME'])) echo $this->_var['RENAME']; ?>', '<?php if (isset($this->_var['RENAME_CUT'])) echo $this->_var['RENAME_CUT']; ?>');"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>" class="valign_middle" /></a></span>									
										<a href="gallery<?php if (isset($this->_var['U_DEL'])) echo $this->_var['U_DEL']; ?>" onclick="javascript:return Confirm_file();" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" class="valign_middle" /></a> 						
										<div style="position:absolute;z-index:100;margin-top:95px;float:left;display:none;" id="move<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>">
											<div class="bbcode_block" style="width:190px;overflow:auto;" onmouseover="pics_hide_block(<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>, 1);" onmouseout="pics_hide_block(<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>, 0);">
												<div style="margin-bottom:4px;"><strong><?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?></strong>:</div>
												<select class="valign_middle" name="<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>cat" onchange="document.location = 'gallery<?php if (isset($this->_var['U_MOVE'])) echo $this->_var['U_MOVE']; ?>">
													<?php if (isset($this->_var['CAT'])) echo $this->_var['CAT']; ?>
												</select>
												<br /><br />
											</div>
										</div>
										<a href="javascript:pics_display_block(<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>);" onmouseover="pics_hide_block(<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>, 1);" onmouseout="pics_hide_block(<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>, 0);" class="bbcode_hover" title="<?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/move.png" alt="" class="valign_middle" /></a>
										
										
										<a href="javascript:pics_aprob(<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>);" title="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>"><img id="img_aprob<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['IMG_APROB'])) echo $this->_var['IMG_APROB']; ?>" alt="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>" title="<?php if (isset($this->_var['L_APROB_IMG'])) echo $this->_var['L_APROB_IMG']; ?>" class="valign_middle" /></a>
										&nbsp;<span id="img<?php if (isset($this->_var['ID'])) echo $this->_var['ID']; ?>"></span>
									</td>
								</tr>
								<?php } ?>						
							</table>					
							<br /><br />					
							<table class="module_table" style="width:100%;">
								<tr>
									<th colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>">
										<?php if (isset($this->_var['L_THUMBNAILS'])) echo $this->_var['L_THUMBNAILS']; ?>
									</th>
								</tr>
								<tr>
									<td class="row2" style="width:50px;text-align:center">
										<?php if (isset($this->_var['U_LEFT_THUMBNAILS'])) echo $this->_var['U_LEFT_THUMBNAILS']; ?>
									</td>
									
									<?php if (!isset($this->_block['list_preview_pics']) || !is_array($this->_block['list_preview_pics'])) $this->_block['list_preview_pics'] = array();
foreach ($this->_block['list_preview_pics'] as $list_preview_pics_key => $list_preview_pics_value) {
$_tmpb_list_preview_pics = &$this->_block['list_preview_pics'][$list_preview_pics_key];echo ' ';if (isset($_tmpb_list_preview_pics['PICS'])) echo $_tmpb_list_preview_pics['PICS'];echo ' ';} ?>
									
									<td class="row2" style="width:50px;text-align:center">
										<?php if (isset($this->_var['U_RIGHT_THUMBNAILS'])) echo $this->_var['U_RIGHT_THUMBNAILS']; ?>
									</td>
								</tr>
							</table>
						<?php if (isset($this->_var['COMMENTS'])) echo $this->_var['COMMENTS'];echo ' ';} ?>
						
						<table class="module_table">
							<?php if (!isset($this->_block['pics_list']) || !is_array($this->_block['pics_list'])) $this->_block['pics_list'] = array();
foreach ($this->_block['pics_list'] as $pics_list_key => $pics_list_value) {
$_tmpb_pics_list = &$this->_block['pics_list'][$pics_list_key];echo ' ';if (isset($_tmpb_pics_list['OPEN_TR'])) echo $_tmpb_pics_list['OPEN_TR']; ?>
								<td style="width:<?php if (isset($this->_var['COLUMN_WIDTH_PICS'])) echo $this->_var['COLUMN_WIDTH_PICS']; ?>%;text-align:center;padding:15px 0px;vertical-align:middle" class="text_small">
									<div style="margin-bottom:5px;" id="pics<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>"><a class="small_link" href="<?php if (isset($_tmpb_pics_list['U_DISPLAY'])) echo $_tmpb_pics_list['U_DISPLAY']; ?>"><?php if (isset($_tmpb_pics_list['IMG'])) echo $_tmpb_pics_list['IMG']; ?></a></div>
									<?php if (isset($_tmpb_pics_list['NAME'])) echo $_tmpb_pics_list['NAME'];echo ' ';if (isset($_tmpb_pics_list['POSTOR'])) echo $_tmpb_pics_list['POSTOR'];echo ' ';if (isset($_tmpb_pics_list['VIEWS'])) echo $_tmpb_pics_list['VIEWS'];echo ' ';if (isset($_tmpb_pics_list['COM'])) echo $_tmpb_pics_list['COM'];echo ' ';if (isset($_tmpb_pics_list['KERNEL_NOTATION'])) echo $_tmpb_pics_list['KERNEL_NOTATION']; ?>
										
									<div style="width:180px;margin:auto;">										
										<?php if (isset($this->_var['C_GALLERY_MODO']) && $this->_var['C_GALLERY_MODO']) { ?>
										<span id="fihref<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>"><a href="javascript:display_rename_file('<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>', '<?php if (isset($_tmpb_pics_list['RENAME'])) echo $_tmpb_pics_list['RENAME']; ?>', '<?php if (isset($_tmpb_pics_list['RENAME_CUT'])) echo $_tmpb_pics_list['RENAME_CUT']; ?>');" title="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/edit.png" alt="<?php if (isset($this->_var['L_EDIT'])) echo $this->_var['L_EDIT']; ?>" class="valign_middle" /></a></span>									
										<a href="gallery<?php if (isset($_tmpb_pics_list['U_DEL'])) echo $_tmpb_pics_list['U_DEL']; ?>" onclick="javascript:return Confirm_file();" title="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>/delete.png" alt="<?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?>" class="valign_middle" /></a>									
										<div style="position:relative;margin:auto;width:170px;display:none;float:right" onmouseover="pics_hide_block(<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>, 1);" onmouseout="pics_hide_block(<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>, 0);" id="move<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>">
											<div style="position:absolute;z-index:100;margin-top:90px;">
												<div class="bbcode_block" style="width:170px;overflow:auto;">
													<div style="margin-bottom:4px;" class="text_small"><strong><?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?></strong>:</div>
													<select class="valign_middle" name="<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>cat" onchange="document.location = 'gallery<?php if (isset($_tmpb_pics_list['U_MOVE'])) echo $_tmpb_pics_list['U_MOVE']; ?>">
														<?php if (isset($_tmpb_pics_list['CAT'])) echo $_tmpb_pics_list['CAT']; ?>
													</select>
													<br /><br />
												</div>
											</div>
										</div>
										<a href="javascript:pics_display_block(<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>);" onmouseover="pics_hide_block(<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>, 1);" onmouseout="pics_hide_block(<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>, 0);" class="bbcode_hover" title="<?php if (isset($this->_var['L_MOVETO'])) echo $this->_var['L_MOVETO']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/move.png" alt="" class="valign_middle" /></a>
											
										<a href="javascript:pics_aprob(<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>);" title="<?php if (isset($_tmpb_pics_list['L_APROB_IMG'])) echo $_tmpb_pics_list['L_APROB_IMG']; ?>"><img id="img_aprob<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($_tmpb_pics_list['IMG_APROB'])) echo $_tmpb_pics_list['IMG_APROB']; ?>" alt="<?php if (isset($_tmpb_pics_list['L_APROB_IMG'])) echo $_tmpb_pics_list['L_APROB_IMG']; ?>" title="<?php if (isset($_tmpb_pics_list['L_APROB_IMG'])) echo $_tmpb_pics_list['L_APROB_IMG']; ?>" class="valign_middle" /></a>
										<?php } ?>											
										<span id="img<?php if (isset($_tmpb_pics_list['ID'])) echo $_tmpb_pics_list['ID']; ?>"></span>										
									</div>
								</td>
								<?php if (isset($_tmpb_pics_list['CLOSE_TR'])) echo $_tmpb_pics_list['CLOSE_TR'];echo ' ';}echo ' ';if (!isset($this->_block['end_table']) || !is_array($this->_block['end_table'])) $this->_block['end_table'] = array();
foreach ($this->_block['end_table'] as $end_table_key => $end_table_value) {
$_tmpb_end_table = &$this->_block['end_table'][$end_table_key];echo ' ';if (isset($_tmpb_end_table['TD_END'])) echo $_tmpb_end_table['TD_END'];echo ' ';if (isset($_tmpb_end_table['TR_END'])) echo $_tmpb_end_table['TR_END'];echo ' ';} ?>
						</table>
						<p style="text-align:center"><?php if (isset($this->_var['PAGINATION_PICS'])) echo $this->_var['PAGINATION_PICS']; ?></p>			
					</div>
				</div>
				<?php } ?>
					
				<p style="text-align:center;padding-top:15px;" class="text_small"><?php if (isset($this->_var['L_TOTAL_IMG'])) echo $this->_var['L_TOTAL_IMG']; ?></p>
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom">
				<div style="float:left" class="text_strong">
					<a href="gallery.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_GALLERY'])) echo $this->_var['L_GALLERY']; ?></a> &raquo; <?php if (isset($this->_var['U_GALLERY_CAT_LINKS'])) echo $this->_var['U_GALLERY_CAT_LINKS'];echo ' ';if (isset($this->_var['ADD_PICS'])) echo $this->_var['ADD_PICS']; ?>
				</div>
				<div style="float:right">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>
				</div>
			</div>
		</div>
		