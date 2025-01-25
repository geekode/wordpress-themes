<?php
/**
 * Template pour le contenu de la page d'accueil
 *
 * @package Artdigit_Blank
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('home-content'); ?>>
    <?php
    // Sections de la page d'accueil
    get_template_part('template-parts/sections/hero');
    get_template_part('template-parts/sections/statistics');
    get_template_part('template-parts/sections/services');
    get_template_part('template-parts/sections/about');
    get_template_part('template-parts/sections/testimonial');
    get_template_part('template-parts/sections/contact-cta');
    ?>
</article>