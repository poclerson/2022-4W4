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
            <img class="evenement__miniature" src=<?php the_field('miniature'); ?> alt="">
            <p class="evenement__endroit">
                <?php the_field('endroit'); ?>
            </p>
            <p class="evenement__organisateur">
                <?php the_field('organisateur'); ?>
            </p>
            <p class="evenement__resume">
                <?php the_field('resume'); ?>
            </p>
            <p class="evenement__date">
                <?php the_field('date'); ?>
            </p>
            <p class="evenement__heure">
                <?php the_field('heure'); ?>
            </p>
        <?php endwhile ?>
        <?php endif ?>    
    </article>
</main>
<?php get_footer() ?>



