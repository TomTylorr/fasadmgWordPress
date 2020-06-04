<footer class="main-footer">

    <div class="footer-top">
        <div class="footer-logo">
            <a class="logo" href="#">
                <img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="169" height="84" alt="Логотип ООО 'Монте-групп'">
            </a>
        </div>

        <div class="footer-navigation">

            <?php
            wp_nav_menu([
                'theme_location' => 'main_footer_menu',
                'menu' => '',
                'container' => false,
                'container_class' => false,
                'container_id' => '',
                'menu_class' => 'site-navigation-main-bottom',
                'walker' => new Main_Footer_Menu(),
            ]);
            ?>


            <?php
            wp_nav_menu([
                'theme_location' => 'category_footer_menu',
                'menu' => '',
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'site-navigation-categories-bottom',
                'walker' => new Category_Footer_Menu(),
            ]);
            ?>



            <ul class="social-networks">
                <li class="social-networks__item">
                    <a class="social-networks__vk" href="#">
                        <p class="visually-hidden">Вконтакте</p>
                    </a>
                </li>
                <li class="social-networks__item">
                    <a class="social-networks__facebook" href="#">
                        <p class="visually-hidden">Facebook</p>
                    </a>
                </li>
                <li class="social-networks__item">
                    <a class="social-networks__instagramm" href="#">
                        <p class="visually-hidden">Instagram</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer-feedback">
            <p class="footer-feedback__address">230232, РБ, г.Лида, ул.Химиков 6</p>
            <p class="footer-feedback__title">Обратная связь: <br>
                <a class="footer-feedback__mail" href="#">albico-group@mail.ru</a>
            </p>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="footer-container">
            <div class="right-reserved">
                <p>©2020 Компания «Монте-групп»<br>
                    Все права защищены</p>
            </div>

            <div class="registration">
                <p class="registration__text">
                    Интернет-магазин fasadMDF.by <br>
                    Регистрационный номер в Торговом реестре Республики Беларусь 364262 от 25.05.2020 <br>
                    Свидетельство о регистрации №000000000 выдано Лидским райисполкомом 23.08.2016
                </p>
            </div>

            <div class="developed-by">
                <p>Разработано <br>
                    <a class="developed-be__name" href="#">Tom Tylor</a>
                </p>

            </div>
        </div>


    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
