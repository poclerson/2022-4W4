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
            <section class="evenement__image">
                <img class="evenement__image__miniature" src=<?php the_field('miniature'); ?> alt="">
            </section>

            <section class="evenement__champs">

                <div class="evenement__champs__endroit">
                    <h2 class="evenement__champs__endroit__titre">Où</h2>
                    <p class="evenement__champs__endroit__info">
                        <?php the_field('endroit'); ?>
                    </p>
                </div>
                <div class="evenement__champs__organisateur">
                    <h2 class="evenement__champs__organisateur__titre">Qui</h2>
                    <p class="evenement__champs__organisateur__info">
                        <?php the_field('organisateur'); ?>
                    </p>
                </div>
                <div class="evenement__champs__resume">
                    <h2 class="evenement__champs__resume__titre">Quoi</h2>
                    <p class="evenement__champs__resume__info">
                        <?php the_field('resume'); ?>
                    </p>
                </div>
                <div class="evenement__champs__date-heure">
                <h2 class="evenement__champs__date-heure__titre">Quand</h2>

                    <h3 class="evenement__champs__date-heure__sous-titre">Date</h3>
                    <p class="evenement__champs__date-heure__info">
                        <?php the_field('date'); ?>
                    </p>
                    <h3 class="evenement__champs__date-heure__sous-titre">Heure</h3>
                    <p class="evenement__champs__date-heure__info">
                        <?php the_field('heure'); ?>
                    </p>
                </div>
            </section>
        <?php endwhile ?>
        <?php endif ?>    
    </article>
</main>
<?php get_footer() ?>



