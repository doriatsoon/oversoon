		<script type="text/javascript">
		<!--
		function Confirm_read_topics() {
			return confirm("<?php if (isset($this->_var['L_CONFIRM_READ_TOPICS'])) echo $this->_var['L_CONFIRM_READ_TOPICS']; ?>");
		}
		
		//Rafraissiement des topics non lus.
		function XMLHttpRequest_unread_topics(divID)
		{
			if( document.getElementById('refresh_unread' + divID) )
				document.getElementById('refresh_unread' + divID).src = '../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/loading_mini.gif';
				
			var xhr_object = xmlhttprequest_init('../forum/xmlhttprequest.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>&refresh_unread=1');
			xhr_object.onreadystatechange = function() 
			{
				if( xhr_object.readyState == 4 && xhr_object.status == 200 && xhr_object.responseText != '' )
				{	
					if( document.getElementById('refresh_unread' + divID) )
						document.getElementById('refresh_unread' + divID).src = '../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/refresh_mini.png';
					
					var array_unread_topics = new Array('', '');
					eval(xhr_object.responseText);
					
					if( array_unread_topics[0] > 0 )
						forum_display_block('forum_unread' + divID);
						
					document.getElementById('nbr_unread_topics').innerHTML = array_unread_topics[1];
					document.getElementById('nbr_unread_topics2').innerHTML = array_unread_topics[1];
					document.getElementById('forum_blockforum_unread').innerHTML = array_unread_topics[2];
					document.getElementById('forum_blockforum_unread2').innerHTML = array_unread_topics[2];
				}
				else if( xhr_object.readyState == 4 && xhr_object.responseText == '' )
				{	
					alert("<?php if (isset($this->_var['L_AUTH_ERROR'])) echo $this->_var['L_AUTH_ERROR']; ?>");
					if( document.getElementById('refresh_unread' + divID) )
						document.getElementById('refresh_unread' + divID).src = '../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/refresh_mini.png';
				}
			}
			xmlhttprequest_sender(xhr_object, null);
		}
		
		var delay_forum = 1000; //D�lai apr�s lequel le bloc est automatiquement masqu�, apr�s le d�part de la souris.
		var timeout_forum;
		var displayed_forum = false;
		var previous_forumblock;

		//Affiche le bloc.
		function forum_display_block(divID)
		{
			if( timeout_forum )
				clearTimeout(timeout_forum);
			
			var block = document.getElementById('forum_block' + divID);
			if( block.style.display == 'none' )
			{
				if( document.getElementById(previous_forumblock) )
					document.getElementById(previous_forumblock).style.display = 'none';
				block.style.display = 'block';
				displayed_forum = true;
				previous_forumblock = 'forum_block' + divID;
			}
			else
			{
				block.style.display = 'none';
				displayed_forum = false;
			}
		}

		//Cache le bloc.
		function forum_hide_block(forumid, stop)
		{
			if( stop && timeout_forum )
				clearTimeout(timeout_forum);
			else if( displayed_forum )
			{
				clearTimeout(timeout_forum);
				timeout_forum = setTimeout('forum_display_block(\'' + forumid + '\')', delay_forum);
			}	
		}
		-->
		</script>
		
		<div class="module_position" style="margin-bottom:15px;background:none;border:none">
			<div class="forum_title_l"></div>
			<div class="forum_title_r"></div>
			<div class="forum_title">
				<div style="padding:10px;">
					<div style="float:left;">
						<h2><?php if (isset($this->_var['FORUM_NAME'])) echo $this->_var['FORUM_NAME']; ?></h2>
						<div style="margin-top:4px;">
							<?php if (isset($this->_var['C_FORUM_CONNEXION']) && $this->_var['C_FORUM_CONNEXION']) {echo ' ';if (isset($this->_var['C_USER_NOTCONNECTED']) && $this->_var['C_USER_NOTCONNECTED']) { ?>
								<a class="small_link" href="../member/error.php"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/connect_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['L_CONNECT'])) echo $this->_var['L_CONNECT']; ?></a> <span style="color:#000000;">&bull;</span> <a class="small_link" href="../member/register.php"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/register_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['L_REGISTER'])) echo $this->_var['L_REGISTER']; ?></a>
								<?php }echo ' ';if (isset($this->_var['C_USER_CONNECTED']) && $this->_var['C_USER_CONNECTED']) { ?>
									<a class="small_link" href="?disconnect=true&amp;token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/home_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['L_DISCONNECT'])) echo $this->_var['L_DISCONNECT']; ?></a> 
								<?php }echo ' ';}echo ' ';if (isset($this->_var['C_MODERATION_PANEL']) && $this->_var['C_MODERATION_PANEL']) {echo ' ';if (isset($this->_var['C_FORUM_CONNEXION']) && $this->_var['C_FORUM_CONNEXION']) { ?> <span style="color:#000000;">&bull;</span> <?php } ?>
								<a class="small_link" href="./moderation_forum.php"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/admin/modo_mini.png" class="valign_middle" alt="" /> <?php if (isset($this->_var['L_MODERATION_PANEL'])) echo $this->_var['L_MODERATION_PANEL']; ?></a>
							<?php } ?>
						</div>
					</div>
					<div style="float:right;text-align:right">
						<form action="search.php?token=<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" method="post">
                            <div>
                                <label><input type="text" size="14" id="search" name="search" value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>..." class="text" style="background:#FFFFFF url(../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/search.png) no-repeat;background-position:2px 1px;padding-left:22px;" onclick="if(this.value=='<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>...')this.value='';" onblur="if(this.value=='')this.value='<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>...';" /></label>
                                <input class="submit" value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" type="submit" name="valid_search" style="padding:1px" /><br />
                                <a href="search.php<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>" title="<?php if (isset($this->_var['L_ADVANCED_SEARCH'])) echo $this->_var['L_ADVANCED_SEARCH']; ?>" class="small_link"><?php if (isset($this->_var['L_ADVANCED_SEARCH'])) echo $this->_var['L_ADVANCED_SEARCH']; ?></a>
                                
                                <input type="hidden" name="time" value="30000" />
                                <input type="hidden" name="where" value="contents" />
                                <input type="hidden" name="colorate_result" value="1" />
                            </div>
						</form>
					</div>	
					<div class="spacer"></div>		
				</div>
			</div>
			<div class="forum_links" style="border-top:none;">
				<div style="float:left;">
					&bull; <a href="index.php?<?php if (isset($this->_var['SID'])) echo $this->_var['SID']; ?>"><?php if (isset($this->_var['L_FORUM_INDEX'])) echo $this->_var['L_FORUM_INDEX']; ?></a>
				</div>
				<div style="float:right;">
					<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/track_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['U_TOPIC_TRACK'])) echo $this->_var['U_TOPIC_TRACK']; ?> &bull;
					<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/last_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['U_LAST_MSG_READ'])) echo $this->_var['U_LAST_MSG_READ']; ?> &bull;
					<img src="<?php if (isset($this->_var['MODULE_DATA_PATH'])) echo $this->_var['MODULE_DATA_PATH']; ?>/images/new_mini.png" alt="" class="valign_middle" /> <span id="nbr_unread_topics"><?php if (isset($this->_var['U_MSG_NOT_READ'])) echo $this->_var['U_MSG_NOT_READ']; ?></span>
					
					<div style="position:relative;float:left;">
						<div style="position:absolute;z-index:100;float:left;margin-left:130px;display:none;" id="forum_blockforum_unread">
						</div>
					</div>
					<a href="javascript:XMLHttpRequest_unread_topics('');" onmouseover="forum_hide_block('forum_unread', 1);" onmouseout="forum_hide_block('forum_unread', 0);"><img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/refresh_mini.png" alt="" id="refresh_unread" class="valign_middle" /></a>

					&bull;					
					<img src="../templates/<?php if (isset($this->_var['THEME'])) echo $this->_var['THEME']; ?>/images/read_mini.png" alt="" class="valign_middle" /> <?php if (isset($this->_var['U_MSG_SET_VIEW'])) echo $this->_var['U_MSG_SET_VIEW']; ?>
				</div>
				<div class="spacer"></div>
			</div>
		</div>
