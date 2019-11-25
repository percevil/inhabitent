<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
 
	
	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			
			<div class="grid-container"> <!-- grid container -->

			<?php /* Start the Loop */ ?>
			<?php
				$args = array(  
				'post_type' => 'product',
				'posts_per_page' => 16    
				);
				$loop = new WP_Query( $args ); 
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>
			
			</div><!-- grid container end -->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php /* CHANGE 'post' IN THIS LINE TO 'product' to POPULATE THE PRODUCTS ON THE HOME PAGE */
   			// $args = array( 'post_type' => 'product','numberposts'=>"2", 'order' => 'ASC' );
  			//  $product_posts = get_posts( $args ); // returns an array of posts
?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?> 
 
		
		</main><!-- #main -->
	</div><!-- #primary -->

s
<?php get_footer(); ?>
