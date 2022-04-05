<?php
/*
Template Name: Contacts
*/
?>

<?php get_header();?>

<section class="contacts">
    <div class="contacts__container  _container">
        <div class="contacts__address">
            <div class="contacts__address-map acf-map">

            </div>
            <div class="address__contact">
                <div class="address__contact-item">
                    <div class="item__title"><?php the_field('support_service_1') ?></div>
                    <div class="item__name"><?php the_field('supports_name_1') ?></div>
                    <div class="item__email">E: <a href="mailto:<?php the_field('supports_email_1') ?>"
                            class="item__email-email"><?php the_field('supports_email_1') ?></a>
                    </div>
                    <a href="tel:<?php the_field('supports_number_1')?>" class=" item__number">P:
                        +<?php the_field('supports_number_1') ?>
                    </a>

                </div>
                <div class="address__contact-item">
                    <div class="item__title"><?php the_field('support_service_2') ?></div>
                    <div class="item__name"><?php the_field('supports_name_2') ?></div>
                    <div class="item__email">E: <a href="mailto:<?php the_field('supports_email_2') ?>"
                            class="item__email-email"><?php the_field('supports_email_2') ?></a>
                    </div>
                    <a href="tel:<?php the_field('supports_number_2')?>" class=" item__number">P:
                        +<?php the_field('supports_number_2') ?>
                    </a>
                </div>

                <div class="address__contact-item">
                    <div class="item__title"><?php the_field('support_service_3') ?></div>
                    <div class="item__name"><?php the_field('supports_name_3') ?></div>
                    <div class="item__email">E: <a href="mailto:<?php the_field('supports_email_3') ?>"
                            class="item__email-email"><?php the_field('supports_email_3') ?></a>
                    </div>
                    <a href="tel:<?php the_field('supports_number_3')?>" class=" item__number">P:
                        +<?php the_field('supports_number_3') ?>
                    </a>
                </div>
                <div class="address__contact-item">
                    <div class="item__title"><?php the_field('support_service_4') ?></div>
                    <div class="item__name"><?php the_field('supports_name_4') ?></div>
                    <a href="tel:<?php the_field('supports_number_4')?>" class=" item__number">P:
                        +<?php the_field('supports_number_4') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="contacts__feedback">
        <h2 class="feedback__title">FEEDBACK</h2>
        <div class="contacts__feedback-container _container">
            <div class="contacts__feedback-items">
                <div class="feedback__form">
                    <?php  echo do_shortcode('[contact-form-7 id="420" title="Contact form"]') ?>
                </div>
                <div class="contacts__feedback-faq">
                    <h5 class="faq__title">You can also ask questions by phone of a hot line:</h5>
                    <div class="faq__number">+<?php the_field('number_in_feedback') ?></div>
                    <div class="faq__answer">The answers to many questions already in our <a
                            href="<?php the_field('faq_link') ?>" class="faq__link">FAQ</a>
                    </div>
                    <div class="faq__text">All suggestions and comments are considered mandatory!</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>