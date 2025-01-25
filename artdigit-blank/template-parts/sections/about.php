<?php
/**
 * About Section
 *
 * @package Artdigit_Blank
 */
?>
<section class="wp-block-group alignfull about-section">
    <div class="wp-block-columns about-container">
        <div class="wp-block-column about-content">
            <h2 class="wp-block-heading">
                <?php echo esc_html(get_field('about_title') ?: 'About Heading'); ?>
            </h2>
            <p class="about-description">
                <?php echo esc_html(get_field('about_description') ?: 'About description goes here'); ?>
            </p>
            <?php get_template_part('template-parts/components/buttons', null, array(
                'text' => get_field('about_btn_text') ?: 'Learn More',
                'link' => get_field('about_btn_link') ?: '#',
                'type' => 'primary'
            )); ?>
        </div>
        <div class="wp-block-column about-image">
            <img src="<?php echo esc_url(get_field('about_image') ?: 'https://picsum.photos/800/600'); ?>" alt="About Image">
        </div>
    </div>
</section>