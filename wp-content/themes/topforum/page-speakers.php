<?php
/*
Template Name: Speakers
 */
?>


<?php get_header();?>

<section class="speakers _container">
    <h2 class=" section__title" style="color: <?php the_field('title_page_colors'); ?>">
        <?php the_field('speakers_page_title') ?></h2>
    <div class="speakers__desc">
        <?php the_field('speakers_page_description') ?>
    </div>
    <div class="speakers__conference">
        <h3 class="speakers__conference-title">please select a conference</h3>
        <?php echo do_shortcode('[contact-form-7 id="145" title="Conference type"]')?>
    </div>
    <div class="speakers__people">
        <?php  
        $my_posts = get_posts( array(
        'numberposts' => -1,
        'category_name' => 'speakers',
        'orderby'     => 'date',
        'order'       => 'ASC',                      
        'post_type'   => 'post',
        'suppress_filters' => true, 
    ) );

        foreach( $my_posts as $post ){
            setup_postdata( $post );
        ?>
        <div class="speakers__people-item">
            <div class="item__logo">
                <img src="<?php the_field('photo_of_speaker') ?>" alt="speaker" class="speakers__logo-img">
            </div>
            <div class="item__title"><?php the_field('name_of_speaker') ?></div>
            <div class="item__desc"><?php the_field('about_speaker') ?></div>
            <div class="item__button"><a href="<?php the_permalink() ?>" class="button__link">Learn more</a></div>
        </div>
        <?php
          
        }
        wp_reset_postdata(); 
                    
        ?>
    </div>
</section>

<?php get_footer();?>