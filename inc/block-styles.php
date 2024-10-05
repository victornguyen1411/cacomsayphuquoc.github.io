<?php
/**
 * Good Wine registers a new block styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Good Wine
 * @since 1.0
 */
if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'gwn-discount',
            'label'        => __( 'Discount', 'good-wine' ),
        )
    );

    register_block_style(
        'core/cover',
        array(
            'name'         => 'gwn-normal',
            'label'        => __( 'Normal', 'good-wine' ),
            'is_default'   => true,
            'inline_style' => '.wp-block-quote.is-style-gwn-normal { min-height: 350px; }',
        )
    );

    register_block_style(
        'core/navigation',
        array(
            'name'         => 'gwn-w100',
            'label'        => __( '100% Width', 'good-wine' ),
        )
    );

    register_block_style(
        'woocommerce/all-products',
        array(
            'name'         => 'gwn-product-borders',
            'label'        => __( 'Borders', 'good-wine' ),
        )
    );
}