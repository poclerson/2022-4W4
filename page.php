<?php get_header(); ?>
<main class="site__main">
    <h1 class="site__main__titre">Page</h1>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
    <?php
        endwhile;
        endif;
    ?>
</main>