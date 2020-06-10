<?php
get_header();
?>


<main class="container">
    <div class="catalog-page">
        <header class="news__header contacts-page__header news__header--center">
            <h2 class="news__title news__title--center">КАТАЛОГ:</h2>
        </header>
    </div>

    <div class="catalog-page-container">
        <aside class="catalog-page__filter">
            <h3 class="catalog-page__filter__title">Категории товаров:</h3>
            <ul class="catalog-page__filter__items">
                <li class="catalog-page__filter__item"><a class="catalog-page__filter__link" href="<?php echo $category_link_frezerovky; ?>">Фрезеровки</a></li>
                <li class="catalog-page__filter__item"><a class="catalog-page__filter__link" href="<?php echo $category_link_vitriny; ?>">Витрины</a></li>
                <li class="catalog-page__filter__item"><a class="catalog-page__filter__link" href="<?php echo $category_link_glass; ?>">Стёкла</a></li>
                <li class="catalog-page__filter__item"><a class="catalog-page__filter__link" href="<?php echo $category_link_elements; ?>">Элементы</a></li>
            </ul>
        </aside>

        <section class="catalog-page__items">
            <ul class="catalog-page__lists">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        ?>

        <?php the_post(); ?>
                        <li class="catalog-page__item">
                            <a class="catalog-page__link" href="<?php the_permalink() ?>">
         <?php the_post_thumbnail('medium', array('class' => 'catalog-page__img')); ?>
                                <h3 class="catalog-page__title"><?php the_title(); ?></h3>                          
                            </a>
                        </li>
                    <?php } ?> 
</ul>
                <?php
                } else {
                    echo wpautop('Данный товар выведен из складской программы.');
                }
                ?>
            <?php the_posts_pagination(); ?>
        </section>
    </div>
    
</main>

<?php
get_footer();
