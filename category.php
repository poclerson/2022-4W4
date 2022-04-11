<?php get_header(); ?>
<?php include 'carte-fonctions.php'; ?>
<main class="site__main">
<h1 class="site__main__titre">Liste des cours</h1>
    <section class="cours">
        <div class="cours__filtre">
            <?php
                wp_nav_menu(array(
                    "menu"      => "categorie_cours",
                    "container" => "nav",
                    "container_class" => "cours__filtre__menu",
                    "menu_class" => "cours__filtre__menu__ul"
                    
                ));
            ?>
        </div>

        <div class="cours__conteneur">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php $categorie = get_the_category(); ?>
                    <a href=<?= get_permalink(); ?> class="carte">
                        <div class="carte__etiquettes">
                            <div class="carte__etiquettes__sigle">
                                <span class="carte__etiquettes__sigle__contenu"><?= le_sigle(get_the_title()); ?></span>
                            </div>
                            <div class="carte__etiquettes__duree">
                                <span class="carte__etiquettes__duree__contenu"><?= la_duree(get_the_title()); ?></span>
                            </div>
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
        </div>
    </section>
</main>
<?php get_footer(); ?>
</body>
</html>