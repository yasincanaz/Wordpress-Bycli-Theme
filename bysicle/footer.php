<footer>
        <div class="row">
            <ul>
                <a href=""><li><img src="<?php bloginfo('template_url')?>/images/footer-logo.png" alt=""></li></a>
            <?php wp_nav_menu(
            array(
                "theme_location"=>"footer-menu",
                "menu_class" => "footer-menu"
            ));
            ?>
            <li style="color:white">YasinCanaz © 2012 - 2021</li>
            </ul>
        </div>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <?php wp_footer(); ?>
</body>
<script src="script/script.js"></script>
</html>