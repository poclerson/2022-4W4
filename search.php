<?php
    /*
     * Modèle search.php
     * 
     * Permet d'afficher les résultats d'une recherche
     * 
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     * 
     * @package <cidw-4w4>
     */
?>

<?php get_header(); ?>
<main class="site__main">
    <h1 class="site__main__titre">Résultat de la recherche</h1>
    <?php if (have_posts()) : while(have_posts()) : the_post() ?>
        <article class="site__main__recherche">
            <h3><?php the_title(); ?></h3>
            <p><?php wp_trim_words(get_the_content(), 20); ?></p>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>