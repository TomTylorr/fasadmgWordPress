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
                <li class="category__item slider  category__item--height">
                    <a href="#">
                        <h3 class="visually-hidden">Слайдер</h3>
                        <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider.jpg" alt="Слайдер" width="775" height="385">
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

<ul class="new-product__items">
    <li class="new-product__item">
        <a class="new-product__link" href="#">
           <div class="new-product__img--container"><img class="new-product__img" src="<?php echo get_template_directory_uri(); ?> /assets/img/new-product__items/bonn1.jpg" alt="Фото нового товара"></div> 
            <h3 class="new-product__title-product">Бриз 2
            </h3>
        </a>
    </li>
    <li class="new-product__item">
        <a class="new-product__link" href="#">
            <div class="new-product__img--container">
                <img class="new-product__img" src="<?php echo get_template_directory_uri(); ?> /assets/img/new-product__items/bonn1_type1.jpg" alt="Фото нового товара">
            </div>
            <h3 class="new-product__title-product">Матильда

            </h3>
            </a>
    </li>
    <li class="new-product__item">
        <a class="new-product__link" href="#">
            <div class="new-product__img--container">
            <img class="new-product__img" src="<?php echo get_template_directory_uri(); ?> /assets/img/new-product__items/bonn1_type2.jpg" alt="Фото нового товара">
        </div>
            <h3 class="new-product__title-product">Майами
            </h3>
            </a>
    </li>
    <li class="new-product__item">
        <a class="new-product__link" href="#">
            <div class="new-product__img--container">
            <img class="new-product__img" src="<?php echo get_template_directory_uri(); ?> /assets/img/new-product__items/bonn1_type3.jpg" alt="Фото нового товара">
        </div>
            <h3 class="new-product__title-product">Малага
            </h3>
            </a>
    </li>

</ul>
</section>

<section class="news">
       <header class="news__header">
        <h2 class="news__title">Новости:</h2>
        <a class="news__header__link" href="#">Все новости</a>
    </header>

    <ul class="news__items">
        <li class="news__item">
            <div class="news__item__img--container">
                <a href="#"><img class="news__item__img" src="<?php echo get_template_directory_uri(); ?> /assets/img/news/image1.jpg" alt="Фото новости 1"></a>
            </div>
            
            <time datetime="2020-09-23" class="news__item__time">25 мая 2020</time>
                <a class="news__item__link" href="#">
                    <h3 class="news__item__title">Сегодня мы запустили новый...</h3>
                    </a>

        </li>
        <li class="news__item">
            <div class="news__item__img--container">
            <a href="#"><img class="news__item__img" src="<?php echo get_template_directory_uri(); ?> /assets/img/news/image2.jpg" alt="Фото новости 2" width="380"></a>
        </div>
            <time datetime="2020-09-23" class="news__item__time">25 мая 2020</time>
                <a class="news__item__link" href="#">
                    <h3 class="news__item__title">Сегодня мы запустили новый 2...</h3>
                </a>           
        </li>
        <li class="news__item">
            <div class="news__item__img--container">
            <a href="#"><img class="news__item__img" src="<?php echo get_template_directory_uri(); ?> /assets/img/news/image3.jpg" alt="Фото новости 3" width="380"></a>
        </div>
            <time datetime="2020-09-23" class="news__item__time">25 мая 2020</time>
               <a class="news__item__link" href="#">
                <h3 class="news__item__title">Сегодня мы запустили новый 3...</h3>
                </a>    
        </li>
    </ul>

</section>
    </main>
<?php
//get_sidebar();
get_footer();



