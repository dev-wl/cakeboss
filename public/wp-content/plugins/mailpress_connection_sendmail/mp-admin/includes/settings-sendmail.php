<?php
		$connection_sendmail = get_option('MailPress_connection_sendmail');
?>
		<div id='fragment-MailPress_connection_sendmail'>
						<div>
							<form name='connection_sendmail_form' action='' method='post'>
								<input type='hidden' name='formname' value='connection_sendmail_form' />
								<table class='form-table'>
									<tr valign='top'>
										<th scope='row'>
											<?php _e('Connect','MailPress_connection_sendmail'); ?>
										</th>
										<td class='field'>
											<input name='connection_sendmail[cmd]' type='radio'<?php checked($connection_sendmail['cmd'],'std'); ?>  value='std' class='connection_sendmail'/>
											<?php _e("using '/usr/sbin/sendmail -bs'",'MailPress_connection_sendmail'); ?>
											<br/>
											<input name='connection_sendmail[cmd]' id='sendmail-custom' type='radio'<?php checked($connection_sendmail['cmd'],'custom'); ?>  value='custom' class='connection_sendmail'/>
											<?php _e('using a custom command','MailPress_connection_sendmail'); ?>
											&nbsp;&nbsp;
											<span id='sendmail-custom-cmd' <?php if ('custom' != $connection_sendmail['cmd']) echo " style='display:none;'"; ?>>
												<input type='text' size='40' name='connection_sendmail[custom]' value="<?php echo $connection_sendmail['custom']; ?>" />					
											</span>
											<br/>
											<input name='connection_sendmail[cmd]' type='radio'<?php checked($connection_sendmail['cmd'],'auto'); ?>  value='auto' class='connection_sendmail'/>
											<?php _e('trying to work out the path itself ...','MailPress_connection_sendmail'); ?>
										</td>
									</tr>
								</table>
								<p class='submit'>
									<input type='submit' name='Submit' value='<?php  _e('Save','MailPress_connection_sendmail'); ?>' />
								</p>
							</form>
						</div>
		</div>