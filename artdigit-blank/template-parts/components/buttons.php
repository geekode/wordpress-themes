<?php
/**
 * Button Component
 *
 * @package Artdigit_Blank
 */

$text = $args['text'] ?? 'Click Here';
$link = $args['link'] ?? '#';
$type = $args['type'] ?? 'primary';
$classes = 'wp-block-button__link wp-element-button';
?>

<div class="wp-block-button">
    <a href="<?php echo esc_url($link); ?>" 
       class="<?php echo esc_attr($classes); ?>"
       style="border-radius:3px;color:#ffffff;background-color:#1e293b;padding:15px 32px;font-size:16px;line-height:1">
        <?php echo esc_html($text); ?>
    </a>
</div>