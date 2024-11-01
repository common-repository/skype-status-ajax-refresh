<?php
/*
Plugin Name: Skype Status
Plugin URI: http://www.s2software.it/en/download/wordpress-skype-status/
Description: WordPress widget linking your Skype contact and displaying your status with periodically AJAX refresh (refresh without page reload). You can set custom status images and texts. It is necessary to <strong>configure Skype</strong> to allow your online status to be shown on the web. For more information, please visit the <strong><a href="http://www.s2software.it/en/download/wordpress-skype-status/" target="_bank">Skype Status plugin guide</a></strong>.
Version: 1.0.1
Author: S2 Software
Author URI: http://www.s2software.it/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define('SKYPE_STATUS_FOLDER', dirname(plugin_basename( __FILE__ )));

add_action('plugins_loaded', 'skype_status_init');
function skype_status_init() {
	load_plugin_textdomain('skype-status', FALSE, SKYPE_STATUS_FOLDER. '/languages/');
}

include_once dirname( __FILE__ ) . '/helper.php';
include_once dirname( __FILE__ ) . '/widget.php';
//include_once dirname( __FILE__ ) . '/general.php';	// NOT used for now
include_once dirname( __FILE__ ) . '/ajax.php';
