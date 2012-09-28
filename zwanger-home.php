<?php
/**
Template Name: zwanger-home
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
						<h3>Builder. Contractor. Real Estate Agent.</h3>
						<div class="quick-links">
							<p>
								<a href="tel:+19542345917"><span class="icon-phone icon"></span></a>
								<a  href="mailto:Paul.Zwanger@realliving.com?Subject=Web%20Contact"><span class="icon-envelope icon"></span></a>
								<a href="https://twitter.com/pzwanger" target="_blank"><span  class="icon-twitter icon"></span></a>
								<a href="#" class="btn btn-brown">Contact Me</a>
							</p>
						</div>
					</div>
					
				</hgroup>

				<div class="home-summary row-fluid">
					<div class="my-style-of-realty span4 sumgroup">
						<h2>My Style of Realty</h2>
						<?php query_posts('category_name=my-style-of-realty&posts_per_page=3'); ?>
		                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'content', 'summary' ); ?>
						<?php endwhile; // end of the loop. ?> 
					</div>
					<div class="buying-a-home span4 sumgroup">
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
					</div>
				</div>
				<div class="home-summary row-fluid">
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
				</div>
				

			</div><!-- #content .site-content -->

		</div><!-- #primary .content-area -->


<?php get_footer(); ?>