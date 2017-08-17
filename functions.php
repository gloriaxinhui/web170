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

// Get My Title Tag
function get_my_title_tag() {
    
    global $post;
    
    if ( is_front_page() ) {  // for site’s Front Page
    
        bloginfo('description'); // retrieve the site tagline
    
    } 
    
    elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings
    
        the_title(); // retrieve the page or posting title 
    
    } 

    else { // for everything else
        
        bloginfo('description'); // retrieve the site tagline
        
    }
    
    if ( $post->post_parent ) { // for your site’s Parent Pages
    
        echo ' | '; // separator with spaces
        echo get_the_title($post->post_parent); // retrieve the parent page title
        
    }

    echo ' | '; // separator with spaces
    bloginfo('name'); // retrieve the site name
    echo ' | '; // separator with spaces
    echo 'Seattle, WA.'; // write in the location
    
}

?>