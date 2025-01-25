<?php
/**
 * Header base template part
 *
 * @package Artdigit_Blank
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php
    // Débogage des styles chargés
    global $wp_styles;
    if (defined('WP_DEBUG') && WP_DEBUG) {
        echo '<!-- Styles chargés :';
        foreach ($wp_styles->queue as $handle) {
            echo "\n" . $handle;
        }
        echo ' -->';
    }
    ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e('Skip to content', 'artdigit-blank'); ?>
        </a>

        <header id="masthead" class="site-header">
            <?php 
            get_template_part('template-parts/header/branding');
            get_template_part('template-parts/header/nav');
            ?>
        </header>

        <div id="content" class="site-content">