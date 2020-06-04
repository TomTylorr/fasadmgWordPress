<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Мебельные фасады МДФ эмаль">
        <meta name="keywords" content="мебельные, фасады, мдф, фрезеровки, витрины, стёкла, элементы">
        <title>Мебельные фасады МДФ эмаль</title>
        <!--<link rel="stylesheet" href="assets/css/main.css">-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <?php wp_body_open(); ?>
        <div class="bg">
            <header class="main-header">

                <div class="main-header-top">
                    <h1 class="site-description">Мебельные фасады МДФ эмаль</h1>
                    <div class="main-header__button"><button class="main-header__button__link" type="button">Заказать звонок</button></div>
                </div>

                <div class="main-header-top2">

                    <a class="logo" href="<?php echo home_url();?>">
                        <img class="logo__image" src="<?php echo get_template_directory_uri(); ?> /assets/img/logo.svg" width="169" height="84" alt="Логотип ООО 'Монте-групп'">
                    </a>

                    <div class="header-info">
                        <p class="header-info__working-hours"><span class="bg--yellow">Время работы: 9.00 - 18.00</span></p>
                        <p class="header-info__number">+375 (44) 794-71-24</p>
                    </div>


                    <ul class="header-user-block">
                        <li>
                            <a class="header-user-block__link" href="">
                                <span class="icon-login"></span>
                                Войти
                            </a>
                        </li>

                        <li>
                            <a class="header-user-block__link" href="">
                                <span class="icon-logout"></span>
                                Выйти
                            </a>
                        </li>

                        <li>
                            <a class="header-user-block__link" href="">
                                <span class="icon-basket"></span>
                                Корзина
                            </a>
                        </li>
                    </ul>

                </div>

                    <?php
                    wp_nav_menu([
                        'theme_location' => 'main_header_menu',
                        'menu' => '',
                        'container' => 'nav',
                        'container_class' => 'main-header-middle',
                        'container_id' => '',
                        'menu_class' => 'nav-site',
                        'walker' => new Main_Header_Menu(),
                    ]);
                    ?>


                <div class="main-header-bottom">
                    <input class="search" type="text" placeholder="Я ищу ..."> 
                    <a class="search-icon" href="#">
                        <h3 class="visually-hidden">Искать</h3>
                    </a>
                </div>

            </header>
        </div>
