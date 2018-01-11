<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

</div><!-- #page -->
<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div id="company-info">&copy; <?php echo date('Y')?> Tennenbaum Capital Partners, LLC  <span id="address">//  2951 28th Street, Suite 1000 Santa Monica, CA 90405  // </span> 310.566.1000</div>
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'https://nxtcreates.com/', 'NXT' ) ); ?>" title="<?php esc_attr_e( 'A child theme', 'twentytwelve' ); ?>"><?php printf( __( 'Site: %s', 'twentytwelve' ), 'NXT' ); ?></a>

		
		</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>