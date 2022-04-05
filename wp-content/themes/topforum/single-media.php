<?php 
/*
Template Name: Template for "Media" 
Template Post Type: post, media
*/
?>

<?php
get_header();
?>
<section class="detail _container">
    <h2 class=" section__title"><?php the_field('name_of_article') ?></h2>
    <div class="detail__img-box">
        <img src="<?php the_field('logo_of_article') ?>" alt="Event" class="detail__img">
    </div>

    <div class="detail__text text1">
        <?php the_field('about_article_text') ?>
    </div>

</section>
<?php
get_footer();