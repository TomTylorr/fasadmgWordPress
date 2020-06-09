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
                <?php the_title() ?></h2>
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
                        <a class="card-page__link" href="#" id="card-page__link">Заказать</a>
                    </div>
                <?php } ?> 
                <?php
            } else {
                echo wpautop('Данный товар выведен из складской программы.');
            }
            ?>

        </section>
    </div>

    <div class="modal" id="modal">
        <section class="modal-order">
                <div class="modal-order__top">
                    <h2 class="modal-order__title"><?php the_title(); ?></h2>
                    <p class="modal-order__description">Отправьте заявку на товар и наш менеджер обязательно свяжеться с Вами !</p>
                </div>
            <div class="modal-order__main">
                <div class="modal-order__left">
                    <?php the_post_thumbnail('large', array('class' => 'modal-order__img')); ?>
                </div>

                <form class="modal-order__form" action="action_page.php">
                    <label for="name"><p>Имя:<span class="modal-order__star">*</span></p><input class="main-modal__input" type="text" id="name" name="name" ></label>                
                    <label for="phone"><p>Телефон:<span class="modal-order__star">*</span></p><input class="main-modal__input" type="text" class="input-text" id="phone" name="callback_tel" value="" ></label>               
                    <label for="email"><p>Email:</p><input class="main-modal__input" type="text" name="email" id="email" class="" value="" ></label>              
                    <label for="subject"><p>Сообщение:</p><textarea  class="modal-order__textarea main-modal__input" id="subject" name="subject" placeholder=""></textarea></label>     
                    <input class="modal-order__button" type="submit" value="Купить" name="send">
                </form>
            </div>
            <button class="modal-order__close" type="button" data-action="hide-banner" data-type="panel" title="Закрыть модальное окно"></button>
        </section>
    </div>


</main>

<?php
get_footer();
