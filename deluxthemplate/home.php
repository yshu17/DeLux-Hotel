<?php /* Template Name: Home */?>
<?php get_header(); ?>

<main class="main">
    <section class="promo" id="promo">
        <div class="container">
            <div class="promo__inner">
                <h1 class="promo__title">
                    Відпочиньте на березі
                    дивовижних Голубих озер
                </h1>
                <h2 class="promo__subtitle">Аренда дому зі знижкою 10% при бронюванні онлайн</h2>
                <a href="#contacts" class="promo__reservation-link some-link">
                    Забронювати
                </a>

                <?php if (have_rows('reapeter_advantages')): ?>

                    <ul class="promo__list">

                        <?php while (have_rows('reapeter_advantages')):
                            the_row();

                            $counterField = get_row_index();
                            $content = get_sub_field('advantages_text');
                            ?>

                            <li class="list__item">
                                <span class="discript__num">
                                    <?php echo $counterField; ?>
                                </span>
                                <span class="discript__text">
                                    <?php echo $content; ?>
                                </span>
                            </li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>

            </div>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <div class="container">
            <div class="gallery__inner">
                <h2 class="gallery__title title">
                    Наші дома розташовані <br>
                    між затишним лісом та захоплюючим озером
                </h2>
                <h3 class="gallery__subtitle subtitle">
                    Подивіться на фото нашого гостьового дому
                </h3>
                <?php echo do_shortcode('[foogallery id="150"]'); ?>
                <a href="javascript:void(0);" class="gallery-link some-link">
                    Показати ще
                </a>
            </div>
        </div>
    </section>
    <section class="homes" id="homes">
        <div class="container">
            <div class="homes__inner">
                <h2 class="homes__title title">
                    Доми на будь-який вибір
                </h2>
                <h3 class="homes__subtitle subtitle">
                    Обирайте варінат для великої компанії або сімейного відпочинку
                </h3>
                <div class="swiper homes-swiper">
                    <ul class="swiper-wrapper homes-list">

                        <?php
                        global $post;

                        $myposts = get_posts([
                            'numberposts' => -1,
                            'category_name' => 'Homes',

                        ]);

                        if ($myposts) {
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                                ?>

                                <li class="swiper-slide homes-item">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="homes-item__img">
                                    <h4 class="homes-item__title">
                                        <?php the_title(); ?>
                                    </h4>
                                    <p class="homes-item__price">
                                        <?php echo get_field('price_text'); ?>
                                    </p>
                                    <a href="#contacts" class="homes-item__link some-link">Забронювати</a>
                                </li>

                                <?php
                            }
                        }
                        wp_reset_postdata(); // Сбрасываем $post
                        ?>

                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="entertainment" id="entertainment">
        <div class="container">
            <div class="entertainment__inner">
                <h2 class="entertainment__title title">
                    Додаткові розваги
                </h2>
                <h3 class="entertainment__subtitle subtitle">
                    Бронювання розваг відбувається безпосередньо у гостьовому домі
                </h3>
                <?php if (have_rows('reapeter_entertainment')): ?>

                    <ul class="entertainment-list">

                        <?php while (have_rows('reapeter_entertainment')):
                            the_row();

                            $image = get_sub_field('image_entertainment');
                            $title = get_sub_field('title_entertainment');
                            $time = get_sub_field('time_entertainment');
                            $price = get_sub_field('price_entertainment');
                            $discription = get_sub_field('discript_entertainment');
                            ?>

                            <li class="entertainment-item">
                                <img src="<?php echo $image['url']; ?>" class="entertainment-item__img">
                                <div class="information-wrapper">
                                    <h4 class="entertainment-item__title title">
                                        <?php echo $title; ?>
                                    </h4>
                                    <h5 class="entertainment-item__subtitle subtitle">Тривалість: 
                                        <?php echo $time; ?>
                                    </h5>
                                    <p class="entertainment-item__price subtitle">Ціна:
                                        <?php echo $price; ?>₴
                                    </p>
                                    <p class="entertainment-item__discript">
                                        <?php echo $discription; ?>
                                    </p>
                                </div>
                            </li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>

            </div>
        </div>
    </section>
    <section class="contacts" id="contacts">
        <div class="container">
            <div class="contacts__inner">
                <div class="form">
                    <legend class="contacts__title title">Отримайте знижку 10% при бронюванні онлайн</legend>
                    <?php echo do_shortcode('[contact-form-7 id="14" title="Забронировать форма"]') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="comments" id="comments">
        <div class="container">
            <div class="comments__inner">
                <h2 class="comments__title title">
                    Відгуки
                </h2>
                <div class="swiper comments-swiper">
                    <ul class="swiper-wrapper comments-list">
                        <li class="swiper-slide comments-item">
                            <img src="<?php bloginfo('template_url'); ?>/images/comments/Rectangle 19.png"
                                class="comments-item__img">
                            <div class="information-wrapper">
                                <div class="user-info">
                                    <img src="<?php bloginfo('template_url'); ?>/images/comments/Ellipse 5.png"
                                        class="comments-item__userimg">
                                    <div class="wrapper">
                                        <h4 class="comments-item__username">Василь Васильченко</h4>
                                        <h5 class="comments-item__home">Котедж №1</h5>
                                    </div>
                                </div>
                                <p class="comments-item__mark">Я задоволений на 100%!</p>
                                <p class="comments-item__discript">
                                    Відпочивали з друзями на травневих святах. DeLuxe Hotel залишив після себе
                                    найкрутіші враження. Окрема подяку господарю В’ячеславу!
                                </p>
                            </div>
                        </li>
                        <li class="swiper-slide comments-item">
                            <img src="<?php bloginfo('template_url'); ?>/images/comments/Rectangle 20.png"
                                class="comments-item__img">
                            <div class="information-wrapper">
                                <div class="user-info">
                                    <img src="<?php bloginfo('template_url'); ?>/images/comments/Ellipse 4.png"
                                        class="comments-item__userimg">
                                    <div class="wrapper">
                                        <h4 class="comments-item__username">Антон Антонов</h4>
                                        <h5 class="comments-item__home">Дім із лазнею</h5>
                                    </div>
                                </div>
                                <p class="comments-item__mark">Просто супер!</p>
                                <p class="comments-item__discript">
                                    Їздив на відпочинок разом з сім’єю та батьками. Дім дуже зручний, навіть при
                                    великій компанії, ніхто не заважав одне одному. За лазню - окремий респект!
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-nav">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="location" id="location">
        <div class="container">
            <div class="location__inner">
                <h2 class="location__title title">
                    Ми на мапi
                </h2>
                <div id="map" style="height: 500px"></div>
                <div class="info-box animate__animated">
                    <h4 class="info-box__title">Адреса</h4>
                    <p class="info-box__text">
                        <?php echo get_field('addres_text'); ?>
                    </p>
                    <h4 class="info-box__title">Контакти</h4>
                    <p class="info-box__text">
                        <a class="info-box__link" href="tel:<?php echo get_field('phone_number'); ?>"><?php echo get_field('phone_number'); ?></a>
                        <a class="info-box__link" href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a>
                    </p>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>