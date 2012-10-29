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
				<hgroup class="hgroup group">
					<div class="home-title">
						<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>
					<div class="head-description">
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<h3>Real Estate Agent. Builder. Contractor.</h3>
						<div class="quick-links">
							<p>
								<a href="http://www.boomerhomeadvisor.com/contact/" class="btn btn-brown">Contact Me</a>
							</p>
						</div>
					</div>
					
				</hgroup>

				<div class="home-summary row-fluid">
					
					<div class="featured-properties span6 sumgroup">
						<h2>Featured Properties</h2>
						<?php echo do_shortcode("[featured_properties type='all' stats='price' image_type=’large’ per_page=6]"); ?>
					</div>
					<div class="my-style-of-realty span3 sumgroup">
						<h2>My Style of Realty</h2>
						<?php query_posts('category_name=my-style-of-realty&posts_per_page=3'); ?>
		                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content', 'summary' ); ?>
						<?php endwhile; // end of the loop. ?> 
					</div>
					<!-- <div class="buying-a-home span4 sumgroup">
						<h2>Buying a Home</h2>

						<?php query_posts('category_name=buying-a-home&posts_per_page=3'); ?>
		                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content', 'summary' ); ?>
						<?php endwhile; // end of the loop. ?> 
					</div>
					<div class="selling-a-home span4 sumgroup">
						<h2>Selling a Home</h2>
						<?php query_posts('category_name=selling-a-home&posts_per_page=3'); ?>
		                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content', 'summary' ); ?>
						<?php endwhile; // end of the loop. ?> 
					</div> -->
				</div>
				<!-- <div class="home-summary row-fluid">
					<div class="choosing-a-neighborhood span4 sumgroup">
						<h2>Choosing a Neighborhood</h2>
						<?php query_posts('category_name=choosing-a-neighborhood&posts_per_page=3'); ?>
		                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content', 'summary' ); ?>
						<?php endwhile; // end of the loop. ?> 
					</div>
					<div class="listings span4 sumgroup">
						<h2>Listings</h2>
						<?php query_posts('category_name=listings&posts_per_page=3'); ?>
		                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content', 'summary' ); ?>
						<?php endwhile; // end of the loop. ?> 
					</div>
					<div class="the-housing-market-in-coral-springs span4 sumgroup">
						<h2>The Housing Market in Coral Springs</h2>
						<?php query_posts('category_name=the-housing-market-in-coral-springs&posts_per_page=3'); ?>
		                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content', 'summary' ); ?>
						<?php endwhile; // end of the loop. ?> 
					</div>
				</div> -->
				

			</div><!-- #content .site-content -->
			<div id="sidebar" class="sidebar-content span3" role="sidebar">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- #primary .content-area -->


<?php get_footer(); ?>