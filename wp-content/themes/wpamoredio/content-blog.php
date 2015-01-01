<?php
/**
 * The default template for displaying blog post
 *
 * Used for both single and index/archive/search.
 *
 * @package Amoredio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php twentyfourteen_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h2 class="text-center">', '</h2>' );
			else :
				the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<?php if ( is_search() || is_category() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content main-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
