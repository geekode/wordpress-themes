<?php
/**
 * Template Name: Home Page
 *
 * @package Artdigit_Blank
 */

get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        
        // Charge le contenu principal de la page
        get_template_part('template-parts/content/page');
        
        // Charge les sections spécifiques de la page d'accueil
        get_template_part('template-parts/sections/hero');
        get_template_part('template-parts/sections/statistics');
        get_template_part('template-parts/sections/services');
        get_template_part('template-parts/sections/about');
        get_template_part('template-parts/sections/testimonial');
        get_template_part('template-parts/sections/contact-cta');

    endwhile;
else :
    get_template_part('template-parts/content/none');
endif;

get_footer();