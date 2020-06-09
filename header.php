<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Мебельные фасады МДФ эмаль">
        <meta name="keywords" content="мебельные, фасады, мдф, фрезеровки, витрины, стёкла, элементы">
        <title><?php bloginfo('description'); ?></title>
        <!--<link rel="stylesheet" href="assets/css/main.css">-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <?php wp_body_open(); ?>  
        <div class="bg">
            <header class="main-header">

                <div class="main-header-top">
                    <h1 class="site-description"><?php bloginfo('name'); ?></h1>
                    <div class="main-header__button"><button id="main-header__button__link" class="main-header__button__link" type="button">Заказать звонок</button></div>
                </div>

                <div class="main-header-top2">

                    <a class="logo" href="<?php echo home_url(); ?>">
                        <img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="169" height="84" alt="Логотип ООО 'Монте-групп'">
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
                            <!--                            <a class="header-user-block__link" href="">
                                                            <span class="icon-logout"></span>
                                                            Выйти
                                                        </a>-->
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
<!--                    <input class="search" type="text" placeholder="Я ищу ..."> 
                    <a class="search-icon" href="#">
                        <h3 class="visually-hidden">Искать</h3>
                    </a>-->
                    <?php get_search_form(); ?>
                </div>

            </header>
        </div>

        <div class="main-modal-bg" id="main-modal-bg">
            <section class="main-modal">
                <div class="main-modal__top">
                    <h2 class="main-modal__title">Заказ обратного звонка</h2>
                    <p class="main-modal__description">Пожалуйста, заполните краткую контактную информацию.</p>
                    <p class="main-modal__description">Наши сотрудники свяжутся с Вами.</p>
                </div>
                <div class="main-modal__content">
                    <form class="main-modal__form" action="action_page.php">
                        <label for="main-name"><p class="main-modal__name">Имя:<span class="modal-order__star">*</span></p><input class="main-modal__input" type="text" id="main-name" name="main-name" ></label> 
                        <label for="main-phone"><p class="main-modal__phone">Телефон:<span class="modal-order__star">*</span></p><input class="main-modal__input" type="text" class="input-text" id="main-phone" name="callback_tel" value="" ></label>                  
                        <input class="main-modal__button" type="submit" value="Заказать звонок" name="send">
                    </form>
                </div>
                <button class="main-modal__close" type="button" data-action="hide-banner" data-type="panel" title="Закрыть модальное окно"></button>
            </section>
        </div>

        <script>
            var mainModal = document.getElementById('main-modal-bg');

    // Get the button that opens the modal
            var mainBtn = document.getElementById("main-header__button__link");

    // Get the <span> element that closes the modal
            var mainClose = document.getElementsByClassName("main-modal__close")[0];

    // When the user clicks the button, open the modal 
            mainBtn.onclick = function () {
                mainModal.style.display = "block";
            }

    // When the user clicks on <span> (x), close the modal
            mainClose.onclick = function () {
                mainModal.style.display = "none";
            }

    // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == mainModal) {
                    mainModal.style.display = "none";
                }
            }
        </script>


