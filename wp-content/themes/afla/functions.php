<?php
add_action( 'wp_enqueue_scripts', 'afla_enqueue_styles' );
function afla_enqueue_styles() {
    wp_enqueue_style( 'astra-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'afla-style', get_stylesheet_uri(), array( 'astra-style' ), '1.0.0' );
}

add_action( 'init', 'afla_register_pattern_category' );
function afla_register_pattern_category() {
    register_block_pattern_category( 'afla', array(
        'label' => __( 'AFLA', 'afla' ),
    ) );
}
