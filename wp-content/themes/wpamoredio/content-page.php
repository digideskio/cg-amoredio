<?php
/**
 * The template used for displaying page content
 * Modified from Twenty_Fourteen
 *
 * @package Amoredio
 * @subpackage wpamoredio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="logo-page-bg cover" style="background-image: url('<?php echo $image[0]; ?>')">
      <img src="<?php bloginfo('template_url'); ?>/images/logo-01.png" alt="AmoreDio logo">
    </div>
    <div class="tooth"></div>
  <?php endif; ?>  
<!--   <div style="background-image:url(/cg-amoredio-static/img/theme/keyboard.jpg);">
  </div>
 -->

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
