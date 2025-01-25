<?php
/**
 * Fonctions du thème
 *
 * @package Mon_Theme_Custom
 */

// Sécurité : empêche l’accès direct au fichier
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Configuration de base du thème
 */
function mon_theme_custom_setup() {
    // Permet à WordPress de gérer le <title> (balise <title>)
    add_theme_support( 'title-tag' );

    // Permet de gérer les images à la Une (featured images)
    add_theme_support( 'post-thumbnails' );

    // Enregistre un menu principal
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'mon-theme-custom' ),
    ) );

    // Ajoute un logo personnalisé
    add_theme_support( 'custom-logo', array(
        'height'      => 70,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'mon_theme_custom_setup' );

/**
 * Chargement des styles et scripts
 */
function mon_theme_custom_scripts() {
    // Chargement de la feuille de style principale
    wp_enqueue_style(
        'mon-theme-custom-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_template_directory() . '/style.css' ) // Pour éviter le cache en dev
    );

    // Tu peux également charger des scripts JS si besoin, par exemple :
    // wp_enqueue_script(
    //     'mon-theme-custom-script',
    //     get_template_directory_uri() . '/assets/js/main.js',
    //     array( 'jquery' ),
    //     '1.0',
    //     true
    // );
}
add_action( 'wp_enqueue_scripts', 'mon_theme_custom_scripts' );
