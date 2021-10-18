<?php

/**
 * Template Name: Page Contrate-nos
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Monkidev
 * @since Monkidev Monkidev 1.0
 */

get_header('contrate-nos');

?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

    .cta-container {
        display: flex;
        justify-content: center;
        height: 100vh;
        width: 100vw;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
    }

    .cta-container img {
        max-width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .cta-container .banner {
        width: 901px;
        height: 100%;
        object-fit: cover;
    }

    .cta-container .content {
        padding: 3rem;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-between;
    }

    .cta-container .content .title {
        font-family: "Poppins";
        font-size: 6rem;
        font-weight: 700;
    }

    .cta-container .content .title span {
        font-family: "Poppins";
        color: var(--color-primary);
    }

    .cta-container .content p {
        font-size: 2rem;
        line-height: 2.8rem;
        margin-top: 2rem;
    }

    .cta-container .content .cta-button {
        background-color: var(--color-dark);
        padding: 1.5rem 2rem;
        text-decoration: none;
        cursor: pointer;
        font-size: 2.2rem;
        color: white;
        border-radius: 0.3rem;
    }

    @media (max-width: 1700px) {
        .cta-container .banner {
            max-width: 700px;
        }

        .cta-container .content .title {
            font-size: 4rem;

        }

        .cta-container .content p {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 1450px) {
        .cta-container .content .title {
            font-size: 3.2rem;
        }

        .cta-container .content p {
            font-size: 1.4rem;
            line-height: 1.6rem;
        }

        .cta-container .content .cta-button {
            padding: 0.8rem 1.2rem;
            font-size: 1.6rem;
        }
    }

    @media (max-width: 1200px) {
        .cta-container .banner {
            max-width: 350px;
        }
    }

    @media (max-width: 992px) {
        .cta-container .content .title {
            font-size: 2.3rem;
        }

        .cta-container .content p {
            font-size: 1rem;
            line-height: 1.2rem;
        }

        .cta-container .content .cta-button {
            padding: 0.6rem 1rem;
            font-size: 1.4rem;
        }
    }

    @media (max-width: 768px) {
        .cta-container {
            background-image: url("<?php echo get_template_directory_uri() ?>/images/banner-page-contrate-nos-mobile.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }
        
        .logo {
            fill: white;
        }

        .cta-container .content {
            padding: 2rem;
        }

        .cta-container .banner {
            display: none;
        }

        .cta-container .content .title {
            font-size: 2rem;
        }

        .cta-container .content .title span {
            color: white;
        }

        .cta-container .content p {
            font-size: 1.4rem;
            line-height: 1.6rem;
        }

        .cta-container .content .cta-button {
            padding: 0.6rem 1rem;
            font-size: 1.4rem;
            background-color: var(--color-primary);
        }
    }
</style>
<div class="cta-container">
    <div class="banner">
        <img src="<?php echo get_template_directory_uri() ?>/images/banner-page-contrate-nos.png" alt="Banner Contrate-nos">
    </div>
    <div class="content">
        <div class="header">
            <a href="<?php echo get_site_url(null, "/contrate-nos") ?>">
                <img class="logo d-none d-md-block" src="<?php echo get_template_directory_uri() ?>/images/logo-text.svg" alt="Logo Monkidev">
                <img class="logo d-block d-md-none" src="<?php echo get_template_directory_uri() ?>/images/logo-text-mobile.svg" alt="Logo Monkidev">
            </a>
        </div>
        <div class="text">
            <h1 class="title">
                Fazemos seu site,
                com <span>qualidade</span>!
            </h1>
            <p>
                A qualidade de um site vai além da sua parte visual,
                toda estruturação de código é de extrema importância
                para que ele proporcione uma boa experiência de uso e
                apareça no topo das pesquisas.
            </p>
        </div>
        <a class="cta-button" href="https://wa.me/558788589105" target="_blank">Solicitar site</a>
    </div>
</div>