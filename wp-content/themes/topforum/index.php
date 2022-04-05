<?php get_header() ?>
<main class="page">

    <section class="banner"
        style="background: url(<?php the_field('banner_img')?>) no-repeat; background-position: center;">
        <div class="banner__container _container">
            <div class="banner__slider">
                <?php  
                            $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name' => 'banner_slider',
                            'orderby'     => 'date',
                            'order'       => 'ASC',                      
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                ?>

                <div class=" slider__item">
                    <div class="row">
                        <div class="col">
                            <div class="item__date">
                                <div class="date__days">
                                    <?php the_field('day')?>
                                </div>
                                <div class="date__month">
                                    <?php the_field('month')?>
                                </div>
                                <div class="date__year">
                                    <?php the_field('year')?>
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <h2 class="item__title"> <?php the_field('title')?> </h2>
                            <div class="item__text">
                                <?php the_field('description')?>
                            </div>
                            <div class="item__place"> <?php the_field('place')?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
          
                }
                wp_reset_postdata(); // сброс
                            
                ?>
            </div>

        </div>
    </section>
    <section class="describe _container">
        <div class="describe__text">
            <?php the_field('about_text') ?>
        </div>
        <div class="describe__content">
            <div class="describe__content-container _container">
                <div class=" row">
                    <div class=" content__item ">
                        <img src=" <?php the_field('image_1') ?>" alt="Content" class="item__img">
                        <div class="item__title"><?php the_field('name_1') ?></div>
                        <div class="item__text">
                            <?php the_field('text_1') ?></div>
                        <div class="item__button">
                            <a href="" class="button__link">Learn more</a>
                        </div>
                        <div class="more__text"><?php the_field('event_1') ?></div>
                    </div>
                    <div class="content__item ">
                        <img src="<?php the_field('image_1')?>" alt="Content" class="item__img">
                        <div class="item__title"><?php the_field('name_2') ?></div>
                        <div class=" item__text">
                            <?php the_field('text_2') ?>
                        </div>
                        <div class="item__button">
                            <a href="<?php the_permalink() ?>" class="button__link">Learn more</a>
                        </div>
                        <div class="more__text"><?php the_field('event_2') ?></div>
                    </div>
                    <div class="content__item ">
                        <img src="<?php the_field('image_3')?>" alt=" Content" class="item__img">
                        <div class="item__title"><?php the_field('name_3') ?></div>
                        <div class="item__text"><?php the_field('text_3') ?>
                        </div>
                        <div class="item__button">
                            <a href="" class="button__link">Learn more</a>
                        </div>
                        <div class="more__text"><?php the_field('event_3') ?></div>
                    </div>
                </div>
                <div class="content__buttons">
                    <div class="content__buttons-item">
                        <a href="http://topforum/registration" class="button__link ">REGISTER NOW </a>
                    </div>
                    <div class="content__buttons-item subscribe__button">
                        <a href="" class="button__link open-popup">SUBSCRIBE</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="reviews">
        <div class="reviews__container _container">
            <h2 class="section__title">CUSTOMER REVIEWS</h2>
            <div class="reviews__slider ">
                <?php  
                            $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'reviews',
                            'orderby'     => 'date',
                            'order'       => 'ASC',                      
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                            ?>
                <div class="slider__item">
                    <img src="<?php
                    if(has_post_thumbnail()){
                        the_post_thumbnail_url();     
                    }else{
                        echo get_template_directory_uri() . '/assets/img/no-found.webp'; 
                    }

                    
                   ?>" alt="review photo" class="item__img">
                    <div class="item__review col"
                        style="background:url(<?php echo bloginfo('template_url');?>/assets/img/rew_bg.webp) no-repeat">
                        <div class="review__name"><?php the_field('review_name') ?></div>
                        <div class="review__date"><?php the_field('review_date') ?></div>
                        <div class="review__text"><?php the_field('review_text') ?></div>
                    </div>
                </div>
                <?php
          
            }
        wp_reset_postdata(); // сброс
                    
        ?>


            </div>
        </div>
    </section>
    <section class="video">
        <div class="video__container _container">
            <h2 class="section__title">Promo video</h2>
            <div class="video__player">
                <video controls="controlss" id="video-player" src="<?php the_field('video') ?>" width="682" height="396"
                    type="video/mp4" codecs="avc1.42E01E, mp4a.40.2"
                    poster="<?php echo bloginfo('template_url');?>/assets/img/poster-bideo.png">
                </video>

            </div>
        </div>
    </section>
    <section class="clients">
        <div class="clients__container _container">
            <h2 class="section__title">OUR CLIENTS</h2>
            <div class="clients__slider">
                <?php  
                            $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name' => 'clients',
                            'orderby'     => 'date',
                            'order'       => 'ASC',                      
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                ?>
                <div class=" slider__item">
                    <img src="<?php the_field('clients_logo')?>" alt="client" class="item__img">
                </div>
                <?php
                
                    wp_reset_postdata(); 
                        }
                    ?>
            </div>

        </div>
    </section>
</main>

<?php get_footer()?>