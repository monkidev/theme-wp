</main>
<footer>
    <div class="container d-flex flex-wrap">
        <div class="col-12 col-lg-4 text-center text-lg-start">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo-text-white.png" alt="Monkidev - Programação WEB">
        </div>
        <ul class="col-12 col-lg-4 text-center text-lg-start menu-footer">
            <?php
            $menuitems = get_menu_items('menu-footer-1');
            foreach ($menuitems as $item) :
            ?>
                <li>
                    <a href="<?php echo $item->url ?>">
                        <?php echo $item->title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <ul class="col-12 col-lg-4 menu-footer menu-socials d-flex flex-wrap justify-content-center">
            <?php
            $menuitems = get_menu_items('redes-sociais');
            foreach ($menuitems as $item) :
            ?>
                <li>
                    <a href="<?php echo $item->url ?>">
                        <i class="<?php echo $item->title ?> fa-2x"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="copyright text-center col-12">
        Copyright 2021 - Monkidev. Todos os Direitos Reservados
    </div>
    <?php wp_footer(); ?>
</footer>
</body>

</html>