<?php get_header(); ?>
<!-- Begin Content -->
    <div id="content">
    <div class="blueberry">
      <ul class="slides">
      	<li><a href="creative.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/chicks.jpg" alt="chicks" title="Artworks by Gloria"></a></li>
        <li><a href="fashion.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/fashion.jpg" alt="fashion" title="Fashion Design by Gloria"></a></li>
        <li><a href="more.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/fun.jpg" alt="fun" title="More projects by Gloria"></a></li>
        <li><a href="web.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/web.jpg" alt="web" title="Web Design by Gloria"></a></li>
      </ul>
  	</div> <!--end of blueberry-->
   
    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <h1><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h1>
    <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>
    <small>front-page.php</small>
</div>
<!-- End Content -->
<?php get_footer() ?>
    