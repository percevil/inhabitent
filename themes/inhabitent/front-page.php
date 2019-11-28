<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="background-container">
    <img class="hero-image" src="<?php echo get_template_directory_uri() . '/images/home-hero.jpg' ?>" alt="hero-image">
</div>


<div class="round-tent-logo">
    <img class="logo" src="wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg" alt="Inhabitent full logo">
</div>
</div>

<section class="product-info container">
    <div class="shop-stuff">
        <section class="h2-container">
            <h2>SHOP STUFF</h2>
        </section>
    </div>

    <?php
    $terms = get_terms(array(
        'taxonomy' => 'product_type',
        'hide_empty' => 0,
    ));
    if (!empty($terms) && !is_wp_error($terms)) :
        ?>
        <div class="product-type-blocks product-container">
            <?php foreach ($terms as $term) : ?>
                <div class="product-type-block-wrapper product-block">
                    <div class="i-image">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                    </div>
                    <p><?php echo $term->description; ?></p>
                    <p class="do-buttons"><a href="<?php echo get_term_link($term); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>


<!--**** START OF FIRST LOOP FOR JOURNAL PICS AND ENTRIES ****-->


<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('template-parts/content',); ?>

<?php endwhile; // End of the loop. 
?>

</main><!-- #main -->


<section class="media-container">

    <section class="h2-container">
        <h2>Inhabitent Journal</h2>
    </section>

    <!-- second loop -->
    <div class="journal-container">

        <?php
        $args = array('post_type' => 'post', 'numberposts' => "3", 'order' => 'ASC');
        $product_posts = get_posts($args); // returns an array of posts
        ?>

        <?php foreach ($product_posts as $post) : setup_postdata($post); ?>
            <?php /* Content from your array of post results goes here */ ?>
            <article class="journal-entry">
                <div class="post-picture-container">
                    <?php the_post_thumbnail(); ?>
                </div>

                <div class="post-wrapper">
                    <div class="journal-meta">
                        <!-- CREATES BUTTON FOR ARTICLE -->
                        <?php the_title(); ?>
                        <a href="<?php echo get_the_permalink(); ?>">Read entry</a>
                    </div>
                </div>
            </article>

        <?php endforeach;
        wp_reset_postdata(); ?>

    </div>
</section>




<section class="adventure-container">
    <section class="h2-container">
        <h2>Latest Adventures</h2>
    </section>
</section>

<div class="grd-container">
    <div class="canoe"><img src="<?php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg' ?>" alt=""></div>

    <div class="beach"><img src="<?php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg' ?>" alt=""></div>

    <div class="mountain"><img src="<?php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg' ?>" alt=""></div>

    <div class="sky"><img src="<?php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg' ?>" alt=""></div>

    <div class="more-button">
        <a href="">MORE ADVENTURES</a>
    </div>

</div>










<?php get_footer(); ?>