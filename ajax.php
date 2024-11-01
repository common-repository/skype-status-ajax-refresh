<?php

add_action('wp_ajax_skype_status_ajax', 'skype_status_ajax');
add_action('wp_ajax_nopriv_skype_status_ajax', 'skype_status_ajax');

function skype_status_ajax() {
	$username = $_GET['username'];
	$status = skype_status_get_skype_status($username);
	
	echo $status;
	exit;
}