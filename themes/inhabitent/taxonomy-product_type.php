<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="caption-container">
            <div class="do-container" >
                <h1>DO</h1>
            </div>
            <div class="paragraph">
                <p>
                Get back to nature with all the tools and toys you need to enjoy the great outdoors.
                </p>
            </div>
        </div>
            

        <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
        </header><!-- .page-header -->

        <div class="grid-container">
            <!-- grid container -->

                <?php /* Start the Loop */ ?>
            
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); 
                       
                ?>
            
                <article> <!-- add the same class as in archive product -->
                 <a href="">
                    <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } 
                    ?>
                    
                    <p>
                        <span><?php the_title(); ?></span> 
                    <span> <?php the_field('price'); ?></span>
                    </p>
                </a>
                </article>
           
                <?php  
                    } // end while
                } // end if ?> 
            
            </div> <!-- grid container end -->

            



        <?php the_posts_navigation(); ?> <?php else : ?> <?php /* CHANGE 'post' IN THIS LINE TO 'product' to POPULATE THE PRODUCTS ON THE HOME PAGE */
   			// $args = array( 'post_type' => 'product','numberposts'=>"2", 'order' => 'ASC' );
  			//  $product_posts = get_posts( $args ); // returns an array of posts
?> <?php get_template_part( 'template-parts/content', 'none' ); ?> <?php endif; ?>
    </main> <!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>