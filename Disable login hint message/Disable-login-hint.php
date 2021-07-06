<?php
/**
*Plugin Name: Under Maintenance 
*Description: This is my first plugin! 
* Version: 1.1
*Author: Ahmed
*/

// This plugin to disable login hint message
function no_wordpress_errors(){
    return '<h2>Opps! Something is wrong!</h2>';
  }
  add_filter( 'login_errors', 'no_wordpress_errors' );