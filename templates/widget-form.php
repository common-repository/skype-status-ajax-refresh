<style type="text/css">
	.skype-status-image label, .skype-status-image input {
		display: inline-block;
	}
	.skype-status-image label {
		width: 40%;
		line-height: 22px;
	}
	.skype-status-image input {
		width: 58%;
		float: right;
	}
</style>

<p>
	<?php echo sprintf(__('It is necessary to <strong>configure Skype</strong> to allow your online status to be shown on the web. For more information, please visit the <a href="%s" target="_bank">Skype Status plugin guide</a>.', 'skype-status'), 'http://www.s2software.it/en/download/wordpress-skype-status/'); ?>
</p>

<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'skype-status'); ?>:</label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />
</p>

<p>
	<label for="<?php echo $this->get_field_id('username'); ?>"><?php _e('Skype Username', 'skype-status'); ?>:</label>
	<input class="widefat" id="<?php echo $this->get_field_id('username'); ?>" name="<?php echo $this->get_field_name('username'); ?>" type="text" value="<?php echo $instance['username']; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('interval'); ?>"><?php _e('Refresh Interval (sec)', 'skype-status'); ?>:</label>
	<input size="3" id="<?php echo $this->get_field_id('interval'); ?>" name="<?php echo $this->get_field_name('interval'); ?>" type="text" value="<?php echo $instance['interval']; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text Before', 'skype-status'); ?>:</label>
	<textarea class="widefat" rows="2" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $instance['text']; ?></textarea>
</p>
<p>
	<label for="<?php echo $this->get_field_id('text_after'); ?>"><?php _e('Text After', 'skype-status'); ?>:</label>
	<textarea class="widefat" rows="2" id="<?php echo $this->get_field_id('text_after'); ?>" name="<?php echo $this->get_field_name('text_after'); ?>"><?php echo $instance['text_after']; ?></textarea>
</p>

<br>

<p>
	<label for="<?php echo $this->get_field_id('command'); ?>"><?php _e('Command', 'skype-status'); ?>:</label>
	<select id="<?php echo $this->get_field_id('command'); ?>" name="<?php echo $this->get_field_name('command'); ?>">
		<option value="add" <?php selected($instance['command'], 'add'); ?>><?php _e('Add', 'skype-status'); ?></option>
		<option value="chat" <?php selected($instance['command'], 'chat'); ?>><?php _e('Chat', 'skype-status'); ?></option>
		<option value="call" <?php selected($instance['command'], 'call'); ?>><?php _e('Call', 'skype-status'); ?></option>
		<option value="userinfo" <?php selected($instance['command'], 'userinfo'); ?>><?php _e('Check user info', 'skype-status'); ?></option>
		<option value="voicemail" <?php selected($instance['command'], 'voicemail'); ?>><?php _e('Send a voicemail', 'skype-status'); ?></option>
		<option value="sendfile" <?php selected($instance['command'], 'sendfile'); ?>><?php _e('Send a file', 'skype-status'); ?></option>
	</select> 
</p>

<br>

<p>
	<label for="<?php echo $this->get_field_id('images_folder'); ?>"><?php _e('Image Folder', 'skype-status'); ?>:</label>
	<input class="widefat" id="<?php echo $this->get_field_id('images_folder'); ?>" name="<?php echo $this->get_field_name('images_folder'); ?>" type="text" value="<?php echo $instance['images_folder']; ?>" />
</p>
<p class="skype-status-image">
	<label for="<?php echo $this->get_field_id('img_loading'); ?>"><?php _e('Loading Image', 'skype-status'); ?>:</label>
	<input id="<?php echo $this->get_field_id('img_loading'); ?>" name="<?php echo $this->get_field_name('img_loading'); ?>" type="text" value="<?php echo $instance['img_loading']; ?>" />
</p>
<p class="skype-status-image">
	<label for="<?php echo $this->get_field_id('img_online'); ?>"><?php _e('Online Image', 'skype-status'); ?>:</label>
	<input id="<?php echo $this->get_field_id('img_online'); ?>" name="<?php echo $this->get_field_name('img_online'); ?>" type="text" value="<?php echo $instance['img_online']; ?>" />
</p>
<p class="skype-status-image">
	<label for="<?php echo $this->get_field_id('img_offline'); ?>"><?php _e('Offline Image', 'skype-status'); ?>:</label>
	<input id="<?php echo $this->get_field_id('img_offline'); ?>" name="<?php echo $this->get_field_name('img_offline'); ?>" type="text" value="<?php echo $instance['img_offline']; ?>" />
</p>
<p class="skype-status-image">
	<label for="<?php echo $this->get_field_id('img_away'); ?>"><?php _e('Away Image', 'skype-status'); ?>:</label>
	<input id="<?php echo $this->get_field_id('img_away'); ?>" name="<?php echo $this->get_field_name('img_away'); ?>" type="text" value="<?php echo $instance['img_away']; ?>" />
</p>
<p class="skype-status-image">
	<label for="<?php echo $this->get_field_id('img_busy'); ?>"><?php _e('Busy Image', 'skype-status'); ?>:</label>
	<input id="<?php echo $this->get_field_id('img_busy'); ?>" name="<?php echo $this->get_field_name('img_busy'); ?>" type="text" value="<?php echo $instance['img_busy']; ?>" />
</p>
