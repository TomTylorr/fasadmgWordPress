<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fasadmg
 */
get_header();
?>

<main class="page-404">

    <section class="page-404-content">
        <p class="page-404-content__number">404</p>
        <h2 class="page-404-content__title">Страница не найдена</h2>

        <p class="page-404-content__text">Мы сожалеем, но страница на которую Вы пытались перейти не существует.</p>
        <p class="page-404-content__text"><a class="page-404-content__link" href="<?php echo home_url(); ?>">Перейти на главную страницу</a></p>
        </div>
    </section>

</main>

<?php
get_footer();
