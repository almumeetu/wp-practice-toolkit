<?php
/*
Plugin Name: WP Practice Toolkit
Description: Learn WordPress plugin development using OOP, AJAX, Hooks and more.
Version: 1.0
Author: Saikat
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants
define( 'WPTK_PATH', plugin_dir_path( __FILE__ ) );
define( 'WPTK_URL', plugin_dir_url( __FILE__ ) );

// Load main loader and helpers
require_once WPTK_PATH . 'includes/class-plugin-loader.php';
require_once WPTK_PATH . 'includes/helpers.php';

// Start plugin
add_action( 'plugins_loaded', function() {
    new WPTK\Plugin_Loader();
});
