<?php
/**
 * The Template for displaying a single song post page
 *
 * @package Amoredio
 */

get_header(); ?>
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <header class="archive-header">
            <div class="logo-page-bg cover" style="background-image: url('<?php bloginfo('template_url'); ?>/images/praise.jpg')">
              <img src="<?php bloginfo('template_url'); ?>/images/logo-01.png" alt="AmoreDio logo">
            </div>
            <div class="tooth"></div>
        </header><!-- .archive-header -->
      
        <div class="container-fluid max-width">
          <div class="row">
            <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
              <?php the_breadcrumb(); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
      
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();

          /*
           * Include the post format-specific template for the content. If you want to
           * use this in a child theme, then include a file called called content-___.php
           * (where ___ is the post format) and that will be used instead.
           */
          $vframe = get_post_meta($post->ID, 'vframe', true);
          if ($vframe) {
            echo '<div id="vid">' . $vframe . '</div>';
          }
          get_template_part( 'content-song', get_post_format() );
          $categories = get_the_category($post->ID);
          $category_link = get_category_link( $categories[0]->cat_ID );
      ?>
          <hr class="dotted">
          <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back to Song Book</a>
      <?php
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
    <br>
  </div><!-- #primary -->

  <script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/bower_components/fitvids/jquery.fitvids.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/vendor/jquery-chord-transposer/jquery.transposer.js"></script>
  <script>
    $(document).ready(function(){
      $("#vid").fitVids();
      $('.chord').transpose();
    });
  </script>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
