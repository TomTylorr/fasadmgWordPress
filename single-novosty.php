<?php
get_header();
/*
  Template Name: Шаблон страницы одиночной новости
  Template Post Type: post, news
 */
?>
<main class="container">
    <section class="news-page">
        <header class="news__header">
            <h2 class="news__title news__title--position"><?php the_title();?></h2>
        </header>
        
        <?php
// параметры по умолчанию
        $posts = get_posts(array(
            'numberposts' => 1,
            'category_name' => 'novosty',
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
        <ul class="news-page__items">

            <?php
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <li class="news-page__item">
                    <div class="news-page__container news-page__container-photo">
                        <a href="<?php the_permalink() ?>" class="new-page__item-link">
                            <?php the_post_thumbnail('large', array('class' => 'new-page__photo')); ?>
                            <time datetime="2020-09-23" class="new-page__time"><?php the_time("j F Y"); ?></time>
                        </a> 
                    </div>
                    <div class="news-page__container">
                        <h3 class="news-page__title">
                            <a class="news-page__title-link" href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="text-wrapper">
                            <p class="news-page__text"><?php the_content(); ?>

                            </p>
                        </div>
                    </div>
                </li> 
                
            <?php }
            ?>
<?php the_posts_pagination(); ?>
        </ul>
        <?php wp_reset_postdata(); // сброс   ?>
        
    </section>

</main>


<?php
get_footer();
