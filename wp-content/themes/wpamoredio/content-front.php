<?php
/**
 * The template used for displaying front page content
 *
 * @package Amoredio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
    // Page thumbnail and title.
    twentyfourteen_post_thumbnail();
  ?>

  <div class="entry-content">
    <?php
      the_content();
      wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
      ) );

      edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
