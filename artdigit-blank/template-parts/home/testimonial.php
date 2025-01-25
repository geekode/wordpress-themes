<?php
/**
 * Testimonial section of the Front Page
 *
 * @package Mon_Theme_Custom
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- ================== TESTIMONIAL SECTION START ================== -->
<!-- wp:cover {"url":"https://placehold.co/4000","id":10,"overlayColor":"white","focalPoint":{"x":0.44,"y":0.61},"minHeight":50,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"7rem","right":"20px","left":"20px"}}},"layout":{"type":"constrained","contentSize":"850px","wideSize":"900px"}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:6rem;padding-right:20px;padding-bottom:7rem;padding-left:20px;min-height:50px">
    <span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-100 has-background-dim"></span>
    <img class="wp-block-cover__image-background wp-image-10" alt="" src="https://placehold.co/4000" style="object-position:44% 61%" data-object-fit="cover" data-object-position="44% 61%"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"35px","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"1.75rem"}},"color":{"text":"#334155"}}} -->
        <p class="has-text-align-center has-text-color" style="color:#334155;margin-bottom:1.75rem;font-size:35px;line-height:1.3">
            A comprehensive testimonial will be thoughtfully placed here, complete with all the compelling details and thoughtful insights.
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:image {"align":"center","id":72,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image aligncenter size-full is-resized">
            <img src="https://placehold.co/60" alt="" class="wp-image-72" style="object-fit:cover;width:60px;height:60px"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"16px","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"16px"},"color":{"text":"#334155"}}} -->
        <p class="has-text-align-center has-text-color" style="color:#334155;margin-top:16px;margin-bottom:0;font-size:16px;font-style:normal;font-weight:400">
            Full Name
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"},"color":{"text":"#334155"}}} -->
        <p class="has-text-align-center has-text-color" style="color:#334155;margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:300">
            Job Title
        </p>
        <!-- /wp:paragraph -->
    </div>
</div>
<!-- /wp:cover -->
<!-- ================== TESTIMONIAL SECTION END ================== -->
