		<div class="module_position" style="margin-top:15px;">
			<div class="forum_links" style="border-bottom:none;">
				<div style="float:left;">
					&bull; <a href="index.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_FORUM_INDEX'])) echo $this->_var['L_FORUM_INDEX']; ?></a> 
				</div>
				<div style="float:right;">
					<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/track_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['U_TOPIC_TRACK'])) echo $this->_var['U_TOPIC_TRACK']; ?> &bull;
					<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/last_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['U_LAST_MSG_READ'])) echo $this->_var['U_LAST_MSG_READ']; ?> &bull;
					<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/new_mini.png" alt="" class="valign_middle" /> <span id="nbr_unread_topics2"><?php if (isset($this->_var['U_MSG_NOT_READ'])) echo $this->_var['U_MSG_NOT_READ']; ?></span>
					
					<div style="position:relative;float:left;">
						<div style="position:absolute;z-index:100;float:left;margin-left:130px;display:none;" id="forum_blockforum_unread2">
						</div>
					</div>
					<a href="javascript:XMLHttpRequest_unread_topics('2');" onmouseover="forum_hide_block('forum_unread2', 1);" onmouseout="forum_hide_block('forum_unread2', 0);"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/refresh_mini.png" alt="" id="refresh_unread2" class="valign_middle" /></a>
					
					&bull;
					<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/read_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['U_MSG_SET_VIEW'])) echo $this->_var['U_MSG_SET_VIEW']; ?>
				</div>
				<div class="spacer"></div>
			</div>
			
			<div class="forum_online">
				<?php if (isset($this->_var['C_FORUM_CONNEXION']) && $this->_var['C_FORUM_CONNEXION']) {echo ' ';if (isset($this->_var['C_USER_NOTCONNECTED']) && $this->_var['C_USER_NOTCONNECTED']) { ?>
					<form action="" method="post">
						<p style="margin-bottom:8px;" class="text_small"><label><?php if (isset($this->_var['L_PSEUDO'])) echo $this->_var['L_PSEUDO']; ?> <input size="15" type="text" class="text" name="login" maxlength="25" /></label>
						<label><?php if (isset($this->_var['L_PASSWORD'])) echo $this->_var['L_PASSWORD']; ?>	<input size="15" type="password" name="password" class="text" maxlength="30" /></label>
						&nbsp;| <label><?php if (isset($this->_var['L_AUTOCONNECT'])) echo $this->_var['L_AUTOCONNECT']; ?> <input type="checkbox" name="auto" checked="checked" /></label>
						&nbsp;| <input type="submit" name="connect" value="<?php if (isset($this->_var['L_CONNECT'])) echo $this->_var['L_CONNECT']; ?>" class="submit" /></p>
					</form>
					<?php }echo ' ';}echo ' ';if (isset($this->_var['USERS_ONLINE']) && $this->_var['USERS_ONLINE']) { ?>
				<span style="float:left;">
					<?php if (isset($this->_var['TOTAL_ONLINE'])) echo $this->_var['TOTAL_ONLINE'];echo ' ';if (isset($this->_var['L_USER'])) echo $this->_var['L_USER'];echo ' ';if (isset($this->_var['L_ONLINE'])) echo $this->_var['L_ONLINE']; ?> :: <?php if (isset($this->_var['ADMIN'])) echo $this->_var['ADMIN'];echo ' ';if (isset($this->_var['L_ADMIN'])) echo $this->_var['L_ADMIN']; ?>, <?php if (isset($this->_var['MODO'])) echo $this->_var['MODO'];echo ' ';if (isset($this->_var['L_MODO'])) echo $this->_var['L_MODO']; ?>, <?php if (isset($this->_var['USER'])) echo $this->_var['USER'];echo ' ';if (isset($this->_var['L_USER'])) echo $this->_var['L_USER'];echo ' ';if (isset($this->_var['L_AND'])) echo $this->_var['L_AND'];echo ' ';if (isset($this->_var['GUEST'])) echo $this->_var['GUEST'];echo ' ';if (isset($this->_var['L_GUEST'])) echo $this->_var['L_GUEST']; ?>
					<br />
					<?php if (isset($this->_var['L_USER'])) echo $this->_var['L_USER'];echo ' ';if (isset($this->_var['L_ONLINE'])) echo $this->_var['L_ONLINE']; ?>: <?php if (isset($this->_var['USERS_ONLINE'])) echo $this->_var['USERS_ONLINE']; ?>
				</span>
				<div style="float:right;text-align:right">
					<?php if (isset($this->_var['SELECT_CAT']) && $this->_var['SELECT_CAT']) { ?>
					<form action="<?php if (isset($this->_var['U_CHANGE_CAT'])) echo $this->_var['U_CHANGE_CAT']; ?>" method="post">
                        <div>
                            <select name="change_cat" onchange="if(this.options[this.selectedIndex].text.substring(0, 4) == '----') document.location = 'forum<?php if (isset($this->_var['U_ONCHANGE'])) echo $this->_var['U_ONCHANGE']; ?>'; else document.location = '<?php if (isset($this->_var['U_ONCHANGE_CAT'])) echo $this->_var['U_ONCHANGE_CAT']; ?>';">
                                <?php if (isset($this->_var['SELECT_CAT'])) echo $this->_var['SELECT_CAT']; ?>
                            </select>
                            <noscript>
                                <div><input type="submit" name="valid_change_cat" value="Go" class="submit" /></div>
                            </noscript>
                        </div>
					</form>
					<?php }echo ' ';if (isset($this->_var['C_MASS_MODO_CHECK']) && $this->_var['C_MASS_MODO_CHECK']) { ?>
					<form action="action.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>">
                        <div>
                            <?php if (isset($this->_var['L_FOR_SELECTION'])) echo $this->_var['L_FOR_SELECTION']; ?>: 
                            <select name="massive_action_type">
                                <option value="change"><?php if (isset($this->_var['L_CHANGE_STATUT_TO'])) echo $this->_var['L_CHANGE_STATUT_TO']; ?></option>
                                <option value="changebis"><?php if (isset($this->_var['L_CHANGE_STATUT_TO_DEFAULT'])) echo $this->_var['L_CHANGE_STATUT_TO_DEFAULT']; ?></option>
                                <option value="move"><?php if (isset($this->_var['L_MOVE_TO'])) echo $this->_var['L_MOVE_TO']; ?></option>
                                <option value="lock"><?php if (isset($this->_var['L_LOCK'])) echo $this->_var['L_LOCK']; ?></option>
                                <option value="unlock"><?php if (isset($this->_var['L_UNLOCK'])) echo $this->_var['L_UNLOCK']; ?></option>
                                <option value="del"><?php if (isset($this->_var['L_DELETE'])) echo $this->_var['L_DELETE']; ?></option>
                            </select>
                            <input type="submit" value="<?php if (isset($this->_var['L_GO'])) echo $this->_var['L_GO']; ?>" name="valid" class="submit" />
                        </div>
					</form>
					<?php } ?>
				</div>
				<div class="spacer"></div>
				<?php }echo ' ';if (isset($this->_var['C_TOTAL_POST']) && $this->_var['C_TOTAL_POST']) { ?>
				<div style="margin-top:6px;">
					<span style="float:left;">
						<?php if (isset($this->_var['L_TOTAL_POST'])) echo $this->_var['L_TOTAL_POST']; ?>: <strong><?php if (isset($this->_var['NBR_MSG'])) echo $this->_var['NBR_MSG']; ?></strong> <?php if (isset($this->_var['L_MESSAGE'])) echo $this->_var['L_MESSAGE'];echo ' ';if (isset($this->_var['L_DISTRIBUTED'])) echo $this->_var['L_DISTRIBUTED']; ?> <strong><?php if (isset($this->_var['NBR_TOPIC'])) echo $this->_var['NBR_TOPIC']; ?></strong> <?php if (isset($this->_var['L_TOPIC'])) echo $this->_var['L_TOPIC']; ?>
					</span>
					<span style="float:right;">
						<a href="stats.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_STATS'])) echo $this->_var['L_STATS']; ?></a> <a href="stats.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/stats.png" alt="" class="valign_middle" /></a>
					</span>
					<div class="spacer"></div>
				</div>
				<?php }echo ' ';if (isset($this->_var['C_AUTH_POST']) && $this->_var['C_AUTH_POST']) { ?>
				<div class="forum_action">
					<?php if (isset($this->_var['C_DISPLAY_MSG']) && $this->_var['C_DISPLAY_MSG']) { ?>
					<span id="forum_change_statut">
						<a href="action<?php if (isset($this->_var['U_ACTION_MSG_DISPLAY'])) echo $this->_var['U_ACTION_MSG_DISPLAY']; ?>#go_bottom"><?php if (isset($this->_var['ICON_DISPLAY_MSG'])) echo $this->_var['ICON_DISPLAY_MSG']; ?></a>	<a href="action<?php if (isset($this->_var['U_ACTION_MSG_DISPLAY'])) echo $this->_var['U_ACTION_MSG_DISPLAY']; ?>#go_bottom" class="small_link"><?php if (isset($this->_var['L_EXPLAIN_DISPLAY_MSG_DEFAULT'])) echo $this->_var['L_EXPLAIN_DISPLAY_MSG_DEFAULT']; ?></a>
					</span>
					<script type="text/javascript">
					<!--				
					document.getElementById('forum_change_statut').style.display = 'none';
					document.write('<a href="javascript:XMLHttpRequest_change_statut()" class="small_link"><?php if (isset($this->_var['ICON_DISPLAY_MSG2'])) echo $this->_var['ICON_DISPLAY_MSG2']; ?></a> <a href="javascript:XMLHttpRequest_change_statut()" class="small_link"><span id="forum_change_msg"><?php if (isset($this->_var['L_EXPLAIN_DISPLAY_MSG_DEFAULT'])) echo $this->_var['L_EXPLAIN_DISPLAY_MSG_DEFAULT']; ?></span></a>');
					-->
					</script>
					&bull;
					<?php } ?>
					<a href="alert<?php if (isset($this->_var['U_ALERT'])) echo $this->_var['U_ALERT']; ?>#go_bottom" class="small_link"><img class="valign_middle" src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/important_mini.png" alt="" /></a> <a href="alert<?php if (isset($this->_var['U_ALERT'])) echo $this->_var['U_ALERT']; ?>#go_bottom" class="small_link"><?php if (isset($this->_var['L_ALERT'])) echo $this->_var['L_ALERT']; ?></a>
					<span id="forum_track">
						<a href="action<?php if (isset($this->_var['U_SUSCRIBE'])) echo $this->_var['U_SUSCRIBE']; ?>#go_bottom"><?php if (isset($this->_var['ICON_TRACK'])) echo $this->_var['ICON_TRACK']; ?></a> <a href="action<?php if (isset($this->_var['U_SUSCRIBE'])) echo $this->_var['U_SUSCRIBE']; ?>#go_bottom" class="small_link"><?php if (isset($this->_var['L_TRACK_DEFAULT'])) echo $this->_var['L_TRACK_DEFAULT']; ?></a>
					</span>
					<script type="text/javascript">
					<!--				
					document.getElementById('forum_track').style.display = 'none';
					document.write('<a href="javascript:XMLHttpRequest_track()" class="small_link"><?php if (isset($this->_var['ICON_TRACK2'])) echo $this->_var['ICON_TRACK2']; ?></a> <a href="javascript:XMLHttpRequest_track()" class="small_link"><span id="forum_track_msg"><?php if (isset($this->_var['L_TRACK_DEFAULT'])) echo $this->_var['L_TRACK_DEFAULT']; ?></span></a>');
					-->
					</script>
					&bull;
					<span id="forum_track_pm">
						<a href="action<?php if (isset($this->_var['U_SUSCRIBE_PM'])) echo $this->_var['U_SUSCRIBE_PM']; ?>#go_bottom"><?php if (isset($this->_var['ICON_SUSCRIBE_PM'])) echo $this->_var['ICON_SUSCRIBE_PM']; ?></a> <a href="action<?php if (isset($this->_var['U_SUSCRIBE_PM'])) echo $this->_var['U_SUSCRIBE_PM']; ?>#go_bottom" class="small_link"><?php if (isset($this->_var['L_SUSCRIBE_PM_DEFAULT'])) echo $this->_var['L_SUSCRIBE_PM_DEFAULT']; ?></a>
					</span>
					<script type="text/javascript">
					<!--				
					document.getElementById('forum_track_pm').style.display = 'none';
					document.write('<a href="javascript:XMLHttpRequest_track_pm()" class="small_link"><?php if (isset($this->_var['ICON_SUSCRIBE_PM2'])) echo $this->_var['ICON_SUSCRIBE_PM2']; ?></a> <a href="javascript:XMLHttpRequest_track_pm()" class="small_link"><span id="forum_track_pm_msg"><?php if (isset($this->_var['L_SUSCRIBE_PM_DEFAULT'])) echo $this->_var['L_SUSCRIBE_PM_DEFAULT']; ?></span></a>');
					-->
					</script>
					&bull;
					<span id="forum_track_mail">
						<a href="action<?php if (isset($this->_var['U_SUSCRIBE_MAIL'])) echo $this->_var['U_SUSCRIBE_MAIL']; ?>#go_bottom"><?php if (isset($this->_var['ICON_SUSCRIBE'])) echo $this->_var['ICON_SUSCRIBE']; ?></a> <a href="action<?php if (isset($this->_var['U_SUSCRIBE_MAIL'])) echo $this->_var['U_SUSCRIBE_MAIL']; ?>#go_bottom" class="small_link"><?php if (isset($this->_var['L_SUSCRIBE_DEFAULT'])) echo $this->_var['L_SUSCRIBE_DEFAULT']; ?></a>
					</span>
					<script type="text/javascript">
					<!--				
					document.getElementById('forum_track_mail').style.display = 'none';
					document.write('<a href="javascript:XMLHttpRequest_track_mail()" class="small_link"><?php if (isset($this->_var['ICON_SUSCRIBE2'])) echo $this->_var['ICON_SUSCRIBE2']; ?></a> <a href="javascript:XMLHttpRequest_track_mail()" class="small_link"><span id="forum_track_mail_msg"><?php if (isset($this->_var['L_SUSCRIBE_DEFAULT'])) echo $this->_var['L_SUSCRIBE_DEFAULT']; ?></span></a>');
					-->
					</script>
				</div>
				<?php } ?>
			</div>
		</div>