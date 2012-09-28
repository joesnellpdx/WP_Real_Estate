<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WP_Real_Estate
 * @since WP_Real_Estate 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'wp_real_estate' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'wp_real_estate' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
