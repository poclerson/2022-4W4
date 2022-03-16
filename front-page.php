<?php get_header(); ?>
<main class="site__main home">
    <h1 class="site__main__titre home__titre">Accueil</h1>
    <?php if (have_posts()): ?>
        <?php
            the_title();
            the_content();
        ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>