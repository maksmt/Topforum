<div class="media__articles-item">
        <div class="item__logo">
                <img src="<?php the_field('logo_of_article') ?>" alt="" class="media__logo-img">
            </div>
            <div><a href="<?php the_permalink() ?>" class="item__title"><?php the_field('name_of_article') ?></a> </div>
            <div class="item__desc">
                <?php the_field('about_article') ?>
            </div>
        </div>
    </div>