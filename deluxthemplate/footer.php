<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <a href="#" class="logo">
                    <img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="logo" class="logo__img">
                </a>
                <nav class="menu">
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
                    </ul>
                </nav>
                <p class="addres">
                    <?php echo get_field('addres_text'); ?>
                </p>
                <div class="callback">
                    <a href="#contacts" class="footer__callback-link some-link">
                        Забронювати
                    </a>
                    <a href="tel:<?php echo get_field('phone_number'); ?>" class="phone">
                        <?php echo get_field('phone_number'); ?>
                    </a>
                    <a href="mailto:<?php echo get_field('email'); ?>" class="phone">
                        <?php echo get_field('email'); ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
    
</body>

</html>
