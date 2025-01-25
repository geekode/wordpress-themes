<?php
/**
 * Footer base template part
 *
 * @package Artdigit_Blank
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
            </div><!-- #content -->

            <footer id="colophon" class="site-footer">
                <div class="footer-container">
                    <?php get_template_part('template-parts/footer/info'); ?>
                </div>
            </footer>
        </div><!-- #page -->

        <?php wp_footer(); ?>
    </body>
</html>