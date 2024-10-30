<?php
/*
Plugin Name: jQuery Color
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-color/
Description: This plugin loads the jQuery Color plugin.
Version: 2.1.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

// Load jQuery Color
function rw_jquery_color() {
		wp_deregister_script('jquery-color'); // deregister
		wp_enqueue_script('jquery-color', plugins_url('/js/jquery.color-2.1.1.min.js', __FILE__), array('jquery'), '2.1.1');
		
		wp_enqueue_script('jquery-color-names', plugins_url('/js/jquery.color.svg-names-2.1.1.min.js', __FILE__), array('jquery', 'jquery-color'), '2.1.1');
}
// load
add_action('init', 'rw_jquery_color');
?>