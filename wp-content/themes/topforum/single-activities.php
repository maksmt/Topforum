<?php 
/*
Template Name: Template for "Activities" 
Template Post Type: post, activities
*/
?>

<?php
get_header();
?>
<section class="detail _container">
    <h2 class=" section__title"><?php the_field('title_of_event') ?></h2>
    <div class="detail__img-box">
        <img src="<?php the_field('photo_of_event') ?>" alt="Event" class="detail__img">
    </div>

    <div class="detail__text text1">
        <?php the_field('about_activities') ?>
    </div>

</section>
<?php
get_footer();