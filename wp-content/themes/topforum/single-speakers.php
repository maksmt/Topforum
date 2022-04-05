<?php 
/*
    Template Name: Template for "Speakers" 
    Template Post Type: post, speakers
    */
    ?>

<?php
get_header();
?>

<section class="detail-speaker _container">
    <h2 class=" section__title"><?php the_field('name_of_speaker') ?></h2>

    <div class="detail-speaker__text text1">
        <?php the_field('text_under_title_page') ?>
    </div>
    <div class="detail-speaker__img-box">

        <img src="<?php the_field('big_photo_of_speaker') ?>" alt="" class="detail-speaker__img">
    </div>
    <div class="detail-speaker__text text2">
        <?php the_field('text_under_photo_speaker') ?>
    </div>
    <div class="detail-speaker__bottom-img">
        <img src="<?php the_field('event_logo_1') ?>" alt="" class="bottom-img">
        <img src="<?php the_field('event_logo_2') ?>" alt="" class="bottom-img">

    </div>
    <div class="detail-speaker__text text3">
        <?php the_field('text_under_logo_event') ?>
    </div>
</section>

<?php
get_footer();