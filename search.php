<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WP_Real_Estate
 * @since WP_Real_Estate 1.0
 */

get_header(); ?>

		<section id="primary" class="content-area row-fluid">
			<div id="content" class="site-content span8" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wp_real_estate' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php wp_real_estate_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
			<div id="sidebar" class="sidebar-content span4" role="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</section><!-- #primary .content-area -->

<?php get_footer(); ?>