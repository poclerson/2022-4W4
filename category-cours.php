<?php get_header(); ?>
<main class="site__main">
<h1 class="site__main__titre">Liste des cours</h1>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); 
            $mon_titre_filtre = substr(get_the_title(), 8);
            # Ajouter la durée
            $mon_sigle = substr(get_the_title(), 0, 7);
            $mon_titre_filtre = substr(get_the_title(), 0, strrpos(get_the_title(), '('));
            ?>
            <section class="carte">
                <a class="carte__titre" href="<?= get_permalink(); ?>">
                    <h3><?= $mon_titre_filtre ?></h3>
                </a>
                <div class="carte__image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="carte__sigle">
                    <p class="carte__sigle__contenu"><?= $mon_sigle ?></p>
                </div>
                <div class="carte__desc">
                    <p class="carte__desc__contenu"><?= get_the_excerpt(); ?></p>
                </div>
            </section>     
        <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>
</body>
</html>