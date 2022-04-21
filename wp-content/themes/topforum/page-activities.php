<?php
/* Template Name: Activities */
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
        'category_name' => 'activities',
        'orderby'     => 'date',
        'order'       => 'ASC',                      
        'post_type'   => 'post',
        'suppress_filters' => true, 
    ) );

        foreach( $my_posts as $post ){
            setup_postdata( $post );
        ?>
        <div class="activities__events-item">
            <div class="item__img">
                <img src="<?php the_field('photo_of_event') ?>" alt="activities" class="events__img">
                <img src="<?php the_field('sold_out_image') ?>" class="events__sold">
            </div>
            <div class="item__info">
                <div class="item__title"><?php the_field('title_of_event') ?></div>
                <div class="item__date"><?php the_field('date_and_place') ?></div>
                <div class="item__desc">
                    <?php the_field('description_of_event') ?>
                </div>
                <div class="item__button">
                    <a href="<?php the_permalink() ?>" class="button__link">Learn more</a>
                </div>
            </div>
        </div>
        <?php
          
        }
        wp_reset_postdata(); 
                    
        ?>
    </div>
</section>

<?php get_footer();?>