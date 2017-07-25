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
    
<?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>>
<div id="wrapper">
<nav>
	<ul>
		<li class="leftNav"><a href="art.html">Art</a></li>
		<li class="leftNav"><a href="fashion.html">Fashion</a></li>
		<li class="leftNav"><a href="web.html">Web</a></li>
		<li class="rightNav"><a href="about.html">About</a></li>
		<li class="rightNav"><a href="services.html">Services</a></li>
		<li class="rightNav"><a href="more.html">More</a></li>
	</ul>
</nav>

<header>
<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/GZ.png" alt="logo"></a>
</header>

    <div class="blueberry">
      <ul class="slides">
      	<li><a href="creative.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/chicks.jpg" alt="chicks" title="Artworks by Gloria"></a></li>
        <li><a href="fashion.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/fashion.jpg" alt="fashion" title="Fashion Design by Gloria"></a></li>
        <li><a href="more.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/fun.jpg" alt="fun" title="More projects by Gloria"></a></li>
        <li><a href="web.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/web.jpg" alt="web" title="Web Design by Gloria"></a></li>
      </ul>
  	</div> <!--end of blueberry-->
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>

<footer>
	<ul>
		<li class="leftfooter">
		<a href="https://www.facebook.com/gloriaxinhui.z">
		<img src="<?php bloginfo('template_directory'); ?>/images/contact/fb.png" alt="fb"></a></li>
		
		<li class="leftfooter">
		<a href="http://instagram.com/gloria_zhang/">
		<img src="<?php bloginfo('template_directory'); ?>/images/contact/in.png" alt="in"></a></li>
		
		<li class="leftfooter">
		<a href="https://www.linkedin.com/in/gloriaxinhui/">
		<img src="<?php bloginfo('template_directory'); ?>/images/contact/ln.png" alt="ln"></a></li>
		
		<li class="rightfooter"><a href="../index.html" >Web Design By Gloria</a></li>
		<li class="rightfooter">All Rights Reserved</li>
		<li class="rightfooter">Copyrights 2017 &copy;</li>
	</ul>
</footer>

</div> <!--end of wrapper-->   
    
<?php wp_footer() ?>
</body>
</html>
