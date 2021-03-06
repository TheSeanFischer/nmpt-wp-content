<?php
/*
Plugin Name: Cornerstone
Plugin URI: http://theme.co/cornerstone
Description: The WordPress Page Builder
Author: Themeco
Author URI: http://theme.co/
Version: 1.3.0
Text Domain: cornerstone
Domain Path: lang
*/

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// Load plugin class
require_once 'includes/utility/plugin-base.php';
require_once 'includes/cornerstone-plugin.php';

// Fire it up
Cornerstone_Plugin::run( __FILE__ );
