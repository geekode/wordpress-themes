<?php
/**
 * Hero component
 *
 * @package Artdigit_Blank
 */

function artdigit_render_hero($args = array()) {
    $defaults = array(
        'title' => get_field('hero_title') ?: 'H1 Heading',
        'subtitle' => get_field('hero_subtitle') ?: 'Add a Subheading',
        'description' => get_field('hero_description') ?: 'Create a compelling and attention-grabbing short description that sparks curiosity and leaves readers intrigued.',
        'button_text' => get_field('hero_button_text') ?: 'CTA Button',
        'button_link' => get_field('hero_button_link') ?: '#',
        'background_image' => get_field('hero_background') ?: 'https://picsum.photos/1920/1080'
    );
    
    $params = wp_parse_args($args, $defaults);
    ?>
    
    <div class="wp-block-cover alignfull is-light" style="min-height:100vh">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url($params['background_image']); ?>" data-object-fit="cover">
        <div class="wp-block-cover__inner-container">
            <h2 class="wp-block-heading has-text-align-center" style="color:#1e293b;font-size:40px;font-style:normal;font-weight:500">
                <?php echo esc_html($params['subtitle']); ?>
            </h2>
            
            <h1 class="wp-block-heading has-text-align-center" style="color:#1e293b;font-size:80px;font-style:normal;font-weight:500;line-height:0.8">
                <?php echo esc_html($params['title']); ?>
            </h1>
            
            <div class="wp-block-group">
                <p class="has-text-align-center" style="color:#334155;margin-top:45px;margin-bottom:50px;font-size:16px">
                    <?php echo esc_html($params['description']); ?>
                </p>
            </div>
            
            <div class="wp-block-buttons">
                <div class="wp-block-button">
                    <a href="<?php echo esc_url($params['button_link']); ?>" class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:3px;color:#ffffff;background-color:#1e293b;padding:15px 32px;font-size:16px;line-height:1">
                        <?php echo esc_html($params['button_text']); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}