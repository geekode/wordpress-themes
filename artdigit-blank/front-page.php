<?php
/**
 * The template for displaying the Front Page (Home)
 *
 * @package Mon_Theme_Custom
 */

get_header(); ?>

<main id="site-content">
    <?php
    // Section "Hero" (première cover)
    get_template_part( 'template-parts/home/hero' );

    // Section "Stats" (notre bloc de chiffres)
    get_template_part( 'template-parts/home/stats' );

    // Section "Services"
    get_template_part( 'template-parts/home/services' );

    // Section "About"
    get_template_part( 'template-parts/home/about' );

    // Section "Testimonial"
    get_template_part( 'template-parts/home/testimonial' );

    // Section "Contact CTA"
    get_template_part( 'template-parts/home/contact', 'cta' );
    ?>
</main><!-- #site-content -->

<?php get_footer(); ?>
