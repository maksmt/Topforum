<?php 
/*
Template Name: Template for "Sponsors" 
Template Post Type: post, sponsors
*/
?>

<?php
get_header();
?>
<section class="detail _container">
    <h2 class=" section__title" style="color: <?php the_field('title_page_colors'); ?>">
        <?php the_field('name_of_sponsor')?></h2>

    <div class="detail__text text1">
        <?php the_field('text_under_title_page') ?>
    </div>
    <div class="detail__img-box">
        <img src="<?php the_field('logo_of_sponsor') ?>" alt="" class="detail__img">
    </div>
    <div class="detail__text text2">
        <?php the_field('text_under_photo_exhibitor') ?>
    </div>
    <div class="detail__bottom-img">
        <img src="<?php the_field('event_logo_1') ?>" alt="" class="bottom-img">
        <img src="<?php the_field('event_logo_2') ?>" alt="" class="bottom-img">

    </div>
    <div class="detail__text text3">
        <?php the_field('text_under_logo_event') ?>

    </div>
</section>
<?php
get_footer();