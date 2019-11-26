<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

	<footer  >

		<div id="info-container">

			<img class="wood-bkgd" src="
			<?php echo get_stylesheet_directory_uri();?>/images/dark-wood.png"/>
			<div id="info block">
				<div id="footer-block" class="contact">
					<h3>CONTACT INFO</h3>
					<i class="fas fa-envelope"> </i>
					<a href="">info@inhabitent.com</a><break>
					<p>
					<i id="phone" class="fas fa-phone-alt">778-456-7891 </i>
					</p>
					<p id="social">
					<i class="fab fa-facebook-square"></i>
					<i class="fab fa-twitter-square"></i>
					<i class="fab fa-google-plus-square"></i>
					</p>

				</div>

				<div  id="footer-block" class="bus-hours">
					<h3>BUSINESS HOURS</h3>
					<p>Monday-Friday: 9am to 5pm</p>
					<p>Saturday: 10am to 2pm</p>
					<p>Sunday: Closed</p>
				</div>

				<img id="footer-block" class="tree" src="https://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-text.svg" alt="Inhabitent logo">
				<a href=""><img class="tent-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/ihabitent-logo-text-dark.svg"/></a> 	
			</div>

			<div class="copyright">Copyright © 2019 Inhabitent</div>
		

		</div>
						
	</footer>			
		
		
		<?php wp_footer(); ?>
	
</body>
</html>
