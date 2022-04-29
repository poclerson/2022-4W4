        <footer class="site__footer">
            <div class="site__footer__rangee">
                <section class="site__footer__rangee__desc">
                    <h1 class="site__footer__rangee__desc__titre">4w4</h1>
                </section>
                <section class="site__footer__rangee__recherche"><?php get_search_form(); ?></section>
                <section class="site__footer__rangee__menu">
                    <h2 class="site__footer__rangee__menu__sous-titre">Navigation rapide</h2>
                    <?php
                        wp_nav_menu(array(  "menu" => "Footer",
                                            "container" => "nav",
                                            "container_class" => "site__footer__rangee__menu__navigation",
                                            "menu_class" => "site__footer__rangee__menu__navigation__ul")); 
                    ?>
                </section>
                <section class="site__footer__rangee__sociaux"><?php get_sidebar('footer_rangee_1'); ?></section>
                <section class="site__footer__rangee__droits">&copy; Collège de Maisonneuve - Tous droits réservés</section>
                <section class="site__footer__rangee__auteur">Thème réalisé par Pierre-Olivier Clerson</section>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>