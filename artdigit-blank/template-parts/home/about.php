<?php
/**
 * About section of the Front Page
 *
 * @package Mon_Theme_Custom
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- ================== ABOUT SECTION START ================== -->
<!-- wp:group {"align":"full","style":{"color":{"background":"#f1f2f8"},"spacing":{"padding":{"top":"5rem","bottom":"5rem","right":"20px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f1f2f8;padding-top:5rem;padding-right:20px;padding-bottom:5rem;padding-left:20px">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"2.01rem","left":"2.01rem","top":"2.01rem","bottom":"2.01rem"},"blockGap":{"top":"2.01rem","left":"0rem"},"margin":{"top":"0rem","bottom":"0rem"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:0rem;margin-bottom:0rem;padding-top:2.01rem;padding-right:2.01rem;padding-bottom:2.01rem;padding-left:2.01rem">
        <!-- ========== Col 1 ========== -->
        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"1.01rem","padding":{"right":"50px","left":"10px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-right:50px;padding-left:10px">
            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"#1e293b"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"500"}}} -->
            <h2 class="wp-block-heading has-text-color" style="color:#1e293b;margin-top:0;margin-bottom:0;font-size:40px;font-style:normal;font-weight:500">About Heading</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"50px","top":"20px"}},"color":{"text":"#334155"},"typography":{"fontSize":"16px"}}} -->
            <p class="has-text-color" style="color:#334155;margin-top:20px;margin-bottom:50px;font-size:16px">
                About Text: In this section, you can provide a detailed paragraph that delves into the history, values, and mission of your web development business. Highlight expertise, unique approach of your team, and the commitment that sets you apart. Emphasize your passion for creating exceptional web solutions and convey your dedication to delivering remarkable results for clients.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"spacing":{"padding":{"left":"32px","right":"32px","top":"15px","bottom":"15px"}},"typography":{"lineHeight":"1","fontSize":"16px"},"color":{"background":"#1e293b","text":"#ffffff"},"border":{"radius":"3px"}}} -->
                <div class="wp-block-button has-custom-font-size" style="font-size:16px;line-height:1">
                    <a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:3px;color:#ffffff;background-color:#1e293b;padding-top:15px;padding-right:32px;padding-bottom:15px;padding-left:32px">CTA Button</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- ========== Col 2 ========== -->
        <!-- wp:column {"width":"","layout":{"type":"default"}} -->
        <div class="wp-block-column">
            <!-- wp:image {"id":14751,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
                <img src="https://placehold.co/1024" alt="" class="wp-image-14751"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- ================== ABOUT SECTION END ================== -->
