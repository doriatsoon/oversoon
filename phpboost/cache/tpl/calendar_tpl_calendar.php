		<?php if (isset($this->_var['JAVA'])) echo $this->_var['JAVA'];echo ' ';if (isset($this->_var['C_CALENDAR_DISPLAY']) && $this->_var['C_CALENDAR_DISPLAY']) { ?>

		<form action="calendar.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="get">
			<div class="module_position">					
				<div class="module_top_l"></div>		
				<div class="module_top_r"></div>
				<div class="module_top">
					<strong><?php if (isset($this->_var['L_CALENDAR'])) echo $this->_var['L_CALENDAR'];echo ' ';if (isset($this->_var['ADMIN_CALENDAR'])) echo $this->_var['ADMIN_CALENDAR']; ?></strong>
				</div>
				<div class="module_contents" style="text-align:center;">
					<?php if (isset($this->_var['ADD'])) echo $this->_var['ADD']; ?>	
					<select name="m">
						<?php if (!isset($this->_block['month']) || !is_array($this->_block['month'])) $this->_block['month'] = array();
foreach ($this->_block['month'] as $month_key => $month_value) {
$_tmpb_month = &$this->_block['month'][$month_key];echo ' ';if (isset($_tmpb_month['MONTH'])) echo $_tmpb_month['MONTH'];echo ' ';} ?>	
					</select>
					&nbsp;
					<select class="nav" name="y">
					<?php if (!isset($this->_block['year']) || !is_array($this->_block['year'])) $this->_block['year'] = array();
foreach ($this->_block['year'] as $year_key => $year_value) {
$_tmpb_year = &$this->_block['year'][$year_key];echo ' ';if (isset($_tmpb_year['YEAR'])) echo $_tmpb_year['YEAR'];echo ' ';} ?>
					</select>	
					<input type="hidden" name="d" value="1" />
					&nbsp;
					<input type="submit" name="date" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />	
					
					<br /><br />
					<span id="act"></span>
					<table class="module_table" style="border-spacing:1px;border-collapse:separate">
						<tr>
							<td class="row3">
								<a href="calendar<?php if (isset($this->_var['U_PREVIOUS'])) echo $this->_var['U_PREVIOUS']; ?>" title="">&laquo;</a>
							</td> 
							<td colspan="5" class="row3">
								<?php if (isset($this->_var['DATE'])) echo $this->_var['DATE']; ?> 
							</td> 
							<td class="row3">
								<a href="calendar<?php if (isset($this->_var['U_NEXT'])) echo $this->_var['U_NEXT']; ?>" title="">&raquo;</a>
							</td> 
						</tr>
						<tr style="text-align:center;">
							<?php if (!isset($this->_block['day']) || !is_array($this->_block['day'])) $this->_block['day'] = array();
foreach ($this->_block['day'] as $day_key => $day_value) {
$_tmpb_day = &$this->_block['day'][$day_key];echo ' ';if (isset($_tmpb_day['L_DAY'])) echo $_tmpb_day['L_DAY'];echo ' ';} ?>
						</tr>
						<tr style="text-align:center;">
							<?php if (!isset($this->_block['calendar']) || !is_array($this->_block['calendar'])) $this->_block['calendar'] = array();
foreach ($this->_block['calendar'] as $calendar_key => $calendar_value) {
$_tmpb_calendar = &$this->_block['calendar'][$calendar_key];echo ' ';if (isset($_tmpb_calendar['DAY'])) echo $_tmpb_calendar['DAY'];echo ' ';if (isset($_tmpb_calendar['TR'])) echo $_tmpb_calendar['TR'];echo ' ';} ?>
						</tr>
						<tr>
							<td class="row3">
								<?php if (isset($this->_var['U_PREVIOUS_EVENT'])) echo $this->_var['U_PREVIOUS_EVENT']; ?>
							</td>
							<td  colspan="5" class="row3">
								<?php if (isset($this->_var['L_EVENTS'])) echo $this->_var['L_EVENTS']; ?> 
							</td>
							<td class="row3">
								<?php if (isset($this->_var['U_NEXT_EVENT'])) echo $this->_var['U_NEXT_EVENT']; ?>
							</td> 
						</tr>
					</table>
				</div>
				<div class="module_bottom_l"></div>		
				<div class="module_bottom_r"></div>
				<div class="module_bottom"></div>
			</div>
		</form>
		
		<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
		<br />
		<span id="errorh"></span>
		<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
			<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
			<br />	
		</div>
		<br />		
		<?php } ?>
		<br /><br />
		
		<?php if (!isset($this->_block['action']) || !is_array($this->_block['action'])) $this->_block['action'] = array();
foreach ($this->_block['action'] as $action_key => $action_value) {
$_tmpb_action = &$this->_block['action'][$action_key]; ?>
		<div class="module_position">					
			<div class="module_top_l"></div>		
			<div class="module_top_r"></div>
			<div class="module_top">
				<span class="text_strong" style="float:left;"><?php if (isset($_tmpb_action['TITLE'])) echo $_tmpb_action['TITLE']; ?></span>
				<span style="float:right;"><?php if (isset($_tmpb_action['COM'])) echo $_tmpb_action['COM'];if (isset($_tmpb_action['EDIT'])) echo $_tmpb_action['EDIT'];if (isset($_tmpb_action['DEL'])) echo $_tmpb_action['DEL']; ?></span>
			</div>
			<div class="module_contents">
				<?php if (isset($_tmpb_action['CONTENTS'])) echo $_tmpb_action['CONTENTS']; ?>
				<br /><br /><br />
			</div>
			<div class="module_bottom_l"></div>		
			<div class="module_bottom_r"></div>
			<div class="module_bottom">
				<div style="float:left;padding-top:4px;padding-bottom:4px;">
					<?php if (isset($_tmpb_action['LOGIN'])) echo $_tmpb_action['LOGIN']; ?>
				</div>				
				<div class="text_small" style="padding:4px;text-align: right;">
					<?php if (isset($this->_var['L_ON'])) echo $this->_var['L_ON']; ?>:&nbsp;&nbsp;<?php if (isset($_tmpb_action['DATE'])) echo $_tmpb_action['DATE']; ?>
				</div>
			</div>
		</div>
		<br /><br />

		<?php if (isset($this->_var['COMMENTS'])) echo $this->_var['COMMENTS'];echo ' ';}echo ' ';}echo ' ';if (isset($this->_var['C_CALENDAR_FORM']) && $this->_var['C_CALENDAR_FORM']) { ?>
		<script type="text/javascript">
		<!--
		function check_form_cl(){
			<?php if (isset($this->_var['C_BBCODE_TINYMCE_MODE']) && $this->_var['C_BBCODE_TINYMCE_MODE']) { ?>
			tinyMCE.triggerSave();
			<?php } ?>	

			if(document.getElementById('title').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_TITLE'])) echo $this->_var['L_REQUIRE_TITLE']; ?>");
				return false;
			}
			if(document.getElementById('contents').value == "") {
				alert("<?php if (isset($this->_var['L_REQUIRE_TEXT'])) echo $this->_var['L_REQUIRE_TEXT']; ?>");
				return false;
			}
			return true;
		}

		-->
		</script>

		<script type="text/javascript" src="../kernel/framework/js/calendar.js"></script>
		<?php if (isset($this->_var['C_ERROR_HANDLER']) && $this->_var['C_ERROR_HANDLER']) { ?>
		<span id="errorh"></span>
		<div class="<?php if (isset($this->_var['ERRORH_CLASS'])) echo $this->_var['ERRORH_CLASS']; ?>" style="width:500px;margin:auto;padding:15px;">
			<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/<?php if (isset($this->_var['ERRORH_IMG'])) echo $this->_var['ERRORH_IMG']; ?>.png" alt="" style="float:left;padding-right:6px;" /> <?php if (isset($this->_var['L_ERRORH'])) echo $this->_var['L_ERRORH']; ?>
			<br />	
		</div>
		<?php } ?>
		
		<form action="calendar.php<?php if (isset($this->_var['UPDATE'])) echo $this->_var['UPDATE']; ?>" method="post" onsubmit="return check_form_cl();" class="fieldset_content" style="width:70%">
			<fieldset>
				<legend><?php if (isset($this->_var['L_EDIT_EVENT'])) echo $this->_var['L_EDIT_EVENT']; ?></legend>
				<dl class="overflow_visible">
					<dt><label for="date">* <?php if (isset($this->_var['L_DATE_CALENDAR'])) echo $this->_var['L_DATE_CALENDAR']; ?></label></dt>
					<dd><label>
						<?php if (isset($this->_var['L_ON'])) echo $this->_var['L_ON']; ?>&nbsp;
						<label><input type="text" size="8" maxlength="8" id="date" name="date" value="<?php if (isset($this->_var['DATE'])) echo $this->_var['DATE']; ?>" class="text" /></label> 
						
						<div style="position:relative;z-index:100;top:220px;left:90px;float:left;display:none;" id="calendar1">
							<div id="cl_date" class="calendar_block" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);">							
							</div>
						</div>
						<a onclick="xmlhttprequest_calendar('cl_date', '?input_field=date&amp;field=cl_date&amp;d=<?php if (isset($this->_var['DAY_DATE'])) echo $this->_var['DAY_DATE']; ?>&amp;m=<?php if (isset($this->_var['MONTH_DATE'])) echo $this->_var['MONTH_DATE']; ?>&amp;y=<?php if (isset($this->_var['YEAR_DATE'])) echo $this->_var['YEAR_DATE']; ?>');display_calendar(1);" onmouseover="hide_calendar(1, 1);" onmouseout="hide_calendar(1, 0);" style="cursor:pointer;"><img class="valign_middle" src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/calendar.png" alt="" /></a>
					
						<?php if (isset($this->_var['L_AT'])) echo $this->_var['L_AT']; ?>
						<label><input type="text" size="2" maxlength="2" name="hour" value="<?php if (isset($this->_var['HOUR'])) echo $this->_var['HOUR']; ?>" class="text" /></label> H <label><input type="text" size="2" maxlength="2" name="min" value="<?php if (isset($this->_var['MIN'])) echo $this->_var['MIN']; ?>" class="text" /></label>
					</dd>
				</dl>
				<dl>
					<dt><label for="title">* <?php if (isset($this->_var['L_TITLE'])) echo $this->_var['L_TITLE']; ?></label></dt>
					<dd><label><input type="text" maxlength="50" size="50" maxlength="150" id="title" name="title" value="<?php if (isset($this->_var['TITLE'])) echo $this->_var['TITLE']; ?>" class="text" /></label></dd>
				</dl>
				<br />
				<label for="contents">* <?php if (isset($this->_var['L_ACTION'])) echo $this->_var['L_ACTION']; ?></label>
				<?php if (isset($this->_var['KERNEL_EDITOR'])) echo $this->_var['KERNEL_EDITOR']; ?>
				<label><textarea rows="10" cols="60" id="contents" name="contents"><?php if (isset($this->_var['CONTENTS'])) echo $this->_var['CONTENTS']; ?></textarea> </label>
			</fieldset>	
			
			<fieldset class="fieldset_submit">
				<legend><?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?></legend>
				<input type="submit" name="valid" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
				&nbsp;&nbsp; 
				<input type="reset" value="<?php if (isset($this->_var['L_RESET'])) echo $this->_var['L_RESET']; ?>" class="reset" />
			</fieldset>
		</form>

		<?php } ?>
