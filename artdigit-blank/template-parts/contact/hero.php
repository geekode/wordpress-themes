<?php
/**
 * Hero section for the Contact page
 *
 * @package Mon_Theme_Custom
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Sécurité
}
?>

<!-- ================== HERO SECTION START ================== -->
<!-- 
  On remplace l'image de fond (bg.png) par un placeholder 1920×455 (pour un full width).
-->
<!-- wp:cover {"url":"https://placehold.co/1920x455","dimRatio":0,"focalPoint":{"x":0.5,"y":0.51},"minHeight":455,"minHeightUnit":"px","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"30px"}},"layout":{"type":"constrained","contentSize":"850px","wideSize":"900px"}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:0;padding-bottom:0;min-height:455px">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <img
        class="wp-block-cover__image-background"
        alt=""
        src="https://placehold.co/1920x455"
        style="object-position:50% 51%"
        data-object-fit="cover"
        data-object-position="50% 51%"
    />
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"80px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#1e293b"},"elements":{"link":{"color":{"text":"#1e293b"}}}}} -->
        <h1
            class="wp-block-heading has-text-align-center has-text-color has-link-color"
            style="color:#1e293b;font-size:80px;font-style:normal;font-weight:500"
        >
            Contact
        </h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#334155"},"elements":{"link":{"color":{"text":"#334155"}}},"typography":{"fontSize":"16px"}}} -->
        <p
            class="has-text-align-center has-text-color has-link-color"
            style="color:#334155;font-size:16px"
        >
            Subheading: Craft a compelling subheading that sparks curiosity.
        </p>
        <!-- /wp:paragraph -->
    </div>
</div>
<!-- /wp:cover -->
<!-- ================== HERO SECTION END ================== -->
