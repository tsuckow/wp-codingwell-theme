<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
   <?php if ( have_posts() ): ?>
     <?php while ( have_posts() ) : the_post(); ?>
       <h2>
         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
       </h2>
       <span class="newsdetail" style="float:right"><?php the_author_posts_link(); ?></span><span class="newsdetail"><?php the_time(get_option('date_format')); ?></span>
       <?php the_excerpt(); ?>
     <?php endwhile; wp_reset_query(); ?>
   <?php else: ?>
     <h2>No posts found</h2>
   <?php endif; ?>

   <?php if ( $wp_query->max_num_pages > 1 ) : ?>
     <div class="prev">
       <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
     </div>
     <div class="next">
       <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
     </div>
   <?php endif; ?>
</div>
<?php get_footer(); ?>
