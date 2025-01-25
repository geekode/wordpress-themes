<?php
/**
 * Navigation template part
 *
 * @package Artdigit_Blank
 */
?>
<nav id="site-navigation" class="main-navigation">
    <div class="nav-container">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="menu-toggle-text"><?php esc_html_e('Menu', 'artdigit-blank'); ?></span>
        </button>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_id' => 'primary-menu',
            'container' => false,
            'menu_class' => 'primary-menu'
        ));
        ?>
    </div>
</nav>