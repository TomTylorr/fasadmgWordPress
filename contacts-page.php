<?php
get_header();
/*
  Template Name: Контакты
 */
?>
<main class="container">
    <section class="news-page contacts-page">
        <header class="news__header contacts-page__header news__header--center">
            <h2 class="news__title news__title--center">Контакты:</h2>
        </header>

        <div class="contact-page__main-container">
            <div class="contacts-page__container">
                <h3 class="contacts-page__title">АДРЕС:</h3>
                <p class="contacts-page__text">
                    Гродненская область, город Лида, <br>
                    улица Химиков, дом 6, офис 9
                </p>
            </div>
            <div class="contacts-page__container">
                <h3 class="contacts-page__title">Режим работы:</h3>
                <p class="contacts-page__text">
                    Будние дни - с 8.00 до 16.30; <br>
                    Перерыв - с 13.00 до 14.00; <br>
                    Выходные - суббота, воскресенье.
                </p>
            </div>
            <div class="contacts-page__container">
                <h3 class="contacts-page__title">Телефоны:</h3>
                <p class="contacts-page__text">
                    +375 (29) 3399904
                </p>
            </div>
        </div>
    </section>
    <div class="contact-page__main-container contact-page__main-container--margin">
        <section class="contacts-page__map">
            <h3 class="visually-hidden">Карта расположения офиса</h3>
            <img class="contacts-page__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/map.jpg" alt="Гродненская область, город Лида, 
                 улица Химиков, дом 6, офис 9">
        </section>
        <section class="contacts-page__reequisites">
            <h3 class="contacts-page__reequisites__title">РЕКВИЗИТЫ:</h3>
            <p class="contacts-page__reequisites__text"> РБ, Гродненская обл., Лидский р-н, Третьяковский с/с, 66, д. Минойты
                р/с BY85BELB30120167LZ0010226000 в бел.руб.
                р/с BY70BELB30120167LZ0020226000 в евро
                в ОАО «Банк БелВЭБ» г.Минск, БИК SWIFT: BELBBY2X, 
                УНП 590960067
                 </p>
        </section>
    </div>

    <div class="contact-page__main-container contact-page__main-container--margin">

        <h2 class="our-employees__title">Наши специалисты:</h2>


    </div>
</main>

<?php
get_footer();
