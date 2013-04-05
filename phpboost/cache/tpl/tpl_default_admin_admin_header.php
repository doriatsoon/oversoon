<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php if (isset($this->_var['L_XML_LANGUAGE'])) echo $this->_var['L_XML_LANGUAGE']; ?>" >
	<head>
		<title><?php if (isset($this->_var['SITE_NAME'])) echo $this->_var['SITE_NAME']; ?> :: <?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Language" content="<?php if (isset($this->_var['L_XML_LANGUAGE'])) echo $this->_var['L_XML_LANGUAGE']; ?>" />
		<!-- Default CSS -->
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/default/theme/admin_default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/default/theme/default.css" type="text/css" media="screen" />
        <!-- Theme CSS -->
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/design.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/global.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/content.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/generic.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/bbcode.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/admin.css" type="text/css" media="screen" />
		<!-- Alternative CSS -->
		<?php if (isset($this->_var['ALTERNATIVE_CSS'])) echo $this->_var['ALTERNATIVE_CSS']; ?>
		
		<link rel="shortcut icon" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/favicon.ico" type="image/x-icon" />
		
		<script type="text/javascript">
		<!--
			var PATH_TO_ROOT = "<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>";
			var TOKEN = "<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>";
		-->
		</script>
		<?php if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) { ?> <script language="javascript" type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/content/tinymce/tiny_mce.js"></script> <?php } ?>
		
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/scriptaculous/prototype-minified.js"></script>
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/scriptaculous/scriptaculous.js"></script>
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/global.js"></script>	

	</head>
	<body>
	<div id="global">
		<div id="header_admin_container">
			<div id="header_admin">&nbsp;</div>
			<div id="sub_header_admin">
				<div class="dynamic_menu">
					<?php $this->_include('subheader_menu'); ?>
				</div>
				<div id="admin_extend_link">
					<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_extend.php" class="admin_extend_link">
						<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/extendfield_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_EXTEND_MENU'])) echo $this->_var['L_EXTEND_MENU']; ?>
					</a>
				</div>
				<div class="spacer"></div>
			</div>
		</div>
		
		<div id="admin_main">
			