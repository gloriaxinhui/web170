<?php

/*
Theme Name: Gloria Zhang Studio
Author: Gloria Zhang
Author URI: http://gloriazhang.com/
Description: This is a theme discription.
*/

// Register My Sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

// Register My Menus
register_nav_menus(array('main-menu' => __( 'Main' ),));

// Create Post Thumbnails
add_theme_support( 'post-thumbnails' );

// Create Page Excerpts
add_post_type_support( 'page', 'excerpt' );
//

?>