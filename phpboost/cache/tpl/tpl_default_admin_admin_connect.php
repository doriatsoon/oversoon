<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php if (isset($this->_var['L_XML_LANGUAGE'])) echo $this->_var['L_XML_LANGUAGE']; ?>" >
	<head>
		<title><?php if (isset($this->_var['SITE_NAME'])) echo $this->_var['SITE_NAME']; ?> :: <?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Language" content="<?php if (isset($this->_var['L_XML_LANGUAGE'])) echo $this->_var['L_XML_LANGUAGE']; ?>" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/design.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/global.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/content.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/generic.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/bbcode.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/admin.css" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/favicon.ico" type="image/x-icon" />
		
		<script type="text/javascript">
		<!--
			var PATH_TO_ROOT = "<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>";
			var TOKEN = "<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>";
		-->
		</script>
		
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/scriptaculous/prototype.js"></script>
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/scriptaculous/scriptaculous.js"></script>
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/global.js"></script>	
	</head>
	<body>
		<script type="text/javascript">
		<!--
		function check_connect(){
			if(document.getElementById('login').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_PSEUDO'])) echo $this->_var['L_REQUIRE_PSEUDO']; ?>");
				return false;
			}
			if(document.getElementById('password').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_PASSWORD'])) echo $this->_var['L_REQUIRE_PASSWORD']; ?>");
				return false;
			}
			return true;
		}

		-->
		</script>
		
		<form action="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_index.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post" onsubmit="return check_connect();" class="fieldset_content" style="width:550px;margin:auto;margin-top:10%">
			<fieldset>
				<legend><?php if (isset($this->_var['L_ADMIN'])) echo $this->_var['L_ADMIN']; ?></legend>
				<dl>
					<dt><label for="login"><?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?></label></dt>
					<dd><label><input size="15" type="text" class="text" id="login" name="login" maxlength="25" /></label></dd>
				</dl>
				<dl>
					<dt><label for="password"><?php if (isset($this->_var['L_PASSWORD'])) echo $this->_var['L_PASSWORD']; ?></label></dt>
					<dd><label><input size="15" type="password" id="password" name="password" class="text" maxlength="30" /></label></dd>
				</dl>
				<?php if (!isset($this->_block['unlock']) || !is_array($this->_block['unlock'])) $this->_block['unlock'] = array();
foreach ($this->_block['unlock'] as $unlock_key => $unlock_value) {
$_tmpb_unlock = &$this->_block['unlock'][$unlock_key]; ?>
				<dl>
					<dt><label for="unlock"><?php if (isset($this->_var['L_UNLOCK'])) echo $this->_var['L_UNLOCK']; ?></label></dt>
					<dd><label><input size="15" type="password" name="unlock" id="unlock" class="text" maxlength="30" /></label></dd>
				</dl>
				<?php } ?>
				<dl>
					<dt><label for="auto"><?php if (isset($this->_var['L_AUTOCONNECT'])) echo $this->_var['L_AUTOCONNECT']; ?></label></dt>
					<dd><label><input type="checkbox" checked="checked" name="auto" id="auto" /></label></dd>
				</dl>
			</fieldset>			
			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?></legend>
				<input type="submit" name="connect" value="<?php if (isset($this->_var['L_CONNECT'])) echo $this->_var['L_CONNECT']; ?>" class="submit" />		
			</fieldset>	
		</form>
	</body>
</html>
