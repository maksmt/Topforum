<?php
/*
Template Name: Media
 */
?>


<?php get_header();?>


<section class="media _container">
    <h2 class=" section__title" style="color: <?php the_field('title_page_colors'); ?>">
        <?php the_field('media_page_title') ?></h2>
    <div class="media__desc">
        <?php the_field('media_page_description') ?>
    </div>
    <div class="media__articles">
        <?php  
        $my_posts = get_posts( array(
        'posts_per_page' => 6,
        'category_name' => 'media',
        'orderby'     => 'date',
        'order'       => 'ASC',                      
        'post_type'   => 'post',
        'suppress_filters' => true, 
    ) );

        foreach( $my_posts as $post ){
            setup_postdata( $post );
        ?>
        <div class="media__articles-item">
            <div class="item__logo">
                <img src="<?php the_field('logo_of_article') ?>" alt="" class="media__logo-img">
            </div>
            <div><a href="<?php the_permalink() ?>" class="item__title"><?php the_field('name_of_article') ?></a> </div>
            <div class="item__desc">
                <?php the_field('about_article') ?>
            </div>
        </div>
        <?php
        }
        wp_reset_postdata(); 
                    
        ?>
    </div>
    <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post, page, attachment, product, any", post_format="standard", images_loaded="true",placeholder="true", button_label="More articles"]'); ?>
</section>

<?php get_footer();?>