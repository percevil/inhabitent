<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

	
	
<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

	

		<div class="bkgd-image background-image">
			<img src="wp-content/themes/inhabitent/images/home-hero.jpg"  alt="home-image">
	

			<div class="round-tent-logo">
			<img class="logo" src="wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg"  alt="Inhabitent full logo">
			</div>

		</div>
		


					<!-- first loop -->
					<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', ); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->


	<!-- second loop -->
	<?php /* CHANGE 'post' IN THIS LINE TO 'product' to POPULATE THE PRODUCTS ON THE HOME PAGE */
	$args = array( 'post_type' => 'post','numberposts'=>"3", 'order' => 'ASC' );
	$product_posts = get_posts( $args ); // returns an array of posts?>

	<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
	<?php /* Content from your array of post results goes here */ ?>
	<?php the_title(); 
	?>
	<?php endforeach; wp_reset_postdata(); ?>
</div>	
</div>	
		<div class="shop-stuff">
		<h2>SHOP STUFF</h2>
		</div>
		
		<section class="product-container">
			

			<div class="product-block">

				<section class="i-image">
					<img  src="wp-content/themes/inhabitent/images/product-type-icons/do.svg" alt="Do">
				</section>

				<p class="blurb">Get back to nature with all the tools and toys you need to enjoy the great outdoors.	
				</p>
				<p class="do-stuff">
					<a href="" >Do Stuff</a>
				</p>
			</div>

			<div class="product-block">
				<section class="i-image">
					<img class="i-image" src="wp-content/themes/inhabitent/images/product-type-icons/eat.svg" alt="Eat">
				</section>
					</p>
					<p class="blurb">Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
					<p>
					<a href="" class="">Eat Stuff</a>
					</p>
			</div>

			<div class="product-block">
				<section class="i-image">
					<img class="i-image" src="wp-content/themes/inhabitent/images/product-type-icons/sleep.svg" alt="Sleep">
				</section>
				<p class="blurb">Get a good night's rest in the wild in a home away from home that travels well.
				</p>
				<p>
					<a href="" class="">Sleep Stuff</a>
				</p>
			</div>

			<div class="product-block">
				<section class="i-image">
				<img class="i-image" src="wp-content/themes/inhabitent/images/product-type-icons/wear.svg" alt="Wear">
				</section>
				<p class="blurb">From flannel shirts to toques, look the part while roughing it in the great outdoors.
				</p>
				
				<p>
					<a href="" class="">Wear Stuff</a>
				</p>
			</div>

			

			<div class="post-block"></div>
		</section>
		<h2>Inhabitent Journal</h2>
		<h2>Latest Adventures</h2>

		<div class="journal-entries">


<?php get_footer(); ?>
