<?php
/**
 * Footer information template part
 *
 * @package Artdigit_Blank
 */
?>
<div class="site-info">
    <div class="info-container">
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
            <?php esc_html_e('Tous droits réservés.', 'artdigit-blank'); ?></p>
        </div>

        <?php if (has_nav_menu('footer')) : ?>
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'footer-menu',
                    'container' => false,
                    'depth' => 1,
                ));
                ?>
            </nav>
        <?php endif; ?>
    </div>
</div>