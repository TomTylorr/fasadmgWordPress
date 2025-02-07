<footer class="main-footer">

    <div class="footer-top">
        <div class="footer-logo">
            <a class="logo" href="<?php echo home_url();?>">
                <img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_footer.png" width="203" height="73" alt="Логотип ООО 'Монте-групп'">
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
                <li class="social-networks__item social-networks-first">
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
                <a class="footer-feedback__mail" href="mailto:montegroup.market@gmail.com">montegroup.market@gmail.com</a>
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
                    Интернет-магазин fasad-mg.by <br>
                    Регистрационный номер в Торговом реестре Республики Беларусь 000000 от 00.00.0000 <br>
                    Свидетельство о регистрации №000000000 выдано Лидским райисполкомом 00.00.0000
                </p>
            </div>

            <div class="developed-by">
                <p>Разработано <br>
                    <a class="developed-be__name" href="mailto:tomtylorr@gmail.com">Tom Tylor</a>
                </p>

            </div>
        </div>


    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
