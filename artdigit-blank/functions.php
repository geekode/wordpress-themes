<?php
/**
 * Theme functions and definitions
 *
 * @package Artdigit_Blank
 */

// Security
if (!defined('ABSPATH')) {
    exit;
}

// Define constants
define('ARTDIGIT_VERSION', '1.0.0');
define('ARTDIGIT_DIR', get_template_directory());
define('ARTDIGIT_URI', get_template_directory_uri());

// Include core functionality
require_once ARTDIGIT_DIR . '/inc/setup.php';
require_once ARTDIGIT_DIR . '/inc/enqueue.php';
require_once ARTDIGIT_DIR . '/inc/template-tags.php';