    			<br /><br /><br />
    		</div>
        </div>
		<div id="footer">
			<span>
				<!-- This mention must figured on the website ! -->
				<!-- Cette mention dois figurer sur le site ! -->
				<?php if (isset($this->_var['L_POWERED_BY'])) echo $this->_var['L_POWERED_BY']; ?> <a style="font-size:10px" href="http://www.phpboost.com" title="PHPBoost">PHPBoost <?php if (isset($this->_var['PHPBOOST_VERSION'])) echo $this->_var['PHPBOOST_VERSION']; ?></a> <?php if (isset($this->_var['L_PHPBOOST_RIGHT'])) echo $this->_var['L_PHPBOOST_RIGHT']; ?>
			</span>	
			<?php if (isset($this->_var['C_DISPLAY_BENCH']) && $this->_var['C_DISPLAY_BENCH']) { ?>
			<span>
				|
				<?php if (isset($this->_var['L_ACHIEVED'])) echo $this->_var['L_ACHIEVED'];echo ' ';if (isset($this->_var['BENCH'])) echo $this->_var['BENCH'];if (isset($this->_var['L_UNIT_SECOND'])) echo $this->_var['L_UNIT_SECOND']; ?> - <?php if (isset($this->_var['REQ'])) echo $this->_var['REQ'];echo ' ';if (isset($this->_var['L_REQ'])) echo $this->_var['L_REQ']; ?>
			</span>	
			<?php }echo ' ';if (isset($this->_var['C_DISPLAY_AUTHOR_THEME']) && $this->_var['C_DISPLAY_AUTHOR_THEME']) { ?>
			<span>
				| <?php if (isset($this->_var['L_THEME'])) echo $this->_var['L_THEME'];echo ' ';if (isset($this->_var['L_THEME_NAME'])) echo $this->_var['L_THEME_NAME'];echo ' ';if (isset($this->_var['L_BY'])) echo $this->_var['L_BY']; ?> <a href="<?php if (isset($this->_var['U_THEME_AUTHOR_LINK'])) echo $this->_var['U_THEME_AUTHOR_LINK']; ?>" style="font-size:10px;"><?php if (isset($this->_var['L_THEME_AUTHOR'])) echo $this->_var['L_THEME_AUTHOR']; ?></a>
			</span>
			<?php } ?>
		</div>
	</body>
</html>
