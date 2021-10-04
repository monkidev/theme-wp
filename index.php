<?php

/**
 * Template Name: Page Home
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Monkidev
 * @since Monkidev Monkidev 1.0
 */
?>

<?php get_header() ?>

<div class="container info" id='about'>
    <div class="row align-items-center mt-5 mb-5">
        <div data-aos-duration="1500" data-aos="fade-right" class="col-12 col-lg-6 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/images/info-pic.png" alt="">
        </div>
        <div class="col-12 col-lg-6 text-center text-lg-start">
            <h1 data-aos-duration="1500" data-aos="fade-down">Um pouco sobre a Monkidev</h1>
            <p data-aos-duration="1500" data-aos="fade-up">
                Informar a necessidade e expandir os movimentos tecnológicos no nordeste
                é o principal foco atualmente da monkidev.
            </p>
        </div>
    </div>
</div>

<?php
$args_social_links = [
    [
        'name' => 'Discord',
        'icon' => 'fab fa-discord',
        'link' => 'https://discord.gg/TMQ5KzU'
    ],
    [
        'name' => 'Whatsapp',
        'icon' => 'fab fa-whatsapp',
        'link' => 'https://chat.whatsapp.com/FnPPQmzXepgDFJer12SYD5'
    ],
    [
        'name' => 'Telegram',
        'icon' => 'fab fa-telegram',
        'link' => 'https://t.me/joinchat/TvD4ikm5iINjMDcx'
    ],
    [
        'name' => 'Instagram',
        'icon' => 'fab fa-instagram',
        'link' => 'https://instagram.com/monkidev'
    ]
];
get_template_part('components/social-links', 'social-links', $args_social_links)
?>

<?php get_footer() ?>