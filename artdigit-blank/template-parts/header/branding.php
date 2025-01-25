<?php
/**
 * Site branding template part
 *
 * @package Artdigit_Blank
 */
?>
<div class="site-branding">
    <div class="branding-container">
        <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <p class="site-description">
                <?php bloginfo('description'); ?>
            </p>
        <?php endif; ?>
    </div>
</div>