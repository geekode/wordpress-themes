<?php
/**
 * Template pour les pages
 *
 * @package Artdigit_Blank
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="page-header">
        <?php the_title('<h1 class="page-title">', '</h1>'); ?>
    </header>

    <div class="page-content">
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'artdigit-blank'),
            'after'  => '</div>',
        ));
        ?>
    </div>
</article>