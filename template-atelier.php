<?php
/**
* Template Name: atelier
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>
<?php get_header(); ?>
<main class="site__main">
    <h1 class="site__main__titre">Atelier</h1>
    <article class="atelier">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <section class="atelier__sous-titre">
                <h2 class="atelier__sous-titre__contenu">
                    <?php the_title() ?>
                </h2>
                <p class="atelier__sous-titre__desc"><?php the_field('description') ?></p>
            </section>
            <section class="atelier__champs">
                <div class="atelier__champs__carte">
                    <h2 class="atelier__champs__carte__titre">Animateur</h2>
                    <p class="atelier__champs__carte__desc"><?php the_field('animateur') ?></p>
                </div>
                <div class="atelier__champs__carte">
                    <h2 class="atelier__champs__carte__titre">Local</h2>
                    <p class="atelier__champs__carte__desc"><?php the_field('local') ?></p>
                </div>
                <div class="atelier__champs__carte">
                    <h2 class="atelier__champs__carte__titre">Dates et jours</h2>
                    <p class="atelier__champs__carte__desc">
                        Du
                        <strong><?php the_field('date_de_debut') ?></strong>
                        au
                        <strong><?php the_field('date_de_fin') ?></strong>
                        les
                        <strong><?php the_field('jours') ?></strong>
                    </p>
                </div>
                <div class="atelier__champs__carte">
                    <h2 class="atelier__champs__carte__titre">Heures</h2>
                    <p class="atelier__champs__carte__desc">
                        De
                        <strong><?php the_field('heure_de_debut') ?></strong>
                        à
                        <strong><?php the_field('heure_de_fin') ?></strong>
                        pendant
                        <strong><?php the_field('duree') ?></strong>
                    </p>
                </div>
            </section>
        <?php endwhile; endif; ?>
    </article>
</main>