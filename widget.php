<?php

add_action('widgets_init', function() {
	register_widget('Skype_Status');
	
	if (!is_admin()) {
		// JS
		wp_register_script('jquery-cookie', WP_PLUGIN_URL.'/'.SKYPE_STATUS_FOLDER.'/assets/js/jquery.cookie.js', 'jquery', '2.6', FALSE);
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-cookie');
		
		// CSS
		wp_register_style('skype-status', WP_PLUGIN_URL.'/'.SKYPE_STATUS_FOLDER.'/assets/css/style.css');
		wp_enqueue_style('skype-status');
	}
});

class Skype_Status extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
				'skype_status', // Base ID
				__('Skype Status'), // Name
				array('description' => __('Show your Skype status linked to your Skype contact.', 'skype-status')),
				array('width' => 350)
		);
	}
	
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget($args, $instance) {
		$instance = wp_parse_args($instance, skype_status_default_options());
		extract($instance);	// array to variables
		
		// Images paths
		$images_folder = site_url($images_folder);
		if (substr($images_folder, -1) == '/')
			$images_folder = substr($images_folder, 0, strlen($images_folder) - 1);
		$img_loading = $images_folder.'/'.$img_loading;
		$img_online = $images_folder.'/'.$img_online;
		$img_offline = $images_folder.'/'.$img_offline;
		$img_away = $images_folder.'/'.$img_away;
		$img_busy = $images_folder.'/'.$img_busy;
		
		echo $args['before_widget'];
		if (!empty( $instance['title'])) {
			echo $args['before_title'];
			echo esc_html($instance['title']);
			echo $args['after_title'];
		}
		include dirname( __FILE__ ).'/templates/widget.php';
		echo $args['after_widget'];
	}
	
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form($instance) {
		$instance = wp_parse_args($instance, skype_status_default_options());
		include dirname( __FILE__ ).'/templates/widget-form.php';
	}
	
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update($new_instance, $old_instance) {
		$instance = array();
		foreach ($new_instance as $key => $value) {
			if (!empty($value)) {
				$instance[$key] = strip_tags($value);
				
				if ($key == 'interval') {
					$instance[$key] = intval($instance[$key]);
				}
			}
		}
		
		return $instance;
	}
}