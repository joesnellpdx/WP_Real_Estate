<?php
/**

 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WP_Real_Estate
 * @since WP_Real_Estate 1.0
 */

get_header('home'); ?>

		<div id="primary" class="content-area row-fluid"> 
			<div id="content" class="site-content span12" role="main">
					<div id="home-base" class="span12 btn btn-blue">
						<hgroup class="hgroup group row-fluid">
							<div class="home-title span12">
								<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							</div>
							<div class="head-description span12">
								<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
								<h3>Real Estate Agent. Builder. Contractor.</h3>
								<div class="quick-links">
									<p>
										<a href="http://www.boomerhomeadvisor.com/contact/" class="btn btn-success">Contact Me</a>
									</p>
								</div>
							</div>
							
						</hgroup>
					</div>

					<div class="home-content row-fluid">
					
						<div class="main-contain span8">
							<div class="featured-properties sumgroup">
								<h2>Featured Properties</h2>
								<div class="flexslider">
									<?php echo do_shortcode("[featured_properties type='all' stats='price' image_type='large' per_page=3]"); ?>
								</div>
							</div>
						
							<div class="latest-posts sumgroup">
								<h2>Latest Posts</h2>
								<?php query_posts('posts_per_page=5'); ?>
				                <?php while ( have_posts() ) : the_post(); ?>
				                <?php get_template_part( 'content', 'summary' ); ?>
								<?php endwhile; // end of the loop. ?> 
							</div>
						</div>
						<div id="sidebar" class="sidebar-content span4" role="sidebar">
							<?php get_sidebar(); ?>
						</div>
						
					</div>
					
				</div>
			
			</div><!-- #content .site-content -->
			

		</div><!-- #primary .content-area -->


<?php get_footer(); ?>