<footer class="site__footer">
    <div class="footer__desc">
        <h2 class="footer__desc__titre">Le footer</h2>
        <p class="footer__desc__info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem temporibus numquam modi ipsa, amet eligendi animi id illum sint quibusdam, quae officia quod fugiat mollitia porro? Illum veritatis ab facilis.</p>
    </div>
    <?php
            $icone = '<svg width="15px" height="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>';
            wp_nav_menu(array(  "menu" => "Footer",
                                "container" => "nav",
                                "container_class" => "site__footer__menu",
                                "menu_class" => "site__footer__menu__ul",
                                "link_before" => $icone)); 
    ?>
</body>
</html>