<?php
/**
 * Card Component
 *
 * @package Artdigit_Blank
 */

$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$image = $args['image'] ?? '';
$button_text = $args['button_text'] ?? '';
$button_link = $args['button_link'] ?? '#';
?>

<div class="wp-block-column service-card">
    <figure class="card-image">
        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
    </figure>
    <h4 class="card-title">
        <?php echo esc_html($title); ?>
    </h4>
    <p class="card-description">
        <?php echo esc_html($description); ?>
    </p>
    <?php get_template_part('template-parts/components/buttons', null, array(
        'text' => $button_text,
        'link' => $button_link,
        'type' => 'outline'
    )); ?>
</div>