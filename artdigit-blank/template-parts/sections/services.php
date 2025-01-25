<?php
/**
 * Services Section
 *
 * @package Artdigit_Blank
 */
?>
<section class="wp-block-cover alignfull services-section">
    <div class="wp-block-cover__inner-container">
        <h2 class="wp-block-heading has-text-align-center">
            <?php echo esc_html(get_field('services_title') ?: 'Services Heading'); ?>
        </h2>

        <div class="wp-block-columns services-grid">
            <?php
            for ($i = 1; $i <= 3; $i++) :
                get_template_part('template-parts/components/cards', null, array(
                    'title' => get_field("service_{$i}_title") ?: "Service {$i}",
                    'description' => get_field("service_{$i}_desc") ?: 'Service description goes here',
                    'image' => get_field("service_{$i}_image") ?: 'https://picsum.photos/400/300',
                    'button_text' => get_field("service_{$i}_btn_text") ?: 'Learn More',
                    'button_link' => get_field("service_{$i}_btn_link") ?: '#'
                ));
            endfor;
            ?>
        </div>
    </div>
</section>