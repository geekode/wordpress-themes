<?php
/**
 * Team section for the About page
 *
 * @package Mon_Theme_Custom
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- ================== TEAM SECTION START ================== -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-bottom:5rem">
    <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#1e293b"},"typography":{"fontSize":"40px","fontWeight":"500"},"spacing":{"margin":{"bottom":"50px"}}}} -->
    <h2
        class="wp-block-heading has-text-align-center has-text-color"
        style="color:#1e293b;font-size:40px;font-weight:500;margin-bottom:50px"
    >
        Our Team
    </h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
    <div class="wp-block-columns alignwide">
        <!-- ========== COLONNE 1 ========== -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"width":150,"height":150,"linkDestination":"none"} -->
            <figure class="wp-block-image is-resized">
                <img
                    src="https://placehold.co/150"
                    alt="Team Member"
                    style="width:150px;height:150px;object-fit:cover"
                />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">Jane Doe</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">
                Developer - Short description about the team member.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"border":{"radius":"3px"},"color":{"background":"#1e293b","text":"#ffffff"}}} -->
                <div class="wp-block-button">
                    <a
                        class="wp-block-button__link has-text-color has-background"
                        style="border-radius:3px;background-color:#1e293b;color:#ffffff"
                        href="#"
                    >
                        Facebook
                    </a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"border":{"radius":"3px"},"color":{"background":"#1e293b","text":"#ffffff"}}} -->
                <div class="wp-block-button">
                    <a
                        class="wp-block-button__link has-text-color has-background"
                        style="border-radius:3px;background-color:#1e293b;color:#ffffff"
                        href="#"
                    >
                        Twitter
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- ========== COLONNE 2 ========== -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"width":150,"height":150,"linkDestination":"none"} -->
            <figure class="wp-block-image is-resized">
                <img
                    src="https://via.placeholder.com/150"
                    alt="Team Member"
                    style="width:150px;height:150px;object-fit:cover"
                />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">John Smith</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">
                Designer - Brief description about the team member.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"border":{"radius":"3px"},"color":{"background":"#1e293b","text":"#ffffff"}}} -->
                <div class="wp-block-button">
                    <a
                        class="wp-block-button__link has-text-color has-background"
                        style="border-radius:3px;background-color:#1e293b;color:#ffffff"
                        href="#"
                    >
                        Linkedin
                    </a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"border":{"radius":"3px"},"color":{"background":"#1e293b","text":"#ffffff"}}} -->
                <div class="wp-block-button">
                    <a
                        class="wp-block-button__link has-text-color has-background"
                        style="border-radius:3px;background-color:#1e293b;color:#ffffff"
                        href="#"
                    >
                        Instagram
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- ========== COLONNE 3 ========== -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"width":150,"height":150,"linkDestination":"none"} -->
            <figure class="wp-block-image is-resized">
                <img
                    src="https://placehold.co/150"
                    alt="Team Member"
                    style="width:150px;height:150px;object-fit:cover"
                />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">Emily Green</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">
                Marketing - Quick intro about the person.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"border":{"radius":"3px"},"color":{"background":"#1e293b","text":"#ffffff"}}} -->
                <div class="wp-block-button">
                    <a
                        class="wp-block-button__link has-text-color has-background"
                        style="border-radius:3px;background-color:#1e293b;color:#ffffff"
                        href="#"
                    >
                        Twitter
                    </a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"border":{"radius":"3px"},"color":{"background":"#1e293b","text":"#ffffff"}}} -->
                <div class="wp-block-button">
                    <a
                        class="wp-block-button__link has-text-color has-background"
                        style="border-radius:3px;background-color:#1e293b;color:#ffffff"
                        href="#"
                    >
                        Dribbble
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
<!-- ================== TEAM SECTION END ================== -->
