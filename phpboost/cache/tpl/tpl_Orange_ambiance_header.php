<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php if (isset($this->_var['L_XML_LANGUAGE'])) echo $this->_var['L_XML_LANGUAGE']; ?>" >
	<head>
		<title><?php if (isset($this->_var['SITE_NAME'])) echo $this->_var['SITE_NAME']; ?> : <?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="description" content="<?php if (isset($this->_var['SITE_DESCRIPTION'])) echo $this->_var['SITE_DESCRIPTION'];echo ' ';if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?>" />
		<meta name="keywords" content="<?php if (isset($this->_var['SITE_KEYWORD'])) echo $this->_var['SITE_KEYWORD']; ?>" />
		<meta http-equiv="Content-Language" content="<?php if (isset($this->_var['L_XML_LANGUAGE'])) echo $this->_var['L_XML_LANGUAGE']; ?>" />
		<!-- Default CSS -->
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/default/theme/default.css" type="text/css" media="screen, print, handheld" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/default/framework/content/syndication/syndication.css" type="text/css" media="screen, print, handheld" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/design.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/global.css" type="text/css" media="screen, print, handheld" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/generic.css" type="text/css" media="screen, print, handheld" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/content.css" type="text/css" media="screen, print, handheld" />
		<link rel="stylesheet" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/bbcode.css" type="text/css" media="screen, print, handheld" />
		<!-- Alternative CSS -->
		<?php if (isset($this->_var['ALTERNATIVE_CSS'])) echo $this->_var['ALTERNATIVE_CSS']; ?>

		<link rel="shortcut icon" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/favicon.ico" type="image/x-icon" />
		<link rel="alternate" href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/syndication.php?m=news" type="application/rss+xml" title="RSS <?php if (isset($this->_var['SITE_NAME'])) echo $this->_var['SITE_NAME']; ?>" />
		
		<script type="text/javascript">
		<!--
			var PATH_TO_ROOT = "<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>";
			var TOKEN = "<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>";
		-->
		</script>
		<?php if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) { ?> <script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/content/tinymce/tiny_mce.js"></script> <?php } ?>

		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/scriptaculous/prototype.js"></script>
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/scriptaculous/scriptaculous.js"></script>
		<script type="text/javascript" src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/kernel/framework/js/global.js"></script>
	</head>
	<body>

<?php if (isset($this->_var['C_MAINTAIN_DELAY']) && $this->_var['C_MAINTAIN_DELAY']) {echo ' ';if (isset($this->_var['C_ALERT_MAINTAIN']) && $this->_var['C_ALERT_MAINTAIN']) { ?>
<div style="position:absolute;top:5px;width:99%;">
	<div style="position:relative;width:400px;margin:auto;margin-top:30px;" class="warning">
		<?php if (isset($this->_var['L_MAINTAIN_DELAY'])) echo $this->_var['L_MAINTAIN_DELAY']; ?>
		<br /><br />
		<script type="text/javascript">
			document.write('<div id="release"><?php if (isset($this->_var['L_LOADING'])) echo $this->_var['L_LOADING']; ?>...</div>');
		</script>
		<noscript>
			<strong><?php if (isset($this->_var['DELAY'])) echo $this->_var['DELAY']; ?></strong>
		</noscript>
	</div>
</div>
<?php } ?>

<script type="text/javascript">
<!--
var release_timeout_seconds = 0;
function release(year, month, day, hour, minute, second)
{
	if (document.getElementById('release'))
	{
		var sp_day = 86400;
		var sp_hour = 3600;
		var sp_minute = 60;
		
		now = new Date(<?php if (isset($this->_var['MAINTAIN_NOW_FORMAT'])) echo $this->_var['MAINTAIN_NOW_FORMAT']; ?>+release_timeout_seconds++);
		end = new Date(year, month, day, hour, minute, second);
		release_time = (end.getTime() - now.getTime())/1000;
		
		if( release_time <= 0 )
		{
			document.location.reload();
			release_time = '0';
		}
		else
			timeout = setTimeout('release('+year+', '+month+', '+day+', '+hour+', '+minute+', '+second+')', 1000);
		
		release_days = Math.floor(release_time/sp_day);
		release_time -= (release_days * sp_day);
		
		release_hours = Math.floor(release_time/sp_hour);
		release_time -= (release_hours * sp_hour);

		release_minutes = Math.floor(release_time/sp_minute);
		release_time -= (release_minutes * sp_minute);

		release_seconds = Math.floor(release_time);
		release_seconds = (release_seconds < 10) ? '0' + release_seconds : release_seconds;
		
		document.getElementById('release').innerHTML = '<strong>' + release_days + '</strong> <?php if (isset($this->_var['L_DAYS'])) echo $this->_var['L_DAYS']; ?> <strong>' + release_hours + '</strong> <?php if (isset($this->_var['L_HOURS'])) echo $this->_var['L_HOURS']; ?> <strong>' + release_minutes + '</strong> <?php if (isset($this->_var['L_MIN'])) echo $this->_var['L_MIN']; ?> <strong>' + release_seconds + '</strong> <?php if (isset($this->_var['L_SEC'])) echo $this->_var['L_SEC']; ?>';
	}
}
if (<?php if (isset($this->_var['UNSPECIFIED'])) echo $this->_var['UNSPECIFIED']; ?>)
	release(<?php if (isset($this->_var['MAINTAIN_RELEASE_FORMAT'])) echo $this->_var['MAINTAIN_RELEASE_FORMAT']; ?>);
else
{
	if (document.getElementById('release'))
		document.getElementById('release').innerHTML = '<strong><?php if (isset($this->_var['DELAY'])) echo $this->_var['DELAY']; ?></strong>';
}
-->
</script>
<?php } ?>

<div id="global">
	<div id="header_container">
		<div id="header">
			<h1 style="display:none;font-size:9px;"><?php if (isset($this->_var['SITE_NAME'])) echo $this->_var['SITE_NAME']; ?></h1>
			<?php if (isset($this->_var['C_MENUS_HEADER_CONTENT']) && $this->_var['C_MENUS_HEADER_CONTENT']) {echo ' ';if (isset($this->_var['MENUS_HEADER_CONTENT'])) echo $this->_var['MENUS_HEADER_CONTENT'];echo ' ';} ?>
		</div>
		<div id="sub_header">
			<?php if (isset($this->_var['C_MENUS_SUB_HEADER_CONTENT']) && $this->_var['C_MENUS_SUB_HEADER_CONTENT']) {echo ' ';if (isset($this->_var['MENUS_SUB_HEADER_CONTENT'])) echo $this->_var['MENUS_SUB_HEADER_CONTENT'];echo ' ';} ?>
		</div>
		<div class="spacer"></div>
	</div>
	
	<?php if (isset($this->_var['C_COMPTEUR']) && $this->_var['C_COMPTEUR']) { ?>
	<div id="compteur">
		<span class="text_strong"><?php if (isset($this->_var['L_VISIT'])) echo $this->_var['L_VISIT']; ?>:</span> <?php if (isset($this->_var['COMPTEUR_TOTAL'])) echo $this->_var['COMPTEUR_TOTAL']; ?>
		<br />
		<span class="text_strong"><?php if (isset($this->_var['L_TODAY'])) echo $this->_var['L_TODAY']; ?>:</span> <?php if (isset($this->_var['COMPTEUR_DAY'])) echo $this->_var['COMPTEUR_DAY']; ?>
	</div>
	<?php }echo ' ';if (isset($this->_var['C_MENUS_LEFT_CONTENT']) && $this->_var['C_MENUS_LEFT_CONTENT']) { ?>
	<div id="left_menu">
		<?php if (isset($this->_var['MENUS_LEFT_CONTENT'])) echo $this->_var['MENUS_LEFT_CONTENT']; ?>
	</div>
	<?php }echo ' ';if (isset($this->_var['C_MENUS_RIGHT_CONTENT']) && $this->_var['C_MENUS_RIGHT_CONTENT']) { ?>
	<div id="right_menu">
		<?php if (isset($this->_var['MENUS_RIGHT_CONTENT'])) echo $this->_var['MENUS_RIGHT_CONTENT']; ?>
	</div>
	<?php } ?>
	
	<div id="main">
		<?php if (isset($this->_var['C_MENUS_TOPCENTRAL_CONTENT']) && $this->_var['C_MENUS_TOPCENTRAL_CONTENT']) { ?>
		<div id="top_contents">
			<?php if (isset($this->_var['MENUS_TOPCENTRAL_CONTENT'])) echo $this->_var['MENUS_TOPCENTRAL_CONTENT']; ?>
		</div>
		<?php } ?>
		<div id="main_content">&nbsp;
			<div id="links">
				&nbsp;&nbsp;<a class="small_link" href="<?php if (isset($this->_var['START_PAGE'])) echo $this->_var['START_PAGE']; ?>" title="<?php if (isset($this->_var['L_INDEX'])) echo $this->_var['L_INDEX']; ?>"><?php if (isset($this->_var['L_INDEX'])) echo $this->_var['L_INDEX']; ?></a>
				<?php if (!isset($this->_block['link_bread_crumb']) || !is_array($this->_block['link_bread_crumb'])) $this->_block['link_bread_crumb'] = array();
foreach ($this->_block['link_bread_crumb'] as $link_bread_crumb_key => $link_bread_crumb_value) {
$_tmpb_link_bread_crumb = &$this->_block['link_bread_crumb'][$link_bread_crumb_key]; ?>
				<img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/breadcrumb.png" alt="" class="valign_middle" /> <a class="small_link" href="<?php if (isset($_tmpb_link_bread_crumb['URL'])) echo $_tmpb_link_bread_crumb['URL']; ?>" title="<?php if (isset($_tmpb_link_bread_crumb['TITLE'])) echo $_tmpb_link_bread_crumb['TITLE']; ?>"><?php if (isset($_tmpb_link_bread_crumb['TITLE'])) echo $_tmpb_link_bread_crumb['TITLE']; ?></a>
				<?php } ?>
			</div>