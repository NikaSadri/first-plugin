<?php

/*
Plugin Name: First Plugin
Plugin URI: https://+++/
Description: It's Nika's first plugin.
Version: 1.0
Requires at least: 5.8
Requires PHP: 5.6.20
Author: Nika
Author URI: +++/
License: GPLv2 or later
Text Domain: first-plugin
*/

add_filter("the_title","add_star_to_title");

function add_star_to_title($title){

    $title .= " * ";

    return $title;
    
}




