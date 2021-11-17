<?php

/**
 * Template Name: Page Home
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Monkidev
 * @since Monkidev Monkidev 1.0
 */

get_header();

$query = new WP_Query(['post_type' => 'page', 'pagename' => 'home']);
if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
        $data = get_post_meta(get_the_ID());
        $image = get_field('image');
        $size = 'full';
?>
        <div class="container info py-5" id='about'>
            <div class="row align-items-center">
                <div data-aos-duration="2000" data-aos="fade-up" class="col-12 mt-5">
                    <?php the_content() ?>
                </div>
                <div data-aos-duration="1500" data-aos="fade-right" class="col-12 col-lg-6 text-center">
                    <img src="<?php echo $image['url'] ?>" alt="Desenvolvimento Web">
                </div>
                <div class="col-12 col-lg-6 text-center text-lg-start">
                    <h2 data-aos-duration="1500" data-aos="fade-down"><?php echo $data['title'][0] ?></h2>
                    <p data-aos-duration="1500" data-aos="fade-up">
                        <?php echo $data['description'][0] ?>
                    </p>
                </div>

            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>


<?php

// $args_social_links = [
//     [
//         'name' => 'Discord',
//         'icon' => 'fab fa-discord',
//         'link' => 'https://discord.gg/TMQ5KzU'
//     ],
//     [
//         'name' => 'Whatsapp',
//         'icon' => 'fab fa-whatsapp',
//         'link' => 'https://chat.whatsapp.com/FnPPQmzXepgDFJer12SYD5'
//     ],
//     [
//         'name' => 'Telegram',
//         'icon' => 'fab fa-telegram',
//         'link' => 'https://t.me/joinchat/TvD4ikm5iINjMDcx'
//     ],
//     [
//         'name' => 'Instagram',
//         'icon' => 'fab fa-instagram',
//         'link' => 'https://instagram.com/monkidev'
//     ]
// ];
// get_template_part('components/social-links', 'social-links', $args_social_links)
?>

<?php get_footer() ?>