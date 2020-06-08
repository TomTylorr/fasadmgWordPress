<?php
get_header();
?>
<main class="container">
    <section class="category">
        <h2 class="visually-hidden">Категории товаров</h2>
        <ul class="category">
            <li class="category__item">
                <a class="category__link" href="<?php echo $category_link_frezerovky; ?>"">
                    <h3 class="category__item__title">Фрезеровки</h3>
                    <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/category/frezerovky.jpg" alt="Фрезеровки" width="380" height="207">
                </a>

            </li>
            <li class="category__item">
                <a href="<?php echo $category_link_vitriny; ?>">
                    <h3 class="category__item__title">Витрины</h3>
                    <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/category/vitriny.jpg" alt="Витрины" width="380" height="207">
                </a>
            </li>
            <li class="category__item">
                <a href="<?php echo $category_link_glass; ?>">
                    <h3 class="category__item__title">Стёкла</h3>
                    <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/category/steklo.jpg" alt="Стёкла" width="380" height="207">
                </a>
            </li>

            <li class="category__item carousel  category__item--height">
                    <a href="#" class="carousel__inner">
                        <h3 class="visually-hidden">Слайдер</h3>
                        <div>
                            <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider.jpg" alt="Слайдер" width="775" height="385">
                        </div>
                        <div>
                            <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider2.jpg" alt="Слайдер" width="775" height="385">
                        </div>
                        <div>
                            <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider3.jpg" alt="Слайдер" width="775" height="385">
                        </div>

                    </a>
            </li>

            <li class="category__item category__item--height">
                <a href="<?php echo $category_link_elements; ?>">
                    <h3 class="category__item__title">Элементы</h3>
                    <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/category/elements.jpg" alt="Слайдер" width="380" height="394">
                </a>
            </li>
        </ul>

    </section>

    <section class="new-product">
        <header class="new-product__header">
            <h2 class="new-product__title">Новинки:</h2>
            <a class="new-product__header__link" href="<?php echo $category_link_vitriny; ?>">Каталог товаров</a>
        </header>

        <?php
// параметры по умолчанию
        $posts = get_posts(array(
            'numberposts' => 4,
            'category' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));
        ?>
        <ul class="new-product__items">

            <?php
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <li class="new-product__item">
                    <a class = "new-product__link" href = "<?php the_permalink(); ?>">
                        <div class = "new-product__img--container">
                            <?php the_post_thumbnail('medium', array('class' => 'new-product__img')); ?>
                        </div>
                        <h3 class = "new-product__title-product"><?php the_title(); ?>
                        </h3>
                    </a >
                </li>  
            <?php }
            ?>

        </ul>
        <?php wp_reset_postdata(); // сброс   ?>
    </section>
    
    <section class="news">
        <header class="news__header">
            <h2 class="news__title">Новости:</h2>
            <a class="news__header__link" href="http://fasadmgwordpress/novosty/">Все новости</a>
        </header>
        <?php
// параметры по умолчанию
        $posts = get_posts(array(
            'numberposts' => 3,
            'category' => 13,
            'orderby' => 'date',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));
        ?>
        <ul class="news__items">

            <?php
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <li class="news__item">
                    <div class="news__item__img--container">
                        <a class="news__item__img_link" href = "http://fasadmgwordpress/novosty/">
                            <?php the_post_thumbnail('medium', array('class' => 'news__item__img')); ?>
                        </a >
                    </div>
                    <time datetime="2020-09-23" class="news__item__time"><?php the_time("j F Y"); ?></time>
                    <a class="news__item__link" href="http://fasadmgwordpress/novosty/">
                        <h3 class="news__item__title"><?php the_title(); ?></h3>
                    </a>

                    </div>
                </li>  
            <?php }
            ?>

        </ul>
        <?php wp_reset_postdata(); // сброс   ?>

    </section>
</main>
<?php
//get_sidebar();
get_footer();



