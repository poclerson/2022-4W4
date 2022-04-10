<?php get_header(); ?>
<main class="site__main home">
    <h1 class="site__main__titre home__titre">Accueil</h1>
    <?php if (have_posts()): ?>
        <?php
            the_title();
            the_content();
        ?>
    <?php endif ?>

    <?php
        wp_nav_menu(array(
            "menu" => "menu_accueil",
            "container" => "nav",
            "container_class" => "home__menu"
        ))
    ?>
</main>
<?php get_footer(); ?>