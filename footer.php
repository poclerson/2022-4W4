<footer class="site__footer">
    <div class="footer__info">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat quaerat esse rerum illo accusantium eaque obcaecati quos, aperiam dolore totam tempora minima quo accusamus quod asperiores molestias magni iure possimus.
    </div>
    <div class="footer__contact">
        <ul>
            <li>Lorem</li>
            <li>Ipsum</li>
            <li>Dolor</li>
            <li>Sit amet</li>
        </ul>
    </div>
    <div class="footer__nav">
        <nav>
            <?php wp_nav_menu(array("menu" => "simple",
                                    "container" => "nav")); ?>
        </nav>
    </div>
<?php wp_footer(); ?>
</body>
</html>