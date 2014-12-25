<?php
/**
 * The template for displaying Category Prayer pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

  <section id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

      <header class="archive-header">
          <div class="logo-page-bg cover" style="background-image: url('<?php bloginfo('template_url'); ?>/images/church.jpg')">
            <img src="<?php bloginfo('template_url'); ?>/images/logo-01.png" alt="AmoreDio logo">
          </div>
          <div class="tooth"></div>
        <h1 class="text-red text-center"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>
      </header><!-- .archive-header -->
      
      <div class="container-fluid max-width">
        <div class="row">
          <div class="col-sm-9 col-sm-offset-1 col-md-8 col-md-offset-2">
            <?php if ( have_posts() ) : ?>

            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                get_template_part( 'content-prayer', get_post_format() );
                endwhile;
                // Previous/next page navigation.
                twentyfourteen_paging_nav();

              else :
                // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

              endif;
            ?>
          </div>
        </div>
      </div>
    </div><!-- #content -->
  </section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
