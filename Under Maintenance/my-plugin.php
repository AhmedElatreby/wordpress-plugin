<?php
/**
*Plugin Name: Under Maintenance 
*Description: This is my first plugin! 
* Version: 1.1
*Author: Ahmed
*/

// This plugin to display under maintenance page
function wp_maintenance_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
    wp_die('<h1>Under Maintenance</h1><br />Website under planned maintenance. Please check back later.');
    }
    }
    add_action('wp_enqueue_scripts', 'wp_maintenance_mode');