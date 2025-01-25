<?php
/**
 * Contact Info & Form section for the Contact page
 *
 * @package Mon_Theme_Custom
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- ================== CONTACT INFO SECTION START ================== -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0rem","bottom":"0px"},"padding":{"right":"20px","left":"20px","top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:0px;padding-top:6rem;padding-right:20px;padding-bottom:6rem;padding-left:20px">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
    <div
        class="wp-block-columns"
        style="
            margin-top:var(--wp--preset--spacing--50);
            margin-bottom:var(--wp--preset--spacing--50);
        "
    >
        <!-- ========== COLONNE GAUCHE ========== -->
        <!-- wp:column {"style":{"spacing":{"padding":{"right":"150px"}}}} -->
        <div class="wp-block-column" style="padding-right:150px">
            <!-- wp:heading {"style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"12px"}},"color":{"text":"#1e293b"}}} -->
            <h2
                class="wp-block-heading has-text-color"
                style="
                    color:#1e293b;
                    padding-bottom:12px;
                    font-size:35px;
                    font-style:normal;
                    font-weight:500;
                "
            >
                You can find us at
            </h2>
            <!-- /wp:heading -->

            <!-- 
               ====== PHONE ====== 
               Icon replaced with https://placehold.co/46x46
            -->
            <!-- wp:group {"style":{"spacing":{"margin":{"top":"30px","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
            <div
                class="wp-block-group"
                style="margin-top:30px;margin-bottom:var(--wp--preset--spacing--30)"
            >
                <!-- wp:image {"width":"46px","height":"46px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"margin":{"right":"0","left":"0"}}}} -->
                <figure
                    class="wp-block-image size-full is-resized has-custom-border is-style-default"
                    style="margin-right:0;margin-left:0"
                >
                    <img
                        src="https://placehold.co/46x46"
                        alt="Phone Icon"
                        style="
                            border-style:none;
                            border-width:0px;
                            border-radius:100px;
                            object-fit:cover;
                            width:46px;
                            height:46px;
                        "
                    />
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#1e293b"},"elements":{"link":{"color":{"text":"#1e293b"}}}}} -->
                    <h5
                        class="wp-block-heading has-text-color has-link-color"
                        style="color:#1e293b;font-size:20px;font-style:normal;font-weight:500"
                    >
                        PHONE
                    </h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#334155"},"elements":{"link":{"color":{"text":"#334155"}}}}} -->
                    <p
                        class="has-text-color has-link-color"
                        style="color:#334155;font-size:16px"
                    >
                        +123 456 7890
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- 
               ====== EMAIL ====== 
               Icon replaced with https://placehold.co/46x46
            -->
            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
            <div
                class="wp-block-group"
                style="margin-bottom:var(--wp--preset--spacing--30)"
            >
                <!-- wp:image {"width":"46px","height":"46px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                <figure
                    class="wp-block-image size-full is-resized has-custom-border is-style-default"
                >
                    <img
                        src="https://placehold.co/46x46"
                        alt="Email Icon"
                        style="
                            border-style:none;
                            border-width:0px;
                            border-radius:100px;
                            object-fit:cover;
                            width:46px;
                            height:46px;
                        "
                    />
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#1e293b"},"elements":{"link":{"color":{"text":"#1e293b"}}}}} -->
                    <h5
                        class="wp-block-heading has-text-color has-link-color"
                        style="color:#1e293b;font-size:20px;font-style:normal;font-weight:500"
                    >
                        EMAIL
                    </h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#334155"},"elements":{"link":{"color":{"text":"#334155"}}}}} -->
                    <p
                        class="has-text-color has-link-color"
                        style="color:#334155;font-size:16px"
                    >
                        email@website.com
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- 
               ====== ADDRESS ====== 
               Icon replaced with https://placehold.co/46x46
            -->
            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
            <div
                class="wp-block-group"
                style="margin-bottom:var(--wp--preset--spacing--30)"
            >
                <!-- wp:image {"width":"46px","height":"46px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                <figure
                    class="wp-block-image size-full is-resized has-custom-border is-style-default"
                >
                    <img
                        src="https://placehold.co/46x46"
                        alt="Address Icon"
                        style="
                            border-style:none;
                            border-width:0px;
                            border-radius:100px;
                            object-fit:cover;
                            width:46px;
                            height:46px;
                        "
                    />
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#1e293b"},"elements":{"link":{"color":{"text":"#1e293b"}}}}} -->
                    <h5
                        class="wp-block-heading has-text-color has-link-color"
                        style="color:#1e293b;font-size:20px;font-style:normal;font-weight:500"
                    >
                        ADDRESS
                    </h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#334155"},"elements":{"link":{"color":{"text":"#334155"}}}}} -->
                    <p
                        class="has-text-color has-link-color"
                        style="color:#334155;font-size:16px"
                    >
                        2727 Ocean Road, Malibu, CA, 90264
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"40px","bottom":"40px"}},"color":{"background":"#c9c9c945"}}} -->
            <hr
                class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide"
                style="margin-top:40px;margin-bottom:40px;background-color:#c9c9c945;color:#c9c9c945"
            />
            <!-- /wp:separator -->

            <!-- 
              Liens réseaux sociaux, placeholders pour icônes gérés par WP. 
            -->
            <!-- wp:social-links {"iconBackgroundColor":"custom-color-1","iconBackgroundColorValue":"#1e293b","openInNewTab":true,"className":"is-style-default","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
            <ul class="wp-block-social-links has-icon-background-color is-style-default">
                <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- ========== COLONNE DROITE : Formulaire ========== -->
        <!-- wp:column {"width":"55%"} -->
        <div class="wp-block-column" style="flex-basis:55%">
            <!-- wp:heading {"style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"12px"}},"color":{"text":"#1e293b"}}} -->
            <h2
                class="wp-block-heading has-text-color"
                style="
                    color:#1e293b;
                    padding-bottom:12px;
                    font-size:35px;
                    font-style:normal;
                    font-weight:500;
                "
            >
                Let us get in touch
            </h2>
            <!-- /wp:heading -->

            <!-- 
               Intégration du formulaire 
            -->
            <!-- wp:wpforms/form-selector {"clientId":"c76f3226-2ab7-4cc5-a7dd-742d64fe97be","formId":"","theme":"custom-copy-1-copy-2-copy-3","themeName":"Custom Theme (Copy 3)"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- ================== CONTACT INFO SECTION END ================== -->
