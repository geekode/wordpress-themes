<?php
/**
 * Story section (image + texte) for the About page
 *
 * @package Mon_Theme_Custom
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- ================== STORY SECTION START ================== -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:5rem;padding-bottom:5rem">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"2.01rem","left":"2.01rem","top":"2.01rem","bottom":"2.01rem"},"blockGap":{"top":"2.01rem","left":"4rem"},"margin":{"top":"0rem","bottom":"0rem"}}}} -->
    <div
        class="wp-block-columns alignwide"
        style="
            margin-top:0rem;
            margin-bottom:0rem;
            padding-top:2.01rem;
            padding-right:2.01rem;
            padding-bottom:2.01rem;
            padding-left:2.01rem;
        "
    >
        <!-- ========== COLONNE 1 : Image ========== -->
        <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
        <div class="wp-block-column">
            <!-- wp:image {"id":14751,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
                <img
                    src="https://tyler.com/wp-content/uploads/2024/02/About-1024x812-1.png"
                    alt=""
                    class="wp-image-14751"
                />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- ========== COLONNE 2 : Titre + Texte + Bouton ========== -->
        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"1.01rem","padding":{"right":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
        <div
            class="wp-block-column is-vertically-aligned-center"
            style="padding-right:0px;padding-left:0px"
        >
            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"#1e293b"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"500"}}} -->
            <h2
                class="wp-block-heading has-text-color"
                style="color:#1e293b;margin-top:0;margin-bottom:0;font-size:40px;font-style:normal;font-weight:500"
            >
                About Heading
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"50px","top":"20px"}},"color":{"text":"#334155"},"typography":{"fontSize":"16px"}}} -->
            <p
                class="has-text-color"
                style="color:#334155;margin-top:20px;margin-bottom:50px;font-size:16px"
            >
                About Text: In this section, you can provide a detailed paragraph that
                delves into the history, values, and mission of your web development
                business. Highlight expertise, unique approach of your team, and the
                commitment that sets you apart. Emphasize your passion for creating
                exceptional web solutions and convey your dedication to delivering
                remarkable results for clients.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"spacing":{"padding":{"left":"32px","right":"32px","top":"15px","bottom":"15px"}},"typography":{"lineHeight":"1","fontSize":"16px"},"color":{"background":"#1e293b","text":"#ffffff"},"border":{"radius":"3px"}}} -->
                <div
                    class="wp-block-button has-custom-font-size"
                    style="font-size:16px;line-height:1"
                >
                    <a
                        class="wp-block-button__link has-text-color has-background wp-element-button"
                        style="
                            border-radius:3px;
                            color:#ffffff;
                            background-color:#1e293b;
                            padding-top:15px;
                            padding-right:32px;
                            padding-bottom:15px;
                            padding-left:32px;
                        "
                    >
                        CTA Button
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- ================== STORY SECTION END ================== -->
