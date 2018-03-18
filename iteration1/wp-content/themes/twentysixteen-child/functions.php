<?php
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-slick',
        get_stylesheet_directory_uri() . '/slick/slick.css');
    wp_enqueue_style( 'child-font-awesome',
        get_stylesheet_directory_uri() . '/fonts/font-awesome.css');
    wp_enqueue_style( 'child-bootstrap',
        get_stylesheet_directory_uri() . '/css/bootstrap.css');
     wp_enqueue_style( 'child-hamburger',
        get_stylesheet_directory_uri() . '/css/hamburger.css');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/css/custom-style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script( 'slick_js', get_stylesheet_directory_uri() . '/slick/slick.js',
     array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.js',
     array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/js/custom.js',
     array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



?>

