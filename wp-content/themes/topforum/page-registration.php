<?php
/*
Template Name: Registration
*/
?>

<?php get_header();?>

<section class="registration _container">
    <h2 class="section__title">2 EASY STEPS TO REGISTER</h2>
    <div class="registration__steps">
        <div class="registration__steps-item">
            <div class="item__text">
                <?php the_field('first_step') ?>

            </div>
        </div>
        <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/arrow.png" alt="" class="item__arrow">
        <div class="registration__steps-item">
            <div class="item__text">
                <?php the_field('second_step') ?>

            </div>
        </div>
        <div class="registration__form">
            <?php echo do_shortcode('[contact-form-7 id="446" title="Registration form"]') ?>

        </div>
        </form>
    </div>

</section>

<?php get_footer();?>