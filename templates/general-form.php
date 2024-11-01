<?php
	// NOT used for now
?>

<div class="wrap">
	<?php screen_icon(); ?>
	<h2><?php _e('Skype Status General Settings', 'skype-status')?></h2>
	
	<form method="post" action="options.php"> 
		<?php settings_fields('skype_status_general'); ?>
		
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[username]"><?php _e('Skype Username', 'skype-status') ?></label></th>
				<td><input name="skype_status_general[username]" type="text" value="<?php echo $options['username']; ?>" class="regular-text" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[interval]"><?php _e('Refresh Interval (sec)', 'skype-status') ?></label></th>
				<td><input name="skype_status_general[interval]" type="number" value="<?php echo $options['interval']; ?>" class="small-text" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="text"><?php _e('Text Before', 'skype-status') ?></label></th>
				<td><textarea rows="2" class="large-text" name="skype_status_general[text]"><?php echo $options['text']; ?></textarea></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[text_after]"><?php _e('Text After', 'skype-status') ?></label></th>
				<td><textarea rows="2" class="large-text" name="skype_status_general[text_after]"><?php echo $options['text_after']; ?></textarea></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[command]"><?php _e('Command', 'skype-status') ?></label></th>
				<td>
					<select name="skype_status_general[command]">
						<option value="add" <?php selected($options['command'], 'add'); ?>><?php _e('Add', 'skype-status'); ?></option>
						<option value="chat" <?php selected($options['command'], 'chat'); ?>><?php _e('Chat', 'skype-status'); ?></option>
						<option value="call" <?php selected($options['command'], 'call'); ?>><?php _e('Call', 'skype-status'); ?></option>
						<option value="userinfo" <?php selected($options['command'], 'userinfo'); ?>><?php _e('Check user info', 'skype-status'); ?></option>
						<option value="voicemail" <?php selected($options['command'], 'voicemail'); ?>><?php _e('Send a voicemail', 'skype-status'); ?></option>
						<option value="sendfile" <?php selected($options['command'], 'sendfile'); ?>><?php _e('Send a file', 'skype-status'); ?></option>
					</select> 
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[images_folder]"><?php _e('Image Folder', 'skype-status') ?></label></th>
				<td><input name="skype_status_general[images_folder]" type="text" value="<?php echo $options['images_folder']; ?>" class="regular-text" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[img_loading]"><?php _e('Loading Image', 'skype-status') ?></label></th>
				<td><input name="skype_status_general[img_loading]" type="text" value="<?php echo $options['img_loading']; ?>" class="regular-text" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[img_online]"><?php _e('Online Image', 'skype-status') ?></label></th>
				<td><input name="skype_status_general[img_online]" type="text" value="<?php echo $options['img_online']; ?>" class="regular-text" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[img_offline]"><?php _e('Offline Image', 'skype-status') ?></label></th>
				<td><input name="skype_status_general[img_offline]" type="text" value="<?php echo $options['img_offline']; ?>" class="regular-text" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[img_away]"><?php _e('Away Image', 'skype-status') ?></label></th>
				<td><input name="skype_status_general[img_away]" type="text" value="<?php echo $options['img_away']; ?>" class="regular-text" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="skype_status_general[img_busy]"><?php _e('Busy Image', 'skype-status') ?></label></th>
				<td><input name="skype_status_general[img_busy]" type="text" value="<?php echo $options['img_busy']; ?>" class="regular-text" /></td>
			</tr>
		</table>
		
		<?php submit_button(); ?>
	</form>
</div>