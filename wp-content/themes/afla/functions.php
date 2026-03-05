<?php
add_action( 'wp_enqueue_scripts', 'afla_enqueue_styles' );
function afla_enqueue_styles() {
    wp_enqueue_style( 'astra-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'afla-style', get_stylesheet_uri(), array( 'astra-style' ), '1.0.0' );
}

add_action( 'after_setup_theme', 'afla_register_patterns' );
function afla_register_patterns() {
    register_block_pattern_category( 'afla', array(
        'label' => __( 'AFLA', 'afla' ),
    ) );

    $patterns = array(
        'hero-vlogueuse',
        'section-vlog',
        'section-histoire',
        'section-instagram',
        'section-cta-newsletter',
    );

    foreach ( $patterns as $pattern ) {
        $file = get_stylesheet_directory() . '/patterns/' . $pattern . '.php';
        if ( ! file_exists( $file ) ) {
            continue;
        }

        $pattern_data = get_file_data( $file, array(
            'title'       => 'Title',
            'slug'        => 'Slug',
            'description' => 'Description',
            'categories'  => 'Categories',
        ) );

        ob_start();
        include $file;
        $content = ob_get_clean();

        // Supprime le bloc PHP d'en-tête du contenu
        $content = preg_replace( '/<\?php.*?\?>/s', '', $content );

        register_block_pattern( $pattern_data['slug'], array(
            'title'       => $pattern_data['title'],
            'slug'        => $pattern_data['slug'],
            'description' => $pattern_data['description'],
            'categories'  => array_map( 'trim', explode( ',', $pattern_data['categories'] ) ),
            'content'     => trim( $content ),
        ) );
    }
}
