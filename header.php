<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueberry.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/jquery.blueberry.js"></script>

<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>
    
<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

</head>

<body id="home" <?php body_class(); ?>>
<div id="wrapper">

<div id="header">
<a href="http://gloriazhang.com/web170/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/GZ.png" alt="logo"></a>
</div> <!-- End Header -->
    
<!-- Begin main menu -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>
<!-- End main menu -->
 
<div id="middle">