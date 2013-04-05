		<noscript>
			<div class="row2" style="text-align:right;">
				&nbsp;
				<a href="<?php if (isset($this->_var['U_COM'])) echo $this->_var['U_COM']; ?>"><?php if (isset($this->_var['L_COM'])) echo $this->_var['L_COM']; ?></a>&bull;
				<?php if (!isset($this->_block['tool']) || !is_array($this->_block['tool'])) $this->_block['tool'] = array();
foreach ($this->_block['tool'] as $tool_key => $tool_value) {
$_tmpb_tool = &$this->_block['tool'][$tool_key]; ?>
					<a href="<?php if (isset($_tmpb_tool['U_TOOL'])) echo $_tmpb_tool['U_TOOL']; ?>"><?php if (isset($_tmpb_tool['L_TOOL'])) echo $_tmpb_tool['L_TOOL']; ?></a>
					<?php if (!isset($_tmpb_tool['separation']) || !is_array($_tmpb_tool['separation'])) $_tmpb_tool['separation'] = array();
foreach ($_tmpb_tool['separation'] as $separation_key => $separation_value) {
$_tmpb_separation = &$_tmpb_tool['separation'][$separation_key]; ?>
						&bull;
					<?php }echo ' ';} ?>
				&nbsp;
				<br />
			</div>
		</noscript>

		<div style="margin-bottom:10px;">
			<div class="dynamic_menu" style="float:right;margin-right:55px;">
				<ul>
				<?php if (isset($this->_var['C_ACTIV_COM']) && $this->_var['C_ACTIV_COM']) { ?>
					<li>
						<h5 style="margin-right:20px;">
							<img src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/com.png" class="valign_middle" alt="" />
							<a href="<?php if (isset($this->_var['U_COM'])) echo $this->_var['U_COM']; ?>"><?php if (isset($this->_var['L_COM'])) echo $this->_var['L_COM']; ?></a>
						</h5>
					</li>
				<?php } ?>
					<li onmouseover="show_menu(1, 0);" onmouseout="hide_menu(0);">
						<h5 style="margin-right:20px;"><img src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/contribuate.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_OTHER_TOOLS'])) echo $this->_var['L_OTHER_TOOLS']; ?></h5>
						<ul id="smenu1">
							<?php if (!isset($this->_block['contribution_tools']) || !is_array($this->_block['contribution_tools'])) $this->_block['contribution_tools'] = array();
foreach ($this->_block['contribution_tools'] as $contribution_tools_key => $contribution_tools_value) {
$_tmpb_contribution_tools = &$this->_block['contribution_tools'][$contribution_tools_key]; ?>
							<li>
								<a href="<?php if (isset($_tmpb_contribution_tools['U_ACTION'])) echo $_tmpb_contribution_tools['U_ACTION']; ?>" title="<?php if (isset($_tmpb_contribution_tools['L_ACTION'])) echo $_tmpb_contribution_tools['L_ACTION']; ?>" onclick="<?php if (isset($_tmpb_contribution_tools['ONCLICK'])) echo $_tmpb_contribution_tools['ONCLICK']; ?>" <?php if (isset($_tmpb_contribution_tools['DM_A_CLASS'])) echo $_tmpb_contribution_tools['DM_A_CLASS']; ?>><?php if (isset($_tmpb_contribution_tools['L_ACTION'])) echo $_tmpb_contribution_tools['L_ACTION']; ?></a>
							</li>
							<?php } ?>	
						</ul>
					</li>
					<li onmouseover="show_menu(2, 0);" onmouseout="hide_menu(0);">
						<h5 style="margin-right:5px;"><img src="<?php if (isset($this->_var['WIKI_PATH'])) echo $this->_var['WIKI_PATH']; ?>/images/tools.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_CONTRIBUTION_TOOLS'])) echo $this->_var['L_CONTRIBUTION_TOOLS']; ?></h5>
						<ul id="smenu2">
							<?php if (!isset($this->_block['other_tools']) || !is_array($this->_block['other_tools'])) $this->_block['other_tools'] = array();
foreach ($this->_block['other_tools'] as $other_tools_key => $other_tools_value) {
$_tmpb_other_tools = &$this->_block['other_tools'][$other_tools_key]; ?>
							<li><a href="<?php if (isset($_tmpb_other_tools['U_ACTION'])) echo $_tmpb_other_tools['U_ACTION']; ?>" title="<?php if (isset($_tmpb_other_tools['L_ACTION'])) echo $_tmpb_other_tools['L_ACTION']; ?>" onclick="<?php if (isset($_tmpb_other_tools['ONCLICK'])) echo $_tmpb_other_tools['ONCLICK']; ?>" <?php if (isset($_tmpb_other_tools['DM_A_CLASS'])) echo $_tmpb_other_tools['DM_A_CLASS']; ?>><?php if (isset($_tmpb_other_tools['L_ACTION'])) echo $_tmpb_other_tools['L_ACTION']; ?></a></li>
							<?php } ?>		
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div  class="spacer" style="margin-top:15px;">&nbsp;</div>
		