<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
  return;
}
?>
<?php if ( have_comments() ) : ?>
  <h3>Comments</h3>
  <?php wp_list_comments( array( 'type'=>'comment' ) ); ?>
  
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <?php previous_comments_link( __( '&larr; Older Comments', 'twentyten' ) ); ?>
    <?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyten' ) ); ?>
  <?php endif; // check for comment navigation ?>
  <br />
  
<?php else: ?>
  <?php if ( ! comments_open() ) : ?>
    <p>Comments are closed.</p>
  <?php endif; ?>
<?php endif; ?>

<?php comment_form(); ?>
