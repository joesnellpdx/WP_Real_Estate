<?php
/**
 Template Name: zwanger-home-new
 * The template for displaying all pages.
 *
 *
 * @package WP_Real_Estate
 * @since WP_Real_Estate 1.0
 */

get_header('home'); ?>

		<div id="primary" class="content-area row-fluid"> 
			<div id="content" class="site-content span12" role="main">
					<div id="home-base" class="span12">
						<hgroup class="hgroup group row-fluid">
							<div class="home-title span12">
								<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							</div>
							<div class="sub-head">
								<div class="head-description span6">
									<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
									<h3>Real Estate Agent. Builder. Contractor.</h3>
								</div>
								<div class="quick-links contact-link span6">
									<p>
										<a href="http://www.boomerhomeadvisor.com/contact/" class="btn  btn-blue">Contact Me</a>
									</p>
								</div>
							</div>
							
						</hgroup>
					</div>
			<div class="home-content row-fluid">
				<div class="main-contain span8">

					<?php while ( have_posts() ) : the_post(); ?> 

						<?php get_template_part( 'content', 'home' ); ?>

						<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>
					<div class="latest-posts sumgroup">
						<h2>Latest Posts</h2>
						<?php query_posts('posts_per_page=5'); ?>
		                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content', 'page' ); ?>
						<?php endwhile; // end of the loop. ?> 
					</div>
				</div>
				<div id="sidebar" class="sidebar-content span4" role="sidebar">
							<?php get_sidebar(); ?>
				</div>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->


<?php get_footer(); ?>