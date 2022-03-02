<?php get_header(); ?>
<main class="site__main">
    <h1 class="site__main__titre">Article</h1>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="cours">
            <h2 class="cours__titre">
                <?php the_title(); ?>
            </h2>
            <div class="cours__image">
                <?php the_post_thumbnail("medium"); ?>
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