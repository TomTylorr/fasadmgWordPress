<?php 
get_header();
?>
        <main class="container">

        <section class="category">
            <h2 class="visually-hidden">Категории товаров</h2>
            <ul class="category">
                <li class="category__item">
                    <a class="category__link" href="#">
                        <h3 class="category__item__title">Фрезеровки</h3>
                        <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/category/frezerovky.jpg" alt="Фрезеровки" width="380" height="207">
                    </a>
                    
                </li>
                <li class="category__item">
                    <a href="#">
                        <h3 class="category__item__title">Витрины</h3>
                        <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/category/vitriny.jpg" alt="Витрины" width="380" height="207">
                    </a>
                </li>
                <li class="category__item">
                    <a href="#">
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
                    <a href="#">
                        <h3 class="category__item__title">Элементы</h3>
                        <img class="category__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/category/elements.jpg" alt="Слайдер" width="380" height="394">
                    </a>
                </li>
            </ul>

        </section>




<section class="new-product">
    <header class="new-product__header">
            <h2 class="new-product__title">Новинки:</h2>
            <a class="new-product__header__link" href="#">Каталог товаров</a>
    </header>

<ul class="new-product__items">
    <li class="new-product__item">
        <a class="new-product__link" href="#">
           <div class="new-product__img--container"><img class="new-product__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-product__items/bonn1.jpg" alt="Фото нового товара"></div> 
            <h3>Бриз 2
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam autem quis temporibus exercitationem blanditiis laudantium veniam, et nihil voluptatem libero ab sint velit, consectetur aperiam praesentium? Accusamus ut natus maiores?
            </h3>
        </a>
    </li>
    <li class="new-product__item">
        <a class="new-product__link" href="#">
            <div class="new-product__img--container">
                <img class="new-product__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-product__items/bonn1_type1.jpg" alt="Фото нового товара">
            </div>
            <h3>Матильда

            </h3>
            </a>
    </li>
    <li class="new-product__item">
        <a class="new-product__link" href="#">
            <div class="new-product__img--container">
            <img class="new-product__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-product__items/bonn1_type2.jpg" alt="Фото нового товара">
        </div>
            <h3>Майами
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ipsa suscipit quidem tenetur quasi illum, eos, 
                dolorum dicta, consectetur porro vero ab. Necessitatibus maxime autem nemo at, aut placeat veniam?
            </h3>
            </a>
    </li>
    <li class="new-product__item">
        <a class="new-product__link" href="#">
            <div class="new-product__img--container">
            <img class="new-product__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-product__items/bonn1_type3.jpg" alt="Фото нового товара">
        </div>
            <h3>Малага
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla dolores sed enim et maxime aut totam placeat error perspiciatis asperiores quos ad architecto est, ducimus beatae, hic, neque nostrum vitae.
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
                <a href="#"><img class="news__item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/image1.jpg" alt="Фото новости 1"></a>
            </div>
            
            <time datetime="2020-09-23" class="news__item__time">25 мая 2020</time>
            <h3 class="news__item__title">
                <a href="#">Сегодня мы запустили новый...
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis earum hic tempora est repellat facilis vel magnam quibusdam pariatur voluptatum quaerat magni dolor ratione, reprehenderit harum, provident maiores suscipit.</a>
            </h3>

        </li>
        <li class="news__item">
            <div class="news__item__img--container">
            <a href="#"><img class="news__item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/image2.jpg" alt="Фото новости 2" width="380"></a>
        </div>
            <time datetime="2020-09-23" class="news__item__time">25 мая 2020</time>
            <h3 class="news__item__title">
                <a href="#">Сегодня мы запустили новый...</a>
            </h3>
        </li>
        <li class="news__item">
            <div class="news__item__img--container">
            <a href="#"><img class="news__item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/image3.jpg" alt="Фото новости 3" width="380"></a>
        </div>
            <time datetime="2020-09-23" class="news__item__time">25 мая 2020</time>
            <h3 class="news__item__title">
               <a href="#">Сегодня мы запустили новый...</a> 
            </h3>
        </li>
    </ul>

</section>
    </main>
<?php
//get_sidebar();
get_footer();



