<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WP_Real_Estate
 * @since WP_Real_Estate 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area row-fluid">
			<div id="content" class="site-content span8" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php wp_real_estate_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
			<div id="sidebar" class="sidebar-content span4" role="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- #primary .content-area -->


<?php get_footer(); ?>