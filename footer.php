<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One_Page
 */

?>

</div><!-- #content -->
<footer class="footer" role="contentinfo">
	<div class="footer-logo">
		<img src="<?php $titan=TitanFramework::getInstance( 'jg-one-page'); echo esc_url(current(wp_get_attachment_image_src($titan->getOption( 'jg_footer_logo' ),'full'))); ?>" alt="Footer Logo">
	</div>
	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '') ); ?>
	<div class="footer-social-icon">
		<a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
		<a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
		<a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	</div>
	<!-- <hr id="footer-separator" /> -->
	<div class="site-info">
		<span><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jg-one-page' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'jg-one-page' ), 'WordPress' ); ?></a></span>
		<span class="sep"> | </span>
		<span>Developed by <a href="http://jacobgoh.com" rel="designer">Jacob Goh</a></span>
	</div>
</footer>	
</div><!-- #page -->





<?php wp_footer(); ?>

</body>
</html>
