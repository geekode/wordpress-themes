<?php
/**
 * Statistics Section
 *
 * @package Artdigit_Blank
 */
?>
<section class="wp-block-group alignfull statistics-section">
    <div class="wp-block-group statistics-container">
        <div class="wp-block-columns statistics-grid">
            <?php
            $statistics = array(
                array(
                    'value' => get_field('stat_1_value') ?: '95%',
                    'description' => get_field('stat_1_desc') ?: 'highlight key statistics by adding them here*'
                ),
                array(
                    'value' => get_field('stat_2_value') ?: '85%',
                    'description' => get_field('stat_2_desc') ?: 'highlight key statistics by adding them here*'
                ),
                array(
                    'value' => get_field('stat_3_value') ?: '90%',
                    'description' => get_field('stat_3_desc') ?: 'highlight key statistics by adding them here*'
                )
            );

            foreach ($statistics as $stat) : ?>
                <div class="wp-block-column statistic-item">
                    <h2 class="wp-block-heading has-text-align-center"><?php echo esc_html($stat['value']); ?></h2>
                    <p class="has-text-align-center"><?php echo esc_html($stat['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>