<?php
/**
 * Title: Call to action
 * Slug: good-wine/special-offer
 * Categories: featured, cta
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri());?>/assets/images/tree-plant-grape-vineyard-wine-fruit-984789-pxhere.com.jpg","id":224,"dimRatio":50,"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
        <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-224" alt="" src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/tree-plant-grape-vineyard-wine-fruit-984789-pxhere.com.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","backgroundColor":"primary","textColor":"base","className":"is-style-gwn-discount has-primary-background-color has-background has-source-serif-pro-font-family has-x-large-font-size","fontSize":"large"} -->
                <p class="has-text-align-center is-style-gwn-discount has-primary-background-color has-background has-source-serif-pro-font-family has-x-large-font-size has-base-color has-text-color has-large-font-size"><?php echo esc_html( '20%', 'good-wine' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"base","fontSize":"large","fontFamily":"dancing-script"} -->
                <p class="has-text-align-center has-base-color has-text-color has-dancing-script-font-family has-large-font-size"><?php echo esc_html( 'Special Offer', 'good-wine' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center","textColor":"base","fontSize":"xx-large","fontFamily":"inter"} -->
                <p class="has-text-align-center has-base-color has-text-color has-inter-font-family has-xx-large-font-size"><?php echo esc_html( 'White Wines', 'good-wine' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base","className":"is-style-default","fontSize":"medium"} -->
                <p class="has-text-align-center is-style-default has-base-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--10)"><?php echo esc_html( '20% discount to the end of this month!', 'good-wine' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"textColor":"base"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#"><?php echo esc_html( 'Shop Now', 'good-wine' ); ?></a></div>
                    <!-- /wp:button --></div>
                <!-- /wp:buttons --></div></div>
        <!-- /wp:cover --></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->