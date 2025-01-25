<?php
/**
 * Template Name: Contact
 * Description: Page de contact découpée en plusieurs partials (hero, infos + formulaire, map).
 *
 * @package Mon_Theme_Custom
 */

get_header(); ?>

<main id="site-content">

    <?php
    // 1) Section Hero
    get_template_part( 'template-parts/contact/hero' );

    // 2) Section Contact Info & Form
    get_template_part( 'template-parts/contact/info');
    //get_template_part( 'template-parts/contact/contact', 'info' );

    // 3) Section Map
    get_template_part( 'template-parts/contact/map' );
    ?>

</main>

<?php get_footer();
