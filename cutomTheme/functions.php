<?php

// Register navigation menus
register_nav_menus(
    array('main' => 'Top Menu') // Added the missing semicolon
);

// Hook to add post formats
add_action('after_setup_theme', 'add_post_format', 10);

function add_post_format() {
    add_theme_support('post-formats', array('aside', 'video')); // Correct usage of add_theme_support
}

add_shortcode("myform", "login");

function login() {

	$op=" ";
	$op.="<input type='text'> ";

	return $op;
}

?>
