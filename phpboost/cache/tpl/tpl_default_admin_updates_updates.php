<div id="admin_quick_menu">
    <ul>
        <li class="title_menu"><?php if (isset($this->_var['L_WEBSITE_UPDATES'])) echo $this->_var['L_WEBSITE_UPDATES']; ?></li>
        <li>
            <a href="updates.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/updater.png" alt="" /></a>
            <br />
            <a href="updates.php" class="quick_link"><?php if (isset($this->_var['L_WEBSITE_UPDATES'])) echo $this->_var['L_WEBSITE_UPDATES']; ?></a>
        </li>
        <li>
            <a href="updates.php?type=kernel"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/configuration.png" alt="" /></a>
            <br />
            <a href="updates.php?type=kernel" class="quick_link"><?php if (isset($this->_var['L_KERNEL'])) echo $this->_var['L_KERNEL']; ?></a>
        </li>
        <li>
            <a href="updates.php?type=module"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modules.png" alt="" /></a>
            <br />
            <a href="updates.php?type=module" class="quick_link"><?php if (isset($this->_var['L_MODULES'])) echo $this->_var['L_MODULES']; ?></a>
        </li>
        <li>
            <a href="updates.php?type=theme"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/themes.png" alt="" /></a>
            <br />
            <a href="updates.php?type=theme" class="quick_link"><?php if (isset($this->_var['L_THEMES'])) echo $this->_var['L_THEMES']; ?></a>
        </li>
    </ul>
</div>

<div id="admin_contents">
    <?php if (isset($this->_var['C_INCOMPATIBLE_PHP_VERSION']) && $this->_var['C_INCOMPATIBLE_PHP_VERSION']) { ?>
        &nbsp;<div class="warning" style="width:450px;margin:auto;margin-top:100px;"><?php if (isset($this->_var['L_INCOMPATIBLE_PHP_VERSION'])) echo $this->_var['L_INCOMPATIBLE_PHP_VERSION']; ?></div>
    <?php } else {echo ' ';if (isset($this->_var['C_UPDATES']) && $this->_var['C_UPDATES']) { ?>
            <div class="warning" style="width:450px;margin:auto;"><?php if (isset($this->_var['L_UPDATES_ARE_AVAILABLE'])) echo $this->_var['L_UPDATES_ARE_AVAILABLE']; ?></div>
            
            <table class="module_table">
                <tr><th colspan="5"><?php if (isset($this->_var['L_AVAILABLES_UPDATES'])) echo $this->_var['L_AVAILABLES_UPDATES']; ?></th></tr>
                <tr>
                    <?php if (isset($this->_var['C_ALL']) && $this->_var['C_ALL']) { ?> <td class="row2" style="text-align:center;width:50px;"><?php if (isset($this->_var['L_TYPE'])) echo $this->_var['L_TYPE']; ?></td> <?php } ?>
                    <td class="row2" style="text-align:center;"><?php if (isset($this->_var['L_DESCRIPTION'])) echo $this->_var['L_DESCRIPTION']; ?></td>
                    <td class="row2" style="text-align:center;width:75px;"><?php if (isset($this->_var['L_PRIORITY'])) echo $this->_var['L_PRIORITY']; ?></td>
                    <td class="row2" style="text-align:center;width:75px;"><?php if (isset($this->_var['L_UPDATE_DOWNLOAD'])) echo $this->_var['L_UPDATE_DOWNLOAD']; ?></td>
                </tr>
                <?php if (!isset($this->_block['apps']) || !is_array($this->_block['apps'])) $this->_block['apps'] = array();
foreach ($this->_block['apps'] as $apps_key => $apps_value) {
$_tmpb_apps = &$this->_block['apps'][$apps_key]; ?>
                <tr> 
                    <?php if (isset($this->_var['C_ALL']) && $this->_var['C_ALL']) { ?> <td class="row1" style="text-align:center;"><?php if (isset($_tmpb_apps['type'])) echo $_tmpb_apps['type']; ?></td> <?php } ?>
                    <td class="row1">
                        <?php if (isset($this->_var['L_NAME'])) echo $this->_var['L_NAME']; ?> : <strong><?php if (isset($_tmpb_apps['name'])) echo $_tmpb_apps['name']; ?></strong> - <?php if (isset($this->_var['L_VERSION'])) echo $this->_var['L_VERSION']; ?> : <strong><?php if (isset($_tmpb_apps['version'])) echo $_tmpb_apps['version']; ?></strong>
                        <div style="padding:5px;padding-top:10px;text-align:justify;"><?php if (isset($_tmpb_apps['short_description'])) echo $_tmpb_apps['short_description']; ?></div>
                        <p style="text-align:right;"><a href="detail.php?identifier=<?php if (isset($_tmpb_apps['identifier'])) echo $_tmpb_apps['identifier']; ?>" title="<?php if (isset($this->_var['L_MORE_DETAILS'])) echo $this->_var['L_MORE_DETAILS']; ?>" class="small_link"><?php if (isset($this->_var['L_DETAILS'])) echo $this->_var['L_DETAILS']; ?></a></p>
                    </td>
                    <td class="row1 <?php if (isset($_tmpb_apps['priority_css_class'])) echo $_tmpb_apps['priority_css_class']; ?>" ><?php if (isset($_tmpb_apps['L_PRIORITY'])) echo $_tmpb_apps['L_PRIORITY']; ?></td>
                    <td class="row1" style="text-align:center;">
                        <a href="<?php if (isset($_tmpb_apps['download_url'])) echo $_tmpb_apps['download_url']; ?>" title="<?php if (isset($this->_var['L_DOWNLOAD_THE_COMPLETE_PACK'])) echo $this->_var['L_DOWNLOAD_THE_COMPLETE_PACK']; ?>"><?php if (isset($this->_var['L_DOWNLOAD_PACK'])) echo $this->_var['L_DOWNLOAD_PACK']; ?></a><br />
                        <?php if (isset($_tmpb_apps['update_url']) && $_tmpb_apps['update_url']) { ?>
                        /<br />
                        <a href="<?php if (isset($_tmpb_apps['update_url'])) echo $_tmpb_apps['update_url']; ?>" title="<?php if (isset($this->_var['L_DOWNLOAD_THE_UPDATE_PACK'])) echo $this->_var['L_DOWNLOAD_THE_UPDATE_PACK']; ?>"><?php if (isset($this->_var['L_UPDATE_PACK'])) echo $this->_var['L_UPDATE_PACK']; ?></a>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            &nbsp;<div class="question" style="width:300px;margin:auto;margin-top:100px;"><?php if (isset($this->_var['L_NO_AVAILABLES_UPDATES'])) echo $this->_var['L_NO_AVAILABLES_UPDATES']; ?></div>
        <?php } ?>
        <p class="center" style="margin-top:100px;">
			<a href="<?php if (isset($this->_var['U_CHECK'])) echo $this->_var['U_CHECK']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/updater.png" alt="" /></a>
			<br />
			<a href="<?php if (isset($this->_var['U_CHECK'])) echo $this->_var['U_CHECK']; ?>"><?php if (isset($this->_var['L_CHECK_FOR_UPDATES_NOW'])) echo $this->_var['L_CHECK_FOR_UPDATES_NOW']; ?></a>
		</p>
    <?php } ?>
</div>