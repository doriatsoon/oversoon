<ul>
	<li onmouseover="show_menu(1, 0);" onmouseout="hide_menu(0);">
		<h5 class="links"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/admin_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_INDEX'])) echo $this->_var['L_INDEX']; ?></h5>
		<ul id="smenu1">
			<li><a href="<?php if (isset($this->_var['U_INDEX_SITE'])) echo $this->_var['U_INDEX_SITE']; ?>" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/admin_mini.png);"><?php if (isset($this->_var['L_INDEX_SITE'])) echo $this->_var['L_INDEX_SITE']; ?></a></li>
			<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_index.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/ranks_mini.png);"><?php if (isset($this->_var['L_INDEX_ADMIN'])) echo $this->_var['L_INDEX_ADMIN']; ?></a></li>
			<li class="separator"></li>
			<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_index.php?disconnect=true&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/home_mini.png);"><?php if (isset($this->_var['L_DISCONNECT'])) echo $this->_var['L_DISCONNECT']; ?></a></li>
			<?php if (isset($this->_var['C_ADMIN_LINKS_1']) && $this->_var['C_ADMIN_LINKS_1']) { ?>
			<li class="separator"></li>
				<?php if (!isset($this->_block['admin_links_1']) || !is_array($this->_block['admin_links_1'])) $this->_block['admin_links_1'] = array();
foreach ($this->_block['admin_links_1'] as $admin_links_1_key => $admin_links_1_value) {
$_tmpb_admin_links_1 = &$this->_block['admin_links_1'][$admin_links_1_key];echo ' ';if (isset($_tmpb_admin_links_1['C_ADMIN_LINKS_EXTEND']) && $_tmpb_admin_links_1['C_ADMIN_LINKS_EXTEND']) { ?>
			<li class="extend" onmouseover="show_menu(1<?php if (isset($_tmpb_admin_links_1['IDMENU'])) echo $_tmpb_admin_links_1['IDMENU']; ?>, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($_tmpb_admin_links_1['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_1['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_1['IMG'])) echo $_tmpb_admin_links_1['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_1['NAME'])) echo $_tmpb_admin_links_1['NAME']; ?></a>
				<ul id="ssmenu1<?php if (isset($_tmpb_admin_links_1['IDMENU'])) echo $_tmpb_admin_links_1['IDMENU']; ?>">
					<?php if (isset($_tmpb_admin_links_1['LINKS'])) echo $_tmpb_admin_links_1['LINKS']; ?>
				</ul>
			</li>
					<?php } else { ?>
			<li><a href="<?php if (isset($_tmpb_admin_links_1['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_1['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_1['IMG'])) echo $_tmpb_admin_links_1['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_1['NAME'])) echo $_tmpb_admin_links_1['NAME']; ?></a></li>
					<?php }echo ' ';}echo ' ';} ?>
		</ul>
	</li>
	<li onmouseover="show_menu(2, 0);" onmouseout="hide_menu(0);">
		<h5 class="links"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/ranks_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_INDEX_ADMIN'])) echo $this->_var['L_INDEX_ADMIN']; ?></h5>
		<ul id="smenu2">
			<li class="extend" onmouseover="show_menu(21, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_config.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/config_mini.png);"><?php if (isset($this->_var['L_CONFIGURATION'])) echo $this->_var['L_CONFIGURATION']; ?></a>
				<ul id="ssmenu21">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_config.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/config_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_config.php?adv=1" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/config_mini.png);"><?php if (isset($this->_var['L_CONFIG_ADVANCED'])) echo $this->_var['L_CONFIG_ADVANCED']; ?></a></li>
				</ul>
			</li>
			<li class="extend" onmouseover="show_menu(22, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_themes.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/themes_mini.png);"><?php if (isset($this->_var['L_THEME'])) echo $this->_var['L_THEME']; ?></a>
				<ul id="ssmenu22">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_themes.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/themes_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_themes_add.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/themes_mini.png);"><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></a></li>
				</ul>
			</li>
			<li class="extend" onmouseover="show_menu(23, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_lang.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/languages_mini.png);"><?php if (isset($this->_var['L_LANG'])) echo $this->_var['L_LANG']; ?></a>
				<ul id="ssmenu23">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_lang.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/languages_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_lang_add.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/languages_mini.png);"><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></a></li>
				</ul>
			</li>
			<li class="extend" onmouseover="show_menu(24, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_smileys.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/smileys_mini.png);"><?php if (isset($this->_var['L_SMILEY'])) echo $this->_var['L_SMILEY']; ?></a>
				<ul id="ssmenu24">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_smileys.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/smileys_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_smileys_add.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/smileys_mini.png);"><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></a></li>
				</ul>
			</li>
			<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_alerts.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/administrator_alert_mini.png);"><?php if (isset($this->_var['L_ADMINISTRATOR_ALERTS'])) echo $this->_var['L_ADMINISTRATOR_ALERTS']; ?></a></li>
			<?php if (isset($this->_var['C_ADMIN_LINKS_2']) && $this->_var['C_ADMIN_LINKS_2']) { ?>
			<li class="separator"></li>
				<?php if (!isset($this->_block['admin_links_2']) || !is_array($this->_block['admin_links_2'])) $this->_block['admin_links_2'] = array();
foreach ($this->_block['admin_links_2'] as $admin_links_2_key => $admin_links_2_value) {
$_tmpb_admin_links_2 = &$this->_block['admin_links_2'][$admin_links_2_key];echo ' ';if (isset($_tmpb_admin_links_2['C_ADMIN_LINKS_EXTEND']) && $_tmpb_admin_links_2['C_ADMIN_LINKS_EXTEND']) { ?>
			<li class="extend" onmouseover="show_menu(2<?php if (isset($_tmpb_admin_links_2['IDMENU'])) echo $_tmpb_admin_links_2['IDMENU']; ?>, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($_tmpb_admin_links_2['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_2['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_2['IMG'])) echo $_tmpb_admin_links_2['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_2['NAME'])) echo $_tmpb_admin_links_2['NAME']; ?></a>
				<ul id="ssmenu2<?php if (isset($_tmpb_admin_links_2['IDMENU'])) echo $_tmpb_admin_links_2['IDMENU']; ?>">
					<?php if (isset($_tmpb_admin_links_2['LINKS'])) echo $_tmpb_admin_links_2['LINKS']; ?>
				</ul>
			</li>
					<?php } else { ?>
			<li><a href="<?php if (isset($_tmpb_admin_links_2['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_2['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_2['IMG'])) echo $_tmpb_admin_links_2['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_2['NAME'])) echo $_tmpb_admin_links_2['NAME']; ?></a></li>
					<?php }echo ' ';}echo ' ';} ?>
		</ul>
	</li>
	<li onmouseover="show_menu(3, 0);" onmouseout="hide_menu(0);">
		<h5 class="links"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/tools_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_TOOLS'])) echo $this->_var['L_TOOLS']; ?></h5>
		<ul id="smenu3">			
            <li class="extend" onmouseover="show_menu(31, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/updates/updates.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/updater_mini.png);"><?php if (isset($this->_var['L_WEBSITE_UPDATES'])) echo $this->_var['L_WEBSITE_UPDATES']; ?></a>
				<ul id="ssmenu31">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/updates/updates.php?type=kernel" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/configuration_mini.png);"><?php if (isset($this->_var['L_KERNEL'])) echo $this->_var['L_KERNEL']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/updates/updates.php?type=module" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules_mini.png);"><?php if (isset($this->_var['L_MODULES'])) echo $this->_var['L_MODULES']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/updates/updates.php?type=theme" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/themes_mini.png);"><?php if (isset($this->_var['L_THEMES'])) echo $this->_var['L_THEMES']; ?></a></li>
				</ul>
			</li>
			<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_maintain.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/maintain_mini.png);"><?php if (isset($this->_var['L_MAINTAIN'])) echo $this->_var['L_MAINTAIN']; ?></a></li>
			<li class="extend" onmouseover="show_menu(32, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_cache.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/cache_mini.png);"><?php if (isset($this->_var['L_CACHE'])) echo $this->_var['L_CACHE']; ?></a>
				<ul id="ssmenu32">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_cache.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/cache_mini.png);"><?php if (isset($this->_var['L_CACHE'])) echo $this->_var['L_CACHE']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_cache.php?cache=syndication" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/rss_mini.png);"><?php if (isset($this->_var['L_SYNDICATION'])) echo $this->_var['L_SYNDICATION']; ?></a></li>
				</ul>
			</li>		
			<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_errors.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/errors_mini.png);"><?php if (isset($this->_var['L_ERRORS'])) echo $this->_var['L_ERRORS']; ?></a></li>
			<li class="extend" onmouseover="show_menu(33, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_system_report.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/server_mini.png);"><?php if (isset($this->_var['L_SERVER'])) echo $this->_var['L_SERVER']; ?></a>
				<ul id="ssmenu33">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_phpinfo.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/phpinfo_mini.png);"><?php if (isset($this->_var['L_PHPINFO'])) echo $this->_var['L_PHPINFO']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_system_report.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/system_report_mini.png);"><?php if (isset($this->_var['L_SYSTEM_REPORT'])) echo $this->_var['L_SYSTEM_REPORT']; ?></a></li>
				</ul>
			</li>
			<?php if (isset($this->_var['C_ADMIN_LINKS_3']) && $this->_var['C_ADMIN_LINKS_3']) { ?>
			<li class="separator"></li>
				<?php if (!isset($this->_block['admin_links_3']) || !is_array($this->_block['admin_links_3'])) $this->_block['admin_links_3'] = array();
foreach ($this->_block['admin_links_3'] as $admin_links_3_key => $admin_links_3_value) {
$_tmpb_admin_links_3 = &$this->_block['admin_links_3'][$admin_links_3_key];echo ' ';if (isset($_tmpb_admin_links_3['C_ADMIN_LINKS_EXTEND']) && $_tmpb_admin_links_3['C_ADMIN_LINKS_EXTEND']) { ?>
			<li class="extend" onmouseover="show_menu(3<?php if (isset($_tmpb_admin_links_3['IDMENU'])) echo $_tmpb_admin_links_3['IDMENU']; ?>, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($_tmpb_admin_links_3['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_3['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_3['IMG'])) echo $_tmpb_admin_links_3['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_3['NAME'])) echo $_tmpb_admin_links_3['NAME']; ?></a>
				<ul id="ssmenu3<?php if (isset($_tmpb_admin_links_3['IDMENU'])) echo $_tmpb_admin_links_3['IDMENU']; ?>">
					<?php if (isset($_tmpb_admin_links_3['LINKS'])) echo $_tmpb_admin_links_3['LINKS']; ?>
				</ul>
			</li>
					<?php } else { ?>
			<li><a href="<?php if (isset($_tmpb_admin_links_3['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_3['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_3['IMG'])) echo $_tmpb_admin_links_3['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_3['NAME'])) echo $_tmpb_admin_links_3['NAME']; ?></a></li>
					<?php }echo ' ';}echo ' ';} ?>
		</ul>
	</li>
	<li onmouseover="show_menu(4, 0);" onmouseout="hide_menu(0);">
		<h5 class="links"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/groups_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_USER'])) echo $this->_var['L_USER']; ?></h5>
		<ul id="smenu4">
			<li class="extend" onmouseover="show_menu(41, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_members.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members_mini.png);"><?php if (isset($this->_var['L_USER'])) echo $this->_var['L_USER']; ?></a>
				<ul id="ssmenu41">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_members.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_members.php?add=1" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members_mini.png);"><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_members_config.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members_mini.png);"><?php if (isset($this->_var['L_CONFIGURATION'])) echo $this->_var['L_CONFIGURATION']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_members_punishment.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/members_mini.png);"><?php if (isset($this->_var['L_PUNISHEMENT'])) echo $this->_var['L_PUNISHEMENT']; ?></a></li>
				</ul>
			</li>								
			<li class="extend" onmouseover="show_menu(42, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_groups.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/groups_mini.png);"><?php if (isset($this->_var['L_GROUP'])) echo $this->_var['L_GROUP']; ?></a>
				<ul id="ssmenu42">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_groups.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/groups_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_groups.php?add=1" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/groups_mini.png);"><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></a></li>
				</ul>
			</li>
			<li onmouseover="show_menu(43, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_extend_field.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/extendfield_mini.png);"><?php if (isset($this->_var['L_EXTEND_FIELD'])) echo $this->_var['L_EXTEND_FIELD']; ?></a>
				<ul id="ssmenu43">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_extend_field.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/extendfield_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_extend_field_add.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/extendfield_mini.png);"><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></a></li>
				</ul>
			</li>
			<li class="extend" onmouseover="show_menu(44, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_ranks.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/ranks_mini.png);"><?php if (isset($this->_var['L_RANKS'])) echo $this->_var['L_RANKS']; ?></a>
				<ul id="ssmenu44">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_ranks.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/ranks_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_ranks_add.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/ranks_mini.png);"><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></a></li>
				</ul>
			</li>
			<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_terms.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/terms_mini.png);"><?php if (isset($this->_var['L_TERMS'])) echo $this->_var['L_TERMS']; ?></a></li>
			<?php if (isset($this->_var['C_ADMIN_LINKS_4']) && $this->_var['C_ADMIN_LINKS_4']) { ?>
			<li class="separator"></li>
				<?php if (!isset($this->_block['admin_links_4']) || !is_array($this->_block['admin_links_4'])) $this->_block['admin_links_4'] = array();
foreach ($this->_block['admin_links_4'] as $admin_links_4_key => $admin_links_4_value) {
$_tmpb_admin_links_4 = &$this->_block['admin_links_4'][$admin_links_4_key];echo ' ';if (isset($_tmpb_admin_links_4['C_ADMIN_LINKS_EXTEND']) && $_tmpb_admin_links_4['C_ADMIN_LINKS_EXTEND']) { ?>
			<li class="extend" onmouseover="show_menu(4<?php if (isset($_tmpb_admin_links_4['IDMENU'])) echo $_tmpb_admin_links_4['IDMENU']; ?>, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($_tmpb_admin_links_4['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_4['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_4['IMG'])) echo $_tmpb_admin_links_4['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_4['NAME'])) echo $_tmpb_admin_links_4['NAME']; ?></a>
				<ul id="ssmenu4<?php if (isset($_tmpb_admin_links_4['IDMENU'])) echo $_tmpb_admin_links_4['IDMENU']; ?>">
					<?php if (isset($_tmpb_admin_links_4['LINKS'])) echo $_tmpb_admin_links_4['LINKS']; ?>
				</ul>
			</li>
					<?php } else { ?>
			<li><a href="<?php if (isset($_tmpb_admin_links_4['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_4['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_4['IMG'])) echo $_tmpb_admin_links_4['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_4['NAME'])) echo $_tmpb_admin_links_4['NAME']; ?></a></li>
					<?php }echo ' ';}echo ' ';} ?>
		</ul>
	</li>
	<li onmouseover="show_menu(5, 0);" onmouseout="hide_menu(0);">
		<h5 class="links"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/contents_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_CONTENTS'])) echo $this->_var['L_CONTENTS']; ?></h5>
		<ul id="smenu5">
			<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_content_config.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/content_mini.png);"><?php if (isset($this->_var['L_CONTENT_CONFIG'])) echo $this->_var['L_CONTENT_CONFIG']; ?></a></li>
			<li class="extend" onmouseover="show_menu(51, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/menus/menus.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus_mini.png);"><?php if (isset($this->_var['L_SITE_MENU'])) echo $this->_var['L_SITE_MENU']; ?></a>
				<ul id="ssmenu51">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/menus/menus.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
                       <li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/menus/links.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus_mini.png);"><?php if (isset($this->_var['L_ADD_LINKS_MENU'])) echo $this->_var['L_ADD_LINKS_MENU']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/menus/content.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus_mini.png);"><?php if (isset($this->_var['L_ADD_CONTENT_MENU'])) echo $this->_var['L_ADD_CONTENT_MENU']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/menus/feed.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus_mini.png);"><?php if (isset($this->_var['L_ADD_FEED_MENU'])) echo $this->_var['L_ADD_FEED_MENU']; ?></a></li>
                   </ul>
			</li>
			<li class="extend" onmouseover="show_menu(52, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_files.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/files_mini.png);"><?php if (isset($this->_var['L_FILES'])) echo $this->_var['L_FILES']; ?></a>
				<ul id="ssmenu52">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_files.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/files_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_files_config.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/files_mini.png);"><?php if (isset($this->_var['L_CONFIGURATION'])) echo $this->_var['L_CONFIGURATION']; ?></a></li>
				</ul>
			</li>								
			<li class="extend" onmouseover="show_menu(53, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_com.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/com_mini.png);"><?php if (isset($this->_var['L_COMMENTS'])) echo $this->_var['L_COMMENTS']; ?></a>
				<ul id="ssmenu53">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_com.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/com_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_com_config.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/com_mini.png);"><?php if (isset($this->_var['L_CONFIGURATION'])) echo $this->_var['L_CONFIGURATION']; ?></a></li>
				</ul>
			</li>
			<?php if (isset($this->_var['C_ADMIN_LINKS_5']) && $this->_var['C_ADMIN_LINKS_5']) { ?>
			<li class="separator"></li>
				<?php if (!isset($this->_block['admin_links_5']) || !is_array($this->_block['admin_links_5'])) $this->_block['admin_links_5'] = array();
foreach ($this->_block['admin_links_5'] as $admin_links_5_key => $admin_links_5_value) {
$_tmpb_admin_links_5 = &$this->_block['admin_links_5'][$admin_links_5_key];echo ' ';if (isset($_tmpb_admin_links_5['C_ADMIN_LINKS_EXTEND']) && $_tmpb_admin_links_5['C_ADMIN_LINKS_EXTEND']) { ?>
			<li class="extend" onmouseover="show_menu(5<?php if (isset($_tmpb_admin_links_5['IDMENU'])) echo $_tmpb_admin_links_5['IDMENU']; ?>, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($_tmpb_admin_links_5['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_5['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_5['IMG'])) echo $_tmpb_admin_links_5['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_5['NAME'])) echo $_tmpb_admin_links_5['NAME']; ?></a>
				<ul id="ssmenu5<?php if (isset($_tmpb_admin_links_5['IDMENU'])) echo $_tmpb_admin_links_5['IDMENU']; ?>">
					<?php if (isset($_tmpb_admin_links_5['LINKS'])) echo $_tmpb_admin_links_5['LINKS']; ?>
				</ul>
			</li>
					<?php } else { ?>
			<li><a href="<?php if (isset($_tmpb_admin_links_5['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_5['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_5['IMG'])) echo $_tmpb_admin_links_5['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_5['NAME'])) echo $_tmpb_admin_links_5['NAME']; ?></a></li>
					<?php }echo ' ';}echo ' ';} ?>
		</ul>
	</li>
	<li onmouseover="show_menu(6, 0);" onmouseout="hide_menu(0);">
		<h5 class="links"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_MODULES'])) echo $this->_var['L_MODULES']; ?></h5>
		<ul id="smenu6">
			<li class="extend" onmouseover="show_menu(61, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_modules.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules_mini.png);"><?php if (isset($this->_var['L_MODULES'])) echo $this->_var['L_MODULES']; ?></a>
				<ul id="ssmenu61">
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_modules.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules_mini.png);"><?php if (isset($this->_var['L_MANAGEMENT'])) echo $this->_var['L_MANAGEMENT']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_modules_add.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules_mini.png);"><?php if (isset($this->_var['L_ADD'])) echo $this->_var['L_ADD']; ?></a></li>
					<li><a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_modules_update.php" style="background-image:url(<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules_mini.png);"><?php if (isset($this->_var['L_UPDATE_MODULES'])) echo $this->_var['L_UPDATE_MODULES']; ?></a></li>
				</ul>
			</li>
			<?php if (isset($this->_var['C_ADMIN_LINKS_6']) && $this->_var['C_ADMIN_LINKS_6']) { ?>
			<li class="separator"></li>
				<?php if (!isset($this->_block['admin_links_6']) || !is_array($this->_block['admin_links_6'])) $this->_block['admin_links_6'] = array();
foreach ($this->_block['admin_links_6'] as $admin_links_6_key => $admin_links_6_value) {
$_tmpb_admin_links_6 = &$this->_block['admin_links_6'][$admin_links_6_key];echo ' ';if (isset($_tmpb_admin_links_6['C_ADMIN_LINKS_EXTEND']) && $_tmpb_admin_links_6['C_ADMIN_LINKS_EXTEND']) { ?>
			<li class="extend" onmouseover="show_menu(6<?php if (isset($_tmpb_admin_links_6['IDMENU'])) echo $_tmpb_admin_links_6['IDMENU']; ?>, 1);" onmouseout="hide_menu(1);">
				<a href="<?php if (isset($_tmpb_admin_links_6['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_6['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_6['IMG'])) echo $_tmpb_admin_links_6['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_6['NAME'])) echo $_tmpb_admin_links_6['NAME']; ?></a>
				<ul id="ssmenu6<?php if (isset($_tmpb_admin_links_6['IDMENU'])) echo $_tmpb_admin_links_6['IDMENU']; ?>">
					<?php if (isset($_tmpb_admin_links_6['LINKS'])) echo $_tmpb_admin_links_6['LINKS']; ?>
				</ul>
			</li>
					<?php } else { ?>
			<li><a href="<?php if (isset($_tmpb_admin_links_6['U_ADMIN_MODULE'])) echo $_tmpb_admin_links_6['U_ADMIN_MODULE']; ?>" style="background-image:url(<?php if (isset($_tmpb_admin_links_6['IMG'])) echo $_tmpb_admin_links_6['IMG']; ?>);"><?php if (isset($_tmpb_admin_links_6['NAME'])) echo $_tmpb_admin_links_6['NAME']; ?></a></li>
					<?php }echo ' ';}echo ' ';} ?>
		</ul>
	</li>
</ul>