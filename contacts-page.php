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
                        Будние дни - с 9.00 до 18.00; <br>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/map.jpg" alt="Гродненская область, город Лида, 
        улица Химиков, дом 6, офис 9">
            </section>
            <section class="contacts-page__reequisites">
                <h3 class="contacts-page__reequisites__title">РЕКВИЗИТЫ:</h3>
                <p class="contacts-page__reequisites__text"> Полное наименование: Общество с ограниченной ответственностью «Албико-групп»
                    Сокращенное наименование: ООО «Албико-групп»
                    231288, Республика Беларусь, Гродненская область, город Лида, улица Химиков, дом 6, офис 9.
                    Тел. (+375 29) 668-85-56, факс (+375 29) 339-90-04.
                    Банк: ОАО «БПС-Сбербанк» 231300 г. Лида, ул. Мицкевича,6а
                    Р/с: BY53BPSB30121687630169330000
                    БИК: BPSBBY2X,
                    УНП: 591339420
                    Директор: Раубо Павел Ришардович
                    Действующего на основании: Устава
                    albico-group@mail.ru http://fasad-mg.by </p>
            </section>
        </div>

        <div class="contact-page__main-container contact-page__main-container--margin">

                <h2 class="our-employees__title">Наши специалисты:</h2>
                

            </div>
    </main>

<?php
get_footer();
