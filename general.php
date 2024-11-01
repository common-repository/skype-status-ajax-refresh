<?php

// NOT used for now

add_action("admin_menu", function () {
	add_submenu_page('options-general.php', __( 'Skype Status' ), __( 'Skype Status' ), 'manage_options', basename(__FILE__), 'skype_status_general_form' );
	add_action('admin_init', 'skype_status_register_settings');
});

function skype_status_register_settings() {
	register_setting('skype_status_general', 'skype_status_general');	// serialized array of options
}

function skype_status_general_form() {
	$options = get_option('skype_status_general');
	$options = wp_parse_args($options, skype_status_default_options());
	include dirname( __FILE__ ).'/templates/general-form.php';
}