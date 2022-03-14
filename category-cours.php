<?php get_header(); ?>
<?php include 'carte-fonctions.php'; ?>
<main class="site__main">
<h1 class="site__main__titre">Liste des cours</h1>
    <section class="categorie">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <a href=<?= get_permalink(); ?> class="carte">
                    <div class="carte__sigle">
                        <span class="carte__sigle__contenu"><?= le_sigle(get_the_title()); ?></span>
                    </div>
                    <h3 class="carte__titre">
                        <?= le_titre_filtre(get_the_title()); ?>
                    </h3>
                    <div class="carte__miniature">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </a>
            <?php endwhile ?>
        <?php endif ?>
    </section>
</main>
<?php get_footer(); ?>
</body>
</html>