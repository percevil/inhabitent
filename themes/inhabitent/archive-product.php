<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
$query=get_terms('taxonomy=product_type');
// var_dump($query);
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        
        <div class="shop-stuff">
            <h1>SHOP STUFF</h1>
        </div>
        <div class="desw-links">
            <ul class="links">
                <?php
                $tmp='';
                foreach($query as $x){

                $tmp.='<li><a href="'. get_term_link($x) .'">'.$x->slug.'</a></li>';   
                }
                echo $tmp;
                ?>
                
            </ul>
        </div>

        <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
        </header><!-- .page-header -->

        
            <!-- grid container -->
        <div class="grid-container">
            <?php /* Start the Loop */ ?>
            
                <?php
                    $args = array(  
                    'post_type' => 'product',
                    'posts_per_page' => 16   
                    );
                    $loop = new WP_Query( $args ); 
                ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
                <article>
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
           
            <?php endwhile; ?> 
        </div>    
            </div> <!-- grid container end -->

        <?php the_posts_navigation(); ?> <?php else : ?> <?php /* CHANGE 'post' IN THIS LINE TO 'product' to POPULATE THE PRODUCTS ON THE HOME PAGE */
   			// $args = array( 'post_type' => 'product','numberposts'=>"2", 'order' => 'ASC' );
  			//  $product_posts = get_posts( $args ); // returns an array of posts
?> <?php get_template_part( 'template-parts/content', 'none' ); ?> <?php endif; ?>
    </main> <!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

