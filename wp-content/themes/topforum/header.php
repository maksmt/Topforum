<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo('name'); echo " | "; the_title(); ?></title>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container _container">
                <div class="icon-menu">
                    <span></span><span></span><span></span>
                </div>
                <nav class="header__menu menu">

                    <?php
                            wp_nav_menu( [
                            'menu'            => 'Main',
                            'container'       => false,
                            'menu_class'      => 'menu__list',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
                            'depth'           => 2,
                            ] );
                        ?>
                </nav>
                <div class="header__button">
                    <a href="<?php the_field('link_club') ?>" class="header__action">TOP FORUM CLUB </a>
                </div>
            </div>
            <div class="header__register">
                <div class="register__container  _container">
                    <div class="header__logo">
                        <?php the_custom_logo() ?>
                    </div>
                    <div class="register__links">
                        <div class="register__links-item">
                            <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/reg_ico1.png"
                                alt="UPCOMING EVENTS" class="item__ico">
                            <div class="item__text"> <a href="http://topforum/activities">UPCOMING EVENTS</a></div>
                        </div>
                        <div class="register__links-item">
                            <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/reg_ico2.png"
                                alt="UPCOMING EVENTS" class="item__ico">
                            <div class="item__text"><a href="topforum/contacts">CONTACTS</a></div>
                        </div>
                    </div>
                    <div class="register__button">
                        <a href="http://topforum/registration" class="register__action">REGISTER NOW </a>
                    </div>
                </div>
            </div>
        </header>