<?php
function myportfolio_enqueue_styles() {
    wp_enqueue_style( 'myportfolio-style', get_stylesheet_uri("/css/index-style.css") );
}
add_action( 'wp_enqueue_scripts', 'myportfolio_enqueue_styles' );
function myportfolio_enqueue_scripts() {
    wp_enqueue_script( 'myportfolio-main-js', get_template_directory_uri() . '/javascript/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'myportfolio_enqueue_scripts' );


// @TODO Add a custom post type for portfolio items
function myportfolio_widgets_init() {
    register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'main-sidebar',
        'description'   => 'Widgets added here will appear in all pages.',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'myportfolio_widgets_init' );
?>
