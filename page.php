<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
     <h1><?php the_title(); ?></h1>
     <?php the_content(); ?>
   <?php endwhile; wp_reset_query(); ?>
</div>
<?php get_footer(); ?>
