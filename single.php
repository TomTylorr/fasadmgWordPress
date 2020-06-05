<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fasadmg
 */
get_header();
?>
<main class="container">
    <div class="catalog-page">
        <header class="news__header contacts-page__header news__header--center">
            <h2 class="news__title news__title--center">          
                ТОВАР:</h2>
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
        <section class="card-page">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    ?>

                    <?php the_post(); ?>
                    <div class="card-page__container-img">
                        <?php the_post_thumbnail('medium', array('class' => 'catalog-page__img')); ?>
                    </div>
                    <div class="card-page__container-info">
                        <h3 class="card-page__title"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a class="card-page__link" href="#">Заказать</a>
                    </div>
                <?php } ?> 
                <?php
            } else {
                echo wpautop('Данный товар выведен из складской программы.');
            }
            ?>
            
        </section>
    </div>
</main>

<?php
get_footer();
