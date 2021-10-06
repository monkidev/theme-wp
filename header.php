<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <main>
        <canvas id="animation"></canvas>
        <header>
            <nav id="primary-menu-container" class="menu-bottom primary-menu-container navbar navbar-expand-md">
                <div class="container">
                    <div data-aos="fade-down" data-aos-duration="1500" class="logo-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/images/monkidev.png" alt="monkidev logo">
                    </div>
                    <button id="navbar-toggler-btn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i data-feather="menu"></i>
                    </button>
                    <div data-aos="fade-up" data-aos-duration="1500" class="text-center text-lg-start collapse navbar-collapse" id="primary-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>
                </div>
            </nav>
            <div id="topo" class="container d-flex flex-column justify-content-center align-items-center">
                <div class="title" data-aos="fade-right" data-aos-duration="1500">
                    A tecnologia <span id="change-word">move</span><br />
                    o mundo
                </div>
                <div data-aos="fade-left" data-aos-duration="1500" class="subtitle">
                    Steve Jobs, inventor e fundador da Apple.
                </div>
                <a href="https://chat.whatsapp.com/FnPPQmzXepgDFJer12SYD5" target="_blank" data-aos="fade-up" data-aos-duration="2000" class="contact-btn">
                    Faça tecnologia
                </a>
                <a href="#sb_instagram" data-aos-offset="-500" data-aos="fade-down" data-aos-duration="1500" class="to-products">
                    <i data-feather="chevron-down"></i>
                </a>
            </div>
        </header>