<div class="cours__conteneur">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <?php $categorie = get_the_category(); ?>

            <section class="carte">
                <div class="carte__etiquettes">
                    <div class="carte__etiquettes__sigle">
                        <span class="carte__etiquettes__sigle__contenu">
                            <?= le_sigle(get_the_title()); ?>
                        </span>
                    </div>
                    <div class="carte__etiquettes__duree">
                        <span class="carte__etiquettes__duree__contenu">
                            <?= la_duree(get_the_title()); ?>
                        </span>
                    </div>
                </div>
                <h2 class="carte__titre">
                    <a href=<?= get_permalink(); ?>>
                        <?= le_titre_filtre(get_the_title()); ?>
                    </a>
                </h2>
                <div class="carte__miniature">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="carte__desc">
                    <button class="carte__desc__bouton">
                        <p class="carte__desc__bouton__texte">Voir plus</p>
                    </button>
                    <article class="carte__desc__contenu">
                        <h2 class="carte__desc__contenu__titre">
                            <?= le_titre_filtre(get_the_title()); ?>
                        </h2>
                        <p class="carte__desc__contenu__texte">
                            <?= get_the_content(); ?>
                        </p>
                    </article>
                </div>
            </section>
            
        <?php endwhile ?>
    <?php endif ?>
</div>