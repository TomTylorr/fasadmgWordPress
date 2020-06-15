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
            <header class="main-header" id="main-header">

                <div class="main-header-top">
                    <a href="#" id="main-header-middle-button" class="main-header-middle-button">
                        <div class="main-header-middle-button-div"></div>
                        <div class="main-header-middle-button-div" ></div>
                        <div class="main-header-middle-button-div"></div>
                        <div class="main-header-middle-button-div"></div>
                    </a>

                    <h1 class="site-description"><?php bloginfo('name'); ?></h1>
                    <div class="main-header__button"><button id="main-header__button__link" class="main-header__button__link" type="button">Заказать звонок</button></div>
                </div>

                <div class="main-header-top2">

                    <a class="logo" href="<?php echo home_url(); ?>">
                        <img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="203" height="73" alt="Логотип ООО 'Монте-групп'">
                    </a>    
                    <div class="header-info">
                        <p class="header-info__working-hours"><span class="bg--yellow">Время работы: 8.00 - 16.30</span></p>
                        <p class="header-info__number">
                            +375 (29) 339-99-04 
                            
                        </p>
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
                <div class="modal-menu-container" id="modal-menu-container">

                    <a class="modal-menu__close" id="modal-menu__close" href="#"><span class="modal-menu__close-img"></span></a>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'main_header_menu',
                        'menu' => '',
                        'container' => 'nav',
                        'container_class' => 'main-header-middle',
                        'container_id' => 'main-header-middle',
                        'menu_class' => 'nav-site',
                        'walker' => new Main_Header_Menu(),
                    ]);
                    ?>

                    <script>
                        var modalMenuClose = document.getElementById("modal-menu__close");

                        var menuModal = document.getElementById("modal-menu-container");

                        // Get the button that opens the modal
                        var menuBtn = document.getElementById("main-header-middle-button");

                        // Get the <span> element that closes the modal
                        var mainClose = document.getElementsByClassName("main-modal__close")[0];

                        // When the user clicks the button, open the modal 
                        menuBtn.onclick = function () {
                            menuModal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        modalMenuClose.onclick = function () {
                            menuModal.style.display = "none";
                        }

                        // Get the <span> element that closes the modal
                        var mainClose = document.getElementsByClassName("main-modal__close")[0];


                        // When the user clicks on <span> (x), close the modal
                        mainClose.onclick = function () {
                            searchModal.style.display = "none";
                        }

                    </script>


                    <div class="main-header-bottom" id="main-header-bottom">
                        <?php get_search_form(); ?>
                    </div>
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


