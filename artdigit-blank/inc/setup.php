<?php
/**
 * Theme setup functions
 *
 * @package Artdigit_Blank
 */

function artdigit_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'artdigit-blank'),
        'footer'  => __('Menu Footer', 'artdigit-blank'),
    ));

    add_theme_support('custom-logo', array(
        'height'      => 70,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'artdigit_setup');