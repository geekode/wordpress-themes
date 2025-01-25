<?php
/**
 * Template Name: Artdigit Blank: About
 * Description: Page personnalisée pour la section "About" avec 4 partials (hero, story, team, values).
 *
 * @package Artdigit Blank
 */

get_header(); ?>

<main id="site-content">

    <?php
    // 1) Section Hero (couverture + gros titre "About")
    get_template_part( 'template-parts/about/hero' );

    // 2) Section Story (grande colonne image + colonne texte)
    get_template_part( 'template-parts/about/story' );

    // 3) Section Team (liste des membres avec avatars et boutons réseaux)
    get_template_part( 'template-parts/about/team' );

    // 4) Section Values (nos valeurs, sous forme de liste)
    get_template_part( 'template-parts/about/values' );
    ?>

</main><!-- #site-content -->

<?php get_footer(); ?>
