<?php
/*
Plugin Name: Announcement Banner
Description: A plugin to add an announcement banner to your WordPress site.
Version: 1.0
Author: Junaid
*/

// Enqueue styles
function ab_enqueue_scripts() {
    wp_enqueue_style('ab-styles', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'ab_enqueue_scripts');

// Include other files
require_once plugin_dir_path(__FILE__) . 'includes/display-banner.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin-settings.php';
