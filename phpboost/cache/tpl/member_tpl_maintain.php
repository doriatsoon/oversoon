<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php if (isset($this->_var['L_XML_LANGUAGE'])) echo $this->_var['L_XML_LANGUAGE']; ?>" >
	<head>
		<title><?php if (isset($this->_var['SITE_NAME'])) echo $this->_var['SITE_NAME']; ?> : <?php if (isset($this->_var['L_MAINTAIN_TITLE'])) echo $this->_var['L_MAINTAIN_TITLE']; ?></title>
		<link rel="stylesheet" href="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/design.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/global.css" type="text/css" media="screen, print, handheld" />
		<link rel="stylesheet" href="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/generic.css" type="text/css" media="screen, print, handheld" />
		<link rel="stylesheet" href="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/content.css" type="text/css" media="screen, print, handheld" />
		<link rel="stylesheet" href="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/theme/bbcode.css" type="text/css" media="screen, print, handheld" />
		<link rel="shortcut" href="../favicon.ico" />
		
		<style type="text/css">
			#content{
				height:750px;
			}
			html>body #content {
				height:auto;
				min-height:750px;
			}
			#maintain{
				text-align:center;
				padding:30px;
				margin-top:150px;
				margin-bottom:100px;
			}
			.delay{
				width:280px;				
				border:1px solid black;
				padding:15px;
				margin:auto;			
			}
		</style>					
	</head>
	<body>		
		<div id="content">
			<div id="maintain">					
				<?php if (isset($this->_var['L_MAINTAIN'])) echo $this->_var['L_MAINTAIN'];echo ' ';if (isset($this->_var['C_DISPLAY_DELAY']) && $this->_var['C_DISPLAY_DELAY']) { ?>
				<br /><br /><br /><br />				
				<div class="delay">
					<?php if (isset($this->_var['L_MAINTAIN_DELAY'])) echo $this->_var['L_MAINTAIN_DELAY']; ?>
					<br /><br />	
					<script type="text/javascript">
					<!--
						document.write('<div id="release"><?php if (isset($this->_var['L_LOADING'])) echo $this->_var['L_LOADING']; ?>...</div>');
					-->
					</script>
					<noscript>				
						<p style="display:inline;font-weight:bold;"><?php if (isset($this->_var['DELAY'])) echo $this->_var['DELAY']; ?></p>
					</noscript>
				</div>
				
				<script type="text/javascript">
				<!--
				var release_timeout_seconds = 0;	
				function release(year, month, day, hour, minute, second)
				{
					if( document.getElementById('release') )
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
				release(<?php if (isset($this->_var['MAINTAIN_RELEASE_FORMAT'])) echo $this->_var['MAINTAIN_RELEASE_FORMAT']; ?>);
				-->
				</script>
				<?php } ?>	
			</div>	
			<p style="text-align:center;"><?php if (isset($this->_var['U_INDEX'])) echo $this->_var['U_INDEX']; ?></p>	
		</div>	
		<div id="footer" style="position:relative;bottom:0px">
			<span>
				<!-- This mention must figured on the website ! -->
				<!-- Cette mention dois figurer sur le site ! -->
				<?php if (isset($this->_var['L_POWERED_BY'])) echo $this->_var['L_POWERED_BY']; ?> <a style="font-size:10px" href="http://www.phpboost.com" title="PHPBoost">PHPBoost <?php if (isset($this->_var['PHPBOOST_VERSION'])) echo $this->_var['PHPBOOST_VERSION']; ?></a> <?php if (isset($this->_var['L_PHPBOOST_RIGHT'])) echo $this->_var['L_PHPBOOST_RIGHT']; ?>
			</span>	
			<?php if (isset($this->_var['C_DISPLAY_BENCH']) && $this->_var['C_DISPLAY_BENCH']) { ?>
			<br />
			<span>
				<?php if (isset($this->_var['L_ACHIEVED'])) echo $this->_var['L_ACHIEVED'];echo ' ';if (isset($this->_var['BENCH'])) echo $this->_var['BENCH'];if (isset($this->_var['L_UNIT_SECOND'])) echo $this->_var['L_UNIT_SECOND']; ?> - <?php if (isset($this->_var['REQ'])) echo $this->_var['REQ'];echo ' ';if (isset($this->_var['L_REQ'])) echo $this->_var['L_REQ']; ?>
			</span>	
			<?php }echo ' ';if (isset($this->_var['C_DISPLAY_AUTHOR_THEME']) && $this->_var['C_DISPLAY_AUTHOR_THEME']) { ?>
			<br />
			<span>
				<?php if (isset($this->_var['L_THEME'])) echo $this->_var['L_THEME'];echo ' ';if (isset($this->_var['L_THEME_NAME'])) echo $this->_var['L_THEME_NAME'];echo ' ';if (isset($this->_var['L_BY'])) echo $this->_var['L_BY']; ?> <a href="<?php if (isset($this->_var['U_THEME_AUTHOR_LINK'])) echo $this->_var['U_THEME_AUTHOR_LINK']; ?>" style="font-size:10px;"><?php if (isset($this->_var['L_THEME_AUTHOR'])) echo $this->_var['L_THEME_AUTHOR']; ?></a>
			</span>
			<?php } ?>
		</div>	
	</body>
</html>