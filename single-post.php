<?php get_header(); ?>
<main class="site__main">
    <h1>single post</h1>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="cours">
            <h2 class="cours__titre">
                <?php the_title(); ?>
            </h2>
            <section>
                <?php the_post_thumbnail("medium"); ?>
                <?php the_content(); ?>
            </section>
        </article>
    <?php 
        endwhile; 
        endif;
    ?>
</main>
<?php get_footer(); ?>