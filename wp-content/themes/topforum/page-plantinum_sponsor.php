<?php
/* Template Name: Platinum sponsor */
?>


<?php get_header();?>


<section class="activities _container">
    <h2 class="section__title" style="color: <?php the_field('title_page_colors'); ?>">
        <?php the_field('activities_page_title') ?></h2>
    <div class="activities__text">
        <?php the_field('activities_page_description') ?>
    </div>
    <div class="activities__events">
        <?php  
        $my_posts = get_posts( array(
        'numberposts' => -1,
        'category_name' => 'platinum_sponsor',
        'orderby'     => 'date',
        'order'       => 'ASC',                      
        'post_type'   => 'post',
        'suppress_filters' => true, 
    ) );

        foreach( $my_posts as $post ){
            setup_postdata( $post );
        ?>
        <div class="sponsors__brands-item">
            <div class="item__status">
                <?php  the_category() ?></div>
            <div class="item__logo">
                <img src="<?php the_field('logo_of_sponsor') ?>" alt="" class="sponsors__logo-img">
            </div>
            <div class="item__title"><?php the_field('name_of_sponsor') ?></div>
            <div class="item__desc">
                <?php  the_field('about_sponsor') ?>
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