<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->


	<footer id="colophon" class="site-footer" 
			role="contentinfo">


			<img class="wood-bkgd" src="<?php echo get_stylesheet_directory_uri();?>/images/dark-wood.png"/>

				
			
			<div class="info-block">

				<div class="footer-block">
					<div class="contact">
						<h3>CONTACT INFO</h3>
						<a href="info@inhabitent.com"></a>
						<p>778-456-7891</p>
					</div>
				</div>

				<div class="footer-block">
					<div class="bus-hours">
						<h3>BUSINESS HOURS</h3>
						<p>Monday-Friday: 9am to 5pm</p>
						<p>Saturday: 10am to 2pm</p>
						<p>Sunday: Closed</p>
					</div>
				</div>

				</div class="footer-block">
					<div class="tree">

					<img src="https://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-text.svg" alt="Inhabitent logo">
					<!-- <a href=""><img class="tent-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/ihabitent-logo-text-dark.svg"/></a>  -->
			
				</div>
				
				</div>

			




			
					<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- #page -->
		
		<?php wp_footer(); ?>
		</footer>
	</body>
</html>
