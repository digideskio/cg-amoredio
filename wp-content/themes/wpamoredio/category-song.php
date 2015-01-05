<?php
/**
 * The template for displaying Category blog pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Amoredio
 */

get_header(); ?>

  <section id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

      <header class="archive-header">
        <div class="logo-page-bg cover" style="background-image: url('<?php bloginfo('template_url'); ?>/images/praise.jpg')">
          <img src="<?php bloginfo('template_url'); ?>/images/logo-01.png" alt="AmoreDio logo">
        </div>
        <div class="tooth"></div>
      </header><!-- .archive-header -->
      
      <div class="container-fluid max-width">
        <div class="row">
          <div class="col-sm-9 col-sm-offset-1 col-md-8 col-md-offset-2">
            <h1 class="text-red text-center"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>
            <blockquote class="center">
              <h3 class="quote">Let everything that has breath praise the Lord! Praise the Lord!</h3>
              <footer>Psalm 150:6</footer>
            </blockquote>
            <p>This is a collection of chords and songs for Praise and Worship</p>

            <?php if ( have_posts() ) : ?>

            <table id="songbook-table" class="table table-striped table-condensed">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Artist</th>
                  <th>Category</th>
                </tr>
              </thead>
              <tbody>
              <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                echo the_title( '<tr><td><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></td>' );
                echo '<td>' . get_post_meta($post->ID, 'artist', true) . '</td>';
                echo '<td>' . get_post_meta($post->ID, 'category', true) . '</td>';                
                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */                    
                //get_template_part( 'content-blog', get_post_format() ); 
                echo '</tr>';
                endwhile;
                // Previous/next page navigation.
                //twentyfourteen_paging_nav();
              ?>
              </tbody>
            </table>

            <?php
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

  <script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/bower_components/jquery.tablesorter/js/jquery.tablesorter.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#songbook-table').tablesorter();
    });
  </script>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
