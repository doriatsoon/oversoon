<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title><?php if (isset($this->_var['L_TITLE'])) echo $this->_var['L_TITLE']; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="description" content="PHPBoost" />
		<meta name="robots" content="noindex, follow" />
		<link type="text/css" href="templates/install.css" title="phpboost" rel="stylesheet" />
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/scriptaculous/prototype.js"></script>
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/scriptaculous/scriptaculous.js"></script>
		<script type="text/javascript" src="templates/global.js"></script>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<script type="text/javascript">
		<!--
			var step = <?php if (isset($this->_var['NUM_STEP'])) echo $this->_var['NUM_STEP']; ?>;
		-->
		</script>
	<div id="global">
		<div id="header_container">
		</div>
		<div id="left_menu">
			<table class="table_left">
				<tr>
					<td class="row_top">
						<?php if (isset($this->_var['L_LANG'])) echo $this->_var['L_LANG']; ?>
					</td>
				</tr>
				<tr>
					<td class="row_next row_final" style="text-align:center;">
						<form action="<?php if (isset($this->_var['U_CHANGE_LANG'])) echo $this->_var['U_CHANGE_LANG']; ?>" method="post">
							<p>
								<select name="new_language" id="change_lang" onchange="document.location = 'install.php?step=' + step + '&amp;lang=' + document.getElementById('change_lang').value;">
									<?php if (!isset($this->_block['lang']) || !is_array($this->_block['lang'])) $this->_block['lang'] = array();
foreach ($this->_block['lang'] as $lang_key => $lang_value) {
$_tmpb_lang = &$this->_block['lang'][$lang_key]; ?>
									<option value="<?php if (isset($_tmpb_lang['LANG'])) echo $_tmpb_lang['LANG']; ?>" <?php if (isset($_tmpb_lang['SELECTED'])) echo $_tmpb_lang['SELECTED']; ?>><?php if (isset($_tmpb_lang['LANG_NAME'])) echo $_tmpb_lang['LANG_NAME']; ?></option>
									<?php } ?>
								</select>
								&nbsp;&nbsp;&nbsp;<img src="../images/stats/countries/<?php if (isset($this->_var['LANG_IDENTIFIER'])) echo $this->_var['LANG_IDENTIFIER']; ?>.png" alt="" class="valign_middle" />
							</p>
							<p id="button_change_lang">
								<input type="submit" class="submit" value="<?php if (isset($this->_var['L_CHANGE'])) echo $this->_var['L_CHANGE']; ?>" />
							</p>
							<script type="text/javascript">
							<!--
								document.getElementById('button_change_lang').style.display = 'none';
							-->
							</script>
						</form>
					</td>
				</tr>
			</table>
			<table class="table_left">
				<tr>
					<td class="row_top">
						<?php if (isset($this->_var['L_STEPS_LIST'])) echo $this->_var['L_STEPS_LIST']; ?>
					</td>
				</tr>
				<?php if (!isset($this->_block['link_menu']) || !is_array($this->_block['link_menu'])) $this->_block['link_menu'] = array();
foreach ($this->_block['link_menu'] as $link_menu_key => $link_menu_value) {
$_tmpb_link_menu = &$this->_block['link_menu'][$link_menu_key]; ?>
					<tr>
						<td class="<?php if (isset($_tmpb_link_menu['CLASS'])) echo $_tmpb_link_menu['CLASS']; ?>">
							<img src="templates/images/<?php if (isset($_tmpb_link_menu['STEP_IMG'])) echo $_tmpb_link_menu['STEP_IMG']; ?>" alt="" class="valign_middle" />&nbsp;&nbsp;<?php if (isset($_tmpb_link_menu['STEP_NAME'])) echo $_tmpb_link_menu['STEP_NAME']; ?>
						</td>				
					</tr>
				<?php } ?>
			</table>
			<table class="table_left">
				<tr>
					<td class="row_top">
						<?php if (isset($this->_var['L_INSTALL_PROGRESS'])) echo $this->_var['L_INSTALL_PROGRESS']; ?>
					</td>
				</tr>
				<tr>
					<td class="row_next row_final">
						<div style="margin:auto;width:200px">
							<div style="text-align:center;margin-bottom:5px;"><?php if (isset($this->_var['L_STEP'])) echo $this->_var['L_STEP']; ?> :&nbsp;<?php if (isset($this->_var['PROGRESS_LEVEL'])) echo $this->_var['PROGRESS_LEVEL']; ?>%</div>
							<div style="float:left;height:12px;border:1px solid black;background:white;width:192px;padding:2px;padding-left:3px;padding-right:1px;">
								<?php if (!isset($this->_block['progress_bar']) || !is_array($this->_block['progress_bar'])) $this->_block['progress_bar'] = array();
foreach ($this->_block['progress_bar'] as $progress_bar_key => $progress_bar_value) {
$_tmpb_progress_bar = &$this->_block['progress_bar'][$progress_bar_key]; ?><img src="templates/images/progress.png" alt="" /><?php } ?>
							</div>
						</div>
					</td>
				</tr>						
			</table>
			<table class="table_left">
				<tr>
					<td class="row_top">
						<?php if (isset($this->_var['L_APPENDICES'])) echo $this->_var['L_APPENDICES']; ?>
					</td>
				</tr>
				<tr>
					<td class="row_next">
						<img src="templates/images/help.png" alt="<?php if (isset($this->_var['L_DOCUMENTATION'])) echo $this->_var['L_DOCUMENTATION']; ?>" class="valign_middle" />
						&nbsp;&nbsp;
						<a href="<?php if (isset($this->_var['U_DOCUMENTATION'])) echo $this->_var['U_DOCUMENTATION']; ?>"><?php if (isset($this->_var['L_DOCUMENTATION'])) echo $this->_var['L_DOCUMENTATION']; ?></a>
					</td>
				</tr>
				<tr>
					<td class="row_next row_final">
						<img src="templates/images/intro.png" alt="<?php if (isset($this->_var['L_RESTART_INSTALL'])) echo $this->_var['L_RESTART_INSTALL']; ?>" class="valign_middle" />
						&nbsp;&nbsp;
						<a href="<?php if (isset($this->_var['U_RESTART'])) echo $this->_var['U_RESTART']; ?>" onclick="return confirm('<?php if (isset($this->_var['L_CONFIRM_RESTART'])) echo $this->_var['L_CONFIRM_RESTART']; ?>');"><?php if (isset($this->_var['L_RESTART_INSTALL'])) echo $this->_var['L_RESTART_INSTALL']; ?></a>
					</td>
				</tr>					
			</table>
		</div>
		
		<div id="main">
			<table class="table_contents">
				<tr> 
					<th colspan="2">
						<div style="text-align:right;padding-top:5px;padding-right:30px;"><img src="templates/images/phpboost.png" alt="Logo PHPBoost" class="valign_middle" /> <?php if (isset($this->_var['L_STEP'])) echo $this->_var['L_STEP']; ?></div>
					</th>
				</tr>
				
				<tr> 					
					<?php if (isset($this->_var['C_INTRO']) && $this->_var['C_INTRO']) { ?>
					<td class="row_contents">						
						<span style="float:right;padding:8px;padding-top:0px;padding-right:25px">
							<img src="templates/images/PHPBoost_box3.0.png" alt="Logo PHPBoost" />
						</span>
						<h1><?php if (isset($this->_var['L_INTRO_TITLE'])) echo $this->_var['L_INTRO_TITLE']; ?></h1>
						<?php if (isset($this->_var['L_INTRO_EXPLAIN'])) echo $this->_var['L_INTRO_EXPLAIN']; ?>
						
						<div style="margin-bottom:60px;">&nbsp;</div>
						
						<h1><?php if (isset($this->_var['DISTRIBUTION'])) echo $this->_var['DISTRIBUTION']; ?></h1>
						<?php if (isset($this->_var['L_DISTRIBUTION_EXPLAIN'])) echo $this->_var['L_DISTRIBUTION_EXPLAIN']; ?>
						<br />
						<?php if (isset($this->_var['DISTRIBUTION_DESCRIPTION'])) echo $this->_var['DISTRIBUTION_DESCRIPTION']; ?>
						
						<fieldset class="submit_case">
							<a href="<?php if (isset($this->_var['L_NEXT_STEP'])) echo $this->_var['L_NEXT_STEP']; ?>" title="<?php if (isset($this->_var['L_START_INSTALL'])) echo $this->_var['L_START_INSTALL']; ?>" ><img src="templates/images/right.png" alt="<?php if (isset($this->_var['L_START_INSTALL'])) echo $this->_var['L_START_INSTALL']; ?>" class="valign_middle" /></a>
						</fieldset>						
					</td>
					<?php }echo ' ';if (isset($this->_var['C_LICENSE']) && $this->_var['C_LICENSE']) { ?>
					<td class="row_contents">
						<h1><?php if (isset($this->_var['L_REQUIRE_LICENSE'])) echo $this->_var['L_REQUIRE_LICENSE']; ?></h1>
						<script type="text/javascript">
						<!--
							function check_license_agreement()
							{
								if( document.getElementById('license_agreement').checked == false )
								{
									alert("<?php if (isset($this->_var['L_ALERT_PLEASE_AGREE_LICENSE'])) echo $this->_var['L_ALERT_PLEASE_AGREE_LICENSE']; ?>");
									return false;
								}
								else
									return true;
							}
						-->
						</script>
						<form action="<?php if (isset($this->_var['TARGET'])) echo $this->_var['TARGET']; ?>" method="post" onsubmit="return check_license_agreement();" class="fieldset_content">
							<fieldset>
								<legend>
									<?php if (isset($this->_var['L_QUERY_TERMS'])) echo $this->_var['L_QUERY_TERMS']; ?>
								</legend>
								<?php if (isset($this->_var['L_REQUIRE_LICENSE_AGREEMENT'])) echo $this->_var['L_REQUIRE_LICENSE_AGREEMENT']; ?>
								<br />
								<br />
								<div style="width:auto;height:340px;overflow-y:scroll;border:1px solid #DFDFDF;background-color:#F1F4F1">
									<?php if (isset($this->_var['L_LICENSE_TERMS'])) echo $this->_var['L_LICENSE_TERMS']; ?>
								</div>
								<div style="text-align:center;margin:15px;margin-bottom:10px;">
									<label style="cursor:pointer;">
										<input type="checkbox" name="license_agreement" id="license_agreement" class="valign_middle" />
										<?php if (isset($this->_var['L_PLEASE_AGREE'])) echo $this->_var['L_PLEASE_AGREE']; ?>
									</label>
								</div>
							</fieldset>
							
							<fieldset class="submit_case">
								<a href="<?php if (isset($this->_var['U_PREVIOUS_PAGE'])) echo $this->_var['U_PREVIOUS_PAGE']; ?>" title="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>" ><img src="templates/images/left.png" alt="<?php if (isset($this->_var['L_START_INSTALL'])) echo $this->_var['L_START_INSTALL']; ?>" class="valign_middle" /></a>
								&nbsp;
								<input type="image" src="templates/images/right.png" title="<?php if (isset($this->_var['L_NEXT_STEP'])) echo $this->_var['L_NEXT_STEP']; ?>" class="img_submit" />
								<input type="hidden"  name="submit" value="next" />
							</fieldset>		
						</form>
					</td>
					<?php }echo ' ';if (isset($this->_var['C_SERVER_CONFIG']) && $this->_var['C_SERVER_CONFIG']) { ?>
					<td class="row_contents">
						<script type="text/javascript">
						<!--
						display_result = false;
						function refresh()
						{
							load_progress_bar(20, '');
							if( !display_result )
								Effect.Appear('result_box');
							
							data = null;
							var xhr_object = xmlhttprequest_init('xmlhttprequest.php?lang=<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>&chmod=1');
							xhr_object.onreadystatechange = function() 
							{
								if( xhr_object.readyState == 1 )
									progress_bar(25, "<?php if (isset($this->_var['L_QUERY_LOADING'])) echo $this->_var['L_QUERY_LOADING']; ?>");
								else if( xhr_object.readyState == 2 )
									progress_bar(50, "<?php if (isset($this->_var['L_QUERY_SENT'])) echo $this->_var['L_QUERY_SENT']; ?>");
								else if( xhr_object.readyState == 3 )
									progress_bar(75, "<?php if (isset($this->_var['L_QUERY_PROCESSING'])) echo $this->_var['L_QUERY_PROCESSING']; ?>");
								else if( xhr_object.readyState == 4 )
								{
									if( xhr_object.status == 200 )
									{
										document.getElementById("chmod").innerHTML = xhr_object.responseText;
										progress_bar(100, "<?php if (isset($this->_var['L_QUERY_SUCCESS'])) echo $this->_var['L_QUERY_SUCCESS']; ?>");
									}
									else
										progress_bar(99, "<?php if (isset($this->_var['L_QUERY_FAILURE'])) echo $this->_var['L_QUERY_FAILURE']; ?>");
								}									
							}
							xmlhttprequest_sender(xhr_object, data);
						}
						-->
						</script>
						
						<div class="fieldset_content">
							<h1><?php if (isset($this->_var['L_CONFIG_SERVER_TITLE'])) echo $this->_var['L_CONFIG_SERVER_TITLE']; ?></h1>
							<a href="http://www.php.net/">
								<img src="templates/images/php.png" alt="PHP" style="float:right; margin-bottom:5px; margin-left:5px;"/>
							</a>
							<?php if (isset($this->_var['L_CONFIG_SERVER_EXPLAIN'])) echo $this->_var['L_CONFIG_SERVER_EXPLAIN']; ?>
							
							<fieldset>
								<legend><?php if (isset($this->_var['L_PHP_VERSION'])) echo $this->_var['L_PHP_VERSION']; ?></legend>
								<p><?php if (isset($this->_var['L_CHECK_PHP_VERSION_EXPLAIN'])) echo $this->_var['L_CHECK_PHP_VERSION_EXPLAIN']; ?></p>
								<dl>
									<dt><label><?php if (isset($this->_var['L_CHECK_PHP_VERSION'])) echo $this->_var['L_CHECK_PHP_VERSION']; ?></label></dt>
									<dd>
									<?php if (isset($this->_var['C_PHP_VERSION_OK']) && $this->_var['C_PHP_VERSION_OK']) { ?>
										<img src="templates/images/success.png" alt="<?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?>" />
									<?php } else { ?>
										<img src="templates/images/stop.png" alt="<?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?>" />
									<?php } ?>
									</dd>								
								</dl>
							</fieldset>
							
							<fieldset>
								<legend><?php if (isset($this->_var['L_EXTENSIONS'])) echo $this->_var['L_EXTENSIONS']; ?></legend>	
								<p><?php if (isset($this->_var['L_CHECK_EXTENSIONS'])) echo $this->_var['L_CHECK_EXTENSIONS']; ?></p>
								<dl>
									<dt><label><?php if (isset($this->_var['L_GD_LIBRARY'])) echo $this->_var['L_GD_LIBRARY']; ?></label><br /><span><?php if (isset($this->_var['L_GD_LIBRARY_EXPLAIN'])) echo $this->_var['L_GD_LIBRARY_EXPLAIN']; ?></span></dt>
									<dd>
									<?php if (isset($this->_var['C_GD_LIBRAIRY_ENABLED']) && $this->_var['C_GD_LIBRAIRY_ENABLED']) { ?>
										<img src="templates/images/success.png" alt="<?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?>" />
									<?php } else { ?>
										<img src="templates/images/stop.png" alt="<?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?>" />
									<?php } ?>
									</dd>								
								</dl>
								<dl>
									<dt><label><?php if (isset($this->_var['L_URL_REWRITING'])) echo $this->_var['L_URL_REWRITING']; ?></label><br /><span><?php if (isset($this->_var['L_URL_REWRITING_EXPLAIN'])) echo $this->_var['L_URL_REWRITING_EXPLAIN']; ?></span></dt>
									<dd>
									<?php if (isset($this->_var['C_URL_REWRITING_KNOWN']) && $this->_var['C_URL_REWRITING_KNOWN']) {echo ' ';if (isset($this->_var['C_URL_REWRITING_ENABLED']) && $this->_var['C_URL_REWRITING_ENABLED']) { ?>
										<img src="templates/images/success.png" alt="<?php if (isset($this->_var['L_YES'])) echo $this->_var['L_YES']; ?>" />
										<?php } else { ?>
										<img src="templates/images/stop.png" alt="<?php if (isset($this->_var['L_NO'])) echo $this->_var['L_NO']; ?>" />
										<?php }echo ' ';} else { ?>
									<img src="templates/images/question.png" alt="<?php if (isset($this->_var['L_UNKNOWN'])) echo $this->_var['L_UNKNOWN']; ?>" />
									<?php } ?>
									</dd>								
								</dl>
							</fieldset>
							
							<fieldset>
								<legend><?php if (isset($this->_var['L_AUTH_DIR'])) echo $this->_var['L_AUTH_DIR']; ?></legend>
								<p><?php if (isset($this->_var['L_CHECK_AUTH_DIR'])) echo $this->_var['L_CHECK_AUTH_DIR']; ?></p>
								<div id="chmod">
									<?php if (!isset($this->_block['chmod']) || !is_array($this->_block['chmod'])) $this->_block['chmod'] = array();
foreach ($this->_block['chmod'] as $chmod_key => $chmod_value) {
$_tmpb_chmod = &$this->_block['chmod'][$chmod_key]; ?>							
									<dl>
										<dt><label><?php if (isset($_tmpb_chmod['TITLE'])) echo $_tmpb_chmod['TITLE']; ?></label></dt>
										<dd>
											<?php if (isset($_tmpb_chmod['C_EXISTING_DIR']) && $_tmpb_chmod['C_EXISTING_DIR']) { ?>
												<div class="success_block"><?php if (isset($this->_var['L_EXISTING'])) echo $this->_var['L_EXISTING']; ?></div>
											<?php } else { ?>
												<div class="failure_block"><?php if (isset($this->_var['L_NOT_EXISTING'])) echo $this->_var['L_NOT_EXISTING']; ?></div>
											<?php }echo ' ';if (isset($_tmpb_chmod['C_WRITIBLE_DIR']) && $_tmpb_chmod['C_WRITIBLE_DIR']) { ?>
												<div class="success_block"><?php if (isset($this->_var['L_WRITABLE'])) echo $this->_var['L_WRITABLE']; ?></div>
											<?php } else { ?>
												<div class="failure_block"><?php if (isset($this->_var['L_NOT_WRITABLE'])) echo $this->_var['L_NOT_WRITABLE']; ?></div>
											<?php } ?>
										</dd>								
									</dl>
									<?php } ?>
								</div>
							</fieldset>	
							
							<fieldset style="display:none;" id="result_box">
								<legend>
									<?php if (isset($this->_var['L_RESULT'])) echo $this->_var['L_RESULT']; ?>
								</legend>
								<?php if (isset($this->_var['C_ERROR']) && $this->_var['C_ERROR']) { ?>
									<div class="error">
										<?php if (isset($this->_var['L_ERROR'])) echo $this->_var['L_ERROR']; ?>
									</div>
								<?php } ?>
								<div style="margin:auto;width:500px;">
									<div id="progress_info" style="text-align:center;"></div>
									<div style="float:left;height:13px;border:1px solid black;background:white;width:448px;padding:2px;padding-top:1px;padding-left:3px;padding-right:1px;" id="progress_bar"></div>
									&nbsp;<span id="progress_percent">0</span>%
								</div>
							</fieldset>
							
							<?php if (isset($this->_var['C_ERROR']) && $this->_var['C_ERROR']) { ?>
							<script type="text/javascript">
							<!--
								document.getElementById("result_box").style.display = "block";
								load_progress_bar(5, '');
								progress_bar(100, "<?php if (isset($this->_var['L_QUERY_SUCCESS'])) echo $this->_var['L_QUERY_SUCCESS']; ?>");
							-->
							</script>
							<?php } ?>
							
							<form action="<?php if (isset($this->_var['U_CURRENT_STEP'])) echo $this->_var['U_CURRENT_STEP']; ?>#result_box" method="post">
								<fieldset class="submit_case">
									<a href="<?php if (isset($this->_var['U_PREVIOUS_STEP'])) echo $this->_var['U_PREVIOUS_STEP']; ?>" title="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>"><img src="templates/images/left.png" alt="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>" class="valign_middle" /></a>&nbsp;&nbsp;
									<a href="<?php if (isset($this->_var['U_CURRENT_STEP'])) echo $this->_var['U_CURRENT_STEP']; ?>" title="<?php if (isset($this->_var['L_REFRESH'])) echo $this->_var['L_REFRESH']; ?>" id="enougth_js_preview">
										<img src="templates/images/refresh.png" alt="<?php if (isset($this->_var['L_REFRESH'])) echo $this->_var['L_REFRESH']; ?>" class="valign_middle" />
									</a>
									<script type="text/javascript">
									<!--
										document.getElementById("enougth_js_preview").style.display = "none";
										document.write("<a title=\"<?php if (isset($this->_var['L_REFRESH'])) echo $this->_var['L_REFRESH']; ?>\" href=\"javascript:refresh();\" ><img src=\"templates/images/refresh.png\" alt=\"<?php if (isset($this->_var['L_REFRESH'])) echo $this->_var['L_REFRESH']; ?>\" class=\"valign_middle\" /></a>&nbsp;<span id=\"image_loading\"></span>&nbsp;");
									-->
									</script>
									<input type="image" src="templates/images/right.png" title="<?php if (isset($this->_var['L_NEXT_STEP'])) echo $this->_var['L_NEXT_STEP']; ?>" class="img_submit" />
									<input type="hidden"  name="submit" value="next" />
								</fieldset>
							</form>
						</div>
					</td>
					<?php }echo ' ';if (isset($this->_var['C_DATABASE_CONFIG']) && $this->_var['C_DATABASE_CONFIG']) { ?>
					<td class="row_contents">
						<script type="text/javascript">
						<!--
						
						function display_result_text(return_code)
						{
							switch(return_code)
							{
								case '<?php if (isset($this->_var['DB_CONFIG_SUCCESS'])) echo $this->_var['DB_CONFIG_SUCCESS']; ?>':
									document.getElementById("db_result").innerHTML = '<div class="success"><?php if (isset($this->_var['L_DB_CONFIG_SUCESS'])) echo $this->_var['L_DB_CONFIG_SUCESS']; ?></div>';
									break;
								case '<?php if (isset($this->_var['DB_CONFIG_ERROR_CONNECTION_TO_DBMS'])) echo $this->_var['DB_CONFIG_ERROR_CONNECTION_TO_DBMS']; ?>':
									document.getElementById("db_result").innerHTML = '<div class="error"><?php if (isset($this->_var['L_DB_CONFIG_ERROR_CONNECTION_TO_DBMS'])) echo $this->_var['L_DB_CONFIG_ERROR_CONNECTION_TO_DBMS']; ?></div>';
									break;
								case '<?php if (isset($this->_var['DB_CONFIG_ERROR_DATABASE_NOT_FOUND_BUT_CREATED'])) echo $this->_var['DB_CONFIG_ERROR_DATABASE_NOT_FOUND_BUT_CREATED']; ?>':
									document.getElementById("db_result").innerHTML = '<div class="success"><?php if (isset($this->_var['L_DB_CONFIG_ERROR_DATABASE_NOT_FOUND_BUT_CREATED'])) echo $this->_var['L_DB_CONFIG_ERROR_DATABASE_NOT_FOUND_BUT_CREATED']; ?></div>';
									break;
								case '<?php if (isset($this->_var['DB_CONFIG_ERROR_DATABASE_NOT_FOUND_AND_COULDNOT_BE_CREATED'])) echo $this->_var['DB_CONFIG_ERROR_DATABASE_NOT_FOUND_AND_COULDNOT_BE_CREATED']; ?>':
									document.getElementById("db_result").innerHTML = '<div class="error"><?php if (isset($this->_var['L_DB_CONFIG_ERROR_DATABASE_NOT_FOUND_AND_COULDNOT_BE_CREATED'])) echo $this->_var['L_DB_CONFIG_ERROR_DATABASE_NOT_FOUND_AND_COULDNOT_BE_CREATED']; ?></div>';
									break;
								case '<?php if (isset($this->_var['DB_CONFIG_ERROR_TABLES_ALREADY_EXIST'])) echo $this->_var['DB_CONFIG_ERROR_TABLES_ALREADY_EXIST']; ?>':
									document.getElementById("db_result").innerHTML = '<div class="notice"><?php if (isset($this->_var['L_DB_CONFIG_ERROR_TABLES_ALREADY_EXIST'])) echo $this->_var['L_DB_CONFIG_ERROR_TABLES_ALREADY_EXIST']; ?></div>';
									break;
								default:
									document.getElementById("db_result").innerHTML = '<div class="error"><?php if (isset($this->_var['L_UNKNOWN_ERROR'])) echo $this->_var['L_UNKNOWN_ERROR']; ?></div>';
							}
						}
						
						display_result = false;
						
						function send_infos()
						{
							if( !check_form_db() )
								return;
							
							load_progress_bar(20, '');
							data = "host=" + document.getElementById("host").value + "&login=" + document.getElementById("login").value + "&password=" + document.getElementById("password").value + "&database=" + document.getElementById("database").value + "&prefix=" + document.getElementById("tableprefix").value;

							if( !display_result )
								Effect.Appear('result_box');
								
							var xhr_object = xmlhttprequest_init('xmlhttprequest.php?lang=<?php if (isset($this->_var['LANG'])) echo $this->_var['LANG']; ?>&db=1');
							xhr_object.onreadystatechange = function() 
							{
								switch(xhr_object.readyState)
								{
									case 1:
										progress_bar(25, "<?php if (isset($this->_var['L_QUERY_LOADING'])) echo $this->_var['L_QUERY_LOADING']; ?>");
										break;
									case 2:
										progress_bar(50, "<?php if (isset($this->_var['L_QUERY_SENT'])) echo $this->_var['L_QUERY_SENT']; ?>");
										break;
									case 3:
										progress_bar(75, "<?php if (isset($this->_var['L_QUERY_PROCESSING'])) echo $this->_var['L_QUERY_PROCESSING']; ?>");
										break;
									case 4:
										if( xhr_object.status == 200 )
										{
											progress_bar(100, "<?php if (isset($this->_var['L_QUERY_SUCCESS'])) echo $this->_var['L_QUERY_SUCCESS']; ?>");
											display_result_text(xhr_object.responseText);
										}
										else
											progress_bar(99, "<?php if (isset($this->_var['L_QUERY_FAILURE'])) echo $this->_var['L_QUERY_FAILURE']; ?>");
										break;
								}
							}
							xmlhttprequest_sender(xhr_object, data);
						}
						
						function check_form_db()
						{
							if(document.getElementById('host').value == "")
							{
								alert("<?php if (isset($this->_var['L_REQUIRE_HOSTNAME'])) echo $this->_var['L_REQUIRE_HOSTNAME']; ?>");
								return false;
							}

							if(document.getElementById('login').value == "")
							{
								alert("<?php if (isset($this->_var['L_REQUIRE_LOGIN'])) echo $this->_var['L_REQUIRE_LOGIN']; ?>");
								return false;
							}
							if(document.getElementById('database').value == "")
							{
								alert("<?php if (isset($this->_var['L_REQUIRE_DATABASE_NAME'])) echo $this->_var['L_REQUIRE_DATABASE_NAME']; ?>");
								return false;
							}
							
							return true;
						}
						-->
						</script>
						<h1><?php if (isset($this->_var['L_DB_TITLE'])) echo $this->_var['L_DB_TITLE']; ?></h1>
						<a href="http://www.mysql.com/">
							<img src="templates/images/mysql.png" alt="MySQL" style="float:right; margin-bottom:5px; margin-left:5px;"/>
						</a>
						<?php if (isset($this->_var['L_DB_EXPLAIN'])) echo $this->_var['L_DB_EXPLAIN']; ?>
						<br />
						
						<form action="<?php if (isset($this->_var['U_CURRENT_STEP'])) echo $this->_var['U_CURRENT_STEP']; ?>" method="post" onsubmit="return check_form_db();" class="fieldset_content">
							<fieldset>
								<legend><?php if (isset($this->_var['L_SGBD_PARAMETERS'])) echo $this->_var['L_SGBD_PARAMETERS']; ?></legend>
								<dl>
									<dt><label for="host">* <?php if (isset($this->_var['L_HOST'])) echo $this->_var['L_HOST']; ?></label><br /><span><?php if (isset($this->_var['L_HOST_EXPLAIN'])) echo $this->_var['L_HOST_EXPLAIN']; ?></span></dt>
									<dd><label><input type="text" maxlength="150" size="25" id="host" name="host" value="<?php if (isset($this->_var['HOST_VALUE'])) echo $this->_var['HOST_VALUE']; ?>" class="small_text" /></label></dd>
								</dl>
								<dl>
									<dt><label for="login">* <?php if (isset($this->_var['L_LOGIN'])) echo $this->_var['L_LOGIN']; ?></label><br /><span><?php if (isset($this->_var['L_LOGIN_EXPLAIN'])) echo $this->_var['L_LOGIN_EXPLAIN']; ?></span></dt>
									<dd><label><input type="text" maxlength="25" size="25" id="login" name="login" value="<?php if (isset($this->_var['LOGIN_VALUE'])) echo $this->_var['LOGIN_VALUE']; ?>" class="small_text" /></label></dd>
								</dl>
								<dl>
									<dt><label for="password"><?php if (isset($this->_var['L_PASSWORD'])) echo $this->_var['L_PASSWORD']; ?></label><br /><span><?php if (isset($this->_var['L_PASSWORD_EXPLAIN'])) echo $this->_var['L_PASSWORD_EXPLAIN']; ?></span></dt>
									<dd><label><input type="password" maxlength="25" size="25" id="password" name="password" value="<?php if (isset($this->_var['PASSWORD_VALUE'])) echo $this->_var['PASSWORD_VALUE']; ?>" class="small_text" /></label></dd>
								</dl>
							</fieldset>	
							
							<fieldset>
								<legend><?php if (isset($this->_var['L_DB_PARAMETERS'])) echo $this->_var['L_DB_PARAMETERS']; ?></legend>
								<dl>
									<dt><label for="database">* <?php if (isset($this->_var['L_DB_NAME'])) echo $this->_var['L_DB_NAME']; ?></label><br /><span><?php if (isset($this->_var['L_DB_NAME_EXPLAIN'])) echo $this->_var['L_DB_NAME_EXPLAIN']; ?></span></dt>
									<dd><label><input type="text" maxlength="150" size="25" id="database" name="database" value="<?php if (isset($this->_var['DB_NAME_VALUE'])) echo $this->_var['DB_NAME_VALUE']; ?>" class="small_text" /></label></dd>
								</dl>
								<dl>
									<dt><label for="tableprefix"><?php if (isset($this->_var['L_DB_PREFIX'])) echo $this->_var['L_DB_PREFIX']; ?></label><br /><span><?php if (isset($this->_var['L_DB_PREFIX_EXPLAIN'])) echo $this->_var['L_DB_PREFIX_EXPLAIN']; ?></span></dt>
									<dd><label><input type="text" maxlength="20" size="25" name="tableprefix" id="tableprefix" value="<?php if (isset($this->_var['PREFIX_VALUE'])) echo $this->_var['PREFIX_VALUE']; ?>" class="small_text" /></label></dd>
								</dl>
							</fieldset>
							
							<?php if (isset($this->_var['C_ALREADY_INSTALLED']) && $this->_var['C_ALREADY_INSTALLED']) { ?>
							<fieldset>
								<legend><?php if (isset($this->_var['L_ALREADY_INSTALLED'])) echo $this->_var['L_ALREADY_INSTALLED']; ?></legend>
								<div class="warning">
									<?php if (isset($this->_var['L_ALREADY_INSTALLED_EXPLAIN'])) echo $this->_var['L_ALREADY_INSTALLED_EXPLAIN']; ?>
								</div>
								<label><input type="checkbox" name="overwrite_db" /> <?php if (isset($this->_var['L_ALREADY_INSTALLED_OVERWRITE'])) echo $this->_var['L_ALREADY_INSTALLED_OVERWRITE']; ?></label>
							</fieldset>
							<?php } ?>
							
							<fieldset id="result_box">
								<legend>
									<?php if (isset($this->_var['L_RESULT'])) echo $this->_var['L_RESULT']; ?>
								</legend>
								<div style="margin:auto;margin-bottom:15px;width:500px;">
									<div id="db_result">
										<?php if (isset($this->_var['ERROR'])) echo $this->_var['ERROR']; ?>
									</div>
									<div id="progress_info" style="text-align:center;">
										<?php if (isset($this->_var['PROGRESS_STATUS'])) echo $this->_var['PROGRESS_STATUS']; ?>
									</div>
									<div style="float:left;height:13px;border:1px solid black;background:white;width:448px;padding:2px;padding-top:1px;padding-left:3px;padding-right:1px;" id="progress_bar">
										<?php if (isset($this->_var['PROGRESS_BAR'])) echo $this->_var['PROGRESS_BAR']; ?>
									</div>
									&nbsp;<span id="progress_percent"><?php if (isset($this->_var['PROGRESS'])) echo $this->_var['PROGRESS']; ?></span>%
								</div>
							</fieldset>
							
							<?php if (isset($this->_var['C_DISPLAY_RESULT']) && !$this->_var['C_DISPLAY_RESULT']) { ?>
							<script type="text/javascript">
							<!--
								document.getElementById("result_box").style.display = 'none';
							-->
							</script>
							<?php } ?>
							
							<fieldset class="submit_case">
								<a href="<?php if (isset($this->_var['U_PREVIOUS_STEP'])) echo $this->_var['U_PREVIOUS_STEP']; ?>" title="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>"><img src="templates/images/left.png" alt="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>" class="valign_middle" /></a>&nbsp;&nbsp;
								<script type="text/javascript">
								<!--
									document.write("<a href=\"javascript:send_infos();\" title=\"<?php if (isset($this->_var['L_TEST_DB_CONFIG'])) echo $this->_var['L_TEST_DB_CONFIG']; ?>\" /><img src=\"templates/images/refresh.png\" class=\"valign_middle\" title=\"<?php if (isset($this->_var['L_TEST_DB_CONFIG'])) echo $this->_var['L_TEST_DB_CONFIG']; ?>\" /></a>&nbsp;");
								-->
								</script>
								<input title="<?php if (isset($this->_var['L_NEXT_STEP'])) echo $this->_var['L_NEXT_STEP']; ?>" class="img_submit" src="templates/images/right.png" type="image" />
								<input type="hidden" name="submit" value="submit" />
							</fieldset>
						</form>
					</td>
					<?php }echo ' ';if (isset($this->_var['C_SITE_CONFIG']) && $this->_var['C_SITE_CONFIG']) { ?>
					<td class="row_contents">
						<script type="text/javascript">
						<!--
							var site_url = "<?php if (isset($this->_var['SITE_URL'])) echo $this->_var['SITE_URL']; ?>";
							var site_path = "<?php if (isset($this->_var['SITE_PATH'])) echo $this->_var['SITE_PATH']; ?>";
							function check_form_site_config()
							{
								if( document.getElementById('site_url').value == "" )
								{
									alert("<?php if (isset($this->_var['L_REQUIRE_SITE_URL'])) echo $this->_var['L_REQUIRE_SITE_URL']; ?>");
									return false;
							    }
								if( document.getElementById('site_name').value == "" )
								{
									alert("<?php if (isset($this->_var['L_REQUIRE_SITE_NAME'])) echo $this->_var['L_REQUIRE_SITE_NAME']; ?>");
									return false;
							    }
								if( document.getElementById('site_url').value != site_url )
								{
									return confirm("<?php if (isset($this->_var['L_CONFIRM_SITE_URL'])) echo $this->_var['L_CONFIRM_SITE_URL']; ?>");
								}
								if( document.getElementById('site_path').value != site_path )
								{
									return confirm("<?php if (isset($this->_var['L_CONFIRM_SITE_PATH'])) echo $this->_var['L_CONFIRM_SITE_PATH']; ?>");
								}
							}
						-->
						</script>
						<h1><?php if (isset($this->_var['L_SITE_CONFIG'])) echo $this->_var['L_SITE_CONFIG']; ?></h1>
						<?php if (isset($this->_var['L_SITE_CONFIG_EXPLAIN'])) echo $this->_var['L_SITE_CONFIG_EXPLAIN']; ?>
						
						<form action="<?php if (isset($this->_var['U_CURRENT_STEP'])) echo $this->_var['U_CURRENT_STEP']; ?>" method="post" onsubmit="return check_form_site_config();" class="fieldset_content">
							<fieldset>
								<legend><?php if (isset($this->_var['L_YOUR_SITE'])) echo $this->_var['L_YOUR_SITE']; ?></legend>	
								<p><?php if (isset($this->_var['L_CHECK_EXTENSIONS'])) echo $this->_var['L_CHECK_EXTENSIONS']; ?></p>
								<dl>
									<dt><label for="site_url">* <?php if (isset($this->_var['L_SITE_URL'])) echo $this->_var['L_SITE_URL']; ?></label><br /><span><?php if (isset($this->_var['L_SITE_URL_EXPLAIN'])) echo $this->_var['L_SITE_URL_EXPLAIN']; ?></span></dt>
									<dd><input type="text" maxlength="150" size="25" id="site_url" name="site_url" value="<?php if (isset($this->_var['SITE_URL'])) echo $this->_var['SITE_URL']; ?>" class="small_text" /></dd>	
								</dl>
								<dl>
									<dt><label for="site_path">* <?php if (isset($this->_var['L_SITE_PATH'])) echo $this->_var['L_SITE_PATH']; ?></label><br /><span><?php if (isset($this->_var['L_SITE_PATH_EXPLAIN'])) echo $this->_var['L_SITE_PATH_EXPLAIN']; ?></span></dt>
									<dd><input type="text" maxlength="255" size="25" id="site_path" name="site_path" value="<?php if (isset($this->_var['SITE_PATH'])) echo $this->_var['SITE_PATH']; ?>" class="small_text" /></dd>
								</dl>
								<dl>
									<dt><label for="site_name">* <?php if (isset($this->_var['L_SITE_NAME'])) echo $this->_var['L_SITE_NAME']; ?></label></dt>
									<dd><input type="text" size="25" maxlength="100" id="site_name" name="site_name" class="small_text" /></dd>								
								</dl>
								<dl>
									<dt><label for="site_desc"><?php if (isset($this->_var['L_SITE_DESCRIPTION'])) echo $this->_var['L_SITE_DESCRIPTION']; ?></label><br /><span><?php if (isset($this->_var['L_SITE_DESCRIPTION_EXPLAIN'])) echo $this->_var['L_SITE_DESCRIPTION_EXPLAIN']; ?></span></dt>
									<dd><textarea rows="3" cols="23" name="site_desc" id="site_desc" class="post"></textarea></dd>								
								</dl>
								<dl>
									<dt><label for="site_keyword"><?php if (isset($this->_var['L_SITE_KEYWORDS'])) echo $this->_var['L_SITE_KEYWORDS']; ?></label><br /><span><?php if (isset($this->_var['L_SITE_KEYWORDS_EXPLAIN'])) echo $this->_var['L_SITE_KEYWORDS_EXPLAIN']; ?></span></dt>
									<dd><textarea rows="3" cols="23" name="site_keyword" id="site_keyword" class="post"></textarea></dd>								
								</dl>
								<dl>
									<dt><label for="site_timezone"><?php if (isset($this->_var['L_SITE_TIMEZONE'])) echo $this->_var['L_SITE_TIMEZONE']; ?></label><br /><span><?php if (isset($this->_var['L_SITE_TIMEZONE_EXPLAIN'])) echo $this->_var['L_SITE_TIMEZONE_EXPLAIN']; ?></span></dt>
									<dd>
										<select name="site_timezone" id="site_timezone">
											<?php if (!isset($this->_block['timezone']) || !is_array($this->_block['timezone'])) $this->_block['timezone'] = array();
foreach ($this->_block['timezone'] as $timezone_key => $timezone_value) {
$_tmpb_timezone = &$this->_block['timezone'][$timezone_key]; ?>
											<option value="<?php if (isset($_tmpb_timezone['VALUE'])) echo $_tmpb_timezone['VALUE']; ?>" <?php if (isset($_tmpb_timezone['SELECTED'])) echo $_tmpb_timezone['SELECTED']; ?>><?php if (isset($_tmpb_timezone['NAME'])) echo $_tmpb_timezone['NAME']; ?></option>
											<?php } ?>
										</select>
									</dd>								
								</dl>
							</fieldset>
							
							<fieldset class="submit_case">
								<a href="<?php if (isset($this->_var['U_PREVIOUS_STEP'])) echo $this->_var['U_PREVIOUS_STEP']; ?>" title="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>"><img src="templates/images/left.png" alt="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>" class="valign_middle" /></a>&nbsp;&nbsp;
								<input title="<?php if (isset($this->_var['L_NEXT_STEP'])) echo $this->_var['L_NEXT_STEP']; ?>" class="img_submit" src="templates/images/right.png" type="image" />
								<input type="hidden" name="submit" value="submit" />
							</fieldset>
						</form>
					</td>
					<?php }echo ' ';if (isset($this->_var['C_ADMIN_ACCOUNT']) && $this->_var['C_ADMIN_ACCOUNT']) { ?>
					<td class="row_contents">
						<script type="text/javascript">
						<!--
							function check_form_admin()
							{								
								if (document.getElementById("login").value == "")
								{
									alert("<?php if (isset($this->_var['L_REQUIRE_LOGIN'])) echo $this->_var['L_REQUIRE_LOGIN']; ?>");
									return false;
								}
								else if (document.getElementById("login").value.length < 3)
								{
									alert("<?php if (isset($this->_var['L_LOGIN_TOO_SHORT'])) echo $this->_var['L_LOGIN_TOO_SHORT']; ?>");
									return false;
								}
								else if (document.getElementById("password").value == "")
								{
									alert("<?php if (isset($this->_var['L_REQUIRE_PASSWORD'])) echo $this->_var['L_REQUIRE_PASSWORD']; ?>");
									return false;
								}
								else if (document.getElementById("password_repeat").value == "")
								{
									alert("<?php if (isset($this->_var['L_REQUIRE_PASSWORD_REPEAT'])) echo $this->_var['L_REQUIRE_PASSWORD_REPEAT']; ?>");
									return false;
								}
								else if (document.getElementById("password").value.length < 6)
								{
									alert("<?php if (isset($this->_var['L_PASSWORD_TOO_SHORT'])) echo $this->_var['L_PASSWORD_TOO_SHORT']; ?>");
									return false;
								}
								else if (document.getElementById("mail").value == "")
								{ 
									alert("<?php if (isset($this->_var['L_REQUIRE_MAIL'])) echo $this->_var['L_REQUIRE_MAIL']; ?>");
									return false;
								}	
								else if (document.getElementById("password").value != document.getElementById("password_repeat").value)
								{
									alert("<?php if (isset($this->_var['L_PASSWORDS_ERROR'])) echo $this->_var['L_PASSWORDS_ERROR']; ?>");
									return false;
								}
								else if (!check_mail_validity(document.getElementById("mail").value))
								{
									alert("<?php if (isset($this->_var['L_EMAIL_ERROR'])) echo $this->_var['L_EMAIL_ERROR']; ?>");
									return false;
								}
								else
									return true;
							}
							function check_login(value) 
							{
								if (value.length<3)			
								{	
									document.getElementById('msg_login').innerHTML = '<img src="./templates/images/forbidden_mini.png" alt="" class="valign_middle" />';
									document.getElementById('msg_login_div').innerHTML = "<?php if (isset($this->_var['L_LOGIN_TOO_SHORT'])) echo $this->_var['L_LOGIN_TOO_SHORT']; ?>";
								}
								else	
								{
									document.getElementById('msg_login').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
									document.getElementById('msg_login_div').innerHTML = '';
								}
							}
							function check_mail(value) 
							{
								if (!check_mail_validity(value))
								{	
									document.getElementById('msg_email').innerHTML = '<img src="./templates/images/forbidden_mini.png" alt="" class="valign_middle" />';
									document.getElementById('msg_email_div').innerHTML = "<?php if (isset($this->_var['L_MAIL_INVALID'])) echo $this->_var['L_MAIL_INVALID']; ?>";
								}
								else
								{	
									document.getElementById('msg_email').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
									document.getElementById('msg_email_div').innerHTML = '';
								}
							}
							function check_password(value) 
							{
								if (value.length<6)
								{	
									document.getElementById('msg_password1').innerHTML = '<img src="./templates/images/forbidden_mini.png" alt="" class="valign_middle" />';
									document.getElementById('msg_password1_div').innerHTML = "<?php if (isset($this->_var['L_PASSWORD_TOO_SHORT'])) echo $this->_var['L_PASSWORD_TOO_SHORT']; ?>";
								}
								else
								{
									var password = document.getElementById('password_repeat').value;
									if (password == value)
									{
										document.getElementById('msg_password1').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password1_div').innerHTML = '';
										document.getElementById('msg_password2').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password2_div').innerHTML = '';
									}
									else if (password.length > 0)
									{	
										document.getElementById('msg_password1').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password1_div').innerHTML = '';
										document.getElementById('msg_password2').innerHTML = '<img src="./templates/images/forbidden_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password2_div').innerHTML = "<?php if (isset($this->_var['L_PASSWORDS_ERROR'])) echo $this->_var['L_PASSWORDS_ERROR']; ?>";
									}
									else
									{
										document.getElementById('msg_password1').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password1_div').innerHTML = '';
									}
								}	
							}
							function check_password2(value) 
							{
								if (value.length<6)
								{	
									document.getElementById('msg_password2').innerHTML = '<img src="./templates/images/forbidden_mini.png" alt="" class="valign_middle" />';
									document.getElementById('msg_password2_div').innerHTML = "<?php if (isset($this->_var['L_PASSWORD_TOO_SHORT'])) echo $this->_var['L_PASSWORD_TOO_SHORT']; ?>";
								}
								else
								{
									var password = document.getElementById('password').value;
									if (password == value)
									{
										document.getElementById('msg_password1').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password1_div').innerHTML = '';
										document.getElementById('msg_password2').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password2_div').innerHTML = '';
									}
									else if (password.length > 0)
									{	
										document.getElementById('msg_password2').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password2_div').innerHTML = '';
										document.getElementById('msg_password1').innerHTML = '<img src="./templates/images/forbidden_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password1_div').innerHTML = "<?php if (isset($this->_var['L_PASSWORDS_ERROR'])) echo $this->_var['L_PASSWORDS_ERROR']; ?>";
									}
									else
									{
										document.getElementById('msg_password2').innerHTML = '<img src="./templates/images/processed_mini.png" alt="" class="valign_middle" />';
										document.getElementById('msg_password2_div').innerHTML = '';
									}
								}	
							}
							function change_img_theme(id, value)
							{
								if(document.images )
									document.images[id].src = "../templates/" + value + "/theme/images/theme.jpg";
							}
							var array_identifier = new Array();
							<?php if (isset($this->_var['JS_LANG_IDENTIFIER'])) echo $this->_var['JS_LANG_IDENTIFIER']; ?>
							function change_img_lang(id, lang)
							{
								if( array_identifier[lang] && document.getElementById(id) ) 
									document.getElementById(id).src = '../images/stats/countries/' + array_identifier[lang] + '.png';
							}
						-->
						</script>
						<h1><?php if (isset($this->_var['L_ADMIN_ACCOUNT_CREATION'])) echo $this->_var['L_ADMIN_ACCOUNT_CREATION']; ?></h1>
						<?php if (isset($this->_var['L_EXPLAIN_ADMIN_ACCOUNT_CREATION'])) echo $this->_var['L_EXPLAIN_ADMIN_ACCOUNT_CREATION']; ?>
						<form action="<?php if (isset($this->_var['U_CURRENT_STEP'])) echo $this->_var['U_CURRENT_STEP']; ?>" method="post" onsubmit="return check_form_admin();" class="fieldset_content">
							<?php if (!isset($this->_block['error']) || !is_array($this->_block['error'])) $this->_block['error'] = array();
foreach ($this->_block['error'] as $error_key => $error_value) {
$_tmpb_error = &$this->_block['error'][$error_key]; ?>
							<fieldset>
								<legend><?php if (isset($this->_var['L_ERROR'])) echo $this->_var['L_ERROR']; ?></legend>
								<?php if (isset($_tmpb_error['ERROR'])) echo $_tmpb_error['ERROR']; ?>
							</fieldset>
							<?php } ?>
							<fieldset>
								<legend><?php if (isset($this->_var['L_ADMIN_ACCOUNT'])) echo $this->_var['L_ADMIN_ACCOUNT']; ?></legend>	
								<p><?php if (isset($this->_var['L_CHECK_EXTENSIONS'])) echo $this->_var['L_CHECK_EXTENSIONS']; ?></p>
								<dl>
									<dt><label for="login">* <?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?></label><br /><span><?php if (isset($this->_var['L_PSEUDO_EXPLAIN'])) echo $this->_var['L_PSEUDO_EXPLAIN']; ?></span></dt>
									<dd><input type="text" size="25" maxlength="25" id="login" name="login" value="<?php if (isset($this->_var['LOGIN_VALUE'])) echo $this->_var['LOGIN_VALUE']; ?>" class="small_text" onblur="check_login(this.value);" /> &nbsp;<span id="msg_login"></span><div id="msg_login_div"></div></dd>								
								</dl>
								<dl>
									<dt><label for="password">* <?php if (isset($this->_var['L_PASSWORD'])) echo $this->_var['L_PASSWORD']; ?></label><br /><span><?php if (isset($this->_var['L_PASSWORD_EXPLAIN'])) echo $this->_var['L_PASSWORD_EXPLAIN']; ?></span></dt>
									<dd><input type="password" size="25" id="password" name="password" value="<?php if (isset($this->_var['PASSWORD_VALUE'])) echo $this->_var['PASSWORD_VALUE']; ?>" class="small_text" onblur="check_password(this.value);" /> &nbsp;<span id="msg_password1"></span><div id="msg_password1_div"></div></dd>								
								</dl>
								<dl>
									<dt><label for="password_repeat">* <?php if (isset($this->_var['L_PASSWORD_REPEAT'])) echo $this->_var['L_PASSWORD_REPEAT']; ?></label></dt>
									<dd><input type="password" size="25" id="password_repeat" name="password_repeat" value="<?php if (isset($this->_var['PASSWORD_VALUE'])) echo $this->_var['PASSWORD_VALUE']; ?>" class="small_text" onblur="check_password2(this.value);" /> &nbsp;<span id="msg_password2"></span><div id="msg_password2_div"></div></dd>
								</dl>
								<dl>
									<dt><label for="mail">* <?php if (isset($this->_var['L_MAIL'])) echo $this->_var['L_MAIL']; ?></label><br /><span><?php if (isset($this->_var['L_MAIL_EXPLAIN'])) echo $this->_var['L_MAIL_EXPLAIN']; ?></span></dt>
									<dd><input type="text" size="25" maxlength="50" id="mail" name="mail" value="<?php if (isset($this->_var['MAIL_VALUE'])) echo $this->_var['MAIL_VALUE']; ?>" class="small_text" onblur="check_mail(this.value);" /> &nbsp;<span id="msg_email"></span><div id="msg_email_div"></div></dd>								
								</dl>
								<dl>
									<dt><label for="create_session"><?php if (isset($this->_var['L_CREATE_SESSION'])) echo $this->_var['L_CREATE_SESSION']; ?></label></dt>
									<dd><input type="checkbox" name="create_session" id="create_session" <?php if (isset($this->_var['CHECKED_AUTO_CONNECTION'])) echo $this->_var['CHECKED_AUTO_CONNECTION']; ?> /></dd>								
								</dl>
								<dl>
									<dt><label for="auto_connection"><?php if (isset($this->_var['L_AUTO_CONNECTION'])) echo $this->_var['L_AUTO_CONNECTION']; ?></label></dt>
									<dd><input type="checkbox" name="auto_connection" id="auto_connection" <?php if (isset($this->_var['CHECKED_AUTO_CONNECTION'])) echo $this->_var['CHECKED_AUTO_CONNECTION']; ?> /></dd>								
								</dl>
							</fieldset>
							
							<fieldset class="submit_case">
								<a href="<?php if (isset($this->_var['U_PREVIOUS_STEP'])) echo $this->_var['U_PREVIOUS_STEP']; ?>" title="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>"><img src="templates/images/left.png" class="valign_middle" alt="<?php if (isset($this->_var['L_PREVIOUS_STEP'])) echo $this->_var['L_PREVIOUS_STEP']; ?>" /></a>
								&nbsp;
								<input type="image" src="templates/images/right.png" title="<?php if (isset($this->_var['L_NEXT_STEP'])) echo $this->_var['L_NEXT_STEP']; ?>" class="img_submit" />
								<input type="hidden" name="submit" value="submit" />
							</fieldset>
						</form>
					</td>
					<?php }echo ' ';if (isset($this->_var['C_END']) && $this->_var['C_END']) { ?>
					<td class="row_contents">
						<?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?>						
						<fieldset class="submit_case" style="width:450px;text-align:center">
							<table style="margin:auto;">
								<tr>
									<td style="width:50%">
										<a href="<?php if (isset($this->_var['U_INDEX'])) echo $this->_var['U_INDEX']; ?>"><img src="templates/images/go-home.png" alt="<?php if (isset($this->_var['L_SITE_INDEX'])) echo $this->_var['L_SITE_INDEX']; ?>" /></a>
									</td>
									<td style="padding: 0 20px;">
										<a href="<?php if (isset($this->_var['U_ADMIN_INDEX'])) echo $this->_var['U_ADMIN_INDEX']; ?>"><img src="templates/images/admin_panel.png" alt="<?php if (isset($this->_var['L_ADMIN_INDEX'])) echo $this->_var['L_ADMIN_INDEX']; ?>" /></a>
									</td>
								</tr>
								<tr>
									<td style="width:50%">
										<a href="<?php if (isset($this->_var['U_INDEX'])) echo $this->_var['U_INDEX']; ?>"><?php if (isset($this->_var['L_SITE_INDEX'])) echo $this->_var['L_SITE_INDEX']; ?></a>
									</td>
									<td style="padding:0 20px;">
										<a href="<?php if (isset($this->_var['U_ADMIN_INDEX'])) echo $this->_var['U_ADMIN_INDEX']; ?>"><?php if (isset($this->_var['L_ADMIN_INDEX'])) echo $this->_var['L_ADMIN_INDEX']; ?></a>
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
					<?php } ?>
				</tr>
			</table>		
		</div>
	</div>
	<div id="footer">
		<span>
			<?php if (isset($this->_var['L_POWERED_BY'])) echo $this->_var['L_POWERED_BY']; ?> <a style="font-size:10px" href="http://www.phpboost.com" title="PHPBoost">PHPBoost <?php if (isset($this->_var['PHPBOOST_VERSION'])) echo $this->_var['PHPBOOST_VERSION']; ?></a> <?php if (isset($this->_var['L_PHPBOOST_RIGHT'])) echo $this->_var['L_PHPBOOST_RIGHT']; ?>
		</span>	
	</div>
	</body>
</html>
