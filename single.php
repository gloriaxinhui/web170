<?php get_header(); ?>
<!-- Begin Content -->
    <div id="content">
        
    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <h1><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h1>
    <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>
    <small>single.php</small>
        
</div>
<!-- End Content -->
<?php get_footer() ?>
    