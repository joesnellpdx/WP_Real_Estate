<?php
/** 
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WP_Real_Estate
 * @since WP_Real_Estate 1.0
 */
?>
		</div><!-- container-fluid -->
	</div><!-- wrap -->
	
	<div class="footer-container">

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php do_action( 'wp_real_estate_credits' ); ?>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wp_real_estate' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wp_real_estate' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'wp_real_estate' ), 'wp_real_estate', '<a href="https://github.com/joesnellpdx/WP_Real_Estate" rel="designer">Joe Snell</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div><!--footer-container-->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>