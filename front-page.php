<?php get_header(); ?>
<main class="site__main">
    <section class="animation">
        <div class="animation-bloc">1</div>
        <div class="animation-bloc">2</div>
        <div class="animation-bloc">3</div>
        <div class="animation-bloc">4</div>
        <div class="animation-bloc">5</div>
    </section>
    <h1>front-page.php</h1>
    <?php if (have_posts()): ?>
        <?php
            the_title();
            the_content();
        ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>