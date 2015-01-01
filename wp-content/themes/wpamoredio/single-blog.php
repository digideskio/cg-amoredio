<?php
/**
 * The Template for displaying a single blog post page
 *
 * @package Amoredio
 */

get_header(); ?>
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <header class="archive-header">
            <div class="logo-page-bg cover" style="background-image: url('<?php bloginfo('template_url'); ?>/images/bokeh.jpg')">
              <img src="<?php bloginfo('template_url'); ?>/images/logo-01.png" alt="AmoreDio logo">
            </div>
            <div class="tooth"></div>
        </header><!-- .archive-header -->
      
        <div class="container-fluid max-width">
          <div class="row">
            <div class="col-sm-9 col-sm-offset-1 col-md-8 col-md-offset-2">
              <?php the_breadcrumb(); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-9 col-sm-offset-1 col-md-8 col-md-offset-2">
      
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();

          /*
           * Include the post format-specific template for the content. If you want to
           * use this in a child theme, then include a file called called content-___.php
           * (where ___ is the post format) and that will be used instead.
           */
          get_template_part( 'content-blog', get_post_format() );

          // Previous/next post navigation.
          //twentyfourteen_post_nav();

          // If comments are open or we have at least one comment, load up the comment template.
          //if ( comments_open() || get_comments_number() ) {
          //  comments_template();
          //}
        endwhile;
      ?>
        </div>
        </div>
      </div>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
