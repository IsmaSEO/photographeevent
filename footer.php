    <?php
    get_template_part('template-parts/content', 'contact');
    get_template_part('template-parts/content', 'lightbox');
    ?>
    <footer class="footer home">


        <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'footer_nav',
        ]);
        ?>

    </footer>

    <?php wp_footer(); ?>

    </body>

    </html>