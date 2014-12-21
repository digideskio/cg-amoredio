<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Amoredio
 */
?>

    </div><!-- #main -->

<!--    <footer id="colophon" class="site-footer" role="contentinfo">

      <?php get_sidebar( 'footer' ); ?>

      <div class="site-info">
        <?php do_action( 'twentyfourteen_credits' ); ?>
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
      </div><!-- .site-info
    </footer><!-- #colophon 
 -->

      <footer>
      <div class="well" style="margin:0;">
        <!-- <p class="max-width">Copyrights AmoreDio</p> -->
        <div class="container-fluid max-width">
          <div class="row">
            <div class="col-sm-3">
              <p>2014 &copy; Copyrights AmoreDio</p>
              <p>Follow us on: <a href="#"><i class="fa fa-facebook-square fa-lg"></i> Facebook</a></p>
            </div>
            <div class="col-sm-2">
              <h3 style="margin-top:0;">Site Map</h3>
              <ul class="list-unstyled">
                <li><a href="/cg-amoredio-static">Home</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="/cg-amoredio-static/activities.html#cell-groups">Cell Groups</a></li>
                <li><a href="#">Ministries</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-sm-2">
              <h3 style="margin-top:0;">Cell Groups</h3>
              <ul class="list-unstyled">
                <li><a href="/cg-amoredio-static/activities.html#schedule">Bishan</a></li>
                <li><a href="/cg-amoredio-static/activities.html#schedule">Central</a></li>
                <li><a href="/cg-amoredio-static/activities.html#schedule">East</a></li>
                <li><a href="/cg-amoredio-static/activities.html#schedule">Novena</a></li>
                <li><a href="/cg-amoredio-static/activities.html#schedule">OLPS</a></li>
                <li><a href="/cg-amoredio-static/activities.html#schedule">Sengkang</a></li>
                <li><a href="/cg-amoredio-static/activities.html#schedule">Toa Payoh</a></li>
                <li><a href="/cg-amoredio-static/activities.html#schedule">West</a></li>
                <li><a href="/cg-amoredio-static/activities.html#schedule">Youth Generation</a></li>
              </ul>
            </div>
            <div class="col-sm-5">
              <h3 style="margin-top:0;">Ministries</h3>
              <ul class="list-unstyled">
                <li><a href="/cg-amoredio-static/activities.html#min-cm">Creative Ministry</a></li>
                <li><a href="/cg-amoredio-static/activities.html#min-mat">Material Ministry</a></li>
                <li><a href="/cg-amoredio-static/activities.html#min-mbr">Membership Ministry</a></li>
                <li><a href="/cg-amoredio-static/activities.html#min-pry">Prayer Ministry</a></li>
                <li><a href="/cg-amoredio-static/activities.html#min-pw">Praise and Worship</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>



  </div><!-- #page -->

  <?php wp_footer(); ?>
</body>
  <script src="<?php bloginfo('template_url'); ?>/bower_components/bootstrap/js/dropdown.js"></script>
</html>