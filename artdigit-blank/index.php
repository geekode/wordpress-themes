<?php
/**
 * Fichier principal de fallback
 *
 * @package Mon_Theme_Custom
 */

get_header(); ?>

<main id="site-content">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            // Affiche le contenu de l’article ou de la page
            the_content();
        endwhile;
    else :
        echo '<p>' . __( 'Aucun contenu à afficher.', 'artdigit-blank' ) . '</p>';
    endif;
    ?>

</main><!-- #site-content -->

<?php get_footer(); ?>
