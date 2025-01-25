<?php
/**
 * Testimonial Section
 *
 * @package Artdigit_Blank
 */
?>
<section class="wp-block-cover alignfull testimonial-section">
    <div class="wp-block-cover__inner-container">
        <p class="testimonial-quote">
            <?php echo esc_html(get_field('testimonial_text') ?: 'Testimonial text goes here'); ?>
        </p>
        <div class="testimonial-author">
            <img src="<?php echo esc_url(get_field('testimonial_avatar') ?: 'https://picsum.photos/60/60'); ?>" alt="Author" class="author-avatar">
            <p class="author-name"><?php echo esc_html(get_field('testimonial_author') ?: 'Full Name'); ?></p>
            <p class="author-title"><?php echo esc_html(get_field('testimonial_position') ?: 'Job Title'); ?></p>
        </div>
    </div>
</section>