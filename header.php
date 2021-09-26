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
    <canvas id="animation"></canvas>
    <header>
        <nav id="primary-menu-container" class="menu-bottom primary-menu-container navbar navbar-expand-md">
            <div class="container">
                <div class="logo-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/monkidev.png" alt="monkidev logo">
                </div>
                <button id="navbar-toggler-btn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i data-feather="menu"></i>
                </button>
                <div class="text-center text-lg-start collapse navbar-collapse" id="primary-menu">
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
            <div class="title">
                A tecnologia <span>move</span><br />
                o mundo
            </div>
            <div class="subtitle">
                Steve Jobs, inventor e fundador da Apple.
            </div>
            <div class="contact-btn">
                Faça tecnologia
            </div>
            <div class="to-products">
                <h1>
                    Nossos Produtos
                </h1>
                <i data-feather="chevron-down"></i>
            </div>
        </div>
    </header>
    <main class="container">