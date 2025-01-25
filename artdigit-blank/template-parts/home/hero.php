<?php
/**
 * Hero section of the Front Page
 *
 * @package Mon_Theme_Custom
 */

// Sécurité : empêche l’accès direct
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- ================== HERO SECTION START ================== -->
<!-- wp:cover {"url":"https://placehold.co/4000","id":14750,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.51},"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:100vh">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <img class="wp-block-cover__image-background wp-image-14750" alt="" src="https://placehold.co/4000" style="object-position:50% 51%" data-object-fit="cover" data-object-position="50% 51%"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#1e293b"},"elements":{"link":{"color":{"text":"#1e293b"}}}}} -->
        <h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#1e293b;font-size:40px;font-style:normal;font-weight:500">Add a Subheading</h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"80px","fontStyle":"normal","fontWeight":"500","lineHeight":"0.8"},"color":{"text":"#1e293b"},"elements":{"link":{"color":{"text":"#1e293b"}}}}} -->
        <h1 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#1e293b;font-size:80px;font-style:normal;font-weight:500;line-height:0.8">H1 Heading</h1>
        <!-- /wp:heading -->

        <!-- wp:group {"layout":{"type":"constrained","contentSize":"550px"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"50px","top":"45px"}},"typography":{"fontSize":"16px"},"color":{"text":"#334155"},"elements":{"link":{"color":{"text":"#334155"}}}}} -->
            <p class="has-text-align-center has-text-color has-link-color" style="color:#334155;margin-top:45px;margin-bottom:50px;font-size:16px">
                Create a compelling and attention-grabbing short description<br>that sparks curiosity and leaves readers intrigued.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"style":{"spacing":{"padding":{"left":"32px","right":"32px","top":"15px","bottom":"15px"}},"typography":{"lineHeight":"1","fontSize":"16px"},"color":{"background":"#1e293b","text":"#ffffff"},"border":{"radius":"3px"}}} -->
            <div class="wp-block-button has-custom-font-size" style="font-size:16px;line-height:1">
                <a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:3px;color:#ffffff;background-color:#1e293b;padding-top:15px;padding-right:32px;padding-bottom:15px;padding-left:32px">CTA Button</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->
<!-- ================== HERO SECTION END ================== -->
