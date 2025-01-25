<?php
/**
 * Template principal
 *
 * @package Artdigit_Blank
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                
                if (is_front_page()) {
                    get_template_part('template-parts/content/home');
                } elseif (is_single()) {
                    get_template_part('template-parts/content/single');
                } elseif (is_page()) {
                    get_template_part('template-parts/content/page');
                } else {
                    get_template_part('template-parts/content/excerpt');
                }
                
            endwhile;

            the_posts_navigation(array(
                'prev_text' => __('Articles précédents', 'artdigit-blank'),
                'next_text' => __('Articles suivants', 'artdigit-blank'),
            ));
            
        else:
            get_template_part('template-parts/content/none');
        endif;
        ?>
    </div>
</main>

<?php
get_footer();