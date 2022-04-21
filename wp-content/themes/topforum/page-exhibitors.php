<?php
/*
Template Name: Exhibitors
 */
?>


<?php get_header();?>

<section class="exhibitors _container">
    <h2 class=" section__title" style="color: <?php the_field('title_page_colors'); ?>">
        <?php the_field('exhibitors_page_title') ?></h2>
    <div class="exhibitors__desc">
        <?php the_field('exhibitors_page_description') ?>
    </div>
    <div class="exhibitors__conference">
        <h3 class="exhibitors__conference-title">please select a conference</h3>
        <?php echo do_shortcode('[contact-form-7 id="145" title="Conference type"]')?>

    </div>
    <div class="exhibitors__brands">
        <?php  
        $my_posts = get_posts( array(
        'numberposts' => -1,
        'category_name' => 'exhibitors',
        'orderby'     => 'date',
        'order'       => 'ASC',                      
        'post_type'   => 'post',
        'suppress_filters' => true, 
    ) );

        foreach( $my_posts as $post ){
            setup_postdata( $post );
        ?>
        <div class="exhibitors__brands-item">
            <div class="item__logo">
                <img src="<?php the_field('logo_of_exhibitors') ?>" alt="Exhibitors" class="exhibitors__logo-img">
            </div>
            <div class="item__title"><?php the_field('name_of_exhibitors')?></div>
            <div class="item__desc">
                <?php the_field('about_exhibitors') ?>
            </div>
            <div class="item__button">
                <a href="<?php the_permalink() ?>" class="button__link">Learn more</a>
            </div>
        </div>
        <?php
          
        }
        wp_reset_postdata(); 
                    
        ?>
    </div>
</section>

<?php get_footer();?>