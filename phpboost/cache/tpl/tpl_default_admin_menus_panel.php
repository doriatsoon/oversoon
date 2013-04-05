<div id="admin_quick_menu">
    <ul>
        <li class="title_menu"><?php if (isset($this->_var['L_MENUS_MANAGEMENT'])) echo $this->_var['L_MENUS_MANAGEMENT']; ?></li>
        <li>
            <a href="menus.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus.png" alt="<?php if (isset($this->_var['L_MENUS_MANAGEMENT'])) echo $this->_var['L_MENUS_MANAGEMENT']; ?>" /></a><br />
            <a href="menus.php" class="quick_link"><?php if (isset($this->_var['L_MENUS_MANAGEMENT'])) echo $this->_var['L_MENUS_MANAGEMENT']; ?></a>
        </li>
        <li>
            <a href="links.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus.png" alt="L_ADD_LINKS_MENUS" /></a><br />
            <a href="links.php" class="quick_link"><?php if (isset($this->_var['L_ADD_LINKS_MENUS'])) echo $this->_var['L_ADD_LINKS_MENUS']; ?></a>
        </li>
        <li>
            <a href="content.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus.png" alt="<?php if (isset($this->_var['L_ADD_CONTENT_MENUS'])) echo $this->_var['L_ADD_CONTENT_MENUS']; ?>" /></a><br />
            <a href="content.php" class="quick_link"><?php if (isset($this->_var['L_ADD_CONTENT_MENUS'])) echo $this->_var['L_ADD_CONTENT_MENUS']; ?></a>
        </li>
        <li>
            <a href="feed.php"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus.png" alt="<?php if (isset($this->_var['L_ADD_FEED_MENUS'])) echo $this->_var['L_ADD_FEED_MENUS']; ?>" /></a><br />
            <a href="feed.php" class="quick_link"><?php if (isset($this->_var['L_ADD_FEED_MENUS'])) echo $this->_var['L_ADD_FEED_MENUS']; ?></a>
        </li>
        <li>
            <a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_themes.php?edit=1&amp;name=<?php if (isset($this->_var['THEME_NAME'])) echo $this->_var['THEME_NAME']; ?>"><img src="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/menus.png" alt="<?php if (isset($this->_var['L_MANAGE_THEME_COLUMNS'])) echo $this->_var['L_MANAGE_THEME_COLUMNS']; ?>" /></a><br />
            <a href="<?php if (isset($this->_var['PATH_TO_ROOT'])) echo $this->_var['PATH_TO_ROOT']; ?>/admin/admin_themes.php?edit=1&amp;name=<?php if (isset($this->_var['THEME_NAME'])) echo $this->_var['THEME_NAME']; ?>" class="quick_link"><?php if (isset($this->_var['L_MANAGE_THEME_COLUMNS'])) echo $this->_var['L_MANAGE_THEME_COLUMNS']; ?></a>
        </li>
    </ul>
</div>
