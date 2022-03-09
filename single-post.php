<?php get_header(); ?>
<?php include 'carte-fonctions.php'; ?>
<main class="site__main">
    <h1 class="site__main__titre">Article</h1>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="cours">
            <div class="cours__image">
                <?php the_post_thumbnail("medium"); ?>
            </div>

            <h2 class="cours__titre">
                <a href="<?= get_permalink(); ?>">
                    <?= le_titre_filtre(get_the_title()); ?>
                </a>
            </h2>

            <div class="cours__duree">
                <h4 class="cours__duree__contenu">
                    <?= la_duree(get_the_title()); ?>
                </h4>
            </div>
            
            <p class="cours__contenu">
                <?php the_content(); ?>
            </p>
        </article>
    <?php 
        endwhile; 
        endif;
    ?>
</main>
<?php get_footer(); ?>