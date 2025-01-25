<?php
/**
 * Enqueue scripts and styles
 *
 * @package Artdigit_Blank
 */

function artdigit_enqueue_scripts() {
    // Styles principaux
    wp_enqueue_style(
        'artdigit-style',
        get_template_directory_uri() . '/style.css',
        array(),
        ARTDIGIT_VERSION
    );

    wp_enqueue_style(
        'artdigit-main',
        ARTDIGIT_URI . '/assets/css/main.css',
        array('artdigit-style'),
        ARTDIGIT_VERSION
    );

    // Styles spécifiques à la page d'accueil
    if (is_front_page()) {
        wp_enqueue_style(
            'artdigit-home-style',
            ARTDIGIT_URI . '/assets/css/home.css',
            array('artdigit-main'),
            ARTDIGIT_VERSION
        );

        // Chargement des styles de sections et composants
        $styles = array(
            'sections/statistics',
            'sections/services',
            'sections/about',
            'sections/testimonial',
            'sections/contact-cta',
            'components/buttons',
            'components/cards'
        );

        foreach ($styles as $style) {
            wp_enqueue_style(
                'artdigit-' . str_replace('/', '-', $style),
                ARTDIGIT_URI . '/assets/css/' . $style . '.css',
                array('artdigit-home-style'),
                ARTDIGIT_VERSION
            );
        }
    }

    // Scripts
    wp_enqueue_script(
        'artdigit-main',
        ARTDIGIT_URI . '/assets/js/main.js',
        array('jquery'),
        ARTDIGIT_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'artdigit_enqueue_scripts');