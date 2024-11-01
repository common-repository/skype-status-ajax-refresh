<?php

function skype_status_default_options() {
	return array(
			'title' => __('My Skype Status'),
			'username' => '',
			'interval' => 60,
			'text' => '',
			'text_after' => '',
			'command' => 'add',
			'images_folder' => 'wp-content/plugins/'.SKYPE_STATUS_FOLDER.'/assets/images',
			'img_loading' => 'loading.gif',
			'img_online' => 'online_button.png',
			'img_offline' => 'offline_button.png',
			'img_away' => 'away_button.png',
			'img_busy' => 'busy_button.png',
	);
}

function skype_status_get_skype_status($username) {
	$remote_status = fopen ('http://mystatus.skype.com/'.$username.'.num', 'r');
	if (!$remote_status) {
		return '0';
		exit;
	}
	while (!feof ($remote_status)) {
		$value = fgets ($remote_status, 1024);
		fclose($remote_status);
		return trim($value);
	}
}