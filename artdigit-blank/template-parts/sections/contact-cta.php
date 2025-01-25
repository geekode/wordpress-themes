<?php
/**
 * Contact CTA Section
 *
 * @package Artdigit_Blank
 */
?>
<section class="wp-block-cover alignfull contact-cta-section">
    <div class="wp-block-cover__inner-container">
        <h2 class="wp-block-heading has-text-align-center">
            <?php echo esc_html(get_field('cta_title') ?: 'Talk To Us Heading'); ?>
        </h2>
        <p class="cta-description">
            <?php echo esc_html(get_field('cta_description') ?: 'Contact CTA description goes here'); ?>
        </p>
        <?php get_template_part('template-parts/components/buttons', null, array(
            'text' => get_field('cta_btn_text') ?: 'Contact Us',
            'link' => get_field('cta_btn_link') ?: '#',
            'type' => 'primary'
        )); ?>
    </div>
</section>