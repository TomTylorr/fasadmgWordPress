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
    </div>

    <div class="catalog-page-container">
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
                    echo wpautop('По вашему запросу ничего не найдено');
                }
                ?>
            <?php the_posts_pagination(); ?>
        </section>
    </div>
</main>

<?php
get_footer();
