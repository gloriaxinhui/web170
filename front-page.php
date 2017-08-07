<?php get_header(); ?>

    <div class="blueberry">
      <ul class="slides">
      	<li><a href="creative.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/chicks.jpg" alt="chicks" title="Artworks by Gloria"></a></li>
        <li><a href="fashion.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/fashion.jpg" alt="fashion" title="Fashion Design by Gloria"></a></li>
        <li><a href="more.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/fun.jpg" alt="fun" title="More projects by Gloria"></a></li>
        <li><a href="web.html"><img src="<?php bloginfo('template_directory'); ?>/images/slider/web.jpg" alt="web" title="Web Design by Gloria"></a></li>
      </ul>
  	</div> <!--end of blueberry-->
   
    <!-- Begin Widgets -->
    <div id="widgets">
        
        <section class="widget-item">
            <h2>About Me:</h2>
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
                <?php the_content(''); // get the home page's content ?>
                <?php endwhile; endif; // end loop one ?>
        </section>
        
        <section class="widget-item">
            <h2>Latest Postings:</h2>
            <ul>
                <?php rewind_posts(); // stop loop one ?>
                <?php query_posts('showposts=4'); // give directions to loop two ?>
                <?php while (have_posts()) : the_post(); // start loop two ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; // end loop two ?>
            </ul>
        </section>
        
        <section class="widget-item">
            <h2>Contact Me:</h2>
                <p><strong>Phone: </strong>206.832.6250<br><strong>Email: </strong><a href="mailto:gloriaxinhui@gmail.com">gloriaxinhui@gmail.com</a></p>
                <p>1701 Broadway<br>Seattle Central College<br>Seattle, WA 98122</p> 
        </section>
    </div>
    <!-- End Widgets -->
    
<?php get_footer() ?>
    