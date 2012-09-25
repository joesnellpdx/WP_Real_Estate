<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WP_Real_Estate
 * @since WP_Real_Estate 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area row-fluid"> 
			<div id="content" class="site-content span8" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
				

			</div><!-- #content .site-content -->
			<div id="sidebar" class="sidebar-content span4" role="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- #primary .content-area -->


<?php get_footer(); ?>