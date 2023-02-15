<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo wp_get_document_title(); ?></title>
	<?php wp_head(); ?>
</head>

<header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <a href="#header" class="logo">
                    <img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="logo" class="logo__img">
                </a>
                <nav class="menu" id="menu">
                    <ul class="menu__list">
                        <li class="list__item">
                            <a href="#gallery" class="item__link">Галерея</a>
                        </li>
                        <li class="list__item">
                            <a href="#homes" class="item__link">Наші дома</a>
                        </li>
                        <li class="list__item">
                            <a href="#entertainment" class="item__link">Додаткові розваги</a>
                        </li>
                        <li class="list__item">
                            <a href="#contacts" class="item__link">Бронювання</a>
                        </li>
                        <li class="list__item">
                            <a href="#comments" class="item__link">Відгуки</a>
                        </li>
                        <li class="list__item">
                            <a href="#location" class="item__link">Контакти</a>
                        </li>
                        <li class="list__item li-contact-info">
                            <a href="tel:<?php echo get_field('phone_number'); ?>" class="phone">
                                <p><?php echo get_field('phone_number'); ?></p>
                                <p>Зворотній дзвінок</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="contact-info">
                    <a href="tel:<?php echo get_field('phone_number'); ?>" class="phone">
                        <p><?php echo get_field('phone_number'); ?></p>
                        <p>Зворотній дзвінок</p>
                    </a>
                </div>
                <div id="hamburger">
                    <svg viewBox="0 0 100 100">
                        <path class="line line1"
                            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                        <path class="line line2" d="M 20,50 H 80" />
                        <path class="line line3"
                            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                    </svg>
                </div>
            </div>
        </div>
        <a herf="#promo" class="scroll-top"></a>
    </header>