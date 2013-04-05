		<table class="module_table">
			<tr>
				<th id="stats" colspan="5">
					<?php if (isset($this->_var['L_STATS'])) echo $this->_var['L_STATS']; ?>
				</th>
			</tr>
			<tr style="text-align:center;">
				<td style="width:20%;padding:15px;" class="row2">
					<a href="stats<?php if (isset($this->_var['U_STATS_SITE'])) echo $this->_var['U_STATS_SITE']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats/site.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_SITE'])) echo $this->_var['U_STATS_SITE']; ?>#stats"><?php if (isset($this->_var['L_SITE'])) echo $this->_var['L_SITE']; ?></a>
				</td>
				<td style="width:20%;padding:15px;" class="row2">
					<a href="stats<?php if (isset($this->_var['U_STATS_USERS'])) echo $this->_var['U_STATS_USERS']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/member.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_USERS'])) echo $this->_var['U_STATS_USERS']; ?>#stats"><?php if (isset($this->_var['L_USERS'])) echo $this->_var['L_USERS']; ?></a>
				</td>
				<td style="width:20%;" class="row2">
					<a href="stats<?php if (isset($this->_var['U_STATS_VISIT'])) echo $this->_var['U_STATS_VISIT']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats/visitors.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_VISIT'])) echo $this->_var['U_STATS_VISIT']; ?>#stats"><?php if (isset($this->_var['L_VISITS'])) echo $this->_var['L_VISITS']; ?></a>
				</td>
				<td style="width:20%;padding:15px;" class="row2">
					<a href="stats<?php if (isset($this->_var['U_STATS_PAGES'])) echo $this->_var['U_STATS_PAGES']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats/pages.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_PAGES'])) echo $this->_var['U_STATS_PAGES']; ?>#stats"><?php if (isset($this->_var['L_PAGES'])) echo $this->_var['L_PAGES']; ?></a>
				</td>
				<td style="width:20%;padding:15px;" class="row2">
					<a href="stats<?php if (isset($this->_var['U_STATS_BROWSER'])) echo $this->_var['U_STATS_BROWSER']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats/browsers.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_BROWSER'])) echo $this->_var['U_STATS_BROWSER']; ?>#stats"><?php if (isset($this->_var['L_BROWSERS'])) echo $this->_var['L_BROWSERS']; ?></a>
				</td>
			</tr>
			<tr style="text-align:center;">				
				<td style="width:20%;" class="row2">	
					<a href="stats<?php if (isset($this->_var['U_STATS_OS'])) echo $this->_var['U_STATS_OS']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats/os.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_OS'])) echo $this->_var['U_STATS_OS']; ?>#stats"><?php if (isset($this->_var['L_OS'])) echo $this->_var['L_OS']; ?></a>		
				</td>		
				<td style="width:20%;padding:15px;" class="row2">
					<a href="stats<?php if (isset($this->_var['U_STATS_LANG'])) echo $this->_var['U_STATS_LANG']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats/countries.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_LANG'])) echo $this->_var['U_STATS_LANG']; ?>#stats"><?php if (isset($this->_var['L_LANG'])) echo $this->_var['L_LANG']; ?></a>
				</td>
				<td style="width:20%;padding:15px;" class="row2">
					<a href="stats<?php if (isset($this->_var['U_STATS_REFERER'])) echo $this->_var['U_STATS_REFERER']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats/referer.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_REFERER'])) echo $this->_var['U_STATS_REFERER']; ?>#stats"><?php if (isset($this->_var['L_REFERER'])) echo $this->_var['L_REFERER']; ?></a>
				</td>
				<td style="width:20%;padding:15px;" class="row2">
					<a href="stats<?php if (isset($this->_var['U_STATS_KEYWORD'])) echo $this->_var['U_STATS_KEYWORD']; ?>#stats"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats/keyword.png" alt="" /></a>
					<br /><a href="stats<?php if (isset($this->_var['U_STATS_KEYWORD'])) echo $this->_var['U_STATS_KEYWORD']; ?>#stats"><?php if (isset($this->_var['L_KEYWORD'])) echo $this->_var['L_KEYWORD']; ?></a>
				</td>
				<td style="width:20%;padding:15px;" class="row2">
					&nbsp;
				</td>
			</tr>
		</table>
		
		<br /><br />
		
		<?php if (isset($this->_var['C_STATS_SITE']) && $this->_var['C_STATS_SITE']) { ?>
		<table class="module_table">
			<tr>
				<th colspan="3">
					<?php if (isset($this->_var['L_SITE'])) echo $this->_var['L_SITE']; ?>
				</th>
			</tr>
			<tr>
				<td class="row2">
					<?php if (isset($this->_var['L_START'])) echo $this->_var['L_START']; ?>: <strong><?php if (isset($this->_var['START'])) echo $this->_var['START']; ?></strong>
				</td>		
			</tr>
			<tr>
				<td class="row2">
					<?php if (isset($this->_var['L_VERSION'])) echo $this->_var['L_VERSION']; ?> PHPBoost: <strong><?php if (isset($this->_var['VERSION'])) echo $this->_var['VERSION']; ?></strong>
				</td>		
			</tr>	
		</table>
		<?php }echo ' ';if (isset($this->_var['C_STATS_USERS']) && $this->_var['C_STATS_USERS']) { ?>
		<table class="module_table">
			<tr>
				<th colspan="2">	
					<?php if (isset($this->_var['L_USERS'])) echo $this->_var['L_USERS']; ?>
				</th>
			</tr>
			<tr>
				<td class="row1" style="text-align:center;width:25%;">
					<?php if (isset($this->_var['L_USERS'])) echo $this->_var['L_USERS']; ?>
				</td>
				<td class="row2">
					<?php if (isset($this->_var['USERS'])) echo $this->_var['USERS']; ?>
				</td>
			 </tr>
			<tr>
				<td class="row1" style="text-align:center;width:50%;">
					<?php if (isset($this->_var['L_LAST_USER'])) echo $this->_var['L_LAST_USER']; ?>
				</td>
				<td class="row2">
					<a href="../member/member<?php if (isset($this->_var['U_LAST_USER_ID'])) echo $this->_var['U_LAST_USER_ID']; ?>"><?php if (isset($this->_var['LAST_USER'])) echo $this->_var['LAST_USER']; ?></a>
				</td>
			</tr>
		</table>
		<br /><br />
		<table class="module_table">
			<tr>
				<th colspan="2">	
					<?php if (isset($this->_var['L_TEMPLATES'])) echo $this->_var['L_TEMPLATES']; ?>
				</th>
			</tr>
			<tr>
				<td style="width:50%;padding-top:30px;vertical-align:top" class="row1">
					<table class="module_table">						
						<tr>
							<td style="text-align:center;" class="row1">			
								<?php if (isset($this->_var['L_TEMPLATES'])) echo $this->_var['L_TEMPLATES']; ?> 
							</td>
							<td style="width:10px;" class="row1">			
								<?php if (isset($this->_var['L_COLORS'])) echo $this->_var['L_COLORS']; ?>
							</td>
							<td style="text-align:center;" class="row1">
								<?php if (isset($this->_var['L_USERS'])) echo $this->_var['L_USERS']; ?>
							</td>				
						</tr>						
						<?php if (!isset($this->_block['templates']) || !is_array($this->_block['templates'])) $this->_block['templates'] = array();
foreach ($this->_block['templates'] as $templates_key => $templates_value) {
$_tmpb_templates = &$this->_block['templates'][$templates_key]; ?>	
						<tr>
							<td style="text-align:center;" class="row2">			
								<?php if (isset($_tmpb_templates['THEME'])) echo $_tmpb_templates['THEME']; ?> <span class="text_small">(<?php if (isset($_tmpb_templates['PERCENT'])) echo $_tmpb_templates['PERCENT']; ?>%)</span>
							</td>							
							<td style="text-align:center;" class="row2">			
								<div style="margin:auto;width:10px;margin:auto;height:10px;background:<?php if (isset($_tmpb_templates['COLOR'])) echo $_tmpb_templates['COLOR']; ?>;border:1px solid black;"></div>
							</td>
							<td style="text-align:center;" class="row2">
								<?php if (isset($_tmpb_templates['NBR_THEME'])) echo $_tmpb_templates['NBR_THEME']; ?>
							</td>				
						</tr>
						<?php } ?>		
					</table>
				</td>
				<td style="text-align:center;padding-top:30px;vertical-align:top" class="row1">
					<?php if (isset($this->_var['GRAPH_RESULT_THEME'])) echo $this->_var['GRAPH_RESULT_THEME']; ?>
				</td>
			</tr>
		</table>
		<br /><br />
		<table class="module_table">
			<tr>
				<th colspan="2">	
					<?php if (isset($this->_var['L_SEX'])) echo $this->_var['L_SEX']; ?>
				</th>
			</tr>
			<tr>
				<td style="width:50%;padding-top:30px;vertical-align:top" class="row1">
					<table class="module_table">						
						<tr>
							<td style="text-align:center;" class="row1">			
								<?php if (isset($this->_var['L_SEX'])) echo $this->_var['L_SEX']; ?> 
							</td>
							<td style="width:10px;" class="row1">			
								<?php if (isset($this->_var['L_COLORS'])) echo $this->_var['L_COLORS']; ?>
							</td>
							<td style="text-align:center;" class="row1">
								<?php if (isset($this->_var['L_USERS'])) echo $this->_var['L_USERS']; ?>
							</td>				
						</tr>						
						<?php if (!isset($this->_block['sex']) || !is_array($this->_block['sex'])) $this->_block['sex'] = array();
foreach ($this->_block['sex'] as $sex_key => $sex_value) {
$_tmpb_sex = &$this->_block['sex'][$sex_key]; ?>	
						<tr>
							<td style="text-align:center;" class="row2">			
								<?php if (isset($_tmpb_sex['SEX'])) echo $_tmpb_sex['SEX']; ?> <span class="text_small">(<?php if (isset($_tmpb_sex['PERCENT'])) echo $_tmpb_sex['PERCENT']; ?>%)</span>
							</td>							
							<td style="text-align:center;" class="row2">			
								<div style="margin:auto;width:10px;margin:auto;height:10px;background:<?php if (isset($_tmpb_sex['COLOR'])) echo $_tmpb_sex['COLOR']; ?>;border:1px solid black;"></div>
							</td>
							<td style="text-align:center;" class="row2">
								<?php if (isset($_tmpb_sex['NBR_MBR'])) echo $_tmpb_sex['NBR_MBR']; ?>
							</td>				
						</tr>
						<?php } ?>		
					</table>
				</td>
				<td style="text-align:center;padding-top:30px;vertical-align:top" class="row1">
					<?php if (isset($this->_var['GRAPH_RESULT_SEX'])) echo $this->_var['GRAPH_RESULT_SEX']; ?>
				</td>
			</tr>
		</table>
		<br /><br />
		<table class="module_table">
			<tr>
				<th colspan="3">	
					<?php if (isset($this->_var['L_TOP_TEN_POSTERS'])) echo $this->_var['L_TOP_TEN_POSTERS']; ?>
				</th>
			</tr>
			<tr>
				<td class="row1" style="text-align:center;">
					N&deg;
				</td>
				<td class="row1" style="text-align:center;">
					<?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?>
				</td>
				<td class="row1" style="text-align:center;">
					<?php if (isset($this->_var['L_MSG'])) echo $this->_var['L_MSG']; ?>
				</td>
			</tr>			
			<?php if (!isset($this->_block['top_poster']) || !is_array($this->_block['top_poster'])) $this->_block['top_poster'] = array();
foreach ($this->_block['top_poster'] as $top_poster_key => $top_poster_value) {
$_tmpb_top_poster = &$this->_block['top_poster'][$top_poster_key]; ?>			
			<tr>
				<td class="row2" style="text-align:center;">
					<?php if (isset($_tmpb_top_poster['ID'])) echo $_tmpb_top_poster['ID']; ?>
				</td>
				<td class="row2" style="text-align:center;">
					<a href="../member/member<?php if (isset($_tmpb_top_poster['U_USER_ID'])) echo $_tmpb_top_poster['U_USER_ID']; ?>"><?php if (isset($_tmpb_top_poster['LOGIN'])) echo $_tmpb_top_poster['LOGIN']; ?></a>
				</td>
				<td class="row2" style="text-align:center;">
					<?php if (isset($_tmpb_top_poster['USER_POST'])) echo $_tmpb_top_poster['USER_POST']; ?>
				</td>
			</tr>			
			<?php } ?>
		</table>
		<?php }echo ' ';if (isset($this->_var['C_STATS_VISIT']) && $this->_var['C_STATS_VISIT']) { ?>
		<form action="stats.php#stats" method="get">
			<table class="module_table">
				<tr>
					<th>
						<?php if (isset($this->_var['L_VISITORS'])) echo $this->_var['L_VISITORS'];echo ' ';if (isset($this->_var['MONTH'])) echo $this->_var['MONTH'];echo ' ';if (isset($this->_var['U_YEAR'])) echo $this->_var['U_YEAR']; ?>
					</th>
				</tr>
				<tr>
					<td class="row2" style="text-align:center;">
						<div style="width:50%;text-align:center;margin:auto">
							<p class="text_strong"><?php if (isset($this->_var['L_TOTAL'])) echo $this->_var['L_TOTAL']; ?>: <?php if (isset($this->_var['VISIT_TOTAL'])) echo $this->_var['VISIT_TOTAL']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php if (isset($this->_var['L_TODAY'])) echo $this->_var['L_TODAY']; ?>: <?php if (isset($this->_var['VISIT_DAY'])) echo $this->_var['VISIT_DAY']; ?></p>
							<a href="stats<?php if (isset($this->_var['U_PREVIOUS_LINK'])) echo $this->_var['U_PREVIOUS_LINK']; ?>#stats">&laquo;</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<?php if (isset($this->_var['C_STATS_DAY']) && $this->_var['C_STATS_DAY']) { ?>
							<select name="d">
								<?php if (isset($this->_var['STATS_DAY'])) echo $this->_var['STATS_DAY']; ?>
							</select>
							<?php }echo ' ';if (isset($this->_var['C_STATS_MONTH']) && $this->_var['C_STATS_MONTH']) { ?>
							<select name="m">
								<?php if (isset($this->_var['STATS_MONTH'])) echo $this->_var['STATS_MONTH']; ?>
							</select>
							<?php }echo ' ';if (isset($this->_var['C_STATS_YEAR']) && $this->_var['C_STATS_YEAR']) { ?>
							<select name="y">
								<?php if (isset($this->_var['STATS_YEAR'])) echo $this->_var['STATS_YEAR']; ?>
							</select>
							<?php } ?>
							<input type="hidden" name="<?php if (isset($this->_var['TYPE'])) echo $this->_var['TYPE']; ?>" value="1" />
							<input type="submit" name="date" value="<?php if (isset($this->_var['L_SUBMIT'])) echo $this->_var['L_SUBMIT']; ?>" class="submit" />
							&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="stats<?php if (isset($this->_var['U_NEXT_LINK'])) echo $this->_var['U_NEXT_LINK']; ?>#stats">&raquo;</a>				
						</div>
						<br />
						<?php if (isset($this->_var['C_STATS_NO_GD']) && $this->_var['C_STATS_NO_GD']) { ?>
						<br />
						<table class="module_table" style="width:400px;margin:auto;">
							<tr>
								<td style="background-color: #000000;width:1px;"></td>
								<td style="height:200px;width:10px;vertical-align:top;text-align:center;font-size:9px;">
									<?php if (isset($this->_var['MAX_NBR'])) echo $this->_var['MAX_NBR']; ?>
								</td>
									
								<?php if (!isset($this->_block['values']) || !is_array($this->_block['values'])) $this->_block['values'] = array();
foreach ($this->_block['values'] as $values_key => $values_value) {
$_tmpb_values = &$this->_block['values'][$values_key]; ?>								
								<td style="height:200px;width:10px;vertical-align:bottom;">
									<table class="module_table" style="width:14px;margin:auto;">
										<?php if (!isset($_tmpb_values['head']) || !is_array($_tmpb_values['head'])) $_tmpb_values['head'] = array();
foreach ($_tmpb_values['head'] as $head_key => $head_value) {
$_tmpb_head = &$_tmpb_values['head'][$head_key]; ?>
										<tr>
											<td style="margin-left:2px;width:10px;height:4px;background-image: url(../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats2.png); background-repeat:no-repeat;">
											</td>
										</tr>
										<?php } ?>
										<tr>
											<td style="margin-left:2px;width:10px;height:<?php if (isset($_tmpb_values['HEIGHT'])) echo $_tmpb_values['HEIGHT']; ?>px;background-image: url(../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/stats.png);background-repeat:repeat-y;padding:0px">
											</td>
										</tr>
									</table>
								</td>	
								<?php }echo ' ';if (!isset($this->_block['end_td']) || !is_array($this->_block['end_td'])) $this->_block['end_td'] = array();
foreach ($this->_block['end_td'] as $end_td_key => $end_td_value) {
$_tmpb_end_td = &$this->_block['end_td'][$end_td_key];echo ' ';if (isset($_tmpb_end_td['END_TD'])) echo $_tmpb_end_td['END_TD'];echo ' ';} ?>
							</tr>
							<tr>
								<td style="background-color: #000000;width:1px"></td>
								<td style="width:10px;font-size:9px;">
									0
								</td>								
								<?php if (!isset($this->_block['legend']) || !is_array($this->_block['legend'])) $this->_block['legend'] = array();
foreach ($this->_block['legend'] as $legend_key => $legend_value) {
$_tmpb_legend = &$this->_block['legend'][$legend_key]; ?>								
								<td style="text-align:center;width:13px;font-size:9px;">
									<?php if (isset($_tmpb_legend['LEGEND'])) echo $_tmpb_legend['LEGEND']; ?>
								</td>								
								<?php } ?>								
							</tr>
							<tr>
								<td style="height:1px;background-color: #000000;" colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>"></td>
							</tr>
						</table>
						<br />
						<?php }echo ' ';if (isset($this->_var['GRAPH_RESULT'])) echo $this->_var['GRAPH_RESULT']; ?>
					</td>
				</tr>
				<tr>
					<td class="row3" style="text-align:center;" colspan="<?php if (isset($this->_var['COLSPAN'])) echo $this->_var['COLSPAN']; ?>">
						<?php if (isset($this->_var['L_TOTAL'])) echo $this->_var['L_TOTAL']; ?>: <?php if (isset($this->_var['SUM_NBR'])) echo $this->_var['SUM_NBR']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if (isset($this->_var['L_AVERAGE'])) echo $this->_var['L_AVERAGE']; ?>: <?php if (isset($this->_var['MOY_NBR'])) echo $this->_var['MOY_NBR']; ?>
					</td>
				</tr>
				<tr>
					<td class="row3" style="text-align:center;">
						<?php if (isset($this->_var['U_VISITS_MORE'])) echo $this->_var['U_VISITS_MORE']; ?>
					</td>
				</tr>
			</table>
		</form>	
		<br /><br />
		<table class="module_table" style="width:300px;">
			<tr>
				<th style="width:50%">
					<?php if (isset($this->_var['L_DAY'])) echo $this->_var['L_DAY']; ?>
				</th>
				<th style="width:50%">
					<?php if (isset($this->_var['L_VISITS_DAY'])) echo $this->_var['L_VISITS_DAY']; ?>
				</th>
			</tr>			
			<?php if (!isset($this->_block['value']) || !is_array($this->_block['value'])) $this->_block['value'] = array();
foreach ($this->_block['value'] as $value_key => $value_value) {
$_tmpb_value = &$this->_block['value'][$value_key]; ?>
			<tr>
				<td class="row3" style="font-size:10px;width:50%">
					<?php if (isset($_tmpb_value['U_DETAILS'])) echo $_tmpb_value['U_DETAILS']; ?>
				</td>
				<td class="row3" style="font-size:10px;width:50%">
					<?php if (isset($_tmpb_value['NBR'])) echo $_tmpb_value['NBR']; ?>
				</td>
			</tr>		
			<?php } ?>
		</table>
		<?php }echo ' ';if (isset($this->_var['C_STATS_BROWSERS']) && $this->_var['C_STATS_BROWSERS']) { ?>
		<table class="module_table">
			<tr>
				<th colspan="2">
					<?php if (isset($this->_var['L_BROWSERS'])) echo $this->_var['L_BROWSERS']; ?>
				</th>
			</tr>
			<tr>
				<td class="row2" style="width:50%;padding-top:30px;vertical-align:top">
					<table class="module_table">
						<?php if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key]; ?>			
						<tr style="height:35px;">
							<td style="width:35px;text-align:center;" class="row2">			
								<?php if (isset($_tmpb_list['IMG'])) echo $_tmpb_list['IMG']; ?>
							</td>
							<td style="width:10px;text-align:center;" class="row2">			
								<div style="width:10px;height:10px;margin:auto;background:<?php if (isset($_tmpb_list['COLOR'])) echo $_tmpb_list['COLOR']; ?>;border:1px solid black;"></div>
							</td>
							<td style="width:50px;" class="row2">
								<?php if (isset($_tmpb_list['L_NAME'])) echo $_tmpb_list['L_NAME']; ?> <span class="text_small">(<?php if (isset($_tmpb_list['PERCENT'])) echo $_tmpb_list['PERCENT']; ?>%)</span>
							</td>				
						</tr>
						<?php } ?>
					</table>
				</td>
				<td class="row2" style="text-align:center;padding-top:30px;vertical-align:top">
					<?php if (isset($this->_var['GRAPH_RESULT'])) echo $this->_var['GRAPH_RESULT']; ?>
				</td>
			</tr>
		</table>
		<?php }echo ' ';if (isset($this->_var['C_STATS_OS']) && $this->_var['C_STATS_OS']) { ?>
		<table class="module_table">
			<tr>
				<th colspan="2">
					<?php if (isset($this->_var['L_OS'])) echo $this->_var['L_OS']; ?>
				</th>
			</tr>
			<tr style="height:35px;">
				<td class="row2" style="width:50%;padding-top:30px;vertical-align:top">
					<table class="module_table">
						<?php if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key]; ?>			
						<tr style="height:35px;">
							<td style="width:35px; text-align:center;" class="row2">			
								<?php if (isset($_tmpb_list['IMG'])) echo $_tmpb_list['IMG']; ?>
							</td>
							<td style="width:10px; text-align:center;" class="row2">			
								<div style="width:10px;height:10px;margin:auto;background:<?php if (isset($_tmpb_list['COLOR'])) echo $_tmpb_list['COLOR']; ?>;border:1px solid black;"></div>
							</td>
							<td style="width:50px;" class="row2">
								<?php if (isset($_tmpb_list['L_NAME'])) echo $_tmpb_list['L_NAME']; ?> <span class="text_small">(<?php if (isset($_tmpb_list['PERCENT'])) echo $_tmpb_list['PERCENT']; ?>%)</span>
							</td>				
						</tr>
						<?php } ?>
					</table>
				</td>
				<td class="row2" style="text-align:center;padding-top:30px;vertical-align:top">
					<?php if (isset($this->_var['GRAPH_RESULT'])) echo $this->_var['GRAPH_RESULT']; ?>
				</td>
			</tr>
		</table>
		<?php }echo ' ';if (isset($this->_var['C_STATS_LANG']) && $this->_var['C_STATS_LANG']) { ?>
		<table class="module_table">
			<tr>
				<th colspan="2">
					<?php if (isset($this->_var['L_LANG'])) echo $this->_var['L_LANG']; ?>
				</th>
			</tr>
			<tr style="height:35px;">
				<td class="row2" style="width:50%;padding-top:30px;vertical-align:top">
					<table class="module_table">
						<?php if (!isset($this->_block['list']) || !is_array($this->_block['list'])) $this->_block['list'] = array();
foreach ($this->_block['list'] as $list_key => $list_value) {
$_tmpb_list = &$this->_block['list'][$list_key]; ?>			
						<tr style="height:35px;">
							<td style="width:35px;text-align:center;" class="row2">			
								<?php if (isset($_tmpb_list['IMG'])) echo $_tmpb_list['IMG']; ?>
							</td>
							<td style="width:10px;text-align:center;" class="row2">			
								<div style="width:10px;margin:auto;height:10px;background:<?php if (isset($_tmpb_list['COLOR'])) echo $_tmpb_list['COLOR']; ?>;border:1px solid black;"></div>
							</td>
							<td style="width:50px;" class="row2">
								<?php if (isset($_tmpb_list['L_NAME'])) echo $_tmpb_list['L_NAME']; ?> <span class="text_small">(<?php if (isset($_tmpb_list['PERCENT'])) echo $_tmpb_list['PERCENT']; ?>%)</span>
							</td>				
						</tr>
						<?php } ?>
					</table>
				</td>
				<td class="row2" style="text-align:center;padding-top:30px;vertical-align:top">
					<?php if (isset($this->_var['GRAPH_RESULT'])) echo $this->_var['GRAPH_RESULT']; ?>
				</td>
			</tr>
			<tr>
				<td class="row2" colspan="2" style="text-align:center;">
					<?php if (isset($this->_var['L_LANG_ALL'])) echo $this->_var['L_LANG_ALL']; ?>
				</td>
			</tr>
		</table>
		<?php }echo ' ';if (isset($this->_var['C_STATS_REFERER']) && $this->_var['C_STATS_REFERER']) { ?>
		<script type="text/javascript">
		<!--
		function XMLHttpRequest_referer(divid)
		{
			if( document.getElementById('url' + divid).style.display == 'table' )
			{
				display_div_auto('url' + divid, 'table');
				document.getElementById('img_url' + divid).src = '../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/plus.png';
			}
			else
			{
				var xhr_object = null;
				var filename = '../kernel/framework/ajax/stats_xmlhttprequest.php?stats_referer=1&id=' + divid;
				var data = null;
				
				if(window.XMLHttpRequest) // Firefox
				   xhr_object = new XMLHttpRequest();
				else if(window.ActiveXObject) // Internet Explorer
				   xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
				else // XMLHttpRequest non support? par le navigateur
					return;
				
				document.getElementById('load' + divid).innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" class="valign_middle" />';
				
				xhr_object.open("POST", filename, true);
				xhr_object.onreadystatechange = function() 
				{
					if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText != '' )
					{	
						display_div_auto('url' + divid, 'table');
						document.getElementById('url' + divid).innerHTML = xhr_object.responseText;
						document.getElementById('load' + divid).innerHTML = '';
						document.getElementById('img_url' + divid).src = '../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/minus.png';
					}
					else if( xhr_object.readyState == 4 && xhr_object.responseText == '' )
						document.getElementById('load' + divid).innerHTML = '';
				}
				xmlhttprequest_sender(xhr_object, null);
			}
		}
		-->
		</script>
		
		<table class="module_table">
			<tr>
				<th>			
					<?php if (isset($this->_var['L_REFERER'])) echo $this->_var['L_REFERER']; ?>
				</th>
				<th style="width:100px;">
					<?php if (isset($this->_var['L_TOTAL_VISIT'])) echo $this->_var['L_TOTAL_VISIT']; ?>
				</th>
				<th style="width:100px;">
					<?php if (isset($this->_var['L_AVERAGE_VISIT'])) echo $this->_var['L_AVERAGE_VISIT']; ?>
				</th>
				<th style="width:90px;">
					<?php if (isset($this->_var['L_LAST_UPDATE'])) echo $this->_var['L_LAST_UPDATE']; ?>
				</th>	
				<th style="width:93px;">
					<?php if (isset($this->_var['L_TREND'])) echo $this->_var['L_TREND']; ?>
				</th>
			</tr>
			<?php if (!isset($this->_block['referer_list']) || !is_array($this->_block['referer_list'])) $this->_block['referer_list'] = array();
foreach ($this->_block['referer_list'] as $referer_list_key => $referer_list_value) {
$_tmpb_referer_list = &$this->_block['referer_list'][$referer_list_key]; ?>	
			<tr>
				<td class="row2" style="padding:0px;margin:0px;" colspan="5">			
					<table style="width:100%;border:none;border-collapse:collapse;">
						<tr>
							<td style="text-align:center;">		
								<?php if (isset($_tmpb_referer_list['IMG_MORE'])) echo $_tmpb_referer_list['IMG_MORE']; ?> <span class="text_small">(<?php if (isset($_tmpb_referer_list['NBR_LINKS'])) echo $_tmpb_referer_list['NBR_LINKS']; ?>)</span> <a href="<?php if (isset($_tmpb_referer_list['URL'])) echo $_tmpb_referer_list['URL']; ?>"><?php if (isset($_tmpb_referer_list['URL'])) echo $_tmpb_referer_list['URL']; ?></a>	<span id="load<?php if (isset($_tmpb_referer_list['ID'])) echo $_tmpb_referer_list['ID']; ?>"></span>	 			
							</td>
							<td style="width:112px;text-align:center;">
								<?php if (isset($_tmpb_referer_list['TOTAL_VISIT'])) echo $_tmpb_referer_list['TOTAL_VISIT']; ?>
							</td>
							<td style="width:112px;text-align:center;">
								<?php if (isset($_tmpb_referer_list['AVERAGE_VISIT'])) echo $_tmpb_referer_list['AVERAGE_VISIT']; ?>
							</td>
							<td style="width:102px;text-align:center;">
								<?php if (isset($_tmpb_referer_list['LAST_UPDATE'])) echo $_tmpb_referer_list['LAST_UPDATE']; ?>
							</td>
							<td style="width:105px;">
								<?php if (isset($_tmpb_referer_list['TREND'])) echo $_tmpb_referer_list['TREND']; ?>
							</td>
						</tr>
					</table>
					<div id="url<?php if (isset($_tmpb_referer_list['ID'])) echo $_tmpb_referer_list['ID']; ?>" style="display:none;width:100%;"></div>					
				</td>	
			</tr>
			<?php } ?>
			<tr>
				<td class="row3" colspan="5" style="text-align:center;">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>&nbsp;
				</td>
			</tr>
		</table>
		<?php }echo ' ';if (isset($this->_var['C_STATS_KEYWORD']) && $this->_var['C_STATS_KEYWORD']) { ?>
		<script type="text/javascript">
		<!--
		function XMLHttpRequest_referer(divid)
		{
			if( document.getElementById('url' + divid).style.display == 'table' )
			{
				display_div_auto('url' + divid, 'table');
				document.getElementById('img_url' + divid).src = '../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/plus.png';
			}
			else
			{
				document.getElementById('load' + divid).innerHTML = '<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif" alt="" class="valign_middle" />';
				var xhr_object = xmlhttprequest_init('../kernel/framework/ajax/stats_xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&stats_keyword=1&id=' + divid);
				xhr_object.onreadystatechange = function() 
				{
					if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText != '' )
					{	
						display_div_auto('url' + divid, 'table');
						document.getElementById('url' + divid).innerHTML = xhr_object.responseText;
						document.getElementById('load' + divid).innerHTML = '';
						document.getElementById('img_url' + divid).src = '../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/upload/minus.png';
					}
					else if( xhr_object.readyState == 4 && xhr_object.responseText == '' )
						document.getElementById('load' + divid).innerHTML = '';
				}
				xmlhttprequest_sender(xhr_object, null);
			}
		}
		-->
		</script>
		
		<table class="module_table">
			<tr>
				<th>			
					<?php if (isset($this->_var['L_KEYWORD'])) echo $this->_var['L_KEYWORD']; ?>
				</th>
				<th style="width:100px;">
					<?php if (isset($this->_var['L_TOTAL_VISIT'])) echo $this->_var['L_TOTAL_VISIT']; ?>
				</th>
				<th style="width:100px;">
					<?php if (isset($this->_var['L_AVERAGE_VISIT'])) echo $this->_var['L_AVERAGE_VISIT']; ?>
				</th>
				<th style="width:90px;">
					<?php if (isset($this->_var['L_LAST_UPDATE'])) echo $this->_var['L_LAST_UPDATE']; ?>
				</th>	
				<th style="width:93px;">
					<?php if (isset($this->_var['L_TREND'])) echo $this->_var['L_TREND']; ?>
				</th>
			</tr>
			<?php if (!isset($this->_block['keyword_list']) || !is_array($this->_block['keyword_list'])) $this->_block['keyword_list'] = array();
foreach ($this->_block['keyword_list'] as $keyword_list_key => $keyword_list_value) {
$_tmpb_keyword_list = &$this->_block['keyword_list'][$keyword_list_key]; ?>	
			<tr>
				<td class="row2" style="padding:0px;margin:0px;" colspan="5">			
					<table style="width:100%;border:none;border-collapse:collapse;">
						<tr>
							<td style="text-align:center;">		
								<?php if (isset($_tmpb_keyword_list['IMG_MORE'])) echo $_tmpb_keyword_list['IMG_MORE']; ?> <span class="text_small">(<?php if (isset($_tmpb_keyword_list['NBR_LINKS'])) echo $_tmpb_keyword_list['NBR_LINKS']; ?>)</span> <?php if (isset($_tmpb_keyword_list['KEYWORD'])) echo $_tmpb_keyword_list['KEYWORD']; ?>	<span id="load<?php if (isset($_tmpb_keyword_list['ID'])) echo $_tmpb_keyword_list['ID']; ?>"></span>	 			
							</td>
							<td style="width:112px;text-align:center;">
								<?php if (isset($_tmpb_keyword_list['TOTAL_VISIT'])) echo $_tmpb_keyword_list['TOTAL_VISIT']; ?>
							</td>
							<td style="width:112px;text-align:center;">
								<?php if (isset($_tmpb_keyword_list['AVERAGE_VISIT'])) echo $_tmpb_keyword_list['AVERAGE_VISIT']; ?>
							</td>
							<td style="width:102px;text-align:center;">
								<?php if (isset($_tmpb_keyword_list['LAST_UPDATE'])) echo $_tmpb_keyword_list['LAST_UPDATE']; ?>
							</td>
							<td style="width:105px;">
								<?php if (isset($_tmpb_keyword_list['TREND'])) echo $_tmpb_keyword_list['TREND']; ?>
							</td>
						</tr>
					</table>
					<div id="url<?php if (isset($_tmpb_keyword_list['ID'])) echo $_tmpb_keyword_list['ID']; ?>" style="display:none;width:100%;"></div>					
				</td>	
			</tr>
			<?php } ?>
			<tr>
				<td class="row3" colspan="5" style="text-align:center;">
					<?php if (isset($this->_var['PAGINATION'])) echo $this->_var['PAGINATION']; ?>&nbsp;
				</td>
			</tr>
		</table>
		<?php } ?>
		