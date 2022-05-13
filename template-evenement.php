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
                <div class="evenement__champs__carte">
                    <img class="evenement__champs__carte__miniature" src="<?php the_field('miniature'); ?>" alt="">
                </div>
                <div class="evenement__champs__carte">
                    <h2 class="evenement__champs__carte__titre">Où</h2>
                    <p class="evenement__champs__carte__desc">
                        <?php the_field('endroit'); ?>
                    </p>
                </div>
                <div class="evenement__champs__carte">
                    <h2 class="evenement__champs__carte__titre">Qui</h2>
                    <p class="evenement__champs__carte__desc">
                        <?php the_field('organisateur'); ?>
                    </p>
                </div>
                <div class="evenement__champs__carte">
                    <h2 class="evenement__champs__carte__titre">Quoi</h2>
                    <p class="evenement__champs__carte__desc">
                        <?php the_field('resume'); ?>
                    </p>
                </div>
                <div class="evenement__champs__carte">
                    <h2 class="evenement__champs__carte__titre">Quand</h2>
                    <h3 class="evenement__champs__carte__sous-titre">Date</h3>
                    <p class="evenement__champs__carte__desc">
                        <?php the_field('date'); ?>
                    </p>
                    <h3 class="evenement__champs__carte__sous-titre">Heure</h3>
                    <p class="evenement__champs__carte__desc">
                        <?php the_field('heure'); ?>
                    </p>
                </div>
            </section>
        <?php endwhile ?>
        <?php endif ?>    
    </article>
</main>
<?php get_footer() ?>



