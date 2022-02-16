<?php get_header(); ?>
<main class="site__main">
    <h1>front-page.php</h1>
    <?php if (have_posts()): ?>
        <?php
            the_title();
            the_content();
        ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>