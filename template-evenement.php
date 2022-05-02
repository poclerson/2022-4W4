<?php
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
    <h1 class="site__main__titre">Évènement</h1>
    <article class="evenement">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <section class="evenement__sous-titre">
                <h2 class="evenement__sous-titre__contenu">
                    <?php the_title(); ?>
                </h2>
            </section>
            <section class="evenement__champs">
                <section class="evenement__champs__image">
                    <div class="evenement__champs__image__contenu">
                        <img class="evenement__champs__image__contenu__image" src="<?php the_field('miniature'); ?>" alt="">
                    </div>
                </section>

                <section class="evenement__champs__texte">
                    <div class="evenement__champs__texte__contenu">
                        <h2 class="evenement__champs__texte__contenu__titre">Où</h2>
                        <p class="evenement__champs__texte__contenu__texte">
                            <?php the_field('endroit'); ?>
                        </p>
                    </div>
                    <div class="evenement__champs__texte__contenu">
                        <h2 class="evenement__champs__texte__contenu__titre">Qui</h2>
                        <p class="evenement__champs__texte__contenu__texte">
                            <?php the_field('organisateur'); ?>
                        </p>
                    </div>
                    <div class="evenement__champs__texte__contenu">
                        <h2 class="evenement__champs__texte__contenu__titre">Quoi</h2>
                        <p class="evenement__champs__texte__contenu__texte">
                            <?php the_field('resume'); ?>
                        </p>
                    </div>
                    <div class="evenement__champs__texte__contenu">
                        <h2 class="evenement__champs__texte__titre">Quand</h2>

                        <h3 class="evenement__champs__texte__sous-titre">Date</h3>
                        <p class="evenement__champs__texte__contenu__texte">
                            <?php the_field('date'); ?>
                        </p>
                        <h3 class="evenement__champs__texte__sous-titre">Heure</h3>
                        <p class="evenement__champs__texte__contenu__texte">
                            <?php the_field('heure'); ?>
                        </p>
                    </div>
                </section>
            </section>
        <?php endwhile ?>
        <?php endif ?>    
    </article>
</main>
<?php get_footer() ?>



